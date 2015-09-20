$(document).ready(function() {
  /* variables */
  var preview = $('img');
  var status = $('.status');
  var percent = $('.percent');
  var bar = $('.bar');

  /* only for image preview */
  $("#image").change(function(){
    preview.fadeOut();

    /* html FileRender Api */
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("image").files[0]);

    oFReader.onload = function (oFREvent) {
      //preview.attr('src', oFREvent.target.result).fadeIn();
    };
  });

  /* submit form with ajax request */
  $('form').ajaxForm({

    /* set data type json */
    dataType:  'json',

    /* reset before submitting */
    beforeSend: function() {
      status.fadeOut();
      bar.width('0%');
      percent.html('0%');
    },

    /* progress bar call back*/
    uploadProgress: function(event, position, total, percentComplete) {
      var pVel = percentComplete + '%';
      bar.width(pVel);
      percent.html(pVel);
    },

    /* complete call back */
    complete: function(data) {
      /*setTimeout(function(){
        alert('Upload complete!');
        //window.location.href = loc;
      }, 2000);*/
      alert('Upload complete!');
      window.location.href = loc;
    },
  });
});