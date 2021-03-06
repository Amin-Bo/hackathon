
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <title>Time Lapse </title>
    
	<link href="{{asset('customStyle/css/coming-sssoon.css')}}" rel="stylesheet" />  
    
    <!--     Fonts     -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
  
</head>

<body>
<nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                <img src="images/flags/US.png"/>
                English(US) 
                <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="#"><img src="images/flags/DE.png"/> Deutsch</a></li>
                <li><a href="#"><img src="images/flags/GB.png"/> English(UK)</a></li>
                <li><a href="#"><img src="images/flags/FR.png"/> Fran??ais</a></li>
                <li><a href="#"><img src="images/flags/RO.png"/> Rom??n??</a></li>
                <li><a href="#"><img src="images/flags/IT.png"/> Italiano</a></li>
                
                <li class="divider"></li>
                <li><a href="#"><img src="images/flags/ES.png"/> Espa??ol <span class="label label-default">soon</span></a></li>
                <li><a href="#"><img src="images/flags/BR.png"/> Portugu??s <span class="label label-default">soon</span></a></li>
                <li><a href="#"><img src="images/flags/JP.png"/> ????????? <span class="label label-default">soon</span></a></li>
                <li><a href="#"><img src="images/flags/TR.png"/> T??rk??e <span class="label label-default">soon</span></a></li>
             
              </ul>
        </li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="#"> 
                    <i class="fa fa-facebook-square"></i>
                    Like
                </a>
            </li>
             <li>
                <a href="#"> 
                    <i class="fa fa-google-plus-square"></i>
                    Plus
                </a>
            </li>
             <li>
                <a href="#"> 
                    <i class="fa fa-pinterest"></i>
                    Pin
                </a>
            </li>
       </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>

<div class="main" style="background-image: url({{asset('images/video_bg.jpg')}})">
        <video id="video_background" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0"> 
            <source src="{{asset('customStyle/video/time.mp4')}}" type="video/webm"> 
            <source src="{{asset('customStyle/video/time.mp4')}}" type="video/mp4"> 
            Video not supported 
        </video>
<!--    Change the image source '/images/video_bg.jpg')" with your favourite image.     -->
    
    <div class="cover black" data-color="black"></div>
     
<!--   You can change the black color for the filter with those colors: blue, green, red, orange       -->

    <div class="container">
        <h1 class="logo cursive">

          Bizerte culture
        </h1>
<!--  H1 can have 2 designs: "logo" and "logo cursive"           -->
        
        <div class="content">
            <h4 class="motto">we are happy for visiting our website hope you find your goal</h4>
            <div class="subscribe">
                <h5 class="info-text">
                    make your account , choose your club and welcome in the family
                </h5>
                <div class="row justify-content-center  mr-6-md-8">
                  <form class="form-inline" role="form" method="POST" action="{{ route('login') }}">
                    @csrf
                          <div class="form-group col">
                            <label class="sr-only" for="exampleInputEmail2">Email address</label>
                            <input type="email" class="form-control transparent  @error('email') is-invalid @enderror" placeholder="Your email here..." name="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                          <div class="col  form-group">
                            <label class="sr-only" for="exampleInputPassword">Password</label>
                            <input type="password" class="form-control transparent @error('password') is-invalid @enderror" placeholder="***********"  name="password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror  
                        </div>
                          <input type="submit" class="btn btn-outline-warning btn-fill btn-l" type="submit" value="Se Connecter">
                        </form>
                 </div>
                 <div class="row justify-content-center mr-6-md-8 ">
                       
                  <a href="#">Mot de passe oubli?? ?</a>
                 </div>
                  <div class="row justify-content-center mr-6-md-8 ">
                       
                  <a href="{{route('registerMember')}}" class="btn btn-outline-light btn-lg">Creer un compte</a>
                 </div>
                    </div>
                </div>
        </div>
    </div>
    <div class="footer">
      <div class="container">
      </div>
    </div>
 </div>
</body>
   <script src="js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
</html>
