<?php 
    session_start();
    $metatitle = 'Get In Touch - The DIY Resource';
    $metadesc = 'Ask us questions and discover our social media.';
    include ('include_markup/portalNav.php');
?>
    
    <main class="row mainContainer forgotContainer">
        <div class="col-md-6 col-md-offset-3 col-xs-12">
            <form class="mainForm">
                <div>
                    <header><h1 class="sectionHeaderBlack">Forgot your password?</h1></header>
                    <div class="formBump">
                        <label for="username">Username:</label>
                        <input id="username" class="formInputText" type="text" name="userid" placeholder="Username?"></input>
                        <label for="emailaddress" >Email:</label>
                        <input id="emailaddress" class="formInputText" type="text" name="email" placeholder="Email Address"></input>
                        <button class="btn btn-default" type="submit">Send reset email</button>
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