
package com.projet.game_4x.DAO;

import com.projet.game_4x.models.Joueur;
import com.projet.game_4x.models.Soldat;
import com.projet.game_4x.models.Tuile;

import java.sql.*;

public class JoueurDAO {

    private static final String URL = "jdbc:mysql://localhost:8889/game_4x";
    private static final String USER = "root";
    private static final String PASSWORD = "root";

    // Méthode pour inscrire un joueur dans la base de données
    public static boolean registerUsers(Joueur joueur) {
        String query = "INSERT INTO joueurs (login, mot_de_passe) VALUES (?, ?)";
        try (Connection connection = DriverManager.getConnection(URL, USER, PASSWORD);
             PreparedStatement statement = connection.prepareStatement(query)) {

            statement.setString(1, joueur.getLogin());
            statement.setString(2, joueur.getMotDePasse());

            return statement.executeUpdate() > 0;
        } catch (SQLException e) {
            e.printStackTrace();
            return false;
        }
    }

    // Méthode pour authentifier un joueur
    public static Joueur authenticateJoueur(Connection connection, String login, String password) throws SQLException {
        String joueurQuery = "SELECT id, score, points_de_production FROM joueurs WHERE login = ? AND mot_de_passe = ?";
        PreparedStatement joueurStmt = connection.prepareStatement(joueurQuery);
        joueurStmt.setString(1, login);
        joueurStmt.setString(2, password);

        ResultSet joueurResultSet = joueurStmt.executeQuery();
        if (joueurResultSet.next()) {
            Joueur joueur = new Joueur(
                    joueurResultSet.getInt("id"),
                    login,
                    password,
                    joueurResultSet.getInt("score"),
                    joueurResultSet.getInt("points_de_production")
            );

            // Charger les soldats du joueur
            String soldatsQuery = """
            SELECT s.id, s.position_tuile_id, t.x, t.y, s.points_de_vie, s.points_d_attaque, s.points_de_defense
            FROM soldats s
            JOIN tuiles t ON s.position_tuile_id = t.id
            WHERE s.proprietaire_id = ?
            """;
            PreparedStatement soldatsStmt = connection.prepareStatement(soldatsQuery);
            soldatsStmt.setInt(1, joueur.getId());
            ResultSet soldatsResultSet = soldatsStmt.executeQuery();

            while (soldatsResultSet.next()) {
                Soldat soldat = new Soldat(
                        soldatsResultSet.getInt("id"),
                        joueur,
                        new Tuile(
                                soldatsResultSet.getInt("position_tuile_id"),
                                "vide",
                                soldatsResultSet.getInt("x"),
                                soldatsResultSet.getInt("y"),
                                null,
                                0
                        ),
                        soldatsResultSet.getInt("points_de_vie"),
                        soldatsResultSet.getInt("points_d_attaque"),
                        soldatsResultSet.getInt("points_de_defense")
                );
                joueur.ajouterSoldat(soldat);
            }

            return joueur;
        }
        return null;
    }

    // Méthode pour inscrire un joueur et l'associer à une tuile
    public static String inscrireJoueur(Connection connection, String login, String password, Object carteIdObj) throws SQLException {
        String checkQuery = "SELECT id FROM joueurs WHERE login = ?";
        PreparedStatement checkStmt = connection.prepareStatement(checkQuery);
        checkStmt.setString(1, login);
        ResultSet resultSet = checkStmt.executeQuery();
        if (resultSet.next()) {
            return "Le login est déjà utilisé.";
        }

        String insertJoueurQuery = "INSERT INTO joueurs (login, mot_de_passe) VALUES (?, ?)";
        PreparedStatement insertJoueurStmt = connection.prepareStatement(insertJoueurQuery, Statement.RETURN_GENERATED_KEYS);
        insertJoueurStmt.setString(1, login);
        insertJoueurStmt.setString(2, password);
        insertJoueurStmt.executeUpdate();

        ResultSet generatedKeys = insertJoueurStmt.getGeneratedKeys();
        if (!generatedKeys.next()) {
            return "Erreur lors de la création du joueur.";
        }
        int joueurId = generatedKeys.getInt(1);

        if (carteIdObj == null) {
            return "La carte n'a pas été initialisée.";
        }
        int carteId = (int) carteIdObj;

        String findTuileQuery = """
            SELECT id 
            FROM tuiles 
            WHERE carte_id = ? 
            AND type = 'vide' 
            AND proprietaire_id IS NULL 
            LIMIT 1
        """;
        PreparedStatement findTuileStmt = connection.prepareStatement(findTuileQuery);
        findTuileStmt.setInt(1, carteId);
        ResultSet tuileResult = findTuileStmt.executeQuery();

        if (!tuileResult.next()) {
            return "Aucune tuile disponible pour le joueur.";
        }
        int tuileId = tuileResult.getInt("id");

        String updateTuileQuery = "UPDATE tuiles SET proprietaire_id = ? WHERE id = ?";
        PreparedStatement updateTuileStmt = connection.prepareStatement(updateTuileQuery);
        updateTuileStmt.setInt(1, joueurId);
        updateTuileStmt.setInt(2, tuileId);
        updateTuileStmt.executeUpdate();

        return "success";
    }

    // Méthode pour créer un soldat dans la base de données
    public static boolean creerSoldat(Connection connection, int joueurId, int tuileId) throws SQLException {
        // Vérification des points de production
        String checkProductionQuery = "SELECT points_de_production FROM joueurs WHERE id = ?";
        PreparedStatement checkProductionStmt = connection.prepareStatement(checkProductionQuery);
        checkProductionStmt.setInt(1, joueurId);
        ResultSet resultSet = checkProductionStmt.executeQuery();

        if (resultSet.next()) {
            int pointsDeProduction = resultSet.getInt("points_de_production");
            int coutRecrutement = 15;

            if (pointsDeProduction < coutRecrutement) {
                return false; // Pas assez de points de production
            }

            // Déduire les points de production
            String updateProductionQuery = "UPDATE joueurs SET points_de_production = points_de_production - ? WHERE id = ?";
            PreparedStatement updateProductionStmt = connection.prepareStatement(updateProductionQuery);
            updateProductionStmt.setInt(1, coutRecrutement);
            updateProductionStmt.setInt(2, joueurId);
            updateProductionStmt.executeUpdate();

            // Ajouter le soldat
            String insertSoldatQuery = "INSERT INTO soldats (proprietaire_id, position_tuile_id, points_de_vie, points_d_attaque, points_de_defense) VALUES (?, ?, 10, 5, 3)";
            PreparedStatement insertSoldatStmt = connection.prepareStatement(insertSoldatQuery);
            insertSoldatStmt.setInt(1, joueurId);
            insertSoldatStmt.setInt(2, tuileId);

            return insertSoldatStmt.executeUpdate() > 0;
        }
        return false;
    }

    // Méthode pour vérifier les points de production du joueur
    public static int getPointsDeProduction(Connection connection, int joueurId) throws SQLException {
        String query = "SELECT points_de_production FROM joueurs WHERE id = ?";
        PreparedStatement stmt = connection.prepareStatement(query);
        stmt.setInt(1, joueurId);
        ResultSet resultSet = stmt.executeQuery();

        if (resultSet.next()) {
            return resultSet.getInt("points_de_production");
        }
        return 0;
    }
}