<?php require '../vendor/autoload.php'; ?>


    <!--Basic Hello World to test environment-->
    <html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
    <?php

    /*class helloWorldClass
    {

        public $helloVar;

        public function helloWorld($hello)
        {

            $this->helloVar = $helloVar;

            if ("bye world" === $hello) {
                throw new InvalidArgumentException("but you never said hello :(");
            } else {
                echo '<p>Hello World</p>';
            }
        }
    }

    $bye = new helloWorldClass("bye world");
    echo $bye;

    */
    use PHPUnit\Framework\TestCase;

    class StackTest extends TestCase
    {
        public function testPushAndPop()
        {
            $stack = [];
            $this->assertEquals(0, count($stack));

            array_push($stack, 'foo');
            $this->assertEquals('foo', $stack[count($stack)-1]);
            $this->assertEquals(1, count($stack));

            $this->assertEquals('foo', array_pop($stack));
            $this->assertEquals(0, count($stack));
        }
    }
    ?>

    ?>
    </body>
    </html>

<?php

