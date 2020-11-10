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

/* var/cache/dev/translations/catalogue.hu.52lf549.php */
class __TwigTemplate_e0ab619cd8079ca4757e8c7a7097000b4c74fc98bc84392a82e0dafd74835899 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/translations/catalogue.hu.52lf549.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/translations/catalogue.hu.52lf549.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\Translation\\MessageCatalogue;

\$catalogue = new MessageCatalogue('hu', array (
  'validators' => 
  array (
    'This value should be false.' => 'Ennek az értéknek hamisnak kell lennie.',
    'This value should be true.' => 'Ennek az értéknek igaznak kell lennie.',
    'This value should be of type ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 10, $this->source); })()), "html", null, true);
        echo ".' => 'Ennek az értéknek ";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " típusúnak kell lennie.',
    'This value should be blank.' => 'Ennek az értéknek üresnek kell lennie.',
    'The value you selected is not a valid choice.' => 'A választott érték érvénytelen.',
    'You must select at least ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " choice.|You must select at least ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " choices.' => 'Legalább ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " értéket kell kiválasztani.|Legalább ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " értéket kell kiválasztani.',
    'You must select at most ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " choice.|You must select at most ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " choices.' => 'Legfeljebb ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " értéket lehet kiválasztani.|Legfeljebb ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " értéket lehet kiválasztani.',
    'One or more of the given values is invalid.' => 'A megadott értékek közül legalább egy érvénytelen.',
    'This field was not expected.' => 'Nem várt mező.',
    'This field is missing.' => 'Ez a mező hiányzik.',
    'This value is not a valid date.' => 'Ez az érték nem egy érvényes dátum.',
    'This value is not a valid datetime.' => 'Ez az érték nem egy érvényes időpont.',
    'This value is not a valid email address.' => 'Ez az érték nem egy érvényes e-mail cím.',
    'The file could not be found.' => 'A fájl nem található.',
    'The file is not readable.' => 'A fájl nem olvasható.',
    'The file is too large (";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "). Allowed maximum size is ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 23, $this->source); })()), "html", null, true);
        echo ".' => 'A fájl túl nagy (";
        echo twig_escape_filter($this->env, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "). A legnagyobb megengedett méret ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 23, $this->source); })()), "html", null, true);
        echo ".',
    'The mime type of the file is invalid (";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "). Allowed mime types are ";
        echo twig_escape_filter($this->env, (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 24, $this->source); })()), "html", null, true);
        echo ".' => 'A fájl MIME típusa érvénytelen (";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "). Az engedélyezett MIME típusok: ";
        echo twig_escape_filter($this->env, (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 24, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 25, $this->source); })()), "html", null, true);
        echo " or less.' => 'Ez az érték legfeljebb ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 25, $this->source); })()), "html", null, true);
        echo " lehet.',
    'This value is too long. It should have ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " character or less.|This value is too long. It should have ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " characters or less.' => 'Ez az érték túl hosszú. Legfeljebb ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " karaktert tartalmazhat.|Ez az érték túl hosszú. Legfeljebb ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " karaktert tartalmazhat.',
    'This value should be ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 27, $this->source); })()), "html", null, true);
        echo " or more.' => 'Ez az érték legalább ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 27, $this->source); })()), "html", null, true);
        echo " kell, hogy legyen.',
    'This value is too short. It should have ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 28, $this->source); })()), "html", null, true);
        echo " character or more.|This value is too short. It should have ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 28, $this->source); })()), "html", null, true);
        echo " characters or more.' => 'Ez az érték túl rövid. Legalább ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 28, $this->source); })()), "html", null, true);
        echo " karaktert kell tartalmaznia.|Ez az érték túl rövid. Legalább ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 28, $this->source); })()), "html", null, true);
        echo " karaktert kell tartalmaznia.',
    'This value should not be blank.' => 'Ez az érték nem lehet üres.',
    'This value should not be null.' => 'Ez az érték nem lehet null.',
    'This value should be null.' => 'Ennek az értéknek nullnak kell lennie.',
    'This value is not valid.' => 'Ez az érték nem érvényes.',
    'This value is not a valid time.' => 'Ez az érték nem egy érvényes időpont.',
    'This value is not a valid URL.' => 'Ez az érték nem egy érvényes URL.',
    'The two values should be equal.' => 'A két értéknek azonosnak kell lennie.',
    'The file is too large. Allowed maximum size is ";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 36, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 36, $this->source); })()), "html", null, true);
        echo ".' => 'A fájl túl nagy. A megengedett maximális méret: ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 36, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 36, $this->source); })()), "html", null, true);
        echo ".',
    'The file is too large.' => 'A fájl túl nagy.',
    'The file could not be uploaded.' => 'A fájl nem tölthető fel.',
    'This value should be a valid number.' => 'Ennek az értéknek érvényes számnak kell lennie.',
    'This file is not a valid image.' => 'Ez a fájl nem egy érvényes kép.',
    'This is not a valid IP address.' => 'Ez az érték nem egy érvényes IP cím.',
    'This value is not a valid language.' => 'Ez az érték nem egy érvényes nyelv.',
    'This value is not a valid locale.' => 'Ez az érték nem egy érvényes területi beállítás.',
    'This value is not a valid country.' => 'Ez az érték nem egy érvényes ország.',
    'This value is already used.' => 'Ez az érték már használatban van.',
    'The size of the image could not be detected.' => 'A kép méretét nem lehet megállapítani.',
    'The image width is too big (";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "px). Allowed maximum width is ";
        echo twig_escape_filter($this->env, (isset($context["max_width"]) || array_key_exists("max_width", $context) ? $context["max_width"] : (function () { throw new RuntimeError('Variable "max_width" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "px.' => 'A kép szélessége túl nagy (";
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "px). A megengedett legnagyobb szélesség ";
        echo twig_escape_filter($this->env, (isset($context["max_width"]) || array_key_exists("max_width", $context) ? $context["max_width"] : (function () { throw new RuntimeError('Variable "max_width" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "px.',
    'The image width is too small (";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "px). Minimum width expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_width"]) || array_key_exists("min_width", $context) ? $context["min_width"] : (function () { throw new RuntimeError('Variable "min_width" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "px.' => 'A kép szélessége túl kicsi (";
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "px). Az elvárt legkisebb szélesség ";
        echo twig_escape_filter($this->env, (isset($context["min_width"]) || array_key_exists("min_width", $context) ? $context["min_width"] : (function () { throw new RuntimeError('Variable "min_width" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "px.',
    'The image height is too big (";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "px). Allowed maximum height is ";
        echo twig_escape_filter($this->env, (isset($context["max_height"]) || array_key_exists("max_height", $context) ? $context["max_height"] : (function () { throw new RuntimeError('Variable "max_height" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "px.' => 'A kép magassága túl nagy (";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "px). A megengedett legnagyobb magasság ";
        echo twig_escape_filter($this->env, (isset($context["max_height"]) || array_key_exists("max_height", $context) ? $context["max_height"] : (function () { throw new RuntimeError('Variable "max_height" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "px.',
    'The image height is too small (";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "px). Minimum height expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_height"]) || array_key_exists("min_height", $context) ? $context["min_height"] : (function () { throw new RuntimeError('Variable "min_height" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "px.' => 'A kép magassága túl kicsi (";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "px). Az elvárt legkisebb magasság ";
        echo twig_escape_filter($this->env, (isset($context["min_height"]) || array_key_exists("min_height", $context) ? $context["min_height"] : (function () { throw new RuntimeError('Variable "min_height" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "px.',
    'This value should be the user\\'s current password.' => 'Ez az érték a felhasználó jelenlegi jelszavával kell megegyezzen.',
    'This value should have exactly ";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 52, $this->source); })()), "html", null, true);
        echo " character.|This value should have exactly ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 52, $this->source); })()), "html", null, true);
        echo " characters.' => 'Ennek az értéknek pontosan ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 52, $this->source); })()), "html", null, true);
        echo " karaktert kell tartalmaznia.|Ennek az értéknek pontosan ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 52, $this->source); })()), "html", null, true);
        echo " karaktert kell tartalmaznia.',
    'The file was only partially uploaded.' => 'A fájl csak részben lett feltöltve.',
    'No file was uploaded.' => 'Nem lett fájl feltöltve.',
    'No temporary folder was configured in php.ini.' => 'Nincs ideiglenes könyvtár beállítva a php.ini-ben.',
    'Cannot write temporary file to disk.' => 'Az ideiglenes fájl nem írható a lemezre.',
    'A PHP extension caused the upload to fail.' => 'Egy PHP bővítmény miatt a feltöltés nem sikerült.',
    'This collection should contain ";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 58, $this->source); })()), "html", null, true);
        echo " element or more.|This collection should contain ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 58, $this->source); })()), "html", null, true);
        echo " elements or more.' => 'Ennek a gyűjteménynek legalább ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 58, $this->source); })()), "html", null, true);
        echo " elemet kell tartalmaznia.|Ennek a gyűjteménynek legalább ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 58, $this->source); })()), "html", null, true);
        echo " elemet kell tartalmaznia.',
    'This collection should contain ";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 59, $this->source); })()), "html", null, true);
        echo " element or less.|This collection should contain ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 59, $this->source); })()), "html", null, true);
        echo " elements or less.' => 'Ez a gyűjtemény legfeljebb ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 59, $this->source); })()), "html", null, true);
        echo " elemet tartalmazhat.|Ez a gyűjtemény legfeljebb ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 59, $this->source); })()), "html", null, true);
        echo " elemet tartalmazhat.',
    'This collection should contain exactly ";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 60, $this->source); })()), "html", null, true);
        echo " element.|This collection should contain exactly ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 60, $this->source); })()), "html", null, true);
        echo " elements.' => 'Ennek a gyűjteménynek pontosan ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 60, $this->source); })()), "html", null, true);
        echo " elemet kell tartalmaznia.|Ennek a gyűjteménynek pontosan ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 60, $this->source); })()), "html", null, true);
        echo " elemet kell tartalmaznia.',
    'Invalid card number.' => 'Érvénytelen kártyaszám.',
    'Unsupported card type or invalid card number.' => 'Nem támogatott kártyatípus vagy érvénytelen kártyaszám.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Érvénytelen nemzetközi bankszámlaszám (IBAN).',
    'This value is not a valid ISBN-10.' => 'Ez az érték nem egy érvényes ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Ez az érték nem egy érvényes ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Ez az érték nem egy érvényes ISBN-10 vagy ISBN-13.',
    'This value is not a valid ISSN.' => 'Ez az érték nem egy érvényes ISSN.',
    'This value is not a valid currency.' => 'Ez az érték nem egy érvényes pénznem.',
    'This value should be equal to ";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 69, $this->source); })()), "html", null, true);
        echo ".' => 'Ez az érték legyen ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 69, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be greater than ";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 70, $this->source); })()), "html", null, true);
        echo ".' => 'Ez az érték nagyobb legyen, mint ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 70, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be greater than or equal to ";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 71, $this->source); })()), "html", null, true);
        echo ".' => 'Ez az érték nagyobb vagy egyenlő legyen, mint ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 71, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be identical to ";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 72, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 72, $this->source); })()), "html", null, true);
        echo ".' => 'Ez az érték ugyanolyan legyen, mint ";
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 72, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 72, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be less than ";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 73, $this->source); })()), "html", null, true);
        echo ".' => 'Ez az érték kisebb legyen, mint ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 73, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be less than or equal to ";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 74, $this->source); })()), "html", null, true);
        echo ".' => 'Ez az érték kisebb vagy egyenlő legyen, mint ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 74, $this->source); })()), "html", null, true);
        echo ".',
    'This value should not be equal to ";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 75, $this->source); })()), "html", null, true);
        echo ".' => 'Ez az érték ne legyen ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 75, $this->source); })()), "html", null, true);
        echo ".',
    'This value should not be identical to ";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 76, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 76, $this->source); })()), "html", null, true);
        echo ".' => 'Ez az érték ne legyen ugyanolyan, mint ";
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 76, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 76, $this->source); })()), "html", null, true);
        echo ".',
    'The image ratio is too big (";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "). Allowed maximum ratio is ";
        echo twig_escape_filter($this->env, (isset($context["max_ratio"]) || array_key_exists("max_ratio", $context) ? $context["max_ratio"] : (function () { throw new RuntimeError('Variable "max_ratio" does not exist.', 77, $this->source); })()), "html", null, true);
        echo ".' => 'A képarány túl nagy (";
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "). A megengedett legnagyobb képarány ";
        echo twig_escape_filter($this->env, (isset($context["max_ratio"]) || array_key_exists("max_ratio", $context) ? $context["max_ratio"] : (function () { throw new RuntimeError('Variable "max_ratio" does not exist.', 77, $this->source); })()), "html", null, true);
        echo ".',
    'The image ratio is too small (";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 78, $this->source); })()), "html", null, true);
        echo "). Minimum ratio expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_ratio"]) || array_key_exists("min_ratio", $context) ? $context["min_ratio"] : (function () { throw new RuntimeError('Variable "min_ratio" does not exist.', 78, $this->source); })()), "html", null, true);
        echo ".' => 'A képarány túl kicsi (";
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 78, $this->source); })()), "html", null, true);
        echo "). A megengedett legkisebb képarány ";
        echo twig_escape_filter($this->env, (isset($context["min_ratio"]) || array_key_exists("min_ratio", $context) ? $context["min_ratio"] : (function () { throw new RuntimeError('Variable "min_ratio" does not exist.', 78, $this->source); })()), "html", null, true);
        echo ".',
    'The image is square (";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "px). Square images are not allowed.' => 'A kép négyzet alakú (";
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "px). A négyzet alakú képek nem engedélyezettek.',
    'The image is landscape oriented (";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "px). Landscape oriented images are not allowed.' => 'A kép fekvő tájolású (";
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "px). A fekvő tájolású képek nem engedélyezettek.',
    'The image is portrait oriented (";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 81, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 81, $this->source); })()), "html", null, true);
        echo "px). Portrait oriented images are not allowed.' => 'A kép álló tájolású (";
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 81, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 81, $this->source); })()), "html", null, true);
        echo "px). Az álló tájolású képek nem engedélyezettek.',
    'An empty file is not allowed.' => 'Üres fájl nem megengedett.',
    'The host could not be resolved.' => 'Az állomásnevet nem lehet feloldani.',
    'This value does not match the expected ";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["charset"]) || array_key_exists("charset", $context) ? $context["charset"] : (function () { throw new RuntimeError('Variable "charset" does not exist.', 84, $this->source); })()), "html", null, true);
        echo " charset.' => 'Ez az érték nem az elvárt ";
        echo twig_escape_filter($this->env, (isset($context["charset"]) || array_key_exists("charset", $context) ? $context["charset"] : (function () { throw new RuntimeError('Variable "charset" does not exist.', 84, $this->source); })()), "html", null, true);
        echo " karakterkódolást használja.',
    'This is not a valid Business Identifier Code (BIC).' => 'Érvénytelen nemzetközi bankazonosító kód (BIC/SWIFT).',
    'Error' => 'Hiba',
    'This is not a valid UUID.' => 'Érvénytelen egyedi azonosító (UUID).',
    'This value should be a multiple of ";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 88, $this->source); })()), "html", null, true);
        echo ".' => 'Ennek az értéknek oszthatónak kell lennie a következővel: ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 88, $this->source); })()), "html", null, true);
        echo "',
    'This Business Identifier Code (BIC) is not associated with IBAN ";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["iban"]) || array_key_exists("iban", $context) ? $context["iban"] : (function () { throw new RuntimeError('Variable "iban" does not exist.', 89, $this->source); })()), "html", null, true);
        echo ".' => 'Ez a Bankazonosító kód (BIC) nem kapcsolódik az IBAN kódhoz (";
        echo twig_escape_filter($this->env, (isset($context["iban"]) || array_key_exists("iban", $context) ? $context["iban"] : (function () { throw new RuntimeError('Variable "iban" does not exist.', 89, $this->source); })()), "html", null, true);
        echo ").',
    'This value should be valid JSON.' => 'Ez az érték érvényes JSON kell, hogy legyen.',
    'This value should be positive.' => 'Ennek az értéknek pozitívnak kell lennie.',
    'This value should be either positive or zero.' => 'Ennek az értéknek pozitívnak vagy nullának kell lennie.',
    'This value should be negative.' => 'Ennek az értéknek negatívnak kell lennie.',
    'This value should be either negative or zero.' => 'Ennek az értéknek negatívnak vagy nullának kell lennie.',
    'This collection should contain only unique elements.' => 'Ez a gyűjtemény csak egyedi elemeket tartalmazhat.',
    'This value is not a valid timezone.' => 'Ez az érték nem egy érvényes időzóna.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Ez a jelszó korábban egy adatvédelmi incidens során illetéktelenek kezébe került, így nem használható. Kérjük, használjon másik jelszót.',
    'This value should be between ";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 98, $this->source); })()), "html", null, true);
        echo " and ";
        echo twig_escape_filter($this->env, (isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 98, $this->source); })()), "html", null, true);
        echo ".' => 'Ennek az értéknek ";
        echo twig_escape_filter($this->env, (isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 98, $this->source); })()), "html", null, true);
        echo " és ";
        echo twig_escape_filter($this->env, (isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 98, $this->source); })()), "html", null, true);
        echo " között kell lennie.',
    'This form should not contain extra fields.' => 'Ez a mezőcsoport nem tartalmazhat extra mezőket.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'A feltöltött fájl túl nagy. Kérem, próbáljon egy kisebb fájlt feltölteni.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Érvénytelen CSRF token. Kérem, próbálja újra elküldeni az űrlapot.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Hitelesítési hiba lépett fel.',
    'Authentication credentials could not be found.' => 'Nem találhatók hitelesítési információk.',
    'Authentication request could not be processed due to a system problem.' => 'A hitelesítési kérést rendszerhiba miatt nem lehet feldolgozni.',
    'Invalid credentials.' => 'Érvénytelen hitelesítési információk.',
    'Cookie has already been used by someone else.' => 'Ezt a sütit valaki más már felhasználta.',
    'Not privileged to request the resource.' => 'Nem rendelkezik az erőforrás eléréséhez szükséges jogosultsággal.',
    'Invalid CSRF token.' => 'Érvénytelen CSRF token.',
    'No authentication provider found to support the authentication token.' => 'Nem található a hitelesítési tokent támogató hitelesítési szolgáltatás.',
    'No session available, it either timed out or cookies are not enabled.' => 'Munkamenet nem áll rendelkezésre, túllépte az időkeretet vagy a sütik le vannak tiltva.',
    'No token could be found.' => 'Nem található token.',
    'Username could not be found.' => 'A felhasználónév nem található.',
    'Account has expired.' => 'A fiók lejárt.',
    'Credentials have expired.' => 'A hitelesítési információk lejártak.',
    'Account is disabled.' => 'Felfüggesztett fiók.',
    'Account is locked.' => 'Zárolt fiók.',
  ),
));

