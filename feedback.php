<?php include 'inc/header.php'; ?>

<?php
$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<h2>Past Feedbacks</h2>

<?php if (empty($feedback)) : ?>
  <p class="lead mt3"> There is no feedback</p>
<?php endif; ?>

<!-- Loop trough the database rows to create a box of feedback -->
<?php foreach ($feedback as $item) : ?>
  <div class="card my-3 w-75">
    <div class="card-body text-center">
      <?php echo $item['body']; ?>
    </div>
    <p class="text-secondary mt-2 text-center">
      By <?php echo $item['name']; ?> on <?php echo $item['date'] ?>
    </p>
  </div>
<?php endforeach ?>

<?php include 'inc/footer.php'; ?>