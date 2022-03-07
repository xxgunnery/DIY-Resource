<?php 
    session_start();
    $metatitle = 'The DIY Workout Bar - The DIY Resource';
    $metadesc = 'Learn about the benefits of making your own DIY exercise equipment.';
    include ('../include_markup/projectNav1.php');
?>  
    <main class="row mainContainer">
        <div class="projectPromoContainer col-md-10 col-md-offset-1 col-xs-12">
            <header>
                <h1>CREATE THE DIY WORKOUT BAR</h1>
            </header>
            <div class="row projectPromoRow">
                <section class="col-lg-8 col-lg-offset-2 col-xs-12 projectPromoVideo">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zeL4mOT8MAY" frameborder="0"></iframe>
                    </div>
                </section>
                <section class="col-xs-12 projectPromo">
                    <div class="row projectPromoRow">
                        <div class="col-xs-12 projectPromoLink">
                            <p><a href="workoutbar/video.php">Click Here</a> to get started building yourself your very own DIY Workout Bar</p>
                        </div>
                        <article class="col-md-6 col-xs-12 projectPromoArticleContainer">
                            <div class="projectPromoArticle">
                                <header>
                                    <h3>What To Expect</h3>
                                </header>
                                <div>
                                    <p>NEW FEATURED PROJECT! You can follow along our video series to build The DIY Workout bar for free, or <a href="#">Create an account</a> with The DIY Resource and get a <a href="#">Premium</a> subscription to view:</p>
                                    <ul>
                                        <li>Video tutorials discussing the project and showing how to make it.</li>
                                        <li>A parts list, including links to purchase the items.</li>
                                        <li>Written, step-by-step instructions.</li>
                                        <li>Access to an 'economy' calculator to determine how much it will cost to make the project.</li>
                                    </ul>
                                    <p>Along with videos on how to make The DIY Workout Bar, we also provide a video showing how to exercise with the bar, so that you have some ideas right off the bat.</p>
                                </div>
                            </div>
                        </article>
                        <article class="col-md-6 col-xs-12 projectPromoArticleContainer">
                            <div class="projectPromoArticle">
                                <header>
                                    <h3>Tripod Design Features</h3>
                                </header>
                                <div>
                                    <p>The DIY Workout Bar allows you to perform exercises in your home for a very low cost. The weighted bar has handles and is comfortable to use. The DIY Workout Bar has three designs to allow for a choice in the amount of weight you are using:</p>
                                    <ul>
                                        <li>2" Diameter - 15 Lb</li>
                                        <li>3" Diameter - 35 Lb</li>
                                        <li>4" Diameter - 60 Lb</li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                        <div class="col-xs-12 projectPromoLink2">
                            <a href="../projects.php">BACK TO SELECTION</a>
                        </div>
                </section>
            </div>
        </div>
    </main>

    <?php 
        include ('../include_markup/footerLevel2.php');
    ?>

</body>
</html>