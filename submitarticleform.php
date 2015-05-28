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
    *Required fields.
    
	<form action="submitarticleprocess.php" method="post">
        <h3>Evidence source</h3>
        <p align="left"><label><b>Title:* </b>
            <input type="text" name="title" maxlength="100" size="100"</label></p>
        <p align="left"><label><b>Author(s):* </b>
            <input type="text" name="author" maxlength="100" size="100"</label></p>
        <p align="left"><label><b>Journal:* </b>
            <input type="text" name="journal" maxlength="100" size="100"</label></p>
        <p align="left"><label><b>Year:* </b>
            <input type="text" name="year" maxlength="4" size="4"</label></p>
        <p align="left"><label><b>Creditability rating:* </b>
            <br>&nbsp;&nbsp;
            <input type="radio" name="creditability" value="1">1
            <input type="radio" name="creditability" value="2">2
            <input type="radio" name="creditability" value="3">3
            <input type="radio" name="creditability" value="4">4
            <input type="radio" name="creditability" value="5">5</label></p>
        <p align="left"><label><b>Research level:* </b>
            <select name="reslevel">
                <option value=""></option>
                <option value="Level I">Level I</option>
                <option value="Level II">Level II</option>
                <option value="Level III">Level III</option>
                <option value="Level IV">Level IV</option>
                <option value="Level V">Level V</option>
                <option value="Level VI">Level IV</option>
                <option value="Level VII">Level VII</option>
            </select></p>
        
        <h3>Practice being investigated</h3>
        <p align="left"><label><b>Name:* </b>
            <input type="text" name="pracname" maxlength="50" size="50"</label></p>
        <p align="left"><label><b>Description (150 words max): </b><br>
            <textarea name="pracdesc" maxlength="150" rows="4" cols="50"></textarea></p>
        
        <h3>Evidence items</h3>
        <p align="left"><label><b>Benefit tested (150 words max): </b><br>
            <textarea name="benefit" maxlength="150" rows="4" cols="50"></textarea></p>
        <p align="left"><label><b>Study context (150 words max): </b><br>
            <textarea name="context" maxlength="150" rows="4" cols="50"></textarea></p>
        <p align="left"><label><b>Study result (150 words max): </b><br>
            <textarea name="result" maxlength="150" rows="4" cols="50"></textarea></p>
        <p align="left"><label><b>Method integrity (150 words max): </b><br>
            <textarea name="integrity" maxlength="150" rows="4" cols="50"></textarea></p>
        <p align="left"><label><b>Confidence rating:* </b>
            <br>&nbsp;&nbsp;
            <input type="radio" name="confidence" value="1">1
            <input type="radio" name="confidence" value="2">2
            <input type="radio" name="confidence" value="3">3
            <input type="radio" name="confidence" value="4">4
            <input type="radio" name="confidence" value="5">5</label></p>
        
        <h3>Research information</h3>
        <p align="left"><label><b>Question (100 words max):* </b><br>
            <textarea name="question" maxlength="100" rows="4" cols="50"></textarea></p>
        <p align="left"><label><b>Method:* </b>
        <select name="method">
            <option value=""></option>
            <option value="Case study">Case study</option>
            <option value="Experiment">Experiment</option>
            <option value="Interview">Interview</option>
            <option value="Other">Other</option>
        </select></p>
        <p align="left"><label><b>Metrics used: </b>
            <input type="text" name="metrics" maxlength="50" size="50"</label></p>
        <p><input type="submit" value="Post">
            <input type="reset" value="Reset"></p>
    </form>
    <p><a href="index.php">Return to Home Page</a></p>
</body>
</html>
