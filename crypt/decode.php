<?php
function decoder($data){
$key = <<<SOMEDATA777
-----BEGIN RSA PRIVATE KEY-----
MIIEpAIBAAKCAQEAxgbjTLkuqhJJm6V9Ui9FsgmG4OiMsAdnzKrW8bkQjRAYK5Wf
0bHmdd015iv8QidFmMqIe9Sy9IA2PHw+IVHEgIMNi/VX/sJFKlZWi0G+MoweiEne
cIn486pi3ik24/IlFvH4GK7KwqPKvTKs5hm0SnjNakBau96UYfxo19ppIQz2+qQt
TuEAVeWOO5i9BFEJZrXUgJ9UsTQJOmj9msDiExxNwFOiy5nJDCJprrCtA6nHpM0Q
Q1g7rNdkH6tSBikC90Y8wh56z7OFI2CkttoH8yjLbO9L+dHM800xyClaZ+qGdsm0
2UOReyHAWWPDlWbMeaX+R4kqdujwjcTtOeUa/wIDAQABAoIBAQCLB7L13t3AUe6T
9HA0DzRjdwTXSu3beJeLvjYCp+fS4gXWM8ptMvWWsqRw4VjOKTxXtXp1VjP+LTXm
6WPFiN7pSxlrtej91+8vdkZ0pseePXoCPbqKUJQUnv+i8lSzXQJlRaTlz3JTjSN+
CeIR+uH1lzLA8kXBuNd8o/YH9jPxGygzVdljOwKkI8QLUQvHfM9oWuPvjd316MJr
RxBjlacOixd122nT+wY0ZWhbuKIoJL+hQligHi5dwoB4CLZ9PXdZiNnorTuHq6CS
2VHLHlRuPUxkMAiHhsW6BBXGRA9gS8bGWMYZvuH/29H8ADD64CV2YRwqsCBr18OY
V+8CfVJhAoGBAPEzgKgGfiXMrw8aocM5PYlKbimNGOH++fTIFvAtLLar76FxdDMm
epCLdGZYu5Q0M3JqDaQV4kPA0hlxWFuLH4+z6abq9LqOmH9hxP5p+15QiHsxYy4w
8y0AXf0M5cTCSbMlBg2UN6ja1paIkbXQEmxxEI52pU9QjYCQR5jKdgK1AoGBANIt
QX6C3sgdD+fBQwxwpou4m+bNxUQBnii4gTZ5UW8ldzGzHam77bxM5PTizd9/0US0
foQtVXwHQYvJAFaFyU7QnQoA37UOFFKFwOxbVbrQINJfOEcMSLrfikfKf56dIapK
n3bUJB+lzYBBX+E+Xl2jYCqPMQTx7FfjKhl32DNjAoGBAK5efzn5R6Tn7f5LUHoj
nVrtFeqv+DcY73aIWBzVa6e7cIcTz99Sh/SK/GEo8KJZgn/KL4ZZ07MLaFfAWxIC
55QpilaDMNzVTWV5NsJ9t50dNy1oLL0t4f68bzYK5uhxVHpP36pdZkeJvOwiWsRH
YapHqqJzH1rRbxpsM3Y/l0SpAoGAErw6BF8CIPCGRHBz254HGplgPFjHZuKGCLc5
vXNfEPtT/rgqwsCf1pM8LaAyHeQ08VztkjbAUggLjbxjLVNLuJzcAtJFHsycfyax
JeCWacq3wkj+qUatDQt0NiYU7jyvjZCNWnhap/+NrAsn0tpOayZvIhwVkI1INiVn
0VFfkmUCgYACl0GULk9MGgOK4xB7lt6pPMHh6utxrOfBI5ZJu+TTb7tHIt4s61hi
fveN+6fVM7OpGTedtowK15GNsiIJ+BQQZNKLEsbTBNw1hxhS88yTR4AumtbYWpR0
teIugO/cWNozEytpZeZtv8Z6VzoLCbcd75mlTU++XLFZEV22JBC5cw==
-----END RSA PRIVATE KEY-----
SOMEDATA777;
$pk  = openssl_get_privatekey($key);
openssl_private_decrypt(base64_decode($data), $out, $pk);
return $out;
}
/*
$data = "";
echo (decript($data));
*/
?>
