// DOM Selection
// document.getElementById() -> element html
// menangkap id dari judul
const judul = document.getElementById('judul');
// memberi warna pada judul dari script.js
judul.style.color = 'red';
// mewarnai background dari judul
judul.style.backgroundColor = '#ccc';
// mengganti teks pada judul
judul.innerHTML = 'Sandhika Galih';


// document.getElementsByTagName() -> HTMLCollections
// menangkap semua tag paragraf
const p = document.getElementsByTagName('p');
// atau mewarnai semua tag p
for( let i = 0; i < p.length; i++ ) {
	p[i].style.backgroundColor = 'lightblue';
}
// mewarnai tag "p" dengan index ke-2
// p[2].style.backgroundColor = 'lightblue';

// mengubah ukuran teks pada judul
const h1 = document.getElementsByTagName('h1')[0];
h1.style.fontSize = '50px';


// document.getElementsByClassName() -> HTMLCollections
const p1 = document.getElementsByClassName('p1')[0];
p1.innerHTML = 'Ini diubah dari javascript';
