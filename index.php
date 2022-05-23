<?php 
include_once 'header.php';
?>


<div class="header">
    
    <div class="header__heading">
        <h1>
       
            <span class="header__heading--primary">Safety & </span> 
            <span class="header__heading--secondary">Self-defense</span> 

        </h1>
        <h2>
        <?php
             if(isset($_SESSION["useruid"])){ // show something depending if the user is login or not
                echo "<p>HELLO THERE " . $_SESSION["useruid"] . "</p>";
             }
          
            ?>
    
        </h2>
    
    </div>
    
    
</div>
<section>   

</section>

    

<?php 
include_once 'footer.php';
?>
</body>
</html>