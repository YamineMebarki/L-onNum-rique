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

/* vendor/symfony/validator/Tests/Constraints/UrlValidatorTest.php */
class __TwigTemplate_4e2fd17c801f7eac5f1c1a1daba20a6560ef1bbd19add9b97afeb2ee68686cbe extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/UrlValidatorTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Constraints/UrlValidatorTest.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Validator\\Tests\\Constraints;

use Symfony\\Bridge\\PhpUnit\\DnsMock;
use Symfony\\Component\\Validator\\Constraints\\Url;
use Symfony\\Component\\Validator\\Constraints\\UrlValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

/**
 * @group dns-sensitive
 */
class UrlValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new UrlValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Url());

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$this->validator->validate('', new Url());

        \$this->assertNoViolation();
    }

    public function testEmptyStringFromObjectIsValid()
    {
        \$this->validator->validate(new EmailProvider(), new Url());

        \$this->assertNoViolation();
    }

    public function testExpectsStringCompatibleType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$this->validator->validate(new \\stdClass(), new Url());
    }

    /**
     * @dataProvider getValidUrls
     */
    public function testValidUrls(\$url)
    {
        \$this->validator->validate(\$url, new Url());

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getValidUrlsWithWhitespaces
     */
    public function testValidUrlsWithWhitespaces(\$url)
    {
        \$this->validator->validate(\$url, new Url(['normalizer' => 'trim']));

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getValidRelativeUrls
     * @dataProvider getValidUrls
     */
    public function testValidRelativeUrl(\$url)
    {
        \$constraint = new Url([
            'relativeProtocol' => true,
        ]);

        \$this->validator->validate(\$url, \$constraint);

        \$this->assertNoViolation();
    }

    public function getValidRelativeUrls()
    {
        return [
            ['//example.com'],
            ['//examp_le.com'],
            ['//symfony.fake/blog/'],
            ['//symfony.com/search?type=&q=url+validator'],
        ];
    }

    public function getValidUrls()
    {
        return [
            ['http://a.pl'],
            ['http://www.example.com'],
            ['http://www.example.com.'],
            ['http://www.example.museum'],
            ['https://example.com/'],
            ['https://example.com:80/'],
            ['http://examp_le.com'],
            ['http://www.sub_domain.examp_le.com'],
            ['http://www.example.coop/'],
            ['http://www.test-example.com/'],
            ['http://www.symfony.com/'],
            ['http://symfony.fake/blog/'],
            ['http://symfony.com/?'],
            ['http://symfony.com/search?type=&q=url+validator'],
            ['http://symfony.com/#'],
            ['http://symfony.com/#?'],
            ['http://www.symfony.com/doc/current/book/validation.html#supported-constraints'],
            ['http://very.long.domain.name.com/'],
            ['http://localhost/'],
            ['http://myhost123/'],
            ['http://127.0.0.1/'],
            ['http://127.0.0.1:80/'],
            ['http://[::1]/'],
            ['http://[::1]:80/'],
            ['http://[1:2:3::4:5:6:7]/'],
            ['http://sãopaulo.com/'],
            ['http://xn--sopaulo-xwa.com/'],
            ['http://sãopaulo.com.br/'],
            ['http://xn--sopaulo-xwa.com.br/'],
            ['http://пример.испытание/'],
            ['http://xn--e1afmkfd.xn--80akhbyknj4f/'],
            ['http://مثال.إختبار/'],
            ['http://xn--mgbh0fb.xn--kgbechtv/'],
            ['http://例子.测试/'],
            ['http://xn--fsqu00a.xn--0zwm56d/'],
            ['http://例子.測試/'],
            ['http://xn--fsqu00a.xn--g6w251d/'],
            ['http://例え.テスト/'],
            ['http://xn--r8jz45g.xn--zckzah/'],
            ['http://مثال.آزمایشی/'],
            ['http://xn--mgbh0fb.xn--hgbk6aj7f53bba/'],
            ['http://실례.테스트/'],
            ['http://xn--9n2bp8q.xn--9t4b11yi5a/'],
            ['http://العربية.idn.icann.org/'],
            ['http://xn--ogb.idn.icann.org/'],
            ['http://xn--e1afmkfd.xn--80akhbyknj4f.xn--e1afmkfd/'],
            ['http://xn--espaa-rta.xn--ca-ol-fsay5a/'],
            ['http://xn--d1abbgf6aiiy.xn--p1ai/'],
            ['http://☎.com/'],
            ['http://username:password@symfony.com'],
            ['http://user.name:password@symfony.com'],
            ['http://username:pass.word@symfony.com'],
            ['http://user.name:pass.word@symfony.com'],
            ['http://user-name@symfony.com'],
            ['http://symfony.com?'],
            ['http://symfony.com?query=1'],
            ['http://symfony.com/?query=1'],
            ['http://symfony.com#'],
            ['http://symfony.com#fragment'],
            ['http://symfony.com/#fragment'],
            ['http://symfony.com/#one_more%20test'],
            ['http://example.com/exploit.html?hello[0]=test'],
        ];
    }

    public function getValidUrlsWithWhitespaces()
    {
        return [
            [\"\\x20http://www.example.com\"],
            [\"\\x09\\x09http://www.example.com.\"],
            [\"http://symfony.fake/blog/\\x0A\"],
            [\"http://symfony.com/search?type=&q=url+validator\\x0D\\x0D\"],
            [\"\\x00https://example.com:80\\x00\"],
            [\"\\x0B\\x0Bhttp://username:password@symfony.com\\x0B\\x0B\"],
        ];
    }

    /**
     * @dataProvider getInvalidUrls
     */
    public function testInvalidUrls(\$url)
    {
        \$constraint = new Url([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$url, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 193
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 193, $this->source); })()), "html", null, true);
        echo "', '\"'.\$url.'\"')
            ->setCode(Url::INVALID_URL_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getInvalidRelativeUrls
     * @dataProvider getInvalidUrls
     */
    public function testInvalidRelativeUrl(\$url)
    {
        \$constraint = new Url([
            'message' => 'myMessage',
            'relativeProtocol' => true,
        ]);

        \$this->validator->validate(\$url, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('";
        // line 212
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 212, $this->source); })()), "html", null, true);
        echo "', '\"'.\$url.'\"')
            ->setCode(Url::INVALID_URL_ERROR)
            ->assertRaised();
    }

    public function getInvalidRelativeUrls()
    {
        return [
            ['/example.com'],
            ['//example.com::aa'],
            ['//example.com:aa'],
            ['//127.0.0.1:aa/'],
            ['//[::1'],
            ['//hello.☎/'],
            ['//:password@symfony.com'],
            ['//:password@@symfony.com'],
            ['//username:passwordsymfony.com'],
            ['//usern@me:password@symfony.com'],
            ['//example.com/exploit.html?<script>alert(1);</script>'],
            ['//example.com/exploit.html?hel lo'],
            ['//example.com/exploit.html?not_a%hex'],
            ['//'],
        ];
    }

    public function getInvalidUrls()
    {
        return [
            ['example.com'],
            ['://example.com'],
            ['http ://example.com'],
            ['http:/example.com'],
            ['http://example.com::aa'],
            ['http://example.com:aa'],
            ['ftp://example.fr'],
            ['faked://example.fr'],
            ['http://127.0.0.1:aa/'],
            ['ftp://[::1]/'],
            ['http://[::1'],
            ['http://hello.☎/'],
            ['http://:password@symfony.com'],
            ['http://:password@@symfony.com'],
            ['http://username:passwordsymfony.com'],
            ['http://usern@me:password@symfony.com'],
            ['http://example.com/exploit.html?<script>alert(1);</script>'],
            ['http://example.com/exploit.html?hel lo'],
            ['http://example.com/exploit.html?not_a%hex'],
            ['http://'],
        ];
    }

    /**
     * @dataProvider getValidCustomUrls
     */
    public function testCustomProtocolIsValid(\$url)
    {
        \$constraint = new Url([
            'protocols' => ['ftp', 'file', 'git'],
        ]);

        \$this->validator->validate(\$url, \$constraint);

        \$this->assertNoViolation();
    }

    public function getValidCustomUrls()
    {
        return [
            ['ftp://example.com'],
            ['file://127.0.0.1'],
            ['git://[::1]/'],
        ];
    }

    /**
     * @dataProvider getCheckDns
     * @requires function Symfony\\Bridge\\PhpUnit\\DnsMock::withMockedHosts
     * @group legacy
     * @expectedDeprecation The \"checkDNS\" option in \"Symfony\\Component\\Validator\\Constraints\\Url\" is deprecated since Symfony 4.1. Its false-positive rate is too high to be relied upon.
     */
    public function testCheckDns(\$violation)
    {
        DnsMock::withMockedHosts(['example.com' => [['type' => \$violation ? '' : 'A']]]);

        \$constraint = new Url([
            'checkDNS' => 'ANY',
            'dnsMessage' => 'myMessage',
        ]);

        \$this->validator->validate('http://example.com', \$constraint);

        if (!\$violation) {
            \$this->assertNoViolation();
        } else {
            \$this->buildViolation('myMessage')
                ->setParameter('";
        // line 307
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 307, $this->source); })()), "html", null, true);
        echo "', '\"example.com\"')
                ->setCode(Url::INVALID_URL_ERROR)
                ->assertRaised();
        }
    }

    public function getCheckDns()
    {
        return [[true], [false]];
    }

    /**
     * @dataProvider getCheckDnsTypes
     * @requires function Symfony\\Bridge\\PhpUnit\\DnsMock::withMockedHosts
     * @group legacy
     * @expectedDeprecation The \"checkDNS\" option in \"Symfony\\Component\\Validator\\Constraints\\Url\" is deprecated since Symfony 4.1. Its false-positive rate is too high to be relied upon.
     */
    public function testCheckDnsByType(\$type)
    {
        DnsMock::withMockedHosts(['example.com' => [['type' => \$type]]]);

        \$constraint = new Url([
            'checkDNS' => \$type,
            'dnsMessage' => 'myMessage',
        ]);

        \$this->validator->validate('http://example.com', \$constraint);

        \$this->assertNoViolation();
    }

    public function getCheckDnsTypes()
    {
        return [
            ['ANY'],
            ['A'],
            ['A6'],
            ['AAAA'],
            ['CNAME'],
            ['MX'],
            ['NAPTR'],
            ['NS'],
            ['PTR'],
            ['SOA'],
            ['SRV'],
            ['TXT'],
        ];
    }

    /**
     * @requires function Symfony\\Bridge\\PhpUnit\\DnsMock::withMockedHosts
     * @group legacy
     * @expectedDeprecation The \"checkDNS\" option in \"Symfony\\Component\\Validator\\Constraints\\Url\" is deprecated since Symfony 4.1. Its false-positive rate is too high to be relied upon.
     * @expectedDeprecation The \"dnsMessage\" option in \"Symfony\\Component\\Validator\\Constraints\\Url\" is deprecated since Symfony 4.1.
     */
    public function testCheckDnsWithInvalidType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\InvalidOptionsException');
        DnsMock::withMockedHosts(['example.com' => [['type' => 'A']]]);

        \$constraint = new Url([
            'checkDNS' => 'BOGUS',
            'dnsMessage' => 'myMessage',
        ]);

        \$this->validator->validate('http://example.com', \$constraint);
    }

    /**
     * @group legacy
     * @expectedDeprecation The \"checkDNS\" option in \"Symfony\\Component\\Validator\\Constraints\\Url\" is deprecated since Symfony 4.1. Its false-positive rate is too high to be relied upon.
     */
    public function testCheckDnsOptionIsDeprecated()
    {
        \$constraint = new Url([
            'checkDNS' => Url::CHECK_DNS_TYPE_NONE,
        ]);

        \$this->validator->validate('http://example.com', \$constraint);
    }
}

