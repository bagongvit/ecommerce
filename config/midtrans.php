<?php

return [
    'server_key' => env('MIDTRANS_SERVER_KEY', 'YOUR_SERVER_KEY_HERE'),
    'client_key' => env('MIDTRANS_CLIENT_KEY', 'YOUR_CLIENT_KEY_HERE'),
    'is_production' => env('MIDTRANS_IS_PRODUCTION', false),
    'is_sanitized' => env('MIDTRANS_IS_SANITIZED', true),
    'is_3ds' => env('MIDTRANS_IS_3DS', true),
];
