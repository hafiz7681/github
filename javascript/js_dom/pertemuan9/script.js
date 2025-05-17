var container = document.querySelector('.container');

container.addEventListener('click', function(e) {
    if(e.target.className == 'close') {
        // e.target mengambil element yang di klik
        e.target.parentElement.remove();
        
        e.preventDefault();
    }
});