<?php 

session_start();
if(!isset($_SESSION['userID'])){
    header('Location:index.php');
    die();
}

require_once('app/db/Koneksi.php');
$db = new Koneksi();
$conn = $db->connect();
$posts = $conn->query("SELECT * FROM post")->fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./assets/home.css">
    <style>
       
    </style>
    <!-- modal iklan styling -->
    <link rel="stylesheet" href="./assets/iklan/iklan.css">
</head>

<body>
    <h1 align="center">BLOG</h1>
    <p align="center">hello, <?php echo $_SESSION['nama']; ?></p>
    <form action="logout.php" align="center">
        <button type="submit" name="" >logout</button>
    </form>
    <section class="base">
        <main>
            <?php foreach ($posts as $item) { ?>

                <div style="width: 50%;">
                    <div class="card" data-id="<?= $item['id'] ?>" onclick="addHist(this)">
                        <div class="container">
                            <h3 class="card-head"><?= $item['judul']; ?></h3>
                            <p class="card-body"><?= $item['isi']; ?></p>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </main>

        <aside>
            <h2>History</h2>
            <div id="history_buck"></div>
        </aside>
    </section>

<?php //peletakan script berada di bawah 
if(!isset($_COOKIE['tolak']) || $_COOKIE['tolak'] !== 'yes') {
    echo '<script src="./assets/iklan/iklan.js"></script>';
}
?>

<script src="./assets/home.js"></script>
</body>

</html>