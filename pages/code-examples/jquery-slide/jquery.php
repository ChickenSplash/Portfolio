$(".slide").hide();

// Iterates through each icon button and adds an event listener
$('.show-details-button').click(function () {
    // The target variable gets set as an id selector string e.g. "#sass-slide"
    let target = $(this).data('target');

    // Slide up all other sliders first
    $('.slide').not(target).slideUp(350);

    $(target).is(':visible') // Toggle the target content
        ? $(target).slideUp(350) // Target visible? slide up
        : $(target).slideDown(350); // Else slide it down
});