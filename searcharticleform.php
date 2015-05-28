<!--Karl Smith (1390533)-->
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Search article - Article Searcher</title>
</head>
<body>
	<h1>Article Searcher</h1>
    <h2>Search article</h2>
    <form action="searcharticleprocess.php" method="get">
        <p align="left"><label><b>Title: </b>
        <input type="text" name="title" maxlength="100" style="width:90%;"</label><br><br>
		<b>author: </b>
		<input type="text" name="author" maxlength="30" size="30"</label><br><br>
		<b>method: </b>
		<input type="text" name="method" maxlength="20" size="20"</label><br><br>
		<b>venue: </b>
		<input type="text" name="venue" maxlength="10" size="10"</label><br><br>
        <input type="submit" value="Search"></p>
    </form>
	<p><a href="index.php">Return to Home Page</a></p>
</body>
</html>
