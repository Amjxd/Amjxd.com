<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Amjad Alsabagh</title>




<!-- Bootstrap References-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


<!-- Linking Custom CSS File -->
<link rel="stylesheet" href="style.css">


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
    
    
    <!-- ####################### START INTRO JUMBOTRON ########################## -->
    <br>
    <div class="container">
      <div class="jumbotron4" border-color: #110022; >
        <div class="intro">
          <h3>Hi, My Name is...</h3>
          <h2 class="display-4">AMJAD ALSABAGH</h2>
          <h6 class="lead">Ryerson New-Grad</h6>
        </div>
        <img alt = "A professional picture of me" id = 'my_pic' src="old 2.jpg" class="rounded mx-auto d-block" height="300" width = "300">
        <br>

        
        <!-- Takes to Contact.html -->
        
        <a href="contact.html"><button  type="button" class="btn bg-transparent btn-outline-dark" >Contact Me</button></a> 
        
        &nbsp;&nbsp;&nbsp;

        
      <!-- Downloads Resume -->
        <button  type="submit"onclick="window.open('Amjad_Alsabagh_Resume.docx')" class="btn bg-transparent btn-outline-dark">Download CV</button>
        <br><br>
        
        <!-- LINKS -->

      
        <div class= "row">
          <div class="column">
            <div class="socials">
              <a  href="https://www.linkedin.com/in/amjad-alsabagh/"><img alt = "Click here for my LinkedIn" src="linkedin-brands.svg" width = "80" height = "80" ></a>
              <p>LinkedIN</p>
            </div>
          
          </div>

          <div  class="column">
            <div class = 'socials'>
              <a  href="https://github.com/Amjxd"><img alt = "Click here for my GitHub" src="github-brands.svg" width = "80" height = "80"></a>
              <p>GitHub</p>
            </div>
            
          </div>
          
          <div class="column">
            <div class="socials">
              <a  href="https://stackoverflow.com/users/17383234/amjxd"><img alt = "Click here for my StackOverflow" src="stack-overflow-brands.svg" width = "80" height = "80"></a>
              <p>Stack Overflow</p>
            </div>
          
          </div>

          <div class="column">
            <div class="socials">
              <a  href="https://www.hackerrank.com/amjad_alsabagh3"><img alt = "Click here for my HackerRank" src="hackerrank-brands.svg" width = "80" height = "80"></a>
              <p>HackerRank</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ####################### END INTRO JUMBOTRON ########################## -->
    
    <br><br><br>
  <footer> <small>&copy;2021 Amjad Alsabagh</small> </footer> 
  <br>
  

    


    
  </body>
</html> 
