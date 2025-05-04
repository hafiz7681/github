var objek = [
    ['f', 'j', 'd', 'k'],
    ['s', 'l', 'a', ';'],
    ['g', 'h', 't', 'y'],
    ['v', 'm', 'b', 'n'],
    ['c', ',', 'x', '.']
];



// input type='radio'
function radio() {
    const myDiv = document.querySelector('div.radio');
    for (var i = 0; i < 8; i++) {
        const element = document.createElement('input');
        element.setAttribute('type', 'radio');
        element.setAttribute('id', 'arr' + i);
        element.setAttribute('name', 'arr');
        myDiv.appendChild(element);
    }
} radio();



// aksi input radio ketika di click
var arr = objek[0];
for(let i = 0; i < objek.length; i++) {
    const arry = document.querySelectorAll("input[type='radio']");
    arry[i].addEventListener('click', function() {
        arr = objek[i];
    });
}



// mengacak nilai dari array
function random(array) {
    // hitung isi array
    const jmlHuruf = array.length;

    // random * isi array
    const random = Math.random()*jmlHuruf;
    // random dibulatkan kebawah
    const i = Math.floor(random);

    // kembalikan arr dengan index acak
    return array[i];
}


// membuat element h2 dan isinya
function print(array) {
    const div = document.querySelector('div.container');

    let length = null;
    if (window.innerWidth === 384) length = 20;
    if (window.innerWidth === 758) length = 40;
    if (window.innerWidth > 758) length = 80;

    for (let i = 0; i < length; i++) {
        const element = document.createElement('h2');
        const textNode = document.createTextNode(random(array) + " ");
        element.appendChild(textNode);
        div.appendChild(element);
    }

} print(arr);



// membuat tombol reset
const rbutton = document.getElementById('rButton');
rbutton.addEventListener('click', function() {
    document.getElementById('reset').reset();
});



// membuat tombol untuk reset & random
const raButton = document.getElementById('raButton');
raButton.addEventListener('click', function() {
    const h2 = document.querySelectorAll('h2');
    const myDiv = document.querySelector('.container');

    for (let i = 0; i < h2.length; i++) {
        //h2[i].remove();
        myDiv.removeChild(h2[i]);
        // reset kotak input
        document.getElementById('reset').reset();
    }

    setTimeout(function() {
        print(arr);
    }, 125);
});