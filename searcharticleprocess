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
        $reslevel = ($_POST["reslevel"]);
        $pracname = ($_POST["pracname"]);
        $pracdesc = ($_POST["pracdesc"]);
        $benefit = ($_POST["benefit"]);
        $context = ($_POST["context"]);
        $result = ($_POST["result"]);
        if (!empty($_POST["confidence"])) {
            $confidence = ($_POST["confidence"]);
        }
        $integrity = ($_POST["integrity"]);
        $question = ($_POST["question"]);
        $method = ($_POST["method"]);
        $metrics = ($_POST["metrics"]);
        //$code_check = substr(bib_ref, 0);
        //if ((strlen($status_code) != 5) || ($code_check == "S")) {
        //    echo "<p>Status must have 5 characters including an \"S\" at the beginning.</p>
        //        <p><a href=\"javascript:history.back(1);\">Try again</a>";
        //}
        
        if (($title == null) || ($author == null) || ($journal == null) || ($year == null) ||
            (empty($_POST["creditability"])) || ($reslevel == "") || ($pracname == null) ||
            (empty($_POST["confidence"])) || ($question == null) || ($method == "")) {
            echo "<p>Required fields must be entered.</p>
                <p><a href=\"javascript:history.back(1);\">Try again</a>";
        }
        //else if (!preg_match("/^[a-zA-Z0-9 ,.!?]*$/", $status)) {
        //    echo "<p>The status input only accepts the following characters:<br>a-zA-Z0-9 ,.!?</p>
        //        <p><a href=\"javascript:history.back(1);\">Try again</a>";
        //}
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
                title VARCHAR(100) NOT NULL PRIMARY KEY,
                author VARCHAR(100) NOT NULL,
                journal VARCHAR(100) NOT NULL,
                year INT(4) NOT NULL,
                creditability INT(1) NOT NULL,
                reslevel VARCHAR(9) NOT NULL,
                pracname VARCHAR(50) NOT NULL,
                pracdesc VARCHAR(150),
                benefit VARCHAR(150),
                context VARCHAR(150),
                result VARCHAR(150),
                integrity VARCHAR(150),
                confidence INT(1) NOT NULL,
                question VARCHAR(100) NOT NULL,
                method VARCHAR(10),
                metrics VARCHAR(50) NOT NULL);";
            
            $insert_query = "INSERT INTO article_database (title, author, journal, year,
                creditability, reslevel, pracname, pracdesc, benefit, context, result, integrity,
                confidence, question, method, metrics)
                VALUES('$title', '$author', '$journal', '$year', '$creditability', '$reslevel',
                '$pracname', '$pracdesc', '$benefit', '$context', '$result', '$integrity',
                '$confidence', '$question', '$method', '$metrics');";
            //$check_query = "SELECT * FROM article_database;";
            //WHERE status_code = '$status_code';";
            if (!mysqli_query($dbConnect, $create_query)) {
                echo "<p>Error creating table: ", mysql_error($dbConnect), "</p>";
            }
            //$check_results = mysqli_query($dbConnect, $check_query) or die(mysql_error());
            //if (mysqli_num_rows($check_results) > 0) {
            //    echo "<p>Status code already exists.</p>
            //        <p><a href=\"javascript:history.back(1);\">Try Again</a><br>
            //        <a href=\"index.php\">Return to Home Page</a></p>
            //        <hr>
            //        <div class = footer>
            //            Site created by Karl Smith (1390533).<br>
            //            <b>Email:</b> <a href=\"mailto:zbv9522@aut.ac.nz\">zbv9522@aut.ac.nz</a>
            //        </div>";
            //    die();
            //}
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
