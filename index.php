<?php
require_once "database.php";

try {

    $q = $conn->query("SELECT ad,soyad,email FROM deneme2");
    $q->setFetchMode(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("bilgi cekilemedi :" . $e->getMessage());
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <link rel="stylesheet" href="database.php">
    <link rel="stylesheet" href="localhost.php">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>deneme2</title>
     <style>
        body{
    background-color: #FFEBEE;
}
     </style>
</head>
<body>


    <form method="post">
    <div class="p-3 mb-2 bg-success text-white"> 


<div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="card px-1 py-4">
        <div class="card-body">
            <h6 class="card-title mb-3 text-center ">Bu randevu için</h6>

            <!-- giriş ve ekle -->
            <div class="d-flex flex-row"> <label class="radio mr-1"> <input type="radio" name="add" value="anz" checked> <span> <i class="fa fa-user"></i> Giriş </span> </label> <label class="radio"> <input type="radio" name="add" value="add"> <span> <i class="fa fa-plus-circle"></i> Ekle </span> </label> </div>
            <h6 class="information mt-4  text-center ">Lütfen Bilgileri Giriniz</h6>


              <!-- ADI -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <!-- <label for="name">Name</label> --> <input class="form-control" type="text" placeholder="Adınızı Girin" name="adi" > </div>
                </div>
            </div>



            <!-- soyadı -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="input-group"> <input class="form-control" type="text" placeholder="Soyadınızı Girin" name="soyadi" > </div>
                    </div>
                </div>
            </div>



          <!-- email -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="input-group"> <input class="form-control" type="text" placeholder="Email ID" name="emaili" > </div>
                    </div>
                </div>
            </div>




            <div class=" d-flex flex-column text-center px-5 mt-3 mb-3"> <small class="agree-text">Bu randevuyu rezerve ederek şunları kabul etmiş olursunuz:</small> <a href="#" class="terms">Şartlar ve Koşullar</a> </div> 



           <!-- <button class="btn btn-primary btn-block confirm-button">Confirm</button> -->
            <input type="submit" class="btn btn-primary btn-block confirm-button" value="Gonder" name="gonder"  >
        </div>
    </div>
</div>


</div>
</form>


<div id="container" class="container md-6 ">
            <h1>Employees</h1>
            <table class="table table-bordered table-condensed table-dark">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Job Title</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $q->fetch()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['ad']) ?></td>
                            <td><?php echo htmlspecialchars($row['soyad']); ?></td>
                            <td><?php echo htmlspecialchars($row['email']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
    </body>
</div>


</body>
</html>