$( document ).ready(function() {


	$('.slide').readmore({
		maxHeight: 144.3,
		speed: 100, 
		moreLink: "<a class='read_more_links_home' href='#''>... CITESTE MAI MULT</a>",
		lessLink: "<a class='read_more_links_home' href='#'>INCHIDE</a>"
	});


	$('.slide_service').readmore({
		maxHeight: 144.3,
		speed: 100, 
		moreLink: "<a class='read_more_links_home' href='#''>... CITESTE MAI MULT</a>",
		lessLink: "<a class='read_more_links_home' href='#'>INCHIDE</a>"
	});

        /*adding active class on menu for current page */

        var link = $(location).attr('pathname');

            if(link .match(/home/g)){
               $.each($(".primary_menu_item"), function(){
                   var atrib = $(this).attr("href");
                   if(atrib.match(/home/g)){
                       $(".primary_menu_item").removeClass('primary_active');
                       $(this).addClass('primary_active');
                   }
               });   
            }else if(link .match(/service/g)){
               $.each($(".primary_menu_item"), function(){
                   var atrib = $(this).attr("href");
                   if(atrib.match(/service/g)){
                       $(".primary_menu_item").removeClass('primary_active');
                       $(this).addClass('primary_active');
                       if(link .match(/index/g)){
                            $.each($(".secondary_menu_item"), function(){
                                var sec = $(this).attr("href"); 
                                if(sec.match(/constructions/g) ){
                                     $(".secondary_menu_item").removeClass('secondary_active');
                                     $(this).addClass('secondary_active');
                                }
                            });
                       }else if(link .match(/constructions/g)){
                           $.each($(".secondary_menu_item"), function(){
                            var sec = $(this).attr("href"); 
                                if(sec.match(/constructions/g) ){
                                     $(".secondary_menu_item").removeClass('secondary_active');
                                     $(this).addClass('secondary_active');
                                }
                            });
                       }else if(link .match(/rentacar/g)){
                           $.each($(".secondary_menu_item"), function(){
                            var sec = $(this).attr("href"); 
                                if(sec.match(/rentacar/g) ){
                                     $(".secondary_menu_item").removeClass('secondary_active');
                                     $(this).addClass('secondary_active');
                                }
                            });
                       }else if(link .match(/parcauto/g)){
                           $.each($(".secondary_menu_item"), function(){
                            var sec = $(this).attr("href"); 
                                if(sec.match(/parcauto/g) ){
                                     $(".secondary_menu_item").removeClass('secondary_active');
                                     $(this).addClass('secondary_active');
                                }
                            });
                       }else if(link .match(/aparthotel/g)){
                           $.each($(".secondary_menu_item"), function(){
                            var sec = $(this).attr("href"); 
                                if(sec.match(/aparthotel/g) ){
                                     $(".secondary_menu_item").removeClass('secondary_active');
                                     $(this).addClass('secondary_active');
                                }
                            });
                       }else if(link .match(/imobiliare/g)){
                           $.each($(".secondary_menu_item"), function(){
                            var sec = $(this).attr("href"); 
                                if(sec.match(/imobiliare/g) ){
                                     $(".secondary_menu_item").removeClass('secondary_active');
                                     $(this).addClass('secondary_active');
                                }
                            });
                       }else if(link .match(/playandwin/g)){
                           $.each($(".secondary_menu_item"), function(){
                            var sec = $(this).attr("href"); 
                                if(sec.match(/playandwin/g) ){
                                     $(".secondary_menu_item").removeClass('secondary_active');
                                     $(this).addClass('secondary_active');
                                }
                            });
                       }else if(link .match(/consultanta/g)){
                           $.each($(".secondary_menu_item"), function(){
                            var sec = $(this).attr("href"); 
                                if(sec.match(/consultanta/g) ){
                                     $(".secondary_menu_item").removeClass('secondary_active');
                                     $(this).addClass('secondary_active');
                                }
                            });
                       }
                   }
               });   
            }else if(link .match(/contact/g)){
               $.each($(".primary_menu_item"), function(){
                   var atrib = $(this).attr("href");
                   if(atrib.match(/contact/g)){
                       $(".primary_menu_item").removeClass('primary_active');
                       $(this).addClass('primary_active');
                   }
               });   
            }
            
            if (link == "/"){
                $.each($(".primary_menu_item"), function(){
                     var atr = $(this).attr("href");
                     if(atr.match(/home/g)){
                         $(".primary_menu_item").removeClass('primary_active');
                         $(this).addClass('primary_active');
                     }
                 });  
            }
  
        

});


