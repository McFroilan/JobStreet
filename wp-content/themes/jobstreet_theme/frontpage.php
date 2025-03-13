<?php get_header(); ?>
<div class="hero-section">
    <h1>Find Your Dream Job</h1>
    <form role="search" method="get" action="<?php echo home_url('/'); ?>">
        <input type="text" name="s" placeholder="Enter Keywords">
        <select name="category">
            <option value="">Any Classification</option>
            <?php 
                $categories = get_categories();
                foreach ($categories as $category) {
                    echo '<option value="' . $category->slug . '">' . $category->name . '</option>';
                }
            ?>
        </select>
        <input type="text" name="location" placeholder="Enter City or Region">
        <button type="submit">SEEK</button>
    </form>
</div>
<div class="container">
    <h2>Recent Jobs</h2>
    <div class="job-listings">
        <?php
        $args = array('post_type' => 'post', 'posts_per_page' => 5);
        $query = new WP_Query($args);
        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>
                <div class="job-item">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_excerpt(); ?></p>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        else : echo '<p>No jobs found.</p>';
        endif;
        ?>
    </div>
</div>
<?php get_footer(); ?>
