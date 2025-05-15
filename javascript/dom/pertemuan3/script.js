/* Manipulasi Elements */

// element.innerHTML
const sectionA = document.querySelector('section#a');
sectionA.innerHTML = '<div id="c"><p>hello world</p></div>';

// element.style.<propertyCSS>
const judul = document.querySelector('#judul');
judul.style.color = 'lightblue';
judul.style.backgroundColor = 'salmon';

// element.<property>Attribute()
	// element.setAttribute()
	const judul = document.querySelector('h1');
	judul.setAttribute('name', 'judul');

	// element.getAttribute()
	const judul2 = document.querySelector('section#a a');
	console.log(judul2.getAttribute('href'));

	// element.removeAttribute()
	const judul3 = document.querySelector('div#container section#a p:nth-child(1)');
	judul3.removeAttribute('class');

// element.classList.<property>()
	// element.classList.add() -> menambahkan class
	const p1 = document.querySelector('div#container section#a p.p2');
	var p = p1.classList.add('paragraf2', 'sandhika', 'galih');

	// element.classList.remove() -> menghapus class
	const p2 = document.querySelector('div#container section#a p.p2');
	p2.classList.remove('p2');

	// element.classList.toggle() -> jika class ada maka akan dihapus dan sebaliknya
	const p3 = document.querySelector('div#container section#a p.paragraf2');
	console.log(p3.classList.toggle('paragraf2'));
		// OR
	console.log(p3.classList.toggle('p2'));

	// element.classList.item() -> cek nama class menggunakan index(dari 0)
	const p4 = document.querySelector('div#container section#a p.p2');
	console.log(p4.classList.item(0));

	// element.classList.contains() -> cek class sudah ada atau belum
	const p5 = document.querySelector('div#container section#a p.p2');
	console.log(p5.classList.contains('p2'));

	// element.classList.replace() -> mengganti nama class
	const p6 = document.querySelector('div#container section#a p.p2');
	console.log(p6.classList.replace('p2', 'sandhika'));