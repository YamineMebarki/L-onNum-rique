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

/* vendor/symfony/mime/Tests/Header/PathHeaderTest.php */
class __TwigTemplate_7b79ce6e8ca38badb1116e00615fdba14c17cb9a3e9ebab103f2df54c30fcfce extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/Header/PathHeaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/Header/PathHeaderTest.php"));

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

namespace Symfony\\Component\\Mime\\Tests\\Header;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Mime\\Address;
use Symfony\\Component\\Mime\\Header\\PathHeader;

class PathHeaderTest extends TestCase
{
    public function testSingleAddressCanBeSetAndFetched()
    {
        \$header = new PathHeader('Return-Path', \$address = new Address('chris@swiftmailer.org'));
        \$this->assertEquals(\$address, \$header->getAddress());
    }

    public function testAddressMustComplyWithRfc2822()
    {
        \$this->expectException('Exception');
        \$header = new PathHeader('Return-Path', new Address('chr is@swiftmailer.org'));
    }

    public function testValueIsAngleAddrWithValidAddress()
    {
        /* -- RFC 2822, 3.6.7.

            return          =       \"Return-Path:\" path CRLF

            path            =       ([CFWS] \"<\" ([CFWS] / addr-spec) \">\" [CFWS]) /
                                                            obs-path
         */

        \$header = new PathHeader('Return-Path', new Address('chris@swiftmailer.org'));
        \$this->assertEquals('<chris@swiftmailer.org>', \$header->getBodyAsString());
    }

    public function testAddressIsIdnEncoded()
    {
        \$header = new PathHeader('Return-Path', new Address('chris@swïftmailer.org'));
        \$this->assertEquals('<chris@xn--swftmailer-78a.org>', \$header->getBodyAsString());
    }

    public function testAddressMustBeEncodable()
    {
        \$this->expectException('Symfony\\Component\\Mime\\Exception\\AddressEncoderException');
        \$header = new PathHeader('Return-Path', new Address('chrïs@swiftmailer.org'));
        \$header->getBodyAsString();
    }

    public function testSetBody()
    {
        \$header = new PathHeader('Return-Path', new Address('foo@example.com'));
        \$header->setBody(\$address = new Address('foo@bar.tld'));
        \$this->assertEquals(\$address, \$header->getAddress());
    }

    public function testGetBody()
    {
        \$header = new PathHeader('Return-Path', \$address = new Address('foo@bar.tld'));
        \$this->assertEquals(\$address, \$header->getBody());
    }

    public function testToString()
    {
        \$header = new PathHeader('Return-Path', new Address('chris@swiftmailer.org'));
        \$this->assertEquals('Return-Path: <chris@swiftmailer.org>', \$header->toString());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Tests/Header/PathHeaderTest.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
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

namespace Symfony\\Component\\Mime\\Tests\\Header;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Mime\\Address;
use Symfony\\Component\\Mime\\Header\\PathHeader;

class PathHeaderTest extends TestCase
{
    public function testSingleAddressCanBeSetAndFetched()
    {
        \$header = new PathHeader('Return-Path', \$address = new Address('chris@swiftmailer.org'));
        \$this->assertEquals(\$address, \$header->getAddress());
    }

    public function testAddressMustComplyWithRfc2822()
    {
        \$this->expectException('Exception');
        \$header = new PathHeader('Return-Path', new Address('chr is@swiftmailer.org'));
    }

    public function testValueIsAngleAddrWithValidAddress()
    {
        /* -- RFC 2822, 3.6.7.

            return          =       \"Return-Path:\" path CRLF

            path            =       ([CFWS] \"<\" ([CFWS] / addr-spec) \">\" [CFWS]) /
                                                            obs-path
         */

        \$header = new PathHeader('Return-Path', new Address('chris@swiftmailer.org'));
        \$this->assertEquals('<chris@swiftmailer.org>', \$header->getBodyAsString());
    }

    public function testAddressIsIdnEncoded()
    {
        \$header = new PathHeader('Return-Path', new Address('chris@swïftmailer.org'));
        \$this->assertEquals('<chris@xn--swftmailer-78a.org>', \$header->getBodyAsString());
    }

    public function testAddressMustBeEncodable()
    {
        \$this->expectException('Symfony\\Component\\Mime\\Exception\\AddressEncoderException');
        \$header = new PathHeader('Return-Path', new Address('chrïs@swiftmailer.org'));
        \$header->getBodyAsString();
    }

    public function testSetBody()
    {
        \$header = new PathHeader('Return-Path', new Address('foo@example.com'));
        \$header->setBody(\$address = new Address('foo@bar.tld'));
        \$this->assertEquals(\$address, \$header->getAddress());
    }

    public function testGetBody()
    {
        \$header = new PathHeader('Return-Path', \$address = new Address('foo@bar.tld'));
        \$this->assertEquals(\$address, \$header->getBody());
    }

    public function testToString()
    {
        \$header = new PathHeader('Return-Path', new Address('chris@swiftmailer.org'));
        \$this->assertEquals('Return-Path: <chris@swiftmailer.org>', \$header->toString());
    }
}
", "vendor/symfony/mime/Tests/Header/PathHeaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Tests/Header/PathHeaderTest.php");
    }
}
