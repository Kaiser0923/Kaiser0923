package components.pieces;

import java.awt.*;
import java.io.File;

import components.Board;

import sample.moveSystem.GeneralMove;
import sample.moveSystem.DoubleStepDisplacement;
import sample.moveSystem.Move;
import sample.moveSystem.PawnDirection;
import sample.moveSystem.SingleStepDisplacement;

public class Pawn extends Piece{
    private boolean moved = false;
    private boolean doubleStepped = false;

    public Pawn(Color c) {
        super(c);
        String filename = (color.equals(Color.BLACK))? "bpawn.png":"wpawn.png";
        imagePath = "images" + File.separator + filename;
        generalmove = new GeneralMove(new PawnDirection(), new DoubleStepDisplacement());
    }

    public void setMoved(){

        if(this.getNumberOfMoves()==0)
            moved=false;
        else {moved = true;
            generalmove = new GeneralMove(new PawnDirection(), new SingleStepDisplacement());}
    }
    public void setDoubleStepped(){
        doubleStepped = true;
        //setMoved();
    }

    public boolean hasMoved(){ return moved; }
    public boolean doubleStepped(){ return doubleStepped; }

    @Override
    public void executeMove(Move move, Board board) {

        super.executeMove(move, board);
        this.countMove();
        //setMoved();

        //if(new DoubleStepDisplacement().isValidMove(move)) setDoubleStepped();
    }
}
