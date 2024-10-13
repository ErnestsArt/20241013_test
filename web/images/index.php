<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Piesakeis webināram!</h1>

    <div>
        <a href="blog.php">NextPage</a>
    </div>

    <form action="form" method="post">
        <div>        
            <label for="vards">Ievadi savu vārdu: </label>
            <input type="vards" name="vards" id="vards" required>
        </div>
    
        <div>
            <label for="epasts">Ieavdi savu e-pastu: </label>
            <input type="epasts" name="epasts" id="epasts" required>
        </div>

        <label for="level">Izēlies līmeni: </label>
        <select name="levelselect" id="levelsel">
            <option value="neginner">Beginner</option>
            <option value="intermediate">Intermediate</option> 
            <option value="advanced">Advanced</option>
        </select>
        <br>
        
        <legend>Vai vēlies saņemt informaciju...?</legend>
        <input type="radio" name="radiob" id="yes">
        <label for="yes">Yes</label>

        <input type="radio" name="radiob" id="no">
        <label for="no">No</label>

        <br>
        <input type="submit" value="nosutit">
    </form>

    <script src="app.js"></script>
</body>
</html>