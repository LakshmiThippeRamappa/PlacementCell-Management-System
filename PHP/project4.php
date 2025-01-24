<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <title>Project Home</title>
        <link rel="stylesheet" href="project4.css">
	<script defer src="project4.js"></script>
    </head>
    <body>
          <div class="sectionLogin">
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
                                    <a class="nav-link active" aria-current="page" href="project.html">Back</a>
                                  </li>
                            
                                  
                                
                                </ul>
                                
                              </div>
                            </div>
                        </nav>

                    </div>

                    <div class="body-container bg-light bg-opacity-25 lo">
                        <div class="row">
                            <div class="login border border-dark">
                                        
                                <form id = "form" name="myform" class="ps-5" action="register.php" onsubmit="return validateForm()" method="POST">
                                    <h3 class="mb-4"><b><u>Login Here</u> </b></h3>
                                    <input type="text" name="username" id = "username"placeholder="Username" class="form-control rounded-pill" width="50px"><br>
                                    <input type="password" name="password" id = "password"placeholder="Password" class="form-control rounded-pill"><br>
                                    <button name="btn" type="submit"  href="home.html" class="btn btn-secondary  rounded-pill w-100 ">SUBMIT</button>
                                    <span id="error" style="color:red;"></span><br><br>
                                    <div class="mt-3 ps-2" id="sub" class="text-danger" id="sub"><a href="signup.html">Do not have account ?</a></div>
                                    

                                </form>
                            </div>
                        </div>
                    </div>
          </div>
          <script type="text/javascript" src="https://d1tgh8fmlzexmh.cloudfront.net/ccbp-static-website/js/ccbp-ui-kit.js"></script>
    </body>
</html>
