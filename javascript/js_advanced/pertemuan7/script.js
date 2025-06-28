// Template literal
// mengambil nilai dari variable
var a = 10;
var b = 5;
console.log(`a = ${a}, b = ${b}`);

// melakukan penjumlahan
console.log(`a + b adalah, ${a + b}`);

// melakukan pengkondisian
var c = a + b;
console.log(`a + b menghasilkan bilangan ${(c % 2 == 0) ? 'genap' : 'ganjil'}`);

// mengambil nilai dari object / array
var mhs = {
	nama : "Sandhika galih",
	umur : 24,
	hobi : "ngoding",
	status : "dosen"
}

var mhs2 = ["Sandhika", "fitri", "doddy", "firmansyah"];

console.log(`Halo, nama saya ${mhs.nama}. Umur saya ${mhs.umur}, saya adalah seorang ${mhs.status}. Hobi saya ${mhs.hobi}`);

console.log(`Mahasiswa terbaik IT : ${mhs2[0]}`);
