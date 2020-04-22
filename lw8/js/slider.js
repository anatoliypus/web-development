const clientWidth = document.documentElement.clientWidth;
const slidesAmount = 5;
const header = document.getElementById('header');
const rightBtn = document.getElementById('right-slider-btn');
const leftBtn = document.getElementById('left-slider-btn');

function run() {
  let num = 0;

  rightBtn.addEventListener('click', function() {
    if (num == 0) {
      num = slidesAmount - 1;
    } else {
      num--;
    }
    changeSlide(num);
  });
  leftBtn.addEventListener('click', function() {
    if (num == slidesAmount - 1) {
      num = 1;
    } else {
      num++;
    }
    changeSlide(num);
  });
}

function changeSlide(num) {
  header.style.marginLeft = -1 * num * clientWidth + 'px';
}

window.onload = run;
