<?php
    
    $logged=$_COOKIE['pass'];
    
    if(isset($_POST['exit'])) 
    {
        setcookie("user", 0, time() - 86400, "/");  
        setcookie("pass", 0, time() - 86400, "/");
        $logged=0;
    }
        
    if($logged==0)
    {
        header("Location: index.php");
        die();
    }

?>

<html>
	<head>
            <title>
                Hello World
            </title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>

	<body>
            <div class="table-responsive">
			
				<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
				
    				<div class="container">
    					<div class="row">
    						<div class="jumbotron text-center">
    						      <h1>Hello World</h1>
    						      <input class="btn btn-default" align="center" type="submit" name="exit" value="Logout">
    						</div>
    					</div>
    					
                         <div class="row">
                              <div class="col-md-4">
                                <div class="thumbnail">
                                  <a href="index3.php">
                                    <img src="http://www.w3schools.com/w3images/lights.jpg" alt="Lights" style="width:100%">
                                    <div class="caption">
                                      <p>Lorem ipsum...</p>
                                    </div>
                                  </a>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="thumbnail">
                                  <a href="index3.php">
                                    <img src="http://www.w3schools.com/w3images/nature.jpg" alt="Nature" style="width:100%">
                                    <div class="caption">
                                      <p>Lorem ipsum...</p>
                                    </div>
                                  </a>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="thumbnail">
                                  <a href="index3.php">
                                    <img src="http://www.w3schools.com/w3images/fjords.jpg" alt="Fjords" style="width:100%">
                                    <div class="caption">
                                      <p>Lorem ipsum...</p>
                                    </div>
                                  </a>
                                </div>
                              </div>
                        </div>
                        
    				</div>		
				
				</form>
			
            </div>
	</body>
</html>

