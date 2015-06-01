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
    <h2>Create account</h2>
    All fields required.
	<form action="createaccountprocess.php" method="post">
        <p align="left"><label><b>Username: </b>
            <input type="text" name="username" maxlength="30" size="30"</label></p>
        <p align="left"><label><b>Password: </b>
            <input type="text" name="password" maxlength="30" size="30"</label></p>
        <p align="left"><label><b>Confirm Password: </b>
            <input type="text" name="confirmpassword" maxlength="30" size="30"</label></p>
        <p><input type="submit" value="Post"></p>
	</form>
    <p><a href="loginform.php">Login</a><br>
    <a href="index.php">Return to Home Page</a></p>
</body>
</html>
