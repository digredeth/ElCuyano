 $(document).ready(function(){
 	$(".row-data").dblclick(function(){
 		$codigo=$(this).find(".codigo").text();
 		$descripcion=$(this).find(".descripcion").text();
         console.log($codigo+" "+$descripcion);
         $("#ListaPed").append("<li class=\"list-group-item\"><span class=\"badge col-xs-2\"><input class=\"form-control input-sm\" type=\"number\" min=1 id=\"inputSmall\"></span>"+$descripcion+"</li>");
 		})
 	})

