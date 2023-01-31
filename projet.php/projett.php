<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
   <body>
 <?php include ("header.php");
       ?>
    <?php        
           // $servername = 'localhost';
            //$username = 'root';
           // $password = 'root';
            
            //On établit la connexion
            //$conn = new mysqli($servername, $username, $password);
            
            //On vérifie la connexion
            // if($conn->connect_error){
            //     die('Erreur : ' .$conn->connect_error);
            // }
            // echo 'Connexion réussie';

?>


  <?php include ("menu.php");

  ?>
  
   <h1> Mohamed kante </h1>         
    <p> 
        Bienvenue sur mon site! <br />
        Sur celui-ci vous trouverez des informations sur ma programmation d'une page web
    </p>
    <?php 
       include ("footer.php");
  ?>
            <p> Les variables en php </p>
  <?php
        

        // $multiplication = 13;
        // $addition = 11;
        // $soustraction = 8;
        // echo " Addition " .$addition.'<br/>';
        // echo " Multplication ".$multiplication.'<br/>';
        // echo " Soustraction ".$soustraction.'<br/>';
        // echo "total Addition et soustraction " .$addition + $multiplication. "<br/>";
        // $soustraction = 50;
        // echo $soustraction. '<br/>';
  //       echo 'Total soustraction et multiplication ' .$multiplication + $soustraction. '<br/>';
  //       $modulo = $multiplication % $addition;
  //       echo $modulo.'<br/>';
      
  //       echo "total nouvelle valeur de multipplication ".  $soustraction - $multiplication.'<br/>';
  //       $soustraction = $multiplication;
  //       echo "Nouvelle valeur soustraction ".$soustraction;
  // ?>
   <p> Les conditions en php</p>

   <?php 
      //   $heure_connexion = 17;
      // // les conditions avec if
      //   if($heure_connexion < 18){
      //     echo "Passez une bonne journéé <br/>";
      //     $journée = "oui";
      //   }
      //   // condition if else
      //   else{
      //     echo "passez une bonne soirée <br/>";
      //     $journée = "non";
      //   }
      //   echo 'fait-il jour ?  ' .$journée. '. <br/>' ;
      //   // If elseif et else cas exemple

         //$nootes= 12;
      //    if($noote < 10){
      //     echo " Vous n'avez pas la eu note ";
      //    }
      //     elseif($noote == 12){
      //        echo " Vous avez juste la note";
      //     }
      //    else{
      //     echo " Vous avez plus que la moyenne";
         //}  
         // les conditions multiple avec deux variables avec AND et OR
        //  $note= 10;
        //  $dificulte = "difficile";
        //  if($note <=8 && $dificulte == "facile"){
        //    echo "c'est nul";
        //  }
        //  elseif($note >8 && $dificulte == "facile"){
        //    echo "c'est pas mal, mais c'etait facile";
        //   }
        //  elseif($note <=9 && $dificulte == "difficile"){
        //    echo "Ne vous decouragez pas, c'etait difficile ";
        //   }
        //  else{
        //     echo "Bavo vous avez assurer";
        //   }
        //   if($dificulte == "difficile" OR $dificulte == "pas terrible"){
        //      echo "<br/> c'etait pas facile comme exo";
        //   }
        //   else {
        //     echo " <br/>c'etait facile";
        //   }

        // elseif($note 2){
        //   "vous avez eu 2";


        // else{
        //   "vous avez eu plus que la moyenne";
        // }

        // elseif($note == 3){ 
        //   echo " Vous avez juste eu 2";
          
        // }
        // elseif($note == 5){
        //   echo "vous avez eu juste 5 ";
        // }

        //  else{
        //   echo "Vous avez eu plus que la moyenne";

        // }
   ?>
   <br/> 
  <?php
       $notes = 20;
       // Si au niveau de notre variable on remplacai le nombre par une chaîne de carractere on pourrai avoir comme retour le message de notre else car php va prendre le string comme etant zero

        // if($notes === 0){
        //   echo "C'est nul vraiment!";
        // }
        // elseif($notes === 4){
        //   echo " c'est mauvais";
        // }
        // elseif($notes === 12){
        //   echo" C'est moyen";
        // }
        // elseif($notes === 16){
        //   echo" bien joué";
        // }
        // elseif($notes === 20){
        //   echo " c'est parafait bravo";
        // }
        // else{
        //   echo" Je n'ai aucune info sur cette note désolé";
        // }



        // $notes= 9;
        // switch($notes){
        // case 0:
        //     echo "C'est nul";
        //     break;
        // case 5:
        //   echo " C'est très mauvais";  
        //   break;
        // case 9:
        //   echo " C'est n'est pas bon"; 
        //   break;
        // case 14:
        //   echo " C'est moyen";
        //   break; 
        // case 16:
        //   echo " Bien joué";
        //   break;
        // case 29:
        //   echo " C'est super";
        //   break;
        //     echo  " C'est ça";
        //     break;
        //   default:
        //     echo " Je n'ai aucune reponse  cernant cette note";    
          
        // }

        // les variables avec un boolean astuce1 on peut cree une variable etudiant afin de comparer les si la personne est etudiante ou pas 
        // $etudiant = true;
        // if($etudiant == true){
        //   echo " Vous êtes étudiant";
        // }
        // else{ 
        //   echo " vous n'êtes pas étudiant";
        // }

        // //la formule la formule plus recommandé et celui du bas
        // if($etudiant){
        //   echo " Vous êtes étudiant";
        // }
        // else{
        //   echo"Vous n'êtes pas étudiant";
          
        // }
       
        // if(!$etudiant){
        //   echo "vous n'etes pas etudiant";
        // }
        // else{
        //   echo "vous étudiant";
        // } 

        // // Deusieme astuce: alors on peut ajouter du html dans du php il suffi juste de fermer la notre php a l'interieru de nos deux acollades  et puis la reouvrir apres l'acollade. exemple en bas  
        //   $etudiant = true;
        //  if($etudiant){
         
           ?>
           <p> Vous êtes étudiant!</p>
           <?php
        //  }
        //   //l'importance  de cette methode est d'eviter de trop echapper sur des gros texte dan sdu php
           
        //   //Et pour terminée  les formes ternaires 

        //   // On veut par exemple comparer si un utilisateur a droit d'acceder a une page ou pas 
        //    $age = 14; 
        //    if($age>= 19){
        //     $autorisation = true;
        //    }
        //    else{ 
        //     $autorisation = false;
        //    } 
        //    $autorisation = ($age >= 18)? true : false; 
        //  ?>      
              

          </br> 
     <?php
   // lES BOUCLES EN PHP 
  //  $z = 1;
  //  while($z <= 10){
  //   echo "C'est des nombres:".$z.".<br/>";
  //  $z+=1;
  //    } 

  //  $y = 1;

  // do{
  //   echo "C'est encore un nombre:".$y.".<br/>";
  //   $y++;
  //   }
  // while($y<=10);

  // for($x=1;$x<=10;$x++){
  //   echo "Ceci est nombre:".$x.".<br/>";
  // }
  //  for($x=10;$x >=1;$x--){
  //   echo " je reste un nombre".$x.".<br/>";
  //  }

  //   for($x=10;$x<=42;$x++){
  //     echo" je suis un test:".$x.".<br/>";
  //   }
  //   for($x>=42;$x>10;$x--){
  //     echo " je suis en negatif:".$x.".<br/>";
  //   }
   
       
             // LES TABLEAUX EN PHP( les tableaux numeroté, les tableaux associatifs et les tableaux multidimmentionnels)

             //les tableaux numeroté 
  
