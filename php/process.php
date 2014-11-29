<?php
/*This processes all of the database queries */

require_once ('class-databasehelpers.php');

$dbh = DatabaseHelpers::getDatabaseConnection();

// get the index of the file to output
if (isset($_GET['page'])){$mypage = $_GET['page'];}else{exit();}
	
// select the file based on the form action
    switch ($mypage) {
    /* PHP and jQuery checkbox array with a hint of Jquery UI Demo */ 
        
    case 1://user clicks on save button
        
         foreach ($_POST['deleteCB'] as $value)
                {
                    $query_add = "INSERT INTO checkbox_demo (value) VALUES (:value)";
                    $stmt = $dbh->prepare($query_add);
                    $stmt->execute( array( ":value" => $value ) );
                }
    
    
    
    break;
    case 2://user clicks on delete button
         foreach ($_POST['deleteCB'] as $value)
                {
                    $query_delete = "DELETE FROM checkbox_demo WHERE id='$value'";
                    $stmt = $dbh->prepare($query_delete);
                    $stmt->execute( array( ":id" => $value ) );
                }
        
    break;    
    
    case 3://creates all the tables on the setup.php

     if (isset($_POST['submit'])) {//if post has been submitted
			$success='';
			
         
         
            $radio_setup = "CREATE TABLE IF NOT EXISTS radio_demo(
						id int(1) NOT NULL auto_increment,
						value varchar (20) NOT NULL,
						primary key (id))";
         
         
            $dbh->query($radio_setup);
            
            $value = "cat";
         
            $stmt = $dbh->prepare("INSERT INTO radio_demo (value) VALUES (:value)");
	        $success = $stmt->execute(array(
			':value'=>$value
		      ));
         
         
			
			$checkbox_setup= "CREATE TABLE IF NOT EXISTS checkbox_demo(
			id int(1) NOT NULL auto_increment,
			value text NOT NULL,
			primary key (id))";
     
            $dbh->query($checkbox_setup);
     
            $value = "Test 1";
     
            $stmt = $dbh->prepare("INSERT INTO checkbox_demo (value) VALUES (:value)");
	        $success = $stmt->execute(array(
			':value'=>$value
		      ));
			
            $flowers_demo= "CREATE TABLE IF NOT EXISTS flowers_demo(
			id int(1) NOT NULL auto_increment,
			value ENUM('Y','N') NOT NULL DEFAULT 'N',
			primary key (id))";
			$dbh->query($flowers_demo);
 
			$value = 'N';
         
             $stmt = $dbh->prepare("INSERT INTO flowers_demo (value) VALUES (:value)");
	        $success = $stmt->execute(array(
			':value'=>$value
		      ));
            /*Setup.php is a potential security vulnerability so we create a random 10 letter/number string to rename the file below*/
            $filename = DatabaseHelpers::random_string(10);
            
			if ($success)
				{
                    rename("setup.php", "$filename.php");//here we rename the setup.php file
    				header('Location: ../index.php');//redirect to index.php
					
				}
        }
    break;
        
    case 4://PHP Radio Button Demo
        
        
              if (isset ($_POST['submitted']))
            {
                 $selected_radio='';
                 $value=$_POST['pets'];
               
        
            $stmt = $dbh->prepare("UPDATE radio_demo SET value=?");
	        $success = $stmt->execute(array(
			     $value
		      ));

            }
        header('Location: ../index.php');
        
        
        
    break;    


    case 5://PHP Checkbox Yes/No Demo
if (isset ($_POST['submitted']))
            {
                if (isset($_POST['flowers'])== 'Y')
                    {
                        $value='Y';
                     }
                else {
                        $value='N';
                     }
                
                 $stmt = $dbh->prepare("UPDATE flowers_demo SET value=?");
	        $success = $stmt->execute(array(
			     $value
		      ));

            }
        header('Location: ../index.php');

 break;
    }
 
$dbh = null;
exit();
?>