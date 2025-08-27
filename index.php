<?php

use Footstep\Components\Button;
use Footstep\Enum\OutlineType;
use Footstep\Enum\TypeEnum;
use Footstep\Enum\ButtonSizeEnum;

require __DIR__ . '/vendor/autoload.php';
?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>

<figure class="text-center">
    <blockquote class="blockquote">
        <p>robots-dreams/footstep</p>
    </blockquote>
    <figcaption class="blockquote-footer">
        PHP classes to render bootstrap elements
    </figcaption>
</figure>


<div class="container">
    <div class="row">
        <img src="avatar.png" class="rounded mx-auto d-block img-thumbnail" alt="avatar" style="width: 300px; height: 300px;">
        <img src="logo.png" class="rounded mx-auto d-block img-thumbnail" alt="logo" style="width: 300px; height: 300px;">
    </div>
</div>

<h1>Buttons</h1>

<hr>

<div class="container">
    <?php echo new Button(TypeEnum::DARK, 'Speichern') ?>
    <?php echo new Button(TypeEnum::PRIMARY, 'Speichern') ?>
    <?php echo new Button(TypeEnum::SECONDARY, 'Speichern') ?>
    <?php echo new Button(TypeEnum::SUCCESS, 'Speichern') ?>
    <?php echo new Button(TypeEnum::DANGER, 'Speichern') ?>
    <?php echo new Button(TypeEnum::WARNING, 'Speichern') ?>
    <?php echo new Button(TypeEnum::INFO, 'Speichern') ?>
    <?php echo new Button(TypeEnum::LIGHT, 'Speichern') ?>
    <?php echo new Button(TypeEnum::DARK, 'Speichern') ?>
    <?php echo new Button(TypeEnum::LINK, 'Speichern') ?>
</div>

<hr>

<div class="container">
    <?php echo new Button(TypeEnum::DARK, 'Speichern', outline: OutlineType::OUTLINE) ?>
    <?php echo new Button(TypeEnum::PRIMARY, 'Speichern', outline: OutlineType::OUTLINE) ?>
    <?php echo new Button(TypeEnum::SECONDARY, 'Speichern', outline: OutlineType::OUTLINE) ?>
    <?php echo new Button(TypeEnum::SUCCESS, 'Speichern', outline: OutlineType::OUTLINE) ?>
    <?php echo new Button(TypeEnum::DANGER, 'Speichern', outline: OutlineType::OUTLINE) ?>
    <?php echo new Button(TypeEnum::WARNING, 'Speichern', outline: OutlineType::OUTLINE) ?>
    <?php echo new Button(TypeEnum::INFO, 'Speichern', outline: OutlineType::OUTLINE) ?>
    <?php echo new Button(TypeEnum::LIGHT, 'Speichern', outline: OutlineType::OUTLINE) ?>
    <?php echo new Button(TypeEnum::DARK, 'Speichern', outline: OutlineType::OUTLINE) ?>
    <?php echo new Button(TypeEnum::LINK, 'Speichern', outline: OutlineType::OUTLINE) ?>
</div>

<hr>

<div class="container">
    <?php echo new Button(TypeEnum::DARK, 'Speichern', ButtonSizeEnum::SM, OutlineType::OUTLINE) ?>
    <?php echo new Button(TypeEnum::PRIMARY, 'Speichern', ButtonSizeEnum::SM, OutlineType::OUTLINE) ?>
    <?php echo new Button(TypeEnum::SECONDARY, 'Speichern', ButtonSizeEnum::SM, OutlineType::OUTLINE) ?>
    <?php echo new Button(TypeEnum::SUCCESS, 'Speichern', ButtonSizeEnum::SM, OutlineType::OUTLINE) ?>
    <?php echo new Button(TypeEnum::DANGER, 'Speichern', ButtonSizeEnum::SM, OutlineType::OUTLINE) ?>
    <?php echo new Button(TypeEnum::WARNING, 'Speichern', ButtonSizeEnum::SM, OutlineType::OUTLINE) ?>
    <?php echo new Button(TypeEnum::INFO, 'Speichern', ButtonSizeEnum::SM, OutlineType::OUTLINE) ?>
    <?php echo new Button(TypeEnum::LIGHT, 'Speichern', ButtonSizeEnum::SM, OutlineType::OUTLINE) ?>
    <?php echo new Button(TypeEnum::DARK, 'Speichern', ButtonSizeEnum::SM, OutlineType::OUTLINE) ?>
    <?php echo new Button(TypeEnum::LINK, 'Speichern', ButtonSizeEnum::SM, OutlineType::OUTLINE) ?>
