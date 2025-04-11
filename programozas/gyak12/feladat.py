# # Szótár létrehozás
# szotar = {"alma": "piros", "banán": "sárga", "szilva": "kék"}

# Érték lekérdezése indexeléssel (metódus nélkül)
# print(szotar["szilva"])

# Érték lekérdezése get() metódussal
# print(szotar.get("szilva"))

# # Kulcs létezésének ellenőrzése
# if szotar.get("asdasdasd") is None:
#     print("Nincs ilyen gyümölcs")

# # Érték lekérdezése és a kulcspár törlése
# szotar = {"alma": "piros", "banán": "sárga", "szilva": "kék"}
# print(szotar)
# gyumolcs = szotar.pop("banán")
# print(gyumolcs)
# print(szotar)

# # Teljes törlés
# szotar.clear()
# print(szotar)

# #----------------------------------------

# Szótár viselkedése egyenlőség operátorral
# szotar1 = {"alma": "piros", "banán": "sárga", "szilva": "kék"}
# szotar2 = szotar1

# Látszólag átmásolta, mert a két szótár egyenlőnek tűnik
# print(szotar1)
# print(szotar2)

# del szotar2["szilva"]
# print(szotar1)
# print(szotar2)

# Szótár viselkedése copy() metódussal
# szotar1 = {"alma": "piros", "banán": "sárga", "szilva": "kék"}
# szotar2 = szotar1.copy()

# Másolás után két szótár egyenlőnek tűnik
# print(szotar1)
# print(szotar2)

# del szotar2["szilva"]
# print(szotar1)
# print(szotar2)

#1. feladat
# szotar = {"alma": 250, "kenyér": 500, "szénsavas víz": 200, "tojás": 450}
# print(szotar)
# print(len(szotar))
# szotar.clear()
# print(szotar)
# print(len(szotar))

#2. feladat
# szotar = {"Audi": 750000, "Toyota": 700000, "Mercedes": 650000}
# print(szotar)
# print(szotar.get("Audi"))
# del szotar["Audi"]
# print(szotar)
# print(szotar.get("Toyota"))
# del szotar["Toyota"]
# if szotar.get("asd") is None:
#     print("Nincs ilyen autó")
# print(szotar)
# print(szotar.get("Mercedes"))
# del szotar["Mercedes"]
# print(szotar)
# print("Elfogytak az autók")

#3. feladat
szotar = {"Pista": "sárga", "János": "piros", "Roland": "kék"}
print(szotar)
print(szotar.get("Pista"))
if szotar.get("asd") is None:
    print("Ismeretlen név")