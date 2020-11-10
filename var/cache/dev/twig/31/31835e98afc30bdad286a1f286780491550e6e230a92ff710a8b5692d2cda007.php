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

/* vendor/fzaninotto/faker/src/Faker/Provider/en_ZA/Person.php */
class __TwigTemplate_a4fd68a362522383e18a1df6a50301a826a244127f3fcf672ecbf06bc6b0f83b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_ZA/Person.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_ZA/Person.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\en_ZA;

use Faker\\Calculator\\Luhn;

class Person extends \\Faker\\Provider\\Person
{
    protected static \$maleNameFormats = array(
        '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 11
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
    );

    protected static \$firstNameMale = array(
        'Abraham', 'Adriaan', 'Adrian', 'Ahmed', 'Alan', 'Albert', 'Alex', 'Alexander', 'Alfred', 'Allan', 'Andile', 'Andre', 'Andrew',
        'André', 'Anthony', 'Anton', 'Arnold', 'Arthur', 'Ayanda', 'Barry', 'Ben', 'Benjamin', 'Bernard', 'Bongani', 'Bradley',
        'Brandon', 'Brent', 'Brett', 'Brian', 'Bruce', 'Bryan', 'Carel', 'Carl', 'Charl', 'Charles', 'Chris', 'Christiaan',
        'Christian', 'Christo', 'Christopher', 'Clifford', 'Clint', 'Clinton', 'Clive', 'Colin', 'Conrad', 'Cornelius', 'Craig', 'Daniel',
        'Darren', 'Dave', 'David', 'Dean', 'Dennis', 'Deon', 'Derek', 'Desmond', 'Dirk', 'Donald', 'Donovan', 'Douglas',
        'Edward', 'Edwin', 'Emmanuel', 'Eric', 'Ernest', 'Etienne', 'Eugene', 'Francis', 'Francois', 'Frank', 'Frans', 'Frederick',
        'Gabriel', 'Gareth', 'Garth', 'Gary', 'Gavin', 'George', 'Gerald', 'Gerhard', 'Gerrit', 'Gert', 'Gideon', 'Godfrey',
        'Gordon', 'Graham', 'Grant', 'Greg', 'Gregory', 'Hannes', 'Heinrich', 'Hendrik', 'Hennie', 'Henry', 'Herman', 'Ian',
        'Innocent', 'Isaac', 'Itumeleng', 'Ivan', 'Jabulani', 'Jaco', 'Jacob', 'Jacques', 'James', 'Jan', 'Jason', 'Jeffrey',
        'Jeremy', 'Jerome', 'Joe', 'Johan', 'Johann', 'Johannes', 'John', 'Jonathan', 'Joseph', 'Juan', 'Julian', 'Justin',
        'Keith', 'Kenneth', 'Kevin', 'Kgomotso', 'Kobus', 'Kyle', 'Lawrence', 'Lee', 'Leon', 'Leonard', 'Lloyd', 'Louis',
        'Lucas ', 'Lucky', 'Malcolm', 'Mandla', 'Marc', 'Marco', 'Mario', 'Marius', 'Mark', 'Martin', 'Matthew', 'Mduduzi',
        'Michael', 'Mike', 'Mogamat', 'Mohamed', 'Mohammed', 'Morne', 'Morné', 'Moses', 'Mr. ', 'Muhammad', 'Musa', 'Nathan',
        'Neil', 'Neo', 'Neville', 'Nicholas', 'Nick', 'Nico', 'Nigel', 'Nkululeko', 'Norman', 'Ntokozo', 'Patrick', 'Paul',
        'Peter', 'Petrus', 'Philip', 'Phillip', 'Pierre', 'Pieter', 'Prince', 'Raymond', 'Rene', 'René', 'Riaan', 'Ricardo',
        'Richard', 'Rob', 'Robert', 'Rodney', 'Roger', 'Ronald', 'Roy', 'Rudi', 'Russell', 'Ryan', 'Sam', 'Samuel',
        'Sandile', 'Sean', 'Shane', 'Shaun', 'Shawn', 'Sibusiso', 'Simon', 'Simone', 'Simphiwe', 'Siphiwe', 'Sipho', 'Siyabonga',
        'Sizwe', 'Stanley', 'Stefan', 'Stephan', 'Stephen', 'Steve', 'Steven', 'Stuart', 'Tebogo', 'Terence', 'Thabang', 'Thabiso',
        'Thabo', 'Thando', 'Thapelo', 'Themba', 'Theo', 'Thomas', 'Timothy', 'To ', 'Tony', 'Trevor', 'Tshepo', 'Tsholofelo',
        'Vernon', 'Victor', 'Vincent', 'Walter', 'Warren', 'Wayne', 'Werner', 'Wesley', 'Willem', 'William', 'Willie', 'Wynand',
        'Xolani', 'Yusuf', 'andries', 'barend', 'contact', 'dumisani', 'jacobus', 'kabelo', 'kagiso', 'karabo', 'lesego', 'marthinus',
        'mashudu', 'next', 'nhlanhla', 'nicolaas', 'nkosinathi', 'personal', 'sello', 'sifiso', 'takalani', 'teboho', 'thulani', 'tumelo',
        'vusi', 'your',
        // below are unknown gender firstnames
        'Andries', 'Babalwa', 'Barend', 'Bulelwa', 'Contact ', 'Dumisani', 'Fikile', 'Jacobus', 'Kabelo', 'Kagiso', 'Karabo', 'Kelebogile', 'Lesego',
        'Lindiwe', 'Marthinus', 'Mashudu', 'Next', 'Nhlanhla', 'Nicolaas', 'Nkosinathi', 'Nompumelelo', 'Nonhlanhla', 'Nonkululeko', 'Nosipho', 'Nozipho',
        'Personal', 'Phumzile', 'Refiloe', 'Sello', 'Sibongile', 'Sifiso', 'Siphokazi', 'Takalani', 'Teboho', 'Thandeka', 'Thandi', 'Thembi',
        'Thulani', 'Tumelo', 'Unathi', 'Vusi', 'Vuyokazi', 'Yolandi', 'Your', 'Zandile',
    );

