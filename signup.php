<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Metabank</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>
<h1>Sign up was succesful</h1>
        <body>

           <!-- END LOADER -->
           <section id="top">
            <header>
            <div class="container">
                <div class="header-top">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="full">
                                <div class="logo">
                                    <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>
                </div>
              
                    <meta name="viewport" content="width=device-width, initial-scale=0">

                


            </div>
         
             
        <?php
    
           $username=$_POST['username'];
           $email=$_POST['email'];
           $date=$_POST['date'];
           $Password=$_POST['Password'];
          
    
           if (!$username || !$email|| !$date)
           {
           echo "You have not entered all the required details.<br />"
           ."Please go back and try again.";
           exit;
           }

           @$db = new mysqli('localhost','nick','1234','data');
         if (mysqli_connect_errno())
          {
          echo "Error: Could not connect to database. Please try
         again later.";
         exit;
         }

          $query = "insert into signup values('".$username."', '".$email."','".$date."')";
          $result = $db->query($query);

         $db->close();
         ?>


 
        
             <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
            <!-- ALL JS FILES -->
              <script src="js/all.js"></script>
           <!-- ALL PLUGINS -->
            <script src="js/custom.js"></script>
        
        
        
        </body>


</html>

