<script>
var frames = [];
</script>
<?php
	require('connect.php');

	$getVideos = "SELECT url FROM latest";
	$isVideos = mysqli_query($con, $getVideos);
	if($isVideos !== FALSE){
		if($isVideos->num_rows > 0){
			$count = 0;
			while($row = $isVideos->fetch_object())
			{
				echo "
				<script>
					var display = document.getElementById('div-latest-videos-wrapper');
					var data = ".$row->url.";
					var firstSplit = data.html.replace('u003C','<');
					var secondSplit = firstSplit.replace('003Eu003C','><');
					frames[".$count."] = secondSplit.replace('u003E','>');
					display.innerHTML += '<div class=\"col-12 div-latest-video-sections\"><div class=\"row\"><div class=\"col-12 col-sm-5 div-video-frame\"><img class=\"img-thumb-small-percentage\" src=\"' + data.thumbnail_url + '\" data-toggle=\"modal\" data-target=\"#".$count."\"></div><div class=\"col-12 col-sm-7 div-latest-video-descriptions\"><h4>' + data.title + '</h4><p class=\"p-vid-description\">' + data.description + '</p></div></div></div>';
				</script>
				";

				echo '<div class="modal fade" id="'.$count.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div id="frames'.$count.'" class="modal-body">
	        
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-blue-background" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div><script>document.getElementById("frames'.$count.'").innerHTML = frames['.$count.'];</script>';
				$count++;
			}
		}
	}
?>