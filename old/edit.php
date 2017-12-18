<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Edit Data</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <fieldset>
                        <legend>Edit Data</legend>
                        <form name="form1" method="post" action="edit-action.php" class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="firstname">Firstname:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter firstname" value="<?php echo $firstname;?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="lastname">Lastname:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $lastname;?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $email;?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                                    <button type="submit" class="btn btn-info" name="update"><i class="fa fa-edit"></i> Update</button>
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