<div class="styleguide__container">

  <div class="row section-title">
    <div class="heading">
      <h1 class="section-title__title"><?= $config['project_name']; ?> Web Styleguide</h1>
    </div>
  </div>

  <div class="row section-components">
    <div class="heading">
      <h2>Components</h2>
    </div>

    <?php foreach ($components as $component): ?>

      <div class="section-components__item">
        <?php include($component); ?>
      </div>

    <?php endforeach; ?>

  </div>

  <div class="row section-typography">
    <div class="heading">
      <h2>Typography</h2>
    </div>

    <div class="mt10 mb15">
      <h1>h1 Title</h1>
      <h2>h2 Title</h2>
      <h3>h3 Title</h3>
      <h4>h4 Title</h4>
      <h5>h5 Title</h5>
      <h6>h6 Title</h6>
    </div>

    <a href="#">This is a link</a>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia necessitatibus voluptatem nostrum, dignissimos placeat tenetur voluptatibus non asperiores quam iste aspernatur dolore obcaecati incidunt facere nam quas quaerat. Sint, odit.</p>

  </div>

  <div class="row section-buttons">
    <div class="heading">
      <h2>Buttons</h2>
    </div>

    <div class="mt10 mb15">
      <button class="button">Button</button>
    </div>
  </div>

</div>
