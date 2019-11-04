<?php
 

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/13.less', 'css/13.css');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>13</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="css/14.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="./css/all.min.css">
    <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/13.less', 'css/13.css');
        ?>
    <link rel="stylesheet" href="./css/13.css">
</head>

<body>
    <?php  include './13-content.php'; ?>
</body>

</html>