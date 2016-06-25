$(document).ready(function(){
	var nav = $('.floatdiv');
	if (nav.length) {
	  var top = $('.floatdiv').offset().top
          console.log(top);
	}
	//var top = $('.floatdiv').offset().top
	//console.log(top);
	$('.carousel').carousel({
                interval: 1000 * 10
        });
    $('body').append('<div id="toTop" class="btn btn-info"><i class="fa fa-arrow-up"></i>Back to Top</div>');
    $(window).scroll(function () {
		if ($(this).scrollTop() != 0) {
				$('#toTop').fadeIn();
			} else {
				$('#toTop').fadeOut();
		}
	if (nav.length) {
	  $('.floatdiv').css('position','absolute');   
	  $('.floatdiv').css('top',(Math.max(top,$(document).scrollTop()) - top));
	}
	}); 
	
    $('#toTop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
	
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
	
	var options = { 
		beforeSend: function() 
		{
			//$("#progress").show();
			//clear everything
			$("#bar").width('0%');
			//$("#bar").hide();
			$("#message").html("");
			$("#percent").html("0%");
		},
		uploadProgress: function(event, position, total, percentComplete) 
		{
			$("#bar").width(percentComplete+'%');
			$("#percent").html(percentComplete+'%');		
		},
		success: function() 
		{
			$("#bar").width('100%');
			$("#percent").html('100%');
		},
		complete: function(response) 
		{

			var jsonObj = $.parseJSON(response.responseText);
                        console.log(response.responseText);
                        console.log(jsonObj);

			$('#tipcontent').html(jsonObj.msg);
			$('#myModal').modal();
			
		},
		error: function()
		{
			$('#tipcontent').html(jsonObj.msg);
			$('#myModal').modal();
			//$("#message").html("<font color='red'> ERROR: unable to upload files</font>");
		}
		 
	}; 
		 $("#applicationform").ajaxForm(options);
		 $('#startdate').datepicker({
                    format: "dd/mm/yyyy"
                });
		$('#enddate').datepicker({
                    format: "dd/mm/yyyy"
                });
		
		$("#submitbutton").on('click', function(e) {
			var needtofill = "Please fill out the following fields: \n";
			$('form#applicationform').find('input').each(function(){
					var x = $(this).val();
					if (x == null || x == "") {
						if($(this).attr('name')=="pro_name"){
							needtofill =  needtofill + "Overview -> Project name\n";
						}else if($(this).attr('name')=="role"){
							needtofill =  needtofill + "Overview -> Project participant role(s)\n";
						}else if($(this).attr('name')=="contact_name"){
							needtofill =  needtofill + "Overview -> Contact name\n";
						}else if($(this).attr('name')=="email"){
							needtofill =  needtofill + "Overview -> Contact email\n";
						}else if($(this).attr('name')=="organizations"){
							needtofill =  needtofill + "Overview -> Organization\n";
						}else if($(this).attr('name')=="data_type"){
							needtofill =  needtofill + "Overview -> Data type\n";
						}else if($(this).attr('name')=="data_format"){
							needtofill =  needtofill + "Overview -> Data format\n";
						}else if($(this).attr('name')=="ports"){
							needtofill =  needtofill + "Security -> Ports\n";
						}else if($(this).attr('name')=="software_list"){
							needtofill =  needtofill + "Software Stack -> Required software\n";
						}else if($(this).attr('name')=="modules_list"){
							needtofill =  needtofill + "Software Stack -> Runtime library list\n";
						}else if($(this).attr('name')=="startdate"){
							needtofill =  needtofill + "Operations -> Start time\n";	
						}else if($(this).attr('name')=="enddate"){
							needtofill =  needtofill + "Operations -> End time\n";
						}else if($(this).attr('name')=="data_feed"){
							needtofill =  needtofill + "Operations -> Data upload\n";
						}else if($(this).attr('name')=="data_read"){
							needtofill =  needtofill + "Operations -> Data service\n";
						}else if($(this).attr('name')=="vercode"){
							needtofill =  needtofill + "Verification code\n";
						}					
					}
			});
			$('form#applicationform').find('textarea').each(function(){
				var y = $(this).val();
					if (y == null || y == "") {
						needtofill =  needtofill + "Overview -> Project description and purpose";
					}
			});
			
if(needtofill == "Please fill out the following fields: \n"){
				console.log("complete!");
			}else{
				alert(needtofill);
			}

		});

//window.onbeforeunload = function(e) {
//			return 'If you leave before submitting, your content will be lost!';
//		};

});


            
