// event handler
//  inline html attribute
//  element method
// addEventListener()

// event handler / element method
const p4 = document.querySelector('section#b p');

function ubahWarna() {
    p4.style.color = 'red';
}
p4.onclick = ubahWarna;




// addEventListener()
const p2 = document.getElementsByTagName('p')[1];

p2.addEventListener('click', function() {
    const liBaru = document.createElement('li');
    const liText = document.createTextNode('item baru');
    
    const ul = document.querySelector('section#b ul');
    liBaru.appendChild(liText);
    ul.appendChild(liBaru);
    
    p2.style.backgroundColor = 'lightgreen';
});






/*
Event List :
mouse event
keyboard event
resources event
focus event
view event
form event
css animation & transition
drag & drop event
.....


mouse event :
click
dbclick
mouseover
mouseenter
mouseup
wheel
.....

keyboard event :
keydown
keyup
keypress

view event :
resize
scroll

form event :
submit
reset
*/