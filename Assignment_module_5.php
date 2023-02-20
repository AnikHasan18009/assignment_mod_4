<?php

//1.Write a PHP function to sort an array of strings by their length, in ascending order.
echo "\n----------------------Solution no.1-------------------";
echo PHP_EOL;

function sortByLength($a,$b) :int
{
   $l1=strlen($a);
   $l2=strlen($b);
   return $l1-$l2;
}
$str=["Write","a", "PHP", "function", "to" ,"sort" ,"an" ,"array", "of", "strings", "by" ,"their" ,"length"];
echo "Before sorting\n";
print_r($str);
usort($str,'sortByLength');
echo "\nAfter sorting\n";
print_r($str);
/* 2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.*/
echo "\n----------------------Solution no.2--------------------------";
echo PHP_EOL;

function concat(string $a,string $b):string{
  return $a.$b;
}
$s1="I love ";
$s2="my country";
echo "The 1st string is = {$s1}\nThe 2nd string is = {$s2}\n";
echo "After concatenation\n".concat($s1,$s2);


/*3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.*/
echo "\n\n----------------------Solution no.3--------------------------";
echo PHP_EOL;

function removeFirstLast(array $ar):array{
  array_shift($ar);
  array_pop($ar);
  return $ar;
}

$arr=[1, 2, 3, 4, 5, 6, 7, 9, 10];
echo "Input array\n";
print_r($arr);
$arr=removeFirstLast($arr);
echo "\nAfter removal\n";
print_r($arr);


/*4.Write a PHP function to check if a string contains only letters and whitespace.*/
echo "\n\n----------------------Solution no.4--------------------------";
echo PHP_EOL;

function checkStr($st):bool
{
 $len=strlen($st);
  $count= preg_match_all('/[a-z\s]/i',$st);
   if($count==$len && $len!=0)
    return true;
  else
   return false;
    
}
$inputs=["My name is Anik Hasan","My email is 20018@mbstu.ac.bd"];
foreach($inputs as $input)
{
  if(checkStr($input))
  {
    echo "String \"{$input}\" contains only letters and whitespaces.\n\n";
  }
  else
  {
    echo "String \"{$input}\" doesn't contain only letters and whitespaces.\n\n";
  }
}



/*5.Write a PHP function to find the second largest number in an array of numbers.*/
echo "\n----------------------Solution no.5--------------------------";
echo PHP_EOL;

function secondLargest(array $numbers)
{
  $max=PHP_INT_MIN;
  $smax=PHP_INT_MIN;
  foreach($numbers as $number)
  {
    if($number>$max)
    {
      $smax=$max;
      $max=$number;
    }
    else if($number>$smax && $number<$max)
     {
      $smax=$number;
     }
  }
return $smax;
}

$numbers=[11,101,25,3,33,22,100,200,200,10];
echo "Input array : ";
for($i=0;$i<count($numbers);$i++)echo $numbers[$i]." ";

echo "\nThe second largest number is ".secondLargest($numbers)."\n\n";

?>