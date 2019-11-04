<?php
    $url_host= $_SERVER['HTTP_HOST'];

    $pattern_document_root= addcslashes(realpath($_SERVER['DOCUMENT_ROOT']),
    '\\');

    $pattern_uri= '/' . $pattern_document_root . '(.*)$/';
    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path= $url_host . $matches[1][0];

    $url_path= str_replace('\\', '/', $url_path);
    ?>
    <div class="type-1">
      
            <div class="row">
               <div class="container-fluid">
                <div class="col-md">
                    <div class="push"></div>
                    <h3>Membership</h3>
                    <h3>Business Model.</h3>
                    <p>Get access to 200+ Premium WP Themes .</p>
                </div>
                </div>
            </div>

    </div>