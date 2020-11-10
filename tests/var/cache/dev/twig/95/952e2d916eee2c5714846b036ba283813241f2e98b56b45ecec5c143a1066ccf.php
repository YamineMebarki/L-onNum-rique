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

/* vendor/fzaninotto/faker/src/Faker/Provider/is_IS/Address.php */
class __TwigTemplate_0cd1e0c7f849e4aecb6390f629385d65f5566b61eb99a2b01e2dffb64c8aef38 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/is_IS/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/is_IS/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\is_IS;

/**
 * @author Birkir Gudjonsson <birkir.gudjonsson@gmail.com>
 */
class Address extends \\Faker\\Provider\\Address
{
    /**
     * @var array Countries in icelandic
     */
    protected static \$country = array(
        'Afganistan', 'Albanía', 'Alsír', 'Andorra', 'Angóla', 'Angvilla', 'Antígva og Barbúda', 'Argentína',
        'Armenía', 'Arúba', 'Aserbaídsjan', 'Austur-Kongó', 'Austurríki', 'Austur-Tímor', 'Álandseyjar',
        'Ástralía', 'Bahamaeyjar', 'Bandaríkin', 'Bandaríska Samóa', 'Bangladess', 'Barbados', 'Barein',
        'Belgía', 'Belís', 'Benín', 'Bermúdaeyjar', 'Bosnía og Hersegóvína', 'Botsvana', 'Bouvet-eyja', 'Bólivía',
        'Brasilía', 'Bresku Indlandshafseyjar', 'Bretland', 'Brúnei', 'Búlgaría', 'Búrkína Fasó', 'Búrúndí', 'Bútan',
        'Cayman-eyjar', 'Chile', 'Cooks-eyjar', 'Danmörk', 'Djíbútí', 'Dóminíka', 'Dóminíska lýðveldið', 'Egyptaland',
        'Eistland', 'Ekvador', 'El Salvador', 'England', 'Erítrea', 'Eþíópía', 'Falklandseyjar', 'Filippseyjar',
        'Finnland', 'Fídjieyjar', 'Fílabeinsströndin', 'Frakkland', 'Franska Gvæjana', 'Franska Pólýnesía',
        'Frönsku suðlægu landsvæðin', 'Færeyjar', 'Gabon', 'Gambía', 'Gana', 'Georgía', 'Gíbraltar', 'Gínea',
        'Gínea-Bissá', 'Grenada', 'Grikkland', 'Grænhöfðaeyjar', 'Grænland', 'Gvadelúpeyjar', 'Gvam', 'Gvatemala',
        'Gvæjana', 'Haítí', 'Heard og McDonalds-eyjar', 'Holland', 'Hollensku Antillur', 'Hondúras', 'Hong Kong',
        'Hvíta-Rússland', 'Indland', 'Indónesía', 'Írak', 'Íran', 'Írland', 'Ísland', 'Ísrael', 'Ítalía', 'Jamaíka',
        'Japan', 'Jemen', 'Jólaey', 'Jómfrúaeyjar', 'Jórdanía', 'Kambódía', 'Kamerún', 'Kanada', 'Kasakstan', 'Katar',
        'Kenía', 'Kirgisistan', 'Kína', 'Kíribatí', 'Kongó', 'Austur-Kongó', 'Vestur-Kongó', 'Kostaríka', 'Kókoseyjar',
        'Kólumbía', 'Kómoreyjar', 'Kórea', 'Norður-Kórea;', 'Suður-Kórea', 'Króatía', 'Kúba', 'Kúveit', 'Kýpur',
        'Laos', 'Lesótó', 'Lettland', 'Liechtenstein', 'Litháen', 'Líbanon', 'Líbería', 'Líbía', 'Lúxemborg',
        'Madagaskar', 'Makaó', 'Makedónía', 'Malasía', 'Malaví', 'Maldíveyjar', 'Malí', 'Malta', 'Marokkó',
        'Marshall-eyjar', 'Martiník', 'Mayotte', 'Máritanía', 'Máritíus', 'Mexíkó', 'Mið-Afríkulýðveldið',
        'Miðbaugs-Gínea', 'Míkrónesía', 'Mjanmar', 'Moldóva', 'Mongólía', 'Montserrat', 'Mónakó', 'Mósambík',
        'Namibía', 'Nárú', 'Nepal', 'Niue', 'Níger', 'Nígería', 'Níkaragva', 'Norður-Írland', 'Norður-Kórea',
        'Norður-Maríanaeyjar', 'Noregur', 'Norfolkeyja', 'Nýja-Kaledónía', 'Nýja-Sjáland', 'Óman', 'Pakistan',
        'Palá', 'Palestína', 'Panama', 'Papúa Nýja-Gínea', 'Paragvæ', 'Páfagarður', 'Perú', 'Pitcairn', 'Portúgal',
        'Pólland', 'Púertó Ríkó', 'Réunion', 'Rúanda', 'Rúmenía', 'Rússland', 'Salómonseyjar', 'Sambía',
        'Sameinuðu arabísku furstadæmin', 'Samóa', 'San Marínó', 'Sankti Helena', 'Sankti Kristófer og Nevis',
        'Sankti Lúsía', 'Sankti Pierre og Miquelon', 'Sankti Vinsent og Grenadíneyjar', 'Saó Tóme og Prinsípe',
        'Sádi-Arabía', 'Senegal', 'Serbía', 'Seychelles-eyjar', 'Simbabve', 'Singapúr', 'Síerra Leóne', 'Skotland',
        'Slóvakía', 'Slóvenía', 'Smáeyjar Bandaríkjanna', 'Sómalía', 'Spánn', 'Srí Lanka', 'Suður-Afríka',
        'Suður-Georgía og Suður-Sandvíkureyjar', 'Suður-Kórea', 'Suðurskautslandið', 'Súdan', 'Súrínam', 'Jan Mayen',
        'Svartfjallaland', 'Svasíland', 'Sviss', 'Svíþjóð', 'Sýrland', 'Tadsjikistan', 'Taíland', 'Taívan', 'Tansanía',
        'Tékkland', 'Tonga', 'Tógó', 'Tókelá', 'Trínidad og Tóbagó', 'Tsjad', 'Tsjetsjenía', 'Turks- og Caicos-eyjar',
        'Túnis', 'Túrkmenistan', 'Túvalú', 'Tyrkland', 'Ungverjaland', 'Úganda', 'Úkraína', 'Úrúgvæ', 'Úsbekistan',
        'Vanúatú', 'Venesúela', 'Vestur-Kongó', 'Vestur-Sahara', 'Víetnam', 'Wales', 'Wallis- og Fútúnaeyjar', 'Þýskaland'
    );

