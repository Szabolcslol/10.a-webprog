print()

# Beágyazott ciklus
#for i in range(1, 4):
    #for j in range(1, 6):
        #print(f"Külső ciklus (i): {i}, Belső ciklus (j): {j}")

# Külső ciklus (i): 1, Belső ciklus (j): 1
# Külső ciklus (i): 1, Belső ciklus (j): 2
# Külső ciklus (i): 1, Belső ciklus (j): 3
# Külső ciklus (i): 1, Belső ciklus (j): 4
# Külső ciklus (i): 1, Belső ciklus (j): 5
# Külső ciklus (i): 2, Belső ciklus (j): 1
# Külső ciklus (i): 2, Belső ciklus (j): 2
# Külső ciklus (i): 2, Belső ciklus (j): 3
# Külső ciklus (i): 2, Belső ciklus (j): 4
# Külső ciklus (i): 2, Belső ciklus (j): 5
# Külső ciklus (i): 3, Belső ciklus (j): 1
# Külső ciklus (i): 3, Belső ciklus (j): 2
# Külső ciklus (i): 3, Belső ciklus (j): 3
# Külső ciklus (i): 3, Belső ciklus (j): 4
# Külső ciklus (i): 3, Belső ciklus (j): 5

# Írjunk ki 3 sort, mindegyik elejére kerüljön a sor száma és egy kettőspont.
# Ezután jelenjen meg egy számsorozat 1-tól 5-ig (ciklussal).
# Elvárt eredmény:
# 1. sor: 12345
# 2. sor: 12345
# 3. sor: 12345
        
#for y in range(1, 4):
    #print(f"{y}. sor: ", end="")
    #for x in range(1, 6):
        #print(x, end="")
    #print()

# Teljes szorzótábla kiírása 2-től 9-ig
#for i in range(2, 10):
    #for j in range(1, 10):
        #print(f"{i} * {j} = {i * j}")
    #print()

#1. feladat
# for i in range(1, 7):
#     for j in range(1, 7):
#         print(f"{i},{j}")

#2. feladat
for x in range(1, 6):
    print()
    for y in range(1, 6):
        print(y, end="")
    print()