<div id="contact">
  <div class="container">
    <div class="row">
      <!--div class="span7">
        <h2> Blog Feed </h2>
        <style>
          #blog p{color: #ccc;}
        </style>
        <div id="blog">
          <?php $my_query = new WP_Query('showposts=5&post_type=post&order=DESC'); ?>  
          <?php if($my_query->have_posts()) : ?><?php while($my_query->have_posts()) : $my_query->the_post(); ?>
            <div class="post">
              <small style="color:#666;margin:0;line-height:0"><?php the_date(); ?></small>
              <br />
              <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
              <?php the_excerpt(); ?>
            </div>
          <?php endwhile; endif; wp_reset_query(); ?>
        </div>
      </div-->
      <div class="span5">
        <h2 id="contact-info">Contact</h2>
        <h3> Do you want to <a class="" href="https://twitter.com/href">get in touch with us</a> ? For media contact, media@crowdsourcingweek.com</h3>
      </div>
      <div class="span4">
        <h2>Share it</h2>
        <? require '_add-this.php' ?>
      </div>
      <div class="span3" id="ludvk">
        <a href="www.ludvikplus.com">
          <img src="wp-content/themes/csweek/images/logo_ludvk.jpg"/>
        </a>
        <p>©2012 Crowdsourcing Week</p>
        <span>media@crowdsourcingweek.com</span>
      </div>
      </div>
    </div>
  </div>
</div>
