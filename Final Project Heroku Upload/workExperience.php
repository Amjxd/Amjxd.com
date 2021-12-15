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
<link rel="stylesheet" href="workExperience.css">


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
    

  <!-- ####################### START WORK EXPERIENCE JUMBOTRON ########################## -->
    <div class="container">
      <div  class="jumbotron" border-color: #110022; >
        <u><h1 class = "Display-1">Work Experience</h1></u>
        <div id = "jumbotron3">
          <br>
        
          <div class="td">
            <div class="tdPicc">
              <img alt = "TD logo" id = "tdPic"style="float:right"; src="td.png" width = "110" height = "110">
            </div>
            
            <u><h3>Insider Risk Analyst - TD Canada Trust</h3></u>
            <p>(April 2021 - August 2021)</p>
            <h6>Work-Term Evaluation: Outstanding</h6>

              <blockquote class = "quote" cite="http://">
                <p>"Amjad exceeded all performance expectations in respect to output, quality standards, delivery of goals and assignments." - TD Manager</p>
                </blockquote>

  

            <hr>
          </div>
          
          <div class="government">
            <div class="govPicc">
              <img alt = "Gov. logo" id = "govPic" style="float:right" src="gov.png" width = "150" height = "40">
            </div>
            
            <u><h3>Business Analyst - Ontario Government</h3></u>
            <p>(January 2021 - April 2021)</p>
            <h6>Work-Term Evaluation: Excellent</h6>
            <blockquote class = "quote" cite="http://">
              <p>"Amjad was able to stay on task for multiple work streams and deliver on target dates." - Gov. Manager</p>
            </blockquote>
            <hr>
          </div>
        <div class="cgi">
          <div class="cgiPicc">
            <img alt = "CGI logo" id = "cgiPic"style="float:right"; src="GIB.png" width = "110" height = "110">
          </div>
          
          <u><h3>Project Control Officer (PCO) - CGI</h3></u>
          <p>(April 2019 – January 2020)</p>
          <h6>Work-Term Evaluation: Outstanding</h6>
          <blockquote id = "cgiQuote" cite="http://">
            <p>"Amjad demonstrated he can be relied on in any situation. He asks for more responsiblity and he delivers." - CGI Director</p>
          </blockquote>
        </div>
        <hr>
        </div>

        <!-- Downloads Resume -->
          <button id ="workExpButton" type="submit"onclick="window.open('Amjad_Alsabagh_Resume.docx')" class="btn bg-info btn-outline-dark btn-lg">Download CV!</button>
      </div>
    </div>
  <!-- ####################### END WORK EXPERIENCE JUMBOTRON ########################## -->
    <br><br><br><br>    

  
  
  <footer> <small>&copy;2021 Amjad Alsabagh</small> </footer> 
  <br>
  </body>
</html> 
