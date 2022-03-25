<div class="overlay-form">
  <br>
  <div class="close-btn" onclick="toggleForm()">&times;</div>
  <h1>Add Queue</h1>
  <form action="./f_add.php?type=toda" method="post">
    <div class="form-element">
      <label for="TODA">TODA Name</label>
      <input style="color:white" type="text" id="TODA" name="TODA">
    </div>
    <div class="form-element">
      <label for="route1">Route 1</label>
      <input style="color:white" type="text" id="route1" name="route1">
    </div>
    <div class="form-element">
      <label for="route2">Route 2</label>
      <input style="color:white" type="text" id="route2" name="route2">
    </div>
    <div class="form-element">
      <label for="fee">Fee</label>
      <input style="color:white" type="text" id="fee" name="fee">
    </div>
    <div class="form-element">
      <button type="submit" name="submit" class="btn btn-primary btn-lg">Add Toda</button>
    </div>
  </form>
</div>