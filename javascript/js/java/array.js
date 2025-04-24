// contoh array
var hari = ['senin', 'selasa', 'rabu'];
var nama = ['sandhika', 'galih', 'nofa'];

// key and value pair
var binatang = ['kucing', 'kelinci', 'monyet', 'panda', 'koala', 'sapi'];

// atau di deklarasi terlebih dahulu

var binatang = [];
binatang = ['kucing', 'kelinci', 'monyet', 'panda', 'koala', 'sapi'];

console.log(binatang[4]);

// method length
console.log(binatang.length);

// length tidak sama dengan index, length ada 6, sedangkan index adalah kucing = 0, kelinci = 1, ..., sapi = 5.

// elemen pada array
var binatang = ['kucing', 'kelinci', 'monyet', 'panda', 'koala', 'sapi'];

var angka = [100, 350, 20];

var myArr = ['hi', false, 250];

// array berisi function dan array bersarang
var myFunc = function() {
    console.log('Hello World');
}
var myArr2 = ['hi', 250, false, myFunc, [4,5,6, [1,2,3]]];

console.log(myArr2[4][3][2]); //hasilnya angka 3;

// MANIPULASI ARRAY
// 1. menambah isi array
var arr = [];
arr[0] = 'sandhika';
arr[1] = 'galih';
arr[2] = 'nofa';
arr[3] = 'Doddy';

console.log(arr);

// 2. menghapus isi array
var arr = ['sandhika', 'galih', 'nofa', 'doddy'];
arr[1] = undefined;
console.log(arr);

// 3. menampilkan array
var arr = ['sandhika', 'galih', 'nofa', 'doddy'];

for (var j = 0; j < arr.length; j++ ) {
    console.log('Mahasiswa ke-' + (j+1) + ' : ' + arr[j]);
}

// Method pada Array
// 1. join
var arr = ['sandhika', 'galih', 'nofa', 'doddy'];

console.log(arr.join(' - '));

// 2. push
arr.push('fitri', 'robert');
console.log(arr.join(' - '));

// 3. pop
arr.pop();
console.log(arr.join(' - '));

// 4. unshift
arr.unshift('alan', 'robert');
console.log(arr.join(' - '));

// 5. shift
arr.shift();
console.log(arr.join(' - '));

// 6. splice (indexAwal, mauDihapusBerapa, elemenBaru1, elemenBaru2, ...)
arr.splice(2, 2, 'deni', 'alan');
console.log(arr.join(' - '));

// 7. slice (indexAwal, elemenAkhir)
var arr2 = arr.slice(1,4);
console.log(arr2.join(' - '));

// 8. forEach
var angka = [3,4,7,6,9,8,2,5,20,10];
var nama = ['sandhika', 'galih', 'nofa'];

nama.forEach(function(e, i) {
    console.log('Mahasiswa ke-' + (i+1) + ' : ' + e);
})

// 9. map
var angka2 = angka.map(function(e) {
    return e * 2;
})
console.log(angka2.join(' - '));

// 10. sort
angka.sort(function(e,i) {
    return e-i;
});
console.log(angka.join(' - '));

// 11. filter
var angka2 = angka.filter(function(e) {
    return e > 6;
})
console.log(angka2.join(' - '));

// 12. find
var angka2 = angka.find(function(e) {
    return e > 6;
})
console.log(angka2);

// Latihan Angkot

var kursi = [];
var tambah = function(nama, kursi) {
    
    if(kursi.length == 0) {
        kursi.push(nama);
        return kursi;
    }
    else {
        
        for(var i = 0; i < kursi.length; i++) {
            
            if(kursi[i] == undefined) {
                kursi[i] = nama;
                return kursi;
            }
            else if(kursi[i] == nama) {
                console.log(nama + ' sudah ada di angkot.');
                return kursi;
            }
            else if(i == kursi.length-1) {
                kursi.push(nama);
                return kursi;
            }
            
        }
        
    }
    
} // Sukses

var hapus = function(nama, kursi) {
    
    if(kursi.length == 0) {
        var zero = console.log('angkot masih kosong.');
        return zero;
    }
    else {
        
        for(var i = 0; i < kursi.length; i++) {
            
            if(kursi[i] == nama) {
                kursi[i] = undefined;
                return kursi;
            }
            else if(kursi[i] == undefined) {
                console.log(nama + ' tidak ada dalam angkot.');
                return nama;
            }
            
        }
        
    }
    
} // Sukses