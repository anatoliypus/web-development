window.onload = function() {
  const formBlock = document.getElementById('form-block');
  const offset = formBlock.getBoundingClientRect().top;
  window.scrollTo(0, offset);
};