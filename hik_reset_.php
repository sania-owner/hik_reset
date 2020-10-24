<?php


$uploaddir = 'hik_reset/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);



$uploadOk = 1;
$imageFileType = strtolower(pathinfo($uploadfile,PATHINFO_EXTENSION));
$file = basename($_FILES['userfile']['name']);


// Проверить размер файла
if ($_FILES["userfile"]["size"] > 10000000) {
   echo "Sorry, your file is too large. \n";
    $uploadOk = 0;
}


// Разрешить определенные форматы файлов
if($imageFileType != "" && $imageFileType != "") {
    
    $uploadOk = 0;
}


// Проверьте, имеет ли $uploadOk значение 0 по ошибке
if ($uploadOk == 0) {
    //echo "Error.";
	
	
// если все в порядке, попробуйте загрузить файл
} else {
    if (move_uploaded_file($_FILES["userfile"]["tmp_name"], $uploadfile)) {
        echo 'Done';
    } else {
        echo "Error. Please try again\n";
    }

}





rename ($uploaddir . $file, "hik_reset/configurationFile");


$output1 = 'decryptedoutput';
exec("cd /var/www/html/hik_reset; openssl enc -d -in configurationFile -out ".$output1." -aes-128-ecb -K 279977f62f6cfd2d91cd75b889ce0c9a -nosalt -md md5");
exec("cd /var/www/html/hik_reset; javac XORDecode.java;");
exec("cd /var/www/html/hik_reset; java XORDecode;");


$complete = md5(time()).'plaintextOutput' ; //новый файл что создается
rename("hik_reset/plaintextOutput" , $uploaddir. $complete);

unlink('hik_reset/configurationFile');
unlink($uploaddir.'decryptedoutput');
unlink($uploaddir.'XORDecode.class');

$link= $uploaddir.$complete; //кнопка скачать
	echo "<a href=$link><h2>Download file</h2></a>"; //кнопка скачать


?>
