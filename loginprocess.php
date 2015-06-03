<!--Liang Chen (1392702)-->
<!--Qingyang Guo (1395160)-->
<!--Karl Smith (1390533)-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Login - Article Searcher</title>
    </head>
    <body>
        <header>
            <h1>Article Searcher</h1>
        </header>
    <bar>
        <div class="container">
            <div id="links">
                <li><a href="index.php">Home Page</a></li>
            </div>
        </div>
    </bar>
    <div id="text">
        <h2>Login</h2>
        <p><?php
            $username = ($_GET["username"]);
            $password = ($_GET["password"]);
            $username_query = "SELECT username FROM accounts WHERE username = '$username'";
            $password_query = "SELECT password FROM accounts WHERE password = '$password'";
            if (($username == null) || ($password == null)) {
            echo "<p>All fields must be entered.</p>
            <p><a href=\"javascript:history.back(1);\">Try again</a>";
            }
            else {
		$dbConnect = @mysqli_connect("cmslamp14.aut.ac.nz", "zbv9522", "", "zbv9522")
            or die("<p>Unable to connect to the database server.</p>".
            "<p>Error code ". mysqli_connect_errno(). ": ".
            mysqli_connect_error(). "</p>".
            "<p><a href=\"javascript:history.back(1);\">Try Again</a><br>
            <a href=\"index.php\">Return to Home Page</a></p>");
            $username_check = mysqli_query($dbConnect, $username_query);
            $password_check = mysqli_query($dbConnect, $password_query);
            if (mysqli_num_rows($username_check) > 0) {
                if (mysqli_num_rows($password_check) > 0) {
                    header("location:submitarticleform.php");
                }
                else {
                    echo "<p>Incorrect username or password.</p>
                    <p><a href=\"javascript:history.back(1);\">Try Again</a>";
                }
            }
            else {
                echo "<p>Incorrect username or password.</p>
                <p><a href=\"javascript:history.back(1);\">Try Again</a>";
            }
            mysqli_close($dbConnect);
            }
            ?>
    </div>
</body>
</html>
