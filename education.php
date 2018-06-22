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

<header class="w3-container w3-theme w3-padding" id="myHeader">
<br><br>  <div class="w3-center">
  <h4>Careers</h4>
  <h1 class="w3-xxxlarge ">Petronet LNG</h1>
  <!---
    <div class="w3-padding-32">
      <button class="w3-btn w3-xlarge w3-theme-dark w3-hover-red" onclick="document.getElementById('id01').style.display='block'" style="font-weight:900;">LEARN W3.CSS</button>
    </div>
  -->
  </div>
  <style type="text/css">

a:hover
{
  text-decoration: none;
}
a { color: white; }
a:hover
{
  color: white;
}

  
</style>
</header>
<div class="w3-bar w3-theme">
  <a href="/petro/personalinformation.php" class="w3-bar-item w3-button testbtn w3-padding-16">Personal Information</a>
  <a href="/petro/contactdetails.php" class="w3-bar-item w3-button testbtn w3-padding-16">Contact Details</a>
  <a href="/petro/workexperience.php" class="w3-bar-item w3-button testbtn w3-padding-16">Work Experience</a>
  <a href="/petro/education.php" class="w3-bar-item w3-button testbtn w3-padding-16" style="background-color: #005960;">Education</a>

</div>

<div id="Education" class="w3-container city w3-animate-opacity">
  <br>
      <h2>Education</h2>
      <br>
        
    <div class="w3-twothird">

  <form class="w3-container w3-card-4" method="post" action="insert.php" id="myform">
    <br>

      <h2>Secondary / 10th</h2>
      <div class="w3-section">      
        <input class="w3-input" type="text" name="ten_name" id="ten_name" onkeyup='saveValue(this);' >
        <label>Name</label>
      </div>
      <div class="w3-section">      
        <input class="w3-input" type="text" name="ten_major" id="ten_major" onkeyup='saveValue(this);' >
        <label>Major / Emphasis</label>
      </div>
      <div class="w3-section">
      <div class="w3-third">
        <input class="w3-input" type="text" name="ten_percentage" style="width: 200px;" id="ten_percentage" onkeyup='saveValue(this);' >
        <label>CGPA / Percentage</label>
      </div> 
      <div class="w3-third">     
        <input class="w3-input" type="month" style="width: 200px;" id="month" onkeyup='saveValue(this);' >
        <label>Year of Passing</label>
        <br><br><br>
      </div>
    </div>
  <div class="w3-row-padding">
  </div>
   <h2>Senior Secondary / 12th</h2>
      <div class="w3-section">      
        <input class="w3-input" type="text" name="twelve_name" id="twelve_name" onkeyup='saveValue(this);' >
        <label>Name</label>
      </div>
      <div class="w3-section">      
        <input class="w3-input" type="text" name="twelve_major" id="twelve_major" onkeyup='saveValue(this);' >
        <label>Major / Emphasis</label>
      </div>
      <div class="w3-section">
      <div class="w3-third">
        <input class="w3-input" type="text" name="twelve_percentage" id="twelve_percentage" onkeyup='saveValue(this);' style="width: 200px;" >
        <label>CGPA / Percentage</label>
      </div> 
      <div class="w3-third">     
        <input class="w3-input" type="month" style="width: 200px;" id="month" onkeyup='saveValue(this);' >
        <label>Year of Passing</label>
        <br><br><br>
      </div>
    </div>
    <div class="w3-row-padding">
  </div>
   <h2>Graduation</h2>
      <div class="w3-section">      
        <input class="w3-input" type="text" name="gradname" id="gradname" onkeyup='saveValue(this);' >
        <label>Name</label>
      </div>
      <div class="w3-section">      
        <input class="w3-input" type="text" name="gradmajor" id="gradmajor" onkeyup='saveValue(this);' >
        <label>Major / Emphasis</label>
      </div>
      <div class="w3-section">
      <div class="w3-third">
        <input class="w3-input" type="text" name="gradpercentage" id="gradpercentage" onkeyup='saveValue(this);' style="width: 200px;" >
        <label>CGPA / Percentage</label>
      </div> 
      <div class="w3-third">     
        <input class="w3-input" type="month" style="width: 200px;" id="month" onkeyup='saveValue(this);' >
        <label>Year of Passing</label>
        <br><br><br>
      </div>
    </div>
    <div class="w3-row-padding">
  </div>
   <h2>Post Graduation</h2>
      <div class="w3-section">      
        <input class="w3-input" type="text" name="postgradname" id="postgradname" onkeyup='saveValue(this);' >
        <label>Name</label>
      </div>
      <div class="w3-section">      
        <input class="w3-input" type="text" name="postgradmajor" id="postgradmajor" onkeyup='saveValue(this);' >
        <label>Major / Emphasis</label>
      </div>
      <div class="w3-section">
      <div class="w3-third">
        <input class="w3-input" type="text" name="postgradpercentage" style="width: 200px;" id="postgradpercentage" onkeyup='saveValue(this);' >
        <label>CGPA / Percentage</label>
      </div> 
      <div class="w3-third">     
        <input class="w3-input" type="month" style="width: 200px;" id="month" onkeyup='saveValue(this);' >
        <label>Year of Passing</label>
        <br><br><br>
      </div>
      <div class="w3-twothird">
        <button class="w3-button w3-block w3-teal" name="submit" id="insert">Save</button>
          <br>

          <!---<a href="/petro/education.php" class="w3-button w3-block w3-theme">Proceed</a>-->
          
        <p id='result'></p>
        
      </div>
      
    </div>
