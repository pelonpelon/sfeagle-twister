<!DOCTYPE html>
<?php
   define('WP_USE_THEMES', false);
   require('./wp/wp-blog-header.php');
?>
<!--if IE 8 html.no-js.lt-ie9(lang='en')-->
<!-- [if gt IE 8] <! html.no-js(lang='en')-->
<!-- <![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>TWISTER</title>
  <link rel="stylesheet" href="css/app.css">
  <script src="js/vendor/custom.modernizr.js"></script>
</head>
<body>
  <div class="row">
    <div class="large-3 columns medium-5 columns small-12 columns">
      <div class="row">
        <div class="logo"><img src="img/logo.gif"></div>
      </div>
      <div class="row">
        <div class="nav">
          <ul>
            <li>This Week</li>
            <li>Live Music</li>
            <li>Hoodies & Tees</li>
            <li>Jobs</li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="widgets">
          <div class="twitter"><a class="twitter-timeline"
   data-dnt="true"
   href="https://twitter.com/search?q=%23sfe398"
   data-widget-id="345087178923188224"
   data-chrome="noheader nofooter noborders transparent">#sfe398</a>

<script>
    !function(d,s,id){
        var js,
        fjs=d.getElementsByTagName(s)[0];
        // p=/^http:/.test(d.location)?'http':'https';
        if (!d.getElementById(id)) {
            js=d.createElement(s);
            js.id=id;
        //    js.src=p+"://platform.twitter.com/widgets.js";
            js.src="js/vendor/twitter.js";
            fjs.parentNode.insertBefore(js,fjs);
        }}(document,"script","twitter-wjs");

</script>



          </div>
        </div>
      </div>
    </div>
    <div class="large-5 columns medium-7 columns small-12 columns">
      <div class="row">
        <div class="tease">
          <div>
            <?php global $query_string; // required
            $category_id = get_cat_ID('Anouncement');
            $posts = query_posts($query_string.'&cat=$category_id'); ?>
            
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            
                <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <?php the_content(); ?>
                </div>
                
            <?php endwhile; ?>
            
                <div class="navigation">
                    <div class="next-posts"><?php next_posts_link(); ?></div>
                    <div class="prev-posts"><?php previous_posts_link(); ?></div>
                </div>
                
            <?php else : ?>
            
                <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                    <h1>Not Found</h1>
                </div>
                
            <?php endif; ?>
            
            <?php wp_reset_query(); ?>
            
          </div>
        </div>
      </div>
    </div>
    <div class="large-4 columns medium-12 columns small-12 columns">
      <div class="row">
        <div class="events">
          <p>events</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="large-12 columns medium-12 columns small-12 columns">
      <div class="flyers">
        <p>flyers</p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="large-12 columns medium-12 columns small-12 columns">
      <div class="footer">
        <p>footer</p>
      </div>
    </div>
  </div>
  <script>
    document.write('<script src=' +
    ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
    '.js><\/script>')
  </script>
  <script src="js/foundation.min.js"></script><!--
  <script src="js/foundation/foundation.js"></script>
  <script src="js/foundation/foundation.alerts.js"></script>
  <script src="js/foundation/foundation.clearing.js"></script>
  <script src="js/foundation/foundation.cookie.js"></script>
  <script src="js/foundation/foundation.dropdown.js"></script>
  <script src="js/foundation/foundation.forms.js"></script>
  <script src="js/foundation/foundation.joyride.js"></script>
  <script src="js/foundation/foundation.magellan.js"></script>
  <script src="js/foundation/foundation.orbit.js"></script>
  <script src="js/foundation/foundation.reveal.js"></script>
  <script src="js/foundation/foundation.section.js"></script>
  <script src="js/foundation/foundation.tooltips.js"></script>
  <script src="js/foundation/foundation.topbar.js"></script>
  <script src="js/foundation/foundation.interchange.js"></script>
  <script src="js/foundation/foundation.placeholder.js"></script>-->
  <script>$(document).foundation();</script>
  <script>
    !function(){
        var cssLink = document.createElement("link");
        cssLink.href = "style.css";
        cssLink.rel = "stylesheet";
        cssLink.type = "text/css";
        frames['twitter-widget-0'].document.body.appendChild(cssLink);
    }();
  </script>
</body>