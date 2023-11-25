<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	
<body>
	<?php include("BootCss.php"); ?>
	<div class="container-fluid" style="background-color:black" align="center">
	    <div class="row">
			<div class="col-md-5">
                     <nav class="navbar navbar-expand-sm navbar-dark">
          <!-- Brand -->
                      <a  class="navbar-brand" href="CanadaHome.php"><img src="picture/logo/logo.jfif" width=90; height=70></a>

                    <!-- Links -->
                     <ul class="navbar-nav">
                        <!-- Dropdown -->
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                          Products
                        </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Games</a>
                          <a class="dropdown-item" href="#">Website</a>
                          <a class="dropdown-item" href="#">Application</a> 
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" href="#">Courses</a>
                      </li>


                      <li class="nav-item">
                        <a class="nav-link" href="#">News</a>
                      </li>

                        <li class="nav-item">
                        <a class="nav-link" href="#">Contact US</a>
                       </li>
                      </ul>
                      </nav>
				    </div>
			      <div class="col-md-4 mt-3">
                      <nav class="navbar navbar-expand-sm navbar-dark">
                     <form class="form-inline" action="/action_page.php">
                       <input class="form-control mr-sm-2"  type="text" placeholder="Search" style="width:305px">
                         <button class="btn btn-success" type="submit">Search</button>
                      </form>
                  </div>
					  <div class="col-md-3 mt-4">
                      <button type="button" class="btn btn-warning" style="width:125px">Login</button>
                      <button type="button" class="btn btn-warning"style="width:125px">Register</button>
                   </div>
          <br>
	   </div>
      </div>
</body>
	
</html>