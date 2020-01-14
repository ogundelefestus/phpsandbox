

<?php


$path='/dir1/myfile.php';

$file='file1.txt';

/*//Return filename
echo basename($path);


//Return filename without extention
echo basename($path,'.php');


//Return the directory name from path
echo dirname($path);

//Check if file exists
echo file_exists($file);

//Get abs path
echo realpath($file);


//Checks to see if file
echo file_exists('test');


//check if writeable
echo is_writable($file);

//check if readable
echo is_readable($file);


//get file size
echo filesize($file);


//create a directory
mkdir('testing');


//remove directory if empty
rmdir('testing');


//Copy file
echo copy('file1.txt', 'file2.txt');

//rename file 
rename('file2.txt', 'myfile.txt');

//Delete file
unlink('myfile.txt');

//write from file to string

echo file_get_contents($file);

//write string to file

echo file_put_contents($file,'good');


$current = file_get_contents($file);

$current .= 'goodbye world'; 

file_put_contents($file, $current);


//open file for reading
$handle=fopen($file, 'r');
$data=fread($handle, filesize($file));
echo $data;*/

//open file for writing
$handle=fopen('file2.txt', 'w');
$txt="john doe\n";
fwrite($handle, $txt);
$txt="john mer\n";
fwrite($handle, $txt);
fclose($handle);


















?>