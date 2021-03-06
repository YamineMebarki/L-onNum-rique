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

/* vendor/symfony/intl/Resources/data/scripts/ja.json */
class __TwigTemplate_3aa7cdfadfd5063587eb6d55b05e84e2214eca66338f87df3d8e006f6692f961 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/ja.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Resources/data/scripts/ja.json"));

        // line 1
        echo "{
    \"Version\": \"36\",
    \"Names\": {
        \"Afak\": \"アファカ文字\",
        \"Aghb\": \"カフカス・アルバニア文字\",
        \"Arab\": \"アラビア文字\",
        \"Armi\": \"帝国アラム文字\",
        \"Armn\": \"アルメニア文字\",
        \"Avst\": \"アヴェスター文字\",
        \"Bali\": \"バリ文字\",
        \"Bamu\": \"バムン文字\",
        \"Bass\": \"バサ文字\",
        \"Batk\": \"バタク文字\",
        \"Beng\": \"ベンガル文字\",
        \"Blis\": \"ブリスシンボル\",
        \"Bopo\": \"注音字母\",
        \"Brah\": \"ブラーフミー文字\",
        \"Brai\": \"ブライユ点字\",
        \"Bugi\": \"ブギス文字\",
        \"Buhd\": \"ブヒッド文字\",
        \"Cakm\": \"チャクマ文字\",
        \"Cans\": \"統合カナダ先住民音節文字\",
        \"Cari\": \"カリア文字\",
        \"Cham\": \"チャム文字\",
        \"Cher\": \"チェロキー文字\",
        \"Cirt\": \"キアス文字\",
        \"Copt\": \"コプト文字\",
        \"Cprt\": \"キプロス文字\",
        \"Cyrl\": \"キリル文字\",
        \"Cyrs\": \"古代教会スラブ語キリル文字\",
        \"Deva\": \"デーバナーガリー文字\",
        \"Dsrt\": \"デセレット文字\",
        \"Dupl\": \"デュプロワエ式速記\",
        \"Egyd\": \"エジプト民衆文字\",
        \"Egyh\": \"エジプト神官文字\",
        \"Egyp\": \"エジプト聖刻文字\",
        \"Elba\": \"エルバサン文字\",
        \"Ethi\": \"エチオピア文字\",
        \"Geok\": \"ジョージア文字(フツリ)\",
        \"Geor\": \"ジョージア文字\",
        \"Glag\": \"グラゴル文字\",
        \"Goth\": \"ゴート文字\",
        \"Gran\": \"グランタ文字\",
        \"Grek\": \"ギリシャ文字\",
        \"Gujr\": \"グジャラート文字\",
        \"Guru\": \"グルムキー文字\",
        \"Hanb\": \"漢語注音字母\",
        \"Hang\": \"ハングル\",
        \"Hani\": \"漢字\",
        \"Hano\": \"ハヌノオ文字\",
        \"Hans\": \"簡体字\",
        \"Hant\": \"繁体字\",
        \"Hebr\": \"ヘブライ文字\",
        \"Hira\": \"ひらがな\",
        \"Hluw\": \"アナトリア象形文字\",
        \"Hmng\": \"パハウ・フモン文字\",
        \"Hrkt\": \"仮名\",
        \"Hung\": \"古代ハンガリー文字\",
        \"Inds\": \"インダス文字\",
        \"Ital\": \"古イタリア文字\",
        \"Jamo\": \"字母\",
        \"Java\": \"ジャワ文字\",
        \"Jpan\": \"日本語の文字\",
        \"Jurc\": \"女真文字\",
        \"Kali\": \"カヤー文字\",
        \"Kana\": \"カタカナ\",
        \"Khar\": \"カローシュティー文字\",
        \"Khmr\": \"クメール文字\",
        \"Khoj\": \"ホジャ文字\",
        \"Knda\": \"カンナダ文字\",
        \"Kore\": \"韓国語の文字\",
        \"Kpel\": \"クペレ文字\",
        \"Kthi\": \"カイティ文字\",
        \"Lana\": \"ラーンナー文字\",
        \"Laoo\": \"ラオ文字\",
        \"Latf\": \"ラテン文字(ドイツ文字)\",
        \"Latg\": \"ラテン文字 (ゲール文字)\",
        \"Latn\": \"ラテン文字\",
        \"Lepc\": \"レプチャ文字\",
        \"Limb\": \"リンブ文字\",
        \"Lina\": \"線文字A\",
        \"Linb\": \"線文字B\",
        \"Lisu\": \"フレイザー文字\",
        \"Loma\": \"ロマ文字\",
        \"Lyci\": \"リキア文字\",
        \"Lydi\": \"リディア文字\",
        \"Mahj\": \"マハージャニー文字\",
        \"Mand\": \"マンダ文字\",
        \"Mani\": \"マニ文字\",
        \"Maya\": \"マヤ象形文字\",
        \"Mend\": \"メンデ文字\",
        \"Merc\": \"メロエ文字草書体\",
        \"Mero\": \"メロエ文字\",
        \"Mlym\": \"マラヤーラム文字\",
        \"Modi\": \"モーディー文字\",
        \"Mong\": \"モンゴル文字\",
        \"Moon\": \"ムーン文字\",
        \"Mroo\": \"ムロ文字\",
        \"Mtei\": \"メイテイ文字\",
        \"Mymr\": \"ミャンマー文字\",
        \"Narb\": \"古代北アラビア文字\",
        \"Nbat\": \"ナバテア文字\",
        \"Nkgb\": \"ナシ族ゲバ文字\",
        \"Nkoo\": \"ンコ文字\",
        \"Nshu\": \"女書\",
        \"Ogam\": \"オガム文字\",
        \"Olck\": \"オルチキ文字\",
        \"Orkh\": \"オルホン文字\",
        \"Orya\": \"オディア文字\",
        \"Osma\": \"オスマニア文字\",
        \"Palm\": \"パルミラ文字\",
        \"Pauc\": \"パウ・チン・ハウ文字\",
        \"Perm\": \"古ぺルム文字\",
        \"Phag\": \"パスパ文字\",
        \"Phli\": \"碑文パフラヴィー文字\",
        \"Phlp\": \"詩編用パフラヴィー文字\",
        \"Phlv\": \"書物用パフラヴィー文字\",
        \"Phnx\": \"フェニキア文字\",
        \"Plrd\": \"ポラード音声記号\",
        \"Prti\": \"碑文パルティア文字\",
        \"Rjng\": \"ルジャン文字\",
        \"Roro\": \"ロンゴロンゴ文字\",
        \"Runr\": \"ルーン文字\",
        \"Samr\": \"サマリア文字\",
        \"Sara\": \"サラティ文字\",
        \"Sarb\": \"古代南アラビア文字\",
        \"Saur\": \"サウラーシュトラ文字\",
        \"Sgnw\": \"手話文字\",
        \"Shaw\": \"ショー文字\",
        \"Shrd\": \"シャーラダー文字\",
        \"Sidd\": \"梵字\",
        \"Sind\": \"クダワディ文字\",
        \"Sinh\": \"シンハラ文字\",
        \"Sora\": \"ソラング・ソンペング文字\",
        \"Sund\": \"スンダ文字\",
        \"Sylo\": \"シロティ・ナグリ文字\",
        \"Syrc\": \"シリア文字\",
        \"Syre\": \"シリア文字(エストランゲロ文字)\",
        \"Syrj\": \"シリア文字(西方シリア文字)\",
        \"Syrn\": \"シリア文字(東方シリア文字)\",
        \"Tagb\": \"タグバンワ文字\",
        \"Takr\": \"タークリー文字\",
        \"Tale\": \"タイ・レ文字\",
        \"Talu\": \"新タイ・ルー文字\",
        \"Taml\": \"タミル文字\",
        \"Tang\": \"西夏文字\",
        \"Tavt\": \"タイ・ヴェト文字\",
        \"Telu\": \"テルグ文字\",
        \"Teng\": \"テングワール文字\",
        \"Tfng\": \"ティフナグ文字\",
        \"Tglg\": \"タガログ文字\",
        \"Thaa\": \"ターナ文字\",
        \"Thai\": \"タイ文字\",
        \"Tibt\": \"チベット文字\",
        \"Tirh\": \"ティルフータ文字\",
        \"Ugar\": \"ウガリット文字\",
        \"Vaii\": \"ヴァイ文字\",
        \"Visp\": \"視話法\",
        \"Wara\": \"バラン・クシティ文字\",
        \"Wole\": \"ウォレアイ文字\",
        \"Xpeo\": \"古代ペルシア文字\",
        \"Xsux\": \"シュメール＝アッカド語楔形文字\",
        \"Yiii\": \"イ文字\",
        \"Zinh\": \"基底文字の種別を継承する結合文字\",
        \"Zmth\": \"数学記号\",
        \"Zsye\": \"絵文字\",
        \"Zsym\": \"記号文字\",
        \"Zxxx\": \"非表記\",
        \"Zyyy\": \"共通文字\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Resources/data/scripts/ja.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"Version\": \"36\",
    \"Names\": {
        \"Afak\": \"アファカ文字\",
        \"Aghb\": \"カフカス・アルバニア文字\",
        \"Arab\": \"アラビア文字\",
        \"Armi\": \"帝国アラム文字\",
        \"Armn\": \"アルメニア文字\",
        \"Avst\": \"アヴェスター文字\",
        \"Bali\": \"バリ文字\",
        \"Bamu\": \"バムン文字\",
        \"Bass\": \"バサ文字\",
        \"Batk\": \"バタク文字\",
        \"Beng\": \"ベンガル文字\",
        \"Blis\": \"ブリスシンボル\",
        \"Bopo\": \"注音字母\",
        \"Brah\": \"ブラーフミー文字\",
        \"Brai\": \"ブライユ点字\",
        \"Bugi\": \"ブギス文字\",
        \"Buhd\": \"ブヒッド文字\",
        \"Cakm\": \"チャクマ文字\",
        \"Cans\": \"統合カナダ先住民音節文字\",
        \"Cari\": \"カリア文字\",
        \"Cham\": \"チャム文字\",
        \"Cher\": \"チェロキー文字\",
        \"Cirt\": \"キアス文字\",
        \"Copt\": \"コプト文字\",
        \"Cprt\": \"キプロス文字\",
        \"Cyrl\": \"キリル文字\",
        \"Cyrs\": \"古代教会スラブ語キリル文字\",
        \"Deva\": \"デーバナーガリー文字\",
        \"Dsrt\": \"デセレット文字\",
        \"Dupl\": \"デュプロワエ式速記\",
        \"Egyd\": \"エジプト民衆文字\",
        \"Egyh\": \"エジプト神官文字\",
        \"Egyp\": \"エジプト聖刻文字\",
        \"Elba\": \"エルバサン文字\",
        \"Ethi\": \"エチオピア文字\",
        \"Geok\": \"ジョージア文字(フツリ)\",
        \"Geor\": \"ジョージア文字\",
        \"Glag\": \"グラゴル文字\",
        \"Goth\": \"ゴート文字\",
        \"Gran\": \"グランタ文字\",
        \"Grek\": \"ギリシャ文字\",
        \"Gujr\": \"グジャラート文字\",
        \"Guru\": \"グルムキー文字\",
        \"Hanb\": \"漢語注音字母\",
        \"Hang\": \"ハングル\",
        \"Hani\": \"漢字\",
        \"Hano\": \"ハヌノオ文字\",
        \"Hans\": \"簡体字\",
        \"Hant\": \"繁体字\",
        \"Hebr\": \"ヘブライ文字\",
        \"Hira\": \"ひらがな\",
        \"Hluw\": \"アナトリア象形文字\",
        \"Hmng\": \"パハウ・フモン文字\",
        \"Hrkt\": \"仮名\",
        \"Hung\": \"古代ハンガリー文字\",
        \"Inds\": \"インダス文字\",
        \"Ital\": \"古イタリア文字\",
        \"Jamo\": \"字母\",
        \"Java\": \"ジャワ文字\",
        \"Jpan\": \"日本語の文字\",
        \"Jurc\": \"女真文字\",
        \"Kali\": \"カヤー文字\",
        \"Kana\": \"カタカナ\",
        \"Khar\": \"カローシュティー文字\",
        \"Khmr\": \"クメール文字\",
        \"Khoj\": \"ホジャ文字\",
        \"Knda\": \"カンナダ文字\",
        \"Kore\": \"韓国語の文字\",
        \"Kpel\": \"クペレ文字\",
        \"Kthi\": \"カイティ文字\",
        \"Lana\": \"ラーンナー文字\",
        \"Laoo\": \"ラオ文字\",
        \"Latf\": \"ラテン文字(ドイツ文字)\",
        \"Latg\": \"ラテン文字 (ゲール文字)\",
        \"Latn\": \"ラテン文字\",
        \"Lepc\": \"レプチャ文字\",
        \"Limb\": \"リンブ文字\",
        \"Lina\": \"線文字A\",
        \"Linb\": \"線文字B\",
        \"Lisu\": \"フレイザー文字\",
        \"Loma\": \"ロマ文字\",
        \"Lyci\": \"リキア文字\",
        \"Lydi\": \"リディア文字\",
        \"Mahj\": \"マハージャニー文字\",
        \"Mand\": \"マンダ文字\",
        \"Mani\": \"マニ文字\",
        \"Maya\": \"マヤ象形文字\",
        \"Mend\": \"メンデ文字\",
        \"Merc\": \"メロエ文字草書体\",
        \"Mero\": \"メロエ文字\",
        \"Mlym\": \"マラヤーラム文字\",
        \"Modi\": \"モーディー文字\",
        \"Mong\": \"モンゴル文字\",
        \"Moon\": \"ムーン文字\",
        \"Mroo\": \"ムロ文字\",
        \"Mtei\": \"メイテイ文字\",
        \"Mymr\": \"ミャンマー文字\",
        \"Narb\": \"古代北アラビア文字\",
        \"Nbat\": \"ナバテア文字\",
        \"Nkgb\": \"ナシ族ゲバ文字\",
        \"Nkoo\": \"ンコ文字\",
        \"Nshu\": \"女書\",
        \"Ogam\": \"オガム文字\",
        \"Olck\": \"オルチキ文字\",
        \"Orkh\": \"オルホン文字\",
        \"Orya\": \"オディア文字\",
        \"Osma\": \"オスマニア文字\",
        \"Palm\": \"パルミラ文字\",
        \"Pauc\": \"パウ・チン・ハウ文字\",
        \"Perm\": \"古ぺルム文字\",
        \"Phag\": \"パスパ文字\",
        \"Phli\": \"碑文パフラヴィー文字\",
        \"Phlp\": \"詩編用パフラヴィー文字\",
        \"Phlv\": \"書物用パフラヴィー文字\",
        \"Phnx\": \"フェニキア文字\",
        \"Plrd\": \"ポラード音声記号\",
        \"Prti\": \"碑文パルティア文字\",
        \"Rjng\": \"ルジャン文字\",
        \"Roro\": \"ロンゴロンゴ文字\",
        \"Runr\": \"ルーン文字\",
        \"Samr\": \"サマリア文字\",
        \"Sara\": \"サラティ文字\",
        \"Sarb\": \"古代南アラビア文字\",
        \"Saur\": \"サウラーシュトラ文字\",
        \"Sgnw\": \"手話文字\",
        \"Shaw\": \"ショー文字\",
        \"Shrd\": \"シャーラダー文字\",
        \"Sidd\": \"梵字\",
        \"Sind\": \"クダワディ文字\",
        \"Sinh\": \"シンハラ文字\",
        \"Sora\": \"ソラング・ソンペング文字\",
        \"Sund\": \"スンダ文字\",
        \"Sylo\": \"シロティ・ナグリ文字\",
        \"Syrc\": \"シリア文字\",
        \"Syre\": \"シリア文字(エストランゲロ文字)\",
        \"Syrj\": \"シリア文字(西方シリア文字)\",
        \"Syrn\": \"シリア文字(東方シリア文字)\",
        \"Tagb\": \"タグバンワ文字\",
        \"Takr\": \"タークリー文字\",
        \"Tale\": \"タイ・レ文字\",
        \"Talu\": \"新タイ・ルー文字\",
        \"Taml\": \"タミル文字\",
        \"Tang\": \"西夏文字\",
        \"Tavt\": \"タイ・ヴェト文字\",
        \"Telu\": \"テルグ文字\",
        \"Teng\": \"テングワール文字\",
        \"Tfng\": \"ティフナグ文字\",
        \"Tglg\": \"タガログ文字\",
        \"Thaa\": \"ターナ文字\",
        \"Thai\": \"タイ文字\",
        \"Tibt\": \"チベット文字\",
        \"Tirh\": \"ティルフータ文字\",
        \"Ugar\": \"ウガリット文字\",
        \"Vaii\": \"ヴァイ文字\",
        \"Visp\": \"視話法\",
        \"Wara\": \"バラン・クシティ文字\",
        \"Wole\": \"ウォレアイ文字\",
        \"Xpeo\": \"古代ペルシア文字\",
        \"Xsux\": \"シュメール＝アッカド語楔形文字\",
        \"Yiii\": \"イ文字\",
        \"Zinh\": \"基底文字の種別を継承する結合文字\",
        \"Zmth\": \"数学記号\",
        \"Zsye\": \"絵文字\",
        \"Zsym\": \"記号文字\",
        \"Zxxx\": \"非表記\",
        \"Zyyy\": \"共通文字\"
    }
}
", "vendor/symfony/intl/Resources/data/scripts/ja.json", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Resources/data/scripts/ja.json");
    }
}
