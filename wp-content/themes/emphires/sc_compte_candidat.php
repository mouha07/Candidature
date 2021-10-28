<?php 
/* template name:compte candidat */
session_start();
if(!is_page( 'connexion' ) &&  !$_SESSION['mail']  ){
    if(!is_page('mot-de-passe-oublie')||(!is_page('inscription'))){
        wp_redirect( home_url( 'accueil' ));
            exit;
    }
    
}
$mail= $_SESSION['mail'];
$lien_suppression="http://localhost/candidature/code_candidature/suppression_justificatif.php/?fiche=";

$con = mysqli_connect("localhost","root","","ussein_candidature");
$req_image = mysqli_query($con,"SELECT * FROM ec_connexion WHERE mail='$mail'"); 
$tab_image = mysqli_fetch_array($req_image);




$requete_infos_candidat =  mysqli_query($con,"SELECT * FROM ec_connexion WHERE mail='$mail'");
$tab_candidat = mysqli_fetch_array($requete_infos_candidat);

$tab_genre = array('Masculin','Feminin');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
    body{
        background-image: url("http://localhost/candidature/code_candidature/bg.jpg");
        background-position: 0;
        background-repeat: repeat-y;
        background-size: contain;
    }
    *{
        margin:0;
        padding:0;
        box-sizing: border-box;
    }
 
.cspt-title-bar-wrapper{
               display: none;
          }
div.bloc_info_personnel{
    width:100%;
    display:flex;
    flex-direction: column;
    border: 2px solid rgb(10,107,49);
    margin: 2em;
}
span#titre{
    background-color: rgb(10,107,49);
    padding:1% 0;
    width:100%;
    color: white;
    font-size: x-large;
    font-weight: bold;
    text-align: center;
}
div.contenu_info_personnel{
    width:100%;
    display:flex;
    justify-content: center;
    gap:0 1em;
    padding: 3%;
}
div.candidat_image {
    border:1px solid;
    width:30%;
}
div.candidat_image form{
    
    display: flex;
    flex-direction: column;
    align-items:center;
    gap: 2em 0;
    padding: 1em;
}
img#image_profil{
    width:150px;
    height: 150px;
}
div.bloc_candidat_info{
    width:70%;
    display: flex;
    flex-direction: column;
    gap: 1em 0;
    border:1px solid;
    padding: 1em;  
}
div.info_personnel {
    display: flex;
    gap:2em 2em;
    justify-content: center;
}
@media(max-width: 1000px){
    div.info_personnel{
            display:flex;
            flex-direction:column;
            align-items:center;
            gap:1em 0 ;
    }
}
div.info{
    width: 100%;
    display: flex;
    flex-direction:column ;
    gap:1em 0;
}
input.champs_de_text ,select.champs_de_text  {
    width:100%;
    height:4em;
    text-indent: 1em;
    border: 2px solid rgb(10,107,49);
    transition: all 1s;
    border-radius: 10px;
    outline:none;
}
input.champs_de_text:hover ,select.champs_de_text:hover{
    background-color:rgb(205, 253, 205);
    transform: scale(1.04);
    transition: all 1s;
}
input[type=submit]{
    padding:2% 8%;
    background-color: rgb(10,107,49);
    color:white;
    font-size: large;
}
div.enregistrer{
    align-self: center;
}
@media(max-width:780px ){
    div.contenu_info_personnel{
    width:100%;
    display:flex;
    flex-direction: column;
    align-items: center;
    padding: 3%;
    gap: 2em 0;
}
div.candidat_image{
    width:100%;
    display: flex;
    flex-direction: column;
    align-items:center;
    gap: 2em 0;
    border:1px solid;
    padding: 1em;
}
div.bloc_candidat_info{
    width:100%;
    display: flex;
    flex-direction: column;
    gap: 1em 0;
    border:1px solid;
    padding: 1em;  
}
div.info_personnel {
    display: flex;
    gap:2em 2em;
    justify-content: center;
    flex-wrap: wrap;
}
}
label#date_de_naissance{
    font-weight:bold;
    color:rgb(10,107,49);
   text-decoration:underline;
}
#erreur_upload_image{
    color:rgb(141,54,20);
    font-size:large;
    border:
}
input#enregistrer{
    margin-top:2%;
}
</style>

<style>
    .message_erreur{
        color:rgb(141,54,20);
    }
    .message_validation{
        color:rgb(10,107,49);
    }
