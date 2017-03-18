<!DOCTYPE html>
<html>
 <head>
 <style>
 .error {color: #FF0000;}
 </style>
 <meta charset="UTF-8">
 <title>Mailing List</title> 
 </head>
 <body>
 
 <?php
 // define variables and set to empty values
 $emailErr = $phoneErr = $heard_fromErr = $contact_viaErr = "";
 $email = $phone = $heard_from = $contact_via = "";
 
 if ($_SERVER["REQUEST_METHOD"] == "GET"){
     if(empty($_GET["email"])) {
     $emailErr = "Email is required";
     } else {
         $email = test_input($_GET["email"]);
         //check if e-mail address is well-formed
         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
             $emailErr = "Invalid email format";
         }
     }
 }
 
  if (empty($_GET["heard_from"])) {
    $heard_fromErr = "Select one option";
  } else {
    $heard_form = test_input($_GET["heard_from"]);
  }
  
    if (empty($_GET["contact_via"])) {
    $contact_viaErr = "Click on one";
  } else {
    $contact_via = test_input($_GET["contact_via"]);
  }


 
 ?>
 
   
 <div>
 <h1>Account Sign Up</h1>
 <p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
    
 <form action="display_results.php" method="post">

 <fieldset>
 <legend>Account Information</legend>
 <label>E-Mail:</label>
 <input type="text" name="email">
 <span class="error">* <?php echo $emailErr;?></span>
 <br><br>
 

 <label>Phone Number:</label>
 <input type="text" name="phone" value="" class="textbox"/>
 </fieldset>

 <fieldset>
 <legend>Settings</legend>

 <p>How did you hear about us?</p>

 <input type="radio" name="heard_from" value="Search Engine" />
 Search engine<br />
 <input type="radio" name="heard_from" value="Friend" />
 Word of mouth<br />
 <input type=radio name="heard_from" value="Other" />
 Other<br />
  <span class="error">* <?php echo $heard_fromErr;?></span>


 <p>Contact via:</p>
 <select name="contact_via">
 <option value="email">Email</option>
 <option value="text">Text Message</option>
 <option value="phone">Phone</option>
 </select>
 <span class="error">* <?php echo $contact_via;?></span>

 <p>Comments: (optional)</p>
 <textarea name="comments" rows="4" cols="50"></textarea>
 </fieldset>

       <input type="submit" name="submit" value="Submit">  
 

 </form>
    <?php
    echo "<h2>Form Input:</h2>";
    echo $email;
    echo "<br>";
    echo $phone;
    echo "<br>";
    echo $heard_from;
    echo "<br>";
    echo $contact_via;
    echo "<br>";
    echo $comment;
    echo "<br>"
    ?>
  
</form>
 <br />
 </div>
 </body>
</html>