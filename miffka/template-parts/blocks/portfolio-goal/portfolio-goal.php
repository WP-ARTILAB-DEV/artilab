<section class="portfolio-goal">
  <div class="container">
    <div class="portfolio-goal-wrap">
      <div class="portfolio-goal-left">

        <div class="portfolio-goal-left-wrap">
          <?php if ( get_field('title_portfolio_goal') ) : ?>
          <div class="portfolio-goal__title">
            <?= get_field('title_portfolio_goal'); ?>
          </div>
          <?php endif; ?>

          <!-- /.portfolio-about__title -->
          <?php if ( get_field('descr_portfolio_goal') ) : ?>
          <div class="portfolio-goal__content">
            <p><?= get_field('descr_portfolio_goal'); ?></p>
          </div>
          <?php endif; ?>

          <!-- /.portfolio-one__content -->

          <a data-fancybox="" data-src="#contact_us_pop_up" href="javascript:;"
            class="portfolio-goal__btn button p-button">Зв'яжіться з нами</a>
          <!-- /.portfolio-one__btn -->

        </div>
        <!-- /.portfolio-goal-left-wrap -->

      </div>
      <!-- /.portfolio-goal-left -->
      <div class="portfolio-goal-right">
        <?php if ( have_rows('list_portfolio_goal') ) : ?>

        <div class="portfolio-goal-right-wrap">
          <?php while( have_rows('list_portfolio_goal') ) : the_row(); ?>
          <div class="portfolio-goal-item">
            <div class="portfolio-goal-item-wrap">
              <div class="portfolio-goal-item__num"><?php the_sub_field('number'); ?></div>
              <!-- /.portfolio-goal-item__num -->
              <div class="portfolio-goal-item__text"><?php the_sub_field('text'); ?></div>
              <!-- /.portfolio-goal__text -->
            </div>
            <!-- /.portfolio-goal-item-wrap -->
          </div>

          <?php endwhile; ?>
        </div>
        <!-- /.portfolio-goal-right-wrap -->
        <?php endif; ?>

      </div>
      <!-- /.portfolio-goal-right -->

      <a data-fancybox="" data-src="#contact_us_pop_up" href="javascript:;"
        class="portfolio-goal__btn mob button p-button">Зв'яжіться з нами</a>
      <!-- /.portfolio-one__btn -->

    </div>
    <!-- /.portfolio-goal-wrap -->
  </div>
  <!-- /.container -->
</section>
<!-- /.portfolio-goal -->