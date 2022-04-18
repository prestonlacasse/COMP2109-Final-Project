<?php
/**
 * Template Name: Contact Layout
 * Template Post Type: page
 */
    get_header();
?>

<div class="container">
  <div class="row about-row">
    <div class="col">

    <section class="masthead img-fluid" style="background-image: url('<?php the_field('masthead_background_image'); ?>')">
        <h1 class="masthead-title"><?php the_field('masthead_title'); ?></h1>
    </section>

      <from>
        <div class="form-group">
          <label for="name" class="form-label">First Name*</label>
          <input type="text" class="form-control" placeholder="First Name" />
        </div>
        <div class="form-group">
        <label for="name" class="form-label">Last Name*</label>
          <input type="text" class="form-control" placeholder="Last Name" />
        </div>
        <div class="form-group">
          <label for="email" class="form-label">Email address*</label>
          <input
            type="email"
            class="form-control"
            placeholder="example@example.com"
          />
        </div>
        <div class="form-group">
          <label class="form-label">Message*</label>
          <textarea
            type="text"
            class="form-control"
            rows="3"
            placeholder="Message..."
          ></textarea>
        </div>
        <button type="submit" class="btn submit-contact-btn">
          Submit
        </button>
      </from>
      </div>
  </div>
</div>

<?php
    get_footer();
?>