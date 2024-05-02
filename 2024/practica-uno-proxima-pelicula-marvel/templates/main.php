<main>
    <h2 style="text-align: center;">Proxima Pelicula Marvel.</h2>
    <section style="display: flex; justify-content: center;">
      <img src="<?= $data["poster_url"]; ?>" alt="<?= "Poster de " . $data["overview"]; ?>" width="300">
    </section>

    <hgroup style="display: flex; justify-content: center; flex-direction: column; text-align:center;">
      <h2><?= $data["title"] . " " . get_until_message($data["days_until"]) . " dias." ?></h2>
      <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
      <p>La siguiente es: <?= $data["following_production"] ?></p>
    </hgroup>
  </main>