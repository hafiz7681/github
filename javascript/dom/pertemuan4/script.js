// Manipulasi Node
// document.createElement()
// document.createTextNode()
// node.appendChild()
// node.insertBefore()
// parentNode.removeChild()
// parentNode.replaceChild()
// ...

// createElement, createTextNode, appendChild
const pBaru = document.createElement('p');
const pText = document.createTextNode('paragraf baru');

// gabungkan createElement dan createTextNode
pBaru.appendChild(pText);

// simpan element yg sudah di rangkai di akhir sectionA
const sectA = document.getElementById('a');
sectA.appendChild(pBaru);



// insertBefore
const liBaru = document.createElement('li');
const liText = document.createTextNode('item baru');

// gabungkan seperti di atas
liBaru.appendChild(liText);

// simpan di bawah li pertama
const ul = document.querySelector('section#b ul');
const li = ul.getElementsByTagName('li')[1];
ul.insertBefore(liBaru, li);




// removeChild
const a = document.querySelector('a');
sectA.removeChild(a);




// replaceChild
const sectB = document.querySelector('section#b');
const p4 = sectB.getElementsByTagName('p')[0];
const p2Baru = document.createElement('p');
const p2Text = document.createTextNode('paragraf baru 2');

p2Baru.appendChild(p2Text);
sectB.replaceChild(p2Baru, p4);



// element baru di tandai background hijau
liBaru.style.backgroundColor = 'lightblue';
pBaru.style.backgroundColor = 'lightblue';
p2Baru.style.backgroundColor = 'lightblue';