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

/* vendor/fzaninotto/faker/src/Faker/Provider/Internet.php */
class __TwigTemplate_d97a3aa39112c2020027b52d479979e1a4d2191d7b6388aa6dcb77c55f6bb6c4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/Internet.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/Internet.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider;

class Internet extends Base
{
    protected static \$freeEmailDomain = array('gmail.com', 'yahoo.com', 'hotmail.com');
    protected static \$tld = array('com', 'com', 'com', 'com', 'com', 'com', 'biz', 'info', 'net', 'org');

    protected static \$userNameFormats = array(
        '";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 11, $this->source); })()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 12, $this->source); })()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "##',
        '?";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "',
    );
    protected static \$emailFormats = array(
        '";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["userName"]) || array_key_exists("userName", $context) ? $context["userName"] : (function () { throw new RuntimeError('Variable "userName" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "@";
        echo twig_escape_filter($this->env, (isset($context["domainName"]) || array_key_exists("domainName", $context) ? $context["domainName"] : (function () { throw new RuntimeError('Variable "domainName" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["userName"]) || array_key_exists("userName", $context) ? $context["userName"] : (function () { throw new RuntimeError('Variable "userName" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "@";
        echo twig_escape_filter($this->env, (isset($context["freeEmailDomain"]) || array_key_exists("freeEmailDomain", $context) ? $context["freeEmailDomain"] : (function () { throw new RuntimeError('Variable "freeEmailDomain" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "',
    );
    protected static \$urlFormats = array(
        'http://www.";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["domainName"]) || array_key_exists("domainName", $context) ? $context["domainName"] : (function () { throw new RuntimeError('Variable "domainName" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "/',
        'http://";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["domainName"]) || array_key_exists("domainName", $context) ? $context["domainName"] : (function () { throw new RuntimeError('Variable "domainName" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "/',
        'http://www.";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["domainName"]) || array_key_exists("domainName", $context) ? $context["domainName"] : (function () { throw new RuntimeError('Variable "domainName" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "',
        'http://www.";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["domainName"]) || array_key_exists("domainName", $context) ? $context["domainName"] : (function () { throw new RuntimeError('Variable "domainName" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "',
        'https://www.";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["domainName"]) || array_key_exists("domainName", $context) ? $context["domainName"] : (function () { throw new RuntimeError('Variable "domainName" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "',
        'http://www.";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["domainName"]) || array_key_exists("domainName", $context) ? $context["domainName"] : (function () { throw new RuntimeError('Variable "domainName" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 26, $this->source); })()), "html", null, true);
        echo ".html',
        'http://";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["domainName"]) || array_key_exists("domainName", $context) ? $context["domainName"] : (function () { throw new RuntimeError('Variable "domainName" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "',
        'http://";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["domainName"]) || array_key_exists("domainName", $context) ? $context["domainName"] : (function () { throw new RuntimeError('Variable "domainName" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "',
        'http://";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["domainName"]) || array_key_exists("domainName", $context) ? $context["domainName"] : (function () { throw new RuntimeError('Variable "domainName" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 29, $this->source); })()), "html", null, true);
        echo ".html',
        'https://";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["domainName"]) || array_key_exists("domainName", $context) ? $context["domainName"] : (function () { throw new RuntimeError('Variable "domainName" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 30, $this->source); })()), "html", null, true);
        echo ".html',
    );

    /**
     * @example 'jdoe@acme.biz'
     */
    public function email()
    {
        \$format = static::randomElement(static::\$emailFormats);

        return \$this->generator->parse(\$format);
    }

    /**
     * @example 'jdoe@example.com'
     */
    final public function safeEmail()
    {
        return preg_replace('/\\s/u', '', \$this->userName() . '@' . static::safeEmailDomain());
    }

    /**
     * @example 'jdoe@gmail.com'
     */
    public function freeEmail()
    {
        return preg_replace('/\\s/u', '', \$this->userName() . '@' . static::freeEmailDomain());
    }

    /**
     * @example 'jdoe@dawson.com'
     */
    public function companyEmail()
    {
        return preg_replace('/\\s/u', '', \$this->userName() . '@' . \$this->domainName());
    }

    /**
     * @example 'gmail.com'
     */
    public static function freeEmailDomain()
    {
        return static::randomElement(static::\$freeEmailDomain);
    }

    /**
     * @example 'example.org'
     */
    final public static function safeEmailDomain()
    {
        \$domains = array(
            'example.com',
            'example.org',
            'example.net'
        );

        return static::randomElement(\$domains);
    }
    /**
     * @example 'jdoe'
     */
    public function userName()
    {
        \$format = static::randomElement(static::\$userNameFormats);
        \$username = static::bothify(\$this->generator->parse(\$format));

        \$username = strtolower(static::transliterate(\$username));

        // check if transliterate() didn't support the language and removed all letters
        if (trim(\$username, '._') === '') {
            throw new \\Exception('userName failed with the selected locale. Try a different locale or activate the \"intl\" PHP extension.');
        }

        // clean possible trailing dots from first/last names
        \$username = str_replace('..', '.', \$username);
        \$username = rtrim(\$username, '.');

        return \$username;
    }
    /**
     * @example 'fY4èHdZv68'
     */
    public function password(\$minLength = 6, \$maxLength = 20)
    {
        \$pattern = str_repeat('*', \$this->numberBetween(\$minLength, \$maxLength));

        return \$this->asciify(\$pattern);
    }

    /**
     * @example 'tiramisu.com'
     */
    public function domainName()
    {
        return \$this->domainWord() . '.' . \$this->tld();
    }

    /**
     * @example 'faber'
     */
    public function domainWord()
    {
        \$lastName = \$this->generator->format('lastName');

        \$lastName = strtolower(static::transliterate(\$lastName));

        // check if transliterate() didn't support the language and removed all letters
        if (trim(\$lastName, '._') === '') {
            throw new \\Exception('domainWord failed with the selected locale. Try a different locale or activate the \"intl\" PHP extension.');
        }

        // clean possible trailing dot from last name
        \$lastName = rtrim(\$lastName, '.');

        return \$lastName;
    }

    /**
     * @example 'com'
     */
    public function tld()
    {
        return static::randomElement(static::\$tld);
    }

    /**
     * @example 'http://www.runolfsdottir.com/'
     */
    public function url()
    {
        \$format = static::randomElement(static::\$urlFormats);

        return \$this->generator->parse(\$format);
    }

    /**
     * @example 'aut-repellat-commodi-vel-itaque-nihil-id-saepe-nostrum'
     */
    public function slug(\$nbWords = 6, \$variableNbWords = true)
    {
        if (\$nbWords <= 0) {
            return '';
        }
        if (\$variableNbWords) {
            \$nbWords = (int) (\$nbWords * mt_rand(60, 140) / 100) + 1;
        }
        \$words = \$this->generator->words(\$nbWords);

        return join(\$words, '-');
    }

    /**
     * @example '237.149.115.38'
     */
    public function ipv4()
    {
        return long2ip(mt_rand(0, 1) == 0 ? mt_rand(-2147483648, -2) : mt_rand(16777216, 2147483647));
    }

    /**
     * @example '35cd:186d:3e23:2986:ef9f:5b41:42a4:e6f1'
     */
    public function ipv6()
    {
        \$res = array();
        for (\$i=0; \$i < 8; \$i++) {
            \$res []= dechex(mt_rand(0, \"65535\"));
        }

        return join(':', \$res);
    }

    /**
     * @example '10.1.1.17'
     */
    public static function localIpv4()
    {
        if (static::numberBetween(0, 1) === 0) {
            // 10.x.x.x range
            return long2ip(static::numberBetween(ip2long(\"10.0.0.0\"), ip2long(\"10.255.255.255\")));
        }

        // 192.168.x.x range
        return long2ip(static::numberBetween(ip2long(\"192.168.0.0\"), ip2long(\"192.168.255.255\")));
    }

    /**
     * @example '32:F1:39:2F:D6:18'
     */
    public static function macAddress()
    {
        for (\$i=0; \$i<6; \$i++) {
            \$mac[] = sprintf('%02X', static::numberBetween(0, 0xff));
        }
        \$mac = implode(':', \$mac);

        return \$mac;
    }

    protected static function transliterate(\$string)
    {
        if (0 === preg_match('/[^A-Za-z0-9_.]/', \$string)) {
            return \$string;
        }

        \$transId = 'Any-Latin; Latin-ASCII; NFD; [:Nonspacing Mark:] Remove; NFC;';
        if (class_exists('Transliterator') && \$transliterator = \\Transliterator::create(\$transId)) {
            \$transString = \$transliterator->transliterate(\$string);
        } else {
            \$transString = static::toAscii(\$string);
        }

        return preg_replace('/[^A-Za-z0-9_.]/u', '', \$transString);
    }

    protected static function toAscii(\$string)
    {
        static \$arrayFrom, \$arrayTo;

        if (empty(\$arrayFrom)) {
            \$transliterationTable = array(
                'Ĳ'=>'I', 'Ö'=>'O', 'Œ'=>'O', 'Ü'=>'U', 'ä'=>'a', 'æ'=>'a',
                'ĳ'=>'i', 'ö'=>'o', 'œ'=>'o', 'ü'=>'u', 'ß'=>'s', 'ſ'=>'s',
                'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A',
                'Æ'=>'A', 'Ā'=>'A', 'Ą'=>'A', 'Ă'=>'A', 'Ç'=>'C', 'Ć'=>'C',
                'Č'=>'C', 'Ĉ'=>'C', 'Ċ'=>'C', 'Ď'=>'D', 'Đ'=>'D', 'È'=>'E',
                'É'=>'E', 'Ê'=>'E', 'Ë'=>'E', 'Ē'=>'E', 'Ę'=>'E', 'Ě'=>'E',
                'Ĕ'=>'E', 'Ė'=>'E', 'Ĝ'=>'G', 'Ğ'=>'G', 'Ġ'=>'G', 'Ģ'=>'G',
                'Ĥ'=>'H', 'Ħ'=>'H', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I',
                'Ī'=>'I', 'Ĩ'=>'I', 'Ĭ'=>'I', 'Į'=>'I', 'İ'=>'I', 'Ĵ'=>'J',
                'Ķ'=>'K', 'Ľ'=>'K', 'Ĺ'=>'K', 'Ļ'=>'K', 'Ŀ'=>'K', 'Ł'=>'L',
                'Ñ'=>'N', 'Ń'=>'N', 'Ň'=>'N', 'Ņ'=>'N', 'Ŋ'=>'N', 'Ò'=>'O',
                'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ø'=>'O', 'Ō'=>'O', 'Ő'=>'O',
                'Ŏ'=>'O', 'Ŕ'=>'R', 'Ř'=>'R', 'Ŗ'=>'R', 'Ś'=>'S', 'Ş'=>'S',
                'Ŝ'=>'S', 'Ș'=>'S', 'Š'=>'S', 'Ť'=>'T', 'Ţ'=>'T', 'Ŧ'=>'T',
                'Ț'=>'T', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ū'=>'U', 'Ů'=>'U',
                'Ű'=>'U', 'Ŭ'=>'U', 'Ũ'=>'U', 'Ų'=>'U', 'Ŵ'=>'W', 'Ŷ'=>'Y',
                'Ÿ'=>'Y', 'Ý'=>'Y', 'Ź'=>'Z', 'Ż'=>'Z', 'Ž'=>'Z', 'à'=>'a',
                'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ā'=>'a', 'ą'=>'a', 'ă'=>'a',
                'å'=>'a', 'ç'=>'c', 'ć'=>'c', 'č'=>'c', 'ĉ'=>'c', 'ċ'=>'c',
                'ď'=>'d', 'đ'=>'d', 'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e',
                'ē'=>'e', 'ę'=>'e', 'ě'=>'e', 'ĕ'=>'e', 'ė'=>'e', 'ƒ'=>'f',
                'ĝ'=>'g', 'ğ'=>'g', 'ġ'=>'g', 'ģ'=>'g', 'ĥ'=>'h', 'ħ'=>'h',
                'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ī'=>'i', 'ĩ'=>'i',
                'ĭ'=>'i', 'į'=>'i', 'ı'=>'i', 'ĵ'=>'j', 'ķ'=>'k', 'ĸ'=>'k',
                'ł'=>'l', 'ľ'=>'l', 'ĺ'=>'l', 'ļ'=>'l', 'ŀ'=>'l', 'ñ'=>'n',
                'ń'=>'n', 'ň'=>'n', 'ņ'=>'n', 'ŉ'=>'n', 'ŋ'=>'n', 'ò'=>'o',
                'ó'=>'o', 'ô'=>'o', 'õ'=>'o', 'ø'=>'o', 'ō'=>'o', 'ő'=>'o',
                'ŏ'=>'o', 'ŕ'=>'r', 'ř'=>'r', 'ŗ'=>'r', 'ś'=>'s', 'š'=>'s',
                'ť'=>'t', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ū'=>'u', 'ů'=>'u',
                'ű'=>'u', 'ŭ'=>'u', 'ũ'=>'u', 'ų'=>'u', 'ŵ'=>'w', 'ÿ'=>'y',
                'ý'=>'y', 'ŷ'=>'y', 'ż'=>'z', 'ź'=>'z', 'ž'=>'z', 'Α'=>'A',
                'Ά'=>'A', 'Ἀ'=>'A', 'Ἁ'=>'A', 'Ἂ'=>'A', 'Ἃ'=>'A', 'Ἄ'=>'A',
                'Ἅ'=>'A', 'Ἆ'=>'A', 'Ἇ'=>'A', 'ᾈ'=>'A', 'ᾉ'=>'A', 'ᾊ'=>'A',
                'ᾋ'=>'A', 'ᾌ'=>'A', 'ᾍ'=>'A', 'ᾎ'=>'A', 'ᾏ'=>'A', 'Ᾰ'=>'A',
                'Ᾱ'=>'A', 'Ὰ'=>'A', 'ᾼ'=>'A', 'Β'=>'B', 'Γ'=>'G', 'Δ'=>'D',
                'Ε'=>'E', 'Έ'=>'E', 'Ἐ'=>'E', 'Ἑ'=>'E', 'Ἒ'=>'E', 'Ἓ'=>'E',
                'Ἔ'=>'E', 'Ἕ'=>'E', 'Ὲ'=>'E', 'Ζ'=>'Z', 'Η'=>'I', 'Ή'=>'I',
                'Ἠ'=>'I', 'Ἡ'=>'I', 'Ἢ'=>'I', 'Ἣ'=>'I', 'Ἤ'=>'I', 'Ἥ'=>'I',
                'Ἦ'=>'I', 'Ἧ'=>'I', 'ᾘ'=>'I', 'ᾙ'=>'I', 'ᾚ'=>'I', 'ᾛ'=>'I',
                'ᾜ'=>'I', 'ᾝ'=>'I', 'ᾞ'=>'I', 'ᾟ'=>'I', 'Ὴ'=>'I', 'ῌ'=>'I',
                'Θ'=>'T', 'Ι'=>'I', 'Ί'=>'I', 'Ϊ'=>'I', 'Ἰ'=>'I', 'Ἱ'=>'I',
                'Ἲ'=>'I', 'Ἳ'=>'I', 'Ἴ'=>'I', 'Ἵ'=>'I', 'Ἶ'=>'I', 'Ἷ'=>'I',
                'Ῐ'=>'I', 'Ῑ'=>'I', 'Ὶ'=>'I', 'Κ'=>'K', 'Λ'=>'L', 'Μ'=>'M',
                'Ν'=>'N', 'Ξ'=>'K', 'Ο'=>'O', 'Ό'=>'O', 'Ὀ'=>'O', 'Ὁ'=>'O',
                'Ὂ'=>'O', 'Ὃ'=>'O', 'Ὄ'=>'O', 'Ὅ'=>'O', 'Ὸ'=>'O', 'Π'=>'P',
                'Ρ'=>'R', 'Ῥ'=>'R', 'Σ'=>'S', 'Τ'=>'T', 'Υ'=>'Y', 'Ύ'=>'Y',
                'Ϋ'=>'Y', 'Ὑ'=>'Y', 'Ὓ'=>'Y', 'Ὕ'=>'Y', 'Ὗ'=>'Y', 'Ῠ'=>'Y',
                'Ῡ'=>'Y', 'Ὺ'=>'Y', 'Φ'=>'F', 'Χ'=>'X', 'Ψ'=>'P', 'Ω'=>'O',
                'Ώ'=>'O', 'Ὠ'=>'O', 'Ὡ'=>'O', 'Ὢ'=>'O', 'Ὣ'=>'O', 'Ὤ'=>'O',
                'Ὥ'=>'O', 'Ὦ'=>'O', 'Ὧ'=>'O', 'ᾨ'=>'O', 'ᾩ'=>'O', 'ᾪ'=>'O',
                'ᾫ'=>'O', 'ᾬ'=>'O', 'ᾭ'=>'O', 'ᾮ'=>'O', 'ᾯ'=>'O', 'Ὼ'=>'O',
                'ῼ'=>'O', 'α'=>'a', 'ά'=>'a', 'ἀ'=>'a', 'ἁ'=>'a', 'ἂ'=>'a',
                'ἃ'=>'a', 'ἄ'=>'a', 'ἅ'=>'a', 'ἆ'=>'a', 'ἇ'=>'a', 'ᾀ'=>'a',
                'ᾁ'=>'a', 'ᾂ'=>'a', 'ᾃ'=>'a', 'ᾄ'=>'a', 'ᾅ'=>'a', 'ᾆ'=>'a',
                'ᾇ'=>'a', 'ὰ'=>'a', 'ᾰ'=>'a', 'ᾱ'=>'a', 'ᾲ'=>'a', 'ᾳ'=>'a',
                'ᾴ'=>'a', 'ᾶ'=>'a', 'ᾷ'=>'a', 'β'=>'b', 'γ'=>'g', 'δ'=>'d',
                'ε'=>'e', 'έ'=>'e', 'ἐ'=>'e', 'ἑ'=>'e', 'ἒ'=>'e', 'ἓ'=>'e',
                'ἔ'=>'e', 'ἕ'=>'e', 'ὲ'=>'e', 'ζ'=>'z', 'η'=>'i', 'ή'=>'i',
                'ἠ'=>'i', 'ἡ'=>'i', 'ἢ'=>'i', 'ἣ'=>'i', 'ἤ'=>'i', 'ἥ'=>'i',
                'ἦ'=>'i', 'ἧ'=>'i', 'ᾐ'=>'i', 'ᾑ'=>'i', 'ᾒ'=>'i', 'ᾓ'=>'i',
                'ᾔ'=>'i', 'ᾕ'=>'i', 'ᾖ'=>'i', 'ᾗ'=>'i', 'ὴ'=>'i', 'ῂ'=>'i',
                'ῃ'=>'i', 'ῄ'=>'i', 'ῆ'=>'i', 'ῇ'=>'i', 'θ'=>'t', 'ι'=>'i',
                'ί'=>'i', 'ϊ'=>'i', 'ΐ'=>'i', 'ἰ'=>'i', 'ἱ'=>'i', 'ἲ'=>'i',
                'ἳ'=>'i', 'ἴ'=>'i', 'ἵ'=>'i', 'ἶ'=>'i', 'ἷ'=>'i', 'ὶ'=>'i',
                'ῐ'=>'i', 'ῑ'=>'i', 'ῒ'=>'i', 'ῖ'=>'i', 'ῗ'=>'i', 'κ'=>'k',
                'λ'=>'l', 'μ'=>'m', 'ν'=>'n', 'ξ'=>'k', 'ο'=>'o', 'ό'=>'o',
                'ὀ'=>'o', 'ὁ'=>'o', 'ὂ'=>'o', 'ὃ'=>'o', 'ὄ'=>'o', 'ὅ'=>'o',
                'ὸ'=>'o', 'π'=>'p', 'ρ'=>'r', 'ῤ'=>'r', 'ῥ'=>'r', 'σ'=>'s',
                'ς'=>'s', 'τ'=>'t', 'υ'=>'y', 'ύ'=>'y', 'ϋ'=>'y', 'ΰ'=>'y',
                'ὐ'=>'y', 'ὑ'=>'y', 'ὒ'=>'y', 'ὓ'=>'y', 'ὔ'=>'y', 'ὕ'=>'y',
                'ὖ'=>'y', 'ὗ'=>'y', 'ὺ'=>'y', 'ῠ'=>'y', 'ῡ'=>'y', 'ῢ'=>'y',
                'ῦ'=>'y', 'ῧ'=>'y', 'φ'=>'f', 'χ'=>'x', 'ψ'=>'p', 'ω'=>'o',
                'ώ'=>'o', 'ὠ'=>'o', 'ὡ'=>'o', 'ὢ'=>'o', 'ὣ'=>'o', 'ὤ'=>'o',
                'ὥ'=>'o', 'ὦ'=>'o', 'ὧ'=>'o', 'ᾠ'=>'o', 'ᾡ'=>'o', 'ᾢ'=>'o',
                'ᾣ'=>'o', 'ᾤ'=>'o', 'ᾥ'=>'o', 'ᾦ'=>'o', 'ᾧ'=>'o', 'ὼ'=>'o',
                'ῲ'=>'o', 'ῳ'=>'o', 'ῴ'=>'o', 'ῶ'=>'o', 'ῷ'=>'o', 'А'=>'A',
                'Б'=>'B', 'В'=>'V', 'Г'=>'G', 'Д'=>'D', 'Е'=>'E', 'Ё'=>'E',
                'Ж'=>'Z', 'З'=>'Z', 'И'=>'I', 'Й'=>'I', 'К'=>'K', 'Л'=>'L',
                'М'=>'M', 'Н'=>'N', 'О'=>'O', 'П'=>'P', 'Р'=>'R', 'С'=>'S',
                'Т'=>'T', 'У'=>'U', 'Ф'=>'F', 'Х'=>'K', 'Ц'=>'T', 'Ч'=>'C',
                'Ш'=>'S', 'Щ'=>'S', 'Ы'=>'Y', 'Э'=>'E', 'Ю'=>'Y', 'Я'=>'Y',
                'а'=>'A', 'б'=>'B', 'в'=>'V', 'г'=>'G', 'д'=>'D', 'е'=>'E',
                'ё'=>'E', 'ж'=>'Z', 'з'=>'Z', 'и'=>'I', 'й'=>'I', 'к'=>'K',
                'л'=>'L', 'м'=>'M', 'н'=>'N', 'о'=>'O', 'п'=>'P', 'р'=>'R',
                'с'=>'S', 'т'=>'T', 'у'=>'U', 'ф'=>'F', 'х'=>'K', 'ц'=>'T',
                'ч'=>'C', 'ш'=>'S', 'щ'=>'S', 'ы'=>'Y', 'э'=>'E', 'ю'=>'Y',
                'я'=>'Y', 'ð'=>'d', 'Ð'=>'D', 'þ'=>'t', 'Þ'=>'T', 'ა'=>'a',
                'ბ'=>'b', 'გ'=>'g', 'დ'=>'d', 'ე'=>'e', 'ვ'=>'v', 'ზ'=>'z',
                'თ'=>'t', 'ი'=>'i', 'კ'=>'k', 'ლ'=>'l', 'მ'=>'m', 'ნ'=>'n',
                'ო'=>'o', 'პ'=>'p', 'ჟ'=>'z', 'რ'=>'r', 'ს'=>'s', 'ტ'=>'t',
                'უ'=>'u', 'ფ'=>'p', 'ქ'=>'k', 'ღ'=>'g', 'ყ'=>'q', 'შ'=>'s',
                'ჩ'=>'c', 'ც'=>'t', 'ძ'=>'d', 'წ'=>'t', 'ჭ'=>'c', 'ხ'=>'k',
                'ჯ'=>'j', 'ჰ'=>'h', 'ţ'=>'t', 'ʼ'=>\"'\", '̧'=>'', 'ḩ'=>'h',
                '‘'=>\"'\", '’'=>\"'\", 'ừ'=>'u', '/'=>'', 'ế'=>'e', 'ả'=>'a',
                'ị'=>'i', 'ậ'=>'a', 'ệ'=>'e', 'ỉ'=>'i', 'ồ'=>'o', 'ề'=>'e',
                'ơ'=>'o', 'ạ'=>'a', 'ẵ'=>'a', 'ư'=>'u', 'ằ'=>'a', 'ầ'=>'a',
                'ḑ'=>'d', 'Ḩ'=>'H', 'Ḑ'=>'D', 'ș'=>'s', 'ț'=>'t', 'ộ'=>'o',
                'ắ'=>'a', 'ş'=>'s', \"'\"=>'', 'ու'=>'u', 'ա'=>'a', 'բ'=>'b',
                'գ'=>'g', 'դ'=>'d', 'ե'=>'e', 'զ'=>'z', 'է'=>'e', 'ը'=>'y',
                'թ'=>'t', 'ժ'=>'zh', 'ի'=>'i', 'լ'=>'l', 'խ'=>'kh', 'ծ'=>'ts',
                'կ'=>'k', 'հ'=>'h', 'ձ'=>'dz', 'ղ'=>'gh', 'ճ'=>'ch', 'մ'=>'m',
                'յ'=>'y', 'ն'=>'n', 'շ'=>'sh', 'ո'=>'o', 'չ'=>'ch', 'պ'=>'p',
                'ջ'=>'j', 'ռ'=>'r', 'ս'=>'s', 'վ'=>'v', 'տ'=>'t', 'ր'=>'r',
                'ց'=>'ts', 'փ'=>'p', 'ք'=>'q', 'և'=>'ev', 'օ'=>'o', 'ֆ'=>'f',
            );
            \$arrayFrom = array_keys(\$transliterationTable);
            \$arrayTo = array_values(\$transliterationTable);
        }

        return str_replace(\$arrayFrom, \$arrayTo, \$string);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/Internet.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 30,  135 => 29,  129 => 28,  123 => 27,  117 => 26,  111 => 25,  105 => 24,  99 => 23,  95 => 22,  91 => 21,  83 => 18,  77 => 17,  71 => 14,  67 => 13,  61 => 12,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider;

class Internet extends Base
{
    protected static \$freeEmailDomain = array('gmail.com', 'yahoo.com', 'hotmail.com');
    protected static \$tld = array('com', 'com', 'com', 'com', 'com', 'com', 'biz', 'info', 'net', 'org');

    protected static \$userNameFormats = array(
        '{{lastName}}.{{firstName}}',
        '{{firstName}}.{{lastName}}',
        '{{firstName}}##',
        '?{{lastName}}',
    );
    protected static \$emailFormats = array(
        '{{userName}}@{{domainName}}',
        '{{userName}}@{{freeEmailDomain}}',
    );
    protected static \$urlFormats = array(
        'http://www.{{domainName}}/',
        'http://{{domainName}}/',
        'http://www.{{domainName}}/{{slug}}',
        'http://www.{{domainName}}/{{slug}}',
        'https://www.{{domainName}}/{{slug}}',
        'http://www.{{domainName}}/{{slug}}.html',
        'http://{{domainName}}/{{slug}}',
        'http://{{domainName}}/{{slug}}',
        'http://{{domainName}}/{{slug}}.html',
        'https://{{domainName}}/{{slug}}.html',
    );

    /**
     * @example 'jdoe@acme.biz'
     */
    public function email()
    {
        \$format = static::randomElement(static::\$emailFormats);

        return \$this->generator->parse(\$format);
    }

    /**
     * @example 'jdoe@example.com'
     */
    final public function safeEmail()
    {
        return preg_replace('/\\s/u', '', \$this->userName() . '@' . static::safeEmailDomain());
    }

    /**
     * @example 'jdoe@gmail.com'
     */
    public function freeEmail()
    {
        return preg_replace('/\\s/u', '', \$this->userName() . '@' . static::freeEmailDomain());
    }

    /**
     * @example 'jdoe@dawson.com'
     */
    public function companyEmail()
    {
        return preg_replace('/\\s/u', '', \$this->userName() . '@' . \$this->domainName());
    }

    /**
     * @example 'gmail.com'
     */
    public static function freeEmailDomain()
    {
        return static::randomElement(static::\$freeEmailDomain);
    }

    /**
     * @example 'example.org'
     */
    final public static function safeEmailDomain()
    {
        \$domains = array(
            'example.com',
            'example.org',
            'example.net'
        );

        return static::randomElement(\$domains);
    }
    /**
     * @example 'jdoe'
     */
    public function userName()
    {
        \$format = static::randomElement(static::\$userNameFormats);
        \$username = static::bothify(\$this->generator->parse(\$format));

        \$username = strtolower(static::transliterate(\$username));

        // check if transliterate() didn't support the language and removed all letters
        if (trim(\$username, '._') === '') {
            throw new \\Exception('userName failed with the selected locale. Try a different locale or activate the \"intl\" PHP extension.');
        }

        // clean possible trailing dots from first/last names
        \$username = str_replace('..', '.', \$username);
        \$username = rtrim(\$username, '.');

        return \$username;
    }
    /**
     * @example 'fY4èHdZv68'
     */
    public function password(\$minLength = 6, \$maxLength = 20)
    {
        \$pattern = str_repeat('*', \$this->numberBetween(\$minLength, \$maxLength));

        return \$this->asciify(\$pattern);
    }

    /**
     * @example 'tiramisu.com'
     */
    public function domainName()
    {
        return \$this->domainWord() . '.' . \$this->tld();
    }

    /**
     * @example 'faber'
     */
    public function domainWord()
    {
        \$lastName = \$this->generator->format('lastName');

        \$lastName = strtolower(static::transliterate(\$lastName));

        // check if transliterate() didn't support the language and removed all letters
        if (trim(\$lastName, '._') === '') {
            throw new \\Exception('domainWord failed with the selected locale. Try a different locale or activate the \"intl\" PHP extension.');
        }

        // clean possible trailing dot from last name
        \$lastName = rtrim(\$lastName, '.');

        return \$lastName;
    }

    /**
     * @example 'com'
     */
    public function tld()
    {
        return static::randomElement(static::\$tld);
    }

    /**
     * @example 'http://www.runolfsdottir.com/'
     */
    public function url()
    {
        \$format = static::randomElement(static::\$urlFormats);

        return \$this->generator->parse(\$format);
    }

    /**
     * @example 'aut-repellat-commodi-vel-itaque-nihil-id-saepe-nostrum'
     */
    public function slug(\$nbWords = 6, \$variableNbWords = true)
    {
        if (\$nbWords <= 0) {
            return '';
        }
        if (\$variableNbWords) {
            \$nbWords = (int) (\$nbWords * mt_rand(60, 140) / 100) + 1;
        }
        \$words = \$this->generator->words(\$nbWords);

        return join(\$words, '-');
    }

    /**
     * @example '237.149.115.38'
     */
    public function ipv4()
    {
        return long2ip(mt_rand(0, 1) == 0 ? mt_rand(-2147483648, -2) : mt_rand(16777216, 2147483647));
    }

    /**
     * @example '35cd:186d:3e23:2986:ef9f:5b41:42a4:e6f1'
     */
    public function ipv6()
    {
        \$res = array();
        for (\$i=0; \$i < 8; \$i++) {
            \$res []= dechex(mt_rand(0, \"65535\"));
        }

        return join(':', \$res);
    }

    /**
     * @example '10.1.1.17'
     */
    public static function localIpv4()
    {
        if (static::numberBetween(0, 1) === 0) {
            // 10.x.x.x range
            return long2ip(static::numberBetween(ip2long(\"10.0.0.0\"), ip2long(\"10.255.255.255\")));
        }

        // 192.168.x.x range
        return long2ip(static::numberBetween(ip2long(\"192.168.0.0\"), ip2long(\"192.168.255.255\")));
    }

    /**
     * @example '32:F1:39:2F:D6:18'
     */
    public static function macAddress()
    {
        for (\$i=0; \$i<6; \$i++) {
            \$mac[] = sprintf('%02X', static::numberBetween(0, 0xff));
        }
        \$mac = implode(':', \$mac);

        return \$mac;
    }

    protected static function transliterate(\$string)
    {
        if (0 === preg_match('/[^A-Za-z0-9_.]/', \$string)) {
            return \$string;
        }

        \$transId = 'Any-Latin; Latin-ASCII; NFD; [:Nonspacing Mark:] Remove; NFC;';
        if (class_exists('Transliterator') && \$transliterator = \\Transliterator::create(\$transId)) {
            \$transString = \$transliterator->transliterate(\$string);
        } else {
            \$transString = static::toAscii(\$string);
        }

        return preg_replace('/[^A-Za-z0-9_.]/u', '', \$transString);
    }

    protected static function toAscii(\$string)
    {
        static \$arrayFrom, \$arrayTo;

        if (empty(\$arrayFrom)) {
            \$transliterationTable = array(
                'Ĳ'=>'I', 'Ö'=>'O', 'Œ'=>'O', 'Ü'=>'U', 'ä'=>'a', 'æ'=>'a',
                'ĳ'=>'i', 'ö'=>'o', 'œ'=>'o', 'ü'=>'u', 'ß'=>'s', 'ſ'=>'s',
                'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A',
                'Æ'=>'A', 'Ā'=>'A', 'Ą'=>'A', 'Ă'=>'A', 'Ç'=>'C', 'Ć'=>'C',
                'Č'=>'C', 'Ĉ'=>'C', 'Ċ'=>'C', 'Ď'=>'D', 'Đ'=>'D', 'È'=>'E',
                'É'=>'E', 'Ê'=>'E', 'Ë'=>'E', 'Ē'=>'E', 'Ę'=>'E', 'Ě'=>'E',
                'Ĕ'=>'E', 'Ė'=>'E', 'Ĝ'=>'G', 'Ğ'=>'G', 'Ġ'=>'G', 'Ģ'=>'G',
                'Ĥ'=>'H', 'Ħ'=>'H', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I',
                'Ī'=>'I', 'Ĩ'=>'I', 'Ĭ'=>'I', 'Į'=>'I', 'İ'=>'I', 'Ĵ'=>'J',
                'Ķ'=>'K', 'Ľ'=>'K', 'Ĺ'=>'K', 'Ļ'=>'K', 'Ŀ'=>'K', 'Ł'=>'L',
                'Ñ'=>'N', 'Ń'=>'N', 'Ň'=>'N', 'Ņ'=>'N', 'Ŋ'=>'N', 'Ò'=>'O',
                'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ø'=>'O', 'Ō'=>'O', 'Ő'=>'O',
                'Ŏ'=>'O', 'Ŕ'=>'R', 'Ř'=>'R', 'Ŗ'=>'R', 'Ś'=>'S', 'Ş'=>'S',
                'Ŝ'=>'S', 'Ș'=>'S', 'Š'=>'S', 'Ť'=>'T', 'Ţ'=>'T', 'Ŧ'=>'T',
                'Ț'=>'T', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ū'=>'U', 'Ů'=>'U',
                'Ű'=>'U', 'Ŭ'=>'U', 'Ũ'=>'U', 'Ų'=>'U', 'Ŵ'=>'W', 'Ŷ'=>'Y',
                'Ÿ'=>'Y', 'Ý'=>'Y', 'Ź'=>'Z', 'Ż'=>'Z', 'Ž'=>'Z', 'à'=>'a',
                'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ā'=>'a', 'ą'=>'a', 'ă'=>'a',
                'å'=>'a', 'ç'=>'c', 'ć'=>'c', 'č'=>'c', 'ĉ'=>'c', 'ċ'=>'c',
                'ď'=>'d', 'đ'=>'d', 'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e',
                'ē'=>'e', 'ę'=>'e', 'ě'=>'e', 'ĕ'=>'e', 'ė'=>'e', 'ƒ'=>'f',
                'ĝ'=>'g', 'ğ'=>'g', 'ġ'=>'g', 'ģ'=>'g', 'ĥ'=>'h', 'ħ'=>'h',
                'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ī'=>'i', 'ĩ'=>'i',
                'ĭ'=>'i', 'į'=>'i', 'ı'=>'i', 'ĵ'=>'j', 'ķ'=>'k', 'ĸ'=>'k',
                'ł'=>'l', 'ľ'=>'l', 'ĺ'=>'l', 'ļ'=>'l', 'ŀ'=>'l', 'ñ'=>'n',
                'ń'=>'n', 'ň'=>'n', 'ņ'=>'n', 'ŉ'=>'n', 'ŋ'=>'n', 'ò'=>'o',
                'ó'=>'o', 'ô'=>'o', 'õ'=>'o', 'ø'=>'o', 'ō'=>'o', 'ő'=>'o',
                'ŏ'=>'o', 'ŕ'=>'r', 'ř'=>'r', 'ŗ'=>'r', 'ś'=>'s', 'š'=>'s',
                'ť'=>'t', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ū'=>'u', 'ů'=>'u',
                'ű'=>'u', 'ŭ'=>'u', 'ũ'=>'u', 'ų'=>'u', 'ŵ'=>'w', 'ÿ'=>'y',
                'ý'=>'y', 'ŷ'=>'y', 'ż'=>'z', 'ź'=>'z', 'ž'=>'z', 'Α'=>'A',
                'Ά'=>'A', 'Ἀ'=>'A', 'Ἁ'=>'A', 'Ἂ'=>'A', 'Ἃ'=>'A', 'Ἄ'=>'A',
                'Ἅ'=>'A', 'Ἆ'=>'A', 'Ἇ'=>'A', 'ᾈ'=>'A', 'ᾉ'=>'A', 'ᾊ'=>'A',
                'ᾋ'=>'A', 'ᾌ'=>'A', 'ᾍ'=>'A', 'ᾎ'=>'A', 'ᾏ'=>'A', 'Ᾰ'=>'A',
                'Ᾱ'=>'A', 'Ὰ'=>'A', 'ᾼ'=>'A', 'Β'=>'B', 'Γ'=>'G', 'Δ'=>'D',
                'Ε'=>'E', 'Έ'=>'E', 'Ἐ'=>'E', 'Ἑ'=>'E', 'Ἒ'=>'E', 'Ἓ'=>'E',
                'Ἔ'=>'E', 'Ἕ'=>'E', 'Ὲ'=>'E', 'Ζ'=>'Z', 'Η'=>'I', 'Ή'=>'I',
                'Ἠ'=>'I', 'Ἡ'=>'I', 'Ἢ'=>'I', 'Ἣ'=>'I', 'Ἤ'=>'I', 'Ἥ'=>'I',
                'Ἦ'=>'I', 'Ἧ'=>'I', 'ᾘ'=>'I', 'ᾙ'=>'I', 'ᾚ'=>'I', 'ᾛ'=>'I',
                'ᾜ'=>'I', 'ᾝ'=>'I', 'ᾞ'=>'I', 'ᾟ'=>'I', 'Ὴ'=>'I', 'ῌ'=>'I',
                'Θ'=>'T', 'Ι'=>'I', 'Ί'=>'I', 'Ϊ'=>'I', 'Ἰ'=>'I', 'Ἱ'=>'I',
                'Ἲ'=>'I', 'Ἳ'=>'I', 'Ἴ'=>'I', 'Ἵ'=>'I', 'Ἶ'=>'I', 'Ἷ'=>'I',
                'Ῐ'=>'I', 'Ῑ'=>'I', 'Ὶ'=>'I', 'Κ'=>'K', 'Λ'=>'L', 'Μ'=>'M',
                'Ν'=>'N', 'Ξ'=>'K', 'Ο'=>'O', 'Ό'=>'O', 'Ὀ'=>'O', 'Ὁ'=>'O',
                'Ὂ'=>'O', 'Ὃ'=>'O', 'Ὄ'=>'O', 'Ὅ'=>'O', 'Ὸ'=>'O', 'Π'=>'P',
                'Ρ'=>'R', 'Ῥ'=>'R', 'Σ'=>'S', 'Τ'=>'T', 'Υ'=>'Y', 'Ύ'=>'Y',
                'Ϋ'=>'Y', 'Ὑ'=>'Y', 'Ὓ'=>'Y', 'Ὕ'=>'Y', 'Ὗ'=>'Y', 'Ῠ'=>'Y',
                'Ῡ'=>'Y', 'Ὺ'=>'Y', 'Φ'=>'F', 'Χ'=>'X', 'Ψ'=>'P', 'Ω'=>'O',
                'Ώ'=>'O', 'Ὠ'=>'O', 'Ὡ'=>'O', 'Ὢ'=>'O', 'Ὣ'=>'O', 'Ὤ'=>'O',
                'Ὥ'=>'O', 'Ὦ'=>'O', 'Ὧ'=>'O', 'ᾨ'=>'O', 'ᾩ'=>'O', 'ᾪ'=>'O',
                'ᾫ'=>'O', 'ᾬ'=>'O', 'ᾭ'=>'O', 'ᾮ'=>'O', 'ᾯ'=>'O', 'Ὼ'=>'O',
                'ῼ'=>'O', 'α'=>'a', 'ά'=>'a', 'ἀ'=>'a', 'ἁ'=>'a', 'ἂ'=>'a',
                'ἃ'=>'a', 'ἄ'=>'a', 'ἅ'=>'a', 'ἆ'=>'a', 'ἇ'=>'a', 'ᾀ'=>'a',
                'ᾁ'=>'a', 'ᾂ'=>'a', 'ᾃ'=>'a', 'ᾄ'=>'a', 'ᾅ'=>'a', 'ᾆ'=>'a',
                'ᾇ'=>'a', 'ὰ'=>'a', 'ᾰ'=>'a', 'ᾱ'=>'a', 'ᾲ'=>'a', 'ᾳ'=>'a',
                'ᾴ'=>'a', 'ᾶ'=>'a', 'ᾷ'=>'a', 'β'=>'b', 'γ'=>'g', 'δ'=>'d',
                'ε'=>'e', 'έ'=>'e', 'ἐ'=>'e', 'ἑ'=>'e', 'ἒ'=>'e', 'ἓ'=>'e',
                'ἔ'=>'e', 'ἕ'=>'e', 'ὲ'=>'e', 'ζ'=>'z', 'η'=>'i', 'ή'=>'i',
                'ἠ'=>'i', 'ἡ'=>'i', 'ἢ'=>'i', 'ἣ'=>'i', 'ἤ'=>'i', 'ἥ'=>'i',
                'ἦ'=>'i', 'ἧ'=>'i', 'ᾐ'=>'i', 'ᾑ'=>'i', 'ᾒ'=>'i', 'ᾓ'=>'i',
                'ᾔ'=>'i', 'ᾕ'=>'i', 'ᾖ'=>'i', 'ᾗ'=>'i', 'ὴ'=>'i', 'ῂ'=>'i',
                'ῃ'=>'i', 'ῄ'=>'i', 'ῆ'=>'i', 'ῇ'=>'i', 'θ'=>'t', 'ι'=>'i',
                'ί'=>'i', 'ϊ'=>'i', 'ΐ'=>'i', 'ἰ'=>'i', 'ἱ'=>'i', 'ἲ'=>'i',
                'ἳ'=>'i', 'ἴ'=>'i', 'ἵ'=>'i', 'ἶ'=>'i', 'ἷ'=>'i', 'ὶ'=>'i',
                'ῐ'=>'i', 'ῑ'=>'i', 'ῒ'=>'i', 'ῖ'=>'i', 'ῗ'=>'i', 'κ'=>'k',
                'λ'=>'l', 'μ'=>'m', 'ν'=>'n', 'ξ'=>'k', 'ο'=>'o', 'ό'=>'o',
                'ὀ'=>'o', 'ὁ'=>'o', 'ὂ'=>'o', 'ὃ'=>'o', 'ὄ'=>'o', 'ὅ'=>'o',
                'ὸ'=>'o', 'π'=>'p', 'ρ'=>'r', 'ῤ'=>'r', 'ῥ'=>'r', 'σ'=>'s',
                'ς'=>'s', 'τ'=>'t', 'υ'=>'y', 'ύ'=>'y', 'ϋ'=>'y', 'ΰ'=>'y',
                'ὐ'=>'y', 'ὑ'=>'y', 'ὒ'=>'y', 'ὓ'=>'y', 'ὔ'=>'y', 'ὕ'=>'y',
                'ὖ'=>'y', 'ὗ'=>'y', 'ὺ'=>'y', 'ῠ'=>'y', 'ῡ'=>'y', 'ῢ'=>'y',
                'ῦ'=>'y', 'ῧ'=>'y', 'φ'=>'f', 'χ'=>'x', 'ψ'=>'p', 'ω'=>'o',
                'ώ'=>'o', 'ὠ'=>'o', 'ὡ'=>'o', 'ὢ'=>'o', 'ὣ'=>'o', 'ὤ'=>'o',
                'ὥ'=>'o', 'ὦ'=>'o', 'ὧ'=>'o', 'ᾠ'=>'o', 'ᾡ'=>'o', 'ᾢ'=>'o',
                'ᾣ'=>'o', 'ᾤ'=>'o', 'ᾥ'=>'o', 'ᾦ'=>'o', 'ᾧ'=>'o', 'ὼ'=>'o',
                'ῲ'=>'o', 'ῳ'=>'o', 'ῴ'=>'o', 'ῶ'=>'o', 'ῷ'=>'o', 'А'=>'A',
                'Б'=>'B', 'В'=>'V', 'Г'=>'G', 'Д'=>'D', 'Е'=>'E', 'Ё'=>'E',
                'Ж'=>'Z', 'З'=>'Z', 'И'=>'I', 'Й'=>'I', 'К'=>'K', 'Л'=>'L',
                'М'=>'M', 'Н'=>'N', 'О'=>'O', 'П'=>'P', 'Р'=>'R', 'С'=>'S',
                'Т'=>'T', 'У'=>'U', 'Ф'=>'F', 'Х'=>'K', 'Ц'=>'T', 'Ч'=>'C',
                'Ш'=>'S', 'Щ'=>'S', 'Ы'=>'Y', 'Э'=>'E', 'Ю'=>'Y', 'Я'=>'Y',
                'а'=>'A', 'б'=>'B', 'в'=>'V', 'г'=>'G', 'д'=>'D', 'е'=>'E',
                'ё'=>'E', 'ж'=>'Z', 'з'=>'Z', 'и'=>'I', 'й'=>'I', 'к'=>'K',
                'л'=>'L', 'м'=>'M', 'н'=>'N', 'о'=>'O', 'п'=>'P', 'р'=>'R',
                'с'=>'S', 'т'=>'T', 'у'=>'U', 'ф'=>'F', 'х'=>'K', 'ц'=>'T',
                'ч'=>'C', 'ш'=>'S', 'щ'=>'S', 'ы'=>'Y', 'э'=>'E', 'ю'=>'Y',
                'я'=>'Y', 'ð'=>'d', 'Ð'=>'D', 'þ'=>'t', 'Þ'=>'T', 'ა'=>'a',
                'ბ'=>'b', 'გ'=>'g', 'დ'=>'d', 'ე'=>'e', 'ვ'=>'v', 'ზ'=>'z',
                'თ'=>'t', 'ი'=>'i', 'კ'=>'k', 'ლ'=>'l', 'მ'=>'m', 'ნ'=>'n',
                'ო'=>'o', 'პ'=>'p', 'ჟ'=>'z', 'რ'=>'r', 'ს'=>'s', 'ტ'=>'t',
                'უ'=>'u', 'ფ'=>'p', 'ქ'=>'k', 'ღ'=>'g', 'ყ'=>'q', 'შ'=>'s',
                'ჩ'=>'c', 'ც'=>'t', 'ძ'=>'d', 'წ'=>'t', 'ჭ'=>'c', 'ხ'=>'k',
                'ჯ'=>'j', 'ჰ'=>'h', 'ţ'=>'t', 'ʼ'=>\"'\", '̧'=>'', 'ḩ'=>'h',
                '‘'=>\"'\", '’'=>\"'\", 'ừ'=>'u', '/'=>'', 'ế'=>'e', 'ả'=>'a',
                'ị'=>'i', 'ậ'=>'a', 'ệ'=>'e', 'ỉ'=>'i', 'ồ'=>'o', 'ề'=>'e',
                'ơ'=>'o', 'ạ'=>'a', 'ẵ'=>'a', 'ư'=>'u', 'ằ'=>'a', 'ầ'=>'a',
                'ḑ'=>'d', 'Ḩ'=>'H', 'Ḑ'=>'D', 'ș'=>'s', 'ț'=>'t', 'ộ'=>'o',
                'ắ'=>'a', 'ş'=>'s', \"'\"=>'', 'ու'=>'u', 'ա'=>'a', 'բ'=>'b',
                'գ'=>'g', 'դ'=>'d', 'ե'=>'e', 'զ'=>'z', 'է'=>'e', 'ը'=>'y',
                'թ'=>'t', 'ժ'=>'zh', 'ի'=>'i', 'լ'=>'l', 'խ'=>'kh', 'ծ'=>'ts',
                'կ'=>'k', 'հ'=>'h', 'ձ'=>'dz', 'ղ'=>'gh', 'ճ'=>'ch', 'մ'=>'m',
                'յ'=>'y', 'ն'=>'n', 'շ'=>'sh', 'ո'=>'o', 'չ'=>'ch', 'պ'=>'p',
                'ջ'=>'j', 'ռ'=>'r', 'ս'=>'s', 'վ'=>'v', 'տ'=>'t', 'ր'=>'r',
                'ց'=>'ts', 'փ'=>'p', 'ք'=>'q', 'և'=>'ev', 'օ'=>'o', 'ֆ'=>'f',
            );
            \$arrayFrom = array_keys(\$transliterationTable);
            \$arrayTo = array_values(\$transliterationTable);
        }

        return str_replace(\$arrayFrom, \$arrayTo, \$string);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/Internet.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/Internet.php");
    }
}
