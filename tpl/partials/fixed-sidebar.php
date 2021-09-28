<?php
    error_reporting(0);
    $contact = get_field('modal_kontakt', 'option') ? get_field('modal_kontakt_data', 'option') : false;
    $opening = get_field('modal_oeffnungszeiten', 'option') ? get_field('modal_oeffnungszeiten_data', 'option') : false;
    $card = get_field('modal_speisekarte', 'option') ? get_field('modal_speisekarte_data', 'option') : false;
?>

<div class="fixed-sidebar">
    <ul>
        <?php if($contact){ ?>
            <li>
                <a uk-toggle="target: #modal-kontakt">
                    <?= baw_svg('solid/phone') ?>
                    <span class="tooltip"><?= $contact['tooltip'] ?></span>
                </a>
            </li>
        <?php } ?>

        <?php if($opening){ ?>
            <li>
                <a uk-toggle="target: #modal-oeffnungszeiten">
                    <?= baw_svg('solid/clock') ?>
                    <span class="tooltip"><?= $opening['tooltip'] ?></span>
                </a>
            </li>
        <?php } ?>

        <?php if($card){ ?>
            <li>
                <a uk-toggle="target: #modal-speisekarte">
                    <?= baw_svg('solid/utensils') ?>
                    <span class="tooltip"><?= $card['tooltip'] ?></span>
                </a>
            </li>
        <?php } ?>

        <?php foreach(get_field('custom_modals', 'option') as $modal) { ?>
            <li>
                <a uk-toggle="target: #<?= $modal['id'] ?>" uk-toggle>
                    <?= baw_svg($modal['icon']) ?>
                    <span class="tooltip"><?= $modal['tooltip'] ?></span>
                </a>
            </li>
        <?php } ?>

        <?php foreach(get_field('verlinkungen', 'option') as $modal) { ?>
            <li>
                <a href="<?= $modal['verlinkung']['url']; ?>">
                    <?= baw_svg($modal['icon']) ?>
                    <span class="tooltip"><?= $modal['tooltip'] ?></span>
                </a>
            </li>
        <?php } ?>
    </ul>
</div>
