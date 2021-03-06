<?php
/* template name:page presentation */
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<style>
    *{
        margin: 0;padding: 0;
    }
    .titre_text2 .titre_text{
        width: 50%;
    }
    section.main_body{
        display: grid;
        grid-template-rows: 150px auto 150px;
    }
    body{
        background-image: url("http://localhost/candidature/code_candidature/bg.jpg");
        background-position: 0;
        background-repeat: repeat-y;
        background-size: contain;
    }
    .container{
        margin-bottom: 2%
    }
    div.header{
        background-image: url("http://localhost/candidature/code_candidature/bg.jpg");
        background-position: 0;
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        background-color: white;
        box-shadow: 0px 5px 3px rgb(141, 54, 20);
        border-radius: 0% 0% 1% 1%;
        position: -webkit-sticky;
        position: sticky;
        top: 0px;
    }
    div.header img{
        width: 200px;
        margin-left: 10%;
    }
    div.menu_bar{
        display: flex;
        gap: 0.2em;
        width: 30%;
        position: absolute;
        bottom: 0%;
        right: 1%;
        flex-wrap: nowrap;
    }
    div.menu_bar a{
        text-decoration: none;
        color: white;
        font-size: large;
        padding: 2%;
        margin-bottom: 5.5%;
        background-color: rgb(132, 181, 39);
        width: 90%;
        margin-right: 2%;
        text-align: center;
        box-shadow: 0px 5px 3px rgb(141, 54, 20);
        transition: 2s all;
    }
    div.menu_bar a:hover{
        transform: scale(1.05);
        background-color:rgb(141, 54, 20);
        box-shadow: 0px 5px 3px rgb(132, 181, 39);
        transition: 1s all;
    }
    img.banner_recteur{
        width: 100%;
        margin-top: 1%;
        box-shadow: 0px 5px 3px rgb(141, 54, 20);
        height: auto;
        border-radius: 1% 1% 0% 0%;
    }
    div.titre_text h1{
        background-color: rgba(10, 107, 49,0.6);
        margin: 2% 10%;
        text-align: center;
        color: white;
        box-shadow: 0px 5px 3px rgb(141, 54, 20);
    }
    .p{
        margin: 0% 10%;
        text-align: justify;
        box-shadow: 0px 5px 3px rgb(141, 54, 20);
        padding: 2%;
        background-color: rgba(255,255,255,0.6);
    }
    div.titre_text2{
        display: flex;
        margin: 2% 5%;
        width: 90%;
    }
    .nom{
        text-align: right;
    }
   
    @media(max-width:745px){
        section.main_body{
        grid-template-rows: 100px auto 100px;
    }
    div.header img{
        width: 130px;
    }
    div.menu_bar a{
        font-size: small;
        margin-right: 5%;
        margin-bottom: 8%;
    }
    div.titre_text2{
        display: flex;
        flex-direction: column;
        margin: 2% 0%;
    }
    div.menu_bar a{
            font-size: x-small;
        }
        .titre_text2 .titre_text{
        width: 100%;
    }
    div.titre_text2{
        width: 100%;
    }
    }
    
    @media(max-width:450px){
        div.menu_bar a{
            font-size: 0.5em;
        }
    }
    footer{
    background-color:#333;
    /* padding :2em; */
}

 div.pied_de_page_general{
	 display :flex;
	 flex-wrap :wrap;
	 justify-content : space-between;
	 gap:1em;
	 
 }
 div.reseau_sociaux{
	display :flex;
	justify-content : center;
	gap: 3px;
 }
 div.blog_gauche{
     display:flex;
     flex-direction:column;
     /* align-items :center; */
     gap:1em 0;
 }
 div.blog_gauche label{
     font-size:x-large;
     color:gray;
 }
 div.blog_gauche a{
     color: rgb(132, 181, 39);
     font-size:large;  
     text-decoration :none;
     transition:all 1s;
 }
 div.blog_gauche a:hover{
     color:green;
     transform:scale(1.03);
     transition: all 1s;
 }
 div.blog_centre{
	 display :flex;
	 flex-direction :column;
	 align-items :center;
     float : bottom;
 }
 div.blog_centre p{
    font-size:large;
    color :gray;
    font-weight:bold;
}
 img#icone{
  width:200px;
  height: 150px;
  cursor : pointer;
 }
