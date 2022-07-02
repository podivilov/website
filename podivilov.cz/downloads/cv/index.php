<?php
$attachment_location = $_SERVER["DOCUMENT_ROOT"] . "/downloads/cv/CV.pdf";
if (file_exists($attachment_location)) {
    header($_SERVER["SERVER_PROTOCOL"] . " 200 OK");
    header("Cache-Control: public");
    header("Content-Type: application/octet-stream");
    header("Content-Transfer-Encoding: Binary");
    header("Content-Length:".filesize($attachment_location));
    header("Content-Disposition: attachment; filename=CV.pdf");
    readfile($attachment_location);
    die();
} else {
    http_response_code(404);
    die();
}