div.case{
     margin:5% 5%;
       /* width:100%; */
      display: flex;
      flex-direction: column;
      align-items: center;
      padding:1em 2em;
      box-shadow:0 0 20px gray;
    background-color: rgba(255,255,255,0.8);
  }
   div.critere{
    width: 100%;
     display: flex;
      flex-direction: column;
      border: 2px solid rgb(10, 107, 49);
      margin-bottom: 3%;
      align-items: center;
  }
  div.experience{
    display: flex;
    flex-direction:column;
    align-items:center;
      gap:1em 0;
      padding:2%;
  }

  div.experience2{
    width:100%;
      display: flex;
      justify-content:center;
      padding:2%;
      gap: 2em 1em;
  }
   span.titre{
      text-align: center;
      width:100%;
       padding:1% 0;
      background-color: rgb(10, 107, 49);
      color:white;
      font-size: x-large;
  }
   div.contenu{
    display: flex;
    flex-direction:column;
    align-items:center;
      gap:1em 0;
      padding:2%;
  }
  /* div.element{
      
     width:100%;
      display: flex;
       justify-content:center; 
      padding:2%;
      gap: 0 1em;
  } */
  input[type=file]{
      width: 100%;
  }
  div.contenu_licence{
      color:rgb(132, 181, 39);
      background-color: white;
      padding:1%;
      box-shadow: 2px 2px 6px gray;
      width: 100%;
      text-align: center;
      transition: all 1s;
      display:flex;
      flex-direction:column;
      gap: 1px 0;
  }
   div.contenu_licence:hover{
      transform:scale(1.05);
      transition: all 1s;
  }
  span{
      font-size: x-large;
      color:rgb(10, 107, 49);
  }
  @media(max-width:780px){
     div.element{
     display: flex;
     gap:1em 0;
     flex-wrap:wrap;
     flex-direction:column;
     padding:3%;
     align-items:center;
 }

    div.experience2{
        display:flex;
        flex-direction:column;
        flex-wrap:wrap;
    }

  }
  input[type=submit]{
      padding:2% 4%;
      font-size:large;
      color:white;
      background-color:rgb(10, 107, 49);
  }
 details{
     width:100%;
     display:flex;
     justify-content:center;
     margin-bottom:1em;
     }
 summary{
    width:100%;
    padding:0.5% 0;
    color:white;
    font-size:large;
    background-color:rgb(10, 107, 49);
    margin-bottom:1px;
    }

    label#mail{
        font-size:large;
        transition:all 1s;
        color:rgb(10,107,49);
        border:1px solid;
        border-radius:10px;
        background-color:white;
        padding:0.5em;
    }
    label#mail:hover{
        transition:all 1s;
        transform:scale(1.04);
        background-color:rgb(205, 253, 205);
    }
    span#notif{
        color:rgb(141,54,20);
        font-size:large;
    }
    input.lien{
        margin-bottom: 1px;
    }
    a.suppression{
        /* border:1px solid red; */
        /* border-radius:10%;
        background-color:rgb(141,54,20);
        font-size:large; */
        margin-top : 1em;
        background-color:white;
        border :  2px solid rgb(141,54,20);
        padding : 0.5em 1em;
        text-decoration : none;
        font-size : large;
        font-weight :bold;
        color:rgb(141,54,20);  
        transition : all 1s; 
        border-radius :1em;
    }
    a.suppression:hover{
        background-color :rgb(141,54,20);
        color:white ;
        transition : all 1s; 
        
    }

