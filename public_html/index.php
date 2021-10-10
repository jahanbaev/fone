<?php
 
if($_GET['q'] == null){
	$json = file_get_contents("https://pixabay.com/api/?key=21316344-e388d7251aabde560038eccae&image_type=photo&q=wallpaper&pretty=false&per_page=134");
}else{
$json = file_get_contents("https://pixabay.com/api/?key=21316344-e388d7251aabde560038eccae&image_type=photo&q=".$_GET['q']."&pretty=false&per_page=134");
}
?>
<html>
<meta content="text/html; charset=utf-8"http-equiv=Content-Type>
<script src=main.js></script>
<link href=style/style.css rel=stylesheet>
<meta content="width=device-width,initial-scale=1"name=viewport>
<body>

<div id="toast"><p>image Saved!</p></div>
	<div id="nav">
	<p>Goodfon</p>	
	<div id="child-nav">
		<a href="/index.php">Home</a>
		<a href="/about.html">About us</a>
		<a href="/tags.html">Search</a>
		<a href="/saved.html">Saved images</a>
	</div>
	<img id="navimg" src="menu.png" onclick="navactive()">
	</div>
	<div id="nav-menu">
		<div class="a"><a href="/saved.html">Saved images</a></div>
		<div class="a"><a href="/index.php">Home</a></div>
		<div class="a"><a  href="/about.html">About us</a></div>
		<div class="a"><a href="/tags.html">Search</a></div>

		
	</div>
	<div class="flex tag-frame">
		<a href="http://photos/?q="><p class="tags active">On top</p></a>
	<a href="http://photos/?q=wallpapers"><p class="tags">Wallpapers</p></a>
		<a href="http://photos/?q=cars"><p class="tags">Cars</p></a>
		<a href="http://photos/?q=nature+hd"><p class="tags">Nature</p></a>
		<a href="http://photos/?q=mobile+wallpapers"><p class="tags">Wallpapers</p></a>
		<a href="http://photos/?q=mountains"><p class="tags">mountains</p></a>
		<a href="http://photos/?q=spring"><p class="tags">Spring</p></a>
		<a href="http://photos/?q=colors"><p class="tags">Colors</p></a>
		<a href="http://photos/?q=wallpapers"><p class="tags">Wallpapers</p></a>
		<a href="http://photos/?q=wallpapers"><p class="tags">Mobile wallpapers</p></a>
		<a href="http://photos/?q=wallpapers"><p class="tags">More...</p></a>
	</div>
	<div class="serch-box">
		<form>
		<input type="text" autocomplete="off" placeholder=" search images" name="q" id="inp"><button type="submit" >search</button> 
		</form>
	</div>
	<div id="gal">




</div>
<p class="more" onclick="more()">more images</p>
<div class="pages">
	
</div>
<dir class="footer">
	<p>Goodfon.net </p>
</dir>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
		<script>
			   var xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", "ban.php", false ); 
    xmlHttp.send( null );
    var filter = JSON.parse(xmlHttp.responseText);
			var banned;
			
			var countKey = Object.keys(filter).length;
			<?php
echo 'var data = ` '. $json . ' `; ';
			?>
			var obj = JSON.parse(data);

var i = 0 ;
var mr = 30;
			//adding images to body
			for(var im=0; i<30; i++) {
				banned=0;
     for(var i2=0; i2 < countKey;  i2++) {if(obj.hits[i].id == filter[i2].id){banned=1}}
if(banned == 0){
     var img = document.createElement("div");
   img.setAttribute("class", "bf");
  img.innerHTML="<img tg='"+obj.hits[i].tags+"' class='i' id='i"+ i +"' onclick='openFull(this.id,"+obj.hits[i].likes+","+obj.hits[i].views+")' src='"+ obj.hits[i].webformatURL + "'> <div><img id='li' src='like.png'><p>" + obj.hits[i].likes + "</p><p id='cr' onclick='saved("+i+")' >to collection</p></div>";
  document.getElementById("gal").appendChild(img);
}
}

function more(){
if(mr > 100){
	document.getElementsByclassName("more")[0].style.display="none";
}else{
		for(var i = mr; i<mr + 30; i++) {
				banned=0;
     for(var i2=0; i2 < countKey;  i2++) {if(obj.hits[i].id == filter[i2].id){banned=1}}
if(banned == 0){
     var img = document.createElement("div");
   img.setAttribute("class", "bf");
  img.innerHTML="<img tg='"+obj.hits[i].tags+"' class='i' id='i"+ i +"' onclick='openFull(this.id,"+obj.hits[i].likes+","+obj.hits[i].views+")' src='"+ obj.hits[i].webformatURL + "'> <div><img id='li' src='like.png'><p>" + obj.hits[i].likes + "</p><p id='cr' onclick='saved("+i+")' >to collection</p></div>";
  document.getElementById("gal").appendChild(img);
}
}
}
mr= mr+30;

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
</html>