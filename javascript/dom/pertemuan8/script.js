var close = document.querySelectorAll('.close');

/*for (let i = 0; i < card.length; i++) {
    close[i].addEventListener('click', function() {
        close[i].parentElement.style.display = 'none';
    });
}*/

close.forEach(function(e) {
    e.addEventListener('click', function() {
        let el = e.parentElement;
        el.parentElement.removeChild(el);
    });
});