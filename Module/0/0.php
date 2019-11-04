<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
}


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $url_path ?>/css/1.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo $url_path ?>/js/jquery-3.4.1.js"></script>
        <script src="<?php echo $url_path ?>/js/parallax.js"></script>
        <script src="<?php echo $url_path ?>/js/1.js"></script>
        <script src="<?php echo $url_path ?>/js/dudu.js"></script>
        <script src="<?php echo $url_path ?>/js/plugins.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="./css/menu.css">
      <link href="/css/simple-line-icons.css"rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="./css/bootstrap.min.css">
      <link rel="stylesheet" href="./css/jquery-ui.min.css">
      <script src="./js/menu.js"></script>
      <script src="/js/plugins.js"></script>
      <script src="./js/bootstrap.min.js"></script>
    </head>
    <body >
        <?php include $dir_block.'/0-content.php'; ?>
     
        
</html>