<!DOCTYPE html>
<html>


<head>   
   
   
    <title>Semantic-UI-Forest, collection of design, themes and templates for Semantic-UI.</title>
    <link href="http://semantic-ui-forest.com/static/dist/semantic-ui/semantic.default.min.css" rel="stylesheet" type="text/css" />
    <link href="http://semantic-ui-forest.com/static/stylesheets/default.css" rel="stylesheet" type="text/css" />
    <script src="http://semantic-ui-forest.com/static/dist/jquery/jquery.min.js"></script>
  </head>

  <body class="template">
     <?php include 'include/header.php' ?>  
    <div class="ui grid">
      <div class="row">
        <div class="column" id="sidebar">
          <div class="ui secondary vertical fluid menu">
            <a class="active item">Overview</a><a class="item">Reports</a><a class="item">Analytics</a><a class="item">Export</a>
            <div class="ui hidden divider"></div>
            <a class="item">Nav item</a><a class="item">Nav item again</a><a class="item">One more nav</a><a class="item">Another nav item</a><a class="item">More navigation</a>
            <div class="ui hidden divider"></div>
            <a class="item">Macintosh</a><a class="item">Linux</a><a class="item">Windows</a>
          </div>
        </div>
        <div class="column" id="content">
          <div class="ui grid">
            <div class="row">
              <h1 class="ui huge header">
                Dashboard
              </h1>
            </div>
            <div class="ui divider"></div>
            <div class="four column center aligned row">
              <div class="column">
                <img class="ui centered small circular image" src="http://semantic-ui-forest.com/static/images/templates/semantic-ui/wireframe/square-image.png" />
                <div class="ui hidden divider"></div>
                <div class="ui large green label">
                  Label
                </div>
                <p>
                  Something else
                </p>
              </div>
              <div class="column">
                <img class="ui centered small circular image" src="http://semantic-ui-forest.com/static/images/templates/semantic-ui/wireframe/square-image.png" />
                <div class="ui hidden divider"></div>
                <div class="ui large blue label">
                  Label
                </div>
                <p>
                  Something else
                </p>
              </div>
              <div class="column">
                <img class="ui centered small circular image" src="http://semantic-ui-forest.com/static/images/templates/semantic-ui/wireframe/square-image.png" />
                <div class="ui hidden divider"></div>
                <div class="ui large pink label">
                  Label
                </div>
                <p>
                  Something else
                </p>
              </div>
              <div class="column">
                <img class="ui centered small circular image" src="http://semantic-ui-forest.com/static/images/templates/semantic-ui/wireframe/square-image.png" />
                <div class="ui hidden divider"></div>
                <div class="ui large red label">
                  Label
                </div>
                <p>
                  Something else
                </p>
              </div>
            </div>
            <div class="ui hidden section divider"></div>
            <div class="row">
              <h1 class="ui huge header">
                Jobs Posted
              </h1>
              <div class="ui primary button" style="position: absolute; right: 0em" id="Insert">
                <i class="plus icon"></i> Add Job
              </div>
            </div>
            <div class="ui divider"></div>
            <div class="row">
              <table class="ui single line striped selectable table">
                <thead>
                  <tr>
                    <th>
                      #
                    </th>
                    <th>
                      Header
                    </th>
                    <th>
                      Header
                    </th>
                    <th>
                      Header
                    </th>
                    <th id="actions">
                      Actions
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      1,001
                    </td>
                    <td>
                      Lorem
                    </td>
                    <td>
                      ipsum
                    </td>
                    <td>
                      dolor
                    </td>
                    <td id="actions">
                      <div class="ui right pointing dropdown">
                        <i class="ellipsis vertical link icon"></i>
                        <div class="menu">
                          <div class="item" id="Update">Update</div>
                          <div class="item" id="Delete">Delete</div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      1,002
                    </td>
                    <td>
                      amet
                    </td>
                    <td>
                      consectetur
                    </td>
                    <td>
                      adipiscing
                    </td>
                    <td id="actions">
                      <i class="ellipsis vertical link icon"></i>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      1,003
                    </td>
                    <td>
                      Integer
                    </td>
                    <td>
                      nec
                    </td>
                    <td>
                      odio
                    </td>
                    <td id="actions">
                      <i class="ellipsis vertical link icon"></i>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      1,003
                    </td>
                    <td>
                      libero
                    </td>
                    <td>
                      Sed
                    </td>
                    <td>
                      cursus
                    </td>
                    <td id="actions">
                      <i class="ellipsis vertical link icon"></i>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      1,004
                    </td>
                    <td>
                      dapibus
                    </td>
                    <td>
                      diam
                    </td>
                    <td>
                      Sed
                    </td>
                    <td id="actions">
                      <i class="ellipsis vertical link icon"></i>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      1,005
                    </td>
                    <td>
                      Nulla
                    </td>
                    <td>
                      quis
                    </td>
                    <td>
                      sem
                    </td>
                    <td id="actions">
                      <i class="ellipsis vertical link icon"></i>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      1,006
                    </td>
                    <td>
                      nibh
                    </td>
                    <td>
                      elementum
                    </td>
                    <td>
                      Duis
                    </td>
                    <td id="actions">
                      <i class="ellipsis vertical link icon"></i>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

