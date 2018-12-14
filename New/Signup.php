
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
     <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta content="width=1300, initial-scale=1 user-scalable=yes" name="viewport" />
    <meta content="Semantic-UI-Forest, collection of design, themes and templates for Semantic-UI." name="description" />
    <meta content="Semantic-UI, Theme, Design, Template" name="keywords" />
    <meta content="PPType" name="author" />
    <link href="icon.png" rel="icon" sizes="180x180" />
    <link href="icon.png" rel="icon" sizes="32x32" type="image/png" />
    <link href="icon.png" rel="icon" sizes="16x16" type="image/png" />
    <title>JobPortal</title>
    <link href="http://semantic-ui-forest.com/static/dist/semantic-ui/semantic.default.min.css" rel="stylesheet" type="text/css" />
    
    
  </head>
  <body class="template">
    
    <!--Page Contents-->
      
       
           <?php include 'include/header.php' ?>  
       <div style="background-color: #F1F1F1; padding: 2em">
          <div class="center aligned ui header"><h1>Submit a Job</h1></div>   
        </div>
        <div class="ui horizontal divider"><span style="font-size: 0.8em"><a href="Homepage.php">Home</a> > <a href="Search.php">Jobs</a></span></div>
        <br>
        <br>
      <br>
      
     
        <div class="center aligned stackable ui container">

            
               
               <form class="ui form blue segment">
                  <br>
                  <div class="field">
                    
                    <div class="two fields">
                      <div class="field">
                        <label><h3 style="text-align: left;">First Name</h3></label>
                        <input type="text" name="[first-name]" placeholder="First Name">
                      </div>
                      <div class="field">
                        <label><h3 style="text-align: left;">Last Name</h3></label>
                        <input type="text" name="[last-name]" placeholder="Last Name">
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="field">
                    <div class="two fields">
                      <div class="field">
                        <label><h3 style="text-align: left;">Email</h3></label>
                        <input type="Email" name="[email]" placeholder="E.g. JonDoe@email.com">
                      </div>
                      <div class="field">
                        <label><h3 style="text-align: left;">Submit a CV</h3></label>
                        <input type="file" name="[CV]" placeholder="Choose a file">
                      </div>
                    </div>
                  </div>
                  
                  
                  <br>
                    <div class="field">
                      <label><h3 style="text-align: left;">Additional Information</h3></label>
                      <textarea></textarea>
                    </div>
                  
                   <br>
                   <div class="field">
                    
                    <div class="two fields">
                      <div class="field">
                        <label><h3 style="text-align: left;">Career Level</h3></label>
                        <input type="text" name="[email]" placeholder="Entry-Level, Experienced etc.">
                      </div>
                      <div class="field">
                        <label><h3 style="text-align: left;">Years of Experience</h3></label>
                        <input type="number" name="[CV]" placeholder="In digits">
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="field">
                    
                    <div class="two fields">
                      <div class="field">
                        <label><h3 style="text-align: left;">Degree Level</h3></label>
                        <input type="text" name="[email]" placeholder="Graduate, Ph.D etc.">
                      </div>
                      <div class="field">
                        <label><h3 style="text-align: left;">Skills</h3></label>
                        <input type="text" name="[CV]" placeholder="">
                      </div>
                    </div>
                  </div>
                    
                  <br>
                  
                  <div class="field">
                    <div class="ui toggle checkbox">
                      <input type="checkbox" name="gift" tabindex="0" class="">
                      <label class="left aligned ui header">Notify in case of Updates</label>
                    </div>
                  </div>
                  <br>
                  <br>
                  <div class="huge blue ui button" tabindex="0">Register</div>
                </form>
              </div>
              </div>
           
      <br>
      <br>      
    
<?php include 'include/footer.php' ?>  
    </div>
    <script src="http://semantic-ui-forest.com/static/dist/semantic-ui/semantic.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/main.css">  
</body>
  <footer>
    
  </footer>
</html>