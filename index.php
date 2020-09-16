<?php session_start();
 require_once 'models/connection.php';

$modifindex = mysqli_query($Conn, "SELECT titre, para, photo FROM projects");
$rowindex= mysqli_fetch_array( $modifindex);

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shotcut icon" type="image/x-icon" href="img/logo.png" height="0" width="100">
    <script src="https://kit.fontawesome.com/03aea6aaf2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <title>Document</title>
</head>

<body>

    <!-------------------- POPUP ----------------------->

    <div class="popup">
        <div>
            <form class="log" action="controllers/login.php" method='POST'>
                <label for="mail">
                    <h3>E-mail</h3>
                </label>
                <input type="email" name="email" id="mail">
                <label for="pass">
                    <h3>Password</h3>
                </label>
                <input type="password" name="pass" id="pass">
                <input type="submit" value="Login">
            </form>
        </div>
        <div class="overlay" id="overlay"></div>
    </div>

    <!-------------------- HEADER ----------------------->


    <header>
        <!-------------------- HEADER NAV BAR ----------------------->

        <nav>

            <img src="img/logo (2).png" alt="logo">
            <div class="humberger" id="hum"></div>
            <ul id="menu">

                <li><a href="#" class="nav-link"> Accueil</a></li>
                <li><a href="#s1" class="nav-link">A propos de moi </a></li>
                <li><a href="#s2" class="nav-link">Portfolio</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>

            </ul>

            <button id="login"><i class="fas fa-user-lock"></i>Login</button>

        </nav>

        <!-------------------- HEADER TEXT ----------------------->

        <div class="para">
        <p class="para-p"><strong> Khadija Zerzkhane </strong></p>
            <p>Étudiante en développement Web & technicienne spécialisée en gestion d'entreprise </p>



        </div>
    </header>



    <!---------------------------------------- MAIN SECTION---------------------------------------------->

    <main>

        <!-------------------- SECTION1 ----------------------->
        <section id='s1' class="aboutme">

            <!-------------------- ABOUT ME ----------------------->




            <!-- <div class="ME">
                <h1>que suis-je?</h1>
                
                     <p>Je suis conceptrice, développeuse et technicienne spécialisée en gestion des entreprise. La programmation et la conception Web n'ont jamais été mes seules passions. Je suis quelqu'un de très dynamique et je peux faire plusieurs choses en une journée. Je n'aime pas rester inactive. Chez moi, je m'occupe de presque tout. Je n'aime pas échouer dans tout ce que je fais. L'échec me met mal à l'aise même si on dit que pour réussir il faut avoir échoué plusieurs fois.    
                </p>
                <img src="img/0.jpg"  class="my" width="100" alt="vector">
                </div> -->


            <main id="about">
                <!-- <h1 class="lg-heading">
                      A propos
                      <span class="text-secondary">de moi</span>
                    </h1>
                    <h2 class="sm-heading">
                      Laissez-moi vous dire quelques choses ...
                    </h2> -->
                <div class="about-info">
                    <img src="img/0P9A7338.png" alt="khadija zerzkhane" class="bio-image" width="200">

                    <div class="bio">
                        <div class="wrapper">
                            <h1>Que suis-je</h1>
                        </div>
                        <h6 class="text-secondary">Je suis conceptrice, développeuse et technicienne spécialisée en
                            gestion des entreprise. La<br> programmation et la conception Web n'ont jamais été mes
                            seules passions. Je suis quelqu'un <br> de très dynamique et je peux faire plusieurs choses
                            en une journée. Je n'aime pas rester inactive.<br> Chez moi, je m'occupe de presque tout. Je
                            n'aime pas échouer dans tout ce que je fais. L'échec me met mal à l'aise même si on dit que
                            pour réussir il faut avoir échoué plusieurs fois. </h6>

                        <img src="img/0 (2).jpg " alt="khadija zerzkhane" class="info-image" height="120" width="300">
                        <img src="img/0.jpg" alt="khadija zerzkhane" class="info-image " height="120" width="300">
                        <img src="img/images (2).jpg" alt="khadija zerzkhane" class="info-image " height="120"
                            width="300">
                        <img src="img/images (1).jpg" alt="khadija zerzkhane" class="info-image " height="120"
                            width="300">
                    </div>

                    <div class="job job-1">

                        <h3> ACT school</h3><br>
                        <h6>Participante</h6>
                        <h8>Basé sur le modèle conçu et développé par Connect Institute, ACT School est un programme
                            éducatif, culturel et d’incubation, lancé en décembre 2018 à Youssoufia. Ce programme vise
                            l’accompagnement des jeunes marocains, le développement de leurs compétences et talents et
                            leur préparation pour un avenir meilleur.</h8>
                        <!-- <img src="img/images.jpg" width="120" alt="">
                          <img src="img/0 (2).jpg"  width="120" height="80" alt="">
                          <img src="img/1W7A4034.JPG" width="120" height="80" alt=""> -->
                    </div>

                    <div class="job job-2">
                        <h3>ISTA </h3><br>
                        <h6> Technicienne spécialisée en gestion des entreprise </h6>
                        <h8>La gestion d’entreprise est un concept qui renferme tout un ensemble d'éléments qui tendent
                            à définir le mécanisme de mise en marche du projet, devenu entreprise. </h8>
                        <!-- <img src="img/0.jpg" width="120" height="80" alt=""> -->
                    </div>

                    <div class="job job-3">
                        <h3>YouCode</h3><br>
                        <h6>Etudiante</h6>
                        <h8>YouCode est une école spécialisée en développement web parmi les technologies acquis dans
                            cette établissement en première année : HTML, CSS, JAVASCRIPT, MySQL, GitHub, SASS.....</h8>
                        <!-- <img src="img/images (1).jpg" width="120" height="80" alt="">
                          <img src="img/images (2).jpg"  width="120" height="80" alt="">
                          <img src="img/téléchargement.jpg" width="120" height="80" alt=""> -->
                    </div>


                </div>
            </main>

            <!-------------------- MY SKILLS ----------------------->



        </section>


        <!-------------------- SECTION2 ----------------------->


        <section id='s2' class="projects">
            <!-------------------- my projects ----------------------->

            <div class="wrapper">
                <h1><?php echo $rowindex["titre"];?></h1>


                <div class="wrapper">
                    <h1></h1>
                </div>


                <span class="left-arrow" id="left"></span>

                <div class="projects__list">
                    <div>

                        <?php 
