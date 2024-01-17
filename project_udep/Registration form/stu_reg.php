<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="reg_style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Register As Student</div>
    <div class="content">
      <form action="stu_index.php" method="POST" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="fullname" placeholder="Enter your name" required>
          </div>
          <div class="input-box">
            <span class="details">University</span>
            <input type="text" name="university" placeholder="Enter your University" required>
          </div>
          <div class="input-box">
            <span class="details">Department</span>
            <input type="text" name="department" placeholder="use the correct spelling" required>
          </div>
          <div class="input-box">
            <span class="details">District</span>
            <input type="text" name="district" placeholder="use the correct spelling" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Contact Number</span>
            <input type="text" name="number" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" name="password" placeholder="Enter your password" required>
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input type="text" name="confirm_password" placeholder="Confirm your password" required>
          </div>
          <div class="input-box">
            <span class="details">Subject Required</span>
            <input type="text" name="subject" placeholder="ie.Algorithm" required>
          </div>
          <div class="input-box">
            <span class="details">Profile Picture</span>
            <input type="file" name="picture" placeholder="" required>
          </div>
        </div>
        <div class="gender-details">
          <input type="radio" name="gender" value="7am-2pm" id="dot-1" required>
          <input type="radio" name="gender" value="3pm-11pm" id="dot-2">
          <input type="radio" name="gender" value="12am-6am" id="dot-3">
          <span class="gender-title">Time</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">7am-2pm</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">3pm-11pm</span>
          </label>
          <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">12am-6am</span>
            </label>
          </div>
        </div>
        <div class="button">
          <input type="submit" name="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
