// Membuat Object pada JavaScript
// 1. Object Literal
let Mahasiswa1 = {
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

let Mahasiswa2 = {
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
function Mahasiswa(nama, energi) {
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
let doddy = Mahasiswa('doddy', 15);
>>>>>>> refs/remotes/origin/main
