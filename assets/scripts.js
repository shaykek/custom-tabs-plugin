jQuery(document).ready(function ($) {
  $(".custom-tabs__title").on("click", function (e) {
    e.preventDefault();
    const tab = $(this).data("tab");
    const panel = $(`[data-tab-panel="${tab}"]`);

    if (!panel.length) {
      return;
    }

    $(this)
      .attr("aria-selected", "true")
      .siblings()
      .attr("aria-selected", "false");

    panel
      .addClass("active")
      .siblings(".custom-tabs__tab")
      .removeClass("active");
  });
});