if($rowindex["photo"]!=""){

    echo "<img   class='mySlides' src= 'img/".$rowindex["photo"]."'
    style='width:100%; alt=''>";
}else{
    echo "<p>erreur fichier interouvable</p>";
}




?>


                        <img class="mySlides" src="img/youAgency.png" style="width:100%">
                        <img class="mySlides" src="img/site e commerce.png" style="width:100%">
                        <img class="mySlides" src="img/corona -hero.png" style="width:100%">

                    </div><br><br><br>
                    <h4>
                        </h4> <br>
                            <h4><?php echo $rowindex["para"];?></h4>
                            <img class="arrow" src="img/arrow-39450_640.png" style="width:60px">

                            <a href="https://github.com/khadija1998"><button class="button">Githup<strong>
                                    </strong></button></a>
                </div>

        </section>


    </main>



    <!---------------------------------------- FOOTER---------------------------------------------->

    <footer id='contact'>

        <!-------------------- FOOTER SECTION1 ----------------------->
        <div class="wrapper">
            <h1>Contact</h1>
        </div>
         <section class="contact">
            <div class="social">


                <div class="soc"><img src="img/Gmail_29991.png" alt=""><a class="link-soc"
                        href='#'>khadija.zerzkhane98@gmail.com</a></div>
                <div class="soc"><img src="img/phone-symbol-of-an-auricular-inside-a-circle_icon-icons.com_56478.svg"
                        alt=""> <a class="link-soc" href='#'>+212699074201</a></div>
                <div class="soc"><img src="img/linkedin_icon-icons.com_53609.png" alt=""><a class="link-soc"
                        href="https://www.linkedin.com/in/khadija-zerzkhane-ba8ab41a2/">Khadija Zerzkhane</a></div>
                <div class="soc"><img src="img/twitter.png" alt=""><a class="link-soc"
                        href="https://twitter.com/home?lang=fr">Khadija Zerzkhane</a></div>
            </div>
            </section>
            <!-------------------- FOOTER NAV BAR ----------------------->



            <h6><strong>Mon portfolio non à jour. En cours de rassembler des études de cas et projets. Si vous êtes
                    intéressé à voir mon travail, contactez-moi.</strong> </h6>
            <br><br>
            <h6>Copyright © Kadija Zerzkhane</h6>
            </nav>


    </footer>



    <!---------------------------------------- SCRIPT---------------------------------------------->

    <script src="javascript/LoginPopp.js"></script>
    <script src="javascript/Menu.js"></script>

    <script src="javascript/headr.js"></script>

</body>

</html>