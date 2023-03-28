$(document).ready(function() {
    
    $('a[data-toggle="collapse"]').click(function() {
      
      var navbar = $($(this).attr('href'));
      navbar.slideToggle();
      $(this).find('i').toggleClass('fa-angle-down fa-angle-up');
      return false;
    });
});
    

  // $('.navbar-toggler').click(function(){
  //     $('#navbarCollapse').toggleClass('show');
  // });


const navbar=document.getElementById("navbarCollapse");
console.log(navbar);
const navbarButton = document.getElementById("navbarButton");
console.log(navbarButton);
navbarButton.addEventListener('click',function(){
  navbar.toggleClass('show');
});