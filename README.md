wow_playground
==============

My PHP, jQuery form tutorials formed into a simple playground in one handy page.

<h3>Prerequisites</h3>
PHP MySQL server with PDO extension.  I’ve tested it in PHP 5.3+

<h3>Installation</h3>
Simply upload to your server or testing server.  Add your database connection details into class-databasehelpers.php.   Navigate to wow_playground/php/setup.php with your web browser and hit Setup to install the MySQL tables.  You will automatically redirected to the index page. 

<h3>Features</h3>
The PHP code has now been cleaned up from the main page and is in the PHP folder.  fetch.php interacts with the database by fetching the information and process.php, you guessed it, processes the information from the forms and saves it to the database. jQuery and jQuery UI has been updated and as a result some deprecated functions have been removed.  For the design I have integrated CSS from the Kube Web Framework.  As for the new features I have added a button which will add a new checkbox to PHP and jQuery checkbox array demo.  I have also added a save button which will save them to the database. I have added comments throughout the code for clearer understanding.

Any feedback and request for new features welcome.

For further reading checkout http://www.worldoweb.co.uk/2014/wow-playground-php-checkboxes-revisited
