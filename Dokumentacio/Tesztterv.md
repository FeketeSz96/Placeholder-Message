
# Tesztterv
## 1. Bevezetés

A fejlesztőcsapat célja, hogy a produktum kikerülése előtt, a lehető
legnagyobb mértékű tesztelésen essen át a szoftver. Ezzel rengeteg problémát
megelőzve, és a 
hibajavítások elvégzése után egy megbízható szoftvert adhatunk át a
megrendelőnek.

A tesztelés teljeskörű, mind UI (user interface) mind szerveroldal részéről
igyekszünk minden tesztesetet megnézni.

A UI tesztelése során fontos, hogy nagyjából minden felbontáson használható
legyen a program, és ugyanolyan könnyen kezelhető legyen akár telefonról vagy
tabletről.

A Backend tesztelése azért is tartozik a legfontosabb és legnehezebb
feladatok közé, ugyanis a lehető legtöbb hibát itt lehet elkövetni.

### 1.1 Tesztelési terv hatóköre, célja

A tesztelési terv célja, a tesztelés teljes körűségének biztosítása, a
tesztelés során alkalmazott eljárások és megoldások meghatározásával.

### 1.2 Elvárások

Az alábbi alap elvárások képezik ennek a teszttervnek az alapját:

* Az olvasó ismeri az alapdokumentumokat, amelyek meghatározzák a rendszert.
* A tesztprogram az ebben a dokumentumban meghatározott tesztterv alapján fut.


## 2. Szükséges erőforrások

A teszteléshez szükség van egy olyan eszközre mely az internethez van csatlakozva. A csapatunk által használt erőforrások:

* Processzor: Intel(R) Core(TM) i5-5200 CPU @ 2.20GHz
* RAM: 8 GB
* Operációs rendszer: Windows 10 Pro (64-bit)
* 10Mbps/100Mbps internetkapcsolat
* Böngésző: Google Chrome (88.0.4324.150)

### 2.1 Feladatkörök és felelősségek (tesztcsapat meghatározása)

Feladatok és felelőségek

| Feladatkör        | Felelősség/Tevékenység          | Személy/Személyek |
| ----------------- | ------------------------------- | ----------------- |
| Tesztelő          | A teszt végrehajtása,           |                   |
|                   | Észrevételek dokumentációja,    |                   |
|                   | Teszt Dokumentáció archiválása  |                   |
| ----------------- | ------------------------------- | ----------------- |
| Szakértő          | A szakértő az észrevételeket    |                   |
|                   | elemzi és megoldást javasol.    |                   |
| ----------------- | ------------------------------- | ----------------- |
| Teszt koordinátor | Teszt terv készítése, A teszt-  |                   |
|                   | terv jóváhagyatása a projektme- |                   |
|                   | nedzserrel, Teszt forgatókönyvek|                   |
|                   | létrehozása, Inkoncisztenciák   |                   |
|                   | kezelése, Helyes és időbeni     |                   |
|                   | hibakezelés, Szükség esetén     |                   |
|                   | problémák eszkalálása a projekt |                   |
|                   | menedzsernek, Végső riport      |                   |
|                   | készítése, Teszt dokumentum arc-|                   |
|                   | hiválása, Az észrevételek státu-|                   |
|                   | szának követése, dokumentálása  |                   |
| ----------------- | ------------------------------- | ----------------- |
| Projektvezető     | Teszt terv jóváhagyása, Teszt   |                   |
|                   | Teszt forgatókönyv (testscript) |                   |
|                   | jóváhagyása                     |                   |

### 2.2 Teszt környezet

Ebben a részben meg kell határozni, hogy a tesztelés milyen környezetben történjen (fejlesztői vagy tesztkörnyezet), a környezetek hogyan érthetőek el, továbbá a tesztelők milyen hozzáféréssel végezzék a tesztelést.

| Környezet neve és feladata | A hozzáférés módja | Konfiguráció                             | Kapcsolattartó személyek   |
| -------------------------- | ------------------ | ---------------------------------------- | -------------------------- |
| Fejlesztői környezet       | Dokumentáció       | Fentebb említett számítógép konfiguráció |                            |

### 2.3 Teszt adatok

A teszt végrehajtásához szükséges rekordok (tesztadatok) száma: 3 A tesztadatok elkészítéséért és feltöltéséért felelős személy(ek):

A tesztadatoknak az alábbi követelményeknek kell megfelelniük:

* Az alapadatok értékkészlete az éles rendszerrel megegyező kell, hogy legyen.

### 2.4 Leszállítandó teszt dokumentumok

