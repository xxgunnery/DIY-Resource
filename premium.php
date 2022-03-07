<?php 
    session_start();
    $metatitle = 'Become A Real Member of The DIY Resource';
    $metadesc = 'Premium membership allows you to gain access to our DIY projects!';
    include ('include_markup/portalNav.php');
?>
<main class="row mainContainer">
    <section class="row bootstrapPaddingDestroy premiumBanner">
        <div class="col-xs-12">
            <header><h1 class="sectionHeaderBlack">BECOME A REAL MEMBER OF THE DIY RESOURCE</h1></header>
        </div>
        <div class="col-xs-12 col-md-6 col-md-offset-3 flexColumns premiumBannerContent">
            <img src="images/capsubbutton1.PNG" class="img-responsive">
            <p class="text">Access all of The DIY Resource. Only $4.99/month.</p>
        </div>
    </section>
    <section class="row bootstrapPaddingDestroy premiumInformation">
        <div class="col-xs-12 col-lg-8 col-lg-offset-2">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.youtube.com/embed/envhAdrrUMQ"></iframe>
            </div>
        </div>
        <div class="col-xs-12 col-lg-6 premiumInformationBox">
            <article class="premiumInformationBoxContent">
                <header><h2>What Is Premium?</h2></header>
                <p>Premium is full access to The DIY Resource. The main content of the website is only available to premium members.</p>
                <p>View our Projects Page for our current DIY projects. More projects are added as frequently as possible.</p>
                <p>Our projects are designed to be easy to complete and allow you to build things that you need in a cost-effective way.</p>
            </article>
        </div>
        <div class="col-xs-12 col-lg-6 premiumInformationBox">
            <article class="premiumInformationBoxContent">
                <header><h2>How Can I Become Premium?</h2></header>
                <p>You may obtain Premium access on any email-activated account. You must be logged in to gain access to the 'subscribe' button.</p>
                <p>Sign Up, confirm your email and then return to this page, or 'User Home' to subscribe to our service.</p>
                <p>You need a PayPal account to subscribe. If you do not have one already, you can make one after you click the subscription button.</p>
            </article>
        </div>
        <ul class="col-xs-12 premiumInformationList">
            <header><h3>Beyond the Door... For Each DIY Project</h3></header>
            <li class="row premiumListContent">
                <div class="col-md-1 flexRows">
                    <img src="images/book.png" class="premiumIcon">
                </div>
                <div class="col-md-11 flexRows premiumInfoHeight">
                    <p>How-to videos and written guides let you know exactly what to do, every step of the way.</p>
                </div>
            </li>
            <li class="row premiumListContent">
                <div class="col-md-1 flexRows">
                    <img src="images/idea.png" class="premiumIcon">
                </div>
                <div class="col-md-11 flexRows premiumInfoHeight">
                    <p>Design discussions explain the intricacies of every choice made during project development.</p>
                </div>
            </li>
            <li class="row premiumListContent">
                <div class="col-md-1 flexRows">
                    <img src="images/part.png" class="premiumIcon">
                </div>
                <div class="col-md-11 flexRows premiumInfoHeight">
                    <p>Parts lists are complete with each part used in the project. We also give links to purchase the part online, or an explanation of how to get it in person.</p>
                </div>
            </li>
            <li class="row premiumListContent">
                <div class="col-md-1 flexRows">
                    <img src="images/money.png" class="premiumIcon">
                </div>
                <div class="col-md-11 flexRows premiumInfoHeight">
                    <p>'Economy' calculators let you discover exactly how much you will spend on a project.</p>
                </div>
            </li>
            <li class="row premiumListContent">
                <div class="col-md-1 flexRows">
                    <img src="images/gift.png" class="premiumIcon">
                </div>
                <div class="col-md-11 flexRows premiumInfoHeight">
                    <p>We offer you the ability to create something useful for yourself, or a friend.</p>
                </div>
            </li>
        </ul>
    </section>
</main>
<?php
    include ('include_markup/footerLevel1.php'); 
?>
</body>
</html>