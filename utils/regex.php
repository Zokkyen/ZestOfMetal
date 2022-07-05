<?php

//Define all regex needed for text input
define ('REGEX_PSEUDO', "^[a-zA-Z]{1,20}[0-9]{0,3}$");
define ('REGEX_EMAIL', "^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?");
define ('REGEX_PASSWORD', "^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$");

// Define global variable for error message
define('ERROR_EMPTY', 'Le champ est vide.');
define('ERROR_REGEX', 'Le champ ne correspond pas à ce qui est demandé.');