export default {
  init() {
    // JavaScript to be fired on the home page
    $(function () {
      $(".description").hide();
    });
    $(function() {
      $("#home, #about, #contactus").click(function() {
         $(this).find(".description").slideToggle("slow").siblings().toggleClass("active");
      });
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
