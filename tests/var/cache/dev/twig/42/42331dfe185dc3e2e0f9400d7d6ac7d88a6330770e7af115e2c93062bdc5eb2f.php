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

/* vendor/fzaninotto/faker/src/Faker/Provider/ko_KR/Internet.php */
class __TwigTemplate_7ca2217723e59c75557cb30245c0e38ae5f8cf9b0584dac9b495bb7a39b5aa04 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ko_KR/Internet.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ko_KR/Internet.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\ko_KR;

class Internet extends \\Faker\\Provider\\Internet
{
    protected static \$userNameFormats = array(
        '";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["lastNameAscii"]) || array_key_exists("lastNameAscii", $context) ? $context["lastNameAscii"] : (function () { throw new RuntimeError('Variable "lastNameAscii" does not exist.', 8, $this->source); })()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, (isset($context["firstNameAscii"]) || array_key_exists("firstNameAscii", $context) ? $context["firstNameAscii"] : (function () { throw new RuntimeError('Variable "firstNameAscii" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["firstNameAscii"]) || array_key_exists("firstNameAscii", $context) ? $context["firstNameAscii"] : (function () { throw new RuntimeError('Variable "firstNameAscii" does not exist.', 8, $this->source); })()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, (isset($context["lastNameAscii"]) || array_key_exists("lastNameAscii", $context) ? $context["lastNameAscii"] : (function () { throw new RuntimeError('Variable "lastNameAscii" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["firstNameAscii"]) || array_key_exists("firstNameAscii", $context) ? $context["firstNameAscii"] : (function () { throw new RuntimeError('Variable "firstNameAscii" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "##', '?";
        echo twig_escape_filter($this->env, (isset($context["lastNameAscii"]) || array_key_exists("lastNameAscii", $context) ? $context["lastNameAscii"] : (function () { throw new RuntimeError('Variable "lastNameAscii" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$safeEmailTld = array(
        'com', 'kr', 'me', 'net', 'org',
    );

    protected static \$tld = array(
        'biz', 'com', 'info', 'kr', 'net', 'org',
    );

    /**
     * {@link} http://ko.wikipedia.org/wiki/%EB%8C%80%ED%95%9C%EB%AF%BC%EA%B5%AD%EC%9D%98_%EC%9D%B8%EA%B5%AC%EC%88%9C_%EC%84%B1%EC%94%A8_%EB%AA%A9%EB%A1%9D
     */
    protected static \$lastNameAscii = array(
        'ahn', 'bae', 'baek', 'chang', 'cheon', 'cho', 'choi', 'chung', 'gang', 'go', 'gwak', 'gwon', 'ha', 'han',
        'heo', 'hong', 'hwang', 'jang', 'jeon', 'jo', 'jung', 'kang', 'kim', 'ko', 'kwak', 'kwon', 'lee', 'lim', 'moon',
        'nam', 'no', 'oh', 'park', 'ryu', 'seo', 'shim', 'shin', 'son', 'song', 'yang', 'yoon', 'yu',
    );

    /**
     * {@link} http://ko.wikipedia.org/wiki/%ED%95%9C%EA%B5%AD%EC%9D%98_%EC%84%B1%EC%94%A8%EC%99%80_%EC%9D%B4%EB%A6%84#.EC.8B.9C.EB.8C.80.EB.B3.84_.EA.B0.80.EC.9E.A5_.ED.9D.94.ED.95.9C_.EC.9D.B4.EB.A6.84_10.EC.84.A0.28.E9.81.B8.29
     */
    protected static \$firstNameAscii = array(
        'areum', 'arin', 'banhee', 'bom', 'bomi', 'bomin', 'boram', 'byungcheol', 'byungho', 'chaehyun', 'chaewon',
        'changyoung', 'daesoo', 'daesun', 'dayoung', 'dohyunn', 'dongha', 'donghyun', 'donghyun', 'dongyoon', 'doyoon',
        'doyoun', 'eunae', 'eunhee', 'eunhye', 'eunhyoung', 'eunji', 'eunjin', 'eunju', 'eunjung', 'eunkyoung', 'eunmi',
        'eunsang', 'eunseo', 'eunsung', 'eunteck', 'eunyoung', 'gangeun', 'ganghee', 'garam', 'geongeun', 'gunho',
        'gunwoo', 'haeun', 'hana', 'hanna', 'hayun', 'heekyoung', 'heewon', 'hojin', 'homin', 'hongsun', 'hyejin',
        'hyemin', 'hyena', 'hyerim', 'hyesuk', 'hyesun', 'hyeyoun', 'hyoil', 'hyojin', 'hyounjung', 'hyuksang',
        'hyungcheol', 'hyungmin', 'hyunji', 'hyunjong', 'hyunjoo', 'hyunjun', 'hyunkyu', 'hyunwoo', 'hyunyoung',
        'ingyu', 'inhwa', 'jaecheo', 'jaeho', 'jaehun', 'jaehyuk', 'jaehyun', 'jaeyeon', 'jaeyun', 'jia', 'jieun',
        'jihee', 'jihoo', 'jihoon', 'jihye', 'jihyeon', 'jimin', 'jina', 'jinhee', 'jinho', 'jinsoo', 'jinwoo', 'jisuk',
        'jisun', 'jiwon', 'jiwoo', 'jiye', 'jiyeon', 'jiyoung', 'jonghun', 'jongju', 'jongsoo', 'jughyung', 'juhee',
        'jumi', 'jumyoung', 'jun', 'junbum', 'jungeun', 'jungho', 'junghun', 'junghwa', 'jungmin', 'jungnam', 'jungran',
        'jungshik', 'jungsoo', 'jungsoo', 'jungwoong', 'junho', 'junhyuk', 'junhyung', 'junseo', 'junyoung', 'juwon',
        'juyeon', 'kisoo', 'kiyun', 'kubum', 'kwangsoo', 'kyungchoon', 'kyunghwan', 'kyungjoo', 'kyungseok', 'kyungsoo',
        'kyusan', 'mijung', 'mikyoung', 'mina', 'mincheol', 'minhee', 'minhwan', 'minhyoung', 'minjae', 'minji',
        'minjun', 'minseo', 'minseok', 'minsoo', 'minsung', 'mira', 'miran', 'miyoung', 'moonchang', 'moonyong',
        'myungho', 'myungshik', 'naeun', 'nahyoung', 'namho', 'namsoo', 'naree', 'naroo', 'nayun', 'nuree', 'saemi',
        'sangah', 'sangcheol', 'sangho', 'sanghun', 'sanghyun', 'sangjun', 'sangmyoung', 'sangsoo', 'sangsun',
        'sangwoo', 'sangwook', 'seoho', 'seohyeon', 'seojun', 'seoyeon', 'seoyoung', 'seoyun', 'seulki', 'seungho',
        'seunghyun', 'seungmin', 'sewon', 'sieun', 'sinae', 'siwoo', 'sojung', 'somin', 'soyoun', 'soyoung', 'subin',
        'sujin', 'sujung', 'sumin', 'sungeun', 'sunggon', 'sungho', 'sunghun', 'sunghyun', 'sungjin', 'sungmi',
        'sungmin', 'sungmin', 'sungryung', 'sungsoo', 'sunhang', 'sunho', 'sunjung', 'sunwoo', 'sunyoung', 'sunyup',
        'suran', 'suwon', 'suwon', 'suyoun', 'taehee', 'taeho', 'taehyun', 'wonhee', 'wonjin', 'wonjun', 'woojin',
        'yeji', 'yejin', 'yejun', 'yeojin', 'yeon', 'yewon', 'youngcheol', 'younggil', 'youngha', 'youngho', 'younghun',
        'younghwa', 'youngil', 'youngjin', 'youngjin', 'youngshik', 'youngsoo', 'youngtae', 'youngwhan', 'youngwhan',
        'younhee', 'younsun', 'yujin', 'yujung', 'yunkyoung', 'yunmi', 'yunseo', 'yunyoung', 'yuri'
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
     * @example 'gunwoo.gang'
     */
    public function userName()
    {
        \$format = static::randomElement(static::\$userNameFormats);

        return static::bothify(\$this->generator->parse(\$format));
    }

    /**
     * @example 'kim.kr'
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
        return "vendor/fzaninotto/faker/src/Faker/Provider/ko_KR/Internet.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\ko_KR;

class Internet extends \\Faker\\Provider\\Internet
{
    protected static \$userNameFormats = array(
        '{{lastNameAscii}}.{{firstNameAscii}}', '{{firstNameAscii}}.{{lastNameAscii}}', '{{firstNameAscii}}##', '?{{lastNameAscii}}',
    );

    protected static \$safeEmailTld = array(
        'com', 'kr', 'me', 'net', 'org',
    );

    protected static \$tld = array(
        'biz', 'com', 'info', 'kr', 'net', 'org',
    );

    /**
     * {@link} http://ko.wikipedia.org/wiki/%EB%8C%80%ED%95%9C%EB%AF%BC%EA%B5%AD%EC%9D%98_%EC%9D%B8%EA%B5%AC%EC%88%9C_%EC%84%B1%EC%94%A8_%EB%AA%A9%EB%A1%9D
     */
    protected static \$lastNameAscii = array(
        'ahn', 'bae', 'baek', 'chang', 'cheon', 'cho', 'choi', 'chung', 'gang', 'go', 'gwak', 'gwon', 'ha', 'han',
        'heo', 'hong', 'hwang', 'jang', 'jeon', 'jo', 'jung', 'kang', 'kim', 'ko', 'kwak', 'kwon', 'lee', 'lim', 'moon',
        'nam', 'no', 'oh', 'park', 'ryu', 'seo', 'shim', 'shin', 'son', 'song', 'yang', 'yoon', 'yu',
    );

    /**
     * {@link} http://ko.wikipedia.org/wiki/%ED%95%9C%EA%B5%AD%EC%9D%98_%EC%84%B1%EC%94%A8%EC%99%80_%EC%9D%B4%EB%A6%84#.EC.8B.9C.EB.8C.80.EB.B3.84_.EA.B0.80.EC.9E.A5_.ED.9D.94.ED.95.9C_.EC.9D.B4.EB.A6.84_10.EC.84.A0.28.E9.81.B8.29
     */
    protected static \$firstNameAscii = array(
        'areum', 'arin', 'banhee', 'bom', 'bomi', 'bomin', 'boram', 'byungcheol', 'byungho', 'chaehyun', 'chaewon',
        'changyoung', 'daesoo', 'daesun', 'dayoung', 'dohyunn', 'dongha', 'donghyun', 'donghyun', 'dongyoon', 'doyoon',
        'doyoun', 'eunae', 'eunhee', 'eunhye', 'eunhyoung', 'eunji', 'eunjin', 'eunju', 'eunjung', 'eunkyoung', 'eunmi',
        'eunsang', 'eunseo', 'eunsung', 'eunteck', 'eunyoung', 'gangeun', 'ganghee', 'garam', 'geongeun', 'gunho',
        'gunwoo', 'haeun', 'hana', 'hanna', 'hayun', 'heekyoung', 'heewon', 'hojin', 'homin', 'hongsun', 'hyejin',
        'hyemin', 'hyena', 'hyerim', 'hyesuk', 'hyesun', 'hyeyoun', 'hyoil', 'hyojin', 'hyounjung', 'hyuksang',
        'hyungcheol', 'hyungmin', 'hyunji', 'hyunjong', 'hyunjoo', 'hyunjun', 'hyunkyu', 'hyunwoo', 'hyunyoung',
        'ingyu', 'inhwa', 'jaecheo', 'jaeho', 'jaehun', 'jaehyuk', 'jaehyun', 'jaeyeon', 'jaeyun', 'jia', 'jieun',
        'jihee', 'jihoo', 'jihoon', 'jihye', 'jihyeon', 'jimin', 'jina', 'jinhee', 'jinho', 'jinsoo', 'jinwoo', 'jisuk',
        'jisun', 'jiwon', 'jiwoo', 'jiye', 'jiyeon', 'jiyoung', 'jonghun', 'jongju', 'jongsoo', 'jughyung', 'juhee',
        'jumi', 'jumyoung', 'jun', 'junbum', 'jungeun', 'jungho', 'junghun', 'junghwa', 'jungmin', 'jungnam', 'jungran',
        'jungshik', 'jungsoo', 'jungsoo', 'jungwoong', 'junho', 'junhyuk', 'junhyung', 'junseo', 'junyoung', 'juwon',
        'juyeon', 'kisoo', 'kiyun', 'kubum', 'kwangsoo', 'kyungchoon', 'kyunghwan', 'kyungjoo', 'kyungseok', 'kyungsoo',
        'kyusan', 'mijung', 'mikyoung', 'mina', 'mincheol', 'minhee', 'minhwan', 'minhyoung', 'minjae', 'minji',
        'minjun', 'minseo', 'minseok', 'minsoo', 'minsung', 'mira', 'miran', 'miyoung', 'moonchang', 'moonyong',
        'myungho', 'myungshik', 'naeun', 'nahyoung', 'namho', 'namsoo', 'naree', 'naroo', 'nayun', 'nuree', 'saemi',
        'sangah', 'sangcheol', 'sangho', 'sanghun', 'sanghyun', 'sangjun', 'sangmyoung', 'sangsoo', 'sangsun',
        'sangwoo', 'sangwook', 'seoho', 'seohyeon', 'seojun', 'seoyeon', 'seoyoung', 'seoyun', 'seulki', 'seungho',
        'seunghyun', 'seungmin', 'sewon', 'sieun', 'sinae', 'siwoo', 'sojung', 'somin', 'soyoun', 'soyoung', 'subin',
        'sujin', 'sujung', 'sumin', 'sungeun', 'sunggon', 'sungho', 'sunghun', 'sunghyun', 'sungjin', 'sungmi',
        'sungmin', 'sungmin', 'sungryung', 'sungsoo', 'sunhang', 'sunho', 'sunjung', 'sunwoo', 'sunyoung', 'sunyup',
        'suran', 'suwon', 'suwon', 'suyoun', 'taehee', 'taeho', 'taehyun', 'wonhee', 'wonjin', 'wonjun', 'woojin',
        'yeji', 'yejin', 'yejun', 'yeojin', 'yeon', 'yewon', 'youngcheol', 'younggil', 'youngha', 'youngho', 'younghun',
        'younghwa', 'youngil', 'youngjin', 'youngjin', 'youngshik', 'youngsoo', 'youngtae', 'youngwhan', 'youngwhan',
        'younhee', 'younsun', 'yujin', 'yujung', 'yunkyoung', 'yunmi', 'yunseo', 'yunyoung', 'yuri'
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
     * @example 'gunwoo.gang'
     */
    public function userName()
    {
        \$format = static::randomElement(static::\$userNameFormats);

        return static::bothify(\$this->generator->parse(\$format));
    }

    /**
     * @example 'kim.kr'
     */
    public function domainName()
    {
        return static::randomElement(static::\$lastNameAscii) . '.' . \$this->tld();
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/ko_KR/Internet.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/ko_KR/Internet.php");
    }
}
