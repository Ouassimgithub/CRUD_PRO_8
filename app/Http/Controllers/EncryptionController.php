<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class EncryptionController extends Controller
{
    public function encrypt(){
        $encrypted = Crypt::encryptString('tkd@2014');
        return $encrypted;
    }

    public function decrypt(){
        $decrypted = Crypt::decryptString('eyJpdiI6IlpGaFFvVDUyWlFkL1BCbzFQb1FPV2c9PSIsInZhbHVlIjoiM09PWXZJZUVJSzRiTmJ3Z200aHR3QT09IiwibWFjIjoiOWUzMzRlNzI4NDY5NmJlNGZjZjg1ZTgwY2ZjNDY4NjkxMjE5NTMyYjM4YTdmYWJjM2UzNTg4Yjg0MzU3NWI1YiIsInRhZyI6IiJ9');  //$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi
        return $decrypted;
    }
}
