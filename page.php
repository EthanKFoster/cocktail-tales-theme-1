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
                </div>
            </div>

        </main>


<?php get_footer(); ?>