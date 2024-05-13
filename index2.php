<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Fade-in Animation</title>
<style>
  .fade-in {
    opacity: 0;
    animation: fadeIn 1s ease-in-out forwards;
  }
  
  @keyframes fadeIn {
    from {
      opacity: 0;
    }
    to {
      opacity: 1;
    }
  }

  /* Optional: Adjust styles as needed */
  .box {
    width: 200px;
    height: 200px;
    background-color: #ccc;
    margin: 50px auto;
    text-align: center;
    line-height: 200px;
  }
</style>
</head>
<body>
  <!-- Add the class "fade-in" to apply the animation -->
  <div class="box fade-in">
    Fade-in Animation
  </div>

  <!-- Dummy content to create scrollable area -->
  <div style="height: 2000px;">Scroll down to see the animation</div>
</body>
</html>