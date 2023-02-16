<html>
    <head>
        <title>Current Form</title>
    </head>
    <body>
        <form method="POST" action="current.php" enctype="">
            <fieldset>
                <legend>Name</legend>
                <input type="text" name="username" value="" /> <hr>
            </fieldset>

            <fieldset>
                <legend>Email</legend>
                <input type="email" name="email" value="" /> <hr>
            </fieldset>

            <fieldset>
                <legend>Date of Birth</legend>
                <input type="date" name="birthday" value="" /> <hr>
            </fieldset>

            <fieldset>
                <legend>Gender</legend>
                Male<input type="radio" name="gender" value="Male" />
                Female<input type="radio" name="gender" value="Female" />
                Others<input type="radio" name="gender" value="Others" /> <hr>
            </fieldset>

            <fieldset>
                <legend>Degree</legend>
                SSC<input type="checkbox" name="1" value="SSC" />
                HSC<input type="checkbox" name="2" value="HSC" />
                BSC<input type="checkbox" name="3" value="BSC" /> <hr>
            </fieldset>

            <fieldset>
                <legend>Blood Group</legend>
                <select name="bg">
                    <option value="O positive">O+</option>
                    <option value="O negative">O-</option>
                    <option value="AB positive">AB+</option>
                    <option value="AB negative">AB-</option>
                    <option value="A positive">A+</option>
                    <option value="A negative">A-</option>
                    <option value="B positive">B+</option>
                    <option value="B negative">B-</option>
                </select>
                <hr>
            </fieldset>

            <input type="submit" name="submit" value="Submit" />
        </form>
    </body>
</html>


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