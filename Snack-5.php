<?php

$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sagittis suscipit ante, quis tempor mi cursus aliquet. Fusce vel consectetur nisi. Suspendisse quis odio metus. Ut sit amet fermentum tellus, in viverra velit. Suspendisse in faucibus nisl, at lobortis ipsum. Aliquam eget dolor sed augue tempus interdum. Ut ipsum sapien.";

$exploded_text = explode('.', $text);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack-5</title>
</head>
<body>
    
    <div>
        <?php

            for ($i=0; $i < count($exploded_text); $i++) {
                ?>
                
                <p><?php echo $exploded_text[$i] ?></p>

                <?php
            }

        ?>
    </div>


</body>
</html>