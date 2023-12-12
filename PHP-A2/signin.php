<!-- Including global header using php -->
<?php require ('./inc/header.php'); ?>
<!-- main content -->
  <main>
    <section class="masthead">
      <div>
        <h1>Login into your account by filling a quick form</h1>
      </div>
    </section>
    <!-- sign up form for new users -->
    <section class="form-row1">
      <div class="idiv1">
        <h3> New Here? Let's sign up below!</h3>
        <form method="post" action="save-admin.php">
        	<input class="form1" name="first_name" type="text" placeholder="First Name" required>
        	<input class="form1" name="last_name" type="text" placeholder="Last Name" required >
          <input class="form1" name="username" type="text" placeholder="Username" required >
        	<input class="form1" name="password" type="password" placeholder="Password" required >
        	<input class="form1" name="confirm" type="password" placeholder="Confirm Password" required >
          <input class="btn btn-light" type="submit" name="submit" value="Register">
        </form>
      </div>
      <!-- additional content -->
      <div class="idiv2">
        <h4>Join our team now!</h4>
        <p>Fill out the quick form to join our today!</p>
        <p>Get an opportunity to become a nail artist just in 3 months"</p>
        <p>Show you skills, explore most of your skills at our studio.</p>
      </div>
    </section>

    <!-- Sign in form for existing users -->
    <section class="form-row2">
      <div class="idiv3">
        <h4>Join our team now!</h4>
        <p>Fill out the quick form to join our today!</p>
        <p>Get an opportunity to become a nail artist just in 3 months"</p>
        <p>Show you skills, explore most of your skills at our studio.</p>
      </div>
      <div class="idiv4">
        <h3>Already signed up? Sign in below!</h3>
        <form method="post" action="./inc/validate.php">
        	<input class="form1" name="username" type="text" placeholder="Username" required>
        	<input class="form1" name="password" type="password" placeholder="Password" required >
          <input class="btn btn-light" type="submit" value="Login">
  
        </form>
      </div>
    </section>
  </main>
  <!-- including global footer -->
<?php require ('./inc/footer.php'); ?>
