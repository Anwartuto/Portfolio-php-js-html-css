<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/styleIndex.css" />
    <link rel="icon" type="image/x-icon" href="images/logo.ico">
    <title>L'art de collectionner des Timbres</title>
</head>
<body>
    <?php

    interface Renderable {
        public function render();
    }

    interface Clickable {
        public function onClick($action);
    }

    trait StyleTrait {
        protected $style;

        public function setStyle($style) {
            $this->style = $style;
        }

        public function getStyle() {
            return $this->style;
        }
    }

    trait ScriptTrait {
        protected $scripts = [];

        public function addScript($script) {
            $this->scripts[] = $script;
        }

        public function getScripts() {
            return $this->scripts;
        }
    }

    abstract class PageElement implements Renderable {
        protected $id;
        protected $class;

        public function __construct($id, $class) {
            $this->id = $id;
            $this->class = $class;
        }

        abstract public function render();
    }

    abstract class HTMLContent extends PageElement {
        protected $content;

        public function __construct($id, $class, $content) {
            parent::__construct($id, $class);
            $this->content = $content;
        }

        abstract public function render();
    }

    class Header extends PageElement {
        public function render() {
            echo "<header id='{$this->id}' class='{$this->class}'>
                    <div id='logo'>
                        <img src='images/logo.png' alt='logo'/>
                    </div>
                    <nav>
                        <ul>
                            <li><a href='index.php'>ACCUEIL</a></li>
                            <li><a href='presentationTimbre.php'>TIMBRES</a></li>
                            <li><a href='contact.php'>CONTACT</a></li>
                        </ul>
                    </nav>
                </header>";
        }
    }

    class Banner extends HTMLContent {
        public function render() {
            echo "<div id='{$this->id}' class='{$this->class}'>
                    <div id='banniere_texte'>
                        {$this->content}
                    </div>
                </div>";
        }
    }

    class Footer extends PageElement {
        public function render() {
            echo "<footer id='{$this->id}' class='{$this->class}'>
                    <a href=''><img src='images/facebook.png' alt='facebook'></a>
                    <a href=''><img src='images/twitter.png' alt='twitter'></a>
                    <p>© " . date("Y") . " Anwar</p>
                </footer>";
        }
    }

    $header = new Header("header", "header-class");
    $banner = new Banner("banniere_image", "banniere-class", "L'art de collectionner des timbres.");
    $footer = new Footer("footer", "footer-class");

    $header->render();
    $banner->render();
    ?>

    <main>
        <p>La collection de timbres est un loisir et aucune règle n’est imposée. 
        Chacun collectionnera suivant ses goûts et ses envies.<br>
        En règle générale, on classe les timbres neufs ensemble et l’on met les oblitérés à part. 
        Pour les anciens timbres, on peut mélanger neufs et oblitérés ce n’est pas gênant.<br>
        Il faut avant tout choisir une collection qui correspond à un budget précis. 
        Certaines collections sont très onéreuses.On peut se faire plaisir en collectionnant 
        avec un budget très modeste.</p>
        <h1>Type de philatélie</h1>
        <ul>
            <li>La philatélie fiscale</li>
            <p>Cette branche de la philatélie s’appelle également fiscophilie et est consacrée aux :
                <ul id='fiscale'>
                    <li>Papiers timbrés : c’est sous cette forme que les premiers timbres fiscaux ont fait leur apparition.</li>
                    <li>Timbres fiscaux mobiles : ces timbres sont apparus en 1840 après les timbres-poste.</li>
                    <li>Timbres sociaux-postaux : ces timbres permettent de montrer qu’une contribution sociale a été payée par les salariés ou les employeurs.</li>
                    <li>Oblitérations fiscales : elles permettent aux timbres de n’être utilisés qu’une fois.</li>
                </ul>
            </p>
            <li>La philatélie thématique</li>
            <p>Comme son nom l’indique, ce type de philatélie désigne l’action de collectionner les timbres par thème. Et ces thématiques sont très variées : 
            animaux, métiers, hommes ou femmes politiques, drapeaux, plantes, voitures, trains… 
            Le collectionneur choisit le thème en fonction de ses goûts et de ses envies. Il peut aussi affiner une thématique :
            par exemple, les félins, les plantes tropicales, etc. A l’origine, cette activité était appelée philatélie constructive.
            </p>
            <li>La philatélie mondialiste</li>
            <p>Rechercher et collectionner tous les timbres du monde ? C’est le pari du philatéliste mondialiste ! 
            Mais la tâche est immense, voire impossible : prix parfois élevés, beaucoup de temps à consacrer à la collection, 
            certains timbres difficiles à trouver, manque de place pour stocker les timbres, etc. 
            C’est pourquoi ces passionnés redéfinissent les limites de leur collection. 
            Ils peuvent se concentrer sur une période historique précise ou sur une zone
            </p>
            <li>L’aérophilatélie</li>
            <p>Cette discipline consiste à collectionner les timbres liés au transport aérien. 
            Le Cercle Aérophilatélique Français, association créée en 1957, est spécialisé sur l’histoire de la poste aérienne. 
            Les thématiques liées à cette branche de la philatélie sont variées. D’après le site internet du CAF,
            l’aérophilatélie regroupe l’étude des vols des pionniers de l’aviation, 
            des hommes et femmes ayant joué un rôle décisif dans l’histoire de l’aviation ou encore des courriers aériens accidentés.
            </p>
        </ul>    
    </main>

    <?php
    $footer->render();
    ?>
</body>
</html>
