(function($){
    $(document).ready(function(){
      //alert("JS IS ACTIVE");
      console.log("JS IS ACTIVE");
      var bool;
      bool = 0;
    	$('.customizeBtn').click(
			  function() {
          //console.log("JS IS ACTIVE 2 "+bool);
          if(bool == 0){ document.getElementById("meazureID").style.display="block"; $('.single_variation_wrap').css('display', 'block'); bool = 1; console.log(bool); return;}
			  	//document.getElementById("meazureID").style.display="block";
          if(bool == 1){ document.getElementById("meazureID").style.display="none"; $('.single_variation_wrap').css('display', 'none'); bool = 0; console.log(bool); return;}
			  });
    });
})(jQuery);
