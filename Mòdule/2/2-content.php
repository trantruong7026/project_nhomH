<?php
    $url_host= $_SERVER['HTTP_HOST'];

    $pattern_document_root= addcslashes(realpath($_SERVER['DOCUMENT_ROOT']),
    '\\');

    $pattern_uri= '/' . $pattern_document_root . '(.*)$/';
    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path= $url_host . $matches[1][0];

    $url_path= str_replace('\\', '/', $url_path);
    ?>

    <!-- Main content -->
    <div class="type-2">
    <section class="main-content">
        <div class="container">
            <div class="main-header">
            <h2>We craft ecosystems that grow businesses.</h2>
            <p>We're a full-service digital agency that believes being a Favorite brand is more valuable than just being
                a Famous one. We craft beautifully useful, connected <br> ecosystems that grow businesses and build enduring
                relationships between brands and humans.</p>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="item">
                        <img src="./images/img-1.jpg" alt="" class="img-fluid">
                        <h3>User experience</h3>
                        <span>Update your online business experience to 2017 standards. Encrease your earnings.</span>
                    </div>
                </div>
                <div class="col-md">
                    <div class="item">
                        <img src="./images/img-2.jpg" alt="" class="img-fluid">
                        <h3>Social Media</h3>
                        <span>Update your online business experience to 2017 standards. Encrease your earnings.</span>
                    </div>
                </div>
                <div class="col-md">
                    <div class="item">
                        <img src="./images/img-3.jpg" alt="" class="img-fluid">
                        <h3>Branding</h3>
                        <span>Update your online business experience to 2017 standards. Encrease your earnings.</span>
                    </div>
                </div>


            </div>
        </div>

    </section>

</div>
