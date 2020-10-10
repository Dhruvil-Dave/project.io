<html>
<body >
<!-- FUNCTIONS FOR FIELD 2 3 4 5 -->

<?php

$symcounter=0;

function addsym(){
  global $symcounter;
  $symcounter=$symcounter+1;
}

if(isset($_POST['cb11']) && 
   $_POST['cb11'] == '1') 
   {addsym();
}

if(isset($_POST['cb12']) && 
   $_POST['cb12'] == '1') 
   {addsym(); 
}

if(isset($_POST['cb13']) && 
   $_POST['cb13'] == '1') 
   {addsym(); 
   addsym();
  addsym();
}

if(isset($_POST['cb14']) && 
   $_POST['cb14'] == '1') 
   {addsym(); 
   addsym();
  addsym();
}


// ____________________________________________________________

if(isset($_POST['cb21']) && 
   $_POST['cb21'] == '1') 
   {addsym(); 
}
if(isset($_POST['cb22']) && 
   $_POST['cb22'] == '1') 
   {addsym(); 
}

if(isset($_POST['cb23']) && 
   $_POST['cb23'] == '1') 
   {addsym(); 
   addsym();
  addsym();
  addsym();
}

if(isset($_POST['cb24']) && 
   $_POST['cb24'] == '1') 
   {addsym(); 
}

if(isset($_POST['cb25']) && 
   $_POST['cb25'] == '1') 
   {addsym(); 
}

//___________________________________________-

if(isset($_POST['cb31']) && 
   $_POST['cb31'] == '1') 
   {addsym();
}

//______________________________________________

if(isset($_POST['cb41']) && 
   $_POST['cb41'] == '1') 
   {addsym(); 
   addsym();
  addsym();
  addsym();
}

if(isset($_POST['cb42']) && 
   $_POST['cb42'] == '1') 
   {addsym(); 
   addsym(); 
  addsym();
  addsym();
  addsym();
  addsym();
}













$age=$_POST['age'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];

if($age>=30){
  addsym();
  
}


if($age>=30 and $age<55 and $symcounter>3){
  addsym();
  addsym();
  addsym();
  
}

if($age>=55 and $age<65 and $symcounter>1){
  addsym();
  addsym();
  addsym();
  addsym();
  addsym();
  
}

if($age>=65 and $symcounter>0){
  addsym();
  addsym();
  addsym();
  addsym();
  addsym();
  addsym();
  
}
?>
	
<style>
  .bg-image {
  /* The image used */
  background-image: url("https://img.freepik.com/free-photo/doctor-holding-stethoscope_23-2147822716.jpg?size=626&ext=jpg&ga=GA1.2.1952393724.1601287200");

 
/* Add the blur effect */
filter: blur(6px);
  -webkit-filter: blur(6px);

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: repeat;
  background-size: 100% 100%;
}

  .bg-text {
  /*background-color: rgb(0,0,0);  Fallback color 
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: solid black;

  /*font-weight: bolder;*/
  /*border: 8px solid #f1f1f1;*/
  position: absolute;
  top: 40%;
  left: 35%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 85%;
  padding: 20px;
  text-align: justify;
}







</style>

<div class="bg-image">

</div>

<div class="bg-text">

 <h1 align="center" > The following result may not be accurate, <br>clinical check-up is always better!</h1><hr>
<br><br><br>

<div class="res" ><br>
 <?php
 if($symcounter<8){
     echo "<h2 align='center'>No risk found!</h2>";
 }
 elseif($symcounter>7 and $symcounter<15){
     echo "<h2 align='center'>Low risk detected!<br> Your symptoms might not be due to corona virus</h2><br><br>";
     echo "<h3 align='center' style='color: #6b6b6a;'>Use mask and sanitizer to stay safe!</h3>";

 }
 elseif($symcounter>14 and $symcounter<25){
    echo "<h2 align='center'><span style='color: red;'>Risk detected!</span> Your symptoms <br>might be due to corona virus.</h2><br><br>";
    echo "<h3 align='center' style='color: #6b6b6a;'>Please stay home to stay safe!</h3>";
}
elseif($symcounter>24 and $symcounter<30){
    echo "<h2 align='center'><span style='color: red;'>Risk detected!</span> Your symptoms <br>might be due to corona virus.</h2><br><br>";
    echo "<h3 align='center' style='color: #6b6b6a;'>Please get yourself quarantined! <br>Dont let others near you to block the spread of corona virus.</h3>";
}
else{
    echo "<h2 align='center'><span style='color: red;'>High risk detected!</span> Your symptoms<br> matches with COVID-19 symptoms.</h2><br><br>";
    echo "<h3 align='center' style='color: #6b6b6a;'>Get yourself tested ASAP! Contact <a href='#'>1075</a><br> for immediate medical assistance.</h3>";
}
?>
<br>

</div>
	
</div>



</body></html>