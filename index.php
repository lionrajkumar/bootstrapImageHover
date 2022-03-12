<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bootstrap image hover effects">
    <meta name="author" content="Mike Young">

    <title>Bootstrap Hover Image Gallery</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- CCS for the effects-->
    <link href="css/effects.min.css" rel="stylesheet">

    <!-- Font Icons -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="fonts/stylesheet.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php include("navbar.php"); ?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-lg-12 text-center">
            <h1 class="page-header">Image hover effects</h1>
            <p class="titlep">Click the link on the desired image hover effect to view the html and css code you can copy to use the effect</p>
        </div>

        <?php
        include("hoverEffect1.php");
        include("hoverEffect1v2.php"); ?>
        <div class="clearfix visible-sm-block"></div>
        <?php include("hoverEffect2.php"); ?>
        <div class="clearfix visible-md-block"></div>
        <?php include("hoverEffect3.php"); ?>
        <div class="clearfix visible-sm-block"></div>

        <?php include("hoverEffect4.php"); ?>
        <?php include("hoverEffect4v2.php"); ?>
        <div class="clearfix visible-md-block"></div>
        <div class="clearfix visible-sm-block"></div>

        <?php include("hoverEffect5.php"); ?>

        <div class="clearfix visible-sm-block"></div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hover ehover7">
                <img class="img-responsive" src="images/hand.jpg" alt="">
                <div class="overlay point" data-toggle="modal" data-target="#modal7">
                    <h2>Hover effect 7</h2>
                    <p>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </p>
                </div>

            </div>
        </div>

        <div class="clearfix visible-md-block"></div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hover ehover8">
                <img class="img-responsive" src="images/p9.jpg" alt="">
                <div class="overlay point" data-toggle="modal" data-target="#modal8">
                    <h2>Hover effect 8</h2>
                    <p class="set1">
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </p>
                    <hr><hr>
                    <p class="set2">
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                    </p>
                </div>
            </div>
        </div>

        <div class="clearfix visible-sm-block"></div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hover ehover9">
                <img class="img-responsive" src="images/p.jpg" alt="">
                <div class="overlay">
                    <h2>Hover effect 9</h2>
                    <button class="info" data-toggle="modal" data-target="#modal9">Show code
                    </button>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hover ehover10">
                <img class="img-responsive" src="images/p14.jpg" alt="">
                <div class="overlay">
                    <button class="info" data-toggle="modal" data-target="#modal10">Show code
                    </button>
                    <p class="icon-links">
                        <a href="#"><span class="fa fa-twitter"></span></a>
                        <a href="#"><span class="fa fa-facebook"></span></a>
                        <a href="#"><span class="fa fa-instagram"></span></a>
                    </p>

                </div>
            </div>
        </div>

        <div class="clearfix visible-md-block"></div>
        <div class="clearfix visible-sm-block"></div>

        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hover ehover11">
                <img class="img-responsive" src="images/p3.jpg" alt="">
                <div class="overlay">
                    <h2>Effect 11</h2>
                    <button class="info nullbutton" data-toggle="modal" data-target="#modal11">Show code
                    </button>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hover ehover12">
                <img class="img-responsive" src="images/p26.jpg" alt="">
                <div class="overlay">
                    <h2>Effect 12</h2>
                    <button class="info nullbutton" data-toggle="modal" data-target="#modal12">Show code
                    </button>
                </div>
            </div>
        </div>

        <div class="clearfix visible-sm-block"></div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hover ehover13">
                <img class="img-responsive" src="images/p4.jpg" alt="">
                <div class="overlay">
                    <h2>Effect 13</h2>
                    <button class="info nullbutton" data-toggle="modal" data-target="#modal13">Show code
                    </button>
                </div>
            </div>
        </div>

        <div class="clearfix visible-md-block"></div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div class="hover ehover14">
                <img class="img-responsive" src="images/cac.jpg" alt="">
                <div class="overlay">
                    <h2>lense effect</h2>
                    <button class="info nullbutton" data-toggle="modal" data-target="#modal14">Show code
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>

<hr>

<footer>
    <div class="row">
        <div class="col-lg-12">
            <p class="breath"></p>
        </div>
    </div>
</footer>










<div id="modal7" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h2 class="modal-title">Hover effect 7</h2>
            </div>
            <div class="modal-body">
                <h3>HTML</h3>
                <p> Note: if not using bootstrap and you wish to use the hover simply remove the classes on the first div "col-lg-3 col-md-4 col-sm-6 col-xs-12" and give this div a chosen size eg width: 300px</p>
				<pre>
