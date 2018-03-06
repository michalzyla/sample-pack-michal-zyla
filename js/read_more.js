$('.rm-content').addClass('hide')
$('.rm-show, .rm-hide').removeClass('hide')

$('.rm-show').on('click', function(e) {
  $(this).next('.rm-content').removeClass('hide');
  $(this).addClass('hide');
  e.preventDefault();
});

$('.rm-hide').on('click', function(e) {
  var p = $(this).parent('.rm-content');
  p.addClass('hide');
  p.prev('.rm-show').removeClass('hide');
  e.preventDefault();
});