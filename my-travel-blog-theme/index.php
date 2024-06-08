<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
    <header>
        <h1><?php bloginfo('name'); ?></h1>
        <nav>
            <p><a href="">NEW</a></p>
            <p><a href="">COLUMN</a></p>
            <p><a href="">SERIES</a></p>
            <p><a href="">Q&A</a></p>
            <p><a href="">CONTACT</a></p>
        </nav>
    </header>

    <section id="threephotos">
        <div class="main-article">
            <div class="photo-size">
                <img src="<?php echo get_template_directory_uri(); ?>/logo/pic1.png" alt="sea">
            </div>
            <p>タイトルテキストテキストテキストテキストテキストテキストテキスト</p>
            <a href="" class="readmore">READ MORE</a>
        </div>
        <div class="main-article">
            <div class="photo-size">
                <img src="<?php echo get_template_directory_uri(); ?>/logo/pic2.png" alt="nighttown">
            </div>
            <p>タイトルテキストテキストテキストテキストテキストテキストテキスト</p>
            <a href="" class="readmore">READ MORE</a>
        </div>
        <div class="main-article">
            <div class="photo-size">
                <img src="<?php echo get_template_directory_uri(); ?>/logo/pic3.png" alt="nightpool">
            </div>
            <p>タイトルテキストテキストテキストテキストテキストテキストテキスト</p>
            <a href="" class="readmore">READ MORE</a>
        </div>
    </section>

    <section id="both-sides">
        <div id="left-side">
            <!-- left-article1 -->
            <div class="left-article">
                <p class="lefttitle">タイトルテキストテキストテキストテキストテキスト</p>
                <div class="date">
                    <p>2020/01/01</p>
                    <p>カテゴリ1</p>
                </div>
                <article>
                    <div class="leftphoto">
                        <img src="<?php echo get_template_directory_uri(); ?>/logo/pic4.png" alt="resort">
                    </div>
                    <p class="left-description">
                        本文テキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキスト テキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキ ストテキストテキストテキストテキストテキスト
                    </p>
                </article>
                <a href="" class="readmore">READ MORE</a>
            </div>
            <!-- left-article2 -->
            <div class="left-article">
                <p class="lefttitle">タイトルテキストテキストテキストテキストテキスト</p>
                <div class="date">
                    <p>2020/01/01</p>
                    <p>カテゴリ1</p>
                </div>
                <article>
                    <div class="leftphoto">
                        <img src="<?php echo get_template_directory_uri(); ?>/logo/pic5.png" alt="nature">
                    </div>
                    <p class="left-description">
                        本文テキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキスト テキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキ ストテキストテキストテキストテキストテキスト
                    </p>
                </article>
                <a href="" class="readmore">READ MORE</a>
            </div>
            <!-- left-article3 -->
            <div class="left-article">
                <p class="lefttitle">タイトルテキストテキストテキストテキストテキスト</p>
                <div class="date">
                    <p>2020/01/01</p>
                    <p>カテゴリ1</p>
                </div>
                <article>
                    <div class="leftphoto">
                        <img src="<?php echo get_template_directory_uri(); ?>/logo/pic6.png" alt="sunresort">
                    </div>
                    <p class="left-description">
                        本文テキストテキストテキストテキストテキストテキストテキストテキスト
                        テキストテキスト テキストテキストテキストテキストテキストテキストテキスト
                        テキストテキストテキストテキ ストテキストテキストテキストテキストテキスト
                    </p>
                </article>
                <a href="" class="readmore">READ MORE</a>
            </div>
        </div>

        <div id="right-side">
            <div class="profile">
                <div class="author">
                    <img src="<?php echo get_template_directory_uri(); ?>/logo/pic7.png" alt="face">
                </div>
                <p class="name">Name Name</p>
                <p class="self-introduction">
                    プロフィールテキストテキストテキストテキストテキストテキストテキ
                    ストテキストテキストテキストテキストテキストテキストテキ
                    ストテキストテキストテキストテキストテキストテキストテキ
                    ストテキストテキストテキストテキストテキストテキストテキ
                    ストテキストテキスト
                </p>
            </div>
            <!-- Ranking -->
            <div class="ranking">
                <p class="right-title">Ranking</p>
                <article>
                    <div class="rightphoto">
                         <img src="<?php echo get_template_directory_uri(); ?>/logo/pic8.png" alt="cafe">
                     </div>
                     <p>
                        タイトルテキストテキストテキストテキストテキストテキスト
                     </p>
                 </article>
                 <article>
                    <div class="rightphoto">
                         <img src="<?php echo get_template_directory_uri(); ?>/logo/pic9.png" alt="street">
                     </div>
                     <p>
                        タイトルテキストテキストテキストテキストテキストテキスト
                     </p>
                 </article>
                 <article>
                    <div class="rightphoto">
                         <img src="<?php echo get_template_directory_uri(); ?>/logo/pic10.png" alt="whiteview">
                     </div>
                     <p>
                        タイトルテキストテキストテキストテキストテキストテキスト
                     </p>
                 </article>
            </div>
            <!-- Archive -->
            <div class="archive">
                <p class="right-title">Archive</p>
                <p><a href="">XXXX年XX月(XX)</a></p>
                <p><a href="">XXXX年XX月(XX)</a></p>
                <p><a href="">XXXX年XX月(XX)</a></p>
                <p><a href="">XXXX年XX月(XX)</a></p>
                <p><a href="">XXXX年XX月(XX)</a></p>
                <p><a href="">XXXX年XX月(XX)</a></p>
                <p><a href="">XXXX年XX月(XX)</a></p>
                <p><a href="">XXXX年XX月(XX)</a></p>
                <p><a href="">XXXX年XX月(XX)</a></p>
                <p><a href="">XXXX年XX月(XX)</a></p>
                <p><a href="">XXXX年XX月(XX)</a></p>
                <p><a href="">XXXX年XX月(XX)</a></p>
                <p><a href="">XXXX年XX月(XX)</a></p>
                <p><a href="">XXXX年XX月(XX)</a></p>
                <p><a href="">XXXX年XX月(XX)</a></p>
            </div>
        </div>
    </section>

    <section id="back">
        <!-- footer1 -->
        <div class="footer1">
            <div class="about">
                <h2>About</h2>
                <p class="text">テキストテキストテキストテキストテキストテキストテ
                    キストテキストテキストテキスト
                    テキストテキストテ
                    キストテキストテキストテキストテキストテキストテキスト
                    テキスト
                    テキストテキストテキストテキストテキ
                    ストテキストテキストテキストテキストテキスト
                </p>

                <p><a href="">▶プロフィール詳細</a></p>
                <p><a href="">▶お仕事の依頼</a></p>
                <p><a href="">▶お問い合わせ</a></p>
            </div>
            <div class="menu">
                <h2>Menu</h2>
                <p><a href="">NEW</a></p>
                <p><a href="">CATEGORY</a></p>
                <p><a href="">COLUMN</a></p>
                <p><a href="">SERIES</a></p>
                <p><a href="">Q&A</a></p>
            </div>
            <div class="twitter">
                <h2>Twitter</h2>
                <div class="tweetarea">
                    <p>ツイート埋め込みエリア</p>
                </div>
            </div>
        </div>
        <!-- footer2 -->
        <div class="footer2">
            <small>&copy;Travel & Blog</small>
        </div>
    </section>

    <?php wp_footer(); ?>
</body>
</html>
