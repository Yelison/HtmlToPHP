$(document).ready(function(){
    $('.button').click(function(event){
        var clickBtnValue = $(this).val();
        console.log(event);
        var ajaxurl = '/';
        data =  {'action': clickBtnValue};
        event.preventDefault();
        $.post(ajaxurl, data, function (response) {
            console.log('asd');
        });
    });
});