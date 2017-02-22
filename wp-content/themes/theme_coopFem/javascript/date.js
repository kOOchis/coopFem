$(".date_month").each(function() {
  var elemP = $(this);
  var separation = $(this).text().substring(0,5);
  elemP.replaceWith('<p class="date_month">' + separation + "</p>");
});
