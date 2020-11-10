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

/* var/cache/dev/translations/catalogue.id.52lf549.php */
class __TwigTemplate_43793992a6cab5e7906d89aa42ec6f7256626bf36212ee94f907eb7399cdd6f5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/translations/catalogue.id.52lf549.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/translations/catalogue.id.52lf549.php"));

        // line 1
        echo "<?php

use Symfony\\Component\\Translation\\MessageCatalogue;

\$catalogue = new MessageCatalogue('id', array (
  'validators' => 
  array (
    'This value should be false.' => 'Nilai ini harus bernilai salah.',
    'This value should be true.' => 'Nilai ini harus bernilai benar.',
    'This value should be of type ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 10, $this->source); })()), "html", null, true);
        echo ".' => 'Nilai ini harus bertipe ";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 10, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be blank.' => 'Nilai ini harus kosong.',
    'The value you selected is not a valid choice.' => 'Nilai yang dipilih tidak tepat.',
    'You must select at least ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " choice.|You must select at least ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " choices.' => 'Anda harus memilih paling tidak ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " pilihan.',
    'You must select at most ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " choice.|You must select at most ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " choices.' => 'Anda harus memilih paling banyak ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " pilihan.',
    'One or more of the given values is invalid.' => 'Satu atau lebih nilai yang diberikan tidak sah.',
    'This field was not expected.' => 'Ruas ini tidak diharapkan.',
    'This field is missing.' => 'Ruas ini hilang.',
    'This value is not a valid date.' => 'Nilai ini bukan merupakan tanggal yang sah.',
    'This value is not a valid datetime.' => 'Nilai ini bukan merupakan tanggal dan waktu yang sah.',
    'This value is not a valid email address.' => 'Nilai ini bukan alamat surel yang sah.',
    'The file could not be found.' => 'Berkas tidak dapat ditemukan.',
    'The file is not readable.' => 'Berkas tidak dapat dibaca.',
    'The file is too large (";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "). Allowed maximum size is ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 23, $this->source); })()), "html", null, true);
        echo ".' => 'Ukuran berkas terlalu besar (";
        echo twig_escape_filter($this->env, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "). Ukuran maksimum yang diizinkan adalah ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 23, $this->source); })()), "html", null, true);
        echo ".',
    'The mime type of the file is invalid (";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "). Allowed mime types are ";
        echo twig_escape_filter($this->env, (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 24, $this->source); })()), "html", null, true);
        echo ".' => 'Jenis berkas (";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 24, $this->source); })()), "html", null, true);
        echo ") tidak sah. Jenis berkas yang diizinkan adalah ";
        echo twig_escape_filter($this->env, (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 24, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be ";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 25, $this->source); })()), "html", null, true);
        echo " or less.' => 'Nilai ini harus ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 25, $this->source); })()), "html", null, true);
        echo " atau kurang.',
    'This value is too long. It should have ";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " character or less.|This value is too long. It should have ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " characters or less.' => 'Nilai ini terlalu panjang. Seharusnya ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " karakter atau kurang.',
    'This value should be ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 27, $this->source); })()), "html", null, true);
        echo " or more.' => 'Nilai ini harus ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 27, $this->source); })()), "html", null, true);
        echo " atau lebih.',
    'This value is too short. It should have ";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 28, $this->source); })()), "html", null, true);
        echo " character or more.|This value is too short. It should have ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 28, $this->source); })()), "html", null, true);
        echo " characters or more.' => 'Nilai ini terlalu pendek. Seharusnya ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 28, $this->source); })()), "html", null, true);
        echo " karakter atau lebih.',
    'This value should not be blank.' => 'Nilai ini tidak boleh kosong.',
    'This value should not be null.' => 'Nilai ini tidak boleh \\'null\\'.',
    'This value should be null.' => 'Nilai ini harus \\'null\\'.',
    'This value is not valid.' => 'Nilai ini tidak sah.',
    'This value is not a valid time.' => 'Nilai ini bukan merupakan waktu yang sah.',
    'This value is not a valid URL.' => 'Nilai ini bukan URL yang sah.',
    'The two values should be equal.' => 'Isi keduanya harus sama.',
    'The file is too large. Allowed maximum size is ";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 36, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 36, $this->source); })()), "html", null, true);
        echo ".' => 'Ukuran berkas terlalu besar. Ukuran maksimum yang diizinkan adalah ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 36, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 36, $this->source); })()), "html", null, true);
        echo ".',
    'The file is too large.' => 'Ukuran berkas terlalu besar.',
    'The file could not be uploaded.' => 'Berkas tidak dapat diunggah.',
    'This value should be a valid number.' => 'Nilai ini harus angka yang sah.',
    'This file is not a valid image.' => 'Berkas ini tidak termasuk citra.',
    'This is not a valid IP address.' => 'Ini bukan alamat IP yang sah.',
    'This value is not a valid language.' => 'Nilai ini bukan bahasa yang sah.',
    'This value is not a valid locale.' => 'Nilai ini bukan lokal yang sah.',
    'This value is not a valid country.' => 'Nilai ini bukan negara yang sah.',
    'This value is already used.' => 'Nilai ini sudah digunakan.',
    'The size of the image could not be detected.' => 'Ukuran dari citra tidak bisa dideteksi.',
    'The image width is too big (";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "px). Allowed maximum width is ";
        echo twig_escape_filter($this->env, (isset($context["max_width"]) || array_key_exists("max_width", $context) ? $context["max_width"] : (function () { throw new RuntimeError('Variable "max_width" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "px.' => 'Lebar citra terlalu besar (";
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "px). Ukuran lebar maksimum adalah ";
        echo twig_escape_filter($this->env, (isset($context["max_width"]) || array_key_exists("max_width", $context) ? $context["max_width"] : (function () { throw new RuntimeError('Variable "max_width" does not exist.', 47, $this->source); })()), "html", null, true);
        echo "px.',
    'The image width is too small (";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "px). Minimum width expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_width"]) || array_key_exists("min_width", $context) ? $context["min_width"] : (function () { throw new RuntimeError('Variable "min_width" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "px.' => 'Lebar citra terlalu kecil (";
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "px). Ukuran lebar minimum yang diharapkan adalah ";
        echo twig_escape_filter($this->env, (isset($context["min_width"]) || array_key_exists("min_width", $context) ? $context["min_width"] : (function () { throw new RuntimeError('Variable "min_width" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "px.',
    'The image height is too big (";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "px). Allowed maximum height is ";
        echo twig_escape_filter($this->env, (isset($context["max_height"]) || array_key_exists("max_height", $context) ? $context["max_height"] : (function () { throw new RuntimeError('Variable "max_height" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "px.' => 'Tinggi citra terlalu besar (";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "px). Ukuran tinggi maksimum adalah ";
        echo twig_escape_filter($this->env, (isset($context["max_height"]) || array_key_exists("max_height", $context) ? $context["max_height"] : (function () { throw new RuntimeError('Variable "max_height" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "px.',
    'The image height is too small (";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "px). Minimum height expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_height"]) || array_key_exists("min_height", $context) ? $context["min_height"] : (function () { throw new RuntimeError('Variable "min_height" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "px.' => 'Tinggi citra terlalu kecil (";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "px). Ukuran tinggi minimum yang diharapkan adalah ";
        echo twig_escape_filter($this->env, (isset($context["min_height"]) || array_key_exists("min_height", $context) ? $context["min_height"] : (function () { throw new RuntimeError('Variable "min_height" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "px.',
    'This value should be the user\\'s current password.' => 'Nilai ini harus kata sandi pengguna saat ini.',
    'This value should have exactly ";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 52, $this->source); })()), "html", null, true);
        echo " character.|This value should have exactly ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 52, $this->source); })()), "html", null, true);
        echo " characters.' => 'Nilai ini harus memiliki tepat ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 52, $this->source); })()), "html", null, true);
        echo " karakter.',
    'The file was only partially uploaded.' => 'Berkas hanya terunggah sebagian.',
    'No file was uploaded.' => 'Tidak ada berkas terunggah.',
    'No temporary folder was configured in php.ini.' => 'Direktori sementara tidak dikonfiguasi pada php.ini.',
    'Cannot write temporary file to disk.' => 'Tidak dapat menuliskan berkas sementara ke dalam media penyimpanan.',
    'A PHP extension caused the upload to fail.' => 'Sebuah ekstensi PHP menyebabkan kegagalan unggah.',
    'This collection should contain ";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 58, $this->source); })()), "html", null, true);
        echo " element or more.|This collection should contain ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 58, $this->source); })()), "html", null, true);
        echo " elements or more.' => 'Kumpulan ini harus memiliki ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 58, $this->source); })()), "html", null, true);
        echo " elemen atau lebih.',
    'This collection should contain ";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 59, $this->source); })()), "html", null, true);
        echo " element or less.|This collection should contain ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 59, $this->source); })()), "html", null, true);
        echo " elements or less.' => 'Kumpulan ini harus memiliki kurang dari ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 59, $this->source); })()), "html", null, true);
        echo " elemen.',
    'This collection should contain exactly ";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 60, $this->source); })()), "html", null, true);
        echo " element.|This collection should contain exactly ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 60, $this->source); })()), "html", null, true);
        echo " elements.' => 'Kumpulan ini harus memiliki tepat ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 60, $this->source); })()), "html", null, true);
        echo " elemen.',
    'Invalid card number.' => 'Nomor kartu tidak sah.',
    'Unsupported card type or invalid card number.' => 'Jenis kartu tidak didukung atau nomor kartu tidak sah.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Ini bukan Nomor Rekening Bank Internasional (IBAN) yang sah.',
    'This value is not a valid ISBN-10.' => 'Nilai ini bukan ISBN-10 yang sah.',
    'This value is not a valid ISBN-13.' => 'Nilai ini bukan ISBN-13 yang sah.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Nilai ini bukan ISBN-10 maupun ISBN-13 yang sah.',
    'This value is not a valid ISSN.' => 'Nilai ini bukan ISSN yang sah.',
    'This value is not a valid currency.' => 'Nilai ini bukan mata uang yang sah.',
    'This value should be equal to ";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 69, $this->source); })()), "html", null, true);
        echo ".' => 'Nilai ini seharusnya sama dengan ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 69, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be greater than ";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 70, $this->source); })()), "html", null, true);
        echo ".' => 'Nilai ini seharusnya lebih dari ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 70, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be greater than or equal to ";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 71, $this->source); })()), "html", null, true);
        echo ".' => 'Nilai ini seharusnya lebih dari atau sama dengan ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 71, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be identical to ";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 72, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 72, $this->source); })()), "html", null, true);
        echo ".' => 'Nilai ini seharusnya identik dengan ";
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 72, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 72, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be less than ";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 73, $this->source); })()), "html", null, true);
        echo ".' => 'Nilai ini seharusnya kurang dari ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 73, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be less than or equal to ";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 74, $this->source); })()), "html", null, true);
        echo ".' => 'Nilai ini seharusnya kurang dari atau sama dengan ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 74, $this->source); })()), "html", null, true);
        echo ".',
    'This value should not be equal to ";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 75, $this->source); })()), "html", null, true);
        echo ".' => 'Nilai ini seharusnya tidak sama dengan ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 75, $this->source); })()), "html", null, true);
        echo ".',
    'This value should not be identical to ";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 76, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 76, $this->source); })()), "html", null, true);
        echo ".' => 'Nilai ini seharusnya tidak identik dengan ";
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 76, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 76, $this->source); })()), "html", null, true);
        echo ".',
    'The image ratio is too big (";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "). Allowed maximum ratio is ";
        echo twig_escape_filter($this->env, (isset($context["max_ratio"]) || array_key_exists("max_ratio", $context) ? $context["max_ratio"] : (function () { throw new RuntimeError('Variable "max_ratio" does not exist.', 77, $this->source); })()), "html", null, true);
        echo ".' => 'Rasio citra terlalu besar (";
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "). Rasio maksimum yang diizinkan adalah ";
        echo twig_escape_filter($this->env, (isset($context["max_ratio"]) || array_key_exists("max_ratio", $context) ? $context["max_ratio"] : (function () { throw new RuntimeError('Variable "max_ratio" does not exist.', 77, $this->source); })()), "html", null, true);
        echo ".',
    'The image ratio is too small (";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 78, $this->source); })()), "html", null, true);
        echo "). Minimum ratio expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_ratio"]) || array_key_exists("min_ratio", $context) ? $context["min_ratio"] : (function () { throw new RuntimeError('Variable "min_ratio" does not exist.', 78, $this->source); })()), "html", null, true);
        echo ".' => 'Rasio citra terlalu kecil (";
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 78, $this->source); })()), "html", null, true);
        echo "). Rasio minimum yang diharapkan adalah ";
        echo twig_escape_filter($this->env, (isset($context["min_ratio"]) || array_key_exists("min_ratio", $context) ? $context["min_ratio"] : (function () { throw new RuntimeError('Variable "min_ratio" does not exist.', 78, $this->source); })()), "html", null, true);
        echo ".',
    'The image is square (";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "px). Square images are not allowed.' => 'Citra persegi (";
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "px). Citra persegi tidak diizinkan.',
    'The image is landscape oriented (";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "px). Landscape oriented images are not allowed.' => 'Citra berorientasi lanskap (";
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 80, $this->source); })()), "html", null, true);
        echo "px). Citra berorientasi lanskap tidak diizinkan.',
    'The image is portrait oriented (";
        // line 81
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 81, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 81, $this->source); })()), "html", null, true);
        echo "px). Portrait oriented images are not allowed.' => 'Citra berorientasi potret (";
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 81, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 81, $this->source); })()), "html", null, true);
        echo "px). Citra berorientasi potret tidak diizinkan.',
    'An empty file is not allowed.' => 'Berkas kosong tidak diizinkan.',
    'The host could not be resolved.' => 'Host tidak dapat diselesaikan.',
    'This value does not match the expected ";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["charset"]) || array_key_exists("charset", $context) ? $context["charset"] : (function () { throw new RuntimeError('Variable "charset" does not exist.', 84, $this->source); })()), "html", null, true);
        echo " charset.' => 'Nilai ini tidak memenuhi set karakter ";
        echo twig_escape_filter($this->env, (isset($context["charset"]) || array_key_exists("charset", $context) ? $context["charset"] : (function () { throw new RuntimeError('Variable "charset" does not exist.', 84, $this->source); })()), "html", null, true);
        echo " yang diharapkan.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ini bukan Business Identifier Code (BIC) yang sah.',
    'Error' => 'Galat',
    'This is not a valid UUID.' => 'Ini bukan UUID yang sah.',
    'This value should be a multiple of ";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 88, $this->source); })()), "html", null, true);
        echo ".' => 'Nilai ini harus kelipatan dari ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 88, $this->source); })()), "html", null, true);
        echo ".',
    'This Business Identifier Code (BIC) is not associated with IBAN ";
        // line 89
        echo twig_escape_filter($this->env, (isset($context["iban"]) || array_key_exists("iban", $context) ? $context["iban"] : (function () { throw new RuntimeError('Variable "iban" does not exist.', 89, $this->source); })()), "html", null, true);
        echo ".' => 'Business Identifier Code (BIC) ini tidak terkait dengan IBAN ";
        echo twig_escape_filter($this->env, (isset($context["iban"]) || array_key_exists("iban", $context) ? $context["iban"] : (function () { throw new RuntimeError('Variable "iban" does not exist.', 89, $this->source); })()), "html", null, true);
        echo ".',
    'This form should not contain extra fields.' => 'Gabungan kolom tidak boleh mengandung kolom tambahan.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Berkas yang di unggah terlalu besar. Silahkan coba unggah berkas yang lebih kecil.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF-Token tidak sah. Silahkan coba kirim ulang formulir.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Terjadi sebuah pengecualian otentikasi.',
    'Authentication credentials could not be found.' => 'Kredensial otentikasi tidak bisa ditemukan.',
    'Authentication request could not be processed due to a system problem.' => 'Permintaan otentikasi tidak bisa diproses karena masalah sistem.',
    'Invalid credentials.' => 'Kredensial salah.',
    'Cookie has already been used by someone else.' => 'Cookie sudah digunakan oleh orang lain.',
    'Not privileged to request the resource.' => 'Tidak berhak untuk meminta sumber daya.',
    'Invalid CSRF token.' => 'Token CSRF salah.',
    'No authentication provider found to support the authentication token.' => 'Tidak ditemukan penyedia otentikasi untuk mendukung token otentikasi.',
    'No session available, it either timed out or cookies are not enabled.' => 'Tidak ada sesi yang tersedia, mungkin waktu sudah habis atau cookie tidak diaktifkan',
    'No token could be found.' => 'Tidak ada token yang bisa ditemukan.',
    'Username could not be found.' => 'Username tidak bisa ditemukan.',
    'Account has expired.' => 'Akun telah berakhir.',
    'Credentials have expired.' => 'Kredensial telah berakhir.',
    'Account is disabled.' => 'Akun dinonaktifkan.',
    'Account is locked.' => 'Akun terkunci.',
  ),
));

