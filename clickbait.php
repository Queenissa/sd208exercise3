<?php 

if (isset($_POST["submit"])) {
    $clickBait_input = strtolower($_POST["input"]);

    $clickbait_words = array(
        "scientists",
        "doctors",
        "hate",
        "stupid",
        "weird",
        "simple",
        "tricked",
        "shocked me",
        "you'll never believe",
        "hack",
        "epic",
        "unbelievable"
    );

    $replacement_words = array(
        "so-called scientists",
        "so-called doctors",
        "aren't threatened by",
        "average",
        "completely normal",
        "ineffective",
        "method",
        "is no different than the others",
        "you won't really be surprised by",
        "slightly improved",
        "boring",
        "normal"
    );


    $honest_headline = str_replace($clickbait_words, $replacement_words, $clickBait_input);

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clickbait</title>
</head>
<style>
body{
    background-color: #ffcccc;
    font-family: verdana;
}
form{
    border: 1px solid magenta;
    padding: 10px;
    width: 500px;
    height: 600px;
    background-color: lavenderblush;
    margin-top: .5in;
}

.input{
    border-color: tomato;
    border-radius: 5px;
    padding: 2px;
    height: 80px;
}

#button{
    padding: 5px;
    background-color: cyan;
    border-radius: 7px;
    color: #4d1200;
}


h4{
    color: #ff0066;
}

h5{
    color: #cc3300;
}
</style>

<body>
   <center>
   <div>
   <br>
  <center><h1>Honest Clickbait Headlines</h1></center>
    <form action="" method="post"><br><br>
        <textarea name="input" id="" cols="30" rows="10" placeholder="Paste a Clickbait Headline Here"></textarea><br>
        <input type="submit" value="Change the Clickbait Headline" name="submit" id="button">
        <br><br><br>

    <div class="output">
        <?php if (isset($_POST["submit"])){
            echo "<br> <h4> Original Headline: </h4>"  . "<h5>" . ucwords($clickBait_input) . "</h5> <hr>";
            echo "<br> <h4> Honest Headline:  </h4>" . "<h5>"  . ucwords($honest_headline) . "</h5>";
        }
        
        ?>
    </div>
      

    
    </form>

    
    
    </div>
   </center>
    
</body>
</html>