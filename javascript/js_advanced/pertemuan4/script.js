// var
var i = 2;

if( i == 2 ) {
	var i = "adalah 2";
} else {
	var i = "bukan 2";
}

console.log(i);
// var tidak menganut block scop



// let
let j = undefined;

for( j = 0; j < 9; j++ ) {
	console.log( j );
}

console.log( j );
// let menganut block scop



// const
const k = 2;

for( k = 0; k < 9; k++ ) {
	console.log( k );
}

console.log( k );
// const menganut block scop dan tidak berubah
