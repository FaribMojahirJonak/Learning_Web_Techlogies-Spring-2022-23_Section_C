<html>
    <head>
        <title>Registration</title>
    </head>
    <body>

        <a href="">Home</a>
        <a href="">Login</a>
        <a href="">Registration</a>
        <fieldset>
            <legend>Registration</legend>
            <form method="POST" action="logincheck.php" enctype="">
            
            
            Name: <input type="text" name="name" value="" /> <hr>
           

            
            Email: <input type="email" name="email" value="" /> <hr>



            
            Username: <input type="text" name="username" value="" /> <hr>
  

    
            
            Password: <input type="password" name="password" value="" /> <hr>
 

  

            Confirm Password: <input type="password" name="confirm_password" value="" /> <hr>



            
            Date of Birth: <input type="date" name="birthday" value="" /> <hr>
   

 
            <legend>Gender</legend>
            Male<input type="radio" name="gender" value="Male" />
            Female<input type="radio" name="gender" value="Female" />
            Others<input type="radio" name="gender" value="Others" /> <hr>
    


            <legend>Degree</legend>
            SSC<input type="checkbox" name="1" value="SSC" />
            HSC<input type="checkbox" name="2" value="HSC" />
            BSC<input type="checkbox" name="3" value="BSC" /> <hr>

            <input type="submit" name="submit" value="Submit" />
            </form>
        </fieldset>
        
    </body>
</html>