let body = document.querySelector('body');

// Get the button and iframe elements
const popUpWindow = document.querySelector('.popup-video-wrap');
const playButton = document.querySelector('#playButton');
const reelButton = document.querySelector('.reelButton');
const reelButtonFooter = document.querySelector('.reelButtonFooter');
const videoCloseButton = document.querySelector('#videoCloseButton');
const videoFrame = document.querySelector('#videoFrame');

let blurMe;


playButton ? playButton.addEventListener('click', function() {
  openVideo();
  blurMe = setInterval(function(){
    videoFrame.blur();
  },2000);
}) : '';

reelButton ? reelButton.addEventListener('click', function(e) {
  e.preventDefault();
  openVideo();
  blurMe = setInterval(function(){
    videoFrame.blur();
  },2000);
}) : '';

reelButtonFooter ? reelButtonFooter.addEventListener('click', function(e) {
  e.preventDefault();
  openVideo();
  blurMe = setInterval(function(){
    videoFrame.blur();
  },2000);
}) : '';


videoCloseButton ? videoCloseButton.addEventListener('click', function() {
  closeVideo();
  clearInterval(blurMe);
}) : '';

document.addEventListener('keydown', function(event) {
  let isVideoOpen = document.querySelector('.popup-video-wrap.--open');
  if (isVideoOpen && event.key === 'Escape') {
    closeVideo();
  }
});

function openVideo() {
  popUpWindow.hidden = false;
  const url = 'https://player.vimeo.com/video/68304301?color=d8fe51&quality=720p&autoplay=1&muted=0';
  setTimeout(() => {
    popUpWindow.classList.add('--open');
    body.style.overflowY = 'hidden';
    videoFrame.src = url;
  },100)
}

function closeVideo() {
  popUpWindow.hidden = true;
  body.style.overflowY = 'visible';
  popUpWindow.classList.remove('--open');
  videoFrame.src = '';
}
