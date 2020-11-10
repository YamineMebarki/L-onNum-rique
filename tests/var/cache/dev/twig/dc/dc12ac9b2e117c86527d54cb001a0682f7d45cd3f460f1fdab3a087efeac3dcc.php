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

/* vendor/symfony/mime/Tests/Fixtures/samples/charsets/iso-2022-jp/one.txt */
class __TwigTemplate_5f4ec4abd2e461be6198db30dc42872c5a49146d22c88189ead7169e233c6951 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/Fixtures/samples/charsets/iso-2022-jp/one.txt"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/Fixtures/samples/charsets/iso-2022-jp/one.txt"));

        // line 1
        echo "ISO-2022-JPは、インターネット上(特に電子メール)などで使われる日本の文字用の文字符号化方式。ISO/IEC 2022のエスケープシーケンスを利用して文字集合を切り替える7ビットのコードであることを特徴とする (アナウンス機能のエスケープシーケンスは省略される)。俗に「JISコード」と呼ばれることもある。

概要
日本語表記への利用が想定されている文字コードであり、日本語の利用されるネットワークにおいて、日本の規格を応用したものである。また文字集合としては、日本語で用いられる漢字、ひらがな、カタカナはもちろん、ラテン文字、ギリシア文字、キリル文字なども含んでおり、学術や産業の分野での利用も考慮たものとなっている。規格名に、ISOの日本語の言語コードであるjaではなく、国・地域名コードのJPが示されているゆえんである。
文字集合としてJIS X 0201のC0集合（制御文字）、JIS X 0201のラテン文字集合、ISO 646の国際基準版図形文字、JIS X 0208の1978年版（JIS C 6226-1978）と1983年および1990年版が利用できる。JIS X 0201の片仮名文字集合は利用できない。1986年以降、日本の電子メールで用いられてきたJUNETコードを、村井純・Mark Crispin・Erik van der Poelが1993年にRFC化したもの(RFC 1468)。後にJIS X 0208:1997の附属書2としてJISに規定された。MIMEにおける文字符号化方式の識別用の名前として IANA に登録されている。
なお、符号化の仕様についてはISO/IEC 2022#ISO-2022-JPも参照。

ISO-2022-JPと非標準的拡張使用
「JISコード」（または「ISO-2022-JP」）というコード名の規定下では、その仕様通りの使用が求められる。しかし、Windows OS上では、実際にはCP932コード (MicrosoftによるShift JISを拡張した亜種。ISO-2022-JP規定外文字が追加されている。）による独自拡張（の文字）を断りなく使うアプリケーションが多い。この例としてInternet ExplorerやOutlook Expressがある。また、EmEditor、秀丸エディタやThunderbirdのようなMicrosoft社以外のWindowsアプリケーションでも同様の場合がある。この場合、ISO-2022-JPの範囲外の文字を使ってしまうと、異なる製品間では未定義不明文字として認識されるか、もしくは文字化けを起こす原因となる。そのため、Windows用の電子メールクライアントであっても独自拡張の文字を使用すると警告を出したり、あえて使えないように制限しているものも存在する。さらにはISO-2022-JPの範囲内であってもCP932は非標準文字（FULLWIDTH TILDE等）を持つので文字化けの原因になり得る。
また、符号化方式名をISO-2022-JPとしているのに、文字集合としてはJIS X 0212 (いわゆる補助漢字) やJIS X 0201の片仮名文字集合 (いわゆる半角カナ) をも符号化している例があるが、ISO-2022-JPではこれらの文字を許容していない。これらの符号化は独自拡張の実装であり、中にはISO/IEC 2022の仕様に準拠すらしていないものもある[2]。従って受信側の電子メールクライアントがこれらの独自拡張に対応していない場合、その文字あるいはその文字を含む行、時にはテキスト全体が文字化けすることがある。

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Tests/Fixtures/samples/charsets/iso-2022-jp/one.txt";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("ISO-2022-JPは、インターネット上(特に電子メール)などで使われる日本の文字用の文字符号化方式。ISO/IEC 2022のエスケープシーケンスを利用して文字集合を切り替える7ビットのコードであることを特徴とする (アナウンス機能のエスケープシーケンスは省略される)。俗に「JISコード」と呼ばれることもある。

概要
日本語表記への利用が想定されている文字コードであり、日本語の利用されるネットワークにおいて、日本の規格を応用したものである。また文字集合としては、日本語で用いられる漢字、ひらがな、カタカナはもちろん、ラテン文字、ギリシア文字、キリル文字なども含んでおり、学術や産業の分野での利用も考慮たものとなっている。規格名に、ISOの日本語の言語コードであるjaではなく、国・地域名コードのJPが示されているゆえんである。
文字集合としてJIS X 0201のC0集合（制御文字）、JIS X 0201のラテン文字集合、ISO 646の国際基準版図形文字、JIS X 0208の1978年版（JIS C 6226-1978）と1983年および1990年版が利用できる。JIS X 0201の片仮名文字集合は利用できない。1986年以降、日本の電子メールで用いられてきたJUNETコードを、村井純・Mark Crispin・Erik van der Poelが1993年にRFC化したもの(RFC 1468)。後にJIS X 0208:1997の附属書2としてJISに規定された。MIMEにおける文字符号化方式の識別用の名前として IANA に登録されている。
なお、符号化の仕様についてはISO/IEC 2022#ISO-2022-JPも参照。

ISO-2022-JPと非標準的拡張使用
「JISコード」（または「ISO-2022-JP」）というコード名の規定下では、その仕様通りの使用が求められる。しかし、Windows OS上では、実際にはCP932コード (MicrosoftによるShift JISを拡張した亜種。ISO-2022-JP規定外文字が追加されている。）による独自拡張（の文字）を断りなく使うアプリケーションが多い。この例としてInternet ExplorerやOutlook Expressがある。また、EmEditor、秀丸エディタやThunderbirdのようなMicrosoft社以外のWindowsアプリケーションでも同様の場合がある。この場合、ISO-2022-JPの範囲外の文字を使ってしまうと、異なる製品間では未定義不明文字として認識されるか、もしくは文字化けを起こす原因となる。そのため、Windows用の電子メールクライアントであっても独自拡張の文字を使用すると警告を出したり、あえて使えないように制限しているものも存在する。さらにはISO-2022-JPの範囲内であってもCP932は非標準文字（FULLWIDTH TILDE等）を持つので文字化けの原因になり得る。
また、符号化方式名をISO-2022-JPとしているのに、文字集合としてはJIS X 0212 (いわゆる補助漢字) やJIS X 0201の片仮名文字集合 (いわゆる半角カナ) をも符号化している例があるが、ISO-2022-JPではこれらの文字を許容していない。これらの符号化は独自拡張の実装であり、中にはISO/IEC 2022の仕様に準拠すらしていないものもある[2]。従って受信側の電子メールクライアントがこれらの独自拡張に対応していない場合、その文字あるいはその文字を含む行、時にはテキスト全体が文字化けすることがある。

", "vendor/symfony/mime/Tests/Fixtures/samples/charsets/iso-2022-jp/one.txt", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Tests/Fixtures/samples/charsets/iso-2022-jp/one.txt");
    }
}
