# Számok kiírása 1-tól 5-ig
# for i in range(1, 6):
#     print(i)

# Számok kiírása 1-től 5-ig:
# szam = 1
# while szam <= 5:
#     print(szam)
#     szam += 1

# Ez a Forever a scratchben
# while True:
#     print("asd")

# Minden második szám kiírása 1-től 10-ig
# szam = 1
# while szam <= 10:
#     print(szam)
#     szam += 2

# Visszaszámlálás 10-től 1-ig:
# szam = 10
# while szam > 0:
#     print(szam)
#     szam -= 1

#------------------------------------------------------------------------------

# Kilépés a ciklusból 50-nél
# szam = 1
# while szam <= 100:
#     print(szam)
#     if szam == 50:
#         break
#     szam += 1


# Számbekérés, mely negatív inputra leáll
# szam = 0
# while szam >= 0:
#     szam = int(input("Adj meg egy számot: "))
#     if szam < 0:
#         break

# Az alábbi kód átugorja a páros számokat
# szam = 1
# while szam <= 10:
#     if szam % 2 == 0:
#         szam += 1
#         continue
#     print(szam)
#     szam += 1

#1. feladat
szam = 1
while szam <= 10:
    print(szam)
    szam += 1
