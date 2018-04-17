/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Vue;
import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

/**
 *
 * @author Ghislain
 */
public class Interface extends JFrame implements ActionListener{
    
    private JPanel pan=new JPanel();
    public Interface (){ // constructeur
    setTitle ("Interface");
    setSize (1920, 1080);
    getContentPane().add(pan); // ajouter le panneau dans la fenêtre
     }
    @Override
    public void actionPerformed(ActionEvent arg0) {      

  } 
}
