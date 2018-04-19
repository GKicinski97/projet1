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
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;
import jdbcv2018.Connexion;
import jdbcv2018.SSHTunnel;

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
    private ButtonGroup grp=new ButtonGroup();
    private JRadioButton local=new JRadioButton("Connexion locale");
    private JRadioButton distance=new JRadioButton("Connexion à distance");
    private JButton bouton_ok = new JButton("OK");
    private JButton bouton_quitter = new JButton("Quitter");
    private JLabel textebas=new JLabel("par Ghislain Kicinski, Clément Robin et Amaury Le Normand");
    private JLabel hopital = new JLabel(new ImageIcon("images/hopital.bmp")); // images du menu
    private JLabel croix = new JLabel(new ImageIcon("images/croix.bmp"));
    
    public Interface (){ // constructeur
        menu();
    }
    @Override
    public void actionPerformed(ActionEvent e) {      
        
  } 
    class listener implements ActionListener{
    //Redéfinition de la méthode actionPerformed()
    public void actionPerformed(ActionEvent e) {
        String util=utilisateur.getText();
        String MDP=mdp.getText();
      
        bienvenue.setText("Vous avez cliqué sur le bouton 1");
      
      if(util.equals("")||MDP.equals(""))
      {
          textebas.setForeground(Color.RED);
          textebas.setText("Erreur : veuillez saisir un nom d'utilisateur et un mot de passe");
      }
      else if(!local.isSelected()&&!distance.isSelected())
      {
          textebas.setForeground(Color.RED);
          textebas.setText("Erreur : veuillez cocher le type de connexion");
      }
      else if(local.isSelected()&&util.equals("root")&&MDP.equals("")) // connexion locale
      {
            try {
                Connexion conn=new Connexion("hopital","root","");
            } catch (SQLException ex) {
                Logger.getLogger(Interface.class.getName()).log(Level.SEVERE, null, ex);
            } catch (ClassNotFoundException ex) {
                Logger.getLogger(Interface.class.getName()).log(Level.SEVERE, null, ex);
            }
      }
      else if(distance.isSelected()&&util.equals("")&&MDP.equals("")) //connexion a distance
      {
          
      }
      else
      {
          textebas.setForeground(Color.RED);
          textebas.setText("Erreur : Nom d'utilisateur ou mot de passe incorrect");
      }
      
      
    }
  }
    class listener2 implements ActionListener{
    //Redéfinition de la méthode actionPerformed()
    public void actionPerformed(ActionEvent e) {
      dispose();    //on ferme la fenetre et quitte le programme 
    }
  }
    
    public void menu(){
        setTitle ("Interface");
    setSize (900, 250);
    getContentPane().add(pan); // ajouter le panneau dans la fenêtre
    setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
    
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
    grp.add(local);
    grp.add(distance);
    pancentre.add(local);
    pancentre.add(distance);
    pancentre.add(bouton_ok);
    pancentre.add(bouton_quitter);
    panbas.add(textebas);
    pangauche.add(hopital);
    pandroite.add(croix);
    bouton_ok.addActionListener(new listener());
    bouton_quitter.addActionListener(new listener2());
    setVisible(true); // fenetre visible
    }
    
}
