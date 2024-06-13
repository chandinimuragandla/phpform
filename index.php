<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            text-align: center;
            margin-top: 200px;
            
        }
        main{
            background-color: aliceblue;
        }
    </style>
</head>
<body>
    <main>
        <form action="form/formhandler.php" method="post">
        <label for="firstname">FirstName:</label>
        
        <input  id="firstname" type="text" name="Firstname" placeholder="FirstName.... "><br> <br>
        
        <label for="lastname">LastName:</label>
        <input  id="lastname" type="text" name="Lastname" placeholder="FirstName.... "><br> <br>
         
        <label for="favouritepet">Favouritepet</label>
        <select id="favouritepet" name="favouritepet">
            <option value="none">None</option>
            <option value="none">Dog</option>
            <option value="none">Cat</option>
            <option value="none">Bird</option>
           
        </select><br> <br>
        <button type="Submit">Submit</button>
        </form>
    </main>
</body>
</html>