
$(document).ready(function(){
   $.ajax({
        url:'php/widget_api.php',
		cache: false,
       success:function()
       {
        setTimeout(wid1, 0);
        function wid1 (){
        $.ajax({
            url:'php/widget1.php',
            cache: false,
           success:function(data)
           {
            $(".animationWidget").html('');
            $(".animationWidget").html(data); 
            setTimeout(wid2, 3700);  
              
               }
        });
    }
    
    
        function wid2 (){
        $.ajax({
            url:'php/widget2.php',
            cache: false,
           success:function(data)
           {
            $(".animationWidget").html('');
            $(".animationWidget").html(data);
            setTimeout(wid1, 3700);
        
               }
        });
    }
        
           
    }
           
    });

    
});