img.aplli_google{
	cursor : pointer;
	border-top :2px solid #DB4437;
	border-right :2px solid #4285f4;
	border-bottom :2px solid #0F9D58;
	border-left :2px solid #F4B400;
	padding:0.5em;
	transition: all 1s;
}
img.aplli_rs{
	border :2px solid #4285f4;
    padding:0.5em;
    transition: all 1s;
}

img.aplli_google:hover, img.aplli_rs:hover{
    transform:scale(1.03);
	transition: all 1s;
}
img.google{
	cursor : pointer;
	border-left :2px solid #4285f4;
	border-right :2px solid  #F4B400;
}
</style>
<body>
    <section class="main_body">
        <div class="header">
            <div class="logo">
                <img src="http://localhost/candidature/wp-content/uploads/2021/09/USSEIN-LOGO-1.png" alt="logo USSEIN">
            </div>
            <div class="menu_bar">
                <a href="http://localhost/candidature/connexion/">Se Connecter</a>
                <a href="http://localhost/candidature/inscription/">S'inscrire</a>
            </div>
        </div>
        <div class="container">
            <div class="img_banner">
                <img src="http://localhost/candidature/wp-content/uploads/2021/09/banner_cand.png" alt="banni??re recteur" class="banner_recteur">
            </div>
            <div class="titre_text">
                <h1>Mot du Recteur</h1>
                <p class="p"> 
                    <strong>Chers visiteurs,</strong><br>
                    <strong>Chers partenaires,</strong><br>
                    <strong>Chers membres de l???espace Universitaire,</strong><br><br>

                    L???Universit?? du Sine Saloum El-Hadj Ibrahima NIASS (USSEIN) est une universit?? ?? vocation agricole cr????e par son Excellence, Monsieur Macky Sall, Pr??sident de la R??publique, par D??cret n??2013-173 du 25 janvier 2013. Elle forme des ??tudiants(es) ?? l???agriculture et aux m??tiers connexes pour la s??curit?? alimentaire, le d??veloppement durable et la prosp??rit??.
                    <br>
                    La mission de l???USSEIN est de former des ressources humaines de qualit??, entreprenantes et capables d???accompagner le d??veloppement agricole pour relever le d??fi du d??veloppement ??conomique et social du pays et de la sous r??gion africaine.
                    <br><br>
                    L???USSEIN s???engage ??galement dans une d??marche de citoyennet?? pour rendre service ?? la communaut?? et participer ?? la diffusion des savoirs. L???USSEIN entend aussi s???investir dans la r??flexion et la recherche sur les grands enjeux actuels et futurs de l???agriculture.
                    <br><br>
                    L???USSEIN dispose d???un personnel d???enseignement et de recherche s??lectionn?? ?? travers le S??n??gal, l???Afrique, l???Am??rique du nord, l???Asie et l???Europe. Ce personnel comprend aussi des cadres issus du monde socioprofessionnel.
                    <br><br>
                    L???USSEIN propose ici une offre de formation riche de 35 Licences professionnalisantes correspondant aux besoins du secteur ??conomique et dans les secteurs tr??s porteurs. L???USSEIN compte ainsi participer pleinement ?? l???atteinte des objectifs du Plan S??n??gal Emergent et de l???Agenda 2063 de l???Afrique dans le secteur de l???agriculture.
                    <br><br>
                    Ces formations innovantes se d??rouleront en 6 semestres et sont b??ties sur des connaissances fondamentales (scientifiques et techniques) et sur des pratiques professionnelles.
                    <br><br>
                    Ces licences sont reparties dans les 04 Unit??s de Formation et de Recherche (UFR) / 12 D??partements qui constituent l???ossature de l???USSEIN.
                    <br><br>
                    Gr??ce ?? une d??marche novatrice, l???USSEIN entend ainsi r??pondre ?? l???ad??quation formation-emploi et ?? la demande de l???employabilit?? des jeunes dipl??m??s, tout en d??veloppant leur esprit d???entreprise.
                    <br><br>
                    La licence ouvrira aux jeunes dipl??m??s les portes pour l???obtention d???un emploi, la voie pour la cr??ation d???entreprises ou la poursuite vers des fili??res de masters ou ing??nieurs.
                    <br><br><br>
                    <strong class="nom">Professeur Nd??ye Coumba TOURE</strong><br>
                    Recteur de l???Universit?? du Sine Saloum El-H??dj Ibrahima NIASS
                </p>
            </div>
            <div class="titre_text2">
                <div class="titre_text">
                    <h1>Vision</h1>
                    <p class="p">
                    L???Universit?? du Sine Saloum El Hadj Ibrahima NIASS se veut ??tre une universit?? de 4??me g??n??ration. Elle va s???inspirer de l???exp??rience des universit??s ??mergentes mais elle devra surtout prendre en compte les le??ons apprises de 3 g??n??rations d???universit??s au S??n??gal : Dakar (1??re g??n??ration), Saint Louis (2??me g??n??ration) et Thi??s/Ziguinchor/Bambey (3??me g??n??ration).
                    L???ambition est de faire de l???USSEIN une universit?? moderne de classe internationale qui sera attractive aussi bien pour les ??tudiants du S??n??gal et de la sous r??gion que pour les PER et PATS.
                    <br><br>
