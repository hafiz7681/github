function comp() {
    let random = Math.random();
    if(random <= 0.34) return "gajah";
    if(random > 0.34 && random <= 0.65) return "semut";
    if(random > 0.65) return "orang";
}

function mecha(p, comp) {
    if(p === comp) return "seri";
    if(p === "gajah") return (comp === "orang") ? "menang" : "kalah";
    if(p === "orang") return (comp === "semut") ? "menang" : "kalah";
    if(p === "semut") return (comp === "gajah") ? "menang" : "kalah";
    else return "pilihan anda salah";
}

const gajah = document.querySelector('img.gajah');
const orang = document.querySelector('img.orang');
const semut = document.querySelector('img.semut');
const pComp = document.querySelector('img.img-komputer');
pComp.setAttribute('src', 'img/tanya.png');
const info = document.querySelector('div.info');

gajah.addEventListener('click', function() {
    let hasil = mecha("gajah", comp());
    info.innerHTML = hasil;
    if(hasil === "kalah") pComp.setAttribute('src', 'img/semut.png');
    else if(hasil === "menang") pComp.setAttribute('src', 'img/orang.png');
    else pComp.setAttribute('src', 'img/gajah.png');
});

semut.addEventListener('click', function() {
    let hasil = mecha("semut", comp());
    info.innerHTML = hasil;
    if(hasil === "kalah") pComp.setAttribute('src', 'img/orang.png');
    else if(hasil === "menang") pComp.setAttribute('src', 'img/gajah.png');
    else pComp.setAttribute('src', 'img/semut.png');
});

orang.addEventListener('click', function() {
    let hasil = mecha("orang", comp());
    info.innerHTML = hasil;
    if(hasil === "kalah") pComp.setAttribute('src', 'img/gajah.png');
    else if(hasil === "menang") pComp.setAttribute('src', 'img/semut.png');
    else pComp.setAttribute('src', 'img/orang.png');
});