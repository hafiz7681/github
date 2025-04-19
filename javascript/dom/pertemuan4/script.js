// Manipulasi Node
// document.createElement()
// document.createTextNode()
// node.appendChild()
// node.insertBefore()
// parentNode.removeChild()
// parentNode.replaceChild()
// ...

// buat elements dan isi element
const elementP = document.createElement('p');
const textP = document.createTextNode('paragraf baru');
// masukkan text ke tag p
elementP.appendChild(textP);

// simpan di akhir sectionA
const sectionA = document.getElementById('a');
sectionA.appendChild(elementP);





// kali ini menggunakan node.insertBefore
const elementLi = document.createElement('li');
:w
const textLi = document.createTextNode('item baru');
elementLi.appendChild(textLi);

const ul = document.querySelector('section#b ul');
const li = ul.querySelector('li:nth-child(2)');
ul.insertBefore(elementLi, li);






// parentNode.removeChild() menghapus
const tagA = getElementsByTagName('a')[0];
sectionA.removeChild(tagA);





// parentNode.replaceChild() menimpa
const sectionB = getElementById('b');
const p4 = sectionB.querySelector('p');

const tagP = document.createElement('p');
const textP = document.createTextNode('paragraf baru');

tagP.appendChild(textP);
sectionB.replaceChild(tagP, p4);
