// function deklaration

function jumlahDuaBilangan(a, b) {

    var total;
    total = a + b;

    return total;
}

console.log(jumlahDuaBilangan(86, 62));
console.log(jumlahDuaBilangan(10, 30));
console.log(jumlahDuaBilangan(45, 80));

// function expression

var jumlahDuaBilangan = function(a, b) {

    var total;
    total = a + b;

    return total;

}

console.log(jumlahDuaBilangan(10, 20));
console.log(jumlahDuaBilangan(82, 56));
console.log(jumlahDuaBilangan(54, 82));

// menghitung volume dua kubus

function jumlahVolumeDuaKubus(a, b) {

    var total,
    volumeA,
    volumeB;

    volumeA = a * a * a;
    volumeB = b * b * b;
    total = volumeA + volumeB;

    return total

}

alert(jumlahVolumeDuaKubus(10, 15));
alert(jumlahVolumeDuaKubus(20, 25));
alert(jumlahVolumeDuaKubus(40, 64));

// function tambah, kali

function tambah(a, b) {
    return a + b;
}

function kali(a, b) {
    return a * b;
}

var a = parseInt(prompt('angka1'));
var b = parseInt(prompt('angka2'));
var c = parseInt(prompt('angka3'));
var d = parseInt(prompt('angka4'));

var hasil = kali(tambah(a, b), tambah(c, d));

// arguments 2
function tambah() {

    var hasil = 0;
    for (var i = 0; i < arguments.length; i++) {
        hasil += arguments[i];
    }
    return hasil;
}

var coba = tambah(1, 2, 3, 4);
console.log('arguments ' + coba);

// function yang baik
function jumlahVolumeDuaKubus(a, b) {
    return a * a * a + b * b * b;
}

console.log(jumlahVolumeDuaKubus(1, 2));

// scope pada javascript
var a = 1;

function tes(a) {
    console.log(a)
}

tes(a)
console.log(a);

// faktorial
function faktorial(n) {
    var hasil = 1;
    for (var i = n; i > 0; i--) {
        hasil *= i;
    } return hasil;
} console.log(faktorial(5));

function faktorial(n) {
    if (n === 0) return 1;
    return n * faktorial(n-1);
} console.log(faktorial(5));

// rekursif
function cetakAngka(n) {
    for (var i = n; i > 0; i--) {
        console.log(i);
    }
} cetakAngka(5);

function cetakAngka(n) {
    if (n === 0) return;
    console.log(n);
    cetakAngka(n-1);
} cetakAngka(5);