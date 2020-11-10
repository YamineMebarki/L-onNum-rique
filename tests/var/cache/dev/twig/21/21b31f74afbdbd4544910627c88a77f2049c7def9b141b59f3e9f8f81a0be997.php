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

/* vendor/fzaninotto/faker/src/Faker/Provider/it_CH/Person.php */
class __TwigTemplate_a48ce71795d8c7ac075004a6b83a91003e35192085c3f08dead9aa9e45b2c650 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/it_CH/Person.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/it_CH/Person.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\it_CH;

class Person extends \\Faker\\Provider\\it_IT\\Person
{
    /**
     * @link http://www.bfs.admin.ch/bfs/portal/de/index/themen/01/02/blank/dos/prenoms/02.html
     */
    protected static \$firstNameMale = array(
        'Aaron', 'Adriano', 'Alain', 'Alan', 'Alberto', 'Aldo', 'Alessandro', 'Alessio', 'Alex', 'Alexander', 'Alfredo', 'Andrea', 'Andreas', 'André', 'Angelo', 'Antonino', 'Antonio', 'Aris', 'Armando', 'Arturo', 'Athos', 'Attilio', 'Augusto', 'Aurelio',
        'Boris', 'Bruno',
        'Carlo', 'Carlos', 'Carmelo', 'Carmine', 'Cesare', 'Christian', 'Claudio', 'Corrado', 'Cristian', 'Cristiano',
        'Damiano', 'Daniel', 'Daniele', 'Danilo', 'Dante', 'Dario', 'David', 'Davide', 'Denis', 'Diego', 'Domenico', 'Donato',
        'Edoardo', 'Elia', 'Elio', 'Emanuele', 'Emilio', 'Enea', 'Enrico', 'Enzo', 'Eric', 'Ernesto', 'Eros', 'Ettore', 'Eugenio', 'Ezio',
        'Fabiano', 'Fabio', 'Fabrizio', 'Fausto', 'Federico', 'Felice', 'Fernando', 'Filippo', 'Fiorenzo', 'Flavio', 'Francesco', 'Franco', 'Fulvio',
        'Gabriel', 'Gabriele', 'Gaetano', 'Gerardo', 'Giacomo', 'Gian', 'Giancarlo', 'Gianfranco', 'Gianluca', 'Gianni', 'Gioele', 'Giona', 'Giordano', 'Giorgio', 'Giovanni', 'Giuliano', 'Giulio', 'Giuseppe', 'Graziano', 'Guido',
        'Hans',
        'Igor', 'Ivan', 'Ivano', 'Ivo',
        'Jacopo', 'Jean', 'Joel', 'Jonathan', 'José',
        'Kevin', 'Kurt',
        'Leandro', 'Leonardo', 'Liam', 'Livio', 'Lorenzo', 'Loris', 'Luca', 'Luciano', 'Lucio', 'Luigi', 'Luis',
        'Manuel', 'Marcello', 'Marco', 'Marino', 'Mario', 'Marko', 'Markus', 'Martin', 'Martino', 'Marzio', 'Massimiliano', 'Massimo', 'Matteo', 'Mattia', 'Maurizio', 'Mauro', 'Michael', 'Michel', 'Michele', 'Mirco', 'Mirko', 'Moreno',
        'Nathan', 'Nicola', 'Nicolas', 'Nicolò', 'Noah',
        'Oliver', 'Omar', 'Oscar',
        'Paolo', 'Pasquale', 'Patrick', 'Paul', 'Pedro', 'Peter', 'Pier', 'Pierluigi', 'Piero', 'Pietro',
        'Raffaele', 'Remo', 'Renato', 'Renzo', 'René', 'Reto', 'Riccardo', 'Robert', 'Roberto', 'Rocco', 'Roland', 'Rolf', 'Romano', 'Rosario', 'Ruben', 'Rudolf',
        'Sacha', 'Salvatore', 'Samuel', 'Samuele', 'Sandro', 'Sebastian', 'Sebastiano', 'Sergio', 'Silvano', 'Silvio', 'Simon', 'Simone', 'Stefan', 'Stefano',
        'Thomas', 'Tiziano', 'Tommaso',
        'Valentino', 'Valerio', 'Vincenzo', 'Vito', 'Vittorio',
        'Walter', 'Werner',
    );

