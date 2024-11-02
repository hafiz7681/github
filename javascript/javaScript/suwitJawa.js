var lagi = true;
while(lagi == true) {
    
// menangkap pilihan player
var p = prompt('pilih : gajah, semut, orang');

// menangkap pilihan computer
// membangkitkan bilangan random
var comp = Math.random();

if (comp <= 0.34) {
    comp = 'gajah';
} else if (comp > 0.34 && comp < 0.64) {
    comp = 'semut';
} else {
    comp = 'orang';
}
 
// menentukan rules
var hasil = '';
if (comp == p) {
    hasil = 'seri';
} else if (comp == 'gajah') {
    hasil = (p == 'semut') ? 'menang' : 'kalah';
} else if (comp == 'semut') {
    hasil = (p == 'orang') ? 'menang' : 'kalah';
} else if (comp == 'orang') {
    hasil = (p == 'gajah') ? 'menang' : 'kalah';
} else {
    hasil = 'salah';
}

// tampilkan hasilnnya
alert('kamu memilih ' + p + ' dan computer memilih ' + comp + ' maka hasilnya kamu ' + hasil);
    
    lagi = confirm('mau coba lagi?');
}

alert('terima kasih telah mencoba');