\$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type ";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 119, $this->source); })()), "html", null, true);
        echo ".' => 'This value should be of type ";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 119, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least ";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 122, $this->source); })()), "html", null, true);
        echo " choice.|You must select at least ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 122, $this->source); })()), "html", null, true);
        echo " choices.' => 'You must select at least ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 122, $this->source); })()), "html", null, true);
        echo " choice.|You must select at least ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 122, $this->source); })()), "html", null, true);
        echo " choices.',
    'You must select at most ";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 123, $this->source); })()), "html", null, true);
        echo " choice.|You must select at most ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 123, $this->source); })()), "html", null, true);
        echo " choices.' => 'You must select at most ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 123, $this->source); })()), "html", null, true);
        echo " choice.|You must select at most ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 123, $this->source); })()), "html", null, true);
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
        // line 132
        echo twig_escape_filter($this->env, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 132, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 132, $this->source); })()), "html", null, true);
        echo "). Allowed maximum size is ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 132, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 132, $this->source); })()), "html", null, true);
        echo ".' => 'The file is too large (";
        echo twig_escape_filter($this->env, (isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new RuntimeError('Variable "size" does not exist.', 132, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 132, $this->source); })()), "html", null, true);
        echo "). Allowed maximum size is ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 132, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 132, $this->source); })()), "html", null, true);
        echo ".',
    'The mime type of the file is invalid (";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 133, $this->source); })()), "html", null, true);
        echo "). Allowed mime types are ";
        echo twig_escape_filter($this->env, (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 133, $this->source); })()), "html", null, true);
        echo ".' => 'The mime type of the file is invalid (";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 133, $this->source); })()), "html", null, true);
        echo "). Allowed mime types are ";
        echo twig_escape_filter($this->env, (isset($context["types"]) || array_key_exists("types", $context) ? $context["types"] : (function () { throw new RuntimeError('Variable "types" does not exist.', 133, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be ";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 134, $this->source); })()), "html", null, true);
        echo " or less.' => 'This value should be ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 134, $this->source); })()), "html", null, true);
        echo " or less.',
    'This value is too long. It should have ";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 135, $this->source); })()), "html", null, true);
        echo " character or less.|This value is too long. It should have ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 135, $this->source); })()), "html", null, true);
        echo " characters or less.' => 'This value is too long. It should have ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 135, $this->source); })()), "html", null, true);
        echo " character or less.|This value is too long. It should have ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 135, $this->source); })()), "html", null, true);
        echo " characters or less.',
    'This value should be ";
        // line 136
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 136, $this->source); })()), "html", null, true);
        echo " or more.' => 'This value should be ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 136, $this->source); })()), "html", null, true);
        echo " or more.',
    'This value is too short. It should have ";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 137, $this->source); })()), "html", null, true);
        echo " character or more.|This value is too short. It should have ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 137, $this->source); })()), "html", null, true);
        echo " characters or more.' => 'This value is too short. It should have ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 137, $this->source); })()), "html", null, true);
        echo " character or more.|This value is too short. It should have ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 137, $this->source); })()), "html", null, true);
        echo " characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is ";
        // line 145
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 145, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 145, $this->source); })()), "html", null, true);
        echo ".' => 'The file is too large. Allowed maximum size is ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 145, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 145, $this->source); })()), "html", null, true);
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
        // line 156
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 156, $this->source); })()), "html", null, true);
        echo "px). Allowed maximum width is ";
        echo twig_escape_filter($this->env, (isset($context["max_width"]) || array_key_exists("max_width", $context) ? $context["max_width"] : (function () { throw new RuntimeError('Variable "max_width" does not exist.', 156, $this->source); })()), "html", null, true);
        echo "px.' => 'The image width is too big (";
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 156, $this->source); })()), "html", null, true);
        echo "px). Allowed maximum width is ";
        echo twig_escape_filter($this->env, (isset($context["max_width"]) || array_key_exists("max_width", $context) ? $context["max_width"] : (function () { throw new RuntimeError('Variable "max_width" does not exist.', 156, $this->source); })()), "html", null, true);
        echo "px.',
    'The image width is too small (";
        // line 157
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 157, $this->source); })()), "html", null, true);
        echo "px). Minimum width expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_width"]) || array_key_exists("min_width", $context) ? $context["min_width"] : (function () { throw new RuntimeError('Variable "min_width" does not exist.', 157, $this->source); })()), "html", null, true);
        echo "px.' => 'The image width is too small (";
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 157, $this->source); })()), "html", null, true);
        echo "px). Minimum width expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_width"]) || array_key_exists("min_width", $context) ? $context["min_width"] : (function () { throw new RuntimeError('Variable "min_width" does not exist.', 157, $this->source); })()), "html", null, true);
        echo "px.',
    'The image height is too big (";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 158, $this->source); })()), "html", null, true);
        echo "px). Allowed maximum height is ";
        echo twig_escape_filter($this->env, (isset($context["max_height"]) || array_key_exists("max_height", $context) ? $context["max_height"] : (function () { throw new RuntimeError('Variable "max_height" does not exist.', 158, $this->source); })()), "html", null, true);
        echo "px.' => 'The image height is too big (";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 158, $this->source); })()), "html", null, true);
        echo "px). Allowed maximum height is ";
        echo twig_escape_filter($this->env, (isset($context["max_height"]) || array_key_exists("max_height", $context) ? $context["max_height"] : (function () { throw new RuntimeError('Variable "max_height" does not exist.', 158, $this->source); })()), "html", null, true);
        echo "px.',
    'The image height is too small (";
        // line 159
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 159, $this->source); })()), "html", null, true);
        echo "px). Minimum height expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_height"]) || array_key_exists("min_height", $context) ? $context["min_height"] : (function () { throw new RuntimeError('Variable "min_height" does not exist.', 159, $this->source); })()), "html", null, true);
        echo "px.' => 'The image height is too small (";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 159, $this->source); })()), "html", null, true);
        echo "px). Minimum height expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_height"]) || array_key_exists("min_height", $context) ? $context["min_height"] : (function () { throw new RuntimeError('Variable "min_height" does not exist.', 159, $this->source); })()), "html", null, true);
        echo "px.',
    'This value should be the user\\'s current password.' => 'This value should be the user\\'s current password.',
    'This value should have exactly ";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 161, $this->source); })()), "html", null, true);
        echo " character.|This value should have exactly ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 161, $this->source); })()), "html", null, true);
        echo " characters.' => 'This value should have exactly ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 161, $this->source); })()), "html", null, true);
        echo " character.|This value should have exactly ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 161, $this->source); })()), "html", null, true);
        echo " characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain ";
        // line 167
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 167, $this->source); })()), "html", null, true);
        echo " element or more.|This collection should contain ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 167, $this->source); })()), "html", null, true);
        echo " elements or more.' => 'This collection should contain ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 167, $this->source); })()), "html", null, true);
        echo " element or more.|This collection should contain ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 167, $this->source); })()), "html", null, true);
        echo " elements or more.',
    'This collection should contain ";
        // line 168
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 168, $this->source); })()), "html", null, true);
        echo " element or less.|This collection should contain ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 168, $this->source); })()), "html", null, true);
        echo " elements or less.' => 'This collection should contain ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 168, $this->source); })()), "html", null, true);
        echo " element or less.|This collection should contain ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 168, $this->source); })()), "html", null, true);
        echo " elements or less.',
    'This collection should contain exactly ";
        // line 169
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 169, $this->source); })()), "html", null, true);
        echo " element.|This collection should contain exactly ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 169, $this->source); })()), "html", null, true);
        echo " elements.' => 'This collection should contain exactly ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 169, $this->source); })()), "html", null, true);
        echo " element.|This collection should contain exactly ";
        echo twig_escape_filter($this->env, (isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 169, $this->source); })()), "html", null, true);
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
        // line 178
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 178, $this->source); })()), "html", null, true);
        echo ".' => 'This value should be equal to ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 178, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be greater than ";
        // line 179
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 179, $this->source); })()), "html", null, true);
        echo ".' => 'This value should be greater than ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 179, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be greater than or equal to ";
        // line 180
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 180, $this->source); })()), "html", null, true);
        echo ".' => 'This value should be greater than or equal to ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 180, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be identical to ";
        // line 181
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 181, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 181, $this->source); })()), "html", null, true);
        echo ".' => 'This value should be identical to ";
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 181, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 181, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be less than ";
        // line 182
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 182, $this->source); })()), "html", null, true);
        echo ".' => 'This value should be less than ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 182, $this->source); })()), "html", null, true);
        echo ".',
    'This value should be less than or equal to ";
        // line 183
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 183, $this->source); })()), "html", null, true);
        echo ".' => 'This value should be less than or equal to ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 183, $this->source); })()), "html", null, true);
        echo ".',
    'This value should not be equal to ";
        // line 184
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 184, $this->source); })()), "html", null, true);
        echo ".' => 'This value should not be equal to ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 184, $this->source); })()), "html", null, true);
        echo ".',
    'This value should not be identical to ";
        // line 185
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 185, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 185, $this->source); })()), "html", null, true);
        echo ".' => 'This value should not be identical to ";
        echo twig_escape_filter($this->env, (isset($context["compared_value_type"]) || array_key_exists("compared_value_type", $context) ? $context["compared_value_type"] : (function () { throw new RuntimeError('Variable "compared_value_type" does not exist.', 185, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 185, $this->source); })()), "html", null, true);
        echo ".',
    'The image ratio is too big (";
        // line 186
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 186, $this->source); })()), "html", null, true);
        echo "). Allowed maximum ratio is ";
        echo twig_escape_filter($this->env, (isset($context["max_ratio"]) || array_key_exists("max_ratio", $context) ? $context["max_ratio"] : (function () { throw new RuntimeError('Variable "max_ratio" does not exist.', 186, $this->source); })()), "html", null, true);
        echo ".' => 'The image ratio is too big (";
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 186, $this->source); })()), "html", null, true);
        echo "). Allowed maximum ratio is ";
        echo twig_escape_filter($this->env, (isset($context["max_ratio"]) || array_key_exists("max_ratio", $context) ? $context["max_ratio"] : (function () { throw new RuntimeError('Variable "max_ratio" does not exist.', 186, $this->source); })()), "html", null, true);
        echo ".',
    'The image ratio is too small (";
        // line 187
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 187, $this->source); })()), "html", null, true);
        echo "). Minimum ratio expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_ratio"]) || array_key_exists("min_ratio", $context) ? $context["min_ratio"] : (function () { throw new RuntimeError('Variable "min_ratio" does not exist.', 187, $this->source); })()), "html", null, true);
        echo ".' => 'The image ratio is too small (";
        echo twig_escape_filter($this->env, (isset($context["ratio"]) || array_key_exists("ratio", $context) ? $context["ratio"] : (function () { throw new RuntimeError('Variable "ratio" does not exist.', 187, $this->source); })()), "html", null, true);
        echo "). Minimum ratio expected is ";
        echo twig_escape_filter($this->env, (isset($context["min_ratio"]) || array_key_exists("min_ratio", $context) ? $context["min_ratio"] : (function () { throw new RuntimeError('Variable "min_ratio" does not exist.', 187, $this->source); })()), "html", null, true);
        echo ".',
    'The image is square (";
        // line 188
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 188, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 188, $this->source); })()), "html", null, true);
        echo "px). Square images are not allowed.' => 'The image is square (";
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 188, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 188, $this->source); })()), "html", null, true);
        echo "px). Square images are not allowed.',
    'The image is landscape oriented (";
        // line 189
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 189, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 189, $this->source); })()), "html", null, true);
        echo "px). Landscape oriented images are not allowed.' => 'The image is landscape oriented (";
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 189, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 189, $this->source); })()), "html", null, true);
        echo "px). Landscape oriented images are not allowed.',
    'The image is portrait oriented (";
        // line 190
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 190, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 190, $this->source); })()), "html", null, true);
        echo "px). Portrait oriented images are not allowed.' => 'The image is portrait oriented (";
        echo twig_escape_filter($this->env, (isset($context["width"]) || array_key_exists("width", $context) ? $context["width"] : (function () { throw new RuntimeError('Variable "width" does not exist.', 190, $this->source); })()), "html", null, true);
        echo "x";
        echo twig_escape_filter($this->env, (isset($context["height"]) || array_key_exists("height", $context) ? $context["height"] : (function () { throw new RuntimeError('Variable "height" does not exist.', 190, $this->source); })()), "html", null, true);
        echo "px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected ";
        // line 193
        echo twig_escape_filter($this->env, (isset($context["charset"]) || array_key_exists("charset", $context) ? $context["charset"] : (function () { throw new RuntimeError('Variable "charset" does not exist.', 193, $this->source); })()), "html", null, true);
        echo " charset.' => 'This value does not match the expected ";
        echo twig_escape_filter($this->env, (isset($context["charset"]) || array_key_exists("charset", $context) ? $context["charset"] : (function () { throw new RuntimeError('Variable "charset" does not exist.', 193, $this->source); })()), "html", null, true);
        echo " charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This is not a valid UUID.',
    'This value should be a multiple of ";
        // line 197
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 197, $this->source); })()), "html", null, true);
        echo ".' => 'This value should be a multiple of ";
        echo twig_escape_filter($this->env, (isset($context["compared_value"]) || array_key_exists("compared_value", $context) ? $context["compared_value"] : (function () { throw new RuntimeError('Variable "compared_value" does not exist.', 197, $this->source); })()), "html", null, true);
        echo ".',
    'This Business Identifier Code (BIC) is not associated with IBAN ";
        // line 198
        echo twig_escape_filter($this->env, (isset($context["iban"]) || array_key_exists("iban", $context) ? $context["iban"] : (function () { throw new RuntimeError('Variable "iban" does not exist.', 198, $this->source); })()), "html", null, true);
        echo ".' => 'This Business Identifier Code (BIC) is not associated with IBAN ";
        echo twig_escape_filter($this->env, (isset($context["iban"]) || array_key_exists("iban", $context) ? $context["iban"] : (function () { throw new RuntimeError('Variable "iban" does not exist.', 198, $this->source); })()), "html", null, true);
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
        // line 207
        echo twig_escape_filter($this->env, (isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 207, $this->source); })()), "html", null, true);
        echo " and ";
        echo twig_escape_filter($this->env, (isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 207, $this->source); })()), "html", null, true);
        echo ".' => 'This value should be between ";
        echo twig_escape_filter($this->env, (isset($context["min"]) || array_key_exists("min", $context) ? $context["min"] : (function () { throw new RuntimeError('Variable "min" does not exist.', 207, $this->source); })()), "html", null, true);
        echo " and ";
        echo twig_escape_filter($this->env, (isset($context["max"]) || array_key_exists("max", $context) ? $context["max"] : (function () { throw new RuntimeError('Variable "max" does not exist.', 207, $this->source); })()), "html", null, true);
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
        return "var/cache/dev/translations/catalogue.id.52lf549.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  767 => 207,  753 => 198,  747 => 197,  738 => 193,  726 => 190,  716 => 189,  706 => 188,  696 => 187,  686 => 186,  676 => 185,  670 => 184,  664 => 183,  658 => 182,  648 => 181,  642 => 180,  636 => 179,  630 => 178,  612 => 169,  602 => 168,  592 => 167,  577 => 161,  566 => 159,  556 => 158,  546 => 157,  536 => 156,  516 => 145,  499 => 137,  493 => 136,  483 => 135,  477 => 134,  467 => 133,  449 => 132,  431 => 123,  421 => 122,  413 => 119,  378 => 89,  372 => 88,  363 => 84,  351 => 81,  341 => 80,  331 => 79,  321 => 78,  311 => 77,  301 => 76,  295 => 75,  289 => 74,  283 => 73,  273 => 72,  267 => 71,  261 => 70,  255 => 69,  239 => 60,  231 => 59,  223 => 58,  210 => 52,  199 => 50,  189 => 49,  179 => 48,  169 => 47,  149 => 36,  134 => 28,  128 => 27,  120 => 26,  114 => 25,  104 => 24,  86 => 23,  70 => 14,  62 => 13,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Symfony\\Component\\Translation\\MessageCatalogue;

