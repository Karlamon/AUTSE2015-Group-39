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
        $title = ($_POST["title"]);
        $author = ($_POST["author"]);
        $journal = ($_POST["journal"]);
        $year = ($_POST["year"]);
        if (!empty($_POST["creditability"])) {
            $creditability = ($_POST["creditability"]);
        }
        $credReason = ($_POST["credReason"]);
        $credRatedBy = ($_POST["credRatedBy"]);
        $reslevel = ($_POST["reslevel"]);
        $pracname = ($_POST["pracname"]);
        $pracdesc = ($_POST["pracdesc"]);
        $benefit = ($_POST["benefit"]);
        $context = ($_POST["context"]);
        $credWho = ($_POST["credWho"]);
        $credWhat = ($_POST["credWhat"]);
        $credWhere = ($_POST["credWhere"]);
        $credWhen = ($_POST["credWhen"]);
        $credHow = ($_POST["credHow"]);
        $credWhy = ($_POST["credWhy"]);
        $result = ($_POST["result"]);
        if (!empty($_POST["confidence"])) {
            $confidence = ($_POST["confidence"]);
        }
        $confReason = ($_POST["confReason"]);
        $confRatedBy = ($_POST["confRatedBy"]);
        $integrity = ($_POST["integrity"]);
        $question = ($_POST["question"]);
        $method = ($_POST["method"]);
        $metrics = ($_POST["metrics"]);

        $participant = ($_POST["participant"]);
        if (($title == null) || ($author == null) || ($journal == null) || ($year == null) ||
            (empty($_POST["creditability"])) || ($credReason == null) || ($credRatedBy == null) ||
            ($reslevel == "") || ($pracname == null) || ($pracdesc == null) || ($benefit == null) ||
            ($context == null) || ($credWho == null) || ($credWhat == null) || ($credWhere == null)
            || ($credWhen == null) || ($credHow == null) || ($credWhy == null) || ($result == null)
            || (empty($_POST["confidence"])) || ($confReason == null) || ($confRatedBy == null) ||
            ($integrity == null) || ($question == null) || ($method == "") || ($metrics == null) ||
            ($participant == null)) {
            echo "<p>Required fields must be entered.</p>
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
            $create_query = "CREATE TABLE IF NOT EXISTS article_database (
                title VARCHAR(100) NOT NULL,
                author VARCHAR(100) NOT NULL,
                journal VARCHAR(100) NOT NULL,
                year INT(4) NOT NULL,
                creditability INT(1) NOT NULL,
                credReason VARCHAR(150) NOT NULL,
                credRatedBy VARCHAR(100) NOT NULL,
                reslevel VARCHAR(9) NOT NULL,
                pracname VARCHAR(50) NOT NULL,
                pracdesc VARCHAR(150) NOT NULL,
                benefit VARCHAR(150) NOT NULL,
                context VARCHAR(150) NOT NULL,
                credWho VARCHAR(150) NOT NULL,
                credWhat VARCHAR(150) NOT NULL,
                credWhere VARCHAR(150) NOT NULL,
                credWhen VARCHAR(150) NOT NULL,
                credHow VARCHAR(150) NOT NULL,
                credWhy VARCHAR(150) NOT NULL,
                result VARCHAR(150) NOT NULL,
                integrity VARCHAR(150)  NOT NULL,
                confidence INT(1) NOT NULL,
                confReason VARCHAR(150) NOT NULL,
                confRatedBy VARCHAR(100) NOT NULL,
                question VARCHAR(200) NOT NULL,
                method VARCHAR(10) NOT NULL,
                metrics VARCHAR(50) NOT NULL,
                participant VARCHAR(21) NOT NULL);";
            
            $insert_query = "INSERT INTO article_database (title, author, journal, year,
            creditability, credReason, credRatedBy, reslevel, pracname, pracdesc, benefit,
            context, credWho, credWhat, credWhere, credWhen, credHow, credWhy, result, integrity,
            confidence, confReason, confRatedBy, question, method, metrics, participant)
                VALUES('$title', '$author', '$journal', '$year', '$creditability', '$credReason',
                '$credRatedBy', '$reslevel', '$pracname', '$pracdesc', '$benefit', '$context',
                '$credWho', '$credWhat', '$credWhere', '$credWhen', '$credHow', '$credWhy',
                '$result', '$integrity', '$confidence', '$confReason', '$confRatedBy', '$question',
                '$method', '$metrics', '$participant');";
            
            if (!mysqli_query($dbConnect, $create_query)) {
                echo "<p>Error creating table: ", mysql_error($dbConnect), "</p>";
            }
            if (mysqli_query($dbConnect, $insert_query)) {
                echo "<p>Status posted.<br>";
            }
            else {
                echo "<p>Error posting status: ", mysql_error($dbConnect), "<p>";
            }
            mysqli_close($dbConnect);
        }
	?>
    <br><a href="index.php">Return to Home Page</a></p>
</body>
</html>