</form>
</div>
</div>

<footer class="w3-container w3-theme-dark">
  
  <!---<p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>-->
  <br>
  
  <center>
  
  <h7> ©Petronet LNG Limited</h7><p><a href="https://www.petronetlng.com/index.php">Home</a> | <a href="https://www.petronetlng.com/contactus.php">Contact Us</a> | <a href="https://www.petronetlng.com/legal-disclaimer.php">Disclaimer</a> | <a href="https://www.petronetlng.com/QuickLinks.php">Quick Links</a> | Mail Servers: <a href="https://smtpdelhi.petronetlng.com/" target="_blank">Primary</a> / <a href="https://smtpdahej.petronetlng.com/" target="_blank" >Secondary</a>
  </center></p>
  
  <div style="position:relative;bottom:55px;" class="w3-tooltip w3-right">
    <span class="w3-text w3-theme w3-padding">Go To Top</span>    
    <a class="w3-text-white" href="#myHeader"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
  <!---<p>Remember to check out our  <a href="w3css_references.asp" class="w3-btn w3-theme" target="_blank">W3.CSS Reference</a></p>-->
</footer>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="insert3.js"></script>
<script type="text/javascript">
        document.getElementById("ten_name").value = getSavedValue("ten_name");    // set the value to this input
        document.getElementById("ten_major").value = getSavedValue("ten_major");   // set the value to this input
        document.getElementById("ten_percentage").value = getSavedValue("ten_percentage");
        document.getElementById("twelve_name").value = getSavedValue("twelve_name");
        document.getElementById("twelve_major").value = getSavedValue("twelve_major");
        document.getElementById("twelve_percentage").value = getSavedValue("twelve_percentage");
        document.getElementById("gradname").value = getSavedValue("gradname");
        document.getElementById("gradmajor").value = getSavedValue("gradmajor");
        document.getElementById("gradpercentage").value = getSavedValue("gradpercentage");    // set the value to this input
        document.getElementById("postgradname").value = getSavedValue("postgradname");   // set the value to this input
        document.getElementById("postgradmajor").value = getSavedValue("postgradmajor");
        document.getElementById("postgradpercentage").value = getSavedValue("postgradpercentage");
        document.getElementById("month").value = getSavedValue("month");
        document.getElementById("month").value = getSavedValue("month");
        document.getElementById("month").value = getSavedValue("month");
        document.getElementById("month").value = getSavedValue("month");
        


        /* Here you can add more inputs to set value. if it's saved */

        //Save the value function - save it to localStorage as (ID, VALUE)
        function saveValue(e){
            var id = e.id;  // get the sender's id to save it . 
            var val = e.value; // get the value. 
            sessionStorage.setItem(id, val);// Every time user writing something, the localStorage's value will override . 


        }

        //get the saved value function - return the value of "v" from localStorage. 
        function getSavedValue  (v){
            if (sessionStorage.getItem(v) === null) {
                return "";// You can change this to your defualt value. 
            }
            return sessionStorage.getItem(v);
        }
</script>

</body>
</html>







