<!DOCTYPE HTML>
<html lang="en">
    <head>
        <style>
            .error {color: #FF0000;}
        </style>
        <meta charset="UTF-8">
        <title>Final Exam Web Form</title>
   <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous" />
    </head>
    <body>
        
         <!-- Navigation Bar -->
        <nav class="navbar navbar-default navbar-inverse">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Final Exam Web Form</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                    </ul>
                </div>
            </div>
        </nav>
        <br />

        <!-- Main Content Container -->
        <div class="container">
            
            <h1>Student Name:</h1>
            <?php echo "Rudolph B. Cooper, Jr."; ?>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $phoneErr = $contact_viaErr = $heard_fromErr = "";
$name = $email = $phone = $contact_via = $comments = $heard_from = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
  
 if (empty($_POST["name"])) {
    $phoneErr = "Phone number is required";
  } else {
    $phone = test_input($_POST["phone"]);
    // check if number is ten digit
    if (!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/",$phone)) {
      $phoneErr = "Ten digit numbers only"; 
    }
  }
  
  if (empty($_POST["comments"])) {
    $comments = "";
  } else {
    $comments = test_input($_POST["comments"]);
  }

   if (empty($_POST["heard_from"])) {
    $heard_fromErr = "Select one";
  } else {
    $heard_from = test_input($_POST["heard_from"]);
  }
}
  
   if (empty($_POST["contact_via"])) {
    $contact_viaErr = "Click on one";
  } else {
    $contact_via = test_input($_POST["contact_via"]);
  }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h1>Account Sign Up</h1>
<form action="display_results.php" method="post"></form>

<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
   Phone: <input type="text" name="phone">
  <span class="error">* <?php echo $phoneErr;?></span>
  <br><br>

  <fieldset>
      <legend>Settings</legend>
  <p>How did you hear about us?</p>
  <input type="radio" name="heard_from" value="Search Engine" />Search Engine<br />
  <input type="radio" name="heard_from" value="friend" />Word of mouth<br />
  <input type="radio" name="heard_from" value="Search Other" />Other<br />
  <span class="error">* <?php echo $heard_from;?></span>
         
 <p>Contact via:</p>
 <select name="contact_via">
 <option type="radio" name="contact_via" value="email">Email</option>
 <option type="radio" name="contact_via"value="text">Text Message</option>
 <option type="radio" name="contact_via"value="phone">Phone</option>
 </select>
 <span class="error">* <?php echo $contact_via;?></span>
 

  
  <p>Comments:(optional)</p>
  <textarea name="comments" rows="4" cols="50"></textarea>
  </fieldset>

 <input type="submit" value="Submit">  
 


<?php
echo "<h2>Form Information Display:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $phone;
echo "<br>";
echo $heard_from;
echo "<br>";
echo $comments;
echo "<br>";
echo $contact_via;
?>
 

<br />
</div>
</div> <!--/container-->

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
