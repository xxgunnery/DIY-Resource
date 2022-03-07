<?php 
    session_start();
    $metatitle = 'Login to The DIY Resource';
    $metadesc = 'Sign in to your account at The DIY Resource.';
    include ('../../include_markup/projectNav2.php');
?>
    <main class="row mainContainer projectContainer">
        <?php
            include('projectSideNav.php');
        ?>
        <div class="projectContainer2 col-lg-10 col-xs-12">
            <?php
                include('video/howtovideo.php');
            ?>
        </div>
    </main>

    <?php 
        include ('../../include_markup/footerLevel3.php');
    ?>
    <script src="../../include_js/expandHorizontal.js"></script>
</body>
</html>