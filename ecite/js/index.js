function init() {
	$('#overview').on('show.bs.collapse', function(){
		$('#overview-title > span').removeClass('glyphicon-plus-sign').addClass('glyphicon-minus-sign');
	});  
	$('#overview').on('hide.bs.collapse', function(){
		$('#overview-title > span').removeClass('glyphicon-minus-sign').addClass('glyphicon-plus-sign');
	});
	
	$('#security').on('show.bs.collapse', function(){
		$('#security-title > span').removeClass('glyphicon-plus-sign').addClass('glyphicon-minus-sign');
	});  
	$('#security').on('hide.bs.collapse', function(){
		$('#security-title > span').removeClass('glyphicon-minus-sign').addClass('glyphicon-plus-sign');
	});
	
	$('#software').on('show.bs.collapse', function(){
		$('#software-title > span').removeClass('glyphicon-plus-sign').addClass('glyphicon-minus-sign');
	});  
	$('#software').on('hide.bs.collapse', function(){
		$('#software-title > span').removeClass('glyphicon-minus-sign').addClass('glyphicon-plus-sign');
	});
	
	$('#operations').on('show.bs.collapse', function(){
		$('#operations-title > span').removeClass('glyphicon-plus-sign').addClass('glyphicon-minus-sign');
	});  
	$('#operations').on('hide.bs.collapse', function(){
		$('#operations-title > span').removeClass('glyphicon-minus-sign').addClass('glyphicon-plus-sign');
	});
};