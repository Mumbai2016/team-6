<!DOCTYPE html>
<?php include '../connect.php';?>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>USERNAME | </title>

    <!-- Bootstrap -->
    <link href="../UI/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../UI/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../UI/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../UI/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../UI/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../UI/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href="../UI/build/css/custom.min.css" rel="stylesheet">
	<style>
	th, td { padding: 15px; }

/* cellspacing */
table { border-collapse: separate; border-spacing: 15px; } /* cellspacing="5" */
table { border-collapse: collapse; border-spacing: 0; }   /* cellspacing="0" */

/* valign */
th, td { vertical-align: top; }

/* align (center) */
table { margin: 10 auto; }
</style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>USERNAME!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i> Home </span></a>
                    
                  </li>
                  <li><a href="insert_activities.php"><i class="fa fa-edit"></i> PM INSERT </span></a>
                    
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Survey </span></a>
                    
                  </li>
				  <li><a><i class="fa fa-book"></i> Reports <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="volunteer_reports.php">For Volunteers</a></li>
                      
                    </ul>
                  </li>
                  
                 
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          
          <!-- /top tiles -->

          <br />
			<?php
			//take details of the volunteer from his volunteerid
			$volunteer_id=$_POST['volunteerid'];
			//echo $volunteer_id;
			$sql_getname="select * from user where uid='$volunteer_id'";
			$resname=mysql_query($sql_getname);
			while($row=mysql_fetch_array($resname))
			{
				$volunteer_name=$row['uname'];
			}
			$sql_getname="select * from p_vol where p_uid='$volunteer_id'";
			$resname=mysql_query($sql_getname);
			while($row=mysql_fetch_array($resname))
			{
				$volunteer_hours=$row['hours'];
				$volunteer_weeks=$row['weeks'];
				$volunteer_p_pid=$row['p_pid'];
			
			}
			$sql_uid="SELECT * FROM `projects` WHERE pid in (select p_pid from p_vol where p_uid=$volunteer_id)";
			$resm=mysql_query($sql_uid);
			//echo $resm;
			$v_status=array(0,0,0);
			while($row=mysql_fetch_array($resm))
			{
				
				if($row['status']=='completed')
				{
					$v_status[0]+=1;
				}
				else if($row['status']=='ongoing')
				{
					$v_status[1]+=1;
				}
				else
				{
					$v_status[2]+=1;
				}
			}
			
			
			?>
          <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
				<div class="x_content">
                    <br />
					<center><h1> Volunteer Report for <?php echo $volunteer_name;?></h1></center>
					</br>
                    <div class="table" style="font-size:20px">
					<center><table>
					<tr>
						<td>Volunteer Name</td>
						<td><?php echo $volunteer_name;?></td>
					</tr>
					<tr>
						<td>Hours Worked</td>
						<td><?php echo $volunteer_hours;?></td>
					</tr>
					<tr>
						<td>Weeks Worked</td>
						<td><?php echo $volunteer_weeks;?></td>
					</tr>
					<tr>
						<td>Average Hours Worked Per Weeks</td>
						<td><?php echo ($volunteer_hours/$volunteer_weeks);?></td>
					</tr>
					<tr>
						<td>Projects Completed</td>
						<td><?php echo $v_status[0];?></td>
					</tr>
					<tr>
						<td>Projects Ongoing</td>
						<td><?php echo $v_status[1];?></td>
					</tr>
					<tr>
						<td>Projects Not Started</td>
						<td><?php echo $v_status[2];?></td>
					</tr>
					</table></center>
					</div>
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <center>
                          
                          <button type="submit" class="btn btn-success">Done</button>
                        </center>
                      </div>

                    </form>
                  </div>
				  </div>


            
            
              
              </div>
            </div>


          


        
      </div>
    </div>

    <!-- jQuery -->
    <script src="../UI/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../UI/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../UI/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../UI/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../UI/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../UI/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../UI/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../UI/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../UI/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../UI/vendors/Flot/jquery.flot.js"></script>
    <script src="../UI/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../UI/vendors/Flot/jquery.flot.time.js"></script>
    <script src="../UI/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../UI/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../UI/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../UI/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../UI/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../UI/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../UI/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../UI/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../UI/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="js/moment/moment.min.js"></script>
    <script src="js/datepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../UI/build/js/custom.min.js"></script>

   

   
   
    
  </body>
</html>