&lt;div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"&gt;
    &lt;div class="hovereffect"&gt;
        &lt;img class="img-responsive" src="http://placehold.it/316x195" alt=""&gt;
            &lt;div class="overlay"&gt;
                &lt;h2&gt;Hover effect 7&lt;/h2&gt;
                &lt;p&gt;
                    &lt;a href="#"&gt;
                        &lt;i class="fa fa-twitter"&gt;&lt;/i&gt;
                    &lt;/a&gt;
                    &lt;a href="#"&gt;
                        &lt;i class="fa fa-facebook"&gt;&lt;/i&gt;
                    &lt;/a&gt;
                    &lt;a href="#"&gt;
                        &lt;i class="fa fa-instagram"&gt;&lt;/i&gt;
                    &lt;/a&gt;
                    &lt;a href="#"&gt;
                        &lt;i class="fa fa-dribbble"&gt;&lt;/i&gt;
                    &lt;/a&gt;
                &lt;/p&gt;
            &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>

                <h3>CSS</h3>
				<pre>
.hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}

.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
}

.hovereffect img {
  display: block;
  position: relative;
}

.hovereffect h2 {
  text-transform: uppercase;
  color: #fff;
  text-align: center;
  font-size: 17px;
}

.hovereffect:hover h2 {
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transform: translate3d(-50%,-50%,0) scale3d(0.8,0.8,1);
  transform: translate3d(-50%,-50%,0) scale3d(0.8,0.8,1);
}

.hovereffect a.info {
  display: inline-block;
  text-decoration: none;
  padding: 7px 14px;
  text-transform: uppercase;
  color: #fff;
  border: 1px solid #fff;
  margin: 50px 0 0 0;
  background-color: transparent;
}

.hovereffect a.info:hover {
  box-shadow: 0 0 5px #fff;
}

.hovereffect h2,
.hovereffect p {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(-50%,-50%,0);
  transform: translate3d(-50%,-50%,0);
  -webkit-transform-origin: 50%;
  -ms-transform-origin: 50%;
  transform-origin: 50%;
  background-color: transparent;
  margin: 0px;
  padding: 0px;
}

.hovereffect .overlay:before {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 40%;
  height: 60%;
  border: 2px solid #fff;
  content: '';
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,-45deg) scale3d(0,0,1);
  transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,-45deg) scale3d(0,0,1);
  -webkit-transform-origin: 50%;
  -ms-transform-origin: 50%;
  transform-origin: 50%;
}

.hovereffect p {
  width: 20%;
  text-transform: none;
  font-size: 15px;
  line-height: 2;
}

.hovereffect p a {
  color: #fff;
}

.hovereffect p a:hover,
.hovereffect p a:focus {
  opacity: 0.6;
  filter: alpha(opacity=60);
}

.hovereffect  a i {
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  padding: 0px 5px;
}

.hovereffect p a:first-child i {
  -webkit-transform: translate3d(-60px,-60px,0);
  transform: translate3d(-60px,-60px,0);
}

.hovereffect p a:nth-child(2) i {
  -webkit-transform: translate3d(60px,-60px,0);
  transform: translate3d(60px,-60px,0);
}

.hovereffect p a:nth-child(3) i {
  -webkit-transform: translate3d(-60px,60px,0);
  transform: translate3d(-60px,60px,0);
}

.hovereffect p a:nth-child(4) i {
  -webkit-transform: translate3d(60px,60px,0);
  transform: translate3d(60px,60px,0);
}

.hovereffect:hover .overlay:before {
  opacity: 1;
  filter: alpha(opacity=100);
  background-color: rgba(0,0,0,0.2);
  -webkit-transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,-135deg) scale3d(1,1,1);
  transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,-135deg) scale3d(1,1,1);
}

.hovereffect:hover p i:empty {
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
  opacity: 1;
  filter: alpha(opacity=100);
}
</pre>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<div id="modal8" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h2 class="modal-title">Hover effect 8</h2>
            </div>
            <div class="modal-body">
                <h3>HTML</h3>
                <p> Note: if not using bootstrap and you wish to use the hover simply remove the classes on the first div "col-lg-3 col-md-4 col-sm-6 col-xs-12" and give this div a chosen size eg width: 300px</p>
				<pre>
