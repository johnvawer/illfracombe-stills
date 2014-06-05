<?php get_header(); ?>

        <div class="sidebar hidden-xs hidden-sm">

                <div class="sidebar-nav clearfix">
                    <div class="sidebar-breadcrumb" data-title="work" data-placement="right" data-trigger="hover" data-target="#gallery-container">
                        <div class="diamond-nav"></div>
                        <!--div class="arrow-down"></div-->
                    </div>
                    <div class="sidebar-breadcrumb" data-title="about" data-placement="right" data-trigger="hover" data-target="#about-container">
                        <div class="diamond-nav"></div>
                    </div>
                    <div class="sidebar-breadcrumb" data-title="contact" data-placement="right" data-trigger="hover" data-target="#contact-container">
                       <div class="diamond-nav"></div>
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

        <div id="gallery-container" data-nav="scrollElement">
            <div class="container">
                <div class="row row-additional-padding">
                    <div class="col-md-12">
                        <h1 class="section-title">Work</h1>
                    </div>
                    <div class="col-md-12">
                        <?php the_post(); ?>                    
                        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>                            
                            <div class="entry-content">
                                <?php the_content(); ?>                        
                            </div>
                        </div>
                    </div>                
                </div>
            </div>
        </div>

        <div class="container-full-height" id="about-container" data-nav="scrollElement">
            <div class="container">
                <div class="row row-additional-padding">
                    <div class="col-md-12">
                        <h1 class="section-title">About Me</h1>
                    </div>
                    <div class="col-md-12">
                        <p>
                            My name is Steve and I have lived in Ilfracombe for the past seven years.
                            Although a Hotelier by trade, I had always had a keen interest in photography.
                            Unfortunately several years ago I was diagnosed with a debilitating illness "Adult Onset Stills Disease"  (<a class="link" href="http://www.stillsrus.com">www.stillsrus.com</a>)
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

        <div class="container-full-height" id="contact-container" data-nav="scrollElement">
            <div class="container">
                <div class="row row-additional-padding">
                    <div class="col-md-12">
                        <h1 class="section-title">Get in Touch</h1>
                    </div>
                    <div class="col-md-6">
                        <p>
                            Call or E-mail Steve Humphreyson
                        </p>
                        <p>
                            Telephone: 01271 269665 or Mobile 07906 449643
                        </p>
                        <p>
                            Email: steve@ilfracombestills.co.uk   
                        </p>                       
                    </div>
                    <div class="col-md-6">
                        <form class="comment-form" role="form">
                            
                            <div class="form-group has-feedback">
                                <label class="control-label" for="name">Name</label>
                                <span class="help-block custom-help-block">Required Field</span>
                                <input id="name" type="text" name="name" class="form-control">
                                <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                              
                            </div>

                            <div class="form-group has-feedback">
                                <label class="control-label" for="email">Email</label> 
                                <span class="help-block custom-help-block">Invalid Email Address</span>                           
                                <input id="email" type="email" name="email" class="form-control">
                                <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                
                            </div>
                            
                            <div class="form-group has-feedback">
                                <label class="control-label" for="comment">Comment</label>
                                <span class="help-block custom-help-block">Required Field</span>
                                <textarea id="comment" name="comment" class="form-control"></textarea> 
                                <span class="glyphicon glyphicon-remove form-control-feedback"></span>                                
                            </div>

                            <input id="submit_comments" type="submit" value="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>