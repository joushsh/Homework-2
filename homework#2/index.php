<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 1</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .profile-photo {
            max-height: 200px;
            max-width: 200px;
            border-radius: 50%;
            overflow: hidden;
            align-self: center;
        }

        h1 {
            color: white;
            text-align: center;
            margin-top: 10px !important;
            font-weight: bold !important;
            font-size: 24px !important;
        }

        p {
            color: white;
            text-align: center;
            font-size: 16px !important;
        }

        .overlay {
            background-color: black;
            opacity: 0.4;
            position: fixed;
            height: 100vh;
            width: 100vw;
            z-index: -1
        }

        .alert {
            background: white;
            color: seagreen;
            font-size: 24px;
            font-weight: bold; 
        }
    </style>
</head>
<body style="background: url('wallpaper.jpg')">
    <?php
        $name = "Joshua Castillo.";
        $desciprtion = "Junior Web Developer.";
        $hobbies = "Reading Books & Playing Games";
    ?>
    <div class="overlay"></div>
    <div class="alert" style="position: fixed; top: 0px; width: 100%; height: 50px;">
        <marquee behavior="scroll" direction="left">
                Attention: I'm looking for a Web Development Job!
        </marquee>
    </div>
    <div class="h-screen w-screen flex items-center justify-center">
        <div>
            <?php
                echo "<center>" . "<img style='max-height: 200px; max-width: 200px; align-self:center; overflow: hidden; border-radius:50%;' src=profile.jpg>.". "</center>";
                echo "<h1 style='text-align:center; color:white; margin-top: 10px;'>" . $name . "</h1>";
                echo "<p style='align-self:center; margin-top: 10px;'>" . "I'm a " . $desciprtion . "</p>";
                echo "<center>" . "<h2 style='align-self:center; color: white; margin-top: 30px; font-size: 50px; font-weight: bold;'>" . "Hobbies" . "</h2>" . "<p style='color:white;text-shadow: 2px 2px 11px;'>" .  $hobbies . "</p>" . "</center>";
            ?>
        </div>
    </div>
</body>
</html>

<!--
    <center>
                <img class="profile-photo" src="profile.jpg" alt="">
            </center>
            <h1>Joshua Castillo</h1>
            <p>I'm a Junior Web Developer</p>
    -->