&lt;div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"&gt;
    &lt;div class="hovereffect"&gt;
        &lt;img class="img-responsive" src="http://placehold.it/290x195" alt=""&gt;
            &lt;div class="overlay"&gt;
                &lt;h2&gt;Hover effect 8&lt;/h2&gt;
                &lt;p class="set1"&gt;
                    &lt;a href="#"&gt;
                        &lt;i class="fa fa-twitter"&gt;&lt;/i&gt;
                    &lt;/a&gt;
                    &lt;a href="#"&gt;
                        &lt;i class="fa fa-facebook"&gt;&lt;/i&gt;
                    &lt;/a&gt;
                &lt;/p&gt;
                &lt;hr&gt;
                &lt;hr&gt;
                &lt;p class="set2"&gt;
                    &lt;a href="#"&gt;
                        &lt;i class="fa fa-instagram"&gt;&lt;/i&gt;
                    &lt;/a&gt;
                    &lt;a href="#"&gt;
                        &lt;i class="fa fa-dribbble"&gt;&lt;/i&gt;
                    &lt;/a&gt;
                &lt;/p&gt;
            &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>

                <h3>CSS</h3>
				<pre>
.hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}

.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
}

.hovereffect img {
  display: block;
  position: relative;
}

.hovereffect h2 {
  text-transform: uppercase;
  color: #fff;
  text-align: center;
  font-size: 17px;
  padding: 10px;
}

.hovereffect:hover h2 {
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transform: translate3d(-50%,-50%,0) scale3d(0.8,0.8,1);
  transform: translate3d(-50%,-50%,0) scale3d(0.8,0.8,1);
}

.hovereffect a.info {
  display: inline-block;
  text-decoration: none;
  padding: 7px 14px;
  text-transform: uppercase;
  color: #fff;
  border: 1px solid #fff;
  margin: 50px 0 0 0;
  background-color: transparent;
}

.hovereffect a.info:hover {
  box-shadow: 0 0 5px #fff;
}

.hovereffect hr {
  width: 40%;
  opacity: 0;
  filter: alpha(opacity=0);
  border: 1px solid #FFF;
}

.hovereffect  hr:nth-child(3) {
  -webkit-transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,90deg) scale3d(0,0,1);
  transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,90deg) scale3d(0,0,1);
}

.hovereffect  hr:nth-child(4) {
  -webkit-transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,180deg) scale3d(0,0,1);
  transform: translate3d(-50%,-50%,0) rotate3d(0,0,1, 180deg) scale3d(0,0,1);
}

.hovereffect h2, .hovereffect hr {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(-50%,-50%,0);
  transform: translate3d(-50%,-50%,0);
  -webkit-transform-origin: 50%;
  -ms-transform-origin: 50%;
  transform-origin: 50%;
  background-color: transparent;
  margin: 0px;
}

.set1, .set2 {
  left: 50%;
  position: absolute;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(-50%,-50%,0);
  transform: translate3d(-50%,-50%,0);
  -webkit-transform-origin: 50%;
  -ms-transform-origin: 50%;
  transform-origin: 50%;
  background-color: transparent;
  margin: 0px;
  padding: 0px;
}

.set1 {
  top: 40%;
}

.set2 {
  top: 60%;
}

.hovereffect p {
  width: 30%;
  text-transform: none;
  font-size: 15px;
  line-height: 2;
}

.hovereffect p a {
  color: #fff;
}

.hovereffect p a:hover,
.hovereffect p a:focus {
  opacity: 0.6;
  filter: alpha(opacity=60);
}

.hovereffect  a i {
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  padding: 10px;
  font-size: 20px;
}

.set1 a:first-child i {
  -webkit-transform: translate3d(-60px,-60px,0);
  transform: translate3d(-60px,-60px,0);
}

.set1 a:nth-child(2) i {
  -webkit-transform: translate3d(60px,-60px,0);
  transform: translate3d(60px,-60px,0);
}

.set2 a:first-child i {
  -webkit-transform: translate3d(-60px,60px,0);
  transform: translate3d(-60px,60px,0);
}

.set2 a:nth-child(2) i {
  -webkit-transform: translate3d(60px,60px,0);
  transform: translate3d(60px,60px,0);
}

.hovereffect:hover hr:nth-child(3) {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,-90deg) scale3d(1,1,1);
  transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,-90deg) scale3d(1,1,1);
}

