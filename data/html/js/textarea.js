$(function(){
    textAreaWrap = $('.questions textarea').parent();
    textArea = $('.answer-form-wrap textarea');

    textArea.focusin(function() {
        textAreaWrap.addClass('hover');
    });

    textArea.blur(function() {
        textAreaWrap.removeClass('hover');
    });   
});