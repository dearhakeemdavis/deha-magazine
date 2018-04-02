<div class="col-12 div-headline-left div-background-sub-headers">
		<i class="fas fa-film"></i> Entertainment
</div>
<div class="col-12 div-video-categories">
Entertainment / 
<a class="a-video-categories" href="index.php?page=fashion">Fashion</a> / 
<a class="a-video-categories" href="index.php?page=health">Health</a> / 
<a class="a-video-categories" href="index.php?page=informed">Informed</a> / 
<a class="a-video-categories" href="index.php?page=sports">Sports</a> / 
<a class="a-video-categories" href="index.php?page=weddings">Weddings</a>
</div>
<div id="div-new-body" class="row div-video-grid">

</div>
<script>
var entCounter = 0;
var display = document.getElementById("div-new-body");
var storeVideos = [];
</script>

<?php
	require('connect.php');
	$getVideos = "SELECT url FROM entertainment";
	$isVideos = mysqli_query($con, $getVideos);
	if($isVideos !== FALSE){
		if($isVideos->num_rows > 0){
			while($row = $isVideos->fetch_object())
			{
				echo "
				<script>
					var data = ".$row->url.";
					storeVideos[entCounter] = data.html;
					display.innerHTML += '<div class=\"col-sm-12 col-md-6 div-video-frame\"><img class=\"img-thumb\" src=\"' + data.thumbnail_url + '\" data-toggle=\"modal\" data-target=\"#'+ entCounter +'\"><h4>' + data.title + '</h4></div>';
				entCounter++;</script>";
			}
		}
	}
?>
<script>
var i;
for(i = 0;i < storeVideos.length;i++){
	display.innerHTML += '<div class="modal fade" id="' + i + '" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true"><div class="modal-dialog modal-dialog-centered" role="document"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div id="frame' + i + '" class="modal-body"></div><div class="modal-footer"><button type="button" class="btn btn-grey-background" data-dismiss="modal">Close</button></div></div></div></div>';
	document.getElementById("frame" + i).innerHTML = storeVideos[i];
}
</script>