\$catalogue = new MessageCatalogue('id', array (
  'validators' => 
  array (
    'This value should be false.' => 'Nilai ini harus bernilai salah.',
    'This value should be true.' => 'Nilai ini harus bernilai benar.',
    'This value should be of type {{ type }}.' => 'Nilai ini harus bertipe {{ type }}.',
    'This value should be blank.' => 'Nilai ini harus kosong.',
    'The value you selected is not a valid choice.' => 'Nilai yang dipilih tidak tepat.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Anda harus memilih paling tidak {{ limit }} pilihan.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Anda harus memilih paling banyak {{ limit }} pilihan.',
    'One or more of the given values is invalid.' => 'Satu atau lebih nilai yang diberikan tidak sah.',
    'This field was not expected.' => 'Ruas ini tidak diharapkan.',
    'This field is missing.' => 'Ruas ini hilang.',
    'This value is not a valid date.' => 'Nilai ini bukan merupakan tanggal yang sah.',
    'This value is not a valid datetime.' => 'Nilai ini bukan merupakan tanggal dan waktu yang sah.',
    'This value is not a valid email address.' => 'Nilai ini bukan alamat surel yang sah.',
    'The file could not be found.' => 'Berkas tidak dapat ditemukan.',
    'The file is not readable.' => 'Berkas tidak dapat dibaca.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Ukuran berkas terlalu besar ({{ size }} {{ suffix }}). Ukuran maksimum yang diizinkan adalah {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Jenis berkas ({{ type }}) tidak sah. Jenis berkas yang diizinkan adalah {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Nilai ini harus {{ limit }} atau kurang.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Nilai ini terlalu panjang. Seharusnya {{ limit }} karakter atau kurang.',
    'This value should be {{ limit }} or more.' => 'Nilai ini harus {{ limit }} atau lebih.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Nilai ini terlalu pendek. Seharusnya {{ limit }} karakter atau lebih.',
    'This value should not be blank.' => 'Nilai ini tidak boleh kosong.',
    'This value should not be null.' => 'Nilai ini tidak boleh \\'null\\'.',
    'This value should be null.' => 'Nilai ini harus \\'null\\'.',
    'This value is not valid.' => 'Nilai ini tidak sah.',
    'This value is not a valid time.' => 'Nilai ini bukan merupakan waktu yang sah.',
    'This value is not a valid URL.' => 'Nilai ini bukan URL yang sah.',
    'The two values should be equal.' => 'Isi keduanya harus sama.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Ukuran berkas terlalu besar. Ukuran maksimum yang diizinkan adalah {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Ukuran berkas terlalu besar.',
    'The file could not be uploaded.' => 'Berkas tidak dapat diunggah.',
    'This value should be a valid number.' => 'Nilai ini harus angka yang sah.',
    'This file is not a valid image.' => 'Berkas ini tidak termasuk citra.',
    'This is not a valid IP address.' => 'Ini bukan alamat IP yang sah.',
    'This value is not a valid language.' => 'Nilai ini bukan bahasa yang sah.',
    'This value is not a valid locale.' => 'Nilai ini bukan lokal yang sah.',
    'This value is not a valid country.' => 'Nilai ini bukan negara yang sah.',
    'This value is already used.' => 'Nilai ini sudah digunakan.',
    'The size of the image could not be detected.' => 'Ukuran dari citra tidak bisa dideteksi.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Lebar citra terlalu besar ({{ width }}px). Ukuran lebar maksimum adalah {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Lebar citra terlalu kecil ({{ width }}px). Ukuran lebar minimum yang diharapkan adalah {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Tinggi citra terlalu besar ({{ height }}px). Ukuran tinggi maksimum adalah {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Tinggi citra terlalu kecil ({{ height }}px). Ukuran tinggi minimum yang diharapkan adalah {{ min_height }}px.',
    'This value should be the user\\'s current password.' => 'Nilai ini harus kata sandi pengguna saat ini.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Nilai ini harus memiliki tepat {{ limit }} karakter.',
    'The file was only partially uploaded.' => 'Berkas hanya terunggah sebagian.',
    'No file was uploaded.' => 'Tidak ada berkas terunggah.',
    'No temporary folder was configured in php.ini.' => 'Direktori sementara tidak dikonfiguasi pada php.ini.',
    'Cannot write temporary file to disk.' => 'Tidak dapat menuliskan berkas sementara ke dalam media penyimpanan.',
    'A PHP extension caused the upload to fail.' => 'Sebuah ekstensi PHP menyebabkan kegagalan unggah.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Kumpulan ini harus memiliki {{ limit }} elemen atau lebih.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Kumpulan ini harus memiliki kurang dari {{ limit }} elemen.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Kumpulan ini harus memiliki tepat {{ limit }} elemen.',
    'Invalid card number.' => 'Nomor kartu tidak sah.',
    'Unsupported card type or invalid card number.' => 'Jenis kartu tidak didukung atau nomor kartu tidak sah.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Ini bukan Nomor Rekening Bank Internasional (IBAN) yang sah.',
    'This value is not a valid ISBN-10.' => 'Nilai ini bukan ISBN-10 yang sah.',
    'This value is not a valid ISBN-13.' => 'Nilai ini bukan ISBN-13 yang sah.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Nilai ini bukan ISBN-10 maupun ISBN-13 yang sah.',
    'This value is not a valid ISSN.' => 'Nilai ini bukan ISSN yang sah.',
    'This value is not a valid currency.' => 'Nilai ini bukan mata uang yang sah.',
    'This value should be equal to {{ compared_value }}.' => 'Nilai ini seharusnya sama dengan {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Nilai ini seharusnya lebih dari {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Nilai ini seharusnya lebih dari atau sama dengan {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Nilai ini seharusnya identik dengan {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Nilai ini seharusnya kurang dari {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Nilai ini seharusnya kurang dari atau sama dengan {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Nilai ini seharusnya tidak sama dengan {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Nilai ini seharusnya tidak identik dengan {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Rasio citra terlalu besar ({{ ratio }}). Rasio maksimum yang diizinkan adalah {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Rasio citra terlalu kecil ({{ ratio }}). Rasio minimum yang diharapkan adalah {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Citra persegi ({{ width }}x{{ height }}px). Citra persegi tidak diizinkan.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Citra berorientasi lanskap ({{ width }}x{{ height }}px). Citra berorientasi lanskap tidak diizinkan.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Citra berorientasi potret ({{ width }}x{{ height }}px). Citra berorientasi potret tidak diizinkan.',
    'An empty file is not allowed.' => 'Berkas kosong tidak diizinkan.',
    'The host could not be resolved.' => 'Host tidak dapat diselesaikan.',
    'This value does not match the expected {{ charset }} charset.' => 'Nilai ini tidak memenuhi set karakter {{ charset }} yang diharapkan.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ini bukan Business Identifier Code (BIC) yang sah.',
    'Error' => 'Galat',
    'This is not a valid UUID.' => 'Ini bukan UUID yang sah.',
    'This value should be a multiple of {{ compared_value }}.' => 'Nilai ini harus kelipatan dari {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Business Identifier Code (BIC) ini tidak terkait dengan IBAN {{ iban }}.',
    'This form should not contain extra fields.' => 'Gabungan kolom tidak boleh mengandung kolom tambahan.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Berkas yang di unggah terlalu besar. Silahkan coba unggah berkas yang lebih kecil.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF-Token tidak sah. Silahkan coba kirim ulang formulir.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Terjadi sebuah pengecualian otentikasi.',
    'Authentication credentials could not be found.' => 'Kredensial otentikasi tidak bisa ditemukan.',
    'Authentication request could not be processed due to a system problem.' => 'Permintaan otentikasi tidak bisa diproses karena masalah sistem.',
    'Invalid credentials.' => 'Kredensial salah.',
    'Cookie has already been used by someone else.' => 'Cookie sudah digunakan oleh orang lain.',
    'Not privileged to request the resource.' => 'Tidak berhak untuk meminta sumber daya.',
    'Invalid CSRF token.' => 'Token CSRF salah.',
    'No authentication provider found to support the authentication token.' => 'Tidak ditemukan penyedia otentikasi untuk mendukung token otentikasi.',
    'No session available, it either timed out or cookies are not enabled.' => 'Tidak ada sesi yang tersedia, mungkin waktu sudah habis atau cookie tidak diaktifkan',
    'No token could be found.' => 'Tidak ada token yang bisa ditemukan.',
    'Username could not be found.' => 'Username tidak bisa ditemukan.',
    'Account has expired.' => 'Akun telah berakhir.',
    'Credentials have expired.' => 'Kredensial telah berakhir.',
    'Account is disabled.' => 'Akun dinonaktifkan.',
    'Account is locked.' => 'Akun terkunci.',
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
", "var/cache/dev/translations/catalogue.id.52lf549.php", "/var/www/public/DevLaon/templates/var/cache/dev/translations/catalogue.id.52lf549.php");
    }
}
