<?php
    session_start();
/* Template name: mot_de_passe_oublie*/

// if(!is_page( 'connexion' ) &&  !$_SESSION['mail']  ){
//     if(!is_page('mot-de-passe-oublie')||(!is_page('inscription'))){
//         wp_redirect( home_url( 'accueil' ));
//             exit;
//     }
    
// }?>

<div class="imgbackground">
        </div>
        <!-- ARRIERE PLAN FLOU -->

            
<fieldset class="connexion">
            <legend> <img src="http://localhost/candidature/wp-content/uploads/2021/09/USSEIN-LOGO.png" alt="Logo"> </legend>  

            <form action="http://localhost/candidature/code_candidature/verification_mot_de_passe_oublier.php" method="POST">
                    <div class="titre">
                        <span>USSEIN CANDIDATURE</span><br>
                        <span>Reinitialisation de votre mot de passe </span>
                   </div>

            
                     <div class="mail box">
                        <input type="text"  name="mail" id="email"  required>
                        <label for="email" class=" info">e-Mail</label>
                          <!-- <br> -->
                    </div>
                    <div class='message_erreur_Mail'>
                        <?php
                        if(isset($_SESSION['message_erreur_Mail'])){
                            echo $_SESSION['message_erreur_Mail'];
                            unset($_SESSION['message_erreur_Mail']);
                        }
                        ?>
                        
                    </div>
                <label > <?php 
                    if(isset($_SESSION['message_validation'])){
                        echo $_SESSION['message_validation'];
                        unset($_SESSION['message_validation']);
                    }
                ?></label>
                
                <div class="connecter box">
                     <input  type="submit" id='submit' value='Reinitialiser' name="envoyer" >
                </div>

                </form>
                </fieldset>
            

<style>
    .imgbackground{
        position: fixed;
        left: 0;
        right: 0;
        z-index: 0;
        width: 100%;
        height: 100%;
        background-size: cover;
        filter : blur(17px); 
        animation: image 40s linear infinite both;
    }

    @keyframes image{
    0%{background-image: url("http://localhost/candidature/wp-content/uploads/2021/10/6.jpg");}
    25%{background-image: url("http://localhost/candidature/wp-content/uploads/2021/10/2.jpg");}
    50{background-image: url("http://localhost/candidature/wp-content/uploads/2021/10/7.jpg");}
    75%{background-image: url("http://localhost/candidature/wp-content/uploads/2021/10/8.jpg");}
    100%{background-image: url("http://localhost/candidature/wp-content/uploads/2021/10/9.jpg");}
}
    .box input:focus ~ .info,
    .box input:valid ~ .info{
        transform: translateX(-5px) translateY(-32px);
        font-size: 15PX;
        /* color: ; */
    }
    label.info{
        position: absolute;
        text-align: left;
        left: 3px;
        bottom: 20%;
        font-size: large;
        padding: 2%;
        transition: 0.9s;
        pointer-events: none;
        color: rgb(10,107,49);

    }
img{
        position: relative;
        border-radius: 50%;
        width: 200px;
        height:200px;
        border: 5px solid rgb(10,107,49);
        /* margin-bottom: 5px; */

    }
    .box{
        position: relative;
        padding-left: 2px;
        margin: 10px;
        height: 50px;
        width:300PX;
        background-color: rgba(255, 255, 255, 0.2);
        margin: 15px;
        /* border: 2px solid rgb(10,107,49); */
    }
    input{
        width: 100%;
        height: 100%;
        border: 2px solid rgb(10,107,49);
        border-radius: 5px;
        padding: 3%;
    }
    .connexion{
        position: absolute;
        top: 50%;
        left: 50%;
        border-radius: 15px ;
        height: 550px;
        width: 400px;
        margin-left: -214px;
        margin-top: -300px;
        text-align: center;     
        background-color: rgba(255, 255, 255, 0.3);
        box-shadow: 10px 5px 10px rgb(10,107,49);
        border: 1px solid rgb(10,107,49);

    }
    form{
        position: relative;
        display: flex;
        flex-direction: column;
        padding-top: 10px;
        margin-top: 1px;
        align-items:center;
    }
        
    .connecter input{
        width: 300px;
        border-radius: 20px;
        font-size: x-large;
        background-color: rgb(132,181,39);
        margin-bottom:5px;
        color: white;
    }
    .connecter input:hover{
        background-color: rgb(10,107,49);
    }
    .mail input{
        position:absolute;
        background:transparent;
        left:0;
        top:0;

    }
    
    .titre span{
        font-size: x-large;
        color:rgb(10,107,49) ;
        font-weight: bold;
        font-style: italic;
    }


</style>
<?php
  
  ?>