<div class="ui modal InsertModal">
  <i class="close icon"></i>
  <div class="header">
    Update Job Description
  </div>
  <form class="ui form blue segment">
                  <br>
                  <div class="field">
                    
                    <div class="two fields">
                      <div class="field">
                        <label><h3 style="text-align: left;">Job Title</h3></label>
                        <input type="text" name="[first-name]" placeholder="First Name">
                      </div>
                      <div class="field">
                        <label><h3 style="text-align: left;">Job Location</h3></label>
                        <input type="text" name="[last-name]" placeholder="Last Name">
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="field">
                    <div class="two fields">
                      <div class="field">
                        <label><h3 style="text-align: left;">Required Career Level</h3></label>
                        <input type="Email" name="[email]" placeholder="E.g. JonDoe@email.com">
                      </div>
                      <div class="field">
                        <label><h3 style="text-align: left;">No. Of Positions</h3></label>
                        <input type="number" name="[CV]" placeholder="Choose a file">
                      </div>
                    </div>
                  </div>
                  
                  
                  <br>
                    <div class="field">
                      <label><h3 style="text-align: left;">Job Description</h3></label>
                      <textarea></textarea>
                    </div>
                  
                   <br>
                   <div class="field">
                    <label><h3 style="text-align: left;">Years of Experience</h3></label>
                    <div class="two fields">
                      <div class="field">
                        
                        <input type="number" name="[email]" placeholder="Min">
                      </div>
                      <div class="field">
                        
                        <input type="number" name="[CV]" placeholder="Max">
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="field">
                    <label><h3 style="text-align: left;">Salary Range</h3></label>
                    <div class="two fields">
                      <div class="field">
                        
                        <input type="number" name="[email]" placeholder="From">
                      </div>
                      <div class="field">
                        
                        <input type="number" name="[CV]" placeholder="To">
                      </div>
                    </div>
                  </div>
                  <br>
                  <br>
                  <div class="actions">
    <div class="ui black deny button">
      Cancel
    </div>
    <div class="ui blue right labeled icon button">
      Update
      <i class="checkmark icon"></i>
    </div>
  </div>
</form>
  
</div>

<div class="ui modal DeleteModal">
  <i class="close icon"></i>
  <div class="header">
    Delete Job
  </div>
  <div class="content">
    <div class="description">
      <div class="ui header">This action is permanent</div>
      <p>Once this job has been deleted, it cannot be restored without creating a new job.</p>
      <p>Are you sure you want to continue?</p>
    </div>
  </div>
  <div class="actions">
    <div class="ui black deny button">
      Cancel
    </div>
    <div class="ui blue right labeled icon button">
      Delete
      <i class="checkmark icon"></i>
    </div>
  </div>
</div>

    <style type="text/css">
      body {
        display: relative;
      }
      
      #sidebar {
        position: fixed;
        top: 0px;
        left: 0;
        bottom: 0;
        width: 18%;
        background-color: #f5f5f5;
        padding: 0px;
      }
      #sidebar .ui.menu {
        margin: 2em 0 0;
        font-size: 16px;
      }
      #sidebar .ui.menu > a.item {
        color: #337ab7;
        border-radius: 0 !important;
      }
      #sidebar .ui.menu > a.item.active {
        background-color: #337ab7;
        color: white;
        border: none !important;
      }
      #sidebar .ui.menu > a.item:hover {
        background-color: #4f93ce;
        color: white;
      }
      
      #content {
        margin-left: 19%;
        width: 81%;
        margin-top: 3em;
        padding-left: 3em;
        float: left;
      }
      #content > .ui.grid {
        padding-right: 4em;
        padding-bottom: 3em;
      }
      #content h1 {
        font-size: 36px;
      }
      #content .ui.divider:not(.hidden) {
        margin: 0;
      }
      #content table.ui.table {
        border: none;
      }
      #content table.ui.table thead th {
        border-bottom: 2px solid #eee !important;
      }
      #actions{
        text-align: right;
        padding-right: 2em;
      }
      .pageHeader{
        padding-left: 18%;
      }
      @media only screen and (max-width: 700px) {

        #sidebar{
          display: none;
        }

        #content{
          margin-left: 3%;
          width: 100%;
        }
      }
    </style>
    <script src="http://semantic-ui-forest.com/static/dist/semantic-ui/semantic.min.js"></script>
    <script type="text/javascript">
      $('.ui.dropdown').dropdown();

      $("#Update").click(function(){
        $(".InsertModal").modal('show');
  });
  $(".InsertModal").modal({
    closable: true
  });

      $("#Delete").click(function(){
        $(".DeleteModal").modal('show');
  });
  $(".DeleteModal").modal({
    closable: true
  });

      $("#Insert").click(function(){
        $(".InsertModal").modal('show');
  });
  $(".InsertModal").modal({
    closable: true
  });

    </script>
    <link rel="stylesheet" type="text/css" href="css/main.css">
  </body>
  <footer>
    
  </footer>

</html>