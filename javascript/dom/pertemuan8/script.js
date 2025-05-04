var close = document.querySelectorAll('.close');
var nama = document.querySelector('.nama');

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



// mengambil element pembungkus
console.log(nama.parentNode);
console.log(nama.parentElement);

// mengambil element/node yang setara kedepan
console.log(nama.nextSibling);
console.log(nama.nextElementSibling);

// mengambil element/node yang setara kebelakang
console.log(nama.previousSibling);
console.log(nama.previousElementSibling);