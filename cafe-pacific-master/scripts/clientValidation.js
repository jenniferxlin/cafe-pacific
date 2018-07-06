var TEST_SERVER_VALIDATION = false;

$(document).ready(function () {
if (!TEST_SERVER_VALIDATION) {
  $("#reviewForm").on("submit", function() {
    var formValid = true;
    var dateIsValid = $("#date").prop("validity").valid;
    if(dateIsValid) {
      $("#dateError").hide();
    } else {
      $("#dateError").show();
      formValid = false;
    }
    var orderIsValid = $("#order").prop("validity").valid;
    if(orderIsValid) {
      $("#orderError").hide();
    } else {
      $("#orderError").show();
      formValid = false;
    }
    var emailIsValid = $("#email").prop("validity").valid;
    if(emailIsValid) {
      $("#emailError").hide();
    } else {
      $("#emailError").show();
      formValid = false;
    }

    if($('input[name=rating_1]:checked').length<=0)
    {
      $("#tasteError").show();
      formValid = false;
    } else {
      $("#tasteError").hide();
    }
    if($('input[name=rating_2]:checked').length<=0)
    {
      $("#cleanlinessError").show();
      formValid = false;
    } else {
      $("#cleanlinessError").hide();
    }
    if($('input[name=rating_3]:checked').length<=0)
    {
      $("#serviceError").show();
      formValid = false;
    } else {
      $("#serviceError").hide();
    }
    if($('input[name=rating_4]:checked').length<=0)
    {
      $("#priceError").show();
      formValid = false;
    } else {
      $("#priceError").hide();
    }
    return formValid;
  });
}
});
