package Application;

import java.util.ArrayList;


public class Supervisor {
    private String name;
    private Double step;
    private ArrayList<Player> players = new ArrayList<>();
    public void playGame() {
        Boolean isFinished = false;
        while (!isFinished){
            //Chỉ dịnh ai chơi bước này: lấy ngẫu nhiên player1 -> player4
            step++;
            System.out.println("Step: "+step);
            Integer randomIndex = Helper.getRandomNumber(players.size());
            Player player = players.get(randomIndex);
            System.out.println(String.format("%s is playing ", player.getName()));
            isFinished = player.playDice();
        }
        return
    }

    public Supervisor(String name) {
        this.name = name;
    }

    public ArrayList<Player> getPlayers() {
        return players;
    }

    public void setPlayers(ArrayList<Player> players) {
        this.players = players;
    }

    @Override
    public String toString() {
        return "name:"+name;
    }
}