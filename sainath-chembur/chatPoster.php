
<?php

$con = mysqli_connect("localhost","horizb9k_swapnil","az$==TO,qeWx,%IK1","horizb9k_property");


if(isset($_POST['id']))
{
	$text = strip_tags(stripcslashes($_POST['text']));
 	$id = strip_tags(stripcslashes($_POST['id']));
 	$time = strip_tags(stripcslashes($_POST['time']));
 	$country = $_POST['country'];
 	$project_name = 'horizonfp';
    $req1 = $_POST['requirement'];
 	$req = 'Requirement:'.$req1;
   	if(!empty($id))
 	{
 	    if(!empty($country))
 	    {
 	    mysqli_query($con,"INSERT INTO chat (session_id,message,time,project_name)VALUES ('$id','$country','$time','$project_name')");
 	    }
 	    elseif(!empty($text) && empty($req1))
 	    {
 	     mysqli_query($con,"INSERT INTO chat (session_id,message,time,project_name)VALUES ('$id','$text','$time','$project_name')");   
 	    }
 	    else
 	    {
 	     mysqli_query($con,"INSERT INTO chat (session_id,message,time,project_name)VALUES ('$id','$req','$time','$project_name')");
 	     $text = $req1;	
 	    }
		echo '<li class="message right appeared">
                                
                                <div class="text_wrapper">
                                    <div class="text1">'.$text.'</div>
                                    </div>
                                    </li>';
 	}


}

?>
