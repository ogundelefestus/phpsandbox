<?php 

   #substr()
   #Returns a position of a string
   #$output = substr('ogundelefestus', 0);
   #echo $output;

   #strlen()
   #Returns the lenght of string
   #$output = strlen('hello world');
   #echo $output;
   
   #strpos()
   #Returns the lenght of string
   #$output = strpos('hello world' ,'w');
   #echo $output;
   
   #strrpos()
   #Find the position of last occurence of a sub string
   //$output = strrpos('hello world', 'w');
   //echo $output;

   #trim()
   #Strips whitespace
   //$text = 'Hello World      ';
   //var_dump($text);
   //$trimmed=trim($text);
   //var_dump($trimmed);

#strtoupper
#makes everything uppercase
//$output = strtoupper('hello world');
//echo $output;

#strtolower
#makes everything lowercase
//$output = strtolower('HELLO WORLD');
//echo $output;

#ucwords()
#Capitalize every word
//$output = ucwords('hello world');
//echo $output;


#str_replace()
#Replace all occurences of a search string with a replacement

//$text = 'hello world';
 //$output= str_replace("world", "everyone", $text);
//echo $output;

#is_string()
#Check if string
$val = 'Hello';
$output=is_string($val);

echo $output;


?>