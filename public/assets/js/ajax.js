$(function() {
  'use strict';

  $("#bookTrial,#bookTrial2").on('submit',function (e) {
    e.preventDefault();
    // console.log(new FormData($(this)[0]));
    $(".errorClass").html('');
    var formData = new FormData($(this)[0]);

    $.ajax({
      url:'/store',
      method:'post',
      enctype: 'multipart/form-data',
      data: formData,
      processData:false,
      contentType:false,
      cache:false,

      success:function (data) {
        if(data.status == "1") {
          Snackbar.show({
            pos: "top-center",
            text: data.msg,
            showAction: true,
            duration: 20000,
            actionTextColor: 'blue',
            backgroundColor: "#d4edda",
            textColor: '#155724',
          }),
          $("select").prop('selectedIndex', 0);
          $("input[type='text'],input[type='email'],textarea").val('');
          $(".errorClass").html('');
        } else {
          Snackbar.show({
            pos: "top-center",
            text: data.msg,
            showAction: true,
            duration: 20000,
            actionTextColor: 'blue',
            backgroundColor: "##dc3545",
            textColor: '#155724',
          })

        }
      },

      error:function (data) {
        var response = JSON.parse(data.responseText);
        console.log(response.errors);
        // console.log(data.responseText);
        $.each(response.errors, function (key, val) {
          $("#"+key+"Errors").text(val);
        })
      }


    })
  })

});