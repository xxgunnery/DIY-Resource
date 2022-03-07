<?php 
    session_start();
    $metatitle = 'Login - The DIY Resource';
    $metadesc = 'If you have created an account at The DIY Resource, you can sign into the website here.';
    include ('include_markup/portalNav.php');
?>

    <main class="row mainContainer loginContainer">
        <div class="col-md-6 col-md-offset-3 col-xs-12">
            <form class="mainForm">
                <div>
                    <header><h1 class="sectionHeaderBlack">SIGN IN HERE</h1></header>
                    <div class="formBump">
                        <label for="username">Username:</label>
                        <input id="username" class="formInputText" type="text" name="userid" placeholder="Username?"></input>
                        <label for="password">Password:</label>
                        <input id="password" class="formInputText" type="password" name="pass" placeholder="Password"></input>
                        <button type="submit">SUBMIT</button>
                        <a class="highlightLink" href="forgotpassword.php">Forgot Password?</a>
                    </div>
                </div>
            </form>
        </div>
    </main>

<?php 
    include ('include_markup/footerLevel1.php');
?>
</body>
</html>