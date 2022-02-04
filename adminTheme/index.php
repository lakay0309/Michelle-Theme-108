<?php get_header(); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/master.css">
    <meta charset="utf-8">
    <title>Shellz Designs</title>
  </head>
  <body>

    <header class="site_header">
      <div class="header_left">
        <img id="logo" src="./assets/Asset 17.png" alt="Logo"/>
      </div>
    </header>

    <nav>
      <div>
        <ul class="navbar">
          <li><a href="#" class="active">Home</a></li>
          <li><a href="./portfolio.html">Portfolio</a></li>
          <li><a href="./about.html">About Me</a></li>
          <li><a href="./contact.html">Contact</a></li>
        </ul>
      </div>
    </nav>

    <main>
      <section>
        <?php
        //argument for about-me category
        $args = array(
          'category_name' => 'about-me'
         );

         $aboutpost = new WP_Query($args);

        if($aboutpost->have_posts()){
          while($aboutpost->have_posts()){
            $aboutpost->the_post();
        }
        ?>
        <div class="section_content">
          <h3>Welcome to Shellz Designs</h3> <br/>
        </div>
        <div> <br/>
          <p><a href="./portfolio.html">Some of My Work</a></p>
          <div id="controls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./assets/ClassicFlyer.jpg" class="w-50" alt="classic_flyer">
            </div>
            <div class="carousel-item">
              <img src="./assets/PuddinPop.jpg" class="w-50" alt="logo">
            </div>
            <div class="carousel-item">
              <img src="./assets/bodyarmor.jpg" class="w-50" alt="bodyarmor">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <?php
        }
      }
      wp_reset_postdata();
      ?>
      </section>

    </main>

    <footer>
      <div class="footer_left">
        <p>&copy; 2021 FIRST Institue</p>
      </div>
      <div class="footer_right">
        <!-- <h5>Hope you enjoy!</h5> -->
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>

<?php wp_footer() ?>
