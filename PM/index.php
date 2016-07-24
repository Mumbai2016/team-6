<!DOCTYPE html>
<?php

session_start();
 include '../connect.php';?>
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

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript">
      $('#myModal').modal();

    </script>

    <script type="text/javascript" src="add_hours.js"></script>
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
                  <li><a><i class="fa fa-home"></i> Home </span></a>
                    
                  </li>
                  <li><a href="../UI/ui/form.php"><i class="fa fa-edit"></i> PM INSERT </span></a>
                    
                  </li>
                  <li><a ><i class="fa fa-desktop"></i> Survey </span></a>
                    
                  </li>
                  <!-- Button trigger modal -->
                  <li><a href='#' data-toggle='modal' data-target='#myModal1'><i class="fa fa-clock-o"></i> Update Hours </span></a>
                    
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
                <!-- <li class="">
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
 -->
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
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Volunteers</span>
              <div class="count">2500</div>
              <span class="count_bottom"><i class="green">4% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> Average Weekly hours</span>
              <div class="count">123.50</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Partners</span>
              <div class="count green">2,500</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total NGO's</span>
              <div class="count">4,567</div>
              <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Funds</span>
              <div class="count">2,315</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total time by PM</span>
              <div class="count">35</div>
              <span class="count_bottom"><i class="green">--</i> ---- </span>
            </div>
          </div>
          <!-- /top tiles -->

          <br />

          <div class="row">


            
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320 overflow_hidden">
                <div class="x_title">
                  <h2>Project Status</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table class="" style="width:100%">
                    <tr>
                      <th style="width:37%;">
                        
                      </th>
                      <th>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                          <p class="">Status</p>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                          <p class="">Count</p>
                        </div>
                      </th>
                    </tr>
                    <tr>
                      <td>
                        <canvas id="canvas1" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                      </td>
                      <td>
                        <table class="tile_info">
            <?php
              $sql_array="SELECT * from projects where ngo_id in (SELECT ngo_id FROM ngo where pm_id=1 )";
              $results=mysql_query($sql_array);
              $status=array(0,0,0);
              while($row=mysql_fetch_array($results))
              {
                if($row['status']=='completed')
                {
                  $status[0]+=1;
                }
                else if ($row['status']=='ongoing')
                {
                  $status[1]+=1;
                }
                else
                {
                  $status[2]+=1;
                }
              }
              
              ?>
                          <tr>
                            <td>
                              <p><i class="fa fa-square gray"></i>Completed </p>
                            </td>
                            <td><?php echo $status[0];?></td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square purple"></i>Ongoing </p>
                            </td>
                            <td><?php echo $status[1];?></td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square red"></i>Not Started </p>
                            </td>
                            <td><?php echo $status[2];?></td>
                          </tr>
                         
                        </table>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>


            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>Hours Dedicated by You</h2>
                  
                  <div class="clearfix"></div>
                </div>
                
                      <canvas width="370" height="200" id="foo" class=""></canvas>
                      <div class="goal-wrapper">
                        <?php
            $sql_hours="SELECT * FROM `p_vol` where `p_uid`=".$_SESSION['userid'];
            $res=mysql_query($sql_hours);
            while ($row=mysql_fetch_array($res))
            {
              $hours_worked=$row['hours'];
              $nearest_hundred=100*(int)(($hours_worked+100)/100);
            }?>
                        <span id="gauge-text" class="gauge-value pull-left"><?php echo $hours_worked?></span>
            <span id="gauge-text" class="gauge-value pull-left"> &nbsp;hours</span>
                        <span id="goal-text" class="goal-value pull-right"><?php echo $nearest_hundred;?> hours</span>
                      
                    </div>
                  
                
              </div>
            </div>


          </div>
    
    
      <!-- </div> -->
      <br>
      <?php mysql_close($connect); ?>


      <div id="analyse">
          <?php 
            $x = $_SESSION['user_type']; 
            $count = 0;
            include '../connect_k.php';
            $q = "SELECT `p_pid`, `ngo_id` FROM  `p_vol` WHERE `p_uid`='$x'";
            $ret = $cxn->query($q);
            if($ret->num_rows > 0){
              while($row = $ret->fetch_assoc()){
                $ppid = $row['p_pid'];
                $ngo_id = $row['ngo_id'];
                $q1 = "SELECT `ngo_name` FROM `ngo` WHERE `ngo_id`=$ngo_id";
                $retngo = $cxn->query($q1);
                // echo $q1;
                if($retngo->num_rows > 0){
                    while($rx = $retngo->fetch_assoc()){
                      // print_r($rx);
                      $q3 = "SELECT * FROM `projects` WHERE `ngo_id`=$ngo_id and `pid`=$ppid";
                      $r3 = $cxn->query($q3);
                      if($r3->num_rows > 0){
                        while($row = $r3->fetch_assoc()){

                            echo "<div id='ngo_".$ngo_id."'>";
                              // print_r($row);
                            echo "<a class='form-control' href='#' data-toggle='modal' data-target='#myModal'>".$rx['ngo_name']." : ".$row['p_name']."</a>";
                            echo "</div>";
                          
                        }
                      }

                  }
                }


              }
            }
            ///////////////////////////////////////////////////////////////
            $count_completed=0;$count_aborted=0;$count_on=0;
            $q = "SELECT `ngo_id` FROM `ngo` WHERE `pm_id`=".$x;
            $result = $cxn->query($q);
             foreach ($result as $key => $value) {
              // echo 'here';
             # code...
              // $count = 0;
               $result1 = $cxn->query("select count(*) from projects where status like '%complete%' and ngo_id =".$value['ngo_id']);
                foreach ($result1 as $key => $value) {
                  $count_completed += $value['count(*)'];
                  // echo $count;
                }
               }
