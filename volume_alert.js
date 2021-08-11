// Access Volume Monitor: https://agile-cliffs-23967.herokuapp.com/binance

// Copy and past on chrome console:

var audio = new Audio("/static/beep.wav");
var audioCtx = new AudioContext();
var source = audioCtx.createMediaElementSource(audio);

// create a gain node
var gainNode = audioCtx.createGain();
gainNode.gain.value = 10; // double the volume
source.connect(gainNode);

// connect the gain node to an output destination
gainNode.connect(audioCtx.destination);


var dangerCount = $('.is-danger').length;
setInterval(function () {
  var newCount = $('.is-danger').length;
  if (newCount > dangerCount) {
    audio.play();
    dangerCount = newCount;
  }
}, 1000);


// https://stackoverflow.com/questions/17762763/play-wav-sound-file-encoded-in-base64-with-javascript
// https://vocaroo.com/