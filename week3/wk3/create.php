<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Week_3 Project</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    </head>
    <body>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-default navbar-inverse">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Week_3  Corps Create Session</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="./view-all.php" role="button">Browse to List</a></li>
                        <li><a href="./create.php" role="button">Company Detail Add On</a></li>
                    </ul>
                </div>
            </div> <!--/container-->
        </nav>
        <br />
        <?php
        include './dbconnect.php';
        include './functions.php';
        
        $results = '';
        if (isPostRequest()) {
            
            $company    = filter_input(INPUT_POST, 'company');
            $address    = filter_input(INPUT_POST, 'address');
            $city    = filter_input(INPUT_POST, 'city');
            $state    = filter_input(INPUT_POST, 'state');
            $phone   = filter_input(INPUT_POST, 'phone');
            $zipcode = filter_input(INPUT_POST, 'zipcode');
            $email   = filter_input(INPUT_POST, 'email');
            $enroll = filter_input(INPUT_POST, 'enroll');
            $fullname   = filter_input(INPUT_POST, 'fullname');
            $confirm = createCorpData($company, $address, $city, $state, $phone, $zipcode, $email, $enroll, $fullname);
            
            if ( $confirm === false ) {
                $results = 'Company Not Added';
            } else {
                $results = 'Company Added';
            }
        }
        ?>
        <div class="container">
            <!-- Confirm whether company data was added or not -->
            <h1><?php echo $results; ?></h1>

            <form method="post" action="#">
                <div class="form-group">
                    Company <input type="text" value="" name="company" class="form-control" />
                </div><br />
                <div class="form-group">
                    Address <input type="text" value="" name="address" class="form-control" />
                </div><br />
                <div class="form-group">
                    City <input type="text" value="" name="city" class="form-control" />
                </div><br />
                <div class="form-group">
                    State <input type="text" value="" name="state" class="form-control" />
                </div><br />
                <div class="form-group">
                    Phone <input type="text" value="" name="phone" class="form-control" />
                </div><br />
                <div class="form-group">
                    Zip <input type="text" value="" name="zipcode" class="form-control" />
                </div><br />
                <div class="form-group">
                    Email <input type="text" value="" name="email" class="form-control" />
                </div><br />
                <div class="form-group">
                    Enroll <input type="date" value="" name="enroll" class="form-control" />
                </div><br />
                <div class="form-group">
                    Full Name <input type="text" value="" name="fullname" class="form-control" />
                </div><br />
                
                <div class="form-group">
                    <input type="submit" value="Submit" class="btn btn-primary form-control" />
                </div>
            </form>
        </div> <!--/container-->
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>