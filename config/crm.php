<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Adres CRM
    |--------------------------------------------------------------------------
    |
    | Bazowy URL instalacji ProvestaCRM, bez końcowego slasha.
    | Np. https://crm.example.com
    |
    */
    'base_url' => env('CRM_BASE_URL', ''),

    /*
    |--------------------------------------------------------------------------
    | Klucz API
    |--------------------------------------------------------------------------
    |
    | Klucz wygenerowany w CRM: Ustawienia → Firmy → API zewnętrzne.
    | Trzymaj wyłącznie w .env — nigdy w repozytorium.
    |
    */
    'api_key' => env('CRM_API_KEY', ''),

    /*
    |--------------------------------------------------------------------------
    | Timeout żądań (sekundy)
    |--------------------------------------------------------------------------
    */
    'timeout' => (int) env('CRM_API_TIMEOUT', 10),

];
