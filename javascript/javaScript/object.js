// Membuat Object 1
// Object Literal
var mhs1 = {
    nama : 'Sandhika Galih',
    nrp : '043040023',
    email : 'sandhikagalih@unpas.ac.id',
    jurusan : 'Teknik Informatika'
}

var mhs2 = {
    nama : 'Doddy',
    nrp : '033040007',
    email : 'doddy@gmail.com',
    jurusan : 'Teknik Industri'
}

// Function Declaration
function buatObjectMahasiswa(nama, nrp, email, jurusan) {
    var mhs = {};
    mhs.nama = nama;
    mhs.nrp = nrp;
    mhs.email = email;
    mhs.jurusan = jurusan;
    return mhs;
}

var mhs3 = buatObjectMahasiswa('nofariza', 023040123, 'nofa@hayoo.com', 'Teknik Pangan');

// Constructor
function Mahasiswa(nama, nrp, email, jurusan) {
    this.nama = nama;
    this.nrp = nrp;
    this.email = email;
    this.jurusan = jurusan;
}

var mhs4 = new Mahasiswa('Erik', '013040321', 'erik@cloud.com', 'Teknik Mesin');

// Membuat Object 2
var a = 10;
console.log(this.a);
console.log(window.a);
console.log(this === window);

// Cara 1 - Function Declaration
function halo() {
    console.log(this);
    console.log('halo');
}
this.halo();
// this mengembalikan object Global

// cara 2 - Object Literal
var obj = {a : 10, nama : 'Sandhika'};
obj.halo  = function() {
    console.log(this);
    console.log('halo');
}
obj.halo();
// this mengembalikan object yang Bersangkutan

// cara 3 - Constructor
function Halo() {
    console.log(this);
    console.log('halo');
}
var obj1 = new Halo();
var obj2 = new Halo();
// this mengembalikan object yang Baru Dibuat

// Membuat Object 3
// Latihan Object Angkot
function Angkot(sopir, trayek, penumpang, kas) {
    
    this.sopir = sopir;
    this.trayek = trayek;
    this.penumpang = penumpang;
    this.kas = kas;
    
    this.penumpangNaik = function(namaPenumpang) {
        this.penumpang.push(namaPenumpang);
        return this.penumpang;
    }
    
    this.penumpangTurun = function(namaPenumpang, bayar) {
        if(this.penumpang.length === 0) {
            alert('angkot masih kosong!');
            return false;
        }
        
        for( var i = 0; i < this.penumpang.length; i++ ) {
            if( this.penumpang[i] == namaPenumpang ) {
                this.penumpang[i] = undefined;
                this.kas += bayar;
                return this.penumpang;
            }
        }
        
    }
    
}

var angkot1 = new Angkot('Sandhika Galih', ['Cicaheum', 'Cibiru'], [], 0);
var angkot2 = new Angkot('Tom Cruise', ['Antapani', 'Ciroyom'], [], 0);

// angkot1.penumpangNaik('erik');
// angkot1.penumpangTurun('erik', 250);
// angkot1.kas
