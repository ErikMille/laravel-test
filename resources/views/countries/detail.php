<h1><?= $country->Name ?></h1>

<h2>Cities</h2>

<ul>

    <?php foreach ($cities as $city) : ?>

        <li>
            <?= $city->Name ?>
        </li>

    <?php endforeach; ?>

</ul>

<h2>Languages</h2>

<ul>

    <?php foreach ($languages as $language) : ?>

        <li>
            <?= $language->Language ?>
        </li>

    <?php endforeach; ?>

</ul>