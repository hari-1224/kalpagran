  $(".next").click(function(){
     console.log('-----------')
	if($(".img-fluid1").is(":visible")){
		$(".img-fluid1").hide(3000);
	}else if($(".img-fluid2").is(":visible")){
		$(".img-fluid2").hide(3000);
	}else{
    $(".img-fluid3").hide(3000);
  }     				
});

