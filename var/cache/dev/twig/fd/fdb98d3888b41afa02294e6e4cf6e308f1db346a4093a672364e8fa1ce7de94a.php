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

/* var/cache/dev/translations/catalogue.ja.52lf549.php */
class __TwigTemplate_ce52263190bd41e210c18a784289ea48c50c42d6bd08939fc401fa90aee1170b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/translations/catalogue.ja.52lf549.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/translations/catalogue.ja.52lf549.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\Translation\\MessageCatalogue;

\$catalogue = new MessageCatalogue('ja', array (
  'validators' => 
  array (
    'This value should be false.' => 'falseでなければなりません。',
    'This value should be true.' => 'trueでなければなりません。',
    'This value should be of type ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 10, $this->source); })()), "html", null, true);
        echo ".' => '型は";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "でなければなりません。',
    'This value should be blank.' => '空でなければなりません。',
    'The value you selected is not a valid choice.' => '有効な選択肢ではありません。',
    'You must select at least ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " choice.|You must select at least ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " choices.' => '";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "個以上選択してください。',
    'You must select at most ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " choice.|You must select at most ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " choices.' => '";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "個以内で選択してください。',
    'One or more of the given values is invalid.' => '無効な選択肢が含まれています。',
    'This field was not expected.' => 'このフィールドは予期されていませんでした。',
    'This field is missing.' => 'このフィールドは、欠落しています。',
    'This value is not a valid date.' => '有効な日付ではありません。',
    'This value is not a valid datetime.' => '有効な日時ではありません。',
    'This value is not a valid email address.' => '有効なメールアドレスではありません。',
    'The file could not be found.' => 'ファイルが見つかりません。',
    'The file is not readable.' => 'ファイルを読み込めません。',
    'The file is too large (";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "). Allowed maximum size is ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 23, $this->source); })()), "html", null, true);
        echo ".' => 'ファイルのサイズが大きすぎます(";
        echo twig_escape_filter($this->env, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 23, $this->source); })()), "html", null, true);
        echo ")。有効な最大サイズは";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "です。',
    'The mime type of the file is invalid (";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "). Allowed mime types are ";
        echo twig_escape_filter($this->env, (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 24, $this->source); })()), "html", null, true);
        echo ".' => 'ファイルのMIMEタイプが無効です(";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 24, $this->source); })()), "html", null, true);
        echo ")。有効なMIMEタイプは";
        echo twig_escape_filter($this->env, (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "です。',
    'This value should be ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 25, $this->source); })()), "html", null, true);
        echo " or less.' => '";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "以下でなければなりません。',
    'This value is too long. It should have ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " character or less.|This value is too long. It should have ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " characters or less.' => '値が長すぎます。";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "文字以内でなければなりません。',
    'This value should be ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 27, $this->source); })()), "html", null, true);
        echo " or more.' => '";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "以上でなければなりません。',
    'This value is too short. It should have ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 28, $this->source); })()), "html", null, true);
        echo " character or more.|This value is too short. It should have ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 28, $this->source); })()), "html", null, true);
        echo " characters or more.' => '値が短すぎます。";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "文字以上でなければなりません。',
    'This value should not be blank.' => '空であってはなりません。',
    'This value should not be null.' => 'nullであってはなりません。',
    'This value should be null.' => 'nullでなければなりません。',
    'This value is not valid.' => '有効な値ではありません。',
    'This value is not a valid time.' => '有効な時刻ではありません。',
    'This value is not a valid URL.' => '有効なURLではありません。',
    'The two values should be equal.' => '2つの値が同じでなければなりません。',
    'The file is too large. Allowed maximum size is ";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 36, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 36, $this->source); })()), "html", null, true);
        echo ".' => 'ファイルのサイズが大きすぎます。有効な最大サイズは";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 36, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "です。',
    'The file is too large.' => 'ファイルのサイズが大きすぎます。',
    'The file could not be uploaded.' => 'ファイルをアップロードできませんでした。',
    'This value should be a valid number.' => '有効な数字ではありません。',
    'This file is not a valid image.' => 'ファイルが画像ではありません。',
    'This is not a valid IP address.' => '有効なIPアドレスではありません。',
    'This value is not a valid language.' => '有効な言語名ではありません。',
    'This value is not a valid locale.' => '有効なロケールではありません。',
    'This value is not a valid country.' => '有効な国名ではありません。',
    'This value is already used.' => '既に使用されています。',
    'The size of the image could not be detected.' => '画像のサイズが検出できません。',
    'The image width is too big (";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "px). Allowed maximum width is ";
        echo twig_escape_filter($this->env, (isset($context["max_width"]) || array_key_exists("max_width", $context) ? $context["max_width"] : (function () { throw new RuntimeError('Variable "max_width" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "px.' => '画像の幅が大きすぎます(";
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "ピクセル)。";
        echo twig_escape_filter($this->env, (isset($context["max_width"]) || array_key_exists("max_width", $context) ? $context["max_width"] : (function () { throw new RuntimeError('Variable "max_width" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "ピクセルまでにしてください。',
    'The image width is too small (";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "px). Minimum width expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_width"]) || array_key_exists("min_width", $context) ? $context["min_width"] : (function () { throw new RuntimeError('Variable "min_width" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "px.' => '画像の幅が小さすぎます(";
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "ピクセル)。";
        echo twig_escape_filter($this->env, (isset($context["min_width"]) || array_key_exists("min_width", $context) ? $context["min_width"] : (function () { throw new RuntimeError('Variable "min_width" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "ピクセル以上にしてください。',
    'The image height is too big (";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "px). Allowed maximum height is ";
        echo twig_escape_filter($this->env, (isset($context["max_height"]) || array_key_exists("max_height", $context) ? $context["max_height"] : (function () { throw new RuntimeError('Variable "max_height" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "px.' => '画像の高さが大きすぎます(";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "ピクセル)。";
        echo twig_escape_filter($this->env, (isset($context["max_height"]) || array_key_exists("max_height", $context) ? $context["max_height"] : (function () { throw new RuntimeError('Variable "max_height" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "ピクセルまでにしてください。',
    'The image height is too small (";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "px). Minimum height expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_height"]) || array_key_exists("min_height", $context) ? $context["min_height"] : (function () { throw new RuntimeError('Variable "min_height" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "px.' => '画像の高さが小さすぎます(";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "ピクセル)。";
        echo twig_escape_filter($this->env, (isset($context["min_height"]) || array_key_exists("min_height", $context) ? $context["min_height"] : (function () { throw new RuntimeError('Variable "min_height" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "ピクセル以上にしてください。',
    'This value should be the user\\'s current password.' => 'ユーザーの現在のパスワードでなければなりません。',
    'This value should have exactly ";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 52, $this->source); })()), "html", null, true);
        echo " character.|This value should have exactly ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 52, $this->source); })()), "html", null, true);
        echo " characters.' => 'ちょうど";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 52, $this->source); })()), "html", null, true);
        echo "文字でなければなりません。',
    'The file was only partially uploaded.' => 'ファイルのアップロードは完全ではありません。',
    'No file was uploaded.' => 'ファイルがアップロードされていません。',
    'No temporary folder was configured in php.ini.' => 'php.iniで一時フォルダが設定されていません。',
    'Cannot write temporary file to disk.' => '一時ファイルをディスクに書き込むことができません。',
    'A PHP extension caused the upload to fail.' => 'PHP拡張によってアップロードに失敗しました。',
    'This collection should contain ";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 58, $this->source); })()), "html", null, true);
        echo " element or more.|This collection should contain ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 58, $this->source); })()), "html", null, true);
        echo " elements or more.' => '";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "個以上の要素を含んでなければいけません。',
    'This collection should contain ";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 59, $this->source); })()), "html", null, true);
        echo " element or less.|This collection should contain ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 59, $this->source); })()), "html", null, true);
        echo " elements or less.' => '要素は";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 59, $this->source); })()), "html", null, true);
        echo "個までです。',
    'This collection should contain exactly ";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 60, $this->source); })()), "html", null, true);
        echo " element.|This collection should contain exactly ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 60, $this->source); })()), "html", null, true);
        echo " elements.' => '要素はちょうど";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 60, $this->source); })()), "html", null, true);
        echo "個でなければなりません。',
    'Invalid card number.' => '無効なカード番号です。',
    'Unsupported card type or invalid card number.' => '未対応のカード種類又は無効なカード番号です。',
    'This is not a valid International Bank Account Number (IBAN).' => '有効なIBANコードではありません。',
    'This value is not a valid ISBN-10.' => '有効なISBN-10コードではありません。',
    'This value is not a valid ISBN-13.' => '有効なISBN-13コードではありません。',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => '有効なISBN-10コード又はISBN-13コードではありません。',
    'This value is not a valid ISSN.' => '有効なISSNコードではありません。',
    'This value is not a valid currency.' => '有効な貨幣ではありません。',
    'This value should be equal to ";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 69, $this->source); })()), "html", null, true);
        echo ".' => '";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 69, $this->source); })()), "html", null, true);
        echo "と等しくなければなりません。',
    'This value should be greater than ";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 70, $this->source); })()), "html", null, true);
        echo ".' => '";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 70, $this->source); })()), "html", null, true);
        echo "より大きくなければなりません。',
    'This value should be greater than or equal to ";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 71, $this->source); })()), "html", null, true);
        echo ".' => '";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "以上でなければなりません。',
    'This value should be identical to ";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 72, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 72, $this->source); })()), "html", null, true);
        echo ".' => '";
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 72, $this->source); })()), "html", null, true);
        echo "としての";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 72, $this->source); })()), "html", null, true);
        echo "と等しくなければなりません。',
    'This value should be less than ";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 73, $this->source); })()), "html", null, true);
        echo ".' => '";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 73, $this->source); })()), "html", null, true);
        echo "未満でなければなりません。',
    'This value should be less than or equal to ";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 74, $this->source); })()), "html", null, true);
        echo ".' => '";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 74, $this->source); })()), "html", null, true);
        echo "以下でなければなりません。',
    'This value should not be equal to ";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 75, $this->source); })()), "html", null, true);
        echo ".' => '";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 75, $this->source); })()), "html", null, true);
        echo "と等しくてはいけません。',
    'This value should not be identical to ";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 76, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 76, $this->source); })()), "html", null, true);
        echo ".' => '";
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 76, $this->source); })()), "html", null, true);
        echo "としての";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 76, $this->source); })()), "html", null, true);
        echo "と等しくてはいけません。',
    'The image ratio is too big (";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "). Allowed maximum ratio is ";
        echo twig_escape_filter($this->env, (isset($context["max_ratio"]) || array_key_exists("max_ratio", $context) ? $context["max_ratio"] : (function () { throw new RuntimeError('Variable "max_ratio" does not exist.', 77, $this->source); })()), "html", null, true);
        echo ".' => '画像のアスペクト比が大きすぎます(";
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 77, $this->source); })()), "html", null, true);
        echo ")。";
        echo twig_escape_filter($this->env, (isset($context["max_ratio"]) || array_key_exists("max_ratio", $context) ? $context["max_ratio"] : (function () { throw new RuntimeError('Variable "max_ratio" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "までにしてください。',
    'The image ratio is too small (";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 78, $this->source); })()), "html", null, true);
        echo "). Minimum ratio expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_ratio"]) || array_key_exists("min_ratio", $context) ? $context["min_ratio"] : (function () { throw new RuntimeError('Variable "min_ratio" does not exist.', 78, $this->source); })()), "html", null, true);
        echo ".' => '画像のアスペクト比が小さすぎます(";
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 78, $this->source); })()), "html", null, true);
        echo ")。";
        echo twig_escape_filter($this->env, (isset($context["min_ratio"]) || array_key_exists("min_ratio", $context) ? $context["min_ratio"] : (function () { throw new RuntimeError('Variable "min_ratio" does not exist.', 78, $this->source); })()), "html", null, true);
        echo "以上にしてください。',
    'The image is square (";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "px). Square images are not allowed.' => '画像が正方形になっています(";
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "ピクセル)。正方形の画像は許可されていません。',
    'The image is landscape oriented (";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "px). Landscape oriented images are not allowed.' => '画像が横向きになっています(";
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "ピクセル)。横向きの画像は許可されていません。',
    'The image is portrait oriented (";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 81, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 81, $this->source); })()), "html", null, true);
        echo "px). Portrait oriented images are not allowed.' => '画像が縦向きになっています(";
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 81, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 81, $this->source); })()), "html", null, true);
        echo "ピクセル)。縦向きの画像は許可されていません。',
    'An empty file is not allowed.' => '空のファイルは許可されていません。',
    'The host could not be resolved.' => 'ホストを解決できませんでした。',
    'This value does not match the expected ";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["charset"]) || array_key_exists("charset", $context) ? $context["charset"] : (function () { throw new RuntimeError('Variable "charset" does not exist.', 84, $this->source); })()), "html", null, true);
        echo " charset.' => 'この値は予期される文字コード（";
        echo twig_escape_filter($this->env, (isset($context["charset"]) || array_key_exists("charset", $context) ? $context["charset"] : (function () { throw new RuntimeError('Variable "charset" does not exist.', 84, $this->source); })()), "html", null, true);
        echo "）と異なります。',
    'This is not a valid Business Identifier Code (BIC).' => '有効なSWIFTコードではありません。',
    'Error' => 'エラー',
    'This is not a valid UUID.' => '有効なUUIDではありません。',
    'This value should be a multiple of ";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 88, $this->source); })()), "html", null, true);
        echo ".' => '";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 88, $this->source); })()), "html", null, true);
        echo "の倍数でなければなりません。',
    'This Business Identifier Code (BIC) is not associated with IBAN ";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["iban"]) || array_key_exists("iban", $context) ? $context["iban"] : (function () { throw new RuntimeError('Variable "iban" does not exist.', 89, $this->source); })()), "html", null, true);
        echo ".' => 'このSWIFTコードはIBANコード（";
        echo twig_escape_filter($this->env, (isset($context["iban"]) || array_key_exists("iban", $context) ? $context["iban"] : (function () { throw new RuntimeError('Variable "iban" does not exist.', 89, $this->source); })()), "html", null, true);
        echo "）に関連付けられていません。',
    'This value should be valid JSON.' => 'JSONでなければなりません。',
    'This collection should contain only unique elements.' => '要素は重複してはなりません。',
    'This value should be positive.' => '正の数でなければなりません。',
    'This value should be either positive or zero.' => '正の数、または0でなければなりません。',
    'This value should be negative.' => '負の数でなければなりません。',
    'This value should be either negative or zero.' => '負の数、または0でなければなりません。',
    'This value is not a valid timezone.' => '有効なタイムゾーンではありません。',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'このパスワードは漏洩している為使用できません。',
    'This form should not contain extra fields.' => 'フィールドグループに追加のフィールドを含んではなりません。',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'アップロードされたファイルが大きすぎます。小さなファイルで再度アップロードしてください。',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRFトークンが無効です、再送信してください。',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => '認証エラーが発生しました。',
    'Authentication credentials could not be found.' => '認証資格がありません。',
    'Authentication request could not be processed due to a system problem.' => 'システムの問題により認証要求を処理できませんでした。',
    'Invalid credentials.' => '資格が無効です。',
    'Cookie has already been used by someone else.' => 'Cookie が別のユーザーで使用されています。',
    'Not privileged to request the resource.' => 'リソースをリクエストする権限がありません。',
    'Invalid CSRF token.' => 'CSRF トークンが無効です。',
    'No authentication provider found to support the authentication token.' => '認証トークンをサポートする認証プロバイダーが見つかりません。',
    'No session available, it either timed out or cookies are not enabled.' => '利用可能なセッションがありません。タイムアウトしたか、Cookie が無効になっています。',
    'No token could be found.' => 'トークンが見つかりません。',
    'Username could not be found.' => 'ユーザー名が見つかりません。',
    'Account has expired.' => 'アカウントが有効期限切れです。',
    'Credentials have expired.' => '資格が有効期限切れです。',
    'Account is disabled.' => 'アカウントが無効です。',
    'Account is locked.' => 'アカウントはロックされています。',
  ),
));

