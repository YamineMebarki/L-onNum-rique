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

/* vendor/symfony/mime/Tests/Header/MailboxHeaderTest.php */
class __TwigTemplate_a90796b0ef1c997fb961c23fdc401ef7d65924df073cf3d9f9759b8959e06744 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/Header/MailboxHeaderTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/Header/MailboxHeaderTest.php"));

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
use Symfony\\Component\\Mime\\Header\\MailboxHeader;
use Symfony\\Component\\Mime\\NamedAddress;

class MailboxHeaderTest extends TestCase
{
    public function testConstructor()
    {
        \$header = new MailboxHeader('Sender', \$address = new Address('fabien@symfony.com'));
        \$this->assertEquals(\$address, \$header->getAddress());
        \$this->assertEquals(\$address, \$header->getBody());
    }

    public function testAddress()
    {
        \$header = new MailboxHeader('Sender', new Address('fabien@symfony.com'));
        \$header->setBody(\$address = new Address('helene@symfony.com'));
        \$this->assertEquals(\$address, \$header->getAddress());
        \$this->assertEquals(\$address, \$header->getBody());
        \$header->setAddress(\$address = new Address('thomas@symfony.com'));
        \$this->assertEquals(\$address, \$header->getAddress());
        \$this->assertEquals(\$address, \$header->getBody());
    }

    public function testgetBodyAsString()
    {
        \$header = new MailboxHeader('Sender', new Address('fabien@symfony.com'));
        \$this->assertEquals('fabien@symfony.com', \$header->getBodyAsString());

        \$header->setAddress(new Address('fabien@sïmfony.com'));
        \$this->assertEquals('fabien@xn--smfony-iwa.com', \$header->getBodyAsString());

        \$header = new MailboxHeader('Sender', new NamedAddress('fabien@symfony.com', 'Fabien Potencier'));
        \$this->assertEquals('Fabien Potencier <fabien@symfony.com>', \$header->getBodyAsString());

        \$header = new MailboxHeader('Sender', new NamedAddress('fabien@symfony.com', 'Fabien Potencier, \"from Symfony\"'));
        \$this->assertEquals('\"Fabien Potencier, \\\"from Symfony\\\"\" <fabien@symfony.com>', \$header->getBodyAsString());

        \$header = new MailboxHeader('From', new NamedAddress('fabien@symfony.com', 'Fabien Potencier, \\\\escaped\\\\'));
        \$this->assertEquals('\"Fabien Potencier, \\\\\\\\escaped\\\\\\\\\" <fabien@symfony.com>', \$header->getBodyAsString());

        \$name = 'P'.pack('C', 0x8F).'tencier';
        \$header = new MailboxHeader('Sender', new NamedAddress('fabien@symfony.com', 'Fabien '.\$name));
        \$header->setCharset('iso-8859-1');
        \$this->assertEquals('Fabien =?'.\$header->getCharset().'?Q?P=8Ftencier?= <fabien@symfony.com>', \$header->getBodyAsString());
    }

    public function testUtf8CharsInLocalPartThrows()
    {
        \$this->expectException('Symfony\\Component\\Mime\\Exception\\AddressEncoderException');
        \$header = new MailboxHeader('Sender', new Address('fabïen@symfony.com'));
        \$header->getBodyAsString();
    }

    public function testToString()
    {
        \$header = new MailboxHeader('Sender', new Address('fabien@symfony.com'));
        \$this->assertEquals('Sender: fabien@symfony.com', \$header->toString());

        \$header = new MailboxHeader('Sender', new NamedAddress('fabien@symfony.com', 'Fabien Potencier'));
        \$this->assertEquals('Sender: Fabien Potencier <fabien@symfony.com>', \$header->toString());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Tests/Header/MailboxHeaderTest.php";
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
use Symfony\\Component\\Mime\\Header\\MailboxHeader;
use Symfony\\Component\\Mime\\NamedAddress;

class MailboxHeaderTest extends TestCase
{
    public function testConstructor()
    {
        \$header = new MailboxHeader('Sender', \$address = new Address('fabien@symfony.com'));
        \$this->assertEquals(\$address, \$header->getAddress());
        \$this->assertEquals(\$address, \$header->getBody());
    }

    public function testAddress()
    {
        \$header = new MailboxHeader('Sender', new Address('fabien@symfony.com'));
        \$header->setBody(\$address = new Address('helene@symfony.com'));
        \$this->assertEquals(\$address, \$header->getAddress());
        \$this->assertEquals(\$address, \$header->getBody());
        \$header->setAddress(\$address = new Address('thomas@symfony.com'));
        \$this->assertEquals(\$address, \$header->getAddress());
        \$this->assertEquals(\$address, \$header->getBody());
    }

    public function testgetBodyAsString()
    {
        \$header = new MailboxHeader('Sender', new Address('fabien@symfony.com'));
        \$this->assertEquals('fabien@symfony.com', \$header->getBodyAsString());

        \$header->setAddress(new Address('fabien@sïmfony.com'));
        \$this->assertEquals('fabien@xn--smfony-iwa.com', \$header->getBodyAsString());

        \$header = new MailboxHeader('Sender', new NamedAddress('fabien@symfony.com', 'Fabien Potencier'));
        \$this->assertEquals('Fabien Potencier <fabien@symfony.com>', \$header->getBodyAsString());

        \$header = new MailboxHeader('Sender', new NamedAddress('fabien@symfony.com', 'Fabien Potencier, \"from Symfony\"'));
        \$this->assertEquals('\"Fabien Potencier, \\\"from Symfony\\\"\" <fabien@symfony.com>', \$header->getBodyAsString());

        \$header = new MailboxHeader('From', new NamedAddress('fabien@symfony.com', 'Fabien Potencier, \\\\escaped\\\\'));
        \$this->assertEquals('\"Fabien Potencier, \\\\\\\\escaped\\\\\\\\\" <fabien@symfony.com>', \$header->getBodyAsString());

        \$name = 'P'.pack('C', 0x8F).'tencier';
        \$header = new MailboxHeader('Sender', new NamedAddress('fabien@symfony.com', 'Fabien '.\$name));
        \$header->setCharset('iso-8859-1');
        \$this->assertEquals('Fabien =?'.\$header->getCharset().'?Q?P=8Ftencier?= <fabien@symfony.com>', \$header->getBodyAsString());
    }

    public function testUtf8CharsInLocalPartThrows()
    {
        \$this->expectException('Symfony\\Component\\Mime\\Exception\\AddressEncoderException');
        \$header = new MailboxHeader('Sender', new Address('fabïen@symfony.com'));
        \$header->getBodyAsString();
    }

    public function testToString()
    {
        \$header = new MailboxHeader('Sender', new Address('fabien@symfony.com'));
        \$this->assertEquals('Sender: fabien@symfony.com', \$header->toString());

        \$header = new MailboxHeader('Sender', new NamedAddress('fabien@symfony.com', 'Fabien Potencier'));
        \$this->assertEquals('Sender: Fabien Potencier <fabien@symfony.com>', \$header->toString());
    }
}
", "vendor/symfony/mime/Tests/Header/MailboxHeaderTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Tests/Header/MailboxHeaderTest.php");
    }
}