| Cím                 | Felelős személy | Szállítás gyakorisága | Szállítás módja |
| ------------------- | --------------- | --------------------- | --------------- |
| Tesztterv           |                 |                       |                 |
| Teszt-esetek        |                 |                       |                 |
| Tesztjegyzőkönyvek  |                 |                       |                 |
| Tesztelési jelentés |                 |                       |                 |

### 2.5 Tesztelési eszközök

* Böngésző beépíített segédeszközei
* Weboldal validator

## 3. Tesztelési terv

A frontend teszteléséhez a böngészőbe beépített segédeszközökkel kerülnek
tesztelésre. Előre beállítható képernyő méretekkel ellenőrizzük, hogy a
méretek jól
beállítottak a különböző képernyőkhöz. A teszt akkor sikeres, ha a főbb
funkciók jól olvashatók és alkalmazhatók. A backend tesztelése minta
input-okkal történik. A beviteli mezőkbe elsősorban a kívánt intervallumok és
értékek kerülnek tesztelésre, majd ezután véletlenszerű értékekkel is
ellenőrzés alá esnek. A teszt abban az esetben sikeres, ha a kívánt értékek
elfogadásra kerülnek, a hibás értékekre a rendszer hibaüzenetet küld a
felhasználó számára ami számára is információval szolgál.

### 3.1 Fejlesztői teszt

Tervezés és fejlesztés során ügyelünk arra, hogy lehetőleg minden hibát
kiküszöböljünk, de természetesen előfordulhatnak problémák, amikre nem
gondoltunk.

### 3.2 Integrációs teszt

A szoftver nem használ külső rendszert, sem API ,se egyéb módon, viszont az
oldal által használt adatbázist többféle szerveren és adatbázis motor alatt
tesztelésre 
kerülnek, hogy egy verzióváltás / platformváltás esetén se történhessen
nagyobb kimaradás.

### 3.3 Elfogadási teszt

A megrendelő számára átadásra kerül egy példány a weboldalról, aki egy
hozzáértő személy segítségével, vagy általa kiválasztott felhasználókkal
teszteli. Ha a
megrendelő hibát tapasztal, azt a lehető leghamarabb jelzi a fejlesztő csapat
felé, hogy a hiba minél előbb javításra kerüljön. Ha a megrendelő számára
megfelel a
szoftver, úgy elfogadásra kerül a teszt és megkezdődik az éles tesztelés.

### 3.4 Terheléses teszt

A termék kiadása előtt, terhelés alá kell vetni a szoftvert. A tesztelés
történhet valódi felhasználókkal vagy script segítségével, mely több
felhasználót kezel
egyszerre és mindegyikkel az összes funkciót egy időben teszteli. A teszt
során a szerver monitorozásra kerül. A teszt végeztével kiértékelésre kerül a
termék. Ha az előre megszabott határértékeket tapasztaljuk, a terhelési teszt
sikerrel zárul. Ha nem, a megrendelővel és csapattal kommunikációt kell
folytatni a probléma 
kiküszöbölésére.

### 3.5 Biztonsági teszt

Az oldalon történő regisztráció során a felhasználói adatok mentésre kerülnek.
Hogy ezek ne kerülhessenek rossz kézbe, alapos tesztelésre van szükség. Akkor
tekinthető sikeresnek a teszt, ha illetéktelen személy nem juthat
információhoz. Ha mégis sikerül bejelentkeznie, nyomon követhető az illető és
a felhasználó erről értesítést kap.

### 3.6 Tesztelési feladatok, teszt-esetek leírása

A tesztelési feladat a következő teszt-eseteket foglalja magába: - Frontend
teszt (UI) - Backend teszt (programlogika)

### 3.7 Teszt forgatókönyv

A teszt elvégzésének meghatározott sorrendjét és függőségeit teszt
forgatókönyvben kell rögzíteni. A teszt forgatókönyv elkészítése során ügyelni
kell a párhuzamosan elvégezhető tevékenységek lehetőség szerinti
kihasználásra, a tesztelési idő csökkentésének érdekében.

## 4 Tesztelési jegyzőkönyv és tesztelési jelentés

### 4.1 Tesztelési jegyzőkönyv

* A tesztelők a tesztforgatókönyvnek megfelelően elvégzik a tesztelést és az eredményt tesztjegyzőkönyvekben dokumentálják.
* A teszt kimenetelét minden esetben jelenteni kell a tesztkoordinátornak
* A tesztkoordinátor a csapattal együtt megoldást keres a problémákra, ezután frissíti a tesztforgatókönyvet
* Ha a problémát megoldották, a tesztelő újrakezdheti a tesztelést, majd dokumentálja az eredményeket
* Ha a hiba továbbra is fennáll, és harmadik félen múlik a megoldása eszkalálni kell a problémát a projekt menedzsernek.

