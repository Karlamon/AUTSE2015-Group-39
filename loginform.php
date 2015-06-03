<!--Liang Chen (1392702)-->
<!--Qingyang Guo (1395160)-->
<!--Karl Smith (1390533)-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Login - Article Searcher</title>
    </head>
    <body>
        <header>
            <h1>Article Searcher</h1>
        </header>
    <bar>
        <div class="container">
            <div id="links">
				<li><a href="index.php">Home Page</a></li>
                <li class="selected"><a href="loginform.php">Login</a></br></li>
                <li><a href="createaccountform.php">Create account</a><br></li>
            </div>
        </div>
    </bar>
    <div id="text">
        <h2>Login</h2>
        *You must log in to submit a new article.
        <form action="loginprocess.php" method="get">
            <div class="row">
                <label class="col-15">Username</label>
                <input type="text" name="username" maxlength="30" size="20"</label>
            </div>
            <div class="row">
                <label class="col-15">Password</label>
                <input type="text" name="password" maxlength="30" size="20"</label>
            </div>
            <p><input type="submit" value="Login"></p>
        </form>
    </div>
</body>
</html>
