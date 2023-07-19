let menuBtn = document.querySelector('#navOpen');
let menuCloseBtn = document.querySelector('#navClose');
let navMenu = document.querySelector('.nav');
let body = document.querySelector('body');

let header = document.querySelector('header');
let hero = document.querySelector('.hero-wrap');
let scroll;

// Get the button and iframe elements
const popUpWindow = document.querySelector('.popup-video-wrap');
const playButton = document.querySelector('#playButton');
const reelButton = document.querySelector('.reelButton');
const reelButtonFooter = document.querySelector('.reelButtonFooter');
const videoCloseButton = document.querySelector('#videoCloseButton');
const videoFrame = document.querySelector('#videoFrame');
let blurMe;

// Atropos Parallax
const sportsAtropos = Atropos({
  el: '.sports--atropos',
  stretchY: -15,
  stretchZ: -15,
  shadow: false,
  activeOffset: 0,
  rotateXMax: 4,
  rotateYMax: 6,

  rotateTouch: 'scroll-y',
  alwaysActive: true,
  duation: 3000,
  highlight: false,
});
const sportsCinemaAtropos = Atropos({
  el: '.sports-cinema--atropos',
  shadow: false,
  activeOffset: 0,
  rotateXMax: 3,
  rotateYMax: 3,
  rotateTouch: 'scroll-y',
  alwaysActive: true,
  duation: 3000,
  highlight: false,
});
const fanBehaviorAtropos = Atropos({
  el: '.fan-behavior--atropos',
  shadow: false,
  activeOffset: 0,
  rotateXMax: 15,
  rotateYMax: 15,
  rotateTouch: 'scroll-y',
  alwaysActive: true,
  highlight: false,
  duation: 3000,
});
const athleteCentricAtropos = Atropos({
  el: '.athlete-centric--atropos',
  shadow: false,
  activeOffset: 20,
  rotateXMax: 20,
  rotateYMax: 20,
  rotateTouch: 'scroll-y',
  alwaysActive: true,
  highlight: false,
  duation: 10000,
});
const bubbleAtropos = Atropos({
  el: '.stories',
  shadow: false,
  activeOffset: 0,
  rotateXMax: 5,
  rotateYMax: 15,
  rotateTouch: 'scroll-y',
  alwaysActive: true,
  highlight: false,
});
const creatorsStoriesAtropos = Atropos({
  el: '.creators-stories--atropos',
  shadow: false,
  activeOffset: 3,
  rotateXMax: 4,
  rotateYMax: 6,
  rotateTouch: 'scroll-y',
  alwaysActive: true,
  highlight: false
});
const ourServicesAtropos = Atropos({
  el: '.our-services--atropos',
  shadow: false,
  activeOffset: 1,
  rotateXMax: 1,
  rotateYMax: 1,
  rotateTouch: 'scroll-y',
  alwaysActive: true,
  highlight: false
});
const prefooterAtropos = Atropos({
  el: '.prefooter--atropos',
  shadow: false,
  activeOffset: 0,
  rotateXMax: 3,
  rotateYMax: 3,
  rotateTouch: 'scroll-y',
  alwaysActive: false,
  highlight: false,
});


// Navigation
menuBtn.addEventListener('click', (e) => {
  e.preventDefault();
  openNav();
});

menuCloseBtn.addEventListener('click', (e) => {
  e.preventDefault();
  closeNav();
});

function openNav() {
  body.style.overflowY = 'hidden';
  navMenu.classList.add('--open');
};

function closeNav() {
  body.style.overflowY = 'visible';
  navMenu.classList.remove('--open');
};

// function stickyNav() {
//   let heroHeight;
//   if (hero && hero !== null) {
//     heroHeight = hero.offsetHeight;
//   } else {
//     heroHeight = 0;
//   }
//   let scrollPosition = document.documentElement.scrollTop || window.pageYOffset;
//   // console.log(scrollPosition, heroHeight)
//   if (scrollPosition >= heroHeight) {
//       header.classList.add('--scrolled');
//   } else {
//       header.classList.remove('--scrolled');
//   }
// };


// Reel Video Overlay
playButton ? playButton.addEventListener('click', function() {
  openVideo();
  spamBlur();
}) : '';

reelButton ? reelButton.addEventListener('click', function(e) {
  e.preventDefault();
  openVideo();
  spamBlur();
}) : '';

reelButtonFooter ? reelButtonFooter.addEventListener('click', function(e) {
  e.preventDefault();
  openVideo();
  spamBlur();
}) : '';

videoCloseButton ? videoCloseButton.addEventListener('click', function() {
  closeVideo();
}) : '';

// ESC Key
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
  clearInterval(blurMe); // Stop blur
}

function spamBlur() {
  blurMe = setInterval(function(){
    videoFrame.blur();
  },2000);
}
