<?php

$data = [
    "api_key" => "api-79768915DF8C43CA9CB6FB6365FEB067",
    "to"=> ["djm831@gmail.com"],
    "sender"=> "jayankee@sherpa-technologies.org",
    "subject"=> "Message From Customer",
    "text_body"=> $_POST['message'],
    "html_body"=> "<h1>". $_POST['message']. "</h1>",
];

$url = 'https://api.smtp2go.com/v3/email/send';

// use key 'http' even if you send the request to https://...
$options = [
    'http' => [
        'header' => "Content-type: application/x-www-form-urlencoded\r\n",
        'method' => 'POST',
        'content' => http_build_query($data),
    ],
];

$context = stream_context_create($options);
$result = @file_get_contents($url, false, $context);

clear($_POST);

//header('Location: ./contact.php');
//exit;

?>