//////////////////////////////////////////////////////////
            $q = "SELECT `ngo_id` FROM `ngo` WHERE `pm_id`=".$x;
            $result = $cxn->query($q);
             foreach ($result as $key => $value) {
              // echo 'here';
             # code...
              // $count = 0;
               $result1 = $cxn->query("select count(*) from projects where status like '%ongoing%' and ngo_id =".$value['ngo_id']);
                foreach ($result1 as $key => $value) {
                  $count_on += $value['count(*)'];
                  // echo $count;
                }
               }

///////////////////////////////////////////////////////////////////////
            $q = "SELECT `ngo_id` FROM `ngo` WHERE `pm_id`=".$x;
            $result = $cxn->query($q);
             foreach ($result as $key => $value) {
              // echo 'here';
             # code...
              // $count = 0;
               $result1 = $cxn->query("select count(*) from projects where status like '%complete%' and ngo_id =".$value['ngo_id']);
                foreach ($result1 as $key => $value) {
                  $count_aborted += $value['count(*)'];
                  // echo $count;
                }
               }

            // mysqli_close($cxn);
           ?>
      </div>

      </div>

    
    </div>
    </div>

    <?php 

             for($i=0;$i<5;$i++){
              echo "<br></br>";
             }

         ?>




  <br><br>
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

   

   
    <!-- Doughnut Chart -->
  

    <script>
      $(document).ready(function(){
        var options = {
          legend: false,
          responsive: false
        };

        new Chart(document.getElementById("canvas1"), {
          type: 'doughnut',
          tooltipFillColor: "rgba(51, 51, 51, 0.55)",
          data: {
            labels: [
              "Completed",
              "Ongoing",
              "Not Started"
              
            ],
            datasets: [{
              data: [<?php echo $status[0];?>, <?php echo $status[1];?>, <?php echo $status[2];?>],
              backgroundColor: [
                "#BDC3C7",
                "#9B59B6",
                "#E74C3C"
            
              ],
              hoverBackgroundColor: [
                "#CFD4D8",
                "#B370CF",
                "#E95E4F"
              ]
            }]
          },
          options: options
        });
      });
    </script>
    <!-- /Doughnut Chart -->
    
    

    <!-- gauge.js -->
    <script>
      var opts = {
          lines: 12,
          angle: 0,
          lineWidth: 0.4,
          pointer: {
              length: 0.75,
              strokeWidth: 0.042,
              color: '#1D212A'
          },
          limitMax: 'false',
          colorStart: '#1ABC9C',
          colorStop: '#1ABC9C',
          strokeColor: '#F0F3F3',
          generateGradient: true
      };
      var target = document.getElementById('foo'),
          gauge = new Gauge(target).setOptions(opts);

      gauge.maxValue = <?php echo $nearest_hundred;?>;
      gauge.animationSpeed = 20;
      gauge.set(<?php echo $hours_worked;?>);
      gauge.setTextField(document.getElementById("gauge-text"));
    </script>
    <!-- /gauge.js -->


   
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Summary</h4>
      </div>

      <div class="modal-body">

        <h4>Count of completed projects for PM : <?php echo $count_completed; ?></h4>
        <h4>Count of aborted projects for PM : <?php echo $count_aborted; ?></h4>
        <h4>Count of on going projects for PM : <?php echo $count_on; ?></h4>

     
      </div>
      <div class="modal-footer">
        
      
        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
        <!-- <button type="button" class="btn btn-default">Save changes</button> -->
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Hours</h4>
      </div>

      <div class="modal-body">
        <form action="#" id="mymodalform">
            <input type="number" name="update_hr" ></input>
            <input type="submit" name="submit" ></input>
            <?php echo "<input type='hidden' name='pu_id' value= ".$_SESSION['userid'].">" ?>
            

        </form>

     
      </div>
      <div class="modal-footer">
        
      
        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
        <!-- <button type="button" class="btn btn-default">Save changes</button> -->
      </div>
    </div>
  </div>
</div>



</body>
</html>
