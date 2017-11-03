
<?php
get_header();
?>

<div class="container-fluid">
  <div class="logo text-center"><a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="img-fluid" alt="Div Designs"></a></div>
  <div class="text-center py-4"><a class="navbar-brand js-scroll-trigger" href="#about"><img src="<?php echo get_template_directory_uri(); ?>/img/div-photo.jpg" class="img-fluid rounded-circle" alt="Divya "></a></div>
</div>

<div class="container-fluid text-center" id=sec2>
  <p>Hi, my name is <strong>Divya,</strong> welcome to my website!</p>
  <p>I create attractive and functional websites and graphic designs</p>
</div>
<div class="container-fluid text-center" id="sec3">
  <div class="sec4">
    <div class="row">
      <div class="col-sm-3 pic2">
        <div>
          <a class="js-scroll-trigger big" href="#website"><img src="<?php echo get_template_directory_uri(); ?>/img/website.png" class="img-fluid" alt="website circle"> </a>
        </div>
      </div>
      <div class="col-sm-3 pic1">
        <div>
          <a class="js-scroll-trigger big" href="#graphic"><img src="<?php echo get_template_directory_uri(); ?>/img/graphic.png" class="img-fluid" alt="website circle"> </a>
        </div>
      </div>
      <div class="col-sm-3 pic1">
        <div>
          <a class="js-scroll-trigger big" href="#logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logoart.png" class="img-fluid" alt="website circle"> </a>
        </div>
      </div>
      <div class="col-sm-3 pic1 hovereffect">
        <div>
          <a class="js-scroll-trigger big" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/ppt.png" class="img-fluid" alt="website circle"> </a>
        </div>
      </div>
    </div>
  </div>
</div>

<section id="about">
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-12">
        <h1 class="text-center">About me</h1>
        <p>Hi, I am Divya, a passionate and creative, web/graphic/digital designer. I love coding and strive to create designs which are innovative and impactful. I enjoy experimenting with animation and intergrate these into my designs.I have extensive experience working in cutomer support for an offshore advertising/marketing company. </p>
        <p>Apart from my bachelors degree in Visual Communications, I am currently persuing a certificate IV in Web-based Technologies @ Holmesglen Institute of TAFE. I have a broad understanding of many graphic design/website software and tools including HTML5, CSS3, jQuery, JavaScript, Bootstrap, PHP, MySQL, Adobe Illustrator, Adobe Photoshop and Wordpress among others. </p>
      </div>
    </div>
  </div>
</section>

<section id="website">
  <h1 class="text-center">Website Designs</h1>
  <div class="container-fluid text-center">
    <div class="row">
      <div class="col-sm-3 ho1">
        <div class="card">
          <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/orange.jpg" alt="Card image cap">
          <div class="overlay1">
            <div class="col">
              <div class="card">
                <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/html1.jpg" width="100%"  alt="Card image cap">
              </div>
            </div>
          </div>
          <div class="card-body">

            <p class="listing">Incredible Himalayas</p>

              <a href="http://divdesigns.com.au/incredible-himalayas/" target="_blank"> <p class="site">View Site</p></a>
            <button type="button" class="btn btn-secondary btn-sm first">View on GitHub</button>
          </div>
        </div>
      </div>
      <hr>
      <div class="col-sm-3 ho1">
        <div class="card">
          <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/bootstrap.jpg" alt="Card image cap">
          <div class="overlay1">
            <div class="col">
              <div class="card">
                <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/triangle.jpg" width="100%"  alt="Card image cap">
              </div>
            </div>
          </div>
          <div class="card-body">
            <p class="listing ">Impossible Triangles</p>
                          <a href="http://divdesigns.com.au/impossible-triangles/" target="_blank"> <p class="site">View Site</p></a>
            <button type="button" class="btn btn-secondary btn-sm first">View on GitHub</button>
          </div>
        </div>
      </div>
      <hr>
      <div class="col-sm-3 ho1">
        <div class="card">
          <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/word.jpg" alt="Card image cap">
          <div class="overlay1">
            <div class="col">
              <div class="card">
                <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/div.jpg" width="100%"  alt="Card image cap">
              </div>
            </div>
          </div>
          <div class="card-body">
            <p class="listing ">Div Designs</p>
                          <a href="http://divdesigns.com.au/" target="_blank"> <p class="site">View Site</p></a>
            <button type="button" class="btn btn-secondary btn-sm first">View on GitHub</button>
          </div>
        </div>
      </div>
      <hr>
      <div class="col-sm-3 ho1">
        <div class="card">
          <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/word.jpg" alt="Card image cap">
          <div class="overlay1">
            <div class="col">
              <div class="card">
                <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/kaivelai.jpg" width="100%"  alt="Card image cap">
              </div>
            </div>
          </div>
          <div class="card-body">
            <p class="listing ">Kaivelai</p>
                          <a href="http://divdesigns.com.au/kaivelai/" target="_blank"> <p class="site">View Site</p></a>
            <button type="button" class="btn btn-secondary btn-sm first">View on GitHub</button>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section id="graphic" class="text-center">
  <h1>Graphic Design Works</h1>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <?php echo photo_gallery(5); ?>
      </div>
    </div>
  </div>

</section>

<section id="logo" class="text-center">
  <h1>Logo Design Works</h1>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">

        <?php echo photo_gallery(4); ?>
      </div>
    </div>
  </div>

</section>

<section id="contact" class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">

        <h1>Want to contact me ??</h1>
        <br>
        <button type="button" class="btn btn-dark btn-lg"><a href="tel:+61401870662">Call Now!</a></button>
        <h1>or</h1>
        <h2>leave me a message</h2>
        <i class="fa fa-arrow-right fa-5x" aria-hidden="true"></i>
      </div>

      <div class="col-sm-6">
        <?php echo do_shortcode( '[contact-form-7 id="59" title="Contact form 1"]' ); ?>
      </div>
    </div>
  </div>
</section>



<?php get_footer();?>
