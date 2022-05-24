<?php 
include_once 'header.php';
?>


<div class="header" id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-item active">
    <div  class="carousel-inner">
       <img src="images/banner.png" class="d-block w-100" alt="..."> 
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="header__heading">
   
        <h1>
       
            <span class="header__heading--primary">Safety & </span> 
            <span class="header__heading--secondary">Self-defense</span> 

        </h1>
        <h2>
        <?php
             if(isset($_SESSION["useruid"])){ // show something depending if the user is login or not
                echo "<p>Welcome! " . $_SESSION["useruid"] . "</p>";
             }
          
            ?>
    
        </h2>
   
     
    
    </div>
    
    </div>
</div>
<section>   

</section>

    

<?php 
include_once 'footer.php';
?>
</body>
</html>