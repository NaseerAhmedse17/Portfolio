<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>Education</title>
</head>
<body>
<center>  
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="index.html">About Me</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="certification.php">Course Work</a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand" href="education.php">Education<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="experience.php">Experience</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="projects.php">IT Projects</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="resume.php">Resume</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</center>

<div class="mainbox" style="clear: both;">
<img class="myimage" src="picsets.png" alt="Invalid Image">
</div><br><br>
<div class="badges" style="clear: both; float: left;">
<P class="professional">Professional<br>Achievement</P> 
<ul class="nav flex-column">
  <li class="nav-item">
   <a href="index.html"> <button type="button" class="btn btn-primary">About Me <span class="badge badge-light">2</span>
</button></a> 
  </li>
  <br>
  <a style="color: white; text-decoration: none;" href="experience.php">
  <li class="nav-item">
    <button type="button" class="btn btn-primary">
  Work Experience <span class="badge badge-light">2</span>
</button> 
  </li></a>
  <br>
  <a style="color: white; text-decoration: none;" href="education.php">
  <li class="nav-item">
 <button type="button" class="btn btn-primary">Education <span       class="badge badge-light">3</span>
</button> 
  </li></a>
  <br>
  <a style="color: white; text-decoration: none;" href="certification.php">
  <li class="nav-item">
  <button type="button" class="btn btn-primary">Certification <span class="badge badge-light">10+</span>
</button> 
  </li></a>
  <br>
  <a style="color: white; text-decoration: none;" href="ec.php">
  <li class="nav-item">
  <button type="button" class="btn btn-primary">Extra Ciriculum<span class="badge badge-light">&nbsp;3+</span>
</button> 
  </li></a>
  <br>
  <a style="color: white; text-decoration: none;" href="aoi.php">
  <li class="nav-item">
  <button type="button" class="btn btn-primary">Area Of Interest<span class="badge badge-light"></span>
</button> 
  </li></a>
</ul>
</div>
<br>
<div class="line">
</div>  
<div style="float: left; margin-left: 120px;">
<h1 class="display-1">Education</h1> 
<p class="lead">
  <blockquote style="color: rgb(178,54,74);" cite="https://www.goodreads.com/quotes/tag/certification">
    “The main purpose of education isn't just to receive a certification that leads to a career,<br> but to become a well-rounded person in so many aspects of life.”<br>
    <h6>by:Edmond Mbiaka</h6>
    </blockquote>.
</p>
<H5 style="color:rgb(178,54,74);"><center>Education Table</center></H5>
<?php

$server="localhost";
$user ="root";
$pass ="";
$db   ="portfoliodata";
$con  =new mysqli($server,$user,$pass,$db);

echo "<table class=\"table\">";
echo " <thead class=\"thead-dark\">";
echo "   <tr> ";
echo "     <th scope=\"col\">School/college/university</th>";
echo "    <th scope=\"col\">Degree Name</th>";
echo "     <th scope=\"col\">Board</th>";
echo "     <th scope=\"col\">Passing Year</th>"; 
echo "   </tr>";
echo " </thead>";
$counter=1;
if($con->connect_error){
  echo " ". $con->connect_error;
}
else{
   $query="select * from education";
   $result=$con->query($query);
   if($result->num_rows>0){
    while($row=$result->fetch_object()){
    
echo " <tbody>"; 

echo "  <tr> 

     <td>".$row->institution."</td>
      <td>".$row->degreename."</td>
      <td>".$row->Board."</td>
   <td>".$row->pyear."</td>
    </tr>"; 
echo "  </tbody>";
}
  }
}
echo "</table>";

mysqli_close($con);
?>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>