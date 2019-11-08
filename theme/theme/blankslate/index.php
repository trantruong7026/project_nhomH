<?php get_header(); ?>
    <section class=" banner">
        <div class="container banner-title">
            <h2>Membership <br> Business Model.</h2>
        <p>Get access to 200+ Premium WP Themes .</p>
        <a href="#">START NOW</a>
        </div>
    </section>
    <section class="businesses" id="about">
        <div class="container">
             <h3>We craft ecosystems that grow businesses.</h3>
         <p>We're a full-service digital agency that believes being a Favorite brand is more valuable than just being a Famous one. We craft beautifully useful, connected ecosystems that grow businesses and build enduring relationships between brands and humans.</p>
         <div class="row">
              <?php 
              $danhsachpost=new WP_Query(array(
                'post_type'=>'post',
                'post_status'=>'publish'

              ));
              ?>        
            <?php  while($danhsachpost->have_posts()) : $danhsachpost->the_post(); ?>
             <div class="col-md-4 col-lg-4">
                 <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                <div class="content">
                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
                </div>
             </div>
            <?php endwhile; wp_reset_query(); ?>
         </div>
        </div>
     </section> 
     <section class="history">
           <div class="row" id="row">
             <div class="col-md-4 col-lg-4">
                <div class="content-history">
                    <h3>History</h3>
                    <p>Add as many language packs as you want, to showcase your website across the entire globe.</p>
                </div>
             </div>
             <div class="col-md-4 col-lg-4">
                 <img src="<?php echo get_template_directory_uri(); ?>/images/thumbnail-4.jpg">
             </div>
             <div class="col-md-4 col-lg-4">
                <div class="content-history">
                    <h3>Who we are</h3>
                    <p>Add as many language packs as you want, to showcase your website across the entire globe.</p>
                </div>
             </div>
         </div>

         <div class="row" id="row1">
             <div class="col-md-8 col-lg-8">
              <div class="row">
                  <div class="col-md-6 col-lg-6">
                       <img src="<?php echo get_template_directory_uri(); ?>/images/thumbnail-5.jpg">
                  </div>
                  <div class="col-md-6 col-lg-6">
                        <div class="content-history">
                    <h3>What we do</h3>
                    <p>Add as many language packs as you want, to showcase your website across the entire globe.</p>
                </div>
                  </div>
              </div>
               <div class="row" id="row2">
                  <div class="col-md-6 col-lg-6">
                    <div class="content-history">
                    <h3>Awards</h3>
                    <p>Add as many language packs as you want, to showcase your website across the entire globe.</p>
                     </div>
                      
                  </div>
                  <div class="col-md-6 col-lg-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/illustration2.png">
                  </div>
              </div>
             </div>
             <div class="col-md-4 col-lg-4" id="zn-bgSource-image">
                 <div class="content-history" >
                    <h3>Awards</h3>
                    <p>Add as many language packs as you want, to showcase your website across the entire globe.</p>
                     </div>
             </div>
         </div>
       </section>
       <section class="video">
           <div class="row">
               <div class="col-md-7 col-lg-7">
                  <div class="">
                     <img src="<?php echo get_template_directory_uri(); ?>/images/device-b.jpg" alt="">
                  </div>
                  <div class="kl-iconbox eluid105c7ef1 playbutton  kl-iconbox--type-img   kl-iconbox--align-center text-center kl-iconbox--theme-light element-scheme--light" id="eluid105c7ef1">
                    <div class="kl-iconbox__inner clearfix">
                    <div class="kl-iconbox__icon-wrapper ">
                    <img data-toggle="modal" data-target="#exampleModal" class="kl-iconbox__icon" src="<?php echo get_template_directory_uri(); ?>/images/play-button.png" width="122" height="122" alt="" title="play-button.png"></a>

                     </div>
                    <div class="kl-iconbox__content-wrapper">
                    </div>
                    </div>
                    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <button style="text-align: right;" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      <div class="modal-body" style="padding: 0;">
        <iframe width="100%" height="506" src="https://www.youtube.com/embed/e452W2Kj-yg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>


               </div>
               <div class="col-md-5 col-lg-5">
                  <div class="text-video">
                       <h3>Look like an expert right from the start.</h3>
                   <p>Get all our proffesional themes.</p>
                  </div>
                  <div class="icon-video">
                    <div class="icon-text">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon1.png" alt="">
                        <div class="title">
                            <h4>Stunning Page Builder</h4>
                            <p>Intrinsicly formulate scalable web services before fully researched methodologies.</p>
                        </div>
                    </div>
                    <div class="icon-text">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon2.png" alt="">
                        <div class="title">
                            <h4>Iconic Awarded Design</h4>
                            <p>Intrinsicly formulate scalable web services before fully researched methodologies.</p>
                        </div>
                    </div>
                    <div class="icon-text">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon6.png" alt="">
                        <div class="title">
                            <h4>eCommerce Ready</h4>
                            <p>Intrinsicly formulate scalable web services before fully researched methodologies.</p>
                        </div>
                    </div>
                    <div class="icon-button">
                        <a href="#" style="    padding: 20px 60px;
    background: #e5e1e1;
    border-radius: 40px;color: black;font-size: 13px;font-weight: 600;">START NOW</a>
                    </div>
                  </div>
               </div>
           </div>
       </section>
       <section class="pricing" id="pricing">
            <div class="zn-bgSource-imageParallax">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <h3>Pick your plan</h3>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="pricing-dt">
                                <h2 >
                                    <span style="font-family: Lato;"><span style="color: #c89d28;"><span style="line-height: 19px;"><span style="font-size: 30px; position:relative; top:-35px; ">$</span></span><span style="line-height: 30px;"><span style="font-size: 80px;">59</span></span></span></span>
                                </h2>
                                <h4>Single License</h4>
                                <div class="list-pricing">
                                    <ul>
                                        <li>1 theme included.</li>
                                        <li>1 year of theme updates & support.</li>
                                        <li>20% off future purchases.</li>
                                    </ul>
                                </div>
                                <div class="view">
                                    <a href="#">VIEW</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="pricing-dt">
                                <h2 >
                                    <span style="font-family: Lato;"><span style="color: #c89d28;"><span style="line-height: 19px;"><span style="font-size: 30px; position:relative; top:-35px; ">$</span></span><span style="line-height: 30px;"><span style="font-size: 80px;">399</span></span></span></span>
                                </h2>
                                <h4>Forever Membership</h4>
                                <div class="list-pricing">
                                    <ul>
                                        <li>1 theme included.</li>
                                        <li>1 year of theme updates & support.</li>
                                        <li>20% off future purchases.</li>
                                    </ul>
                                </div>
                                <div class="view">
                                    <a href="#">SIGN UP TODAY</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="pricing-dt">
                                <h2 >
                                    <span style="font-family: Lato;"><span style="color: #c89d28;"><span style="line-height: 19px;"><span style="font-size: 30px; position:relative; top:-35px; ">$</span></span><span style="line-height: 30px;"><span style="font-size: 80px;">199</span></span></span></span>
                                </h2>
                                <h4>1 Year Membership</h4>
                                <div class="list-pricing">
                                    <ul>
                                        <li>All themes included.</li>
                                        <li>1 year of theme updates & support.</li>
                                        <li>20Access all new themes.</li>
                                    </ul>
                                </div>
                                <div class="view">
                                    <a href="#">SIGN UP TODAY</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>           
       </section>
       
       <section class="lasted-news" id="blog">
           <div class="container">
               <h2>Latest News</h2>
               <div class="row">
          <?php 
            $danhsach= new WP_Query(array(
              'post_type'=>'post',
              'post_status'=>'publish',
              'posts_per_page'=>1,
            ));
          ?>
          <?php while($danhsach->have_posts()) : $danhsach->the_post(); ?>
                   <div class="col-md-6 col-lg-6">
                       <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">

                       <?php 
                        $category= get_the_category();
                        
                       ?>
                       <div class="categorry"><?php echo $category[0]->name; ?></div>
                       <div class="title">
                           <h3><?php the_title(); ?></h3>
                           <p style="    color: white;
    font-size: 12px;">FEBRUARY 1, 2017 BY <a href="" style="color:#c89d28;">MIHAI</a></p>
                       </div>
                   </div>
              <?php endwhile ; wp_reset_query(); ?>

                   <div class="col-md-6 col-lg-6">
                       <div class="news">
                       <?php 
            $danhsach= new WP_Query(array(
              'post_type'=>'post',
              'post_status'=>'publish',
              'posts_per_page'=>4,
              'offet'=>1,
            ));
          ?>
          <?php while($danhsach->have_posts()) : $danhsach->the_post(); ?>

          <div class="news-dt">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
          <?php 
                        $category= get_the_category();
                        
                       ?>
                             <div class="categorry-news" style="text-transform: uppercase;"><?php echo $category[0]->name; ?></div>
                             <div class="title-dt">
                           <h3><?php the_title(); ?></h3>
                           <p style="color: black;
    font-size: 12px;"><?php echo get_the_date('d-m-Y'); ?> by mihai</p>
                       </div>
                           </div>
          <?php endwhile; wp_reset_query(); ?>      
                       </div>
                   </div>
                   <div class="button-readmore">
                     <a href="#">READ MORE</a>
                   </div>
               </div>
           </div>
       </section>
       <section class="covered" id="services">
         <div class="container">
           <div class="row">
             <div class="col-md-4 col-lg-4">
               <h2>We've got you covered.</h2>
               <p>Intuitive drag and drop Page Builder. Stunning themes. Over 100 Elements. Creating your beautiful website has never been easier.</p>
             </div>
              <div class="col-md-4 col-lg-4">
                <div class="icon-text">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon1.png" alt="">
                        <div class="title">
                            <h4>Stunning Page Builder</h4>
                            <p>Setup pages and content like a PRO. Coding is not required and a handy documentation is included.</p>
                        </div>
                  </div>
                  <div class="icon-text">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon3.png" alt="">
                        <div class="title">
                            <h4>Featurewise Complete</h4>
                            <p>Without a doubt, Kallyas is one of the most complete WordPress themes on the market, being packed with all the goodies and sweet gems.</p>
                        </div>
                  </div>
                  <div class="icon-text">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon5.png" alt="">
                        <div class="title">
                            <h4>Rescue support</h4>
                            <p>In time, gathering awesome feedback from our loyal customers, Kallyas became a mature, stable and future-proof project.</p>
                        </div>
                  </div>
              </div>
               <div class="col-md-4 col-lg-4">
                 <div class="icon-text">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon2.png" alt="">
                        <div class="title">
                            <h4>Iconic Awarded Design</h4>
                            <p>This design is featured across the marketplaces and awarded for it's looks. Walkthrough and enjoy the visuals.</p>
                        </div>
                  </div>
                  <div class="icon-text">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon4.png" alt="">
                        <div class="title">
                            <h4>Featurewise CoMature Project</h4>
                            <p>In time, gathering awesome feedback from our loyal customers, Kallyas became a mature, stable and future-proof project.</p>
                        </div>
                  </div>
                  <div class="icon-text">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon6.png" alt="">
                        <div class="title">
                            <h4>e-Commerce Ready</h4>
                            <p>In time, gathering awesome feedback from our loyal customers, Kallyas became a mature, stable and future-proof project.</p>
                        </div>
                  </div>
               </div>
           </div>
         </div>
       </section>
       <section class="facts">
         <div class="container">
           <div class="row">
             <div class="col-md-12 col-lg-12">
               <h2>Facts</h2>
             </div>
             <div class="col-md-12 col-lg-12">
               <div id="projectFacts" class="sectionClass">
                  <div class="fullWidth eight columns">
                     <div class="projectFactsWrap ">
                        <div class="item wow fadeInUpBig animated animated" data-number="12">
                        
                           <p id="number1" class="number">12</p>
                           <span></span>
                           <p>Projects done</p>
                        </div>
                        <div class="item wow fadeInUpBig animated animated" data-number="55">
                         
                           <p id="number2" class="number">55</p>
                           <span></span>
                           <p>Happy professors</p>
                        </div>
                        <div class="item wow fadeInUpBig animated animated" data-number="359">
               
                           <p id="number3" class="number">359</p>
                           <span></span>
                           <p>Techie Students</p>
                        </div>
                        <div class="item wow fadeInUpBig animated animated" data-number="246">
                      
                           <p id="number4" class="number">100</p>
                           <span></span>
                           <p>Alumini survey</p>
                          
                        </div>
                     </div>
                  </div>
               </div>
             </div>
             <div class="col-md-12 col-lg-12">
               <h3>We craft beautifully useful marketing and digital products that grow businesses. </h3>
             </div>
           </div>
         </div>
       </section>
       <section class="partner">
         <div class="container">
           <div class="slider-partner">
             <h2>Working with world's best companies.</h2>
             <div class="row">
               <div class="col-2dot4">
                 <img src="<?php echo get_template_directory_uri(); ?>/images/logo-horse.png" alt="">
               </div>
               <div class="col-2dot4">
                 <img src="<?php echo get_template_directory_uri(); ?>/images/logo-crown.png" alt="">
               </div>

               <div class="col-2dot4">
                 <img src="<?php echo get_template_directory_uri(); ?>/images/logo-cupcake.png" alt="">
               </div>
               <div class="col-2dot4">
                 <img src="<?php echo get_template_directory_uri(); ?>/images/logo-frank.png" alt="">
               </div>
               <div class="col-2dot4">
                 <img src="<?php echo get_template_directory_uri(); ?>/images/logo-ship.png" alt="">
               </div>
             </div>
           </div>
         </div>
       </section>
       <section class="about">
         <div class="container">
           <h2>Get in Touch With Us.</h2>
           <p>Whether you’re interested in working with us or for us, we’re always happy to chat.</p>
           <p style="margin-bottom: 40px;">For Inquiries: <a href="">(500) 123-0800</a>.</p>
           <a href="#" class="drop">DROP US A LINE</a>
         </div>
       </section>
       <?php get_footer(); ?>