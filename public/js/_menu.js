$(document).ready(function () {
    const menus = $("ul.nav>li>a");
    let menuIter = menus.length;
    while (menuIter--) {
        if (window.location.href.indexOf($(menus[menuIter]).attr("href")) !== -1) {
            //set menu active
            $(menus[menuIter]).parent().addClass("active");
            //expand submenu if under a parent menu
            if ($(menus[menuIter]).parent().parent().parent().hasClass("collapse")) {
                $(menus[menuIter]).parent().parent().parent().collapse("show")
            }
            //scroll to that menu
            setTimeout(function () {
                menus[menuIter].scrollIntoView();
            }, 1000)

            break;
        }
    }
    ;
});

