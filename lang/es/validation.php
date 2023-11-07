<?php

return [


    'accepted' => 'El campo :attribute debe ser aceptado.',
    'accepted_if' => 'El campo :attribute debe ser aceptado cuando :other es :value.',
    'active_url' => 'El campo :attribute debe ser una URL válida.',
    'after' => 'El campo :attribute debe ser una fecha posterior :date.',
    'after_or_equal' => 'El campo :attribute debe ser una fecha posterior o igual a :date.',
    'alpha' => 'El campo :attribute debe contener solo letras.',
    'alpha_dash' => 'El campo :attribute debe contener solo letras, números, guiones y guiones bajos.',
    'alpha_num' => 'El campo :attribute debe contener solo letras y numeros.',
    'array' => 'El campo :attribute debe ser a array.',
    'ascii' => 'El campo :attribute debe contener solo caracteres alfanuméricos y simbolos.',
    'before' => 'El campo :attribute debe ser una fecha anterior :date.',
    'before_or_equal' => 'El campo :attribute debe ser una una fecha anterior o igual a :date.',
    'between' => [
        'array' => 'El campo :attribute debe tener a número entre :min y :max .',
        'file' => 'El campo :attribute debe estar entre :min y :max kilobytes.',
        'numeric' => 'El campo :attribute  debe estar entre :min y :max.',
        'string' => 'El campo debe contener entre :min y :max caracteres.',//mod
    ],
    'boolean' => 'El campo :attribute debe ser debe ser a valor verdadero o falso.',
    'can' => 'El campo :attribute ccontiene a valor no autorizado.',
    'confirmed' => 'El campo :attribute no coincide.',
    'current_password' => 'El campo password no es correcto.',
    'date' => 'El campo :attribute debe ser una fecha válida.',
    'date_equals' => 'El campo :attribute debe ser una fecha igual a :date',
    'date_format' => 'El campo :attribute debe coincidir con el formato :format.',
    'decimal' => 'El campo :attribute debe tener :decimal lugares decimales.',
    'declined' => 'El campo :attribute debe ser rifiutato.',
    'declined_if' => 'El campo :attribute debe ser rifiutato cuando :other es :value.',
    'different' => 'El campo :attribute y :other debe ser diferente',
    'digits' => 'El campo :attribute debe ser :digits cifras.',
    'digits_between' => 'El campo :attribute debe ser entre  :min y :max cifras.',
    'dimensions' => 'El campo :attribute el campo tiene a tamaño no válido.',
    'distinct' => 'El campo :attribute tiene a valor duplicado.',
    'doesnt_end_with' => 'El campo :attribute no debe terminar con: :values.',
    'doesnt_start_with' => 'El campo :attribute no tiene que empezar con: :values.',
    'email' => 'El campo :attribute debe ser una dirección de correo electrónico válida.',
    'ends_with' => 'El campo :attribute debe terminar con uno de los siguientes: :values.',
    'enum' => 'El campo seleccionado :attribute es inválido.',
    'exists' => 'El campo seleccionado :attribute es inválido.',
    'file' => 'El campo :attribute no es a archivo.',
    'filled' => 'El campo :attribute debe tener valor.',
    'gt' => [
        'array' => 'El campo :attribute debe tener más de  :value elementos.',
        'file' => 'El campo :attribute debe ser mas grande que :value kilobytes.',
        'numeric' => 'El campo :attribute debe ser mas grande que :value.',
        'string' => 'El campo :attribute debe ser mas grande que :value caracteres.',
    ],
    'gte' => [
        'array' => 'El campo :attribute debe tener :value elementos o mas.',
        'file' => 'El campo :attribute debe ser mayor que o igual :value kilobytes.',
        'numeric' => 'El campo :attribute debe ser mayor que o igual a :value.',
        'string' => 'El campo :attribute debe ser mayor que o igual :value caracteres.',
    ],
    'image' => 'El campo :attribute debe ser una imagen',
    'in' => 'El campo seleccionado :attribute es inválido.',
    'in_array' => 'El campo :attribute debe existir en :other.',
    'integer' => 'El campo :attribute debe ser a un número entero.',
    'ip' => 'El campo :attribute debe ser una dirección IP válida.',
    'ipv4' => 'El campo :attribute debe ser una dirección IPv4 válida.',
    'ipv6' => 'El campo :attribute debe ser una dirección IPv6 válida.',
    'json' => 'El campo :attribute debe ser una cuerda JSON válida.',
    'lowercase' => 'El campo :attribute debe ser minúscula.',
    'lt' => [
        'array' => 'El campo :attribute deve avere meno di :value elementos.',
        'file' => 'El campo archivo debe ser menos que 1024 kilobytes.', //mod
        'numeric' => 'El campo :attribute debe ser menos que :value.',
        'string' => 'El campo :attribute debe ser menos que :value caracteres.',
    ],
    'lte' => [
        'array' => 'El campo :attribute non debe tener más que :value elementos.',
        'file' => 'El campo archivo debe ser menos que o igual a 1024 kilobytes.', //mod
        'numeric' => 'El campo :attribute debe ser menos que o igual a :value.',
        'string' => 'El campo :attribute debe ser menos que o igual a :value caracteres.',
    ],
    'mac_address' => 'El campo :attribute debe ser a 
    dirección MAC válido.',
    'max' => [
        'array' => 'El campo :attribute non debe tener más que :max elementos.',
        'file' => 'El campo archivo non debe ser mas grande que 1024 kilobytes.', //mod
        'numeric' => 'El campo :attribute non debe ser mas grande que :max.',
        'string' => 'El campo :attribute non debe ser mas grande que :max caracteres.',
    ],
    'max_digits' => 'El campo :attribute non debe tener más que :max caracteres.',
    'mimes' => 'El campo :attribute debe ser a archivo de tipo: :values.',
    'mimetypes' => 'El campo :attribute debe ser a archivo de tipo: :values.',
    'min' => [
        'array' => 'El campo :attribute debe tener al menos :min elementos.',
        'file' => 'El campo :attribute debe ser al menos :min kilobytes.',
        'numeric' => 'El campo :attribute debe ser al menos :min.',
        'string' => 'El campo debe contener al menos :min caracteres.', //mod
    ],
    'min_digits' => 'El campo :attribute debe tener al menos :min caracteres.',
    'missing' => 'El campo :attribute debe faltar.',
    'missing_if' => 'El campo :attribute debe faltar cuando :other es :value.',
    'missing_unless' => 'El campo :attribute debe faltar unless :other es :value.',
    'missing_with' => 'El campo :attribute debe faltar cuando :values es presente.',
    'missing_with_all' => 'El campo :attribute debe faltar cuando :values es presente.',
    'multiple_of' => 'El campo :attribute debe ser a múltiplo de :value.',
    'not_in' => 'El campo seleccionado :attribute es inválido.',
    'not_regex' => 'El campo :attribute format es inválido.',
    'numeric' => 'El campo :attribute debe ser a número.',
    'password' => [
        'letters' => 'El campo :attribute debe contener al menos una letra.',
        'mixed' => 'El campo :attribute debe contener al menos una letra mayúscula y una letra minúscula.',
        'numbers' => 'El campo :attribute debe contener al menos a número.',
        'symbols' => 'El campo :attribute debe contener al menos a símbolo.',
        'uncompromised' => 'El campo dato :attribute apareció en una filtración de datos. Elige a :attribute diferente.',
    ],
    'present' => 'El campo :attribute debe estar presente.',
    'prohibited' => 'El campo :attribute es proibito.',
    'prohibited_if' => 'El campo :attribute es proibito cuando :other es :value.',
    'prohibited_unless' => 'El campo :attribute es proibito a menos que :other es in :values.',
    'prohibits' => 'El campo :attribute te impide :other estar presente.',
    'regex' => 'El campo :attribute tiene a formato no válido.',
    'required' => 'El campo es obligatorio.',
    'required_array_keys' => 'El campo :attribute debe contener :values.',
    'required_if' => 'El campo :attribute se requiere cuando :other es :value.',
    'required_if_accepted' => 'El campo :attribute se requiere cuando :other es accettato.',
    'required_unless' => 'El campo :attribute es obligatorio a menos que :other es in :values.',
    'required_with' => 'El campo :attribute se requiere cuando :values es presente.',
    'required_with_all' => 'El campo :attribute se requiere cuando :values es presente.',
    'required_without' => 'El campo :attribute se requiere cuando :values no es presente',
    'required_without_all' => 'il :attribute se requiere cuando ninguno de :values esta presente.',
    'same' => 'El campo :attribute debe coincidir :other.',
    'size' => [
        'array' => 'El campo :attribute debe contener :size elementos.',
        'file' => 'El campo :attribute debe contener :size kilobytes.',
        'numeric' => 'El campo :attribute debe contener :size.',
        'string' => 'el campo debe contener al menos :size caracteres.',
    ],
    'starts_with' => 'El campo :attribute debe comenzar con uno de los siguientes: :values.',
    'string' => 'El campo :attribute debe contener una cuerda.',
    'timezone' => 'El campo :attribute debe contener a una zona horaria válida.',
    'unique' => 'El campo :attribute es fue utilizado.',
    'uploaded' => 'El campo :attribute ,carga fallida.',
    'uppercase' => 'El campo :attribute debe contener mayúscula.',
    'url' => 'El campo :attribute debe contener a URL válido.',
    'ulid' => 'El campo :attribute debe contener a ULID válido.',
    'uuid' => 'El campo :attribute debe contener a UUID válido.',

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