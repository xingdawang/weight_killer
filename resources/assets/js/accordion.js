$(document).ready(function() {

  $(".toggle-accordion").on("click", function() {
    var accordionId = $(this).attr("accordion-id"),
    numPanelOpen = $(accordionId + ' .collapse.in').length;
    
    $(this).toggleClass("active");

    if (numPanelOpen == 0) {
      $(".collapse-all").removeClass('hide');
      $(".expand-all").addClass('hide');
      openAllPanels(accordionId);
    } else {
      $(".collapse-all").addClass('hide');
      $(".expand-all").removeClass('hide');
      closeAllPanels(accordionId);
    }
  })

  openAllPanels = function(aId) {
    // console.log("setAllPanelOpen");
    $(aId + ' .panel-collapse:not(".in")').collapse('show');
  }
  closeAllPanels = function(aId) {
    // console.log("setAllPanelclose");
    $(aId + ' .panel-collapse.in').collapse('hide');
  }
  
});