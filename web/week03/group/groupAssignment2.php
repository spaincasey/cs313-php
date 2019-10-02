<!DOCTYPE html>
<html>
​
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Week 3 Team Activity</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>
​
<body>
    <?php
    $nameErr = $emailErr = $majorErr = $commentsErr = "";
    $name = $email = $major = $comments = "";
    $loactions = [];
​
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
        }
​
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
        }
​
        if (empty($_POST["majors"])) {
            $majorErr = "Major is required";
        } else {
            $major = test_input($_POST["majors"]);
        }
​
        if (empty($_POST["comments"])) {
            $commentsErr = "Comments is required";
        } else {
            $comments = test_input($_POST["comments"]);
        }
    }
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
​
​
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
        <p>Name</p>
        <input type="text" name="name" id="name">
        <p>Email</p>
        <input type="text" name="email" id="email">
        <p>Majors</p>
        <?php
        $majors = array(
            1 => 'Computer Science',
            2 => 'Web Design and Development',
            3 => 'Computer Information Technology',
            4 => 'Computer Engineering'
        );
​
        $locations = array(
            "na" => "North America",
            "sa" => "South America",
            "eu" => "Europe",
            "as" => "Asia",
            "au" => "Australia",
            "af" => "Africa",
            "an" => "Antarctica"
        );
​
        foreach ($majors as $currentmajor) {
            echo '<input type="radio" value="' . $currentmajor . '" name="majors">' . $currentmajor;
        }
​
        ?>
        <p>Locations</p>
        <input type="checkbox" name="locations[]" value="na">North America<br />
        <input type="checkbox" name="locations[]" value="sa">South America<br />
        <input type="checkbox" name="locations[]" value="eu">Europe<br />
        <input type="checkbox" name="locations[]" value="as">Asia<br />
        <input type="checkbox" name="locations[]" value="au">Australia<br />
        <input type="checkbox" name="locations[]" value="af">Africa<br />
        <input type="checkbox" name="locations[]" value="an">Antarctica<br />
​
        <p>Comments</p>
        <textarea name="comments" id="comments"></textarea>
        <br />
        <input type="submit">
​
​
        <?php
        echo "<h2>Your Input</h2>";
        echo "Your Name: " . $name . "<br />";
        echo "Your Email: " . $email . "<br />";
        echo "Your Major: " . $major . "<br />";
        echo "<br>";
        echo $comments;
        echo "<br />Locations:<br />";
        foreach ($_POST['locations'] as $selected) {
            echo $locations[$selected] . "</br>";
        }
        ?>
​
    </form>
    <script src="" async defer></script>
</body>
​
</html>



