<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'Inventory'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <div id="page">
    <div class="intro">
      <img class="inset" src="<?php echo url_for('/images/AdobeStock_55807979_thumb.jpeg') ?>" />
      <h2>Our Inventory of Used Bicycles</h2>
      <p>Choose the bike you love.</p>
      <p>We will deliver it to your door and let you try it before you buy it.</p>
    </div>

    <table id="inventory">
      <tr>
        <th>Brand</th>
        <th>Model</th>
        <th>Year</th>
        <th>Category</th>
        <th>Gender</th>
        <th>Color</th>
        <th>Weight</th>
        <th>Condition</th>
        <th>Price</th>
      </tr>

        <?php
    $parser = new ParseCSV(PRIVATE_PATH . '/used_bicycles.csv');
    $bike_array = $parser->parse();

    print_r($bike_array);
        //$bike = new bicycle("brandtest", "modeltest", 1999, 4, "black", "beschrijving", 7, 99.99);
        ?>

      <!--<tr>
        <td><?php //echo h($bike->brand); ?></td>
        <td><?php// echo h($bike->model); ?></td>
        <td><?php// echo h($bike->year); ?></td>
        <td><?php //echo h($bike->category); ?></td>
        <td><?php //echo h($bike->gender); ?></td>
        <td><?php //echo h($bike->color); ?></td>
        <td><?php //echo h($bike->getWeightKg()); ?></td>
        <td><?php// echo h($bike->condition()); ?></td>
        <td><?php// echo h($bike->price); ?></td>
      </tr>-->

        <tr>
            <td>Brand</td>
            <td>Model</td>
            <td>Year</td>
            <td>Category</td>
            <td>Gender</td>
            <td>Color</td>
            <td>Weight</td>
            <td>Condition</td>
            <td>Price</td>
        </tr>

    </table>
  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
