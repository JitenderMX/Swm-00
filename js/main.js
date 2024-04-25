// Loading Common Element Using External File
$("#header").load("header.html");
$("#footer").load("footer.html");
$("#enroll-now").load("enroll-now.html");

$(window).on("load", function () {
    var windowWidth = $(window).width();

    if (windowWidth <= 768) {
       
    } else {
        // $(".rh-img .row").slick("unslick");
    }
});

function pinAnimations() {
    var windowWidth = $(window).width();
    if (windowWidth >= 768) {
        gsap.registerPlugin(ScrollTrigger);
        // gsap.utils.toArray(".section-pin").forEach((section, i) => {
        //     ScrollTrigger.create({
        //         trigger: section,
        //         start: "top top",
        //         pin: true,
        //         pinSpacing: false,
        //         end: "+=400%",
        //         // markers:true,
        //         scrub: true,
        //     });
        // });
        // Select all sections
// const sections = document.querySelectorAll('section');

// // Loop through each section and apply pin animation
// sections.forEach((section, index) => {
//   gsap.to(section, {
//     scrollTrigger: {
//       trigger: section,
//       start: "top top",
//       end: () => "+=" + section.offsetHeight,
//       pin: true,
//       pinSpacing: false,
//       scrub: true
//     }
//   });
// });
    }
}

// Call the function on page load
pinAnimations();
// $(".read-more").click(function () {
//     $(this).parent().find(".read-more-text").toggleClass("d-none");
//     $(this).parent().find("span.three-dot").toggleClass("d-none");
//     if ($(this).attr("data-text") == "Show Less") {
//         $(this).text($(this).attr("data-text"));
//         $(this).attr("data-text", "Read More");
//     } else {
//         $(this).text($(this).attr("data-text"));
//         $(this).attr("data-text", "Show Less");
//     }
// })
//  $(document).ready(function () {
//             var video = $('#curtain-final')[0];

//             // Function to check if the element is in the viewport
//             function isElementInViewport(el) {
//                 var rect = el.getBoundingClientRect();
//                 return (
//                     rect.top >= 0 &&
//                     rect.left >= 0 &&
//                     rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
//                     rect.right <= (window.innerWidth || document.documentElement.clientWidth)
//                 );
//             }

//             // Function to play the video if it's in the viewport
//             function playVideoIfVisible() {
//                 if (isElementInViewport(video)) {
//                     video.play();
//                     $(window).off('scroll', playVideoIfVisible); // Remove the scroll event listener once the video is played
//                 }
//             }

//             // Initial check when the page loads
//             playVideoIfVisible();

//             // Check again as the user scrolls
//             $(window).on('scroll', playVideoIfVisible);
//         });

$(document).ready(function () {
    // Get the video element
    var video = $('.curtain-final'); // Convert jQuery object to DOM element

    // Set up the Intersection Observer
    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                // If the video is visible on the screen, play it
                video.play();
            } else {
                // If the video is not visible, pause it
                video.pause();
            }
        });
    });

    // Start observing the video element
    observer.observe(video);
});