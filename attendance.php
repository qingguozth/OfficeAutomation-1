<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
   <style>
td{
	border:solid thin #000;
}
table{
	border-collapse:collapse;
}
</style>
</head>
<body>
<?php



echo"<div id='wrapper'>
        <nav class='navbar navbar-default navbar-cls-top' role='navigation' style='margin-bottom: 0'>
            <img src='img/logo.png' alt='logo'>
  <div style='color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;'>
    <div align='justify'><a href='login.html' class='btn btn-danger square-btn-adjust'>Logout</a>    </div>
  </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class='navbar-default navbar-side' role='navigation'>
            <div class='sidebar-collapse'>
                <ul class='nav' id='main-menu'>
				<li class='text-center'>
                    <img src='admin.png' class='user-image img-responsive'/>
					</li>
				
					
                    <li>
                        <a class='active-menu'  href='Admin1.php'><i class='fa fa-dashboard fa-3x'></i> Users</a>
                    </li>
                    
		<li>
                        <a  href='attendance.php'><i class='fa fa-square-o fa-3x'></i>Attendance</a>
                    </li>

                      <li>
                        <a  href='project.php'><i class='fa fa-table fa-3x'></i>Projects</a>
                    </li>
			
                      
<li>
                        <a  href='sal.php'><i class='fa fa-square-o fa-3x'></i>Assign Salary</a>
                    </li>
			
                     
                   <li>
                    
                        <a  href='salary.php'><i class='fa fa-square-o fa-3x'></i>Update Salary</a>
                    </li>
<li>
                        <a  href='department1.php'><i class='fa fa-table fa-3x'></i>Department</a>
                    </li>
 <li>
                        <a  href='feedback.php'><i class='fa fa-square-o fa-3x'></i>Feedback</a>
                    </li>
	
<li>
                        <a  href='co.php'><i class='fa fa-square-o fa-3x'></i>Contact</a>
                    </li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id='page-wrapper'>
            <div id='page-inner'>
                <div class='row'>
                    <div class='col-md-12'>
                     <h2>Admin Dashboard</h2>   
                        <h5>Welcome Admin , Glad to see you back. </h5>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class='row'></div>
                 <!-- /. ROW  -->
                <div class='row'></div>
                 <!-- /. ROW  -->
                <div class='row'></div>
                 <!-- /. ROW  -->
                <div class='row'>
                  <div class='col-md-9 col-sm-12 col-xs-12'>
               
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                           Employees</div>
                        <div class='panel-body'>
                            <div class='table-responsive'>";

 $dbs = mysqli_connect("localhost", "root", "", "company") or die("Unable to Connect");   
$result = mysqli_query($dbs,"Select * from attendance");
								echo "<table>";
								echo "<tr>";
									echo "<td>"."Employee_Id"."</td>";
echo "<td>"."First_Name"."</td>";

echo "<td>"."Present"."</td>";
echo "<td>"."Absent"."</td>";
echo "<td>"."Type_of_Leave"."</td>";
echo "<td>"."Leave_Left"."</td>";
									echo "</tr>";
								while($row =mysqli_fetch_array($result))
								{
									
                                    echo "<td>"."$row[Employee_id]"."</td>";
echo "<td>"."$row[First_name]"."</td>";

echo "<td>"."$row[Present]"."</td>";
echo "<td>"."$row[Absent]"."</td>";
echo "<td>"."$row[Type_of_Leave]"."</td>";
echo "<td>"."$row[Leaves_Left]"."</td>";
                                    echo "</tr>";
								}
								echo "</table>";

echo"<a href='attend.php'><input type='Submit' value='Update'></a>";						


                            echo"</div>
                        </div>
                    </div>
                  
                    </div>

                  <div class='col-md-9 col-sm-12 col-xs-12'>
                    
                  <p>&nbsp;</p>
                </div>
                 <!-- /. ROW  -->
                <div class='row'></div>     
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src='assets/js/jquery-1.10.2.js'></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src='assets/js/bootstrap.min.js'></script>
    <!-- METISMENU SCRIPTS -->
    <script src='assets/js/jquery.metisMenu.js'></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src='assets/js/morris/raphael-2.1.0.min.js'></script>
    <script src='assets/js/morris/morris.js'></script>
      <!-- CUSTOM SCRIPTS -->
    <script src='assets/js/custom.js'></script>";
    ?>
   
</body>
</html>
