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
      <div class="type-menu">
 <div class="container-fluid">
      <nav class="navbar navbar-expand-sm navbar-light bg-nav py-0">
         <!-- Brand -->
         <img src="./images/logo-landing2 (1).png" alt="">
         <!-- Toggler/collapsibe Button -->
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
         </button>
 
         <!-- Navbar links -->
         <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
               <li class="nav-item">
                  <a class="nav-link" href="#">HOME</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">ABOUT</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">PRICING</a>
               </li>
               <li class="nav-item">
                <a class="nav-link" href="#">BLOG</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="#">SERVICESS</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="#">SHOP</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="#">LOGIN</a>
             </li>
             <li>
                  <a href=""   class="second-row">SIGN UP</a>
             </li>
             <li>
             <div class="menumenu__container clearfix">
                    <div class="header__right">
                        <div class="htc__shopping__cart">
                            <a class="cart__menu" href="#"><i class="icon-handbag icons"></i></a>
                            <a href="#"><span class="htc__qua">2</span></a>
                        </div>
                    </div>
                </div>
             </li>
            </ul>
         </div>
         
      </nav>
    </div>
   </div>