\$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type ";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 127, $this->source); })()), "html", null, true);
        echo ".' => 'This value should be of type ";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 127, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least ";
        // line 130
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 130, $this->source); })()), "html", null, true);
        echo " choice.|You must select at least ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 130, $this->source); })()), "html", null, true);
        echo " choices.' => 'You must select at least ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 130, $this->source); })()), "html", null, true);
        echo " choice.|You must select at least ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 130, $this->source); })()), "html", null, true);
        echo " choices.',
    'You must select at most ";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 131, $this->source); })()), "html", null, true);
        echo " choice.|You must select at most ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 131, $this->source); })()), "html", null, true);
        echo " choices.' => 'You must select at most ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 131, $this->source); })()), "html", null, true);
        echo " choice.|You must select at most ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 131, $this->source); })()), "html", null, true);
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
        // line 140
        echo twig_escape_filter($this->env, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 140, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 140, $this->source); })()), "html", null, true);
        echo "). Allowed maximum size is ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 140, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 140, $this->source); })()), "html", null, true);
        echo ".' => 'The file is too large (";
        echo twig_escape_filter($this->env, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 140, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 140, $this->source); })()), "html", null, true);
        echo "). Allowed maximum size is ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 140, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 140, $this->source); })()), "html", null, true);
        echo ".',
    'The mime type of the file is invalid (";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 141, $this->source); })()), "html", null, true);
        echo "). Allowed mime types are ";
        echo twig_escape_filter($this->env, (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 141, $this->source); })()), "html", null, true);
        echo ".' => 'The mime type of the file is invalid (";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 141, $this->source); })()), "html", null, true);
        echo "). Allowed mime types are ";
        echo twig_escape_filter($this->env, (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 141, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be ";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 142, $this->source); })()), "html", null, true);
        echo " or less.' => 'This value should be ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 142, $this->source); })()), "html", null, true);
        echo " or less.',
    'This value is too long. It should have ";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 143, $this->source); })()), "html", null, true);
        echo " character or less.|This value is too long. It should have ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 143, $this->source); })()), "html", null, true);
        echo " characters or less.' => 'This value is too long. It should have ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 143, $this->source); })()), "html", null, true);
        echo " character or less.|This value is too long. It should have ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 143, $this->source); })()), "html", null, true);
        echo " characters or less.',
    'This value should be ";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 144, $this->source); })()), "html", null, true);
        echo " or more.' => 'This value should be ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 144, $this->source); })()), "html", null, true);
        echo " or more.',
    'This value is too short. It should have ";
        // line 145
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 145, $this->source); })()), "html", null, true);
        echo " character or more.|This value is too short. It should have ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 145, $this->source); })()), "html", null, true);
        echo " characters or more.' => 'This value is too short. It should have ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 145, $this->source); })()), "html", null, true);
        echo " character or more.|This value is too short. It should have ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 145, $this->source); })()), "html", null, true);
        echo " characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is ";
        // line 153
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 153, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 153, $this->source); })()), "html", null, true);
        echo ".' => 'The file is too large. Allowed maximum size is ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 153, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 153, $this->source); })()), "html", null, true);
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
        // line 164
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 164, $this->source); })()), "html", null, true);
        echo "px). Allowed maximum width is ";
        echo twig_escape_filter($this->env, (isset($context["max_width"]) || array_key_exists("max_width", $context) ? $context["max_width"] : (function () { throw new RuntimeError('Variable "max_width" does not exist.', 164, $this->source); })()), "html", null, true);
        echo "px.' => 'The image width is too big (";
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 164, $this->source); })()), "html", null, true);
        echo "px). Allowed maximum width is ";
        echo twig_escape_filter($this->env, (isset($context["max_width"]) || array_key_exists("max_width", $context) ? $context["max_width"] : (function () { throw new RuntimeError('Variable "max_width" does not exist.', 164, $this->source); })()), "html", null, true);
        echo "px.',
    'The image width is too small (";
        // line 165
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 165, $this->source); })()), "html", null, true);
        echo "px). Minimum width expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_width"]) || array_key_exists("min_width", $context) ? $context["min_width"] : (function () { throw new RuntimeError('Variable "min_width" does not exist.', 165, $this->source); })()), "html", null, true);
        echo "px.' => 'The image width is too small (";
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 165, $this->source); })()), "html", null, true);
        echo "px). Minimum width expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_width"]) || array_key_exists("min_width", $context) ? $context["min_width"] : (function () { throw new RuntimeError('Variable "min_width" does not exist.', 165, $this->source); })()), "html", null, true);
        echo "px.',
    'The image height is too big (";
        // line 166
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 166, $this->source); })()), "html", null, true);
        echo "px). Allowed maximum height is ";
        echo twig_escape_filter($this->env, (isset($context["max_height"]) || array_key_exists("max_height", $context) ? $context["max_height"] : (function () { throw new RuntimeError('Variable "max_height" does not exist.', 166, $this->source); })()), "html", null, true);
        echo "px.' => 'The image height is too big (";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 166, $this->source); })()), "html", null, true);
        echo "px). Allowed maximum height is ";
        echo twig_escape_filter($this->env, (isset($context["max_height"]) || array_key_exists("max_height", $context) ? $context["max_height"] : (function () { throw new RuntimeError('Variable "max_height" does not exist.', 166, $this->source); })()), "html", null, true);
        echo "px.',
    'The image height is too small (";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 167, $this->source); })()), "html", null, true);
        echo "px). Minimum height expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_height"]) || array_key_exists("min_height", $context) ? $context["min_height"] : (function () { throw new RuntimeError('Variable "min_height" does not exist.', 167, $this->source); })()), "html", null, true);
        echo "px.' => 'The image height is too small (";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 167, $this->source); })()), "html", null, true);
        echo "px). Minimum height expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_height"]) || array_key_exists("min_height", $context) ? $context["min_height"] : (function () { throw new RuntimeError('Variable "min_height" does not exist.', 167, $this->source); })()), "html", null, true);
        echo "px.',
    'This value should be the user\\'s current password.' => 'This value should be the user\\'s current password.',
    'This value should have exactly ";
        // line 169
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 169, $this->source); })()), "html", null, true);
        echo " character.|This value should have exactly ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 169, $this->source); })()), "html", null, true);
        echo " characters.' => 'This value should have exactly ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 169, $this->source); })()), "html", null, true);
        echo " character.|This value should have exactly ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 169, $this->source); })()), "html", null, true);
        echo " characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain ";
        // line 175
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 175, $this->source); })()), "html", null, true);
        echo " element or more.|This collection should contain ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 175, $this->source); })()), "html", null, true);
        echo " elements or more.' => 'This collection should contain ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 175, $this->source); })()), "html", null, true);
        echo " element or more.|This collection should contain ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 175, $this->source); })()), "html", null, true);
        echo " elements or more.',
    'This collection should contain ";
        // line 176
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 176, $this->source); })()), "html", null, true);
        echo " element or less.|This collection should contain ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 176, $this->source); })()), "html", null, true);
        echo " elements or less.' => 'This collection should contain ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 176, $this->source); })()), "html", null, true);
        echo " element or less.|This collection should contain ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 176, $this->source); })()), "html", null, true);
        echo " elements or less.',
    'This collection should contain exactly ";
        // line 177
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 177, $this->source); })()), "html", null, true);
        echo " element.|This collection should contain exactly ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 177, $this->source); })()), "html", null, true);
        echo " elements.' => 'This collection should contain exactly ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 177, $this->source); })()), "html", null, true);
        echo " element.|This collection should contain exactly ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 177, $this->source); })()), "html", null, true);
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
        // line 186
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 186, $this->source); })()), "html", null, true);
        echo ".' => 'This value should be equal to ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 186, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be greater than ";
        // line 187
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 187, $this->source); })()), "html", null, true);
        echo ".' => 'This value should be greater than ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 187, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be greater than or equal to ";
        // line 188
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 188, $this->source); })()), "html", null, true);
        echo ".' => 'This value should be greater than or equal to ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 188, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be identical to ";
        // line 189
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 189, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 189, $this->source); })()), "html", null, true);
        echo ".' => 'This value should be identical to ";
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 189, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 189, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be less than ";
        // line 190
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 190, $this->source); })()), "html", null, true);
        echo ".' => 'This value should be less than ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 190, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be less than or equal to ";
        // line 191
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 191, $this->source); })()), "html", null, true);
        echo ".' => 'This value should be less than or equal to ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 191, $this->source); })()), "html", null, true);
        echo ".',
    'This value should not be equal to ";
        // line 192
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 192, $this->source); })()), "html", null, true);
        echo ".' => 'This value should not be equal to ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 192, $this->source); })()), "html", null, true);
        echo ".',
    'This value should not be identical to ";
        // line 193
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 193, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 193, $this->source); })()), "html", null, true);
        echo ".' => 'This value should not be identical to ";
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 193, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 193, $this->source); })()), "html", null, true);
        echo ".',
    'The image ratio is too big (";
        // line 194
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 194, $this->source); })()), "html", null, true);
        echo "). Allowed maximum ratio is ";
        echo twig_escape_filter($this->env, (isset($context["max_ratio"]) || array_key_exists("max_ratio", $context) ? $context["max_ratio"] : (function () { throw new RuntimeError('Variable "max_ratio" does not exist.', 194, $this->source); })()), "html", null, true);
        echo ".' => 'The image ratio is too big (";
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 194, $this->source); })()), "html", null, true);
        echo "). Allowed maximum ratio is ";
        echo twig_escape_filter($this->env, (isset($context["max_ratio"]) || array_key_exists("max_ratio", $context) ? $context["max_ratio"] : (function () { throw new RuntimeError('Variable "max_ratio" does not exist.', 194, $this->source); })()), "html", null, true);
        echo ".',
    'The image ratio is too small (";
        // line 195
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 195, $this->source); })()), "html", null, true);
        echo "). Minimum ratio expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_ratio"]) || array_key_exists("min_ratio", $context) ? $context["min_ratio"] : (function () { throw new RuntimeError('Variable "min_ratio" does not exist.', 195, $this->source); })()), "html", null, true);
        echo ".' => 'The image ratio is too small (";
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 195, $this->source); })()), "html", null, true);
        echo "). Minimum ratio expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_ratio"]) || array_key_exists("min_ratio", $context) ? $context["min_ratio"] : (function () { throw new RuntimeError('Variable "min_ratio" does not exist.', 195, $this->source); })()), "html", null, true);
        echo ".',
    'The image is square (";
        // line 196
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 196, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 196, $this->source); })()), "html", null, true);
        echo "px). Square images are not allowed.' => 'The image is square (";
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 196, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 196, $this->source); })()), "html", null, true);
        echo "px). Square images are not allowed.',
    'The image is landscape oriented (";
        // line 197
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 197, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 197, $this->source); })()), "html", null, true);
        echo "px). Landscape oriented images are not allowed.' => 'The image is landscape oriented (";
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 197, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 197, $this->source); })()), "html", null, true);
        echo "px). Landscape oriented images are not allowed.',
    'The image is portrait oriented (";
        // line 198
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 198, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 198, $this->source); })()), "html", null, true);
        echo "px). Portrait oriented images are not allowed.' => 'The image is portrait oriented (";
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 198, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 198, $this->source); })()), "html", null, true);
        echo "px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected ";
        // line 201
        echo twig_escape_filter($this->env, (isset($context["charset"]) || array_key_exists("charset", $context) ? $context["charset"] : (function () { throw new RuntimeError('Variable "charset" does not exist.', 201, $this->source); })()), "html", null, true);
        echo " charset.' => 'This value does not match the expected ";
        echo twig_escape_filter($this->env, (isset($context["charset"]) || array_key_exists("charset", $context) ? $context["charset"] : (function () { throw new RuntimeError('Variable "charset" does not exist.', 201, $this->source); })()), "html", null, true);
        echo " charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This is not a valid UUID.',
    'This value should be a multiple of ";
        // line 205
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 205, $this->source); })()), "html", null, true);
        echo ".' => 'This value should be a multiple of ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 205, $this->source); })()), "html", null, true);
        echo ".',
    'This Business Identifier Code (BIC) is not associated with IBAN ";
        // line 206
        echo twig_escape_filter($this->env, (isset($context["iban"]) || array_key_exists("iban", $context) ? $context["iban"] : (function () { throw new RuntimeError('Variable "iban" does not exist.', 206, $this->source); })()), "html", null, true);
        echo ".' => 'This Business Identifier Code (BIC) is not associated with IBAN ";
        echo twig_escape_filter($this->env, (isset($context["iban"]) || array_key_exists("iban", $context) ? $context["iban"] : (function () { throw new RuntimeError('Variable "iban" does not exist.', 206, $this->source); })()), "html", null, true);
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
        // line 215
        echo twig_escape_filter($this->env, (isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 215, $this->source); })()), "html", null, true);
        echo " and ";
        echo twig_escape_filter($this->env, (isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 215, $this->source); })()), "html", null, true);
        echo ".' => 'This value should be between ";
        echo twig_escape_filter($this->env, (isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 215, $this->source); })()), "html", null, true);
        echo " and ";
        echo twig_escape_filter($this->env, (isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 215, $this->source); })()), "html", null, true);
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
        return "var/cache/dev/translations/catalogue.ja.52lf549.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  775 => 215,  761 => 206,  755 => 205,  746 => 201,  734 => 198,  724 => 197,  714 => 196,  704 => 195,  694 => 194,  684 => 193,  678 => 192,  672 => 191,  666 => 190,  656 => 189,  650 => 188,  644 => 187,  638 => 186,  620 => 177,  610 => 176,  600 => 175,  585 => 169,  574 => 167,  564 => 166,  554 => 165,  544 => 164,  524 => 153,  507 => 145,  501 => 144,  491 => 143,  485 => 142,  475 => 141,  457 => 140,  439 => 131,  429 => 130,  421 => 127,  378 => 89,  372 => 88,  363 => 84,  351 => 81,  341 => 80,  331 => 79,  321 => 78,  311 => 77,  301 => 76,  295 => 75,  289 => 74,  283 => 73,  273 => 72,  267 => 71,  261 => 70,  255 => 69,  239 => 60,  231 => 59,  223 => 58,  210 => 52,  199 => 50,  189 => 49,  179 => 48,  169 => 47,  149 => 36,  134 => 28,  128 => 27,  120 => 26,  114 => 25,  104 => 24,  86 => 23,  70 => 14,  62 => 13,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Symfony\\Component\\Translation\\MessageCatalogue;

