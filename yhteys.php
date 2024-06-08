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
                Osoite: Keksikatu 55, 56560 Kaupunki<br>
                Puhelin: 04 567988<br>
                Sähköposti: kuntokeskus@kuntospurtti.fi<br>
            </p>
                            
                <p><img src="https://via.placeholder.com/250x150" alt=""></p>					
                            
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

