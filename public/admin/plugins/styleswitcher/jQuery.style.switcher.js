setTheme();

$('#themecolors').on('click', 'a', function () {
    $('#themecolors li a').removeClass('working');
    $(this).addClass('working');
    store('theme', $(this).attr('theme'));
    setTheme();
});

function setTheme() {
    var currentTheme = getThemeFromLocal('theme');

    if (currentTheme) {
        $('#theme').attr({href: `${$('#theme').attr('asset')}/css/colors/${currentTheme}.css`});
    }
}

function store(name, val) {
    if (typeof (Storage) !== "undefined") {
        localStorage.setItem(name, val);
    } else {
        window.alert('Please use a modern browser to properly view this template!');
    }
}

function getThemeFromLocal(name) {
    return localStorage.getItem(name);
}
