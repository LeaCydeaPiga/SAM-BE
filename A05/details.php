<?php
include 'db_connect.php';

// Get the island ID from URL parameters
if (isset($_GET['islandID'])) {
    $islandID = intval($_GET['islandID']);
} else {
    die("No ID provided.");
}

// fetch islandsofpersonality
$query = "
    SELECT isp.name, isp.shortDescription, isp.longDescription, isp.image, isp.color
    FROM islandsofpersonality isp
    WHERE isp.islandOfPersonalityID = ?
";

$stmt = $mysqli->prepare($query);
$stmt->bind_param("i", $islandID);
$stmt->execute();
$result = $stmt->get_result();

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    die("Island not found.");
}

// fetch islandcontents
$contentQuery = "
    SELECT image, content, color
    FROM islandcontents
    WHERE islandOfPersonalityID = ?
";
$contentStmt = $mysqli->prepare($contentQuery);
$contentStmt->bind_param("i", $islandID);
$contentStmt->execute();
$contentResult = $contentStmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">

<?php include 'header.php'; ?>

<body bg-light>
    <section id="island-details">
        <div class="container mt-5">
            <div class="text-center mb-4">
                <h1 class="rammetto-one-regular" style="color: <?php echo htmlspecialchars($row['color']); ?>;">
                    <?php echo htmlspecialchars($row['name']); ?>
                </h1>
                <p class="poppins-light font-16"><?php echo htmlspecialchars($row['shortDescription']); ?></p>
            </div>

            <div class="text-center mb-4">
                <img
                    src="img/<?php echo htmlspecialchars($row['image']); ?>"
                    alt="<?php echo htmlspecialchars($row['name']); ?>"
                    class="img-fluid floating"
                    style="max-height: 700px;">
            </div>

            <div class="container mt-3">
                <p class="poppins-light font-16"><?php echo nl2br(htmlspecialchars($row['longDescription'])); ?></p>
            </div>
        </div>
    </section>

    <section class="photoBox">
    <h1 class="text-center mb-4 rammetto-one-regular" style="color: <?php echo htmlspecialchars($row['color']); ?>;">Image Gallery</h1>
    <div class="gallery">
      <input type="checkbox">
      <?php if ($contentResult && $contentResult->num_rows > 0): ?>
            <?php while ($contentRow = $contentResult->fetch_assoc()): ?>
                <img 
                    src="img/<?php echo htmlspecialchars($contentRow['image']); ?>" 
                    alt="<?php echo htmlspecialchars($contentRow['content']); ?>" 
                    >
            <?php endwhile; ?>
        <?php else: ?>
            <p>No images available for this island.</p>
        <?php endif; ?>
    </div>
  </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
