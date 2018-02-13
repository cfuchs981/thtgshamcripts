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
				<p>About us<br/>
                We are a website designed to bridge the gap between the reality of the army and the academic or emotional 
                implications of their said reality. By uploading interviews, meetings, and discussions, ShamScripts
                transcribes these conversations into text. This allows for easily searchable text that serves great historical,
                research-oriented, and inter-military purposes, as professionals are no longer inhibited by endless amounts of
                audio to get what they are looking for. For even easier searching, ShamScripts implements an auto-tagging system
                that takes information like names or dates to help in searching the database. This product saves countless hours
                for those to come who need what is recorded in these military audio or video files.</p>
			</div>
			<!--about us end--> 

			<!--transcipt wing--> 
			<div class="col-md-8 entry transcript-wing">
            <?php> 
            
            $link = mysqli_connect("localhost", "root", "", "my_thtgshamscripts");
			if($link === false){
    			die("ERROR: Could not connect. " . mysqli_connect_error());
			}
 			$count  = mysqli_query($link, "SELECT COUNT(*) FROM Transcripts"); 
            
            for($i = 1; $i <= $count; $i++) {
				$sql = "SELECT * FROM Transcripts WHERE transcript_key = {$i}";
				$result = mysqli_query($link, $sql);
				echo "<div class='col-md-4 entry'>" . print_r(mysqli_fetch_assoc($result)) . "</div>"; 
            }

			?>
			</div> 
			<!--end transcript wing--> 

			<!--tag wing start--> 
			<div class="col-md-4 entry tag-wing">
				<div class="col-md-12 entry">hi hi</div>
			</div>
			<!--end tag wing-->					
				
			</div>
		</div><!--main content block end--> 


		<!-- Included Javascript Files-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script src="script.js"></script> 
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


	</body> 
</html> 