Premi??re universit?? ?? polariser plusieurs r??gions administratives, l???USSEIN jouera ?? fond la diversification des fili??res et des sites avec des unit??s de formation et recherche (UFR) et ??coles qui seront install??es dans les quatre r??gions, ?? Kaolack, Fatick, Kaffrine et Diourbel. Ancr??e dans ses terroirs dont elle va tirer le meilleur profit, elle va s???employer ?? rendre des services aux communaut??s.
<br><br><br>
Grace au partenariat qui sera tiss?? avec l???ITA et l???ISRA, entre autres, de la valeur sera ajout??e au projet de l???USSEIN qui pourra ainsi mieux r??ussir sa mission en favorisant le transfert de technologies accumul??es par ces institutions partenaires au sein de la communaut??. Ainsi, l???USSEIN devra contribuer ?? la modernisation de l???agriculture familiale tout en s???appuyant sur les savoirs endog??nes.
<br><br><br>
Comme toute universit??, l???USSEIN va dispenser des savoirs ; mais elle mettra surtout l???accent sur les savoir-faire et les savoir-??tre dans une perspective professionnalisante pour assurer un d??veloppement durable.
<br><br><br><br>
Par ailleurs cette universit?? devant r??pondre aux besoins du d??veloppement industriel des zones d???implantation, il est important de r??server suffisamment d???espaces pour les parcs scientifiques et incubateurs pour susciter l???auto emploi des futurs dipl??m??s et l???initiative priv??e autour du potentiel agricole de la r??gion.
<br><br><br>
Elle sera adoss??e sur une recherche de qualit??, gage de sa cr??dibilit?? et de sa performance. De par la place qu???elle va occuper dans son espace, l???USSEIN, gr??ce ?? ses comp??tences, devra se positionner comme un pole de r??f??rence de la r??flexion, de la prospective et de l???innovation dans le domaine de l???agriculture et du d??veloppement rural au S??n??gal <br>
                    </p>
                </div>
                <div class="titre_text">
                    <h1>Mission</h1>
                    <p class="p">
                   <strong>Nos missions:</strong><br><br>

Former les ressources humaines aptes ?? r??pondre aux besoins du d??veloppement agricole et rural, et ?? ??laborer les connaissances et les technologies ad??quates pour un d??veloppement local, national et r??gional,
Donner ?? la jeunesse une formation comp??titive, ouverte et susceptible de lui permettre de saisir les opportunit??s offertes par le d??veloppement local, national et r??gional,<br>
Former des comp??tences capables de g??rer les innovations et de proposer des actions prospectives,<br>
R??pondre ?? des besoins de formation diversifi??e au profit d???apprenants de plus en plus h??t??rog??nes,<br>
Promouvoir une d??marche inclusive prenant en compte les apports traditionnels des communaut??s dans les strat??gies d???adaptation et d???innovation,<br>
B??tir un partenariat innovant entre agriculteurs, chercheurs et vulgarisateurs pour la mise au point de technologies appropri??es et durables,<br>
Porter la qualit?? de la formation et de la recherche au niveau des standards internationaux,<br>
D??velopper dans les programmes et au sein des ??coles doctorales une recherche au service de l???innovation et du d??veloppement agricole, profitable ?? la communaut??,<br>
Contribuer ?? l???int??gration r??gionale et ?? la consolidation de l???espace africain de l???enseignement sup??rieur,<br><br>
<strong>Les Principes:</strong><br><br>

