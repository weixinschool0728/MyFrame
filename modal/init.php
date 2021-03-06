<?php
//给文件目录定义常量


define("APP_CONFIG", APP .  "Config" . DS);
define("CORE", APP .  "Core" . DS);
define("APP_CORE", APP .  "AppCore" . DS);
define("APP_CONTROLLER", APP .  "Controller" . DS);
define("APP_MODEL", APP .  "Model" . DS);
define("APP_TEMPLATE", APP .  "View" . DS);
define("LIBRARY", APP .  "Library" . DS);
define("EXTEND", APP .  "Extend" . DS);
define("APP_LOG", APP .  "Log" . DS);
define("APP_CACHE", APP .  "Cache" . DS);


require_once APP_CONFIG . "App.inc.php";
require_once APP_CONFIG . "Core.inc.php";
require_once APP_CONFIG . "Code.inc.php";

require_once CORE . "Modal.php";
include_once(CORE . 'ModalException.php');
require_once CORE . "ModalDispatcher.php";
require_once CORE . "ModalDB.php";
require_once CORE . "ModalController.php";
require_once CORE . "ModalModel.php";
require_once CORE . "ModalView.php";
include_once(CORE . 'ModalValidator.php');

include_once(APP_CORE . 'AppController.php');
include_once(APP_CORE . 'AppModel.php');
include_once(APP_CORE . 'AppView.php');