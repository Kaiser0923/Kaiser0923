package sample.moveSystem;

import java.io.Serializable;

public interface Displacement extends Serializable{

    public boolean isValidMove(Move m);

}
