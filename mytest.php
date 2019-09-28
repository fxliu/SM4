<?php
require_once 'sm4.php';

// ------------------------------------------
echo "<br>字符串加密：";
//16字节的HEX编码字符串 32个hex字符
$original_plain_text_data = 'a test by trimps';

$sm4 = new SM4();
$key = 'ce68d4fc82980612f8dc094fee2ba106';
$encrypted_text_data = $sm4->setKey($key)->encryptData($original_plain_text_data);
$encrypted_text_2_plain_text = $sm4->setKey($key)->decryptData($encrypted_text_data);

echo "<br>key：".$key;
echo "<br>明文：".$original_plain_text_data;
echo "<br>密文：".$encrypted_text_data;
echo "<br>解密：".$encrypted_text_2_plain_text;
echo "<br>";

// ------------------------------------------
echo "<br>16进制串加密：".$key;
$original_plain_text_data = '681EDF34D206965E86B3E94F536E4246';

// 每次加密要重新new对象
$sm4 = new SM4();
$key = '681EDF34D206965E86B3E94F536E4246';
$encrypted_text_data = $sm4->setKey($key)->encrypt($original_plain_text_data);
$encrypted_text_2_plain_text = $sm4->setKey($key)->decrypt($encrypted_text_data);

echo "<br>key：".$key;
echo "<br>明文：".$original_plain_text_data;
echo "<br>密文：".$encrypted_text_data;
echo "<br>解密：".$encrypted_text_2_plain_text;

echo "备注：字符串加密(encryptData)在数据加密(encrypt)的基础上加了已成数据混淆";
