<div class="container div-wrapper-margin-top">
			<div id="div-main-body" class="row div-main-body">
<div class="col-12 div-vid-nav">
	<span class="text-blue">•</span>
<?php

	$getCategories = "SELECT name FROM categories";
	require('connect.php');
	$isCategories = mysqli_query($con, $getCategories);

	if($isCategories !== FALSE){

		if($isCategories->num_rows > 0){

			while($row = $isCategories->fetch_object())

				{

				echo '<p class="p-inline"><a class="a-video-categories" href="index.php?page=videos&category='.$row->name.'">'.ucfirst($row->name).'</a> <span class="text-blue">•</span> </p>';
				
				}
		}
	}
?>
</div>
<div id="div-latest-videos-wrapper" class="row">

</div>
<script>
var frames = [];
</script>
<?php
	if(!isset($_GET['category'])){
		$category = 'entertainment';
	}else{
		$category = $_GET['category'];
	}
	$getVideos = "SELECT url FROM ".$category;
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
					display.innerHTML += '<div class=\"col-12 col-sm-6 div-video-frame\"><img class=\"img-thumb-small\" src=\"https://res.cloudinary.com/demo/image/vimeo/' + data.video_id + '.jpg\" data-toggle=\"modal\" data-target=\"#".$count."\"><h4 class=\"h4-blue\">' + data.title + '</h4></div>';
				</script>
				";
				$count++;
			}
		}
	}

for($i=0;$i<$count;$i++){

	echo '<div class="modal fade" id="'.$i.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div id="frames'.$i.'" class="modal-body">
	        
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-blue-background" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div><script>document.getElementById("frames'.$i.'").innerHTML = frames['.$i.'];</script>';

}
?>