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

/* vendor/fzaninotto/faker/src/Faker/Provider/ja_JP/Address.php */
class __TwigTemplate_741ca443713a150138913244352cf6a7498643b585dfaabfb744709291c30ac3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ja_JP/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ja_JP/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\ja_JP;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$country = array(
        'アフガニスタン', 'アルバニア', 'アルジェリア', 'アメリカ領サモア', 'アンドラ', 'アンゴラ', 'アンギラ', '南極大陸', 'アンティグアバーブーダ', 'アルゼンチン', 'アルメニア', 'アルバ', 'オーストラリア', 'オーストリア', 'アゼルバイジャン',
        'バハマ', 'バーレーン', 'バングラデシュ', 'バルバドス', 'ベラルーシ', 'ベルギー', 'ベリーズ', 'ベナン', 'バミューダ島', 'ブータン', 'ボリビア', 'ボスニア・ヘルツェゴビナ', 'ボツワナ', 'ブーベ島', 'ブラジル', 'イギリス領インド洋地域', 'イギリス領ヴァージン諸島', 'ブルネイ', 'ブルガリア', 'ブルキナファソ', 'ブルンジ',
        'カンボジア', 'カメルーン', 'カナダ', 'カーボベルデ', 'ケイマン諸島', '中央アフリカ共和国', 'チャド', 'チリ', '中国', 'クリスマス島', 'ココス諸島', 'コロンビア', 'コモロ', 'コンゴ共和国', 'クック諸島', 'コスタリカ', 'コートジボワール', 'クロアチア', 'キューバ', 'キプロス共和国', 'チェコ共和国',
        'デンマーク', 'ジブチ共和国', 'ドミニカ国', 'ドミニカ共和国',
        'エクアドル', 'エジプト', 'エルサルバドル', '赤道ギニア共和国', 'エリトリア', 'エストニア', 'エチオピア',
        'フェロー諸島', 'フォークランド諸島', 'フィジー共和国', 'フィンランド', 'フランス', 'フランス領ギアナ', 'フランス領ポリネシア', 'フランス領極南諸島',
        'ガボン', 'ガンビア', 'グルジア', 'ドイツ', 'ガーナ', 'ジブラルタル', 'ギリシャ', 'グリーンランド', 'グレナダ', 'グアドループ', 'グアム', 'グアテマラ', 'ガーンジー', 'ギニア', 'ギニアビサウ', 'ガイアナ',
        'ハイチ', 'ハード島とマクドナルド諸島', 'バチカン市国', 'ホンジュラス', '香港', 'ハンガリー',
        'アイスランド', 'インド', 'インドネシア', 'イラン', 'イラク', 'アイルランド共和国', 'マン島', 'イスラエル', 'イタリア',
        'ジャマイカ', '日本', 'ジャージー島', 'ヨルダン',
        'カザフスタン', 'ケニア', 'キリバス', '朝鮮', '韓国', 'クウェート', 'キルギス共和国',
        'ラオス人民民主共和国', 'ラトビア', 'レバノン', 'レソト', 'リベリア', 'リビア国', 'リヒテンシュタイン', 'リトアニア', 'ルクセンブルク',
        'マカオ', 'マケドニア共和国', 'マダガスカル', 'マラウィ', 'マレーシア', 'モルディブ', 'マリ', 'マルタ共和国', 'マーシャル諸島', 'マルティニーク', 'モーリタニア・イスラム共和国', 'モーリシャス', 'マヨット', 'メキシコ', 'ミクロネシア連邦', 'モルドバ共和国', 'モナコ公国', 'モンゴル', 'モンテネグロ共和国', 'モントセラト', 'モロッコ', 'モザンビーク', 'ミャンマー',
        'ナミビア', 'ナウル', 'ネパール', 'オランダ領アンティル', 'オランダ', 'ニューカレドニア', 'ニュージーランド', 'ニカラグア', 'ニジェール', 'ナイジェリア', 'ニース', 'ノーフォーク島', '北マリアナ諸島', 'ノルウェー',
        'オマーン',
        'パキスタン', 'パラオ', 'パレスチナ自治区', 'パナマ', 'パプアニューギニア', 'パラグアイ', 'ペルー', 'フィリピン', 'ピトケアン諸島', 'ポーランド', 'ポルトガル', 'プエルトリコ',
        'カタール',
        'レユニオン', 'ルーマニア', 'ロシア', 'ルワンダ',
        'サン・バルテルミー島', 'セントヘレナ', 'セントクリストファー・ネイビス連邦', 'セントルシア', 'セント・マーチン島', 'サンピエール島・ミクロン島', 'セントビンセント・グレナディーン', 'サモア', 'サンマリノ', 'サントメプリンシペ', 'サウジアラビア', 'セネガル', 'セルビア', 'セイシェル', 'シエラレオネ', 'シンガポール', 'スロバキア', 'スロベニア', 'ソロモン諸島', 'ソマリア', '南アフリカ共和国', 'サウスジョージア・サウスサンドウィッチ諸島', 'スペイン', 'スリランカ', 'スーダン', 'スリナム', 'スヴァールバル諸島およびヤンマイエン島', 'スワジランド王国', 'スウェーデン', 'スイス', 'シリア',
        '台湾', 'タジキスタン共和国', 'タンザニア', 'タイ', '東ティモール', 'トーゴ', 'トケラウ', 'トンガ', 'トリニダード・トバゴ', 'チュニジア', 'トルコ', 'トルクメニスタン', 'タークス・カイコス諸島', 'ツバル',
        'ウガンダ', 'ウクライナ', 'アラブ首長国連邦', 'イギリス', 'アメリカ合衆国', '合衆国領有小離島', 'アメリカ領ヴァージン諸島', 'ウルグアイ', 'ウズベキスタン',
        'バヌアツ', 'ベネズエラ', 'ベトナム',
        'ウォリス・フツナ', '西サハラ',
        'イエメン',
        'ザンビア', 'ジンバブエ'
    );
    protected static \$prefecture = array(
        '北海道',
        '青森県', '岩手県', '宮城県', '秋田県', '山形県', '福島県',
        '茨城県', '栃木県', '群馬県', '埼玉県', '千葉県', '東京都', '神奈川県',
        '新潟県', '富山県', '石川県', '福井県', '山梨県', '長野県', '岐阜県', '静岡県', '愛知県',
        '三重県', '滋賀県', '京都府', '大阪府', '兵庫県', '奈良県', '和歌山県',
        '鳥取県', '島根県', '岡山県', '広島県', '山口県',
        '徳島県', '香川県', '愛媛県', '高知県',
        '福岡県', '佐賀県', '長崎県', '熊本県', '大分県', '宮崎県', '鹿児島県',
        '沖縄県'
    );
    protected static \$ward = array('中央', '北', '東', '南', '西');

    protected static \$citySuffix = array('市');
    protected static \$wardSuffix = array('区');
    protected static \$streetSuffix = array('町');

    protected static \$postcodeFormats = array('";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["postcode1"]) || array_key_exists("postcode1", $context) ? $context["postcode1"] : (function () { throw new RuntimeError('Variable "postcode1" does not exist.', 51, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["postcode2"]) || array_key_exists("postcode2", $context) ? $context["postcode2"] : (function () { throw new RuntimeError('Variable "postcode2" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "');
    protected static \$cityFormats = array(
        '";
        // line 53
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 53, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["citySuffix"]) || array_key_exists("citySuffix", $context) ? $context["citySuffix"] : (function () { throw new RuntimeError('Variable "citySuffix" does not exist.', 53, $this->source); })()), "html", null, true);
        echo "',
    );
    protected static \$streetNameFormats = array(
        '";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 56, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["streetSuffix"]) || array_key_exists("streetSuffix", $context) ? $context["streetSuffix"] : (function () { throw new RuntimeError('Variable "streetSuffix" does not exist.', 56, $this->source); })()), "html", null, true);
        echo "'
    );
    protected static \$streetAddressFormats = array(
        '";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 59, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 59, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["areaNumber"]) || array_key_exists("areaNumber", $context) ? $context["areaNumber"] : (function () { throw new RuntimeError('Variable "areaNumber" does not exist.', 59, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["areaNumber"]) || array_key_exists("areaNumber", $context) ? $context["areaNumber"] : (function () { throw new RuntimeError('Variable "areaNumber" does not exist.', 59, $this->source); })()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, (isset($context["areaNumber"]) || array_key_exists("areaNumber", $context) ? $context["areaNumber"] : (function () { throw new RuntimeError('Variable "areaNumber" does not exist.', 59, $this->source); })()), "html", null, true);
        echo "'
    );
    protected static \$addressFormats = array(
        '";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, (isset($context["prefecture"]) || array_key_exists("prefecture", $context) ? $context["prefecture"] : (function () { throw new RuntimeError('Variable "prefecture" does not exist.', 62, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 62, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["ward"]) || array_key_exists("ward", $context) ? $context["ward"] : (function () { throw new RuntimeError('Variable "ward" does not exist.', 62, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 63, $this->source); })()), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, (isset($context["prefecture"]) || array_key_exists("prefecture", $context) ? $context["prefecture"] : (function () { throw new RuntimeError('Variable "prefecture" does not exist.', 63, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 63, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["ward"]) || array_key_exists("ward", $context) ? $context["ward"] : (function () { throw new RuntimeError('Variable "ward" does not exist.', 63, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 63, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["secondaryAddress"]) || array_key_exists("secondaryAddress", $context) ? $context["secondaryAddress"] : (function () { throw new RuntimeError('Variable "secondaryAddress" does not exist.', 63, $this->source); })()), "html", null, true);
        echo "'
    );
    protected static \$secondaryAddressFormats = array(
        'ハイツ";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 66, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 66, $this->source); })()), "html", null, true);
        echo "号',
        'コーポ";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 67, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 67, $this->source); })()), "html", null, true);
        echo "号'
    );

    /**
     * @example 111
     */
    public static function postcode1()
    {
        return static::numberBetween(100, 999);
    }

    /**
     * @example 2222
     */
    public static function postcode2()
    {
        return static::numberBetween(1000, 9999);
    }

    /**
     * @example 1112222
     */
    public static function postcode()
    {
        \$postcode1 = static::postcode1();
        \$postcode2 = static::postcode2();

        return \$postcode1 . \$postcode2;
    }

    /**
     * @example '東京都'
     */
    public static function prefecture()
    {
        return static::randomElement(static::\$prefecture);
    }

    /**
     * @example '北区'
     */
    public static function ward()
    {
        \$ward = static::randomElement(static::\$ward);
        \$suffix = static::randomElement(static::\$wardSuffix);

        return \$ward . \$suffix;
    }

    /**
     * 丁、番地、号
     *
     * @return int
     */
    public static function areaNumber()
    {
        return static::numberBetween(1, 10);
    }

    public static function buildingNumber()
    {
        return static::numberBetween(101, 110);
    }

    public function secondaryAddress()
    {
        \$format = static::randomElement(static::\$secondaryAddressFormats);

        return \$this->generator->parse(\$format);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/ja_JP/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 67,  149 => 66,  136 => 63,  127 => 62,  115 => 59,  108 => 56,  101 => 53,  95 => 51,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\ja_JP;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$country = array(
        'アフガニスタン', 'アルバニア', 'アルジェリア', 'アメリカ領サモア', 'アンドラ', 'アンゴラ', 'アンギラ', '南極大陸', 'アンティグアバーブーダ', 'アルゼンチン', 'アルメニア', 'アルバ', 'オーストラリア', 'オーストリア', 'アゼルバイジャン',
        'バハマ', 'バーレーン', 'バングラデシュ', 'バルバドス', 'ベラルーシ', 'ベルギー', 'ベリーズ', 'ベナン', 'バミューダ島', 'ブータン', 'ボリビア', 'ボスニア・ヘルツェゴビナ', 'ボツワナ', 'ブーベ島', 'ブラジル', 'イギリス領インド洋地域', 'イギリス領ヴァージン諸島', 'ブルネイ', 'ブルガリア', 'ブルキナファソ', 'ブルンジ',
        'カンボジア', 'カメルーン', 'カナダ', 'カーボベルデ', 'ケイマン諸島', '中央アフリカ共和国', 'チャド', 'チリ', '中国', 'クリスマス島', 'ココス諸島', 'コロンビア', 'コモロ', 'コンゴ共和国', 'クック諸島', 'コスタリカ', 'コートジボワール', 'クロアチア', 'キューバ', 'キプロス共和国', 'チェコ共和国',
        'デンマーク', 'ジブチ共和国', 'ドミニカ国', 'ドミニカ共和国',
        'エクアドル', 'エジプト', 'エルサルバドル', '赤道ギニア共和国', 'エリトリア', 'エストニア', 'エチオピア',
        'フェロー諸島', 'フォークランド諸島', 'フィジー共和国', 'フィンランド', 'フランス', 'フランス領ギアナ', 'フランス領ポリネシア', 'フランス領極南諸島',
        'ガボン', 'ガンビア', 'グルジア', 'ドイツ', 'ガーナ', 'ジブラルタル', 'ギリシャ', 'グリーンランド', 'グレナダ', 'グアドループ', 'グアム', 'グアテマラ', 'ガーンジー', 'ギニア', 'ギニアビサウ', 'ガイアナ',
        'ハイチ', 'ハード島とマクドナルド諸島', 'バチカン市国', 'ホンジュラス', '香港', 'ハンガリー',
        'アイスランド', 'インド', 'インドネシア', 'イラン', 'イラク', 'アイルランド共和国', 'マン島', 'イスラエル', 'イタリア',
        'ジャマイカ', '日本', 'ジャージー島', 'ヨルダン',
        'カザフスタン', 'ケニア', 'キリバス', '朝鮮', '韓国', 'クウェート', 'キルギス共和国',
        'ラオス人民民主共和国', 'ラトビア', 'レバノン', 'レソト', 'リベリア', 'リビア国', 'リヒテンシュタイン', 'リトアニア', 'ルクセンブルク',
        'マカオ', 'マケドニア共和国', 'マダガスカル', 'マラウィ', 'マレーシア', 'モルディブ', 'マリ', 'マルタ共和国', 'マーシャル諸島', 'マルティニーク', 'モーリタニア・イスラム共和国', 'モーリシャス', 'マヨット', 'メキシコ', 'ミクロネシア連邦', 'モルドバ共和国', 'モナコ公国', 'モンゴル', 'モンテネグロ共和国', 'モントセラト', 'モロッコ', 'モザンビーク', 'ミャンマー',
        'ナミビア', 'ナウル', 'ネパール', 'オランダ領アンティル', 'オランダ', 'ニューカレドニア', 'ニュージーランド', 'ニカラグア', 'ニジェール', 'ナイジェリア', 'ニース', 'ノーフォーク島', '北マリアナ諸島', 'ノルウェー',
        'オマーン',
        'パキスタン', 'パラオ', 'パレスチナ自治区', 'パナマ', 'パプアニューギニア', 'パラグアイ', 'ペルー', 'フィリピン', 'ピトケアン諸島', 'ポーランド', 'ポルトガル', 'プエルトリコ',
        'カタール',
        'レユニオン', 'ルーマニア', 'ロシア', 'ルワンダ',
        'サン・バルテルミー島', 'セントヘレナ', 'セントクリストファー・ネイビス連邦', 'セントルシア', 'セント・マーチン島', 'サンピエール島・ミクロン島', 'セントビンセント・グレナディーン', 'サモア', 'サンマリノ', 'サントメプリンシペ', 'サウジアラビア', 'セネガル', 'セルビア', 'セイシェル', 'シエラレオネ', 'シンガポール', 'スロバキア', 'スロベニア', 'ソロモン諸島', 'ソマリア', '南アフリカ共和国', 'サウスジョージア・サウスサンドウィッチ諸島', 'スペイン', 'スリランカ', 'スーダン', 'スリナム', 'スヴァールバル諸島およびヤンマイエン島', 'スワジランド王国', 'スウェーデン', 'スイス', 'シリア',
        '台湾', 'タジキスタン共和国', 'タンザニア', 'タイ', '東ティモール', 'トーゴ', 'トケラウ', 'トンガ', 'トリニダード・トバゴ', 'チュニジア', 'トルコ', 'トルクメニスタン', 'タークス・カイコス諸島', 'ツバル',
        'ウガンダ', 'ウクライナ', 'アラブ首長国連邦', 'イギリス', 'アメリカ合衆国', '合衆国領有小離島', 'アメリカ領ヴァージン諸島', 'ウルグアイ', 'ウズベキスタン',
        'バヌアツ', 'ベネズエラ', 'ベトナム',
        'ウォリス・フツナ', '西サハラ',
        'イエメン',
        'ザンビア', 'ジンバブエ'
    );
    protected static \$prefecture = array(
        '北海道',
        '青森県', '岩手県', '宮城県', '秋田県', '山形県', '福島県',
        '茨城県', '栃木県', '群馬県', '埼玉県', '千葉県', '東京都', '神奈川県',
        '新潟県', '富山県', '石川県', '福井県', '山梨県', '長野県', '岐阜県', '静岡県', '愛知県',
        '三重県', '滋賀県', '京都府', '大阪府', '兵庫県', '奈良県', '和歌山県',
        '鳥取県', '島根県', '岡山県', '広島県', '山口県',
        '徳島県', '香川県', '愛媛県', '高知県',
        '福岡県', '佐賀県', '長崎県', '熊本県', '大分県', '宮崎県', '鹿児島県',
        '沖縄県'
    );
    protected static \$ward = array('中央', '北', '東', '南', '西');

    protected static \$citySuffix = array('市');
    protected static \$wardSuffix = array('区');
    protected static \$streetSuffix = array('町');

    protected static \$postcodeFormats = array('{{postcode1}}{{postcode2}}');
    protected static \$cityFormats = array(
        '{{lastName}}{{citySuffix}}',
    );
    protected static \$streetNameFormats = array(
        '{{lastName}}{{streetSuffix}}'
    );
    protected static \$streetAddressFormats = array(
        '{{streetName}}{{lastName}}{{areaNumber}}-{{areaNumber}}-{{areaNumber}}'
    );
    protected static \$addressFormats = array(
        '{{postcode}}  {{prefecture}}{{city}}{{ward}}{{streetAddress}}',
        '{{postcode}}  {{prefecture}}{{city}}{{ward}}{{streetAddress}} {{secondaryAddress}}'
    );
    protected static \$secondaryAddressFormats = array(
        'ハイツ{{lastName}}{{buildingNumber}}号',
        'コーポ{{lastName}}{{buildingNumber}}号'
    );

    /**
     * @example 111
     */
    public static function postcode1()
    {
        return static::numberBetween(100, 999);
    }

    /**
     * @example 2222
     */
    public static function postcode2()
    {
        return static::numberBetween(1000, 9999);
    }

    /**
     * @example 1112222
     */
    public static function postcode()
    {
        \$postcode1 = static::postcode1();
        \$postcode2 = static::postcode2();

        return \$postcode1 . \$postcode2;
    }

    /**
     * @example '東京都'
     */
    public static function prefecture()
    {
        return static::randomElement(static::\$prefecture);
    }

    /**
     * @example '北区'
     */
    public static function ward()
    {
        \$ward = static::randomElement(static::\$ward);
        \$suffix = static::randomElement(static::\$wardSuffix);

        return \$ward . \$suffix;
    }

    /**
     * 丁、番地、号
     *
     * @return int
     */
    public static function areaNumber()
    {
        return static::numberBetween(1, 10);
    }

    public static function buildingNumber()
    {
        return static::numberBetween(101, 110);
    }

    public function secondaryAddress()
    {
        \$format = static::randomElement(static::\$secondaryAddressFormats);

        return \$this->generator->parse(\$format);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/ja_JP/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/ja_JP/Address.php");
    }
}
