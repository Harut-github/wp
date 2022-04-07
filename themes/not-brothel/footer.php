<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Not-Brothel
 */

?>

<footer>
    <div class="container">
        <div class="footer__main">
            <div class="footer__flex">
                <div class="footer__logo">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php the_field('footer_img',6); ?>" alt="">
                    </a>
                </div>
                <div class="footer__block">
                    <div class="footer__menu">
                        <strong>Меню:</strong>
                        <div class="footer__href">
                            <ul>
                                <li><a href="javascript:;">О бизнесе</a></li>
                                <li><a href="javascript:;">О франшизе</a></li>
                                <li><a href="javascript:;">Что входит во франшизу</a></li>
                                <li><a href="javascript:;">Преимущества</a></li>
                            </ul>
                            <ul>
                                <li><a href="javascript:;">Стоимость</a></li>
                                <li><a href="javascript:;">Этапы запуска франшизы</a></li>
                                <li><a href="javascript:;">Ответы на вопросы</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer__contact">
                        <strong>Контакты:</strong>
                        <a href="tel:<?php the_field('footer_phone',6); ?>" class="footer__phone"><?php the_field('footer_phone',6); ?></a>
                        <a href="mailto:<?php the_field('footer_email',6); ?>" class="footer__mail"><?php the_field('footer_email',6); ?></a>
                        <a href="javascript:;" data-val="modal" class="open_modal btn button">Оставить заявку</a>
                    </div>
                </div>
            </div>
            <p>© <?php echo date('Y'); ?> «Не бордель». Все права защищены. </p>
            <p>РАЗРАБОТАННО <a href="">LEMON MEDIA</a></p>
        </div>
    </div>
</footer>

<!-- Coll -->
<div id="modal" class="modal">
    <div class="modal-content">
        <div class="modal-registration">
            <div class="close"></div>
            <form class="form-send">
  				<input type="hidden" name="admin_email" value="<?php the_field('admin_email',6); ?>"/>
  				<input type="hidden" name="subject" value="Не бордель"/>
                <h3>Оставить заявку</h3>
                <p>
                    Оставьте свои данные и мы вам обязательно перезвоним
                </p>
                <div class="request-inp">
                    <label>
                        <input type="text" placeholder="Ваше имя" name="name">
                    </label>
                </div>
                <div class="request-inp">
                    <label>
                        <input type="text" placeholder="Номер телефона" name="phone">
                    </label>
                </div>
                <button>Отправить заявку</button>
            </form>
        </div>
    </div>
</div>


