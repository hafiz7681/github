// jenis-jenis popup_box

alert('Hello World');

var nama = prompt('masukkan nama:');
alert(nama);

confirm('kamu yakin?');

// latihan popup_box

var tes = confirm('kamu yakin?');
if( tes === true ) {
	alert('user menekan OK!');
} else {
	alert('user menekan CANCEL!');
}

// latihan popup_box2

alert('selamat datang..');
var lagi = true;

while( lagi === true ) {
	var nama = prompt('masukkan nama:');
	alert('halo ' + nama);

	lagi = confirm('coba lagi?');
}

alert('terima kasih..');