    /**
     * @var array Icelandic cities.
     */
    protected static \$cityNames = array(
        'Reykjavík', 'Seltjarnarnes', 'Vogar', 'Kópavogur', 'Garðabær', 'Hafnarfjörður', 'Reykjanesbær', 'Grindavík',
        'Sandgerði', 'Garður', 'Reykjanesbær', 'Mosfellsbær', 'Akranes', 'Borgarnes', 'Reykholt', 'Stykkishólmur',
        'Flatey', 'Grundarfjörður', 'Ólafsvík', 'Snæfellsbær', 'Hellissandur', 'Búðardalur', 'Reykhólahreppur',
        'Ísafjörður', 'Hnífsdalur', 'Bolungarvík', 'Súðavík', 'Flateyri', 'Suðureyri', 'Patreksfjörður',
        'Tálknafjörður', 'Bíldudalur', 'Þingeyri', 'Staður', 'Hólmavík', 'Drangsnes', 'Árneshreppur', 'Hvammstangi',
        'Blönduós', 'Skagaströnd', 'Sauðárkrókur', 'Varmahlíð', 'Hofsós', 'Fljót', 'Siglufjörður', 'Akureyri',
        'Grenivík', 'Grímsey', 'Dalvík', 'Ólafsfjörður', 'Hrísey', 'Húsavík', 'Fosshóll', 'Laugar', 'Mývatn',
        'Kópasker', 'Raufarhöfn', 'Þórshöfn', 'Bakkafjörður', 'Vopnafjörður', 'Egilsstaðir', 'Seyðisfjörður',
        'Mjóifjörður', 'Borgarfjörður', 'Reyðarfjörður', 'Eskifjörður', 'Neskaupstaður', 'Fáskrúðsfjörður',
        'Stöðvarfjörður', 'Breiðdalsvík', 'Djúpivogur', 'Höfn', 'Selfoss', 'Hveragerði', 'Þorlákshöfn', 'Ölfus',
        'Eyrarbakki', 'Stokkseyri', 'Laugarvatn', 'Flúðir', 'Hella', 'Hvolsvöllur', 'Vík', 'Kirkjubæjarklaustur',
        'Vestmannaeyjar'
    );

