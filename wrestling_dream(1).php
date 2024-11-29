<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 5.1.2
 */

/**
 * Database `wrestling dream`
 */

/* `wrestling dream`.`federation` */
$federation = array(
  array('federation_id' => '1','noms' => 'WWE','date_creation' => '1952-01-07','président' => 'Vince McMahon','pays_origine' => 'USA'),
  array('federation_id' => '2','noms' => 'AEW','date_creation' => '2019-01-01','président' => 'Tony Khan','pays_origine' => 'USA'),
  array('federation_id' => '3','noms' => 'NJPW','date_creation' => '1972-01-13','président' => 'Tatsumi Fujinami','pays_origine' => 'Japon'),
  array('federation_id' => '4','noms' => 'Impact Wrestling','date_creation' => '2002-05-10','président' => 'Scott D\'Amore','pays_origine' => 'USA')
);

/* `wrestling dream`.`superstar` */
$superstar = array(
  array('id' => '1','prénoms' => 'Steve','noms' => 'Austin','date_naissance' => '1964-12-18','taille' => '188','poids' => '114','nationalité' => 'USA','match_gagner' => '200','match_perdu' => '75','federation_id' => '1'),
  array('id' => '2','prénoms' => 'Shawn','noms' => 'Michaels','date_naissance' => '1965-07-22','taille' => '185','poids' => '102','nationalité' => 'USA','match_gagner' => '175','match_perdu' => '50','federation_id' => '1'),
  array('id' => '3','prénoms' => 'Mark','noms' => 'Calaway','date_naissance' => '1965-03-24','taille' => '208','poids' => '138','nationalité' => 'USA','match_gagner' => '300','match_perdu' => '100','federation_id' => '1'),
  array('id' => '4','prénoms' => 'Randy','noms' => 'Orton','date_naissance' => '1980-04-01','taille' => '196','poids' => '113','nationalité' => 'USA','match_gagner' => '150','match_perdu' => '40','federation_id' => '1'),
  array('id' => '5','prénoms' => 'Dwayne','noms' => 'Johnson','date_naissance' => '1972-05-02','taille' => '196','poids' => '118','nationalité' => 'USA','match_gagner' => '220','match_perdu' => '60','federation_id' => '1'),
  array('id' => '6','prénoms' => 'Terry','noms' => 'Hogan','date_naissance' => '1953-08-11','taille' => '201','poids' => '137','nationalité' => 'USA','match_gagner' => '300','match_perdu' => '70','federation_id' => '1')
);

/* `wrestling dream`.`titre` */
$titre = array(
  array('id' => '1','noms_du_titre' => 'WWE Champion','détenteur' => 'Titre suprême de la WWE','date_détention' => '1998-03-29','suprstar_id' => '1'),
  array('id' => '2','noms_du_titre' => 'Intercontinental Champion','détenteur' => 'Titre secondaire de la WWE','date_détention' => '1992-10-27','suprstar_id' => '2'),
  array('id' => '3','noms_du_titre' => 'WWE Champion','détenteur' => 'Titre suprême de la WWE','date_détention' => '1996-03-31','suprstar_id' => '2'),
  array('id' => '4','noms_du_titre' => 'World Heavyweight Champion','détenteur' => 'Titre mondial de catch','date_détention' => '1997-03-23','suprstar_id' => '3'),
  array('id' => '5','noms_du_titre' => 'WWE Champion','détenteur' => 'Titre suprême de la WWE','date_détention' => '2004-08-15','suprstar_id' => '4'),
  array('id' => '6','noms_du_titre' => 'WWE Champion','détenteur' => 'Titre suprême de la WWE','date_détention' => '2000-04-30','suprstar_id' => '5'),
  array('id' => '7','noms_du_titre' => 'WCW World Heavyweight Champion','détenteur' => 'Titre de la WCW','date_détention' => '1996-08-10','suprstar_id' => '6')
);

/* `wrestling dream`.`utilisateur` */
$utilisateur = array(
  array('id' => '1','username' => 'john_doe','email' => 'john.doe@example.com','password' => 'password123'),
  array('id' => '2','username' => 'jane_smith','email' => 'jane.smith@example.com','password' => 'jsPass456'),
  array('id' => '3','username' => 'tom_clark','email' => 'tom.clark@example.com','password' => 'tomC789!'),
  array('id' => '4','username' => 'emma_jones','email' => 'emma.jones@example.com','password' => 'emma@2024')
);
