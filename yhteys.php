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
        <h1>Yhteystiedot</h1>
            <nav>
            <ul>
                <li><a href="index.html">Etusivu</a></li>
                <li><a href="pt.html">Personal Training</a></li>
                <li><a href="sali.html">Kuntosalin esittely</a></li>
                <li><a href=treenit.html>Ohjatut treenit</a></li>
            </ul>
            </nav>    
        </header>
        <main>
            <h2>Yhteystiedot</h2>

            <p> Kuntokeskus Kuntospurtti<br>
                Herrankuru 7, 99990 Nuorgam<br>
                04 567988<br>
                kuntokeskus@kuntospurtti.fi<br>
            </p>
                            
                <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d820.9170644026651!2d27.86766441549097!3d70.08174651121647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x45cb940aeef3e367%3A0x66e955beecacdb0d!2sHerrankuru%207%2C%2099990%20Utsjoki!5e0!3m2!1sfi!2sfi!4v1717869915133!5m2!1sfi!2sfi" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>					
                            
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
                
                <?php
                // Tarkistus että lomake on lähetetty ja että lomakekentät on täytetty sekä tulostaa käyttäjälle viestin
                if ($_SERVER["REQUEST_METHOD"] == "POST") {  
                    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
                        echo "<p>Viesti lähetetty. Vastaamme 3 arkipäivän sisällä.</p>";
                    } else {
                        echo "<p>Täytä kaikki kentät.</p>";
                    }
                }
                ?>
                
                </main>
                <footer>
                &copy;Kurpitsa Solutions 2024
                </footer>
                      
            

        </body>
    
</html>
