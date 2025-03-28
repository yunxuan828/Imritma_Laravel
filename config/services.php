<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'resend' => [
        'key' => env('RESEND_KEY'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

    'graph' => [
        'client_id' => env('MICROSOFT_CLIENT_ID', '1c449494-5e15-48f2-a5a1-f377310741bd'),
        'client_secret' => env('MICROSOFT_CLIENT_SECRET', '483b80da-759f-4017-a88f-ed742a11f5cc'),
        'redirect' => env('MICROSOFT_REDIRECT_URI', 'https://imritma.com/auth/microsoft/callback'),
        'tenant' => env('MICROSOFT_TENANT_ID', 'fa9267e5-090d-4ab2-b8b7-d7f939f1da33'),
        'scopes' => ['user.read', 'openid', 'profile', 'email', 'offline_access'],
    ],

    'microsoft' => [
        'client_id' => env('MICROSOFT_CLIENT_ID', '1c449494-5e15-48f2-a5a1-f377310741bd'),
        'client_secret' => env('MICROSOFT_CLIENT_SECRET', '483b80da-759f-4017-a88f-ed742a11f5cc'),
        'redirect' => env('MICROSOFT_REDIRECT_URI', 'https://imritma.com/auth/microsoft/callback'),
        'tenant' => env('MICROSOFT_TENANT_ID', 'common'),
    ],

];