</style> 
<body>
<?php get_header();?>
<div class="case">

 <!-- debut du code pour la case -->
 <div class="bloc_info_personnel">
                    <span id="titre"> Information supplementaire du candidat</span>

                    <!-- debut du code pour le contenu de la case -->
                    <div class="contenu_info_personnel"> 
                    
                        <!-- debut du code pour le box-licence du contenu de la case -->
                        
                            <div class="candidat_image">
                                <form action="http://localhost/candidature/code_candidature/charger_image_profil.php" method="POST" enctype="multipart/form-data">
                                <input type="file" name="image" id="image_profil">
                                <img src="http://localhost/candidature/code_candidature/ec_repertoire/<?php echo $mail ?>/<?php echo $tab_image['image']?>" alt="photo profil" id="image_profil">
                                <label id="erreur_upload_image">
                                <?php if(isset($_SESSION['erreur'])){
                                    echo $_SESSION['erreur'];
                                    unset($_SESSION['erreur']);
                                } 
                                ?>
                                </label>
                                <input type="submit" value="Valider">
                                </form>
                            </div>
                        

                            
                            <div class="bloc_candidat_info">
                            <form action="http://localhost/candidature/code_candidature/charger_info_candidat.php" method="POST">

                             <div class="info_personnel">

                                <div class="info">
                                <input type="text" class="champs_de_text" name="prenom" placeholder="Prenom" value="<?php echo $tab_candidat['prenom'];?>" required>
                                <input type="text" class="champs_de_text" name="nom" placeholder="Nom" value="<?php echo $tab_candidat['nom'];?>" required>
                                <label for="date_de_naissance" id="date_de_naissance">Votre date de naissance :</label>
                                <input type="date" class="champs_de_text" name="date_de_naissance" id="date_de_naissance" value="<?php echo $tab_candidat['date_de_naissance'];?>" required>
                                
                                </div>

                                <div class="info">
                                <input type="text" class="champs_de_text" name="adresse" placeholder="Adresse domicile" value="<?php echo $tab_candidat['adresse'];?>" required>
                                <input type="tel" class="champs_de_text" name="tel" placeholder="Telephone" value="<?php echo $tab_candidat['telephone'];?>" required>
                                <select name="genre" class="champs_de_text" id="genre" required>
                                   <?php
                                   if(isset($_SESSION['choix_genre'])){?>
                                    <option><?php echo $_SESSION['choix_genre']; ?></option>
                                  <?php } 
                                  for($i=0;$i<2;$i++){ 
                                    // if(isset($_SESSION['choix_genre'])){
                                        if( $_SESSION['choix_genre'] == $tab_genre[$i] ){}
                                        else{?>
                                             <option><?php echo $tab_genre[$i] ; ?></option>
                                    <?php } }     ?>
                                    
                                </select>
                                <label title='votre mail' id='mail'><?php echo $_SESSION['mail'] ?></label>
                                <span id="notif">
                                      <?php if(isset($_SESSION['info'])){ echo $_SESSION['info'];unset($_SESSION['info']) ;} ?>
                                  </span> 


                                </div>
                                </div>

                                <input type="submit" value="Enregistrer" id="enregistrer">   
                            </form>
                            </div>    
                       
                         <!-- fin du code pour le box-licence du contenu de la case -->


                    </div>
                    <!-- fin du code pour le contenu de la case -->

                  

                </div>
                <!-- fin du code pour la case -->

             <!--     ***************   Blocage de compte etudiant   ******************      -->
   <details>
   <summary>MES DIPLOMES</summary>

    <div class="critere" id="2">
         <!-- Diplomes    -->
        <span class="titre"> Diplomes</span>
        <div class="element2">
        <!-- <span class="titre"> Diplomes</span> -->
           <form action="http://localhost/candidature/code_candidature/verification_candidat.php" method='POST' enctype="multipart/form-data" >
                            

                            <!-- debut du code pour le contenu de la case -->
                            <div class="experience">

                                <!-- debut du code pour le box-licence du contenu de la case -->

                            <div class="experience2">

                                <div class="contenu_licence">
                                <span>Licence</span>
                                <input type="url" placeholder="Vous pouvez ajoutez un lien" name="lien_licence" class="lien">
                                <span>ou</span>
                                <p><input type="file" name="fichier_licence" class=""></p>
                                <a href="<?php echo $lien_suppression."licence.pdf" ?>" class="suppression">Supprimer justificatif actuel</a>
                                <label class="message_erreur"> 
                                <?php
                                if(isset($_SESSION['message_erreur_l'])){
                                    echo $_SESSION['message_erreur_l'];
                                    unset($_SESSION['message_erreur_l']);
                                }
                                ?></label>
                                 <label class="message_validation"> 
                                <?php
                                if(isset($_SESSION['message_validation_l'])){
                                    echo $_SESSION['message_validation_l'];
                                    unset($_SESSION['message_validation_l']);
                                }
                                  ?></label>
                                </div>
                                

                                
                                    <div class="contenu_licence">
                                    <span>Master</span>
                                    <input type="url" placeholder="Vous pouvez ajoutez un lien" name="lien_master" class="lien">
                                      <span>ou</span>
                                    <p><input type="file" name="fichier_master" class=""></p>
                                     <a href="<?php echo $lien_suppression."master.pdf" ?>" class="suppression">Supprimer justificatif actuel</a>
                                    <label class="message_erreur"> 
                                <?php
                                if(isset($_SESSION['message_erreur_m'])){
                                    echo $_SESSION['message_erreur_m'];
                                    unset($_SESSION['message_erreur_m']);
                                }
                                ?></label>
                                <label class="message_validation"> 
                                <?php
                                if(isset($_SESSION['message_validation_m'])){
                                    echo $_SESSION['message_validation_m'];
                                    unset($_SESSION['message_validation_m']);
                                }
                                ?></label>
                                    </div>
                                

                                
                                    <div class="contenu_licence">
                                    <span>Doctorat</span>
                                    <input type="url" placeholder="Vous pouvez ajoutez un lien" name="lien_doctorat" class="lien">
                                <span>ou</span>
                                <p><input type="file" name="fichier_doctorat" class=""></p>
                                <a href="<?php echo $lien_suppression."doctorat.pdf" ?>" class="suppression">Supprimer justificatif actuel</a>
                                    <label class="message_erreur"> 
                                <?php
                                if(isset($_SESSION['message_erreur_d'])){
                                    echo $_SESSION['message_erreur_d'];
                                    unset($_SESSION['message_erreur_d']);
                                }
                                ?></label>
                                <label class="message_validation"> 
                                <?php
                                if(isset($_SESSION['message_validation_d'])){
                                    echo $_SESSION['message_validation_d'];
                                    unset($_SESSION['message_validation_d']);
                                }
                                ?></label>
                                    </div>
                                
                            </div>         
                            <input type="submit" value="Enregistrer"> 

                                <!-- fin du code pour le box-licence du contenu de la case -->


                            </div>
                            <!-- fin du code pour le contenu de la case -->

              </form>

            </div> </div>

            </details>
                         
                    
             
            <details>
   <summary>MES EXPERIENCES</summary>
                                <!-- experience -->

                   <div class="critere" id="3">
                   <span class="titre">Expériences</span>
         <div class="contenu">
                

                 <div class="element2">
                 <form action="http://localhost/candidature/code_candidature/verification_candidat_experience.php" method='POST' enctype="multipart/form-data" >

                           <!-- Pédagogique -->
                        <div class="experience">
                                    <span class="titre2">Pédagogique</span> 
                                    <div class="experience2">
                                  
                                        <div class="contenu_licence contenu_licence2 ">
                                            <span>Secondaire</span>                                             
                                            <input type="url" placeholder="Vous pouvez ajoutez un lien" name="lien_secondaire" class="lien">
                                            <span>ou</span>
                                            <p><input type="file" name="secondaire" class=""></p>
                                            <a href="<?php echo $lien_suppression."secondaire.pdf" ?>" class="suppression">Supprimer justificatif actuel</a>
                                            <label class="message_erreur"> 
                                            <?php
                                            if(isset($_SESSION['message_erreur_secondaire'])){
                                                echo $_SESSION['message_erreur_secondaire'];
                                                unset($_SESSION['message_erreur_secondaire']);
                                            }
                                            ?></label>
                                            <label class="message_validation"> 
                                            <?php
                                            if(isset($_SESSION['message_validation_secondaire'])){
                                                echo $_SESSION['message_validation_secondaire'];
                                                unset($_SESSION['message_validation_secondaire']);
                                            }
                                            ?></label>
                                        </div>
                                        
                                        <div class="contenu_licence contenu_licence2 ">
                                            <span>Supérieur</span>                            
                                            <input type="url" placeholder="Vous pouvez ajoutez un lien" name="lien_superieur" class="lien">
                                            <span>ou</span>
                                            <p><input type="file" name="superieur" class=""></p>
                                            <a href="<?php echo $lien_suppression."superieur.pdf" ?>" class="suppression">Supprimer justificatif actuel</a>
                                            <label class="message_erreur"> 
                                            <?php
                                            if(isset($_SESSION['message_erreur_supérieur'])){
                                                echo $_SESSION['message_erreur_supérieur'];
                                                unset($_SESSION['message_erreur_supérieur']);
                                            }
                                            ?></label>
                                            <label class="message_validation"> 
                                            <?php
                                            if(isset($_SESSION['message_validation_supérieur'])){
                                                echo $_SESSION['message_validation_supérieur'];
                                                unset($_SESSION['message_validation_supérieur']);
                                            }
                                            ?></label>
                                        </div>
                                     
                            </div>
                            </div>

                            <!-- Recherche -->
                            <div class="experience">
                                    <span class="titre2">Recherche</span> 
                                    <div class="experience2">

                                    <div class="contenu_licence contenu_licence2 ">
                                        <span>Laboratoire académique</span>                                         
                                        <input type="url" placeholder="Vous pouvez ajoutez un lien" name="lien_laboratoire" class="lien">
                                            <span>ou</span>
                                            <p><input type="file" name="laboratoire" class=""></p>
                                            <a href="<?php echo $lien_suppression."laboratoire.pdf" ?>" class="suppression">Supprimer justificatif actuel</a>
                                        <label class="message_erreur"> 
                                        <?php
                                        if(isset($_SESSION['message_erreur_laboratoire'])){
                                            echo $_SESSION['message_erreur_laboratoire'];                                            
                                            unset($_SESSION['message_erreur_laboratoire']);                                            
                                        } ?></label>
                                        <label class="message_validation"> 
                                        <?php
                                        if(isset($_SESSION['message_validation_laboratoire'])){
                                            echo $_SESSION['message_validation_laboratoire'];
                                            unset ($_SESSION['message_validation_laboratoire']);
                                        }
                                        ?></label>
                                    </div>

                                    <div class="contenu_licence contenu_licence2 ">
                                        <span>Institution de recherche</span>                                         
                                        <input type="url" placeholder="Vous pouvez ajoutez un lien" name="lien_institution" class="lien">
                                            <span>ou</span>
                                            <p><input type="file" name="institution" class=""></p>
                                            <a href="<?php echo $lien_suppression."institution.pdf" ?>" class="suppression">Supprimer justificatif actuel</a>
                                        <label class="message_erreur "> 
                                        <?php
                                        if(isset($_SESSION['message_erreur_institution'])){
                                            echo $_SESSION['message_erreur_institution'];
                                            unset($_SESSION['message_erreur_institution']);
                                        } ?></label>
                                        <label class="message_validation"> 
                                        <?php
                                        if(isset($_SESSION['message_validation_institution'])){
                                            echo $_SESSION['message_validation_institution'];
                                            unset($_SESSION['message_validation_institution']);
                                        }
                                        ?></label>
                                    </div>

                                    <div class="contenu_licence contenu_licence2 ">
                                        <span>Industrie ou structure de développement</span>                                         
                                        <input type="url" placeholder="Vous pouvez ajoutez un lien" name="lien_industrie" class="lien">
                                            <span>ou</span>
                                            <p><input type="file" name="industrie" class=""></p>
                                            <a href="<?php echo $lien_suppression."industrie.pdf" ?>" class="suppression">Supprimer justificatif actuel</a>
                                        <label class="message_erreur "> 
                                        <?php
                                        if(isset($_SESSION['message_erreur_industrie'])){
                                            echo $_SESSION['message_erreur_industrie'];
                                            unset($_SESSION['message_erreur_industrie']);
                                        }
                                        ?></label>
                                        <label class="message_validation"> 
                                        <?php
                                        if(isset($_SESSION['message_validation_industrie'])){
                                            echo $_SESSION['message_validation_industrie'];
                                            unset($_SESSION['message_validation_industrie']);
                                        }
                                        ?></label>
                                    </div>
                                    
                            </div>
                            </div>

                             <!-- Autres -->
                           <div class="experience">
                                    <span class="titre2">Autres</span> 
                                    <div class="experience2">

                                    <div class="contenu_licence contenu_licence2 ">
                                        <span>Gestion de programme dans les ONG, associations, collectivités et structures étatiques</span>                                         
                                        <input type="url" placeholder="Vous pouvez ajoutez un lien" name="lien_gestion" class="lien">
                                            <span>ou</span>
                                            <p><input type="file" name="gestion" class=""></p>
                                            <a href="<?php echo $lien_suppression."gestion.pdf" ?>" class="suppression">Supprimer justificatif actuel</a>
                                        <label class="message_erreur "> 
                                        <?php
                                        if(isset($_SESSION['message_erreur_gestion'])){
                                            echo $_SESSION['message_erreur_gestion'];
                                            unset($_SESSION['message_erreur_gestion']);
                                        }
                                        ?></label>
                                        <label class="message_validation"> 
                                        <?php
                                        if(isset($_SESSION['message_validation_gestion'])){
                                            echo $_SESSION['message_validation_gestion'];
                                            unset($_SESSION['message_validation_gestion']);
                                        }
                                        ?></label>
                                    </div>

                                    <div class="contenu_licence contenu_licence2 ">
                                        <span>Investigateur principal de projet</span>                                         
                                        <input type="url" placeholder="Vous pouvez ajoutez un lien" name="lien_investigateur" class="lien">
                                            <span>ou</span>
                                            <p><input type="file" name="investigateur" class=""></p>
                                            <a href="<?php echo $lien_suppression."investigateur.pdf" ?>" class="suppression">Supprimer justificatif actuel</a>
                                        <label class="message_erreur"> 
                                        <?php
                                        if(isset($_SESSION['message_erreur_insvestigateur'])){
                                            echo $_SESSION['message_erreur_insvestigateur'];
                                            unset($_SESSION['message_erreur_insvestigateur']);
                                        }
                                        ?></label>
                                        <label class="message_validation"> 
                                        <?php
                                        if(isset($_SESSION['message_validation_insvestigateur'])){
                                            echo $_SESSION['message_validation_insvestigateur'];
                                            unset($_SESSION['message_validation_insvestigateur']);
                                        }
                                        ?></label>
                                    </div>

                                    <div class="contenu_licence contenu_licence2 ">
                                        <span>Coordonnateur de réseau</span>                                         
                                        <input type="url" placeholder="Vous pouvez ajoutez un lien" name="lien_coordonnateur" class="lien">
                                            <span>ou</span>
                                            <p><input type="file" name="coordonnateur" class=""></p>
                                            <a href="<?php echo $lien_suppression."coordonnateur.pdf" ?>" class="suppression">Supprimer justificatif actuel</a>
                                        <label class="message_erreur"> 
                                        <?php
                                        if(isset($_SESSION['message_erreur_coordonnateur'])){
                                            echo $_SESSION['message_erreur_coordonnateur'];
                                            unset($_SESSION['message_erreur_coordonnateur']);
                                        }
                                        ?></label>
                                        <label class="message_validation"> 
                                        <?php
                                        if(isset($_SESSION['message_validation_coordonnateur'])){
                                            echo $_SESSION['message_validation_coordonnateur'];
                                            unset($_SESSION['message_validation_coordonnateur']);
                                        }
                                        ?></label>
                                    </div>
                                    
                            </div>
                            <input type="submit" value="Enregistrer">

                            </div>
                    </div>
                   </form>
                  <!-- fin class="element2" -->

                </div>
                   </div>
                </details>


                <details>
   <summary>MES DISTINCTIONS </summary>
               

                                        <!-- Distinction -->

              <div class="critere" id="4">

                <span class="titre"> Distinction</span>
              <div class="element2">
               <form action="http://localhost/candidature/code_candidature/verification_candidat_distinction.php" method='POST' enctype="multipart/form-data" >
                            

                            <!-- debut du code pour le contenu de la case -->
                            <div class="experience">

                                <!-- debut du code pour le box-licence du contenu de la case -->

                            <div class="experience2">

                                <div class="contenu_licence">
                                <span>Distinction</span>
                                <input type="url" placeholder="Vous pouvez ajoutez un lien" name="lien_distinction" class="lien">
                                            <span>ou</span>
                                            <p><input type="file" name="distinction" class=""></p>
                                            <a href="<?php echo $lien_suppression."distinction.pdf" ?>" class="suppression">Supprimer justificatif actuel</a>
                                <label class="message_erreur"> 
                                <?php
                                if(isset($_SESSION['message_erreur_distinction'])){
                                    echo $_SESSION['message_erreur_distinction'];
                                    unset($_SESSION['message_erreur_distinction']);
                                }
                                ?></label>
                                <label class="message_validation"> 
                                <?php
                                if(isset($_SESSION['message_validation_distinction'])){
                                    echo $_SESSION['message_validation_distinction'];
                                    unset($_SESSION['message_validation_distinction']);
                                }
                                ?></label>
                                </div>
                                
                            </div>         
                            <input type="submit" value="Enregistrer"> 

                                <!-- fin du code pour le box-licence du contenu de la case -->


                            </div>
                            <!-- fin du code pour le contenu de la case -->

              </form>

            </div> </div>

                </details>
                <details>
   <summary>MES GRADES </summary>
            
            
            <!-- Grade -->
            <div class="critere" id="5">
            <span class="titre"> Grade</span>
            <div class="element2">
               <form action="http://localhost/candidature/code_candidature/verification_candidat_grade.php" method='POST' enctype="multipart/form-data" >
                            <!-- <span class="titre"> Grade</span> -->

                            <!-- debut du code pour le contenu de la case -->
                            <div class="experience">

                                <!-- debut du code pour le box-licence du contenu de la case -->

                            <div class="experience2">

                                <div class="contenu_licence">
                                <span>Grade</span>
                                <input type="url" placeholder="Vous pouvez ajoutez un lien" name="lien_grade" class="lien">
                                            <span>ou</span>
                                            <p><input type="file" name="grade" class=""></p>
                                            <a href="<?php echo $lien_suppression."grade.pdf" ?>" class="suppression">Supprimer justificatif actuel</a>
                                <label class="message_erreur"> 
                                <?php
                                if(isset($_SESSION['message_erreur_grade'])){
                                    echo $_SESSION['message_erreur_grade'];
                                    unset($_SESSION['message_erreur_grade']);
                                }
                                ?></label>
                                <label class="message_validation"> 
                                <?php
                                if(isset($_SESSION['message_validation_grade'])){
                                    echo $_SESSION['message_validation_grade'];
                                    unset($_SESSION['message_validation_grade']);
                                }
                                ?></label>
                                </div>
                                
                            </div>         
                            <input type="submit" value="Enregistrer"> 

                                <!-- fin du code pour le box-licence du contenu de la case -->


                            </div>
                            <!-- fin du code pour le contenu de la case -->

              </form>

            </div> 
            </div>

              </details>
             
              <details>
   <summary>MES PRODUCTIONS SCIENTIFIQUES</summary>
            
            <!-- Production scientifique -->

            <div class="critere" id="6">

            <span class="titre">Production scientifique</span>
            <div class="element2">
               <form action="http://localhost/candidature/code_candidature/verification_candidat_production.php" method='POST' enctype="multipart/form-data" >
                            

                            <!-- debut du code pour le contenu de la case -->
                            <div class="experience">

                                <!-- debut du code pour le box-licence du contenu de la case -->

                            <div class="experience2">

                                <div class="contenu_licence">
                                    <span>Brevet</span>
                                    <input type="url" placeholder="Vous pouvez ajoutez un lien" name="lien_brevet" class="lien">
                                            <span>ou</span>
                                            <p><input type="file" name="brevet" class=""></p>
                                            <a href="<?php echo $lien_suppression."brevet.pdf" ?>" class="suppression">Supprimer justificatif actuel</a>
                                    <label class="message_erreur"> 
                                    <?php
                                    if(isset($_SESSION['message_erreur_brevet'])){
                                        echo $_SESSION['message_erreur_brevet'];
                                        unset($_SESSION['message_erreur_brevet']);
                                    }?>
                                    </label>
                                    <label class="message_validation"> 
                                    <?php
                                    if(isset($_SESSION['message_validation_brevet'])){
                                        echo $_SESSION['message_validation_brevet'];
                                        unset($_SESSION['message_validation_brevet']);
                                    }
                                    ?></label>
                                </div>
                                
                            </div>         
                            <input type="submit" value="Enregistrer"> 

                                <!-- fin du code pour le box-licence du contenu de la case -->


                            </div>
                            <!-- fin du code pour le contenu de la case -->

              </form>

          </div> 
            </div>
        
            </details>      
           
            <details>
   <summary>MES PUBLICATIONS </summary>
    

                                        <!-- Publication -->

                   <div class="critere" id="7">
                   <span class="titre">Publication</span>
                <div class="contenu">
                <form action="http://localhost/candidature/code_candidature/verification_candidat_publication.php" method='POST' enctype="multipart/form-data" >
                

                    <div class="element2">

                           <!-- Article domaine -->
                        <div class="experience">
                                    <!-- <span class="titre2">Article indéxé du domaine</span>  -->
                                    <div class="experience2">
                                  
                                        <div class="contenu_licence contenu_licence2 ">
                                            <span>Article indéxé du domaine</span>                                             
                                            <input type="url" placeholder="Vous pouvez ajoutez un lien" name="lien_article_domaine" class="lien">
                                            <span>ou</span>
                                            <p><input type="file" name="article_domaine" class=""></p>
                                            <a href="<?php echo $lien_suppression."article_domaine.pdf" ?>" class="suppression">Supprimer justificatif actuel</a>
                                            <label class="message_erreur"> 
                                            <?php
                                            if(isset($_SESSION['message_erreur_article_domaine'])){
                                                echo $_SESSION['message_erreur_article_domaine'];
                                                unset($_SESSION['message_erreur_article_domaine']);
                                            }?>
                                            </label>
                                            <label class="message_validation"> 
                                            <?php
                                            if(isset($_SESSION['message_validation_article_domaine'])){
                                                echo $_SESSION['message_validation_article_domaine'];
                                                unset($_SESSION['message_validation_article_domaine']);
                                            }
                                            ?></label>
                                        </div>

                                        <div class="contenu_licence contenu_licence2 ">
                                            <span>Article indexé hors domaine, article non indexé du domaine et article de vulgarisation</span>                                             
                                            <input type="url" placeholder="Vous pouvez ajoutez un lien" name="lien_article_hors_domaine" class="lien">
                                            <span>ou</span>
                                            <p><input type="file" name="article_hors_domaine" class=""></p>
                                            <a href="<?php echo $lien_suppression."article_hors_domaine.pdf" ?>" class="suppression">Supprimer justificatif actuel</a>
                                            <label class="message_erreur"> 
                                            <?php
                                            if(isset($_SESSION['message_erreur_article_hors_domaine'])){
                                                echo $_SESSION['message_erreur_article_hors_domaine'];
                                                unset($_SESSION['message_erreur_article_hors_domaine']);
                                            }?>
                                    </label>
                                    <label class="message_validation"> 
                                    <?php
                                            if(isset($_SESSION['message_erreur_article_hors_domaine'])){
                                                echo $_SESSION['message_erreur_article_hors_domaine'];
                                                unset($_SESSION['message_erreur_article_hors_domaine']);
                                            }
                                            ?></label>
                                        </div>

                                        <div class="contenu_licence contenu_licence2 ">
                                            <span>Livre du domaine</span>                                             
                                            <input type="url" placeholder="Vous pouvez ajoutez un lien" name="lien_livre_domaine" class="lien">
                                            <span>ou</span>
                                            <p><input type="file" name="livre_domaine" class=""></p>
                                            <a href="<?php echo $lien_suppression."livre_domaine.pdf" ?>" class="suppression">Supprimer justificatif actuel</a>
                                            <label class="message_erreur"> 
                                            <?php
                                            if(isset($_SESSION['message_erreur_livre_domaine'])){
                                                echo $_SESSION['message_erreur_livre_domaine'];
                                                unset($_SESSION['message_erreur_livre_domaine']);
                                            }?>
                                    </label>
                                    <label class="message_validation"> 
                                    <?php
                                            if(isset($_SESSION['message_validation_livre_domaine'])){
                                                echo $_SESSION['message_validation_livre_domaine'];
                                                unset($_SESSION['message_validation_livre_domaine']);
                                            }
                                            ?></label>
                                        </div>
                                        <div class="contenu_licence contenu_licence2 ">
                                        <span>Livre de vulgarisation et fiche technique du domaine</span> 
                                        <input type="url" placeholder="Vous pouvez ajoutez un lien" name="lien_livre_vulgarisation" class="lien">
                                            <span>ou</span>
                                            <p><input type="file" name="livre_vulgarisation" class=""></p>
                                            <a href="<?php echo $lien_suppression."livre_vulgarisation.pdf" ?>" class="suppression">Supprimer justificatif actuel</a>       
                                            <label class="message_erreur"> 
                                            <?php
                                            if(isset($_SESSION['message_erreur_livre_vulgarisation'])){
                                                echo $_SESSION['message_erreur_livre_vulgarisation'];
                                                unset($_SESSION['message_erreur_livre_vulgarisation']);
                                            }?>
                                    </label>
                                    <label class="message_validation"> 
                                    <?php
                                            if(isset($_SESSION['message_validation_livre_vulgarisation'])){
                                                echo $_SESSION['message_validation_livre_vulgarisation'];
                                                unset($_SESSION['message_validation_livre_vulgarisation']);
                                            }
                                            ?></label>
                                        </div>
                                        

                            </div>
                            <input type="submit" value="Enregistrer"> 
                            </div>
                            
                           
                                            </div>
                                            
                    <!-- </div> -->
              </form>
                    <!-- fin Publication -->
             </div>
                   </div>
                    
                

