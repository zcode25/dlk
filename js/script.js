var el = document.getElementById("myAudio");
document.getElementById("rngVolume").addEventListener('input', setVolume);

function setVolume() {
    var volume = document.getElementById('rngVolume').value;
    el.volume = volume;
}

function playAudio() {
    el.play();
}

function pauseAudio() {
    el.pause();
}

function myFunction() {
    var x = document.getElementById("vidtop-content");

    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        if (current.length > 0) {
            current[0].className = current[0].className.replace(" active", "");
        }
        this.className += " active";
    });
}