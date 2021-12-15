<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Me</title>
    
    
    <!-- Bootstrap References-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


    <!-- Linking Custom CSS File -->
    <link rel="stylesheet" href="contact.css">
    
    
    <!-- Linking Custom JS File -->
    <script src = "contact.js" type="text/javascript"></script>


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    
  </head>
  <body>
    
    
    <!-- ####################### START HEADER AREA ########################## -->
    <div class="header_area">
      <nav id 'nav' class="navbar navbar-expand-lg navbar-light ">
        <div id="my_pic2">
          <a  class="navbar-brand"  href="index.php"><img alt = "My Logo" src = "logo.png" width = 150 height = 50></a>
        </div>
        
        <button id = 'toggler'class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="mr-auto"></div>
            <div class="navbar-nav">
              <a class="nav-item nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="education.php">Education</a>
              <a class="nav-item nav-link" href="workExperience.php">Work Experience</a>
              <a class="nav-item nav-link" href="contact.php">Contact</a>
          </div>
        </div>
      </nav>
    </div>
    <!-- ####################### END HEADER AREA ########################## -->
    
    
    <!-- ####################### START FORMS JUMBOTRON ########################## -->
    <section>
    <div class="container">
      <div  class="jumbotron" border-color: #110022; >

      <u><h1>Contact Me</h1></u>
      
      <form action="https://formspree.io/f/mbjwjaoj" method="POST" id="my-form">

        <div class="form-group">
          <label for="firstName"> First Name</label>
          <input type="text" id="firstName" name="firstName">
        </div>

        <div class="form-group">
          <label for="latsName">Last Name</label>
          <input type="text" id="lastName" name="lastName">
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email">
        </div>

        <div class="form-group">
          <label for="massage">Message</label>
          <textarea name="massage" id="massage" cols="30" rows="10"></textarea>
        </div>
        <div id="status"></div>
        
        <button class="btn bg-info btn-outline-dark btn-lg" type="submit">Submit</button>
      </form>
        <br>
    </div>
  </div>
  </section>
    <!-- ####################### END FORMS JUMBOTRON ########################## -->

    
    <footer> <small>&copy;2021 Amjad Alsabagh</small> </footer> 
  </body>
</html>
