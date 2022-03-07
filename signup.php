<?php 
    session_start();
    $metatitle = 'Get In Touch - The DIY Resource';
    $metadesc = 'Ask us questions and discover our social media.';
    include ('include_markup/portalNav.php');
?>

    <main class="row mainContainer signupContainer">
        <div class="col-md-6 col-md-offset-3 col-xs-12">
                <article class="signupInstruction">
                    <header><h1 class="sectionHeaderBlack">Access All of The DIY Resource</h1></header>
                    <p>The DIY Resource <a href="#">'projects'</a> pages are fully accessible only to <a href="premium.php">Premium</a> Users.</p>
                    <ol>
                        <header><h2 class="boldText">Follow these steps to gain access to professional project plans.</h2></header>
                        <li>Create an account</li>
                        <li>Activate your email address</li>
                        <li>Log in to your account</li>
                        <li>Navigate to 'Premium'</li>
                        <li>Pay with PayPal</li>
                    </ol>
                </article>
            <form class="mainForm">
                <div>
                    <header><h1 class="sectionHeaderBlack">REGISTER</h1></header>
                    <div class="formBump">
                        <label for="username">Select Your Username!</label>
                        <input id="username" class="formInputText" type="text" name="userid" placeholder="Username?"></input>
                        <label for="password">Choose A Password</label>
                        <input id="password" class="formInputText" type="password" name="pass" placeholder="Password"></input>
                        <label for="emailaddress">Email Address</label>
                        <input id="emailaddress" class="formInputText" type="text" name="email" placeholder="Email Address"></input>
                        <label for="firstname">First Name</label>
                        <input id="firstname" class="formInputText" type="text" name="first_name"  placeholder="First Name"></input>
                        <label for="lastname">Last Name</label>
                        <input id="lastname" class="formInputText" type="text" name="last_name" placeholder="Last Name"></input>
                        <label><input class="formInputCheck" type="checkbox" name="useragreement" value="agree"/>I agree to the <a href="termsofuse.php">Terms of Use</a></label>
                        <button type="submit" class="btn btn-default">Sign Up!</button>
                        <a href="forgotpassword.php" class="highlightLink">Forgot Password?</a>
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