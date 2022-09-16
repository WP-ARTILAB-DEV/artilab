<section id="contact-us" class="contact-us">
  <div class="container">
    <div class="contact-us-wrap">
      <div class="contact-us-form">
        <div class="contact-us-form-wrap">

          <div class="contact-us-form__title">
            Зв'яжіться з нами
          </div>
          <?php if ( get_field('title_question') ) : ?>
          <?php /* echo get_field('title_question');*/ ?>
          <?php endif; ?>

          <!-- /.contact-us-form__title -->
          <?php if ( get_field('description_question') ) : ?>
          <p class="contact-us-form__text">
            <?php echo get_field('description_question'); ?>
          </p>
          <?php endif; ?>

          <?= do_shortcode( '[contact-form-7 id="5" title="Contact us popup" html_class="contact-us-form-inputs"]' ); ?>

          <!-- /.contact-us-form-inputs -->
        </div>
        <!-- /.contact-us-form-wrap -->
      </div>
      <!-- /.contact-us-form -->

      <div class="contact-us-banner">
        <img src="<?=  get_template_directory_uri() ?>/assets/img/logo-form.svg" alt="" class="contact-us-banner__img">
      </div>
      <!-- /.contact-us-banner -->

    </div>
    <!-- /.contact-us-wrap -->
  </div>
  <!-- /.container -->
</section>
<!-- /.contact-us -->