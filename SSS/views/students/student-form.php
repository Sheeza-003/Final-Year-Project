<?php session_start(); ?>
<!doctype html>
<html lang="en-US">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <title>Application Form</title>
  
  <link rel="stylesheet" type="text/css" media="all" href="../../css/form-styles.css">

  


</head>

<body>
  <div id="w">

    <!-- <h1>Scolarship Application Form</h2> -->

    <hr><br><div class="ref">Application Form</div><br> <hr><br>
    
    <form id="signup" name="signup" method="post" action="../../students/student_form.php">


      
      <div class="row">
        <label for="Username">First Name</label>
        <input type="text" name="fname" id="username" tabindex="1" autocomplete="off" class="formtext">
      </div>

      <div class="row">
        <label for="Username">Last Name</label>
        <input type="text" name="lname" id="username" tabindex="1" autocomplete="off" class="formtext">
      </div>
      
 <div class="row">
        <label for="email">E-mail Address</label>
        <input type="email" name="email" id="email" tabindex="2" autocomplete="off" class="formtext">
      </div>

       <div class="row">
        <label for="Username">Age</label>
        <input type="text" name="age" id="username" tabindex="1" autocomplete="off" class="formtext">
      </div>
      

<div class="row">
        <label for="city"> Select your city </label>
        <select name="loc" id="dropdown" tabindex="5" class="formtext">
          <option value="Islamabad"> Islamabad</option>
          <option value="Karachi"> Karachi</option>
          <option value="Rawalpindi"> Rawalpindi</option>
          <option value="Lahore"> Lahore</option>
        </select>
      </div>
      <br>



      <div class="row">
        <label for="city"> Select your Institution</label>
        <select name="ins" id="dropdown" tabindex="5" class="formtext">
          <option value="Punjab University">Punjab University</option>
          <option value="FAST University"> FAST University </option>
          <option value="NUST University"> NUST University </option>
          <option value="COMSATS University"> COMSATS University </option>
        </select>
      </div>


       <div class="row">
        <label for="Username">Current Degree</label>
        <input type="text" name="current_degree" id="username" tabindex="1" autocomplete="off" class="formtext">
      </div>
      
      <div class="row">
        <label for="Username"> Please state your reason </label>
        <textarea name="file" id="username" tabindex="1" autocomplete="off" class="formtext" rows="10" cols="10"> </textarea>
      </div>
       
       <br><div class="ref">REFERENCE</div><hr/><br><br>
    

      <div class="row">
        <label for="Username">Contact No : </label>
        <input type="text" name="ref_no" id="username" tabindex="1" autocomplete="off" class="formtext">
      </div>

      <div class="row">
        <label for="Username">Work/Organization : </label>
        <input type="text" name="ref_job" id="username" tabindex="1" autocomplete="off" class="formtext">
      </div>

      <div class="row">
        <label for="Username">Relation : </label>
        <input type="text" name="ref_relation" id="username" tabindex="1" autocomplete="off" class="formtext">
      </div>

      <hr/>


      <div id="resultscontainer">
        <input type="submit" name="submit" id="submit" value="Submit">
        </div>
      


    </form>
  </div>

</body>
</html>