<?php 
    session_start();
    $metatitle = 'DIY Project Plans at The DIY Resource';
    $metadesc = 'Discover the power of professionally designed DIY projects at The DIY Resource.';
    include ('include_markup/homeNavLoggedout.php');

?>
        <nav class="row homeLinks mainContainer">
            <header class="col-xs-12">
                <h2 class="sectionHeaderBlack">THE POWER TO DO IT YOURSELF</h2>
            </header>
            <section class="col-lg-6 col-xs-12">
                <div class="row">
                    <div class="col-xs-12 homeLinksLeft">
                        <div>
                            <header><h3>Explore</h3></header>
                            <p>Click 'Explore' to discover more about The DIY Resource.</p>
                            <a href="user-portal.php">Explore</a>
                        </div>
                        <div>
                            <header><h3>Materials Database</h3></header>
                            <p>Safety is our number one priority in providing DIY projects for our customers.</p>
                            <p>View our materials page for free to learn how to be safe with tools and parts used in our projects!</p>
                            <a href="#">Materials</a>
                        </div>
                        <div>
                            <header><h3>Your Free DIY Project!</h3></header>
                            <p>As a new user, you may view all of the videos for our 'Featured Project'</p>
                            <p>View the project by clicking the link below!</p>
                            <a href="#">Find out more!</a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="col-lg-6 col-xs-12">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="homeLinksRight">
                            <div class="homeLinksRightText">
                                <p> The DIY Resource offers guides to creating carefully designed products in your home.</p>
                                <p> You should expect to be able to save money and learn new skills here. </p>
                                <a href="#">Sign Up!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </nav>
        <article class="row homePromo">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="sectionHeaderOrange" style="margin-top: 20px;">Welcome to the best DIY projects on the web!</h1>
                </div>
                <div class="col-md-6 col-md-offset-3 col-xs-12">            
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qws_O8aa_sI" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="row homeGridButtons">
                <div class="col-xs-6 col-md-4 col-md-offset-2 col-xs-12">
                    <a href="#topTarget">Back To Top</a>
                </div>
                <div class="col-xs-6 col-md-4">
                    <a href="#">Join Now!</a>
                </div>
            </div>
        </article>
        <article class="row homeFeatured">
            <div class="row homeFeaturedContent">
                <div class="col-xs-12">
                    <h1 class="sectionHeaderBlack">Featured Project: The DIY Workout Bar</h1>
                </div>
                <div class="col-lg-12 text">
                    <p class="highlight">Videos available for free!</p>
                    <p>Build simple, yet versatile exercise equipment in your own home.</p>
                </div>
                <div class="col-lg-12 text">
                    <a href="#"class="highlightLink">Go To Project</a>
                </div>
                <div class="col-md-6 col-md-offset-3">            
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zeL4mOT8MAY" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="row homeGridButtons">
                <div class="col-xs-6 col-md-4 col-md-offset-2">
                    <a href="#topTarget">Back To Top</a>
                </div>
                <div class="col-xs-6 col-md-4">
                    <a href="#">Join Now!</a>
                </div>
            </div>
        </article>
    <?php include ('include_markup/footerLevel1.php');?>
</body>
</html>