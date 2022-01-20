<?php 
    include_once 'header.php';
?>

<section>
    <div class="signupForm">
        <h2>LOG IN</h2>
        <form class="signupForm__form" action="login.inc.php" method="POST">
            <input type="text" name="name" placeholder="Username/Email">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="submit">Login</button>

        </form>
    </div>
</section>


<?php 
include_once 'footer.php';
?>