<?php include ('include/header.php');?>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<script src="js/jquery-1.11.2.min.js"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="css/date/jquery.datepick.css"> 
	<script type="text/javascript" src="js/date/jquery.plugin.js"></script> 
	<script type="text/javascript" src="js/date/jquery.datepick.js"></script>
	
<center>
<div class="container" style="margin-top: 60px;">
<form action="" method="POST">
		<div class="col-sm-4 form-group">
			
				<div class="row">
					<div class="col-sm-5 form-group">
						<!--<div class="input-group">
							<span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-calendar"></i></span>
								<input type="text" placeholder="Reading start" id="defaultPopup" class="form-control" name="end" id="end" aria-describedby="basic-addon1" >
						</div>-->
					</div>  
				</div>
		</div>
		<div class="col-sm-4 form-group">
			
				<div class="row">
					<div class="col-sm-5 form-group">
						<!--<div class="input-group">
							<span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-calendar"></i></span>
								<input type="text" placeholder="Reading start" id="defaultPopup" class="form-control" name="end" id="end" aria-describedby="basic-addon1" >


						</div>-->
					</d<!--iv>  
				</div>
		</div>
		<div class="col-sm-4 form-group">
					<div class="row">
						<div class="col-sm-5 form-group">
							<!--<div class="input-group">
								<span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-calendar"></i></span>
									<input type="text" placeholder="Reading End" id="defaultPopup" class="form-control" name="end" id="end" aria-describedby="basic-addon1" >
							</div>
						</div>  -->
					</div>
			</div>
</form>
	</center>

	<script>
  $('#defaultPopup,#defaultInline').datepick(); 
 
$('.disablePicker').click(function() { 
    var enable = $(this).text() === 'Enable'; 
    $(this).text(enable ? 'Disable' : 'Enable'). 
        siblings('.is-datepick').datepick(enable ? 'enable' : 'disable'); 
}); 
 
$('#removePicker').click(function() { 
    var destroy = $(this).text() === 'Remove'; 
    $(this).text(destroy ? 'Re-attach' : 'Remove'); 
    $('#defaultPopup,#defaultInline').datepick(destroy ? 'destroy' : {}); 
});
  </script>
</body>
</html>