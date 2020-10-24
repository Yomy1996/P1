<?php
		header('Content-Type: text/html; charset=UTF-8');
 			$userName=$_POST['Name'];
			$userFecha=$_POST['Phone'];
			
			$userEmail=$_POST['Email'];
			
			$userSituacion=$_POST['Mensaje'];
			
			
			$subject = "Mensaje de ".$userName; 
			$message = '<html><head><title>'.$subject.'</title></head><body><table>
			 <tr><td width="182" align="center"><img src="../../images/logo.png" width="130" /></td>
    <td align="center"></br>    <strong>FORMULARIO DE CONTACTO</strong></td></tr>
	<tr><td>Nombre: </td><td> '.$userName.'</td></tr>
			<tr><td>Tel&eacute;fono:  </td><td> '.$userFecha.'</td></tr>
			
			
			<tr><td>Email:  </td><td> '.$userEmail.'</td></tr>
		
<tr><td>Mensaje:  </td><td> '.$userSituacion.'</td></tr>				
			
			


</table></body></html>';
		
			$to="info@electronicservicesec.com";
			$headers = "From: " . strip_tags($userEmail) . "\r\n";
			$headers .= "Reply-To: ". strip_tags($userEmail) . "\r\n";
			$headers .= "CCO: info@electronicservicesec.com\r\n";
			
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
		header('Content-Type: text/html; charset=UTF-8');	
			if(!mail($to, $subject, $message, $headers)){
             $mail_status='no';
				header("Location: contactos.html");
			exit();
          }else{
          	  $mail_status='yes';
          	header("Location: index.html");
			exit();
           
         }
		 
		  ?>