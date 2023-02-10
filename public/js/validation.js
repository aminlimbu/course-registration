$(document).ready(function () {
  $(function () {
    $('#registration').validate({
      rules: {
        firstname: "required",
        lastname: "required",
        email: {
          required: true,
          email: true,
        },
        course: "required",
        duration: "required",
        delivery: "required"
      },
      messages: {
        firstname: "Please enter you Name",
        lastname: "Please enter your Last Name",
        email: {
          requried: "Please enter your email",
          email: "Please enter valid email address",
        }
      },
    //   errorPlacement: function(error, element){
        //   errorLabelContainer: "#errorDiv ul",
        //   wrapper: "li";
        // error.appendTo("#errorDiv");
        // var errorDiv = element.attr("errorDiv");
        // $("error" = deeorDiv).append(error);
    //   },
        errorContainer: "#errorDiv",
        errorLabelContainer: "#errorDiv ul",
        wrapper: 'li',
    //   erroorPlacement: function (error, element){
    //     error.appendTo('#errorDiv');
    //   },
      sumitHandler: function (form) {
        form.submit();
      }
    });
  })
})