package components.pieces;

import java.awt.*;
import java.io.File;

import sample.moveSystem.GeneralMove;
import sample.moveSystem.AllDirection;
import sample.moveSystem.MultipleStepDisplacement;

public class Queen extends Piece{
    /**
     *
     */
    private static final long serialVersionUID = 1L;

    public Queen(Color c) {
        super(c);
        String filename = (color.equals(Color.BLACK))? "bqueen.png":"wqueen.png";
        imagePath = "images" + File.separator + filename;
        generalmove = new GeneralMove(new AllDirection(), new MultipleStepDisplacement());
    }
}
