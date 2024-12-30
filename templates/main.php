<main>
    <section>
        <h2>La proxima pelicula de Marvel</h2>
        <h3>
            <?php echo $title; ?>
        </h3>
        <p>
            Se estrena el <?php echo $release_date; ?>
        </p>
        <p>
            <?= $until_message; ?>
        </p>

        <img src="<?php echo $poster_url; ?>" alt="<?php echo $title; ?>">

        <p style="padding-top: 2rem;">
            La siguiente pelicula de Marvel es: "<?php echo $following_production; ?>"
        </p>
    </section>

</main>