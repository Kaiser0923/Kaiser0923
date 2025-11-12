package sample.moveSystem;

public class ThreeStepDisplacement implements Displacement{

    private static final long serialVersionUID = 1L;

    @Override
    public boolean isValidMove(Move m) {

        return Math.abs(m.getEnd().getX()-m.getStart().getX()) <= 3
                && Math.abs(m.getEnd().getY()-m.getStart().getY()) <= 3;
    }

    @Override
    public boolean equals(Object obj) {
        return obj instanceof SingleStepDisplacement;
    }
}
