 $(document).ready(function(){
 	$(".row-data").dblclick(function(){
 		$(this).find("td").find(".cod",(function(){
           $val=$(this).text();
           console.log($val);
 		})
 	})

 })