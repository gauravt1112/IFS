$(document).ready(function(){

  $("#tabs a").click(function(){
    rel = $(this).attr("rel");
    if ($(this).hasClass("current")) {
      return false;
    }
    $("#tabs a").removeClass('current');
    $(this).addClass('current');
    $(".hidden").fadeOut(400);
    $("#"+rel).delay(400).fadeIn(400);
  });
  
    $(".accordion1").accordion({
    	heightStyle: "content",
        collapsible: false
    });
  
    $(".accordion2").accordion({
    	heightStyle: "content",
        collapsible: true,
        active: false
    });
  
  $('.click_button').colorbox();
  	
	$(".reg_form").click(function() {
    	      $.colorbox({
        width:"491",
        height: "491",
        inline:true,
        fixed:true,
        onComplete: function(){
          $("#inquiry_form").validate({ submitHandler: submitFrom });
        },
        href:"#inquiry_form"
      });
  });

});


// call back to remove buttons on first and last slide / adjust height of container
function onAfter(curr, next, opts, fwd) {
    var index = opts.currSlide;
    $('#prev')[index == 0 ? 'hide' : 'show']();
    $('#next')[index == opts.slideCount - 1 ? 'hide' : 'show']();
}

$("#contact_form").validate({ submitHandler: submitFrom });
$("#program_inquiry_form").validate({ submitHandler: submitFrom2 });

function submitFrom(form) {
  var obj = $('form#'+form.id);
  var formData = $('form#'+form.id).serialize()+'&command='+form.id;
    $("form#"+form.id+" input:submit").addClass('sending');
    $("form#"+form.id+" input:submit").val('SENDING ...');
  //console.log(formData);
  $.post("form_submit.php",  formData , function(data) {
    if(data.status=='success') {
      //obj.hide();
      //obj.parent().append(data.message);
      $("form#"+form.id+" input:submit").removeClass('sending');
      $("form#"+form.id+" input:submit").addClass('sent');
      $("form#"+form.id+" input:submit").val('MESSAGE SENT');
      $("form#"+form.id+" input:submit").animate({'opacity': '0.5'});
      $("form#"+form.id+" input:submit").attr('disabled', 'disabled');
    } else {
      obj.hide();
      obj.parent().append(data.message);
    }
  }, "json");

  return false;
}
function submitFrom2(form) {
  var obj = $('form#'+form.id);
  var formData = $('form#'+form.id).serialize()+'&command='+form.id;
    $("form#"+form.id+" input:submit").addClass('sending');
    $("form#"+form.id+" input:submit").val('SENDING ...');
  //console.log(formData);
  $.post("program_form_submit.php",  formData , function(data) {
    if(data.status=='success') {
      //obj.hide();
      //obj.parent().append(data.message);
      $("form#"+form.id+" input:submit").removeClass('sending');
      $("form#"+form.id+" input:submit").addClass('sent');
      $("form#"+form.id+" input:submit").val('MESSAGE SENT');
      $("form#"+form.id+" input:submit").animate({'opacity': '0.5'});
      $("form#"+form.id+" input:submit").attr('disabled', 'disabled');
	  $(location).attr('href','programs-form-submit.html');
    } else {
      obj.hide();
      obj.parent().append(data.message);
    }
  }, "json");

  return false;
}
