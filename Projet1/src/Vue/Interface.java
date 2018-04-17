/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Vue;
import javax.swing.*;
import java.awt.*;
import java.awt.Color;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

/**
 *
 * @author Ghislain
 */
public class Interface extends JFrame implements ActionListener{
    
    private JPanel pan=new JPanel(); // panel general menu
    private JPanel panhaut=new JPanel(); //panel texte en haut
    private JPanel pancentre=new JPanel(); // panel au milieu
    private JPanel panbas=new JPanel(); // panel texte en bas
    private JPanel pangauche=new JPanel(); // image a gauche
    private JPanel pandroite=new JPanel(); // image a droite
    private JLabel bienvenue = new JLabel("Bienvenue dans la base de données de l'hôpital");
    private JLabel nom_utilisateur = new JLabel("Nom d'utilisateur : ");
    private JLabel mot_de_passe = new JLabel("Mot de Passe : ");
    private JTextField utilisateur = new JTextField(20);
    private JTextField mdp = new JTextField(20);
    private JRadioButton local=new JRadioButton("Connexion locale");
    private JRadioButton distance=new JRadioButton("Connexion à distance");
    private JButton bouton_ok = new JButton("OK");
    private JButton bouton_quitter = new JButton("Quitter");
    private JLabel textebas=new JLabel("par Ghislain Kicinski, Clément Robin et Amaury Le Normand");
    private JLabel hopital = new JLabel(new ImageIcon("images/hopital.bmp")); // images du menu
    private JLabel croix = new JLabel(new ImageIcon("images/croix.bmp"));
    public Interface (){ // constructeur
    setTitle ("Interface");
    setSize (900, 250);
    getContentPane().add(pan); // ajouter le panneau dans la fenêtre

    //Mise en page des panels :
    pan.setBackground(Color.BLUE);
    pan.setLayout(new BorderLayout()); // panel principal qui contient les autres
    pan.add(panhaut,BorderLayout.NORTH);
    pan.add(pancentre,BorderLayout.CENTER);
    pan.add(panbas,BorderLayout.SOUTH);
    pan.add(pangauche,BorderLayout.WEST);
    pan.add(pandroite,BorderLayout.EAST);
    panhaut.add(bienvenue);
    pancentre.setLayout(new GridLayout(4,2));
    pancentre.add(nom_utilisateur);
    pancentre.add(utilisateur);
    pancentre.add(mot_de_passe);
    pancentre.add(mdp);
    pancentre.add(local);
    pancentre.add(distance);
    pancentre.add(bouton_ok);
    pancentre.add(bouton_quitter);
    panbas.add(textebas);
    pangauche.add(hopital);
    pandroite.add(croix);
    setVisible(true); // fenetre visible
    }
    @Override
    public void actionPerformed(ActionEvent arg0) {      

  } 
}
