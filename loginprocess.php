<!--Karl Smith (1390533)-->
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Submit new article - Article Searcher</title>
</head>
<body>
	<h1>Article Searcher</h1>
    <h2>Submit new article</h2>
	<p><?php
        $username = ($_GET["username"]);
        $password = ($_GET["password"]);
        echo "<p>$username</p>";
        echo "<p>$password</p>";
        $username_query = "SELECT username FROM accounts WHERE username = '$username'";
        $password_query = "SELECT password FROM accounts WHERE password = '$password'";
        if (($username == null) || ($password == null)) {
            echo "<p>All fields must be entered.</p>
                <p><a href=\"javascript:history.back(1);\">Try again</a>";
        }
        else {
//		    $dbConnect = @mysqli_connect("cmslamp14.aut.ac.nz", "(username)", "(password)", "(username)")
            $dbConnect = @mysqli_connect("localhost", "root", "", "zbv9522")
                or die("<p>Unable to connect to the database server.</p>".
                       "<p>Error code ". mysqli_connect_errno(). ": ".
                       mysqli_connect_error(). "</p>".
                       "<p><a href=\"javascript:history.back(1);\">Try Again</a><br>
                            <a href=\"index.php\">Return to Home Page</a></p>
                        <hr>
                        <div class = footer>
                            Site created by Karl Smith (1390533).<br>
                            <b>Email:</b> <a href=\"mailto:zbv9522@aut.ac.nz\">zbv9522@aut.ac.nz</a>
                        </div>");
            $username_check = mysqli_query($dbConnect, $username_query);
            $password_check = mysqli_query($dbConnect, $password_query);
            if (mysqli_num_rows($username_check) > 0) {
                if (mysqli_num_rows($password_check) > 0) {
                    echo "<p>Login successful.</p>";
                }
                else {
                    echo "<p>Incorrect username or password.</p>";
                }
            }
        }
        mysqli_close($dbConnect);
	?>
    <br><a href="index.php">Return to Home Page</a></p>
</body>
</html>
