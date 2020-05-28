const slidesAmount = 5;
const header = document.getElementById('header');
const rightBtn = document.getElementById('right-slider-btn');
const leftBtn = document.getElementById('left-slider-btn');

let num = 0;
let firstClientWidth = document.documentElement.clientWidth;
document.querySelector('header').style.transition = '0.7s';
rightBtn.addEventListener('click', function() {
  if (num == slidesAmount - 1) {
    num = 0;
  } else {
    num++;
  }
  changeSlide(num);
});
leftBtn.addEventListener('click', function() {
  if (num == 0) {
    num = slidesAmount - 1;
  } else {
    num--;
  }
  changeSlide(num);
});
setInterval(() => {
  if (document.documentElement.clientWidth != firstClientWidth) {
    changeSlide(num);
  }
}, 200);


function changeSlide(num) {
  header.style.marginLeft = -1 * num * document.documentElement.clientWidth + 'px';
}