class EmailProvider
{
    public function __toString()
    {
        return '';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Constraints/UrlValidatorTest.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 307,  259 => 212,  237 => 193,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Validator\\Tests\\Constraints;

use Symfony\\Bridge\\PhpUnit\\DnsMock;
use Symfony\\Component\\Validator\\Constraints\\Url;
use Symfony\\Component\\Validator\\Constraints\\UrlValidator;
use Symfony\\Component\\Validator\\Test\\ConstraintValidatorTestCase;

/**
 * @group dns-sensitive
 */
class UrlValidatorTest extends ConstraintValidatorTestCase
{
    protected function createValidator()
    {
        return new UrlValidator();
    }

    public function testNullIsValid()
    {
        \$this->validator->validate(null, new Url());

        \$this->assertNoViolation();
    }

    public function testEmptyStringIsValid()
    {
        \$this->validator->validate('', new Url());

        \$this->assertNoViolation();
    }

    public function testEmptyStringFromObjectIsValid()
    {
        \$this->validator->validate(new EmailProvider(), new Url());

        \$this->assertNoViolation();
    }

    public function testExpectsStringCompatibleType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\UnexpectedValueException');
        \$this->validator->validate(new \\stdClass(), new Url());
    }

    /**
     * @dataProvider getValidUrls
     */
    public function testValidUrls(\$url)
    {
        \$this->validator->validate(\$url, new Url());

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getValidUrlsWithWhitespaces
     */
    public function testValidUrlsWithWhitespaces(\$url)
    {
        \$this->validator->validate(\$url, new Url(['normalizer' => 'trim']));

        \$this->assertNoViolation();
    }

    /**
     * @dataProvider getValidRelativeUrls
     * @dataProvider getValidUrls
     */
    public function testValidRelativeUrl(\$url)
    {
        \$constraint = new Url([
            'relativeProtocol' => true,
        ]);

        \$this->validator->validate(\$url, \$constraint);

        \$this->assertNoViolation();
    }

    public function getValidRelativeUrls()
    {
        return [
            ['//example.com'],
            ['//examp_le.com'],
            ['//symfony.fake/blog/'],
            ['//symfony.com/search?type=&q=url+validator'],
        ];
    }

    public function getValidUrls()
    {
        return [
            ['http://a.pl'],
            ['http://www.example.com'],
            ['http://www.example.com.'],
            ['http://www.example.museum'],
            ['https://example.com/'],
            ['https://example.com:80/'],
            ['http://examp_le.com'],
            ['http://www.sub_domain.examp_le.com'],
            ['http://www.example.coop/'],
            ['http://www.test-example.com/'],
            ['http://www.symfony.com/'],
            ['http://symfony.fake/blog/'],
            ['http://symfony.com/?'],
            ['http://symfony.com/search?type=&q=url+validator'],
            ['http://symfony.com/#'],
            ['http://symfony.com/#?'],
            ['http://www.symfony.com/doc/current/book/validation.html#supported-constraints'],
            ['http://very.long.domain.name.com/'],
            ['http://localhost/'],
            ['http://myhost123/'],
            ['http://127.0.0.1/'],
            ['http://127.0.0.1:80/'],
            ['http://[::1]/'],
            ['http://[::1]:80/'],
            ['http://[1:2:3::4:5:6:7]/'],
            ['http://sãopaulo.com/'],
            ['http://xn--sopaulo-xwa.com/'],
            ['http://sãopaulo.com.br/'],
            ['http://xn--sopaulo-xwa.com.br/'],
            ['http://пример.испытание/'],
            ['http://xn--e1afmkfd.xn--80akhbyknj4f/'],
            ['http://مثال.إختبار/'],
            ['http://xn--mgbh0fb.xn--kgbechtv/'],
            ['http://例子.测试/'],
            ['http://xn--fsqu00a.xn--0zwm56d/'],
            ['http://例子.測試/'],
            ['http://xn--fsqu00a.xn--g6w251d/'],
            ['http://例え.テスト/'],
            ['http://xn--r8jz45g.xn--zckzah/'],
            ['http://مثال.آزمایشی/'],
            ['http://xn--mgbh0fb.xn--hgbk6aj7f53bba/'],
            ['http://실례.테스트/'],
            ['http://xn--9n2bp8q.xn--9t4b11yi5a/'],
            ['http://العربية.idn.icann.org/'],
            ['http://xn--ogb.idn.icann.org/'],
            ['http://xn--e1afmkfd.xn--80akhbyknj4f.xn--e1afmkfd/'],
            ['http://xn--espaa-rta.xn--ca-ol-fsay5a/'],
            ['http://xn--d1abbgf6aiiy.xn--p1ai/'],
            ['http://☎.com/'],
            ['http://username:password@symfony.com'],
            ['http://user.name:password@symfony.com'],
            ['http://username:pass.word@symfony.com'],
            ['http://user.name:pass.word@symfony.com'],
            ['http://user-name@symfony.com'],
            ['http://symfony.com?'],
            ['http://symfony.com?query=1'],
            ['http://symfony.com/?query=1'],
            ['http://symfony.com#'],
            ['http://symfony.com#fragment'],
            ['http://symfony.com/#fragment'],
            ['http://symfony.com/#one_more%20test'],
            ['http://example.com/exploit.html?hello[0]=test'],
        ];
    }

    public function getValidUrlsWithWhitespaces()
    {
        return [
            [\"\\x20http://www.example.com\"],
            [\"\\x09\\x09http://www.example.com.\"],
            [\"http://symfony.fake/blog/\\x0A\"],
            [\"http://symfony.com/search?type=&q=url+validator\\x0D\\x0D\"],
            [\"\\x00https://example.com:80\\x00\"],
            [\"\\x0B\\x0Bhttp://username:password@symfony.com\\x0B\\x0B\"],
        ];
    }

    /**
     * @dataProvider getInvalidUrls
     */
    public function testInvalidUrls(\$url)
    {
        \$constraint = new Url([
            'message' => 'myMessage',
        ]);

        \$this->validator->validate(\$url, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"'.\$url.'\"')
            ->setCode(Url::INVALID_URL_ERROR)
            ->assertRaised();
    }

    /**
     * @dataProvider getInvalidRelativeUrls
     * @dataProvider getInvalidUrls
     */
    public function testInvalidRelativeUrl(\$url)
    {
        \$constraint = new Url([
            'message' => 'myMessage',
            'relativeProtocol' => true,
        ]);

        \$this->validator->validate(\$url, \$constraint);

        \$this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '\"'.\$url.'\"')
            ->setCode(Url::INVALID_URL_ERROR)
            ->assertRaised();
    }

    public function getInvalidRelativeUrls()
    {
        return [
            ['/example.com'],
            ['//example.com::aa'],
            ['//example.com:aa'],
            ['//127.0.0.1:aa/'],
            ['//[::1'],
            ['//hello.☎/'],
            ['//:password@symfony.com'],
            ['//:password@@symfony.com'],
            ['//username:passwordsymfony.com'],
            ['//usern@me:password@symfony.com'],
            ['//example.com/exploit.html?<script>alert(1);</script>'],
            ['//example.com/exploit.html?hel lo'],
            ['//example.com/exploit.html?not_a%hex'],
            ['//'],
        ];
    }

    public function getInvalidUrls()
    {
        return [
            ['example.com'],
            ['://example.com'],
            ['http ://example.com'],
            ['http:/example.com'],
            ['http://example.com::aa'],
            ['http://example.com:aa'],
            ['ftp://example.fr'],
            ['faked://example.fr'],
            ['http://127.0.0.1:aa/'],
            ['ftp://[::1]/'],
            ['http://[::1'],
            ['http://hello.☎/'],
            ['http://:password@symfony.com'],
            ['http://:password@@symfony.com'],
            ['http://username:passwordsymfony.com'],
            ['http://usern@me:password@symfony.com'],
            ['http://example.com/exploit.html?<script>alert(1);</script>'],
            ['http://example.com/exploit.html?hel lo'],
            ['http://example.com/exploit.html?not_a%hex'],
            ['http://'],
        ];
    }

    /**
     * @dataProvider getValidCustomUrls
     */
    public function testCustomProtocolIsValid(\$url)
    {
        \$constraint = new Url([
            'protocols' => ['ftp', 'file', 'git'],
        ]);

        \$this->validator->validate(\$url, \$constraint);

        \$this->assertNoViolation();
    }

    public function getValidCustomUrls()
    {
        return [
            ['ftp://example.com'],
            ['file://127.0.0.1'],
            ['git://[::1]/'],
        ];
    }

    /**
     * @dataProvider getCheckDns
     * @requires function Symfony\\Bridge\\PhpUnit\\DnsMock::withMockedHosts
     * @group legacy
     * @expectedDeprecation The \"checkDNS\" option in \"Symfony\\Component\\Validator\\Constraints\\Url\" is deprecated since Symfony 4.1. Its false-positive rate is too high to be relied upon.
     */
    public function testCheckDns(\$violation)
    {
        DnsMock::withMockedHosts(['example.com' => [['type' => \$violation ? '' : 'A']]]);

        \$constraint = new Url([
            'checkDNS' => 'ANY',
            'dnsMessage' => 'myMessage',
        ]);

        \$this->validator->validate('http://example.com', \$constraint);

        if (!\$violation) {
            \$this->assertNoViolation();
        } else {
            \$this->buildViolation('myMessage')
                ->setParameter('{{ value }}', '\"example.com\"')
                ->setCode(Url::INVALID_URL_ERROR)
                ->assertRaised();
        }
    }

    public function getCheckDns()
    {
        return [[true], [false]];
    }

    /**
     * @dataProvider getCheckDnsTypes
     * @requires function Symfony\\Bridge\\PhpUnit\\DnsMock::withMockedHosts
     * @group legacy
     * @expectedDeprecation The \"checkDNS\" option in \"Symfony\\Component\\Validator\\Constraints\\Url\" is deprecated since Symfony 4.1. Its false-positive rate is too high to be relied upon.
     */
    public function testCheckDnsByType(\$type)
    {
        DnsMock::withMockedHosts(['example.com' => [['type' => \$type]]]);

        \$constraint = new Url([
            'checkDNS' => \$type,
            'dnsMessage' => 'myMessage',
        ]);

        \$this->validator->validate('http://example.com', \$constraint);

        \$this->assertNoViolation();
    }

    public function getCheckDnsTypes()
    {
        return [
            ['ANY'],
            ['A'],
            ['A6'],
            ['AAAA'],
            ['CNAME'],
            ['MX'],
            ['NAPTR'],
            ['NS'],
            ['PTR'],
            ['SOA'],
            ['SRV'],
            ['TXT'],
        ];
    }

    /**
     * @requires function Symfony\\Bridge\\PhpUnit\\DnsMock::withMockedHosts
     * @group legacy
     * @expectedDeprecation The \"checkDNS\" option in \"Symfony\\Component\\Validator\\Constraints\\Url\" is deprecated since Symfony 4.1. Its false-positive rate is too high to be relied upon.
     * @expectedDeprecation The \"dnsMessage\" option in \"Symfony\\Component\\Validator\\Constraints\\Url\" is deprecated since Symfony 4.1.
     */
    public function testCheckDnsWithInvalidType()
    {
        \$this->expectException('Symfony\\Component\\Validator\\Exception\\InvalidOptionsException');
        DnsMock::withMockedHosts(['example.com' => [['type' => 'A']]]);

        \$constraint = new Url([
            'checkDNS' => 'BOGUS',
            'dnsMessage' => 'myMessage',
        ]);

        \$this->validator->validate('http://example.com', \$constraint);
    }

    /**
     * @group legacy
     * @expectedDeprecation The \"checkDNS\" option in \"Symfony\\Component\\Validator\\Constraints\\Url\" is deprecated since Symfony 4.1. Its false-positive rate is too high to be relied upon.
     */
    public function testCheckDnsOptionIsDeprecated()
    {
        \$constraint = new Url([
            'checkDNS' => Url::CHECK_DNS_TYPE_NONE,
        ]);

        \$this->validator->validate('http://example.com', \$constraint);
    }
}

class EmailProvider
{
    public function __toString()
    {
        return '';
    }
}
", "vendor/symfony/validator/Tests/Constraints/UrlValidatorTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Constraints/UrlValidatorTest.php");
    }
}
