# membuat gabungan area rentang dari angka

# ++++++3-------10++++++
inputUser = float(input("Input User : "))

# ++++++3---------------
# memeriksa angka yang kurang dari 3
isiKurangDari = (inputUser < 3)
print("kurang dari 3 =", isiKurangDari)

# -------------10+++++++
# memeriksa angka lebih dari 10
isiLebihDari = (inputUser > 10)
print("lebih dari 10 =", isiLebihDari)

# +++++3--------10++++++
isCorrect = isiKurangDari or isiLebihDari
print("angka yang anda masukkan : ", isCorrect)

print("\n",10*"=","\n")

# ++++++3-------10++++++
inputUser = float(input("Input User : "))

# ++++++3---------------
# memeriksa angka yang kurang dari 3
isiKurangDari = (inputUser > 3)
print("kurang dari 3 =", isiKurangDari)

# -------------10+++++++
# memeriksa angka lebih dari 10
isiLebihDari = (inputUser < 10)
print("lebih dari 10 =", isiLebihDari)

# +++++3--------10++++++
isCorrect = isiKurangDari and isiLebihDari
print("angka yang anda masukkan : ", isCorrect)

print("\n",10*"=","\n")

# Latihan

user = float(input('masukkan angka : '))

a  = (user >= 0 and user <= 5)
b = (user >= 8 and user <= 11)

c = a or b
print('angka yang anda masukkan : ', c)

print('\n',10*'=','\n')

user = float(input('masukkan angka : '))

a = (user > 5 and user < 8)
b = (user < 0 or user > 11)

c = a or b
print('angka yang anda masukkan : ', c)
