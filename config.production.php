<?php

return [
    'baseUrl' => 'https://echocyber.io',
    'production' => true,
    'turnstileSiteKey' => getenv('TURNSTILE_SITE_KEY') ?: '',
];
