<?php
session_start();

if (!isset($_SESSION['loggedIN'])) {
    header('Location: sign_in.php');
    exit();
} else {
    if ($_SESSION['activationCode'] == 'activated') {
        header('Location: account.php');
        exit();
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Pho King Nais | Account activated!</title>
    <?php @include("./components/head_tag.php"); ?>
</head>

<body class="site-container">
    <?php
    @include('./components/layout/navigation.php');
    ?>

    <div class="index_background">
        <div class="index_background_fill"></div>
        <img class="index_background_shape" src="./media/test_2.svg">
    </div>

    <header class='index_header'>
        <h1><a href="./index.php">Pho King Nais</a></h1>
    </header>

    <main class="site-content">
        <div class="activation-container">
            <h2>Please check your email to activate your account!</h2>
            <input type="button" id="sign-in-button" value="Sign In">
        </div>
    </main>

    <?php @include('./components/layout/footer.php'); ?>
</body>

<script>
    $('#sign-in-button').on('click', function() {
        window.location = 'sign_in.php';
    });
</script>

<script src="./scripts/global.js"></script>

</html>