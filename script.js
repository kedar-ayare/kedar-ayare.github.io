const carousel = document.querySelector('.carousel');
let scrollAmount = 0;

function scrollLeft() {
    
    carousel.scrollBy({ 
        top: 0, 
        left: -200, 
        behavior: 'smooth' 
    });
}

function scrollRight() {
    carousel.scrollBy({ 
        top: 0, 
        left: 200, 
        behavior: 'smooth' 
    });
}