\$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type ";
        // line 128
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 128, $this->source); })()), "html", null, true);
        echo ".' => 'This value should be of type ";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 128, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least ";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 131, $this->source); })()), "html", null, true);
        echo " choice.|You must select at least ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 131, $this->source); })()), "html", null, true);
        echo " choices.' => 'You must select at least ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 131, $this->source); })()), "html", null, true);
        echo " choice.|You must select at least ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 131, $this->source); })()), "html", null, true);
        echo " choices.',
    'You must select at most ";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 132, $this->source); })()), "html", null, true);
        echo " choice.|You must select at most ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 132, $this->source); })()), "html", null, true);
        echo " choices.' => 'You must select at most ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 132, $this->source); })()), "html", null, true);
        echo " choice.|You must select at most ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 132, $this->source); })()), "html", null, true);
        echo " choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large (";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 141, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 141, $this->source); })()), "html", null, true);
        echo "). Allowed maximum size is ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 141, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 141, $this->source); })()), "html", null, true);
        echo ".' => 'The file is too large (";
        echo twig_escape_filter($this->env, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 141, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 141, $this->source); })()), "html", null, true);
        echo "). Allowed maximum size is ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 141, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 141, $this->source); })()), "html", null, true);
        echo ".',
    'The mime type of the file is invalid (";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 142, $this->source); })()), "html", null, true);
        echo "). Allowed mime types are ";
        echo twig_escape_filter($this->env, (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 142, $this->source); })()), "html", null, true);
        echo ".' => 'The mime type of the file is invalid (";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 142, $this->source); })()), "html", null, true);
        echo "). Allowed mime types are ";
        echo twig_escape_filter($this->env, (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 142, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be ";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 143, $this->source); })()), "html", null, true);
        echo " or less.' => 'This value should be ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 143, $this->source); })()), "html", null, true);
        echo " or less.',
    'This value is too long. It should have ";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 144, $this->source); })()), "html", null, true);
        echo " character or less.|This value is too long. It should have ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 144, $this->source); })()), "html", null, true);
        echo " characters or less.' => 'This value is too long. It should have ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 144, $this->source); })()), "html", null, true);
        echo " character or less.|This value is too long. It should have ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 144, $this->source); })()), "html", null, true);
        echo " characters or less.',
    'This value should be ";
        // line 145
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 145, $this->source); })()), "html", null, true);
        echo " or more.' => 'This value should be ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 145, $this->source); })()), "html", null, true);
        echo " or more.',
    'This value is too short. It should have ";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 146, $this->source); })()), "html", null, true);
        echo " character or more.|This value is too short. It should have ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 146, $this->source); })()), "html", null, true);
        echo " characters or more.' => 'This value is too short. It should have ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 146, $this->source); })()), "html", null, true);
        echo " character or more.|This value is too short. It should have ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 146, $this->source); })()), "html", null, true);
        echo " characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is ";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 154, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 154, $this->source); })()), "html", null, true);
        echo ".' => 'The file is too large. Allowed maximum size is ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 154, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 154, $this->source); })()), "html", null, true);
        echo ".',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big (";
        // line 165
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 165, $this->source); })()), "html", null, true);
        echo "px). Allowed maximum width is ";
        echo twig_escape_filter($this->env, (isset($context["max_width"]) || array_key_exists("max_width", $context) ? $context["max_width"] : (function () { throw new RuntimeError('Variable "max_width" does not exist.', 165, $this->source); })()), "html", null, true);
        echo "px.' => 'The image width is too big (";
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 165, $this->source); })()), "html", null, true);
        echo "px). Allowed maximum width is ";
        echo twig_escape_filter($this->env, (isset($context["max_width"]) || array_key_exists("max_width", $context) ? $context["max_width"] : (function () { throw new RuntimeError('Variable "max_width" does not exist.', 165, $this->source); })()), "html", null, true);
        echo "px.',
    'The image width is too small (";
        // line 166
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 166, $this->source); })()), "html", null, true);
        echo "px). Minimum width expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_width"]) || array_key_exists("min_width", $context) ? $context["min_width"] : (function () { throw new RuntimeError('Variable "min_width" does not exist.', 166, $this->source); })()), "html", null, true);
        echo "px.' => 'The image width is too small (";
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 166, $this->source); })()), "html", null, true);
        echo "px). Minimum width expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_width"]) || array_key_exists("min_width", $context) ? $context["min_width"] : (function () { throw new RuntimeError('Variable "min_width" does not exist.', 166, $this->source); })()), "html", null, true);
        echo "px.',
    'The image height is too big (";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 167, $this->source); })()), "html", null, true);
        echo "px). Allowed maximum height is ";
        echo twig_escape_filter($this->env, (isset($context["max_height"]) || array_key_exists("max_height", $context) ? $context["max_height"] : (function () { throw new RuntimeError('Variable "max_height" does not exist.', 167, $this->source); })()), "html", null, true);
        echo "px.' => 'The image height is too big (";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 167, $this->source); })()), "html", null, true);
        echo "px). Allowed maximum height is ";
        echo twig_escape_filter($this->env, (isset($context["max_height"]) || array_key_exists("max_height", $context) ? $context["max_height"] : (function () { throw new RuntimeError('Variable "max_height" does not exist.', 167, $this->source); })()), "html", null, true);
        echo "px.',
    'The image height is too small (";
        // line 168
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 168, $this->source); })()), "html", null, true);
        echo "px). Minimum height expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_height"]) || array_key_exists("min_height", $context) ? $context["min_height"] : (function () { throw new RuntimeError('Variable "min_height" does not exist.', 168, $this->source); })()), "html", null, true);
        echo "px.' => 'The image height is too small (";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 168, $this->source); })()), "html", null, true);
        echo "px). Minimum height expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_height"]) || array_key_exists("min_height", $context) ? $context["min_height"] : (function () { throw new RuntimeError('Variable "min_height" does not exist.', 168, $this->source); })()), "html", null, true);
        echo "px.',
    'This value should be the user\\'s current password.' => 'This value should be the user\\'s current password.',
    'This value should have exactly ";
        // line 170
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 170, $this->source); })()), "html", null, true);
        echo " character.|This value should have exactly ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 170, $this->source); })()), "html", null, true);
        echo " characters.' => 'This value should have exactly ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 170, $this->source); })()), "html", null, true);
        echo " character.|This value should have exactly ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 170, $this->source); })()), "html", null, true);
        echo " characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain ";
        // line 176
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 176, $this->source); })()), "html", null, true);
        echo " element or more.|This collection should contain ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 176, $this->source); })()), "html", null, true);
        echo " elements or more.' => 'This collection should contain ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 176, $this->source); })()), "html", null, true);
        echo " element or more.|This collection should contain ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 176, $this->source); })()), "html", null, true);
        echo " elements or more.',
    'This collection should contain ";
        // line 177
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 177, $this->source); })()), "html", null, true);
        echo " element or less.|This collection should contain ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 177, $this->source); })()), "html", null, true);
        echo " elements or less.' => 'This collection should contain ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 177, $this->source); })()), "html", null, true);
        echo " element or less.|This collection should contain ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 177, $this->source); })()), "html", null, true);
        echo " elements or less.',
    'This collection should contain exactly ";
        // line 178
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 178, $this->source); })()), "html", null, true);
        echo " element.|This collection should contain exactly ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 178, $this->source); })()), "html", null, true);
        echo " elements.' => 'This collection should contain exactly ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 178, $this->source); })()), "html", null, true);
        echo " element.|This collection should contain exactly ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 178, $this->source); })()), "html", null, true);
        echo " elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to ";
        // line 187
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 187, $this->source); })()), "html", null, true);
        echo ".' => 'This value should be equal to ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 187, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be greater than ";
        // line 188
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 188, $this->source); })()), "html", null, true);
        echo ".' => 'This value should be greater than ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 188, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be greater than or equal to ";
        // line 189
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 189, $this->source); })()), "html", null, true);
        echo ".' => 'This value should be greater than or equal to ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 189, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be identical to ";
        // line 190
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 190, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 190, $this->source); })()), "html", null, true);
        echo ".' => 'This value should be identical to ";
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 190, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 190, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be less than ";
        // line 191
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 191, $this->source); })()), "html", null, true);
        echo ".' => 'This value should be less than ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 191, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be less than or equal to ";
        // line 192
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 192, $this->source); })()), "html", null, true);
        echo ".' => 'This value should be less than or equal to ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 192, $this->source); })()), "html", null, true);
        echo ".',
    'This value should not be equal to ";
        // line 193
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 193, $this->source); })()), "html", null, true);
        echo ".' => 'This value should not be equal to ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 193, $this->source); })()), "html", null, true);
        echo ".',
    'This value should not be identical to ";
        // line 194
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 194, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 194, $this->source); })()), "html", null, true);
        echo ".' => 'This value should not be identical to ";
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 194, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 194, $this->source); })()), "html", null, true);
        echo ".',
    'The image ratio is too big (";
        // line 195
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 195, $this->source); })()), "html", null, true);
        echo "). Allowed maximum ratio is ";
        echo twig_escape_filter($this->env, (isset($context["max_ratio"]) || array_key_exists("max_ratio", $context) ? $context["max_ratio"] : (function () { throw new RuntimeError('Variable "max_ratio" does not exist.', 195, $this->source); })()), "html", null, true);
        echo ".' => 'The image ratio is too big (";
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 195, $this->source); })()), "html", null, true);
        echo "). Allowed maximum ratio is ";
        echo twig_escape_filter($this->env, (isset($context["max_ratio"]) || array_key_exists("max_ratio", $context) ? $context["max_ratio"] : (function () { throw new RuntimeError('Variable "max_ratio" does not exist.', 195, $this->source); })()), "html", null, true);
        echo ".',
    'The image ratio is too small (";
        // line 196
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 196, $this->source); })()), "html", null, true);
        echo "). Minimum ratio expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_ratio"]) || array_key_exists("min_ratio", $context) ? $context["min_ratio"] : (function () { throw new RuntimeError('Variable "min_ratio" does not exist.', 196, $this->source); })()), "html", null, true);
        echo ".' => 'The image ratio is too small (";
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 196, $this->source); })()), "html", null, true);
        echo "). Minimum ratio expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_ratio"]) || array_key_exists("min_ratio", $context) ? $context["min_ratio"] : (function () { throw new RuntimeError('Variable "min_ratio" does not exist.', 196, $this->source); })()), "html", null, true);
        echo ".',
    'The image is square (";
        // line 197
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 197, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 197, $this->source); })()), "html", null, true);
        echo "px). Square images are not allowed.' => 'The image is square (";
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 197, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 197, $this->source); })()), "html", null, true);
        echo "px). Square images are not allowed.',
    'The image is landscape oriented (";
        // line 198
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 198, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 198, $this->source); })()), "html", null, true);
        echo "px). Landscape oriented images are not allowed.' => 'The image is landscape oriented (";
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 198, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 198, $this->source); })()), "html", null, true);
        echo "px). Landscape oriented images are not allowed.',
    'The image is portrait oriented (";
        // line 199
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 199, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 199, $this->source); })()), "html", null, true);
        echo "px). Portrait oriented images are not allowed.' => 'The image is portrait oriented (";
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 199, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 199, $this->source); })()), "html", null, true);
        echo "px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected ";
        // line 202
        echo twig_escape_filter($this->env, (isset($context["charset"]) || array_key_exists("charset", $context) ? $context["charset"] : (function () { throw new RuntimeError('Variable "charset" does not exist.', 202, $this->source); })()), "html", null, true);
        echo " charset.' => 'This value does not match the expected ";
        echo twig_escape_filter($this->env, (isset($context["charset"]) || array_key_exists("charset", $context) ? $context["charset"] : (function () { throw new RuntimeError('Variable "charset" does not exist.', 202, $this->source); })()), "html", null, true);
        echo " charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This is not a valid UUID.',
    'This value should be a multiple of ";
        // line 206
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 206, $this->source); })()), "html", null, true);
        echo ".' => 'This value should be a multiple of ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 206, $this->source); })()), "html", null, true);
        echo ".',
    'This Business Identifier Code (BIC) is not associated with IBAN ";
        // line 207
        echo twig_escape_filter($this->env, (isset($context["iban"]) || array_key_exists("iban", $context) ? $context["iban"] : (function () { throw new RuntimeError('Variable "iban" does not exist.', 207, $this->source); })()), "html", null, true);
        echo ".' => 'This Business Identifier Code (BIC) is not associated with IBAN ";
        echo twig_escape_filter($this->env, (isset($context["iban"]) || array_key_exists("iban", $context) ? $context["iban"] : (function () { throw new RuntimeError('Variable "iban" does not exist.', 207, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between ";
        // line 216
        echo twig_escape_filter($this->env, (isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 216, $this->source); })()), "html", null, true);
        echo " and ";
        echo twig_escape_filter($this->env, (isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 216, $this->source); })()), "html", null, true);
        echo ".' => 'This value should be between ";
        echo twig_escape_filter($this->env, (isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 216, $this->source); })()), "html", null, true);
        echo " and ";
        echo twig_escape_filter($this->env, (isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 216, $this->source); })()), "html", null, true);
        echo ".',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
));
\$catalogue->addFallbackCatalogue(\$catalogueEn);

