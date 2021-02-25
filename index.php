<?php

/**
 * Pour cet exercice, vous allez utiliser la base de données table_test_php créée pendant l'exo 189
 * Vous utiliserez également les deux tables que vous aviez créées au point 2 ( créer des tables avec PHP )
 */

    $server = 'localhost';
    $db = 'table_test_php';
    $user = 'root';
    $pass = '';

try {
    /**
     * Créez ici votre objet de connection PDO, et utilisez à chaque fois le même objet $pdo ici.
     */

    $pdo = new PDO("mysql:host=$server;dbname=$db;charset=utf8", $user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Nous sommes connectés à la base de donnés.";

    /**
     * 1. Insérez un nouvel utilisateur dans la table utilisateur.
     */

    // TODO votre code ici.
//    $requestU = "
//        INSERT INTO utilisateur (nom ,prenom ,email ,password ,adresse ,code_postal ,pays )
//        VALUES('Sam','Coquelet','sam.coquelet@gmail.com','Atchoum','21 rue paris',59610,'france')
//    ";
//$pdo->exec($requestU);


    /**
     * 2. Insérez un nouveau produit dans la table produit
     */

    // TODO votre code ici.
//   $requestP = "
//       INSERT INTO produit(titre,prix,description_courte,description_long)
//       VALUES('pomme',2,'delicieuse pomme','ceci est une pomme delicieuse')
//   ";
//   $pdo->exec($requestP);

    /**
     * 3. En une seule requête, ajoutez deux nouveaux utilisateurs à la table utilisateur.
     */
    // TODO Votre code ici
    /**
     * 4. En une seule requête, ajoutez deux produits à la table produit.
     *
     */



    // TODO Votre code ici.

    /**
     * 5. A l'aide des méthodes beginTransaction, commit et rollBack, insérez trois nouveaux utilisateurs dans la table utilisateur.
     */

//   $pdo->beginTransaction();
//   $insert = 'INSERT INTO utilisateur(nom ,prenom ,email ,password ,adresse ,code_postal ,pays)VALUES';
//   $utilisateur4 = $insert . "('Sam','red','lyx.coquelet@gmail.com','jack','22 rue paris',59700,'france')";
//   $pdo->exec($utilisateur4);
//   $utilisateur5 = $insert . "('Sam','red','pyx.coquelet@gmail.com','jack','22 rue paris',59700,'france')";
//   $pdo->exec($utilisateur5);
//   $utilisateur6 = $insert . "('Sam','red','nyx.coquelet@gmail.com','jack','22 rue paris',59700,'france')";    $pdo->exec($utilisateur6);    $pdo->commit();

    // TODO Votre code ici.


    /**
     * 6. A l'aide des méthodes beginTransaction, commit et rollBack, insérez trois nouveaux produits dans la table produit.
     */
    $pdo->beginTransaction();
    $insetP = "INSERT INTO produit(titre,prix,description_courte,description_long) VALUES";

    $produit4 = $insetP. "('banane',6,'jolie banane','une trés joile banane')";
    $pdo->exec($produit4);

    $produit5 = $insetP. "('hananas',7,'jolie hananas','une trés joile hananas')";
    $pdo->exec($produit5);

    $produit6 = $insetP. "('clementine',8,'jolie clementine','une trés joile clementine')";
    $pdo->exec($produit6);
    $pdo->commit();

}


catch(PDOException $exception){
      echo $exception->getMessage();
      $pdo->rollBack();
}

