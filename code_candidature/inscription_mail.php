<?php
session_start();
$mail = $_POST['mail'];
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$mot_de_passe = $_POST['mot_de_passe'];
$nouveau_mot_de_passe = $_POST['confirmation_mot_de_passe'];
$status = 5;
// Connexion à la base de données
// include('http://localhost/candidature/code_candidature/ouverture_bd.php');

// envoie de mail

$sujet = 'Validation de votre compte';
$message = '
<div class="principal_bloc" style="margin: auto;
width: 400px;
box-sizing: border-box;
border: 1px solid rgb(10, 107, 49);
background-color: rgb(241, 241, 241);
box-shadow: 5px -5px 15px gray; 
color: black; 
text-align: center;
padding: 2%;">
<img src="https://img.icons8.com/ios-filled/100/000000/university.png" alt="logo ussein" style="position: relative;
width: 200px;
top: -7rem;
border-radius: 50%;
border: 10px white solid;
background-color: rgb(236, 236, 236);">

<h1>Validation de votre compte</h1>
<div class="secondaire_bloc" style="display: flex;
margin: 0;
gap: 1em;
flex-direction: column;
justify-content: center;
align-items: center;
margin-bottom: 10%;">
    <p style="font-size: x-large;
    text-align: justify;
    color:black;">
        Bonjour '.$prenom.' '.$nom.' ,
    </p>
    <p style="font-size: x-large;
    text-align: justify;
    color:black;">
        La plateforme de candidature de l\'<span style="color: rgb(10, 107, 49);
        font-weight: bold;">USSEIN</span> vous invite à finaliser la création de votre compte en cliquant sur ce bouton ci-dessous:
    </p>
    <a href="http://localhost/candidature/code_candidature/ussein_mail.php?mail='.$mail.'" style="text-decoration: none;
    color: black;width: 100%;"><p style="padding: 2%;
    color:white;
    border: 1px solid green;
    background-color: green;
    margin-right:10%;
    width: 100%;
    text-align: center;
    transition: 2s;font-size:x-large;">Valider</p></a>
</div>

</div>';

$header = "From:\"USSEIN CANDIDATURE\"<basse618@gmail.com>\n";
$header .="Reply-To:basse618@gmail.com\n";
$header .="Content-Type:text/html; charset=\"utf-8\"";

// mail($mail,$sujet,$message,$header);
// 
// $con = mysqli_connect('localhost','root','','ussein_candidature');
$con = new PDO('mysql:host=localhost;dbname=ussein_candidature;charset=utf8', 'root', '');
$verification=$con->prepare( "SELECT * FROM ec_connexion WHERE mail=?");
    $verification->execute(array($mail));
    $tab_verification = $verification->fetchALL();
    $nb = count($tab_verification); 


    // $req = mysqli_query($con,"SELECT * FROM ec_connexion WHERE mail='$mail'");
    // $nb = mysqli_num_rows($req);

    if($nb>0){
            $_SESSION['message_validation'] = "Un compte est déja enregitré sur ce mail.";
            header('Location: http://localhost/candidature/inscription/');
    }
    else{
            if($mot_de_passe == $nouveau_mot_de_passe){
                if (mail($mail,$sujet,$message,$header)){
                    $verification=$con->prepare( "INSERT INTO ec_connexion (prenom, nom, mail, mot_de_passe, telephone, date_de_naissance, status,genre, adresse, image) VALUES(:prenom, :nom, :mail, :mot_de_passe, :telephone, :date_de_naissance, :status,:genre, :adresse, :image)");
                    $verification->execute(array(
                        'prenom'=>$prenom,
                        'nom'=>$nom,
                        'mail'=>$mail,
                        'mot_de_passe'=>$mot_de_passe,
                        'telephone'=>'',
                        'date_de_naissance'=>'',
                        'status'=>$status,
                        'genre'=>'',
                        'adresse'=>'',
                        'image'=>'candidat.png'                        
                    ));
                    // $req = mysqli_query($con,"INSERT INTO ec_connexion VALUES('$prenom','$nom','$mail','$mot_de_passe','','','$status','','','candidat.png')");
                    $_SESSION['message_validation'] = "Veuillez consulter votre mail pour la validation de votre compte.";
                    header('Location: http://localhost/candidature/connexion/');
                }else{
                    $_SESSION['message_validation'] = "Erreur sur la validation de votre compte.\n Veuillez revoir vos informations.";
                    header('Location: http://localhost/candidature/inscription/');
                }
              }
            else{
            $_SESSION['message_validation'] = "Attention!! Mot de passe non identique.";
            header('Location: http://localhost/candidature/inscription/');
        }
    }
    





// déconnexion à la base de données
// include('http://localhost/candidature/code_candidature/fermeture_bd.php');
mysqli_close($con);

?>