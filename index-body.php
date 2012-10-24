  <header>
    <nav role="navigation" class="navigation">
            <?php
            echo '
                   <ul>
                    '.$menu.'
                </ul>
            ';
            ?>
    </nav>
    <h1>Reshad Farid</h1>
  </header>
  <div class="container" role="main">
    <?php 
        // load the content
        $page = isset($_GET['page']) ? $_GET['page'] : "main.php";
        if( file_exists($page)) include($page);
        else include("404.html");
        
    ?>
  </div>
  <footer>
    <a href="index.php?page=contact.php">Contact</a>
  </footer>
