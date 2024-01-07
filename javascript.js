async function submitForm(event) {
  event.preventDefault();
  fetch(event.target.action, {
    method: 'POST',
    body: new FormData(event.target),
  });

  let info = document.querySelector('.customers-info');
  info.style.display = 'block';

  setTimeout(() => (info.style.display = 'none'), 2000);

  document.querySelector('#form').reset();
}
