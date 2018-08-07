
<?php 
return [ 
    'client_id' => env('PAYPAL_Client_ID','AdMocljPuPFXm0tQX0pMfgj6jqRWcffb69xLZD3LvR5ZR5QErThWV3nXirMOsWcKDUw5UEfgSuagdJ7E'),
    'secret' => env('PAYPAL_Client_SECRET','EGRF16fCrKxs3Alh_S-1IQMakx1DiGBs7zzs1pLVrnjx3Gfl9jwZKI7WPNnK0grOmVzxKVkcZDOkKMBF'),
    'settings' => array(
        'mode' => env('PAYPAL_MODE','sandbox'),
        'http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'ERROR'
    ),
];

