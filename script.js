jQuery(function () {
    jQuery('a#button-collapse').sideNav({
        menuWidth: 350
    });

    jQuery('ul.tabs').tabs({
        onShow: function (tab) {
            console.log(tab);
            //Materialize.showStaggeredList(tab);
        }
    });
 
    jQuery('.collapsible').collapsible();

    jQuery(".dropdown-button").dropdown();

    jQuery('input.devsite-search-field').focus(function () {
        var p = jQuery(this).parent();
        p.addClass('focused');
        p.parent().addClass('focused');
    });
    jQuery('input.devsite-search-field').blur(function () {
        if (!jQuery(this).val()) {
            var p = $jQuery(this).parent();
            p.removeClass('focused');
            p.parent().removeClass('focused')
        }
    });

    console.log('loaded ...');
});