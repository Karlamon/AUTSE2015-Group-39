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
            <input type="text" name="title" maxlength="100" size="100"</label></p>
		<p><b>Author: </b>
		  <input type="text" name="author" maxlength="30" size="30"</label></p>
		<p><b>Journal: </b>
		  <input type="text" name="journal" maxlength="20" size="20"</label></p>
		<p><b>Year: </b>
		  <input type="text" name="year" maxlength="4" size="4"</label></p>
        <p><b>Method: </b>
            <select name="method">
                <option value=""></option>
                <option value="Case study">Case study</option>
                <option value="Experiment">Experiment</option>
                <option value="Interview">Interview</option>
                <option value="Other">Other</option>
            </select></p>
        <input type="submit" value="Search"></p>
    </form>
	<p><a href="index.php">Return to Home Page</a></p>
</body>
</html>
