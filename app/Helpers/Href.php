<?php

// echoes internal links
function href($string = "/")
{
    echo "http://$_SERVER[HTTP_HOST]" . $string;
}