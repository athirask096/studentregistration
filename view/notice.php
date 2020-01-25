
<!----------------------Admin:add notice page--------------------------------------------->

<?php include("base.php");
?>
<div class="container-fluid bg-style media1">
			
	<div class="row">
					
		<div class="col-md-12 log-style">
	<form name="addstudent" method="post" class="m-auto py-3 text-light p-3 form-style rounded">	
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='semester' required="required" placeholder="semester">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='noticeid' required="required" placeholder="noticeid">
	
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='title' required="required" placeholder="title">
	<input type="date" class="form-control inputcomponent mt-md-3 space" name='beginningdate' required="required" placeholder="beginning date">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='author' required="required" placeholder="author">
	<input type="date" class="form-control inputcomponent mt-md-3 space" name='endingdate' required="required" placeholder="ending date">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='description' required="required" placeholder="description">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='adminid' required="required" placeholder="adminid">
	
		
	<button type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit">submit</button>
								
	<button type="button" class="btn btn-default loginbutton m-t-5">
	<span class="google-button__icon"></span>
						

</form>

<?php 
if(isset($_POST['submit']))
	{
		include '../controller/MyController.php';
		$obj=new MyController();
		$obj->noticeinsert($_POST['semester'],$_POST['noticeid'],$_POST['title'],$_POST['beginningdate'],$_POST['author'],$_POST['endingdate'],$_POST['description'],$_POST['adminid']);
	
	}
?>

</div>
</div>
</div>