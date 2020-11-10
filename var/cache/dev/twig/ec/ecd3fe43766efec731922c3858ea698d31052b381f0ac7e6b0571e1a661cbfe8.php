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

/* vendor/fzaninotto/faker/src/Faker/Provider/ja_JP/Person.php */
class __TwigTemplate_94bcd5adaa948b212f0f8947f0f987a9661de9bbf95056a898e2039f75ae2e89 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ja_JP/Person.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ja_JP/Person.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\ja_JP;

class Person extends \\Faker\\Provider\\Person
{
    protected static \$maleNameFormats = array(
        '";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 8, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMale"]) || array_key_exists("firstNameMale", $context) ? $context["firstNameMale"] : (function () { throw new RuntimeError('Variable "firstNameMale" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$femaleNameFormats = array(
         '";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemale"]) || array_key_exists("firstNameFemale", $context) ? $context["firstNameFemale"] : (function () { throw new RuntimeError('Variable "firstNameFemale" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "',
    );

    /**
     * {@link} http://dic.nicovideo.jp/a/%E6%97%A5%E6%9C%AC%E4%BA%BA%E3%81%AE%E5%90%8D%E5%89%8D%E4%B8%80%E8%A6%A7
     * {@link} http://www.meijiyasuda.co.jp/enjoy/ranking/
     */
    protected static \$firstNameMale = array(
        '晃', '篤司', '治', '和也', '京助', '健一', '修平', '翔太', '淳', '聡太郎', '太一', '太郎', '拓真', '翼', '智也',
        '直樹', '直人', '英樹', '浩', '学', '充', '稔', '裕樹', '裕太', '康弘', '陽一', '洋介', '亮介', '涼平', '零',
    );

    /**
     * {@link} http://dic.nicovideo.jp/a/%E6%97%A5%E6%9C%AC%E4%BA%BA%E3%81%AE%E5%90%8D%E5%89%8D%E4%B8%80%E8%A6%A7
     * {@link} http://www.meijiyasuda.co.jp/enjoy/ranking/
     */
    protected static \$firstNameFemale = array(
        '明美', 'あすか', '香織', '加奈', 'くみ子', 'さゆり', '知実', '千代',
        '直子', '七夏', '花子', '春香', '真綾', '舞', '美加子', '幹', '桃子', '結衣', '裕美子', '陽子', '里佳',
    );

    /**
     * {@link} http://dic.nicovideo.jp/a/%E6%97%A5%E6%9C%AC%E3%81%AE%E8%8B%97%E5%AD%97%28%E5%90%8D%E5%AD%97%29%E3%81%AE%E4%B8%80%E8%A6%A7
     */
    protected static \$lastName = array(
        '青田', '青山', '石田', '井高', '伊藤', '井上', '宇野', '江古田', '大垣',
        '加藤', '加納', '喜嶋', '木村', '桐山', '工藤', '小泉', '小林', '近藤',
        '斉藤', '坂本', '佐々木', '佐藤', '笹田', '鈴木', '杉山',
        '高橋', '田中', '田辺', '津田',
        '中島', '中村', '渚', '中津川', '西之園', '野村',
        '原田', '浜田', '廣川', '藤本',
        '松本', '三宅', '宮沢', '村山',
        '山岸', '山口', '山田', '山本', '吉田', '吉本',
        '若松', '渡辺',
    );

    protected static \$firstKanaNameFormat = array(
        '";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["firstKanaNameMale"]) || array_key_exists("firstKanaNameMale", $context) ? $context["firstKanaNameMale"] : (function () { throw new RuntimeError('Variable "firstKanaNameMale" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["firstKanaNameFemale"]) || array_key_exists("firstKanaNameFemale", $context) ? $context["firstKanaNameFemale"] : (function () { throw new RuntimeError('Variable "firstKanaNameFemale" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$maleKanaNameFormats = array(
        '";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["lastKanaName"]) || array_key_exists("lastKanaName", $context) ? $context["lastKanaName"] : (function () { throw new RuntimeError('Variable "lastKanaName" does not exist.', 54, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstKanaNameMale"]) || array_key_exists("firstKanaNameMale", $context) ? $context["firstKanaNameMale"] : (function () { throw new RuntimeError('Variable "firstKanaNameMale" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$femaleKanaNameFormats = array(
        '";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["lastKanaName"]) || array_key_exists("lastKanaName", $context) ? $context["lastKanaName"] : (function () { throw new RuntimeError('Variable "lastKanaName" does not exist.', 58, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstKanaNameFemale"]) || array_key_exists("firstKanaNameFemale", $context) ? $context["firstKanaNameFemale"] : (function () { throw new RuntimeError('Variable "firstKanaNameFemale" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$firstKanaNameMale = array(
        'アキラ', 'アツシ', 'オサム', 'カズヤ', 'キョウスケ', 'ケンイチ', 'シュウヘイ', 'ショウタ', 'ジュン', 'ソウタロウ',
        'タイチ', 'タロウ', 'タクマ', 'ツバサ', 'トモヤ', 'ナオキ', 'ナオト', 'ヒデキ', 'ヒロシ', 'マナブ', 'ミツル', 'ミノル',
        'ユウキ', 'ユウタ', 'ヤスヒロ', 'ヨウイチ', 'ヨウスケ', 'リョウスケ', 'リョウヘイ', 'レイ',
    );

    protected static \$firstKanaNameFemale = array(
        'アケミ', 'アスカ', 'カオリ', 'カナ', 'クミコ', 'サユリ', 'サトミ', 'チヨ',
        'ナオコ', 'ナナミ', 'ハナコ', 'ハルカ', 'マアヤ', 'マイ', 'ミカコ', 'ミキ', 'モモコ', 'ユイ', 'ユミコ', 'ヨウコ', 'リカ',
    );

    protected static \$lastKanaName = array(
        'アオタ', 'アオヤマ', 'イシダ', 'イダカ', 'イトウ', 'ウノ', 'エコダ', 'オオガキ',
        'カノウ', 'カノウ', 'キジマ', 'キムラ', 'キリヤマ', 'クドウ', 'コイズミ', 'コバヤシ', 'コンドウ',
        'サイトウ', 'サカモト', 'ササキ', 'サトウ', 'ササダ', 'スズキ', 'スギヤマ',
        'タカハシ', 'タナカ', 'タナベ', 'ツダ',
        'ナカジマ', 'ナカムラ', 'ナギサ', 'ナカツガワ', 'ニシノソノ', 'ノムラ',
        'ハラダ', 'ハマダ', 'ヒロカワ', 'フジモト',
        'マツモト', 'ミヤケ', 'ミヤザワ', 'ムラヤマ',
        'ヤマギシ', 'ヤマグチ', 'ヤマダ', 'ヤマモト', 'ヨシダ', 'ヨシモト',
        'ワカマツ', 'ワタナベ',
    );

    /**
     * @param string|null \$gender 'male', 'female' or null for any
     * @return string
     * @example 'アオタ アキラ'
     */
    public function kanaName(\$gender = null)
    {
        if (\$gender === static::GENDER_MALE) {
            \$format = static::randomElement(static::\$maleKanaNameFormats);
        } elseif (\$gender === static::GENDER_FEMALE) {
            \$format = static::randomElement(static::\$femaleKanaNameFormats);
        } else {
            \$format = static::randomElement(array_merge(static::\$maleKanaNameFormats, static::\$femaleKanaNameFormats));
        }

        return \$this->generator->parse(\$format);
    }

    /**
     * @param string|null \$gender 'male', 'female' or null for any
     * @return string
     * @example 'アキラ'
     */
    public function firstKanaName(\$gender = null)
    {
        if (\$gender === static::GENDER_MALE) {
            return static::firstKanaNameMale();
        } elseif (\$gender === static::GENDER_FEMALE) {
            return static::firstKanaNameFemale();
        }

        return \$this->generator->parse(static::randomElement(static::\$firstKanaNameFormat));
    }

    /**
     * @example 'アキラ'
     */
    public static function firstKanaNameMale()
    {
        return static::randomElement(static::\$firstKanaNameMale);
    }

    /**
     * @example 'アケミ'
     */
    public static function firstKanaNameFemale()
    {
        return static::randomElement(static::\$firstKanaNameFemale);
    }

    /**
     * @example 'アオタ'
     */
    public static function lastKanaName()
    {
        return static::randomElement(static::\$lastKanaName);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/ja_JP/Person.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 58,  114 => 54,  107 => 50,  103 => 49,  61 => 12,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\ja_JP;

class Person extends \\Faker\\Provider\\Person
{
    protected static \$maleNameFormats = array(
        '{{lastName}} {{firstNameMale}}',
    );

    protected static \$femaleNameFormats = array(
         '{{lastName}} {{firstNameFemale}}',
    );

    /**
     * {@link} http://dic.nicovideo.jp/a/%E6%97%A5%E6%9C%AC%E4%BA%BA%E3%81%AE%E5%90%8D%E5%89%8D%E4%B8%80%E8%A6%A7
     * {@link} http://www.meijiyasuda.co.jp/enjoy/ranking/
     */
    protected static \$firstNameMale = array(
        '晃', '篤司', '治', '和也', '京助', '健一', '修平', '翔太', '淳', '聡太郎', '太一', '太郎', '拓真', '翼', '智也',
        '直樹', '直人', '英樹', '浩', '学', '充', '稔', '裕樹', '裕太', '康弘', '陽一', '洋介', '亮介', '涼平', '零',
    );

    /**
     * {@link} http://dic.nicovideo.jp/a/%E6%97%A5%E6%9C%AC%E4%BA%BA%E3%81%AE%E5%90%8D%E5%89%8D%E4%B8%80%E8%A6%A7
     * {@link} http://www.meijiyasuda.co.jp/enjoy/ranking/
     */
    protected static \$firstNameFemale = array(
        '明美', 'あすか', '香織', '加奈', 'くみ子', 'さゆり', '知実', '千代',
        '直子', '七夏', '花子', '春香', '真綾', '舞', '美加子', '幹', '桃子', '結衣', '裕美子', '陽子', '里佳',
    );

    /**
     * {@link} http://dic.nicovideo.jp/a/%E6%97%A5%E6%9C%AC%E3%81%AE%E8%8B%97%E5%AD%97%28%E5%90%8D%E5%AD%97%29%E3%81%AE%E4%B8%80%E8%A6%A7
     */
    protected static \$lastName = array(
        '青田', '青山', '石田', '井高', '伊藤', '井上', '宇野', '江古田', '大垣',
        '加藤', '加納', '喜嶋', '木村', '桐山', '工藤', '小泉', '小林', '近藤',
        '斉藤', '坂本', '佐々木', '佐藤', '笹田', '鈴木', '杉山',
        '高橋', '田中', '田辺', '津田',
        '中島', '中村', '渚', '中津川', '西之園', '野村',
        '原田', '浜田', '廣川', '藤本',
        '松本', '三宅', '宮沢', '村山',
        '山岸', '山口', '山田', '山本', '吉田', '吉本',
        '若松', '渡辺',
    );

    protected static \$firstKanaNameFormat = array(
        '{{firstKanaNameMale}}',
        '{{firstKanaNameFemale}}',
    );

    protected static \$maleKanaNameFormats = array(
        '{{lastKanaName}} {{firstKanaNameMale}}',
    );

    protected static \$femaleKanaNameFormats = array(
        '{{lastKanaName}} {{firstKanaNameFemale}}',
    );

    protected static \$firstKanaNameMale = array(
        'アキラ', 'アツシ', 'オサム', 'カズヤ', 'キョウスケ', 'ケンイチ', 'シュウヘイ', 'ショウタ', 'ジュン', 'ソウタロウ',
        'タイチ', 'タロウ', 'タクマ', 'ツバサ', 'トモヤ', 'ナオキ', 'ナオト', 'ヒデキ', 'ヒロシ', 'マナブ', 'ミツル', 'ミノル',
        'ユウキ', 'ユウタ', 'ヤスヒロ', 'ヨウイチ', 'ヨウスケ', 'リョウスケ', 'リョウヘイ', 'レイ',
    );

    protected static \$firstKanaNameFemale = array(
        'アケミ', 'アスカ', 'カオリ', 'カナ', 'クミコ', 'サユリ', 'サトミ', 'チヨ',
        'ナオコ', 'ナナミ', 'ハナコ', 'ハルカ', 'マアヤ', 'マイ', 'ミカコ', 'ミキ', 'モモコ', 'ユイ', 'ユミコ', 'ヨウコ', 'リカ',
    );

    protected static \$lastKanaName = array(
        'アオタ', 'アオヤマ', 'イシダ', 'イダカ', 'イトウ', 'ウノ', 'エコダ', 'オオガキ',
        'カノウ', 'カノウ', 'キジマ', 'キムラ', 'キリヤマ', 'クドウ', 'コイズミ', 'コバヤシ', 'コンドウ',
        'サイトウ', 'サカモト', 'ササキ', 'サトウ', 'ササダ', 'スズキ', 'スギヤマ',
        'タカハシ', 'タナカ', 'タナベ', 'ツダ',
        'ナカジマ', 'ナカムラ', 'ナギサ', 'ナカツガワ', 'ニシノソノ', 'ノムラ',
        'ハラダ', 'ハマダ', 'ヒロカワ', 'フジモト',
        'マツモト', 'ミヤケ', 'ミヤザワ', 'ムラヤマ',
        'ヤマギシ', 'ヤマグチ', 'ヤマダ', 'ヤマモト', 'ヨシダ', 'ヨシモト',
        'ワカマツ', 'ワタナベ',
    );

    /**
     * @param string|null \$gender 'male', 'female' or null for any
     * @return string
     * @example 'アオタ アキラ'
     */
    public function kanaName(\$gender = null)
    {
        if (\$gender === static::GENDER_MALE) {
            \$format = static::randomElement(static::\$maleKanaNameFormats);
        } elseif (\$gender === static::GENDER_FEMALE) {
            \$format = static::randomElement(static::\$femaleKanaNameFormats);
        } else {
            \$format = static::randomElement(array_merge(static::\$maleKanaNameFormats, static::\$femaleKanaNameFormats));
        }

        return \$this->generator->parse(\$format);
    }

    /**
     * @param string|null \$gender 'male', 'female' or null for any
     * @return string
     * @example 'アキラ'
     */
    public function firstKanaName(\$gender = null)
    {
        if (\$gender === static::GENDER_MALE) {
            return static::firstKanaNameMale();
        } elseif (\$gender === static::GENDER_FEMALE) {
            return static::firstKanaNameFemale();
        }

        return \$this->generator->parse(static::randomElement(static::\$firstKanaNameFormat));
    }

    /**
     * @example 'アキラ'
     */
    public static function firstKanaNameMale()
    {
        return static::randomElement(static::\$firstKanaNameMale);
    }

    /**
     * @example 'アケミ'
     */
    public static function firstKanaNameFemale()
    {
        return static::randomElement(static::\$firstKanaNameFemale);
    }

    /**
     * @example 'アオタ'
     */
    public static function lastKanaName()
    {
        return static::randomElement(static::\$lastKanaName);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/ja_JP/Person.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/ja_JP/Person.php");
    }
}
