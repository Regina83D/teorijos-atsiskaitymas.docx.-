Atsakymus pateikite po klausimais. (Visi klausimai po 0.5 balo)

1. Parašykite 1 būdą, kaip įvykdyti (paleisti) PHP script'ą iš komandinės eilutės.

 -  $ php -f < failo pavadinimas >

2. Kas privalo būtų PHP failo pirmoje eilurėje, kad PHP žinotų, jog tolesnės eilutės yra PHP kodas?

 - <?php

3. Kokiais simboliais gali prasidėti PHP kintamojo pavadinimas (po $)?

 - po $ zenklo is mažosios raidės, pvz: $tobulasKintamasis;

4. Ar simbolis % gali būti naudojamas PHP kintamojo pavadinime?

 - Ne

5. Parašykite multiline PHP komentaro pavyzdį.

 -  Multiline komentaras žymimas pradžiuoje /* ir pabaiguoje */;

6. Parašykite bent 4 duomenų tipus, naudojamus PHp kalboje.

 -  Skaliariniai (Boolen, integer, float, string);
 -  Kompoziciniai (array, object);

7. Paminėkite Kokia yra pagrindinė indeksuoto masyvo charakteristika, kuri skiriasi nuo asociatyvaus masyvo.

 - vietoj skaiciu turime zodzius

8. Turite kintamajį $someVariable = '15'. Pakeiskite jo tipą į 'int'.

 - $someVariable = '15';
   var_dump((int)$someVariable);

9. Kokia funkcija naudojama gauti masyvo narių skaičiui?

 - Count();

10. Kas nutinka, kai badome sukurti masyvą, kuris turi kelis narius, kurių raktai (keys) sutampa?

 - array_unique();

11. Parašykite multidimensinio masyvo pavyzdį.

    $products = [
      'furniture' => [
         'product_1' => 'desk',
         'product_2' => 'lamp',
      ]
    ];
    var_dump($products);

12. Parašykite enumeryvaus masyvo pavyzdį.

    $products = ['apple', 'banana', 'plum'];

    var_dump($products);

13. Koks operatorius yra naudojamas pridėti naują narį masyvui? Pateikite paprastą pavyzdį.

    $products = ['apple', 'banana', 'plum'];
    $products [] = 'lemon';

    var_dump($products)


14. Kokia funkcija naudojama panaikinti masyvo nariui?

 - funkcija unset();

15. Kokia funkcija naudotumėte pašalinti nereikalingus simbolius nuo string tipo reikšmės pradžios ir
    pabaigos (pvz:. "-test-" -> "test")?

 - str_starts_with & str_end_ with;

16. Kas laikoma superglobaliame kintamajame $_POST?

 - $_POST masyve laikomi kintamieji, skriptui perduoti POST metodu.

17. Kas laikoma superglobaliame kintamajame $_FILES?

 - $_FILES masyve laikomi kintamieji, skriptui perduoti įkeliant failus.

18. Git status komanda leidžia padaryti ką?

 - Git status rodo pakeistus failus,kurie turi skirtumų tarp originolaus failo (kuris yra Githube) ir dabartinio
  indeksinio failo.

19. Git push komanda leidžia padaryti ką?

 - Git push leidžia pakeisti esamus failus remote saugykloje. Paleidus git push visi esami failai repozitorijoje
   pasikeičia į lokalius esamus failus.


20. Kas yra regex?

 - regex - tai sudėlioti modeliai, skirti išskaidyti stringą;