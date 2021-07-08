<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package designers
 */

?>

<footer>
    <section class="form-section">
        <picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/mail_box.svg" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/mail_box.svg" alt="mail box"></picture>
        <h2>Понравились работы?</h2>
        <h4>
            Заполните форму обратной связи
            и получите профессиональною консультацию онлайн
        </h4>
        <form action="#" method="POST">
            <input id="" class="" type="text" name="name" placeholder="Ваше имя" required>
            <input id="" class="" type="tel" name="phone" placeholder="Номер телефона" required>
            <input id="" class="" type="email" name="email" placeholder="Email адрес" required>
            <button type="submit">Заказать звонок</button>
        </form>
    </section>
    <section class="footer-contacts-section">
        <div>
            <a class="dc" href="#"><picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/DC.svg" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/DC.svg" alt="DC"></picture></a>
            <a class="link-logo" arial-label="" href="index.html"><picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/logo_for_phone.svg" type="image/webp"><img class="logo" src="<?php bloginfo('template_url'); ?>/assets/img/logo_for_phone.svg" alt="logo"></picture></a>
            <div role="link" class="contacts">
                <h3>Контакты</h3>
                <div role="link" class="contact-links">
                    <div role="link"><picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/viber_icon.svg" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/viber_icon.svg" alt=""></picture><a href="tel:+380666146404"><?php the_field('contact_1');?> <?php the_field('name_contact_1'); ?></a></div>
                    <div role="link"><picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/viber_icon.svg" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/viber_icon.svg" alt=""></picture><a href="tel:+380960933838"><?php the_field('contact_2');?> <?php the_field('name_contact_2'); ?></a></div>
                    <div role="link"><picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/email_icon.svg" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/email_icon.svg" alt=""></picture><a
                            href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></div>
                </div>
            </div>
            <div role="" class="social-networks">
                <h3>Мы в социальных сетях</h3>
                <div role="" class="social_links">
                    <a arial-label="Перейти к instagram" href="<?php the_field('instagram'); ?>"><picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/instagram_icon.svg" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/instagram_icon.svg" alt=""></picture></a>
                    <a arial-label="Перейти к facebook" href="<?php the_field('facebook'); ?>"><picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/facebook_icon.svg" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/facebook_icon.svg" alt=""></picture></a>
                    <a arial-label="Перейти к viber" href="<?php the_field('viber'); ?>"><picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/viber_icon.svg" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/viber_icon.svg" alt=""></picture></a>
                    <a arial-label="Перейти к telegram" href="<?php the_field('telegram'); ?>"><picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/telegram_icon.svg" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/telegram_icon.svg" alt=""></picture></a>
                    <a arial-label="Перейти к whatsap" href="<?php the_field('whatsup'); ?>"><picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/whatsup_icon.svg" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/whatsup_icon.svg" alt=""></picture></a>
                </div>
            </div>
        </div>
        <div role="line" class="horizont-line"></div>
        <div role="contentinfo" class="main-copyright">
            <h5>Privacy Policy RemotEmployees 2018-2021 © All rights reserved</h5>
        </div>
    </section>
</footer>
    </div>
    <?php wp_footer(); ?>
</body>

</html>