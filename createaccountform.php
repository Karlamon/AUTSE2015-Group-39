<!--Liang Chen (1392702)-->
<!--Qingyang Guo (1395160)-->
<!--Karl Smith (1390533)-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Submit new article - Article Searcher</title>
    </head>
    <body>
        <header>
            <h1>Article Searcher</h1>
        </header>
    <bar>
        <div class="container">
            <div id="links">
                <li><a href="index.php">Home Page</a></li>
                <li><a href="loginform.php">Login</a></li>
                <li class="selected"><a href="createaccountform.php">Create account</a></br></li>
            </div>
        </div>
    </bar>
    <div id="text">
        <h2>Create account</h2>
        <p>Create an account to submit articles.</p>
        <p>*All fields required.</p>
        <form action="createaccountprocess.php" method="post">
            <div class="row">
                <label class="col-15">Username</label>
                <input type="text" name="username" maxlength="30" size="20"</label></p>
            </div>
            <div class="row">
                <label class="col-15">Password</label>
                <input type="text" name="password" maxlength="30" size="20"</label></p>
            </div>
            <div class="row">
                <label class="col-15">Confirm Password</label>
                <input type="text" name="confirmpassword" maxlength="30" size="20"</label></p>
            </div>
            <p><input type="submit" value="Post"></p>
        </form>
    </div>
</body>
</html>
