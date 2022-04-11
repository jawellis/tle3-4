const video = document.getElementById('webcam');
const label = document.getElementById("label");
let classifier;

const featureExtractor = ml5.featureExtractor('MobileNet', modelLoaded);

if (navigator.mediaDevices.getUserMedia) {
    navigator.mediaDevices.getUserMedia({ video: true })
        .then((stream) => {
            video.srcObject = stream
        })
        .catch((err) => {
            console.log("Something went wrong!");
        });
}


// When the model is loaded
function modelLoaded() {
    console.log('Model Loaded!');
    classifier = featureExtractor.classification(video, videoReady);
  }

function videoReady(){
    console.log(classifier)
}

