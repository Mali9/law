(function ($) {
  $(document).ready(function () {
    $("#edit-custom-button--6").click(function (e) {
      e.preventDefault();
      $('#field_judicial_benefits').modal('show');

    });

    $("#edit-custom-button--9").click(function (e) {
      e.preventDefault();
      $('#field_regulations_and_circulars').modal('show');
    });

    $("#edit-custom-button--3").click(function (e) {
      e.preventDefault();
      $('#field_distinctive_grounds').modal('show');
    });

    $("#edit-custom-button--4").click(function (e) {
      e.preventDefault();
      $('#field_improper_administrative').modal('show');
    });

    $("#edit-custom-button").click(function (e) {
      e.preventDefault();
      $('#body1').modal('show');
    });

    $("#edit-custom-button--7").click(function (e) {
      e.preventDefault();
      $('#field_legal_grounds').modal('show');
    });


    $("#edit-custom-button--8").click(function (e) {
      e.preventDefault();
      $('#field_negatives').modal('show');
    });

    $("#edit-custom-button--2").click(function (e) {
      e.preventDefault();
      $('#field_challenges_faced').modal('show');
    });



  });


  $("#edit-field-category").change(function () {
    var category = $('#edit-field-category').val();

    $.ajax({
      url: '/get_default_values/' + category,
      dataType: 'json',
      success: function (data) {


        console.log(data);
        if (data.field_judicial_benefits) {

          var text = '';
          for (let index = 0; index < data.field_judicial_benefits.length; index++) {
            var element = data.field_judicial_benefits[index];
            if (element != "") {
              text += "<span class='tag tag-pro field_judicial_benefits'>" + element + "</span>";

            }
          }
          $(".field_judicial_benefits_content").html(text);
        }




        if (data.field_regulations_and_circulars) {

          var text = '';
          for (let index = 0; index < data.field_regulations_and_circulars.length; index++) {
            var element = data.field_regulations_and_circulars[index];

            if (element != "") {
              text += "<span class='tag tag-pro field_regulations_and_circulars'>" + element + "</span>";

            }

          }
          $(".field_regulations_and_circulars_content").html(text);

        }


        if (data.field_distinctive_grounds) {

          var text = '';
          for (let index = 0; index < data.field_distinctive_grounds.length; index++) {
            var element = data.field_distinctive_grounds[index];

            if (element != "") {
              text += "<span class='tag tag-pro field_distinctive_grounds'>" + element + "</span>";

            }

          }
          $(".field_distinctive_grounds_content").html(text);
        }


        if (data.field_improper_administrative) {

          var text = '';
          for (let index = 0; index < data.field_improper_administrative.length; index++) {
            var element = data.field_improper_administrative[index];
            if (element != "") {
              text += "<span class='tag tag-pro field_improper_administrative'>" + element + "</span>";
            }
          }
          $(".field_improper_administrative_content").html(text);
        }



        if (data.body1) {
          var text = '';
          for (let index = 0; index < data.body1.length; index++) {
            var element = data.body1[index];

            if (element != "") {
              text += "<span class='tag tag-pro body1'>" + element + "</span>";

            }

          }
          $(".body1_content").html(text);
        }


        if (data.field_legal_grounds) {


          var text = '';
          for (let index = 0; index < data.field_legal_grounds.length; index++) {
            var element = data.field_legal_grounds[index];
            if (element != "") {
              text += "<span class='tag tag-pro field_legal_grounds'>" + element + "</span>";

            }

          }
          $(".field_legal_grounds_content").html(text);

        }

        if (data.field_negatives) {

          var text = '';
          for (let index = 0; index < data.field_negatives.length; index++) {
            var element = data.field_negatives[index];
            if (element != "") {
              text += "<span class='tag tag-pro field_negatives'>" + element + "</span>";

            }
          }
          $(".field_negatives_content").html(text);

        }

        if (data.field_challenges_faced) {

          var text = '';
          for (let index = 0; index < data.field_challenges_faced.length; index++) {
            var element = data.field_challenges_faced[index];
            if (element != "") {
              text += "<span class='tag tag-pro field_challenges_faced'>" + element + "</span>";

            }
          }
          $(".field_challenges_faced_content").html(text);
        }
      },
    });

  });




  $("body").on("click", ".close-modal", function () {
    $(".jquery-modal").trigger('click');

  });

  $(".close-modal ").text("");


  // $("body").on("click", ".field_judicial_benefits", function () {
  //   $(".jquery-modal").trigger('click');
  //   var value = $(this).text();
  //   $("#edit-field-judicial-benefits-0-value").val(value);
  // });


  // $("body").on("click", ".field_regulations_and_circulars", function () {
  //   $(".jquery-modal").trigger('click');
  //   var value = $(this).text();
  //   // Get the CKEditor instance
  //   var editor = CKEDITOR.instances.editor1;

  //   // Set the value
  //   // var value = "This is the new value.";
  //   editor.val(value);
  //   // $("#edit-field-judicial-benefits-0-value").val(value);
  // });




})(jQuery);