 $(document).ready(function(){
      $(".row-data").each(function(){
        $stock=parseInt($(this).find(".stock").text());
        $limite=parseInt($(this).find(".limite").text());
        if( $stock < $limite){
          $(this).addClass("danger");
        }
      })
    });