 $(document).ready(function(){
 	$(".row-data").dblclick(function(){
 		$codigo=$(this).find(".codigo").text();
 		$descripcion=$(this).find(".descripcion").text();
         console.log($codigo+" "+$descripcion);
         $("#ListaPed").append("<li class=\"list-group-item\">"+$descripcion+"<div class=\"col-xs-3\" style=\"float: right\"><input class=\"form-control input-sm\" type=\"number\" min=1 id=\"inputSmall\"></div></li>");
 		})
 	})

