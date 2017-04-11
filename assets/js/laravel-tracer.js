document.addEventListener("DOMContentLoaded", function(e) {

    function toggleTrace() {
        var traces = document.getElementsByClassName('laravel-trace');

        for(var i = 0; i < traces.length; i++){
            if (traces[i].classList.contains('no-trace')) {
                traces[i].classList.remove('no-trace');
            } else {
                traces[i].classList.add('no-trace');
            }
        }
    }

    function KeyPress(e) {
        var evtobj = window.event? event : e
        if (evtobj.keyCode == 90 && evtobj.ctrlKey) toggleTrace();
    }

    document.onkeydown = KeyPress;

});