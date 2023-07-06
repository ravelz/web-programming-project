document.addEventListener('DOMContentLoaded', function() {
    var sidebar = document.querySelector('.xenon');
    var overlay = document.querySelector('.overlay');
    var hamburger = document.querySelector('.bi-list');
  
    hamburger.addEventListener('click', function() {
        sidebar.style.display = 'flex';
        overlay.style.display = 'flex';
        sidebar.toggle('slide-right');
    });
  
    overlay.addEventListener('click', function() {
        sidebar.style.display = 'none ';
        overlay.style.display = 'none ';
    });
  });

function toggleButton() {
  
    var button = document.getElementById('follow-other');
    var buttonText = document.getElementById('btn-ikuti-text');

    if (buttonText.textContent === 'Ikuti') {
        buttonText.textContent = 'Berhenti Mengikuti';
        button.classList.remove('btn-primary');
        button.classList.add('btn-danger');
    } else {
        buttonText.textContent = 'Ikuti';
        button.classList.remove('btn-danger');
        button.classList.add('btn-primary');
    }
}
