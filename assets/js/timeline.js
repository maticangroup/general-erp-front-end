(function ($) {
    "use strict";

    //horizontal timeline

    let timeLineObject = document.querySelectorAll('.timeline');
    timeline(timeLineObject, {
        forceVerticalMode: 700,
        mode: 'horizontal',
        verticalStartPosition: 'left',
        visibleItems: 4
    });

    //vertical timeline

})(jQuery);