<?php
/**
 * Template Name: Front Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sullivan_Entertainment
 */

get_header();
?>

    <div id="primary" class="content-area">
    <div id="main-video">
            <div class="button-img-wrap">
                <img src="<?php
echo get_template_directory_uri();
?>/static-images/anne-logo-white.png" alt="anne-logo" class="main-logo">
                <div class="splash-btn-wrap">
                    <a href="https://gazebotv.com/product-detail/24394">WATCH ONLINE</a>
                    <a href="https://shopatsullivan.com/dvds/anne-of-green-gables.html">BUY DVDS & BLU-RAY</a>
                </div>
			</div>
</div>
        <main id="main" class="site-main container">
            
            <?php
echo do_shortcode('[vidbg container="#main-video" mp4="https://anneofgreengables.com/wp-content/uploads/2018/04/anne-1-trailer-h264-1.mp4" webm="https://anneofgreengables.com/wp-content/uploads/2018/04/new-anne-trailer.webm" poster=”#” muted="true" loop="true"]');
?>

<h1>THE ANNE OF GREEN GABLES FILMS ENCOMPASS 200 HOURS OF SULLIVAN <br/><a href="#">PERIOD DRAMA</a></h1>
       <h3 class="section-header">The Films</h3>
<div class="row anne-container">
<div class="col-lg-3 col-md-6">
<a href="/films/#anne-of-green-gables" class="anne-info-wrapper">
<div class="front-img-wrap"><img class="aligncenter wp-image-29234 size-full" src="https://anneofgreengables.com/wp-content/uploads/2018/03/aogg.jpg" alt="anne of green gables movie" width="260" height="390" />
<div class="anne-info">
<p class="anne-head1">1985</p>
<p class="anne-head">Runtime</p>
<p>195 Minutes</p>
</div>
</div>

</a>
</div>
<div class="col-lg-3 col-md-6">
<a href="/films/#anne-of-avonlea" class="anne-info-wrapper">
<div class="front-img-wrap"><img class="aligncenter wp-image-29235 size-full" src="https://anneofgreengables.com/wp-content/uploads/2018/03/aogg_02.jpg" alt="anne of avonlea movie" width="260" height="390" />
<div class="anne-info">
<p class="anne-head1">1987</p>
<p class="anne-head">Runtime</p>
<p>232 Minutes</p>

</div>
</div>

</a>
</div>
<div class="col-lg-3 col-md-6">
<a href="/films/#anne-the-continuing-story" class="anne-info-wrapper">
<div class="front-img-wrap"><img class="aligncenter wp-image-29236 size-full" src="https://anneofgreengables.com/wp-content/uploads/2018/03/aogg_03.jpg" alt="anne the continuing story movie" width="260" height="390" />

<div class="anne-info">
<p class="anne-head1">2000</p>
<p class="anne-head">Runtime</p>
<p>185 Minutes</p>

</div></div>
</a>
</div>
<div class="col-lg-3 col-md-6">
<a href="/films/#anne-a-new-beginning" class="anne-info-wrapper">
<div class="front-img-wrap"><img class="aligncenter wp-image-29237 size-full" src="https://anneofgreengables.com/wp-content/uploads/2018/03/aogg_04.jpg" alt="a new beginning movie" width="260" height="390" /></div>
<div class="anne-info">
<p class="anne-head1">2008</p>
<p class="anne-head">Runtime</p>
<p>144 Minutes</p>

</div></a>

</div>
</div>
<h3 class="product-heading product-heading3">The Characters</h3>

<ul class="main-carousel character-slider">
    <li class="carousel-cell character-slide col-lg-2 col-md-4 col-sm-12">
        <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/static-images/anne-1.jpg">
            <p>Anne Shirley</p>
        </a>
    </li>
    <li class="carousel-cell character-slide col-lg-2 col-md-4 col-sm-12">
        <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/static-images/gilbert-1.jpg">
            <p>Gilbert Blythe</p>        
        </a>
    </li>
    <li class="carousel-cell character-slide col-lg-2 col-md-4 col-sm-12">
        <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/static-images/marilla-1.jpg">
            <p>Marilla Cuthbert</p>
        </a>
    </li>
    <li class="carousel-cell character-slide col-lg-2 col-md-4 col-sm-12">
        <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/static-images/matthew-1.jpg">
            <p>Matthew Cuthbert</p>
        </a>
    </li>
    <li class="carousel-cell character-slide col-lg-2 col-md-4 col-sm-12">
        <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/static-images/diana-1.jpg">
            <p>Diana Berry</p>
        </a>
    </li>
    <li class="carousel-cell character-slide col-lg-2 col-md-4 col-sm-12">
        <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/static-images/rachellynde-1.jpg">
            <p>Rachel Lynde</p>
        </a>
    </li>
    <li class="carousel-cell character-slide col-lg-2 col-md-4 col-sm-12">
        <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/static-images/mrharris-1.jpg">
            <p>Morgan Harris</p>
        </a>
    </li>
    <li class="carousel-cell character-slide col-lg-2 col-md-4 col-sm-12">
        <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/static-images/mrsharris-1.jpg">
            <p>Mrs.Harris</p>
        </a>
    </li>
    <li class="carousel-cell character-slide col-lg-2 col-md-4 col-sm-12">
        <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/static-images/youngeanne-1.jpg">
            <p>Young Anne</p>
        </a>
    </li>
    <li class="carousel-cell character-slide col-lg-2 col-md-4 col-sm-12">
        <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/static-images/ameliathomas-1.jpg">
            <p>Amelia Thomas</p>
        </a>
    </li>
</ul>

<h3 class="product-heading product-heading1">OFFICIAL ANNE COLLECTIBLES</h3>
<ul class="main-carousel collectible-slider">
<?php
$args = array(
    'post_type' => 'collectibles', // Your custom post type
    'posts_per_page' => '8', // Change the number to whatever you wish
    'order_by' => 'date', // Some optional sorting
    'order' => 'ASC', 
    );
    $new_query = new WP_Query ($args);
    if ($new_query->have_posts()) {
        while($new_query->have_posts()){
            $new_query->the_post();
            echo '<li class="carousel-cell collectible-cell col-md-3 test">';
            echo the_post_thumbnail('thumbnail') . '<br/>';
            echo '<p class="collectible-title">' . the_title() . '</p>';
            echo '</li>';
        }
    }
    wp_reset_postdata();
?>
</ul>

<p style="text-align: center;">  <a href="http://shopatsullivan.com"><img class="wp-image-1120 size-medium aligncenter" src="https://anneofgreengables.com/wp-content/uploads/2018/03/shopatsullivan_logo_2018_500px-300x123.png" alt="" width="300" height="123" /></a></p>


<h3 class="product-heading product-heading2">STREAM ONLINE ANYTIME</h3>
<div class="gaz-tv-wrap">
    <img class="alignnone size-full wp-image-29564" src="https://anneofgreengables.com/wp-content/uploads/2018/04/gazebo_devices1.jpg" alt="" alt="watch now, new movies out, anne of green gables movies" />
</div>
<div class="gazebo-text">
<h3 class="gazebo-text" style="text-align: center; text-transform: none;">Enjoy Sullivan Entertainment's original series, movies, documentaries and more available for the first time online! Gazebo TV is available on iOS, Apple TV, Android and Roku. Samsung Smart TV coming soon.</h3>
<div class="film-wrapper"><a id="gazebo-btn" href="https://gazebotv.com">Watch Now </a></div>
</div>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();