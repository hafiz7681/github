// Membuat Object pada JavaScript
// 1. Object Literal
let mahasiswa1 = {
	nama: 'sandhika',
	energi: 10,
	makan: function(makan) {
		this.energi += makan;
		console.log(Mahasiswa1);
	},
	main: function(main) {
		this.energi -= main;
		console.log(Mahasiswa1);
	}
}

let mahasiswa2 = {
	nama: 'doddy',
	energi: 20,
	makan: function(makan) {
		this.energi += makan;
		console.log(Mahasiswa2);
	},
	main: function(main) {
		this.energi -= main;
		console.log(Mahasiswa2);
	}
}


// 2. Function Declaration
/*function Mahasiswa(nama, energi) {
	let mahasiswa = {};
	mahasiswa.nama = nama;
	mahasiswa.energi = energi;

	mahasiswa.makan = function(porsi) {
		this.energi = this.energi + porsi;
		console.log(`Halo ${this.nama}, Selamat Makan!`);
	}

	return mahasiswa;
}

let sandhika = Mahasiswa('sandhika', 10);
let doddy = Mahasiswa('doddy', 15);*/


// Constructor Function
// keyword new
/*function Mahasiswa(nama, energi) {
	this.nama = nama;
	this.energi = energi;

	this.makan = function (porsi) {
		this.energi += porsi;
		console.log(`halo ${this.nama}, selamat makan!`);
	}

	this.main = function (jam) {
		this.energi -= jam;
		console.log(`halo ${this.nama}, selamat bermain!`);
	}
}

let sandhika = new mahasiswa('sandhika', 10);
let doddy = new mahasiswa('sandhika', 20);*/


// Function Declaration
// Object.create() <- prototype
/*const method = {
	makan : function(porsi) {
		this.energi = this.energi + porsi;
		console.log(`Halo ${this.nama}, Selamat Makan!`);
	},

	main : function(jam) {
		this.energi = this.energi - jam;
		console.log(`Halo ${this.nama}, selamat bermain!`);
	},

	tidur : function() {
		this.energi = this.energi * 2;
		console.log(`Halo ${this.nama}, selamat beristirahat!`);
	}
}

function Mahasiswa(nama, energi) {
	let mahasiswa = Object.create(method);
	mahasiswa.nama = nama;
	mahasiswa.energi = energi;

	return mahasiswa;
}

let sandhika = Mahasiswa('sandhika', 10);
let doddy = Mahasiswa('doddy', 15);*/


// Constructor Function
// prototype
function Mahasiswa(nama, energi) {
	this.nama = nama;
	this.energi = energi;

	Mahasiswa.prototype.makan = function(porsi) {
		this.energi += porsi;
		console.log(`halo ${this.nama}, selamat makan!`);
	}
	Mahasiswa.prototype.main = function(jam) {
		this.energi -= jam;
		console.log(`halo ${this.nama}, selamat bermain!`);
	}
	Mahasiswa.prototype.tidur = function(jam) {
		this.energi *= jam;
		console.log(`halo ${this.nama}, selamat tidur!`);
	}
}

let sandhika = new Mahasiswa('sandhika', 10);
let doddy = new Mahasiswa('doddy', 15);


// class
/*
class Mahasiswa {
	constructor(nama, energi) {
		this.nama = nama;
		this.energi = energi;
	}
	
	makan = function(porsi) {
		this.energi += porsi;
		console.log(`halo ${this.nama}, selamat makan!`);
	}
	main = function(jam) {
		this.energi -= jam;
		console.log(`halo ${this.nama}, selamat bermain!`);
	}
	tidur = function(jam) {
		this.energi *= jam;
		console.log(`halo ${this.nama}, selamat tidur!`);
	}
}

let sandhika = new Mahasiswa('sandhika', 10);
let doddy = new Mahasiswa('doddy', 15);*/