    /**
     * @var array Street name suffix.
     */
    protected static \$streetSuffix = array(
        'ás', 'bakki', 'braut', 'bær', 'brún', 'berg', 'fold', 'gata', 'gróf',
        'garðar', 'höfði', 'heimar', 'hamar', 'hólar', 'háls', 'kvísl', 'lækur',
        'leiti', 'land', 'múli', 'nes', 'rimi', 'stígur', 'stræti', 'stekkur',
        'slóð', 'skógar', 'sel', 'teigur', 'tún', 'vangur', 'vegur', 'vogur',
        'vað'
    );

    /**
     * @var array Street name prefix.
     */
    protected static \$streetPrefix = array(
        'Aðal', 'Austur', 'Bakka', 'Braga', 'Báru', 'Brunn', 'Fiski', 'Leifs',
        'Týs', 'Birki', 'Suður', 'Norður', 'Vestur', 'Austur', 'Sanda', 'Skógar',
        'Stór', 'Sunnu', 'Tungu', 'Tangar', 'Úlfarfells', 'Vagn', 'Vind', 'Ysti',
        'Þing', 'Hamra', 'Hóla', 'Kríu', 'Iðu', 'Spóa', 'Starra', 'Uglu', 'Vals'
    );

    /**
     * @var Icelandic zip code.
    **/
    protected static \$postcode = array(
        '%##'
    );

    /**
     * @var array Icelandic regions.
     */
    protected static \$regionNames = array(
        'Höfuðborgarsvæðið', 'Norðurland', 'Suðurland', 'Vesturland', 'Vestfirðir', 'Austurland', 'Suðurnes'
    );

    /**
     * @var array Icelandic building numbers.
     */
    protected static \$buildingNumber = array(
        '%##', '%#', '%#', '%', '%', '%', '%?', '% ?',
    );

    /**
     * @var array Icelandic city format.
     */
    protected static \$cityFormats = array(
        '";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["cityName"]) || array_key_exists("cityName", $context) ? $context["cityName"] : (function () { throw new RuntimeError('Variable "cityName" does not exist.', 112, $this->source); })()), "html", null, true);
        echo "',
    );

    /**
     * @var array Icelandic street's name formats.
     */
    protected static \$streetNameFormats = array(
        '";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 119, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 119, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 120, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 120, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 121, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 121, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 122, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 122, $this->source); })()), "html", null, true);
        echo "'
    );

