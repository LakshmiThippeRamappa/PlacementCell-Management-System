<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <title>Project Home</title>
        <link rel="stylesheet" href="company.css">
	<link rel="stylesheet" type="text/css" href="admin.css">
	<script defer src="admin.js"></script>
        
    </head>
    <body>
        <div id="sectionHome">
            <div class="intro"> 
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                      <a class="navbar-brand" >PlacementCell <span>Management</span> System</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="home.html">Home</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="about.html">AboutUs</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="company.html">All Company</a>
                          </li>
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="alljobs.html">All Jobs</a>
                          </li>
			 
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="admin.php">Admin Login</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="contact.php">ContactUs</a>
                          </li>
                          
                        </ul>
                        
                      </div>
                    </div>
                  </nav>
    
            </div>

<div class="login-form">
<h1>ADMIN LOGIN</h1>
<form name="myform" id="form" action="register2.php" onsubmit="return validateForm()" method="post">
<p>User Name</p>
<input type="text" name="username" id="username" placeholder="User Name">
<p>Password</p>
<input type="password" name="password" id="password" placeholder="Password">
<button type="Submit" class="btn btn-success">Submit</button>
</form>
</div>


</body>
</html>