return \$catalogue;
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/translations/catalogue.hu.52lf549.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  801 => 216,  787 => 207,  781 => 206,  772 => 202,  760 => 199,  750 => 198,  740 => 197,  730 => 196,  720 => 195,  710 => 194,  704 => 193,  698 => 192,  692 => 191,  682 => 190,  676 => 189,  670 => 188,  664 => 187,  646 => 178,  636 => 177,  626 => 176,  611 => 170,  600 => 168,  590 => 167,  580 => 166,  570 => 165,  550 => 154,  533 => 146,  527 => 145,  517 => 144,  511 => 143,  501 => 142,  483 => 141,  465 => 132,  455 => 131,  447 => 128,  408 => 98,  394 => 89,  388 => 88,  379 => 84,  367 => 81,  357 => 80,  347 => 79,  337 => 78,  327 => 77,  317 => 76,  311 => 75,  305 => 74,  299 => 73,  289 => 72,  283 => 71,  277 => 70,  271 => 69,  253 => 60,  243 => 59,  233 => 58,  218 => 52,  207 => 50,  197 => 49,  187 => 48,  177 => 47,  157 => 36,  140 => 28,  134 => 27,  124 => 26,  118 => 25,  108 => 24,  90 => 23,  72 => 14,  62 => 13,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Symfony\\Component\\Translation\\MessageCatalogue;

