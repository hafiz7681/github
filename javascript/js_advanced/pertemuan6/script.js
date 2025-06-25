// higher order function
function kerjakanTugas(matakuliah, selesai) {
	console.log(`Mulai mengerjakan tugas ${matakuliah} ...`);
	selesai();
}

// callback
function selesai() {
	console.log("Selesai mengerjakan tugas!");
}

kerjakanTugas("Teknik Informatika", selesai);



// map, filter, reduce
const angka = [-1, 8, 9, 1, 4, -5, -4, 3, 2, 9];

// cari angka >= 3
const newAngka = [];
for(let i = 0; i < angka.length; i++) {
	if(angka[i] >= 3) {
		newAngka.push(angka[i]);
	}
}
console.log(newAngka);

// array.prototype.filter()
const newAngka2 = angka.filter(a => a >= 3);
console.log(newAngka2);

// array.prototype.map()
const newAngka3 = angka.map(a => a * 3);
console.log(newAngka3);

// array.prototype.reduce()
const newAngka4 = angka.reduce((acc, curr) => acc + curr, 0);
console.log(newAngka4);

// method chaining
const hasil = angka.filter(a => a >= 3).
	map(a => a * 3).
	reduce((acc, curr) => acc + curr);
console.log(hasil);
