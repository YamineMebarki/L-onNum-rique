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

/* vendor/symfony/validator/Resources/translations/validators.tr.xlf */
class __TwigTemplate_359f4ed2b75d2fd930257a6b08b28e3d778357ba6fbd2709a70584ca6dcc6c9a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Resources/translations/validators.tr.xlf"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Resources/translations/validators.tr.xlf"));

        // line 1
        echo "<?xml version=\"1.0\"?>
<xliff version=\"1.2\" xmlns=\"urn:oasis:names:tc:xliff:document:1.2\">
    <file source-language=\"en\" datatype=\"plaintext\" original=\"file.ext\">
        <body>
            <trans-unit id=\"1\">
                <source>This value should be false.</source>
                <target>Bu değer olumsuz olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"2\">
                <source>This value should be true.</source>
                <target>Bu değer olumlu olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"3\">
                <source>This value should be of type ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 14, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Bu değerin tipi ";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 15, $this->source); })()), "html", null, true);
        echo " olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"4\">
                <source>This value should be blank.</source>
                <target>Bu değer boş olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"5\">
                <source>The value you selected is not a valid choice.</source>
                <target>Seçtiğiniz değer geçerli bir seçenek değil.</target>
            </trans-unit>
            <trans-unit id=\"6\">
                <source>You must select at least ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " choice.|You must select at least ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " choices.</source>
                <target>En az ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 27, $this->source); })()), "html", null, true);
        echo " seçenek belirtmelisiniz.</target>
            </trans-unit>
            <trans-unit id=\"7\">
                <source>You must select at most ";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 30, $this->source); })()), "html", null, true);
        echo " choice.|You must select at most ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 30, $this->source); })()), "html", null, true);
        echo " choices.</source>
                <target>En çok ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 31, $this->source); })()), "html", null, true);
        echo " seçenek belirtmelisiniz.</target>
            </trans-unit>
            <trans-unit id=\"8\">
                <source>One or more of the given values is invalid.</source>
                <target>Verilen değerlerden bir veya daha fazlası geçersiz.</target>
            </trans-unit>
            <trans-unit id=\"9\">
                <source>This field was not expected.</source>
                <target>Bu alan beklenen olmadı.</target>
            </trans-unit>
            <trans-unit id=\"10\">
                <source>This field is missing.</source>
                <target>Bu alan, eksik</target>
            </trans-unit>
            <trans-unit id=\"11\">
                <source>This value is not a valid date.</source>
                <target>Bu değer doğru bir tarih biçimi değildir.</target>
            </trans-unit>
            <trans-unit id=\"12\">
                <source>This value is not a valid datetime.</source>
                <target>Bu değer doğru bir tarihsaat biçimi değildir.</target>
            </trans-unit>
            <trans-unit id=\"13\">
                <source>This value is not a valid email address.</source>
                <target>Bu değer doğru bir e-mail adresi değildir.</target>
            </trans-unit>
            <trans-unit id=\"14\">
                <source>The file could not be found.</source>
                <target>Dosya bulunamadı.</target>
            </trans-unit>
            <trans-unit id=\"15\">
                <source>The file is not readable.</source>
                <target>Dosya okunabilir değil.</target>
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
                <target>Dosya çok büyük (";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 67, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 67, $this->source); })()), "html", null, true);
        echo "). İzin verilen en büyük dosya boyutu ";
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
                <target>Dosyanın mime tipi geçersiz (";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "). İzin verilen mime tipleri ";
        echo twig_escape_filter($this->env, (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 71, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"18\">
                <source>This value should be ";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 74, $this->source); })()), "html", null, true);
        echo " or less.</source>
                <target>Bu değer ";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 75, $this->source); })()), "html", null, true);
        echo " ve altında olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"19\">
                <source>This value is too long. It should have ";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 78, $this->source); })()), "html", null, true);
        echo " character or less.|This value is too long. It should have ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 78, $this->source); })()), "html", null, true);
        echo " characters or less.</source>
                <target>Bu değer çok uzun. ";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 79, $this->source); })()), "html", null, true);
        echo " karakter veya daha az olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"20\">
                <source>This value should be ";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 82, $this->source); })()), "html", null, true);
        echo " or more.</source>
                <target>Bu değer ";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 83, $this->source); })()), "html", null, true);
        echo " veya daha fazla olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"21\">
                <source>This value is too short. It should have ";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 86, $this->source); })()), "html", null, true);
        echo " character or more.|This value is too short. It should have ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 86, $this->source); })()), "html", null, true);
        echo " characters or more.</source>
                <target>Bu değer çok kısa. ";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 87, $this->source); })()), "html", null, true);
        echo " karakter veya daha fazla olmaldır.</target>
            </trans-unit>
            <trans-unit id=\"22\">
                <source>This value should not be blank.</source>
                <target>Bu değer boş bırakılmamalıdır.</target>
            </trans-unit>
            <trans-unit id=\"23\">
                <source>This value should not be null.</source>
                <target>Bu değer boş bırakılmamalıdır.</target>
            </trans-unit>
            <trans-unit id=\"24\">
                <source>This value should be null.</source>
                <target>Bu değer boş bırakılmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"25\">
                <source>This value is not valid.</source>
                <target>Bu değer geçerli değil.</target>
            </trans-unit>
            <trans-unit id=\"26\">
                <source>This value is not a valid time.</source>
                <target>Bu değer doğru bir saat değil.</target>
            </trans-unit>
            <trans-unit id=\"27\">
                <source>This value is not a valid URL.</source>
                <target>Bu değer doğru bir URL değil.</target>
            </trans-unit>
            <trans-unit id=\"31\">
                <source>The two values should be equal.</source>
                <target>İki değer eşit olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"32\">
                <source>The file is too large. Allowed maximum size is ";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 118, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 118, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Dosya çok büyük. İzin verilen en büyük dosya boyutu ";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 119, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 119, $this->source); })()), "html", null, true);
        echo ".</target>
            </trans-unit>
            <trans-unit id=\"33\">
                <source>The file is too large.</source>
                <target>Dosya çok büyük.</target>
            </trans-unit>
            <trans-unit id=\"34\">
                <source>The file could not be uploaded.</source>
                <target>Dosya yüklenemiyor.</target>
            </trans-unit>
            <trans-unit id=\"35\">
                <source>This value should be a valid number.</source>
                <target>Bu değer geçerli bir rakam olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"36\">
                <source>This file is not a valid image.</source>
                <target>Bu dosya geçerli bir resim değildir.</target>
            </trans-unit>
            <trans-unit id=\"37\">
                <source>This is not a valid IP address.</source>
                <target>Bu geçerli bir IP adresi değildir.</target>
            </trans-unit>
            <trans-unit id=\"38\">
                <source>This value is not a valid language.</source>
                <target>Bu değer geçerli bir lisan değil.</target>
            </trans-unit>
            <trans-unit id=\"39\">
                <source>This value is not a valid locale.</source>
                <target>Bu değer geçerli bir yer değildir.</target>
            </trans-unit>
            <trans-unit id=\"40\">
                <source>This value is not a valid country.</source>
                <target>Bu değer geçerli bir ülke değildir.</target>
            </trans-unit>
            <trans-unit id=\"41\">
                <source>This value is already used.</source>
                <target>Bu değer şu anda kullanımda.</target>
            </trans-unit>
            <trans-unit id=\"42\">
                <source>The size of the image could not be detected.</source>
                <target>Resmin boyutu saptanamıyor.</target>
            </trans-unit>
            <trans-unit id=\"43\">
                <source>The image width is too big (";
        // line 162
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 162, $this->source); })()), "html", null, true);
        echo "px). Allowed maximum width is ";
        echo twig_escape_filter($this->env, (isset($context["max_width"]) || array_key_exists("max_width", $context) ? $context["max_width"] : (function () { throw new RuntimeError('Variable "max_width" does not exist.', 162, $this->source); })()), "html", null, true);
        echo "px.</source>
                <target>Resmin genişliği çok büyük (";
        // line 163
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 163, $this->source); })()), "html", null, true);
        echo "px). İzin verilen en büyük genişlik ";
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
                <target>Resmin genişliği çok küçük (";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 167, $this->source); })()), "html", null, true);
        echo "px). En az ";
        echo twig_escape_filter($this->env, (isset($context["min_width"]) || array_key_exists("min_width", $context) ? $context["min_width"] : (function () { throw new RuntimeError('Variable "min_width" does not exist.', 167, $this->source); })()), "html", null, true);
        echo "px olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"45\">
                <source>The image height is too big (";
        // line 170
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 170, $this->source); })()), "html", null, true);
        echo "px). Allowed maximum height is ";
        echo twig_escape_filter($this->env, (isset($context["max_height"]) || array_key_exists("max_height", $context) ? $context["max_height"] : (function () { throw new RuntimeError('Variable "max_height" does not exist.', 170, $this->source); })()), "html", null, true);
        echo "px.</source>
                <target>Resmin yüksekliği çok büyük (";
        // line 171
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 171, $this->source); })()), "html", null, true);
        echo "px). İzin verilen en büyük yükseklik ";
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
                <target>Resmin yüksekliği çok küçük (";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 175, $this->source); })()), "html", null, true);
        echo "px). En az ";
        echo twig_escape_filter($this->env, (isset($context["min_height"]) || array_key_exists("min_height", $context) ? $context["min_height"] : (function () { throw new RuntimeError('Variable "min_height" does not exist.', 175, $this->source); })()), "html", null, true);
        echo "px olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"47\">
                <source>This value should be the user's current password.</source>
                <target>Bu değer kullanıcının şu anki şifresi olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"48\">
                <source>This value should have exactly ";
        // line 182
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 182, $this->source); })()), "html", null, true);
        echo " character.|This value should have exactly ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 182, $this->source); })()), "html", null, true);
        echo " characters.</source>
                <target>Bu değer tam olarak ";
        // line 183
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 183, $this->source); })()), "html", null, true);
        echo " karakter olmaldır.</target>
            </trans-unit>
            <trans-unit id=\"49\">
                <source>The file was only partially uploaded.</source>
                <target>Dosya sadece kısmen yüklendi.</target>
            </trans-unit>
            <trans-unit id=\"50\">
                <source>No file was uploaded.</source>
                <target>Hiçbir dosya yüklenmedi.</target>
            </trans-unit>
            <trans-unit id=\"51\">
                <source>No temporary folder was configured in php.ini.</source>
                <target>php.ini içerisinde geçici dizin tanımlanmadı.</target>
            </trans-unit>
            <trans-unit id=\"52\">
                <source>Cannot write temporary file to disk.</source>
                <target>Geçici dosya diske yazılamıyor.</target>
            </trans-unit>
            <trans-unit id=\"53\">
                <source>A PHP extension caused the upload to fail.</source>
                <target>Bir PHP eklentisi dosyanın yüklemesini başarısız kıldı.</target>
            </trans-unit>
            <trans-unit id=\"54\">
                <source>This collection should contain ";
        // line 206
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 206, $this->source); })()), "html", null, true);
        echo " element or more.|This collection should contain ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 206, $this->source); })()), "html", null, true);
        echo " elements or more.</source>
                <target>Bu derlem ";
        // line 207
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 207, $this->source); })()), "html", null, true);
        echo " veya daha çok eleman içermelidir.</target>
            </trans-unit>
            <trans-unit id=\"55\">
                <source>This collection should contain ";
        // line 210
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 210, $this->source); })()), "html", null, true);
        echo " element or less.|This collection should contain ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 210, $this->source); })()), "html", null, true);
        echo " elements or less.</source>
                <target>Bu derlem ";
        // line 211
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 211, $this->source); })()), "html", null, true);
        echo " veya daha az eleman içermelidir.</target>
            </trans-unit>
            <trans-unit id=\"56\">
                <source>This collection should contain exactly ";
        // line 214
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 214, $this->source); })()), "html", null, true);
        echo " element.|This collection should contain exactly ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 214, $this->source); })()), "html", null, true);
        echo " elements.</source>
                <target>Bu derlem ";
        // line 215
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 215, $this->source); })()), "html", null, true);
        echo " eleman içermelidir.</target>
            </trans-unit>
            <trans-unit id=\"57\">
                <source>Invalid card number.</source>
                <target>Geçersiz kart numarası.</target>
            </trans-unit>
            <trans-unit id=\"58\">
                <source>Unsupported card type or invalid card number.</source>
                <target>Desteklenmeyen kart tipi veya geçersiz kart numarası.</target>
            </trans-unit>
            <trans-unit id=\"59\">
                <source>This is not a valid International Bank Account Number (IBAN).</source>
                <target>Bu geçerli bir Uluslararası Banka Hesap Numarası (IBAN) değildir.</target>
            </trans-unit>
            <trans-unit id=\"60\">
                <source>This value is not a valid ISBN-10.</source>
                <target>Bu değer geçerli bir ISBN-10 değildir.</target>
            </trans-unit>
            <trans-unit id=\"61\">
                <source>This value is not a valid ISBN-13.</source>
                <target>Bu değer geçerli bir ISBN-13 değildir.</target>
            </trans-unit>
            <trans-unit id=\"62\">
                <source>This value is neither a valid ISBN-10 nor a valid ISBN-13.</source>
                <target>Bu değer geçerli bir ISBN-10 veya ISBN-13 değildir.</target>
            </trans-unit>
            <trans-unit id=\"63\">
                <source>This value is not a valid ISSN.</source>
                <target>Bu değer geçerli bir ISSN değildir.</target>
            </trans-unit>
            <trans-unit id=\"64\">
                <source>This value is not a valid currency.</source>
                <target>Bu değer geçerli bir para birimi değil.</target>
            </trans-unit>
            <trans-unit id=\"65\">
                <source>This value should be equal to ";
        // line 250
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 250, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Bu değer ";
        // line 251
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 251, $this->source); })()), "html", null, true);
        echo " ile eşit olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"66\">
                <source>This value should be greater than ";
        // line 254
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 254, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Bu değer ";
        // line 255
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 255, $this->source); })()), "html", null, true);
        echo " değerinden büyük olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"67\">
                <source>This value should be greater than or equal to ";
        // line 258
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 258, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Bu değer ";
        // line 259
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 259, $this->source); })()), "html", null, true);
        echo " ile eşit veya büyük olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"68\">
                <source>This value should be identical to ";
        // line 262
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 262, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 262, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Bu değer ";
        // line 263
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 263, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 263, $this->source); })()), "html", null, true);
        echo " ile aynı olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"69\">
                <source>This value should be less than ";
        // line 266
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 266, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Bu değer ";
        // line 267
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 267, $this->source); })()), "html", null, true);
        echo " değerinden düşük olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"70\">
                <source>This value should be less than or equal to ";
        // line 270
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 270, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>.Bu değer ";
        // line 271
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 271, $this->source); })()), "html", null, true);
        echo " ile eşit veya düşük olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"71\">
                <source>This value should not be equal to ";
        // line 274
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 274, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Bu değer ";
        // line 275
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 275, $this->source); })()), "html", null, true);
        echo " ile eşit olmamalıdır.</target>
            </trans-unit>
            <trans-unit id=\"72\">
                <source>This value should not be identical to ";
        // line 278
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 278, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 278, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Bu değer ";
        // line 279
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 279, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 279, $this->source); })()), "html", null, true);
        echo " ile aynı olmamalıdır.</target>
            </trans-unit>
            <trans-unit id=\"73\">
                <source>The image ratio is too big (";
        // line 282
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 282, $this->source); })()), "html", null, true);
        echo "). Allowed maximum ratio is ";
        echo twig_escape_filter($this->env, (isset($context["max_ratio"]) || array_key_exists("max_ratio", $context) ? $context["max_ratio"] : (function () { throw new RuntimeError('Variable "max_ratio" does not exist.', 282, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Resim oranı çok büyük (";
        // line 283
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 283, $this->source); })()), "html", null, true);
        echo "). İzin verilen maksimum oran: ";
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
                <target>Resim oranı çok ufak (";
        // line 287
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 287, $this->source); })()), "html", null, true);
        echo "). Beklenen minimum oran ";
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
                <target>Resim karesi (";
        // line 291
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 291, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 291, $this->source); })()), "html", null, true);
        echo "px). Kare resimlerine izin verilmiyor.</target>
            </trans-unit>
            <trans-unit id=\"76\">
                <source>The image is landscape oriented (";
        // line 294
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 294, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 294, $this->source); })()), "html", null, true);
        echo "px). Landscape oriented images are not allowed.</source>
                <target>Resim manzara odaklı (";
        // line 295
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 295, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 295, $this->source); })()), "html", null, true);
        echo "px). Manzara odaklı resimlere izin verilmiyor.</target>
            </trans-unit>
            <trans-unit id=\"77\">
                <source>The image is portrait oriented (";
        // line 298
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 298, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 298, $this->source); })()), "html", null, true);
        echo "px). Portrait oriented images are not allowed.</source>
                <target>Resim portre odaklı (";
        // line 299
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 299, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 299, $this->source); })()), "html", null, true);
        echo "px). Portre odaklı resimlere izin verilmiyor.</target>
            </trans-unit>
            <trans-unit id=\"78\">
                <source>An empty file is not allowed.</source>
                <target>Boş bir dosyaya izin verilmiyor.</target>
            </trans-unit>
            <trans-unit id=\"79\">
                <source>The host could not be resolved.</source>
                <target>Sunucu çözülemedi.</target>
            </trans-unit>
            <trans-unit id=\"80\">
                <source>This value does not match the expected ";
        // line 310
        echo twig_escape_filter($this->env, (isset($context["charset"]) || array_key_exists("charset", $context) ? $context["charset"] : (function () { throw new RuntimeError('Variable "charset" does not exist.', 310, $this->source); })()), "html", null, true);
        echo " charset.</source>
                <target>Bu değer beklenen ";
        // line 311
        echo twig_escape_filter($this->env, (isset($context["charset"]) || array_key_exists("charset", $context) ? $context["charset"] : (function () { throw new RuntimeError('Variable "charset" does not exist.', 311, $this->source); })()), "html", null, true);
        echo " karakter kümesiyle eşleşmiyor.</target>
            </trans-unit>
            <trans-unit id=\"81\">
                <source>This is not a valid Business Identifier Code (BIC).</source>
                <target>Bu geçerli bir İşletme Tanımlayıcı Kodu (BIC) değildir.</target>
            </trans-unit>
            <trans-unit id=\"82\">
                <source>Error</source>
                <target>Hata</target>
            </trans-unit>
            <trans-unit id=\"83\">
                <source>This is not a valid UUID.</source>
                <target>Bu geçerli bir UUID değildir.</target>
            </trans-unit>
            <trans-unit id=\"84\">
                <source>This value should be a multiple of ";
        // line 326
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 326, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Bu değer ";
        // line 327
        echo twig_escape_filter($this->env, (isset($context["compare_value"]) || array_key_exists("compare_value", $context) ? $context["compare_value"] : (function () { throw new RuntimeError('Variable "compare_value" does not exist.', 327, $this->source); })()), "html", null, true);
        echo " değerinin katlarından biri olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"85\">
                <source>This Business Identifier Code (BIC) is not associated with IBAN ";
        // line 330
        echo twig_escape_filter($this->env, (isset($context["iban"]) || array_key_exists("iban", $context) ? $context["iban"] : (function () { throw new RuntimeError('Variable "iban" does not exist.', 330, $this->source); })()), "html", null, true);
        echo ".</source>
                <target>Bu İşletme Tanımlayıcı Kodu (BIC), IBAN ";
        // line 331
        echo twig_escape_filter($this->env, (isset($context["iban"]) || array_key_exists("iban", $context) ? $context["iban"] : (function () { throw new RuntimeError('Variable "iban" does not exist.', 331, $this->source); })()), "html", null, true);
        echo " ile ilişkili değildir.</target>
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
        return "vendor/symfony/validator/Resources/translations/validators.tr.xlf";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  656 => 331,  652 => 330,  646 => 327,  642 => 326,  624 => 311,  620 => 310,  604 => 299,  598 => 298,  590 => 295,  584 => 294,  576 => 291,  570 => 290,  562 => 287,  556 => 286,  548 => 283,  542 => 282,  534 => 279,  528 => 278,  522 => 275,  518 => 274,  512 => 271,  508 => 270,  502 => 267,  498 => 266,  490 => 263,  484 => 262,  478 => 259,  474 => 258,  468 => 255,  464 => 254,  458 => 251,  454 => 250,  416 => 215,  410 => 214,  404 => 211,  398 => 210,  392 => 207,  386 => 206,  360 => 183,  354 => 182,  342 => 175,  336 => 174,  328 => 171,  322 => 170,  314 => 167,  308 => 166,  300 => 163,  294 => 162,  246 => 119,  240 => 118,  206 => 87,  200 => 86,  194 => 83,  190 => 82,  184 => 79,  178 => 78,  172 => 75,  168 => 74,  160 => 71,  154 => 70,  142 => 67,  132 => 66,  94 => 31,  88 => 30,  82 => 27,  76 => 26,  62 => 15,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\"?>
