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

/* vendor/symfony/validator/Resources/translations/validators.sr_Latn.xlf */
class __TwigTemplate_5d47fb8427a6de0426e444e89f901cfca007ec9096c3a1274f316b1b84d4b18a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Resources/translations/validators.sr_Latn.xlf"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Resources/translations/validators.sr_Latn.xlf"));

        // line 1
        echo "<?xml version=\"1.0\"?>
<xliff version=\"1.2\" xmlns=\"urn:oasis:names:tc:xliff:document:1.2\">
    <file source-language=\"en\" datatype=\"plaintext\" original=\"file.ext\">
        <body>
            <trans-unit id=\"1\">
                <source>This value should be false.</source>
                <target>Vrednost bi trebalo da bude netačna.</target>
            </trans-unit>
            <trans-unit id=\"2\">
                <source>This value should be true.</source>
                <target>Vrednost bi trebalo da bude tačna.</target>
            </trans-unit>
            <trans-unit id=\"3\">
                <source>This value should be of type ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 14, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Vrednost bi trebalo da bude tipa ";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 15, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"4\">
                <source>This value should be blank.</source>
                <target>Vrednost bi trebalo da bude prazna.</target>
            </trans-unit>
            <trans-unit id=\"5\">
                <source>The value you selected is not a valid choice.</source>
                <target>Odabrana vrednost nije validan izbor.</target>
            </trans-unit>
            <trans-unit id=\"6\">
                <source>You must select at least ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " choice.|You must select at least ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " choices.</source>
                <target>Morate odabrati bar ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 27, $this->source); })()), "html", null, true);
        echo " mogućnost.|Morate odabrati bar ";
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
                <target>Morate odabrati najviše ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 31, $this->source); })()), "html", null, true);
        echo " mogućnost.|Morate odabrati najviše ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 31, $this->source); })()), "html", null, true);
        echo " mogućnosti.</target>
            </trans-unit>
            <trans-unit id=\"8\">
                <source>One or more of the given values is invalid.</source>
                <target>Jedna ili više vrednosti nisu validne.</target>
            </trans-unit>
            <trans-unit id=\"9\">
                <source>This field was not expected.</source>
                <target>Ovo polje nije bilo očekivano.</target>
            </trans-unit>
            <trans-unit id=\"10\">
                <source>This field is missing.</source>
                <target>Ovo polje nedostaje.</target>
            </trans-unit>
            <trans-unit id=\"11\">
                <source>This value is not a valid date.</source>
                <target>Vrednost nije validan datum.</target>
            </trans-unit>
            <trans-unit id=\"12\">
                <source>This value is not a valid datetime.</source>
                <target>Vrednost nije validno vreme.</target>
            </trans-unit>
            <trans-unit id=\"13\">
                <source>This value is not a valid email address.</source>
                <target>Vrednost nije validna adresa elektronske pošte.</target>
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
                <target>MIME tip datoteke nije validan (";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "). Dozvoljeni MIME tipovi su ";
        echo twig_escape_filter($this->env, (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 71, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"18\">
                <source>This value should be ";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 74, $this->source); })()), "html", null, true);
        echo " or less.</source>
                <target>Vrednost bi trebalo da bude ";
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
                <target>Vrednost je predugačka. Trebalo bi da ima ";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 79, $this->source); })()), "html", null, true);
        echo " karakter ili manje.|Vrednost je predugačka. Trebalo bi da ima ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 79, $this->source); })()), "html", null, true);
        echo " karaktera ili manje.</target>
            </trans-unit>
            <trans-unit id=\"20\">
                <source>This value should be ";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 82, $this->source); })()), "html", null, true);
        echo " or more.</source>
                <target>Vrednost bi trebalo da bude ";
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
                <target>Vrednost je prekratka. Trebalo bi da ima ";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 87, $this->source); })()), "html", null, true);
        echo " karakter ili više.|Vrednost je prekratka. Trebalo bi da ima ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 87, $this->source); })()), "html", null, true);
        echo " karaktera ili više.</target>
            </trans-unit>
            <trans-unit id=\"22\">
                <source>This value should not be blank.</source>
                <target>Vrednost ne bi trebalo da bude prazna.</target>
            </trans-unit>
            <trans-unit id=\"23\">
                <source>This value should not be null.</source>
                <target>Vrednost ne bi trebalo da bude prazna.</target>
            </trans-unit>
            <trans-unit id=\"24\">
                <source>This value should be null.</source>
                <target>Vrednost bi trebalo da bude prazna.</target>
            </trans-unit>
            <trans-unit id=\"25\">
                <source>This value is not valid.</source>
                <target>Vrednost nije validna.</target>
            </trans-unit>
            <trans-unit id=\"26\">
                <source>This value is not a valid time.</source>
                <target>Vrednost nije validno vreme.</target>
            </trans-unit>
            <trans-unit id=\"27\">
                <source>This value is not a valid URL.</source>
                <target>Vrednost nije validan URL.</target>
            </trans-unit>
            <trans-unit id=\"31\">
                <source>The two values should be equal.</source>
                <target>Obe vrednosti bi trebalo da budu jednake.</target>
            </trans-unit>
            <trans-unit id=\"32\">
                <source>The file is too large. Allowed maximum size is ";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 118, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 118, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Datoteka je prevelika. Najveća dozvoljena veličina je ";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 119, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 119, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"33\">
                <source>The file is too large.</source>
                <target>Datoteka je prevelika.</target>
            </trans-unit>
            <trans-unit id=\"34\">
                <source>The file could not be uploaded.</source>
                <target>Datoteka ne može biti otpremljena.</target>
            </trans-unit>
            <trans-unit id=\"35\">
                <source>This value should be a valid number.</source>
                <target>Vrednost bi trebalo da bude validan broj.</target>
            </trans-unit>
            <trans-unit id=\"36\">
                <source>This file is not a valid image.</source>
                <target>Ova datoteka nije validna slika.</target>
            </trans-unit>
            <trans-unit id=\"37\">
                <source>This is not a valid IP address.</source>
                <target>Ovo nije validna IP adresa.</target>
            </trans-unit>
            <trans-unit id=\"38\">
                <source>This value is not a valid language.</source>
                <target>Vrednost nije validan jezik.</target>
            </trans-unit>
            <trans-unit id=\"39\">
                <source>This value is not a valid locale.</source>
                <target>Vrednost nije validna međunarodna oznaka jezika.</target>
            </trans-unit>
            <trans-unit id=\"40\">
                <source>This value is not a valid country.</source>
                <target>Vrednost nije validna država.</target>
            </trans-unit>
            <trans-unit id=\"41\">
                <source>This value is already used.</source>
                <target>Vrednost je već iskorišćena.</target>
            </trans-unit>
            <trans-unit id=\"42\">
                <source>The size of the image could not be detected.</source>
                <target>Veličina slike ne može biti određena.</target>
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
        echo " piksela). Najveća dozvoljena širina je ";
        echo twig_escape_filter($this->env, (isset($context["max_width"]) || array_key_exists("max_width", $context) ? $context["max_width"] : (function () { throw new RuntimeError('Variable "max_width" does not exist.', 163, $this->source); })()), "html", null, true);
        echo " piksela.</target>
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
        echo " piksela). Najmanja dozvoljena širina je ";
        echo twig_escape_filter($this->env, (isset($context["min_width"]) || array_key_exists("min_width", $context) ? $context["min_width"] : (function () { throw new RuntimeError('Variable "min_width" does not exist.', 167, $this->source); })()), "html", null, true);
        echo " piksela.</target>
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
        echo " piksela). Najveća dozvoljena visina je ";
        echo twig_escape_filter($this->env, (isset($context["max_height"]) || array_key_exists("max_height", $context) ? $context["max_height"] : (function () { throw new RuntimeError('Variable "max_height" does not exist.', 171, $this->source); })()), "html", null, true);
        echo " piksela.</target>
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
        echo " piksela). Najmanja dozvoljena visina je ";
        echo twig_escape_filter($this->env, (isset($context["min_height"]) || array_key_exists("min_height", $context) ? $context["min_height"] : (function () { throw new RuntimeError('Variable "min_height" does not exist.', 175, $this->source); })()), "html", null, true);
        echo " piksela.</target>
            </trans-unit>
            <trans-unit id=\"47\">
                <source>This value should be the user's current password.</source>
                <target>Vrednost bi trebalo da bude trenutna korisnička lozinka.</target>
            </trans-unit>
            <trans-unit id=\"48\">
                <source>This value should have exactly ";
        // line 182
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 182, $this->source); })()), "html", null, true);
        echo " character.|This value should have exactly ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 182, $this->source); })()), "html", null, true);
        echo " characters.</source>
                <target>Vrednost bi trebalo da ima tačno ";
        // line 183
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 183, $this->source); })()), "html", null, true);
        echo " karakter.|Vrednost bi trebalo da ima tačno ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 183, $this->source); })()), "html", null, true);
        echo " karaktera.</target>
            </trans-unit>
            <trans-unit id=\"49\">
                <source>The file was only partially uploaded.</source>
                <target>Datoteka je samo parcijalno otpremljena.</target>
            </trans-unit>
            <trans-unit id=\"50\">
                <source>No file was uploaded.</source>
                <target>Datoteka nije otpremljena.</target>
            </trans-unit>
            <trans-unit id=\"51\">
                <source>No temporary folder was configured in php.ini.</source>
                <target>Privremeni direktorijum nije konfigurisan u php.ini.</target>
            </trans-unit>
            <trans-unit id=\"52\">
                <source>Cannot write temporary file to disk.</source>
                <target>Nemoguće pisanje privremene datoteke na disk.</target>
            </trans-unit>
            <trans-unit id=\"53\">
                <source>A PHP extension caused the upload to fail.</source>
                <target>PHP ekstenzija je prouzrokovala neuspeh otpremanja datoteke.</target>
            </trans-unit>
            <trans-unit id=\"54\">
                <source>This collection should contain ";
        // line 206
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 206, $this->source); })()), "html", null, true);
        echo " element or more.|This collection should contain ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 206, $this->source); })()), "html", null, true);
        echo " elements or more.</source>
                <target>Ova kolekcija bi trebalo da sadrži ";
        // line 207
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 207, $this->source); })()), "html", null, true);
        echo " ili više elemenata.|Ova kolekcija bi trebalo da sadrži ";
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
                <target>Ova kolekcija bi trebalo da sadrži ";
        // line 211
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 211, $this->source); })()), "html", null, true);
        echo " ili manje elemenata.|Ova kolekcija bi trebalo da sadrži ";
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
                <target>Ova kolekcija bi trebalo da sadrži tačno ";
        // line 215
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 215, $this->source); })()), "html", null, true);
        echo " element.|Ova kolekcija bi trebalo da sadrži tačno ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 215, $this->source); })()), "html", null, true);
        echo " elemenata.</target>
            </trans-unit>
            <trans-unit id=\"57\">
                <source>Invalid card number.</source>
                <target>Broj kartice nije validan.</target>
            </trans-unit>
            <trans-unit id=\"58\">
                <source>Unsupported card type or invalid card number.</source>
                <target>Tip kartice nije podržan ili broj kartice nije validan.</target>
            </trans-unit>
            <trans-unit id=\"59\">
                <source>This is not a valid International Bank Account Number (IBAN).</source>
                <target>Ovo nije validan međunarodni broj bankovnog računa (IBAN).</target>
            </trans-unit>
            <trans-unit id=\"60\">
                <source>This value is not a valid ISBN-10.</source>
                <target>Ovo nije validan ISBN-10.</target>
            </trans-unit>
            <trans-unit id=\"61\">
                <source>This value is not a valid ISBN-13.</source>
                <target>Ovo nije validan ISBN-13.</target>
            </trans-unit>
            <trans-unit id=\"62\">
                <source>This value is neither a valid ISBN-10 nor a valid ISBN-13.</source>
                <target>Ovo nije validan ISBN-10 ili ISBN-13.</target>
            </trans-unit>
            <trans-unit id=\"63\">
                <source>This value is not a valid ISSN.</source>
                <target>Ovo nije validan ISSN.</target>
            </trans-unit>
            <trans-unit id=\"64\">
                <source>This value is not a valid currency.</source>
                <target>Ovo nije validna valuta.</target>
            </trans-unit>
            <trans-unit id=\"65\">
                <source>This value should be equal to ";
        // line 250
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 250, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Ova vrednost bi trebalo da bude jednaka ";
        // line 251
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 251, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"66\">
                <source>This value should be greater than ";
        // line 254
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 254, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Ova vrednost bi trebalo da bude veća od ";
        // line 255
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 255, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"67\">
                <source>This value should be greater than or equal to ";
        // line 258
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 258, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Ova vrednost bi trebalo da bude veća ili jednaka ";
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
                <target>Ova vrednost bi trebalo da bude identična sa ";
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
                <target>Ova vrednost bi trebalo da bude manja od ";
        // line 267
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 267, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"70\">
                <source>This value should be less than or equal to ";
        // line 270
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 270, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Ova vrednost bi trebalo da bude manja ili jednaka ";
        // line 271
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 271, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"71\">
                <source>This value should not be equal to ";
        // line 274
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 274, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Ova vrednost ne bi trebalo da bude jednaka ";
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
                <target>Ova vrednost ne bi trebalo da bude identična sa ";
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
                <target>Razmera ove slike je prevelika (";
        // line 283
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 283, $this->source); })()), "html", null, true);
        echo "). Maksimalna dozvoljena razmera je ";
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
                <target>Razmera ove slike je premala (";
        // line 287
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 287, $this->source); })()), "html", null, true);
        echo "). Minimalna očekivana razmera je ";
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
                <target>Slika je kvadratna (";
        // line 291
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 291, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 291, $this->source); })()), "html", null, true);
        echo " piksela). Kvadratne slike nisu dozvoljene.</target>
            </trans-unit>
            <trans-unit id=\"76\">
                <source>The image is landscape oriented (";
        // line 294
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 294, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 294, $this->source); })()), "html", null, true);
        echo "px). Landscape oriented images are not allowed.</source>
                <target>Slika je pejzažno orijentisana (";
        // line 295
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 295, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 295, $this->source); })()), "html", null, true);
        echo " piksela). Pejzažna orijentisane slike nisu dozvoljene.</target>
            </trans-unit>
            <trans-unit id=\"77\">
                <source>The image is portrait oriented (";
        // line 298
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 298, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 298, $this->source); })()), "html", null, true);
        echo "px). Portrait oriented images are not allowed.</source>
                <target>Slika je portretno orijentisana (";
        // line 299
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 299, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 299, $this->source); })()), "html", null, true);
        echo " piksela). Portretno orijentisane slike nisu dozvoljene.</target>
            </trans-unit>
            <trans-unit id=\"78\">
                <source>An empty file is not allowed.</source>
                <target>Prazna datoteka nije dozvoljena.</target>
            </trans-unit>
            <trans-unit id=\"79\">
                <source>The host could not be resolved.</source>
                <target>Nije moguće odrediti poslužitelja.</target>
            </trans-unit>
            <trans-unit id=\"80\">
                <source>This value does not match the expected ";
        // line 310
        echo twig_escape_filter($this->env, (isset($context["charset"]) || array_key_exists("charset", $context) ? $context["charset"] : (function () { throw new RuntimeError('Variable "charset" does not exist.', 310, $this->source); })()), "html", null, true);
        echo " charset.</source>
                <target>Vrednost se ne poklapa sa očekivanim ";
        // line 311
        echo twig_escape_filter($this->env, (isset($context["charset"]) || array_key_exists("charset", $context) ? $context["charset"] : (function () { throw new RuntimeError('Variable "charset" does not exist.', 311, $this->source); })()), "html", null, true);
        echo " setom karaktera.</target>
            </trans-unit>
            <trans-unit id=\"81\">
                <source>This is not a valid Business Identifier Code (BIC).</source>
                <target>Ovo nije validan BIC.</target>
            </trans-unit>
            <trans-unit id=\"82\">
                <source>Error</source>
                <target>Greška</target>
            </trans-unit>
            <trans-unit id=\"83\">
                <source>This is not a valid UUID.</source>
                <target>Ovo nije validan univerzalni unikatni identifikator (UUID).</target>
            </trans-unit>
            <trans-unit id=\"84\">
                <source>This value should be a multiple of ";
        // line 326
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 326, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Ova vrednost bi trebalo da bude deljiva sa ";
        // line 327
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 327, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"85\">
                <source>This Business Identifier Code (BIC) is not associated with IBAN ";
        // line 330
        echo twig_escape_filter($this->env, (isset($context["iban"]) || array_key_exists("iban", $context) ? $context["iban"] : (function () { throw new RuntimeError('Variable "iban" does not exist.', 330, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>BIC kod nije povezan sa IBAN ";
        // line 331
        echo twig_escape_filter($this->env, (isset($context["iban"]) || array_key_exists("iban", $context) ? $context["iban"] : (function () { throw new RuntimeError('Variable "iban" does not exist.', 331, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"86\">
                <source>This value should be valid JSON.</source>
                <target>Ova vrednost bi trebalo da bude validan JSON.</target>
            </trans-unit>
            <trans-unit id=\"87\">
                <source>This collection should contain only unique elements.</source>
                <target>Ova kolekcija bi trebala da sadrži samo jedinstvene elemente.</target>
            </trans-unit>
            <trans-unit id=\"88\">
                <source>This value should be positive.</source>
                <target>Ova vrednost bi trebala biti pozitivna.</target>
            </trans-unit>
            <trans-unit id=\"89\">
                <source>This value should be either positive or zero.</source>
                <target>Ova vrednost bi trebala biti pozitivna ili nula.</target>
            </trans-unit>
            <trans-unit id=\"90\">
                <source>This value should be negative.</source>
                <target>Ova vrednost bi trebala biti negativna.</target>
            </trans-unit>
            <trans-unit id=\"91\">
                <source>This value should be either negative or zero.</source>
                <target>Ova vrednost bi trebala biti pozitivna ili nula.</target>
            </trans-unit>
            <trans-unit id=\"92\">
                <source>This value is not a valid timezone.</source>
                <target>Ova vrednost nije validna vremenska zona.</target>
            </trans-unit>
            <trans-unit id=\"93\">
                <source>This password has been leaked in a data breach, it must not be used. Please use another password.</source>
                <target>Ova lozinka je kompromitovana prilikom prethodnih napada, nemojte je koristiti. Koristite drugu lozinku.</target>
            </trans-unit>
            <trans-unit id=\"94\">
                <source>This value should be between ";
        // line 366
        echo twig_escape_filter($this->env, (isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 366, $this->source); })()), "html", null, true);
        echo " and ";
        echo twig_escape_filter($this->env, (isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 366, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Ova vrednost treba da bude između ";
        // line 367
        echo twig_escape_filter($this->env, (isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 367, $this->source); })()), "html", null, true);
        echo " i ";
        echo twig_escape_filter($this->env, (isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 367, $this->source); })()), "html", null, true);
        echo ".</target>
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
        return "vendor/symfony/validator/Resources/translations/validators.sr_Latn.xlf";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  716 => 367,  710 => 366,  672 => 331,  668 => 330,  662 => 327,  658 => 326,  640 => 311,  636 => 310,  620 => 299,  614 => 298,  606 => 295,  600 => 294,  592 => 291,  586 => 290,  578 => 287,  572 => 286,  564 => 283,  558 => 282,  550 => 279,  544 => 278,  538 => 275,  534 => 274,  528 => 271,  524 => 270,  518 => 267,  514 => 266,  506 => 263,  500 => 262,  494 => 259,  490 => 258,  484 => 255,  480 => 254,  474 => 251,  470 => 250,  430 => 215,  424 => 214,  416 => 211,  410 => 210,  402 => 207,  396 => 206,  368 => 183,  362 => 182,  350 => 175,  344 => 174,  336 => 171,  330 => 170,  322 => 167,  316 => 166,  308 => 163,  302 => 162,  254 => 119,  248 => 118,  212 => 87,  206 => 86,  200 => 83,  196 => 82,  188 => 79,  182 => 78,  176 => 75,  172 => 74,  164 => 71,  158 => 70,  146 => 67,  136 => 66,  96 => 31,  90 => 30,  82 => 27,  76 => 26,  62 => 15,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\"?>
<xliff version=\"1.2\" xmlns=\"urn:oasis:names:tc:xliff:document:1.2\">
    <file source-language=\"en\" datatype=\"plaintext\" original=\"file.ext\">
        <body>
            <trans-unit id=\"1\">
                <source>This value should be false.</source>
                <target>Vrednost bi trebalo da bude netačna.</target>
            </trans-unit>
            <trans-unit id=\"2\">
                <source>This value should be true.</source>
                <target>Vrednost bi trebalo da bude tačna.</target>
            </trans-unit>
            <trans-unit id=\"3\">
                <source>This value should be of type {{ type }}.</source>
                <target>Vrednost bi trebalo da bude tipa {{ type }}.</target>
            </trans-unit>
            <trans-unit id=\"4\">
                <source>This value should be blank.</source>
                <target>Vrednost bi trebalo da bude prazna.</target>
            </trans-unit>
            <trans-unit id=\"5\">
                <source>The value you selected is not a valid choice.</source>
                <target>Odabrana vrednost nije validan izbor.</target>
            </trans-unit>
            <trans-unit id=\"6\">
                <source>You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.</source>
                <target>Morate odabrati bar {{ limit }} mogućnost.|Morate odabrati bar {{ limit }} mogućnosti.</target>
            </trans-unit>
            <trans-unit id=\"7\">
                <source>You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.</source>
                <target>Morate odabrati najviše {{ limit }} mogućnost.|Morate odabrati najviše {{ limit }} mogućnosti.</target>
            </trans-unit>
            <trans-unit id=\"8\">
                <source>One or more of the given values is invalid.</source>
                <target>Jedna ili više vrednosti nisu validne.</target>
            </trans-unit>
            <trans-unit id=\"9\">
                <source>This field was not expected.</source>
                <target>Ovo polje nije bilo očekivano.</target>
            </trans-unit>
            <trans-unit id=\"10\">
                <source>This field is missing.</source>
                <target>Ovo polje nedostaje.</target>
            </trans-unit>
            <trans-unit id=\"11\">
                <source>This value is not a valid date.</source>
                <target>Vrednost nije validan datum.</target>
            </trans-unit>
            <trans-unit id=\"12\">
                <source>This value is not a valid datetime.</source>
                <target>Vrednost nije validno vreme.</target>
            </trans-unit>
            <trans-unit id=\"13\">
                <source>This value is not a valid email address.</source>
                <target>Vrednost nije validna adresa elektronske pošte.</target>
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
                <target>MIME tip datoteke nije validan ({{ type }}). Dozvoljeni MIME tipovi su {{ types }}.</target>
            </trans-unit>
            <trans-unit id=\"18\">
                <source>This value should be {{ limit }} or less.</source>
                <target>Vrednost bi trebalo da bude {{ limit }} ili manje.</target>
            </trans-unit>
            <trans-unit id=\"19\">
                <source>This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.</source>
                <target>Vrednost je predugačka. Trebalo bi da ima {{ limit }} karakter ili manje.|Vrednost je predugačka. Trebalo bi da ima {{ limit }} karaktera ili manje.</target>
            </trans-unit>
            <trans-unit id=\"20\">
                <source>This value should be {{ limit }} or more.</source>
                <target>Vrednost bi trebalo da bude {{ limit }} ili više.</target>
            </trans-unit>
            <trans-unit id=\"21\">
                <source>This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.</source>
                <target>Vrednost je prekratka. Trebalo bi da ima {{ limit }} karakter ili više.|Vrednost je prekratka. Trebalo bi da ima {{ limit }} karaktera ili više.</target>
            </trans-unit>
            <trans-unit id=\"22\">
                <source>This value should not be blank.</source>
                <target>Vrednost ne bi trebalo da bude prazna.</target>
            </trans-unit>
            <trans-unit id=\"23\">
                <source>This value should not be null.</source>
                <target>Vrednost ne bi trebalo da bude prazna.</target>
            </trans-unit>
            <trans-unit id=\"24\">
                <source>This value should be null.</source>
                <target>Vrednost bi trebalo da bude prazna.</target>
            </trans-unit>
            <trans-unit id=\"25\">
                <source>This value is not valid.</source>
                <target>Vrednost nije validna.</target>
            </trans-unit>
            <trans-unit id=\"26\">
                <source>This value is not a valid time.</source>
                <target>Vrednost nije validno vreme.</target>
            </trans-unit>
            <trans-unit id=\"27\">
                <source>This value is not a valid URL.</source>
                <target>Vrednost nije validan URL.</target>
            </trans-unit>
            <trans-unit id=\"31\">
                <source>The two values should be equal.</source>
                <target>Obe vrednosti bi trebalo da budu jednake.</target>
            </trans-unit>
            <trans-unit id=\"32\">
                <source>The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.</source>
                <target>Datoteka je prevelika. Najveća dozvoljena veličina je {{ limit }} {{ suffix }}.</target>
            </trans-unit>
            <trans-unit id=\"33\">
                <source>The file is too large.</source>
                <target>Datoteka je prevelika.</target>
            </trans-unit>
            <trans-unit id=\"34\">
                <source>The file could not be uploaded.</source>
                <target>Datoteka ne može biti otpremljena.</target>
            </trans-unit>
            <trans-unit id=\"35\">
                <source>This value should be a valid number.</source>
                <target>Vrednost bi trebalo da bude validan broj.</target>
            </trans-unit>
            <trans-unit id=\"36\">
                <source>This file is not a valid image.</source>
                <target>Ova datoteka nije validna slika.</target>
            </trans-unit>
            <trans-unit id=\"37\">
                <source>This is not a valid IP address.</source>
                <target>Ovo nije validna IP adresa.</target>
            </trans-unit>
            <trans-unit id=\"38\">
                <source>This value is not a valid language.</source>
                <target>Vrednost nije validan jezik.</target>
            </trans-unit>
            <trans-unit id=\"39\">
                <source>This value is not a valid locale.</source>
                <target>Vrednost nije validna međunarodna oznaka jezika.</target>
            </trans-unit>
            <trans-unit id=\"40\">
                <source>This value is not a valid country.</source>
                <target>Vrednost nije validna država.</target>
            </trans-unit>
            <trans-unit id=\"41\">
                <source>This value is already used.</source>
                <target>Vrednost je već iskorišćena.</target>
            </trans-unit>
            <trans-unit id=\"42\">
                <source>The size of the image could not be detected.</source>
                <target>Veličina slike ne može biti određena.</target>
            </trans-unit>
            <trans-unit id=\"43\">
                <source>The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.</source>
                <target>Širina slike je prevelika ({{ width }} piksela). Najveća dozvoljena širina je {{ max_width }} piksela.</target>
            </trans-unit>
            <trans-unit id=\"44\">
                <source>The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.</source>
                <target>Širina slike je premala ({{ width }} piksela). Najmanja dozvoljena širina je {{ min_width }} piksela.</target>
            </trans-unit>
            <trans-unit id=\"45\">
                <source>The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.</source>
                <target>Visina slike je prevelika ({{ height }} piksela). Najveća dozvoljena visina je {{ max_height }} piksela.</target>
            </trans-unit>
            <trans-unit id=\"46\">
                <source>The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.</source>
                <target>Visina slike je premala ({{ height }} piksela). Najmanja dozvoljena visina je {{ min_height }} piksela.</target>
            </trans-unit>
            <trans-unit id=\"47\">
                <source>This value should be the user's current password.</source>
                <target>Vrednost bi trebalo da bude trenutna korisnička lozinka.</target>
            </trans-unit>
            <trans-unit id=\"48\">
                <source>This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.</source>
                <target>Vrednost bi trebalo da ima tačno {{ limit }} karakter.|Vrednost bi trebalo da ima tačno {{ limit }} karaktera.</target>
            </trans-unit>
            <trans-unit id=\"49\">
                <source>The file was only partially uploaded.</source>
                <target>Datoteka je samo parcijalno otpremljena.</target>
            </trans-unit>
            <trans-unit id=\"50\">
                <source>No file was uploaded.</source>
                <target>Datoteka nije otpremljena.</target>
            </trans-unit>
            <trans-unit id=\"51\">
                <source>No temporary folder was configured in php.ini.</source>
                <target>Privremeni direktorijum nije konfigurisan u php.ini.</target>
            </trans-unit>
            <trans-unit id=\"52\">
                <source>Cannot write temporary file to disk.</source>
                <target>Nemoguće pisanje privremene datoteke na disk.</target>
            </trans-unit>
            <trans-unit id=\"53\">
                <source>A PHP extension caused the upload to fail.</source>
                <target>PHP ekstenzija je prouzrokovala neuspeh otpremanja datoteke.</target>
            </trans-unit>
            <trans-unit id=\"54\">
                <source>This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.</source>
                <target>Ova kolekcija bi trebalo da sadrži {{ limit }} ili više elemenata.|Ova kolekcija bi trebalo da sadrži {{ limit }} ili više elemenata.</target>
            </trans-unit>
            <trans-unit id=\"55\">
                <source>This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.</source>
                <target>Ova kolekcija bi trebalo da sadrži {{ limit }} ili manje elemenata.|Ova kolekcija bi trebalo da sadrži {{ limit }} ili manje elemenata.</target>
            </trans-unit>
            <trans-unit id=\"56\">
                <source>This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.</source>
                <target>Ova kolekcija bi trebalo da sadrži tačno {{ limit }} element.|Ova kolekcija bi trebalo da sadrži tačno {{ limit }} elemenata.</target>
            </trans-unit>
            <trans-unit id=\"57\">
                <source>Invalid card number.</source>
                <target>Broj kartice nije validan.</target>
            </trans-unit>
            <trans-unit id=\"58\">
                <source>Unsupported card type or invalid card number.</source>
                <target>Tip kartice nije podržan ili broj kartice nije validan.</target>
            </trans-unit>
            <trans-unit id=\"59\">
                <source>This is not a valid International Bank Account Number (IBAN).</source>
                <target>Ovo nije validan međunarodni broj bankovnog računa (IBAN).</target>
            </trans-unit>
            <trans-unit id=\"60\">
                <source>This value is not a valid ISBN-10.</source>
                <target>Ovo nije validan ISBN-10.</target>
            </trans-unit>
            <trans-unit id=\"61\">
                <source>This value is not a valid ISBN-13.</source>
                <target>Ovo nije validan ISBN-13.</target>
            </trans-unit>
            <trans-unit id=\"62\">
                <source>This value is neither a valid ISBN-10 nor a valid ISBN-13.</source>
                <target>Ovo nije validan ISBN-10 ili ISBN-13.</target>
            </trans-unit>
            <trans-unit id=\"63\">
                <source>This value is not a valid ISSN.</source>
                <target>Ovo nije validan ISSN.</target>
            </trans-unit>
            <trans-unit id=\"64\">
                <source>This value is not a valid currency.</source>
                <target>Ovo nije validna valuta.</target>
            </trans-unit>
            <trans-unit id=\"65\">
                <source>This value should be equal to {{ compared_value }}.</source>
                <target>Ova vrednost bi trebalo da bude jednaka {{ compared_value }}.</target>
            </trans-unit>
            <trans-unit id=\"66\">
                <source>This value should be greater than {{ compared_value }}.</source>
                <target>Ova vrednost bi trebalo da bude veća od {{ compared_value }}.</target>
            </trans-unit>
            <trans-unit id=\"67\">
                <source>This value should be greater than or equal to {{ compared_value }}.</source>
                <target>Ova vrednost bi trebalo da bude veća ili jednaka {{ compared_value }}.</target>
            </trans-unit>
            <trans-unit id=\"68\">
                <source>This value should be identical to {{ compared_value_type }} {{ compared_value }}.</source>
                <target>Ova vrednost bi trebalo da bude identična sa {{ compared_value_type }} {{ compared_value }}.</target>
            </trans-unit>
            <trans-unit id=\"69\">
                <source>This value should be less than {{ compared_value }}.</source>
                <target>Ova vrednost bi trebalo da bude manja od {{ compared_value }}.</target>
            </trans-unit>
            <trans-unit id=\"70\">
                <source>This value should be less than or equal to {{ compared_value }}.</source>
                <target>Ova vrednost bi trebalo da bude manja ili jednaka {{ compared_value }}.</target>
            </trans-unit>
            <trans-unit id=\"71\">
                <source>This value should not be equal to {{ compared_value }}.</source>
                <target>Ova vrednost ne bi trebalo da bude jednaka {{ compared_value }}.</target>
            </trans-unit>
            <trans-unit id=\"72\">
                <source>This value should not be identical to {{ compared_value_type }} {{ compared_value }}.</source>
                <target>Ova vrednost ne bi trebalo da bude identična sa {{ compared_value_type }} {{ compared_value }}.</target>
            </trans-unit>
            <trans-unit id=\"73\">
                <source>The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.</source>
                <target>Razmera ove slike je prevelika ({{ ratio }}). Maksimalna dozvoljena razmera je {{ max_ratio }}.</target>
            </trans-unit>
            <trans-unit id=\"74\">
                <source>The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.</source>
                <target>Razmera ove slike je premala ({{ ratio }}). Minimalna očekivana razmera je {{ min_ratio }}.</target>
            </trans-unit>
            <trans-unit id=\"75\">
                <source>The image is square ({{ width }}x{{ height }}px). Square images are not allowed.</source>
                <target>Slika je kvadratna ({{ width }}x{{ height }} piksela). Kvadratne slike nisu dozvoljene.</target>
            </trans-unit>
            <trans-unit id=\"76\">
                <source>The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.</source>
                <target>Slika je pejzažno orijentisana ({{ width }}x{{ height }} piksela). Pejzažna orijentisane slike nisu dozvoljene.</target>
            </trans-unit>
            <trans-unit id=\"77\">
                <source>The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.</source>
                <target>Slika je portretno orijentisana ({{ width }}x{{ height }} piksela). Portretno orijentisane slike nisu dozvoljene.</target>
            </trans-unit>
            <trans-unit id=\"78\">
                <source>An empty file is not allowed.</source>
                <target>Prazna datoteka nije dozvoljena.</target>
            </trans-unit>
            <trans-unit id=\"79\">
                <source>The host could not be resolved.</source>
                <target>Nije moguće odrediti poslužitelja.</target>
            </trans-unit>
            <trans-unit id=\"80\">
                <source>This value does not match the expected {{ charset }} charset.</source>
                <target>Vrednost se ne poklapa sa očekivanim {{ charset }} setom karaktera.</target>
            </trans-unit>
            <trans-unit id=\"81\">
                <source>This is not a valid Business Identifier Code (BIC).</source>
                <target>Ovo nije validan BIC.</target>
            </trans-unit>
            <trans-unit id=\"82\">
                <source>Error</source>
                <target>Greška</target>
            </trans-unit>
            <trans-unit id=\"83\">
                <source>This is not a valid UUID.</source>
                <target>Ovo nije validan univerzalni unikatni identifikator (UUID).</target>
            </trans-unit>
            <trans-unit id=\"84\">
                <source>This value should be a multiple of {{ compared_value }}.</source>
                <target>Ova vrednost bi trebalo da bude deljiva sa {{ compared_value }}.</target>
            </trans-unit>
            <trans-unit id=\"85\">
                <source>This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.</source>
                <target>BIC kod nije povezan sa IBAN {{ iban }}.</target>
            </trans-unit>
            <trans-unit id=\"86\">
                <source>This value should be valid JSON.</source>
                <target>Ova vrednost bi trebalo da bude validan JSON.</target>
            </trans-unit>
            <trans-unit id=\"87\">
                <source>This collection should contain only unique elements.</source>
                <target>Ova kolekcija bi trebala da sadrži samo jedinstvene elemente.</target>
            </trans-unit>
            <trans-unit id=\"88\">
                <source>This value should be positive.</source>
                <target>Ova vrednost bi trebala biti pozitivna.</target>
            </trans-unit>
            <trans-unit id=\"89\">
                <source>This value should be either positive or zero.</source>
                <target>Ova vrednost bi trebala biti pozitivna ili nula.</target>
            </trans-unit>
            <trans-unit id=\"90\">
                <source>This value should be negative.</source>
                <target>Ova vrednost bi trebala biti negativna.</target>
            </trans-unit>
            <trans-unit id=\"91\">
                <source>This value should be either negative or zero.</source>
                <target>Ova vrednost bi trebala biti pozitivna ili nula.</target>
            </trans-unit>
            <trans-unit id=\"92\">
                <source>This value is not a valid timezone.</source>
                <target>Ova vrednost nije validna vremenska zona.</target>
            </trans-unit>
            <trans-unit id=\"93\">
                <source>This password has been leaked in a data breach, it must not be used. Please use another password.</source>
                <target>Ova lozinka je kompromitovana prilikom prethodnih napada, nemojte je koristiti. Koristite drugu lozinku.</target>
            </trans-unit>
            <trans-unit id=\"94\">
                <source>This value should be between {{ min }} and {{ max }}.</source>
                <target>Ova vrednost treba da bude između {{ min }} i {{ max }}.</target>
            </trans-unit>
        </body>
    </file>
</xliff>
", "vendor/symfony/validator/Resources/translations/validators.sr_Latn.xlf", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Resources/translations/validators.sr_Latn.xlf");
    }
}
