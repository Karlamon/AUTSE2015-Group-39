<!--Liang Chen (1392702)-->
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css">
	<title>Search article - Article Searcher</title>
</head>
<body>
	<h1>Article</h1>
	<?php
        $dbConnect = @mysqli_connect("localhost", "root", "", "zbv9522")
            or die("<p>Unable to connect to the database server.<br>".
                   "Error code ". mysqli_connect_errno(). ": ".
                   mysqli_connect_error(). "</p>".
                   "<p><a href=\"javascript:history.back(1);\">Try Again</a><br>".
                   "<a href=\"index.php\">Return to Home Page</a></p>");
        $id = $_GET["id"];
        //$author = $_GET["author"];
        //$venue = $_GET["venue"];
        //$year = $_GET["year"];
echo "$id";
        $select_query = "SELECT * FROM article_database WHERE title LIKE '%$id%'
            ORDER BY year DESC;";
        $query_results = mysqli_query($dbConnect, $select_query);
        if (($id == null))
            //&& ($author == null) && ($venue == null) && ($year == null))
            echo "<p>Title form must not be empty.</p>";
        else if ($query_results) {
            echo "<hr>";
            if (mysqli_num_rows($query_results) > 0) {
                while ($row = mysqli_fetch_assoc($query_results)) {
                    echo "<p align=\"left\"><b>Bib reference: </b>", $row["bib_ref"], "<br>";
                    echo "<b>Title: </b>", $row["title"], "<br><br>";
                    echo "<b>Author: </b>", $row["author"], "<br>";
                    echo "<b>Venue: </b>", $row["venue"], "<br>";
                    echo "<b>Year: </b>", $row["year"], "<br>";
                    echo "<b>Question: </b>", $row["question"], "<br>";
                    echo "<b>Method: </b>", $row["method"], "<br>";
                    echo "<b>Practice: </b>", $row["practice"], "<br>";
                    echo "<b>Participants: </b>", $row["participants"], "<br>";
                    echo "<b>Creditability: </b>", $row["creditability"], "</p>";
                    echo "<hr/>";
                }
                mysqli_free_result($query_results);
            } else
                echo "<p>No results found.</p>";
        }
        else
            echo "<p>No results found.</p>";
        mysqli_close($dbConnect);
	?>
    <p><a href="searcharticleform.php">Search for another article</a>
    <br>
    <a href="index.php">Return to Home Page</a></p>
</body>
</html>
