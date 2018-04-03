$('.addForm').hide();
$('.loginForm').hide();

$('#addTitle').on('click', function() {
  $('.addForm').slideToggle();
})

$('#addLogin').on('click', function() {
  $('.loginForm').slideToggle();
})
