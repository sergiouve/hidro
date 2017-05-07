<style media="screen">

  * { font-weight: 300; }

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
    <p>Doubts? <a href="https://github.com/sergiouve/hidro#usage">Check the documentation</a></p>

    <p class="small-text">You can also check the <a href="<?= $routes['styleguide']; ?>">default styleguide</a></p>
  </div>
</div>