### 4.2 Tesztelési jelentés

A tesztelési jelentést a tesztkoordinátor készíti el. Ez egy részletes áttekintése a lefutott teszteknek, azok eredmények, státuszának és a megjegyzéseknek. A tesztkoordinátornak ezután el kell juttatnia a projektmenedzsernek a tesztelési jelentést.

### 4.3 Tesztelt elvárások

Az alábbi funkcionális elvárások szerepelnek az üzleti, illetve fejlesztői specifikációban, amelyek tesztelésre is kerültek:

| #  | Leírás |
| -- | ------ |
| 1. |        |
| 2. |        |
| 3. |        |
| 4. |        |
| 5. |        |
| 6. |        |

Az alábbi nem-funkcionális elvárások szerepelnek az üzlei, illetve fejlesztői specifikációban, amelyek tesztelésre is kerültek:

| #  | Leírás |
| -- | ------ |
| 1. |        |
| 2. |        |
| 3. |        |
| 4. |        |
| 5. |        |
| 6. |        |

Az alábbi elvárások szerepelnek az üzleti, illetve fejlesztői specifikációban, amelyek nem kerültek tesztelésre:

| #  | Leírás |
| -- | ------ |
| 1. |        |
| 2. |        |
| 3. |        |

### 4.4 Elfogadási kritériumok

A teszt sikerességének kritériumai:

* Technikai, a teszt forgatókönyvben leírtak szerint.
* A projekt menedzser jóváhagyása a teszt leszállítandókra.

### 4.5 Kockázatkezelés

| Kockázat               | Hatás   | Kockázatkezelési mód |
| ---------------------- | ------- | -------------------- |
| Csapattag megbetegedés | közepes | Adott feladatok át-  |
|                        |         | hárulnak egy másik   |
|                        |         | pattagre             |
| ---------------------- | ------- | -------------------- |
| Számítógép meghibásodás| magas   | Erőforrások meg-     |
|                        |         | osztása a csapatta-  |
|                        |         | goknál               |
| ---------------------- | ------- | -------------------- |
| Adatveszteség          | magas   | Folyamatos biztonsági|
|                        |         | mentés, verziókövetés|
| ---------------------- | ------- | -------------------- |
| Kiosztott feladat el-  | magas   | Szigorú határidők be-|
| mulasztása             |         | tartása, folyamatos  |
|                        |         | törekvés hátráltató  |
|                        |         | probléma esetén a mi-|
|                        |         | elöbbi megoldást meg-|
|                        |         | találására           |

### 4.6 Tesztjegyzőkönyv minta

|      Tesztelési jegyzőkönyv      |  |
| -------------------------------- | -- |
| A teszt-eset leírás és célja:    |  |
| A teszt folyamat/funkció leírása:|  |
| A tesztelési előfeltételei:      |  |
| A tesztelés dátuma és időpontja: |  |
| A tesztadatok típusa:            |  |
| A tesztet végző személy(ek):     |  |
| A tesztelt rendszer beállításai: |  |
| A teszt-eset elvárt eredménye:   |  |
| A tesztelés eredménye:           |  |
| Megjegyzések:                    |  |

|    Tesztelést elvégezte     |  |
| --------------------------- | -- |
| Név:                        |  |
| Szervezati egység/beosztás: |  |
| Aláírás:                    |  |
| Dátum:                      |  |

Jóváhagyások:

|           Jóváhagyó         |  |
| --------------------------- | -- |
| Név:                        |  |
| Szervezeti egység/beosztás: |  |
| Aláírás:                    |  |
| Dátum:                      |  |

### 4.7 Tesztelési jelentés minta

|        Tesztelési jelentés       |  |
| -------------------------------- | -- |
| A hivatkozott tesztjegyzőkönyvek |  |
| rövid leírása és eredménye:      |  |
| -------------------------------- | -- |
| A tesztelt folyamatok/funkció/mo-|  |
| dulok leírása:                   |  |
| -------------------------------- | -- |
| A tesztadatok típusa:            |  |
| -------------------------------- | -- |
| A tesztelt rendszer beállításai: |  |
| -------------------------------- | -- |
| A tesztelések eredménye:         |  |
| -------------------------------- | -- |
| Megjegyzések:                    |  |

|   Tesztelést elvégezte      |  |
| --------------------------- | -- |
| Név:                        |  |
| Szervezeti egység/beosztás: |  |
| Aláírás:                    |  |
| Dátum:                      |  |

Jóváhagyások:

|         Jóváhagyó          |  |
| -------------------------- | -- |
| Név:                       |  |
| Szervezeti egység/beosztás:|  |
| Aláírás:                   |  |
| Dátum:                     |  |