.hovereffect:hover hr:nth-child(4) {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,-180deg) scale3d(1,1,1);
  transform: translate3d(-50%,-50%,0) rotate3d(0,0,1,-180deg) scale3d(1,1,1);
}

.hovereffect:hover .set1 i:empty, .hovereffect:hover .set2 i:empty {
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
  opacity: 1;
  filter: alpha(opacity=100);
}</pre>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<div id="modal9" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h2 class="modal-title">Hover effect 9</h2>
            </div>
            <div class="modal-body">
                <h3>HTML</h3>
                <p> Note: if not using bootstrap and you wish to use the hover simply remove the classes on the first div "col-lg-3 col-md-4 col-sm-6 col-xs-12" and give this div a chosen size eg width: 300px</p>
				<pre>
&lt;div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"&gt;
    &lt;div class="hovereffect"&gt;
        &lt;img class="img-responsive" src="http://placehold.it/350x200" alt=""&gt;
        &lt;div class="overlay"&gt;
           &lt;h2&gt;Hover effect 9&lt;/h2&gt;
           &lt;a class="info" href="#"&gt;link here&lt;/a&gt;
        &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>

                <h3>CSS</h3>
				<pre>
.hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}

.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  left: 0;
  background-color: rgba(255, 255, 255, 0.7);
  top: -200px;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: all 0.1s ease-out 0.5s;
  transition: all 0.1s ease-out 0.5s;
}

.hovereffect:hover .overlay {
  opacity: 1;
  filter: alpha(opacity=100);
  top: 0px;
  -webkit-transition-delay: 0s;
  transition-delay: 0s;
}

.hovereffect img {
  display: block;
  position: relative;
}

.hovereffect h2 {
  text-transform: uppercase;
  color: #fff;
  text-align: center;
  position: relative;
  font-size: 17px;
  padding: 10px;
  background: rgba(0, 0, 0, 0.6);
  -webkit-transform: translateY(-200px);
  -ms-transform: translateY(-200px);
  transform: translateY(-200px);
  -webkit-transition: all ease-in-out 0.1s;
  transition: all ease-in-out 0.1s;
  -webkit-transition-delay: 0.3s;
  transition-delay: 0.3s;
}

.hovereffect:hover h2 {
  -webkit-transform: translateY(0px);
  -ms-transform: translateY(0px);
  transform: translateY(0px);
  -webkit-transition-delay: 0.3s;
  transition-delay: 0.3s;
}

.hovereffect a.info {
  display: inline-block;
  text-decoration: none;
  padding: 7px 14px;
  text-transform: uppercase;
  margin: 50px 0 0 0;
  background-color: transparent;
  -webkit-transform: translateY(-200px);
  -ms-transform: translateY(-200px);
  transform: translateY(-200px);
  color: #000;
  border: 1px solid #000;
  -webkit-transition: all ease-in-out 0.3s;
  transition: all ease-in-out 0.3s;
}

.hovereffect a.info:hover {
  box-shadow: 0 0 5px #fff;
}

.hovereffect:hover a.info {
  -webkit-transform: translateY(0px);
  -ms-transform: translateY(0px);
  transform: translateY(0px);
  box-shadow: 0 0 5px #000;
  color: #000;
  border: 1px solid #000;
  -webkit-transition-delay: 0.3s;
  transition-delay: 0.3s;
}</pre>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<div id="modal10" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h2 class="modal-title">Hover effect 10</h2>
            </div>
            <div class="modal-body">
                <h3>HTML</h3>
                <p> Note: if not using bootstrap and you wish to use the hover simply remove the classes on the first div "col-lg-3 col-md-4 col-sm-6 col-xs-12" and give this div a chosen size eg width: 300px</p>
				<pre>
&lt;div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"&gt;
    &lt;div class="hovereffect"&gt;
        &lt;img class="img-responsive" src="http://placehold.it/350x200" alt=""&gt;
            &lt;div class="overlay"&gt;
                &lt;h2&gt;Effect 10&lt;/h2&gt;
                &lt;p class="icon-links"&gt;
                    &lt;a href="#"&gt;
                        &lt;span class="fa fa-twitter"&gt;&lt;/span&gt;
                    &lt;/a&gt;
                    &lt;a href="#"&gt;
                        &lt;span class="fa fa-facebook"&gt;&lt;/span&gt;
                    &lt;/a&gt;
                    &lt;a href="#"&gt;
                        &lt;span class="fa fa-instagram"&gt;&lt;/span&gt;
                    &lt;/a&gt;
                &lt;/p&gt;
            &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>

                <h3>CSS</h3>
				<pre>