</details>
<details>
   <summary>MES PROCEDINGS </summary>


             <!-- Proccedings ou chapitre d'un livre du domaine -->


             <div class="critere" id="8">
             <span class="titre">Proccedings ou chapitre d'un livre du domaine</span>
            <div class="element2">
               <form action="http://localhost/candidature/code_candidature/verification_candidat_procceding.php" method='POST' enctype="multipart/form-data" >
                            

                            <!-- debut du code pour le contenu de la case -->
                            <div class="experience">

                                <!-- debut du code pour le box-licence du contenu de la case -->

                            <div class="experience2">

                                <div class="contenu_licence">
                                <span>Proccedings ou chapitre d'un livre du domaine</span>
                                 <input type="url" placeholder="Vous pouvez ajoutez un lien" name="lien_procceding" class="lien">
                                            <span>ou</span>
                                            <p><input type="file" name="procceding" class=""></p>
                                            <a href="<?php echo $lien_suppression."procceding.pdf" ?>" class="suppression">Supprimer justificatif actuel</a>
                                <label class="message_erreur"> 
                                <?php
                                if(isset($_SESSION['message_erreur_procceding'])){
                                    echo $_SESSION['message_erreur_procceding'];
                                    unset($_SESSION['message_erreur_procceding']);
                                }?>
                                    </label>
                                    <label class="message_validation"> 
                                    <?php
                                if(isset($_SESSION['message_validation_procceding'])){
                                    echo $_SESSION['message_validation_procceding'];
                                    unset($_SESSION['message_validation_procceding']);
                                }
                                ?></label>
                                </div>
                                
                            </div>         
                            <input type="submit" value="Enregistrer"> 

                                <!-- fin du code pour le box-licence du contenu de la case -->


                            </div>
                            <!-- fin du code pour le contenu de la case -->

              </form>

             </div>  
             </div>
