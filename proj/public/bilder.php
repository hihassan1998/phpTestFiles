<?php
include("../config/config.php");
$title = "Bildergalleri";
include("../view/header.php");

$imageDir = "../img/250x250/";
$images = array_diff(scandir($imageDir), array('..', '.'));
$images = array_values($images); // Re-index array after removing unwanted items

// Set up pagination
$imagesPerPage = 4; // Number of images to display per page
$totalImages = count($images); // Total number of images
$totalPages = ceil($totalImages / $imagesPerPage); // Total number of pages

// Get the current page from the query string, default to 1
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$currentPage = max(1, min($totalPages, $currentPage)); // Ensure the page is within valid range

// Calculate the offset for the images to display
$offset = ($currentPage - 1) * $imagesPerPage;
$currentImages = array_slice($images, $offset, $imagesPerPage); // Get the images for the current page
?>

<main>
    <h1>Bildergalleri</h1>
    <div class="gallery">
        <?php foreach ($currentImages as $image): ?>
            <div class="gallery-item">
                <img src="<?php echo $imageDir . $image; ?>" alt="<?php echo htmlspecialchars($image); ?>">
            </div>
        <?php endforeach; ?>
    </div>

    <div class="pagination">
        <?php if ($currentPage > 1): ?>
            <a href="?page=<?php echo ($currentPage - 1); ?>" class="prev">&lt;</a>
      
        <?php endif; ?>
        <?php if ($currentPage < $totalPages): ?>
            <a href="?page=<?php echo ($currentPage + 1); ?>" class="next">&gt;</a> 
        <?php endif; ?>
    </div>
</main>

<?php include("../view/footer.php"); ?>
