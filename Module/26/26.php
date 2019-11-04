<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('less/26.less', 'css/26.css');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>26</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <script src="./js/26.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/26.less', 'css/26.css');
        

        ?>
        <link href="../26/css/26.css" rel="stylesheet" type="text/css" />

    </head>
    <body>   
    <script>
		// kéo xuống khoảng cách 200px thì xuất hiện nút Top-up
		var offset = 00;
		// thời gian di trượt 0.75s ( 1000 = 1s )
		var duration = 750;
		$(function () {
			$(window).scroll(function () {
				if ($(this).scrollTop() > offset)
					$('#top-up').fadeIn(duration); else
					$('#top-up').fadeOut(duration);
			});
			$('#top-up').click(function () {
				$('body,html').animate({ scrollTop: 0 }, duration);
			});
		});

	</script>
        <?php include './26-content.php'; ?>
        
    </body>
</html>