</div>

<hr>

<div class="container">
    <?php echo new Button(TypeEnum::DARK, 'Speichern', ButtonSizeEnum::LG, OutlineType::OUTLINE) ?>
    <?php echo new Button(TypeEnum::PRIMARY, 'Speichern', ButtonSizeEnum::LG, OutlineType::OUTLINE) ?>
    <?php echo new Button(TypeEnum::SECONDARY, 'Speichern', ButtonSizeEnum::LG, OutlineType::OUTLINE) ?>
    <?php echo new Button(TypeEnum::SUCCESS, 'Speichern', ButtonSizeEnum::LG, OutlineType::OUTLINE) ?>
    <?php echo new Button(TypeEnum::DANGER, 'Speichern', ButtonSizeEnum::LG, OutlineType::OUTLINE) ?>
    <?php echo new Button(TypeEnum::WARNING, 'Speichern', ButtonSizeEnum::LG, OutlineType::OUTLINE) ?>
    <?php echo new Button(TypeEnum::INFO, 'Speichern', ButtonSizeEnum::LG, OutlineType::OUTLINE) ?>
    <?php echo new Button(TypeEnum::LIGHT, 'Speichern', ButtonSizeEnum::LG, OutlineType::OUTLINE) ?>
    <?php echo new Button(TypeEnum::DARK, 'Speichern', ButtonSizeEnum::LG, OutlineType::OUTLINE) ?>
    <?php echo new Button(TypeEnum::LINK, 'Speichern', ButtonSizeEnum::LG, OutlineType::OUTLINE) ?>
</div>

<hr>

<div class="container">
    <?php echo new Button(TypeEnum::DARK, 'Speichern', disabled: true) ?>
    <?php echo new Button(TypeEnum::PRIMARY, 'Speichern', disabled: true) ?>
    <?php echo new Button(TypeEnum::SECONDARY, 'Speichern', disabled: true) ?>
    <?php echo new Button(TypeEnum::SUCCESS, 'Speichern', disabled: true) ?>
    <?php echo new Button(TypeEnum::DANGER, 'Speichern', disabled: true) ?>
    <?php echo new Button(TypeEnum::WARNING, 'Speichern', disabled: true) ?>
    <?php echo new Button(TypeEnum::INFO, 'Speichern', disabled: true) ?>
    <?php echo new Button(TypeEnum::LIGHT, 'Speichern', disabled: true) ?>
    <?php echo new Button(TypeEnum::DARK, 'Speichern', disabled: true) ?>
    <?php echo new Button(TypeEnum::LINK, 'Speichern', disabled: true) ?>
</div>

<hr>

<div class="container">
    <?php echo new Button(TypeEnum::DARK, 'Speichern', href: 'https://www.google.de') ?>
    <?php echo new Button(TypeEnum::PRIMARY, 'Speichern', href: 'https://www.google.de') ?>
    <?php echo new Button(TypeEnum::SECONDARY, 'Speichern', href: 'https://www.google.de') ?>
    <?php echo new Button(TypeEnum::SUCCESS, 'Speichern', href: 'https://www.google.de') ?>
    <?php echo new Button(TypeEnum::DANGER, 'Speichern', href: 'https://www.google.de') ?>
    <?php echo new Button(TypeEnum::WARNING, 'Speichern', href: 'https://www.google.de') ?>
    <?php echo new Button(TypeEnum::INFO, 'Speichern', href: 'https://www.google.de') ?>
    <?php echo new Button(TypeEnum::LIGHT, 'Speichern', href: 'https://www.google.de') ?>
    <?php echo new Button(TypeEnum::DARK, 'Speichern', href: 'https://www.google.de') ?>
    <?php echo new Button(TypeEnum::LINK, 'Speichern', href: 'https://www.google.de') ?>
</div>

<!-- Bootstrap JS Bundle (mit Popper) -->
<script src="/vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
