<?php 
    include_once 'header.php';
?>
<section>
    <div class="signupForm">
        <h2>SIGN UP</h2>
        <form class="signupForm__form" action="signup.inc.php" method="POST">
            <input type="text" name="name" placeholder="Full Name">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="uid" placeholder="Username">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwdrepeat" placeholder="Repeat Password">
            <button type="submit" name="submit">Sign Up</button>

        </form>
    </div>
</section>