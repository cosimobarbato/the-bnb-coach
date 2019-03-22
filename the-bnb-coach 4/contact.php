<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<section id="contact-hero" class="inner-hero section-white-border">
  <div class="container">
    <img src="<?php echo get_template_directory_uri(); ?>/images/contact.png" alt="The BNB Coach Contact Info">
    <div class="about-content">
      <h1>Contact Info</h1>
      <p>cindy@thebnbcoach.com</p>
      <p>Los Angeles, CA</p>
    </div>  
  </div>
</section>

<?php get_template_part('template-parts/content','contact'); ?>
<?php get_footer(); ?>