
<?php 
include_once 'header.php';
?>


<div class="header">
    <div class="header__heading">
        <h1>
            <span class="header__heading--primary">Safety & </span> 
            <span class="header__heading--secondary">Self-defense</span> 

        </h1>
    </div>
</div>
<section>   
            <?php
             if(isset($_SESSION["useruid"])){ // show something depending if the user is login or not
                echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
              
             }
           
            ?>
</section>

    

<?php 
include_once 'footer.php';
?>
</body>
</html>