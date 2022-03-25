<div class="overlay-form">
  <br>
  <div class="close-btn" onclick="toggleForm()">&times;</div>
  <h1>Add Queue</h1>
  <form action="./f_add.php?type=queue" method="post" enctype="multipart/form-data">
    <div class="form-element">
      <label for="tricycle_id">Tricycle ID</label>
      <select id="tricycle_id" name="id" class="form-select" aria-label="Default select example">
        <option selected>Open this select menu</option>
        <?php
          foreach ($driver->getDriversInfo() as $key) {
            echo "<option value='".$key['id']."'>".$key['tricycle_id']."</option>";
          }
        ?>
        
      </select>
    </div>
    <div class="form-element">
      <button type="submit" name="submit" class="btn btn-primary btn-lg">Queue Up</button>
    </div>
  </form>
</div>