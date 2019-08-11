$(document).ready(function() {
    var elements = document.getElementsByClassName('nav-item');

    if(sessionStorage.getItem("navSelected") != null) {
        for(var i = 0; i < elements.length; i++) {
            if(i == sessionStorage.getItem("navSelected")) {
                elements[i].classList.add('active');
            }
        }   
    }
    else {
        elements[0].classList.add('active')
    }    
});


function check(position) {
    sessionStorage.setItem("navSelected", position);
}