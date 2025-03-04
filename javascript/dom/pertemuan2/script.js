// DOM Selection
// document.getElementById()
// document.getElementsByTagName()
// document.getElementsByClassName()

// document.querySelector() -> element
const p4 = document.querySelector('#b p');
p4.style.color = 'green';
p4.style.fontSize = '30px';
	// OR
const li2 = document.querySelector('section#b ul li:nth-child(2)');
li2.style.backgroundColor = 'orange';

// document.querySelectorAll() -> NodeList
const p = document.querySelectorAll('p');
for( let i = 0; i < p.length; i++ ) {
	p[i].style.backgroundColor = 'lightblue';
}



/*// NodeRoot
const sectionB = document.getElementById('b');
const p4 = sectionB.querySelector('p');
p4.style.backgroundColor = 'orange';
	// OR
const sectionB = querySelector('section#b');
const p4 = sectionB.getElementByTagName('p')[0];
p4.style.backgroundColor = 'orange';
*/