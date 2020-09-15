<?php
 session_start();
 require_once '../models/connection.php';

if (!empty($_POST)){
    
$update = "UPDATE projects SET `titre`= '".$_POST["titre"]."', `para`= '".$_POST["paragraphe"]."', `photo`= '".$_POST["photo"]."' ";
mysqli_query($Conn, $update );
$qslmodif = mysqli_query($Conn, "SELECT titre, para, photo FROM projects");
$row = mysqli_fetch_array($qslmodif);


}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shotcut icon" type="image/x-icon" href="../img/logo.png"  height="0" width="100">
    <script src="https://kit.fontawesome.com/03aea6aaf2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
  
    <title>Document</title>
</head>
<body>

            <!-------------------- POPUP ----------------------->





            
    <!-- <div class="popup">
        <div class="log">
            <form action="controllers/login.php" method='POST'>
                <label for="mail"><h3>E-mail</h3></label>
                <input type="email" name="email" id="mail">
                <label for="pass"><h3>Password</h3></label>
                <input type="password" name="pass" id="pass">
                <input type="submit" value="Login">
            </form>
        </div>
        <div class="overlay" id="overlay"></div>
    </div> -->

        <!-------------------- HEADER ----------------------->


    <header>
                <!-------------------- HEADER NAV BAR ----------------------->

        <nav>
            
                <?php
            $sql = "SELECT * FROM `login` WHERE `Email`='khadija.zerzkhane98@gmail.com'";
            $sth = $Conn->query($sql);
            $result=mysqli_fetch_array($sth);
           
            // ?>
            <img src="../img/logo (2).png" alt="logo"> 
           <div class="humberger" id="hum"></div>
            <ul id="menu">
            <li><a href="#" class="nav-link" > Accueil</a></li>
                <li><a href="#s1" class="nav-link">A propos de moi </a></li>
                <li><a href="#s2" class="nav-link">Portfolio</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
            
            <button onclick="window.location.href='../controllers/logout.php'">Logout</button>            
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
                    <main id="about">
                 
                    <div class="about-info">
                      <img src="../img/0P9A7338.png" alt="khadija zerzkhane" class="bio-image" width="200">
                
                      <div class="bio">
                        <div class="wrapper"><h1>Que suis-je</h1></div>
                        <h6 class="text-secondary">Je suis conceptrice, développeuse et technicienne spécialisée en gestion des entreprise. La<br> programmation et la conception Web n'ont jamais été mes seules passions. Je suis quelqu'un <br> de très dynamique et je peux faire plusieurs choses en une journée. Je n'aime pas rester inactive.<br> Chez moi, je m'occupe de presque tout. Je n'aime pas échouer dans tout ce que je fais. L'échec me met mal à l'aise même si on dit que pour réussir il faut avoir échoué plusieurs fois. </h6>
                      
                        <img src="../img/0 (2).jpg "alt="khadija zerzkhane"  class="info-image" height="120" width="300">
                        <img src="../img/0.jpg" alt="khadija zerzkhane"  class="info-image " height="120" width="300"> 
                        <img src="../img/images (2).jpg" alt="khadija zerzkhane"  class="info-image " height="120" width="300"> 
                        <img src="../img/images (1).jpg" alt="khadija zerzkhane"  class="info-image " height="120" width="300"> 
                    </div>
                      
                      <div class="job job-1">
                        
                        <h3> ACT school</h3><br>
                        <h6>Participante</h6>
                        <h8>Basé sur le modèle conçu et développé par Connect Institute, ACT School est un programme éducatif, culturel et d’incubation, lancé en décembre 2018 à Youssoufia. Ce programme vise l’accompagnement des jeunes marocains, le développement de leurs compétences et talents et leur préparation pour un avenir meilleur.</h8>
                         
                      </div>
                
                      <div class="job job-2">
                        <h3>ISTA </h3><br>
                        <h6> Technicienne spécialisée en gestion des entreprise   </h6>
                        <h8>La gestion d’entreprise est un concept qui renferme tout un ensemble d'éléments qui tendent à définir le mécanisme de mise en marche du projet, devenu entreprise. </h8>
                       
                    </div>
                
                      <div class="job job-3">
                        <h3>YouCode</h3><br>
                        <h6>Etudiante</h6>
                        <h8>YouCode est une école spécialisée en développement web parmi les technologies acquis dans cette établissement en première année : HTML, CSS, JAVASCRIPT, MySQL, GitHub, SASS.....</h8>
                        
                      </div>
                
                    
                    </div>

           


        </section>


        <!-------------------- SECTION2 ----------------------->


        <section id='s2' class="projects">
                    <!-------------------- my projects ----------------------->

                    <?php
