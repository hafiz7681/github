# operasi komparasi
# operasi komparasi akan menghasilkan true / false
# >, <, >=, <=, ==, !=, is, is not

a = 4
b = 2

# lebih besar dari >
print("===== lebih besar dari (>)")
hasil = a > 3
print(a,'>',3,'=',hasil)
hasil = b > 3
print(b,'>',3,'=',hasil)
hasil = b > 2
print(b,'>',2,'=',hasil)

# lebih kecil dari <
print("===== lebih kecil dari (<)")
hasil = a < 3
print(a,'<',3,'=',hasil)
hasil = b < 3
print(b,'<',3,'=',hasil)
hasil = b < 2
print(b,'<',2,'=',hasil)

# lebih besar dari sama dengan >=
print("===== lebih besar dari sama dengan (>=)")
hasil = a >= 3
print(a,'>=',3,'=',hasil)
hasil = b >= 3
print(b,'>=',3,'=',hasil)
hasil = b >= 2
print(b,'>=',2,'=',hasil)

# lebih kecil dari sama dengan <=
print("===== lebih kecil dari sama dengan (<=)")
hasil = a <= 3
print(a,'<=',3,'=',hasil)
hasil = b <= 3
print(b,'<=',3,'=',hasil)
hasil = b <= 2
print(b,'<=',2,'=',hasil)

# sama dengan (==)
print("===== sama dengan (==)")
hasil = a == 4
print(a,'==',4,'=',hasil)
hasil = a == b
print(a,'==',b,'=',hasil)

# tidak sama dengan (!=)
print("===== tidak sama dengan (!=)")
hasil = a != a
print(a,'!=',a,'=',hasil)
hasil = a != b
print(a,'!=',b,'=',hasil)

# 'is' sebagai komparasi object identity
print("===== object identity (is)")
x = 5 # ini adalah assignment membuat object
y = 5
print('nilai x =', id, ', id = ', hex(id(x)))
print('nilai y =', id, ', id = ', hex(id(y)))
hasil = x is y
print('x is y =', hasil)

# 'is not' sebagai komparasi object identity
print("===== object identity (is not)")
x = 5 # ini adalah assignment membuat object
y = 6
print('nilai x =', id, ', id = ', hex(id(x)))
print('nilai y =', id, ', id = ', hex(id(y)))
hasil = x is not y
print('x is not y =', hasil)
