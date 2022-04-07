<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<section id="apartments">
    <div class="container">
        <div class="apartments__main">
            <h2><?php the_field('block_2_title'); ?></h2>
            <p><?php the_field('block_2_title_sub'); ?></p>
            <div class="apartments__flex">
                <div class="apartments__diagram">
                    <img src="<?php the_field('block_2_img'); ?>" alt="">
                </div>
                <div class="apartments__info">
                    <div class="apartments__text">
                        <p><?php the_field('block_2_text'); ?></p>
                    </div>
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/AdobeSto1.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section id="stable">
    <div class="container">
        <div class="stable__main">
            <h3><?php the_field('block_3_title'); ?></h3>
            <div class="stable__flex">
                <?php if(get_field('block_3_reapiter')): ?>
                  <?php while(the_repeater_field('block_3_reapiter')): ?>
                    <div class="stable__box">
                        <div class="stable__cnt">
                            <img src="<?php the_sub_field('block_3_reapiter_img'); ?>" alt="">
                            <div class="stable__name">
                                <strong><?php the_sub_field('block_3_reapiter_title'); ?></strong>
                                <p>
                                   <?php the_sub_field('block_3_reapiter_text'); ?>
                                </p>
                            </div>
                        </div>
                    </div>   
                  <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="stable__tment">
                <div class="stable__tment__block">
                    <p><?php the_field('block_3_banner_text'); ?> </a>
                    <div class="stable__tment__ic">
                        <img src="<?php echo bloginfo('template_url'); ?>/assets/img/arqa4.png" alt="">
                    </div>
                </div>
                <div class="stable__photo">
                    <img src="<?php the_field('block_3_banner_img'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section id="brothel">
    <div class="container">
        <div class="brothel__flex">
            <div class="brothel__title">
                <h2><?php the_field('block_4_title'); ?> </h2>
                <p>
                    <?php the_field('block_4_text'); ?> 
                </p>
                <div class="brothel__photo">
                    <img src="<?php the_field('block_4_img'); ?>" alt="">
                </div>
            </div>
            <div class="brothel__info">
                <?php if(get_field('block_4_reapiter')): ?>
                  <?php while(the_repeater_field('block_4_reapiter')): ?>
                    <div class="brothel__box">
                        <div class="brothel__cnt">
                            <strong> <?php the_sub_field('block_4_reapiter_red'); ?></strong>
                            <p><?php the_sub_field('block_4_reapiter_box'); ?></p>
                        </div>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section id="franchise">
    <div class="container">
        <div class="franchise__main">
            <h3><?php the_field('slaider_title'); ?></h3>
            <div class="swiper-button-prev">
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                    <path d="M0.434616 9.11219C-0.055709 9.60251 -0.055709 10.3975 0.434616 10.8878L8.42492 18.8781C8.91525 19.3684 9.71022 19.3684 10.2005 18.8781C10.6909 18.3878 10.6909 17.5928 10.2005 17.1025L3.09805 10L10.2005 2.8975C10.6909 2.40718 10.6909 1.61221 10.2005 1.12188C9.71022 0.631556 8.91525 0.631556 8.42492 1.12188L0.434616 9.11219ZM20.1558 8.74444L1.32243 8.74444L1.32243 11.2556L20.1558 11.2556L20.1558 8.74444Z"
                          fill="#414141"/>
                </svg>
            </div>
            <div class="swiper-button-next">
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                    <path d="M20.31 10.8878C20.8003 10.3975 20.8003 9.60251 20.31 9.11219L12.3197 1.12188C11.8294 0.631558 11.0344 0.631558 10.5441 1.12188C10.0538 1.61221 10.0538 2.40718 10.5441 2.89751L17.6466 10L10.5441 17.1025C10.0538 17.5928 10.0538 18.3878 10.5441 18.8781C11.0344 19.3684 11.8294 19.3684 12.3197 18.8781L20.31 10.8878ZM0.588867 11.2556L19.4222 11.2556L19.4222 8.74445L0.588867 8.74444L0.588867 11.2556Z"
                          fill="#414141"/>
                </svg>
            </div>
            <div class="swiper franchise-slide">
                <div class="swiper-wrapper">
                    <?php if(get_field('slaider_reapiter')): ?>
                      <?php while(the_repeater_field('slaider_reapiter')): ?>
                        <div class="swiper-slide">
                            <div class="franchise__info">
                                <a href="<?php the_sub_field('slaider_reapiter_img'); ?>" class="franchise__photo" data-fancybox="gallery">
                                    <img src="<?php the_sub_field('slaider_reapiter_img'); ?>" alt="">
                                </a>
                                <div class="franchise__text">
                                    <p>
                                        <?php the_sub_field('slaider_reapiter_text'); ?>
                                    </p>
                                </div>
                            </div>
                        </div> 
                      <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="franchise__topics">
            <strong><?php the_field('slaider_bottom_text'); ?></strong>
            <a href="javascript:;" data-val="modal" class="open_modal btn button" >Оставить заявку</a>
        </div>
    </div>
</section>
<section id="reasons">
    <div class="container">
        <div class="reasons__main">
            <div class="reasons__info">
                <div class="reasons__tit">
                    <strong><?php the_field('block_5_number'); ?></strong>
                    <?php the_field('block_5_title'); ?>
                </div>
                <div class="reasons__photo">
                    <img src="<?php the_field('block_5_img'); ?>" alt="">
                </div>
            </div>
            <div class="reasons__flex">
                <?php if(get_field('block_5_reapiter')): ?>
                  <?php while(the_repeater_field('block_5_reapiter')): ?>
                    <div class="reasons__box">
                        <img src="<?php the_sub_field('block_5_reapiter_icon'); ?>" alt="">
                        <p><?php the_sub_field('block_5_reapiter_text'); ?></p>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="reasons__joint">
            <div class="reasons__text">
                <p>
                  <?php the_field('block_5_bottom_text'); ?>
                </p>
                <a href="javascript:;" data-val="modal" class="open_modal btn button" >Оставить заявку</a>
            </div>
            <div class="reasons__sex">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/rso1.png" alt="">
            </div>
        </div>
    </div>
