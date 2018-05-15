<?php 
get_header();
$mefolio_get_global_var = mefolio_global_var();
?>
<div class="block-content">
    <h3 class="block-title">
    <?php if (is_home()) : ?>
        <?php echo esc_html__('Blog', 'mefolio'); ?>
    <?php elseif (is_category()) : ?>
        <?php echo esc_html__('Blog Category:', 'mefolio'); ?> <?php single_cat_title(); ?>
    <?php elseif (is_tag()) : ?>
        <?php echo esc_html__('Blog Tag:', 'mefolio'); ?> <?php single_tag_title(); ?>
    <?php elseif (is_tax('portfolio-category')) : ?>
        <?php echo esc_html__('Portfolio Category:', 'mefolio'); ?> <?php single_term_title(); ?>
    <?php elseif (is_search()) : ?>
        <?php echo esc_html__('Search:', 'mefolio'); ?> <?php the_search_query(); ?>
    <?php endif; ?> 
    </h3>
    <div class="row">
        <div class="col-md-10 mx-auto animated fadeInUp">
            <?php if ( have_posts( )) : while(have_posts()) : the_post(); ?>        
            <div <?php post_class(); ?>>
                <?php if (has_post_thumbnail()): ?>
                <div class="post-thumbnail">
                    <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                    </a>
                </div>
                <?php endif ?>
                <div class="post-title">
                    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                    <p class="post-info">
                        <span class="post-author"><?php echo esc_html__('Posted by', 'mefolio'); ?> <?php the_author(); ?></span>
                        <span class="slash"></span>
                        <span class="post-date"><?php echo get_the_date(); ?></span>
                        <span class="slash"></span>
                        <span class="post-catetory"><?php the_category( ', ' ); ?></span>
                        <?php if (get_the_tags()) : ?>
                        <span class="slash"></span>
                        <span class="post-catetory"><?php the_tags( '', ', ', '' ); ?></span>
                        <?php endif ?>
                    </p>
                </div>
                <div class="post-body">
                    <p><?php echo wp_trim_words(get_the_content(), ($mefolio_get_global_var['blog-excerpt-length']) ? esc_html($mefolio_get_global_var['blog-excerpt-length']) : esc_html__('35', 'mefolio'), ''); ?></p>
                    <a class="btn read-more-btn" href="<?php the_permalink(); ?>">
                    <?php 
                    if ($mefolio_get_global_var['blog-read-more']) {
                      echo esc_html($mefolio_get_global_var['blog-read-more']);
                    } else {
                      echo esc_html__('Read More', 'mefolio');
                    }
                    ?>
                    </a>
                </div>
            </div>
            <?php endwhile; else: ?>
            <p class="search-no-match"><?php echo esc_html__( 'Sorry, no posts matched your criteria.', 'mefolio' ) ?></p>
            <?php endif; ?>
            <div class="text-center">
            <?php 
            $pagination = paginate_links( array(
                'type' => 'array',
                'prev_text' => esc_html__( 'Previous', 'mefolio' ),
                'next_text' => esc_html__( 'Next', 'mefolio' )
              ) ); ?>
            <?php if ( ! empty( $pagination ) ) : ?>
                <ul class="unstyled pagination">
                  <?php foreach ( $pagination as $key => $page_link ) : ?>
                    <li class="page-item <?php if ( strpos( $page_link, 'current' ) !== false ) { echo esc_attr( 'active' ); } ?>">
                    <?php echo str_replace('page-numbers','page-link',$page_link); ?>
                    </li>
                  <?php endforeach ?>
                </ul>
              <?php endif ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>