document.addEventListener( 'DOMContentLoaded', function() {
    var splide = new Splide( '.splide', {
        type   : 'loop',
        perPage: 1,
        autoplay    : true,
        cover : true
    });
    splide.mount();
} );



/* 
splide.on( 'active', function(e) {  
    const element = document.querySelectorAll('.title');
    element[e.index].classList.add('animate__animated', 'animate__fadeInRight');
});

splide.on( 'inactive', function(e) {    
    const element = document.querySelectorAll('.title');
    element[e.index].classList.remove('animate__animated', 'animate__fadeInRight');  
});
 */