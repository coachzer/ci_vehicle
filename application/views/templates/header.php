<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehix</title>
    <!-- <link rel="stylesheet" href="https://bootswatch.com/5/lux/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://bootswatch.com/5/cosmo/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <!-- default styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />

    <!-- with v4.1.0 Krajee SVG theme is used as default (and must be loaded as below) - include any of the other theme CSS files as mentioned below (and change the theme property of the plugin) -->
    <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/themes/krajee-svg/theme.css" media="all" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/star-rating.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/star-rating.min.js"></script>

    <!-- important mandatory libraries -->

    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/js/star-rating.min.js" type="text/javascript"></script>

    <!-- with v4.1.0 Krajee SVG theme is used as default (and must be loaded as below) - include any of the other theme JS files as mentioned below (and change the theme property of the plugin) -->
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/themes/krajee-svg/theme.js"></script>

    <!-- optionally if you need translation for your language then include locale file as mentioned below (replace LANG.js with your own locale file) -->
    <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/js/locales/LANG.js"></script>

    <!--<link rel="stylesheet" href="https://bootswatch.com/5/slate/bootstrap.min.css">-->

    <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg border-bottom mb-3 py-1" id="app-navbar">
        <div class="container">
            <a class="navbar-brand" href="<?php echo base_url(); ?>">
                <img src="<?php echo base_url(); ?>assets/images/logo_black_1.png" height="36">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" style="color: #000;"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="<?php echo base_url(); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="<?php echo base_url(); ?>topics">Topics</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="<?php echo base_url(); ?>categories">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="<?php echo base_url(); ?>about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="<?php echo base_url(); ?>contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="<?php echo base_url(); ?>help">Help</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <?php if (!$this->session->userdata('logged_in')) : ?>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="<?php echo base_url(); ?>users/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="<?php echo base_url(); ?>users/register">Register</a>
                        </li>
                    <?php endif; ?>
                    <?php if ($this->session->userdata('logged_in')) : ?>
                        <li class="nav-item">
                            <strong>
                                <a class="nav-link text-white"><?php echo ($this->session->userdata('username')); ?></a>
                            </strong>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="<?php echo base_url(); ?>topics/create">Create a Topic</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="<?php echo base_url(); ?>categories/create">Create a Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="<?php echo base_url(); ?>users/logout">Logout</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container" id="content">
        <!-- Flash messages -->
        <?php if ($this->session->flashdata('user_registered')) : ?>
            <?php echo '<p class="alert alert-success">' . $this->session->flashdata('user_registered') . '</p>'; ?>
        <?php endif;  ?>

        <?php if ($this->session->flashdata('user_loggedin')) : ?>
            <?php echo '<p class="alert alert-success">' . $this->session->flashdata('user_loggedin') . '</p>'; ?>
        <?php endif;  ?>

        <?php if ($this->session->flashdata('user_loggedout')) : ?>
            <?php echo '<p class="alert alert-success">' . $this->session->flashdata('user_loggedout') . '</p>'; ?>
        <?php endif;  ?>

        <?php if ($this->session->flashdata('login_failed')) : ?>
            <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('login_failed') . '</p>'; ?>
        <?php endif;  ?>

        <?php if ($this->session->flashdata('topic_created')) : ?>
            <?php echo '<p class="alert alert-success">' . $this->session->flashdata('topic_created') . '</p>'; ?>
        <?php endif;  ?>

        <?php if ($this->session->flashdata('topic_updated')) : ?>
            <?php echo '<p class="alert alert-success">' . $this->session->flashdata('topic_updated') . '</p>'; ?>
        <?php endif;  ?>

        <?php if ($this->session->flashdata('topic_deleted')) : ?>
            <?php echo '<p class="alert alert-warning">' . $this->session->flashdata('topic_deleted') . '</p>'; ?>
        <?php endif;  ?>

        <?php if ($this->session->flashdata('category_created')) : ?>
            <?php echo '<p class="alert alert-success">' . $this->session->flashdata('category_created') . '</p>'; ?>
        <?php endif;  ?>

        <?php if ($this->session->flashdata('category_deleted')) : ?>
            <?php echo '<p class="alert alert-warning">' . $this->session->flashdata('category_deleted') . '</p>'; ?>
        <?php endif;  ?>

        <?php if ($this->session->flashdata('comment_deleted')) : ?>
            <?php echo '<p class="alert alert-warning">' . $this->session->flashdata('comment_deleted') . '</p>'; ?>
        <?php endif;  ?>

        <?php if ($this->session->flashdata('rating_posted')) : ?>
            <?php echo '<p class="alert alert-success">' . $this->session->flashdata('rating_posted') . '</p>'; ?>
        <?php endif;  ?>