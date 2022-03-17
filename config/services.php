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
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'google' => [
        'client_id' => '803808557609-v4p8sgr9mg2in8a888d0doktrqflkoch.apps.googleusercontent.com', 
        'client_secret' => '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', 
        'redirect' => 'http://127.0.0.1:8000/google/callback/'
    ],

    'facebook' => [
        'client_id' => '7201276706581273',
        'client_secret' => '37a5266217cb6d2c7d68e089abd5b694',
        'redirect' => 'http://127.0.0.1:8000/facebook/callback/',
      ],


];
