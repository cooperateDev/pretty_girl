$(document).ready(function(){
	var history_url = document.referrer;
	// production
    // var history_item = history_url.split('/')[6];
    // dev
    var history_item = history_url.split('/')[5];
    
    if(history_item == undefined || history_item == '')
        $('.menu-home').removeClass('active');
    else
        $('.menu-'+history_item).removeClass('active');    

    var string_url = window.location.href;
    // production
    // var item = string_url.split('/')[6];
    // dev
    var item = string_url.split('/')[5];

    if(item == undefined || item == '') {
        $('.menu-home').addClass('active');
    } else {
        $('.menu-'+item).addClass('active');
    }
});