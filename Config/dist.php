<?php
return [
    'apiEndpoint' => '',
    'apiParameters' => [
        'token' => '',
        'code' => basename(filter_input(INPUT_GET, 'code', FILTER_SANITIZE_STRING)),
    ],
    'plugins' => include('plugins.php'),
    'youtubeApiToken' => ''
];