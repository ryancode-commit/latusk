<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="./assets/style.css">

    <script defer src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script defer src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script defer src="assets/script.js"></script>

</head>

<body>
    <?php include './component/navigation.php'; ?>
    <nav class="px-6">
        <ul class="flex flex-row gap-x-6">
            <li><a href="#" class="font-medium text-base hover:font-bold">Data Nasabah</a></li>
            <li><a href="#" class="font-medium text-base hover:font-bold">Topup</a></li>
            <li><a href="#" class="font-medium text-base hover:font-bold">Tarik Tunai</a></li>
            <li><a href="#" class="font-medium text-base hover:font-bold">Riwayat Transaksi</a></li>
        </ul>
    </nav>
    <div class="px-6">
        <?php include 'component/topup.php' ?>
        <?php include 'component/datanasabah.php' ?>
        <?php include 'component/tariktunai.php' ?>
        <?php include 'component/riwayat.php' ?>
    </div>
</body>

</html>