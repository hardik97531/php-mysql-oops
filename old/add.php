<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8" />
        <title>Add Data</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <fieldset>
                        <legend>Add Data</legend>
                        <form action="add-action.php" method="post" name="form1" class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="firstname">Firstname:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter firstname" autofocus />
                                </div>
                            </div>   
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="lastname">Lastname</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter lastname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default" name="Submit"><i class="fa fa-plus"></i> Add</button>
                                    <a class="btn btn-default" href="index.php"><i class="fa fa-close"></i> Cancel</a>
                                </div>
                            </div>
                        </form>
                    </fieldset>                    
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>