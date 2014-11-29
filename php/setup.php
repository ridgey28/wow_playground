<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../css/admin.css" rel="stylesheet" type="text/css" />
    <title>Database setup</title>
</head>

<body>

    <div class="units-row">
        <div class="unit-centered unit-50">
            <h1>Setup</h1>
            <p>Welcome, this is the setup page, simply click Setup and once the database is updated you will be redirected to the homepage.  Please note that this file will be renamed once the database is setup.</p>
            <?php if (!isset($_POST[ 'submit'])) ?>
            <form name="setup" action="process.php?page=3" method="post" class="forms">
                <input type="submit" value="Setup" name="submit" class="btn btn-blue" />

            </form>
        </div>
    </div>
</body>

</html>