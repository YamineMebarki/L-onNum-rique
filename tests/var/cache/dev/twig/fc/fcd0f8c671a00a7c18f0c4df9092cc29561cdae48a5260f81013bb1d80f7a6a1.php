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

/* vendor/fzaninotto/faker/src/Faker/Provider/cs_CZ/Address.php */
class __TwigTemplate_a363caadc1ff102d9bac96aa9c46a392fe13907c54c67c5205cb167f873e67fd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/cs_CZ/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/cs_CZ/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\cs_CZ;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$streetAddressFormats = array(
        '";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 9, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$addressFormats = array(
        \"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, (isset($context["region"]) || array_key_exists("region", $context) ? $context["region"] : (function () { throw new RuntimeError('Variable "region" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 16, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\",
        \"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 17, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\",
        \"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 18, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\",
        \"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 19, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "\",
        \"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 20, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\",
        \"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 21, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "\",
        \"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 22, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\\nČeská republika\",
    );

    protected static \$buildingNumber = array('%', '%%', '%/%%', '%%/%%', '%/%%%', '%%/%%%');

    protected static \$postcode = array('#####', '### ##');

    /**
     * Source: https://cs.wikipedia.org/wiki/Seznam_m%C4%9Bst_v_%C4%8Cesku_podle_po%C4%8Dtu_obyvatel
     */
    protected static \$city = array(
        'Brno', 'Břeclav', 'Cheb', 'Chomutov', 'Chrudim', 'Černošice', 'Česká Lípa', 'České Budějovice',
        'Český Těšín', 'Děčín', 'Frýdek-Místek', 'Havlíčkův Brod', 'Havířov', 'Hodonín', 'Hradec Králové',
        'Jablonec nad Nisou', 'Jihlava', 'Karlovy Vary', 'Karviná', 'Kladno', 'Kolín', 'Krnov', 'Kroměříž',
        'Liberec', 'Litoměřice', 'Litvínov', 'Mladá Boleslav', 'Most', 'Nový Jičín', 'Olomouc', 'Opava', 'Orlová',
        'Ostrava', 'Pardubice', 'Plzeň', 'Praha', 'Prostějov', 'Písek', 'Přerov', 'Příbram', 'Sokolov', 'Šumperk',
        'Teplice', 'Trutnov', 'Tábor', 'Třebíč', 'Třinec', 'Uherské Hradiště', 'Ústí nad Labem',
        'Valašské Meziříčí', 'Vsetín', 'Zlín', 'Znojmo',
    );

    /**
     * Source: https://cs.wikipedia.org/wiki/Seznam_st%C3%A1t%C5%AF_sv%C4%9Bta
     */
    protected static \$country = array(
        'Afghánistán', 'Albánie', 'Alžírsko', 'Andorra', 'Angola', 'Antigua a Barbuda', 'Argentina',
        'Arménie', 'Austrálie', 'Ázerbájdžán', 'Bahamy', 'Bahrajn', 'Bangladéš', 'Barbados', 'Belgie',
        'Belize', 'Benin', 'Bělorusko', 'Bhútán', 'Bolívie', 'Bosna a Hercegovina', 'Botswana', 'Brazílie',
        'Brunej', 'Bulharsko', 'Burkina Faso', 'Burundi', 'Cookovy ostrovy', 'Čad', 'Černá Hora', 'Česká republika',
        'Čína', 'Dánsko', 'Demokratická republika Kongo', 'Dominika', 'Dominikánská republika', 'Džibutsko',
        'Egypt', 'Ekvádor', 'Eritrea', 'Estonsko', 'Etiopie', 'Fidži', 'Filipíny', 'Finsko', 'Francie', 'Gabon',
        'Gambie', 'Ghana', 'Grenada', 'Gruzie', 'Guatemala', 'Guinea', 'Guinea-Bissau', 'Guyana', 'Haiti', 'Honduras',
        'Chile', 'Chorvatsko', 'Indie', 'Indonésie', 'Irák', 'Írán', 'Irsko', 'Island', 'Itálie', 'Izrael', 'Jamajka',
        'Japonsko', 'Jemen', 'Jihoafrická republika', 'Jižní Korea', 'Jižní Súdán', 'Jordánsko', 'Kambodža', 'Kamerun',
        'Kanada', 'Kapverdy', 'Katar', 'Kazachstán', 'Keňa', 'Kiribati', 'Kolumbie', 'Komory', 'Republika Kongo',
        'Kostarika', 'Kuba', 'Kuvajt', 'Kypr', 'Kyrgyzstán', 'Laos', 'Lesotho', 'Libanon', 'Libérie', 'Libye',
        'Lichtenštejnsko', 'Litva', 'Lotyšsko', 'Lucembursko', 'Madagaskar', 'Maďarsko', 'Makedonie', 'Malajsie',
        'Malawi', 'Maledivy', 'Mali', 'Malta', 'Maroko', 'Marshallovy ostrovy', 'Mauritánie', 'Mauricius', 'Mexiko',
        'Federativní státy Mikronésie', 'Moldavsko', 'Monako', 'Mongolsko', 'Mosambik', 'Myanmar', 'Namibie', 'Nauru',
        'Nepál', 'Německo', 'Niger', 'Nigérie', 'Nikaragua', 'Niue', 'Nizozemsko', 'Norsko', 'Nový Zéland', 'Omán',
        'Pákistán', 'Palau', 'Panama', 'Papua-Nová Guinea', 'Paraguay', 'Peru', 'Pobřeží slonoviny', 'Polsko',
        'Portugalsko', 'Rakousko', 'Rovníková Guinea', 'Rumunsko', 'Rusko', 'Rwanda', 'Řecko', 'Salvador', 'Samoa',
        'San Marino', 'Saúdská Arábie', 'Senegal', 'Severní Korea', 'Seychely', 'Sierra Leone', 'Singapur',
        'Slovensko', 'Slovinsko', 'Somálsko', 'Spojené arabské emiráty', 'Spojené království', 'Spojené státy americké',
        'Srbsko', 'Středoafrická republika', 'Surinam', 'Súdán', 'Svatá Lucie', 'Svatý Kryštof a Nevis',
        'Svatý Tomáš a Princův ostrov', 'Svatý Vincenc a Grenadiny', 'Svazijsko', 'Sýrie', 'Šalamounovy ostrovy',
        'Španělsko', 'Šrí Lanka', 'Švédsko', 'Švýcarsko', 'Tádžikistán', 'Tanzanie', 'Thajsko', 'Togo', 'Tonga',
        'Trinidad a Tobago', 'Tunisko', 'Turecko', 'Turkmenistán', 'Tuvalu', 'Uganda', 'Ukrajina', 'Uruguay',
        'Uzbekistán', 'Vanuatu', 'Vatikán', 'Venezuela', 'Vietnam', 'Východní Timor', 'Zambie', 'Zimbabwe',
    );

    /**
     * Source: https://cs.wikipedia.org/wiki/Kraje_v_%C4%8Cesku#Ekonomika
     */
    private static \$regions = array(
        'Hlavní město Praha', 'Jihomoravský kraj', 'Jihočeský kraj', 'Karlovarský kraj', 'Královéhradecký kraj',
        'Liberecký kraj', 'Moravskoslezský kraj', 'Olomoucký kraj', 'Pardubický kraj', 'Plzeňský kraj',
        'Středočeský kraj', 'Vysočina', 'Zlínský kraj', 'Ústecký kraj',
    );

    /**
     * Source: http://aplikace.mvcr.cz/adresy/
     */
    protected static \$street = array(
        'Alžírská', 'Angelovova', 'Antonínská', 'Arménská', 'Čelkovická', 'Červenkova', 'Československého exilu',
        'Chlumínská', 'Chládkova', 'Diskařská', 'Do Kopečka', 'Do Vozovny', 'Do Vršku', 'Doubravická', 'Doudova',
        'Drahotínská', 'Dělnická', 'Generála Šišky', 'Gončarenkova', 'Gutova', 'Havlínova', 'Havraní', 'Helmova',
        'Hečkova', 'Holubinková', 'Holínská', 'Horní Hrdlořezská', 'Horní Stromky', 'Hostivařské nám.', 'Houbařská',
        'Hořanská', 'Hrachovská', 'Hrad III. nádvoří', 'Hrdlořezská', 'Jenská', 'Jerevanská', 'Ježovická', 'K Březince',
        'K Dobré Vodě', 'K Hořavce', 'K Hrušovu', 'K Háji', 'K Návsi', 'K Padesátníku', 'K Pyramidce', 'K Samotě',
        'K Vinici', 'K Vystrkovu', 'Karlovarská', 'Karlínské nám.', 'Kaňkova', 'Ke Kyjovu', 'Ke Stadionu', 'Kejnická',
        'Klatovská', 'Kohoutových', 'Kopanská', 'Kralupská', 'Kukelská', 'Kukučínova', 'Kunešova', 'Kvestorská',
        'Křišťanova', 'Lanžhotská', 'Leštínská', 'Lindavská', 'Litevská', 'Lojovická', 'Lukešova', 'Maltézské náměstí',
        'Melodická', 'Mečíková', 'Milady Horákové', 'Mšenská', 'N. A. Někrasova', 'Na Dědince', 'Na Habrové',
        'Na Jezerce', 'Na Jílech', 'Na Petynce', 'Na Rozcestí', 'Na Sedlišti', 'Na Vrchu', 'Na Výšině', 'Na Úbočí',
        'Na Štamberku', 'Nad Hliníkem', 'Nad Hřištěm', 'Nad Klikovkou', 'Nad libeňským nádražím', 'Nad Nuslemi',
        'Nad Slávií', 'Nad Trnkovem', 'Nad Šauerovými sady', 'Netřebská', 'Nivnická', 'Nádražní', 'nám. Pod Lípou',
        'nám. Před bateriemi', 'nám. Svatopluka Čecha', 'Odlehlá', 'Okrasná', 'Omská', 'Otavova', 'Oválová',
        'Palackého nám.', 'Pavlišovská', 'Paškova', 'Petřínské sady', 'Pilovská', 'Pod Bruskou', 'Pod novou školou',
        'Pod soutratím', 'Pod Svahem', 'Pod Útesy', 'Pohledná', 'Pošepného nám.', 'Prokopových', 'Pávovské náměstí',
        'Pětipeského', 'Příbramská', 'Radbuzská', 'Radnické schody', 'Raichlova', 'Roentgenova', 'Rozkošného',
        'Rozrazilová', 'Ruzyňská', 'Římovská', 'Říční', 'Satalická', 'Schoellerova', 'Smrková', 'Souvratní', 'Sovova',
        'Sportovní', 'Stadionová', 'Statková', 'Stavební', 'Široká', 'Školní', 'Tatranská', 'Tomsova', 'Toruňská',
        'Točenská', 'Trnkovo náměstí', 'Truhlářova', 'Tvrdonická', 'Týmlova', 'U Beránky', 'U Chmelnice',
        'U Chodovského hřbitova', 'U Drážky', 'U Fořta', 'U Kamýku', 'U Klubovny', 'U Lesa', 'U Pekáren',
        'U Prašné brány', 'U Prádelny', 'U Silnice', 'U Sladovny', 'U Slovanky', 'U Soutoku', 'U Trojice', 'U Vinice',
        'U vinných sklepů', 'U Vodárny', 'U Vorlíků', 'U zeleného ptáka', 'U Čekárny', 'U Županských', 'Ukrajinská',
        'Újezdská', 'V Jámě', 'V Předním Hloubětíně', 'V Rohu', 'V Uličce', 'Valčíkova', 'Ve Lhotce', 'Ve Vrších',
        'Velenická', 'Violková', 'Vlašská', 'Voděradská', 'Vyderská', 'Vysokoškolská', 'Výpadová', 'Vřesovická',
        'Za Pekárnou', 'Zámecká',
    );

    /**
     * Randomly returns a czech city.
     *
     * @example 'Krnov'
     *
     * @return string
     */
    public function city()
    {
        return static::randomElement(static::\$city);
    }

    /**
     * Randomly returns a czech region.
     *
     * @example 'Liberecký kraj'
     *
     * @return string
     */
    public static function region()
    {
        return static::randomElement(static::\$regions);
    }

    /**
     * Real street names as random data can hardly be
     * generated due to inflection.
     *
     * @example 'U Vodárny'
     *
     * @return string
     */
    public function streetName()
    {
        return static::randomElement(static::\$street);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/cs_CZ/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 22,  125 => 21,  117 => 20,  109 => 19,  101 => 18,  93 => 17,  83 => 16,  74 => 12,  68 => 11,  62 => 10,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\cs_CZ;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$streetAddressFormats = array(
        '{{streetName}}',
        '{{streetName}} {{buildingNumber}}',
        '{{streetName}} {{buildingNumber}}',
        '{{streetName}} {{buildingNumber}}',
        '{{streetName}} {{buildingNumber}}',
    );

    protected static \$addressFormats = array(
        \"{{streetAddress}}\\n{{region}}\\n{{postcode}} {{city}}\",
        \"{{streetAddress}}\\n{{postcode}} {{city}}\",
        \"{{streetAddress}}\\n{{postcode}} {{city}}\",
        \"{{streetAddress}}\\n{{postcode}} {{city}}\",
        \"{{streetAddress}}\\n{{postcode}} {{city}}\",
        \"{{streetAddress}}\\n{{postcode}} {{city}}\",
        \"{{streetAddress}}\\n{{postcode}} {{city}}\\nČeská republika\",
    );

    protected static \$buildingNumber = array('%', '%%', '%/%%', '%%/%%', '%/%%%', '%%/%%%');

    protected static \$postcode = array('#####', '### ##');

    /**
     * Source: https://cs.wikipedia.org/wiki/Seznam_m%C4%9Bst_v_%C4%8Cesku_podle_po%C4%8Dtu_obyvatel
     */
    protected static \$city = array(
        'Brno', 'Břeclav', 'Cheb', 'Chomutov', 'Chrudim', 'Černošice', 'Česká Lípa', 'České Budějovice',
        'Český Těšín', 'Děčín', 'Frýdek-Místek', 'Havlíčkův Brod', 'Havířov', 'Hodonín', 'Hradec Králové',
        'Jablonec nad Nisou', 'Jihlava', 'Karlovy Vary', 'Karviná', 'Kladno', 'Kolín', 'Krnov', 'Kroměříž',
        'Liberec', 'Litoměřice', 'Litvínov', 'Mladá Boleslav', 'Most', 'Nový Jičín', 'Olomouc', 'Opava', 'Orlová',
        'Ostrava', 'Pardubice', 'Plzeň', 'Praha', 'Prostějov', 'Písek', 'Přerov', 'Příbram', 'Sokolov', 'Šumperk',
        'Teplice', 'Trutnov', 'Tábor', 'Třebíč', 'Třinec', 'Uherské Hradiště', 'Ústí nad Labem',
        'Valašské Meziříčí', 'Vsetín', 'Zlín', 'Znojmo',
    );

    /**
     * Source: https://cs.wikipedia.org/wiki/Seznam_st%C3%A1t%C5%AF_sv%C4%9Bta
     */
    protected static \$country = array(
        'Afghánistán', 'Albánie', 'Alžírsko', 'Andorra', 'Angola', 'Antigua a Barbuda', 'Argentina',
        'Arménie', 'Austrálie', 'Ázerbájdžán', 'Bahamy', 'Bahrajn', 'Bangladéš', 'Barbados', 'Belgie',
        'Belize', 'Benin', 'Bělorusko', 'Bhútán', 'Bolívie', 'Bosna a Hercegovina', 'Botswana', 'Brazílie',
        'Brunej', 'Bulharsko', 'Burkina Faso', 'Burundi', 'Cookovy ostrovy', 'Čad', 'Černá Hora', 'Česká republika',
        'Čína', 'Dánsko', 'Demokratická republika Kongo', 'Dominika', 'Dominikánská republika', 'Džibutsko',
        'Egypt', 'Ekvádor', 'Eritrea', 'Estonsko', 'Etiopie', 'Fidži', 'Filipíny', 'Finsko', 'Francie', 'Gabon',
        'Gambie', 'Ghana', 'Grenada', 'Gruzie', 'Guatemala', 'Guinea', 'Guinea-Bissau', 'Guyana', 'Haiti', 'Honduras',
        'Chile', 'Chorvatsko', 'Indie', 'Indonésie', 'Irák', 'Írán', 'Irsko', 'Island', 'Itálie', 'Izrael', 'Jamajka',
        'Japonsko', 'Jemen', 'Jihoafrická republika', 'Jižní Korea', 'Jižní Súdán', 'Jordánsko', 'Kambodža', 'Kamerun',
        'Kanada', 'Kapverdy', 'Katar', 'Kazachstán', 'Keňa', 'Kiribati', 'Kolumbie', 'Komory', 'Republika Kongo',
        'Kostarika', 'Kuba', 'Kuvajt', 'Kypr', 'Kyrgyzstán', 'Laos', 'Lesotho', 'Libanon', 'Libérie', 'Libye',
        'Lichtenštejnsko', 'Litva', 'Lotyšsko', 'Lucembursko', 'Madagaskar', 'Maďarsko', 'Makedonie', 'Malajsie',
        'Malawi', 'Maledivy', 'Mali', 'Malta', 'Maroko', 'Marshallovy ostrovy', 'Mauritánie', 'Mauricius', 'Mexiko',
        'Federativní státy Mikronésie', 'Moldavsko', 'Monako', 'Mongolsko', 'Mosambik', 'Myanmar', 'Namibie', 'Nauru',
        'Nepál', 'Německo', 'Niger', 'Nigérie', 'Nikaragua', 'Niue', 'Nizozemsko', 'Norsko', 'Nový Zéland', 'Omán',
        'Pákistán', 'Palau', 'Panama', 'Papua-Nová Guinea', 'Paraguay', 'Peru', 'Pobřeží slonoviny', 'Polsko',
        'Portugalsko', 'Rakousko', 'Rovníková Guinea', 'Rumunsko', 'Rusko', 'Rwanda', 'Řecko', 'Salvador', 'Samoa',
        'San Marino', 'Saúdská Arábie', 'Senegal', 'Severní Korea', 'Seychely', 'Sierra Leone', 'Singapur',
        'Slovensko', 'Slovinsko', 'Somálsko', 'Spojené arabské emiráty', 'Spojené království', 'Spojené státy americké',
        'Srbsko', 'Středoafrická republika', 'Surinam', 'Súdán', 'Svatá Lucie', 'Svatý Kryštof a Nevis',
        'Svatý Tomáš a Princův ostrov', 'Svatý Vincenc a Grenadiny', 'Svazijsko', 'Sýrie', 'Šalamounovy ostrovy',
        'Španělsko', 'Šrí Lanka', 'Švédsko', 'Švýcarsko', 'Tádžikistán', 'Tanzanie', 'Thajsko', 'Togo', 'Tonga',
        'Trinidad a Tobago', 'Tunisko', 'Turecko', 'Turkmenistán', 'Tuvalu', 'Uganda', 'Ukrajina', 'Uruguay',
        'Uzbekistán', 'Vanuatu', 'Vatikán', 'Venezuela', 'Vietnam', 'Východní Timor', 'Zambie', 'Zimbabwe',
    );

    /**
     * Source: https://cs.wikipedia.org/wiki/Kraje_v_%C4%8Cesku#Ekonomika
     */
    private static \$regions = array(
        'Hlavní město Praha', 'Jihomoravský kraj', 'Jihočeský kraj', 'Karlovarský kraj', 'Královéhradecký kraj',
        'Liberecký kraj', 'Moravskoslezský kraj', 'Olomoucký kraj', 'Pardubický kraj', 'Plzeňský kraj',
        'Středočeský kraj', 'Vysočina', 'Zlínský kraj', 'Ústecký kraj',
    );

    /**
     * Source: http://aplikace.mvcr.cz/adresy/
     */
    protected static \$street = array(
        'Alžírská', 'Angelovova', 'Antonínská', 'Arménská', 'Čelkovická', 'Červenkova', 'Československého exilu',
        'Chlumínská', 'Chládkova', 'Diskařská', 'Do Kopečka', 'Do Vozovny', 'Do Vršku', 'Doubravická', 'Doudova',
        'Drahotínská', 'Dělnická', 'Generála Šišky', 'Gončarenkova', 'Gutova', 'Havlínova', 'Havraní', 'Helmova',
        'Hečkova', 'Holubinková', 'Holínská', 'Horní Hrdlořezská', 'Horní Stromky', 'Hostivařské nám.', 'Houbařská',
        'Hořanská', 'Hrachovská', 'Hrad III. nádvoří', 'Hrdlořezská', 'Jenská', 'Jerevanská', 'Ježovická', 'K Březince',
        'K Dobré Vodě', 'K Hořavce', 'K Hrušovu', 'K Háji', 'K Návsi', 'K Padesátníku', 'K Pyramidce', 'K Samotě',
        'K Vinici', 'K Vystrkovu', 'Karlovarská', 'Karlínské nám.', 'Kaňkova', 'Ke Kyjovu', 'Ke Stadionu', 'Kejnická',
        'Klatovská', 'Kohoutových', 'Kopanská', 'Kralupská', 'Kukelská', 'Kukučínova', 'Kunešova', 'Kvestorská',
        'Křišťanova', 'Lanžhotská', 'Leštínská', 'Lindavská', 'Litevská', 'Lojovická', 'Lukešova', 'Maltézské náměstí',
        'Melodická', 'Mečíková', 'Milady Horákové', 'Mšenská', 'N. A. Někrasova', 'Na Dědince', 'Na Habrové',
        'Na Jezerce', 'Na Jílech', 'Na Petynce', 'Na Rozcestí', 'Na Sedlišti', 'Na Vrchu', 'Na Výšině', 'Na Úbočí',
        'Na Štamberku', 'Nad Hliníkem', 'Nad Hřištěm', 'Nad Klikovkou', 'Nad libeňským nádražím', 'Nad Nuslemi',
        'Nad Slávií', 'Nad Trnkovem', 'Nad Šauerovými sady', 'Netřebská', 'Nivnická', 'Nádražní', 'nám. Pod Lípou',
        'nám. Před bateriemi', 'nám. Svatopluka Čecha', 'Odlehlá', 'Okrasná', 'Omská', 'Otavova', 'Oválová',
        'Palackého nám.', 'Pavlišovská', 'Paškova', 'Petřínské sady', 'Pilovská', 'Pod Bruskou', 'Pod novou školou',
        'Pod soutratím', 'Pod Svahem', 'Pod Útesy', 'Pohledná', 'Pošepného nám.', 'Prokopových', 'Pávovské náměstí',
        'Pětipeského', 'Příbramská', 'Radbuzská', 'Radnické schody', 'Raichlova', 'Roentgenova', 'Rozkošného',
        'Rozrazilová', 'Ruzyňská', 'Římovská', 'Říční', 'Satalická', 'Schoellerova', 'Smrková', 'Souvratní', 'Sovova',
        'Sportovní', 'Stadionová', 'Statková', 'Stavební', 'Široká', 'Školní', 'Tatranská', 'Tomsova', 'Toruňská',
        'Točenská', 'Trnkovo náměstí', 'Truhlářova', 'Tvrdonická', 'Týmlova', 'U Beránky', 'U Chmelnice',
        'U Chodovského hřbitova', 'U Drážky', 'U Fořta', 'U Kamýku', 'U Klubovny', 'U Lesa', 'U Pekáren',
        'U Prašné brány', 'U Prádelny', 'U Silnice', 'U Sladovny', 'U Slovanky', 'U Soutoku', 'U Trojice', 'U Vinice',
        'U vinných sklepů', 'U Vodárny', 'U Vorlíků', 'U zeleného ptáka', 'U Čekárny', 'U Županských', 'Ukrajinská',
        'Újezdská', 'V Jámě', 'V Předním Hloubětíně', 'V Rohu', 'V Uličce', 'Valčíkova', 'Ve Lhotce', 'Ve Vrších',
        'Velenická', 'Violková', 'Vlašská', 'Voděradská', 'Vyderská', 'Vysokoškolská', 'Výpadová', 'Vřesovická',
        'Za Pekárnou', 'Zámecká',
    );

    /**
     * Randomly returns a czech city.
     *
     * @example 'Krnov'
     *
     * @return string
     */
    public function city()
    {
        return static::randomElement(static::\$city);
    }

    /**
     * Randomly returns a czech region.
     *
     * @example 'Liberecký kraj'
     *
     * @return string
     */
    public static function region()
    {
        return static::randomElement(static::\$regions);
    }

    /**
     * Real street names as random data can hardly be
     * generated due to inflection.
     *
     * @example 'U Vodárny'
     *
     * @return string
     */
    public function streetName()
    {
        return static::randomElement(static::\$street);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/cs_CZ/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/cs_CZ/Address.php");
    }
}