<!-- Quiz -->
<div id="franchisee" class="modal">
    <div class="modal-content">
        <div class="modal-registration">
            <div class="close"></div>
            <form class="form-send">
  				<input type="hidden" name="admin_email" value="<?php the_field('admin_email',6); ?>"/>
  				<input type="hidden" name="subject" value="Не бордель"/>
                <h3>Анкета франчайзи</h3>
                <p>
                    Заполните анкету и мы свяжемся с вами в ближайшее время
                </p>
                <div class="cont__one">
                    <div class="cont__info">
                        <span>1. Контактные данные</span>
                    </div>
                    <div class="request-inp">
                        <label>
                            <input type="text" placeholder="Компания ип/физ " name="Компания">
                        </label>
                    </div>
                    <div class="request-inp">
                        <label>
                            <input type="text" placeholder="ФИО" name="ФИО">
                        </label>
                    </div>
                    <div class="request-inp">
                        <label>
                            <input type="text" placeholder="Ваш возраст" name="возраст">
                        </label>
                    </div>
                    <div class="request-inp">
                        <label>
                            <input type="text" placeholder="Номер телефона" name="телефона">
                        </label>
                    </div>
                    <div class="request-inp">
                        <label>
                            <input type="text" placeholder="Электронная почта" name="почта">
                        </label>
                    </div>
                    <div class="numb-franc">
                        <strong>1</strong><span>/4</span>
                    </div>
                    <div class="quiz_btn_next_2">далее</div>
                </div>
                <div class="cont__two">
                    <div class="cont__info">
                        <span>2. о франшизе</span>
                    </div>
                    <div class="request-inp">
                        <label>
                            <input type="text" placeholder="В каком городе планируете отрыть тематические апартаменты?" name="В каком городе планируете отрыть тематические апартаменты?">
                        </label>
                    </div>
                    <div class="request-inp">
                        <label>
                            <input type="text" placeholder="Какой опыт в бизнесе вы имеете? (Сфера)" name="Какой опыт в бизнесе вы имеете?">
                        </label>
                    </div>
                    <div class="request-inp">
                        <label>
                            <input type="text" placeholder="Располагаете ли вы помещением для открытия тематических апартаментов? (Краткое описание) " name="Располагаете ли вы помещением для открытия тематических апартаментов? (Краткое описание)">
                        </label>
                    </div>
                    <div class="request-inp">
                        <label>
                            <input type="text" placeholder="Ориентировочный размер денежных средств, который вы планируете вложить в проект " name="Ориентировочный размер денежных средств, который вы планируете вложить в проект">
                        </label>
                    </div>
                    <div class="numb-franc">
                        <strong>2</strong><span>/4</span>
                    </div>
                    <div class="tow-btn">
                        <div class="quiz_btn_next_1 liner-bord">назад</div>
                        <div class="quiz_btn_next_3">далее</div>
                    </div>
                </div>
                <div class="cont__tree">
                    <div class="cont__info">
                        <span>2. о франшизе</span>
                    </div>
                    <div class="request-inp">
                        <label>
                            <input type="date" placeholder="Желаемые сроки начала сотрудничества " name="Желаемые сроки начала сотрудничества">
                        </label>
                    </div>
                    <div class="request-inp">
                        <label>
                            <input type="text" placeholder="Опыт во франчайзинге?" name="Опыт во франчайзинге?">
                        </label>
                    </div>
                    <div class="request-inp">
                        <label>
                            <input type="text" placeholder="Как вы планируете вести бизнес: с участием партнеров или самостоятельно?" name="Как вы планируете вести бизнес: с участием партнеров или самостоятельно?">
                        </label>
                    </div>
                    <div class="request-inp">
                        <label>
                            <input type="text" placeholder="Из каких источников узнали о нас ?" name="Из каких источников узнали о нас ?">
                        </label>
                    </div>
                    <div class="numb-franc">
                        <strong>3</strong><span>/4</span>
                    </div>
                    <div class="tow-btn">
                        <button class="quiz_btn_next_2 liner-bord">назад</button>
                        <button class="quiz_btn_next_4">далее</button>
                    </div>
                </div>
                <div class="cont__four">
                    <div class="cont__info">
                        <span>3. ваши вопросы</span>
                    </div>
                    <div class="request-textarea">
                        <label>
                            <textarea placeholder="Ваши вопросы" name="Ваши вопросы"></textarea>
                        </label>
                    </div>
                    <div class="request-inp">
                        <label>
                            <input type="date" placeholder="Дата" name="Дата">
                        </label>
                    </div>

                    <div class="numb-franc">
                        <strong>4</strong><span>/4</span>
                    </div>
                    <div class="tow-btn">
                        <div class=" quiz_btn_next_3 liner-bord">назад</div>
                        <button>отправить</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Thanks -->
<button style="display:none;" data-val="successfully" class="open_modal btn"></button>
<div id="successfully" class="modal">
    <div class="modal-content">
        <div class="modal-registration">
            <div class="close"></div>
            <div class="success-sec">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/ptich.png" alt="">
            </div>
            <strong>Заявка успешно отправлена</strong>
            <p>
                В ближайшее время с вами свяжутся наши менеджеры
            </p>

            <a href="<?php echo home_url(); ?>">На главную</a>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
<script src="<?php echo bloginfo('template_url'); ?>/assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/js/swiper-bundle.min.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/js/jquery.fancybox.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/js/jquery.magnific-popup.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/assets/js/script.js"></script>
<script src="<?php echo bloginfo('template_url'); ?>/js/form.js"></script>

</body>
</html>
