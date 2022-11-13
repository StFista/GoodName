$(document).ready(function(){
	
	$(#SendButtom).click({
		$ajax({
			type:"POST",
			url:"commentsAdd.php"
			data:data,
			success: function(data)
			{
				alert("It's OK");
			},
			erro:function(){
				alert("Error");
			}
		});
		return false;
	});
	
	$(#SeeMoreButtom).click({
		$ajax({
			type:"POST",
			url:"seeMoreComments.php"
			data:data,
			success: function(html)
			{
				$(#comments_list).html(html);
			},
			erro:function(){
				alert("Error");
			}
		});
		return false;
	});
	
});