<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<body>

<!-- Side Navigation 
<nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-center" style="display:none" id="mySidebar">
  <h1 class="w3-xxxlarge w3-text-theme">Side Navigation</h1>
  <button class="w3-bar-item w3-button" onclick="w3_close()">Close <i class="fa fa-remove"></i></button>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
  <a href="#" class="w3-bar-item w3-button">Link 4</a>
</nav>
-->
<!-- Header -->
<header class="w3-container w3-theme w3-padding" id="myHeader">
  <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme"></i> 
  <div class="w3-center">
  <h4>Careers</h4>
  <h1 class="w3-xxxlarge w3-animate-bottom">Petronet LNG</h1>
  <!---
    <div class="w3-padding-32">
      <button class="w3-btn w3-xlarge w3-theme-dark w3-hover-red" onclick="document.getElementById('id01').style.display='block'" style="font-weight:900;">LEARN W3.CSS</button>
    </div>
  -->
  </div>
</header>



<div class="w3-border">
<div class="w3-bar w3-theme">
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'London')">Personal Information</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'Paris')">Contact Details</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'Tokyo')">Work Experience</button>
  <button class="w3-bar-item w3-button testbtn w3-padding-16" onclick="openCity(event,'Education')">Education</button>
  
</div>

     
    <div id="London" class="w3-container city w3-animate-opacity">
      <h2>Personal Information</h2>
      <div class="w3-row-padding">

    <div class="w3-twothird">

    <form class="w3-container w3-card-4" action="insert.php" method="post" id="myform">
      <br>
      <h2>Input Form</h2>
      
      <div class="w3-section">
      <div class="w3-third">
        
        <input class="w3-input" type="text" name="firstname" style="width: 200px;" required>
        <label>First Name</label>
      
      </div>
      <div class="w3-third">
        <input class="w3-input" type="text" name="middlename" style="width: 200px;" required>
        <label>Middle Name</label>
      </div>
      <div class="w3-third">
        <input class="w3-input" type="text" name="lastname" style="width: 200px;" required>
        <label>Last Name</label>
      </div>


      </div>

      


      <div class="w3-section">      
        <input class="w3-input" type="text" name="email" >
        <label>Email</label>
      </div>
     
      <div class="w3-section">      
        <input class="w3-input" type="text" name="aadhar" >
        <label>Aadhar No.</label>
      </div>
      <div class="w3-section">      
        <input class="w3-input" type="text" name="pan" >
        <label>PAN No.</label>
      </div>
      

      <div class="w3-section">      
        <input class="w3-input" type="date" name="date" >
        <label>DOB</label>
      </div>

      <div class="w3-half">
        <input id="male" class="w3-radio" type="radio" name="gender" value="male" checked>
        <label>Male</label>
        <br>
        <input id="female" class="w3-radio" type="radio" name="gender" value="female">
        <label>Female</label>
        <br>
        <input id="unknown" class="w3-radio" type="radio" name="gender" value="" disabled>
        <label> Don't know (Disabled)</label>
        <input type="submit" name="submit" id="insert" />
        <p id='result'></p>
        <br><br>
        
      </div>
      </div>
      
    </form>


    </div>
    </div>
    


    
    <div id="Paris" class="w3-container city w3-animate-opacity">
      <h2>Contact Details</h2>
        <div class="w3-row-padding">

    <div class="w3-twothird">
    <form class="w3-container w3-card-4" action="insert.php" method="post" id="myform1" >
      <br>
      <h2>Input Form</h2>
      <div class="w3-section">      
        <input class="w3-input" type="text" name="addressline1">
        <label>Address Line 1</label>
      </div>
      <div class="w3-section">      
        <input class="w3-input" type="text" name="addressline2">
        <label>Address Line 2</label>
      </div>
      <div class="w3-section">
      <div class="w3-third">
        <input class="w3-input" type="text" name="city" style="width: 200px;" >
        <label>City</label>
      </div>
      <div class="w3-third">
        <input class="w3-input" type="text" name="state" style="width: 200px;" >
        <label>State</label>
      </div>
      <div class="w3-third">
        <input class="w3-input" type="text" name="zipcode" style="width: 200px;" >
        <label>ZIP Code</label>
      </div>
      </div>
      <div class="w3-section">
      <div class="w3-third">
        <input class="w3-input" type="text" name="telephone" style="width: 200px;" >
        <label>Telephone</label>
      </div>
      <div class="w3-third">
        <input class="w3-input" type="text" name="mobile" style="width: 200px;" >
        <label>Mobile</label>
        <br><br>
        <input type="submit" name="submit1" id="insert1" />
        <p id='result1'></p>
      </div>
      
      </div>
      
      </div>

    </form>





    </div>

      
    </div>
    

    <div id="Tokyo" class="w3-container city w3-animate-opacity">
      <h2>Current / Most Recent Work Experience</h2>
      <div class="w3-row-padding">

    <div class="w3-twothird">
    <form class="w3-container w3-card-4" action="insert.php" method="post" id="myform2">
      <br>
      <h2>Input Form</h2>
      <div class="w3-section">      
        <input class="w3-input" type="text" name="nameoforganization">
        <label>Name of Organization</label>
      </div>
      <div class="w3-section">      
        <input class="w3-input" type="text" name="address">
        <label>Address</label>
      </div>
      <div class="w3-section">
      <div class="w3-third">
        <input class="w3-input" type="text" style="width: 200px;" name="city">
        <label>City</label>
      </div>
      <div class="w3-third">
        <input class="w3-input" type="text" style="width: 200px;" name="state">
        <label>State</label>
      </div>
      <div class="w3-third">
        <input class="w3-input" type="text" style="width: 200px;" name="zipcode">
        <label>ZIP Code</label>
      </div>
      <br><br><br>
      </div>
      <div class="w3-section">
        <input class="w3-input" type="text" style="width: 200px;" name="telephone">
        <label>Telephone</label>
      </div>

      <div class="w3-section"> 
      <div class="w3-half">     
        <input class="w3-input" type="date" style="width: 200px;" >
        <label>Start Date</label>
      </div>
      <div class="w3-half">     
        <input class="w3-input" type="date" style="width: 200px;" >
        <label>End Date</label>
      </div>
       

      </div>
      <div class="w3-section"> 
      <div class="w3-half">     
        <input class="w3-input" type="text" style="width: 300px;" name="designation">
        <label>Designation</label>
      </div>
      <div class="w3-half">     
        <input class="w3-input" type="text" style="width: 300px;" name="payrate">
        <label>Pay Rate</label>
        <br><br><br>
        <input type="submit" name="submit" id="insert" />
        <p id='result'></p>
      </div>
     
      
      </div>
      </div>




    </form>
  


    </div>
      
    </div>


     
      <!---<div class="w3-third">     
        <input class="w3-input" type="month" style="width: 200px;" >
        <label>Year of Passing</label>-->
        



 <div id="Education" class="w3-container city w3-animate-opacity">
      <h2>Education</h2>
        

    <div class="w3-twothird">

  <form class="w3-container w3-card-4" method="post" action="insert.php" id="myform">
    <br>

      <h2>Secondary / 10th</h2>
      <div class="w3-section">      
        <input class="w3-input" type="text" name="ten_name" >
        <label>Name</label>
      </div>
      <div class="w3-section">      
        <input class="w3-input" type="text" name="ten_major" >
        <label>Major / Emphasis</label>
      </div>
      <div class="w3-section">
      <div class="w3-third">
        <input class="w3-input" type="text" name="ten_percentage" style="width: 200px;" >
        <label>CGPA / Percentage</label>
      </div> 
      <div class="w3-third">     
        <input class="w3-input" type="month" style="width: 200px;" >
        <label>Year of Passing</label>
        <br><br><br>
      </div>
      

    <div class="w3-row-padding">


    <div class="w3-twothird">
    
      <h2>Senior Secondary / 12th</h2>
      <div class="w3-section">      
        <input class="w3-input" type="text" name="twelve_name" >
        <label>Name</label>
      </div>
      <div class="w3-section">      
        <input class="w3-input" type="text" name="twelve_major">
        <label>Major / Emphasis</label>
      </div>
      <div class="w3-section">
      <div class="w3-third">
        <input class="w3-input" type="text" name="twelve_percentage" style="width: 200px;" >
        <label>CGPA / Percentage</label>
      </div> 
      <div class="w3-third">     
        <input class="w3-input" type="month" style="width: 200px;" >
        <label>Year of Passing</label>
        <br><br><br>
      </div>
      
       

      </div>
      
     
      
      </div>
      </div>

  

    

    <div class="w3-twothird">
    
      <h2>College / University (Graduation)</h2>
      <div class="w3-section">      
        <input class="w3-input" type="text" name="gradname" >
        <label>Name</label>
      </div>
      <div class="w3-section">      
        <input class="w3-input" type="text" name="gradmajor" >
        <label>Major / Emphasis</label>
      </div>
      <div class="w3-section">
      <div class="w3-third">
        <input class="w3-input" type="text" name="gradpercentage" style="width: 200px;" >
        <label>CGPA / Percentage</label>
      </div> 
      <div class="w3-third">     
        <input class="w3-input" type="month" style="width: 200px;" >
        <label>Year of Passing</label>
        <br><br><br>
      </div>
      
  

      </div>
  
     
      
      </div>
      </div>

    

    

    <div class="w3-twothird">
    
      <h2>College / University (Post Graduation)</h2>
      <div class="w3-section">      
        <input class="w3-input" type="text" name="postgradname">
        <label>Name</label>
      </div>
      <div class="w3-section">      
        <input class="w3-input" type="text" name="postgradmajor" >
        <label>Major / Emphasis</label>
      </div>
      <div class="w3-section">
      <div class="w3-third">
        <input class="w3-input" type="text" name="postgradpercentage" style="width: 200px;" >
        <label>CGPA / Percentage</label>
      </div> 
      <div class="w3-third">     
        <input class="w3-input" type="month" style="width: 200px;" >
        <label>Year of Passing</label>
        <br><br><br>
        <input type="submit" name="submit" id="insert" />
        <p id='result'></p>
        
      </div>
      
       

      </div>

      
     
      
      </div>
</form>
  
      </div>
      

      
       

      </div>
      <div class="w3-container">
<p><button class="w3-button w3-block w3-teal">Submit</button></p>
</div>
      
     
      
      </div>
      </div>

      
<script>
  function openCity(evt, cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  var activebtn = document.getElementsByClassName("testbtn");
  for (i = 0; i < x.length; i++) {
      activebtn[i].className = activebtn[i].className.replace(" w3-theme-dark", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-theme-dark";
}


</script>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<script src='insert.js'></script>
<script src='insert2.js'></script>