?>
<?php
//  $tableau = array("Mohamed", "kaly", "kante");{
//   //echo $tableau[1];
//     for($i = 0;$i <= 2;$i++){
//       echo$tableau[$i]."</br>" . "</br>";
     
//     }
   
//      }
    
  //  for($t = 0;$t<=2;$t++){
  //   echo$tableau[$t]."<br/>";
   
    // $eleve = array("Mohame", "Ousmane", "Lamine", "booba",  "Salam", "Omar");
    //  for($e = 0; $e <= 5;$e++){
    //   echo $eleve[$e]."<br/>"; 
    //  }
    //  "</br>";
    //   foreach($eleve as $contenu){
    //     echo $contenu."<br/>";
    //   }
    //   print_r($eleve);


      // $multi = array(
      //  array(" Mohamed", 34, "medkaly79@gmail.com"),
      //  array(" karim ", 32, "rimka12@gmail.com"),
      //  array(" saliou", 44, "toimoi@gmail.com")
      // );
      // echo $multi[1][0]." a ".$multi[1][1]." ans. Son mail:" .$multi[1][2]. ".<br/>";

         $tableaux = array(
         array("CELINE", 78, "MEDECIN", "VERSAILLES"),
         array(" PAUL", 91, "SPORTIF"," MASSY"),
      //   array(" MOHAAMED", 78, "ETUDIANT", "FONTENAY LE FLEURY")

       );

      //       echo$tableaux[1][0]." EST MON NOM ".$tableaux[1][1]. " EST MON DEPARTEMENT ". "JE SUIS " .$tableaux[1][2] . " DE HAUT NIVEAU ". " ET J'HABITE À ".$tableaux[1][3]. "<br/>";
      //       echo $tableaux[2][0]." EST MON NOM DE FAMILLE "." DOMICILIÉ DANS LE DEPARTEMENT " .$tableaux[2][1]." " .$tableaux[2][2]. " EN ECOLE D'INFORMATIQUE ".$tableaux[2][3]. " ET MA VILLE DE RESIDENCE "."<br/>";
          
      //       ?> 

            <form action="submit.php" method="post"> 

            <label for="nom"> test :</label>
            <input type="text" id="nom" name="nom" required>

            <input type="submit" value="Envoyer">

              
            
            </form>
            <?php
            //  $host = "localhost";
            //   $username = "root";
            //   $password = "root";
            //   $dbname = "page1.php";

            //   $conn = new PDO("mysqli :$host=$username; $password; $dbname");

            $servername = 'localhost';
            $username = 'root';
            $password = 'root';
            
            //On établit la connexion

              try{

               $conn = new 
            
            PDO("mysql:host=$servername;dbname=Info_utilisateurs", $username, $password);
               

                  $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                    
                       $donnees = [
                       "inscrs_id" => 0,
                       "inscrs_civilite" => "Monsieur",
                       "inscrs_nom" => "Kante",
                       "inscrs_prenom" => "Mohamed",
                       "inscrs_date" => 15031988,
                       "inscrs_mail" => "medkaly79@gmail.com",
                       "inscrs_telephone" => 07-82-86-95-40,
                       "inscrs_dpt" => 78
                     //   "mail" => "medkaly70@gmail.com"
                     //   "date_ins" => date('Y-m-d G:i:s', times()3600$2),
                      
                       
                       ];

                       $sth = $conn->prepare(
                        "INSERT INTO inscrs VALUES (:inscrs_id, :inscrs_civilite, :inscrs_nom, :inscrs_prenom, :inscrs_date, :inscrs_mail, :inscrs_telephone, :inscrs_dpt)"
                    );

                    $sth->execute($donnees);
                    echo 'Entrée ajoutée dans la table';
                   }
                   catch(PDOExeption $se){
                      echo "Erreur : " . $se->getMessage();
                  }
                      
                 ?>
                 <?php
                 
                  


 
                  ?>



                <?php
             $ch =curl_init("http://localhost:8888/projet.php/submit.php");
             curl_setopt($ch, CURLOPT_URL, "http://localhost:8888/projet.php/submit.php");
             curl_setopt($ch, CURLOPT_POST, true);
             curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($donnees));
             
              

              ?>

             

           

             






</body>

</html>