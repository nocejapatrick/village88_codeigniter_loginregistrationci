<div class="container">
        <h1>Registration</h1>
        <form action="/students/register" method="POST">
            <input type="hidden" name="action" value="register">
            <div class="form-group">
                <label for="email">Email: <span>*</span></label>
                <input type="text" id="email" name="email" class="form-control">
             
              <p class="<?= ($this->session->flashdata('email_error')) ? 'error' : '' ?>"><?= $this->session->flashdata('email_error') ?></p>
                      
            </div>
            <div class="form-group">
                <label for="first_name">First Name: <span>*</span></label>
                <input type="text" id="first_name" name="first_name" class="form-control">
                <p class="<?= ($this->session->flashdata('first_name_error')) ? 'error' : '' ?>"><?= $this->session->flashdata('first_name_error') ?></p>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name: <span>*</span></label>
                <input type="text" id="last_name" name="last_name" class="form-control">
                <p class="<?= ($this->session->flashdata('last_name_error')) ? 'error' : '' ?>"><?= $this->session->flashdata('last_name_error') ?></p>
            </div>
            <div class="form-group">
                <label for="password">Password: <span>*</span></label>
                <input type="password" id="password" name="password" class="form-control">
                <p class="<?= ($this->session->flashdata('password_error')) ? 'error' : '' ?>"><?= $this->session->flashdata('password_error') ?></p>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password: <span>*</span></label>
                <input type="password" id="confirm_password" name="confirm_password" class="form-control">
                <p class="<?= ($this->session->flashdata('confirm_password_error')) ? 'error' : '' ?>"><?= $this->session->flashdata('confirm_password_error') ?></p>
                <p class="<?= ($this->session->flashdata('success')) ? 'success' : '' ?>"><?= $this->session->flashdata('success') ?></p>
            </div>
            <div class="form-group">
                <label></label>
                <input type="submit" name="submit" value="Sign Up" class="btn btn-primary">
            </div>
           
        </form>
    </div>

    <div class="container">
        <h1>Login</h1>
        <form action="/Students/login_proccess" method="POST">
            <div class="form-group">
                <label for="email">Email: <span>*</span></label>
                <input type="text" id="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password: <span>*</span></label>
                <input type="password" id="password" name="password" class="form-control">
                <p class="<?= ($this->session->flashdata('login_error')) ? 'error' : '' ?>"><?= $this->session->flashdata('login_error') ?></p>
            </div>
            <div class="form-group">
                <label></label>
                <input type="submit" name="submit" value="Login" class="btn btn-primary">
            </div>
           
        </form>
    </div>