<?php

require_once __DIR__ . '/router.php';

get('/', 'home.php');
get('/about', 'about.php');
get('/services', 'services.php');
get('/location', 'location.php');
get('/pricing', 'pricing.php');
get('/fleet', 'fleet.php');
get('/contact', 'contact.php');