.hovereffect {
    width: 100%;
    height: 100%;
    float: left;
    overflow: hidden;
    position: relative;
    text-align: center;
    cursor: default;
}
.hovereffect .overlay {
    width: 100%;
    position: absolute;
    overflow: hidden;
    left: 0;
	top: auto;
	bottom: 0;
	padding: 1em;
	height: 4.75em;
	background: #79FAC4;
	color: #3c4a50;
	-webkit-transition: -webkit-transform 0.35s;
	transition: transform 0.35s;
	-webkit-transform: translate3d(0,100%,0);
	transform: translate3d(0,100%,0);
	visibility: hidden;

}

.hovereffect img {
    display: block;
    position: relative;
	-webkit-transition: -webkit-transform 0.35s;
	transition: transform 0.35s;
}

.hovereffect:hover img {
-webkit-transform: translate3d(0,-10%,0);
	transform: translate3d(0,-10%,0);
}

.hovereffect h2 {
    text-transform: uppercase;
    color: #fff;
    text-align: center;
    position: relative;
    font-size: 17px;
    padding: 10px;
    background: rgba(0, 0, 0, 0.6);
	float: left;
	margin: 0px;
	display: inline-block;
}

.hovereffect a.info {
    display: inline-block;
    text-decoration: none;
    padding: 7px 14px;
    text-transform: uppercase;
	color: #fff;
	border: 1px solid #fff;
	margin: 50px 0 0 0;
	background-color: transparent;
}
.hovereffect a.info:hover {
    box-shadow: 0 0 5px #fff;
}


.hovereffect p.icon-links a {
	float: right;
	color: #3c4a50;
	font-size: 1.4em;
}

.hovereffect:hover p.icon-links a:hover,
.hovereffect:hover p.icon-links a:focus {
	color: #252d31;
}

.hovereffect h2,
.hovereffect p.icon-links a {
	-webkit-transition: -webkit-transform 0.35s;
	transition: transform 0.35s;
	-webkit-transform: translate3d(0,200%,0);
	transform: translate3d(0,200%,0);
	visibility: visible;
}

.hovereffect p.icon-links a span:before {
	display: inline-block;
	padding: 8px 10px;
	speak: none;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
}


.hovereffect:hover .overlay,
.hovereffect:hover h2,
.hovereffect:hover p.icon-links a {
	-webkit-transform: translate3d(0,0,0);
	transform: translate3d(0,0,0);
}

.hovereffect:hover h2 {
	-webkit-transition-delay: 0.05s;
	transition-delay: 0.05s;
}

.hovereffect:hover p.icon-links a:nth-child(3) {
	-webkit-transition-delay: 0.1s;
	transition-delay: 0.1s;
}

.hovereffect:hover p.icon-links a:nth-child(2) {
	-webkit-transition-delay: 0.15s;
	transition-delay: 0.15s;
}

.hovereffect:hover p.icon-links a:first-child {
	-webkit-transition-delay: 0.2s;
	transition-delay: 0.2s;
}</pre>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<div id="modal11" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h2 class="modal-title">Hover effect 11</h2>
            </div>
            <div class="modal-body">
                <h3>HTML</h3>
                <p> Note: if not using bootstrap and you wish to use the hover simply remove the classes on the first div "col-lg-3 col-md-4 col-sm-6 col-xs-12" and give this div a chosen size eg width: 300px</p>
				<pre>
&lt;div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"&gt;
    &lt;div class="hovereffect"&gt;
        &lt;img class="img-responsive" src="http://placehold.it/350x200" alt=""&gt;
            &lt;div class="overlay"&gt;
                &lt;h2&gt;Effect 11&lt;/h2&gt;
				&lt;p&gt;
					&lt;a href="#"&gt;LINK HERE&lt;/a&gt;
				&lt;/p&gt;
            &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>

                <h3>CSS</h3>
				<pre>
.hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
  background: -webkit-linear-gradient(45deg, #ff89e9 0%, #05abe0 100%);
  background: linear-gradient(45deg, #ff89e9 0%,#05abe0 100%);
}

.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  padding: 3em;
  text-align: left;
}