    protected static \$firstNameFemale = array(
        'Abigail', 'Adele', 'Alicia', 'Alison', 'Amanda', 'Andiswa', 'Andrea', 'Angela', 'Angelique', 'Anita', 'Anna', 'Anne', 'Anthea',
        'Antoinette', 'Asanda', 'Ashley', 'Aubrey', 'Barbara', 'Belinda', 'Beverley', 'Bianca', 'Boitumelo', 'Bongiwe', 'Brenda', 'Bronwyn',
        'Busisiwe', 'Candice', 'Carla', 'Carmen', 'Carol', 'Caroline', 'Catherine', 'Cecilia', 'Celeste', 'Chantal', 'Chantel', 'Chantelle',
        'Charlene', 'Charlotte', 'Charmaine', 'Cheryl', 'Christina', 'Christine', 'Cindy', 'Claire', 'Claudia', 'Colleen', 'Cynthia', 'Danie',
        'Danielle', 'Debbie', 'Deborah', 'Denise', 'Desiree', 'Diane', 'Dimakatso', 'Dineo', 'Duduzile', 'Elaine', 'Elizabeth', 'Estelle',
        'Esther ', 'Faith', 'Fatima', 'Fiona', 'Gail', 'Gillian', 'Gloria', 'Grace', 'Gugu', 'Gugulethu', 'Heather', 'Heidi',
        'Helen', 'Ingrid', 'Irene', 'Jackie', 'Jacqueline', 'Jane', 'Janet', 'Janine', 'Jean', 'Jeanette ', 'Jennifer', 'Jenny',
        'Jessica', 'Johanna', 'Joyce', 'Juanita', 'Judith', 'Julia', 'Julie', 'Karen', 'Karin', 'Katlego', 'Kelly', 'Kim',
        'Laura', 'Lauren', 'Lebogang', 'Lebohang', 'Lee-ann', 'Leigh', 'Lerato', 'Lesley', 'Liezel', 'Linda', 'Lisa', 'Lizelle',
        'Lorraine', 'Louise', 'Lungile', 'Lydia', 'Lynette', 'Lynn', 'Mandisa', 'Mandy', 'Margaret', 'Maria', 'Marlene', 'Martha',
        'Mary', 'Maureen', 'Mbali', 'Megan', 'Melanie', 'Melissa', 'Michelle', 'Miss', 'Monica', 'Monique', 'Mpho', 'Nadia',
        'Nadine', 'Natalie', 'Natasha', 'Nicola', 'Nicole', 'Nicolene', 'Nicolette', 'Nokuthula', 'Nomfundo', 'Nomsa', 'Nthabiseng', 'Olivia',
        'Palesa', 'Pamela', 'Patience', 'Patricia', 'Pearl', 'Phindile ', 'Portia', 'Precious', 'Priscilla', 'Prudence', 'Rachel', 'Rebecca',
        'Refilwe', 'Robin', 'Robyn', 'Ronel', 'Roxanne', 'Ruth', 'Samantha', 'Sandra', 'Sarah', 'Shannon', 'Sharon', 'Shirley',
        'Sonja', 'Stephanie', 'Susan', 'Sydney', 'Sylvia', 'Tania', 'Tanya', 'Taryn', 'Tasneem', 'Thato', 'Theresa', 'Tracey',
        'Tracy', 'Tshegofatso', 'Tshepiso', 'Ursula', 'Vanessa', 'Veronica', 'Victoria', 'Wendy', 'Yolanda', 'Yvette', 'Yvonne', 'Zama',
        'Zanele', 'Zelda', 'babalwa', 'bulelwa', 'fikile', 'kelebogile', 'lindiwe', 'nompumelelo', 'nonhlanhla', 'nonkululeko', 'nosipho', 'nozipho',
        'phumzile', 'refiloe', 'sibongile', 'siphokazi', 'thandeka', 'thandi', 'thembi', 'unathi', 'vuyokazi', 'yolandi', 'zandile',
        // below are unknown gender firstnames
        'Andries', 'Babalwa', 'Barend', 'Bulelwa', 'Contact ', 'Dumisani', 'Fikile', 'Jacobus', 'Kabelo', 'Kagiso', 'Karabo', 'Kelebogile', 'Lesego',
        'Lindiwe', 'Marthinus', 'Mashudu', 'Next', 'Nhlanhla', 'Nicolaas', 'Nkosinathi', 'Nompumelelo', 'Nonhlanhla', 'Nonkululeko', 'Nosipho', 'Nozipho',
        'Personal', 'Phumzile', 'Refiloe', 'Sello', 'Sibongile', 'Sifiso', 'Siphokazi', 'Takalani', 'Teboho', 'Thandeka', 'Thandi', 'Thembi',
        'Thulani', 'Tumelo', 'Unathi', 'Vusi', 'Vuyokazi', 'Yolandi', 'Your', 'Zandile',
    );