\$catalogue = new MessageCatalogue('ja', array (
  'validators' => 
  array (
    'This value should be false.' => 'falseでなければなりません。',
    'This value should be true.' => 'trueでなければなりません。',
    'This value should be of type {{ type }}.' => '型は{{ type }}でなければなりません。',
    'This value should be blank.' => '空でなければなりません。',
    'The value you selected is not a valid choice.' => '有効な選択肢ではありません。',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => '{{ limit }}個以上選択してください。',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => '{{ limit }}個以内で選択してください。',
    'One or more of the given values is invalid.' => '無効な選択肢が含まれています。',
    'This field was not expected.' => 'このフィールドは予期されていませんでした。',
    'This field is missing.' => 'このフィールドは、欠落しています。',
    'This value is not a valid date.' => '有効な日付ではありません。',
    'This value is not a valid datetime.' => '有効な日時ではありません。',
    'This value is not a valid email address.' => '有効なメールアドレスではありません。',
    'The file could not be found.' => 'ファイルが見つかりません。',
    'The file is not readable.' => 'ファイルを読み込めません。',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'ファイルのサイズが大きすぎます({{ size }} {{ suffix }})。有効な最大サイズは{{ limit }} {{ suffix }}です。',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'ファイルのMIMEタイプが無効です({{ type }})。有効なMIMEタイプは{{ types }}です。',
    'This value should be {{ limit }} or less.' => '{{ limit }}以下でなければなりません。',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => '値が長すぎます。{{ limit }}文字以内でなければなりません。',
    'This value should be {{ limit }} or more.' => '{{ limit }}以上でなければなりません。',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => '値が短すぎます。{{ limit }}文字以上でなければなりません。',
    'This value should not be blank.' => '空であってはなりません。',
    'This value should not be null.' => 'nullであってはなりません。',
    'This value should be null.' => 'nullでなければなりません。',
    'This value is not valid.' => '有効な値ではありません。',
    'This value is not a valid time.' => '有効な時刻ではありません。',
    'This value is not a valid URL.' => '有効なURLではありません。',
    'The two values should be equal.' => '2つの値が同じでなければなりません。',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'ファイルのサイズが大きすぎます。有効な最大サイズは{{ limit }} {{ suffix }}です。',
    'The file is too large.' => 'ファイルのサイズが大きすぎます。',
    'The file could not be uploaded.' => 'ファイルをアップロードできませんでした。',
    'This value should be a valid number.' => '有効な数字ではありません。',
    'This file is not a valid image.' => 'ファイルが画像ではありません。',
    'This is not a valid IP address.' => '有効なIPアドレスではありません。',
    'This value is not a valid language.' => '有効な言語名ではありません。',
    'This value is not a valid locale.' => '有効なロケールではありません。',
    'This value is not a valid country.' => '有効な国名ではありません。',
    'This value is already used.' => '既に使用されています。',
    'The size of the image could not be detected.' => '画像のサイズが検出できません。',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => '画像の幅が大きすぎます({{ width }}ピクセル)。{{ max_width }}ピクセルまでにしてください。',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => '画像の幅が小さすぎます({{ width }}ピクセル)。{{ min_width }}ピクセル以上にしてください。',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => '画像の高さが大きすぎます({{ height }}ピクセル)。{{ max_height }}ピクセルまでにしてください。',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => '画像の高さが小さすぎます({{ height }}ピクセル)。{{ min_height }}ピクセル以上にしてください。',
    'This value should be the user\\'s current password.' => 'ユーザーの現在のパスワードでなければなりません。',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'ちょうど{{ limit }}文字でなければなりません。',
    'The file was only partially uploaded.' => 'ファイルのアップロードは完全ではありません。',
    'No file was uploaded.' => 'ファイルがアップロードされていません。',
    'No temporary folder was configured in php.ini.' => 'php.iniで一時フォルダが設定されていません。',
    'Cannot write temporary file to disk.' => '一時ファイルをディスクに書き込むことができません。',
    'A PHP extension caused the upload to fail.' => 'PHP拡張によってアップロードに失敗しました。',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => '{{ limit }}個以上の要素を含んでなければいけません。',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => '要素は{{ limit }}個までです。',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => '要素はちょうど{{ limit }}個でなければなりません。',
    'Invalid card number.' => '無効なカード番号です。',
    'Unsupported card type or invalid card number.' => '未対応のカード種類又は無効なカード番号です。',
    'This is not a valid International Bank Account Number (IBAN).' => '有効なIBANコードではありません。',
    'This value is not a valid ISBN-10.' => '有効なISBN-10コードではありません。',
    'This value is not a valid ISBN-13.' => '有効なISBN-13コードではありません。',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => '有効なISBN-10コード又はISBN-13コードではありません。',
    'This value is not a valid ISSN.' => '有効なISSNコードではありません。',
    'This value is not a valid currency.' => '有効な貨幣ではありません。',
    'This value should be equal to {{ compared_value }}.' => '{{ compared_value }}と等しくなければなりません。',
    'This value should be greater than {{ compared_value }}.' => '{{ compared_value }}より大きくなければなりません。',
    'This value should be greater than or equal to {{ compared_value }}.' => '{{ compared_value }}以上でなければなりません。',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => '{{ compared_value_type }}としての{{ compared_value }}と等しくなければなりません。',
    'This value should be less than {{ compared_value }}.' => '{{ compared_value }}未満でなければなりません。',
    'This value should be less than or equal to {{ compared_value }}.' => '{{ compared_value }}以下でなければなりません。',
    'This value should not be equal to {{ compared_value }}.' => '{{ compared_value }}と等しくてはいけません。',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => '{{ compared_value_type }}としての{{ compared_value }}と等しくてはいけません。',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => '画像のアスペクト比が大きすぎます({{ ratio }})。{{ max_ratio }}までにしてください。',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => '画像のアスペクト比が小さすぎます({{ ratio }})。{{ min_ratio }}以上にしてください。',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => '画像が正方形になっています({{ width }}x{{ height }}ピクセル)。正方形の画像は許可されていません。',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => '画像が横向きになっています({{ width }}x{{ height }}ピクセル)。横向きの画像は許可されていません。',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => '画像が縦向きになっています({{ width }}x{{ height }}ピクセル)。縦向きの画像は許可されていません。',
    'An empty file is not allowed.' => '空のファイルは許可されていません。',
    'The host could not be resolved.' => 'ホストを解決できませんでした。',
    'This value does not match the expected {{ charset }} charset.' => 'この値は予期される文字コード（{{ charset }}）と異なります。',
    'This is not a valid Business Identifier Code (BIC).' => '有効なSWIFTコードではありません。',
    'Error' => 'エラー',
    'This is not a valid UUID.' => '有効なUUIDではありません。',
    'This value should be a multiple of {{ compared_value }}.' => '{{ compared_value }}の倍数でなければなりません。',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'このSWIFTコードはIBANコード（{{ iban }}）に関連付けられていません。',
    'This value should be valid JSON.' => 'JSONでなければなりません。',
    'This collection should contain only unique elements.' => '要素は重複してはなりません。',
    'This value should be positive.' => '正の数でなければなりません。',
    'This value should be either positive or zero.' => '正の数、または0でなければなりません。',
    'This value should be negative.' => '負の数でなければなりません。',
    'This value should be either negative or zero.' => '負の数、または0でなければなりません。',
    'This value is not a valid timezone.' => '有効なタイムゾーンではありません。',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'このパスワードは漏洩している為使用できません。',
    'This form should not contain extra fields.' => 'フィールドグループに追加のフィールドを含んではなりません。',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'アップロードされたファイルが大きすぎます。小さなファイルで再度アップロードしてください。',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRFトークンが無効です、再送信してください。',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => '認証エラーが発生しました。',
    'Authentication credentials could not be found.' => '認証資格がありません。',
    'Authentication request could not be processed due to a system problem.' => 'システムの問題により認証要求を処理できませんでした。',
    'Invalid credentials.' => '資格が無効です。',
    'Cookie has already been used by someone else.' => 'Cookie が別のユーザーで使用されています。',
    'Not privileged to request the resource.' => 'リソースをリクエストする権限がありません。',
    'Invalid CSRF token.' => 'CSRF トークンが無効です。',
    'No authentication provider found to support the authentication token.' => '認証トークンをサポートする認証プロバイダーが見つかりません。',
    'No session available, it either timed out or cookies are not enabled.' => '利用可能なセッションがありません。タイムアウトしたか、Cookie が無効になっています。',
    'No token could be found.' => 'トークンが見つかりません。',
    'Username could not be found.' => 'ユーザー名が見つかりません。',
    'Account has expired.' => 'アカウントが有効期限切れです。',
    'Credentials have expired.' => '資格が有効期限切れです。',
    'Account is disabled.' => 'アカウントが無効です。',
    'Account is locked.' => 'アカウントはロックされています。',
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
", "var/cache/dev/translations/catalogue.ja.52lf549.php", "/var/www/public/DevLaon/templates/var/cache/dev/translations/catalogue.ja.52lf549.php");
    }
}