</details>
             
             
<details>
   <summary>MES COMMUNICATIONS ET CONFERENCES </summary> 


             <!-- Communication conférence -->

             <div class="critere" id="9">
             <span class="titre">Communication et conférence</span>

            <div class="element2">
            <form action="http://localhost/candidature/code_candidature/verification_candidat_communication.php" method='POST' enctype="multipart/form-data" >
               

               <!-- debut du code pour le contenu de la case -->
               <div class="experience">

                   <!-- debut du code pour le box-licence du contenu de la case -->

               <div class="experience2">

                   <div class="contenu_licence">
                   <span>Communication et conférence</span>
                   <input type="url" placeholder="Vous pouvez ajoutez un lien" name="lien_communication" class="lien">
                    <span>ou</span>
                    <p><input type="file" name="communication" class=""></p>
                    <a href="<?php echo $lien_suppression."communication.pdf" ?>" class="suppression">Supprimer justificatif actuel</a>
                   <label class="message_erreur"> 
                   <?php
                   if(isset($_SESSION['message_erreur_communication'])){
                       echo $_SESSION['message_erreur_communication'];
                       unset($_SESSION['message_erreur_communication']);
                   }?>
                                   </label>
                                    <label class="message_validation"> 
                                    <?php
                   if(isset($_SESSION['message_validation_communication'])){
                    echo $_SESSION['message_validation_communication'];
                    unset($_SESSION['message_validation_communication']);
                }
                   ?></label>
                   </div>
                   
               </div>         
               <input type="submit" value="Enregistrer"> 

                   <!-- fin du code pour le box-licence du contenu de la case -->


               </div>
               <!-- fin du code pour le contenu de la case -->

 </form>

</div>   
             </div>
</details>
             
 </div>

    
</body>

<?php
 get_footer();
?>