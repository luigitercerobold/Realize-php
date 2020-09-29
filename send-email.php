<?php
ini_set('display_errors', 0);
error_reporting(E_ALL);$senderMail = 'hello@realizeservice.com';$from = $senderMail;
$to = $senderMail;$subject = "Contacto desde sitio web Realize";$message = '
          <html>
            <head>
              <title>Contacto Realize</title>
            </head>
            <body style="bacground-color: white; padding:0;">              
              <table>
                <tr>
                  <ths>Nombre</ths><th>' . $_POST['name'] . '</th>
                </tr>  
                 <tr>
                  <th>Email</th><th>' . $_POST['email'] . '</th>
                </tr>                  
                <tr>
                  <th>Teléfono</th><th>' . $_POST['phone'] . '</th>
                </tr>                                           
                <tr>
                  <th>Empresa</th><th>' . $_POST['empresa'] . '</th>
                </tr>  
                <tr>
                  <th>Mensaje</th><th>' . $_POST['message'] . '</th>
                </tr>                                
              </table>
             </body>
           </html>
     ';$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";$headers .= 'To: Contacto Realize <'.$to.'>' . "\r\n";
$headers .= 'From: Contacto Realize <'.$from.'>' . "\r\n";$result = mail($to, $subject, $message, $headers);
if ($result) {
    echo 'ok';
    header('Location: '.'https://realizeservice.com/index.html');
    die();
} else {
    echo 'error';
}
