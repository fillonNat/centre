<?php
if(!empty($_POST['nom']) && !empty($_POST['email'])) {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    
    // préparer le courriel qui sera envoyé
    $to      = 'fillon_1@hotmail.com';
    $subject = 'Un nouvel abonné';
    $message = 'Bonjour, \r\n\r\n Nous avons un nouvel abonné :\r\n\r\n'.$nom."\r\n".$email;
    $headers = array(
        'From' => 'noreply@centreliturgique.com',
        'Reply-To' => 'noreply@centreliturgique.com',
        'X-Mailer' => 'PHP/' . phpversion()
        );
    // Envoyer le courriel
    mail($to, $subject, $message, $headers);
    
    // rediriger vers un message à l'utilisateur
    header('location: index.php?message=1');
    exit();
    header('location: index.php#contact');
    exit();
}

include 'header.html';
?>


<menu>
<?php
include 'menu.html';
?>
</menu>


  
 <section id="articles"> 
    <div class="wrapper">
     <article>
         <div  class="overlay">
            <p>Le Centre Liturgique, dirig&eacute; par les S&#339;urs Disciples de J&eacute;sus Ma&icirc;tre, est ouvert au clerg&eacute;           et&agrave; 
                la population en g&eacute;n&eacute;ral depuis 1953. <br /><br />
                Il contribue &agrave; la promotion de la beaut&eacute; au service de 
                l'&eacute;ducation &agrave; la foi et de la liturgie. <br /><br />
                Il met &agrave; votre disposition des v&ecirc;tements et objets liturgiques, 
                ic&ocirc;nes, statues, c&eacute;ramiques exclusives, pi&egrave;ces 
                d'art religieux, articles de pi&eacute;t&eacute;, cr&egrave;ches, 
                imagerie, cierges, encens, etc. </p>
         </div>
    </article>
        
    <article>
        <div  class="overlay">
             <p>Le Centre de Montr&eacute;al 
              est actuellement FERM&Eacute;

              pour l'article religieux, nous sommes en lien 
              avec notre CENTRE de TORONTO 
              except&eacute; pour les articles sur cette page
              et plus....              </p>
             <p><em><u>OUVERT </u>
             pour le vestiaire liturgique</em>
              prendre rendez-vous au 514-322-1300</p>
            </div>
          </article>     
        </div>
    <div class="clear"></div>
</section>


 <section id="bloc1">
    
         <div class="wrapper">  <h2 align="center">Quelques uns de nos articles. Pour en voir plus, accéder au menu dans le haut à gauche</h2>       
            <article> 
              <p align="center"><img src="chasubleRouge.JPG" width="316" height="519" alt="Jeudi Saint" /></p>
            </article>
            <article>
                 <p align="center"><img src="chasubleguadalupe.jpg" width="292" height="519" alt="Chasuble mariale" /> </p><br/>
                  <br />
           </article>
           <div class="clear"></div>
        </div>
</section> 


 <section id="bloc2">
    <div class="wrapper">
        <ul>
            <li><figure><img src="ostensoir.jpg" width="265" height="266" alt="Ostensoir"/>
                <figcaption>Magnifique Ostensoir !</figcaption>
                </figure>
            </li>   
            <li><figure><img src="viegeEtEnfant.jpg" width="217" height="266" alt=""/>
                <figcaption> Vi&egrave;rge et Enfant</figcaption>
                </figure>
            </li>
            <li><figure><img src="deusCaritas.jpg" width="229" height="266" alt=""/> 
                <figcaption>Deus Caritas</figcaption>
                </figure>
            </li>
            <div class="clear"></div>
        </ul>	
    </div>
</section>


<section id="contact">
    <div class="wrapper">
        <h2>Restons en contact</h2> 
            <p>Pour être membre de notre liste de courriel, SVP donnez vos informations ici:</p>
            <?php
                if(isset($_GET['message'])) {
                    echo '<div id="recu">Votre inscription a bien été reçue. Merci et au plaisir !</div>';
                    echo "<meta content='0;url=index.php#contact' />";
                }
            ?>
        
        <form method="post" action="index.php">
                <label>Nom</label>
                <input type="text" name="nom" id="name" placeholder="Votre nom">
                <label>Courriel </label>
                <input type="text" name="email" id="email" placeholder="Votre email">
                <input type="submit" value="OK" class="button3">
        </form>

    </div>    
</section>

    <?php
    include 'footer.html';
    ?>
