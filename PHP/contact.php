<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script><script  src="contact.js"></script>

        <title>Project Home</title>
        <link rel="stylesheet" href="company.css">
         <link rel="stylesheet" href="contact.css">
		
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
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
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
                            <a class="nav-link active" aria-current="page" href="contact.html">ContactUs</a>
                          </li>
                          
                        </ul>
                        
                      </div>
                    </div>
                  </nav>
    
            </div>

<!-- partial:index.partial.html -->
<section id="contact">
  
  <h1 class="section-header">Contact Us</h1>
  
  <div class="contact-wrapper">
  
  <!-- Left contact page --> 
    
    <form id="contact-form" name="myform" action="register3.php" onsubmit="return validateForm()"  class="form-horizontal" role="form">
       
      <div class="form-group">
        <div class="col-sm-12">
          <input type="text" class="form-control"  id="name" placeholder="NAME" name="name" value="" required>
        </div>
      </div>


 <div class="form-group">
        <div class="col-sm-12">
          <input type="text" class="form-control" id="company" placeholder="COMPANY" name="company" value="" required>
        </div>
      </div>

 <div class="form-group">
        <div class="col-sm-12">
          <input type="text" class="form-control" id="phone" placeholder="PHONE" name="phone" value="" required>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-12">
          <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" required>
        </div>
      </div>

      <textarea class="form-control" rows="10" id="message" placeholder="MESSAGE" name="message" required></textarea>
      
      <button class="btn btn-info send-button" id="submit" type="submit" value="SEND">
        <div class="alt-send-button">
          <span class="send-text">SEND</span>
        </div>
      
      </button>

 <button class="btn btn-info send-button" id="reset" type="reset" value="RESET">
        <div class="alt-send-button">
          <span class="send-text">RESET</span>
        </div>
      
      </button>
      
    </form>
    
  <!-- Left contact page --> 
    
      <div class="direct-contact-container">

        <ul class="contact-list">
          <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">Rgukt Rk Valley</span></i></li>
          
          <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="tel:1-212-555-5555" title="Give me a call">08588-283603</a></span></i></li>
          
          <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:#" title="Send me an email">director@rguktrkv.ac.in</a></span></i></li>
          
        </ul>

        <hr>
        <ul class="social-media-list">
          <li><a href="#" target="_blank" class="contact-icon">
            <i class="fa fa-github" aria-hidden="true"></i></a>
          </li>
          
          <li><a href="#" target="_blank" class="contact-icon">
            <i class="fa fa-twitter" aria-hidden="true"></i></a>
          </li>
          <li><a href="#" target="_blank" class="contact-icon">
            <i class="fa fa-instagram" aria-hidden="true"></i></a>
          </li>       
        </ul>
        <hr>

  </div>
  
</section>
<!-- partial -->
 

</body>
</html>
