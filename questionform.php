<html>
  <head>
    <title>Checkup form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="svformstyle.css">
   
  </head>
  <body>
  

<form action="outputdesign.php" method="POST">

   <div class="heading">   
    <h1><u>CheckUp Form</u> </h1>
  </div>
    <div class="input">
      <div class="name"><input type="text" placeholder="First name" name="fname" required pattern ="^([a-zA-Z]+)$"/>
    </div>
    <div class="name"><input type="text" placeholder="Last name" name="lname" />
    </div>
    <div class="age">
      <input type="number" name="age" placeholder="Your Age" />
    </div>
    <hr>
  </div>
  <div class="questionone">
    <h4>Are You Experiencing any of the following symptoms ?</h4>
    <div class="buttons">
    <label id="Fever" class="btn btn-outline-danger" onClick="this.style.background='pink';" role="button">Fever <input type="checkbox" name="cb11" value="1"></label>
    <label id="Cough" class="btn btn-outline-danger" onClick="this.style.background='pink';" role="button">Cough <input type="checkbox" name="cb12" value="1"></label>
    <label id="Difficulty in breathing" onClick="this.style.background='pink';" class="btn btn-outline-danger" role="button">Difficulty in breathing <input type="checkbox" name="cb13" value="1"></label>
    <label class="btn btn-outline-danger" onClick="this.style.background='pink';" id="Loss of senses of smell and taste" role="button">Loss of senses of smell and taste <input type="checkbox" name="cb14" value="1"></label>
    <label class="btn btn-outline-success" onClick="this.style.background='#90ee90';" id="None" role="button" value="None">None <input type="checkbox"  name="cb15" value="0"></label>
  </div>
  </div>
  <div class="questiontwo">
    <h4>Have you ever had any of the following ?</h4>
    <div class="buttons">
    <label class="btn btn-outline-danger" onClick="this.style.background='pink';" role="button">Diabetes <input type="checkbox" name="cb21" value="1"></label>
    <label class="btn btn-outline-danger" onClick="this.style.background='pink';" role="button">Hypertension <input type="checkbox" name="cb22" value="1"></label>
    <label class="btn btn-outline-danger" onClick="this.style.background='pink';" role="button">Lung Disease <input type="checkbox" name="cb23" value="1"></label>
    <label class="btn btn-outline-danger" onClick="this.style.background='pink';" role="button">Heart Disease <input type="checkbox" name="cb24" value="1"></label>
    <label class="btn btn-outline-danger" onClick="this.style.background='pink';" role="button">Kidney Disorder <input type="checkbox" name="cb25" value="1"></label>
    <label class="btn btn-outline-success" onClick="this.style.background='#90ee90';"  role="button">None <input type="checkbox" name="cb26" value="0"></label>
  </div>
  </div>
  <div class="questionthree">
    <h4>Have you travelled anywhere internationally in the last 28-45 days ?</h4>
    <div class="buttons">
      <label class="btn btn-outline-danger" onClick="this.style.background='pink';" role="button" >Yes <input type="checkbox" name="cb31" value="1"></label>
      <label" class="btn btn-outline-success" onClick="this.style.background='#90ee90';" role="button" >No <input type="checkbox" name="cb32" value="0"></label>
    </div>
  </div>
  <div class="questionfour">
    <h4>Which of the following applies to you ?</h4>
    <div class="buttons">
      <label class="btn btn-outline-danger" onClick="this.style.background='pink';" role="button" >I recently interacted or lived with someone who has tested positive for COVID-19 <input type="checkbox" name="cb41" value="1"></label>
      <label class="btn btn-outline-danger" onClick="this.style.background='pink';" role="button" >I am a healthcare worker and I examined a COVID-19 confirmed case without protective gear <input type="checkbox" name="cb42" value="1"></label>
      <label class="btn btn-outline-success" onClick="this.style.background='#90ee90';"  role="button" >Not Applicable  <input type="checkbox" name="cb43" value="0"></label>
                  
    </div>
  </div>
  <div class="questionfive">
    <input type="reset"  class="btn btn-info">
    <input type="submit" class="btn btn-success" value="Submit">
  </div>
</form>

  </body>
</html>