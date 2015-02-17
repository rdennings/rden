<!DOCTYPE html>
<html>

  <head>
    </title="rdennings.com">
    <?PHP 
      $homeDir = dirname('/home4/dennings').('/dennings/')."public_html/rdennings.com/"; 
      $strucDir = $homeDir . 'includes/structure/';
      include $strucDir . 'head.txt';
    ?>
    <title>rdennings.com</title>
  </head>
  
  <body>
  <!--<div id="container">-->
    <header>
      <span id="logo">
        <?PHP include($strucDir . 'header.txt'); ?>
      </span>
      <nav>
        <?PHP include($strucDir . 'navbar.txt'); ?>
      </nav>
    </header>
    
    <section id="content">
      <aside id="left">
      
      </aside>
      <section id="articles">
        <?PHP include($homeDir . '/includes/indexcon.txt'); ?>
      </section>
      
      <aside id="right">
      
      </aside>
    </section>
  <!--</div>-->
  </body>


</html>