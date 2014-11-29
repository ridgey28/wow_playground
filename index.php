<?php
//fetches the data from the database
require_once 'php/fetch.php';?>
<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="css/admin.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/redmond/jquery-ui.css" />

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script type="text/javascript" src="scripts/checkbox.js"></script><!-- checkbox.min.js -->

    <title>PHP and Jquery form tutorials</title>
</head>

<body><!-- Jquery UI Dialog-->
    <div id="dialog-confirm" title="Delete Item(s)?">
        <p><span class="ui-icon ui-icon-alert" style="float:left; margin:0 7px 20px 0;">nbsp;</span>
            These items will be permanently deleted and cannot be recovered. Are you sure?</p>
    </div>
    <!--PHP and jQuery checkbox array with a hint of Jquery UI Demo -->
    <div class="units-container">
        <div class="units-row">
            <div class="unit-push-20 unit-30">
                <h2>PHP and jQuery checkbox array with a hint of Jquery UI Demo</h2>
                <form name="delete_form" id="delete_form" class="forms">
                    
                    <input type="checkbox" id="selectAll" name="select_all" />
                    <label data-text-swap="Deselect All" for="select_all" class="inline bold">Select All</label>
                    <ul class="forms-list" id="cbox">
                        <?php if(isset($data)){ echo $data;}?>
                    </ul>
                    <div class="button_group">
                        <input type="submit" id="deleteBtn" class="btn btn-red" value="Delete" name="deleteBtn" />
                        <input type="submit" id="addBtn" class="btn btn-blue" value="Add" name="addBtn" />
                        <input type="submit" id="saveBtn" class="btn btn-green" value="Save" name="saveBtn" />
                    </div>
                </form>
            </div>
            <div class="unit-push-20 unit-30 pad">
                <p>To delete values select the checkboxes and click delete. I have added a little function to add new checkboxes, which will be blue in colour. Simply click save and they will be added to the database.  Original post <a href="http://www.worldoweb.co.uk/2011/php-jquery-checkbox-array-with-a-hint-of-jquery-ui" title="PHP and jQuery checkbox array with a hint of Jquery UI" target="_blank">PHP and jQuery checkbox array with a hint of Jquery UI</a> </p>

            </div>
        </div>
<!-- PHP Radio Button Demo-->
        <div class="units-row">
            <div class="unit-push-20 unit-30">
                <h2>PHP Radio Button Demo</h2>
                <form action="php/process.php?page=4" method="post" class="forms">

                    <ul class="forms-list">

                        <li>
                            <label title="Which one of these is your favourite pets">
                                Which one of the following is your favourite pet?</label>
                            <br/>
                            
                            <label><input type="radio" name="pets" value="cat" <?php if(isset($pet1)) {echo $pet1;} ?>/>Cat</label>
                        </li>
                        <li>
                            
                            <label><input type="radio" name="pets" value="dog" <?php if(isset($pet2)) {echo $pet2;} ?>/>Dog</label>
                        </li>
                        <li>
                            
                            <label><input type="radio" name="pets" value="bird" <?php if(isset($pet3)) {echo $pet3;}?>/>Bird</label>
                        </li>
                        <li>
                            
                            <label><input type="radio" name="pets" value="rabbit" <?php if(isset($pet4)) {echo $pet4;}?>/>Rabbit</label>
                        </li>
                        <li>
                            
                            <label><input type="radio" name="pets" value="horse" <?php if(isset($pet5)) {echo $pet5;}?>/>Horse</label>
                        </li>
                        <input type="hidden" name="submitted" value="true" />
                        <input type="submit" value="Save" name="ok" class="btn btn-blue" />
                    </ul>
                </form>
            </div>
            <div class="unit-push-20 unit-30 pad">
                    <p>Simply select the radio button of your favourite pet and click save which will save to the database.  Original post <a href="http://www.worldoweb.co.uk/2010/getting-to-grips-with-php-radio-buttons" title="Getting to grips with PHP Radio Buttons" target="_blank">Getting to grips with PHP Radio Buttons</a> </p>


            </div>
        </div>

<!--PHP Checkbox Yes/No Demo -->
        <div class="units-row">
            <div class="unit-push-20 unit-30">
                <h2>PHP Checkbox Yes/No Demo</h2>
                <form action="php/process.php?page=5" method="post" class="forms">

                    <ul class="forms-list">
                        <li>
                            <input type="checkbox" name="flowers" id="flowers" value="<?php echo $value ?>" <?php echo $selected; ?>/>
                            <label for="flowers">Do you like flowers?</label>
                        </li>

                    </ul>
                    <input type="hidden" name="submitted" value="true" />
                    <input type="submit" value="Save" name="ok" class="btn btn-blue" />
                </form>
            </div>
            <div class="unit-push-20 unit-30 pad"><p>A simple yes and no checkbox which saves to the database as a Yes(Y) or No(N) value. Original post <a href="http://www.worldoweb.co.uk/2010/getting-to-grips-with-php-checkboxes" title="Getting to grips with PHP Checkboxes" target="_blank">Getting to grips with PHP Checkboxes</a> </p></div>
        </div>
        <!--jQuery Disable and Enable Form Elements Using a Checkbox -->
        <div class="units-row">
            <div class="unit-push-20 unit-30">
                <h2>jQuery Disable and Enable Form Elements Using a Checkbox</h2>
                <form method="" class="forms" id="disable_demo">
                    <label>Enable
                        <input checked="checked" name="enable" type="checkbox" />
                    </label>
                    <label>First Name
                        <input class="textbox" name="first_name" type="text" />
                    </label>
                    <label>Last Name
                        <input class="textbox" name="last_name" type="text" />
                    </label>
                    <label>Age
                        <input class="textbox" name="age" type="text" />
                    </label>
                    <label>Country
                        <input class="textbox" name="country" type="text" />
                    </label>
                </form>
            </div>
            <div class="unit-push-20 unit-30 pad"><p>Disable or enable form fields using a checkbox.  Original post <a href="http://www.worldoweb.co.uk/2011/jquery-disable-and-enable-form-elements-using-a-checkbox" title="jQuery Disable and Enable Form Elements Using a Checkbox" target="_blank">jQuery Disable and Enable Form Elements Using a Checkbox</a></p></div>
        </div>


    </div>
</body>

</html>