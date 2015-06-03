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
            </div>
        </div>
    </bar>
    <div id="text">	
        <h2>Search article</h2>
        <form action="searcharticleprocess.php" method="get">
            <div class="row">
                <label class="col-20">Title</label>
                <input type="text" name="title" maxlength="100" size="100"</label></p>
            </div>
            <div class="row">
                <label class="col-20">Author</label>
                <input type="text" name="author" maxlength="30" size="30"</label></p>
            </div>
            <div class="row">
                <label class="col-20">Journal</label>
                <input type="text" name="journal" maxlength="20" size="20"</label></p>
            </div>
            <div class="row">
                <label class="col-20">Year</label>
                <input type="text" name="year" maxlength="4" size="4"</label></p>
            </div>
            <div class="row">
                <label class="col-20">Method</label>
                <select name="method">
                    <option value=""></option>
                    <option value="Case study">Case study</option>
                    <option value="Experiment">Experiment</option>
                    <option value="Interview">Interview</option>
                    <option value="Other">Other</option>
                </select></p>
            </div>
            <input type="submit" value="Search"></p>
        </form>
    </div>
</body>
</html>
