<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> </title>
</head>

<body>

    <!-- Regrestering -->

    <form action="submit.php" method="get">

        Name: <input type="Name" name="name" placeholder="Type name"><br>

        Email: <input type="Email" name="email" placeholder="Type email"><br>

        Age: <input type="age" name="age" placeholder="Age"><br>

        Male: <input type="radio" name="gender" value="Male"><br>

        Female: <input type="radio" name="gender" value="Female"><br>

        telnr: <input type="tel" name="telephone">
        <br>

        Lösenord: <input type="password" name="password">

        <input type="submit" value="Skicka">

    </form>

    <!-- login -->

    <form action="submit.php" method="POST">

        Email: <input type="email" name="email">
        password: <input type="password" name="password">


    </form>

</body>

</html>