<?php
// Definindo o fuso horário
date_default_timezone_set('America/Sao_Paulo');
// Definindo local e formatos
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');

// -------------------- CONSTANTES GERAIS -------------------------------- //
define('DAILY_TIME', 60 * 60 * 8);


// -------------------------- PASTAS -------------------------------- //
// Armazena o caminho para os arquivos na pasta 'src'
define('MODEL_PATH', realpath(dirname(__FILE__) . '/../models'));
define('VIEW_PATH', realpath(dirname(__FILE__) . '/../views'));
define('TEMPLATE_PATH', realpath(dirname(__FILE__) . '/../views/templates'));
define('CONTROLLER_PATH', realpath(dirname(__FILE__) . '/../controllers'));
define('EXCEPTION_PATH', realpath(dirname(__FILE__) . '/../exceptions'));

// -------------------------- ARQUIVOS -------------------------------- //
// Carrega as config. do BD
require_once(realpath(dirname(__FILE__) . '/database.php'));
require_once(realpath(dirname(__FILE__) . '/loader.php'));
require_once(realpath(dirname(__FILE__) . '/session.php'));
require_once(realpath(dirname(__FILE__) . '/date_utils.php'));
require_once(realpath(dirname(__FILE__) . '/utils.php'));
require_once(realpath(MODEL_PATH  . '/Model.php'));
require_once(realpath(MODEL_PATH  . '/User.php'));
require_once(realpath(MODEL_PATH  . '/WorkingHours.php'));
require_once(realpath(EXCEPTION_PATH  . '/AppException.php'));
require_once(realpath(EXCEPTION_PATH  . '/ValidationException.php'));
