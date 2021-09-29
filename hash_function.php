<?php

function hash_code ($author,$action) {
    return hash('MD5', $author . $action . date('d-m-Y H:i:s'));
}

?>
