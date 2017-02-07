<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Week_3 Read Session</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-default navbar-inverse">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Week_3  Corps Read Session</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="./view-all.php" role="button">Back to List</a></li>
                        <li><a href="./create.php" role="button">Add Company</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <br />
        <?php
            include './dbconnect.php';
            include './functions.php';
            
            $id = filter_input(INPUT_GET, 'id');
            
            $result = viewOneFromCorps($id);
          
        ?>
        <div class="container">
            <!-- Table to display specific company from list -->
            <table class="table table-bordered table-condensed table-responsive">
                <thead>
                    <tr bgcolor="#ADD8E6">
                        <th>ID</th>
                        <th>Company Name</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Phone</th>
                        <th>Zip Code</th>
                        <th>Email</th>
                        <th>Enroll Date</th>
                        <th>Full Name</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr bgcolor="#A9A9A9">
                        <td><?php echo $result['id']; ?></td>
                        <td><?php echo $result['company']; ?></td>    
                        <td><?php echo $result['address']; ?></td> 
                        <td><?php echo $result['city']; ?></td> 
                        <td><?php echo $result['state']; ?></td> 
                        <td><?php echo $result['phone']; ?></td> 
                        <td><?php echo $result['zipcode']; ?></td> 
                        <td><?php echo $result['email']; ?></td> 
                        <td><?php echo $result['enroll']; ?></td>  
                        <td><?php echo $result['fullname']; ?></td>        
            
                        <!-- Update & Delete Buttons -->
                        <td><a href="update.php?id=<?php echo $result['id']; ?>" class="btn btn-warning" role="button">Update</a></td>            
                        <td><a href="delete.php?id=<?php echo $result['id']; ?>" class="btn btn-danger" role="button">Delete</a></td>             
                    </tr>          
                </tbody>
            </table>
        </div>
            
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
