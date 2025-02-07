#Összeadja a két számot
print(3+6)

#Kivonja a két számot
print(7-2)

#Összeszorozza a két számot
print(2*5)

szam1 = 3
szam2 = 6
print(szam1 + szam2)

if 5 > 3:
  print("Öt nagyobb, mint három")

  print("Ez az első üzenet")
  print("Ez a második üzenet")  # 1 karakteres behúzás
  print("Ez a harmadik üzenet")  # 4 karakteres behúzás
  print("Ez a negyedik üzenet")  # 8 karakteres behúzás

  x, y, z = "alma", "barack", "szilva"
  print(x)
  print(y)
  print(z)

  x = y = z = "alma"
  print(x)
  print(y)
  print(z)

  szoveg="abc"
  print(len(szoveg))

  szoveg="Hello World"
  print(szoveg.lower())
  print(szoveg.upper())

  szoveg="123456789"
  print("Teljes szöveg:",szoveg)
  print("Legelső karakter:", szoveg[0])
  print("Első 5 karakter:", szoveg[:5])
  print("5. karakter utáni rész:", szoveg[5:])
  print("Utolsó karakter:", szoveg[-1])
  print("Utolsó előtti karakter:", szoveg[-2])
  print("A végéről számolva a 6. karaktertől az utolsóig:", szoveg[-6:-1])
  print("Minden második karakter:", szoveg[::2])
  print("Szöveg megfordítva:", szoveg[::-1])

  szoveg="Hello"
  szoveg2="Szia"
  print(szoveg+szoveg2)
  print(szoveg.lower()+szoveg2.lower())
  print(szoveg.upper()+szoveg2.upper())

  szoveg="abcdef"
  print("2. karakter:", szoveg[1])
  print("Utolsó 2 karaktere:", szoveg[4:])
  print("Középső 2 karakter:", szoveg[])
  print("Minden második karakter:", szoveg[::2] )
  print("Fordítva:", szoveg[::-1])

