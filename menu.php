<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Kingston's Coffee</title>
        <link rel="browser tab icon" href="img/coffe-logo.png">
        <link rel="stylesheet" href="style.css">
        <link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    </head>


    <body>
      <nav class="navbar">
        <div class="container">
          <div class="navbar-menu">
            <a href="user.php">home</a>
            <a href="menu.php">menu</a> 
            <a href="about.php">about me</a>    
            <a href="user-logout.php" >logout</a>     
            <div id="theme">
                <a onclick="setDarkMode()" id="lightBtn"> Dark</a>
            </div>
          </div>
        </div>
      </nav>

      <section class="menu" id="menu">

        <div class="box-container">

            <div class="box">
                <img src="img/menu-1.png" alt="">
                <h3>Classic Cofffee Espresso</h3>
                <div class="price">$10</div>
            </div>

            <div class="box">
                <img src="img/menu-2.png" alt="">
                <h3 >Classic Cofffee Espresso</h3>
                <div class="price">$10</div>
            </div>

            <div class="box">
                <img src="img/menu-3.png" alt="">
                <h3>Classic Cofffee Espresso</h3>
                <div class="price">$10</div>
            </div>

            <div class="box">
                <img src="img/menu-4.png" alt="">
                <h3>Classic Cofffee Espresso</h3>
                <div class="price">$10</div>
            </div>

            <div class="box">
                <img src="img/menu-5.png" alt="">
                <h3>Classic Cofffee Espresso</h3>
                <div class="price">$10</div>
            </div>

            <div class="box">
                <img src="img/product-1.png" alt="">
                <h3>Popcorn Caramel</h3>
                <div class="price">$10</div>
            </div>

            <div class="box">
                <img src="img/product-2.png" alt="">
                <h3>Popcorn Caramel</h3>
                <div class="price">$10</div>
            </div>

            <div class="box">
                <img src="img/product-3.png" alt="">
                <h3>Popcorn Caramel</h3>
                <div class="price">$10</div>
            </div>

        </div>

    </section>

    <script>
      if(localStorage.getItem('theme') == 'dark') {
        setDarkMode()
    }

    function setDarkMode() {
    
        let saklar = " "
        let isDark = document.body.classList.toggle("darkmode");
    
        if(isDark) {
        //tambahan localstorage
            saklar = "Dark" 
            localStorage.setItem('theme', 'dark')
        } else {
         //tambahan localstorage
         saklar = "Light" 
        localStorage.removeItem('theme')
        }    
        document.getElementById('lightBtn').innerHTML = saklar;
    }
    </script>

    <footer id="footer-menu">
        Copyright &copy; 2022
        Designed by Hadiee
    </footer>
    </body>
</html>