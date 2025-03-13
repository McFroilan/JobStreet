<?php get_header(); ?>
<div class="container">
    <div class="search-bar">
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
            <input type="text" name="location" placeholder="Enter suburb, city, or region">
            <button type="submit">SEEK</button>
        </form>
    </div>
</div>
<?php get_footer(); ?>
