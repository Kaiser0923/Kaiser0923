package components.pieces;

import java.awt.*;
import java.io.File;
import sample.moveSystem.GeneralMove;
import sample.moveSystem.LShapedDirection;
import sample.moveSystem.MultipleStepDisplacement;

public class Knight extends Piece {
    /**
     *
     */
    private static final long serialVersionUID = 1L;

    public Knight(Color c) {
        super(c);
        String filename = (color.equals(Color.BLACK))? "bknight.png":"wknight.png";
        imagePath = "images" + File.separator + filename;
        generalmove = new GeneralMove(new LShapedDirection(), new MultipleStepDisplacement());
    }
}
