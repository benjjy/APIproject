// JavaScript Document


//Use this url below to get your access token
//https://instagram.com/oauth/authorize/?display=touch&client_id=3b4829d3b5304e32924d7ea8ede1cf82&redirect_uri=http://carolinejames.org/instagram&response_type=token 

//if you need a user id for yourself or someone else use:
//http://jelled.com/instagram/lookup-user-id
	
						
$(function() {
	
	var apiurl = "https://api.instagram.com/v1/tags/baseball/media/recent?access_token=ACCESS_TOKEN_HERE&callback=?"
	var access_token = location.hash.split('=')[1];
	var html = ""
	
		$.ajax({
			type: "GET",
			dataType: "json",
			cache: false,
			url: apiurl,
			success: parseData
		});
				
		
		function parseData(json){
			console.log(json);
			
			$.each(json.data,function(i,data){
				html += '<p>Filter:"'+ data.filter+'"</p>';
				html += '<img src ="' + data.images.low_resolution.url + '">'
			});
			
			console.log(html);
			$("#results").append(html);
			
		}
		
		
                
               
 });
		
		
		
		
	

		
