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

/* vendor/symfony/validator/Resources/translations/validators.hr.xlf */
class __TwigTemplate_6a18d63bc8745cec2d10879fb35d4fc41cc4ce024e914483e2b668c31cf41b8a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Resources/translations/validators.hr.xlf"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Resources/translations/validators.hr.xlf"));

        // line 1
        echo "<?xml version=\"1.0\"?>
<xliff version=\"1.2\" xmlns=\"urn:oasis:names:tc:xliff:document:1.2\">
    <file source-language=\"en\" datatype=\"plaintext\" original=\"file.ext\">
        <body>
            <trans-unit id=\"1\">
                <source>This value should be false.</source>
                <target>Ova vrijednost treba biti netočna (false).</target>
            </trans-unit>
            <trans-unit id=\"2\">
                <source>This value should be true.</source>
                <target>Ova vrijednost treba biti točna (true).</target>
            </trans-unit>
            <trans-unit id=\"3\">
                <source>This value should be of type ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 14, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Ova vrijednost treba biti tipa ";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 15, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"4\">
                <source>This value should be blank.</source>
                <target>Ova vrijednost treba biti prazna.</target>
            </trans-unit>
            <trans-unit id=\"5\">
                <source>The value you selected is not a valid choice.</source>
                <target>Ova vrijednost nije valjan izbor.</target>
            </trans-unit>
            <trans-unit id=\"6\">
                <source>You must select at least ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " choice.|You must select at least ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " choices.</source>
                <target>Izaberite barem ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 27, $this->source); })()), "html", null, true);
        echo " mogućnosti.</target>
            </trans-unit>
            <trans-unit id=\"7\">
                <source>You must select at most ";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 30, $this->source); })()), "html", null, true);
        echo " choice.|You must select at most ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 30, $this->source); })()), "html", null, true);
        echo " choices.</source>
                <target>Izaberite najviše ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 31, $this->source); })()), "html", null, true);
        echo " mogućnosti.</target>
            </trans-unit>
            <trans-unit id=\"8\">
                <source>One or more of the given values is invalid.</source>
                <target>Jedna ili više danih vrijednosti nije ispravna.</target>
            </trans-unit>
            <trans-unit id=\"9\">
                <source>This field was not expected.</source>
                <target>Ovo polje nije očekivano.</target>
            </trans-unit>
            <trans-unit id=\"10\">
                <source>This field is missing.</source>
                <target>Ovo polje nedostaje.</target>
            </trans-unit>
            <trans-unit id=\"11\">
                <source>This value is not a valid date.</source>
                <target>Ova vrijednost nije ispravan datum.</target>
            </trans-unit>
            <trans-unit id=\"12\">
                <source>This value is not a valid datetime.</source>
                <target>Ova vrijednost nije ispravnog datum-vrijeme formata.</target>
            </trans-unit>
            <trans-unit id=\"13\">
                <source>This value is not a valid email address.</source>
                <target>Ova vrijednost nije ispravna e-mail adresa.</target>
            </trans-unit>
            <trans-unit id=\"14\">
                <source>The file could not be found.</source>
                <target>Datoteka ne može biti pronađena.</target>
            </trans-unit>
            <trans-unit id=\"15\">
                <source>The file is not readable.</source>
                <target>Datoteka nije čitljiva.</target>
            </trans-unit>
            <trans-unit id=\"16\">
                <source>The file is too large (";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 66, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 66, $this->source); })()), "html", null, true);
        echo "). Allowed maximum size is ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 66, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 66, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Datoteka je prevelika (";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 67, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 67, $this->source); })()), "html", null, true);
        echo "). Najveća dozvoljena veličina je ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 67, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 67, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"17\">
                <source>The mime type of the file is invalid (";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 70, $this->source); })()), "html", null, true);
        echo "). Allowed mime types are ";
        echo twig_escape_filter($this->env, (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 70, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Mime tip datoteke nije ispravan (";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "). Dozvoljeni mime tipovi su ";
        echo twig_escape_filter($this->env, (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 71, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"18\">
                <source>This value should be ";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 74, $this->source); })()), "html", null, true);
        echo " or less.</source>
                <target>Ova vrijednost treba biti ";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 75, $this->source); })()), "html", null, true);
        echo " ili manje.</target>
            </trans-unit>
            <trans-unit id=\"19\">
                <source>This value is too long. It should have ";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 78, $this->source); })()), "html", null, true);
        echo " character or less.|This value is too long. It should have ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 78, $this->source); })()), "html", null, true);
        echo " characters or less.</source>
                <target>Ova vrijednost je predugačka. Treba imati ";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 79, $this->source); })()), "html", null, true);
        echo " znakova ili manje.</target>
            </trans-unit>
            <trans-unit id=\"20\">
                <source>This value should be ";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 82, $this->source); })()), "html", null, true);
        echo " or more.</source>
                <target>Ova vrijednost treba biti ";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 83, $this->source); })()), "html", null, true);
        echo " ili više.</target>
            </trans-unit>
            <trans-unit id=\"21\">
                <source>This value is too short. It should have ";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 86, $this->source); })()), "html", null, true);
        echo " character or more.|This value is too short. It should have ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 86, $this->source); })()), "html", null, true);
        echo " characters or more.</source>
                <target>Ova vrijednost je prekratka. Treba imati ";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 87, $this->source); })()), "html", null, true);
        echo " znakova ili više.</target>
            </trans-unit>
            <trans-unit id=\"22\">
                <source>This value should not be blank.</source>
                <target>Ova vrijednost ne bi trebala biti prazna.</target>
            </trans-unit>
            <trans-unit id=\"23\">
                <source>This value should not be null.</source>
                <target>Ova vrijednost ne bi trebala biti null.</target>
            </trans-unit>
            <trans-unit id=\"24\">
                <source>This value should be null.</source>
                <target>Ova vrijednost treba biti null.</target>
            </trans-unit>
            <trans-unit id=\"25\">
                <source>This value is not valid.</source>
                <target>Ova vrijednost nije ispravna.</target>
            </trans-unit>
            <trans-unit id=\"26\">
                <source>This value is not a valid time.</source>
                <target>Ova vrijednost nije ispravno vrijeme.</target>
            </trans-unit>
            <trans-unit id=\"27\">
                <source>This value is not a valid URL.</source>
                <target>Ova vrijednost nije ispravan URL.</target>
            </trans-unit>
            <trans-unit id=\"31\">
                <source>The two values should be equal.</source>
                <target>Obje vrijednosti trebaju biti jednake.</target>
            </trans-unit>
            <trans-unit id=\"32\">
                <source>The file is too large. Allowed maximum size is ";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 118, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 118, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Ova datoteka je prevelika. Najveća dozvoljena veličina je ";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 119, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 119, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"33\">
                <source>The file is too large.</source>
                <target>Ova datoteka je prevelika.</target>
            </trans-unit>
            <trans-unit id=\"34\">
                <source>The file could not be uploaded.</source>
                <target>Ova datoteka ne može biti prenesena.</target>
            </trans-unit>
            <trans-unit id=\"35\">
                <source>This value should be a valid number.</source>
                <target>Ova vrijednost treba biti ispravan broj.</target>
            </trans-unit>
            <trans-unit id=\"36\">
                <source>This file is not a valid image.</source>
                <target>Ova datoteka nije ispravna slika.</target>
            </trans-unit>
            <trans-unit id=\"37\">
                <source>This is not a valid IP address.</source>
                <target>Ovo nije ispravna IP adresa.</target>
            </trans-unit>
            <trans-unit id=\"38\">
                <source>This value is not a valid language.</source>
                <target>Ova vrijednost nije ispravan jezik.</target>
            </trans-unit>
            <trans-unit id=\"39\">
                <source>This value is not a valid locale.</source>
                <target>Ova vrijednost nije ispravana regionalna oznaka.</target>
            </trans-unit>
            <trans-unit id=\"40\">
                <source>This value is not a valid country.</source>
                <target>Ova vrijednost nije ispravna država.</target>
            </trans-unit>
            <trans-unit id=\"41\">
                <source>This value is already used.</source>
                <target>Ova vrijednost je već iskorištena.</target>
            </trans-unit>
            <trans-unit id=\"42\">
                <source>The size of the image could not be detected.</source>
                <target>Veličina slike se ne može odrediti.</target>
            </trans-unit>
            <trans-unit id=\"43\">
                <source>The image width is too big (";
        // line 162
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 162, $this->source); })()), "html", null, true);
        echo "px). Allowed maximum width is ";
        echo twig_escape_filter($this->env, (isset($context["max_width"]) || array_key_exists("max_width", $context) ? $context["max_width"] : (function () { throw new RuntimeError('Variable "max_width" does not exist.', 162, $this->source); })()), "html", null, true);
        echo "px.</source>
                <target>Širina slike je prevelika (";
        // line 163
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 163, $this->source); })()), "html", null, true);
        echo "px). Najveća dozvoljena širina je ";
        echo twig_escape_filter($this->env, (isset($context["max_width"]) || array_key_exists("max_width", $context) ? $context["max_width"] : (function () { throw new RuntimeError('Variable "max_width" does not exist.', 163, $this->source); })()), "html", null, true);
        echo "px.</target>
            </trans-unit>
            <trans-unit id=\"44\">
                <source>The image width is too small (";
        // line 166
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 166, $this->source); })()), "html", null, true);
        echo "px). Minimum width expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_width"]) || array_key_exists("min_width", $context) ? $context["min_width"] : (function () { throw new RuntimeError('Variable "min_width" does not exist.', 166, $this->source); })()), "html", null, true);
        echo "px.</source>
                <target>Širina slike je premala (";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 167, $this->source); })()), "html", null, true);
        echo "px). Najmanja dozvoljena širina je ";
        echo twig_escape_filter($this->env, (isset($context["min_width"]) || array_key_exists("min_width", $context) ? $context["min_width"] : (function () { throw new RuntimeError('Variable "min_width" does not exist.', 167, $this->source); })()), "html", null, true);
        echo "px.</target>
            </trans-unit>
            <trans-unit id=\"45\">
                <source>The image height is too big (";
        // line 170
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 170, $this->source); })()), "html", null, true);
        echo "px). Allowed maximum height is ";
        echo twig_escape_filter($this->env, (isset($context["max_height"]) || array_key_exists("max_height", $context) ? $context["max_height"] : (function () { throw new RuntimeError('Variable "max_height" does not exist.', 170, $this->source); })()), "html", null, true);
        echo "px.</source>
                <target>Visina slike je prevelika (";
        // line 171
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 171, $this->source); })()), "html", null, true);
        echo "px). Najveća dozvoljena visina je ";
        echo twig_escape_filter($this->env, (isset($context["max_height"]) || array_key_exists("max_height", $context) ? $context["max_height"] : (function () { throw new RuntimeError('Variable "max_height" does not exist.', 171, $this->source); })()), "html", null, true);
        echo "px.</target>
            </trans-unit>
            <trans-unit id=\"46\">
                <source>The image height is too small (";
        // line 174
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 174, $this->source); })()), "html", null, true);
        echo "px). Minimum height expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_height"]) || array_key_exists("min_height", $context) ? $context["min_height"] : (function () { throw new RuntimeError('Variable "min_height" does not exist.', 174, $this->source); })()), "html", null, true);
        echo "px.</source>
                <target>Visina slike je premala (";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 175, $this->source); })()), "html", null, true);
        echo "px). Najmanja dozvoljena visina je ";
        echo twig_escape_filter($this->env, (isset($context["min_height"]) || array_key_exists("min_height", $context) ? $context["min_height"] : (function () { throw new RuntimeError('Variable "min_height" does not exist.', 175, $this->source); })()), "html", null, true);
        echo "px.</target>
            </trans-unit>
            <trans-unit id=\"47\">
                <source>This value should be the user's current password.</source>
                <target>Ova vrijednost treba biti trenutna korisnička lozinka.</target>
            </trans-unit>
            <trans-unit id=\"48\">
                <source>This value should have exactly ";
        // line 182
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 182, $this->source); })()), "html", null, true);
        echo " character.|This value should have exactly ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 182, $this->source); })()), "html", null, true);
        echo " characters.</source>
                <target>Ova vrijednost treba imati točno ";
        // line 183
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 183, $this->source); })()), "html", null, true);
        echo " znakova.</target>
            </trans-unit>
            <trans-unit id=\"49\">
                <source>The file was only partially uploaded.</source>
                <target>Datoteka je samo djelomično prenesena.</target>
            </trans-unit>
            <trans-unit id=\"50\">
                <source>No file was uploaded.</source>
                <target>Niti jedna datoteka nije prenesena.</target>
            </trans-unit>
            <trans-unit id=\"51\">
                <source>No temporary folder was configured in php.ini.</source>
                <target>U php.ini datoteci nije konfiguriran privremeni direktorij.</target>
            </trans-unit>
            <trans-unit id=\"52\">
                <source>Cannot write temporary file to disk.</source>
                <target>Ne mogu zapisati privremenu datoteku na disk.</target>
            </trans-unit>
            <trans-unit id=\"53\">
                <source>A PHP extension caused the upload to fail.</source>
                <target>Prijenos datoteke nije uspio zbog PHP ekstenzije.</target>
            </trans-unit>
            <trans-unit id=\"54\">
                <source>This collection should contain ";
        // line 206
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 206, $this->source); })()), "html", null, true);
        echo " element or more.|This collection should contain ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 206, $this->source); })()), "html", null, true);
        echo " elements or more.</source>
                <target>Ova kolekcija treba sadržavati ";
        // line 207
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 207, $this->source); })()), "html", null, true);
        echo " ili više elemenata.|Ova kolekcija treba sadržavati ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 207, $this->source); })()), "html", null, true);
        echo " ili više elemenata.|Ova kolekcija treba sadržavati ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 207, $this->source); })()), "html", null, true);
        echo " ili više elemenata.</target>
            </trans-unit>
            <trans-unit id=\"55\">
                <source>This collection should contain ";
        // line 210
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 210, $this->source); })()), "html", null, true);
        echo " element or less.|This collection should contain ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 210, $this->source); })()), "html", null, true);
        echo " elements or less.</source>
                <target>Ova kolekcija treba sadržavati ";
        // line 211
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 211, $this->source); })()), "html", null, true);
        echo " ili manje elemenata.|Ova kolekcija treba sadržavati ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 211, $this->source); })()), "html", null, true);
        echo " ili manje elemenata.|Ova kolekcija treba sadržavati ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 211, $this->source); })()), "html", null, true);
        echo " ili manje elemenata.</target>
            </trans-unit>
            <trans-unit id=\"56\">
                <source>This collection should contain exactly ";
        // line 214
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 214, $this->source); })()), "html", null, true);
        echo " element.|This collection should contain exactly ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 214, $this->source); })()), "html", null, true);
        echo " elements.</source>
                <target>Ova kolekcija treba sadržavati točno ";
        // line 215
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 215, $this->source); })()), "html", null, true);
        echo " element.|Ova kolekcija treba sadržavati točno ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 215, $this->source); })()), "html", null, true);
        echo " elementa.|Ova kolekcija treba sadržavati točno ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 215, $this->source); })()), "html", null, true);
        echo " elemenata.</target>
            </trans-unit>
            <trans-unit id=\"57\">
                <source>Invalid card number.</source>
                <target>Neispravan broj kartice.</target>
            </trans-unit>
            <trans-unit id=\"58\">
                <source>Unsupported card type or invalid card number.</source>
                <target>Tip kartice nije podržan ili je broj kartice neispravan.</target>
            </trans-unit>
            <trans-unit id=\"59\">
                <source>This is not a valid International Bank Account Number (IBAN).</source>
                <target>Ova vrijednost nije ispravan međunarodni broj bankovnog računa (IBAN).</target>
            </trans-unit>
            <trans-unit id=\"60\">
                <source>This value is not a valid ISBN-10.</source>
                <target>Ova vrijednost nije ispravan ISBN-10.</target>
            </trans-unit>
            <trans-unit id=\"61\">
                <source>This value is not a valid ISBN-13.</source>
                <target>Ova vrijednost nije ispravan ISBN-13.</target>
            </trans-unit>
            <trans-unit id=\"62\">
                <source>This value is neither a valid ISBN-10 nor a valid ISBN-13.</source>
                <target>Ova vrijednost nije ispravan ISBN-10 niti ISBN-13.</target>
            </trans-unit>
            <trans-unit id=\"63\">
                <source>This value is not a valid ISSN.</source>
                <target>Ova vrijednost nije ispravan ISSN.</target>
            </trans-unit>
            <trans-unit id=\"64\">
                <source>This value is not a valid currency.</source>
                <target>Ova vrijednost nije ispravna valuta.</target>
            </trans-unit>
            <trans-unit id=\"65\">
                <source>This value should be equal to ";
        // line 250
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 250, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Ova vrijednost treba biti jednaka ";
        // line 251
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 251, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"66\">
                <source>This value should be greater than ";
        // line 254
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 254, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Ova vrijednost treba biti veća od ";
        // line 255
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 255, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"67\">
                <source>This value should be greater than or equal to ";
        // line 258
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 258, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Ova vrijednost treba biti veća od ili jednaka ";
        // line 259
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 259, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"68\">
                <source>This value should be identical to ";
        // line 262
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 262, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 262, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Ova vrijednost treba biti ";
        // line 263
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 263, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 263, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"69\">
                <source>This value should be less than ";
        // line 266
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 266, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Ova vrijednost treba biti manja od ";
        // line 267
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 267, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"70\">
                <source>This value should be less than or equal to ";
        // line 270
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 270, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Ova vrijednost treba biti manja od ili jednaka ";
        // line 271
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 271, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"71\">
                <source>This value should not be equal to ";
        // line 274
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 274, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Ova vrijednost treba biti različita od ";
        // line 275
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 275, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"72\">
                <source>This value should not be identical to ";
        // line 278
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 278, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 278, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Ova vrijednost treba biti različita od ";
        // line 279
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 279, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 279, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"73\">
                <source>The image ratio is too big (";
        // line 282
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 282, $this->source); })()), "html", null, true);
        echo "). Allowed maximum ratio is ";
        echo twig_escape_filter($this->env, (isset($context["max_ratio"]) || array_key_exists("max_ratio", $context) ? $context["max_ratio"] : (function () { throw new RuntimeError('Variable "max_ratio" does not exist.', 282, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Omjer slike je prevelik (";
        // line 283
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 283, $this->source); })()), "html", null, true);
        echo "). Dozvoljeni maksimalni omjer je ";
        echo twig_escape_filter($this->env, (isset($context["max_ratio"]) || array_key_exists("max_ratio", $context) ? $context["max_ratio"] : (function () { throw new RuntimeError('Variable "max_ratio" does not exist.', 283, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"74\">
                <source>The image ratio is too small (";
        // line 286
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 286, $this->source); })()), "html", null, true);
        echo "). Minimum ratio expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_ratio"]) || array_key_exists("min_ratio", $context) ? $context["min_ratio"] : (function () { throw new RuntimeError('Variable "min_ratio" does not exist.', 286, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Omjer slike je premali (";
        // line 287
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 287, $this->source); })()), "html", null, true);
        echo "). Minimalni očekivani omjer je ";
        echo twig_escape_filter($this->env, (isset($context["min_ratio"]) || array_key_exists("min_ratio", $context) ? $context["min_ratio"] : (function () { throw new RuntimeError('Variable "min_ratio" does not exist.', 287, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"75\">
                <source>The image is square (";
        // line 290
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 290, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 290, $this->source); })()), "html", null, true);
        echo "px). Square images are not allowed.</source>
                <target>Slika je kvadratnog oblika (";
        // line 291
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 291, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 291, $this->source); })()), "html", null, true);
        echo "px). Kvadratne slike nisu dozvoljene.</target>
            </trans-unit>
            <trans-unit id=\"76\">
                <source>The image is landscape oriented (";
        // line 294
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 294, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 294, $this->source); })()), "html", null, true);
        echo "px). Landscape oriented images are not allowed.</source>
                <target>Slika je orijentirana horizontalno (";
        // line 295
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 295, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 295, $this->source); })()), "html", null, true);
        echo "px). Horizontalno orijentirane slike nisu dozvoljene.</target>
            </trans-unit>
            <trans-unit id=\"77\">
                <source>The image is portrait oriented (";
        // line 298
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 298, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 298, $this->source); })()), "html", null, true);
        echo "px). Portrait oriented images are not allowed.</source>
                <target>Slika je orijentirana vertikalno (";
        // line 299
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 299, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 299, $this->source); })()), "html", null, true);
        echo "px). Vertikalno orijentirane slike nisu dozvoljene.</target>
            </trans-unit>
            <trans-unit id=\"78\">
                <source>An empty file is not allowed.</source>
                <target>Prazna datoteka nije dozvoljena.</target>
            </trans-unit>
            <trans-unit id=\"79\">
                <source>The host could not be resolved.</source>
                <target>Poslužitelj ne može biti pronađen.</target>
            </trans-unit>
            <trans-unit id=\"80\">
                <source>This value does not match the expected ";
        // line 310
        echo twig_escape_filter($this->env, (isset($context["charset"]) || array_key_exists("charset", $context) ? $context["charset"] : (function () { throw new RuntimeError('Variable "charset" does not exist.', 310, $this->source); })()), "html", null, true);
        echo " charset.</source>
                <target>Ova vrijednost ne odgovara očekivanom ";
        // line 311
        echo twig_escape_filter($this->env, (isset($context["charset"]) || array_key_exists("charset", $context) ? $context["charset"] : (function () { throw new RuntimeError('Variable "charset" does not exist.', 311, $this->source); })()), "html", null, true);
        echo " znakovnom skupu.</target>
            </trans-unit>
            <trans-unit id=\"81\">
                <source>This is not a valid Business Identifier Code (BIC).</source>
                <target>Ovo nije validan poslovni identifikacijski broj (BIC).</target>
            </trans-unit>
            <trans-unit id=\"82\">
                <source>Error</source>
                <target>Greška</target>
            </trans-unit>
            <trans-unit id=\"83\">
                <source>This is not a valid UUID.</source>
                <target>Ovo nije validan UUID.</target>
            </trans-unit>
            <trans-unit id=\"84\">
                <source>This value should be a multiple of ";
        // line 326
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 326, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Ova vrijednost treba biti višekratnik od ";
        // line 327
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 327, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"85\">
                <source>This Business Identifier Code (BIC) is not associated with IBAN ";
        // line 330
        echo twig_escape_filter($this->env, (isset($context["iban"]) || array_key_exists("iban", $context) ? $context["iban"] : (function () { throw new RuntimeError('Variable "iban" does not exist.', 330, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Poslovni identifikacijski broj (BIC) nije povezan sa IBAN brojem ";
        // line 331
        echo twig_escape_filter($this->env, (isset($context["iban"]) || array_key_exists("iban", $context) ? $context["iban"] : (function () { throw new RuntimeError('Variable "iban" does not exist.', 331, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"86\">
                <source>This value should be valid JSON.</source>
                <target>Ova vrijednost treba biti validan JSON.</target>
            </trans-unit>
            <trans-unit id=\"87\">
                <source>This collection should contain only unique elements.</source>
                <target>Ova kolekcija treba sadržavati samo unikatne elemente.</target>
            </trans-unit>
            <trans-unit id=\"88\">
                <source>This value should be positive.</source>
                <target>Ova vrijednost treba biti pozitivna.</target>
            </trans-unit>
            <trans-unit id=\"89\">
                <source>This value should be either positive or zero.</source>
                <target>Ova vrijednost treba biti pozitivna ili jednaka nuli.</target>
            </trans-unit>
            <trans-unit id=\"90\">
                <source>This value should be negative.</source>
                <target>Ova vrijednost treba biti negativna.</target>
            </trans-unit>
            <trans-unit id=\"91\">
                <source>This value should be either negative or zero.</source>
                <target>Ova vrijednost treba biti negativna ili jednaka nuli.</target>
            </trans-unit>
            <trans-unit id=\"92\">
                <source>This value is not a valid timezone.</source>
                <target>Ova vrijednost nije validna vremenska zona.</target>
            </trans-unit>
            <trans-unit id=\"93\">
                <source>This password has been leaked in a data breach, it must not be used. Please use another password.</source>
                <target>Ova lozinka je procurila u nekom od sigurnosnih propusta, te je potrebno koristiti drugu lozinku.</target>
            </trans-unit>
        </body>
    </file>
</xliff>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Resources/translations/validators.hr.xlf";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  668 => 331,  664 => 330,  658 => 327,  654 => 326,  636 => 311,  632 => 310,  616 => 299,  610 => 298,  602 => 295,  596 => 294,  588 => 291,  582 => 290,  574 => 287,  568 => 286,  560 => 283,  554 => 282,  546 => 279,  540 => 278,  534 => 275,  530 => 274,  524 => 271,  520 => 270,  514 => 267,  510 => 266,  502 => 263,  496 => 262,  490 => 259,  486 => 258,  480 => 255,  476 => 254,  470 => 251,  466 => 250,  424 => 215,  418 => 214,  408 => 211,  402 => 210,  392 => 207,  386 => 206,  360 => 183,  354 => 182,  342 => 175,  336 => 174,  328 => 171,  322 => 170,  314 => 167,  308 => 166,  300 => 163,  294 => 162,  246 => 119,  240 => 118,  206 => 87,  200 => 86,  194 => 83,  190 => 82,  184 => 79,  178 => 78,  172 => 75,  168 => 74,  160 => 71,  154 => 70,  142 => 67,  132 => 66,  94 => 31,  88 => 30,  82 => 27,  76 => 26,  62 => 15,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\"?>
<xliff version=\"1.2\" xmlns=\"urn:oasis:names:tc:xliff:document:1.2\">
    <file source-language=\"en\" datatype=\"plaintext\" original=\"file.ext\">
        <body>
            <trans-unit id=\"1\">
                <source>This value should be false.</source>
                <target>Ova vrijednost treba biti netočna (false).</target>
            </trans-unit>
            <trans-unit id=\"2\">
                <source>This value should be true.</source>
                <target>Ova vrijednost treba biti točna (true).</target>
            </trans-unit>
            <trans-unit id=\"3\">
                <source>This value should be of type {{ type }}.</source>
                <target>Ova vrijednost treba biti tipa {{ type }}.</target>
            </trans-unit>
            <trans-unit id=\"4\">
                <source>This value should be blank.</source>
                <target>Ova vrijednost treba biti prazna.</target>
            </trans-unit>
            <trans-unit id=\"5\">
                <source>The value you selected is not a valid choice.</source>
                <target>Ova vrijednost nije valjan izbor.</target>
            </trans-unit>
            <trans-unit id=\"6\">
                <source>You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.</source>
                <target>Izaberite barem {{ limit }} mogućnosti.</target>
            </trans-unit>
            <trans-unit id=\"7\">
                <source>You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.</source>
                <target>Izaberite najviše {{ limit }} mogućnosti.</target>
            </trans-unit>
            <trans-unit id=\"8\">
                <source>One or more of the given values is invalid.</source>
                <target>Jedna ili više danih vrijednosti nije ispravna.</target>
            </trans-unit>
            <trans-unit id=\"9\">
                <source>This field was not expected.</source>
                <target>Ovo polje nije očekivano.</target>
            </trans-unit>
            <trans-unit id=\"10\">
                <source>This field is missing.</source>
                <target>Ovo polje nedostaje.</target>
            </trans-unit>
            <trans-unit id=\"11\">
                <source>This value is not a valid date.</source>
                <target>Ova vrijednost nije ispravan datum.</target>
            </trans-unit>
            <trans-unit id=\"12\">
                <source>This value is not a valid datetime.</source>
                <target>Ova vrijednost nije ispravnog datum-vrijeme formata.</target>
            </trans-unit>
            <trans-unit id=\"13\">
                <source>This value is not a valid email address.</source>
                <target>Ova vrijednost nije ispravna e-mail adresa.</target>
            </trans-unit>
            <trans-unit id=\"14\">
                <source>The file could not be found.</source>
                <target>Datoteka ne može biti pronađena.</target>
            </trans-unit>
            <trans-unit id=\"15\">
                <source>The file is not readable.</source>
                <target>Datoteka nije čitljiva.</target>
            </trans-unit>
            <trans-unit id=\"16\">
                <source>The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.</source>
                <target>Datoteka je prevelika ({{ size }} {{ suffix }}). Najveća dozvoljena veličina je {{ limit }} {{ suffix }}.</target>
            </trans-unit>
            <trans-unit id=\"17\">
                <source>The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.</source>
                <target>Mime tip datoteke nije ispravan ({{ type }}). Dozvoljeni mime tipovi su {{ types }}.</target>
            </trans-unit>
            <trans-unit id=\"18\">
                <source>This value should be {{ limit }} or less.</source>
                <target>Ova vrijednost treba biti {{ limit }} ili manje.</target>
            </trans-unit>
            <trans-unit id=\"19\">
                <source>This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.</source>
                <target>Ova vrijednost je predugačka. Treba imati {{ limit }} znakova ili manje.</target>
            </trans-unit>
            <trans-unit id=\"20\">
                <source>This value should be {{ limit }} or more.</source>
                <target>Ova vrijednost treba biti {{ limit }} ili više.</target>
            </trans-unit>
            <trans-unit id=\"21\">
                <source>This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.</source>
                <target>Ova vrijednost je prekratka. Treba imati {{ limit }} znakova ili više.</target>
            </trans-unit>
            <trans-unit id=\"22\">
                <source>This value should not be blank.</source>
                <target>Ova vrijednost ne bi trebala biti prazna.</target>
            </trans-unit>
            <trans-unit id=\"23\">
                <source>This value should not be null.</source>
                <target>Ova vrijednost ne bi trebala biti null.</target>
            </trans-unit>
            <trans-unit id=\"24\">
                <source>This value should be null.</source>
                <target>Ova vrijednost treba biti null.</target>
            </trans-unit>
            <trans-unit id=\"25\">
                <source>This value is not valid.</source>
                <target>Ova vrijednost nije ispravna.</target>
            </trans-unit>
            <trans-unit id=\"26\">
                <source>This value is not a valid time.</source>
                <target>Ova vrijednost nije ispravno vrijeme.</target>
            </trans-unit>
            <trans-unit id=\"27\">
                <source>This value is not a valid URL.</source>
                <target>Ova vrijednost nije ispravan URL.</target>
            </trans-unit>
            <trans-unit id=\"31\">
                <source>The two values should be equal.</source>
                <target>Obje vrijednosti trebaju biti jednake.</target>
            </trans-unit>
            <trans-unit id=\"32\">
                <source>The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.</source>
                <target>Ova datoteka je prevelika. Najveća dozvoljena veličina je {{ limit }} {{ suffix }}.</target>
            </trans-unit>
            <trans-unit id=\"33\">
                <source>The file is too large.</source>
                <target>Ova datoteka je prevelika.</target>
            </trans-unit>
            <trans-unit id=\"34\">
                <source>The file could not be uploaded.</source>
                <target>Ova datoteka ne može biti prenesena.</target>
            </trans-unit>
            <trans-unit id=\"35\">
                <source>This value should be a valid number.</source>
                <target>Ova vrijednost treba biti ispravan broj.</target>
            </trans-unit>
            <trans-unit id=\"36\">
                <source>This file is not a valid image.</source>
                <target>Ova datoteka nije ispravna slika.</target>
            </trans-unit>
            <trans-unit id=\"37\">
                <source>This is not a valid IP address.</source>
                <target>Ovo nije ispravna IP adresa.</target>
            </trans-unit>
            <trans-unit id=\"38\">
                <source>This value is not a valid language.</source>
                <target>Ova vrijednost nije ispravan jezik.</target>
            </trans-unit>
            <trans-unit id=\"39\">
                <source>This value is not a valid locale.</source>
                <target>Ova vrijednost nije ispravana regionalna oznaka.</target>
            </trans-unit>
            <trans-unit id=\"40\">
                <source>This value is not a valid country.</source>
                <target>Ova vrijednost nije ispravna država.</target>
            </trans-unit>
            <trans-unit id=\"41\">
                <source>This value is already used.</source>
                <target>Ova vrijednost je već iskorištena.</target>
            </trans-unit>
            <trans-unit id=\"42\">
                <source>The size of the image could not be detected.</source>
                <target>Veličina slike se ne može odrediti.</target>
            </trans-unit>
            <trans-unit id=\"43\">
                <source>The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.</source>
                <target>Širina slike je prevelika ({{ width }}px). Najveća dozvoljena širina je {{ max_width }}px.</target>
            </trans-unit>
            <trans-unit id=\"44\">
                <source>The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.</source>
                <target>Širina slike je premala ({{ width }}px). Najmanja dozvoljena širina je {{ min_width }}px.</target>
            </trans-unit>
            <trans-unit id=\"45\">
                <source>The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.</source>
                <target>Visina slike je prevelika ({{ height }}px). Najveća dozvoljena visina je {{ max_height }}px.</target>
            </trans-unit>
            <trans-unit id=\"46\">
                <source>The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.</source>
                <target>Visina slike je premala ({{ height }}px). Najmanja dozvoljena visina je {{ min_height }}px.</target>
            </trans-unit>
            <trans-unit id=\"47\">
                <source>This value should be the user's current password.</source>
                <target>Ova vrijednost treba biti trenutna korisnička lozinka.</target>
            </trans-unit>
            <trans-unit id=\"48\">
                <source>This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.</source>
                <target>Ova vrijednost treba imati točno {{ limit }} znakova.</target>
            </trans-unit>
            <trans-unit id=\"49\">
                <source>The file was only partially uploaded.</source>
                <target>Datoteka je samo djelomično prenesena.</target>
            </trans-unit>
            <trans-unit id=\"50\">
                <source>No file was uploaded.</source>
                <target>Niti jedna datoteka nije prenesena.</target>
            </trans-unit>
            <trans-unit id=\"51\">
                <source>No temporary folder was configured in php.ini.</source>
                <target>U php.ini datoteci nije konfiguriran privremeni direktorij.</target>
            </trans-unit>
            <trans-unit id=\"52\">
                <source>Cannot write temporary file to disk.</source>
                <target>Ne mogu zapisati privremenu datoteku na disk.</target>
            </trans-unit>
            <trans-unit id=\"53\">
                <source>A PHP extension caused the upload to fail.</source>
                <target>Prijenos datoteke nije uspio zbog PHP ekstenzije.</target>
            </trans-unit>
            <trans-unit id=\"54\">
                <source>This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.</source>
                <target>Ova kolekcija treba sadržavati {{ limit }} ili više elemenata.|Ova kolekcija treba sadržavati {{ limit }} ili više elemenata.|Ova kolekcija treba sadržavati {{ limit }} ili više elemenata.</target>
            </trans-unit>
            <trans-unit id=\"55\">
                <source>This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.</source>
                <target>Ova kolekcija treba sadržavati {{ limit }} ili manje elemenata.|Ova kolekcija treba sadržavati {{ limit }} ili manje elemenata.|Ova kolekcija treba sadržavati {{ limit }} ili manje elemenata.</target>
            </trans-unit>
            <trans-unit id=\"56\">
                <source>This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.</source>
                <target>Ova kolekcija treba sadržavati točno {{ limit }} element.|Ova kolekcija treba sadržavati točno {{ limit }} elementa.|Ova kolekcija treba sadržavati točno {{ limit }} elemenata.</target>
            </trans-unit>
            <trans-unit id=\"57\">
                <source>Invalid card number.</source>
                <target>Neispravan broj kartice.</target>
            </trans-unit>
            <trans-unit id=\"58\">
                <source>Unsupported card type or invalid card number.</source>
                <target>Tip kartice nije podržan ili je broj kartice neispravan.</target>
            </trans-unit>
            <trans-unit id=\"59\">
                <source>This is not a valid International Bank Account Number (IBAN).</source>
                <target>Ova vrijednost nije ispravan međunarodni broj bankovnog računa (IBAN).</target>
            </trans-unit>
            <trans-unit id=\"60\">
                <source>This value is not a valid ISBN-10.</source>
                <target>Ova vrijednost nije ispravan ISBN-10.</target>
            </trans-unit>
            <trans-unit id=\"61\">
                <source>This value is not a valid ISBN-13.</source>
                <target>Ova vrijednost nije ispravan ISBN-13.</target>
            </trans-unit>
            <trans-unit id=\"62\">
                <source>This value is neither a valid ISBN-10 nor a valid ISBN-13.</source>
                <target>Ova vrijednost nije ispravan ISBN-10 niti ISBN-13.</target>
            </trans-unit>
            <trans-unit id=\"63\">
                <source>This value is not a valid ISSN.</source>
                <target>Ova vrijednost nije ispravan ISSN.</target>
            </trans-unit>
            <trans-unit id=\"64\">
                <source>This value is not a valid currency.</source>
                <target>Ova vrijednost nije ispravna valuta.</target>
            </trans-unit>
            <trans-unit id=\"65\">
                <source>This value should be equal to {{ compared_value }}.</source>
                <target>Ova vrijednost treba biti jednaka {{ compared_value }}.</target>
            </trans-unit>
            <trans-unit id=\"66\">
                <source>This value should be greater than {{ compared_value }}.</source>
                <target>Ova vrijednost treba biti veća od {{ compared_value }}.</target>
            </trans-unit>
            <trans-unit id=\"67\">
                <source>This value should be greater than or equal to {{ compared_value }}.</source>
                <target>Ova vrijednost treba biti veća od ili jednaka {{ compared_value }}.</target>
            </trans-unit>
            <trans-unit id=\"68\">
                <source>This value should be identical to {{ compared_value_type }} {{ compared_value }}.</source>
                <target>Ova vrijednost treba biti {{ compared_value_type }} {{ compared_value }}.</target>
            </trans-unit>
            <trans-unit id=\"69\">
                <source>This value should be less than {{ compared_value }}.</source>
                <target>Ova vrijednost treba biti manja od {{ compared_value }}.</target>
            </trans-unit>
            <trans-unit id=\"70\">
                <source>This value should be less than or equal to {{ compared_value }}.</source>
                <target>Ova vrijednost treba biti manja od ili jednaka {{ compared_value }}.</target>
            </trans-unit>
            <trans-unit id=\"71\">
                <source>This value should not be equal to {{ compared_value }}.</source>
                <target>Ova vrijednost treba biti različita od {{ compared_value }}.</target>
            </trans-unit>
            <trans-unit id=\"72\">
                <source>This value should not be identical to {{ compared_value_type }} {{ compared_value }}.</source>
                <target>Ova vrijednost treba biti različita od {{ compared_value_type }} {{ compared_value }}.</target>
            </trans-unit>
            <trans-unit id=\"73\">
                <source>The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.</source>
                <target>Omjer slike je prevelik ({{ ratio }}). Dozvoljeni maksimalni omjer je {{ max_ratio }}.</target>
            </trans-unit>
            <trans-unit id=\"74\">
                <source>The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.</source>
                <target>Omjer slike je premali ({{ ratio }}). Minimalni očekivani omjer je {{ min_ratio }}.</target>
            </trans-unit>
            <trans-unit id=\"75\">
                <source>The image is square ({{ width }}x{{ height }}px). Square images are not allowed.</source>
                <target>Slika je kvadratnog oblika ({{ width }}x{{ height }}px). Kvadratne slike nisu dozvoljene.</target>
            </trans-unit>
            <trans-unit id=\"76\">
                <source>The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.</source>
                <target>Slika je orijentirana horizontalno ({{ width }}x{{ height }}px). Horizontalno orijentirane slike nisu dozvoljene.</target>
            </trans-unit>
            <trans-unit id=\"77\">
                <source>The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.</source>
                <target>Slika je orijentirana vertikalno ({{ width }}x{{ height }}px). Vertikalno orijentirane slike nisu dozvoljene.</target>
            </trans-unit>
            <trans-unit id=\"78\">
                <source>An empty file is not allowed.</source>
                <target>Prazna datoteka nije dozvoljena.</target>
            </trans-unit>
            <trans-unit id=\"79\">
                <source>The host could not be resolved.</source>
                <target>Poslužitelj ne može biti pronađen.</target>
            </trans-unit>
            <trans-unit id=\"80\">
                <source>This value does not match the expected {{ charset }} charset.</source>
                <target>Ova vrijednost ne odgovara očekivanom {{ charset }} znakovnom skupu.</target>
            </trans-unit>
            <trans-unit id=\"81\">
                <source>This is not a valid Business Identifier Code (BIC).</source>
                <target>Ovo nije validan poslovni identifikacijski broj (BIC).</target>
            </trans-unit>
            <trans-unit id=\"82\">
                <source>Error</source>
                <target>Greška</target>
            </trans-unit>
            <trans-unit id=\"83\">
                <source>This is not a valid UUID.</source>
                <target>Ovo nije validan UUID.</target>
            </trans-unit>
            <trans-unit id=\"84\">
                <source>This value should be a multiple of {{ compared_value }}.</source>
                <target>Ova vrijednost treba biti višekratnik od {{ compared_value }}.</target>
            </trans-unit>
            <trans-unit id=\"85\">
                <source>This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.</source>
                <target>Poslovni identifikacijski broj (BIC) nije povezan sa IBAN brojem {{ iban }}.</target>
            </trans-unit>
            <trans-unit id=\"86\">
                <source>This value should be valid JSON.</source>
                <target>Ova vrijednost treba biti validan JSON.</target>
            </trans-unit>
            <trans-unit id=\"87\">
                <source>This collection should contain only unique elements.</source>
                <target>Ova kolekcija treba sadržavati samo unikatne elemente.</target>
            </trans-unit>
            <trans-unit id=\"88\">
                <source>This value should be positive.</source>
                <target>Ova vrijednost treba biti pozitivna.</target>
            </trans-unit>
            <trans-unit id=\"89\">
                <source>This value should be either positive or zero.</source>
                <target>Ova vrijednost treba biti pozitivna ili jednaka nuli.</target>
            </trans-unit>
            <trans-unit id=\"90\">
                <source>This value should be negative.</source>
                <target>Ova vrijednost treba biti negativna.</target>
            </trans-unit>
            <trans-unit id=\"91\">
                <source>This value should be either negative or zero.</source>
                <target>Ova vrijednost treba biti negativna ili jednaka nuli.</target>
            </trans-unit>
            <trans-unit id=\"92\">
                <source>This value is not a valid timezone.</source>
                <target>Ova vrijednost nije validna vremenska zona.</target>
            </trans-unit>
            <trans-unit id=\"93\">
                <source>This password has been leaked in a data breach, it must not be used. Please use another password.</source>
                <target>Ova lozinka je procurila u nekom od sigurnosnih propusta, te je potrebno koristiti drugu lozinku.</target>
            </trans-unit>
        </body>
    </file>
</xliff>
", "vendor/symfony/validator/Resources/translations/validators.hr.xlf", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Resources/translations/validators.hr.xlf");
    }
}
