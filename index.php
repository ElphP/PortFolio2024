<?php




include("form_php.php");
include("loadEnv.php");
include("curl.php");
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex">
    <title>Portfolio 2024</title>

    <link rel="stylesheet" href="./css/style.css" />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="./js/script.js" type="module" defer></script>
</head>

<body>
    <header>
        <div class="navMob ">
            <ul>
                <li>
                    <a href="#" id="lien1">Accueil</a>
                </li>
                <li>
                    <a href="#" id="lien3">Technos abordées</a>
                </li>
                <li>
                    <a href="#" id="lien4">Contact</a>
                </li>
                <li>
                    <a href="#" id="lien2">Sites publiés</a>
                </li>
                <li>
                    <a href="#" id="lien5">Dépôts GitHub</a>
                </li>
                <li>
                    <a href="#" id="lien6">Mini-jeux</a>
                </li>
            </ul>
        </div>

        <div class="titre blurBlack">
            <img src="./img/photoEP.jpg" alt="ma_photo" />
            <div class="titreMov">
                <h1>Elphège PROISY <br />Développeur Web <br />& Web Mobile</h1>
            </div>
        </div>

        <div class="containerNav">
            <nav>
                <ul>
                    <li>
                        <a href="#" id="lien1">Accueil</a>
                    </li>

                    <li>
                        <a href="#" id="lien3">Technos abordées</a>
                    </li>
                    <li>
                        <a href="#" id="lien4">Contact</a>
                    </li>
                </ul>
                <hr>
                <ul>
                    <li>
                        <a href="#" id="lien2">Sites publiés</a>
                    </li>
                    <li>
                        <a href="#" id="lien5">Dépôts GitHub</a>
                    </li>
                    <li>
                        <a href="#" id="lien6">Mini-jeux</a>
                    </li>
                </ul>


            </nav>
        </div>
        <button class="burger">

            <div class="bar1 "></div>
            <div class="bar2 "></div>
            <div class="bar3 "></div>

        </button>


    </header>
    <main>
        <section class="presentText">
            <div class="animation">
                <div id="animText1"></div>
                <div class="secondRow">
                    <div id="animText2"></div>
                    <div id="animText3"></div>
                </div>
            </div>

            <h2>A propos de moi,</h2>

            <p>
                Après plus de 20 ans d'une carrière de musicien d'orchestre
                et de professeur de musique, j'ai décidé de me lancer dans
                une nouvelle aventure en me reconvertissant dans le
                développement web. Mon esprit analytique, ma persévérance et
                mon autonomie sont des qualités qui me seront certainement
                utiles dans mon futur métier de développeur web. Je suis
                impatient de voir ce que j'accomplirai dans ce nouvel
                univers, et j'espère que ma passion et mon talent me
                mèneront loin dans ce nouveau chapitre de ma vie!
                <br /><br />
                Vous pourriez penser que ces deux activités n'ont à priori
                rien en commun, n'est-ce pas ? Et pourtant... En tant que
                compositeur et arrangeur, l'univers musical m'a conduit à
                explorer des dimensions créatives et structurées. Je
                retrouve cette même passion et ce même épanouissement dans
                le monde du codage informatique. Des univers qui nous
                paraissent éloignés se rejoignent finalement, où la
                composition de notes musicales laisse place à la création de
                lignes de code, chaque séquence devenant une expression
                artistique fascinante à part entière.
            </p>
        </section>
        <section class="realis">

            <div class="card">

                <img src="./img/eneaTelecom.png" alt="image_eneaTelecom" />

                <div class="cardText">
                    <h3>Site Enea Telecom</h3>
                    <p class="presentation">
                        J'ai développé et mis en production (de A à Z) ce
                        site vitrine pour une société de Telecommunication active sur
                        le continent africain afin de leur donner une
                        présence sur le Web.
                    </p>
                    <div class="link">
                        <a href="https://eneatelecom.com/" target="_blank" rel="noopener noreferrer">Visiter</a>
                    </div>
                </div>


            </div>
            <div class="card">
                <img src="./img/maFormationAFPA.jpg" alt="image_maformationAFPA" />
                <div class="cardText">
                    <h3>MaFormationAFPA</h3>
                    <p class="presentation">
                        Bienvenue sur ce site ! Ici, vous pourrez découvrir une sélection de mes projets de
                        programmation réalisés entre octobre 2023 et mars 2024, à la fois à Istres et à domicile. Ce
                        portfolio reflète une partie de mon parcours et mes compétences, avec une approche légèrement
                        pédagogique pour
                        partager mes apprentissages et mes expériences tout au long de ce cheminement.
                    </p>
                    <div class="link">

                        <a href="https://betadev.elphegeproisy.com/Site_MaFormAFPA/" target="_blank"
                            rel="noopener noreferrer">Visiter</a>
                    </div>
                </div>

            </div>
            <div class="card">
                <img src="./img//eppublications.jpg" alt="image_maformationAFPA" />
                <div class="cardText">
                    <h3>Mon site perso WordPress</h3>
                    <p class="presentation">
                        Ce site que j'ai créé sous WordPress en 2020 a été le déclic qui m'a ramené au développement
                        Web. Travailler sur ce projet m'a rappelé à quel point j'aimais créer en ligne. J'ai redécouvert
                        un monde beaucoup plus riche de technologies et de possibilités. Depuis, je suis de retour dans
                        le monde du développement Web avec une nouvelle perspective et pleins d'envies pour l'avenir...
                    </p>
                    <div class="link">
                        <a href="https://elphegeproisy.com/" target="_blank" rel="noopener noreferrer">Visiter</a>
                    </div>
                </div>

            </div>



            </div>



        </section>
        <section class="techno">
            <h2>Les technos que j'ai déjà pratiqué...</h2>
            <div class="technos">
                <div class="item">
                    <p>HTML5/CSS3</p>
                    <img src="./img/icones/htmlcss.jpg" alt="icones_technos" />
                </div>
                <div class="item">
                    <p>SASS/SCSS</p>
                    <img src="./img/icones/sass.jpg" alt="icones_technos" />
                </div>
                <div class="item">
                    <p>BootStrap</p>
                    <img src="./img/icones/bootstrap.jpg" alt="icones_technos" />
                </div>
                <div class="item">
                    <p>JavaScript</p>
                    <img src="./img/icones/js.jpg" alt="icones_technos" />
                </div>
                <div class="item">
                    <p>React</p>
                    <img src="./img/icones/react.jpg" alt="icones_technos" />
                </div>
                <div class="item">
                    <p>JQuery</p>
                    <img src="./img/icones/jquery.jpg" alt="icones_technos" />
                </div>
                <div class="item">
                    <p>Wordpress</p>
                    <img src="./img/icones/wordpress.jpg" alt="icones_technos" />
                </div>
                <div class="item">
                    <p>PHP</p>
                    <img src="./img/icones/php.jpg" alt="icones_technos" />
                </div>
                <div class="item">
                    <p>MySQL</p>
                    <img src="./img/icones/mysql.jpg" alt="icones_technos" />
                </div>
                <div class="item">
                    <p>Laravel</p>
                    <img src="./img/icones/laravel.jpg" alt="icones_technos" />
                </div>
                <div class="item">
                    <p>Symfony</p>
                    <img src="./img/icones/symfony.png" alt="icones_technos" />
                </div>
                <div class="item">
                    <p>Postman</p>
                    <img src="./img/icones/postman.jpg" alt="icones_technos" />
                </div>
                <div class="item">
                    <p>Smarty (PS)</p>
                    <img src="./img/icones/smarty.jpg" alt="icones_technos" />
                </div>
                <div class="item">
                    <p>Java (nv1)</p>
                    <img src="./img/icones/java.jpg" alt="icones_technos" />
                </div>
                <div class="item">
                    <p>Docker (nv1)</p>
                    <img src="./img/icones/docker.png" alt="icones_technos" />
                </div>
                <div class="item">
                    <p>Linux (nv1)</p>
                    <img src="./img/icones/linux.png" alt="icones_technos" />
                </div>

        </section>
        <section class="contact">


            <div id="mail">
                <h2>Me contacter</h2>

                <form action="index.php#mail" method="POST">
                    <span class="<?php echo $color_mess ?>"><?php echo $mess_ok ?></span>



                    <div class="idContact">
                        <input type="text" name="nom" id="nom" placeholder="Votre nom" value="<?php echo $name ?>" />
                        <input type="text" name="prenom" id="prenom" placeholder="Votre prénom"
                            value="<?php echo $surname ?>" />
                    </div>
                    <span class="error"><?php echo $name_error ?></span>

                    <input type=" text" name="email" id="email" placeholder="Votre E-mail"
                        value="<?php echo $mail ?>" />
                    <span class="error"><?php echo $mail_error ?></span>


                    <input type="text" name="sujet" id="sujet" placeholder="Objet" value="<?php echo $objet ?>" />

                    <textarea id="mess" name="mess" rows="15"
                        placeholder=" Votre message ici"><?php echo $message ?></textarea>
                    <span class=" error"><?php echo $mess_error ?></span>
                    <input id="subForm" type="submit" name="submit" value=" ENVOYER" />

                </form>
            </div>
        </section>

        <section class="github">
            <div class="profil">
                <a href="https://github.com/ElphP" target="_blank" rel="noopener noreferrer">Mon profil GitHub</a>
            </div>
            <h2>Dépôts GitHub</h2>

            <div id="loading" class="loading-container">
                <div class="loader"></div>
            </div>

            <div id="contentGH"></div>
        </section>

        <section class="jeux">
            <h2>Les mini-jeux</h2>
            <div class="gameCard">
                <a href="https://betadev.elphegeproisy.com/Site_MaFormAFPA/ExJS/Chap3/Pendu/index.html" target="_blank"
                    rel="noopener noreferrer">
                    <img src="./img/icones/pendu.jpg" alt="LeJeuDuPendu">
                    <p>Le jeu du pendu <br> (version simple)</p>

                </a>
            </div>
            <div class="gameCard">
                <a href="https://betadev.elphegeproisy.com/TestTabl/" target="_blank" rel="noopener noreferrer">
                    <img src="./img/icones/multiplications.jpg" alt="LeJeuDesMultiplications">
                    <p>Teste tes tables <br> de mulitplications!</p>
                </a>
            </div>
            <div class="gameCard">
                <a href="https://betadev.elphegeproisy.com/Site_MaFormAFPA/ExJS/Jeu_memory/index.html" target="_blank"
                    rel="noopener noreferrer">
                    <img src="./img/icones/memory.jpg" alt="Memory">
                    <p>Le jeu "Memory"</p>
                </a>
            </div>
            <div class="gameCard">
                <a href="https://betadev.elphegeproisy.com/Site_MaFormAFPA/ExJS/Chap3/Mastermind/index.html"
                    target="_blank" rel="noopener noreferrer">
                    <img src="./img/icones/mastermind.jpg" alt="MasterMind">
                    <p>MasterMind! <br> (jeu contre l'ordinateur)</p>
                </a>
            </div>
            <div class="gameCard">
                <a href="https://betadev.elphegeproisy.com/Site_MaFormAFPA/JeuEchec/Principale.php" target="_blank"
                    rel="noopener noreferrer">
                    <img src="./img/icones/echec.jpg" alt="JeuEchec">
                    <p>Jeu d'échec <br>(2 joueurs)</p>

                </a>
            </div>
        </section>

    </main>
</body>

</html>