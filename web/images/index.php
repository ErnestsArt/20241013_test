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

    <h2>Jau reģistrējušies:</h2>
    
    <?php //paņemts no koda kuru darijām klasē
        $ary = [1,2,3];
        $person = [
            "name" => "Janis",
            "email" => "somemail@renars.lv",
            "level" => "Beginner"
        ];

        $names =[
            ["name" => "Janis", "email" => "somemail@renars.lv", "level" => "Beginner"],
            ["name" => "Antra", "email" => "somemail@antra.lv", "level" => "Intermediate"],
            ["name" => "John", "email" => "somemail@john.lv", "level" => "Advanced", "some_info" => [1,2,3]],
        ];

        foreach($names as $name){
            echo "Vārds: "
                . $name["name"]
                . ", E-pasts: "
                . $name["email"]
                . ", Līmenis: "
                . $name["level"]
                . "<br>";
        }
    ?>
    <script src="app.js"></script>
</body>
</html>