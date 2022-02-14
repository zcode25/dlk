<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="logo.png">
    <title>Drive Listen Korea</title>
</head>

<body>
    <div class="video-background">
        <div class="video-foreground">
            <iframe src="https://www.youtube.com/embed/?list=PLNl8d1oYl-Loc5n9xifM0APcnhUyEDbcv&index=<?php print rand(1, 17) ?>&controls=0&showinfo=0&rel=0&autoplay=1&mute=1&loop=1&start=200&end=200" allowtransparency="true" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>

    <div class="hide">
        <a onclick="myFunction()"><img src="icon.png" width="15px" alt=""></a>
    </div>

    <div id="vidtop-content">
        <div class="vid-info">
            <h3>Drive Listen Korea</h3>
            <audio autoplay id="myAudio">
                <source src="https://listen.moe/kpop/stream" type="audio/mpeg">
            </audio>
            <div id="myDIV">
                <p><b>Listen K-pop</b></p>
                <a class="btn" onclick="playAudio()">Play Audio</a>
                <a class="btn" onclick="pauseAudio()">Pause Audio</a>
                <div class="slidecontainer">
                    <input type="range" class="slider" id="rngVolume" min="0" max="1" step=".01" value=".5" />
                </div>
            </div>
            <br>
            <p><b>About Us</b></p>
            <a class="follow" href="https://www.instagram.com/zcode25/" target="_blank">Follow Us</a>
            <a class="sawer" href="https://saweria.co/azein25" target="_blank">Donate</a>
            <br>
            <p>Production</p>
            <p class="info-2">ZCODE</p>
            <p class="info">© 2022 Drive Listen Korea.</p>
        </div>
    </div>

    <script type="text/javascript">
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
    </script>
</body>

</html>