Efficience et efficacit?? : P??dagogie de la r??ussite,<br>
Qualit?? : Auto-??valuation et d???am??lioration continue de la qualit?? seront appliqu??s. L???USSEIN mettra au c??ur de sa d??marche, la satisfaction de l?????tudiant,<br>
Flexibilit?? : Outre les connaissances acad??miques, l???USSEIN reconna??tra et valorisera les acquis de l???exp??rience,<br>
Apprentissage des langues : Anglais, langues nationales, arabe, chinois,<br>
Motivation, ??quit?? et citoyennet?? : l???USSEIN doit ??tre un espace de rayonnement intellectuel fond?? sur des valeurs de d??mocratie, de citoyennet??, d?????quit?? et de patriotisme,<br>
Bonne gouvernance : la transparence et la reddition de comptes seront de rigueur. Elle mettra en ??uvre une gouvernance vertueuse et efficiente qui exploitera ?? fond les ??nergies positives,<br>
Partenariat avec les collectivit??s locales,<br>
Cr??ation d???une Fondation pour l???USSEIN pour diversifier les sources de financement,
                    </p>
                </div>
            </div>
            <div class="titre_text">
                <h1>Pr??sentation</h1>
                <p class="p">
                Le Gouvernement du S??n??gal, conscient de l???enjeu que repr??sente l???agriculture dans le d??veloppement ??conomique et social de notre pays, a fait du d??veloppement de  ce secteur sa premi??re priorit??. De nombreuses mesures ont ??t?? annonc??es pour la modernisation et le d??veloppement de ce secteur  parmi lesquelles la cr??ation d???une universit?? ?? vocation agricole d??nomm??e Universit?? du Sine Saloum  El Hadj Ibrahima NIASS (USSEIN). <br><br>
                L???agriculture demeure encore un des secteurs les plus importants de l???activit?? ??conomique s??n??galaise mais elle est contre performante et n???arrive pas ?? nourrir la population. Le S??n??gal importe l???essentiel de son alimentation et doit faire face ?? des crises alimentaires r??currentes, une ins??curit?? alimentaire chronique et un r??chauffement climatique aux cons??quences n??fastes. Le S??n??gal doit oser op??rer une rupture en mati??re d???agriculture pour affronter frontalement son d??fi majeur qui est de produire pour se nourrir d???abord. Pour cela, le Gouvernement du S??n??gal a d??cid?? d???investir massivement dans l???agriculture. Le Gouvernement du S??n??gal a adopt?? un nouveau document de strat??gie appel?? Plan S??n??gal Emergent (PSE)  qui cherche d???abord ?? infl??chir d???ici ?? l???horizon 2018, les tendances lourdes identifi??es par la r??trospective socio-??conomique. La transformation de l???agriculture servira de fer de lance ?? celle de la structure de l?????conomie. Ainsi, la transformation de la structure de l?????conomie se fera selon plusieurs leviers dont le premier est le d??veloppement de l???agriculture, de la p??che et de l???industrie agroalimentaire <br><br>
                Gagner la bataille de l?????mergence passe n??cessairement par un investissement massif dans le capital humain peu d??velopp??. Former dans les universit??s des ressources humaines de qualit?? d??di??es au secteur de l???agriculture, tel est le pari que s???est fix?? le Gouvernement du S??n??gal pour relever le d??fi de l???ins??curit?? alimentaire chronique, de la pauvret??, du d??veloppement rural et du sous emploi de la jeunesse. Aujourd???hui, il ne fait aucun doute que le d??veloppement ??conomique d???un pays repose sur son savoir, son savoir-faire et sa comp??titivit?? tributaires, pour une grande part, de ses capacit??s d???adaptation et d???innovations qui permettent le renouvellement rapide et profond du savoir de haut niveau. La saturation des capacit??s d???accueil, constat??e dans le sous-secteur, particuli??rement ?? l???UCAD, l???inad??quation formation-emploi, obligent ?? op??rer une r??organisation et une diversification des offres de formation. Cette contrainte, qui prend les contours d???un d??fi ?? relever par l???Etat du S??n??gal, ob??it ?? un souci de pr??server  la qualit??, la pertinence et l???efficacit??. <br><br>
                Le gouvernement a d??cid?? de poursuivre la politique de d??centralisation de l???enseignement sup??rieur sur la base  d???une carte universitaire coh??rente et diversifi??e en vue de faire du S??n??gal un hub d???enseignement sup??rieur  en Afrique. La prise en charge des zones du Centre et de l???Est du pays dans la mise en ??uvre de la carte universitaire, s???impose car l???acc??s des populations ?? l???enseignement sup??rieur, est non seulement un imp??ratif de d??veloppement harmonieux et ??quilibr??, mais ??galement une question fondamentale d?????quit??. <br><br>
                La cr??ation de l???Universit?? du Sine Saloum El Hadji Ibrahima NIASS  (D??cret 2013-173 du 25 janvier 2013) r??pond ?? une n??cessit?? socio-??conomique car elle permet au Gouvernement du S??n??gal d???apporter une r??ponse appropri??e aux besoins de d??veloppement de 03 r??gions nourrici??res du Centre par la valorisation de leurs ressources et de leurs atouts. Elle est ??galement une volont?? d?????quilibrer la distribution spatiale des institutions universitaires et des effectifs. <br><br>
                Grand pourvoyeur de bacheliers au S??n??gal, ce terroir ne dispose pas ?? ce jour d???un ??tablissement d???enseignement sup??rieur. Grenier du S??n??gal, le bassin arachidier pourra enfin disposer d???une universit?? ?? vocation agricole. Par sa position g??ographique, Kaolack polarise les r??gions de Fatick, Kaffrine, Diourbel, Tamba et K??dougou. En plus d???animer la vie culturelle et scientifique, l???Universit?? du Sine Saloum El-h??dj ibrahima NIASS ouvrira une large fen??tre sur le monde ext??rieur et aura un impact direct sur la vie ??conomique et touristique de la r??gion. 
                </p>
            </div>
            
        </div>
        <footer>
        <div class="footer">
        <div class="pied_de_page_general">

