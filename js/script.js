$(document).ready(function () {
  // Call the checkViewportWidth function on window load and resize
  $(window).on('load resize', function () {
    checkViewportWidth();
  });

  function checkViewportWidth() {
    var viewportWidth = $(window).width();

    if (viewportWidth <= 576) {
      // Code for small devices (576px and down)
      console.log('Small device');
    } else if (viewportWidth <= 768) {
      // Code for medium devices (768px and down)
      // $("#testimonial-b").addClass("testimonial-slider");
      console.log('Medium device');
    } else if (viewportWidth <= 992) {
      // Code for large devices (992px and down)
      console.log('Large device');
    } else if (viewportWidth <= 1200) {
      // Code for extra large devices (1200px and down)
      console.log('Extra Large device');
    } else {
      // Code for larger devices
      console.log('Larger than 1200px');
    }
  }
});
