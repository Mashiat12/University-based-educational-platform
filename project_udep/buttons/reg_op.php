<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Custom Radio Button</title>
    <link rel="stylesheet" href="button_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="card">
      <div class="title">Register As:</div>
      <div class="content">
        <form method="POST" action="redirect.php">
          <input type="radio" name="option" value="teacher" id="one">
          <input type="radio" name="option" value="student" id="two">
          
          <label for="one" class="box first">
            <div class="plan">
              <span class="circle"></span>
              <span class="yearly">Teacher</span>
            </div>
            <span class="price">Spread Your Knowledge</span>
          </label>
          <label for="two" class="box second">
            <div class="plan">
              <span class="circle"></span>
              <span class="yearly">Student</span>
            </div>
            <span class="price">Search For Knowledge</span>
          </label>

          <button class="nd" type="submit" name="submit">Done</button>
        </form>
      </div>
    </div>
  </body>
</html>
