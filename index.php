<?php 
include_once 'header.php';
?>


<div class="header" id="carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div  class="carousel-item active">
        <img src="images/selfdefense.jpg" class="d-block w-100" alt="..."> 
        </div>
        <div class="carousel-item">
        <img src="images/firstaid.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="images/self-defense2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="images/firstaid.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="images/banner.png" class="d-block w-100" alt="...">
        </div>

        <div class="header__heading">
            <h1>
                <span class="header__heading--primary">Developing a  </span> 
                <span class="header__heading--secondary">Culture of safety</span> 
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
    <div class="intro">
    <div class="intro-details">
            <div class="intro-details__img">
                <img class="intro-details__pic--1" src="images/RBSL-WomenSelf-DefenseSeminar-2.jpg"
                    alt="FIRST AID TRAINING">
            </div>
            <p class="intro-details__para--1">Teaching Filipino Martial Arts as a cultural heritage and promoting
                personal protection
                has been one of my passion in life. I have taught Filipino Martial Arts here in the Philippines
                as a part of a Community Development Program for the youth and I included it in the safety calendar
                for training of our university students as part of our safety programs as the safety officer of our
                school.
            </p><br>
         

            <p class="intro-details__para--3"> I've been in the education industry since 2005 teaching a variety of
                topics such as computer literacy, education, environment, entrepreneurship, health, safety, recreation,
                morals and social welfare services as part of community development volunteer programs. </p>


        </div>
    </div>
</section>
    

<?php 
include_once 'footer.php';
?>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>