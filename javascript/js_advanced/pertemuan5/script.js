// arrow function
// tanpa parameter
var namaTeman = () => { return `Halo semuanya!` }
console.log(namaTeman());

// dengan satu parameter
var namaMahasiswa = nama => { return `Halo, ${nama}` }
console.log(namaMahasiswa("doddy"));

// dengan dua parameter
var namaSaya = (waktu, nama) => { return `Selamat ${waktu}, ${nama}` }
console.log(namaSaya("siang", "hafiz"));

// tanpa return
var sapa = () => `Halo, semuanya!`;
console.log(sapa());

// dijadikan object
var data = () => ({ nama: "fitri", umur: 23});
console.table(data());

// note : sedikit tips untuk untuk mencetak object ke dalam console agar lebih rapi, gunakan console.table( cetak );



// this pada arrow function
var salam = function() {
	this.nama = "david";
	this.waktu = "siang";

	setInterval(() => console.log("Selamat " + this.waktu + ", " + this.nama), 1000);
}

new salam();
// arrow function tidak memiliki konsep this, jadi gunakan this di dalam arrow function seperti pada object literal