.hovereffect img {
  display: block;
  position: relative;
  max-width: none;
  width: calc(100% + 60px);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.45s;
  transition: opacity 0.35s, transform 0.45s;
  -webkit-transform: translate3d(-40px,0,0);
  transform: translate3d(-40px,0,0);
}

.hovereffect h2 {
  text-transform: uppercase;
  color: #fff;
  position: relative;
  font-size: 17px;
  background-color: transparent;
  padding: 15% 0 10px 0;
  text-align: left;
}

.hovereffect .overlay:before {
  position: absolute;
  top: 20px;
  right: 20px;
  bottom: 20px;
  left: 20px;
  border: 1px solid #fff;
  content: '';
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.45s;
  transition: opacity 0.35s, transform 0.45s;
  -webkit-transform: translate3d(-20px,0,0);
  transform: translate3d(-20px,0,0);
}

.hovereffect a, .hovereffect p {
  color: #FFF;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.45s;
  transition: opacity 0.35s, transform 0.45s;
  -webkit-transform: translate3d(-10px,0,0);
  transform: translate3d(-10px,0,0);
}

.hovereffect:hover img {
  opacity: 0.6;
  filter: alpha(opacity=60);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

.hovereffect:hover .overlay:before,
.hovereffect:hover a, .hovereffect:hover p {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}
</pre>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div id="modal12" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h2 class="modal-title">Hover effect 12</h2>
            </div>
            <div class="modal-body">
                <h3>HTML</h3>
                <p> Note: if not using bootstrap and you wish to use the hover simply remove the classes on the first div "col-lg-3 col-md-4 col-sm-6 col-xs-12" and give this div a chosen size eg width: 300px</p>
				<pre>
&lt;div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"&gt;
    &lt;div class="hovereffect"&gt;
        &lt;img class="img-responsive" src="http://placehold.it/350x250" alt=""&gt;
            &lt;div class="overlay"&gt;
                &lt;h2&gt;Effect 12&lt;/h2&gt;
				&lt;p&gt;
					&lt;a href="#"&gt;LINK HERE&lt;/a&gt;
				&lt;/p&gt;
            &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>

                <h3>CSS</h3>
				<pre>
.hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
  background: #42b078;
}

.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  padding: 50px 20px;
}

