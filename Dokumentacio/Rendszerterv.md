
# Rendszerterv
## Rendszer célja
Ez a számítógépes szoftver egy megrendelés hatására készül. Egy -a rendelő kérése szerint- weblap, melyen lehet rendelni a pizzázóból.
## Ütemterv
Dokumentációk véglegesítése, prototípus készítése, hibák keresése, szoftver átadása a megrendelőnek.
## Jelenlegi üzleti modell ábra
![jelenlegiuzletimodell](https://github.com/FeketeSz96/Placeholder-Message/blob/main/Dokumentacio/Img/Jelenlegi.png)
## Igényelt üzleti modell ábra
![igenyeltuzletimodell](https://github.com/FeketeSz96/Placeholder-Message/blob/main/Dokumentacio/Img/Igenyelt.png)
## Követelmény listák
* Funkcionális követelmények:
	* ***K1***: A weboldalt csak olyan felhasználók vehetik igénybe, akik rendelkeznek felhasználói fiókkal. Sikeres belépés után az összes -jogosultságaiknak megfelelő- funkcióhoz hozzáférnek. Az oldalon lehetőség lesz a felhasználónak regisztrálnia.
	* ***K2***: Az oldalon szükséges a jogosultságok megkülönböztetése, ugyanis pl. egy mezei felhasználó ne rendelkezzen egy Admin jogkörével. Több jogosultsági szint is bevezetésre kerül. (Vendég, Regisztrált, Admin, Étterem)
	* ***K3***: Adatbázisban található adatok manipulálása A rendszer lényege, hogy a cég mindennemű adata egy adatbázisban tárolódjon, amiket egy weboldalon keresztül létrehozni, módosítani, törölni tudnak.
	* ***K4***: A honlaphoz tartozó képek tárolása és implementálása az oldalon szükséges képeket a szerveren tároljuk és onnan jelenítjük meg a frontend segítségével.
* Nemfunkcionális követelmények:
	* ***K5***: Az adatbázisban tárolt adatok a lehető legbiztonságosabb módon kerüljenek eltárolásra, külső behatásra ne történhessen adatlopás.
	* ***K6***: A rendszer design legyen ergonomikus, letisztult, átlátható, könnyen használható. Törekszünk a lehető legkényelmesebb kinézetre.
* Támogatott eszközök:
	* Webes felülete miatt platform független.
## Fizikai környezet
A weblap alapja (backend) PHP alapján fut, míg a kinézetet (frontend) HTML-ben valósítjuk meg.
## Tesztterv integrálása a dokumentumba
A tesztterv [itt](https://github.com/FeketeSz96/Placeholder-Message/blob/main/Dokumentacio/Tesztterv.md "Tesztterv.md") érhető el.
## Telepítési terv
A weblap telepítés nélkül futtatható, bármely webböngészőn keresztül, belső hálózaton.
## Karbantartási terv
A webes alkalmazás -egyszerűségéből adódóan- minimális karbantartást igényel, amely a következőkre bontható:
* Annak vizsgálata, hogy a jövőben a böngészőfrissítések nem lehetetlenítik el a működését
* A szerver folyamatos karbantartást és megfelelő kezelést igényel