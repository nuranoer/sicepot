$(function () {
  $(".jenis_permohonan").change(function () {
    var responseID = $(this).val();
    if (responseID == "Penggantian") {
      $("#seri_paspor").removeClass("hidden");
      $("#seri_paspor").addClass("show");
      $("#reg_paspor").removeClass("hidden");
      $("#reg_paspor").addClass("show");
      $("#alasan").removeClass("hidden");
      $("#alasan").addClass("show");
    } else {
      $("#seri_paspor").removeClass("show");
      $("#seri_paspor").addClass("hidden");
      $("#reg_paspor").removeClass("show");
      $("#reg_paspor").addClass("hidden");
      $("#alasan").removeClass("show");
      $("#alasan").addClass("hidden");
    }
    console.log(responseID);
  });

  $(".tujuan").change(function () {
    var responseID = $(this).val();
    if (responseID == "Umroh" || responseID == "Haji") {
      $("#endorse_nama").removeClass("hidden");
      $("#endorse_nama").addClass("show");
    } else {
      $("#endorse_nama").removeClass("show");
      $("#endorse_nama").addClass("hidden");
    }
    console.log(responseID);
  });

  $(".address_ortu").change(function () {
    var responseID = $(this).val();
    if (responseID == "Tidak") {
      $("#address_ibu").removeClass("hidden");
      $("#address_ibu").addClass("show");
      $("#address_ayah").removeClass("hidden");
      $("#address_ayah").addClass("show");
    } else {
      $("#address_ibu").removeClass("show");
      $("#address_ibu").addClass("hidden");
      $("#address_ayah").removeClass("show");
      $("#address_ayah").addClass("hidden");
    }
    console.log(responseID);
  });
});