    /**
     * @link http://www.bfs.admin.ch/bfs/portal/de/index/themen/01/02/blank/dos/prenoms/02.html
     */
    protected static \$firstNameFemale = array(
        'Ada', 'Adele', 'Adriana', 'Agnese', 'Alessandra', 'Alessia', 'Alexandra', 'Alice', 'Aline', 'Ana', 'Andrea', 'Angela', 'Angelina', 'Anita', 'Anna', 'Annamaria', 'Antonella', 'Antonia', 'Antonietta', 'Arianna', 'Asia', 'Aurora',
        'Barbara', 'Beatrice', 'Bianca', 'Brigitte', 'Bruna',
        'Camilla', 'Carla', 'Carmela', 'Carmen', 'Carolina', 'Caterina', 'Cecilia', 'Chantal', 'Chiara', 'Christine', 'Cinzia', 'Clara', 'Claudia', 'Cristina',
        'Daniela', 'Debora', 'Deborah', 'Denise', 'Diana', 'Dolores', 'Donatella', 'Doris',
        'Elda', 'Elena', 'Eleonora', 'Eliana', 'Elisa', 'Elisabeth', 'Elisabetta', 'Elsa', 'Emanuela', 'Emilia', 'Emma', 'Enrica', 'Erica', 'Erika', 'Ester', 'Eva',
        'Fabiana', 'Federica', 'Fernanda', 'Filomena', 'Flavia', 'Franca', 'Francesca',
        'Gabriella', 'Gaia', 'Giada', 'Gianna', 'Giorgia', 'Giovanna', 'Giulia', 'Giuliana', 'Giuseppina', 'Gloria', 'Graziella', 'Greta',
        'Ida', 'Ilaria', 'Ines', 'Irene', 'Iris', 'Isabel', 'Isabella', 'Ivana',
        'Jacqueline', 'Jennifer', 'Jessica', 'Jolanda',
        'Karin', 'Katia',
        'Lara', 'Laura', 'Letizia', 'Lia', 'Lidia', 'Liliana', 'Lina', 'Linda', 'Lisa', 'Loredana', 'Lorena', 'Lorenza', 'Luana', 'Lucia', 'Luciana', 'Luisa',
        'Manuela', 'Mara', 'Margherita', 'Margrit', 'Maria', 'Mariangela', 'Marianne', 'Marie', 'Mariella', 'Marilena', 'Marina', 'Marisa', 'Marta', 'Martina', 'Matilde', 'Maura', 'Melissa', 'Michela', 'Michelle', 'Milena', 'Mirella', 'Miriam', 'Monica', 'Monika', 'Morena', 'Myriam',
        'Nadia', 'Nathalie', 'Nicole', 'Nicoletta', 'Nina', 'Nives', 'Noemi', 'Nora',
        'Olga', 'Ornella',
        'Pamela', 'Paola', 'Patricia', 'Patrizia', 'Pia', 'Pierina', 'Prisca',
        'Raffaella', 'Renata', 'Rita', 'Roberta', 'Romina', 'Rosa', 'Rosanna', 'Rosmarie', 'Ruth',
        'Sabina', 'Sabrina', 'Samantha', 'Sandra', 'Sara', 'Sarah', 'Serena', 'Silvana', 'Silvia', 'Simona', 'Sofia', 'Sonia', 'Sonja', 'Sophie', 'Stefania', 'Susanna', 'Susanne',
        'Tamara', 'Tania', 'Tatiana', 'Teresa', 'Tiziana',
        'Ursula',
        'Valentina', 'Valeria', 'Vanessa', 'Vera', 'Verena', 'Veronica', 'Virginia', 'Vittoria', 'Viviana',
        'Yvonne',
    );