.hovereffect img {
  display: block;
  position: relative;
  max-width: none;
  width: calc(100% + 20px);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(-10px,0,0);
  transform: translate3d(-10px,0,0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.hovereffect:hover img {
  opacity: 0.4;
  filter: alpha(opacity=40);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

.hovereffect h2 {
  text-transform: uppercase;
  color: #fff;
  text-align: center;
  position: relative;
  font-size: 17px;
  overflow: hidden;
  padding: 0.5em 0;
  background-color: transparent;
}

.hovereffect h2:after {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 2px;
  background: #fff;
  content: '';
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
  -webkit-transform: translate3d(-100%,0,0);
  transform: translate3d(-100%,0,0);
}

.hovereffect:hover h2:after {
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

.hovereffect a, .hovereffect p {
  color: #FFF;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(100%,0,0);
  transform: translate3d(100%,0,0);
}

.hovereffect:hover a, .hovereffect:hover p {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}</pre>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<div id="modal13" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h2 class="modal-title">Hover effect 13</h2>
            </div>
            <div class="modal-body">
                <h3>HTML</h3>
                <p> Note: if not using bootstrap and you wish to use the hover simply remove the classes on the first div "col-lg-3 col-md-4 col-sm-6 col-xs-12" and give this div a chosen size eg width: 300px</p>
				<pre>
&lt;div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"&gt;
    &lt;div class="hovereffect"&gt;
        &lt;img class="img-responsive" src="http://placehold.it/350x250" alt=""&gt;
            &lt;div class="overlay"&gt;
                &lt;h2&gt;Effect 13&lt;/h2&gt;
				&lt;p&gt;
					&lt;a href="#"&gt;LINK HERE&lt;/a&gt;
				&lt;/p&gt;
            &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>

                <h3>CSS</h3>
				<pre>
.hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}

.hovereffect .overlay {
  position: absolute;
  overflow: hidden;
  width: 80%;
  height: 80%;
  left: 10%;
  top: 10%;
  border-bottom: 1px solid #FFF;
  border-top: 1px solid #FFF;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: scale(0,1);
  -ms-transform: scale(0,1);
  transform: scale(0,1);
}

.hovereffect:hover .overlay {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.hovereffect img {
  display: block;
  position: relative;
  -webkit-transition: all 0.35s;
  transition: all 0.35s;
}

.hovereffect:hover img {
  filter: url('data:image/svg+xml;charset=utf-8,&lt;svg xmlns="http://www.w3.org/2000/svg"&gt;&lt;filter id="filter"&gt;&lt;feComponentTransfer color-interpolation-filters="sRGB"&gt;&lt;feFuncR type="linear" slope="0.6" /&gt;&lt;feFuncG type="linear" slope="0.6" /&gt;&lt;feFuncB type="linear" slope="0.6" /&gt;&lt;/feComponentTransfer&gt;&lt;/filter&gt;&lt;/svg&gt;#filter');
  filter: brightness(0.6);
  -webkit-filter: brightness(0.6);
}

.hovereffect h2 {
  text-transform: uppercase;
  text-align: center;
  position: relative;
  font-size: 17px;
  background-color: transparent;
  color: #FFF;
  padding: 1em 0;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0,-100%,0);
  transform: translate3d(0,-100%,0);
}

.hovereffect a, .hovereffect p {
  color: #FFF;
  padding: 1em 0;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(0,100%,0);
  transform: translate3d(0,100%,0);
}

.hovereffect:hover a, .hovereffect:hover p, .hovereffect:hover h2 {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}</pre>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<div id="modal14" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h2 class="modal-title">Hover effect 14</h2>
            </div>
            <div class="modal-body">
                <h3>HTML</h3>
                <p> Note: if not using bootstrap and you wish to use the hover simply remove the classes on the first div "col-lg-3 col-md-4 col-sm-6 col-xs-12" and give this div a chosen size eg width: 300px</p>
				<pre>
&lt;div class="col-lg-3 col-md-4 col-sm-6 col-xs-12"&gt;
    &lt;div class="hovereffect"&gt;
        &lt;img class="img-responsive" src="http://placehold.it/350x250" alt=""&gt;
            &lt;div class="overlay"&gt;
                &lt;h2&gt;Effect 14&lt;/h2&gt;
				&lt;p&gt;
					&lt;a href="#"&gt;LINK HERE&lt;/a&gt;
				&lt;/p&gt;
            &lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;</pre>

                <h3>CSS</h3>
				<pre>
.hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
}

.hovereffect .overlay {
  position: absolute;
  overflow: hidden;
  opacity: 0;
  filter: alpha(opacity=0);
  width: 55%;
  height: 81%;
  left: 22%;
  top: 10%;
  border-radius: 80%;
  border: 2px solid #FFF;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(50%,50%,0);
  transform: translate3d(50%,50%,0);
}

.hovereffect:hover .overlay {
  background-color: rgba(0,0,0,0.3);
}

.hovereffect img {
  display: block;
  position: relative;
  -webkit-transition: all 0.35s;
  transition: all 0.35s;
}

.hovereffect:hover img {
  filter: url('data:image/svg+xml;charset=utf-8,&lt;svg xmlns="http://www.w3.org/2000/svg"&gt;&lt;filter id="filter"&gt;&lt;feComponentTransfer color-interpolation-filters="sRGB"&gt;&lt;feFuncR type="linear" slope="1.4" /&gt;&lt;feFuncG type="linear" slope="1.4" /&gt;&lt;feFuncB type="linear" slope="1.4" /&gt;&lt;/feComponentTransfer&gt;&lt;/filter&gt;&lt;/svg&gt;#filter');
  filter: brightness(1.4);
  -webkit-filter: brightness(1.4);
}

.hovereffect h2 {
  text-transform: uppercase;
  text-align: center;
  position: relative;
  font-size: 17px;
  padding: 10px;
  background-color: transparent;
  color: #FFF;
  padding: 1em 0;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(-150%,-400%,0);
  transform: translate3d(-150%,-400%,0);
}

.hovereffect a, .hovereffect p {
  color: #FFF;
  padding: 1em 0;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(-150%,-400%,0);
  transform: translate3d(-150%,-400%,0);
}

.hovereffect:hover a, .hovereffect:hover p, .hovereffect:hover h2, .hovereffect:hover .overlay {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}</pre>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!--  Bootstrap & jQuery -->
<script src="js/production.min.js"></script>


</body>

</html>
