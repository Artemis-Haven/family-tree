
function toggleSidebar (ajaxUrl) {
    // Empêcher de lancer la fonction si elle est en cours d'execution
    if (togglingSidebar) return false;
    var togglingSidebar = true;

    var hideBtn =  $('#hideBtn');
    var hideBtnIcon = $(' > span.glyphicon', hideBtn);
    var sidebar = $('.sidebar');
    var principal = $('.principal');
    var sidebarVisible = hideBtn.hasClass('open');

    if ( sidebarVisible )
    {   // Sidebar affichée
        principal.removeClass('col-md-9 col-md-offset-3', 500);
        hideBtn.removeClass('open').addClass('closed');
        principal.addClass('col-md-12');
        hideBtnIcon.removeClass('glyphicon-chevron-left', 500)
                   .addClass('glyphicon-chevron-right');
    } else { // Sidebar masquée
        principal.addClass('col-md-9 col-md-offset-3', 500)
                 .queue(function() {
                    principal.removeClass('col-md-12').dequeue();
                 });
        hideBtn.addClass('open').removeClass('closed');
        hideBtnIcon.removeClass('glyphicon-chevron-right')
                   .addClass('glyphicon-chevron-left');
    }

    $.ajax({
        type: 'POST',
        url: ajaxUrl,
        data: { hideSidebar: sidebarVisible },
        timeout: 3000
    });
}