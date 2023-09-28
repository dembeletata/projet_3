<?php

function afficheImage($id) {
   
    $bdd = new mysqli('localhost', 'root', '', 'tourisme_bf');

    if ($bdd->connect_error) {
        die("La connexion à la base de données a échoué : " . $bdd->connect_error);
    }
$requet = "SELECT id, img FROM image WHERE id = $id";
    $result = $bdd->query($requet);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $id = $row['id'];
        $contenuImage = $row['img'];
        
  $html = '<img src="data:image/jpeg;base64,' . base64_encode($contenuImage) . '" alt="Image ' . $id . '" >';

     
        $bdd->close();

        return $html;
    } else {
       
        $bdd->close();
        
        return "Aucune image  trouvée!";
    }
}

function afficheTexte($nomTexte) {
   
    $bdd = new mysqli('localhost', 'root', '', 'tourisme_bf');

    if ($bdd->connect_error) {
        die("La connexion à la base de données a échoué : " . $bdd->connect_error);
    }

    $nomTexte = $bdd->real_escape_string($nomTexte);


    $requete = "SELECT contenuTexte FROM texte WHERE nomTexte = '$nomTexte' ";
    $result = $bdd->query($requete);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $contenuT = $row['contenuTexte'];

      
        echo  $contenuT;
    } else {
        echo "Aucun texte trouvé dans la base de données pour le nom spécifié.";
    }

   
    $bdd->close();
}

?>




