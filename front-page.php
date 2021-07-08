<?php get_header(); ?>

<main class="main">
    <section class="header-info">
        <div role="banner" class="header-info-text">
            <h1><?php the_field('header-info-text') ?></h1>
        </div>
        <div role="banner" class="header-banner">
            <div role="banner" class="header-info-text header-info-text-desktop">
                <h1><?php the_field('header-info-text') ?></h1>
                <p>
                    <?php the_field('header-info-text-desktop') ?>
                </p>
                <div role="button">
                    <button class="checkout">Оформить заказ</button>
                </div>
            </div>
            <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/illustration_manager.svg" type="image/webp"><img class="illustration-manager" src="<?php bloginfo('template_url'); ?>/assets/img/illustration_manager.svg" alt="illustration_manager">
            </picture>
            <div role="img" class="header-banner-ball big_ball">
                <picture>
                    <source srcset="<?php bloginfo('template_url'); ?>/assets/img/half-ball.svg" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/half-ball.svg" alt="half-ball">
                </picture>
            </div>
            <div role="img" class="header-banner-ball small_ball">
                <picture>
                    <source srcset="<?php bloginfo('template_url'); ?>/assets/img/small-ball.svg" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/small-ball.svg" alt="small-ball">
                </picture>
            </div>
            <picture>
                <source srcset="./img/specular-ball.svg" type="image/webp"><img class="specular specular1" src="./img/specular-ball.svg" alt="ball">
            </picture>
            <picture>
                <source srcset="./img/specular-ball.svg" type="image/webp"><img class="specular specular2" src="./img/specular-ball.svg" alt="ball">
            </picture>
        </div>
    </section>
    <section class="header-submit">
        <div role="text">
            <p>
                Векторное изображение - это функциональный дизайн,
                формат которого позволяет изменять размер без
                потери качества что упрощает использование элементов фирменного стиля
            </p>
        </div>
        <div role="button">
            <button class="checkout">Оформить заказ</button>
        </div>
    </section>
    <section class="individual-development-section">
        <div>
            <h2><?php the_field('individual-development'); ?></h2>
            <div class="block-items" role="main">
                <div role="note" class="individual-development-item">
                    <picture>
                        <source srcset="<?php bloginfo('template_url'); ?>/assets/img/Drawing_in_curves.svg" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/Drawing_in_curves.svg" alt="Drawing_in_curves">
                    </picture>
                    <h3><?php the_field('drawing_in_curves'); ?></h3>
                    <p><?php the_field('drawing_in_curves_description'); ?></p>
                </div>
                <div role="note" class="individual-development-item">
                    <picture>
                        <source srcset="<?php bloginfo('template_url'); ?>/assets/img/Bezier_lines.svg" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/Bezier_lines.svg" alt="Bezier_lines">
                    </picture>
                    <h3><?php the_field('bezier_lines'); ?></h3>
                    <p><?php the_field('bezier_lines_description'); ?></p>
                </div>
                <div role="note" class="individual-development-item">
                    <picture>
                        <source srcset="<?php bloginfo('template_url'); ?>/assets/img/Bezier_curves.svg" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/Bezier_curves.svg" alt="Bezier_curves">
                    </picture>
                    <h3><?php the_field('bezier_curves') ?></h3>
                    <p><?php the_field('bezier_curves_description') ?></p>
                </div>
                <div role="note" class="individual-development-item">
                    <picture>
                        <source srcset="<?php bloginfo('template_url'); ?>/assets/img/Bezier_spline.svg" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/Bezier_spline.svg" alt="Bezier_spline">
                    </picture>
                    <h3><?php the_field('bezier_spline'); ?></h3>
                    <p><?php the_field('bezier_spline_description'); ?></p>
                </div>
                <div role="note" class="individual-development-item">
                    <picture>
                        <source srcset="<?php bloginfo('template_url'); ?>/assets/img/Computer_graphics.svg" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/Computer_graphics.svg" alt="Computer_graphics">
                    </picture>
                    <h3><?php the_field('сomputer_graphics'); ?></h3>
                    <p><?php the_field('computer_graphics_description'); ?></p>
                </div>
                <div role="note" class="individual-development-item">
                    <picture>
                        <source srcset="<?php bloginfo('template_url'); ?>/assets/img/fractal_graphic.svg" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/fractal_graphic.svg" alt="Fractal_graphics">
                    </picture>
                    <h3><?php the_field('fractal_graphics'); ?></h3>
                    <p><?php the_field('fractal_graphics_description'); ?></p>
                </div>
            </div>
        </div>
        <button class="show-more">Показать больше</button>
    </section>
    <section class="why-we">
        <div class="running-man">
            <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/running-man.svg" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/running-man.svg" alt="why we icon">
            </picture>
        </div>
        <div class="block-why-we">
            <h2>Почему <span>мы?</span></h2>
            <div role="">
                <div role="decoration line" class="line">
                    <div role="decoration line" class="point">
                        <picture>
                            <source srcset="<?php bloginfo('template_url'); ?>/assets/img/rate_point.svg" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/rate_point.svg" alt="rate point">
                        </picture>
                    </div>
                    <div role="decoration line" class="point">
                        <picture>
                            <source srcset="<?php bloginfo('template_url'); ?>/assets/img/rate_point_grey.svg" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/rate_point_grey.svg" alt="rate point">
                        </picture>
                    </div>
                    <div role="decoration line" class="point">
                        <picture>
                            <source srcset="<?php bloginfo('template_url'); ?>/assets/img/rate_point_grey.svg" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/rate_point_grey.svg" alt="rate point">
                        </picture>
                    </div>
                </div>
                <div role="" class="block-rate">
                    <div role="" class="rate">
                        <h4><?php the_field('securities_rate_1'); ?></h4>
                        <p><?php the_field('securities_rate_description_1') ?></p>
                    </div>
                    <div role="" class="rate">
                        <h4><?php the_field('securities_rate_2'); ?></h4>
                        <p><?php the_field('securities_rate_description_2') ?></p>
                    </div>
                    <div role="" class="rate">
                        <h4><?php the_field('securities_rate_3'); ?></h4>
                        <p><?php the_field('securities_rate_description_3') ?></p>
                    </div>
                </div>
            </div>
        </div>
        <picture>
            <source srcset="<?php bloginfo('template_url'); ?>/assets/img/geometric-ball-small.svg" type="image/webp"><img class="small_ball" src="<?php bloginfo('template_url'); ?>/assets/img/geometric-ball-small.svg" alt="ball">
        </picture>
        <picture>
            <source srcset="<?php bloginfo('template_url'); ?>/assets/img/geometric-ball-big.svg" type="image/webp"><img class="big_ball" src="<?php bloginfo('template_url'); ?>/assets/img/geometric-ball-big.svg" alt="ball">
        </picture>
    </section>
    <section class="in-web-design-section">
        <picture>
            <source srcset="<?php bloginfo('template_url'); ?>/assets/img/1-figure.svg" type="image/webp"><img class="figure figure-top" src="<?php bloginfo('template_url'); ?>/assets/img/1-figure.svg" alt="figure">
        </picture>
        <picture>
            <source srcset="<?php bloginfo('template_url'); ?>/assets/img/2-figure.svg" type="image/webp"><img class="figure figure-bottom" src="<?php bloginfo('template_url'); ?>/assets/img/2-figure.svg" alt="figure">
        </picture>
        <div role="slider" class="slider-block">
            <h2><?php the_field('vector_graphics_description') ?></h2>

            <div role="slider" class="image-slider swiper-container">
                <div role="slider" class="image-slider_wrapper swiper-wrapper">

                <?php while( have_rows('slider_mobile') ) : the_row();?>
            
                    <div role="slider" class="image-slider_slide swiper-slide mobile-slider">
                            <div role="" class="slider-block">
                            <?php while( have_rows('slider_block') ) : the_row(); ?>
                            <?php $sub_value = get_sub_field('slider_block');?>
                                <div role="" class="slider-item">
                                    <picture>
                                        <source srcset="<?php the_sub_field('group_image_slider');?>" type="image/webp"><img src="<?php the_sub_field('group_image_slider');?>" alt="icon vector">
                                    </picture>
                                    <div role="">
                                        <div class="button-line"></div>
                                        <p><?php the_sub_field('text_for_image');?></p>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            </div>
                    </div>

                <?php endwhile; ?>


                <?php while( have_rows('slider') ) : the_row();?>
                    <div role="slider" class="image-slider_slide swiper-slide desktop-slider">
                            <div role="" class="slider-block">
                            <?php while( have_rows('slider_block') ) : the_row(); ?>
                            <?php $sub_value = get_sub_field('slider_block');?>
                                <div role="" class="slider-item">
                                    <picture>
                                        <source srcset="<?php the_sub_field('group_image_slider');?>" type="image/webp"><img src="<?php the_sub_field('group_image_slider');?>" alt="icon vector">
                                    </picture>
                                    <div role="">
                                        <div class="button-line"></div>
                                        <p><?php the_sub_field('text_for_image');?></p>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            </div>
                    </div>
                <?php endwhile; ?>
                </div>
                <div role="slider" class="swiper-pagination"></div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>