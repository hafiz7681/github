data = "ini adalah string"
print(data)
print(type(data))

# 1. cara membuat string

"""
    1. dengan menggunakan single quote '...'
    2. dengan menggunakan double quote "..."
"""

data = 'menggunakan single quote'
print(data)

data = "menggunakan double quote"
print(data)

print('"Halo, apa kabar?"')
print("'Halo, apa kabar?'")
print("ini adalah hari jum'at")

# 2. menggunakan tanda \

# membuat tanda ' menjadi string
print('mari shalat jum\'at')
print('g\'day, isn\'t it?')

# backlash
print("C:\\user\\pkg")

# tab
print("pkg\t\tgame, semakin jauh")

# backspace
print("pkg \bgame, semakin dekat")

# newline
print("baris pertama.\nbaris kedua")# LF -> Line feed
print("baris pertama.\rbaris kedua")# CR -> Carriage fedd
print("baris pertama.\r\nbaris kedua")# CRLF -> Line feed & Carriage fedd

# 3. string literal atau raw

# hati-hati
print('C:\new folder') # akan salah pathnya

# menggunakan raw string
print(r'C:\new folder')

# multiline literal string
print("""
Nama : pkggame
Hobi : ngoding
""")

# multiline literal string & raw
print(r"""
Nama : pkggame
Hobi : ngoding/ Beginner
Website : www.pkggame.com/newID
""")
