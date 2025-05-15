const body = document.getElementsByTagName('body')[0];
const button = document.getElementsByTagName('button')[0];

// membuat toggle on/off
button.addEventListener('click', function() {
    body.classList.toggle('text');
});




// membuat button2
const button2 = document.createElement('button');
const text = document.createTextNode('tombol2');

button2.appendChild(text);
button2.setAttribute('type', 'submit');
button.after(button2);

// membuat warna acak dengan rgb(0,0,0)
button2.addEventListener('click', function() {
    const r = Math.round(Math.random() * 255 * 1);
    const g = Math.round(Math.random() * 255 * 1);
    const b = Math.round(Math.random() * 255 * 1);
    body.style.backgroundColor = 'rgb('+r+','+g+','+b+')';
    console.log(r,g,b);
});




// input tipe range bisa diambil nilainya dengan addEventListener change(ketika mouse dilepas) atau input(ketika mouse digeser)
const sMerah = document.querySelector('input[name=sMerah]');
const sHijau = document.querySelector('input[name=sHijau]');
const sBiru = document.querySelector('input[name=sBiru]');
sMerah.addEventListener('input', function() {
    const r = sMerah.value;
    const b = sBiru.value;
    const g = sHijau.value;
    
    body.style.backgroundColor = 'rgb('+r+','+g+','+b+')';
    console.log(r,g,b);
});

sHijau.addEventListener('input', function() {
    const r = sMerah.value;
    const b = sBiru.value;
    const g = sHijau.value;
    
    body.style.backgroundColor = 'rgb('+r+','+g+','+b+')';
    console.log(r,g,b);
});

sBiru.addEventListener('input', function() {
    const r = sMerah.value;
    const b = sBiru.value;
    const g = sHijau.value;
    
    body.style.backgroundColor = 'rgb('+r+','+g+','+b+')';
    console.log(r,g,b);
});




// mengambil nilai dari letak pointer mouse dan lebar jendela browser
document.body.addEventListener('click', function(event) {
    // cari tahu posisi mouse
    // console.log(event.clientY);
    // cari tahu ukuran browser
    // console.log(window.innerWidth);
    const x = event.clientX / window.innerWidth * 255;
    const y = event.clientY / window.innerHeight * 255;
    
    body.style.backgroundColor = 'rgb('+x+','+y+',100)';
});