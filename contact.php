<?php 
    session_start();
    $metatitle = 'Get In Touch - The DIY Resource';
    $metadesc = 'Ask us questions and discover our social media.';
    include ('include_markup/portalNav.php');
?>

    <main class="row container mainContainer contactContainer">
        <section class="col-xs-12 contactSection bootstrapPaddingDestroy">
            <header><h1 class="sectionHeaderBlack">Questions & Support</h1></header>
            <div class="col-xs-12">
                <div class="row contactSectionContent">
                    <p class="col-xs-12  contactDescription">All general questions and inquiries can be sent to us via email.</p>
                    <p class="col-xs-12 col-sm-2 leftText boldText">Email Address:</p>
                    <p class="col-xs-12 col-sm-10">admin@thediyresource.com</p>
                </div>
            </div>
        </section>
        <section class="col-xs-12 contactSection bootstrapPaddingDestroy">
            <header><h1 class="sectionHeaderBlack">Social Media Links</h1></header>
            <div class="col-xs-12">
                <div class="row contactSectionContent">
                    <p class="col-xs-12">Follow us on our social media to stay connected.</p>
                    <p class="col-xs-12 boldText">Unique approach to social media.</p>
                    <ul class="col-xs-12">
                        <li>Livestreaming the development of our website and our 3D animations.</li>
                        <li>Daily design vlogs as we work on our DIY projects!</li>
                    </ul>
                    <p class="col-xs-12 contactDescription">We provide entertainment as we build our content!</p>
                    <div class="col-xs-12 col-md-3">
                        <a href="https://www.youtube.com/channel/UCZ2I7bCNv7lDjYx6bmDshJQ"><img class="img-responsive" src="images/socialmedia/youtube.png"></a>
                    </div>
                    <div class="col-xs-12 col-md-3">
                        <a href="https://www.facebook.com/TheDIYResource/"><img class="img-responsive" src="images/socialmedia/facebook.png"></a>
                    </div>
                    <div class="col-xs-12 col-md-3">
                        <a href="https://www.twitch.tv/thediyresource"><img class="img-responsive" src="images/socialmedia/twitch.png"></a>
                    </div>
                    <div class="col-xs-12 col-md-3">
                        <a href="https://twitter.com/TheDIYResource"><img class="img-responsive" src="images/socialmedia/twitter.png"></a>
                    </div>
                </div>
        </section>
    </main>
<?php 
    include ('include_markup/footerLevel1.php');
?>
</body>
</html>