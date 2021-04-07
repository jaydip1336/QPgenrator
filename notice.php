edit_paper.php ma niche batten block karelu che
<a class="alert alert-warning">
         <?php echo $name_err; 
             echo $email_err; 
             echo $confirm_password_err; 
             echo $password_err; ?> 
      </a>
      <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Qustion paper name" name="Question_paper_name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-plus"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Qustion paper id"name="Question_paper_id">
        <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-eye"></span>
        </div>
        </div>
    </div>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Qustion paper password" name="Question_paper_password">
        <div class="input-group-append">
        <div class="input-group-text">
            <span class="fas fa-lock"></span>
        </div>
        </div>
        </div>