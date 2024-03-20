var imageArray = new Array(4);
imageArray[0] = "images/friends.jpeg";
imageArray[1] = "images/siblings.jpeg";
imageArray[2] = "images/TS_concert.jpeg";
imageArray[3] = "images/Shayne.jpeg";

var textArray = new Array(4);
textArray[0] = "My friends and I over winter break";
textArray[1] = "My siblings and I seeing the Barbie movie";
textArray[2] = "I went to the Taylor Swift concert in June";
textArray[3] = "This is Shayne and I at the Sear's Tower";

var imageCounter = 0;
function rotate(){
  var image = document.getElementById('rotateImage');
  image.src = imageArray[imageCounter];
  var text = document.getElementById('correspondingText');
  text.innerHTML = textArray[imageCounter];
  imageCounter++;
  if (imageCounter == 4){
    imageCounter = 0;
  }

}

function begin(){
  document.getElementById('rotateImage').src=imageArray[3];
  setInterval('rotate()', 2000);
}