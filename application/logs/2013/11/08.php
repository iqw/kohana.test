<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-08 18:04:40 --- CRITICAL: ErrorException [ 2 ]: SoapServer::addFunction(): Tried to add a non existent function 'test' ~ APPPATH\classes\Controller\Chat.php [ 19 ] in file:line
2013-11-08 18:04:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'SoapServer::add...', 'C:\xampp\htdocs...', 19, Array)
#1 C:\xampp\htdocs\kohana.test\application\classes\Controller\Chat.php(19): SoapServer->addFunction('test')
#2 C:\xampp\htdocs\kohana.test\system\classes\Kohana\Controller.php(84): Controller_Chat->action_hello()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana.test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Chat))
#5 C:\xampp\htdocs\kohana.test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana.test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana.test\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-11-08 18:05:18 --- CRITICAL: ErrorException [ 2 ]: SoapServer::addFunction(): Tried to add a non existent function 'test' ~ APPPATH\classes\Controller\Chat.php [ 19 ] in file:line
2013-11-08 18:05:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'SoapServer::add...', 'C:\xampp\htdocs...', 19, Array)
#1 C:\xampp\htdocs\kohana.test\application\classes\Controller\Chat.php(19): SoapServer->addFunction('test')
#2 C:\xampp\htdocs\kohana.test\system\classes\Kohana\Controller.php(84): Controller_Chat->action_hello()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana.test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Chat))
#5 C:\xampp\htdocs\kohana.test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana.test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana.test\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-11-08 18:05:53 --- CRITICAL: ErrorException [ 2 ]: SoapServer::addFunction(): Tried to add a non existent function 'test' ~ APPPATH\classes\Controller\Chat.php [ 19 ] in file:line
2013-11-08 18:05:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'SoapServer::add...', 'C:\xampp\htdocs...', 19, Array)
#1 C:\xampp\htdocs\kohana.test\application\classes\Controller\Chat.php(19): SoapServer->addFunction('test')
#2 C:\xampp\htdocs\kohana.test\system\classes\Kohana\Controller.php(84): Controller_Chat->action_hello()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\kohana.test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Chat))
#5 C:\xampp\htdocs\kohana.test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\kohana.test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\kohana.test\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-11-08 18:06:21 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Chat::$test ~ APPPATH\classes\Controller\Chat.php [ 19 ] in C:\xampp\htdocs\kohana.test\application\classes\Controller\Chat.php:19
2013-11-08 18:06:21 --- DEBUG: #0 C:\xampp\htdocs\kohana.test\application\classes\Controller\Chat.php(19): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 19, Array)
#1 C:\xampp\htdocs\kohana.test\system\classes\Kohana\Controller.php(84): Controller_Chat->action_hello()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana.test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Chat))
#4 C:\xampp\htdocs\kohana.test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana.test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana.test\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana.test\application\classes\Controller\Chat.php:19
2013-11-08 18:37:18 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function hello() ~ APPPATH\classes\Controller\Soap.php [ 20 ] in file:line
2013-11-08 18:37:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-08 18:37:25 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function hello() ~ APPPATH\classes\Controller\Soap.php [ 20 ] in file:line
2013-11-08 18:37:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line