<?php get_header(); ?>

    <main>

        <!-- hero section -->
        <section class="_hero container-fluid">
            <div class="row">
                <div class="col hcol">
                    <div class="row hero_image himg1"></div>
                    <div class="row htext my-5">
                        <h3>My Favorite Posts</h3>
                    </div>
                </div>
                <div class="col hcol">
                    <div class="row htext-main mb-5">
                        <p>My name is Ethan and I love to make cocktails and explore the world of mixology. This is my personal recipe repository. <br> <br> <strong>Let’s make some drinks together.</strong></p>
                    </div>
                    <div class="row hero_image himg2"></div>
                </div>
                <div class="col hcol">
                    <div class="row hero_image himg3"></div>
                    <div class="row htext my-5">
                        <h3>Categories</h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- recent posts homepage feed -->
        <section class="_home_lists container-fluid">
            <div class="row justify-content-between px-5">
                <!-- posts box -->

                <div class="col-6 _posts_box ms-3 p-5 d-flex flex-column justify-content-around align-items-around">
                    
                    <div class="row py-2 my-2">
                        <div class="col post_image post_image--1">
                            <img src="<?php echo get_theme_file_uri('/images/figma-exports/old-fashioned-post-img.png')?>" alt="old fashioned photo">
                        </div>
                        <div class="col">
                            <h3>Old Fashioned</h3>
                            <p>My first cocktail</p>
                        </div>
                    </div>

                    <div class="row py-2 my-2">
                        <div class="col post_image post_image--2">
                            <img src="<?php echo get_theme_file_uri('/images/figma-exports/hibiki-post-image.png')?>" alt="hibiki whisky photo">
                        </div>
                        <div class="col">
                            <h3>bottle review</h3>
                            <p>hibiki harmony</p>
                        </div>
                    </div>          

                    <div class="row py-2 my-2">
                        <div class="col post_image post_image--3">
                            <img src="<?php echo get_theme_file_uri('/images/figma-exports/glassware-post-image.png')?>" alt="glassware photo">
                        </div>
                        <div class="col">
                            <h3>which glass when?</h3>
                            <p>a guide to cocktail glassware</p>
                        </div>
                    </div>

                    <div class="row justify-content-center">
                        <button class="btn-lg btn btn-outline-* homepage_viewall_button">
                            <a href="<?php echo site_url('/blog'); ?>">View All</a>
                        </button>
                    </div>

                </div>

                <!-- categories/tags box -->
                <div class="categories_box col-3 me-3 p-3">
                    <div class="row mb-2">
                        <h4>Categories</h4>
                        <ul>
                            <li>General</li>
                            <li>Recipes</li>
                            <li>Equipment</li>
                            <li>Bottles Reviews</li>
                            <li>Techniques</li>
                            <li>Bar Reviews</li>
                        </ul>
                    </div>
                    <div class="row mt-2">
                        <h4>Tags</h4>
                        <ul>
                            <li>Apertifs</li>
                            <li>Beer</li>
                            <li>Bourbon</li>
                            <li>Brandy</li>
                            <li>Gin</li>
                            <li>Irish Whiskey</li>
                            <li>Mezcal</li>
                            <li>Rum</li>
                            <li>Rye</li>
                            <li>Scotch</li>
                            <li>Tequila</li>
                            <li>Vermouth</li>
                            <li>Vodka</li>
                            <li>Wine</li>
                        </ul>
                        <a class="see_all_link" href="./pages/categories.html"><h4>(See All)</h4></a>
                    </div>
                </div>
            </div>
        </section>


        <!-- email signup section -->
        <hr>
        <section class="my-5 mx-auto justify-content-center">
            <div class="_email_signup container align-items-center">
                <div class="row justify-content-around align-items-center">
                    <!-- left side -->
                    <div class="col-5 justify-content-center align-items-center pt-5 pb-2">
                    <div class="row ">
                            <p class="email_text text-white text-center mt-auto">
                                Join our mailing list!
                                <br>
                                <br>
                                Stay updated on all Cocktail Tales news and new recipes.
                            </p>
                    </div>
                        <div class="row">
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label"></label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
                                    <button type="submit" class="btn btn-primary my-3">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- right side logo -->
                    <div class="col-5 email_logo_container justify-content-center align-items-center">
                        <img class= "email_logo" src="<?php echo get_theme_file_uri('/images/CT.png'); ?>" alt="cocktail tales logo">
                    </div>
                </div>
            </div>
        </section>
        <hr>

        <!-- patreon signup section -->
        <section class="_patreon_signup">
            <div class="container-fluid">
                <div class="row patreon_header_text d-flex text-center">
                    <h3>Support the site!</h3>
                    <br>
                    <p>If you like what I create, please consider supporting me on Patreon. <br>
                        Patrons receive extra, specialized content, and more opportunities to <br>
                        interact with me and the site! </p>
                </div>
                <div class="row justify-content-around py-3">
                    <div class="col-sm-10 col-md-3 img-fluid pimg text-center justify-content-center">
                        <div class="row"><img src="<?php echo get_theme_file_uri('/images/figma-exports/tier-1.png'); ?>" alt="tier 1 photo"></div>
                        <div class="row mx-auto pimgd pimg-1 text-center align-items-center">
                            <p>Seltzer Tier</p>
                            <p>$1 - $10 / month</p>
                        </div>
                    </div>
                    <div class="col-sm-10 col-md-3 img-fluid pimg text-center justify-content-center">
                        <div class="row"><img src="<?php echo get_theme_file_uri('/images/figma-exports/tier-2.png'); ?>" alt="tier 2 photo"></div>
                        <div class="row mx-auto pimgd pimg-2 text-center align-items-center">
                            <p>Apertif Tier</p>
                            <p>$11 - $50 / month</p>
                        </div>
                    </div>
                    <div class="col-sm-10 col-md-3 img-fluid pimg text-center justify-content-center">
                        <div class="row"><img src="<?php echo get_theme_file_uri('/images/figma-exports/tier-3.png'); ?>" alt="tier 3 photo"></div>
                        <div class="row mx-auto pimgd pimg-3 text-center align-items-center">
                            <p>Spirit Tier</p>
                            <p>$51+ / month</p>
                        </div> 
                    </div>
                </div>
            </div>
        </section>

    </main>
<!-- end main content -->

<?php get_footer(); ?>