    protected static \$lastName = array(
        'Naidoo', 'Govender', 'Pillay', 'Smith', 'Botha', 'van der Merwe', 'Jacobs', 'Moodley', 'Singh', 'Ndlovu', 'Dlamini',
        'Pretorius', 'Williams', 'Khumalo', 'du Plessis', 'Nkosi', 'Coetzee', 'Venter', 'Nel', 'Fourie', 'Van Wyk', 'Chetty',
        'Smit', 'Kruger', 'Van Zyl', 'Sithole', 'du Toit', 'Adams', 'van Niekerk', 'Reddy', 'Khan', 'Meyer', 'Mahlangu', 'Abrahams',
        'Mokoena', 'Erasmus', 'Dube', 'Louw', 'Le Roux', 'Steyn', 'Tshabalala', 'Swanepoel', 'Naicker', 'Marais', 'Joubert',
        'Baloyi', 'Petersen', 'Davids', 'Viljoen', 'Maharaj', 'Details', 'Swart', 'Radebe', 'Potgieter', 'van der Westhuizen',
        'Move', 'Strydom', 'Mkhize', 'Olivier', 'Du Preez', 'Van Rooyen', 'Brown', 'Engelbrecht', 'Oosthuizen', 'Hendricks',
        'Ngwenya', 'van der Walt', 'Johnson', 'Thomas', 'Van Heerden', 'Ngcobo', 'de Beer', 'Khoza', 'Barnard', 'Ferreira',
        'Muller', 'Mazibuko', 'Zulu', 'Moyo', 'Zwane', 'Maseko', 'Chauke', 'Bezuidenhout', 'De Villiers', 'Jones', 'Buthelezi',
        'Mthembu', 'Jordaan', 'Molefe', 'Mofokeng', 'Burger', 'Visser', 'Daniels', 'Maluleke', 'Pienaar', 'Martin', 'Cloete',
        'Prinsloo', 'Mathebula', 'Janse van Rensburg', 'Grobler', 'Wilson', 'Ncube', 'Gumede', 'Ngobeni', 'Moloi', 'Kekana',
        'Mhlongo', 'Mbatha', 'Nxumalo', 'Theron', 'Snyman', 'Phiri', 'Sibiya', 'Ntuli', 'Van Den Berg', 'Mabaso', 'Bester',
        'Isaacs', 'Labuschagne', 'Jansen', 'Pieterse', 'Vorster', 'De Wet', 'Schoeman', 'De Klerk', 'Groenewald', 'Sibanda',
        'Rossouw', 'Van Rensburg', 'Naidu', 'De Jager', 'van Staden', 'Scheepers', 'Nhlapo', 'Nkuna', 'Kotze', 'Mtshali',
        'Modise', 'Ismail', 'Van Schalkwyk', 'Padayachee', 'Taylor', 'Thompson', 'Motaung', 'Booysen', 'Patel', 'Harris',
        'Joseph', 'Mthethwa', 'Arendse', 'Vilakazi', 'Lombard', 'Roberts', 'Steenkamp', 'Roux', 'Gouws', 'Botes', 'De Kock',
        'Lewis', 'James', 'Mnisi', 'Mohamed', 'Africa', 'Wessels', 'Badenhorst', 'Miller', 'Hlongwane', 'Hlatshwayo', 'Vermeulen',
        'Kunene', 'Liebenberg', 'Alexander', 'Mudau', 'Myburgh', 'van Tonder', 'Hattingh', 'Mhlanga', 'Francis', 'Mkhwanazi',
        'Basson', 'Boshoff', 'Scott', 'Xaba', 'De Lange', 'Mphahlele', 'Ebrahim', 'Cele', 'Matlala', 'Beukes', 'Coetzer',
        'Nkomo', 'Ledwaba', 'Ndaba', 'Parker', 'Els', 'Green', 'Mnguni', 'Scholtz', 'King', 'Anderson', 'Langa', 'Mulaudzi',
        'Simelane', 'Jackson', 'Shabangu', 'Mostert', 'Dhlamini', 'Geldenhuys', 'Ngubane', 'Skosana', 'Bekker', 'Phillips',
        'Brits', 'Mahomed', 'Human', 'Peters', 'George', 'Cronje', 'Sibeko', 'Swartz', 'Jooste', 'Matthews', 'Du Plooy',
        'Roos', 'Van Vuuren', 'Esterhuizen', 'Masuku', 'Mabunda', 'Lawrence', 'Moses', 'Fisher', 'Visagie', 'Solomon', 'Naude',
        'Gerber', 'Campbell', 'Lubbe', 'Van Dyk', 'Vermaak', 'Kubheka', 'Malan', 'da Silva', 'White', 'Malatji', 'Mashaba',
        'Edwards', 'Banda', 'Greyling', 'Dreyer', 'Hadebe', 'Fredericks', 'Mdluli', 'Maritz', 'Zondi', 'Masemola', 'Mabasa',
        'Fortuin', 'Shabalala', 'Bosman', 'Brink', 'Ndhlovu', 'Moonsamy', 'Mogale', 'Tsotetsi', 'Mabena', 'Morris', 'Mitchell',
        'Morgan', 'Gordon', 'Robinson', 'Dladla', 'Kriel', 'Young', 'Moloto', 'Mabuza', 'Richards', 'Sibanyoni', 'Stevens',
        'Pather', 'Mngomezulu', 'Masango', 'Solomons', 'Mlambo', 'Shongwe', 'Mthombeni', 'Lourens', 'Zungu', 'Mamabolo',
        'Watson', 'Opperman', 'Stander', 'Nair', 'Twala', 'Uys', 'Letsoalo', 'Clark', 'Wright', 'Mohlala', 'Cupido', 'Delport',
        'Sibisi', 'Terblanche', 'Motloung', 'De Bruyn', 'Davis', 'Ndou', 'Bothma', 'Benjamin', 'Jansen van Vuuren', 'Rikhotso',
        'Majola', 'Pietersen', 'Mashego', 'Herbst', 'van Deventer', 'Conradie', 'Khanyile', 'Msibi', 'Mchunu', 'Buys', 'Malinga',
        'Britz', 'Bailey', 'Cilliers', 'Goosen', 'Walker', 'Schutte', 'Salie', 'Samuels', 'Davies', 'Nkabinde', 'Robertson',
        'Lee', 'Perumal', 'Mbele', 'Greeff', 'Brand', 'Manuel', 'Nyathi', 'Kumar', 'Moore', 'Masilela', 'Bell', 'Mohale',
        'Hill', 'Maree', 'Ross', 'Bouwer', 'Ellis', 'Kemp', 'Mpofu', 'Wood', 'Stewart', 'Ahmed', 'Peter', 'Slabbert', 'Nortje',
        'Murray', 'Van Aswegen', 'De Bruin', 'Collins', 'Blignaut', 'Van Der Berg', 'Modiba', 'Jonker', 'Hall', 'Mouton',
        'Allie', 'Van Jaarsveld', 'Minnaar', 'Street', 'Maake', 'Zondo', 'Koekemoer', 'Koen', 'Claassen', 'Khosa', 'Barnes',
        'Bosch', 'Mncube', 'Marx', 'Ntombela', 'Nell', 'Makhubela', 'Jansen van Rensburg', 'Evans', 'Clarke', 'Strauss',
        'Mokone', 'Moosa', 'Neethling', 'September', 'Madonsela', 'Willemse', 'Mashigo', 'Simpson', 'Otto', 'Legodi', 'Mlangeni',
        'Mokwena', 'Andrews', 'Mashele', 'Gounden', 'Zuma', 'Msomi', 'Ngema', 'Bennett', 'Baker', 'Ntshangase', 'Nene',
        'Magagula', 'Tladi', 'Xulu', 'Müller', 'Laubscher', 'Maluleka', 'May', 'Rautenbach', 'Ndebele', 'Grobbelaar', 'Henning',
        'Carstens', 'Maleka', 'Odendaal', 'Kok', 'Oliver', 'Cassim', 'Van Eeden', 'Lottering', 'Mavuso', 'Mashinini', 'Kumalo',
        'Mathe', 'Taljaard', 'Molepo', 'David', 'Shezi', 'Turner', 'Oberholzer', 'Motsepe', 'Alberts', 'Adonis', 'van den Heever',
        'van der Linde', 'Marshall', 'Hugo', 'Thwala', 'Park', 'Cooper', 'Nelson', 'John', 'Anthony', 'Adam', 'Naudé', 'Harrison',
        'Mulder', 'Enslin', 'Truter', 'Khuzwayo', 'Makhanya', 'Harmse', 'Loubser', 'Kleynhans', 'Paul', 'Nieuwoudt', 'Horn',
        'Vosloo', 'Wentzel', 'Munyai', 'Kelly', 'Walters', 'Nzimande', 'Hoosen', 'Mkhabela', 'Madlala', 'Saunders', 'Palmer',
        'Hughes', 'Hanekom', 'Ally', 'Schmidt', 'Butler', 'Mtsweni', 'Maphumulo', 'Manamela', 'Hoffman', 'Wolmarans', 'Duma',
        'Pule', 'Hlophe', 'Miya', 'Moagi',
    );

