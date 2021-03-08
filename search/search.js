$(document).ready(function(){
	$(".show_all_books_button").click(function(){
		$.ajax({
			url:"../ajax/show_all_books.php",
			success:function(data){
				$(".container").html(data);
			}
		});
	});
	$(".search_button").click(function(){
		$(".search_input").css("display","flex");
	});
	$(".search_input").on('input',function(){
		if($(this).val()!=""){
			$.ajax({
			url:"../ajax/show_search_results.php",
			method:"POST",
			data:{
				key_word:$(".search_input").val()
			},
			success:function(data){
				$(".container").html(data);
			}
		});
		}else{
			$(".container").html('');
		};
		
	});
	
		
});