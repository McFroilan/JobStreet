<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<header class="navbar">
    <div class="logo">
        <a href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Site Logo">
        </a>

        <nav class="nav-links">
            <a href="<?php echo site_url('/jobsearch'); ?>">Job search</a>
            <a href="<?php echo site_url('/profile'); ?>">Profile</a>
            <a href="<?php echo site_url('/careeradvice'); ?>">Career advice</a>
            <a href="<?php echo site_url('/explorecompanies'); ?>">Explore companies</a>
            <a href="<?php echo site_url('/community'); ?>">Community</a>
            <a class="new-badge" href="<?php echo site_url('/new'); ?>">New</a>
        </nav>

    </div>

    <div class="auth-buttons">
        <button class="sign-in">Sign in</button>
        <a href="#" class="employer-site">Employer site</a>
    </div>
</header>
