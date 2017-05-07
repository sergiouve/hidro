<style media="screen">

  * { font-weight: 300; }

  a:visited { color: blue; }
  a:hover { text-decoration: none; }

  .welcome__container {
    display: table;
    height: 50vh;
    width: 100vw;
    text-align: center;
  }

  .welcome__wrapper {
    display: table-cell;
    vertical-align: middle;
    font-family: 'Ralewat', sans-serif;
  }

  .aqua-text { color: #00CEAF; }
</style>

<div class="welcome__container">
  <div class="welcome__wrapper">

    <h1><span class="aqua-text">Hidro</span> is up and running</h1>

    <p>Delete this and start prototyping!</p>

    <p class="small-text">
      <a href="https://github.com/sergiouve/hidro#usage">documentation</a> |
      <a href="<?= $routes['styleguide']; ?>">styleguide</a>
    </p>

  </div>
</div>
