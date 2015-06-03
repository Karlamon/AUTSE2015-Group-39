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
            </div>
        </div>
    </bar>
    <div id="text">	
        <h2>Submit new article</h2>
        *All fields required.
        <h3>Evidence source</h3>
        <form action="submitarticleprocess.php" method="post">
            <div class="row">
                <label class="col-30">Title</label>
                <input type="text" name="title" maxlength="100" size="100"</label></p>
                <label class="col-30">Author(s)</label>
                <input type="text" name="author" maxlength="100" size="100"</label></p>
                <label class="col-30">Journal</label>
                <input type="text" name="journal" maxlength="100" size="100"</label></p>
                <label class="col-30">Year</label>
                <input type="text" name="year" maxlength="4" size="4"</label></p>
                <div class="rate-panel panel panel-success">  
                    <div class="panel-heading">  
                        <h4 class="panel-title">Creditability</h4>  
                    </div>  
                    <div class="panel-body">  
                        <fieldset>
                            <label class="col-30">Rating</label>  
                            <div class="form-group"> 
                                &nbsp;&nbsp;
                                <input type="radio" name="creditability" value="1">1
                                <input type="radio" name="creditability" value="2">2
                                <input type="radio" name="creditability" value="3">3
                                <input type="radio" name="creditability" value="4">4
                                <input type="radio" name="creditability" value="5">5                            
                                <p align="left">
                                    <label>
                                        Reason (150 words max) </label> 
                                    <br>
                                    <textarea name="credReason" maxlength="150" rows="4" cols="50"></textarea>
                                </p>
                                <p align="left">
                                    <label>Rated by </label>
                                    <input type="text" name="credRatedBy" maxlength="100" size="30"
                                           </label>
                                </p>
                            </div> 
                        </fieldset>    
                    </div>
                </div> 

                <p align="left"><label>Research level </label>
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
            </div>
            <h3>Practice being investigated</h3>
            <div class="row">
                <p align="left"><label>Name: </label>
                    <input type="text" name="pracname" maxlength="50" size="50"</label></p>
                <p align="left"><label>Description (150 words max): </label><br>
                    <textarea name="pracdesc" maxlength="150" rows="4" cols="50"></textarea></p>
            </div>
            <h3>Evidence items</h3>
            <div class="row">
                <p align="left"><label>Benefit tested (150 words max): </label><br>
                    <textarea name="benefit" maxlength="150" rows="4" cols="50"></textarea></p>
                <p align="left"><label>Study context (150 words max): </label><br>
                    <textarea name="context" maxlength="150" rows="4" cols="50"></textarea></p>
                <div class="rate-panel panel panel-success">  
                    <div class="panel-heading">  
                        <h4 class="panel-title">Study context</h4>  
                    </div>  
                    <div class="panel-body">  
                        <fieldset>  
                            <div class="form-group">                          
                                <p align="left"><label>Who: </label>
                                    <input type="text" name="credWho" maxlength="100" size="30"</label></p>
                                <p align="left"><label>What (150 words max): </label><br>
                                    <textarea name="credWhat" maxlength="150" rows="4" cols="50"></textarea></p>
                                <p align="left"><label>Where (150 words max): </label><br>
                                    <textarea name="credWhere" maxlength="150" rows="4" cols="50"></textarea></p>
                                <p align="left"><label>When: </label>
                                    <input type="text" name="credWhen" maxlength="100" size="30"</label></p>
                                <p align="left"><label>How (150 words max): </label><br>
                                    <textarea name="credHow" maxlength="150" rows="4" cols="50"></textarea></p>
                                <p align="left"><label>Why (150 words max): </label><br>
                                    <textarea name="credWhy" maxlength="150" rows="4" cols="50"></textarea></p>
                            </div> 
                        </fieldset>    
                    </div>
                </div> 
                <p align="left"><label>Study result (150 words max): </label><br>
                    <textarea name="result" maxlength="150" rows="4" cols="50"></textarea></p>
                <p align="left"><label>Method integrity (150 words max): </label><br>
                    <textarea name="integrity" maxlength="150" rows="4" cols="50"></textarea></p>

                <div class="rate-panel panel panel-success">  
                    <div class="panel-heading">  
                        <h4 class="panel-title">Confidence</h4>  
                    </div>  
                    <div class="panel-body">  
                        <fieldset>
                            <label class="panel-title">Rating:</label>
                            <div class="form-group"> 
                                &nbsp;&nbsp;
                                <input type="radio" name="confidence" value="1">1
                                <input type="radio" name="confidence" value="2">2
                                <input type="radio" name="confidence" value="3">3
                                <input type="radio" name="confidence" value="4">4
                                <input type="radio" name="confidence" value="5">5

                                <p align="left">
                                    <label>Reason (150 words max): </label>
                                    <br>
                                    <textarea name="confReason" maxlength="150" rows="4" cols="50"></textarea>
                                </p>
                                <p align="left">
                                    <label>Rated by: </label>
                                    <input type="text" name="confRatedBy" maxlength="100" size="30"
                                </p>
                            </div> 
                        </fieldset>   
                    </div>
                </div> 		
            </div>
            <h3>Research information</h3>
            <div class="row">
                <p align="left"><label>Question (200 words max): </label><br>
                    <textarea name="question" maxlength="100" rows="4" cols="50"></textarea></p>
                <p align="left"><label>Method: </label>
                    <select name="method">
                        <option value=""></option>
                        <option value="Case study">Case study</option>
                        <option value="Experiment">Experiment</option>
                        <option value="Interview">Interview</option>
                        <option value="Other">Other</option>
                    </select></p>
                <p align="left"><label>Metrics used: </label>
                    <input type="text" name="metrics" maxlength="50" size="50"</label></p>
                <p align="left"><label>Nature of the Participants: </label>
                    <select name="participant">
                        <option value=""></option>
                        <option value="University">University</option>
                        <option value="Research Organization">Research Organization</option>
                        <option value="Professor">Professor</option>
                        <option value="Expert">Expert</option>
                        <option value="Other">Other</option>
                    </select></p>
            </div>
            <p><input type="submit" value="Post">
                <input type="reset" value="Reset"></p>
        </form>
    </div>
</body>
</html>