    /**
     * @link http://blog.tagesanzeiger.ch/datenblog/index.php/6859
     */
    protected static \$lastName = array(
        'Agustoni', 'Alberti', 'Albertini', 'Albisetti', 'Ambrosini', 'Antonini',
        'Balestra', 'Balmelli', 'Bassetti', 'Bassi', 'Baumann', 'Beffa', 'Belotti', 'Beretta', 'Bernasconi', 'Berta', 'Besomi', 'Bettosini', 'Bianchi', 'Bianda', 'Bizzozero', 'Bonetti', 'Botta', 'Bottinelli', 'Brunner', 'Butti',
        'Caccia', 'Campana', 'Camponovo', 'Candolfi', 'Canepa', 'Canonica', 'Capoferri', 'Carrara', 'Casanova', 'Cassina', 'Castelli', 'Cattaneo', 'Cavadini', 'Cavalli', 'Ceppi', 'Cereghetti', 'Cerutti', 'Chiesa', 'Colombo', 'Conti', 'Corti', 'Costa', 'Crivelli', 'Croci',
        'Delcò', 'Delmenico', 'Donati',
        'Esposito',
        'Ferrari', 'Ferrazzini', 'Ferretti', 'Filippini', 'Fischer', 'Foglia', 'Foletti', 'Fontana', 'Forni', 'Frei', 'Frey', 'Frigerio', 'Fumagalli',
        'Galfetti', 'Galli', 'Gamboni', 'Genini', 'Gerosa', 'Ghirlanda', 'Gianella', 'Gianinazzi', 'Gianini', 'Giannini', 'Gianola', 'Gilardi', 'Giovannini', 'Giudici', 'Gobbi', 'Grandi', 'Grassi', 'Grossi', 'Guerra', 'Guglielmetti', 'Guidotti',
        'Huber',
        'Jelmini',
        'Keller',
        'Lafranchi', 'Leonardi', 'Leoni', 'Lepori', 'Locatelli', 'Lombardi', 'Lombardo', 'Lorenzetti', 'Lucchini', 'Lupi', 'Lurati',
        'Maggetti', 'Maggi', 'Maggini', 'Martinelli', 'Martini', 'Maspoli', 'Mattei', 'Medici', 'Meier', 'Meroni', 'Meyer', 'Milani', 'Minotti', 'Molinari', 'Molteni', 'Mombelli', 'Monti', 'Morandi', 'Mordasini', 'Moresi', 'Moretti', 'Morisoli', 'Moro', 'Moser', 'Müller',
        'Nessi', 'Notari',
        'Ortelli',
        'Pagani', 'Pagnamenta', 'Papa', 'Pedrazzi', 'Pedrazzini', 'Pedrini', 'Pedroni', 'Peduzzi', 'Pellanda', 'Pellegrini', 'Pelloni', 'Pescia', 'Pesenti', 'Petrini', 'Piffaretti', 'Pini', 'Polli', 'Ponti', 'Ponzio', 'Poretti', 'Pozzi',
        'Quadri',
        'Realini', 'Regazzoni', 'Rezzonico', 'Rigamonti', 'Righetti', 'Rinaldi', 'Riva', 'Rizzi', 'Robbiani', 'Rodoni', 'Romano', 'Roncoroni', 'Rosselli', 'Rossetti', 'Rossi', 'Rossini', 'Rusca', 'Rusconi', 'Russo',
        'Sala', 'Sargenti', 'Sartori', 'Sassi', 'Schmid', 'Schneider', 'Scolari', 'Solari', 'Solcà', 'Soldati', 'Soldini', 'Steiner', 'Storni', 'Sulmoni', 'Suter',
        'Taddei', 'Tamagni', 'Tettamanti', 'Togni', 'Tognola',
        'Valsangiacomo', 'Vassalli', 'Villa', 'Vitali',
        'Weber', 'Widmer',
        'Zanetti', 'Zanini', 'Zimmermann',
    );
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/it_CH/Person.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\it_CH;

class Person extends \\Faker\\Provider\\it_IT\\Person
{
    /**
     * @link http://www.bfs.admin.ch/bfs/portal/de/index/themen/01/02/blank/dos/prenoms/02.html
     */
    protected static \$firstNameMale = array(
        'Aaron', 'Adriano', 'Alain', 'Alan', 'Alberto', 'Aldo', 'Alessandro', 'Alessio', 'Alex', 'Alexander', 'Alfredo', 'Andrea', 'Andreas', 'André', 'Angelo', 'Antonino', 'Antonio', 'Aris', 'Armando', 'Arturo', 'Athos', 'Attilio', 'Augusto', 'Aurelio',
        'Boris', 'Bruno',
        'Carlo', 'Carlos', 'Carmelo', 'Carmine', 'Cesare', 'Christian', 'Claudio', 'Corrado', 'Cristian', 'Cristiano',
        'Damiano', 'Daniel', 'Daniele', 'Danilo', 'Dante', 'Dario', 'David', 'Davide', 'Denis', 'Diego', 'Domenico', 'Donato',
        'Edoardo', 'Elia', 'Elio', 'Emanuele', 'Emilio', 'Enea', 'Enrico', 'Enzo', 'Eric', 'Ernesto', 'Eros', 'Ettore', 'Eugenio', 'Ezio',
        'Fabiano', 'Fabio', 'Fabrizio', 'Fausto', 'Federico', 'Felice', 'Fernando', 'Filippo', 'Fiorenzo', 'Flavio', 'Francesco', 'Franco', 'Fulvio',
        'Gabriel', 'Gabriele', 'Gaetano', 'Gerardo', 'Giacomo', 'Gian', 'Giancarlo', 'Gianfranco', 'Gianluca', 'Gianni', 'Gioele', 'Giona', 'Giordano', 'Giorgio', 'Giovanni', 'Giuliano', 'Giulio', 'Giuseppe', 'Graziano', 'Guido',
        'Hans',
        'Igor', 'Ivan', 'Ivano', 'Ivo',
        'Jacopo', 'Jean', 'Joel', 'Jonathan', 'José',
        'Kevin', 'Kurt',
        'Leandro', 'Leonardo', 'Liam', 'Livio', 'Lorenzo', 'Loris', 'Luca', 'Luciano', 'Lucio', 'Luigi', 'Luis',
        'Manuel', 'Marcello', 'Marco', 'Marino', 'Mario', 'Marko', 'Markus', 'Martin', 'Martino', 'Marzio', 'Massimiliano', 'Massimo', 'Matteo', 'Mattia', 'Maurizio', 'Mauro', 'Michael', 'Michel', 'Michele', 'Mirco', 'Mirko', 'Moreno',
        'Nathan', 'Nicola', 'Nicolas', 'Nicolò', 'Noah',
        'Oliver', 'Omar', 'Oscar',
        'Paolo', 'Pasquale', 'Patrick', 'Paul', 'Pedro', 'Peter', 'Pier', 'Pierluigi', 'Piero', 'Pietro',
        'Raffaele', 'Remo', 'Renato', 'Renzo', 'René', 'Reto', 'Riccardo', 'Robert', 'Roberto', 'Rocco', 'Roland', 'Rolf', 'Romano', 'Rosario', 'Ruben', 'Rudolf',
        'Sacha', 'Salvatore', 'Samuel', 'Samuele', 'Sandro', 'Sebastian', 'Sebastiano', 'Sergio', 'Silvano', 'Silvio', 'Simon', 'Simone', 'Stefan', 'Stefano',
        'Thomas', 'Tiziano', 'Tommaso',
        'Valentino', 'Valerio', 'Vincenzo', 'Vito', 'Vittorio',
        'Walter', 'Werner',
    );

