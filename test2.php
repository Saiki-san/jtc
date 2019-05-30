<?php
$buttonPost = $_POST['button_post'];
$enteredValue = htmlspecialchars(trim($_POST['test_input_p']));

$hidden = $_POST['storeRandVal'];
$randomValue = rand(1,100);

if(isset($buttonPost))
{

    if($enteredValue == $hidden)
    {
        echo "TRUE";
    }
    elseif($randomValue != $hidden)
    {
        echo "FALSE";
    }
    else
    {
        echo "Er__!";
    }
}
?>

<html>
    <head>
        <meta></meta>
    </head>
    <body>
        <form action="" method="post">

<input type="hidden" name="storeRandVal" value="<?php echo $randomValue; ?>">

            <fieldset>
                <label for="test_input" id="label_input">Enter value: <?php echo $randomValue; ?></label>
                <input type="text" id="test_input" name="test_input_p">
                <input type="submit" id="ibutton_send" name="button_post" value="Send"></input>
            </fieldset>
        </form>
    </body>
</html>
