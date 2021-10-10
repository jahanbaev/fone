<?php
$url = $_GET['url'];
$like = $_GET['like'];
$view = $_GET['view'];
$tage = $_GET['tag'];
$json = file_get_contents("https://pixabay.com/api/?key=21316344-e388d7251aabde560038eccae&image_type=photo&pretty=false&per_page=11&q=".$tage);
?>


<meta content="text/html; charset=utf-8" http-equiv=Content-Type>
<meta content="width=device-width,initial-scale=1"name=viewport>
<link href="/style/style.css" rel=stylesheet>
<script src=/main.js></script>
<body>
	<div class="back" onclick="backw()"><img src="/back.png"></div>
	<div class="dwbd">
	<img id="imd" src="<?php echo $url ?>">
	<div class="wd"></div>
	<div class="flex info-img">
		<p class="psd"><?php echo 'Likes: '.$like ?></p>

		<p class="ps"><?php echo 'views: '.$view ?></p>
	</div>
	<a id="donw" href="<?php echo $url ?>" download><button id="dwbn">Download</button></a>
</div>
<h3 class="h3">similar pictures</h3>
<div id="gal" class="mar">
</div>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
	<script>




function backw(){
window.history.back();
}


<?php
echo 'var data = ` '. $json . ' `; ';
			?>
			var obj = JSON.parse(data);


			//adding images to body
			for(var i=1; i<12; i++) {
     var img = document.createElement("div");
   img.setAttribute("class", "bf");
  img.innerHTML="<img tg='"+obj.hits[i].tags+"' class='i' id='i"+ i +"' onclick='openFull(this.id,"+obj.hits[i].likes+","+obj.hits[i].views+")' src='"+ obj.hits[i].webformatURL + "'> <div><img id='li' src='/like.png'><p>" + obj.hits[i].likes + "</p><p id='cr'>to collection</p></div>";
  document.getElementById("gal").appendChild(img);
}


//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

</script>

</body>
