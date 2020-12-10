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
        'key' => env('pk_test_51Hwp2wKxQgppeUH3oOG8hloBHhnYOcgxwJUUKTlSSMQIsZyesm8KteJ2y5Yec7VtaRzmX3EgUSj8kawIjwN57cUw00Yn72U48d'),
        'secret' => env('sk_test_51Hwp2wKxQgppeUH3dvCXZu8HKdACoQyd7bJiVaJKTgjttQbX45vBv1TyVQkrbPccRynFTJpH4B63igtZAXGuvBJ0004nad8U6G'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'stripe' => [
        'secret' => '',
    ],

];
