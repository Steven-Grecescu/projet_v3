<?php ob_start();

$content = ob_get_clean();
// require_once "C:\Users\DWWM\Desktop\Repo Orga\Magasin-Vetement-SG\Views/template.php";
// require_once "C:\Users\DWWM\Desktop\Repo Orga\Magasin-Vetement-SG\Models\Model.class.php";
// require_once "C:\Users\DWWM\Desktop\Repo Orga\Magasin-Vetement-SG\Models\Article.class.php";
// require_once "C:\Users\DWWM\Desktop\Repo Orga\Magasin-Vetement-SG\Models\ArticleManager.php";
require_once "template.php";
require_once "./Models/Model.class.php";
require_once "./Models/Article.class.php";
require_once "./Models/ArticleManager.php";

?>

<main>

    <div>


    <!-- ------------------------------------------------------------------------ -->
        
        <!-- <h3>Image</h3>
        <h3>Titre</h3>
        <h3>Description</h3>
        <h3>Actions</h3> -->

        <?php



        ?>

          <!-- <div class="slideshow">
            <div class="slide">
              <img src="" alt="Image 1">
              <p> Caption 1 </p>
            </div>
            <div class="slide">
              <img src="" alt="Image 2">
              <p> Caption 2 </p>
            </div>
            <div class="slide">
              <img src="" alt="Image 3">
              <p> Caption 3 </p>
            </div>
        </div> -->

          
      <?//php endfor; ?>

    </div>

</main>

<section>
    <div>
        <h3>Nos Vétements sont fabriquer a la main avec des matériaux de préstige</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique, eligendi dolore. Voluptatem, cupiditate porro. Ipsa rerum ipsum, optio cupiditate esse perspiciatis nihil vero iste soluta animi alias fuga illum impedit?</p>
    </div>
</section>


<section>
    <div>
        <h3>A propos de nous</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae dolor, ullam omnis in minima at quis temporibus quasi consectetur fuga deserunt repellendus neque itaque odit ipsum quidem, est nobis hic?</p>
    </div>
</section>

<footer>

    <div class="main-block">
      <form class="Contact" action="">
        <h2>Une question ? Contactez-nous !</h1>
        <div class="info">
          <input class="fname" type="text" name="name" placeholder="Nom">
          <input type="text" name="name" placeholder="Email">
          <input type="text" name="name" placeholder="Telephone">
          <input type="text" name="name" placeholder="Adresse">
        </div>
        <p>Message</p>
        <div class ="message" >
          <textarea rows="4"></textarea>
        </div>
        <button type="button" href="">Envoyer</button>
      </form>

      <!-- <div class="divcr">
      <h4 class="h4cr">Copyright</h4>
      <p class="pcr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam neque deserunt tempore, voluptatem sunt non enim odit, sit ex nesciunt ad iste illo, hic fuga dolorum saepe nam unde expedita!</p>

    </div>    -->
</div>


</footer>

</body>

<script src="../script.js"></script>
</html>