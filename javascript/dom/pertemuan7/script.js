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
    else return "error";
}

const info = document.querySelector('div.info');
const pComp = document.querySelector('img.img-komputer');
pComp.setAttribute('src', 'img/tanya.png');


/*
const img = document.querySelectorAll('li img');
img.forEach(function(player) {
    player.addEventListener('click', function() {
        const komp = comp();
        pComp.setAttribute('src', 'img/' + komp + '.png');
        info.innerHTML = mecha(player.className, komp);
    });
});
*/

// kita akan coba pakek for di bawah ini!
const img = document.querySelectorAll('li img');

for(let i = 0; i < img.length; i++) {
    img[i].addEventListener('click', function() {
	let komp = comp();
	pComp.setAttribute('src', 'img/' + komp + '.png');
	info.innerHTML = mecha(img[i].className, komp);
    });
}


/*
const gajah = document.querySelector('img.gajah');
gajah.addEventListener('click', function() {
    const komp = comp();
    pComp.setAttribute('src', 'img/' + komp + '.png');
    info.innerHTML = mecha(gajah.className, komp);
});

const semut = document.querySelector('img.semut');
semut.addEventListener('click', function() {
    const komp = comp();
    pComp.setAttribute('src', 'img/' + komp + '.png');
    info.innerHTML = mecha(semut.className, komp);
});

const orang = document.querySelector('img.orang');
orang.addEventListener('click', function() {
    const komp = comp();
    pComp.setAttribute('src', 'img/' + komp + '.png');
    info.innerHTML = mecha(orang.className, komp);
});
*/
