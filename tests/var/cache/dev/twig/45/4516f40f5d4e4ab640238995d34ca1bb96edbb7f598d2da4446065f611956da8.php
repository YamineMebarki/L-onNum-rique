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

/* vendor/fzaninotto/faker/src/Faker/Provider/ja_JP/Internet.php */
class __TwigTemplate_1fc7ebcc6b9c027caf58e19f674c605a9b9130ced8ad32628fb904c797a9fccf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ja_JP/Internet.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ja_JP/Internet.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\ja_JP;

class Internet extends \\Faker\\Provider\\Internet
{
    protected static \$userNameFormats = array(
        '";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["lastNameAscii"]) || array_key_exists("lastNameAscii", $context) ? $context["lastNameAscii"] : (function () { throw new RuntimeError('Variable "lastNameAscii" does not exist.', 8, $this->source); })()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, (isset($context["firstNameAscii"]) || array_key_exists("firstNameAscii", $context) ? $context["firstNameAscii"] : (function () { throw new RuntimeError('Variable "firstNameAscii" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["firstNameAscii"]) || array_key_exists("firstNameAscii", $context) ? $context["firstNameAscii"] : (function () { throw new RuntimeError('Variable "firstNameAscii" does not exist.', 9, $this->source); })()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, (isset($context["lastNameAscii"]) || array_key_exists("lastNameAscii", $context) ? $context["lastNameAscii"] : (function () { throw new RuntimeError('Variable "lastNameAscii" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["firstNameAscii"]) || array_key_exists("firstNameAscii", $context) ? $context["firstNameAscii"] : (function () { throw new RuntimeError('Variable "firstNameAscii" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "##',
        '?";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["lastNameAscii"]) || array_key_exists("lastNameAscii", $context) ? $context["lastNameAscii"] : (function () { throw new RuntimeError('Variable "lastNameAscii" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$safeEmailTld = array(
        'org', 'com', 'net', 'jp', 'jp', 'jp',
    );

    protected static \$freeEmailDomain = array(
        'gmail.com', 'yahoo.co.jp', 'hotmail.co.jp', 'mail.goo.ne.jp'
    );

    protected static \$tld = array(
        'com', 'com', 'com', 'biz', 'info', 'net', 'org', 'jp', 'jp', 'jp',
    );

    /**
     * {@link} http://dic.nicovideo.jp/a/%E6%97%A5%E6%9C%AC%E3%81%AE%E8%8B%97%E5%AD%97%28%E5%90%8D%E5%AD%97%29%E3%81%AE%E4%B8%80%E8%A6%A7
     */
    protected static \$lastNameAscii = array(
        'aota', 'aoyama', 'ishida', 'idaka', 'ito', 'uno', 'ekoda', 'ogaki',
        'kato', 'kanou', 'kijima', 'kimura', 'kiriyama', 'kudo', 'koizumi', 'kobayashi', 'kondo',
        'saito', 'sakamoto', 'sasaki', 'sato', 'sasada', 'suzuki', 'sugiyama',
        'takahashi', 'tanaka', 'tanabe', 'tsuda',
        'nakajima', 'nakamura', 'nagisa', 'nakatsugawa', 'nishinosono', 'nomura',
        'harada', 'hamada', 'hirokawa', 'fujimoto',
        'matsumoto', 'miyake', 'miyazawa', 'murayama',
        'yamagishi', 'yamaguchi', 'yamada', 'yamamoto', 'yoshida', 'yoshimoto',
        'wakamatsu', 'watanabe',
    );

    /**
     * {@link} http://dic.nicovideo.jp/a/%E6%97%A5%E6%9C%AC%E4%BA%BA%E3%81%AE%E5%90%8D%E5%89%8D%E4%B8%80%E8%A6%A7
     * {@link} http://www.meijiyasuda.co.jp/enjoy/ranking/
     */
    protected static \$firstNameAscii = array(
        'akira', 'atsushi', 'osamu',
        'akemi', 'asuka',
        'kazuya', 'kyosuke', 'kenichi',
        'kaori', 'kana', 'kumiko',
        'shuhei', 'shota', 'jun', 'soutaro',
        'sayuri', 'satomi',
        'taichi', 'taro', 'takuma', 'tsubasa', 'tomoya',
        'chiyo',
        'naoki', 'naoto',
        'naoko', 'nanami',
        'hideki', 'hiroshi',
        'hanako', 'haruka',
        'manabu', 'mitsuru', 'minoru',
        'maaya', 'mai', 'mikako', 'miki', 'momoko',
        'yuki', 'yuta', 'yasuhiro', 'youichi', 'yosuke',
        'yui', 'yumiko', 'yoko',
        'ryosuke', 'ryohei', 'rei',
        'rika',
    );

    public static function lastNameAscii()
    {
        return static::randomElement(static::\$lastNameAscii);
    }

    public static function firstNameAscii()
    {
        return static::randomElement(static::\$firstNameAscii);
    }

    /**
     * @example 'suzuki.taro'
     */
    public function userName()
    {
        \$format = static::randomElement(static::\$userNameFormats);

        return static::bothify(\$this->generator->parse(\$format));
    }

    /**
     * @example 'yamada.jp'
     */
    public function domainName()
    {
        return static::randomElement(static::\$lastNameAscii) . '.' . \$this->tld();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/ja_JP/Internet.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 11,  64 => 10,  58 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\ja_JP;

class Internet extends \\Faker\\Provider\\Internet
{
    protected static \$userNameFormats = array(
        '{{lastNameAscii}}.{{firstNameAscii}}',
        '{{firstNameAscii}}.{{lastNameAscii}}',
        '{{firstNameAscii}}##',
        '?{{lastNameAscii}}',
    );

    protected static \$safeEmailTld = array(
        'org', 'com', 'net', 'jp', 'jp', 'jp',
    );

    protected static \$freeEmailDomain = array(
        'gmail.com', 'yahoo.co.jp', 'hotmail.co.jp', 'mail.goo.ne.jp'
    );

    protected static \$tld = array(
        'com', 'com', 'com', 'biz', 'info', 'net', 'org', 'jp', 'jp', 'jp',
    );

    /**
     * {@link} http://dic.nicovideo.jp/a/%E6%97%A5%E6%9C%AC%E3%81%AE%E8%8B%97%E5%AD%97%28%E5%90%8D%E5%AD%97%29%E3%81%AE%E4%B8%80%E8%A6%A7
     */
    protected static \$lastNameAscii = array(
        'aota', 'aoyama', 'ishida', 'idaka', 'ito', 'uno', 'ekoda', 'ogaki',
        'kato', 'kanou', 'kijima', 'kimura', 'kiriyama', 'kudo', 'koizumi', 'kobayashi', 'kondo',
        'saito', 'sakamoto', 'sasaki', 'sato', 'sasada', 'suzuki', 'sugiyama',
        'takahashi', 'tanaka', 'tanabe', 'tsuda',
        'nakajima', 'nakamura', 'nagisa', 'nakatsugawa', 'nishinosono', 'nomura',
        'harada', 'hamada', 'hirokawa', 'fujimoto',
        'matsumoto', 'miyake', 'miyazawa', 'murayama',
        'yamagishi', 'yamaguchi', 'yamada', 'yamamoto', 'yoshida', 'yoshimoto',
        'wakamatsu', 'watanabe',
    );

    /**
     * {@link} http://dic.nicovideo.jp/a/%E6%97%A5%E6%9C%AC%E4%BA%BA%E3%81%AE%E5%90%8D%E5%89%8D%E4%B8%80%E8%A6%A7
     * {@link} http://www.meijiyasuda.co.jp/enjoy/ranking/
     */
    protected static \$firstNameAscii = array(
        'akira', 'atsushi', 'osamu',
        'akemi', 'asuka',
        'kazuya', 'kyosuke', 'kenichi',
        'kaori', 'kana', 'kumiko',
        'shuhei', 'shota', 'jun', 'soutaro',
        'sayuri', 'satomi',
        'taichi', 'taro', 'takuma', 'tsubasa', 'tomoya',
        'chiyo',
        'naoki', 'naoto',
        'naoko', 'nanami',
        'hideki', 'hiroshi',
        'hanako', 'haruka',
        'manabu', 'mitsuru', 'minoru',
        'maaya', 'mai', 'mikako', 'miki', 'momoko',
        'yuki', 'yuta', 'yasuhiro', 'youichi', 'yosuke',
        'yui', 'yumiko', 'yoko',
        'ryosuke', 'ryohei', 'rei',
        'rika',
    );

    public static function lastNameAscii()
    {
        return static::randomElement(static::\$lastNameAscii);
    }

    public static function firstNameAscii()
    {
        return static::randomElement(static::\$firstNameAscii);
    }

    /**
     * @example 'suzuki.taro'
     */
    public function userName()
    {
        \$format = static::randomElement(static::\$userNameFormats);

        return static::bothify(\$this->generator->parse(\$format));
    }

    /**
     * @example 'yamada.jp'
     */
    public function domainName()
    {
        return static::randomElement(static::\$lastNameAscii) . '.' . \$this->tld();
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/ja_JP/Internet.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/ja_JP/Internet.php");
    }
}
