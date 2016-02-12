 $(document).ready(function(){
      $(".row-data").each(function(){
        $stock=$(this).find(".stock").text();
        $limite=$(this).find(".limite").text();
        
        if( $stock < $limite){
          $(this).addClass("danger");
        }
      })
    });