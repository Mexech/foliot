<?php
function encoder($data) {
$pub = <<<SOMEDATA777
-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxgbjTLkuqhJJm6V9Ui9F
sgmG4OiMsAdnzKrW8bkQjRAYK5Wf0bHmdd015iv8QidFmMqIe9Sy9IA2PHw+IVHE
gIMNi/VX/sJFKlZWi0G+MoweiEnecIn486pi3ik24/IlFvH4GK7KwqPKvTKs5hm0
SnjNakBau96UYfxo19ppIQz2+qQtTuEAVeWOO5i9BFEJZrXUgJ9UsTQJOmj9msDi
ExxNwFOiy5nJDCJprrCtA6nHpM0QQ1g7rNdkH6tSBikC90Y8wh56z7OFI2CkttoH
8yjLbO9L+dHM800xyClaZ+qGdsm02UOReyHAWWPDlWbMeaX+R4kqdujwjcTtOeUa
/wIDAQAB
-----END PUBLIC KEY-----
SOMEDATA777;
$pk  = openssl_get_publickey($pub);
openssl_public_encrypt($data, $encrypted, $pk);
return chunk_split(base64_encode($encrypted));
}
?>
