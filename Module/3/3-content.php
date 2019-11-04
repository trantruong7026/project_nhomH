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

    <!-- Main content -->
    <div class="type-3">
        <section class="main-content">
            <div class="row">
                <div class="col-md-4">
                    <span>History</span>
                </div>
                <div class="col-md-4">
                    <img src="./images/1.jpg" alt="">
                </div>
                <div class="col-md-4">
                    <span>Who we are</span>
                </div>
            </div>
        </section>

    </div>
</body>

</html>