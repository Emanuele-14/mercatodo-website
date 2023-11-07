<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Il campo :attribute deve essere accettato.',
    'accepted_if' => 'Il campo :attribute deve essere accettato quando :other è :value.',
    'active_url' => 'Il campo :attribute deve essere un URL valido.',
    'after' => 'Il campo :attribute deve essere una data successiva :date.',
    'after_or_equal' => 'Il campo :attribute deve essere una data successiva o uguale a :date.',
    'alpha' => 'Il campo :attribute deve contenere solo lettere.',
    'alpha_dash' => 'Il campo :attribute deve contenere solo lettere, numeri, trattini e trattini bassi.',
    'alpha_num' => 'Il campo :attribute deve contenere solo lettere e numeri.',
    'array' => 'Il campo :attribute deve essere un array.',
    'ascii' => 'Il campo :attribute deve contenere solo caratteri alfanumerici e simboli.',
    'before' => 'Il campo :attribute deve essere una data precedente :date.',
    'before_or_equal' => 'Il campo :attribute deve essere una data precedente o uguale a :date.',
    'between' => [
        'array' => 'Il campo :attribute deve avere un numero compreso tra :min e :max .',
        'file' => 'Il campo :attribute deve essere compreso :min e :max kilobytes.',
        'numeric' => 'Il campo :attribute  deve essere compreso tra :min e :max.',
        'string' => 'Il campo :attribute  deve essere compreso tra :min e :max caratteri.',
    ],
    'boolean' => 'Il campo :attribute deve essere un valore vero o falso.',
    'can' => 'Il campo :attribute contiene un valore non autorizzato.',
    'confirmed' => 'Il campo :attribute non corrisponde.',
    'current_password' => 'Il campo password non è corretta.',
    'date' => 'Il campo :attribute deve essere una data valida.',
    'date_equals' => 'Il campo :attribute deve essere una data uguale a :date',
    'date_format' => 'Il campo :attribute deve corrispondere al formato :format.',
    'decimal' => 'Il campo :attribute deve avere :decimal cifre decimali.',
    'declined' => 'Il campo :attribute deve essere rifiutato.',
    'declined_if' => 'Il campo :attribute deve essere rifiutato quando :other è :value.',
    'different' => 'Il campo :attribute e :other devono essere differenti',
    'digits' => 'Il campo :attribute deve essere :digits cifre.',
    'digits_between' => 'Il campo :attribute deve essere compreso tra :min e :max cifre.',
    'dimensions' => 'Il campo :attribute ha dimenzioni non valide.',
    'distinct' => 'Il campo :attribute ha un valore duplicato.',
    'doesnt_end_with' => 'Il campo :attribute non deve terminare con uno dei seguenti: :values.',
    'doesnt_start_with' => 'Il campo :attribute non deve iniziare con uno dei seguenti: :values.',
    'email' => 'Il campo :attribute deve essere un indirizzo email valido.',
    'ends_with' => 'Il campo :attribute deve terminare con una delle seguenti: :values.',
    'enum' => 'Il campo selezionato :attribute è invalido.',
    'exists' => 'Il campo selezionato :attribute è invalido.',
    'file' => 'Il campo :attribute non è un file.',
    'filled' => 'Il campo :attribute deve avere un valore.',
    'gt' => [
        'array' => 'Il campo :attribute deve avere più di :value elementi.',
        'file' => 'Il campo :attribute deve essere maggiore di :value kilobytes.',
        'numeric' => 'Il campo :attribute deve essere maggiore di :value.',
        'string' => 'Il campo :attribute deve essere maggiore di :value caratteri.',
    ],
    'gte' => [
        'array' => 'Il campo :attribute deve avere :value elementi o più.',
        'file' => 'Il campo :attribute deve essere maggiore o uguale a :value kilobytes.',
        'numeric' => 'Il campo :attribute deve essere maggiore o uguale a :value.',
        'string' => 'Il campo :attribute deve essere maggiore o uguale a :value caratteri.',
    ],
    'image' => 'Il campo :attribute deve essere un immagine',
    'in' => 'Il campo selezionato :attribute è invalido.',
    'in_array' => 'Il campo :attribute deve esistere in :other.',
    'integer' => 'Il campo :attribute deve essere un numero intero.',
    'ip' => 'Il campo :attribute deve essere un indirizzo IP valido.',
    'ipv4' => 'Il campo :attribute deve essere un indirizzo IPv4 valido.',
    'ipv6' => 'Il campo :attribute deve essere un indirizzo IPv6 valido.',
    'json' => 'Il campo :attribute deve essere una stringa JSON valida.',
    'lowercase' => 'Il campo :attribute deve essere minuscolo.',
    'lt' => [
        'array' => 'Il campo :attribute deve avere meno di :value elementi.',
        // 'file' => 'Il campo :attribute deve essere inferiore a :value kilobytes.',
        'file' => 'Il file non deve essere superiore a 1024 kilobytes', //aggiunto
        'numeric' => 'Il campo :attribute deve essere inferiore a :value.',
        'string' => 'Il campo :attribute deve essere inferiore a :value caratteri.',
    ],
    'lte' => [
        'array' => 'Il campo :attribute non deve avere più di :value elementi.',
        'file' => 'Il campo :attribute deve essere inferiore a o uguale a :value kilobytes.',
        'numeric' => 'Il campo :attribute deve essere inferiore a o uguale a :value.',
        'string' => 'Il campo :attribute deve essere inferiore a o uguale a :value caratteri.',
    ],
    'mac_address' => 'Il campo :attribute deve essere un indirizzo MAC valido.',
    'max' => [
        'array' => 'Il campo :attribute non deve avere più di :max elementi.',
        // 'file' => 'Il campo :attribute non deve essere maggiore di :max kilobytes.',
        'file' => 'Il file non deve essere superiore a 1024 kilobytes', //aggiunto
        'numeric' => 'Il campo :attribute non deve essere maggiore di :max.',
        'string' => 'Il campo :attribute non deve essere maggiore di :max caratteri.',
    ],
    'max_digits' => 'Il campo :attribute non deve avere più di :max caratteri.',
    'mimes' => 'Il campo :attribute deve essere un file del tipo: :values.',
    'mimetypes' => 'Il campo :attribute deve essere un file del tipo: :values.',
    'min' => [
        'array' => 'Il campo :attribute deve avere almeno :min elementi.',
        'file' => 'Il campo :attribute deve essere almeno :min kilobytes.',
        'numeric' => 'Il campo :attribute deve essere almeno :min.',
        'string' => 'Il campo deve contenere almeno :min caratteri.',//mod
    ],
    'min_digits' => 'Il campo :attribute deve avere almeno :min caratteri.',
    'missing' => 'Il campo :attribute deve mancare.',
    'missing_if' => 'Il campo :attribute deve mancare quando :other è :value.',
    'missing_unless' => 'Il campo :attribute deve mancare :other è :value.',
    'missing_with' => 'Il campo :attribute deve mancare quando :values è presente.',
    'missing_with_all' => 'Il campo :attribute deve mancare quando :values è presente.',
    'multiple_of' => 'Il campo :attribute deve essere un multiplo di :value.',
    'not_in' => 'Il campo selezionato :attribute è invalido.',
    'not_regex' => 'Il campo :attribute format è invalido.',
    'numeric' => 'Il campo :attribute deve essere un numero.',
    'password' => [
        'letters' => 'Il campo :attribute deve contenere almeno una lettera.',
        'mixed' => 'Il campo :attribute deve contenere almeno una lettera maiuscola e una minuscola.',
        'numbers' => 'Il campo :attribute deve contenere almeno un numero.',
        'symbols' => 'Il campo :attribute deve contenere almeno un simbolo.',
        'uncompromised' => 'Il campo :attribute è apparso in una fuga di dati. Scegli un :attribute diverso.',
    ],
    'present' => 'Il campo :attribute deve essere presente.',
    'prohibited' => 'Il campo :attribute è proibito.',
    'prohibited_if' => 'Il campo :attribute è proibito quando :other è :value.',
    'prohibited_unless' => 'Il campo :attribute è proibito salvo che :other è in :values.',
    'prohibits' => 'Il campo :attribute impedisce :other di essere presente.',
    'regex' => 'Il campo :attribute ha un formato non valido.',
    'required' => 'Il campo è obbligatiorio.', //mod
    'required_array_keys' => 'Il campo :attribute deve contenere :values.',
    'required_if' => 'Il campo :attribute è obbligatorio quando :other è :value.',
    'required_if_accepted' => 'Il campo :attribute è obbligatorio quando :other è accettato.',
    'required_unless' => 'Il campo :attribute è obbligatorio salvo che :other è in :values.',
    'required_with' => 'Il campo :attribute è obbligatorio quando :values è presente.',
    'required_with_all' => 'Il campo :attribute è obbligatorio quando :values è presente.',
    'required_without' => 'Il campo :attribute è obbligatorio quando :values non è presente',
    'required_without_all' => 'il :attribute è obbligatorio quando none of :values sono presenti.',
    'same' => 'Il campo :attribute deve combaciare :other.',
    'size' => [
        'array' => 'Il campo :attribute deve contenere :size elementi.',
        'file' => 'Il campo :attribute deve contenere :size kilobytes.',
        'numeric' => 'Il campo :attribute deve contenere :size.',
        'string' => 'Il campo :attribute deve contenere :size caratteri.',
    ],
    'starts_with' => 'Il campo :attribute deve iniziare con uno dei seguenti: :values.',
    'string' => 'Il campo :attribute deve contenere una stringa.',
    'timezone' => 'Il campo :attribute deve contenere un fuso orario valido.',
    'unique' => 'Il campo :attribute è già stata presa.',
    'uploaded' => 'Il campo :attribute ,caricamento non riuscito.',
    'uppercase' => 'Il campo :attribute deve contenere maiuscola.',
    'url' => 'Il campo :attribute deve contenere un URL valido.',
    'ulid' => 'Il campo :attribute deve contenere un ULID valido.',
    'uuid' => 'Il campo :attribute deve contenere un UUID valido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
