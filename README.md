# NEWTON DATA API

Toto API slouží k získání a ověření výše slevy, autorizace platby pro Gastro, apod.

### Příklad zjištění slevy

Základní požadavek na zjištění slevy

<pre>
{"user":"uzivatel","pass":"*********","detail":1,"data":"01-1614 7133 5345 3238 5823-4","base64":1}
</pre>

**Popis jednotlivých hodnot:**
* user - uživatelské jméno pro autorizaci API, přiděluje areál
* pass - heslo pro autorizaci API, přiděluje areál
* detail - určuje zda-li API má vracet detail o zákazníkovi, pokud areál tento atribut zablokuje, API tyto údaje nevrátí
* data - mělo by obsahovat číslo čipu, barcode nebo jiný autorizační údaj uživatele (zákazníka)
* base64 - pokud obsahuje hodnotu 0, api očekává, že celý požadavek bude kódován v BASE64

### Odpověď na požadavek

<pre>
{"valid":"true","date":"2020-01-
07","sale":"30","id":"32911","name":"Jan","surname":"Novak","email":"jan@novak.cz","ph
one":"420123123123","street":"Novakova 20","city":"Prague","zip":"12000"}
</pre>

**Popis jednotlivých hodnot:**
* valid = zda-li data, která byla odeslána v hodnotě valid jsou validní
* date = datum požadavku na slevu
* sale = výše slevy
* id = identifikátor uživatele
* name = jméno uživatele
* surname = přijmení uživatele
* email = e-mail uživatele
* phone = telefon uživatele
* street = ulice uživatele
* city = město uživatele
* zip = PSČ uživatele

## Chyba požadavku

<pre>
{"error":"No data!"}
</pre>

<pre>
{"error":"Login incorrect!"}
</pre>


## Ukázky komunikace pro GASTRO

**Zaslání dotazu na průběžnou částku, před úhradou zákazníka (mezisoučet):**

Dotaz:
<pre>
{"user":"uzivatel","pass":"**********","detail":1,"price":"300","data":"01-1614 7133 5345 3238 5823-4","base64":1}
</pre>

Odpověď:
<pre>
{"valid":"true","date":"2020-01-
07","sale":"30","id":"32911","name":"Jan","surname":"Novak","email":"jan@novak.cz","ph
one":"","street":"","city":"","zip":"0"}
</pre>

**Odeslání úhrady:**

Dotaz:
<pre>
{"user":"uzivatel","pass":"**********","price":"301","data":"01-1614 7133 5345 3238 5823-4","base64":1}
</pre>

Odpověď:
<pre>
{"data":"OK"}
</pre>
