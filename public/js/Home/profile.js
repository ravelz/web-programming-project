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
  