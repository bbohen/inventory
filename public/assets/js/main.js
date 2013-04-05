//Inventory JS

$(document).ready(function() {

  $(".icon-edit").hide();

  $('#edit-btn').click(function(){

    $(".alert").fadeToggle("fast", "linear");
    $(".icon-edit").toggle("fast");

    return false;
  });

  //JS for instant picture preview on create form --Move Me!--
  function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah')
                .attr('src', e.target.result)
                .width(400);
                //.height(150);

            $('#blah')
              .css("display", "block");

            // $('.create_submit')
            //  .css("top", "310px");
        };

        reader.readAsDataURL(input.files[0]);
    }
  };

 });
