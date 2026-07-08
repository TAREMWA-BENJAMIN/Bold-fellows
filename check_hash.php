<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$hash = '$2y$12$UKksOBL1TvrahH6ulUTzveYXSOFecSfIxfdzwQIqp6hW5Qxkcoq1e';
$passwords_to_check = ['password', '12345678', 'admin123', 'admin', 'password123', 'secret'];

foreach ($passwords_to_check as $pass) {
    if (Illuminate\Support\Facades\Hash::check($pass, $hash)) {
        echo "Found password: $pass\n";
        exit;
    }
}
echo "Password not found in common list\n";
