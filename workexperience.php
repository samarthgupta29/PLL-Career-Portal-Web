<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
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
  <a href="/petro/workexperience.php" class="w3-bar-item w3-button testbtn w3-padding-16" style="background-color: #005960;">Work Experience</a>
  <a href="/petro/education.php" class="w3-bar-item w3-button testbtn w3-padding-16">Education</a>

</div>

<div id="Tokyo" class="w3-container city w3-animate-opacity">
  <br>
      <h2>Current / Most Recent Work Experience</h2>
      <br>
      <div class="w3-row-padding">

    <div class="w3-twothird">
    <form class="w3-container w3-card-4" action="insert.php" method="post" id="myform">
      <br>
      <h2>Input Form</h2>
      <div class="w3-section">      
        <input class="w3-input" type="text" name="nameoforganization" id="nameoforganization" onkeyup='saveValue(this);'>
        <label>Name of Organization</label>
      </div>
      <div class="w3-section">      
        <input class="w3-input" type="text" name="address" id="address" onkeyup='saveValue(this);'>
        <label>Address</label>
      </div>
      <div class="w3-section">
      <div class="w3-third">
        <input class="w3-input" type="text" style="width: 200px;" name="city" id="city" onkeyup='saveValue(this);'>
        <label>City</label>
      </div>
      <div class="w3-third">
        <input class="w3-input" type="text" style="width: 200px;" name="state" id="state" onkeyup='saveValue(this);'>
        <label>State</label>
      </div>
      <div class="w3-third">
        <input class="w3-input" type="text" style="width: 200px;" name="zipcode" id="zipcode" onkeyup='saveValue(this);'>
        <label>ZIP Code</label>
      </div>
      <br><br><br>
      </div>
      <div class="w3-section">
        <input class="w3-input" type="text" style="width: 200px;" name="telephone" id="telephone" onkeyup='saveValue(this);'>
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
        <input class="w3-input" type="text" style="width: 300px;" name="designation" id="designation" onkeyup='saveValue(this);'>
        <label>Designation</label>
      </div>
      <div class="w3-half">     
        <input class="w3-input" type="text" style="width: 300px;" name="payrate" id="payrate" onkeyup='saveValue(this);'>
        <label>Pay Rate</label>
        <br><br><br>
        
      </div>
      <div class="w3-twothird">
        <button class="w3-button w3-block w3-black" name="submit" id="insert">Save</button>
          <br>
          <a href="/petro/education.php" class="w3-button w3-block w3-theme">Proceed</a>
          
        <p id='result'></p>
        
      </div>
   
     
      
      </div>
      </div>




    </form>
  


    </div>
      
    </div>



  <!-- Footer -->
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
<script src='insert1.js'></script>
<script type="text/javascript">
        document.getElementById("nameoforganization").value = getSavedValue("nameoforganization");    // set the value to this input
        document.getElementById("address").value = getSavedValue("address");   // set the value to this input
        document.getElementById("city").value = getSavedValue("city");
        document.getElementById("state").value = getSavedValue("state");
        document.getElementById("zipcode").value = getSavedValue("zipcode");
        document.getElementById("telephone").value = getSavedValue("telephone");
        document.getElementById("designation").value = getSavedValue("designation");
        document.getElementById("payrate").value = getSavedValue("payrate");

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


