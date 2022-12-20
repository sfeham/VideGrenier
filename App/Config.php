<?php

namespace App;

/**
 * Application configuration
 *
 * PHP version 7.0
 */
class Config
{

    /**
     * Database host
     * @var string
     */
    // const DB_HOST = 'mariadb';
    const DB_HOST = 'localhost';

    /**
     * Database name
     * @var string
     */
    const DB_NAME = 'videgrenierenligne';

    /**
     * Database user
     * @var string
     */
    // const DB_USER = 'webapplication';
    const DB_USER = 'root';

    /**
     * Database password
     * @var string
     */
    // const DB_PASSWORD = '653rag9T';
    const DB_PASSWORD = 'root';

    /**
     * Show or hide error messages on screen
     * @var boolean
     */
    const SHOW_ERRORS = true;
}
