var close = document.querySelectorAll('.close');
var nama = document.querySelector('.nama');

/*for (let i = 0; i < card.length; i++) {
    close[i].addEventListener('click', function() {
        close[i].parentElement.style.display = 'none';
    });
}*/

close.forEach(function(el) {
    el.addEventListener('click', function(e) {
        e.target.parentElement.remove();
        // akan membatalkan aksi default
        e.preventDefault();
        // menghentikan tindakan berlebihan
        e.stopPropagation();
    });
});


const cards = document.querySelectorAll('.card');
cards.forEach(function(card) {
    card.addEventListener('click', function(e) {
        alert('card di klik');
    });
});


// mengambil element pembungkus
console.log(nama.parentNode);
console.log(nama.parentElement);

// mengambil saudara dari element/node kedepan
console.log(nama.nextSibling);
console.log(nama.nextElementSibling);

// mengambil saudara dari element/node kebelakang
console.log(nama.previousSibling);
console.log(nama.previousElementSibling);