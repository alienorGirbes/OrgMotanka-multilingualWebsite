console.log('get it');


// document.addEventListener('DOMContentLoaded', function() {
//     var elems = document.querySelectorAll('.sidenav');
//     var instances = M.Sidenav.init(elems, options);
//   });



// on active JQuery
$(document).ready(function() {

    // activation dropdown
    $(".dropdown-trigger").dropdown();

    // activation sidenav-trigger
    $('.sidenav').sidenav();

    // activation modal-trigger
    $('.modal').modal();
            
     
});