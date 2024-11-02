// menampilkan pesan berulang

alert('Halo');
alert('nama');
alert('saya');
alert('Sandhika');
alert('Galih');

// belajar menggunakan variabel

var angka = prompt('Masukkan angka :');
alert('Angka yang anda masukkan adalah : ' + angka);

// contoh pengulangan menggunakan syntax for

alert('mulai');
for(var i = 0; i < 5; i++) {
	alert('Hello World!');
}
alert('Selesai');

// contoh pengkondisian menggunakan syntax if.. else

var angka = prompt('Masukkan angka :');
if( angka % 2 == 0 ) {
	alert(angka + ' adalah bilangan GENAP');
} else {
	alert(angka + ' adalah bilangan GANJIL');
}

// contoh syntax while

while(kondisi) {
	aksi
}

// infinite loop / looping forever

while(true) {
	console.log('Hello World');
}

// menghentikan infinite loop

var ulang = true;
while(ulang) {
	console.log('hello world');
	ulang = confirm('lagi?');
}

// menghentikan infinite loop lewat program

nilai awal
while (kondisi terminasi) {

	aksi

	increment / decrement
}

increment = penambahan terhadap nilai awal
decrement = pengurangan terhadap nilai awal

// contoh yang kedua

var nilaiAwal = 1;
while(nilaiAwal <= 5) {
	console.log('hello world');
	nilaiAwal++;
}

// contoh yang ketiga

var nilaiAwal = 1;
while(nilaiAwal <= 10) {
	console.log('hello world ' + nilaiAwal + 'x');
	nilaiAwal++;
}