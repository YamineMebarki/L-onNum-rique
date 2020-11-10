<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* vendor/fzaninotto/faker/src/Faker/Provider/it_IT/Person.php */
class __TwigTemplate_b2442280147de8fe4df6b2b8ff2d088c0caa0a077929d5bc72f6aeb5aec44680 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/it_IT/Person.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/it_IT/Person.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\it_IT;

class Person extends \\Faker\\Provider\\Person
{
    protected static \$maleNameFormats = array(
        '";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 8, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 9, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["titleMale"]) || array_key_exists("titleMale", $context) ? $context["titleMale"] : (function () { throw new RuntimeError('Variable "titleMale" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["titleMale"]) || array_key_exists("titleMale", $context) ? $context["titleMale"] : (function () { throw new RuntimeError('Variable "titleMale" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$femaleNameFormats = array(
        '";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 17, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 18, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 19, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["titleFemale"]) || array_key_exists("titleFemale", $context) ? $context["titleFemale"] : (function () { throw new RuntimeError('Variable "titleFemale" does not exist.', 20, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 20, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 21, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["titleFemale"]) || array_key_exists("titleFemale", $context) ? $context["titleFemale"] : (function () { throw new RuntimeError('Variable "titleFemale" does not exist.', 22, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 22, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$firstNameMale = array(
        'Aaron', 'Abramo', 'Adriano', 'Akira', 'Alan', 'Alberto', 'Albino', 'Alessandro', 'Alessio', 'Amedeo', 'Amos', 'Anastasio', 'Anselmo',
        'Antimo', 'Antonino', 'Antonio', 'Ariel', 'Armando', 'Aroldo', 'Arturo', 'Augusto', 'Battista', 'Bernardo', 'Boris', 'Caio',
        'Carlo', 'Carmelo', 'Ciro', 'Damiano', 'Danny', 'Dante', 'Davide', 'Davis', 'Demis', 'Dimitri', 'Domingo', 'Dylan',
        'Edilio', 'Egidio', 'Elio', 'Emanuel', 'Emidio', 'Enrico', 'Enzo', 'Ercole', 'Ermes', 'Ethan', 'Ettore', 'Eusebio',
        'Fabiano', 'Fabio', 'Ferdinando', 'Fernando', 'Fiorenzo', 'Flavio', 'Folco', 'Fulvio', 'Furio', 'Gabriele', 'Gaetano', 'Gastone',
        'Gavino', 'Gerlando', 'Germano', 'Giacinto', 'Gianantonio', 'Giancarlo', 'Gianmarco', 'Gianmaria', 'Gioacchino', 'Giordano', 'Giorgio', 'Giuliano',
        'Giulio', 'Graziano', 'Gregorio', 'Guido', 'Harry', 'Hector', 'Iacopo', 'Ian', 'Ilario', 'Italo', 'Ivano', 'Jack',
        'Jacopo', 'Jari', 'Jarno', 'Joey', 'Joseph', 'Joshua', 'Kai', 'Karim', 'Kris', 'Lamberto', 'Lauro', 'Lazzaro',
        'Leonardo', 'Liborio', 'Lino', 'Lorenzo', 'Loris', 'Ludovico', 'Luigi', 'Manfredi', 'Manuele', 'Marco', 'Mariano', 'Marino',
        'Marvin', 'Marzio', 'Matteo', 'Mattia', 'Mauro', 'Max', 'Michael', 'Mirco', 'Mirko', 'Modesto', 'Moreno', 'Nabil',
        'Nadir', 'Nathan', 'Nazzareno', 'Nick', 'Nico', 'Noah', 'Noel', 'Omar', 'Oreste', 'Osvaldo', 'Pablo', 'Patrizio',
        'Pietro', 'Priamo', 'Quirino', 'Raoul', 'Renato', 'Renzo', 'Rocco', 'Rodolfo', 'Romeo', 'Romolo', 'Rudy', 'Sabatino',
        'Sabino', 'Samuel', 'Sandro', 'Santo', 'Sebastian', 'Sesto', 'Silvano', 'Silverio', 'Sirio', 'Siro', 'Timoteo', 'Timothy',
        'Tommaso', 'Ubaldo', 'Umberto', 'Vinicio', 'Walter', 'Xavier', 'Yago', 'Alighieri', 'Alighiero', 'Amerigo', 'Arcibaldo', 'Arduino',
        'Artes', 'Audenico', 'Ausonio', 'Bacchisio', 'Baldassarre', 'Bettino', 'Bortolo', 'Caligola', 'Cecco', 'Cirino', 'Cleros',
        'Costantino', 'Costanzo', 'Danthon', 'Demian','Domiziano', 'Edipo', 'Egisto', 'Eliziario', 'Eriberto', 'Erminio',
        'Eustachio', 'Evangelista', 'Fiorentino', 'Giacobbe', 'Gianleonardo', 'Gianriccardo', 'Giobbe', 'Ippolito',
        'Isira', 'Joannes', 'Kociss', 'Laerte', 'Maggiore', 'Muzio', 'Nestore', 'Odino', 'Odone', 'Olo', 'Oretta', 'Orfeo',
        'Osea', 'Pacifico', 'Pericle', 'Piererminio', 'Pierfrancesco', 'Piersilvio', 'Primo', 'Quarto', 'Quasimodo',
        'Radames', 'Radio', 'Raniero', 'Rosalino', 'Rosolino', 'Rufo', 'Secondo', 'Tancredi', 'Tazio', 'Terzo', 'Teseo',
        'Tolomeo',  'Trevis', 'Tristano', 'Ulrico', 'Valdo', 'Zaccaria', 'Dindo', 'Serse'
    );

    protected static \$firstNameFemale = array(
        'Assia', 'Benedetta', 'Bibiana', 'Brigitta', 'Carmela', 'Celeste', 'Cira', 'Claudia', 'Concetta', 'Cristyn', 'Deborah', 'Demi', 'Diana',
        'Donatella', 'Doriana', 'Edvige', 'Elda', 'Elga', 'Elsa', 'Emilia', 'Enrica', 'Erminia', 'Evita', 'Fatima', 'Felicia',
        'Filomena', 'Fortunata', 'Gilda', 'Giovanna', 'Giulietta', 'Grazia', 'Helga', 'Ileana', 'Ingrid', 'Ione', 'Irene', 'Isabel',
        'Ivonne', 'Jelena', 'Kayla', 'Kristel', 'Laura', 'Leone', 'Lia', 'Lidia', 'Lisa', 'Loredana', 'Loretta', 'Luce',
        'Lucia', 'Lucrezia', 'Luna', 'Maika', 'Marcella', 'Maria', 'Marianita', 'Mariapia', 'Marina', 'Maristella', 'Maruska', 'Matilde',
        'Mercedes', 'Michele', 'Miriam', 'Miriana', 'Monia', 'Morgana', 'Naomi', 'Neri', 'Nicoletta', 'Ninfa', 'Noemi', 'Nunzia',
        'Olimpia', 'Ortensia', 'Penelope', 'Prisca', 'Rebecca', 'Rita', 'Rosalba', 'Rosaria', 'Rosita', 'Ruth', 'Samira', 'Sarita',
        'Sasha', 'Shaira', 'Thea', 'Ursula', 'Vania', 'Vera', 'Vienna', 'Artemide', 'Cassiopea', 'Cesidia', 'Clea', 'Cleopatra',
        'Clodovea', 'Cosetta', 'Damiana', 'Danuta', 'Diamante', 'Eufemia', 'Flaviana', 'Gelsomina', 'Genziana', 'Giacinta', 'Guendalina',
        'Jole', 'Mariagiulia', 'Marieva', 'Mietta', 'Nayade', 'Piccarda', 'Selvaggia', 'Sibilla', 'Soriana', 'Sue ellen', 'Tosca','Violante',
        'Vitalba', 'Zelida'
    );

    protected static \$lastName = array(
        'Rossi', 'Russo', 'Ferrari', 'Esposito', 'Bianchi', 'Romano', 'Colombo', 'Ricci', 'Marino', 'Greco', 'Bruno', 'Gallo', 'Conti',
        'De luca', 'Mancini', 'Costa', 'Giordano', 'Rizzo', 'Lombardi', 'Moretti', 'Barbieri', 'Fontana', 'Santoro', 'Mariani',
        'Rinaldi', 'Caruso', 'Ferrara', 'Galli', 'Martini', 'Leone', 'Longo', 'Gentile', 'Martinelli', 'Vitale', 'Lombardo', 'Serra',
        'Coppola', 'De Santis', 'D\\'angelo', 'Marchetti', 'Parisi', 'Villa', 'Conte', 'Ferraro', 'Ferri', 'Fabbri', 'Bianco',
        'Marini', 'Grasso', 'Valentini', 'Messina', 'Sala', 'De Angelis', 'Gatti', 'Pellegrini', 'Palumbo', 'Sanna', 'Farina',
        'Rizzi', 'Monti', 'Cattaneo', 'Morelli', 'Amato', 'Silvestri', 'Mazza', 'Testa', 'Grassi', 'Pellegrino', 'Carbone',
        'Giuliani', 'Benedetti', 'Barone', 'Rossetti', 'Caputo', 'Montanari', 'Guerra', 'Palmieri', 'Bernardi', 'Martino', 'Fiore',
        'De rosa', 'Ferretti', 'Bellini', 'Basile', 'Riva', 'Donati', 'Piras', 'Vitali', 'Battaglia', 'Sartori', 'Neri', 'Costantini',
        'Milani', 'Pagano', 'Ruggiero', 'Sorrentino', 'D\\'amico', 'Orlando', 'Damico', 'Negri'
    );

    protected static \$titleMale = array('Sig.', 'Dott.', 'Dr.', 'Ing.');

    protected static \$titleFemale = array('Sig.ra', 'Dott.', 'Dr.', 'Ing.');

    private static \$suffix = array();

    /**
     * @example 'PhD'
     */
    public static function suffix()
    {
        return static::randomElement(static::\$suffix);
    }

    /**
     * TaxCode (CodiceFiscale)
     * @link https://it.wikipedia.org/wiki/Codice_fiscale
     * @return string
     */
    public static function taxId()
    {
        return strtoupper(static::bothify('??????##?##?###?'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/it_IT/Person.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 22,  121 => 21,  113 => 20,  107 => 19,  101 => 18,  95 => 17,  84 => 13,  78 => 12,  70 => 11,  64 => 10,  58 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\it_IT;

class Person extends \\Faker\\Provider\\Person
{
    protected static \$maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
    );

    protected static \$femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
    );

    protected static \$firstNameMale = array(
        'Aaron', 'Abramo', 'Adriano', 'Akira', 'Alan', 'Alberto', 'Albino', 'Alessandro', 'Alessio', 'Amedeo', 'Amos', 'Anastasio', 'Anselmo',
        'Antimo', 'Antonino', 'Antonio', 'Ariel', 'Armando', 'Aroldo', 'Arturo', 'Augusto', 'Battista', 'Bernardo', 'Boris', 'Caio',
        'Carlo', 'Carmelo', 'Ciro', 'Damiano', 'Danny', 'Dante', 'Davide', 'Davis', 'Demis', 'Dimitri', 'Domingo', 'Dylan',
        'Edilio', 'Egidio', 'Elio', 'Emanuel', 'Emidio', 'Enrico', 'Enzo', 'Ercole', 'Ermes', 'Ethan', 'Ettore', 'Eusebio',
        'Fabiano', 'Fabio', 'Ferdinando', 'Fernando', 'Fiorenzo', 'Flavio', 'Folco', 'Fulvio', 'Furio', 'Gabriele', 'Gaetano', 'Gastone',
        'Gavino', 'Gerlando', 'Germano', 'Giacinto', 'Gianantonio', 'Giancarlo', 'Gianmarco', 'Gianmaria', 'Gioacchino', 'Giordano', 'Giorgio', 'Giuliano',
        'Giulio', 'Graziano', 'Gregorio', 'Guido', 'Harry', 'Hector', 'Iacopo', 'Ian', 'Ilario', 'Italo', 'Ivano', 'Jack',
        'Jacopo', 'Jari', 'Jarno', 'Joey', 'Joseph', 'Joshua', 'Kai', 'Karim', 'Kris', 'Lamberto', 'Lauro', 'Lazzaro',
        'Leonardo', 'Liborio', 'Lino', 'Lorenzo', 'Loris', 'Ludovico', 'Luigi', 'Manfredi', 'Manuele', 'Marco', 'Mariano', 'Marino',
        'Marvin', 'Marzio', 'Matteo', 'Mattia', 'Mauro', 'Max', 'Michael', 'Mirco', 'Mirko', 'Modesto', 'Moreno', 'Nabil',
        'Nadir', 'Nathan', 'Nazzareno', 'Nick', 'Nico', 'Noah', 'Noel', 'Omar', 'Oreste', 'Osvaldo', 'Pablo', 'Patrizio',
        'Pietro', 'Priamo', 'Quirino', 'Raoul', 'Renato', 'Renzo', 'Rocco', 'Rodolfo', 'Romeo', 'Romolo', 'Rudy', 'Sabatino',
        'Sabino', 'Samuel', 'Sandro', 'Santo', 'Sebastian', 'Sesto', 'Silvano', 'Silverio', 'Sirio', 'Siro', 'Timoteo', 'Timothy',
        'Tommaso', 'Ubaldo', 'Umberto', 'Vinicio', 'Walter', 'Xavier', 'Yago', 'Alighieri', 'Alighiero', 'Amerigo', 'Arcibaldo', 'Arduino',
        'Artes', 'Audenico', 'Ausonio', 'Bacchisio', 'Baldassarre', 'Bettino', 'Bortolo', 'Caligola', 'Cecco', 'Cirino', 'Cleros',
        'Costantino', 'Costanzo', 'Danthon', 'Demian','Domiziano', 'Edipo', 'Egisto', 'Eliziario', 'Eriberto', 'Erminio',
        'Eustachio', 'Evangelista', 'Fiorentino', 'Giacobbe', 'Gianleonardo', 'Gianriccardo', 'Giobbe', 'Ippolito',
        'Isira', 'Joannes', 'Kociss', 'Laerte', 'Maggiore', 'Muzio', 'Nestore', 'Odino', 'Odone', 'Olo', 'Oretta', 'Orfeo',
        'Osea', 'Pacifico', 'Pericle', 'Piererminio', 'Pierfrancesco', 'Piersilvio', 'Primo', 'Quarto', 'Quasimodo',
        'Radames', 'Radio', 'Raniero', 'Rosalino', 'Rosolino', 'Rufo', 'Secondo', 'Tancredi', 'Tazio', 'Terzo', 'Teseo',
        'Tolomeo',  'Trevis', 'Tristano', 'Ulrico', 'Valdo', 'Zaccaria', 'Dindo', 'Serse'
    );

    protected static \$firstNameFemale = array(
        'Assia', 'Benedetta', 'Bibiana', 'Brigitta', 'Carmela', 'Celeste', 'Cira', 'Claudia', 'Concetta', 'Cristyn', 'Deborah', 'Demi', 'Diana',
        'Donatella', 'Doriana', 'Edvige', 'Elda', 'Elga', 'Elsa', 'Emilia', 'Enrica', 'Erminia', 'Evita', 'Fatima', 'Felicia',
        'Filomena', 'Fortunata', 'Gilda', 'Giovanna', 'Giulietta', 'Grazia', 'Helga', 'Ileana', 'Ingrid', 'Ione', 'Irene', 'Isabel',
        'Ivonne', 'Jelena', 'Kayla', 'Kristel', 'Laura', 'Leone', 'Lia', 'Lidia', 'Lisa', 'Loredana', 'Loretta', 'Luce',
        'Lucia', 'Lucrezia', 'Luna', 'Maika', 'Marcella', 'Maria', 'Marianita', 'Mariapia', 'Marina', 'Maristella', 'Maruska', 'Matilde',
        'Mercedes', 'Michele', 'Miriam', 'Miriana', 'Monia', 'Morgana', 'Naomi', 'Neri', 'Nicoletta', 'Ninfa', 'Noemi', 'Nunzia',
        'Olimpia', 'Ortensia', 'Penelope', 'Prisca', 'Rebecca', 'Rita', 'Rosalba', 'Rosaria', 'Rosita', 'Ruth', 'Samira', 'Sarita',
        'Sasha', 'Shaira', 'Thea', 'Ursula', 'Vania', 'Vera', 'Vienna', 'Artemide', 'Cassiopea', 'Cesidia', 'Clea', 'Cleopatra',
        'Clodovea', 'Cosetta', 'Damiana', 'Danuta', 'Diamante', 'Eufemia', 'Flaviana', 'Gelsomina', 'Genziana', 'Giacinta', 'Guendalina',
        'Jole', 'Mariagiulia', 'Marieva', 'Mietta', 'Nayade', 'Piccarda', 'Selvaggia', 'Sibilla', 'Soriana', 'Sue ellen', 'Tosca','Violante',
        'Vitalba', 'Zelida'
    );

    protected static \$lastName = array(
        'Rossi', 'Russo', 'Ferrari', 'Esposito', 'Bianchi', 'Romano', 'Colombo', 'Ricci', 'Marino', 'Greco', 'Bruno', 'Gallo', 'Conti',
        'De luca', 'Mancini', 'Costa', 'Giordano', 'Rizzo', 'Lombardi', 'Moretti', 'Barbieri', 'Fontana', 'Santoro', 'Mariani',
        'Rinaldi', 'Caruso', 'Ferrara', 'Galli', 'Martini', 'Leone', 'Longo', 'Gentile', 'Martinelli', 'Vitale', 'Lombardo', 'Serra',
        'Coppola', 'De Santis', 'D\\'angelo', 'Marchetti', 'Parisi', 'Villa', 'Conte', 'Ferraro', 'Ferri', 'Fabbri', 'Bianco',
        'Marini', 'Grasso', 'Valentini', 'Messina', 'Sala', 'De Angelis', 'Gatti', 'Pellegrini', 'Palumbo', 'Sanna', 'Farina',
        'Rizzi', 'Monti', 'Cattaneo', 'Morelli', 'Amato', 'Silvestri', 'Mazza', 'Testa', 'Grassi', 'Pellegrino', 'Carbone',
        'Giuliani', 'Benedetti', 'Barone', 'Rossetti', 'Caputo', 'Montanari', 'Guerra', 'Palmieri', 'Bernardi', 'Martino', 'Fiore',
        'De rosa', 'Ferretti', 'Bellini', 'Basile', 'Riva', 'Donati', 'Piras', 'Vitali', 'Battaglia', 'Sartori', 'Neri', 'Costantini',
        'Milani', 'Pagano', 'Ruggiero', 'Sorrentino', 'D\\'amico', 'Orlando', 'Damico', 'Negri'
    );

    protected static \$titleMale = array('Sig.', 'Dott.', 'Dr.', 'Ing.');

    protected static \$titleFemale = array('Sig.ra', 'Dott.', 'Dr.', 'Ing.');

    private static \$suffix = array();

    /**
     * @example 'PhD'
     */
    public static function suffix()
    {
        return static::randomElement(static::\$suffix);
    }

    /**
     * TaxCode (CodiceFiscale)
     * @link https://it.wikipedia.org/wiki/Codice_fiscale
     * @return string
     */
    public static function taxId()
    {
        return strtoupper(static::bothify('??????##?##?###?'));
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/it_IT/Person.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/it_IT/Person.php");
    }
}
