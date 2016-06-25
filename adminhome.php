<?php
    session_start();
    // If there is no active session (i.e. the user hasn't logged in, send them to the
    // login screen.
if (!isset($_SESSION["username"])) {
    header("Location:adminLogin.php");
}
?>
<!--
    Telephasic by HTML5 UP
    html5up.net | @n33co
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Admin Home</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="assets/css/main.css" />
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    </head>
    <body class="homepage">
        <div id="page-wrapper">

            <!-- Header -->
                <div id="header-wrapper">
					<?php include("adminmenu.html");?>

                    <!-- Hero -->
                        <section id="hero" class="container">
                            <header>
                                <h2>Hello Admin</h2>
                            </header>
                        </section>

                </div>

    
            
        <!-- Scripts -->

            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.dropotron.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
            <script src="assets/js/main.js"></script>

    </body>
</html>
