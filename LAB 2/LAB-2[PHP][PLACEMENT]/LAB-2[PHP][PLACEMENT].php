<?php 

    //1.area
    $length = 30;
    $width = 15;
    $rectangle = $length*$width; 
    $perimeter = 2*($length+$width);

    echo("The rectangle is : ".$rectangle);
    echo("<br>");
    echo("The perimeter is : ".$perimeter);
    echo("<br>");
    echo "<hr>";


    //2.vat
    $amount = 500;
    $vat = (500 * 15)/100;
    echo("vat is : ".$vat);
    echo("<br>");
    echo "<hr>";


    //3.odd even
    $num = 65;
    if($num%2==0)
    {
        echo("This is even number");
    }
    else
    {
        echo($num." is odd number");
    }
    echo("<br>");
    echo "<hr>";


    //4.largest number
    $num1 = 10;
    $num2 =15;
    $num3 = 7;

    if($num1>$num2)
    {
        if($num1>$num3)
        {
            echo($num1. " is the largest number.");
        }
    }
    elseif($num2>$num3)
    {
        echo($num2." is the largest number.");
    }
    else
    {
        echo($num3. " is the largest number.");
    }
    echo("<br>");
    echo "<hr>";


    //5.odd number between 10-100

    echo("odd numbers between 10 to 100 are: ");
    for($i = 10; $i <= 100; $i++)
    {
        if($i % 2 != 0)
        {
            echo($i. " ");
        }
    }
    echo("<br>");
    echo "<hr>";


    // 6.Write a PHP script to search an element from an array

    $arr = [1,2,3,4,5,6,7,8,9,10];
    foreach($arr as $a)
    {
        if($a === 5)
        {
            echo($a. " is the element.");
        }
    }
    echo "<br>";
    echo "<hr>";


    //7.pattern

    for($i=0;$i<=2;$i++)
    {        
        for($j=0;$j<=$i;$j++){
            echo "*";
        }
        echo "<br>";
    }
    echo "<hr>"; 

    
    for($i=2;$i>=0;$i--)
    {
        $x=1;        
        for($j=0;$j<=$i;$j++){
            echo ($x. " ");
            $x=$x+1;
        }
        echo "<br>";
    }
    echo "<hr>"; 

    $y = 65; // for ASCII value of A
    for($i=0; $i<3; $i++)
    {   
        for($j=0; $j<=$i; $j++)
        {  
            echo( chr($y). " "); //chr() is a function that returns a charecter of a ASCII value
            $y+=1;
        }  
        echo "<br>";
 
    }
    echo "<hr>"; 


    //8.2D array

    $arr1 = 
    [
        [1,2,3,'A'],
        [1,2,'B','C'],
        [1,'D','E','F']
    ];

    echo(" The array to declare: <br>");

    for($i=0;$i<3;$i++)
    {
        for($j=0;$j<4;$j++)
        {
            echo($arr1[$i][$j]." ");
        }
        echo "<br>";

    }
    echo "<hr>";


    //in a table formet
    echo "Table formet: <br>";
    $arr2 = 
    [
        [1,2,3,'A'],
        [1,2,'B','C'],
        [1,'D','E','F']
    ];

    foreach($arr2 as $a)
    {
        echo "<table border='1'>
                <tr>
                    <td>{$a[0]}</td>
                    <td>{$a[1]}</td>
                    <td>{$a[2]}</td>
                    <td>{$a[3]}</td>
                </tr>";
    }

    echo("</table>");
    echo "<hr>";


    echo "Shapes to print: <br>";

    $arr3=
    [
        [1,2,3],
        [1,2,''],
        [1,'','']
    ];
    for($i=0;$i<3;$i++)
    {
        for($j=0;$j<3;$j++)
        {
            echo($arr3[$i][$j]." ");
        }
        echo "<br>";
    }

    echo "<hr>";
    $arr4=
    [
        ['A','',''],
        ['B','C',''],
        ['D','E','F']
    ];
    for($i=0;$i<3;$i++)
    {
        for($j=0;$j<3;$j++)
        {
            echo($arr4[$i][$j]." ");
        }
        echo "<br>";
    }

?>