<xliff version=\"1.2\" xmlns=\"urn:oasis:names:tc:xliff:document:1.2\">
    <file source-language=\"en\" datatype=\"plaintext\" original=\"file.ext\">
        <body>
            <trans-unit id=\"1\">
                <source>This value should be false.</source>
                <target>Bu değer olumsuz olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"2\">
                <source>This value should be true.</source>
                <target>Bu değer olumlu olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"3\">
                <source>This value should be of type {{ type }}.</source>
                <target>Bu değerin tipi {{ type }} olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"4\">
                <source>This value should be blank.</source>
                <target>Bu değer boş olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"5\">
                <source>The value you selected is not a valid choice.</source>
                <target>Seçtiğiniz değer geçerli bir seçenek değil.</target>
            </trans-unit>
            <trans-unit id=\"6\">
                <source>You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.</source>
                <target>En az {{ limit }} seçenek belirtmelisiniz.</target>
            </trans-unit>
            <trans-unit id=\"7\">
                <source>You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.</source>
                <target>En çok {{ limit }} seçenek belirtmelisiniz.</target>
            </trans-unit>
            <trans-unit id=\"8\">
                <source>One or more of the given values is invalid.</source>
                <target>Verilen değerlerden bir veya daha fazlası geçersiz.</target>
            </trans-unit>
            <trans-unit id=\"9\">
                <source>This field was not expected.</source>
                <target>Bu alan beklenen olmadı.</target>
            </trans-unit>
            <trans-unit id=\"10\">
                <source>This field is missing.</source>
                <target>Bu alan, eksik</target>
            </trans-unit>
            <trans-unit id=\"11\">
                <source>This value is not a valid date.</source>
                <target>Bu değer doğru bir tarih biçimi değildir.</target>
            </trans-unit>
            <trans-unit id=\"12\">
                <source>This value is not a valid datetime.</source>
                <target>Bu değer doğru bir tarihsaat biçimi değildir.</target>
            </trans-unit>
            <trans-unit id=\"13\">
                <source>This value is not a valid email address.</source>
                <target>Bu değer doğru bir e-mail adresi değildir.</target>
            </trans-unit>
            <trans-unit id=\"14\">
                <source>The file could not be found.</source>
                <target>Dosya bulunamadı.</target>
            </trans-unit>
            <trans-unit id=\"15\">
                <source>The file is not readable.</source>
                <target>Dosya okunabilir değil.</target>
            </trans-unit>
            <trans-unit id=\"16\">
                <source>The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.</source>
                <target>Dosya çok büyük ({{ size }} {{ suffix }}). İzin verilen en büyük dosya boyutu {{ limit }} {{ suffix }}.</target>
            </trans-unit>
            <trans-unit id=\"17\">
                <source>The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.</source>
                <target>Dosyanın mime tipi geçersiz ({{ type }}). İzin verilen mime tipleri {{ types }}.</target>
            </trans-unit>
            <trans-unit id=\"18\">
                <source>This value should be {{ limit }} or less.</source>
                <target>Bu değer {{ limit }} ve altında olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"19\">
                <source>This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.</source>
                <target>Bu değer çok uzun. {{ limit }} karakter veya daha az olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"20\">
                <source>This value should be {{ limit }} or more.</source>
                <target>Bu değer {{ limit }} veya daha fazla olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"21\">
                <source>This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.</source>
                <target>Bu değer çok kısa. {{ limit }} karakter veya daha fazla olmaldır.</target>
            </trans-unit>
            <trans-unit id=\"22\">
                <source>This value should not be blank.</source>
                <target>Bu değer boş bırakılmamalıdır.</target>
            </trans-unit>
            <trans-unit id=\"23\">
                <source>This value should not be null.</source>
                <target>Bu değer boş bırakılmamalıdır.</target>
            </trans-unit>
            <trans-unit id=\"24\">
                <source>This value should be null.</source>
                <target>Bu değer boş bırakılmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"25\">
                <source>This value is not valid.</source>
                <target>Bu değer geçerli değil.</target>
            </trans-unit>
            <trans-unit id=\"26\">
                <source>This value is not a valid time.</source>
                <target>Bu değer doğru bir saat değil.</target>
            </trans-unit>
            <trans-unit id=\"27\">
                <source>This value is not a valid URL.</source>
                <target>Bu değer doğru bir URL değil.</target>
            </trans-unit>
            <trans-unit id=\"31\">
                <source>The two values should be equal.</source>
                <target>İki değer eşit olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"32\">
                <source>The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.</source>
                <target>Dosya çok büyük. İzin verilen en büyük dosya boyutu {{ limit }} {{ suffix }}.</target>
            </trans-unit>
            <trans-unit id=\"33\">
                <source>The file is too large.</source>
                <target>Dosya çok büyük.</target>
            </trans-unit>
            <trans-unit id=\"34\">
                <source>The file could not be uploaded.</source>
                <target>Dosya yüklenemiyor.</target>
            </trans-unit>
            <trans-unit id=\"35\">
                <source>This value should be a valid number.</source>
                <target>Bu değer geçerli bir rakam olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"36\">
                <source>This file is not a valid image.</source>
                <target>Bu dosya geçerli bir resim değildir.</target>
            </trans-unit>
            <trans-unit id=\"37\">
                <source>This is not a valid IP address.</source>
                <target>Bu geçerli bir IP adresi değildir.</target>
            </trans-unit>
            <trans-unit id=\"38\">
                <source>This value is not a valid language.</source>
                <target>Bu değer geçerli bir lisan değil.</target>
            </trans-unit>
            <trans-unit id=\"39\">
                <source>This value is not a valid locale.</source>
                <target>Bu değer geçerli bir yer değildir.</target>
            </trans-unit>
            <trans-unit id=\"40\">
                <source>This value is not a valid country.</source>
                <target>Bu değer geçerli bir ülke değildir.</target>
            </trans-unit>
            <trans-unit id=\"41\">
                <source>This value is already used.</source>
                <target>Bu değer şu anda kullanımda.</target>
            </trans-unit>
            <trans-unit id=\"42\">
                <source>The size of the image could not be detected.</source>
                <target>Resmin boyutu saptanamıyor.</target>
            </trans-unit>
            <trans-unit id=\"43\">
                <source>The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.</source>
                <target>Resmin genişliği çok büyük ({{ width }}px). İzin verilen en büyük genişlik {{ max_width }}px.</target>
            </trans-unit>
            <trans-unit id=\"44\">
                <source>The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.</source>
                <target>Resmin genişliği çok küçük ({{ width }}px). En az {{ min_width }}px olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"45\">
                <source>The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.</source>
                <target>Resmin yüksekliği çok büyük ({{ height }}px). İzin verilen en büyük yükseklik {{ max_height }}px.</target>
            </trans-unit>
            <trans-unit id=\"46\">
                <source>The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.</source>
                <target>Resmin yüksekliği çok küçük ({{ height }}px). En az {{ min_height }}px olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"47\">
                <source>This value should be the user's current password.</source>
                <target>Bu değer kullanıcının şu anki şifresi olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"48\">
                <source>This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.</source>
                <target>Bu değer tam olarak {{ limit }} karakter olmaldır.</target>
            </trans-unit>
            <trans-unit id=\"49\">
                <source>The file was only partially uploaded.</source>
                <target>Dosya sadece kısmen yüklendi.</target>
            </trans-unit>
            <trans-unit id=\"50\">
                <source>No file was uploaded.</source>
                <target>Hiçbir dosya yüklenmedi.</target>
            </trans-unit>
            <trans-unit id=\"51\">
                <source>No temporary folder was configured in php.ini.</source>
                <target>php.ini içerisinde geçici dizin tanımlanmadı.</target>
            </trans-unit>
            <trans-unit id=\"52\">
                <source>Cannot write temporary file to disk.</source>
                <target>Geçici dosya diske yazılamıyor.</target>
            </trans-unit>
            <trans-unit id=\"53\">
                <source>A PHP extension caused the upload to fail.</source>
                <target>Bir PHP eklentisi dosyanın yüklemesini başarısız kıldı.</target>
            </trans-unit>
            <trans-unit id=\"54\">
                <source>This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.</source>
                <target>Bu derlem {{ limit }} veya daha çok eleman içermelidir.</target>
            </trans-unit>
            <trans-unit id=\"55\">
                <source>This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.</source>
                <target>Bu derlem {{ limit }} veya daha az eleman içermelidir.</target>
            </trans-unit>
            <trans-unit id=\"56\">
                <source>This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.</source>
                <target>Bu derlem {{ limit }} eleman içermelidir.</target>
            </trans-unit>
            <trans-unit id=\"57\">
                <source>Invalid card number.</source>
                <target>Geçersiz kart numarası.</target>
            </trans-unit>
            <trans-unit id=\"58\">
                <source>Unsupported card type or invalid card number.</source>
                <target>Desteklenmeyen kart tipi veya geçersiz kart numarası.</target>
            </trans-unit>
            <trans-unit id=\"59\">
                <source>This is not a valid International Bank Account Number (IBAN).</source>
                <target>Bu geçerli bir Uluslararası Banka Hesap Numarası (IBAN) değildir.</target>
            </trans-unit>
            <trans-unit id=\"60\">
                <source>This value is not a valid ISBN-10.</source>
                <target>Bu değer geçerli bir ISBN-10 değildir.</target>
            </trans-unit>
            <trans-unit id=\"61\">
                <source>This value is not a valid ISBN-13.</source>
                <target>Bu değer geçerli bir ISBN-13 değildir.</target>
            </trans-unit>
            <trans-unit id=\"62\">
                <source>This value is neither a valid ISBN-10 nor a valid ISBN-13.</source>
                <target>Bu değer geçerli bir ISBN-10 veya ISBN-13 değildir.</target>
            </trans-unit>
            <trans-unit id=\"63\">
                <source>This value is not a valid ISSN.</source>
                <target>Bu değer geçerli bir ISSN değildir.</target>
            </trans-unit>
            <trans-unit id=\"64\">
                <source>This value is not a valid currency.</source>
                <target>Bu değer geçerli bir para birimi değil.</target>
            </trans-unit>
            <trans-unit id=\"65\">
                <source>This value should be equal to {{ compared_value }}.</source>
                <target>Bu değer {{ compared_value }} ile eşit olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"66\">
                <source>This value should be greater than {{ compared_value }}.</source>
                <target>Bu değer {{ compared_value }} değerinden büyük olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"67\">
                <source>This value should be greater than or equal to {{ compared_value }}.</source>
                <target>Bu değer {{ compared_value }} ile eşit veya büyük olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"68\">
                <source>This value should be identical to {{ compared_value_type }} {{ compared_value }}.</source>
                <target>Bu değer {{ compared_value_type }} {{ compared_value }} ile aynı olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"69\">
                <source>This value should be less than {{ compared_value }}.</source>
                <target>Bu değer {{ compared_value }} değerinden düşük olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"70\">
                <source>This value should be less than or equal to {{ compared_value }}.</source>
                <target>.Bu değer {{ compared_value }} ile eşit veya düşük olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"71\">
                <source>This value should not be equal to {{ compared_value }}.</source>
                <target>Bu değer {{ compared_value }} ile eşit olmamalıdır.</target>
            </trans-unit>
            <trans-unit id=\"72\">
                <source>This value should not be identical to {{ compared_value_type }} {{ compared_value }}.</source>
                <target>Bu değer {{ compared_value_type }} {{ compared_value }} ile aynı olmamalıdır.</target>
            </trans-unit>
            <trans-unit id=\"73\">
                <source>The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.</source>
                <target>Resim oranı çok büyük ({{ ratio }}). İzin verilen maksimum oran: {{ max_ratio }}.</target>
            </trans-unit>
            <trans-unit id=\"74\">
                <source>The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.</source>
                <target>Resim oranı çok ufak ({{ ratio }}). Beklenen minimum oran {{ min_ratio }}.</target>
            </trans-unit>
            <trans-unit id=\"75\">
                <source>The image is square ({{ width }}x{{ height }}px). Square images are not allowed.</source>
                <target>Resim karesi ({{ width }}x{{ height }}px). Kare resimlerine izin verilmiyor.</target>
            </trans-unit>
            <trans-unit id=\"76\">
                <source>The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.</source>
                <target>Resim manzara odaklı ({{ width }}x{{ height }}px). Manzara odaklı resimlere izin verilmiyor.</target>
            </trans-unit>
            <trans-unit id=\"77\">
                <source>The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.</source>
                <target>Resim portre odaklı ({{ width }}x{{ height }}px). Portre odaklı resimlere izin verilmiyor.</target>
            </trans-unit>
            <trans-unit id=\"78\">
                <source>An empty file is not allowed.</source>
                <target>Boş bir dosyaya izin verilmiyor.</target>
            </trans-unit>
            <trans-unit id=\"79\">
                <source>The host could not be resolved.</source>
                <target>Sunucu çözülemedi.</target>
            </trans-unit>
            <trans-unit id=\"80\">
                <source>This value does not match the expected {{ charset }} charset.</source>
                <target>Bu değer beklenen {{ charset }} karakter kümesiyle eşleşmiyor.</target>
            </trans-unit>
            <trans-unit id=\"81\">
                <source>This is not a valid Business Identifier Code (BIC).</source>
                <target>Bu geçerli bir İşletme Tanımlayıcı Kodu (BIC) değildir.</target>
            </trans-unit>
            <trans-unit id=\"82\">
                <source>Error</source>
                <target>Hata</target>
            </trans-unit>
            <trans-unit id=\"83\">
                <source>This is not a valid UUID.</source>
                <target>Bu geçerli bir UUID değildir.</target>
            </trans-unit>
            <trans-unit id=\"84\">
                <source>This value should be a multiple of {{ compared_value }}.</source>
                <target>Bu değer {{ compare_value }} değerinin katlarından biri olmalıdır.</target>
            </trans-unit>
            <trans-unit id=\"85\">
                <source>This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.</source>
                <target>Bu İşletme Tanımlayıcı Kodu (BIC), IBAN {{ iban }} ile ilişkili değildir.</target>
            </trans-unit>
        </body>
    </file>
</xliff>
", "vendor/symfony/validator/Resources/translations/validators.tr.xlf", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Resources/translations/validators.tr.xlf");
    }
}
