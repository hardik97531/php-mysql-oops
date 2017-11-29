<?php
	header('Content-type:application/json');
	include_once("classes/Crud.php");
    $crud = new Crud();
    $result = $crud->getData("SELECT id,firstname,lastname,email FROM `MyGuests` ORDER BY `id` DESC");
    $i=0;
    foreach($result as $res){        
    	$result[$i]['action'] = '<span class="hidden">'.$res['id'].'</span>
                                <a class="btn btn-primary" data-toggle="modal" data-target="#ViewModal" onclick="view_details('.$res['id'].')" style="padding: 5px 10px;border-radius: 0px;" data-toggle="tooltip" Title="View Profile"><i class="fa fa-search"></i></a>
	        				    <a class="btn btn-info" onclick="get_details('.$res['id'].')" data-toggle="modal" data-target="#EditModal" style="padding: 5px 10px;border-radius: 0px;" data-toggle="tooltip" Title="Edit Profile"><i class="fa fa-edit"></i></a>
	        				    <a class="btn btn-danger" href="javascript:;" onClick="confirm_delete('.$res['id'].')" style="padding: 5px 10px;border-radius: 0px;" data-toggle="tooltip" Title="Delete Profile"><i class="fa fa-close"></i></a>';
	    $i++;
    }
    $data = json_encode($result);
?>
{
  	"data": <?php
		echo $data;
	?>
}