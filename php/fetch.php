<?php 
/* This fetches the data from the database in index.php*/
require_once ('class-databasehelpers.php');

$dbh = DatabaseHelpers::getDatabaseConnection();

      
            /*PHP and jQuery checkbox array with a hint of Jquery UI Demo*/
            $data = "";
            $radio ="";
            $sql = "SELECT * FROM checkbox_demo";
            $rows = $stmt = $dbh -> query($sql);
                
                 while ($result = $stmt -> fetch()) {

                    $id = $result['id'];
                    $value = $result['value'];  
                    
                     $data.="<li><label><input type='checkbox' name='deleteCB' value='$id' />$value</label></li>";
        
                }
            /*PHP Radio Button Demo*/
            $query = "SELECT * from radio_demo";
                $result = $stmt = $dbh -> query($query);
                
                while ($result = $stmt -> fetch()) {
                    
                    $radio = $result['value'];
                    
                }
                  
                $checked = 'checked="checked"';
                switch ($radio){
				case 'cat':
                    $pet1 = $checked;
				break; 
                case 'dog':
                    $pet2 = $checked;
                break;
                case 'bird':
                    $pet3 = $checked;
                break;
                case 'rabbit':
                    $pet4 = $checked;
                break;
                case 'horse':
                    $pet5 = $checked;
                break;
                }

                /*PHP Checkbox Yes/No Demo*/
                $query = "SELECT * from flowers_demo WHERE id='1'";

                $result = $stmt = $dbh -> query($query);
                
                while ($result = $stmt -> fetch()) {
                    
                    $value = $result['value'];
                    
                }
            
                    if ($value == 'Y')
                        {
                            $selected='checked="checked"';
                            $value='Y';
                        }
                        else
                            {
                            $selected='';
                            $value='N';
                            }

$dbh = null;
?>