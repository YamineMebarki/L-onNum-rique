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

/* vendor/symfony/mime/Tests/AddressTest.php */
class __TwigTemplate_14efe4bf985311f4dcd2bc77f66af8b7b38289ef13f9a13150f39f02f0643e55 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/AddressTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Tests/AddressTest.php"));

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

namespace Symfony\\Component\\Mime\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Mime\\Address;
use Symfony\\Component\\Mime\\NamedAddress;

class AddressTest extends TestCase
{
    public function testConstructor()
    {
        \$a = new Address('fabien@symfonï.com');
        \$this->assertEquals('fabien@symfonï.com', \$a->getAddress());
        \$this->assertEquals('fabien@xn--symfon-nwa.com', \$a->toString());
        \$this->assertEquals('fabien@xn--symfon-nwa.com', \$a->getEncodedAddress());
    }

    public function testConstructorWithInvalidAddress()
    {
        \$this->expectException(\\InvalidArgumentException::class);
        new Address('fab   pot@symfony.com');
    }

    public function testCreate()
    {
        \$this->assertSame(\$a = new Address('fabien@symfony.com'), Address::create(\$a));
        \$this->assertSame(\$b = new NamedAddress('helene@symfony.com', 'Helene'), Address::create(\$b));
        \$this->assertEquals(\$a, Address::create('fabien@symfony.com'));
    }

    public function testCreateWrongArg()
    {
        \$this->expectException(\\InvalidArgumentException::class);
        Address::create(new \\stdClass());
    }

    public function testCreateArray()
    {
        \$fabien = new Address('fabien@symfony.com');
        \$helene = new NamedAddress('helene@symfony.com', 'Helene');
        \$this->assertSame([\$fabien, \$helene], Address::createArray([\$fabien, \$helene]));

        \$this->assertEquals([\$fabien], Address::createArray(['fabien@symfony.com']));
    }

    public function testCreateArrayWrongArg()
    {
        \$this->expectException(\\InvalidArgumentException::class);
        Address::createArray([new \\stdClass()]);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Tests/AddressTest.php";
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

namespace Symfony\\Component\\Mime\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Mime\\Address;
use Symfony\\Component\\Mime\\NamedAddress;

class AddressTest extends TestCase
{
    public function testConstructor()
    {
        \$a = new Address('fabien@symfonï.com');
        \$this->assertEquals('fabien@symfonï.com', \$a->getAddress());
        \$this->assertEquals('fabien@xn--symfon-nwa.com', \$a->toString());
        \$this->assertEquals('fabien@xn--symfon-nwa.com', \$a->getEncodedAddress());
    }

    public function testConstructorWithInvalidAddress()
    {
        \$this->expectException(\\InvalidArgumentException::class);
        new Address('fab   pot@symfony.com');
    }

    public function testCreate()
    {
        \$this->assertSame(\$a = new Address('fabien@symfony.com'), Address::create(\$a));
        \$this->assertSame(\$b = new NamedAddress('helene@symfony.com', 'Helene'), Address::create(\$b));
        \$this->assertEquals(\$a, Address::create('fabien@symfony.com'));
    }

    public function testCreateWrongArg()
    {
        \$this->expectException(\\InvalidArgumentException::class);
        Address::create(new \\stdClass());
    }

    public function testCreateArray()
    {
        \$fabien = new Address('fabien@symfony.com');
        \$helene = new NamedAddress('helene@symfony.com', 'Helene');
        \$this->assertSame([\$fabien, \$helene], Address::createArray([\$fabien, \$helene]));

        \$this->assertEquals([\$fabien], Address::createArray(['fabien@symfony.com']));
    }

    public function testCreateArrayWrongArg()
    {
        \$this->expectException(\\InvalidArgumentException::class);
        Address::createArray([new \\stdClass()]);
    }
}
", "vendor/symfony/mime/Tests/AddressTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Tests/AddressTest.php");
    }
}
