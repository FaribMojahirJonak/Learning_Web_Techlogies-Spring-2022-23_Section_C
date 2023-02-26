<?php
    
    if(isset($_REQUEST['submit']))
    {
        
        $username = $_REQUEST['username'];
        $email = $_REQUEST['email'];
        $dob = $_REQUEST['birthday'];
        $bg = $_REQUEST['bg'];

        if($username == "")
        {
            echo "No username found!";
        }
        else
        {
            echo("Your username is: ".$username);
        }
        echo "<br>";

        if($email == "")
        {
            echo "No email found!";
        }
        else
        {
            echo("Your email is: ".$email);
        }
        echo "<br>";

        if($dob == "")
        {
            echo "No date of birth found!";
        }
        else
        {
            echo("Your date of birth is: ".$dob);
        }
        echo "<br>";

        if(isset($_REQUEST['gender']))
        {
            $gender = $_REQUEST['gender'];
            echo "Your gender is: ".$gender;
        }
        else
        {
            echo("No gender found!");
        }
        echo "<br>";


        echo("Your degree is: ");
        for($i=1;$i<4;$i++)
        {
            if(isset($_REQUEST[$i]))
            {
                $degree[$i] = $_REQUEST[$i];
                echo ($degree[$i]." ");
            }
        }
        echo "<br>";

        if($bg == "")
        {
            echo "No blood group found!";
        }
        else
        {
            echo("Your blood group is: ".$bg);
        }
        echo "<br>";
    
    }

?>