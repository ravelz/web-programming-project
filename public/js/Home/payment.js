const submitBtn = document.getElementById('klik-bayar');
const spinner = document.getElementById('spinner');

window.addEventListener('pageshow', function(event) {

  spinner.style.display = 'none';
  submitBtn.disabled = false;
});

submitBtn.addEventListener('click', function() {

  spinner.style.display = 'block';
  submitBtn.disabled = true;

  setTimeout(function() {
    window.location.href = '/paySuccess';
  }, 3000);
});