<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validációs nyelvi sorok
    |--------------------------------------------------------------------------
    |
    | Ezek az alapértelmezett hibaüzenetek, amelyeket a Validator osztály használ.
    | Néhány szabálynak több változata is van, például a méret szabályoknál.
    | Nyugodtan testre szabhatod ezeket az üzeneteket.
    |
    */

    'accepted' => 'A(z) :attribute mezőt el kell fogadni.',
    'accepted_if' => 'A(z) :attribute mezőt el kell fogadni, ha :other értéke :value.',
    'active_url' => 'A(z) :attribute nem érvényes URL.',
    'after' => 'A(z) :attribute dátumnak :date utáni dátumnak kell lennie.',
    'after_or_equal' => 'A(z) :attribute dátumnak :date utáni vagy azzal megegyező dátumnak kell lennie.',
    'alpha' => 'A(z) :attribute csak betűket tartalmazhat.',
    'alpha_dash' => 'A(z) :attribute csak betűket, számokat, kötőjeleket és aláhúzásokat tartalmazhat.',
    'alpha_num' => 'A(z) :attribute csak betűket és számokat tartalmazhat.',
    'any_of' => 'A(z) :attribute mező érvénytelen.',
    'array' => 'A(z) :attribute tömb kell legyen.',
    'ascii' => 'A(z) :attribute csak ASCII karaktereket tartalmazhat.',
    'before' => 'A(z) :attribute dátumnak :date előtti dátumnak kell lennie.',
    'before_or_equal' => 'A(z) :attribute dátumnak :date előtti vagy azzal megegyező dátumnak kell lennie.',
    'between' => [
        'array' => 'A(z) :attribute :min és :max elemet kell tartalmazzon.',
        'file' => 'A(z) :attribute mérete :min és :max kilobájt között kell legyen.',
        'numeric' => 'A(z) :attribute :min és :max közötti szám kell legyen.',
        'string' => 'A(z) :attribute :min és :max karakter között kell legyen.',
    ],
    'boolean' => 'A(z) :attribute mező csak igaz vagy hamis lehet.',
    'can' => 'A(z) :attribute mező jogosulatlan értéket tartalmaz.',
    'confirmed' => 'A(z) :attribute megerősítés nem egyezik.',
    'contains' => 'A(z) :attribute mezőből hiányzik egy kötelező érték.',
    'current_password' => 'A megadott jelszó helytelen.',
    'date' => 'A(z) :attribute nem érvényes dátum.',
    'date_equals' => 'A(z) :attribute dátumnak :date dátummal egyeznie kell.',
    'date_format' => 'A(z) :attribute nem egyezik a következő formátummal: :format.',
    'decimal' => 'A(z) :attribute :decimal tizedesjegyet kell tartalmazzon.',
    'declined' => 'A(z) :attribute mezőt el kell utasítani.',
    'declined_if' => 'A(z) :attribute mezőt el kell utasítani, ha :other értéke :value.',
    'different' => 'A(z) :attribute és :other különböző kell legyen.',
    'digits' => 'A(z) :attribute :digits számjegyből kell álljon.',
    'digits_between' => 'A(z) :attribute :min és :max számjegy között kell legyen.',
    'dimensions' => 'A(z) :attribute érvénytelen képmérettel rendelkezik.',
    'distinct' => 'A(z) :attribute mező értéke duplikált.',
    'doesnt_contain' => 'A(z) :attribute nem tartalmazhatja a következőket: :values.',
    'doesnt_end_with' => 'A(z) :attribute nem végződhet a következőkre: :values.',
    'doesnt_start_with' => 'A(z) :attribute nem kezdődhet a következőkkel: :values.',
    'email' => 'A(z) :attribute érvényes e-mail cím kell legyen.',
    'ends_with' => 'A(z) :attribute a következők egyikével kell végződjön: :values.',
    'enum' => 'A kiválasztott :attribute érvénytelen.',
    'exists' => 'A kiválasztott :attribute érvénytelen.',
    'extensions' => 'A(z) :attribute fájlnak a következő kiterjesztések egyikével kell rendelkeznie: :values.',
    'file' => 'A(z) :attribute fájl kell legyen.',
    'filled' => 'A(z) :attribute mezőt ki kell tölteni.',
    'gt' => [
        'array' => 'A(z) :attribute több mint :value elemet kell tartalmazzon.',
        'file' => 'A(z) :attribute nagyobb kell legyen, mint :value kilobájt.',
        'numeric' => 'A(z) :attribute nagyobb kell legyen, mint :value.',
        'string' => 'A(z) :attribute hosszabb kell legyen, mint :value karakter.',
    ],
    'gte' => [
        'array' => 'A(z) :attribute legalább :value elemet kell tartalmazzon.',
        'file' => 'A(z) :attribute legalább :value kilobájt kell legyen.',
        'numeric' => 'A(z) :attribute nagyobb vagy egyenlő kell legyen, mint :value.',
        'string' => 'A(z) :attribute hosszabb vagy egyenlő kell legyen, mint :value karakter.',
    ],
    'hex_color' => 'A(z) :attribute érvényes hexadecimális szín kell legyen.',
    'image' => 'A(z) :attribute kép kell legyen.',
    'in' => 'A kiválasztott :attribute érvénytelen.',
    'in_array' => 'A(z) :attribute nem található a(z) :other mezőben.',
    'in_array_keys' => 'A(z) :attribute mezőnek tartalmaznia kell legalább egyet a következő kulcsokból: :values.',
    'integer' => 'A(z) :attribute egész szám kell legyen.',
    'ip' => 'A(z) :attribute érvényes IP-cím kell legyen.',
    'ipv4' => 'A(z) :attribute érvényes IPv4-cím kell legyen.',
    'ipv6' => 'A(z) :attribute érvényes IPv6-cím kell legyen.',
    'json' => 'A(z) :attribute érvényes JSON szöveg kell legyen.',
    'list' => 'A(z) :attribute lista kell legyen.',
    'lowercase' => 'A(z) :attribute kisbetűs kell legyen.',
    'lt' => [
        'array' => 'A(z) :attribute kevesebb mint :value elemet tartalmazhat.',
        'file' => 'A(z) :attribute kisebb kell legyen, mint :value kilobájt.',
        'numeric' => 'A(z) :attribute kisebb kell legyen, mint :value.',
        'string' => 'A(z) :attribute rövidebb kell legyen, mint :value karakter.',
    ],
    'lte' => [
        'array' => 'A(z) :attribute nem tartalmazhat több mint :value elemet.',
        'file' => 'A(z) :attribute legfeljebb :value kilobájt lehet.',
        'numeric' => 'A(z) :attribute legfeljebb :value lehet.',
        'string' => 'A(z) :attribute legfeljebb :value karakter lehet.',
    ],
    'mac_address' => 'A(z) :attribute érvényes MAC-cím kell legyen.',
    'max' => [
        'array' => 'A(z) :attribute nem tartalmazhat több mint :max elemet.',
        'file' => 'A(z) :attribute nem lehet nagyobb, mint :max kilobájt.',
        'numeric' => 'A(z) :attribute nem lehet nagyobb, mint :max.',
        'string' => 'A(z) :attribute nem lehet hosszabb, mint :max karakter.',
    ],
    'max_digits' => 'A(z) :attribute legfeljebb :max számjegyből állhat.',
    'mimes' => 'A(z) :attribute fájltípus a következő kell legyen: :values.',
    'mimetypes' => 'A(z) :attribute fájltípus a következő kell legyen: :values.',
    'min' => [
        'array' => 'A(z) :attribute legalább :min elemet kell tartalmazzon.',
        'file' => 'A(z) :attribute legalább :min kilobájt kell legyen.',
        'numeric' => 'A(z) :attribute legalább :min kell legyen.',
        'string' => 'A(z) :attribute legalább :min karakter kell legyen.',
    ],
    'min_digits' => 'A(z) :attribute legalább :min számjegyet kell tartalmazzon.',
    'missing' => 'A(z) :attribute hiányoznia kell.',
    'missing_if' => 'A(z) :attribute hiányoznia kell, ha :other értéke :value.',
    'missing_unless' => 'A(z) :attribute hiányoznia kell, kivéve, ha :other értéke :value.',
    'missing_with' => 'A(z) :attribute hiányoznia kell, ha :values jelen van.',
    'missing_with_all' => 'A(z) :attribute hiányoznia kell, ha :values jelen vannak.',
    'multiple_of' => 'A(z) :attribute a :value többszöröse kell legyen.',
    'not_in' => 'A kiválasztott :attribute érvénytelen.',
    'not_regex' => 'A(z) :attribute formátuma érvénytelen.',
    'numeric' => 'A(z) :attribute szám kell legyen.',
    'password' => [
        'letters' => 'A(z) :attribute tartalmaznia kell legalább egy betűt.',
        'mixed' => 'A(z) :attribute tartalmaznia kell legalább egy kis- és egy nagybetűt.',
        'numbers' => 'A(z) :attribute tartalmaznia kell legalább egy számot.',
        'symbols' => 'A(z) :attribute tartalmaznia kell legalább egy szimbólumot.',
        'uncompromised' => 'A megadott :attribute adatszivárgásban szerepel. Válassz másikat.',
    ],
    'present' => 'A(z) :attribute mezőnek jelen kell lennie.',
    'present_if' => 'A(z) :attribute mezőnek jelen kell lennie, ha :other értéke :value.',
    'present_unless' => 'A(z) :attribute mezőnek jelen kell lennie, kivéve, ha :other értéke :value.',
    'present_with' => 'A(z) :attribute mezőnek jelen kell lennie, ha :values jelen van.',
    'present_with_all' => 'A(z) :attribute mezőnek jelen kell lennie, ha :values jelen vannak.',
    'prohibited' => 'A(z) :attribute mező tiltott.',
    'prohibited_if' => 'A(z) :attribute tiltott, ha :other értéke :value.',
    'prohibited_if_accepted' => 'A(z) :attribute tiltott, ha :other elfogadott.',
    'prohibited_if_declined' => 'A(z) :attribute tiltott, ha :other elutasított.',
    'prohibited_unless' => 'A(z) :attribute tiltott, kivéve, ha :other benne van a következőkben: :values.',
    'prohibits' => 'A(z) :attribute megakadályozza, hogy a(z) :other jelen legyen.',
    'regex' => 'A(z) :attribute formátuma érvénytelen.',
    'required' => 'A(z) :attribute mező kitöltése kötelező.',
    'required_array_keys' => 'A(z) :attribute tartalmaznia kell a következő kulcsokat: :values.',
    'required_if' => 'A(z) :attribute mező kitöltése kötelező, ha :other értéke :value.',
    'required_if_accepted' => 'A(z) :attribute mező kitöltése kötelező, ha :other elfogadott.',
    'required_if_declined' => 'A(z) :attribute mező kitöltése kötelező, ha :other elutasított.',
    'required_unless' => 'A(z) :attribute mező kitöltése kötelező, kivéve, ha :other benne van a következőkben: :values.',
    'required_with' => 'A(z) :attribute mező kitöltése kötelező, ha :values jelen van.',
    'required_with_all' => 'A(z) :attribute mező kitöltése kötelező, ha :values jelen vannak.',
    'required_without' => 'A(z) :attribute mező kitöltése kötelező, ha :values nincs jelen.',
    'required_without_all' => 'A(z) :attribute mező kitöltése kötelező, ha egyik :values sincs jelen.',
    'same' => 'A(z) :attribute és :other meg kell egyezzen.',
    'size' => [
        'array' => 'A(z) :attribute :size elemet kell tartalmazzon.',
        'file' => 'A(z) :attribute :size kilobájt kell legyen.',
        'numeric' => 'A(z) :attribute értéke :size kell legyen.',
        'string' => 'A(z) :attribute :size karakter kell legyen.',
    ],
    'starts_with' => 'A(z) :attribute a következőkkel kell kezdődjön: :values.',
    'string' => 'A(z) :attribute szöveg kell legyen.',
    'timezone' => 'A(z) :attribute érvényes időzóna kell legyen.',
    'unique' => 'A(z) :attribute már foglalt.',
    'uploaded' => 'A(z) :attribute feltöltése nem sikerült.',
    'uppercase' => 'A(z) :attribute nagybetűs kell legyen.',
    'url' => 'A(z) :attribute érvényes URL kell legyen.',
    'ulid' => 'A(z) :attribute érvényes ULID kell legyen.',
    'uuid' => 'A(z) :attribute érvényes UUID kell legyen.',

    /*
    |--------------------------------------------------------------------------
    | Egyedi validációs sorok
    |--------------------------------------------------------------------------
    |
    | Itt adhatod meg az egyedi üzeneteket "attribute.rule" formátumban.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'egyedi üzenet',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Attribútum nevek
    |--------------------------------------------------------------------------
    |
    | Az alábbi sorok az attribútumneveket emberbarátabb formára cserélik.
    |
    */

    'attributes' => [],

];
