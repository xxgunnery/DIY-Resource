<?php 
    session_start();
    $metatitle = 'Educational Material - The DIY Resource';
    $metadesc = 'Learn about the equipment used in our DIY projects.';
    include ('include_markup/portalNav.php');
?>  

    <main class="row mainContainer">
        <div class="col-xs-10 col-xs-offset-1 educationalContainer">
            <div class="row">
                <div class="col-md-6 col-lg-12 col-xs-12 educationalNavSection">
                    <div class="row">
                        <header class="col-xs-12"><h1 class="sectionHeaderBlack">MATERIALS</h1></header>
                        <div class="col-lg-4 col-md-12 col-xs-12">
                            <div class="educationalCardContainer">
                                <div class="educationalCard">
                                    <header><h2>PVC (Polyvinyl-Chloride)</h2></header>
                                    <img src="educational/images/promo_pvc.png" class="img-responsive">
                                    <p>PVC is a low-cost, high-strength plastic that is resistant to chemical corrosion.</p>
                                    <a href="educational/pvc.php">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-xs-12">
                            <div class="educationalCardContainer">
                                <div class="educationalCard">
                                    <header><h2>Particle Board</h2></header>
                                    <img src="educational/images/promo_particleboard.png" class="img-responsive">
                                    <p>Particle board is an engineered wood product that is very inexpensive.</p>
                                    <a href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-xs-12">
                            <div class="educationalCardContainer">
                                <div class="educationalCard">
                                    <header><h2>Hot Glue</h2></header>
                                    <img src="educational/images/promo_hotglue.png" class="img-responsive">
                                    <p>Hot glue is an easy-to-use, inexpensive adhesive with options for very high strength.</p>
                                    <a href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-12 col-xs-12 educationalNavSection">
                    <div class="row">
                        <header class="col-xs-12"><h1 class="sectionHeaderBlack">TOOLS</h1></header>
                        <div class="col-lg-4 col-md-12 col-xs-12">
                            <div class="educationalCardContainer">
                                <div class="educationalCard">
                                    <header><h2>Hand-Held Drill</h2></header>
                                    <img src="educational/images/promo_drill.png" class="img-responsive">
                                    <p>The hand-held powered drill is a commonly used tool to create holes, allowing the use of mechanical fasteners.</p>
                                    <a href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-xs-12">
                            <div class="educationalCardContainer">
                                <div class="educationalCard">
                                    <header><h2>Coping Saw</h2></header>
                                    <img src="educational/images/promo_coping.png" class="img-responsive">
                                    <p>The coping saw is a flexible saw capable of cutting wood and with the right blade, metal.</p>
                                    <a href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-xs-12">
                            <div class="educationalCardContainer">
                                <div class="educationalCard">
                                    <header><h2>Dremel Tool</h2></header>
                                    <img src="educational/images/promo_dremel.png" class="img-responsive">
                                    <p>The rotary tool/dremel tool is so versatile that you might just need to take a look!</p>
                                    <a href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-12 col-xs-12 educationalNavSection">
                    <div class="row">
                        <header class="col-xs-12"><h1 class="sectionHeaderBlack">SKILLS</h1></header>
                        <div class="col-lg-4 col-md-12 col-xs-12">
                            <div class="educationalCardContainer">
                                <div class="educationalCard">
                                    <header><h2>Double Fisherman's Knot</h2></header>
                                    <img src="educational/images/promo_doubleknot.png" class="img-responsive">
                                    <p>Learn how to tie two ends of rope together with the double fisherman's knot!</p>
                                    <a href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php 
        include ('include_markup/footerLevel1.php');
    ?>

</body>
</html>
