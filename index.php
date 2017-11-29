<!DOCTYPE html>
<html>
	<head>		
	    <title>Homepage</title>
	    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	    <link rel="stylesheet" type="text/css" href="css/mdb.min.css" />
	    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css" />
	    <link rel="stylesheet" type="text/css" href="css/responsive.bootstrap.min.css" />
	    <link rel="stylesheet" type="text/css" href="css/select2.min.css" />
	    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
	    <link rel="stylesheet" type="text/css" href="css/toastr.min.css" />
	    <link rel="stylesheet" type="text/css" href="css/sweetalert.min.css" />
	    <link rel="stylesheet" type="text/css" href="css/style.min.css" />
	</head>
	<body>
		<nav class="navbar navbar-inverse" style="border-radius: 0px;">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Test</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">Page 1</a></li>
						<li><a href="#">Page 2</a></li>
						<li><a href="#">Page 3</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					</ul>
				</div>
			</div>
		</nav> 
		<!-- Container -->
		<div class="container">
			<!-- Row -->
			<div class="row">
				<!-- Column -->
				<div class="col-md-12">
					<blockquote class="blockquote bq-primary">
						<p class="bq-title">Info notification</p>
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
                        	<p class="h5 text-center mb-4">Add User</p>
							<div class="md-form">
								<i class="fa fa-user prefix grey-text"></i>
							    <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Enter firstname" required />
							    <label for="firstname">Firstname</label>
							</div>
							<div class="md-form">
								<i class="fa fa-user prefix grey-text"></i>
							    <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Enter lastname" required />
							    <label for="lastname">Lastname</label>
							</div>
							<div class="md-form">
								<i class="fa fa-envelope prefix grey-text"></i>
							    <input type="text" id="email" name="email" class="form-control" placeholder="Enter email" required />
							    <label for="email">Email</label>
							</div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default" name="Submit" id="Submit"><i class="fa fa-plus"></i> Add</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                                </div>
                            </div>
                        </form>
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
                        	<p class="h5 text-center mb-4">Edit User</p>
                        	<input type="hidden" name="id" id="id" />
                        	<div class="md-form">
                        		<i class="fa fa-user prefix grey-text"></i>
							    <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Enter firstname" autofocus required />
							    <label for="firstname" class="active">Firstname</label>
							</div>
							<div class="md-form">
								<i class="fa fa-user prefix grey-text"></i>
							    <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Enter lastname" required />
							    <label for="lastname" class="active">Lastname</label>
							</div>
							<div class="md-form">
								<i class="fa fa-envelope prefix grey-text"></i>
							    <input type="text" id="email" name="email" class="form-control" placeholder="Enter email" required />
							    <label for="email" class="active">Email</label>
							</div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default" name="Update" id="Update"><i class="fa fa-edit"></i> Update</button>
                                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
                                </div>
                            </div>
                        </form>
					</div>
					<!-- <div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div> -->
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
		<!--Footer-->
		<footer class="page-footer center-on-small-only mdb-color lighten-3">
		    <!--Footer Links-->
		    <div class="container">
		        <div class="row my-4">
		            <!--First column-->
		            <div class="col-md-4 col-lg-4">
		                <h5 class="title mb-4 font-bold">Footer Content</h5>
		                <p>Here you can use rows and columns here to organize your footer content.</p>
		                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet numquam iure provident
		                    voluptate esse quasi, veritatis totam voluptas nostrum. </p>
		            </div>
		            <!--Second column-->
		            <div class="col-md-2 col-lg-2 ml-auto">
		                <h5 class="title mb-4 font-bold">About</h5>
		                <ul>
		                    <p><a href="#!">PROJECTS</a></p>
		                    <p><a href="#!">ABOUT US</a></p>
		                    <p><a href="#!">BLOG</a></p>
		                    <p><a href="#!">AWARDS</a></p>
		                </ul>
		            </div>		            
		            <!--Third column-->
		            <div class="col-md-4 col-lg-3">
		                <h5 class="title mb-4 font-bold">Adress</h5>
		                <!--Info-->
		                <p><i class="fa fa-home mr-3"></i> New York, NY 10012, USA</p>
		                <p><i class="fa fa-envelope mr-3"></i> info@example.com</p>
		                <p><i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
		                <p><i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
		            </div>		            
		            <!--Fourth column-->
		            <div class="col-md-2 col-lg-2 text-center">
		                <h5 class="title mb-4 font-bold">Follow Us</h5>
		                <!--Social buttons-->
		                <div class="footer-socials mb-5 flex-center">
		                    <!--Facebook-->
		                    <a class="icons-sm fb-ic"><i class="fa fa-facebook fa-lg white-text mr-md-4"> </i></a>
		                    <!--Twitter-->
		                    <a class="icons-sm tw-ic"><i class="fa fa-twitter fa-lg white-text mr-md-4"> </i></a>
		                    <!--Google +-->
		                    <a class="icons-sm gplus-ic"><i class="fa fa-google-plus fa-lg white-text mr-md-4"> </i></a>
		                    <!--Linkedin-->
		                    <a class="icons-sm li-ic"><i class="fa fa-linkedin fa-lg white-text mr-md-4"> </i></a>
		                    <!--Instagram-->
		                    <a class="icons-sm ins-ic"><i class="fa fa-instagram fa-lg white-text mr-md-4"> </i></a>
		                    <!--Pinterest-->
		                    <a class="icons-sm pin-ic"><i class="fa fa-pinterest fa-lg white-text"> </i></a>
		                </div>
		            </div>
		            <!--/.Fourth column-->
		        </div>
		    </div>
		    <!--/.Footer Links-->
		    <!--Copyright-->
		    <div class="footer-copyright">
		        <div class="container-fluid">
		            &copy; 2017 Copyright: <a href="https://www.hardikchauhan.com"> www.hardikchauhan.com </a>
		        </div>
		    </div>
		    <!--/.Copyright-->
		</footer>
		<!--/.Footer-->
		<!--- JavaScripts -->
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/mdb.min.js"></script>
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