<?php

require_once dirname(__FILE__) . '/src/commander.php';
require_once dirname(__FILE__) . '/src/command/care.php';
require_once dirname(__FILE__) . '/src/command/open.php';
require_once dirname(__FILE__) . '/src/command/order.php';

$commander = new varvar\commander();

try {

    // check sub command
    $sub_command = $argv[1] ?? "";
    $config = [];

    //echo dirname(__FILE__);
    // varvar.json
    if (!is_file(dirname(__FILE__) . "/varvar.json")) {
        //throw new Exception( "# vv: is not a varvar.json . See 'vv --help'.");
    } else {

        // read varvar.json
        $json_text = file_get_contents(dirname(__FILE__) . "/varvar.json");
        $config = json_decode($json_text, true);
    }


    if (empty($sub_command)) {
        throw new Exception("# vv: is not a varvar command. See 'vv --help'.");
    }

    switch ($sub_command) {

        case "open":

            $open = new varvar\command\open();
            $open->create_json();
            break;
        case "order":

            $order = new varvar\command\order();

            if (empty($argv[2])) {
                throw new Exception("# vv: is not a varvar option. See 'vv --help'.");
            }

            if (empty($argv[3])) {
                throw new Exception("# vv: is not a varvar word. See 'vv --help'.");
            }

            $order->setOption($argv)->generate();
            $result = $order->getResult();

            // output
            echo $result;

            break;
        case "care":

            $care = new varvar\command\care();
            break;
        default:

            break;
    }
    exit();
} catch (\Exception $e) {

    echo $e->getMessage();
    exit();
}




