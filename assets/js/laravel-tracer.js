document.addEventListener("DOMContentLoaded", function(e) {

    function toggleTrace() {
        var traces = document.getElementsByClassName('laravel-trace');

        for(var i = 0; i < traces.length; i++){
            if (traces[i].classList.contains('hidden')) {
                traces[i].classList.remove('hidden');
            } else {
                traces[i].classList.add('hidden');
            }
        }
    }

    function KeyPress(e) {
        var evtobj = window.event? event : e
        if (evtobj.keyCode == 90 && evtobj.ctrlKey) toggleTrace();
    }

    document.onkeydown = KeyPress;

});