<?php


$to="shaikyounusshaik@gmail.com";
$subject="Response from website";
$message="HAI Ra younus";
$headers="From:shaikyounus.github.io";

if(mail($to,$subject,$message,$headers))
{
	echo "Mail send succesfully";
}
	else
		{
			echo "Mail Not sent";
		}


?>