$qslmodif = mysqli_query($Conn, "SELECT titre, para, photo FROM projects");
$row = mysqli_fetch_array($qslmodif);
?>
        <form  method="POST" action="">
                    <h3>Modifier mes partie de mes projets</h3><br><br>
                    <div class="a">
                    <label >Le titre</label><br>
                    <input  name="titre" id="" value= "<?php echo $row ['titre'];?>"  placeholder="changer le titre">
                    </div><br>
                    <div class ="b">
                    <label >Le text</label><br>
                    <textarea name="paragraphe" id="" value="<?php echo $row ['para'];?>" placeholder="changer le paragraphe" ></textarea>
                    </div>
                    <div class="c">
                    <label >La photo</label><br>
                    <input type="file"  name="photo" id="" value= "<?php echo $row ['titre'];?>"  placeholder="changer le titre">
                    </div><br>
                    <button type="submit" >submit</button>  
                    </form>




                    <div class="wrapper"><h1>Portfolio</h1></div>
                

                <span class="left-arrow" id="left"></span>
                    
                    <div class="projects__list">
                    <div>
                        <img class="mySlides" src="../img/youAgency.png" style="width:100%">
                        <img class="mySlides" src="../img/site e commerce.png" style="width:100%">
                        <img class="mySlides" src="../img/corona -hero.png" style="width:100%">
                        
                      </div><br><br><br>
                      <h4>Pour plus de travail visitez mon repo github clique ici</h4><br>
    
                      <img class="arrow" src="../img/arrow-39450_640.png" style="width:60px">
                        
                      <a href="https://github.com/khadija1998"><button  class="button" >Githup<strong> </strong></button></a>
                    </div>
                    <button class='edit' onclick='window.location.href="http://localhost/FILL-ROUGE/views/Edit.php"'>modifier mes projets</button>
        </section>



        <!---------------------------------------- FOOTER---------------------------------------------->


        <footer  id='contact'>

<!-------------------- FOOTER SECTION1 ----------------------->
<div class="wrapper"><h1>Contact</h1></div>
<section class="contact">
<div class="social">



<div class="soc"><img src="img/Gmail_29991.png" alt=""><a  class="link-soc" href='#'>khadija.zerzkhane98@gmail.com</a></div>
<div class="soc"><img src="img/phone-symbol-of-an-auricular-inside-a-circle_icon-icons.com_56478.svg"  alt=""> <a  class="link-soc" href='#'>+212699074201</a></div>
<div class="soc"><img src="img/linkedin_icon-icons.com_53609.png" alt=""><a  class="link-soc" href="https://www.linkedin.com/in/khadija-zerzkhane-ba8ab41a2/">Khadija Zerzkhane</a></div>
<div class="soc"><img src="img/twitter.png" alt=""><a class="link-soc" href="https://twitter.com/home?lang=fr">Khadija Zerzkhane</a></div>
</div>
<div class="inputs">
<input type="text" name="Name" id="name" placeholder="Name">
<input type="email" name="email" id="email" placeholder="e-mail">
<textarea type="text" name="Message" id="message" placeholder="Message"></textarea>
<button  type="submit">Envoyer</button>
</div>

</section>
<!-------------------- FOOTER NAV BAR ----------------------->



<h6><strong>Mon portfolio non à jour. En cours de rassembler des études de cas et projets. Si vous êtes intéressé à voir mon travail, contactez-moi.</strong> </h6>
<br><br><h6>Copyright © Kadija Zerzkhane</h6>
</nav>


</footer>



<!---------------------------------------- SCRIPT---------------------------------------------->

<script src="javascript/LoginPopp.js"></script>
<script src="javascript/Menu.js"></script>

<script src="../javascript/headr.js"></script>

</body>
</html>