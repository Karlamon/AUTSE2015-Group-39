<!--Liang Chen (1392702)-->
<!--Qingyang Guo (1395160)-->
<!--Karl Smith (1390533)-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Submit new article - Article Searcher</title>
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
				<h2>Submit new user</h2>
				<p><?php
					$username = ($_POST["username"]);
					$password = ($_POST["password"]);
					$confirmpassword = ($_POST["confirmpassword"]);
					echo "<p>$username<p>";
					echo "<p>$password<p>";
					echo "<p>$confirmpassword<p>";
					if (($username == null) || ($password == null) || ($confirmpassword == null)) {
						echo "<p>All fields must be entered.</p>
							<p><a href=\"javascript:history.back(1);\">Try again</a>";
					}
					else if ($password != $confirmpassword) {
						echo "<p>Both password fields must be identical.</p>
							<p><a href=\"javascript:history.back(1);\">Try again</a>";
					}
					if (!preg_match("/^[a-zA-Z0-9 ,.!?]*$/", $username)) {
						echo "<p>Usernames only accept the following characters:<br>a-zA-Z0-9 ,.!?</p>
							<p><a href=\"javascript:history.back(1);\">Try again</a>";
					}
					else {
      						$dbConnect = @mysqli_connect("segroup39-virtualbox", "root", "", "article_db")
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
						$create_query = "CREATE TABLE IF NOT EXISTS accounts (
							username VARCHAR(30) NOT NULL PRIMARY KEY,
							password VARCHAR(30) NOT NULL);";
						$insert_query = "INSERT INTO accounts (username, password)
							VALUES('$username', '$password');";
						$check_query = "SELECT * FROM accounts
							WHERE username = '$username';";
						if (!mysqli_query($dbConnect, $create_query)) {
							echo "<p>Error creating table: ", mysql_error($dbConnect), "</p>";
						}
						$check_results = mysqli_query($dbConnect, $check_query) or die(mysql_error());
						if (mysqli_num_rows($check_results) > 0) {
							echo "<p>Desired username is already taken.</p>
								<p><a href=\"javascript:history.back(1);\">Try Again</a><br>
								<a href=\"index.php\">Return to Home Page</a></p>";
							die();
						}
						if (mysqli_query($dbConnect, $insert_query)) {
							echo "<p>Account created.<br>";
						}
						else {
							echo "<p>Error creating account: ", mysql_error($dbConnect), "<p>";
						}
						mysqli_close($dbConnect);
					}
				?>
			</div>
	</body>
</html>
