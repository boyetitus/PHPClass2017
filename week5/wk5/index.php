<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Lab 5: Index Page</title>
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
                    <a class="navbar-brand" href="#">Lab 5:  Sites Index Page</a>
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
    
        <?php
        // put your code here
        
            include './functions/dbconnect.php';
            include './functions/util.php';
            
            
          
            
            $site = filter_input(INPUT_POST, 'site');
            $errors = array();
            
            if ( isPostRequest() ) {
                if ( filter_var($site, FILTER_VALIDATE_URL) === false  ) {
                    $errors[] = 'Site URL is NOT valid.';
                }
                if ( count($errors) === 0) {
                    
                    $html = getPageContent($site);
                    
                    if ( !empty($html) ) {
                        $siteLinks = getLinkMatches($html);
                        
                        // Turn from here down into a function
                        $db = dbconnect();
                        
                        $stmt = $db->prepare("INSERT INTO sites SET date = now(), site = :site");
                        
                        $binds = array(":site" => $site);
                        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
                            /* get the last insert ID to use as the relational id */
                            $site_id = $db->lastInsertId();
                            
                            $stmt = $db->prepare("INSERT INTO sitelinks SET site_id = :site_id, link = :link");
                            
                            foreach ($siteLinks as $link) {
                                $binds = array(":site_id" => $site_id, ":link" => $link); 
                                $stmt->execute($binds);
                                
                                
                            }
                            
                            // may need to return false;
                        }
                    }
                    
                    // Save data
                
                }
            }
        ?>
    
        
        <?php include './templates/error-messages.php'; ?>
        
        <form action="#" method="post">
              <select name="column">
                    <option value="site_id" selected="selected">ID</option>
                    <option value="site">Site</option>
                     <option value="date">Date</option>
                </select>
                <input type="hidden" name="action" value="Submit" />
                <br />
                <input type="submit" value="Submit" />
                <input type="hidden" name="action" value="search">
                
            Site: <input type="text" name="site" value="<?php echo $site; ?>" />
            <br />
            <input type="submit" color="red" value="Submit" />
        </form>
        
    </body>
</html>