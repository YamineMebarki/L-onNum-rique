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

/* vendor/symfony/validator/Resources/translations/validators.ro.xlf */
class __TwigTemplate_f3254520d282697c6cab257a9d120ad8c1284fc5e9a55fabf7b2e1a844a5bd54 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Resources/translations/validators.ro.xlf"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Resources/translations/validators.ro.xlf"));

        // line 1
        echo "<?xml version=\"1.0\"?>
<xliff version=\"1.2\" xmlns=\"urn:oasis:names:tc:xliff:document:1.2\">
    <file source-language=\"en\" datatype=\"plaintext\" original=\"file.ext\">
        <body>
            <trans-unit id=\"1\">
                <source>This value should be false.</source>
                <target>Această valoare ar trebui să fie falsă (false).</target>
            </trans-unit>
            <trans-unit id=\"2\">
                <source>This value should be true.</source>
                <target>Această valoare ar trebui să fie adevărată (true).</target>
            </trans-unit>
            <trans-unit id=\"3\">
                <source>This value should be of type ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 14, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Această valoare ar trebui să fie de tipul ";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 15, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"4\">
                <source>This value should be blank.</source>
                <target>Această valoare ar trebui sa fie goală.</target>
            </trans-unit>
            <trans-unit id=\"5\">
                <source>The value you selected is not a valid choice.</source>
                <target>Valoarea selectată nu este o opțiune validă.</target>
            </trans-unit>
            <trans-unit id=\"6\">
                <source>You must select at least ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " choice.|You must select at least ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " choices.</source>
                <target>Trebuie să selectați cel puțin ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 27, $this->source); })()), "html", null, true);
        echo " opțiune.|Trebuie să selectați cel puțin ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 27, $this->source); })()), "html", null, true);
        echo " opțiuni.|Trebuie să selectați cel puțin ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 27, $this->source); })()), "html", null, true);
        echo " de opțiuni</target>
            </trans-unit>
            <trans-unit id=\"7\">
                <source>You must select at most ";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 30, $this->source); })()), "html", null, true);
        echo " choice.|You must select at most ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 30, $this->source); })()), "html", null, true);
        echo " choices.</source>
                <target>Trebuie să selectați cel mult ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 31, $this->source); })()), "html", null, true);
        echo " opțiune.|Trebuie să selectați cel mult ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 31, $this->source); })()), "html", null, true);
        echo " opțiuni.|Trebuie să selectați cel mult ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 31, $this->source); })()), "html", null, true);
        echo " de opțiuni.</target>
            </trans-unit>
            <trans-unit id=\"8\">
                <source>One or more of the given values is invalid.</source>
                <target>Una sau mai multe dintre valorile furnizate sunt invalide.</target>
            </trans-unit>
            <trans-unit id=\"9\">
                <source>This field was not expected.</source>
                <target>Acest câmp nu era de aşteptat.</target>
            </trans-unit>
            <trans-unit id=\"10\">
                <source>This field is missing.</source>
                <target>Acest câmp este lipsă.</target>
            </trans-unit>
            <trans-unit id=\"11\">
                <source>This value is not a valid date.</source>
                <target>Această valoare nu reprezintă o dată validă.</target>
            </trans-unit>
            <trans-unit id=\"12\">
                <source>This value is not a valid datetime.</source>
                <target>Această valoare nu reprezintă o dată și oră validă.</target>
            </trans-unit>
            <trans-unit id=\"13\">
                <source>This value is not a valid email address.</source>
                <target>Această valoare nu reprezintă o adresă de e-mail validă.</target>
            </trans-unit>
            <trans-unit id=\"14\">
                <source>The file could not be found.</source>
                <target>Fișierul nu a putut fi găsit.</target>
            </trans-unit>
            <trans-unit id=\"15\">
                <source>The file is not readable.</source>
                <target>Fișierul nu poate fi citit.</target>
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
                <target>Fișierul este prea mare (";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 67, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 67, $this->source); })()), "html", null, true);
        echo "). Dimensiunea maximă permisă este ";
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
                <target>Tipul fișierului este invalid (";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "). Tipurile permise de fișiere sunt (";
        echo twig_escape_filter($this->env, (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 71, $this->source); })()), "html", null, true);
        echo ").</target>
            </trans-unit>
            <trans-unit id=\"18\">
                <source>This value should be ";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 74, $this->source); })()), "html", null, true);
        echo " or less.</source>
                <target>Această valoare ar trebui să fie cel mult ";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 75, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"19\">
                <source>This value is too long. It should have ";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 78, $this->source); })()), "html", null, true);
        echo " character or less.|This value is too long. It should have ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 78, $this->source); })()), "html", null, true);
        echo " characters or less.</source>
                <target>Această valoare este prea lungă. Ar trebui să aibă maxim ";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 79, $this->source); })()), "html", null, true);
        echo " caracter.|Această valoare este prea lungă. Ar trebui să aibă maxim ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 79, $this->source); })()), "html", null, true);
        echo " caractere.|Această valoare este prea lungă. Ar trebui să aibă maxim ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 79, $this->source); })()), "html", null, true);
        echo " de caractere.</target>
            </trans-unit>
            <trans-unit id=\"20\">
                <source>This value should be ";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 82, $this->source); })()), "html", null, true);
        echo " or more.</source>
                <target>Această valoare ar trebui să fie cel puțin ";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 83, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"21\">
                <source>This value is too short. It should have ";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 86, $this->source); })()), "html", null, true);
        echo " character or more.|This value is too short. It should have ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 86, $this->source); })()), "html", null, true);
        echo " characters or more.</source>
                <target>Această valoare este prea scurtă. Ar trebui să aibă minim ";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 87, $this->source); })()), "html", null, true);
        echo " caracter.|Această valoare este prea scurtă. Ar trebui să aibă minim ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 87, $this->source); })()), "html", null, true);
        echo " caractere.|Această valoare este prea scurtă. Ar trebui să aibă minim ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 87, $this->source); })()), "html", null, true);
        echo " de caractere.</target>
            </trans-unit>
            <trans-unit id=\"22\">
                <source>This value should not be blank.</source>
                <target>Această valoare nu ar trebui să fie goală.</target>
            </trans-unit>
            <trans-unit id=\"23\">
                <source>This value should not be null.</source>
                <target>Această valoare nu ar trebui să fie nulă (null).</target>
            </trans-unit>
            <trans-unit id=\"24\">
                <source>This value should be null.</source>
                <target>Această valoare ar trebui să fie nulă (null).</target>
            </trans-unit>
            <trans-unit id=\"25\">
                <source>This value is not valid.</source>
                <target>Această valoare nu este validă.</target>
            </trans-unit>
            <trans-unit id=\"26\">
                <source>This value is not a valid time.</source>
                <target>Această valoare nu reprezintă o oră validă.</target>
            </trans-unit>
            <trans-unit id=\"27\">
                <source>This value is not a valid URL.</source>
                <target>Această valoare nu reprezintă un URL (link) valid.</target>
            </trans-unit>
            <trans-unit id=\"31\">
                <source>The two values should be equal.</source>
                <target>Cele două valori ar trebui să fie egale.</target>
            </trans-unit>
            <trans-unit id=\"32\">
                <source>The file is too large. Allowed maximum size is ";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 118, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 118, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Fișierul este prea mare. Mărimea maximă permisă este ";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 119, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 119, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"33\">
                <source>The file is too large.</source>
                <target>Fișierul este prea mare.</target>
            </trans-unit>
            <trans-unit id=\"34\">
                <source>The file could not be uploaded.</source>
                <target>Fișierul nu a putut fi încărcat.</target>
            </trans-unit>
            <trans-unit id=\"35\">
                <source>This value should be a valid number.</source>
                <target>Această valoare nu reprezintă un număr valid.</target>
            </trans-unit>
            <trans-unit id=\"36\">
                <source>This file is not a valid image.</source>
                <target>Acest fișier nu este o imagine validă.</target>
            </trans-unit>
            <trans-unit id=\"37\">
                <source>This is not a valid IP address.</source>
                <target>Această valoare nu este o adresă IP validă.</target>
            </trans-unit>
            <trans-unit id=\"38\">
                <source>This value is not a valid language.</source>
                <target>Această valoare nu reprezintă o limbă corectă.</target>
            </trans-unit>
            <trans-unit id=\"39\">
                <source>This value is not a valid locale.</source>
                <target>Această valoare nu reprezintă un dialect (o limbă) corect.</target>
            </trans-unit>
            <trans-unit id=\"40\">
                <source>This value is not a valid country.</source>
                <target>Această valoare nu este o țară validă.</target>
            </trans-unit>
            <trans-unit id=\"41\">
                <source>This value is already used.</source>
                <target>Această valoare este folosită deja.</target>
            </trans-unit>
            <trans-unit id=\"42\">
                <source>The size of the image could not be detected.</source>
                <target>Mărimea imaginii nu a putut fi detectată.</target>
            </trans-unit>
            <trans-unit id=\"43\">
                <source>The image width is too big (";
        // line 162
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 162, $this->source); })()), "html", null, true);
        echo "px). Allowed maximum width is ";
        echo twig_escape_filter($this->env, (isset($context["max_width"]) || array_key_exists("max_width", $context) ? $context["max_width"] : (function () { throw new RuntimeError('Variable "max_width" does not exist.', 162, $this->source); })()), "html", null, true);
        echo "px.</source>
                <target>Lățimea imaginii este prea mare (";
        // line 163
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 163, $this->source); })()), "html", null, true);
        echo "px). Lățimea maximă permisă este de ";
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
                <target>Lățimea imaginii este prea mică (";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 167, $this->source); })()), "html", null, true);
        echo "px). Lățimea minimă permisă este de ";
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
                <target>Înălțimea imaginii este prea mare (";
        // line 171
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 171, $this->source); })()), "html", null, true);
        echo "px). Înălțimea maximă permisă este de ";
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
                <target>Înălțimea imaginii este prea mică (";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 175, $this->source); })()), "html", null, true);
        echo "px). Înălțimea minimă permisă este de ";
        echo twig_escape_filter($this->env, (isset($context["min_height"]) || array_key_exists("min_height", $context) ? $context["min_height"] : (function () { throw new RuntimeError('Variable "min_height" does not exist.', 175, $this->source); })()), "html", null, true);
        echo "px.</target>
            </trans-unit>
            <trans-unit id=\"47\">
                <source>This value should be the user's current password.</source>
                <target>Această valoare trebuie să fie parola curentă a utilizatorului.</target>
            </trans-unit>
            <trans-unit id=\"48\">
                <source>This value should have exactly ";
        // line 182
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 182, $this->source); })()), "html", null, true);
        echo " character.|This value should have exactly ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 182, $this->source); })()), "html", null, true);
        echo " characters.</source>
                <target>Această valoare trebuie să conțină exact ";
        // line 183
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 183, $this->source); })()), "html", null, true);
        echo " caracter.|Această valoare trebuie să conțină exact ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 183, $this->source); })()), "html", null, true);
        echo " caractere.|Această valoare trebuie să conțină exact ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 183, $this->source); })()), "html", null, true);
        echo " de caractere.</target>
            </trans-unit>
            <trans-unit id=\"49\">
                <source>The file was only partially uploaded.</source>
                <target>Fișierul a fost încărcat parțial.</target>
            </trans-unit>
            <trans-unit id=\"50\">
                <source>No file was uploaded.</source>
                <target>Nu a fost încărcat nici un fișier.</target>
            </trans-unit>
            <trans-unit id=\"51\">
                <source>No temporary folder was configured in php.ini.</source>
                <target>Nu este configurat nici un director temporar in php.ini.</target>
            </trans-unit>
            <trans-unit id=\"52\">
                <source>Cannot write temporary file to disk.</source>
                <target>Nu a fost posibilă scrierea fișierului temporar pe disk.</target>
            </trans-unit>
            <trans-unit id=\"53\">
                <source>A PHP extension caused the upload to fail.</source>
                <target>O extensie PHP a prevenit încărcarea cu succes a fișierului.</target>
            </trans-unit>
            <trans-unit id=\"54\">
                <source>This collection should contain ";
        // line 206
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 206, $this->source); })()), "html", null, true);
        echo " element or more.|This collection should contain ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 206, $this->source); })()), "html", null, true);
        echo " elements or more.</source>
                <target>Această colecție trebuie să conțină cel puțin ";
        // line 207
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 207, $this->source); })()), "html", null, true);
        echo " element.|Această colecție trebuie să conțină cel puțin ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 207, $this->source); })()), "html", null, true);
        echo " elemente.|Această colecție trebuie să conțină cel puțin ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 207, $this->source); })()), "html", null, true);
        echo " de elemente.</target>
            </trans-unit>
            <trans-unit id=\"55\">
                <source>This collection should contain ";
        // line 210
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 210, $this->source); })()), "html", null, true);
        echo " element or less.|This collection should contain ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 210, $this->source); })()), "html", null, true);
        echo " elements or less.</source>
                <target>Această colecție trebuie să conțină cel mult ";
        // line 211
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 211, $this->source); })()), "html", null, true);
        echo " element.|Această colecție trebuie să conțină cel mult ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 211, $this->source); })()), "html", null, true);
        echo " elemente.|Această colecție trebuie să conțină cel mult ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 211, $this->source); })()), "html", null, true);
        echo " de elemente.</target>
            </trans-unit>
            <trans-unit id=\"56\">
                <source>This collection should contain exactly ";
        // line 214
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 214, $this->source); })()), "html", null, true);
        echo " element.|This collection should contain exactly ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 214, $this->source); })()), "html", null, true);
        echo " elements.</source>
                <target>Această colecție trebuie să conțină ";
        // line 215
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 215, $this->source); })()), "html", null, true);
        echo " element.|Această colecție trebuie să conțină ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 215, $this->source); })()), "html", null, true);
        echo " elemente.|Această colecție trebuie să conțină ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 215, $this->source); })()), "html", null, true);
        echo " de elemente.</target>
            </trans-unit>
            <trans-unit id=\"57\">
                <source>Invalid card number.</source>
                <target>Numărul card invalid.</target>
            </trans-unit>
            <trans-unit id=\"58\">
                <source>Unsupported card type or invalid card number.</source>
                <target>Tipul sau numărul cardului nu sunt valide.</target>
            </trans-unit>
            <trans-unit id=\"59\">
                <source>This is not a valid International Bank Account Number (IBAN).</source>
                <target>Acesta nu este un cod IBAN (International Bank Account Number) valid.</target>
            </trans-unit>
            <trans-unit id=\"60\">
                <source>This value is not a valid ISBN-10.</source>
                <target>Această valoare nu este un cod ISBN-10 valid.</target>
            </trans-unit>
            <trans-unit id=\"61\">
                <source>This value is not a valid ISBN-13.</source>
                <target>Această valoare nu este un cod ISBN-13 valid.</target>
            </trans-unit>
            <trans-unit id=\"62\">
                <source>This value is neither a valid ISBN-10 nor a valid ISBN-13.</source>
                <target>Această valoare nu este un cod ISBN-10 sau ISBN-13 valid.</target>
            </trans-unit>
            <trans-unit id=\"63\">
                <source>This value is not a valid ISSN.</source>
                <target>Această valoare nu este un cod ISSN valid.</target>
            </trans-unit>
            <trans-unit id=\"64\">
                <source>This value is not a valid currency.</source>
                <target>Această valoare nu este o monedă validă.</target>
            </trans-unit>
            <trans-unit id=\"65\">
                <source>This value should be equal to ";
        // line 250
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 250, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Această valoare trebuie să fie egală cu ";
        // line 251
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 251, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"66\">
                <source>This value should be greater than ";
        // line 254
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 254, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Această valoare trebuie să fie mai mare de ";
        // line 255
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 255, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"67\">
                <source>This value should be greater than or equal to ";
        // line 258
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 258, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Această valoare trebuie să fie mai mare sau egală cu ";
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
                <target>Această valoare trebuie identică cu ";
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
                <target>Această valoare trebuie să fie mai mică de ";
        // line 267
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 267, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"70\">
                <source>This value should be less than or equal to ";
        // line 270
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 270, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Această valoare trebuie să fie mai mică sau egală cu ";
        // line 271
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 271, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"71\">
                <source>This value should not be equal to ";
        // line 274
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 274, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Această valoare nu trebuie să fie egală cu ";
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
                <target>Această valoare nu trebuie să fie identică cu ";
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
                <target>Raportul imaginii este prea mare (";
        // line 283
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 283, $this->source); })()), "html", null, true);
        echo "). Raportul maxim permis este ";
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
                <target>Raportul imaginii este prea mic (";
        // line 287
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 287, $this->source); })()), "html", null, true);
        echo "). Raportul minim permis este ";
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
                <target>Imaginea este un pătrat (";
        // line 291
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 291, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 291, $this->source); })()), "html", null, true);
        echo "px). Imaginile pătrat nu sunt permise.</target>
            </trans-unit>
            <trans-unit id=\"76\">
                <source>The image is landscape oriented (";
        // line 294
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 294, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 294, $this->source); })()), "html", null, true);
        echo "px). Landscape oriented images are not allowed.</source>
                <target>Imaginea are orientarea peisaj (";
        // line 295
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 295, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 295, $this->source); })()), "html", null, true);
        echo "px). Imaginile cu orientare peisaj nu sunt permise.</target>
            </trans-unit>
            <trans-unit id=\"77\">
                <source>The image is portrait oriented (";
        // line 298
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 298, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 298, $this->source); })()), "html", null, true);
        echo "px). Portrait oriented images are not allowed.</source>
                <target>Imaginea are orientarea portret (";
        // line 299
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 299, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 299, $this->source); })()), "html", null, true);
        echo "px). Imaginile cu orientare portret nu sunt permise.</target>
            </trans-unit>
            <trans-unit id=\"78\">
                <source>An empty file is not allowed.</source>
                <target>Nu se permite un fișier gol.</target>
            </trans-unit>
            <trans-unit id=\"79\">
                <source>The host could not be resolved.</source>
                <target>Numele host nu a putut fi rezolvat către o adresă IP.</target>
            </trans-unit>
            <trans-unit id=\"80\">
                <source>This value does not match the expected ";
        // line 310
        echo twig_escape_filter($this->env, (isset($context["charset"]) || array_key_exists("charset", $context) ? $context["charset"] : (function () { throw new RuntimeError('Variable "charset" does not exist.', 310, $this->source); })()), "html", null, true);
        echo " charset.</source>
                <target>Această valoare nu corespunde setului de caractere ";
        // line 311
        echo twig_escape_filter($this->env, (isset($context["charset"]) || array_key_exists("charset", $context) ? $context["charset"] : (function () { throw new RuntimeError('Variable "charset" does not exist.', 311, $this->source); })()), "html", null, true);
        echo " așteptat.</target>
            </trans-unit>
            <trans-unit id=\"81\">
                <source>This is not a valid Business Identifier Code (BIC).</source>
                <target>Codul BIC (Business Identifier Code) nu este valid.</target>
            </trans-unit>
            <trans-unit id=\"82\">
                <source>Error</source>
                <target>Eroare</target>
            </trans-unit>
            <trans-unit id=\"83\">
                <source>This is not a valid UUID.</source>
                <target>Identificatorul universal unic (UUID) nu este valid.</target>
            </trans-unit>
            <trans-unit id=\"84\">
                <source>This value should be a multiple of ";
        // line 326
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 326, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Această valoare trebuie să fie un multiplu de ";
        // line 327
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 327, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"85\">
                <source>This Business Identifier Code (BIC) is not associated with IBAN ";
        // line 330
        echo twig_escape_filter($this->env, (isset($context["iban"]) || array_key_exists("iban", $context) ? $context["iban"] : (function () { throw new RuntimeError('Variable "iban" does not exist.', 330, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Codul BIC (Business Identifier Code) nu este asociat cu codul IBAN ";
        // line 331
        echo twig_escape_filter($this->env, (isset($context["iban"]) || array_key_exists("iban", $context) ? $context["iban"] : (function () { throw new RuntimeError('Variable "iban" does not exist.', 331, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"86\">
                <source>This value should be valid JSON.</source>
                <target>Această valoare trebuie să fie un JSON valid.</target>
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
        return "vendor/symfony/validator/Resources/translations/validators.ro.xlf";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  688 => 331,  684 => 330,  678 => 327,  674 => 326,  656 => 311,  652 => 310,  636 => 299,  630 => 298,  622 => 295,  616 => 294,  608 => 291,  602 => 290,  594 => 287,  588 => 286,  580 => 283,  574 => 282,  566 => 279,  560 => 278,  554 => 275,  550 => 274,  544 => 271,  540 => 270,  534 => 267,  530 => 266,  522 => 263,  516 => 262,  510 => 259,  506 => 258,  500 => 255,  496 => 254,  490 => 251,  486 => 250,  444 => 215,  438 => 214,  428 => 211,  422 => 210,  412 => 207,  406 => 206,  376 => 183,  370 => 182,  358 => 175,  352 => 174,  344 => 171,  338 => 170,  330 => 167,  324 => 166,  316 => 163,  310 => 162,  262 => 119,  256 => 118,  218 => 87,  212 => 86,  206 => 83,  202 => 82,  192 => 79,  186 => 78,  180 => 75,  176 => 74,  168 => 71,  162 => 70,  150 => 67,  140 => 66,  98 => 31,  92 => 30,  82 => 27,  76 => 26,  62 => 15,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\"?>
<xliff version=\"1.2\" xmlns=\"urn:oasis:names:tc:xliff:document:1.2\">
    <file source-language=\"en\" datatype=\"plaintext\" original=\"file.ext\">
        <body>
            <trans-unit id=\"1\">
                <source>This value should be false.</source>
                <target>Această valoare ar trebui să fie falsă (false).</target>
            </trans-unit>
            <trans-unit id=\"2\">
                <source>This value should be true.</source>
                <target>Această valoare ar trebui să fie adevărată (true).</target>
            </trans-unit>
            <trans-unit id=\"3\">
                <source>This value should be of type {{ type }}.</source>
                <target>Această valoare ar trebui să fie de tipul {{ type }}.</target>
            </trans-unit>
            <trans-unit id=\"4\">
                <source>This value should be blank.</source>
                <target>Această valoare ar trebui sa fie goală.</target>
            </trans-unit>
            <trans-unit id=\"5\">
                <source>The value you selected is not a valid choice.</source>
                <target>Valoarea selectată nu este o opțiune validă.</target>
            </trans-unit>
            <trans-unit id=\"6\">
                <source>You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.</source>
                <target>Trebuie să selectați cel puțin {{ limit }} opțiune.|Trebuie să selectați cel puțin {{ limit }} opțiuni.|Trebuie să selectați cel puțin {{ limit }} de opțiuni</target>
            </trans-unit>
            <trans-unit id=\"7\">
                <source>You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.</source>
                <target>Trebuie să selectați cel mult {{ limit }} opțiune.|Trebuie să selectați cel mult {{ limit }} opțiuni.|Trebuie să selectați cel mult {{ limit }} de opțiuni.</target>
            </trans-unit>
            <trans-unit id=\"8\">
                <source>One or more of the given values is invalid.</source>
                <target>Una sau mai multe dintre valorile furnizate sunt invalide.</target>
            </trans-unit>
            <trans-unit id=\"9\">
                <source>This field was not expected.</source>
                <target>Acest câmp nu era de aşteptat.</target>
            </trans-unit>
            <trans-unit id=\"10\">
                <source>This field is missing.</source>
                <target>Acest câmp este lipsă.</target>
            </trans-unit>
            <trans-unit id=\"11\">
                <source>This value is not a valid date.</source>
                <target>Această valoare nu reprezintă o dată validă.</target>
            </trans-unit>
            <trans-unit id=\"12\">
                <source>This value is not a valid datetime.</source>
                <target>Această valoare nu reprezintă o dată și oră validă.</target>
            </trans-unit>
            <trans-unit id=\"13\">
                <source>This value is not a valid email address.</source>
                <target>Această valoare nu reprezintă o adresă de e-mail validă.</target>
            </trans-unit>
            <trans-unit id=\"14\">
                <source>The file could not be found.</source>
                <target>Fișierul nu a putut fi găsit.</target>
            </trans-unit>
            <trans-unit id=\"15\">
                <source>The file is not readable.</source>
                <target>Fișierul nu poate fi citit.</target>
            </trans-unit>
            <trans-unit id=\"16\">
                <source>The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.</source>
                <target>Fișierul este prea mare ({{ size }} {{ suffix }}). Dimensiunea maximă permisă este {{ limit }} {{ suffix }}.</target>
            </trans-unit>
            <trans-unit id=\"17\">
                <source>The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.</source>
                <target>Tipul fișierului este invalid ({{ type }}). Tipurile permise de fișiere sunt ({{ types }}).</target>
            </trans-unit>
            <trans-unit id=\"18\">
                <source>This value should be {{ limit }} or less.</source>
                <target>Această valoare ar trebui să fie cel mult {{ limit }}.</target>
            </trans-unit>
            <trans-unit id=\"19\">
                <source>This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.</source>
                <target>Această valoare este prea lungă. Ar trebui să aibă maxim {{ limit }} caracter.|Această valoare este prea lungă. Ar trebui să aibă maxim {{ limit }} caractere.|Această valoare este prea lungă. Ar trebui să aibă maxim {{ limit }} de caractere.</target>
            </trans-unit>
            <trans-unit id=\"20\">
                <source>This value should be {{ limit }} or more.</source>
                <target>Această valoare ar trebui să fie cel puțin {{ limit }}.</target>
            </trans-unit>
            <trans-unit id=\"21\">
                <source>This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.</source>
                <target>Această valoare este prea scurtă. Ar trebui să aibă minim {{ limit }} caracter.|Această valoare este prea scurtă. Ar trebui să aibă minim {{ limit }} caractere.|Această valoare este prea scurtă. Ar trebui să aibă minim {{ limit }} de caractere.</target>
            </trans-unit>
            <trans-unit id=\"22\">
                <source>This value should not be blank.</source>
                <target>Această valoare nu ar trebui să fie goală.</target>
            </trans-unit>
            <trans-unit id=\"23\">
                <source>This value should not be null.</source>
                <target>Această valoare nu ar trebui să fie nulă (null).</target>
            </trans-unit>
            <trans-unit id=\"24\">
                <source>This value should be null.</source>
                <target>Această valoare ar trebui să fie nulă (null).</target>
            </trans-unit>
            <trans-unit id=\"25\">
                <source>This value is not valid.</source>
                <target>Această valoare nu este validă.</target>
            </trans-unit>
            <trans-unit id=\"26\">
                <source>This value is not a valid time.</source>
                <target>Această valoare nu reprezintă o oră validă.</target>
            </trans-unit>
            <trans-unit id=\"27\">
                <source>This value is not a valid URL.</source>
                <target>Această valoare nu reprezintă un URL (link) valid.</target>
            </trans-unit>
            <trans-unit id=\"31\">
                <source>The two values should be equal.</source>
                <target>Cele două valori ar trebui să fie egale.</target>
            </trans-unit>
            <trans-unit id=\"32\">
                <source>The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.</source>
                <target>Fișierul este prea mare. Mărimea maximă permisă este {{ limit }} {{ suffix }}.</target>
            </trans-unit>
            <trans-unit id=\"33\">
                <source>The file is too large.</source>
                <target>Fișierul este prea mare.</target>
            </trans-unit>
            <trans-unit id=\"34\">
                <source>The file could not be uploaded.</source>
                <target>Fișierul nu a putut fi încărcat.</target>
            </trans-unit>
            <trans-unit id=\"35\">
                <source>This value should be a valid number.</source>
                <target>Această valoare nu reprezintă un număr valid.</target>
            </trans-unit>
            <trans-unit id=\"36\">
                <source>This file is not a valid image.</source>
                <target>Acest fișier nu este o imagine validă.</target>
            </trans-unit>
            <trans-unit id=\"37\">
                <source>This is not a valid IP address.</source>
                <target>Această valoare nu este o adresă IP validă.</target>
            </trans-unit>
            <trans-unit id=\"38\">
                <source>This value is not a valid language.</source>
                <target>Această valoare nu reprezintă o limbă corectă.</target>
            </trans-unit>
            <trans-unit id=\"39\">
                <source>This value is not a valid locale.</source>
                <target>Această valoare nu reprezintă un dialect (o limbă) corect.</target>
            </trans-unit>
            <trans-unit id=\"40\">
                <source>This value is not a valid country.</source>
                <target>Această valoare nu este o țară validă.</target>
            </trans-unit>
            <trans-unit id=\"41\">
                <source>This value is already used.</source>
                <target>Această valoare este folosită deja.</target>
            </trans-unit>
            <trans-unit id=\"42\">
                <source>The size of the image could not be detected.</source>
                <target>Mărimea imaginii nu a putut fi detectată.</target>
            </trans-unit>
            <trans-unit id=\"43\">
                <source>The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.</source>
                <target>Lățimea imaginii este prea mare ({{ width }}px). Lățimea maximă permisă este de {{ max_width }}px.</target>
            </trans-unit>
            <trans-unit id=\"44\">
                <source>The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.</source>
                <target>Lățimea imaginii este prea mică ({{ width }}px). Lățimea minimă permisă este de {{ min_width }}px.</target>
            </trans-unit>
            <trans-unit id=\"45\">
                <source>The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.</source>
                <target>Înălțimea imaginii este prea mare ({{ height }}px). Înălțimea maximă permisă este de {{ max_height }}px.</target>
            </trans-unit>
            <trans-unit id=\"46\">
                <source>The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.</source>
                <target>Înălțimea imaginii este prea mică ({{ height }}px). Înălțimea minimă permisă este de {{ min_height }}px.</target>
            </trans-unit>
            <trans-unit id=\"47\">
                <source>This value should be the user's current password.</source>
                <target>Această valoare trebuie să fie parola curentă a utilizatorului.</target>
            </trans-unit>
            <trans-unit id=\"48\">
                <source>This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.</source>
                <target>Această valoare trebuie să conțină exact {{ limit }} caracter.|Această valoare trebuie să conțină exact {{ limit }} caractere.|Această valoare trebuie să conțină exact {{ limit }} de caractere.</target>
            </trans-unit>
            <trans-unit id=\"49\">
                <source>The file was only partially uploaded.</source>
                <target>Fișierul a fost încărcat parțial.</target>
            </trans-unit>
            <trans-unit id=\"50\">
                <source>No file was uploaded.</source>
                <target>Nu a fost încărcat nici un fișier.</target>
            </trans-unit>
            <trans-unit id=\"51\">
                <source>No temporary folder was configured in php.ini.</source>
                <target>Nu este configurat nici un director temporar in php.ini.</target>
            </trans-unit>
            <trans-unit id=\"52\">
                <source>Cannot write temporary file to disk.</source>
                <target>Nu a fost posibilă scrierea fișierului temporar pe disk.</target>
            </trans-unit>
            <trans-unit id=\"53\">
                <source>A PHP extension caused the upload to fail.</source>
                <target>O extensie PHP a prevenit încărcarea cu succes a fișierului.</target>
            </trans-unit>
            <trans-unit id=\"54\">
                <source>This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.</source>
                <target>Această colecție trebuie să conțină cel puțin {{ limit }} element.|Această colecție trebuie să conțină cel puțin {{ limit }} elemente.|Această colecție trebuie să conțină cel puțin {{ limit }} de elemente.</target>
            </trans-unit>
            <trans-unit id=\"55\">
                <source>This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.</source>
                <target>Această colecție trebuie să conțină cel mult {{ limit }} element.|Această colecție trebuie să conțină cel mult {{ limit }} elemente.|Această colecție trebuie să conțină cel mult {{ limit }} de elemente.</target>
            </trans-unit>
            <trans-unit id=\"56\">
                <source>This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.</source>
                <target>Această colecție trebuie să conțină {{ limit }} element.|Această colecție trebuie să conțină {{ limit }} elemente.|Această colecție trebuie să conțină {{ limit }} de elemente.</target>
            </trans-unit>
            <trans-unit id=\"57\">
                <source>Invalid card number.</source>
                <target>Numărul card invalid.</target>
            </trans-unit>
            <trans-unit id=\"58\">
                <source>Unsupported card type or invalid card number.</source>
                <target>Tipul sau numărul cardului nu sunt valide.</target>
            </trans-unit>
            <trans-unit id=\"59\">
                <source>This is not a valid International Bank Account Number (IBAN).</source>
                <target>Acesta nu este un cod IBAN (International Bank Account Number) valid.</target>
            </trans-unit>
            <trans-unit id=\"60\">
                <source>This value is not a valid ISBN-10.</source>
                <target>Această valoare nu este un cod ISBN-10 valid.</target>
            </trans-unit>
            <trans-unit id=\"61\">
                <source>This value is not a valid ISBN-13.</source>
                <target>Această valoare nu este un cod ISBN-13 valid.</target>
            </trans-unit>
            <trans-unit id=\"62\">
                <source>This value is neither a valid ISBN-10 nor a valid ISBN-13.</source>
                <target>Această valoare nu este un cod ISBN-10 sau ISBN-13 valid.</target>
            </trans-unit>
            <trans-unit id=\"63\">
                <source>This value is not a valid ISSN.</source>
                <target>Această valoare nu este un cod ISSN valid.</target>
            </trans-unit>
            <trans-unit id=\"64\">
                <source>This value is not a valid currency.</source>
                <target>Această valoare nu este o monedă validă.</target>
            </trans-unit>
            <trans-unit id=\"65\">
                <source>This value should be equal to {{ compared_value }}.</source>
                <target>Această valoare trebuie să fie egală cu {{ compared_value }}.</target>
            </trans-unit>
            <trans-unit id=\"66\">
                <source>This value should be greater than {{ compared_value }}.</source>
                <target>Această valoare trebuie să fie mai mare de {{ compared_value }}.</target>
            </trans-unit>
            <trans-unit id=\"67\">
                <source>This value should be greater than or equal to {{ compared_value }}.</source>
                <target>Această valoare trebuie să fie mai mare sau egală cu {{ compared_value }}.</target>
            </trans-unit>
            <trans-unit id=\"68\">
                <source>This value should be identical to {{ compared_value_type }} {{ compared_value }}.</source>
                <target>Această valoare trebuie identică cu {{ compared_value_type }} {{ compared_value }}.</target>
            </trans-unit>
            <trans-unit id=\"69\">
                <source>This value should be less than {{ compared_value }}.</source>
                <target>Această valoare trebuie să fie mai mică de {{ compared_value }}.</target>
            </trans-unit>
            <trans-unit id=\"70\">
                <source>This value should be less than or equal to {{ compared_value }}.</source>
                <target>Această valoare trebuie să fie mai mică sau egală cu {{ compared_value }}.</target>
            </trans-unit>
            <trans-unit id=\"71\">
                <source>This value should not be equal to {{ compared_value }}.</source>
                <target>Această valoare nu trebuie să fie egală cu {{ compared_value }}.</target>
            </trans-unit>
            <trans-unit id=\"72\">
                <source>This value should not be identical to {{ compared_value_type }} {{ compared_value }}.</source>
                <target>Această valoare nu trebuie să fie identică cu {{ compared_value_type }} {{ compared_value }}.</target>
            </trans-unit>
            <trans-unit id=\"73\">
                <source>The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.</source>
                <target>Raportul imaginii este prea mare ({{ ratio }}). Raportul maxim permis este {{ max_ratio }}.</target>
            </trans-unit>
            <trans-unit id=\"74\">
                <source>The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.</source>
                <target>Raportul imaginii este prea mic ({{ ratio }}). Raportul minim permis este {{ min_ratio }}.</target>
            </trans-unit>
            <trans-unit id=\"75\">
                <source>The image is square ({{ width }}x{{ height }}px). Square images are not allowed.</source>
                <target>Imaginea este un pătrat ({{ width }}x{{ height }}px). Imaginile pătrat nu sunt permise.</target>
            </trans-unit>
            <trans-unit id=\"76\">
                <source>The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.</source>
                <target>Imaginea are orientarea peisaj ({{ width }}x{{ height }}px). Imaginile cu orientare peisaj nu sunt permise.</target>
            </trans-unit>
            <trans-unit id=\"77\">
                <source>The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.</source>
                <target>Imaginea are orientarea portret ({{ width }}x{{ height }}px). Imaginile cu orientare portret nu sunt permise.</target>
            </trans-unit>
            <trans-unit id=\"78\">
                <source>An empty file is not allowed.</source>
                <target>Nu se permite un fișier gol.</target>
            </trans-unit>
            <trans-unit id=\"79\">
                <source>The host could not be resolved.</source>
                <target>Numele host nu a putut fi rezolvat către o adresă IP.</target>
            </trans-unit>
            <trans-unit id=\"80\">
                <source>This value does not match the expected {{ charset }} charset.</source>
                <target>Această valoare nu corespunde setului de caractere {{ charset }} așteptat.</target>
            </trans-unit>
            <trans-unit id=\"81\">
                <source>This is not a valid Business Identifier Code (BIC).</source>
                <target>Codul BIC (Business Identifier Code) nu este valid.</target>
            </trans-unit>
            <trans-unit id=\"82\">
                <source>Error</source>
                <target>Eroare</target>
            </trans-unit>
            <trans-unit id=\"83\">
                <source>This is not a valid UUID.</source>
                <target>Identificatorul universal unic (UUID) nu este valid.</target>
            </trans-unit>
            <trans-unit id=\"84\">
                <source>This value should be a multiple of {{ compared_value }}.</source>
                <target>Această valoare trebuie să fie un multiplu de {{ compared_value }}.</target>
            </trans-unit>
            <trans-unit id=\"85\">
                <source>This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.</source>
                <target>Codul BIC (Business Identifier Code) nu este asociat cu codul IBAN {{ iban }}.</target>
            </trans-unit>
            <trans-unit id=\"86\">
                <source>This value should be valid JSON.</source>
                <target>Această valoare trebuie să fie un JSON valid.</target>
            </trans-unit>
        </body>
    </file>
</xliff>
", "vendor/symfony/validator/Resources/translations/validators.ro.xlf", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Resources/translations/validators.ro.xlf");
    }
}
