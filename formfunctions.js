function show_devtype(type) {
    var lev2_elements = document.getElementsByClassName('level2');
    for (var i = lev2_elements.length - 1 ; i >= 0 ; i--) {
        var classname = lev2_elements[i].getAttribute('class');
        if (classname.includes(type)) {
            lev2_elements[i].setAttribute('class','level2 ' + type);
        } else {
            lev2_elements[i].className += " hidden";
        }
    }
}

function show_levels_3_and_4() {
    var lev3_elements = document.getElementsByClassName('level3');
    for (var i = lev3_elements.length - 1 ; i >= 0 ; i--) {
        lev3_elements[i].className -= " hidden";
    }
    var lev4_elements = document.getElementsByClassName('level4');
    for (var i = lev4_elements.length - 1 ; i >= 0 ; i--) {
        lev4_elements[i].className -= " hidden";
    }}