<div class="blog_gauche">
<label > A PROPOS DE L???USSEIN </label> 

    <a href="https://www.ussein.sn/mission/"> MISSION </a>
    <a href="https://www.ussein.sn/vision/"> VISION </a>
    <a href="https://www.ussein.sn/defis-et-opportunites/"> D??FIS ET OPPORTUNIT??S </a>
</div>

<div class="blog_centre"> 
    <p>Plateforme de candidature a l'Universite Sine Saloum El-Hadji Ibrahima Niasse</p>
    <p>copyright USSEIN , DISI 2021</p>
    </div>

<div class="blog_droite">

    <div class="reseau_sociaux">

        <a href="https://www.google.com/intl/fr/gmail/about/" > <img class="aplli_google" src="https://img.icons8.com/color/48/000000/gmail-new.png"/> </a>
        <a href="https://twitter.com/?lang=fr" target="_blank"> <img class="aplli_rs" src="https://img.icons8.com/color/48/000000/twitter--v1.png"/> </a>
        <a href="https://fr-fr.facebook.com/" target="_blank"> <img class="aplli_rs" src="https://img.icons8.com/fluency/48/000000/facebook-circled.png"/> </a>
        <a href="https://www.google.fr/" target="_blank"> <img class="aplli_google google" src="https://img.icons8.com/color/48/000000/google-logo.png"/>  </a>
                             
    </div>

</div>


</div>
        </div>
</footer>
    </section>
</body>
</html>