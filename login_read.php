<?php include "db.php";?>
<?php include "functions.php";?>

<?php include "includes/header.php" ?>

      <h1 class="text-center">User List</h1>
      <table class="table table-bordered table-striped table-dark">
        <thead class="thead-light">
          <tr>
            <th>ID</th>
            <th>UserName</th>
            <th>Password :3</th>
          </tr>
        </thead>
        <tbody>
          <?php readRows(); ?>
        </tbody>
      </table>

<?php include "includes/footer.php"?>