<!DOCTYPE html>
<html>
	<head>		
	    <title>Homepage</title>
	    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css" />
	    <link rel="stylesheet" type="text/css" href="css/responsive.bootstrap.min.css" />
	    <link rel="stylesheet" type="text/css" href="css/select2.min.css" />
	    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	    <link rel="stylesheet" type="text/css" href="css/toastr.min.css" />
	    <link rel="stylesheet" type="text/css" href="css/sweetalert.min.css" />
	    <link rel="stylesheet" type="text/css" href="css/style.min.css" />
	</head>
	<body>
		<!-- Container -->
		<div class="container">
			<!-- Row -->
			<div class="row">
				<!-- Column -->
				<div class="col-md-12">
					<blockquote>
						<p style="font-size: 14.5px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					</blockquote>
					<div class="pull-right">
						<button type="button" class="btn btn-success" data-toggle="modal" data-target="#AddModal"><i class="fa fa-plus"></i> Add New Data</button>						
					</div>
					<div class="clearfix"></div>
					<fieldset>
                        <legend>View Data</legend>
					    <table id="dataTable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" style="margin-top:10px;width: 100%;">
					    	<thead>
							    <tr bgcolor="#ddd" style="color: #23527c;">
							    	<th class="hidden">ID</th>
							        <th>Firstname</th>
							        <th>Lastname</th>
							        <th>Email</th>							        
							        <th class="text-center">Action</th>
							    </tr>
						    </thead>
						    <tfoot>
							    <tr bgcolor="#ddd" style="color: #23527c;">
							    	<th class="hidden">ID</th>
							        <th>Firstname</th>
							        <th>Lastname</th>
							        <th>Email</th>							        
							        <th>Action</th>
							    </tr>
						    </tfoot>						
					    </table>
					</fieldset>
				</div>
			</div>
		</div>
		<!-- Modals -->
		<div id="AddModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Add Data</h4>
					</div>
					<div class="modal-body">
                        <form action="add-action.php" method="post" name="form1" id="add-user-form" class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="firstname">Firstname:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter firstname" autofocus required />
                                </div>
                            </div>   
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="lastname">Lastname</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter lastname" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default" name="Submit" id="Submit"><i class="fa fa-plus"></i> Add</button>
                                </div>
                            </div>
                        </form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<div id="EditModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Edit Data</h4>
					</div>
					<div class="modal-body">
                        <form action="edit-action.php" method="post" name="form1" id="edit-user-form" class="form-horizontal">
                        	<input type="hidden" name="id" id="id" />
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="firstname">Firstname:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter firstname" autofocus required />
                                </div>
                            </div>   
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="lastname">Lastname</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter lastname" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default" name="Update" id="Update"><i class="fa fa-edit"></i> Update</button>
                                </div>
                            </div>
                        </form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>		
		<div id="ViewModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">View Data</h4>
					</div>
					<div class="modal-body">
                        <div class="card hovercard">
	                        <div class="cardheader" style="background-image: url('images/4.jpg');">
	                        </div>
	                        <div class="avatar">
	                            <img alt="" src="images/2.jpeg">
	                        </div>
	                        <div class="info">
	                            <div class="title">
	                                <a target="_blank" href="#" id="full-name"></a>
	                            </div>
	                            <div class="desc"><a id="view-email" href="#"></a></div>
	                        </div>
	                    </div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<!--- JavaScripts -->
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
		<script type="text/javascript" src="js/dataTables.responsive.min.js"></script>
		<script type="text/javascript" src="js/responsive.bootstrap.min.js"></script>
		<script type="text/javascript" src="js/select2.full.min.js"></script>
		<script type="text/javascript" src="js/toastr.min.js"></script>
		<script type="text/javascript" src="js/sweetalert.min.js"></script>
		<script type="text/javascript" src="js/jquery.validate.min.js"></script>
		<script type="text/javascript" src="js/scripts.min.js"></script>
	</body>
</html>