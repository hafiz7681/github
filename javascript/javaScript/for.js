// 0
var s = '';
for( var i = 0; i < 10; i++ ) {
    for( var j = 0; j < 10; j++ ) {
        s += '*';
    }
    s += '\n';
}
console.log(s);

// 1
var s = '';
for( var i = 0; i < 10; i++ ) {
    for( var j = 0; j <= i; j++ ) {
        s += '*';
    }
    
    s += '\n';
}
console.log(s);

// 2
var s = '';
for( var i = 10; i > 0; i-- ) {
    for( var j = 0; j < i; j++ ) {
        s += '*';
    }
    
    s += '\n';
}
console.log(s);

// 3
var s = '';
for( var i = 0; i < 10; i++ ) {
    for( var j = (0+1); j <= i; j++ ) {
        s += ' ';
    }
    for( var k = 10; k > i; k-- ) {
        s += '*';
    }
    
    s += '\n';
}
console.log(s);

// 4
var s = '';
for( var i = 0; i < 10; i++ ) {
    for( var j = (10-1); j > i; j-- ) {
        s += ' ';
    }
    for( var k = 0; k <= i; k++ ) {
        s += '*';
    }
    
    s += '\n';
}
console.log(s);

// 5 diamomd
s = '';
for( var i = 0; i < 10; i++ ) {
    for( var j = (10-1); j > i; j-- ) {
        s += ' ';
    }
    for( var k = (0-1); k < i; k++ ) {
        s += '*';
    }
    for( var l = 0; l < i; l++ ) {
        s += '*';
    }
    s += '\n';
} for( var ii = 0; ii < 10; ii++ ) {
    for( var jj = 0; jj < ii; jj++ ) {
        s += ' ';
    }
    for( var kk = 10; kk > ii; kk-- ) {
        s += '*';
    }
    for( var ll = (10-1); ll > ii; ll-- ) {
        s += '*';
    }
    s += '\n';
}
console.log(s);