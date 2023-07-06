//Klik placeholder, terus tulisannya hilang 

var input = document.getElementById("klik-hilang");
var placeholder = input.placeholder;

input.addEventListener("click", function() {
  this.placeholder = "";
});

input.addEventListener("blur", function() {
    input.placeholder = placeholder;
  });


// //sidebar kanan jadi fix pas di scroll pada ketinggian tertentu

// let sidebar = document.getElementsByClassName("bungkus-sidebar")[0];
// let sidebar_content = document.getElementsByClassName("sidebar-kanan")[0];

// window.onscroll=() =>{
//   let scrollTop = window.scrollY;
//   let viewportHeight = window.innerHeight;
//   let contentHeight = sidebar_content.getBoundingClientRect().height;
//   let sidebarTop = sidebar.getBoundingClientRect().top + window.pageYOffset;


//   if(scrollTop>= contentHeight - viewportHeight){
//     sidebar_content.style.position = "fixed";
//   }
//   else{
//     sidebar_content.style.position = "";
//   }
// }

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



