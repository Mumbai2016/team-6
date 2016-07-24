        <!DOCTYPE html>
        <html lang="en">
          <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <!-- Meta, title, CSS, favicons, etc. -->
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>Welcome</title>

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
          </head>

          <body class="nav-md">
            <div class="container body">
              <div class="main_container">
              <?php 
                for($i =0 ;$i <5; $i++){
                  echo "<br>";

                }
              ?>
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

                                <div class="col-md-6 col-sm-6 col-xs-12">
        <!--
                                  <select>
                                      <option value="0">Supervisor</option>
                                      <option value="1">Partner Manager</option>
                                      <option value="2">Volunteer</option>                              
                                  </select>
        -->

        <!--
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="#">Action</a></li>
                              <li><a href="#">Another action</a></li>
                              <li><a href="#">Something else here</a></li>
                              <li class="divider"></li>
                              <li><a href="#">Separated link</a></li>
                            </ul>
        -->
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Username <span class="required">*</span></label>
                              <select name='ddl'>
                                      <option value="-1">Select</option>
                                      <option value="0">Supervisor</option>
                                      <option value="1">Partner Manager</option>
                                      <option value="2">Volunteer</option>                              
                                </select>

                                    
                                
                              </div>
                           </div>
                              <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                  <button type="submit" class="btn btn-primary">Cancel</button>
                                  <button type="submit" name="submit" class="btn btn-success">Submit</button>
                                </div>
                              </div>                      
                            </form>

        <!--    </div>  /container -->

              </div>
            </div>

            <!-- /gauge.js -->
          </body>
        </html>
