<!DOCTYPE html>
<html lang="fi">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Yhteystiedot</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <header>
            <nav>
                <h1><a href="index.html">Kuntospurtti</a></h1>
            <ul>
                <li><a href="sali.html">Kuntosali</a></li>
                <li><a href="treenit.html">Treenit</a></li>
                <li><a href="pt.html">Personal training</a></li>
                <li><a href="yhteys.php">Yhteys</a></li>
            </ul>
            </nav>    
        </header>
        <main>
        <h1>Yhteystiedot</h1>
            <div class="contact-laatikko">
            <div class="map">                
                <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d820.9170644026651!2d27.86766441549097!3d70.08174651121647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x45cb940aeef3e367%3A0x66e955beecacdb0d!2sHerrankuru%207%2C%2099990%20Utsjoki!5e0!3m2!1sfi!2sfi!4v1717869915133!5m2!1sfi!2sfi" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>					
            </div>    
            <div class="contact">
                <p> Kuntokeskus Kuntospurtti<br>
                Herrankuru 7, 99990 Nuorgam<br>
                04 567988<br>
                kuntokeskus@kuntospurtti.fi<br>
                </p>
            </div>
            </div>                
                <h2>Ota yhteyttä</h2>

                <p>Askarruttaako jokin? Jätä meille viesti.<br></p>

                <form action="" method="post">
                    <label for="name">Nimi:</label><br>
                    <input type="text" id="name" name="name" required><br><br>

                    <label for="email">Sähköposti:</label><br>
                    <input type="email" id="email" name="email" required><br><br>
        
                    <label for="message">Viesti:</label><br>
                    <textarea id="message" name="message" rows="4" cols="50" required></textarea><br><br>
        
                    <input type="submit" value="Lähetä">

                </form>
                <br>
                <?php
                // Tarkistus että lomake on lähetetty ja että lomakekentät on täytetty sekä tulostaa käyttäjälle viestin
                if ($_SERVER["REQUEST_METHOD"] == "POST") {  
                    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
                        echo "<div class='message-container success'><p>Viesti lähetetty. Vastaamme kolmen arkipäivän sisällä.</p></div>";
                    } else {
                        echo "<div class='message-container error'><p>Täytä kaikki kentät.</p></div>";
                    }
                }
                ?>
                
                </main>
                <footer>
                <p>
                Herrankuru 7, 99990 Nuorgam, puh. 04 567988, sposti: kuntokeskus@kuntospurtti.fi
                </p>
                <p>
                &copy;Kurpitsa Solutions 2024
                </p>
                </footer>
                      
            

        </body>
    
</html>
