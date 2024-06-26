<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>

    <form action= "formhandler.php" method="post">

            <label for="firstname">Firstname</label><br>
            <input type="text" id="firstname" name="firstname" placeholder="Firstname">
            <br><br>
            <label for="lastname">Lastname</label><br>
            <input type="text" id="lastname" name="lastname" placeholder="Lastname">
            <br><br>
            <label for="favoritepet">Favorite Pet? </label><br>
            <select name="favoritepet" id="favoritepet">
                <option value="none">none</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
            </select><br><br>
            <button type="submit" vlaue="submit">Submit</button>
        </form>
</main>
</body>
</html>