// latihan 1 while

var jmlAngkot = 10;
var noAngkot = 1;

while(noAngkot <= jmlAngkot) {
	console.log('Angkot No. ' + noAngkot + ' beroperasi dengan baik.');
	noAngkot = noAngkot + 1;
}

// latihan 2 for

for( var nilaiAwal = 1; nilaiAwal <= 10; nilaiAwal++ ) {
  
  console.log('Hello World ' + nilaiAwal + 'x');

}

// latihan angkot 2

var jmlAngkot = 10;
var angkotBeroperasi = 6;
var noAngkot = 1;

while(noAngkot <= angkotBeroperasi) {

	console.log('Angkot No. ' + noAngkot + ' beroperasi dengan baik.');
	noAngkot = noAngkot + 1;
}

for ( var noAngkot = angkotBeroperasi + 1; noAngkot <= jmlAngkot; noAngkot++ ) {

	console.log('Angkot No. ' + noAngkot + ' sedang tidak beroperasi.');

}

// latihan angkot 3

var jmlAngkot = 10;
var angkotBeroperasi = 6;

for( var noAngkot = 1; noAngkot <= jmlAngkot; noAngkot++ ) {

	if(noAngkot <= angkotBeroperasi) {
		console.log('Angkot No. ' + noAngkot + ' beroperasi dengan baik.');
	} else {
		console.log('Angkot No. ' + noAngkot + ' sedang tidak beroperasi.');
	}

}

// latihan angkot 4

var jmlAngkot = 10;
var angkotBeroperasi = 6;

for( var noAngkot = 1; noAngkot <= jmlAngkot; noAngkot++ ) {

	if( noAngkot <= angkotBeroperasi ) {
		console.log('Angkot No. ' + noAngkot + ' beroperasi dengan baik.');
	} else if ( noAngkot == 8 ) {
		console.log('Angkot No. ' + noAngkot + ' sedang lembur.');
	} else {
		console.log('Angkot No. ' + noAngkot + ' sedang tidak beroperasi.');
	}

}

// latihan angkot 5

var jmlAngkot = 10;
var angkotBeroperasi = 6;

for( var noAngkot = 1; noAngkot <= jmlAngkot; noAngkot++ ) {

	if( noAngkot <= angkotBeroperasi ) {
		console.log('Angkot No. ' + noAngkot + ' beroperasi dengan baik.');
	} else if ( noAngkot == 8 || noAngkot == 10 ) {
		console.log('Angkot No. ' + noAngkot + ' sedang lembur.');
	} else {
		console.log('Angkot No. ' + noAngkot + ' sedang tidak beroperasi.');
	}

}

// latihan angkot 6

var jmlAngkot = 10;
var angkotBeroperasi = 6;

for( var noAngkot = 1; noAngkot <= jmlAngkot; noAngkot++ ) {

	if( noAngkot <= angkotBeroperasi && noAngkot !== 5 ) {
		console.log('Angkot No. ' + noAngkot + ' beroperasi dengan baik.');
	} else if ( noAngkot == 8 || noAngkot == 10 || noAngkot == 5 ) {
		console.log('Angkot No. ' + noAngkot + ' sedang lembur.');
	} else {
		console.log('Angkot No. ' + noAngkot + ' sedang tidak beroperasi.');
	}

}

// syntax switch

var item = prompt('masukkan nama makanan / minuman : \n (cth: nasi, daging, susu, hamburger, softdrink)');

switch( item ) {
case 'nasi' :
case 'susu' :
case 'daging' :
	alert('makanan / minuman SEHAT!');
	break;
case 'hamburger' :
case 'softdrink' :
	alert('makanan / minuman TIDAK SEHAT!');
	break;
default :
	alert('anda memasukkan nama makanan / minuman yang salah!');
	break;

}