    /**
     * @link http://www.bfs.admin.ch/bfs/portal/de/index/themen/01/02/blank/dos/prenoms/02.html
     */
    protected static \$firstNameFemale = array(
        'Ada', 'Adele', 'Adriana', 'Agnese', 'Alessandra', 'Alessia', 'Alexandra', 'Alice', 'Aline', 'Ana', 'Andrea', 'Angela', 'Angelina', 'Anita', 'Anna', 'Annamaria', 'Antonella', 'Antonia', 'Antonietta', 'Arianna', 'Asia', 'Aurora',
        'Barbara', 'Beatrice', 'Bianca', 'Brigitte', 'Bruna',
        'Camilla', 'Carla', 'Carmela', 'Carmen', 'Carolina', 'Caterina', 'Cecilia', 'Chantal', 'Chiara', 'Christine', 'Cinzia', 'Clara', 'Claudia', 'Cristina',
        'Daniela', 'Debora', 'Deborah', 'Denise', 'Diana', 'Dolores', 'Donatella', 'Doris',
        'Elda', 'Elena', 'Eleonora', 'Eliana', 'Elisa', 'Elisabeth', 'Elisabetta', 'Elsa', 'Emanuela', 'Emilia', 'Emma', 'Enrica', 'Erica', 'Erika', 'Ester', 'Eva',
        'Fabiana', 'Federica', 'Fernanda', 'Filomena', 'Flavia', 'Franca', 'Francesca',
        'Gabriella', 'Gaia', 'Giada', 'Gianna', 'Giorgia', 'Giovanna', 'Giulia', 'Giuliana', 'Giuseppina', 'Gloria', 'Graziella', 'Greta',
        'Ida', 'Ilaria', 'Ines', 'Irene', 'Iris', 'Isabel', 'Isabella', 'Ivana',
        'Jacqueline', 'Jennifer', 'Jessica', 'Jolanda',
        'Karin', 'Katia',
        'Lara', 'Laura', 'Letizia', 'Lia', 'Lidia', 'Liliana', 'Lina', 'Linda', 'Lisa', 'Loredana', 'Lorena', 'Lorenza', 'Luana', 'Lucia', 'Luciana', 'Luisa',
        'Manuela', 'Mara', 'Margherita', 'Margrit', 'Maria', 'Mariangela', 'Marianne', 'Marie', 'Mariella', 'Marilena', 'Marina', 'Marisa', 'Marta', 'Martina', 'Matilde', 'Maura', 'Melissa', 'Michela', 'Michelle', 'Milena', 'Mirella', 'Miriam', 'Monica', 'Monika', 'Morena', 'Myriam',
        'Nadia', 'Nathalie', 'Nicole', 'Nicoletta', 'Nina', 'Nives', 'Noemi', 'Nora',
        'Olga', 'Ornella',
        'Pamela', 'Paola', 'Patricia', 'Patrizia', 'Pia', 'Pierina', 'Prisca',
        'Raffaella', 'Renata', 'Rita', 'Roberta', 'Romina', 'Rosa', 'Rosanna', 'Rosmarie', 'Ruth',
        'Sabina', 'Sabrina', 'Samantha', 'Sandra', 'Sara', 'Sarah', 'Serena', 'Silvana', 'Silvia', 'Simona', 'Sofia', 'Sonia', 'Sonja', 'Sophie', 'Stefania', 'Susanna', 'Susanne',
        'Tamara', 'Tania', 'Tatiana', 'Teresa', 'Tiziana',
        'Ursula',
        'Valentina', 'Valeria', 'Vanessa', 'Vera', 'Verena', 'Veronica', 'Virginia', 'Vittoria', 'Viviana',
        'Yvonne',
    );

