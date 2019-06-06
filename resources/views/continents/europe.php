<h1>Countries of Europe</h1>

<ul>

    <?php foreach ($countries as $country) : ?>

        <li>
            <a href="/countries/detail?code=<?= $country->Code ?>">
                <?= $country->Name ?>
            </a>
        </li>

    <?php endforeach; ?>

</ul>