<?php 
    session_start();
    $metatitle = 'Login to The DIY Resource';
    $metadesc = 'Sign in to your account at The DIY Resource.';
    include ('include_markup/portalNav.php');
?>
<div class="row portalPage">
    <div class="col-xs-12 portalContainer">
        <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 portalSignin">
            <header>The DIY Resource User Portal</header>
            <p>Sign up to gain access to DIY project tutorials and more</p>
            <div>
                <a href="signup.php">Sign Up</a>
                <a href="login.php">Sign In</a>
            </div>
        </div>
    </div>
</div>

<?php 
    include ('include_markup/footerLevel1.php');
?>
</body>
</html>