</section>
<section id="cooperation">
    <div class="container">
        <div class="cooperation__name">
            <strong>НЕ БОРДЕЛЬ</strong>
           <?php the_field('block_6_title'); ?>
            <div class="cooperation__flex">
                <?php if(get_field('block_6_reapiter')): ?>
                  <?php while(the_repeater_field('block_6_reapiter')): ?>
                    <div class="cooperation__cnt">
                        <div class="cooperation__info">
                            <strong><?php the_sub_field('block_6_reapiter_title'); ?></strong>
                            <?php the_sub_field('block_6_reapiter_list'); ?>
                        </div>
                        <div class="cooperation__item">
                            <?php the_sub_field('block_6_reapiter_price_1'); ?>
                            <?php the_sub_field('block_6_reapiter_price_2'); ?>
                            <?php the_sub_field('block_6_reapiter_sale'); ?>
                            <a href="javascript:;" data-val="franchisee" class="open_modal btn">Оставить заявку</a>
                            <p><?php the_sub_field('block_6_reapiter_bottom_text'); ?></p>
                        </div>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="cooperation__income">
            <div class="cooperation__about">
                <?php if(get_field('block_7_reapiter')): ?>
                  <?php while(the_repeater_field('block_7_reapiter')): ?>
                    <div class="cooperation__at">
                        <strong><?php the_sub_field('block_7_reapiter_title'); ?></strong>
                        <?php the_sub_field('block_7_reapiter_list'); ?>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="cooperation__wood">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/areq1.png" alt="png" class="picture__dec">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/areq2.png" alt="png" class="picture__mob">
            </div>
        </div>
        <div class="for__blur"></div>
    </div>
</section>
<section id="steps">
    <div class="container">
        <div class="steps__main">
            <div class="reasons__info">
                <div class="reasons__tit">
                    <strong><?php the_field('block_8_number'); ?></strong>
                    <?php the_field('block_8_title'); ?>
                </div>
                <div class="reasons__photo">
                    <img src="<?php the_field('block_8_img'); ?>" alt="">
                </div>
            </div>
            <div class="steps__flex">
                <?php if(get_field('block_8_reapiter')): ?>
                  <?php while(the_repeater_field('block_8_reapiter')): ?>
                    <div class="steps__info">
                        <div class="steps__stage">
                            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/sarqa5.png" alt="">
                            <span><?php the_sub_field('block_8_reapiter_title'); ?></span>
                        </div>
                        <p><?php the_sub_field('block_8_reapiter_text'); ?></p>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="steps__cep">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/image525.png" alt="">
            </div>
        </div>
    </div>
</section>
<section id="easier">
    <div class="easier__flex">
        <div class="easier__tit">
            <h3><?php the_field('block_9_title_left'); ?></h3>
            <a href="javascript:;" data-val="modal" class="open_modal btn" >оставить заявку</a>
        </div>
        <div class="easier__info">
            <?php the_field('block_9_title_right'); ?>
           <?php the_field('block_9_right_text'); ?>
        </div>
    </div>
</section>
<section id="frequently">
    <div class="container">
        <div class="frequently__main">
            <h2><?php the_field('faq_title'); ?></h2>
            <div class="frequently__cnt">
                <div class="accordion" id="accordion">
                    <?php if(get_field('faq_reapiter')): ?>
                      <?php while(the_repeater_field('faq_reapiter')): ?>
                        <div class="frequently__block">
                            <div class="frequently__box link">
                                <strong><?php the_sub_field('faq_reapiter_question'); ?></strong>
                                <div class="frequently__plus">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="27" viewBox="0 0 28 27"
                                         fill="none">
                                        <path d="M27.6298 15.3458H15.6598V27.0008H12.8248V15.3458H0.854848L0.854848 12.6368H12.8248L12.8248 0.918763H15.6598L15.6598 12.6368H27.6298V15.3458Z"
                                              fill="#E11414"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="submenu">
                                <div class="frequently__sub">
                                    <p>
                                        <?php the_sub_field('faq_reapiter_answer'); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                      <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="questions">
    <div class="container">
        <div class="questions__name">
            <strong>НЕ БОРДЕЛЬ</strong>
        </div>
        <div class="questions__fon">
            <h2>Остались вопросы?</h2>
            <p>
                Оставьте свои данные и мы вам обязательно перезвоним
            </p>
            <form class="form-send">
                <input type="hidden" name="admin_email" value="<?php the_field('admin_email',6); ?>"/>
                <input type="hidden" name="subject" value="Не бордель"/>
                <div class="questions__form">
                    <div class="questions__input">
                        <label>
                            <input type="text" placeholder="Ваше имя" name="name">
                        </label>
                    </div>
                    <div class="questions__input">
                        <label>
                            <input type="text" placeholder="+7 ХХХ ХХХ ХХ ХХ" name="phone">
                        </label>
                    </div>
                    <button class="btn">Отправить заявку</button>
                </div>
            </form>
        </div>
    </div>
</section>
<section id="branches">
    <div class="branches__title">
        <h2>наши филиалы</h2>
    </div>
    <div class="branches__name">
        <?php the_field('block_10_address'); ?>
    </div>
    <div class="branches__scroll">
        <div class="branches__map">
            <img src="<?php the_field('block_10_map'); ?>" alt="">
        </div>
    </div>
</section>

<?php get_footer(); ?>