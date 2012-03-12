$(function(){

    userMenu = $('#login-link').parent();
    userMenu.panel = $('#login-panel');

    userMenu.showPanel = function() {
        userMenu.addClass('hover');
        userMenu.panel.hide().slideDown(200);
        $(document).one("click", userMenu.hidePanel);
    }

    userMenu.hidePanel = function() {
        userMenu.removeClass('hover');
        userMenu.panel.slideUp(100);
    }

    $('#login-link').click(function() {
        if (!userMenu.hasClass('hover')) {
            userMenu.showPanel();
            return false;
        }
    });
});

// Sub menu

$(function(){

    menuLink = $('menu.main-menu>li.child-menu > a'); 
    menuLi = $('menu.main-menu>li.child-menu'); 

    menuLink.addSelected = function() {
        $(this).parent().addClass('selected');
    }
    
    menuLink.closeSelected = function() {
        menuLi.filter('.selected').each(menuLink.unSelected);
        
        $(document).one("click", menuLink.unSelected);
    }
    
    menuLink.unSelected = function() {
        $(this).removeClass('selected');
    }
    
    menuLink.click(function() {
        if (!$(this).parent().hasClass('selected')) {
            $(this).parent()
                .each(menuLink.closeSelected)
                .addClass('selected');
            return false;
        }
    });
    
    menuLi.hover(function(){}, menuLink.unSelected)
});



/* Slider */

slider = {
    settingsTime: {
        animation: 500,
        delay: 6000
    },
    
    root: $('.slider'),
    container: $('#slider-wrap'),
    active: -1,
    pause: false,
    showed: false,
    
    playPause: function() {
        slider.pause = !slider.pause;
        
        if (!slider.pause && !slider.showed)
            slider.slideshow();
        
        slider.playPauseButton.attr('id', (slider.pause ? 'play' : 'pause') );
        
        return false;
    },
    prev: function() {
        slider.pause = false;
        slider.playPause();
        
        slider.slide(-1);
        
        return false;
    },
    next: function() {
        slider.pause = false;
        slider.playPause();
        
        slider.slide(1);
        
        return false;
    },
    slide: function(direction) {
        slider.active = slider.active + direction;
        if (slider.active > slider.slides.length - 1) {
            slider.active = 0
        } else
        if (slider.active < 0) {
            slider.active = slider.slides.length - 1;
        }
        
        var active = slider.slides.eq(slider.active);
        
        log(active);
        slider.container.find('div.slider-slide:last').fadeOut(slider.settingsTime.animation, function(){
           $(this).remove();
        });
        
        slider.container.append(
            $('<div class="slider-slide"></div>')
                .html('<p>' + active.attr('alt') + '</p>')
                .css('background-image', 'url(' + active.attr('src') + ')')
                .addClass(active.attr('class'))
                .fadeIn(slider.settingsTime.animation)
        );
    },
    slideshow: function() {
        if (slider.pause) {
            slider.showed = false;
            return false;
        }
        
        slider.showed = true;
        slider.slide(1);
        
        setTimeout(slider.slideshow, slider.settingsTime.delay);
    }
};

$(function(){
   
    slider.slides = slider.root.find('.slider-load>img');

    slider.slideshow();
   
  

   
    $('#prev').click(slider.prev);
    
    $('#next').click(slider.next);    

    slider.playPauseButton = $('#pause').click(slider.playPause);
});

$("body").keydown(function(e) {
  if(e.keyCode == 37) { // left
      alert('opps');
    $(".slider").animate({
      left: "-=980"
    });
  }
  else if(e.keyCode == 39) { // right
    $(".slider").animate({
      left: "+=980"
    });
  }
});



$(function(){

    $(".table tbody tr:odd").addClass('odd');

});

// Tabs

$(function(){

    tabsLink = $('menu.main-menu>li.child-menu > a'); 
    menuLi = $('menu.main-menu>li.child-menu'); 

    menuLink.addSelected = function() {
        $(this).parent().addClass('selected');
    }
    
    menuLink.closeSelected = function() {
        menuLi.filter('.selected').each(menuLink.unSelected);
        
        $(document).one("click", menuLink.unSelected);
    }
    
    menuLink.unSelected = function() {
        $(this).removeClass('selected');
    }
    
    menuLink.click(function() {
        if (!$(this).parent().hasClass('selected')) {
            $(this).parent()
                .each(menuLink.closeSelected)
                .addClass('selected');
            return false;
        }
    });
    
    menuLi.hover(function(){}, menuLink.unSelected)
});