<?php

class CheckSession
{

    function __construct()
    {}

    public function check()
    {
        if (isset($_COOKIE["key"]) == true) {
            $key = $_COOKIE["key"];
        }

        if ($key != "24me22") {
            echo "<script type=\"text/javascript\">window.location=\"login.php\"</script>";
        }
    }
}
?>