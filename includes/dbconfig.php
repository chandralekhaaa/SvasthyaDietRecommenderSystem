<?php
    require __DIR__.'/vendor/autoload.php';
    
    use Kreait\Firebase\Factory;
    use Kreait\Firebase\ServiceAccount;

    $serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/svasthya-12892-firebase-adminsdk-me81o-73591b35fe.json');
    $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://svasthya-12892.firebaseio.com')
        ->create();
    
    $database = $firebase->getDatabase();
?>