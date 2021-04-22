$(document).ready(function(){
	$("#ani").hide();
	$("#panel").click(function(){
		 $("#ani").slideDown("slow");
		 $("#ani").animate({
      left: '250px',
      height: '400px',
      width: '500px'
    });

	$("#panel").click(function(){
		$("#ani").slideUp();
	});
});

	$("#ani1").hide();
	$("#panel1").click(function(){
		 $("#ani1").slideDown("slow");
		 $("#ani1").animate({
      left: '250px',
      height: '400px',
      width: '500px'
    });

	$("#panel1").click(function(){
		$("#ani1").slideUp();
	});
});
	$("#ani2").hide();
	$("#panel2").click(function(){
		 $("#ani2").slideDown("slow");
		 $("#ani2").animate({
      left: '250px',
      height: '400px',
      width: '500px'
    });

	$("#panel2").click(function(){
		$("#ani2").slideUp();
	});
});
   $("#ani3").hide();
	$("#panel3").click(function(){
		 $("#ani3").slideDown("slow");
		 $("#ani3").animate({
      left: '250px',
      height: '400px',
      width: '500px'
    });

	$("#panel3").click(function(){
		$("#ani3").slideUp();
	});
});
	$("#ani4").hide();
	$("#panel4").click(function(){
		 $("#ani4").slideDown("down");
		 $("#ani4").animate({
      left: '250px',
      height: '400px',
      width: '500px'
    });

	$("#panel4").click(function(){
		$("#ani4").slideUp();
	});
});
	$("#ani5").hide();
	$("#panel5").click(function(){
		 $("#ani5").fadeIn("slow");
		 $("#ani5").animate({
      left: '250px',
      height: '400px',
      width: '500px'
    });

	$("#panel5").click(function(){
		$("#ani5").slideUp();
	});
});

});