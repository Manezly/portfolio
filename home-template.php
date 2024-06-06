<? 
    $bio_text = get_field('bio_text');

    $second_bio_first_para = get_field('second_bio_first_para');
    $second_bio_second_para = get_field('second_bio_second_para');
    
?>

<?php /* Template Name: Home Template */ get_header(); ?>

    <main>
        <section class="container bio">
            <div>
                <a class="scroll_button" href="">Projects <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M11.293 4.707L17.586 11H4v2h13.586l-6.293 6.293 1.414 1.414L21.414 12l-8.707-8.707-1.414 1.414z"/>
                </svg></a>
            </div>
            
            <div class="bio_container">
                <div class="bio_pic"><img src="<?= get_template_directory_uri(); ?>/img/leslie-pic.png" alt=""></div>
                <p class="bio_text"><?= $bio_text; ?></p>
            </div>
        </section>

       
                    
        <section class="container projects" id="projects"> 
            <div class="swiper project_swiper">
                <div class="swiper-wrapper">
                <?php
                    // WP_Query arguments
                    $args = array(
                    'post_type' => 'project',
                    'posts_per_page' => $posts_per_page ? $posts_quantity : -1,
                    'paged' => get_query_var( 'paged' ),
                    );

                    // The Query
                    $project_query = new WP_Query( $args );
                    // The Loop
                    if ( $project_query->have_posts() ):
                    while ( $project_query->have_posts() ):
                    $project_query->the_post();
                    $id = get_the_ID();
                ?>

                            <div class="swiper-slide" data-title="<?php the_title() ?>">
                                <img class="card_img" src="<?= get_the_post_thumbnail_url(); ?>">
                                <a href="<?php the_permalink(); ?>" class="link_container"></a>
                                <a href="" class="connected_button slider_hover_button">
                                    <button class="connected_button_text">View Website</button>
                                    <button class="connected_button_arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M11.293 4.707L17.586 11H4v2h13.586l-6.293 6.293 1.414 1.414L21.414 12l-8.707-8.707-1.414 1.414z"/>
                                        </svg>
                                    </button>
                                </a>
                                <svg style="display: none;">
                                    <defs>
                                        <filter>
                                            <feTurbulence
                                            baseFrequency="0.7,0.8"
                                            seed="0"
                                            type="fractalNoise"
                                            result="static"
                                            >
                                                <animate
                                                attributeName="seed"
                                                values="50;100"
                                                dur="600ms"
                                                repeatCount="1"                           
                                                />
                                            </feTurbulence>
                                            <feDisplacementMap in="SourceGraphic" in2="static">
                                                <animate
                                                attributeName="scale"
                                                values="40;1000;0"
                                                dur="600ms"
                                                repeatCount="1"                       
                                                />
                                            </feDisplacementMap>
                                        </filter>  
                                    </defs>
                                </svg>
                            </div>
                <?php endwhile; wp_reset_postdata(); endif; ?>


          




                    <?php if (have_rows('project_slide')) : ?>
                        <?php while (have_rows('project_slide')) : the_row();
                            // Get sub field values.
                            $project_title = get_sub_field('project_title');
                            $project_image = get_sub_field('project_image');
                            $project_link = get_sub_field('project_link');
                        ?>
                            <div class="swiper-slide" data-title="<?= $project_title; ?>">
                                <img class="card_img" src="<?= $project_image; ?>" alt="">
                                <a href="<?= $project_link; ?>" class="link_container" ></a>
                                <a href="" class="connected_button slider_hover_button">
                                    <button class="connected_button_text">View Website</button>
                                    <button class="connected_button_arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M11.293 4.707L17.586 11H4v2h13.586l-6.293 6.293 1.414 1.414L21.414 12l-8.707-8.707-1.414 1.414z"/>
                                        </svg>
                                    </button>
                                </a>
                                <svg style="display: none;">
                                    <defs>
                                        <filter>
                                            <feTurbulence
                                            baseFrequency="0.7,0.8"
                                            seed="0"
                                            type="fractalNoise"
                                            result="static"
                                            >
                                                <animate
                                                attributeName="seed"
                                                values="50;100"
                                                dur="600ms"
                                                repeatCount="1"                           
                                                />
                                            </feTurbulence>
                                            <feDisplacementMap in="SourceGraphic" in2="static">
                                                <animate
                                                attributeName="scale"
                                                values="40;1000;0"
                                                dur="600ms"
                                                repeatCount="1"                       
                                                />
                                            </feDisplacementMap>
                                        </filter>  
                                    </defs>
                                </svg>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    
                    <!-- <div class="swiper-slide" data-title="Care Home Project">
                        <img class="card_img" src="<?= get_template_directory_uri(); ?>/img/refuge-project.jpg" alt="">
                        <a href="" class="link_container" id="card"></a>
                        <a href="" class="connected_button slider_hover_button">
                            <button class="connected_button_text">View Website</button>
                            <button class="connected_button_arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M11.293 4.707L17.586 11H4v2h13.586l-6.293 6.293 1.414 1.414L21.414 12l-8.707-8.707-1.414 1.414z"/>
                            </svg></button>
                        </a>
                        <svg style="display: none;">
                            <defs>
                              <filter>  
                                <feTurbulence
                                  baseFrequency="0.7,0.8"
                                  seed="0"
                                  type="fractalNoise"
                                  result="static"
                                >
                                  <animate
                                    attributeName="seed"
                                    values="10;100"
                                    dur="600ms"
                                    repeatCount="1"                           
                                  />
                                </feTurbulence>
                                <feDisplacementMap in="SourceGraphic" in2="static">
                                  <animate
                                    attributeName="scale"
                                    values="10;1000;0"
                                    dur="600ms"
                                    repeatCount="1"                      
                                  />
                                </feDisplacementMap>
                              </filter>  
                            </defs>
                        </svg>
                    </div> -->
                </div>
            </div>
            <div class="project_swiper_bottom">
                <h3 id="slide_title"></h3>
                <div class="swiper_bottom_right">
                    <div class="swiper_fraction"></div>
                    <div class="project_swiper_buttons">
                        <div class="project_swiper_prev"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M11.293 4.707L17.586 11H4v2h13.586l-6.293 6.293 1.414 1.414L21.414 12l-8.707-8.707-1.414 1.414z"/>
                        </svg></div>  
                        <div class="project_swiper_next"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M11.293 4.707L17.586 11H4v2h13.586l-6.293 6.293 1.414 1.414L21.414 12l-8.707-8.707-1.414 1.414z"/>
                        </svg>    
                        </div> 
                    </div>
                </div>
            </div>
        </section>

        <section class="container skills">
            <div>
                <a class="scroll_button what_do" href="">What I Do <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M17 15.586 6.707 5.293 5.293 6.707 15.586 17H7v2h12V7h-2v8.586z"/></svg></a>
            </div>
        </section>
            <div class="inf_slider_container">
                <div class="slider_overlay"></div>
                <div class="inf_slider first">
                    <?php if (have_rows('skills_slide')) : ?>
                        <?php while (have_rows('skills_slide')) : the_row();
                            // Get sub field values.
                            $skill = get_sub_field('skill');
                        ?>
                            <h2><?= $skill; ?></h2> 
                            <span>&#128958;</span>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="inf_slider second">
                    <?php if (have_rows('skills_slide')) : ?>
                        <?php while (have_rows('skills_slide')) : the_row();
                            // Get sub field values.
                            $skill = get_sub_field('skill');
                        ?>
                            <h2><?= $skill; ?></h2> 
                            <span>&#128958;</span>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="inf_slider third">
                     <?php if (have_rows('skills_slide')) : ?>
                        <?php while (have_rows('skills_slide')) : the_row();
                            // Get sub field values.
                            $skill = get_sub_field('skill');
                        ?>
                            <h2><?= $skill; ?></h2> 
                            <span>&#128958;</span>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="inf_slider fourth">
                    <?php if (have_rows('skills_slide')) : ?>
                        <?php while (have_rows('skills_slide')) : the_row();
                            // Get sub field values.
                            $skill = get_sub_field('skill');
                        ?>
                            <h2><?= $skill; ?></h2> 
                            <span>&#128958;</span>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>

            <section class="container second_bio">
                <div class="second_bio_text">
                    <p><?= $second_bio_first_para; ?></p>
                    <p><?= $second_bio_second_para; ?></p>
                </div>
            </section>
        
    </main>

    <?php get_footer(); ?>