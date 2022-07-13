var checkboxSame = $("#anak-same-as-ortu input[type=checkbox]");

function sameAsInput() {
  if (checkboxSame.is(":checked")) {
    jQuery(".form-ortu").find(":input").prop("disabled", true);
  } else {
    jQuery(".form-ortu").find(":input").prop("disabled", false);
  }
}

jQuery(document).ready(function () {
  sameAsInput();

  checkboxSame.on("change", function () {
    sameAsInput();
  });

  jQuery(".form-anak")
    .find(":input")
    .on("change", function () {
      var billing = $(this).attr("id"),
        billingVal = $(this).val(),
        shipping = billing.replace("ibu", "ayah"),
        shippingEl = $("#" + shipping);

      if (shippingEl.length > 0) {
        shippingEl.val(billingVal);
      }
    });
});
