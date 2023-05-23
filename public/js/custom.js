$(document).ready(function () {
  $('.toggle-button').click(function () {
    $('.sidebar').toggleClass('collaspe');
    $('.header-page-footer').toggleClass('expand');

    // $('i.bx-menu').attr('class', 'bx bx-x fs-3');
    // $('i.bx-menu').toggleClass('bx-menu bx-x');

  });
});