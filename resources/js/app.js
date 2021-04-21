require('./bootstrap');

import $ from 'jquery';
window.$ = window.jQuery = $;

$(".custom-file-input").on("change", function () {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

$('#add').click(function (e) {
  e.preventDefault();
  $('#form_body').append('<tr><td><input type="text" class="form-control" name="name[]"></td><td><input type="number" class="form-control" name="phone[]"></td><td><input type="date" class="form-control" name="validity[]"></td><td><input type="number" class="form-control" name="amount[]"></td><td><input type="button" class="btn btn-danger" name="remove" id="remove" value="Remove"></td></tr>');
});
$('#remove').click(function (e) {
  if ($('#form_body').children('tr').length > 1) {
    console.log($('#remove').index())
    $('#form_body').children('tr').last().remove();
  }
});

