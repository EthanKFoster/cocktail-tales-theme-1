<?php get_header(); ?>

<main class="pb-5">
            <div class="page_title ms-4 my-4">
                <h1><?php the_title(); ?></h1>
            </div>

            <div class="content container-fluid">
                <div class="row justify-content-around">
                    <div class="col-md-7 col-sm-10 _page_text">
                        <?php the_content(); ?>
                    </div>
                    <div class="col-md-4 col-sm-10 justify-content-center text-center">
                        <img src="<?php echo get_theme_file_uri('/images/figma-exports/ethan.png'); ?>" alt="Portrait of Ethan">
                    </div>
             
                </div>
            </div>

        </main>


<?php get_footer(); ?>