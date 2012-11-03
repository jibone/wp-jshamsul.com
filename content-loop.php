
  <?php while(have_posts()): the_post(); ?>
  
  <article class="row">
    <div class="container">
      <section class="span1">
        <span class="icon-container">
        <?php
          $cat = get_the_category();
          switch($cat[0]->slug) {
            case 'code':
              echo '<i class="icon-code"></i>';
              break;
            case 'photography':
              echo '<i class="icon-camera></i>"';
              break;
            case 'design':
              echo '<i class="icon-palette"></i>';
              break;
            case 'projects':
              echo '<i class="icon-wrench"></i>"';
              break;
            case 'labs':
              echo '<i class="icon-lamp"></i>';
              break;
            case 'writings':
              echo '<i class="icon-doc-text"></i>';
              break;
            default:
              echo '<i class="icon-archive"></i>';
              break; 
          }
        ?>
        </span>
      </section>
      <section class="span7">
        <header>
          <h1>
            <span class="small"><?php the_time('l, F j, Y'); ?></span>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h1>
        </header>
        <section class="postBody">
          <?php 
				    if($pos = strpos($post->post_content, '<!--more-->')) :
					    the_content(__(''));
            else :
					    echo get_first_paragraph();
				    endif;
          ?>
          <a href="<?php the_permalink(); ?>">Read &rarr;</a>
        </section>
      </section>
      <section class="span3"></section>
    </div>
  </article>

  <?php endwhile; ?>
