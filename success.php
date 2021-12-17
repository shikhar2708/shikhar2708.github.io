<?php
// examplepage.php
include 'functions.php';
$pdo = pdo_connect_mysql();
?>
<?= template_header('Example Page') ?>

<h2 style="text-align: center;">धन्यवाद !</h2>

<div style="color:green; text-align: center;">
    <h3>
        आपने अपना वोट सफलतापूर्वक सबमिट कर दिया है।
    </h3>
</div>
<div style="color: red; text-align: center;">
    <h4>
        परिणाम रात्रि आठ बजे दिखाया जायेगा।
    </h4>
</div>

<?= template_footer() ?>
