export default {
  init() {
    // JavaScript to be fired on the home page
    $(function() {
      var is_visible = false;
      $("#home, #about, #contactus").click(function() {
        var display = "block";
        if (is_visible) {
          display = "none";
        }
        $(this).find(".description").css("display", display);
        is_visible = !is_visible;
      });
    });
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
