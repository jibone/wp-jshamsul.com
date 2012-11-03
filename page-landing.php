<?php 
/*
Template Name: landing
*/
get_header(); ?>

  <article class="row">
    <div class="container">
      <section class="span1">
        <span class="icon-container">&nbsp;</span>
      </section>
      <section class="span7">
        <header>
          <h1><?php the_title(); ?></h1>
        </header>
        <section class="postBody">
          <?php the_post(); the_content(__('')); ?>
        </section>
      </section>
      <section class="span3 side-icons">
				<?php if(is_active_sidebar('landing')) {  
					dynamic_sidebar('landing'); 
				} ?>
      </section>
    </div>
  </article>

<?php get_footer(); ?>
