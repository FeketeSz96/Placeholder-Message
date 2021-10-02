
# Tesztterv
## 1. Bevezetés

A fejlesztőcsapat célja, hogy a produktum kikerülése előtt, a lehető legnagyobb mértékű tesztelésen essen át a szoftver. Ezzel rengeteg problémát megelőzve, és a hibajavítások elvégzése után egy megbízható szoftvert adhatunk át a megrendelőnek.

A tesztelés teljeskörű, mind UI (user interface) mind szerveroldal részéről igyekszünk minden tesztesetet megnézni.

A UI tesztelése során fontos, hogy nagyjából minden felbontáson használható legyen a program, és ugyanolyan könnyen kezelhető legyen akár telefonról vagy tabletről.

A Backend tesztelése azért is tartozik a legfontosabb és legnehezebb feladatok közé, ugyanis a lehető legtöbb hibát itt lehet elkövetni.

### 1.1 Tesztelési terv hatóköre, célja

A tesztelési terv célja, a tesztelés teljes körűségének biztosítása, a tesztelés során alkalmazott eljárások és megoldások meghatározásával.

### 1.2 Elvárások

Az alábbi alap elvárások képezik ennek a teszttervnek az alapját:

* Az olvasó ismeri az alapdokumentumokat, amelyek meghatározzák a rendszert.
* A tesztprogram az ebben a dokumentumban meghatározott tesztterv alapján fut.


## Szükséges erőforrások

## Tesztelési terv

A frontend teszteléséhez a böngészőbe beépített segédeszközökkel kerülnek tesztelésre. Előre beállítható képernyő méretekkel ellenőrizzük, hogy a méretek jól beállítottak a különböző képernyőkhöz. A teszt akkor sikeres, ha a főbb funkciók jól olvashatók és alkalmazhatók. A backend tesztelése minta input-okkal történik. A beviteli mezőkbe elsősorban a kívánt intervallumok és értékek kerülnek tesztelésre, majd ezután véletlenszerű értékekkel is ellenőrzés alá esnek. A teszt abban az esetben sikeres, ha a kívánt értékek elfogadásra kerülnek, a hibás értékekre a rendszer hibaüzenetet küld a felhasználó számára ami számára is információval szolgál.

### 3.1 Fejlesztői teszt

Tervezés és fejlesztés során ügyelünk arra, hogy lehetőleg minden hibát kiküszöböljünk, de természetesen előfordulhatnak problémák, amikre nem gondoltunk.

### 3.2 Integrációs teszt

A szoftver nem használ külső rendszert, sem API ,se egyéb módon, viszont az oldal által használt adatbázist többféle szerveren és adatbázis motor alatt tesztelésre kerülnek, hogy egy verzióváltás / platformváltás esetén se történhessen nagyobb kimaradás.

### 3.3 Elfogadási teszt

A megrendelő számára átadásra kerül egy példány a weboldalról, aki egy hozzáértő személy segítségével, vagy általa kiválasztott felhasználókkal teszteli. Ha a megrendelő hibát tapasztal, azt a lehető leghamarabb jelzi a fejlesztő csapat felé, hogy a hiba minél előbb javításra kerüljön. Ha a megrendelő számára megfelel a szoftver, úgy elfogadásra kerül a teszt és megkezdődik az éles tesztelés.

### 3.4 Terheléses teszt

### 3.5 Biztonsági teszt

### 3.6 Tesztelési feladatok, teszt-esetek leírása

### 3.7 Teszt forgatókönyv

## Tesztelési jegyzőkönyv és tesztelési jelentés