<?php get_header(); ?>
    <?php get_template_part('includes/menu'); ?>
    <?php get_template_part('includes/header'); ?>

    <div class="c-background--dot">
        <div class="c-background--wave">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 471.833">
                <path class="shape-fill" d="M-21832-16290.018s36.342,7.16,92.715,17.173c133.57,23.722,379.355,63.457,527.4,63.457,210.893,0,426.289-193.964,684.771-188.575s615.109,228.11,615.109,228.11v-471.833h-1920Z" transform="translate(21832 16641.686)"></path>
            </svg>
        </div>

        <article class="p-front-card--left">
            <div class="p-front-card--left__pattern">
                <img class="p-front-card--left__pattern__image1" src="<?php echo get_theme_file_uri('/assets/image/top-tree.jpg'); ?>" alt="うるしの木">
                <img class="p-front-card--left__pattern__layer" src="<?php echo get_theme_file_uri('/assets/image/monyou02.png'); ?>" alt="">
            </div>
            <section class="p-front-card--left__text">
                <h2 class="c-title">天然漆にこだわる</h2>
                <p class="p-front-card--left__text__description c-text u-margin-top--small">化学塗料、漆の吹付塗装の技術が進化している中でも、天然漆にこだわり手塗りの伝統の技法を大切にした
                    漆本来の味わいやぬくもりのある物づくりをすることで日本人が忘れかけている伝統工芸の本筋を正すことが進化と考えています。</p>
                <img class="p-front-card--left__text__image2" src="<?php echo get_theme_file_uri('/assets/image/top-urushi.jpg'); ?>" alt="うるし">
            </section>
        </article>

        <article class="p-front-card--right c-wrapper--left">
            <section class="p-front-card--right__text">
                <h2 class="c-title">指物と乾漆で素地から塗り蒔絵まで一貫した制作</h2>
                <p class="c-text u-margin-top--small">仏壇蒔絵や仏壇修理修繕を行いながら、素地(木地・乾漆)から塗り蒔絵まで一貫した取り組みで厨子や器、
                    漆アクセサリーなどの漆工芸品の制作活動に力をいれオーダーメイドにも対応しています。今の時代に合ったデザインで伝統的な漆の良さを伝えます。</p>
			</section>
			<img class="p-front-card--right__monyou" src="<?php echo get_theme_file_uri('/assets/image/monyou01.png'); ?>" alt="">
            <img class="p-front-card--right__img" src="<?php echo get_theme_file_uri('/assets/image/top-make.jpg'); ?>" alt="制作">
        </article>

        <div class="p-urushi-contents c-wrapper--pc">
            <h2 class="c-title">Urushi Contents</h2>

            <article class="p-urushi-content">
                <div class="c-pattern">
                    <img class="c-pattern__layer--left" src="<?php echo get_theme_file_uri('/assets/image/monyou02.png'); ?>" alt="">
                    <img class="c-pattern__image" src="<?php echo get_theme_file_uri('/assets/image/top-accessory.jpg'); ?>" alt="">
                </div>
                <div class="p-urushi-content__description-area c-wrapper--tab">
                    <section class="p-urushi-content__description-area__text--right">
                        <h3 class="c-title-small">アクセサリー</h3>
                        <p class="c-text u-margin-top">年代を問わずにお使いいただける、シンプルなデザインのアクセサリー<br>
						流行りに流されない特別な品を、末永く身につけていただけたら幸いです。</p>
                    </section>
                    <a href="<?php echo home_url('/archive_accessory/'); ?>" class="p-urushi-content__description-area__button--right c-button--primary" id="p-ripples--effect">
                        <span class="c-button--primary--text">MORE</span>
                        <span class="c-button--primary--line"></span>
                    </a>
                </div>
            </article>

            <article class="p-urushi-content--reverse u-margin-top--urushi-content">
                <div class="p-urushi-content__description-area c-wrapper--tab">
                    <section class="p-urushi-content__description-area__text--left">
                        <h3 class="c-title-small">金継ぎ</h3>
                        <p class="c-text u-margin-top">壊れてしまった大切なものを蘇らせます。金継ぎをすることでより味わい深いものに仕上げます。</p>
                    </section>
                    <a href="<?php echo home_url('/kintsugi/'); ?>" class="p-urushi-content__description-area__button--left c-button--primary" id="p-ripples--effect">
                        <span class="c-button--primary--text">MORE</span>
                        <span class="c-button--primary--line"></span>
                    </a>
                </div>
                <div class="c-pattern">
                    <img class="c-pattern__layer--right" src="<?php echo get_theme_file_uri('/assets/image/monyou02.png'); ?>" alt="">
                    <img class="c-pattern__image" src="<?php echo get_theme_file_uri('/assets/image/top-kintsugi.jpg'); ?>" alt="">
                </div>
            </article>

            <article class="p-urushi-content u-margin-top--urushi-content">
                <div class="c-pattern">
                    <img class="c-pattern__layer--left" src="<?php echo get_theme_file_uri('/assets/image/monyou02.png'); ?>" alt="">
                    <img class="c-pattern__image" src="<?php echo get_theme_file_uri('/assets/image/top-life.jpg'); ?>" alt="">
                </div>
                <div class="p-urushi-content__description-area c-wrapper--tab">
                    <section class="p-urushi-content__description-area__text--right">
                        <h3 class="c-title-small">うるしと生活</h3>
                        <p class="c-text u-margin-top">天然素材のものが身近にあることでぬくもりのある生活をおくりませんか。<br>
						皆様の生活がより豊かになるようなものづくりを心がけています。</p>
                    </section>
                    <a href="<?php echo home_url('/life/'); ?>" class="p-urushi-content__description-area__button--right c-button--primary" id="p-ripples--effect">
                        <span class="c-button--primary--text">MORE</span>
                        <span class="c-button--primary--line"></span>
                    </a>
                </div>
            </article>

            <article class="p-urushi-content--reverse u-margin-top--urushi-content">
                <div class="p-urushi-content__description-area c-wrapper--tab">
                    <section class="p-urushi-content__description-area__text--left">
                        <h3 class="c-title-small">うるしと楽器</h3>
                        <p class="c-text u-margin-top">楽器や楽器付属品に付加価値を、<br>漆の魅力を音楽にのせて伝えます。</p>
                    </section>
                    <a href="<?php echo home_url('/instrument/'); ?>" class="p-urushi-content__description-area__button--left c-button--primary" id="p-ripples--effect">
                        <span class="c-button--primary--text">MORE</span>
                        <span class="c-button--primary--line"></span>
                    </a>
                </div>
                <div class="c-pattern">
                    <img class="c-pattern__layer--right" src="<?php echo get_theme_file_uri('/assets/image/monyou02.png'); ?>" alt="">
                    <img class="c-pattern__image" src="<?php echo get_theme_file_uri('/assets/image/top-music.jpg'); ?>" alt="">
                </div>
            </article>

            <br><br><br><br><br>

            <!-- informationのギャラリー表示 -->
            <article class="p-front-posts c-wrapper--tab">
                <div class="p-front-posts__archive">
                    <?php get_template_part('/includes/archive-information')?>
                    <img class="p-front-posts__monyou" src="<?php echo get_theme_file_uri('/assets/image/monyou01.png'); ?>" alt="">
                </div>
            </article>

            <br><br><br><br><br>

            <!-- 投稿のギャラリー表示 -->
            <article class="p-front-posts c-wrapper--tab">
                <div class="p-front-posts__archive">
                    <?php get_template_part('/includes/archive-post')?>
                    <img class="p-front-posts__monyou" src="<?php echo get_theme_file_uri('/assets/image/monyou01.png'); ?>" alt="">
                </div>
            </article>

            <br><br><br><br><br><br><br>
        </div>

    </div>
<?php get_footer(); ?>
