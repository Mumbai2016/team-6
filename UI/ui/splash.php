<!DOCTYPE html>
<html lang="en">
<?php session_start();?>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>USERNAME | </title>
	
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
	  <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  .navbar { margin-bottom:0px; }
.carousel-caption { margin-top:0px;}
.carousel .item {
    width: 100%; /*slider width*/
    max-height: 400px; /*slider height*/
}
.carousel .item img {
    width: 100%; /*img width*/
	margin top: -10px;
}
/*full width container*/
@media (max-width: 767px) {
    .block {
	    margin-top: -20px
        margin-left: -10px;
        margin-right: -10px;
    }
}
  </style>
</head>
	
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
     



    

<section class="block">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="logo2.jpg" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h1>ATMA<h1>
          <h3>An accelerator for education.<h3>
        </div>
      </div>

      <div class="item">
        <img src="logo1.jpg" alt="Chania" width="460" height="325">
        <div class="carousel-caption">
          <h1>Welcome! Have an insight of ATMA</h1>
          
        </div>
      </div>
    
     
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


        <div class="nav_menu"></div>
       <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"
       action="../../authenticate.php" method="POST" >

                     <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Username <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="text" name="username" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Password <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="password" name="password" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
								</div>
								<div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">User Type <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <select name='ddl' class="form-control">
                                      <option value="-1">Select</option>
                                      <option value="0">Supervisor</option>
                                      <option value="1">Partner Manager</option>
                                      <option value="2">Volunteer</option>                              
                                </select>
                                </div>
								</div>
								 <div class="form-group">
                                

                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button type="submit" name="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                      
                    </form>

    </div> <!-- /container -->

      </div>
    </div>
        
    <!-- /gauge.js -->
  </body>
</html>
