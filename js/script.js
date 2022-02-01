jQuery(document).ready(function() {

    //NAVBAR burger icon onclick
    jQuery("#burger-icon").on('click', function() {

        //open pages
        jQuery('.menu').toggleClass( "open" );
      
        //burger icon animation
        if (jQuery(this).hasClass( "out" )) {
            /*animate out*/
            jQuery('.l-1').removeClass( "top-rotate" );
            jQuery('.l-3').removeClass( "bottom-rotate" );
            jQuery(this).removeClass( "out" );
            setTimeout(function(){
                jQuery(".l-1").removeClass( "top-translate" );
                jQuery(".l-2").removeClass( "mid" );
                jQuery(".l-3").removeClass( "bottom-translate" );
            }, 300);
          
        } else {
            /*animate in*/
            jQuery(".l-1").addClass( "top-translate" );
            jQuery(".l-2").addClass( "mid" );
            jQuery(".l-3").addClass( "bottom-translate" );
            jQuery(this).addClass( "out" );
            setTimeout(function(){
                jQuery('.l-1').addClass( "top-rotate" );
                jQuery('.l-3').addClass( "bottom-rotate" );
            }, 300);
        }
  
    });

    
})