<?php 
    session_start();
    $metatitle = 'The DIY Tripod - The DIY Resource';
    $metadesc = 'Learn about the equipment used in our DIY projects.';
    include ('../include_markup/projectNav1.php');
?>  
    <main class="row mainContainer">
        <div class="projectPromoContainer col-md-10 col-md-offset-1 col-xs-12">
            <header>
                <h1>CREATE THE DIY TRIPOD</h1>
            </header>
            <div class="row projectPromoRow">
                <section class="col-lg-8 col-lg-offset-2 col-xs-12 projectPromoVideo">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ZJmYMEzZJyU" frameborder="0"></iframe>
                    </div>
                </section>
                <section class="col-xs-12 projectPromo">
                    <div class="row projectPromoRow">
                        <div class="col-xs-12 projectPromoLink">
                            <p><a href="#">Click Here</a> to get started building your very own tripod.</p>
                        </div>
                        <article class="col-md-6 col-xs-12 projectPromoArticleContainer">
                            <div class="projectPromoArticle">
                                <header>
                                    <h3>What To Expect</h3>
                                </header>
                                <div>
                                    <p><a href="#">Create an account</a> with The DIY Resource and get a <a href="#">Premium</a> subscription to view:</p>
                                    <ul>
                                        <li>Video tutorials discussing the project and showing how to make it.</li>
                                        <li>A parts list, including links to purchase the items.</li>
                                        <li>Written, step-by-step instructions.</li>
                                        <li>Access to an 'economy' calculator to determine how much it will cost to make the project.</li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                        <article class="col-md-6 col-xs-12 projectPromoArticleContainer">
                            <div class="projectPromoArticle">
                                <header>
                                    <h3>Tripod Design Features</h3>
                                </header>
                                <div>
                                    <p>The DIY Tripod is a product in itself. It has a number of design features that allow it to compete in functionality with intermediate-level tripods on the market.</p>
                                    <ul>
                                        <li>Telescoping Legs</li>
                                        <li>Exchangeable Phone and Camera Attachments</li>
                                        <li>Variable Leg Spread (For Stability)</li>
                                        <li>Camera Tilt</li>
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