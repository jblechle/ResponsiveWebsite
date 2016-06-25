<?php
require_once('config.php');

session_start();


?>
<html>
    <head>
        <title>Admin Login</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link rel="stylesheet" href="assets/css/main.css" />
        <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
        <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    </head>
    <body class="no-sidebar">
        <div id="page-wrapper">
        
		<?php include('header.php'); ?>
        
            <form id='login' action='adminLoginScript.php' method='post' accept-charset='UTF-8'>
                <fieldset >
                    <h2>Admin Login</h2>
                    <input type='hidden' name='submitted' id='submitted' value='1'/>
                             
                    <label for='username' >UserName:</label>
                    <input type='text' name='username' id='username'  maxlength="50" />
                             
                    <label for='password' >Password:</label>
                    <input type='password' name='password' id='password' maxlength="50" />
                             
                    <input type='submit' name='Submit' value='Submit' />
                </fieldset>
            </form>
            
        </div>
        
		<?php include('footer.php'); ?>

            
        <!-- Scripts -->

            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.dropotron.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
            <script src="assets/js/main.js"></script>

    </body>
</html>
