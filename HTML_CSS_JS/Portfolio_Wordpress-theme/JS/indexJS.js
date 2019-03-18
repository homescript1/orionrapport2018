$(function() {
  $(".btncosmos").hover(function() {
    $(".first-main").toggleClass("premiereOuverture");
  });
});

$(function() {
  $(".btncosmos").click(function() {
    $(".first-main").toggleClass("deuxiemeOuverture");
    $(".btncosmos").css({
      color: "blue",
      "background-color": "rgba(51, 255, 0, 0.616)"
    });

    /* $(".btncosmos")
      .attr("href", "welcome.html")
      .delay(5000);*/
  });
});
