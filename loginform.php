<!--Karl Smith (1390533)-->
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Login - Article Searcher</title>
</head>
<body>
	<h1>Article Searcher</h1>
    <h2>Login</h2>
    You must log in to submit a new article.
	<form action="loginprocess.php" method="get">
        <p align="left"><label><b>Username: </b>
            <input type="text" name="username" maxlength="30" size="30"</label></p>
        <p align="left"><label><b>Password: </b>
            <input type="text" name="password" maxlength="30" size="30"</label></p>
        <p><input type="submit" value="Login"></p>
	</form>
    <p><a href="createaccountform.php">Create account</a><br>
    <a href="index.php">Return to Home Page</a></p>
</body>
</html>