    /**
     * @link http://blog.tagesanzeiger.ch/datenblog/index.php/6859
     */
    protected static \$lastName = array(
        'Agustoni', 'Alberti', 'Albertini', 'Albisetti', 'Ambrosini', 'Antonini',
        'Balestra', 'Balmelli', 'Bassetti', 'Bassi', 'Baumann', 'Beffa', 'Belotti', 'Beretta', 'Bernasconi', 'Berta', 'Besomi', 'Bettosini', 'Bianchi', 'Bianda', 'Bizzozero', 'Bonetti', 'Botta', 'Bottinelli', 'Brunner', 'Butti',
        'Caccia', 'Campana', 'Camponovo', 'Candolfi', 'Canepa', 'Canonica', 'Capoferri', 'Carrara', 'Casanova', 'Cassina', 'Castelli', 'Cattaneo', 'Cavadini', 'Cavalli', 'Ceppi', 'Cereghetti', 'Cerutti', 'Chiesa', 'Colombo', 'Conti', 'Corti', 'Costa', 'Crivelli', 'Croci',
        'Delcò', 'Delmenico', 'Donati',
        'Esposito',
        'Ferrari', 'Ferrazzini', 'Ferretti', 'Filippini', 'Fischer', 'Foglia', 'Foletti', 'Fontana', 'Forni', 'Frei', 'Frey', 'Frigerio', 'Fumagalli',
        'Galfetti', 'Galli', 'Gamboni', 'Genini', 'Gerosa', 'Ghirlanda', 'Gianella', 'Gianinazzi', 'Gianini', 'Giannini', 'Gianola', 'Gilardi', 'Giovannini', 'Giudici', 'Gobbi', 'Grandi', 'Grassi', 'Grossi', 'Guerra', 'Guglielmetti', 'Guidotti',
        'Huber',
        'Jelmini',
        'Keller',
        'Lafranchi', 'Leonardi', 'Leoni', 'Lepori', 'Locatelli', 'Lombardi', 'Lombardo', 'Lorenzetti', 'Lucchini', 'Lupi', 'Lurati',
        'Maggetti', 'Maggi', 'Maggini', 'Martinelli', 'Martini', 'Maspoli', 'Mattei', 'Medici', 'Meier', 'Meroni', 'Meyer', 'Milani', 'Minotti', 'Molinari', 'Molteni', 'Mombelli', 'Monti', 'Morandi', 'Mordasini', 'Moresi', 'Moretti', 'Morisoli', 'Moro', 'Moser', 'Müller',
        'Nessi', 'Notari',
        'Ortelli',
        'Pagani', 'Pagnamenta', 'Papa', 'Pedrazzi', 'Pedrazzini', 'Pedrini', 'Pedroni', 'Peduzzi', 'Pellanda', 'Pellegrini', 'Pelloni', 'Pescia', 'Pesenti', 'Petrini', 'Piffaretti', 'Pini', 'Polli', 'Ponti', 'Ponzio', 'Poretti', 'Pozzi',
        'Quadri',
        'Realini', 'Regazzoni', 'Rezzonico', 'Rigamonti', 'Righetti', 'Rinaldi', 'Riva', 'Rizzi', 'Robbiani', 'Rodoni', 'Romano', 'Roncoroni', 'Rosselli', 'Rossetti', 'Rossi', 'Rossini', 'Rusca', 'Rusconi', 'Russo',
        'Sala', 'Sargenti', 'Sartori', 'Sassi', 'Schmid', 'Schneider', 'Scolari', 'Solari', 'Solcà', 'Soldati', 'Soldini', 'Steiner', 'Storni', 'Sulmoni', 'Suter',
        'Taddei', 'Tamagni', 'Tettamanti', 'Togni', 'Tognola',
        'Valsangiacomo', 'Vassalli', 'Villa', 'Vitali',
        'Weber', 'Widmer',
        'Zanetti', 'Zanini', 'Zimmermann',
    );
}
", "vendor/fzaninotto/faker/src/Faker/Provider/it_CH/Person.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/it_CH/Person.php");
    }
}
