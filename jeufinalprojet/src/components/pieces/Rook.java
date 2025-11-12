package components.pieces;

import java.awt.*;
import java.io.File;

import sample.moveSystem.*;

public class Rook extends Piece{
    /**
     *
     */
    private static final long serialVersionUID = 1L;

    public Rook(Color c) {
        super(c);
        String filename = (color.equals(Color.BLACK))? "brook.png":"wrook.png";
        imagePath = "images" + File.separator + filename;
        generalmove = new GeneralMove(new AllDirection(), new ThreeStepDisplacement());
    }

}
