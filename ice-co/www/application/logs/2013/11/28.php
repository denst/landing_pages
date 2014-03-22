<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-28 02:01:00 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/email/vendor/swift/classes/Swift/Transport/MailTransport.php [ 183 ] in file:line
2013-11-28 02:01:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', '/home/denst/www...', 183, Array)
#1 /home/denst/www/ice-co/www/modules/email/vendor/swift/classes/Swift/Transport/MailTransport.php(183): sprintf('Array', 'denis.lushchenk...')
#2 /home/denst/www/ice-co/www/modules/email/vendor/swift/classes/Swift/Mailer.php(87): Swift_Transport_MailTransport->send(Object(Swift_Message), Array)
#3 /home/denst/www/ice-co/www/modules/email/classes/Email.php(142): Swift_Mailer->send(Object(Swift_Message))
#4 /home/denst/www/ice-co/www/application/classes/Model/Email.php(85): Email::send('denis.lushchenk...', 'denis.lushchenk...', '?????????? ????...', '<p>?????????? ?...', true)
#5 /home/denst/www/ice-co/www/application/classes/Model/Email.php(60): Model_Email->send('denis.lushchenk...', '?????????? ????...', '<p>?????????? ?...')
#6 /home/denst/www/ice-co/www/application/classes/Model/Email.php(42): Model_Email->send_admin_email(Array, 'http://ice-co.l...')
#7 /home/denst/www/ice-co/www/application/classes/Controller/Public/Email.php(13): Model_Email->send_email(Array, 'http://ice-co.l...')
#8 /home/denst/www/ice-co/www/system/classes/Kohana/Controller.php(84): Controller_Public_Email->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/denst/www/ice-co/www/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Public_Email))
#11 /home/denst/www/ice-co/www/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/denst/www/ice-co/www/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /home/denst/www/ice-co/www/index.php(118): Kohana_Request->execute()
#14 {main} in file:line