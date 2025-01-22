import javax.swing.*;
import java.util.*;
import java.io.*;
import javax.sound.sampled.*;
import static java.lang.System.out;

public class Main {
  public static void playSong(String l) {
    try {
      File file = new File(l);

      if (file.exists()) {
        AudioInputStream au = AudioSystem.getAudioInputStream(file);
        Clip clip = AudioSystem.getClip();
        clip.open(au);
        clip.start();
      } else {
        out.println("File not found.");
        return;
      }
    } catch (Exception e) {
      System.err.println(e.getMessage());
    }
  }

  public static void main(String[] args) {
    Scanner s = new Scanner(System.in);

    out.println("SONG PLAYER");
    out.println();

    out.println("SONG LIST");

    int chooseSong = 0;

    try {
      String songList[] = {
          "[1] - keshi - Soft Spot",
          "[2] - Joji - Sanctuary"
      };

      for (int i = 0; i < songList.length; i++) {
        out.println(songList[i]);

      }

      out.println();
      out.print("Song: ");
      chooseSong = s.nextInt();

    } catch (Exception e) {
      out.printf("Input not valid. [%s]", e);
    }

    out.println();
    String songPath = "";

    switch (chooseSong) {
      case 1:
        songPath = "audios/keshi - Soft Spot.wav";
        playSong(songPath);
        JOptionPane.showMessageDialog(null, "Keshi - Soft Spot Playing");
        break;

      case 2:
        songPath = "audios/Joji - Sanctuary.wav";
        playSong(songPath);
        JOptionPane.showMessageDialog(null, "Joji - Sanctuary Playing");
        break;
    }

    out.println("Song ended.");
  }
}