\$catalogue = new MessageCatalogue('hu', array (
  'validators' => 
  array (
    'This value should be false.' => 'Ennek az értéknek hamisnak kell lennie.',
    'This value should be true.' => 'Ennek az értéknek igaznak kell lennie.',
    'This value should be of type {{ type }}.' => 'Ennek az értéknek {{ type }} típusúnak kell lennie.',
    'This value should be blank.' => 'Ennek az értéknek üresnek kell lennie.',
    'The value you selected is not a valid choice.' => 'A választott érték érvénytelen.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Legalább {{ limit }} értéket kell kiválasztani.|Legalább {{ limit }} értéket kell kiválasztani.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Legfeljebb {{ limit }} értéket lehet kiválasztani.|Legfeljebb {{ limit }} értéket lehet kiválasztani.',
    'One or more of the given values is invalid.' => 'A megadott értékek közül legalább egy érvénytelen.',
    'This field was not expected.' => 'Nem várt mező.',
    'This field is missing.' => 'Ez a mező hiányzik.',
    'This value is not a valid date.' => 'Ez az érték nem egy érvényes dátum.',
    'This value is not a valid datetime.' => 'Ez az érték nem egy érvényes időpont.',
    'This value is not a valid email address.' => 'Ez az érték nem egy érvényes e-mail cím.',
    'The file could not be found.' => 'A fájl nem található.',
    'The file is not readable.' => 'A fájl nem olvasható.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'A fájl túl nagy ({{ size }} {{ suffix }}). A legnagyobb megengedett méret {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'A fájl MIME típusa érvénytelen ({{ type }}). Az engedélyezett MIME típusok: {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Ez az érték legfeljebb {{ limit }} lehet.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Ez az érték túl hosszú. Legfeljebb {{ limit }} karaktert tartalmazhat.|Ez az érték túl hosszú. Legfeljebb {{ limit }} karaktert tartalmazhat.',
    'This value should be {{ limit }} or more.' => 'Ez az érték legalább {{ limit }} kell, hogy legyen.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Ez az érték túl rövid. Legalább {{ limit }} karaktert kell tartalmaznia.|Ez az érték túl rövid. Legalább {{ limit }} karaktert kell tartalmaznia.',
    'This value should not be blank.' => 'Ez az érték nem lehet üres.',
    'This value should not be null.' => 'Ez az érték nem lehet null.',
    'This value should be null.' => 'Ennek az értéknek nullnak kell lennie.',
    'This value is not valid.' => 'Ez az érték nem érvényes.',
    'This value is not a valid time.' => 'Ez az érték nem egy érvényes időpont.',
    'This value is not a valid URL.' => 'Ez az érték nem egy érvényes URL.',
    'The two values should be equal.' => 'A két értéknek azonosnak kell lennie.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'A fájl túl nagy. A megengedett maximális méret: {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'A fájl túl nagy.',
    'The file could not be uploaded.' => 'A fájl nem tölthető fel.',
    'This value should be a valid number.' => 'Ennek az értéknek érvényes számnak kell lennie.',
    'This file is not a valid image.' => 'Ez a fájl nem egy érvényes kép.',
    'This is not a valid IP address.' => 'Ez az érték nem egy érvényes IP cím.',
    'This value is not a valid language.' => 'Ez az érték nem egy érvényes nyelv.',
    'This value is not a valid locale.' => 'Ez az érték nem egy érvényes területi beállítás.',
    'This value is not a valid country.' => 'Ez az érték nem egy érvényes ország.',
    'This value is already used.' => 'Ez az érték már használatban van.',
    'The size of the image could not be detected.' => 'A kép méretét nem lehet megállapítani.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'A kép szélessége túl nagy ({{ width }}px). A megengedett legnagyobb szélesség {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'A kép szélessége túl kicsi ({{ width }}px). Az elvárt legkisebb szélesség {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'A kép magassága túl nagy ({{ height }}px). A megengedett legnagyobb magasság {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'A kép magassága túl kicsi ({{ height }}px). Az elvárt legkisebb magasság {{ min_height }}px.',
    'This value should be the user\\'s current password.' => 'Ez az érték a felhasználó jelenlegi jelszavával kell megegyezzen.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Ennek az értéknek pontosan {{ limit }} karaktert kell tartalmaznia.|Ennek az értéknek pontosan {{ limit }} karaktert kell tartalmaznia.',
    'The file was only partially uploaded.' => 'A fájl csak részben lett feltöltve.',
    'No file was uploaded.' => 'Nem lett fájl feltöltve.',
    'No temporary folder was configured in php.ini.' => 'Nincs ideiglenes könyvtár beállítva a php.ini-ben.',
    'Cannot write temporary file to disk.' => 'Az ideiglenes fájl nem írható a lemezre.',
    'A PHP extension caused the upload to fail.' => 'Egy PHP bővítmény miatt a feltöltés nem sikerült.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ennek a gyűjteménynek legalább {{ limit }} elemet kell tartalmaznia.|Ennek a gyűjteménynek legalább {{ limit }} elemet kell tartalmaznia.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ez a gyűjtemény legfeljebb {{ limit }} elemet tartalmazhat.|Ez a gyűjtemény legfeljebb {{ limit }} elemet tartalmazhat.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ennek a gyűjteménynek pontosan {{ limit }} elemet kell tartalmaznia.|Ennek a gyűjteménynek pontosan {{ limit }} elemet kell tartalmaznia.',
    'Invalid card number.' => 'Érvénytelen kártyaszám.',
    'Unsupported card type or invalid card number.' => 'Nem támogatott kártyatípus vagy érvénytelen kártyaszám.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Érvénytelen nemzetközi bankszámlaszám (IBAN).',
    'This value is not a valid ISBN-10.' => 'Ez az érték nem egy érvényes ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Ez az érték nem egy érvényes ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Ez az érték nem egy érvényes ISBN-10 vagy ISBN-13.',
    'This value is not a valid ISSN.' => 'Ez az érték nem egy érvényes ISSN.',
    'This value is not a valid currency.' => 'Ez az érték nem egy érvényes pénznem.',
    'This value should be equal to {{ compared_value }}.' => 'Ez az érték legyen {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Ez az érték nagyobb legyen, mint {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Ez az érték nagyobb vagy egyenlő legyen, mint {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ez az érték ugyanolyan legyen, mint {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Ez az érték kisebb legyen, mint {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Ez az érték kisebb vagy egyenlő legyen, mint {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ez az érték ne legyen {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ez az érték ne legyen ugyanolyan, mint {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'A képarány túl nagy ({{ ratio }}). A megengedett legnagyobb képarány {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'A képarány túl kicsi ({{ ratio }}). A megengedett legkisebb képarány {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'A kép négyzet alakú ({{ width }}x{{ height }}px). A négyzet alakú képek nem engedélyezettek.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'A kép fekvő tájolású ({{ width }}x{{ height }}px). A fekvő tájolású képek nem engedélyezettek.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'A kép álló tájolású ({{ width }}x{{ height }}px). Az álló tájolású képek nem engedélyezettek.',
    'An empty file is not allowed.' => 'Üres fájl nem megengedett.',
    'The host could not be resolved.' => 'Az állomásnevet nem lehet feloldani.',
    'This value does not match the expected {{ charset }} charset.' => 'Ez az érték nem az elvárt {{ charset }} karakterkódolást használja.',
    'This is not a valid Business Identifier Code (BIC).' => 'Érvénytelen nemzetközi bankazonosító kód (BIC/SWIFT).',
    'Error' => 'Hiba',
    'This is not a valid UUID.' => 'Érvénytelen egyedi azonosító (UUID).',
    'This value should be a multiple of {{ compared_value }}.' => 'Ennek az értéknek oszthatónak kell lennie a következővel: {{ compared_value }}',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ez a Bankazonosító kód (BIC) nem kapcsolódik az IBAN kódhoz ({{ iban }}).',
    'This value should be valid JSON.' => 'Ez az érték érvényes JSON kell, hogy legyen.',
    'This value should be positive.' => 'Ennek az értéknek pozitívnak kell lennie.',
    'This value should be either positive or zero.' => 'Ennek az értéknek pozitívnak vagy nullának kell lennie.',
    'This value should be negative.' => 'Ennek az értéknek negatívnak kell lennie.',
    'This value should be either negative or zero.' => 'Ennek az értéknek negatívnak vagy nullának kell lennie.',
    'This collection should contain only unique elements.' => 'Ez a gyűjtemény csak egyedi elemeket tartalmazhat.',
    'This value is not a valid timezone.' => 'Ez az érték nem egy érvényes időzóna.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Ez a jelszó korábban egy adatvédelmi incidens során illetéktelenek kezébe került, így nem használható. Kérjük, használjon másik jelszót.',
    'This value should be between {{ min }} and {{ max }}.' => 'Ennek az értéknek {{ min }} és {{ max }} között kell lennie.',
    'This form should not contain extra fields.' => 'Ez a mezőcsoport nem tartalmazhat extra mezőket.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'A feltöltött fájl túl nagy. Kérem, próbáljon egy kisebb fájlt feltölteni.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Érvénytelen CSRF token. Kérem, próbálja újra elküldeni az űrlapot.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Hitelesítési hiba lépett fel.',
    'Authentication credentials could not be found.' => 'Nem találhatók hitelesítési információk.',
    'Authentication request could not be processed due to a system problem.' => 'A hitelesítési kérést rendszerhiba miatt nem lehet feldolgozni.',
    'Invalid credentials.' => 'Érvénytelen hitelesítési információk.',
    'Cookie has already been used by someone else.' => 'Ezt a sütit valaki más már felhasználta.',
    'Not privileged to request the resource.' => 'Nem rendelkezik az erőforrás eléréséhez szükséges jogosultsággal.',
    'Invalid CSRF token.' => 'Érvénytelen CSRF token.',
    'No authentication provider found to support the authentication token.' => 'Nem található a hitelesítési tokent támogató hitelesítési szolgáltatás.',
    'No session available, it either timed out or cookies are not enabled.' => 'Munkamenet nem áll rendelkezésre, túllépte az időkeretet vagy a sütik le vannak tiltva.',
    'No token could be found.' => 'Nem található token.',
    'Username could not be found.' => 'A felhasználónév nem található.',
    'Account has expired.' => 'A fiók lejárt.',
    'Credentials have expired.' => 'A hitelesítési információk lejártak.',
    'Account is disabled.' => 'Felfüggesztett fiók.',
    'Account is locked.' => 'Zárolt fiók.',
  ),
));

\$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\\'s current password.' => 'This value should be the user\\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
));
\$catalogue->addFallbackCatalogue(\$catalogueEn);

return \$catalogue;
", "var/cache/dev/translations/catalogue.hu.52lf549.php", "/var/www/public/DevLaon/templates/var/cache/dev/translations/catalogue.hu.52lf549.php");
    }
}
