
<!DOCTYPE html>
<html lang="en">
<head>

     <meta charset="UTF-8">
     <meta http-equiv"X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>

<body>
    <h1>My First Form</h1>
    <form action="welcome.php" method="GET">
<label for="name">Name:</label>
<input type="text">
<label for="enter">Enter:</label>
<input type="button">
<label for="checkbox">Check:</label>
<input type="checkbox">
<label for="search">Search:</label>
<input type="search">
<button type="submit">Submit</button>
    </form>
    <div>
        <h2><?= $_GET['name']?></h2> 
        <h2><?= $_GET['enter']?></h2>
        <h2><?= $_GET['check']?></h2>
        <h2><?= $_GET['search']?></h2>
    </div>
</body>
</html>