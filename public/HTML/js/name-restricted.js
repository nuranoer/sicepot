$('input[name="nama_lengkap"]').on("keypress", function (event) {
  var x = event.which || event.keyCode;
  if ((x >= 65 && x <= 90) || (x >= 97 && x <= 122) || x === 32) {
    return true;
  } else {
    return false;
  }
});

$('input[name="nik"]').on("keypress", function (event) {
  var x = event.which || event.keyCode;
  if (x >= 48 && x <= 57) {
    return true;
  } else {
    return false;
  }
});
