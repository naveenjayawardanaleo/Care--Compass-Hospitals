<?php include 'inc/header.php'; ?>
<section class="breadcrumb-head">
    <div class="container">
        <div class="col-md-12">
            <h1>Doctors</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Doctors</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class="section " >
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mb-5">
                <h4 class="color-primary fs-1">Featured <span class="color-secondary">Doctors</span> </h4>
            </div>

            <?php
            include 'db.php';
            $sql = "SELECT full_name, qualification, specialty, img FROM doctors WHERE is_deleted = 0";
            $result = $conn->query($sql);



            while ($row = $result->fetch_assoc()) {
                echo
                    '
                    <div class="col-md-3 mb-4">
                        <div class="card primary rounded-0 border ">

                        ';
                        if($row['img'] == null){
                            echo '<img src="img/doctors/default.png" class="w-100 card-img-top" alt="...">';
                        }else{
                            echo '<img src="img/doctors/'.$row['img'].'" class="w-100 card-img-top" alt="...">';
                            
                        }
                echo '
                            <div class="card-body py-4 doctors-page-pattern">
                                <h5  class="text-center text-white mb-3">' . $row['specialty'] . '</h5>

                                <h6 class="card-title text-white text-center ">' . $row['full_name'] . ' <br> (' . $row['qualification'] . ')</h6>
                                
                            </div>
                        </div>
                    </div>
                
                ';
            }

            $conn->close();

            ?>


        </div>
    </div>
</section>
<script>

    var menu_tab = document.getElementById('doctors');



    menu_tab.classList.add('active');

</script>
<?php include 'inc/footer.php'; ?>