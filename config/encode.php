<?php

    
        //Open SSL
        //La frase a encriptar:
        $frase = "mensaje php";
        echo "La frase original es: ".$frase;

        //Protocolo de cifrado
        $cifrado = "AES-128-CTR";

        //Usar OpenSSL
        $iv_longitud =openssl_cipher_iv_length($cifrado);
        $options = 0;

        //Inicializar Vector para encriptar
        $encryption_iv = "1234567891011121";
        //Guardar nuestra llave de encriptacion:
        $encryption_key ="AdSi";

        //Encriptar
        $encriptado = openssl_encrypt($frase,$cifrado,$encryption_key,$options,$encryption_iv);
        echo "<br>".$encriptado;

        //Desencriptar:
        $decryption_iv = $encryption_iv;
        $decryption_key = $encryption_key;

        $desencriptado = openssl_decrypt($encriptado,$cifrado,$decryption_key,$options,$decryption_iv);
        echo "<br>Mensaje decodificado ".$desencriptado;
        echo "<br>";
        //Limpieza de caracteres
        $frase2 = '<a href="script.js">Enlace para el hack</a>';
        echo htmlspecialchars($frase2);
        #echo "<br>$frase2";
?>
