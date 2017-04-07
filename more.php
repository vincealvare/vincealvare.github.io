<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>&nbsp;</title>
        <meta name="description" content="Vince Alvare. Front-End Web Developer and Digital Designer. Galloway, NJ.">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body class="more">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php include('includes/header.php'); ?>
        
        <div class="container-main">          
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="inner">
                            <a href="index.php"><img src="img/portrait-of-me-color.png" class="img-thumbnail portrait pull-left" /></a>       
                            <div class="author-description">        
                                <h3 class="title">Howdy, friend!</h3>
                                <p>Thank you for showing interest in me. Here is a bit of my life story:</p>
                                <p>I grew up in a small town in southern New Jersey and studied Digital Design at Philadelphia University.</p>
                                <p>After college, I stayed in the city and played drums in a few different bands. I was one of the founders of <a href="http://faroutfangtooth.bandcamp.com">Far-Out Fangtooth</a>.</p>
                                <p>In the summer of 2013, I decided to leave all that behind and started focusing all my efforts on freelance web development. </p>
                                <p>After over a year of freelancing I was hired full-time as a Front-End Developer for <a href="http://www.webmaxco.com">WebMax Communications</a>.</p>
                                <p>Please contact me if you have feedback or would like to get to know me better. I look forward to hearing from you!</p>
                            </div>       
                        </div>
                     </div>
                 </div>
                 <hr />  
                 <div class="row">
                     <div class="col-sm-12">
                         <h4>Get in touch with me, it's easy!</h4>
                         <form id="contactForm" method="post" name="contactForm" action="send-mail.php">                                
                              <input type="text" name="name" id="name" placeholder="Name" />                                                          
                              <input type="text" name="email" id="email" placeholder="E-mail" /><br />                            
                              <textarea name="comments" id="comments" placeholder="Comments" ></textarea><br />
                              <input type="submit" value="Submit" class="btn btn-custom" />
                              <input type="reset" value="Reset" class="btn btn-custom" />                            
                        </form>
                     </div>
                </div>   
                <div class="row">
                    <div class="col-sm-12">
                        <hr />
                        <a href="index.php" class="btn btn-custom">Go Back</a>
                    </div>
                </div>             
            </div>            
        </div>
        
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>

        <script src="js/vendor/bootstrap.min.js"></script>
        
        <script type='text/javascript' src='js/jquery.html5-placeholder-shim.js'></script>
        
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>