    protected static \$titleMale = array('Mr.', 'Dr.', 'Prof.', 'Rev.', 'Hon.');

    protected static \$titleFemale = array('Mrs.', 'Ms.', 'Miss', 'Dr.', 'Prof.', 'Rev.', 'Hon.');

    protected static \$licenceCodes = array('A', 'A1', 'B', 'C', 'C1', 'C2', 'EB', 'EC', 'EC1', 'I', 'L', 'L1');

    /**
     * @link https://en.wikipedia.org/wiki/National_identification_number#South_Africa
     *
     * @param \\DateTime \$birthdate
     * @param bool      \$citizen
     * @param string    \$gender
     *
     * @return string
     */
    public function idNumber(\\DateTime \$birthdate = null, \$citizen = true, \$gender = null)
    {
        if (!\$birthdate) {
            \$birthdate = \$this->generator->dateTimeThisCentury();
        }
        \$birthDateString = \$birthdate->format('ymd');
        switch (strtolower(\$gender)) {
            case static::GENDER_FEMALE:
                \$genderDigit = self::numberBetween(0, 4);
                break;
            case static::GENDER_MALE:
                \$genderDigit = self::numberBetween(5, 9);
                break;
            default:
                \$genderDigit = self::numberBetween(0, 9);
        }
        \$sequenceDigits = str_pad(self::randomNumber(3), 3, 0, STR_PAD_BOTH);
        \$citizenDigit = (\$citizen === true) ? '0' : '1';
        \$raceDigit = self::numberBetween(8, 9);

        \$partialIdNumber = \$birthDateString . \$genderDigit . \$sequenceDigits . \$citizenDigit . \$raceDigit;

        return \$partialIdNumber . Luhn::computeCheckDigit(\$partialIdNumber);
    }

