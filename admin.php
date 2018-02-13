<!DOCTYPE html> 
<html> 
<head> 
	<title>THTG | ShamScripts</title> 
	<meta charset="UTF-8" > 
	<link href="style.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0;">
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


</head> 
	<body>


		<!--navigation--> 
		<div id="header">
			<div class="inner name"><img alt="logo" src="THTG.png"/>THTG Scripts
				<div class="admin-control">
					<p>Welcome, Admin!<br/> 
						<a class="linker" href="admin.php">Upload Files</a> 
						<i class="fas fa-cloud-upload-alt"></i>
				</div> 
			</div>
			<div class="color-banner"></div>
		</div> 
		<!--end navigation--> 


		<!-- main content block -->
		<div id="work" class="col-md-12">
			<div class="inner col-md-12">
			
			<!--about us--> 
			<div class="col-md-12 entry" style="color:black;">
				<div class="col-md-12 entry">
                
                <form action="upload.php" method="post" enctype="multipart/form-data">
    				Select your media file:
    				<input type="file" name="fileToUpload" id="fileToUpload">
    				<input type="submit" value="Transcribe File" name="submit">
				</form>
                </div>
			</div>
			<!--about us end--> 				
				
			</div>
		</div><!--main content block end--> 


		<!-- Included Javascript Files-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script src="script.js"></script> 
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


	</body> 
</html> 