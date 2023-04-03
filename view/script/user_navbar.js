$(document).ready(function() {
    
    $('a[data-toggle="collapse"]').click(function() {
      
      var navbar = $($(this).attr('href'));
      navbar.slideToggle();
      $(this).find('i').toggleClass('fa-angle-down fa-angle-up');
      return false;
    });
});
    