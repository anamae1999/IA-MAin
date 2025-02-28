<?php get_template_part( 'templates/partials/section-settings' ); ?>
<div class="container d-flex service-container -new">

  <div class="col-12">
    <h1>How To Get Started</h1>
<button  style="border-top: 1px solid rgba(85, 85, 85, 0.5);;" class="accordion">What would you recommend for a first-time client?</button>
<div class="panel d-flex">
  <div>
  <p>We understand the necessity of precision and skill in the designing and constructing of structures, which is why our experts are seasoned professionals who can take on a variety of different tasks.
The most integral component of any project is the human resource aspect: architects and engineers. 
</p>
  </div>

</div>

<button class="accordion">What would you recommend for a first-time client?</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">What would you recommend for a first-time client?</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<button class="accordion">What would you recommend for a first-time client?</button>
<div class="panel">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

  </div>


</div>
<!--  <div class="container service-container">
      <h1>Services</h1>
      <div class="row">
        <div class="service">
          <i class="fas fa-database"></i>
          <h6>Architecture & Engineering Support</h6>
        </div>
        <div class="service">
          <i class="fas fa-chart-line"></i>
          <h6>IT & Development Services</h6>
        </div>
        <div class="service">
          <i class="fas fa-database"></i>
          <h6>Customer & Sales Support</h6>
        </div>
        <div class="service">
          <i class="fas fa-database"></i>
          <h6>Back Office Support</h6>
        </div>
      </div>
    </div> -->
</section>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>