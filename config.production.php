<?php

return [
    'baseUrl' => 'https://echocyber.io',
    'production' => true,
    // Turnstile site key is public (gets rendered into HTML). Hardcoded
    // because Jigsaw's PHP child process doesn't reliably see Netlify env
    // vars at build time. The matching SECRET key stays in Netlify env.
    'turnstileSiteKey' => '0x4AAAAAADG_poOR76T-jTV5',
];
