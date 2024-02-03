 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 </head>
 <body>
   <input id="city"></input>
   <button id="getWeatherForcast">Get weather</button>
   <div id="showWeatherForcast"></div>
   <script type="text/javascript">
   	$(document).ready(function()
   	{
   		$("#getWeatherForcast").click(function()
   	   {
   	   	var city=$("#city").val();
   	   	var key ='8fbbdf9bbb8c001d360068dc3973b988';
   	   	$.ajax({
   	   		url:'http://api.openweathermap.org/data/2.5/weather',
   	   		dataType:'json',
   	   		type:'GET',
   	   		data:{q:city,appid: key,units:'metric'},
   	   		success:function(data){
   	   			var wf ='';
   	   			$.each(data.weather,function(index,val)
   	   			{
   	   				wf +='<p><b>'+ data.name +"</b><img src="+ val.icon +".png></p>"+
   	   				data.main.temp +'&deg;C'+'|'+val.main+","+
   	   				val.description
   	   				
                    

   	   				});
   	   			$("#showWeatherForcast").html(wf);
   	   		}

   	   	});

   	   });
   	});
   	
   </script>
 </body>
 </html>