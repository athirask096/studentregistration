
<!----------------------Admin:add result page--------------------------------------------->

<?php include("base.php");
?>
<div class="container-fluid bg-style media1">
			
	<div class="row">
					
		<div class="col-md-12 log-style">
	<form name="addstudent" method="post" class="m-auto py-3 text-light p-3 form-style rounded">	
	
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='reg_no' required="required" placeholder="reg_no">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='username' required="required" placeholder="username">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='coursecode' required="required" placeholder="coursecode">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='subjectname' required="required" placeholder="subjectname">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='result' required="required" placeholder="result">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='credit' required="required" placeholder="credit">
	<input type="text" class="form-control inputcomponent mt-md-3 space" name='totalgpa' required="required" placeholder="totalgpa">
	
		
	<button type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit">submit</button>
								
	<button type="button" class="btn btn-default loginbutton m-t-5">
	<span class="google-button__icon"></span>
						

</form>

<?php 
if(isset($_POST['submit']))
	{
		include '../controller/MyController.php';
		$obj=new MyController();
		$obj->resultinsert($_POST['reg_no'],$_POST['username'],$_POST['coursecode'],$_POST['subjectname'],$_POST['result'],$_POST['credit'],$_POST['totalgpa']);
	
	}
?>

</div>
</div>
</div>