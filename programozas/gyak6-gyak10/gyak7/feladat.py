# # Számok kiírása 0-tól 5-ig
# for i in range(6):
#     print(i)

# # Számok kiírása 1-tól 5-ig
# for i in range(1, 6):
#     print(i)

# # Minden második szám kiírása 2 és 10 között
# for i in range(2, 11, 2):
#     print(i)

# # Számok kiírása 10-től 1-ig visszafelé
# for i in range(10, 0, -1):
#     print(i)

# # Beágyazott ciklus
# for i in range(1, 4):
#     for j in range(1, 6):
#         print(f"Külső ciklus (i): {i}, Belső ciklus (j): {j}")

# # Írjunk ki 3 sort, mindegyik elejére kerüljön a sor száma és egy kettőspont.
# # Ezután jelenjen meg egy számsorozat 1-tól 5-ig (ciklussal).
# # Elvárt eredmény:
# # 1. sor: 12345
# # 2. sor: 12345
# # 3. sor: 12345
# for y in range(1, 4):  # Külső ciklus
#     print(f"{y}. sor: ", end="")
#     for x in range(1, 6):  # Belső ciklus
#         print(x, end="")
#     print()

# # Teljes szorzótábla kiírása 2-től 9-ig
# for i in range(2, 10):
#     for j in range(1, 10):
#         print(f"{i} * {j} = {i * j}")
#     print()


#1. feladat
# osszeg = 0
# for i in range(1, 101):
#     if i % 5 != 0:
#         osszeg += i
# print(osszeg)

#2. feladat
for i in range(1, 6):
    print(i)
