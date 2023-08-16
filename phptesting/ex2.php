<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    strlen()
    str_word_count()
    strrev()
    str_shuffle()
    strpos(str,search)
    substr(str,start,end)
    strtoupper()
    strtolower()
    strip_tags()
    str_replace(find,new,string)
    trim()
    str_split()
    explode()
    inplode()
    
    <?php 
     $name = 'si thu';
     echo "<br>";
     echo strtoupper($name);
     echo "<pre>";
     echo "hello i am testing php";
   
    $person = [
        'name' => 'sithu',
        'job' => 'developer',
        'address' => 'pyay'
    ];

    echo array_key_exists('developer',$person)? "true" : "false";
    echo "<pre>";
    print_r(array_keys($person));
    print_r(array_values($person));

   $arr = ['orange','apple','banna','mango'];
   echo "<br>";
   shuffle($arr);
   echo "<br>";
   echo implode("|",$arr);
   echo join("#",$arr);
   echo current($arr);
   echo end($arr);
   echo "<br>";
   $name =  array_rand($arr);
   print_r($arr[$name]."this is me");
//    array_sum($arr); this is array of number total sum
   $number = range(0,10); //easy for array
   echo "<pre>";
   print_r($number);
   echo in_array("apple",$arr)? "true" : "false"; //search 

   $people = ['mgmg','chanchan','aung','kyaw'];
   array_push($people,"chan","aungkhine");
   echo "<pre>";
   array_unshift($people,"nwe");
   array_pop($people);
   array_shift($people);
   print_r($people);
    $reverse = asort($people); //rsort($people)

    print_r($people);
    //in associated array
      asort(); ksort();  //valuse ascending key ascending
      arsort(); krsort();
    
   ?>

</body>
</html>