$(document).ready(function(){
	var history_url = document.referrer;
	// production
    // var history_item = history_url.split('/')[6];
    // dev
    var history_item = history_url.split('/')[5];
    
    if(history_item == undefined || history_item == '')
        $('.menu-home').removeClass('active');
    else {
        if(history_item.includes('?')) {
            history_item = history_item.split('?')[0];
        }
        $('.menu-'+history_item).removeClass('active');    
    }

    var string_url = window.location.href;
    // production
    // var item = string_url.split('/')[6];
    // dev
    var item = string_url.split('/')[5];

    if(item == undefined || item == '') {
        $('.menu-home').addClass('active');
    } else {
        if(item.includes('?')) {
            item = item.split('?')[0];
        }
        $('.menu-'+item).addClass('active');
    }

    $('.reply-submit').on('click', function() {
        $.ajax({
          type: "POST",
          url: basic_url + '/comment/reply',
          data: $("#form_" + global_comment_id).serialize(),
          dataType: "json",
          encode: true,
          success: function(data) {
            toastr.success("Your response has been loaded successfully.");
            window.location.reload();
          },
          error: function(error) {
            toastr.error("Your response failed.");
          }
        }).done(function (data) {
          // console.log(data);
        });
    });

    $('.comment-submit').on('click', function() {
        $.ajax({
          type: "POST",
          url: basic_url + '/comment/create',
          data: $("#comment_create").serialize(),
          dataType: "json",
          encode: true,
          success: function(data) {
            toastr.success("Your comment has been loaded successfully.");
            window.location.reload();
          },
          error: function(error) {
            toastr.error("Your comment failed.");
          }
        }).done(function (data) {
          // console.log(data);
        });
    })

    $('.signup-submit').on('click', function() {
        $.ajax({
          type: "POST",
          url: basic_url + '/signup',
          data: $("#form_signup").serialize(),
          dataType: "json",
          encode: true,
          success: function(data) {
            toastr.success("Registration is complete.");
            window.location.href = basic_url + '/login';
          },
          error: function(error) {
            toastr.error("Registration failed.");
          }
        }).done(function (data) {
          // console.log(data);
        });
    })
});

var global_comment_id;

function replyFn(comment_id) {
    $('.reply-form-' + comment_id).css('display', 'block');
    global_comment_id = comment_id;
}