    /**
     * @var array Icelandic street's address formats.
     */
    protected static \$streetAddressFormats = array(
        '";
        // line 129
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 129, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 129, $this->source); })()), "html", null, true);
        echo "'
    );

    /**
     * @var array Icelandic address format.
     */
    protected static \$addressFormats = array(
        \"";
        // line 136
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 136, $this->source); })()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 136, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 136, $this->source); })()), "html", null, true);
        echo "\",
    );

    /**
     * Randomly return a real city name.
     *
     * @return string
     */
    public static function cityName()
    {
        return static::randomElement(static::\$cityNames);
    }

    /**
     * Randomly return a street prefix.
     *
     * @return string
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    /**
     * Randomly return a building number.
     *
     * @return string
     */
    public static function buildingNumber()
    {
        return static::toUpper(static::bothify(static::randomElement(static::\$buildingNumber)));
    }

    /**
     * Randomly return a real region name.
     *
     * @return string
     */
    public static function region()
    {
        return static::randomElement(static::\$regionNames);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/is_IS/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 136,  192 => 129,  181 => 122,  176 => 121,  171 => 120,  166 => 119,  156 => 112,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\is_IS;

/**
 * @author Birkir Gudjonsson <birkir.gudjonsson@gmail.com>
 */
class Address extends \\Faker\\Provider\\Address
{
    /**
     * @var array Countries in icelandic
     */
    protected static \$country = array(
        'Afganistan', 'Albanía', 'Alsír', 'Andorra', 'Angóla', 'Angvilla', 'Antígva og Barbúda', 'Argentína',
        'Armenía', 'Arúba', 'Aserbaídsjan', 'Austur-Kongó', 'Austurríki', 'Austur-Tímor', 'Álandseyjar',
        'Ástralía', 'Bahamaeyjar', 'Bandaríkin', 'Bandaríska Samóa', 'Bangladess', 'Barbados', 'Barein',
        'Belgía', 'Belís', 'Benín', 'Bermúdaeyjar', 'Bosnía og Hersegóvína', 'Botsvana', 'Bouvet-eyja', 'Bólivía',
        'Brasilía', 'Bresku Indlandshafseyjar', 'Bretland', 'Brúnei', 'Búlgaría', 'Búrkína Fasó', 'Búrúndí', 'Bútan',
        'Cayman-eyjar', 'Chile', 'Cooks-eyjar', 'Danmörk', 'Djíbútí', 'Dóminíka', 'Dóminíska lýðveldið', 'Egyptaland',
        'Eistland', 'Ekvador', 'El Salvador', 'England', 'Erítrea', 'Eþíópía', 'Falklandseyjar', 'Filippseyjar',
        'Finnland', 'Fídjieyjar', 'Fílabeinsströndin', 'Frakkland', 'Franska Gvæjana', 'Franska Pólýnesía',
        'Frönsku suðlægu landsvæðin', 'Færeyjar', 'Gabon', 'Gambía', 'Gana', 'Georgía', 'Gíbraltar', 'Gínea',
        'Gínea-Bissá', 'Grenada', 'Grikkland', 'Grænhöfðaeyjar', 'Grænland', 'Gvadelúpeyjar', 'Gvam', 'Gvatemala',
        'Gvæjana', 'Haítí', 'Heard og McDonalds-eyjar', 'Holland', 'Hollensku Antillur', 'Hondúras', 'Hong Kong',
        'Hvíta-Rússland', 'Indland', 'Indónesía', 'Írak', 'Íran', 'Írland', 'Ísland', 'Ísrael', 'Ítalía', 'Jamaíka',
        'Japan', 'Jemen', 'Jólaey', 'Jómfrúaeyjar', 'Jórdanía', 'Kambódía', 'Kamerún', 'Kanada', 'Kasakstan', 'Katar',
        'Kenía', 'Kirgisistan', 'Kína', 'Kíribatí', 'Kongó', 'Austur-Kongó', 'Vestur-Kongó', 'Kostaríka', 'Kókoseyjar',
        'Kólumbía', 'Kómoreyjar', 'Kórea', 'Norður-Kórea;', 'Suður-Kórea', 'Króatía', 'Kúba', 'Kúveit', 'Kýpur',
        'Laos', 'Lesótó', 'Lettland', 'Liechtenstein', 'Litháen', 'Líbanon', 'Líbería', 'Líbía', 'Lúxemborg',
        'Madagaskar', 'Makaó', 'Makedónía', 'Malasía', 'Malaví', 'Maldíveyjar', 'Malí', 'Malta', 'Marokkó',
        'Marshall-eyjar', 'Martiník', 'Mayotte', 'Máritanía', 'Máritíus', 'Mexíkó', 'Mið-Afríkulýðveldið',
        'Miðbaugs-Gínea', 'Míkrónesía', 'Mjanmar', 'Moldóva', 'Mongólía', 'Montserrat', 'Mónakó', 'Mósambík',
        'Namibía', 'Nárú', 'Nepal', 'Niue', 'Níger', 'Nígería', 'Níkaragva', 'Norður-Írland', 'Norður-Kórea',
        'Norður-Maríanaeyjar', 'Noregur', 'Norfolkeyja', 'Nýja-Kaledónía', 'Nýja-Sjáland', 'Óman', 'Pakistan',
        'Palá', 'Palestína', 'Panama', 'Papúa Nýja-Gínea', 'Paragvæ', 'Páfagarður', 'Perú', 'Pitcairn', 'Portúgal',
        'Pólland', 'Púertó Ríkó', 'Réunion', 'Rúanda', 'Rúmenía', 'Rússland', 'Salómonseyjar', 'Sambía',
        'Sameinuðu arabísku furstadæmin', 'Samóa', 'San Marínó', 'Sankti Helena', 'Sankti Kristófer og Nevis',
        'Sankti Lúsía', 'Sankti Pierre og Miquelon', 'Sankti Vinsent og Grenadíneyjar', 'Saó Tóme og Prinsípe',
        'Sádi-Arabía', 'Senegal', 'Serbía', 'Seychelles-eyjar', 'Simbabve', 'Singapúr', 'Síerra Leóne', 'Skotland',
        'Slóvakía', 'Slóvenía', 'Smáeyjar Bandaríkjanna', 'Sómalía', 'Spánn', 'Srí Lanka', 'Suður-Afríka',
        'Suður-Georgía og Suður-Sandvíkureyjar', 'Suður-Kórea', 'Suðurskautslandið', 'Súdan', 'Súrínam', 'Jan Mayen',
        'Svartfjallaland', 'Svasíland', 'Sviss', 'Svíþjóð', 'Sýrland', 'Tadsjikistan', 'Taíland', 'Taívan', 'Tansanía',
        'Tékkland', 'Tonga', 'Tógó', 'Tókelá', 'Trínidad og Tóbagó', 'Tsjad', 'Tsjetsjenía', 'Turks- og Caicos-eyjar',
        'Túnis', 'Túrkmenistan', 'Túvalú', 'Tyrkland', 'Ungverjaland', 'Úganda', 'Úkraína', 'Úrúgvæ', 'Úsbekistan',
        'Vanúatú', 'Venesúela', 'Vestur-Kongó', 'Vestur-Sahara', 'Víetnam', 'Wales', 'Wallis- og Fútúnaeyjar', 'Þýskaland'
    );

    /**
     * @var array Icelandic cities.
     */
    protected static \$cityNames = array(
        'Reykjavík', 'Seltjarnarnes', 'Vogar', 'Kópavogur', 'Garðabær', 'Hafnarfjörður', 'Reykjanesbær', 'Grindavík',
        'Sandgerði', 'Garður', 'Reykjanesbær', 'Mosfellsbær', 'Akranes', 'Borgarnes', 'Reykholt', 'Stykkishólmur',
        'Flatey', 'Grundarfjörður', 'Ólafsvík', 'Snæfellsbær', 'Hellissandur', 'Búðardalur', 'Reykhólahreppur',
        'Ísafjörður', 'Hnífsdalur', 'Bolungarvík', 'Súðavík', 'Flateyri', 'Suðureyri', 'Patreksfjörður',
        'Tálknafjörður', 'Bíldudalur', 'Þingeyri', 'Staður', 'Hólmavík', 'Drangsnes', 'Árneshreppur', 'Hvammstangi',
        'Blönduós', 'Skagaströnd', 'Sauðárkrókur', 'Varmahlíð', 'Hofsós', 'Fljót', 'Siglufjörður', 'Akureyri',
        'Grenivík', 'Grímsey', 'Dalvík', 'Ólafsfjörður', 'Hrísey', 'Húsavík', 'Fosshóll', 'Laugar', 'Mývatn',
        'Kópasker', 'Raufarhöfn', 'Þórshöfn', 'Bakkafjörður', 'Vopnafjörður', 'Egilsstaðir', 'Seyðisfjörður',
        'Mjóifjörður', 'Borgarfjörður', 'Reyðarfjörður', 'Eskifjörður', 'Neskaupstaður', 'Fáskrúðsfjörður',
        'Stöðvarfjörður', 'Breiðdalsvík', 'Djúpivogur', 'Höfn', 'Selfoss', 'Hveragerði', 'Þorlákshöfn', 'Ölfus',
        'Eyrarbakki', 'Stokkseyri', 'Laugarvatn', 'Flúðir', 'Hella', 'Hvolsvöllur', 'Vík', 'Kirkjubæjarklaustur',
        'Vestmannaeyjar'
    );

    /**
     * @var array Street name suffix.
     */
    protected static \$streetSuffix = array(
        'ás', 'bakki', 'braut', 'bær', 'brún', 'berg', 'fold', 'gata', 'gróf',
        'garðar', 'höfði', 'heimar', 'hamar', 'hólar', 'háls', 'kvísl', 'lækur',
        'leiti', 'land', 'múli', 'nes', 'rimi', 'stígur', 'stræti', 'stekkur',
        'slóð', 'skógar', 'sel', 'teigur', 'tún', 'vangur', 'vegur', 'vogur',
        'vað'
    );

    /**
     * @var array Street name prefix.
     */
    protected static \$streetPrefix = array(
        'Aðal', 'Austur', 'Bakka', 'Braga', 'Báru', 'Brunn', 'Fiski', 'Leifs',
        'Týs', 'Birki', 'Suður', 'Norður', 'Vestur', 'Austur', 'Sanda', 'Skógar',
        'Stór', 'Sunnu', 'Tungu', 'Tangar', 'Úlfarfells', 'Vagn', 'Vind', 'Ysti',
        'Þing', 'Hamra', 'Hóla', 'Kríu', 'Iðu', 'Spóa', 'Starra', 'Uglu', 'Vals'
    );

    /**
     * @var Icelandic zip code.
    **/
    protected static \$postcode = array(
        '%##'
    );

    /**
     * @var array Icelandic regions.
     */
    protected static \$regionNames = array(
        'Höfuðborgarsvæðið', 'Norðurland', 'Suðurland', 'Vesturland', 'Vestfirðir', 'Austurland', 'Suðurnes'
    );

    /**
     * @var array Icelandic building numbers.
     */
    protected static \$buildingNumber = array(
        '%##', '%#', '%#', '%', '%', '%', '%?', '% ?',
    );

    /**
     * @var array Icelandic city format.
     */
    protected static \$cityFormats = array(
        '{{cityName}}',
    );

    /**
     * @var array Icelandic street's name formats.
     */
    protected static \$streetNameFormats = array(
        '{{streetPrefix}}{{streetSuffix}}',
        '{{streetPrefix}}{{streetSuffix}}',
        '{{firstNameMale}}{{streetSuffix}}',
        '{{firstNameFemale}}{{streetSuffix}}'
    );

    /**
     * @var array Icelandic street's address formats.
     */
    protected static \$streetAddressFormats = array(
        '{{streetName}} {{buildingNumber}}'
    );

    /**
     * @var array Icelandic address format.
     */
    protected static \$addressFormats = array(
        \"{{streetAddress}}\\n{{postcode}} {{city}}\",
    );

    /**
     * Randomly return a real city name.
     *
     * @return string
     */
    public static function cityName()
    {
        return static::randomElement(static::\$cityNames);
    }

    /**
     * Randomly return a street prefix.
     *
     * @return string
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    /**
     * Randomly return a building number.
     *
     * @return string
     */
    public static function buildingNumber()
    {
        return static::toUpper(static::bothify(static::randomElement(static::\$buildingNumber)));
    }

    /**
     * Randomly return a real region name.
     *
     * @return string
     */
    public static function region()
    {
        return static::randomElement(static::\$regionNames);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/is_IS/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/is_IS/Address.php");
    }
}
