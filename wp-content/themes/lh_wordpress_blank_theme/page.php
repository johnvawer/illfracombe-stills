<?php get_header(); ?>
        
        <div class="sidebar hidden-xs hidden-sm">

                <div class="sidebar-nav clearfix">
                    <div class="sidebar-breadcrumb" data-title="gallery" data-placement="right" data-trigger="hover" data-target="#gallery-container">
                        <div class="arrow-up"></div>
                        <div class="arrow-down"></div>
                    </div>
                    <div class="sidebar-breadcrumb" data-title="about" data-placement="right" data-trigger="hover" data-target="#about-container">
                        <div class="arrow-up"></div>
                        <div class="arrow-down"></div>
                    </div>
                    <div class="sidebar-breadcrumb" data-title="contact" data-placement="right" data-trigger="hover">
                        <div class="arrow-up"></div>
                        <div class="arrow-down"></div>
                    </div>
                </div>
            </div>


        <div class="container-full-height jumbotron-image">
            
            <div class="row no-margin-left">
                <div class="col-md-12">
                    <h1 class="main-title">Ilfracombe Stills</h1>
                    <h3 class="sub-title text-center">Photographs across North Devon &amp; Exmoor</h3>                    
                </div>
            </div>

            <div class="cover-arrow"></div>

        </div>            
        
        <div id="gallery-container" class="padding-top-5" data-nav="scrollElement">
            <div class="container">
                <div class="padding-top-10">
                    <?php the_post(); ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <!--h1 class="entry-title"><?php the_title(); ?></h1-->
                        <div class="entry-content">
                        <?php the_content(); ?>
                        <?php //wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'your-theme' ) . '&after=</div>') ?>
                        <?php //edit_post_link( __( 'Edit', 'your-theme' ), '<span class="edit-link">', '</span>' ) ?>
                        </div><!-- .entry-content -->
                    </div><!-- #post-<?php the_ID(); ?> -->
                </div>   
            </div>         
        </div>

        <div class="container-full-height" id="about-container" data-nav="scrollElement">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="section-title">About Me</h1>
                    </div>
                    <div class="col-md-12">
                        <p>
                            My name is Steve and I have lived in Ilfracombe for the past seven years. 
                            Although a Hotelier by trade, I had always had a keen interest in photography.
                            Unfortunately several years ago I was diagnosed with a debilitating illness "Adult Onset Stills Disease"  (www.stillsrus.co.uk) 
                            which meant suddenly I was unable to carry on with my work, however as they say "when one ship sails, another comes along" which was quite true, 
                            and I found myself with more time available to continue with my love of photography. Having been a keen photographer for over 20 years, this has 
                            ultimately become my passion.
                        </p>
                        <p>        
                            I now take my camera with me whenever I go out!!
                        </p>
                        <p>    
                            I really enjoy the varied scenery and photographic opportunities North Devon has to offer, and as I am sure you can see from the photographs 
                            in my gallery, the scenery is constantly changing and the colours are spectacular.
                        </p>
                        <p>    
                            If you have a particular memory of a favourite view or scene in North Devon and wished you had taken that "special" picture prior to leaving, 
                            give me a call or drop me an e-mail. I would be more than willing to discuss visiting the site for you and capturing that photograph you long for...
                        </p>
                    </div>
                </div>
            </div>        
        </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>