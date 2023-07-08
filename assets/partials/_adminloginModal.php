<!-- Modal -->
<div class="modal fade" id="adminloginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminloginModalLabel">Login As Admin</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="assets/partials/_handleadminLogin.php" method="POST">
          <div class="mb-3">
              <label for="admin_name" class="form-label">AdminName</label>
              <input type="text" class="form-control" id="admin_name" name="admin_name"  required>
          </div>
          <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="admin_password" name="admin_password" required>
              <div class="form-text">We'll never share your password with anyone else.</div>
          </div>
          <button type="submit" class="btn btn-success" name="submit">Login</button>
        </form>
      </div>
      <div class="modal-footer">
        <!-- Add anything here in the future -->
      </div>
    </div>
  </div>
</div>