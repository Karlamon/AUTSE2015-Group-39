<!--Liang Chen (1392702)-->
<!--Qingyang Guo (1395160)-->
<!--Karl Smith (1390533)-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Search article - Article Searcher</title>
    </head>
    <body>
        <header>
            <h1>Article Searcher</h1>
        </header>
    <bar>
        <div class="container">
            <div id="links">
                <li><a href="index.php">Home Page</a></li>
                <li><a href="searcharticleform.php">Search for another article</a></li>
            </div>
        </div>
    </bar>
    <div id="text">
        <h2>Search article</h2>
        <?php
      $dbConnect = @mysqli_connect("cmslamp14.aut.ac.nz", "zbv9522", "", "zbv9522")
            or die("<p>Unable to connect to the database server.<br>".
                   "Error code ". mysqli_connect_errno(). ": ".
                   mysqli_connect_error(). "</p>".
                   "<p><a href=\"javascript:history.back(1);\">Try Again</a><br>".
                   "<a href=\"index.php\">Return to Home Page</a></p>");
        $title = $_GET["title"];
        $author = $_GET["author"];
        $journal = $_GET["journal"];
        $year = $_GET["year"];
        $method = $_GET["method"];
        $select_query = "SELECT * FROM article_database WHERE title LIKE '%$title%' AND author LIKE             '%$author%' AND journal LIKE '%$journal%' AND year LIKE '%$year%' AND method LIKE
            '%$method%' ORDER BY year DESC;";
        $query_results = mysqli_query($dbConnect, $select_query);
        if (($title == null) && ($author == null) && ($journal == null) && ($year == null) &&
            ($method == null))
            echo "<p>Title forms must not be empty.</p>";
        else if ($query_results) {
            echo "<hr>";
            if (mysqli_num_rows($query_results) > 0) {
                while ($row = mysqli_fetch_assoc($query_results)) {
                    echo "<p align=\"left\"><b>", $row["title"], "</b><br><br>";
                    echo "<b>Author(s): </b>", $row["author"], "<br>";
                    echo "<b>Journal: </b>", $row["journal"], "<br>";
                    echo "<b>Year: </b>", $row["year"], "<br>";
                    echo "<b>Creditability rating: </b>", $row["creditability"], "<br>";
                    echo "<b>Creditability reason: </b>", $row["credReason"], "<br>";
                    echo "<b>Creditability rating by: </b>", $row["credRatedBy"], "<br>";
                    echo "<b>Research level: </b>", $row["reslevel"], "<br>";
                    echo "<b>Practice name: </b>", $row["pracname"], "<br>";
                    echo "<b>Practice description: </b>", $row["pracdesc"], "<br>";
                    echo "<b>Benefit tested: </b>", $row["benefit"], "<br>";
                    echo "<b>Study context: </b>", $row["context"], "<br>";
                    echo "<b>Who: </b>", $row["credWho"], "<br>";
                    echo "<b>What: </b>", $row["credWhat"], "<br>";
                    echo "<b>Where: </b>", $row["credWhere"], "<br>";
                    echo "<b>When: </b>", $row["credWhen"], "<br>";
                    echo "<b>How: </b>", $row["credHow"], "<br>";
                    echo "<b>Why: </b>", $row["credWhy"], "<br>";
                    echo "<b>Study result: </b>", $row["result"], "<br>";
                    echo "<b>Method integrity: </b>", $row["integrity"], "<br>";
                    echo "<b>Confidence rating: </b>", $row["confidence"], "<br>";
                    echo "<b>Confidence reason: </b>", $row["confReason"], "<br>";
                    echo "<b>Confidence rating by: </b>", $row["confRatedBy"], "<br>";
                    echo "<b>Question: </b>", $row["question"], "<br>";
                    echo "<b>Method: </b>", $row["method"], "<br>";
                    echo "<b>Metrics: </b>", $row["metrics"], "<br>";
                    echo "<b>Nature of Participants: </b>", $row["participant"], "<br>";
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
	</div>
	</body>
</html>
