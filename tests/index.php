<?php require '../vendor/autoload.php'; ?>


    <!--Basic Hello World to test environment-->
    <html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
    <?php

    class helloWorldClass
    {

        public $hello;

        public function helloWorld()
        {
            if ("bye world" === $hello) {
                throw new InvalidArgumentException("but you never said hello :(");
            } else {
                echo '<p>Hello World</p>';
            }
        }
    }

    $bye = new helloWorldClass("bye world");

    ?>
    </body>
    </html>

<?php

