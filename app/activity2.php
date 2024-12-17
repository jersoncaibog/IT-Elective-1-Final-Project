<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Activity 2</title>
    <link rel="stylesheet" href="../public/styles/homeBtn.css">
    <link rel="stylesheet" href="../public/styles/globals.css">
    <link rel="stylesheet" href="../public/styles/act2-.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <?php include "../components/returnBtn.php" ?>

    <header>
      <h1 id="main-heading">Activity 2 (CSS SELECTOR)</h1>
    </header>
    <nav>
      <ul>
        <li><a href="#nav1">Nav 1</a></li>
        <li><a href="#nav2">Nav 2</a></li>
      </ul>
    </nav>

    <section id="nav1">
      <h2 class="sub-heading">HTML</h2>
      <p>
        Hypertext Markup Language
        <strong>used to create and design the structure of web pages</strong>
        like images, tables, and more.
      </p>
      <button class="primary-btn">Explore</button>
    </section>

    <section id="nav2">
      <h2 class="sub-heading">CSS</h2>
      <p>
        <em>Cascading Style Sheets</em> a style sheet language used to define
        the look and formatting of a document written in HTML.
      </p>
      <button id="secondary-btn">Click Me</button>
    </section>

    <footer>
      <p>&copy; 2024 Jerson Caibog. All rights reserved.</p>
    </footer>
  </body>
</html>
