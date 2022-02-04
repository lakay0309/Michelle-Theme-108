<!--Header Template-->
<?php get_header(); ?>


<div id="topnavbarcontainer" class="container-fluid">
    <nav id="topnavbar" class="nav topnav justify-content-end">

      <?php
        $args = array(
          'theme_location' => 'primary'
        );
        wp_nav_menu($args);
        ?>
      <a class="nav-link icon" href="javascript:void(0);">
        <i class="fas fa-bars"></i>
      </a>
    </nav>
  </div>

    <!--main section-->
    <section class="container mainarea">
      <!-- <ul>
        <?php
          // $num = 0;
          //
          // while($num < 5){
          //   echo '<li>List Item</li>';
          //   $num++;
          // }



        ?>
      </ul> -->

      <?php

      while(have_posts()){
        the_post(); ?>
        <h1><?php the_title(); ?></h1>
      <?php the_content();
      }

       ?>



    </section><!--mainarea section end-->








<!--Footer template file-->
<?php get_footer(); ?>
