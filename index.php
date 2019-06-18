<?php /* Template Name: front */ ?>

<?php get_header(); ?>

        <!-- ここまでindex.php -->

        <div class="hero-top">
            <div class="image-filter">
                <div class="heroimage"><img src="<?php echo get_template_directory_uri(); ?>/images/380.jpg" alt=""></div>
            </div>
            <h2>一週間をフラポる。</h2>
        </div>


        <div class="works">
            <div class="work-button">
                <img src="<?php echo get_template_directory_uri(); ?>/images/design.svg">
                <p>DESIGN</p>
            </div>

            <div class="work-button">
                <img src="<?php echo get_template_directory_uri(); ?>/images/co-creation.svg" alt="">
                <p>CO-CREATION</p>
            </div>

            <div class="work-button">
                <img src="<?php echo get_template_directory_uri(); ?>/images/co-working.svg" alt="">
                <p>CO-WORKING</p>
            </div>
        </div>



        <div class="products">
            <div class="product sa sa--up">
            <?php echo get_thumb_img('large'); ?>
                <h2><?php the_title(); ?></h2>
                <h3>logo design</h3>
            </div>


            <div class="product sa sa--up">
                <img src="<?php echo get_template_directory_uri(); ?>/images/atr.jpg" alt="">
                <h2>ATR</h2>
                <h3>logo design</h3>
            </div>

            <div class="product sa sa--up">
                <img src="<?php echo get_template_directory_uri(); ?>/images/epicurean.jpg" alt="">
                <h2>Epicurean</h2>
                <h3>logo design</h3>
            </div>

            <div class="product sa sa--up">
                <img src="<?php echo get_template_directory_uri(); ?>/images/unicorn.jpg" alt="">
                <h2>5</h2>
                <h3>logo design</h3>
            </div>
            
            <div class="product sa sa--up">
                <img src="<?php echo get_template_directory_uri(); ?>/images/wellbeing.jpg" alt="">
                <h2>6</h2>
                <h3>logo design</h3>
            </div>

            <?php
				$query = new WP_Query([
					'post_status' => 'publish',
					'posts_per_page' => 3,
					'orderby' => 'post_date',
					'order' => 'DESC',
				]);
			?>

				<?php
				if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
			?>
				<div class="col m12 l4" style="display:flex; justify-content:center;">
					<div class="article">
						<div class="news-image">
							<?php the_post_thumbnail('thumbnail'); ?>
						</div>
						<div class="news-content">
							<h2><a href="<?php the_permalink(); ?>" class="text-logo-color"><?php the_title(); ?></a></h2>
							<p> <?php the_excerpt(); ?></p>
						</div>
					</div>
				</div>

				<?php endwhile;endif; ?>
			</div>
		</div>


        </div>

        <!-- <div class="news">
            <h1>news</h1>
            <div class="topic">
                <h3 class="topic-title logo-t">コーポレートサイトの写真撮影を行いました</h3>
                <p class="topic-text">newsnewsnewsnewsnewsnewsnewsnewsnewsnewsnews</p>
            </div>
            <div class="topic">
                <h3 class="topic-title logo-t">flowerpostを囲む会を開催しました</h3>
                <p class="topic-text">newsnewsnewsnewsnewsnewsnewsnewsnewsnewsnews</p>
            </div>
            <div class="topic">
                <h3 class="topic-title logo-t">エスプレッソマシンを導入しました</h3>
                <p class="topic-text">newsnewsnewsnewsnewsnewsnewsnewsnewsnewsnews</p>
            </div>
        </div>
 -->


    </div>


    <?php get_footer(); ?>