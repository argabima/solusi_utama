const mobileScreen = window.matchMedia("(max-width: 990px )");
$(document).ready(function () {
  $(".sidebar-nav-dropdown-toggle").click(function () {
    $(this)
      .closest(".sidebar-nav-dropdown")
      .toggleClass("show")
      .find(".sidebar-nav-dropdown")
      .removeClass("show");
    $(this).parent().siblings().removeClass("show");
  });
  $(".menu-toggle").click(function () {
    if (mobileScreen.matches) {
      $(".sidebar").toggleClass("mobile-show");
    } else {
      $(".admin-menu").toggleClass("dashboard-compact");
      let icon = $(this).find("i");
      if (icon.hasClass("fa-bars")) {
        icon.removeClass("fa-bars").addClass("fa-angles-right");
      } else {
        icon.removeClass("fa-angles-right").addClass("fa-bars");
      }
    }
  });

  closeNav = function () {
    let content = $(".main-content") || $(".sidebar");
    $("#search-phone").click(function () {
      $("#search-toolbar").addClass("d-flex");
    });
    content.click(function () {
      if ($("#search-toolbar").hasClass("d-flex")) {
        $("#search-toolbar").removeClass("d-flex");
      }
    });
    let mobbileNav = $(".admin-menu").find(".mobile-show");
    $(".main-content").click(function () {
      if (mobbileNav) {
        $(".sidebar").removeClass("mobile-show");
      }
    });
  };
  closeNav();
});
