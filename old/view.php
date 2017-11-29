<?php
    // including the database connection file
    include_once("classes/Crud.php");
    $crud = new Crud();
    //getting id from url
    $id = $crud->escape_string($_GET['id']);
    //selecting data associated with this particular id
    $result = $crud->getData("SELECT * FROM MyGuests WHERE id=$id");
    foreach ($result as $res) {
        $firstname = $res['firstname'];
        $lastname = $res['lastname'];
        $email = $res['email'];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Add Data</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
        <div class="container">
        	<div class="row">
        		<div class="col-md-12">
                    <div class="card hovercard">
                        <div class="cardheader" style="background-image: url('images/4.jpg');">
                        </div>
                        <div class="avatar">
                            <img alt="" src="images/2.jpeg">
                        </div>
                        <div class="info">
                            <div class="title">
                                <a target="_blank" href="#"><?php echo $firstname.' '.$lastname; ?></a>
                            </div>
                            <div class="desc"><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></div>
                        </div>
                        <div class="social-container">
                            <a target="_blank" href="https://twitter.com/hardik97531" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a target="_blank" href="https://www.facebook.com/profile.php?id=1234567891011" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a target="_blank" href="http://plus.google.com/123456789101198533333/" class="googleplus"><i class="fa fa-google-plus"></i></a>
                            <a target="_blank" href="https://tr.pinterest.com/hardik97531/" class="pinterest"><i class="fa fa-pinterest"></i></a>
                            <a target="_blank" href="https://codepen.io/hardik97531" class="codepen"><i class="fa fa-codepen"></i></a>
                            <a target="_blank" href="https://dribbble.com/hardik97531" class="dribbble"><i class="fa fa-dribbble"></i></a>
                            <a target="_blank" href="https://www.instagram.com/hardik97531/" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a target="_blank" href="https://www.linkedin.com/in/hardik97531-0aa34252/" class="linkedin"><i class="fa fa-linkedin"></i></a>
                            <a target="_blank" href="https://www.udemy.com/user/hardik97531" class="envelope"><i class="fa fa-graduation-cap"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
        	</div>
        </div>
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript">
            (function(){
                $(".twitter").hover(function(){$("body").toggleClass("color-twitter")});
                $(".facebook").hover(function(){$("body").toggleClass("color-facebook")});
                $(".googleplus").hover(function(){$("body").toggleClass("color-googleplus")});
                $(".pinterest").hover(function(){$("body").toggleClass("color-pinterest")});
                $(".dribbble").hover(function(){$("body").toggleClass("color-dribbble")});
                $(".instagram").hover(function(){ $("body").toggleClass("color-instagram") });
                $(".codepen").hover(function(){ $("body").toggleClass("color-codepen") });
                $(".envelope").hover(function(){ $("body").toggleClass("color-envelope") });
                $(".linkedin").hover(function(){ $("body").toggleClass("color-linkedin") });
            })();
        </script>
    </body>
</html>