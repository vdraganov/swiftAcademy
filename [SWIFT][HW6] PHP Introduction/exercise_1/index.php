<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exrcise 1</title>
    </head>
    <body>
        <h1>Test Screen</h1> <br/>
        <?php
            // Declaring Variables
            $name = 'John Doe';
            $address = 'Unknown';
            $phoneNumber = 'not provided';
            /* Using echo to print the variables
             * param {String} $name
             * param {String} $address
             * param {String} $phoneNumber
             */
            echo 'This is ' . $name . ':'
                . 'Name: '. $name . '<br>'
                . 'Address: ' . $address . '<br>'
                . 'Phone Number: ' . $phoneNumber;
         ?>
    </body>
</html>
