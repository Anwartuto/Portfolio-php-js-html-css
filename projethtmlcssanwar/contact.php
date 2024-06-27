<?php
class ContactPage {
    private $title;
    private $year;

    public function __construct($title) {
        $this->title = $title;
        $this->year = date("Y");
    }

    private function renderHeader() {
        return <<<HTML
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/styleContact.css" />
    <link rel="icon" type="image/x-icon" href="images/logo.ico">
    <script src="js/contact.js" defer></script>
    <title>{$this->title}</title>
</head>
HTML;
    }

    private function renderNav() {
        return <<<HTML
<body>
<header>
    <div id="logo">
        <img src="images/logo.png" alt="logo"/>
        <h1>{$this->title}</h1>
    </div>
    <nav>
        <ul>
            <li><a href="index.php">ACCUEIL</a></li>
            <li><a href="presentationTimbre.php">TIMBRES</a></li>
            <li><a href="contact.php">CONTACT</a></li>
        </ul>
    </nav>
</header>
HTML;
    }

    private function renderBanner() {
        return <<<HTML
<div id="banniere_image">
    <div id="banniere_texte">
        l'art de collectionner des timbres.
    </div>
</div>
HTML;
    }

    private function renderForm() {
        return <<<HTML
<main id="flex">
    <form>
        <fieldset>
            <legend>Formulaire de contact</legend>
            <label for='name'>Nom complet:</label> 
            <input type="text" placeholder="Nom complet"><br>

            <label for="email">Email:</label> 
            <input type="email" placeholder="your@email.com"><br>

            <label for="password">Mot de passe:</label>
            <input type="password"><br>

            <label for="phone">Téléphone:</label>
            <input type="tel" placeholder="06********"><br><br>
            
            <label for="gender">Genre:</label><br>
            <input type="radio" name="gender">Male <br>
            <input type="radio" name="gender">Female<br><br>
            
            <label for="age">Age:</label>
            <select>
                <option> 0-20 </option>
                <option> 20-40 </option>
                <option> 40+ </option>
            </select>
            <br><br>
            <label for="collection">Sujet de collection souhaité:</label><br>
            <input type="checkbox"> Philatélie fiscale<br>
            <input type="checkbox"> Philatélie thématique<br>
            <input type="checkbox"> Philatélie mondialiste<br>
            <input type="checkbox"> Aérophilatélie<br>
            <br><br>
            <label for="message">Message:</label>
            <textarea cols="115" rows="10" placeholder="Saisissez votre message ici."></textarea>
            <br><br>
            <input type="submit" value="Envoyer" id="submit">
            <input type="reset" value="Vider le formulaire">
        </fieldset>
        <div id="message"></div>
    </form>
</main>
HTML;
    }

    private function renderFooter() {
        return <<<HTML
<footer>
    <a href=""><img src="images/facebook.png" alt="facebook"></a>
    <a href=""><img src="images/twitter.png" alt="twitter"></a>
    <p>© {$this->year} Anwar</p> 
</footer>
</body>
</html>
HTML;
    }

    public function render() {
        echo $this->renderHeader();
        echo $this->renderNav();
        echo $this->renderBanner();
        echo $this->renderForm();
        echo $this->renderFooter();
    }
}

$page = new ContactPage("Page de Contact");
$page->render();
?>
