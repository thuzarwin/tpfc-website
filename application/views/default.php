<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>Trott Park Fencing Club :: <? echo str_replace('_',' ',$title); ?> </title>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <!-- Latest compiled and minified CSS -->
       <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"  crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/lavish-bootstrap.css">
    
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Signika:400,300|Cuprum:400,400italic|Sanchez|Pontano+Sans|Kreon:400,700|Cookie|Lato' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <!-- Latest compiled and minified JavaScript -->
<link rel="stylesheet" href="/assets/css/footer-distributed-with-address-and-phones.css">
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" crossorigin="anonymous"></script>
  <!--  <script src="http://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.3.0/lodash.min.js"></script>-->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.min.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
	<link rel="stylesheet" href="/assets/css/homepage.css"/>
    <? 
    echo link_tag('favicon.ico', 'shortcut icon', 'image/ico');
    ?>
    <style type="text/css">
.main-title {
    font-family: 'Sanchez', serif;
    color: #fff !important;
    padding-bottom:30px;
}
#content {
    padding-bottom: 60px;
}

html,
body {
  height: 100%;
  /* The html and body elements cannot have any padding or margin. */
}
.page-header {
    border-bottom: 0;
}
.results tr[visible='false'],
.no-result{
  display:none;
}
.results tr[visible='true']{
  display:table-row;
}
#wrap {
  background-image: url('/assets/images/wavegrid.png');
 
  margin: 0 auto -60px;
  /* Pad bottom by footer height */
  padding: 0 0 0px;
}
#footer {
  height: 60px;
  background-color: #f5f5f5;
}
.navbar-header {
    font-size:14pt !important;
}
.navbar-nav > li {
    font-family:'Cuprum' ,'Helvetica Neue', Helvetica, Arial, sans-serif !important;
    font-weight:400 !important;
    font-size:14pt;
    letter-spacing: 0.04em;
}
.col-md-12 h1 {
    float:right; 
    font-family: tahoma, arial, sans-serif;
    color:blueViolet; 
    font-size:40px;
    padding-top:25px;
    
}
.error-message {
    position: absolute;
    top: 30px;
    left: 500px;
    width: 300px;
    z-index: 9999;
}
.jumbotron {
   /* background-image: radial-gradient(ellipse closest-side,#4527A0 ,#4F364C);*/
background: -moz-radial-gradient(center, ellipse cover, #4527A0 0%, #4F364C 100%); /* ff3.6+ */
background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%, #4527A0), color-stop(100%, #4F364C)); /* safari4+,chrome */
background: -webkit-radial-gradient(center, ellipse cover, #4527A0 0%, #4F364C 100%); /* safari5.1+,chrome10+ */
background: -o-radial-gradient(center, ellipse cover, #4527A0 0%, #4F364C 100%); /* opera 11.10+ */
background: -ms-radial-gradient(center, ellipse cover, #4527A0 0%, #4F364C 100%); /* ie10+ */
background: radial-gradient(ellipse at center, #4527A0 0%, #4F364C 100%); /* w3c */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4527A0', endColorstr='#4F364C',GradientType=0 ); /* ie6-9 */
}
.vertical-center {

}
.carousel {
    margin-bottom: 0;
    padding: 0 40px 30px 40px;
}

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  margin-top: 60px;
  font-size: 12px;
  line-height: 1.42;
  border-radius: 15px;
  background-color: #111;
  color: #fff;
}
.btn-circle:hover {
  background-color: #444;
}

h3,h4,h5 {
    font-family:Sanchez;
}
.carousel-indicators {
    right: 50%;
    top: auto;
    bottom: 0px;
    margin-right: -19px;
}
.glyphicon-refresh-animate {
    -animation: spin .7s infinite linear;
    -webkit-animation: spin2 .7s infinite linear;
}

@-webkit-keyframes spin2 {
    from { -webkit-transform: rotate(0deg);}
    to { -webkit-transform: rotate(360deg);}
}

@keyframes spin {
    from { transform: scale(1) rotate(0deg);}
    to { transform: scale(1) rotate(360deg);}
}
.carousel-indicators li {
    background: #fff;
}

.carousel-indicators .active {
    background: #333333;
}
.carousel-inner {
    height: 175px;
}
.img-responsive {
    height: 155px;
    background-size:cover !important;
    background-repeat:no-repeat;
    background-position: center center;
}
@media (max-width: 992px) {
    .img-responsive {
        height: 300px;
    }
    .carousel-inner {
        height: 300px;
    }
}
.container .text-muted {
  margin: 20px 0;
}
footer {
    font-family: 'Cuprum';
}
.text-muted > a {
  color: #8E6AB3;
}
.page-header {
    font-family:Sanchez, serif;
}
a.navbar-brand {
    font-family:Sanchez, serif;
}
.bot-logo {
/*   -moz-transform: scaleX(-1);
    -o-transform: scaleX(-1);
    -webkit-transform: scaleX(-1);
    transform: scaleX(-1);
    filter: FlipH;
    -ms-filter: "FlipH";*/
}

#logo {
/*    -webkit-box-shadow: 0px 30px 40px -25px rgba(0, 0, 0, 1);
    -moz-box-shadow:    0px 30px 40px -25px rgba(0, 0, 0, 1);
    filter: drop-shadow(10px 10px 20px #222);        0px 30px 40px -25px rgba(0, 0, 0, 1);*/
}

    </style>

    <meta name="keywords" content="fencing, south australia, adelaide, sport, trott park, sheidow park, excersise, kids, marion, hallett cove"/>
    <meta name="description" content="Trott Park Fencing Club is a small fencing club based in Southern Adelaide with a focus on junior development"/>
  </head>
<body>
<div id="wrap">
<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=502666093201010&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



 <nav class="navbar-inverse navbar-default navbar-static-top" style="margin-bottom:0px;">
      <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">
Trott Park Fencing Club  <div class="fb-like" 
      data-href="https://www.facebook.com/trottparkfencingclub" 
      data-layout="button_count" data-action="like" data-show-faces="true" data-share="false" style="width:79px;"></div>
      </a>
     </div>
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
    <span class="sr-only">Toggle Navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
 
     
    <div id="navbar" class="navbar-collapse collapse" aria-expanded="false">
     <? echo $menu; ?>
    </div><!--/.nav-collapse -->
      </div>
</nav>
<?
if (isset($home)) {
    echo $main_content;
} else {
?>
<div class="container">

    <div class="row" id="content">
      <? 
      if($title != "Home") {
      ?>
    <div class="page-header text-center">
      <h1>
      <?
	if(isset($p)) echo $p;
      echo ucwords(str_replace('_',' ',(str_replace('_',' ',$title)))) ;
      
      ?></h1>
	</div>
      <?
      }
      ?>
    <? echo $main_content; ?>
    </div>
    </div>
</div>
</div>
<?
}
?>
</div>

<footer class="footer-distributed">
    <div class="footer-center">

        <div>
            <i class="fa fa-map-marker"></i>
            <p><? echo anchor('contact', 'Sheidow Park, South Australia');?></p>
        </div>

        <div>
            <i class="fa fa-phone"></i>
            <p><a href="tel:+61-8-<? echo $phone;?>"><? echo substr_replace($phone, ' ', 4, 0);?></a></p>
        </div>

        <div>
            <i class="fa fa-envelope"></i>
            <p><? echo safe_mailto($email)?></p>
        </div>
        
        <div>
            <a href="https://fb.com/trottparkfencingclub"><i class="fa fa-facebook"></i></a> 
            <p> <a href="https://fb.com/trottparkfencingclub">fb.com/trottparkfencingclub</a></p>

        </div>

    </div>

    <div class="footer-right">
    <div class="map_canvas" style="width:100%; height: 250px"></div>
    <? echo $this->load->view('training',$this->data,true);?>
	<div class="footer-company-about">
    Copyright &copy;<? echo date('Y');?> Trott Park Fencing Club Inc., website built by <a href="http://jonno.9ch.in">Jonathan Mackenzie</a>
	</div>
    </div>

</footer>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.22/gmaps.min.js"></script>
<? echo $scripts; 
if($this->session->userdata('logged')) {
?>
<script type="text/javascript">
    var CFG = {
        url: "<?php echo $this->config->item('base_url');?>",
        csrf_token: '<?php echo $this->security->get_csrf_hash();?>'
    };
    $(document).ready(function($){
    $.ajaxSetup({data: {csrf_token: CFG.csrf_token}});
    $(document).ajaxSuccess(function(e,x) {
        var result = $.parseJSON(x.responseText);
        $('input:hidden[name="token"]').val(result.csrf_token);
        $.ajaxSetup({data: {csrf_token: result.csrf_token}});
    });
});
</script>
<? } ?>
</body>
</html> 