    /**
     * @see https://en.wikipedia.org/wiki/Driving_licence_in_South_Africa
     *
     * @return string
     */
    public function licenceCode()
    {
        return static::randomElement(static::\$licenceCodes);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/en_ZA/Person.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 20,  95 => 19,  89 => 18,  83 => 17,  72 => 13,  66 => 12,  60 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\en_ZA;

use Faker\\Calculator\\Luhn;

class Person extends \\Faker\\Provider\\Person
{
    protected static \$maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{titleMale}} {{firstNameMale}} {{lastName}}',
    );

    protected static \$femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{titleFemale}} {{firstNameFemale}} {{lastName}}',
    );

    protected static \$firstNameMale = array(
        'Abraham', 'Adriaan', 'Adrian', 'Ahmed', 'Alan', 'Albert', 'Alex', 'Alexander', 'Alfred', 'Allan', 'Andile', 'Andre', 'Andrew',
        'André', 'Anthony', 'Anton', 'Arnold', 'Arthur', 'Ayanda', 'Barry', 'Ben', 'Benjamin', 'Bernard', 'Bongani', 'Bradley',
        'Brandon', 'Brent', 'Brett', 'Brian', 'Bruce', 'Bryan', 'Carel', 'Carl', 'Charl', 'Charles', 'Chris', 'Christiaan',
        'Christian', 'Christo', 'Christopher', 'Clifford', 'Clint', 'Clinton', 'Clive', 'Colin', 'Conrad', 'Cornelius', 'Craig', 'Daniel',
        'Darren', 'Dave', 'David', 'Dean', 'Dennis', 'Deon', 'Derek', 'Desmond', 'Dirk', 'Donald', 'Donovan', 'Douglas',
        'Edward', 'Edwin', 'Emmanuel', 'Eric', 'Ernest', 'Etienne', 'Eugene', 'Francis', 'Francois', 'Frank', 'Frans', 'Frederick',
        'Gabriel', 'Gareth', 'Garth', 'Gary', 'Gavin', 'George', 'Gerald', 'Gerhard', 'Gerrit', 'Gert', 'Gideon', 'Godfrey',
        'Gordon', 'Graham', 'Grant', 'Greg', 'Gregory', 'Hannes', 'Heinrich', 'Hendrik', 'Hennie', 'Henry', 'Herman', 'Ian',
        'Innocent', 'Isaac', 'Itumeleng', 'Ivan', 'Jabulani', 'Jaco', 'Jacob', 'Jacques', 'James', 'Jan', 'Jason', 'Jeffrey',
        'Jeremy', 'Jerome', 'Joe', 'Johan', 'Johann', 'Johannes', 'John', 'Jonathan', 'Joseph', 'Juan', 'Julian', 'Justin',
        'Keith', 'Kenneth', 'Kevin', 'Kgomotso', 'Kobus', 'Kyle', 'Lawrence', 'Lee', 'Leon', 'Leonard', 'Lloyd', 'Louis',
        'Lucas ', 'Lucky', 'Malcolm', 'Mandla', 'Marc', 'Marco', 'Mario', 'Marius', 'Mark', 'Martin', 'Matthew', 'Mduduzi',
        'Michael', 'Mike', 'Mogamat', 'Mohamed', 'Mohammed', 'Morne', 'Morné', 'Moses', 'Mr. ', 'Muhammad', 'Musa', 'Nathan',
        'Neil', 'Neo', 'Neville', 'Nicholas', 'Nick', 'Nico', 'Nigel', 'Nkululeko', 'Norman', 'Ntokozo', 'Patrick', 'Paul',
        'Peter', 'Petrus', 'Philip', 'Phillip', 'Pierre', 'Pieter', 'Prince', 'Raymond', 'Rene', 'René', 'Riaan', 'Ricardo',
        'Richard', 'Rob', 'Robert', 'Rodney', 'Roger', 'Ronald', 'Roy', 'Rudi', 'Russell', 'Ryan', 'Sam', 'Samuel',
        'Sandile', 'Sean', 'Shane', 'Shaun', 'Shawn', 'Sibusiso', 'Simon', 'Simone', 'Simphiwe', 'Siphiwe', 'Sipho', 'Siyabonga',
        'Sizwe', 'Stanley', 'Stefan', 'Stephan', 'Stephen', 'Steve', 'Steven', 'Stuart', 'Tebogo', 'Terence', 'Thabang', 'Thabiso',
        'Thabo', 'Thando', 'Thapelo', 'Themba', 'Theo', 'Thomas', 'Timothy', 'To ', 'Tony', 'Trevor', 'Tshepo', 'Tsholofelo',
        'Vernon', 'Victor', 'Vincent', 'Walter', 'Warren', 'Wayne', 'Werner', 'Wesley', 'Willem', 'William', 'Willie', 'Wynand',
        'Xolani', 'Yusuf', 'andries', 'barend', 'contact', 'dumisani', 'jacobus', 'kabelo', 'kagiso', 'karabo', 'lesego', 'marthinus',
        'mashudu', 'next', 'nhlanhla', 'nicolaas', 'nkosinathi', 'personal', 'sello', 'sifiso', 'takalani', 'teboho', 'thulani', 'tumelo',
        'vusi', 'your',
        // below are unknown gender firstnames
        'Andries', 'Babalwa', 'Barend', 'Bulelwa', 'Contact ', 'Dumisani', 'Fikile', 'Jacobus', 'Kabelo', 'Kagiso', 'Karabo', 'Kelebogile', 'Lesego',
        'Lindiwe', 'Marthinus', 'Mashudu', 'Next', 'Nhlanhla', 'Nicolaas', 'Nkosinathi', 'Nompumelelo', 'Nonhlanhla', 'Nonkululeko', 'Nosipho', 'Nozipho',
        'Personal', 'Phumzile', 'Refiloe', 'Sello', 'Sibongile', 'Sifiso', 'Siphokazi', 'Takalani', 'Teboho', 'Thandeka', 'Thandi', 'Thembi',
        'Thulani', 'Tumelo', 'Unathi', 'Vusi', 'Vuyokazi', 'Yolandi', 'Your', 'Zandile',
    );

    protected static \$firstNameFemale = array(
        'Abigail', 'Adele', 'Alicia', 'Alison', 'Amanda', 'Andiswa', 'Andrea', 'Angela', 'Angelique', 'Anita', 'Anna', 'Anne', 'Anthea',
        'Antoinette', 'Asanda', 'Ashley', 'Aubrey', 'Barbara', 'Belinda', 'Beverley', 'Bianca', 'Boitumelo', 'Bongiwe', 'Brenda', 'Bronwyn',
        'Busisiwe', 'Candice', 'Carla', 'Carmen', 'Carol', 'Caroline', 'Catherine', 'Cecilia', 'Celeste', 'Chantal', 'Chantel', 'Chantelle',
        'Charlene', 'Charlotte', 'Charmaine', 'Cheryl', 'Christina', 'Christine', 'Cindy', 'Claire', 'Claudia', 'Colleen', 'Cynthia', 'Danie',
        'Danielle', 'Debbie', 'Deborah', 'Denise', 'Desiree', 'Diane', 'Dimakatso', 'Dineo', 'Duduzile', 'Elaine', 'Elizabeth', 'Estelle',
        'Esther ', 'Faith', 'Fatima', 'Fiona', 'Gail', 'Gillian', 'Gloria', 'Grace', 'Gugu', 'Gugulethu', 'Heather', 'Heidi',
        'Helen', 'Ingrid', 'Irene', 'Jackie', 'Jacqueline', 'Jane', 'Janet', 'Janine', 'Jean', 'Jeanette ', 'Jennifer', 'Jenny',
        'Jessica', 'Johanna', 'Joyce', 'Juanita', 'Judith', 'Julia', 'Julie', 'Karen', 'Karin', 'Katlego', 'Kelly', 'Kim',
        'Laura', 'Lauren', 'Lebogang', 'Lebohang', 'Lee-ann', 'Leigh', 'Lerato', 'Lesley', 'Liezel', 'Linda', 'Lisa', 'Lizelle',
        'Lorraine', 'Louise', 'Lungile', 'Lydia', 'Lynette', 'Lynn', 'Mandisa', 'Mandy', 'Margaret', 'Maria', 'Marlene', 'Martha',
        'Mary', 'Maureen', 'Mbali', 'Megan', 'Melanie', 'Melissa', 'Michelle', 'Miss', 'Monica', 'Monique', 'Mpho', 'Nadia',
        'Nadine', 'Natalie', 'Natasha', 'Nicola', 'Nicole', 'Nicolene', 'Nicolette', 'Nokuthula', 'Nomfundo', 'Nomsa', 'Nthabiseng', 'Olivia',
        'Palesa', 'Pamela', 'Patience', 'Patricia', 'Pearl', 'Phindile ', 'Portia', 'Precious', 'Priscilla', 'Prudence', 'Rachel', 'Rebecca',
        'Refilwe', 'Robin', 'Robyn', 'Ronel', 'Roxanne', 'Ruth', 'Samantha', 'Sandra', 'Sarah', 'Shannon', 'Sharon', 'Shirley',
        'Sonja', 'Stephanie', 'Susan', 'Sydney', 'Sylvia', 'Tania', 'Tanya', 'Taryn', 'Tasneem', 'Thato', 'Theresa', 'Tracey',
        'Tracy', 'Tshegofatso', 'Tshepiso', 'Ursula', 'Vanessa', 'Veronica', 'Victoria', 'Wendy', 'Yolanda', 'Yvette', 'Yvonne', 'Zama',
        'Zanele', 'Zelda', 'babalwa', 'bulelwa', 'fikile', 'kelebogile', 'lindiwe', 'nompumelelo', 'nonhlanhla', 'nonkululeko', 'nosipho', 'nozipho',
        'phumzile', 'refiloe', 'sibongile', 'siphokazi', 'thandeka', 'thandi', 'thembi', 'unathi', 'vuyokazi', 'yolandi', 'zandile',
        // below are unknown gender firstnames
        'Andries', 'Babalwa', 'Barend', 'Bulelwa', 'Contact ', 'Dumisani', 'Fikile', 'Jacobus', 'Kabelo', 'Kagiso', 'Karabo', 'Kelebogile', 'Lesego',
        'Lindiwe', 'Marthinus', 'Mashudu', 'Next', 'Nhlanhla', 'Nicolaas', 'Nkosinathi', 'Nompumelelo', 'Nonhlanhla', 'Nonkululeko', 'Nosipho', 'Nozipho',
        'Personal', 'Phumzile', 'Refiloe', 'Sello', 'Sibongile', 'Sifiso', 'Siphokazi', 'Takalani', 'Teboho', 'Thandeka', 'Thandi', 'Thembi',
        'Thulani', 'Tumelo', 'Unathi', 'Vusi', 'Vuyokazi', 'Yolandi', 'Your', 'Zandile',
    );

    protected static \$lastName = array(
        'Naidoo', 'Govender', 'Pillay', 'Smith', 'Botha', 'van der Merwe', 'Jacobs', 'Moodley', 'Singh', 'Ndlovu', 'Dlamini',
        'Pretorius', 'Williams', 'Khumalo', 'du Plessis', 'Nkosi', 'Coetzee', 'Venter', 'Nel', 'Fourie', 'Van Wyk', 'Chetty',
        'Smit', 'Kruger', 'Van Zyl', 'Sithole', 'du Toit', 'Adams', 'van Niekerk', 'Reddy', 'Khan', 'Meyer', 'Mahlangu', 'Abrahams',
        'Mokoena', 'Erasmus', 'Dube', 'Louw', 'Le Roux', 'Steyn', 'Tshabalala', 'Swanepoel', 'Naicker', 'Marais', 'Joubert',
        'Baloyi', 'Petersen', 'Davids', 'Viljoen', 'Maharaj', 'Details', 'Swart', 'Radebe', 'Potgieter', 'van der Westhuizen',
        'Move', 'Strydom', 'Mkhize', 'Olivier', 'Du Preez', 'Van Rooyen', 'Brown', 'Engelbrecht', 'Oosthuizen', 'Hendricks',
        'Ngwenya', 'van der Walt', 'Johnson', 'Thomas', 'Van Heerden', 'Ngcobo', 'de Beer', 'Khoza', 'Barnard', 'Ferreira',
        'Muller', 'Mazibuko', 'Zulu', 'Moyo', 'Zwane', 'Maseko', 'Chauke', 'Bezuidenhout', 'De Villiers', 'Jones', 'Buthelezi',
        'Mthembu', 'Jordaan', 'Molefe', 'Mofokeng', 'Burger', 'Visser', 'Daniels', 'Maluleke', 'Pienaar', 'Martin', 'Cloete',
        'Prinsloo', 'Mathebula', 'Janse van Rensburg', 'Grobler', 'Wilson', 'Ncube', 'Gumede', 'Ngobeni', 'Moloi', 'Kekana',
        'Mhlongo', 'Mbatha', 'Nxumalo', 'Theron', 'Snyman', 'Phiri', 'Sibiya', 'Ntuli', 'Van Den Berg', 'Mabaso', 'Bester',
        'Isaacs', 'Labuschagne', 'Jansen', 'Pieterse', 'Vorster', 'De Wet', 'Schoeman', 'De Klerk', 'Groenewald', 'Sibanda',
        'Rossouw', 'Van Rensburg', 'Naidu', 'De Jager', 'van Staden', 'Scheepers', 'Nhlapo', 'Nkuna', 'Kotze', 'Mtshali',
        'Modise', 'Ismail', 'Van Schalkwyk', 'Padayachee', 'Taylor', 'Thompson', 'Motaung', 'Booysen', 'Patel', 'Harris',
        'Joseph', 'Mthethwa', 'Arendse', 'Vilakazi', 'Lombard', 'Roberts', 'Steenkamp', 'Roux', 'Gouws', 'Botes', 'De Kock',
        'Lewis', 'James', 'Mnisi', 'Mohamed', 'Africa', 'Wessels', 'Badenhorst', 'Miller', 'Hlongwane', 'Hlatshwayo', 'Vermeulen',
        'Kunene', 'Liebenberg', 'Alexander', 'Mudau', 'Myburgh', 'van Tonder', 'Hattingh', 'Mhlanga', 'Francis', 'Mkhwanazi',
        'Basson', 'Boshoff', 'Scott', 'Xaba', 'De Lange', 'Mphahlele', 'Ebrahim', 'Cele', 'Matlala', 'Beukes', 'Coetzer',
        'Nkomo', 'Ledwaba', 'Ndaba', 'Parker', 'Els', 'Green', 'Mnguni', 'Scholtz', 'King', 'Anderson', 'Langa', 'Mulaudzi',
        'Simelane', 'Jackson', 'Shabangu', 'Mostert', 'Dhlamini', 'Geldenhuys', 'Ngubane', 'Skosana', 'Bekker', 'Phillips',
        'Brits', 'Mahomed', 'Human', 'Peters', 'George', 'Cronje', 'Sibeko', 'Swartz', 'Jooste', 'Matthews', 'Du Plooy',
        'Roos', 'Van Vuuren', 'Esterhuizen', 'Masuku', 'Mabunda', 'Lawrence', 'Moses', 'Fisher', 'Visagie', 'Solomon', 'Naude',
        'Gerber', 'Campbell', 'Lubbe', 'Van Dyk', 'Vermaak', 'Kubheka', 'Malan', 'da Silva', 'White', 'Malatji', 'Mashaba',
        'Edwards', 'Banda', 'Greyling', 'Dreyer', 'Hadebe', 'Fredericks', 'Mdluli', 'Maritz', 'Zondi', 'Masemola', 'Mabasa',
        'Fortuin', 'Shabalala', 'Bosman', 'Brink', 'Ndhlovu', 'Moonsamy', 'Mogale', 'Tsotetsi', 'Mabena', 'Morris', 'Mitchell',
        'Morgan', 'Gordon', 'Robinson', 'Dladla', 'Kriel', 'Young', 'Moloto', 'Mabuza', 'Richards', 'Sibanyoni', 'Stevens',
        'Pather', 'Mngomezulu', 'Masango', 'Solomons', 'Mlambo', 'Shongwe', 'Mthombeni', 'Lourens', 'Zungu', 'Mamabolo',
        'Watson', 'Opperman', 'Stander', 'Nair', 'Twala', 'Uys', 'Letsoalo', 'Clark', 'Wright', 'Mohlala', 'Cupido', 'Delport',
        'Sibisi', 'Terblanche', 'Motloung', 'De Bruyn', 'Davis', 'Ndou', 'Bothma', 'Benjamin', 'Jansen van Vuuren', 'Rikhotso',
        'Majola', 'Pietersen', 'Mashego', 'Herbst', 'van Deventer', 'Conradie', 'Khanyile', 'Msibi', 'Mchunu', 'Buys', 'Malinga',
        'Britz', 'Bailey', 'Cilliers', 'Goosen', 'Walker', 'Schutte', 'Salie', 'Samuels', 'Davies', 'Nkabinde', 'Robertson',
        'Lee', 'Perumal', 'Mbele', 'Greeff', 'Brand', 'Manuel', 'Nyathi', 'Kumar', 'Moore', 'Masilela', 'Bell', 'Mohale',
        'Hill', 'Maree', 'Ross', 'Bouwer', 'Ellis', 'Kemp', 'Mpofu', 'Wood', 'Stewart', 'Ahmed', 'Peter', 'Slabbert', 'Nortje',
        'Murray', 'Van Aswegen', 'De Bruin', 'Collins', 'Blignaut', 'Van Der Berg', 'Modiba', 'Jonker', 'Hall', 'Mouton',
        'Allie', 'Van Jaarsveld', 'Minnaar', 'Street', 'Maake', 'Zondo', 'Koekemoer', 'Koen', 'Claassen', 'Khosa', 'Barnes',
        'Bosch', 'Mncube', 'Marx', 'Ntombela', 'Nell', 'Makhubela', 'Jansen van Rensburg', 'Evans', 'Clarke', 'Strauss',
        'Mokone', 'Moosa', 'Neethling', 'September', 'Madonsela', 'Willemse', 'Mashigo', 'Simpson', 'Otto', 'Legodi', 'Mlangeni',
        'Mokwena', 'Andrews', 'Mashele', 'Gounden', 'Zuma', 'Msomi', 'Ngema', 'Bennett', 'Baker', 'Ntshangase', 'Nene',
        'Magagula', 'Tladi', 'Xulu', 'Müller', 'Laubscher', 'Maluleka', 'May', 'Rautenbach', 'Ndebele', 'Grobbelaar', 'Henning',
        'Carstens', 'Maleka', 'Odendaal', 'Kok', 'Oliver', 'Cassim', 'Van Eeden', 'Lottering', 'Mavuso', 'Mashinini', 'Kumalo',
        'Mathe', 'Taljaard', 'Molepo', 'David', 'Shezi', 'Turner', 'Oberholzer', 'Motsepe', 'Alberts', 'Adonis', 'van den Heever',
        'van der Linde', 'Marshall', 'Hugo', 'Thwala', 'Park', 'Cooper', 'Nelson', 'John', 'Anthony', 'Adam', 'Naudé', 'Harrison',
        'Mulder', 'Enslin', 'Truter', 'Khuzwayo', 'Makhanya', 'Harmse', 'Loubser', 'Kleynhans', 'Paul', 'Nieuwoudt', 'Horn',
        'Vosloo', 'Wentzel', 'Munyai', 'Kelly', 'Walters', 'Nzimande', 'Hoosen', 'Mkhabela', 'Madlala', 'Saunders', 'Palmer',
        'Hughes', 'Hanekom', 'Ally', 'Schmidt', 'Butler', 'Mtsweni', 'Maphumulo', 'Manamela', 'Hoffman', 'Wolmarans', 'Duma',
        'Pule', 'Hlophe', 'Miya', 'Moagi',
    );

    protected static \$titleMale = array('Mr.', 'Dr.', 'Prof.', 'Rev.', 'Hon.');

    protected static \$titleFemale = array('Mrs.', 'Ms.', 'Miss', 'Dr.', 'Prof.', 'Rev.', 'Hon.');

    protected static \$licenceCodes = array('A', 'A1', 'B', 'C', 'C1', 'C2', 'EB', 'EC', 'EC1', 'I', 'L', 'L1');

    /**
     * @link https://en.wikipedia.org/wiki/National_identification_number#South_Africa
     *
     * @param \\DateTime \$birthdate
     * @param bool      \$citizen
     * @param string    \$gender
     *
     * @return string
     */
    public function idNumber(\\DateTime \$birthdate = null, \$citizen = true, \$gender = null)
    {
        if (!\$birthdate) {
            \$birthdate = \$this->generator->dateTimeThisCentury();
        }
        \$birthDateString = \$birthdate->format('ymd');
        switch (strtolower(\$gender)) {
            case static::GENDER_FEMALE:
                \$genderDigit = self::numberBetween(0, 4);
                break;
            case static::GENDER_MALE:
                \$genderDigit = self::numberBetween(5, 9);
                break;
            default:
                \$genderDigit = self::numberBetween(0, 9);
        }
        \$sequenceDigits = str_pad(self::randomNumber(3), 3, 0, STR_PAD_BOTH);
        \$citizenDigit = (\$citizen === true) ? '0' : '1';
        \$raceDigit = self::numberBetween(8, 9);

        \$partialIdNumber = \$birthDateString . \$genderDigit . \$sequenceDigits . \$citizenDigit . \$raceDigit;

        return \$partialIdNumber . Luhn::computeCheckDigit(\$partialIdNumber);
    }

    /**
     * @see https://en.wikipedia.org/wiki/Driving_licence_in_South_Africa
     *
     * @return string
     */
    public function licenceCode()
    {
        return static::randomElement(static::\$licenceCodes);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/en_ZA/Person.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/en_ZA/Person.php");
    }
}
