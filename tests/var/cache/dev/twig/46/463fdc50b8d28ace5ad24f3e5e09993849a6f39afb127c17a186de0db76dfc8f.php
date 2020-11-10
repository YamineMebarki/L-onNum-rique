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

/* vendor/fzaninotto/faker/src/Faker/Provider/en_UG/Person.php */
class __TwigTemplate_89834811d7a4d95291fb8d8f7090169ab464cb2ae6311e65077a625f5b8336f9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_UG/Person.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/en_UG/Person.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\en_UG;

class Person extends \\Faker\\Provider\\Person
{
    /**
     * It is very common in Uganda for people to arrange their names as
     * lastname(surname) firstname
     */
    protected static \$maleNameFormats = array(
        '";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameMale"]) || array_key_exists("lastNameMale", $context) ? $context["lastNameMale"] : (function () { throw new RuntimeError('Variable "lastNameMale" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["lastNameMale"]) || array_key_exists("lastNameMale", $context) ? $context["lastNameMale"] : (function () { throw new RuntimeError('Variable "lastNameMale" does not exist.', 15, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "'
    );

    /**
     * It is very common in Uganda for people to arrange their names as
     * lastname(surname) firstname
     */
    protected static \$femaleNameFormats = array(
        '";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 24, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 25, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameFemale"]) || array_key_exists("lastNameFemale", $context) ? $context["lastNameFemale"] : (function () { throw new RuntimeError('Variable "lastNameFemale" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["lastNameFemale"]) || array_key_exists("lastNameFemale", $context) ? $context["lastNameFemale"] : (function () { throw new RuntimeError('Variable "lastNameFemale" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "'
    );

    protected static \$firstNameMale = array(
        'Aaron','Abdul','Abdullah','Abraham','Adam','Agustin','Ahmad','Ahmed','Akeem','Albert','Alex','Alfred','Ali','Allan','Allen','Alvin','Amani','Ambrose','Amos','Anderson','Andrew','Angel','Anthony','Arnold','Arthur','Austin',
        'Barnet','Barry','Ben','Benjamin','Bennie','Benny','Bernard','Berry','Berta','Bertha','Bill','Billy','Bobby','Boyd','Bradley','Brian','Bruce',
        'Caesar','Caleb','Carol','Cecil','Charles','Charlie','Chris','Christian','Christopher','Cleveland','Clifford','Clinton','Collin','Conrad',
        'Dan','Daren','Dave','David','Dax','Denis','Dennis','Derek','Derick','Derrick','Don','Donald','Douglas','Dylan',
        'Earnest','Eddie','Edgar','Edison','Edmond','Edmund','Edward','Edwin','Elias','Elijah','Elliot','Emanuel','Emmanuel','Eric','Ernest','Ethan','Eugene','Ezra',
        'Felix','Francis','Frank','Frankie','Fred',
        'Gaetano','Gaston','Gavin','Geoffrey','George','Gerald','Gideon','Gilbert','Glen','Godfrey','Graham','Gregory',
        'Hans','Harold','Henry','Herbert','Herman','Hillary','Howard',
        'Ian','Isaac','Isaiah','Ismael',
        'Jabari','Jack','Jackson','Jacob','Jamaal','Jamal','Jasper','Jayson','Jeff','Jeffery','Jeremy','Jimmy','Joe','Joel','Joesph','Johathan','John','Johnathan','Johnny','Johnson','Jonathan','Jordan','Joseph','Joshua','Julian','Julio','Julius','Junior',
        'Kaleb','Keith','Kelly','Kelvin','Ken','Kennedy','Kenneth','Kevin','Kim',
        'Lawrence','Lewis','Lincoln','Lloyd','Luis','Luther',
        'Mackenzie','Martin','Marvin','Mathew','Mathias','Matt','Maurice','Max','Maxwell','Mckenzie','Micheal','Mike','Milton','Mitchel','Mitchell','Mohamed','Mohammad','Mohammed','Morris','Moses','Muhammad','Myles',
        'Nasir','Nat','Nathan','Newton','Nicholas','Nick','Nicklaus','Nickolas','Nicolas','Noah','Norbert',
        'Oscar','Owen',
        'Patrick','Paul','Peter','Philip',
        'Rashad','Rasheed','Raul','Ray','Raymond','Reagan','Regan','Richard','Richie','Rick','Robb','Robbie','Robert','Robin','Roger','Rogers','Ronald','Rowland','Royal','Ryan',
        'Sam','Samson','Sean','Shawn','Sid','Sidney','Solomon','Steve','Stevie','Stewart','Stuart',
        'Taylor','Theodore','Thomas','Timmy','Timothy','Titus','Tom','Tony','Travis','Trevor','Troy','Trystan','Tyler','Tyson',
        'Victor','Vince','Vincent','Vinnie',
        'Walter','Warren','Wilford','Wilfred','Will','William','Willis','Willy','Wilson'
    );

    protected static \$firstNameFemale = array(
        'Abigail','Adela','Adrianna','Adrienne','Aisha','Alice','Alisha','Alison','Amanda','Amelia','Amina','Amy','Anabel','Anabelle','Angela','Angelina','Angie','Anita','Anna','Annamarie','Anne','Annette','April','Arianna','Ariela','Asha','Ashley','Ashly','Audrey','Aurelia',
        'Barbara','Beatrice','Bella','Bernadette','Beth','Bethany','Bethel','Betsy','Bette','Bettie','Betty','Blanche','Bonita','Bonnie','Brenda','Bridget','Bridgette','Carissa','Carol','Carole','Carolina','Caroline','Carolyn','Carolyne','Catharine','Catherine','Cathrine','Cathryn','Cathy','Cecelia','Cecile','Cecilia','Charity','Charlotte','Chloe','Christina','Christine','Cindy','Claire','Clara','Clarissa','Claudine','Cristal','Crystal','Cynthia',
        'Dahlia','Daisy','Daniela','Daniella','Danielle','Daphne','Daphnee','Daphney','Darlene','Deborah','Destiny','Diana','Dianna','Dina','Dolly','Dolores','Donna','Dora','Dorothy','Dorris',
        'Edna','Edwina','Edyth','Elizabeth','Ella','Ellen','Elsa','Elsie','Emelia','Emilia','Emilie','Emily','Emma','Emmanuelle','Erica','Esta','Esther','Estella','Eunice','Eva','Eve','Eveline','Evelyn',
        'Fabiola','Fatima','Fiona','Flavia','Flo','Florence','Frances','Francesca','Francisca','Frida',
        'Gabriella','Gabrielle','Genevieve','Georgiana','Geraldine','Gertrude','Gladys','Gloria','Grace','Gracie',
        'Helen','Hellen','Hilda','Hillary','Hope',
        'Imelda','Isabel','Isabell','Isabella','Isabelle',
        'Jackie','Jacklyn','Jacky','Jaclyn','Jacquelyn','Jane','Janelle','Janet','Jaquelin','Jaqueline','Jenifer','Jennifer','Jessica','Joan','Josephine','Joy','Joyce','Juanita','Julia','Juliana','Julie','Juliet','Justine',
        'Katarina','Katherine','Katheryn','Katrina',
        'Laura','Leah','Leila','Lilian','Lillian','Lilly','Lina','Linda','Lisa','Lora','Loraine','Lucie','Lucy','Lulu','Lydia',
        'Mabel','Maggie','Mandy','Margaret','Margarete','Margret','Maria','Mariah','Mariam','Marian','Mariana','Mariane','Marianna','Marianne','Marie','Marilyne','Marina','Marion','Marjorie','Marjory','Marlene','Mary','Matilda','Maudie','Maureen','Maya','Meagan','Melisa','Melissa','Melody','Michele','Michelle','Minerva','Minnie','Miracle','Monica',
        'Nadia','Naomi','Naomie','Natalia','Natalie','Natasha','Nichole','Nicole','Nina','Nora',
        'Pamela','Patience','Patricia','Pauline','Pearl','Phoebe','Phyllis','Pink','Pinkie','Priscilla','Prudence',
        'Rachael','Rachel','Rebeca','Rebecca','Rhoda','Rita','Robyn','Rose','Rosemary','Ruth','Ruthe','Ruthie',
        'Sabina','Sabrina','Salma','Samantha','Sandra','Sandy','Sarah','Serena','Shakira','Sharon','Sheila','Sierra','Sonia','Sonya','Sophia','Sophie','Stacey','Stacy','Stella','Susan','Susana','Susanna','Susie','Suzanne','Sylvia',
        'Tabitha','Teresa','Tess','Theresa','Tia','Tiffany','Tina','Tracy','Trinity','Trisha','Trudie','Trycia',
        'Ursula',
        'Valentine','Valerie','Vanessa','Veronica','Vickie','Vicky','Victoria','Viola','Violet','Violette','Viva','Vivian','Viviane','Vivianne','Vivien','Vivienne',
        'Wanda','Wendy','Whitney','Wilma','Winifred',
        'Yvette','Yvonne',
        'Zita','Zoe'
    );

    protected static \$lastNameMale = array(
        'Mubiru','Muwanguzi','Muwonge',
        'Nsamba',
        'Obol','Odeke','Okumu','Okumuringa','Opega','Opio','Orishaba','Osiki','Ouma',
        'Sekandi','Semande','Serwanga','Ssebatta','Ssebugulu','Ssebunya','Ssebuuma','Ssebyala','Ssegawa','Ssekabira','Ssekanjako','Ssekate','Ssekibuule','Ssekidde','Ssekiranda','Ssekitooleko','Ssekubulwa','Ssempija','Ssempungu','Ssemwezi','Ssendege','Ssenjovu','Ssenkaali','Ssentezza','Ssentongo','Sserubiri','Sseruyinda','Ssettende',
    );

    protected static \$lastNameFemale = array(
        'Abol','Adeke','Aketch','Akoth','Akumu','Aol','Apega','Apio','Auma','Awori','Ayo',
        'Babirye',
        'Chandiru',
        'Dushime',
        'Kabatesi','Kabonesa','Kaitesi','Kakiiza','Kakuze','Kaliisa','Karungi','Katusiime','Kebirungi','Kyomi','Kyoshabire',
        'Mahoro','Murungi',
        'Nabaale','Nabaggala','Nabakooza','Nabaloga','Nabankema','Nabasirye','Nabaweesi','Nabayunga','Nabbona','Nabise','Nabukeera','Nabunya','Nabuufu','Nabuuso','Nabwami','Nakaayi','Nakabugo','Nakabuye','Nakafeero','Nakalanzi','Nakalunda','Nakasinde','Nakasolya','Nakasumba','Nakato','Nakaweesa','Nakazibwe','Nakiboneka','Nakidde','Nakigozi','Nakiguli','Nakimbugwe','Nakimuli','Nakinobe','Nakiridde','Nakisige','Nakitende','Nakiyemba','Nakku','Nakyagaba','Nakyanzi','Nalubuga','Nalubwama','Nalukwago','Naluyima','Nalweyiso','Nalwoga','Namaganda','Namagembe','Namatovu','Nambi','Nambogo','Nambooze','Nambuusi','Namenya','Namiiro','Namirembe','Nampemba','Nampijja','Namubiru','Namuddu','Namugenyi','Namugwanya','Namukwaya','Namuleme','Namulindwa','Namutebi','Nankindu','Nankinga','Nanteeza','Nantongo','Nanvule','Nanyanzi','Nanyombi','Nanyondo','Nanyonjo','Nassimwba','Nazziwa','Ndagire'
    );

    protected static \$lastName = array(
        'Abayisenga','Agaba','Ahebwe','Aisu','Akankunda','Akankwasa','Akashaba','Akashabe','Ampumuza','Ankunda','Asasira','Asiimwe','Atuhe','Atuhire','Atukunda','Atukwase','Atwine','Aurishaba',
        'Badru','Baguma','Bakabulindi','Bamwiine','Barigye','Bbosa','Bisheko','Biyinzika','Bugala','Bukenya','Buyinza','Bwana','Byanyima','Byaruhanga',
        'Ddamulira',
        'Gamwera',
        'Ijaga','Isyagi',
        'Kaaya','Kabanda','Kabuubi','Kabuye','Kafeero','Kagambira','Kakooza','Kalumba','Kanshabe','Kansiime','Kanyesigye','Kareiga','Kasekende','Kasumba','Kateregga','Katusiime','Kawooya','Kawuki','Kayemba','Kazibwe','Kibirige','Kiconco','Kiganda','Kijjoba','Kirabira','Kirabo','Kirigwajjo','Kisitu','Kitovu','Kityamuwesi','Kivumbi','Kiwanuka','Kyambadde',
        'Lunyoro',
        'Mbabazi','Migisha','Mugisa','Mugisha','Muhwezi','Mukalazi','Mulalira','Munyagwa','Murungi','Mushabe','Musinguzi','Mutabuza','Muyambi','Mwesige','Mwesigye',
        'Nabasa','Nabimanya','Nankunda','Natukunda','Nayebare','Nimukunda','Ninsiima','Nkoojo','Nkurunungi','Nuwagaba','Nuwamanya','Nyeko',
        'Obol','Odeke','Okumu','Okumuringa','Opega','Orishaba','Osiki','Ouma',
        'Rubalema','Rusiimwa','Rwabyoma',
        'Tamale','Tendo','Tizikara','Tuhame','Tumusiime','Tumwebaze','Tumwesigye','Tumwiine','Turyasingura','Tusiime','Twasiima','Twesigomwe',
        'Wasswa','Wavamuno','Were'
    );

    public function lastName(\$gender = null)
    {
        if (\$gender === static::GENDER_MALE) {
            return static::lastNameMale();
        }
        if (\$gender === static::GENDER_FEMALE) {
            return static::lastNameFemale();
        }

        return static::randomElement(static::\$lastName);
    }

    public static function lastNameMale()
    {
        return static::randomElement(static::\$lastNameMale);
    }

    public static function lastNameFemale()
    {
        return static::randomElement(static::\$lastNameFemale);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/en_UG/Person.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 26,  99 => 25,  93 => 24,  87 => 23,  74 => 15,  68 => 14,  62 => 13,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\en_UG;

class Person extends \\Faker\\Provider\\Person
{
    /**
     * It is very common in Uganda for people to arrange their names as
     * lastname(surname) firstname
     */
    protected static \$maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{lastName}} {{firstNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{lastNameMale}} {{firstNameMale}}'
    );

    /**
     * It is very common in Uganda for people to arrange their names as
     * lastname(surname) firstname
     */
    protected static \$femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{lastName}} {{firstNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{lastNameFemale}} {{firstNameFemale}}'
    );

    protected static \$firstNameMale = array(
        'Aaron','Abdul','Abdullah','Abraham','Adam','Agustin','Ahmad','Ahmed','Akeem','Albert','Alex','Alfred','Ali','Allan','Allen','Alvin','Amani','Ambrose','Amos','Anderson','Andrew','Angel','Anthony','Arnold','Arthur','Austin',
        'Barnet','Barry','Ben','Benjamin','Bennie','Benny','Bernard','Berry','Berta','Bertha','Bill','Billy','Bobby','Boyd','Bradley','Brian','Bruce',
        'Caesar','Caleb','Carol','Cecil','Charles','Charlie','Chris','Christian','Christopher','Cleveland','Clifford','Clinton','Collin','Conrad',
        'Dan','Daren','Dave','David','Dax','Denis','Dennis','Derek','Derick','Derrick','Don','Donald','Douglas','Dylan',
        'Earnest','Eddie','Edgar','Edison','Edmond','Edmund','Edward','Edwin','Elias','Elijah','Elliot','Emanuel','Emmanuel','Eric','Ernest','Ethan','Eugene','Ezra',
        'Felix','Francis','Frank','Frankie','Fred',
        'Gaetano','Gaston','Gavin','Geoffrey','George','Gerald','Gideon','Gilbert','Glen','Godfrey','Graham','Gregory',
        'Hans','Harold','Henry','Herbert','Herman','Hillary','Howard',
        'Ian','Isaac','Isaiah','Ismael',
        'Jabari','Jack','Jackson','Jacob','Jamaal','Jamal','Jasper','Jayson','Jeff','Jeffery','Jeremy','Jimmy','Joe','Joel','Joesph','Johathan','John','Johnathan','Johnny','Johnson','Jonathan','Jordan','Joseph','Joshua','Julian','Julio','Julius','Junior',
        'Kaleb','Keith','Kelly','Kelvin','Ken','Kennedy','Kenneth','Kevin','Kim',
        'Lawrence','Lewis','Lincoln','Lloyd','Luis','Luther',
        'Mackenzie','Martin','Marvin','Mathew','Mathias','Matt','Maurice','Max','Maxwell','Mckenzie','Micheal','Mike','Milton','Mitchel','Mitchell','Mohamed','Mohammad','Mohammed','Morris','Moses','Muhammad','Myles',
        'Nasir','Nat','Nathan','Newton','Nicholas','Nick','Nicklaus','Nickolas','Nicolas','Noah','Norbert',
        'Oscar','Owen',
        'Patrick','Paul','Peter','Philip',
        'Rashad','Rasheed','Raul','Ray','Raymond','Reagan','Regan','Richard','Richie','Rick','Robb','Robbie','Robert','Robin','Roger','Rogers','Ronald','Rowland','Royal','Ryan',
        'Sam','Samson','Sean','Shawn','Sid','Sidney','Solomon','Steve','Stevie','Stewart','Stuart',
        'Taylor','Theodore','Thomas','Timmy','Timothy','Titus','Tom','Tony','Travis','Trevor','Troy','Trystan','Tyler','Tyson',
        'Victor','Vince','Vincent','Vinnie',
        'Walter','Warren','Wilford','Wilfred','Will','William','Willis','Willy','Wilson'
    );

    protected static \$firstNameFemale = array(
        'Abigail','Adela','Adrianna','Adrienne','Aisha','Alice','Alisha','Alison','Amanda','Amelia','Amina','Amy','Anabel','Anabelle','Angela','Angelina','Angie','Anita','Anna','Annamarie','Anne','Annette','April','Arianna','Ariela','Asha','Ashley','Ashly','Audrey','Aurelia',
        'Barbara','Beatrice','Bella','Bernadette','Beth','Bethany','Bethel','Betsy','Bette','Bettie','Betty','Blanche','Bonita','Bonnie','Brenda','Bridget','Bridgette','Carissa','Carol','Carole','Carolina','Caroline','Carolyn','Carolyne','Catharine','Catherine','Cathrine','Cathryn','Cathy','Cecelia','Cecile','Cecilia','Charity','Charlotte','Chloe','Christina','Christine','Cindy','Claire','Clara','Clarissa','Claudine','Cristal','Crystal','Cynthia',
        'Dahlia','Daisy','Daniela','Daniella','Danielle','Daphne','Daphnee','Daphney','Darlene','Deborah','Destiny','Diana','Dianna','Dina','Dolly','Dolores','Donna','Dora','Dorothy','Dorris',
        'Edna','Edwina','Edyth','Elizabeth','Ella','Ellen','Elsa','Elsie','Emelia','Emilia','Emilie','Emily','Emma','Emmanuelle','Erica','Esta','Esther','Estella','Eunice','Eva','Eve','Eveline','Evelyn',
        'Fabiola','Fatima','Fiona','Flavia','Flo','Florence','Frances','Francesca','Francisca','Frida',
        'Gabriella','Gabrielle','Genevieve','Georgiana','Geraldine','Gertrude','Gladys','Gloria','Grace','Gracie',
        'Helen','Hellen','Hilda','Hillary','Hope',
        'Imelda','Isabel','Isabell','Isabella','Isabelle',
        'Jackie','Jacklyn','Jacky','Jaclyn','Jacquelyn','Jane','Janelle','Janet','Jaquelin','Jaqueline','Jenifer','Jennifer','Jessica','Joan','Josephine','Joy','Joyce','Juanita','Julia','Juliana','Julie','Juliet','Justine',
        'Katarina','Katherine','Katheryn','Katrina',
        'Laura','Leah','Leila','Lilian','Lillian','Lilly','Lina','Linda','Lisa','Lora','Loraine','Lucie','Lucy','Lulu','Lydia',
        'Mabel','Maggie','Mandy','Margaret','Margarete','Margret','Maria','Mariah','Mariam','Marian','Mariana','Mariane','Marianna','Marianne','Marie','Marilyne','Marina','Marion','Marjorie','Marjory','Marlene','Mary','Matilda','Maudie','Maureen','Maya','Meagan','Melisa','Melissa','Melody','Michele','Michelle','Minerva','Minnie','Miracle','Monica',
        'Nadia','Naomi','Naomie','Natalia','Natalie','Natasha','Nichole','Nicole','Nina','Nora',
        'Pamela','Patience','Patricia','Pauline','Pearl','Phoebe','Phyllis','Pink','Pinkie','Priscilla','Prudence',
        'Rachael','Rachel','Rebeca','Rebecca','Rhoda','Rita','Robyn','Rose','Rosemary','Ruth','Ruthe','Ruthie',
        'Sabina','Sabrina','Salma','Samantha','Sandra','Sandy','Sarah','Serena','Shakira','Sharon','Sheila','Sierra','Sonia','Sonya','Sophia','Sophie','Stacey','Stacy','Stella','Susan','Susana','Susanna','Susie','Suzanne','Sylvia',
        'Tabitha','Teresa','Tess','Theresa','Tia','Tiffany','Tina','Tracy','Trinity','Trisha','Trudie','Trycia',
        'Ursula',
        'Valentine','Valerie','Vanessa','Veronica','Vickie','Vicky','Victoria','Viola','Violet','Violette','Viva','Vivian','Viviane','Vivianne','Vivien','Vivienne',
        'Wanda','Wendy','Whitney','Wilma','Winifred',
        'Yvette','Yvonne',
        'Zita','Zoe'
    );

    protected static \$lastNameMale = array(
        'Mubiru','Muwanguzi','Muwonge',
        'Nsamba',
        'Obol','Odeke','Okumu','Okumuringa','Opega','Opio','Orishaba','Osiki','Ouma',
        'Sekandi','Semande','Serwanga','Ssebatta','Ssebugulu','Ssebunya','Ssebuuma','Ssebyala','Ssegawa','Ssekabira','Ssekanjako','Ssekate','Ssekibuule','Ssekidde','Ssekiranda','Ssekitooleko','Ssekubulwa','Ssempija','Ssempungu','Ssemwezi','Ssendege','Ssenjovu','Ssenkaali','Ssentezza','Ssentongo','Sserubiri','Sseruyinda','Ssettende',
    );

    protected static \$lastNameFemale = array(
        'Abol','Adeke','Aketch','Akoth','Akumu','Aol','Apega','Apio','Auma','Awori','Ayo',
        'Babirye',
        'Chandiru',
        'Dushime',
        'Kabatesi','Kabonesa','Kaitesi','Kakiiza','Kakuze','Kaliisa','Karungi','Katusiime','Kebirungi','Kyomi','Kyoshabire',
        'Mahoro','Murungi',
        'Nabaale','Nabaggala','Nabakooza','Nabaloga','Nabankema','Nabasirye','Nabaweesi','Nabayunga','Nabbona','Nabise','Nabukeera','Nabunya','Nabuufu','Nabuuso','Nabwami','Nakaayi','Nakabugo','Nakabuye','Nakafeero','Nakalanzi','Nakalunda','Nakasinde','Nakasolya','Nakasumba','Nakato','Nakaweesa','Nakazibwe','Nakiboneka','Nakidde','Nakigozi','Nakiguli','Nakimbugwe','Nakimuli','Nakinobe','Nakiridde','Nakisige','Nakitende','Nakiyemba','Nakku','Nakyagaba','Nakyanzi','Nalubuga','Nalubwama','Nalukwago','Naluyima','Nalweyiso','Nalwoga','Namaganda','Namagembe','Namatovu','Nambi','Nambogo','Nambooze','Nambuusi','Namenya','Namiiro','Namirembe','Nampemba','Nampijja','Namubiru','Namuddu','Namugenyi','Namugwanya','Namukwaya','Namuleme','Namulindwa','Namutebi','Nankindu','Nankinga','Nanteeza','Nantongo','Nanvule','Nanyanzi','Nanyombi','Nanyondo','Nanyonjo','Nassimwba','Nazziwa','Ndagire'
    );

    protected static \$lastName = array(
        'Abayisenga','Agaba','Ahebwe','Aisu','Akankunda','Akankwasa','Akashaba','Akashabe','Ampumuza','Ankunda','Asasira','Asiimwe','Atuhe','Atuhire','Atukunda','Atukwase','Atwine','Aurishaba',
        'Badru','Baguma','Bakabulindi','Bamwiine','Barigye','Bbosa','Bisheko','Biyinzika','Bugala','Bukenya','Buyinza','Bwana','Byanyima','Byaruhanga',
        'Ddamulira',
        'Gamwera',
        'Ijaga','Isyagi',
        'Kaaya','Kabanda','Kabuubi','Kabuye','Kafeero','Kagambira','Kakooza','Kalumba','Kanshabe','Kansiime','Kanyesigye','Kareiga','Kasekende','Kasumba','Kateregga','Katusiime','Kawooya','Kawuki','Kayemba','Kazibwe','Kibirige','Kiconco','Kiganda','Kijjoba','Kirabira','Kirabo','Kirigwajjo','Kisitu','Kitovu','Kityamuwesi','Kivumbi','Kiwanuka','Kyambadde',
        'Lunyoro',
        'Mbabazi','Migisha','Mugisa','Mugisha','Muhwezi','Mukalazi','Mulalira','Munyagwa','Murungi','Mushabe','Musinguzi','Mutabuza','Muyambi','Mwesige','Mwesigye',
        'Nabasa','Nabimanya','Nankunda','Natukunda','Nayebare','Nimukunda','Ninsiima','Nkoojo','Nkurunungi','Nuwagaba','Nuwamanya','Nyeko',
        'Obol','Odeke','Okumu','Okumuringa','Opega','Orishaba','Osiki','Ouma',
        'Rubalema','Rusiimwa','Rwabyoma',
        'Tamale','Tendo','Tizikara','Tuhame','Tumusiime','Tumwebaze','Tumwesigye','Tumwiine','Turyasingura','Tusiime','Twasiima','Twesigomwe',
        'Wasswa','Wavamuno','Were'
    );

    public function lastName(\$gender = null)
    {
        if (\$gender === static::GENDER_MALE) {
            return static::lastNameMale();
        }
        if (\$gender === static::GENDER_FEMALE) {
            return static::lastNameFemale();
        }

        return static::randomElement(static::\$lastName);
    }

    public static function lastNameMale()
    {
        return static::randomElement(static::\$lastNameMale);
    }

    public static function lastNameFemale()
    {
        return static::randomElement(static::\$lastNameFemale);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/en_UG/Person.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/en_UG/Person.php");
    }
}
