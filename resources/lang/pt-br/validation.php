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

    'accepted'             => 'O campo :attribute deve ser aceito.',
    'active_url'           => 'O campo :attribute não corresponde a uma URL válida.',
    'after'                => 'O campo :attribute deve ser uma data após :date.',
    'after_or_equal'       => 'O campo :attribute deve ser uma data após ou igual a :date.',
    'alpha'                => 'O campo :attribute só pode conter letras.',
    'alpha_dash'           => 'O campo :attribute só pode conter letras, números e traços.',
    'alpha_num'            => 'O campo :attribute só pode conter letras e números.',
    'array'                => 'O campo :attribute deve ser um vetor.',
    'before'               => 'O campo :attribute deve ser uma data antes de :date.',
    'before_or_equal'      => 'O campo :attribute deve ser uma data antes ou igual a :date.',
    'between'              => [
        'numeric' => 'O campo :attribute deve estar entre :min e :max.',
        'file'    => 'O arquivo :attribute deve ter entre :min e :max kilobytes.',
        'string'  => 'O campo :attribute deve ter entre :min e :max caracteres.',
        'array'   => 'O campo :attribute deve ter entre :min e :max itens.',
    ],
    'boolean'              => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed'            => 'A confirmação do campo :attribute não confere.',
    'date'                 => 'O campo :attribute não possui uma data válida.',
    'date_format'          => 'O campo :attribute não corresponde o formato :format.',
    'different'            => 'Os campos :attribute e :other devem ser diferentes.',
    'digits'               => 'O campo :attribute deve ter :digits digitos.',
    'digits_between'       => 'O campo :attribute deve ter entre :min e :max digitos.',
    'dimensions'           => 'A imagem do campo :attribute tem dimensões inválidas.',
    'distinct'             => 'O campo :attribute tem um valor duplicado.',
    'email'                => 'O campo :attribute deve corresponder a um e-mail válido.',
    'exists'               => 'O campo :attribute é inválido.',
    'file'                 => 'O campo :attribute deve ter um arquivo.',
    'filled'               => 'O campo :attribute deve ter um valor.',
    'gt'                   => [
        'numeric' => 'O campo :attribute deve ser maior que :value.',
        'file'    => 'O arquivo do campo :attribute deve ser maior que :value kilobytes.',
        'string'  => 'O campo :attribute deve ter mais que :value caracteres.',
        'array'   => 'O campo :attribute deve ter mais que :value itens.',
    ],
    'gte'                  => [
        'numeric' => 'O campo :attribute deve ser maior que ou igual a :value.',
        'file'    => 'O campo :attribute deve ser maior que ou igual a :value kilobytes.',
        'string'  => 'O campo :attribute deve ter mais que ou igual a :value caracteres.',
        'array'   => 'O campo :attribute deve ter :value itens ou mais.',
    ],
    'image'                => 'O campo :attribute deve possuir uma imagem válida.',
    'in'                   => 'O campo :attribute é inválido.',
    'in_array'             => 'O campo :attribute não existe em :other.',
    'integer'              => 'O campo :attribute deve ser um inteiro.',
    'ip'                   => 'O campo :attribute deve ser um endereço IP válido.',
    'ipv4'                 => 'O campo :attribute deve ser um endereço IPv4 válido.',
    'ipv6'                 => 'O campo :attribute deve ser um endereço IPv6 válido.',
    'json'                 => 'O campo :attribute deve ser um JSON válido.',
    'lt'                   => [
        'numeric' => 'O campo :attribute deve ser menor que :value.',
        'file'    => 'O campo :attribute deve ter menos que :value kilobytes.',
        'string'  => 'O campo :attribute deve ter menos que :value caracteres.',
        'array'   => 'O campo :attribute deve ter menos que :value itens.',
    ],
    'lte'                  => [
        'numeric' => 'O campo :attribute deve ser menor que ou igual a :value.',
        'file'    => 'O campo :attribute deve ter menos que ou exatos :value kilobytes.',
        'string'  => 'O campo :attribute deve ter menos que ou exatos :value caracteres.',
        'array'   => 'O campo :attribute não deve ter mais que :value itens.',
    ],
    'max'                  => [
        'numeric' => 'O campo :attribute não pode ser maior que :max.',
        'file'    => 'O campo :attribute não pode ter menos que  :max kilobytes.',
        'string'  => 'O campo :attribute não pode ter menos que  :max caracteres.',
        'array'   => 'O campo :attribute não pode ter menos que :max itens.',
    ],
    'mimes'                => 'O campo :attribute deve ser um arquivo do tipo :values.',
    'mimetypes'            => 'O campo :attribute deve ser um arquivo do tipo :values.',
    'min'                  => [
        'numeric' => 'O campo :attribute deve ser no mínimo :min.',
        'file'    => 'O campo :attribute deve ter no mínimo :min kilobytes.',
        'string'  => 'O campo :attribute deve ter no mínimo :min caracteres.',
        'array'   => 'O campo :attribute deve ter no mínimo :min itens.',
    ],
    'not_in'               => 'O campo :attribute selecionado é inválido.',
    'not_regex'            => 'O campo :attribute tem formato inválido.',
    'numeric'              => 'O campo :attribute deve ser um número.',
    'present'              => 'O campo :attribute deve estar presente.',
    'regex'                => 'O campo :attribute tem formato inválido.',
    'required'             => 'O campo :attribute é obrigatório.',
    'required_if'          => 'O campo :attribute é obrigatório quando o campo :other é :value.',
    'required_unless'      => 'O campo :attribute é obrigatório a menos que o campo :other faça parte de :values.',
    'required_with'        => 'O campo :attribute é obrigatório quando :values está presente.',
    'required_with_all'    => 'O campo :attribute é obrigatório quando :values estão presentes.',
    'required_without'     => 'O campo :attribute é obrigatório quando :values não está presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum entre :values esá presente.',
    'same'                 => 'O campo :attribute e :other devem ser iguais.',
    'size'                 => [
        'numeric' => 'O campo :attribute deve ter :size.',
        'file'    => 'O campo :attribute deve ter :size kilobytes.',
        'string'  => 'O campo :attribute deve ter :size caracteres.',
        'array'   => 'O campo :attribute deve conter :size itens.',
    ],
    'string'               => 'O campo :attribute deve ser uma cadeia de caracteres.',
    'timezone'             => 'O campo :attribute deve ser um fuso horário válido.',
    'unique'               => 'O campo :attribute já existe e deve ser único..',
    'uploaded'             => 'O campo :attribute falhou ao realizar upload.',
    'url'                  => 'O campo :attribute tem formato inválido.',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
