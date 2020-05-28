const form = document.getElementById('save-user-form');
form.addEventListener('submit', async function(event) {
  event.preventDefault();
  const response = await fetch('index.php', {
    method: 'POST',
    body: new FormData(form)
  });
  const result = await response.json();
  form.elements.subject.classList.add('input-success');
  form.elements.message.classList.add('input-success');
  if (result.success == true) {
    document.getElementById('success-message').style.visibility = 'visible';
  } else {
    document.getElementById('success-message').style.visibility = 'hidden';
  }
  for (key in result) {
    if (key == 'email') {
      result[key] ? form.elements.email.classList.add('input-success') : form.elements.email.classList.add('input-error');
    }
    if (key == 'name') {
      result[key] ? form.elements.name.classList.add('input-success') : form.elements.name.classList.add('input-error');
    }
  }
});
form.elements.name.addEventListener('click', function() {
  form.elements.name.classList.remove('input-error');
  form.elements.name.classList.remove('input-success');
});
form.elements.email.addEventListener('click', function() {
  form.elements.email.classList.remove('input-error');
  form.elements.email.classList.remove('input-success');
});
form.elements.subject.addEventListener('click', function() {
  form.elements.subject.classList.remove('input-success');
});
form.elements.message.addEventListener('click', function() {
  form.elements.message.classList.remove('input-success');
});