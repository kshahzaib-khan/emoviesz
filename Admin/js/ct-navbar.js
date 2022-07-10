searchVisible = 0;
transparent = true;
hasTransparent = false;

$(document).ready(function(){
   if($('nav[role="navigation"]').hasClass('navbar-transparent')){
        hasTransparent = true;
   }
   $('[data-toggle="search"]').click(function(){
        if(searchVisible == 0){
            searchVisible = 1;
            $(this).parent().addClass('active');
            $(this).children('p').html('Close');
            $('.navbar-search-form').fadeIn(function(){
                $('.navbar-search-form input').focus();
            });
        } else {
            searchVisible = 0;
            $(this).parent().removeClass('active');
            $(this).children('p').html('Search');
            $(this).blur();
            $('.navbar-search-form').fadeOut(function(){
                $('.navbar-search-form input').blur();
            });
        } 
    });
    
});

$(document).scroll(function() {
   if(hasTransparent){
        if( $(this).scrollTop() > 260 ) {
            if(transparent) {
                transparent = false;
                $('nav[role="navigation"]').removeClass('navbar-transparent');
            }
        } else {
            if( !transparent ) {
                transparent = true;
                $('nav[role="navigation"]').addClass('navbar-transparent');
            }
        }
    }
});











$(function(){
$('a[title]').tooltip();
});













$(".input-group-btn .dropdown-menu li a").click(function()
    {
	var selText = $(this).text();
    
    var selHTML = $(this).html();
    
    var selSearch = $(this).data("searchtype");
    
    var selPlace = $(this).data("placeholder");
         
    $(this).parents('.input-group-btn').find('.dropdown-toggle').html(selHTML+'<span class="caret"></span>');
   
    $("#displayText").text(selText);
    
    $("#displayHTML").html(selHTML);
    
    $("#displayData").text(selSearch);
    
    $("#displayPlace").text(selPlace);
    
    $("#search-input").attr("placeholder", selPlace);
    
});




$(function(){
  var $refreshButton = $('#refresh');
  var $results = $('#css_result');
  
  function refresh(){
    var css = $('style.cp-pen-styles').text();
    $results.html(css);
  }

  refresh();
  $refreshButton.click(refresh);
  
  // Select all the contents when clicked
  $results.click(function(){
    $(this).select();
  });
});















$(document).ready(function(){
  
  $(function(){
    
    var videos = $('.video'),
        state = false;
    
    videos.each(function(){
    
      var videocon = $(this),
          btn = videocon.find('.expandvideo'),
          video = videocon.find('.videocontainer');

      btn.on('click', function() {
        
        if ( state == false ) {
          
            video.animate({width: '150%', height: '100%'}, 'fast', function() { state = true; btn.html('Close Video'); });
          
        } else {
          
          video.animate({width: '100%', height: '100%'}, 'fast', function() { state = false; btn.html('Show Video'); });
          
        }
        
      });
      
    });
    
  });
  
});