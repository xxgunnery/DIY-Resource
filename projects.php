<?php 
    session_start();
    $metatitle = 'DIY Projects - The DIY Resource';
    $metadesc = 'Discover professionally developed DIY projects at The DIY Resource.';
    include ('include_markup/portalNav.php');
?>  

    <main class="row mainContainer">
        <div class="col-xs-10 col-xs-offset-1 projectsContainer">
            <section>
                <nav class="row projectsNavSection">
                    <header><h1 class="sectionHeaderBlack col-xs-12">Choose a DIY project!</h1></header>
                    <div class="col-md-6 col-xs-12">
                        <div class="projectCardContainer">
                            <div class="projectCard">
                                <header><h2>Phone & Camera Tripod</h2></header>
                                <img src="projects/tripod/images/tripod_promo.png" class="img-responsive">
                                <p>A lightweight and sturdy device that holds your phone, or camera for videos and photos. Features telescoping legs for height changes and a tilting action for different camera angles. Can be packed up for travel. Builds for under $15.00.</p>
                                <nav>
                                    <a href="projects/tripod.php">View Details</a>
                                    <a href="projects/tripod/howto.php">Get Started!</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="projectCardContainer">
                            <div class="projectCard">
                                <header><h2>Workout Bar</h2></header>
                                <img src="projects/workoutbar/images/workoutbar_promo.png" class="img-responsive">
                                <p>A versatile piece of exercise equipment which can be made at three different weights: 15lb, 35lb, 60lb. The workout bar is simple to build and can be used indoors. We even have a video to show you how to use it.</p>
                                <nav>
                                    <a href="projects/workoutbar.php">View Details</a>
                                    <a href="projects/workoutbar/howto.php">Get Started!</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </nav>
            </section>
        </div>
    </main>

    <?php 
        include ('include_markup/footerLevel1.php');
    ?>

</body>
</html>