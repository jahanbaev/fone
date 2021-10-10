	var navact = 0;
	function navactive(){
		if(navact == 0){
			navact=1;
			document.getElementById("nav-menu").style.transform ='translateX(0%)';
			document.getElementById("navimg").src = "cancel.png";
		}else{
			navact=0;
			document.getElementById("nav-menu").style.transform ='translateX(-100%)';
			document.getElementById("navimg").src = "menu.png";
		}
		}
		function openFull(id,like,view){
      var urls = document.getElementById(id).src;
      var tag = document.getElementById(id).getAttribute("tg");
      location.href= "show.php/?url="+urls+'&like='+like+'&view='+view+'&tag='+tag ;
  }

  function saved(id){
  	var url = document.getElementById("i"+id).src;
  	var dts = localStorage.getItem("saved");
  	if(dts == null){
  		dts = "";
  	}
  	var als= dts + '<img onclick="o(`'+url+'`)" src="'+url+'">';
  	   localStorage.setItem("saved", als);
  	   document.getElementById("toast").style.display="inherit";
  	   setTimeout(function(){  document.getElementById("toast").style.display="none"; }, 2000);
  }