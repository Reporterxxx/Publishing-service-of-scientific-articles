<?php

namespace App\Config;

class Config
{

    /**
     * Config for dev
     */
//    static string $DB_SERVER = '192.168.0.0';
//    static string $DB_NAME = 'name';
//    static string $DB_NAME_BOT = 'name';
//    static string $DB_USERNAME = 'root';
//    static string $DB_PASSWORD = '1';
//

    /**
     * Config for prod
     */
    // static string $DB_SERVER = '192.0.0.0';
    // static string $DB_NAME_BOT = 'name';
    // static string $DB_NAME = 'name';
    // static string $DB_USERNAME = 'root';
    // static string $DB_PASSWORD = '1';

    // static string $AUTH_REF = 'https://auth.ru/';
    // static string $TO_GALL_REF = 'http://gallery.ru/';
#!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    # Конфигурация для подключения к БД
    static string $DB_SERVER = '127.0.0.1:3306';
    static string $DB_NAME = 'science_articles';
    static string $DB_USERNAME = 'root';
    static string $DB_PASSWORD = '1';
#!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    static string $AUTH_REF = 'https://auth.ru/';
    // static string $TO_GALL_REF = 'http://gallery.ru/';

    /**
     * Config for all
     */

    static string $LOG_ROUTER_NAME = 'routerlogger';
    static string $LOG_ROUTER_FILE_PATH = __DIR__ . '/../Logs/router.log';

    static string $LOG_CONTROLLER_NAME = 'controllerLogger';
    static string $LOG_CONTROLLER_FILE_PATH = __DIR__ . '/../Logs/controllers.log';

    static string $LOG_MODEL_NAME = 'controllerLogger';
    static string $LOG_MODEL_FILE_PATH = __DIR__ . '/../Logs/models.log';

    static string $LOG_VIEW_NAME = 'controllerLogger';
    static string $LOG_VIEW_PATH = __DIR__ . '/../Logs/views.log';

}
