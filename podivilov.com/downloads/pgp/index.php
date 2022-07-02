<?php
$attachment_location = $_SERVER["DOCUMENT_ROOT"] . "/downloads/pgp/E024E33211C904735D6D80714435E28EDEADBEEF.asc";
if (file_exists($attachment_location)) {
    header($_SERVER["SERVER_PROTOCOL"] . " 200 OK");
    header("Cache-Control: public");
    header("Content-Type: application/octet-stream");
    header("Content-Transfer-Encoding: Binary");
    header("Content-Length:".filesize($attachment_location));
    header("Content-Disposition: attachment; filename=E024E33211C904735D6D80714435E28EDEADBEEF.asc");
    readfile($attachment_location);
    die();
} else {
    http_response_code(404);
    die();
}
