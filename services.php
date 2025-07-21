<?php include 'inc/header.php'; ?>
<section class="breadcrumb-head">
    <div class="container">
        <div class="col-md-12">
            <h1>Services
            </h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Services</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row">


            <?php

            include 'db.php';

            if (isset($_GET['query'])) {
                $query = $_GET['query'];

                $sql = "SELECT * FROM services 
            WHERE title LIKE ? OR description LIKE ?";

                $stmt = $conn->prepare($sql);

                $searchTerm = '%' . $query . '%';
                $stmt->bind_param('ss', $searchTerm, $searchTerm);
                $stmt->execute();

                $result = $stmt->get_result();

                // Fetch results
                if ($result->num_rows > 0) {
                    echo '<div class="col-md-12 text-center mb-5">
                                <h4 class="color-primary fs-1">Search <span class="color-secondary">Results</span> </h2>
                            </div>';
                    while ($row = $result->fetch_assoc()) {

                        echo '
                                <div class="col-md-3">
                                    <div class="card secondary rounded-0 border">
                                        <img src="' . htmlspecialchars($row['Image']) . '" class="w-100 card-img-top" alt="...">
                                        <div class="card-body py-4">
                                            <h5 class="card-title text-white text-center mb-3">' . htmlspecialchars($row['title']) . '</h5>
                                            <p class="text-white text-center ">' . htmlspecialchars($row['description']) . '</p>
                                            <h5 class=" text-white text-center ">LKR ' . htmlspecialchars($row['price']) . '</h5>
                                            
                                            <div class="text-center">
                                                <a href="appointments.php" class="btn btn-primary btn-compass primary ">Make Appoinment</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ';
                    }
                } else {
                    echo "<p>No results found for '" . htmlspecialchars($query) . "'.</p>";
                }

                $stmt->close();
            }



            ?>

        </div>
        <div class="row my-5">
            <div class="col-md-12 text-center">
                <h4 class="color-primary fs-1">Featured <span class="color-secondary">Services</span> </h2>

            </div>
        </div>
        <div class="row">

        <?php

            $sql = "SELECT Id, title, description, price, Image FROM services";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
                while($row = $result->fetch_assoc()) {

                    echo '
                    <div class="col-md-3 mb-3">
                        <div class="card secondary rounded-0 border">
                            <img src="' . htmlspecialchars($row['Image']) . '" class="w-100 card-img-top" alt="...">
                            <div class="card-body py-4">
                                <h5 class="card-title text-white text-center mb-3 text-secondary">' . htmlspecialchars($row['title']) . '</h5>
                                
                                
                                <p class=" text-white text-center ">' . htmlspecialchars($row['description']) . '</p>
                                
                                <h5 class=" text-white text-center ">LKR ' . htmlspecialchars($row['price']) . '</h5>
                                <div class="text-center ">
                                    <a href="appointments.php" class="btn btn-primary btn-compass primary ">Make Appoinment</a>

                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    ';
                }
            }

            ?>
            
        </div>
    </div>
</section>
<script>

    var menu_tab = document.getElementById('services');



    menu_tab.classList.add('active');

</script>
<?php include 'inc/footer.php'; ?>