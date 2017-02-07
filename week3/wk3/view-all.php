<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Week_3 View Session</title>
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    </head>
    <body>
      
        <?php
        
        include './dbconnect.php';
        include './functions.php';
        
        $results = viewAllFromCorps();
        ?>
        <div class="container">
            <!-- Corporations Table -->
            <table border="1" class="table table-bordered table-condensed table-responsive">
                <thead>
                    <tr bgcolor="#00FF00">
                        <th>ID</th>
                        <th>Company Name</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($results as $row): ?>
                    <tr bgcolor="#FFB6C1">
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['company']; ?></td>
                        <!-- Read, Update, Delete Buttons -->
                        <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-info">Delete</a></td>
                        <td><a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-success">Update</a></td>  
                        <td><a href="read.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Read</a></td>  
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div> <!--/container-->
        
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
      <!-- Navigation Bar -->
        <nav class="navbar navbar-default navbar-inverse">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Week_3  Corps View Session</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="./create.php" role="button">Add Company Here</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <br />
</html>