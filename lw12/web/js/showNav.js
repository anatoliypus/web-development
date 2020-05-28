let counter = 0;
const btn = document.querySelector('.mobile-nav-btn');
document.body.style.transition = '0.5s';
btn.addEventListener('click', function() {
  if (counter == 0) {
    counter = 1;
    document.body.style.position = 'fixed';
    document.body.style.overflowX = 'visible';
    document.body.style.marginLeft = '-50%';
    document.querySelector('.mobile-nav-btn').style.transform = 'rotate(90deg)';
    document.querySelector('html').style.height = '100%';
  } else {
    counter = 0;
    document.querySelector('.mobile-nav-btn').style.transform = 'rotate(0deg)';
    document.body.style.marginLeft = '0';
    setTimeout(() => {document.body.style.position = 'static'}, 500);
  }
});
