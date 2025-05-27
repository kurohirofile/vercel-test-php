<?php
$name = "John Doe";
$email = "john@example.com";
$bio = "Saya adalah web developer pemula yang sedang belajar PHP.";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Sederhana</title>
<style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}

.container {
    width: 80%;
    margin: 50px auto;
    background-color: #fff;
    padding: 25px;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

h1 {
    color: #333;
}

</style>
</head>
<body>
    <div class="container">
        <h1>Halo, saya <?php echo $name; ?> 👋</h1>
        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <p><strong>Tentang Saya:</strong> <?php echo $bio; ?></p>
    </div>
</body>
</html>
