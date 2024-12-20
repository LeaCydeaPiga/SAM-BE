<?php include 'db_connect.php'; ?>
<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

<body>
    <section id="home">
        <div class="container">
            <div class="row">
                <div class="col-5 leftContent mb-5">
                    <p class="rammetto-one-regular font-20 mt-1">#INSIDE OUT</p>
                </div>
                <div class="col-7 rightContent mb-5">
                    <p class="rammetto-one-regular font-20 mt-1">SAM A05</p>
                </div>
            </div>
            <div class="row">
                <div class="col-4 col-sm-5 col-lg-4 leftContent">
                    <p class="rammetto-one-regular font-0 mt-5" style="color: #4C8CCC;">MEET ME</p>
                    <h1 class="rammetto-one-regular" style="color: #366ABD;">EXPLORE PRECIOUS PERSONALITY ISLANDS WITH ME</h1>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-3 col-sm-12 col-md-5">
                        <p class="poppins-light font-16">
                            Personality Islands are metaphorical representations of core aspects of an individual's personality, formed by key emotional experiences and memories.
                        </p>
                    </div>
                </div>
                <div class="container-fluid buttonContainer">
                    <div class=" buttonContainer d-flex justify-content-end">
                        <button class="homeButton d-flex justify-content-center" onclick="location.href='#personality-islands'">
                            <span class="poppins-light font-20">Explore More</span>
                            <span class="material-icons arrow-icon">arrow_forward</span>
                        </button>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section id="personality-islands" class="mt-5">
        <div class="container">
            <h1 class="rammetto-one-regular text-center mb-5" style="color: #366ABD;">Personality Islands</h1>
            <div class="row">
                <?php
              
                $query = "
                    SELECT ic.*, isp.name, isp.color AS bg_color, ic.color AS text_color, ic.image AS ic_image, isp.shortDescription AS isp_short
                    FROM islandcontents ic
                    INNER JOIN islandsofpersonality isp 
                    ON ic.islandOfPersonalityID = isp.islandOfPersonalityID
                ";

                $result = $mysqli->query($query);


                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <div class="col-lg-4 col-md-6 mb-4 mt-4">

                            <div class="card" style="background-color: <?php echo htmlspecialchars($row['bg_color']); ?>;">

                                <img src="img/<?php echo htmlspecialchars($row['ic_image']); ?>" class="card-img-top mt-5" alt="<?php echo htmlspecialchars($row['name']); ?>" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: <?php echo htmlspecialchars($row['text_color']); ?>;">
                                        <?php echo htmlspecialchars($row['name']); ?>
                                    </h5>
                                    <p class="card-text"><?php echo htmlspecialchars($row['isp_short']); ?></p>
                                    <div class=" row justify-content-end">
                                        <button class="btn btn-light">
                                            <a href="details.php?islandID=<?php echo htmlspecialchars($row['islandOfPersonalityID']); ?>" class="text-decoration-none text-dark">Learn More</a>
                                        </button>

                                    </div>

                                </div>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "<p class='text-center'>No Personality Islands Found.</p>";
                }
                ?>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>


</body>

</html>