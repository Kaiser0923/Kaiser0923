package components.pieces;

import java.awt.*;
import java.io.File;

import sample.moveSystem.GeneralMove;
import sample.moveSystem.DiagonalDirection;
import sample.moveSystem.MultipleStepDisplacement;

public class Bishop extends Piece{
    /**
     *
     */
    private static final long serialVersionUID = 1L;

    public Bishop(Color c) {
        super(c);
        String filename = (color.equals(Color.BLACK))? "bbishop.png":"wbishop.png";
        imagePath = "images" + File.separator + filename;
        generalmove = new GeneralMove(new DiagonalDirection(), new MultipleStepDisplacement());
    }

}
