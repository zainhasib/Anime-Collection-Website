var myVideo = document.getElementById("video1");
myVideo.volume = 0.5;
// On-Click functions


$("#naruto").on("click", function(e) {
    $("#vid").attr("src", "movie1.mp4");
    console.log("ads");
});


function playPauseVideo() {
    if (myVideo.paused){
        myVideo.play();
        $('#btnPlayPause').css('background', 'url("control/pause.png")');
        $('#btnPlayPause').css('background-size', 'cover');
        
        }
    else{
        myVideo.pause();
        $('#btnPlayPause').css('background', 'url("control/play.png")');
        $('#btnPlayPause').css('background-size', 'cover');
    }
}

function stopVideo() {
    myVideo.currentTime = 0;
    myVideo.pause();
}

function replayVideo() {
    myVideo.currentTime = 0;
    myVideo.play();
}


//the video always maintains its original aspect ratio
function makeBig() {
    $("video").css("width", "100%");
}
 
function makeSmall() {
    $("video").css("width", "50%");
}
 
function makeNormal() {
    $("video").css("width", "auto");
}

function progress() {
    console.log(myVideo.progress);
}

progress();



progressBar = document.getElementById('progress-bar');
/* 
progressBar.onseeking = function () {
    prompt("hey");
} */

progressBar.addEventListener("progress", updateProgressBar);

var percentage = Math.floor((100 / myVideo.duration) * myVideo.currentTime);
console.log(percentage);

 // Update the progress bar
 function updateProgressBar() {
    // Work out how much of the media has played via the duration and currentTime parameters
    var percentage = Math.floor((100 / myVideo.duration) * myVideo.currentTime);
    // Update the progress bar's value
    progressBar.value = percentage;
    // Update the progress bar's text (for browsers that don't support the progress element)
    progressBar.innerHTML = percentage + '% played';
}


myVideo.addEventListener('timeupdate', function() {
    var percent = ((100 / myVideo.duration) * myVideo.currentTime);
    progressBar.value = percent;
    progressBar.innerHTML = percent;
  }, false);

  // Adding Events

  myVideo.addEventListener("click", playPauseVideo);

 // seekbar 
 
function changeSeek () {
 $('#seek').change(function (e) {
    var value = e.target.value;
    myVideo.volume = value;
});
}
changeSeek();

// seekbar complete
var last_volume = myVideo.volume;

$('#btnMute').on("click", function (e) {
    if (myVideo.volume != 0){
        last_volume = myVideo.volume;
        myVideo.volume = 0;
    }else {
        myVideo.volume = last_volume;
        }
});

function naruto_click() {
    $('#vid').attr("src", "movie1.mp4");
    console.log("ads");
}