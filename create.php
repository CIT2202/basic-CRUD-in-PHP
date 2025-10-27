<!DOCTYPE HTML>
<html>

<head>
  <title>Add new film</title>
  <meta http-equiv="content-type" content="text/html;charset=utf-8">
  <link href="css/style.css" type="text/css" rel="stylesheet">
</head>

<body>
  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="create.php">Add new film</a></li>
      <li><a href="about.php">About</a></li>
    </ul>
  </nav>
  <h1>Add a new film</h1>

  <form method="POST" action="store.php">
    <div>
      <label for="title">Title:</label>
      <input type="text" id="title" name="title">
    </div>
    <div>
      <label for="year">Year:</label>
      <input type="text" id="year" name="year">
    </div>
    <div>
      <label for="duration">Duration:</label>
      <input type="text" id="duration" name="duration">
    </div>
    <div>
      <label for="certId">Certificate id number (1='U', 2='PG', 3='12', 4='15', 5='18')
      </label>
      <input type="text" id="certId" name="certId">
    </div>
    <div>
      <button type="submit">SAVE THE FILM</button>
    </div>

  </form>

</body>

</html>