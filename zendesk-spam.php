<?php
#Tickets to delete (at least 100)
$startTicket = 10403;
$endTicket = 10403;


#Change your domain and credentials
$url = 'https://pagsegurotransparente.zendesk.com/api/v2/tickets/mark_many_as_spam.json?ids=';
$email = 'email@provider.com';
$pass = 'XXXX';
#end config


#run the script: php zendesk-spam.php

$chunkSize = 100; //maximum supported by zendesk
$tickets = [];
for($x=1, $ticket=$startTicket; $ticket <= $endTicket; $x++, $ticket++){
    $tickets[] = $ticket;
    if($x % $chunkSize == 0){
        $strTickets =  implode(',', $tickets);
        $tickets = [];

        $ch = curl_init($url . $strTickets);
        curl_setopt_array($ch, array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_HTTPHEADER => array(
                "Accept: */*",
                "Accept-Encoding: gzip, deflate",
                "Authorization: Basic " . base64_encode(sprintf('%s:%s' ,$email, $pass)),
                "Cache-Control: no-cache",
            )
        ));

        echo $ret = curl_exec($ch) . PHP_EOL;
    }
}


