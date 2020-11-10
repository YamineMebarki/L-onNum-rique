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

/* vendor/symfony/cache/Tests/Marshaller/DefaultMarshallerTest.php */
class __TwigTemplate_be116bcc558a367c4438034de904dcb01dc6c834c9a581c65ef9dc3e3a57ae30 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Marshaller/DefaultMarshallerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/cache/Tests/Marshaller/DefaultMarshallerTest.php"));

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

namespace Symfony\\Component\\Cache\\Tests\\Marshaller;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Cache\\Marshaller\\DefaultMarshaller;

class DefaultMarshallerTest extends TestCase
{
    public function testSerialize()
    {
        \$marshaller = new DefaultMarshaller();
        \$values = [
            'a' => 123,
            'b' => function () {},
        ];

        \$expected = ['a' => \\extension_loaded('igbinary') && \\PHP_VERSION_ID !== 70400 ? igbinary_serialize(123) : serialize(123)];
        \$this->assertSame(\$expected, \$marshaller->marshall(\$values, \$failed));
        \$this->assertSame(['b'], \$failed);
    }

    public function testNativeUnserialize()
    {
        \$marshaller = new DefaultMarshaller();
        \$this->assertNull(\$marshaller->unmarshall(serialize(null)));
        \$this->assertFalse(\$marshaller->unmarshall(serialize(false)));
        \$this->assertSame('', \$marshaller->unmarshall(serialize('')));
        \$this->assertSame(0, \$marshaller->unmarshall(serialize(0)));
    }

    /**
     * @requires extension igbinary
     */
    public function testIgbinaryUnserialize()
    {
        if (\\PHP_VERSION_ID === 70400) {
            \$this->markTestSkipped('igbinary is not compatible with PHP 7.4.0.');
        }

        \$marshaller = new DefaultMarshaller();
        \$this->assertNull(\$marshaller->unmarshall(igbinary_serialize(null)));
        \$this->assertFalse(\$marshaller->unmarshall(igbinary_serialize(false)));
        \$this->assertSame('', \$marshaller->unmarshall(igbinary_serialize('')));
        \$this->assertSame(0, \$marshaller->unmarshall(igbinary_serialize(0)));
    }

    public function testNativeUnserializeNotFoundClass()
    {
        \$this->expectException('DomainException');
        \$this->expectExceptionMessage('Class not found: NotExistingClass');
        \$marshaller = new DefaultMarshaller();
        \$marshaller->unmarshall('O:16:\"NotExistingClass\":0:{}');
    }

    /**
     * @requires extension igbinary
     */
    public function testIgbinaryUnserializeNotFoundClass()
    {
        if (\\PHP_VERSION_ID === 70400) {
            \$this->markTestSkipped('igbinary is not compatible with PHP 7.4.0.');
        }

        \$this->expectException('DomainException');
        \$this->expectExceptionMessage('Class not found: NotExistingClass');
        \$marshaller = new DefaultMarshaller();
        \$marshaller->unmarshall(rawurldecode('%00%00%00%02%17%10NotExistingClass%14%00'));
    }

    public function testNativeUnserializeInvalid()
    {
        \$this->expectException('DomainException');
        \$this->expectExceptionMessage('unserialize(): Error at offset 0 of 3 bytes');
        \$marshaller = new DefaultMarshaller();
        set_error_handler(function () { return false; });
        try {
            @\$marshaller->unmarshall(':::');
        } finally {
            restore_error_handler();
        }
    }

    /**
     * @requires extension igbinary
     */
    public function testIgbinaryUnserializeInvalid()
    {
        if (\\PHP_VERSION_ID === 70400) {
            \$this->markTestSkipped('igbinary is not compatible with PHP 7.4.0');
        }

        \$this->expectException('DomainException');
        \$this->expectExceptionMessage('igbinary_unserialize_zval: unknown type \\'61\\', position 5');
        \$marshaller = new DefaultMarshaller();
        set_error_handler(function () { return false; });
        try {
            @\$marshaller->unmarshall(rawurldecode('%00%00%00%02abc'));
        } finally {
            restore_error_handler();
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/cache/Tests/Marshaller/DefaultMarshallerTest.php";
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

namespace Symfony\\Component\\Cache\\Tests\\Marshaller;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Cache\\Marshaller\\DefaultMarshaller;

class DefaultMarshallerTest extends TestCase
{
    public function testSerialize()
    {
        \$marshaller = new DefaultMarshaller();
        \$values = [
            'a' => 123,
            'b' => function () {},
        ];

        \$expected = ['a' => \\extension_loaded('igbinary') && \\PHP_VERSION_ID !== 70400 ? igbinary_serialize(123) : serialize(123)];
        \$this->assertSame(\$expected, \$marshaller->marshall(\$values, \$failed));
        \$this->assertSame(['b'], \$failed);
    }

    public function testNativeUnserialize()
    {
        \$marshaller = new DefaultMarshaller();
        \$this->assertNull(\$marshaller->unmarshall(serialize(null)));
        \$this->assertFalse(\$marshaller->unmarshall(serialize(false)));
        \$this->assertSame('', \$marshaller->unmarshall(serialize('')));
        \$this->assertSame(0, \$marshaller->unmarshall(serialize(0)));
    }

    /**
     * @requires extension igbinary
     */
    public function testIgbinaryUnserialize()
    {
        if (\\PHP_VERSION_ID === 70400) {
            \$this->markTestSkipped('igbinary is not compatible with PHP 7.4.0.');
        }

        \$marshaller = new DefaultMarshaller();
        \$this->assertNull(\$marshaller->unmarshall(igbinary_serialize(null)));
        \$this->assertFalse(\$marshaller->unmarshall(igbinary_serialize(false)));
        \$this->assertSame('', \$marshaller->unmarshall(igbinary_serialize('')));
        \$this->assertSame(0, \$marshaller->unmarshall(igbinary_serialize(0)));
    }

    public function testNativeUnserializeNotFoundClass()
    {
        \$this->expectException('DomainException');
        \$this->expectExceptionMessage('Class not found: NotExistingClass');
        \$marshaller = new DefaultMarshaller();
        \$marshaller->unmarshall('O:16:\"NotExistingClass\":0:{}');
    }

    /**
     * @requires extension igbinary
     */
    public function testIgbinaryUnserializeNotFoundClass()
    {
        if (\\PHP_VERSION_ID === 70400) {
            \$this->markTestSkipped('igbinary is not compatible with PHP 7.4.0.');
        }

        \$this->expectException('DomainException');
        \$this->expectExceptionMessage('Class not found: NotExistingClass');
        \$marshaller = new DefaultMarshaller();
        \$marshaller->unmarshall(rawurldecode('%00%00%00%02%17%10NotExistingClass%14%00'));
    }

    public function testNativeUnserializeInvalid()
    {
        \$this->expectException('DomainException');
        \$this->expectExceptionMessage('unserialize(): Error at offset 0 of 3 bytes');
        \$marshaller = new DefaultMarshaller();
        set_error_handler(function () { return false; });
        try {
            @\$marshaller->unmarshall(':::');
        } finally {
            restore_error_handler();
        }
    }

    /**
     * @requires extension igbinary
     */
    public function testIgbinaryUnserializeInvalid()
    {
        if (\\PHP_VERSION_ID === 70400) {
            \$this->markTestSkipped('igbinary is not compatible with PHP 7.4.0');
        }

        \$this->expectException('DomainException');
        \$this->expectExceptionMessage('igbinary_unserialize_zval: unknown type \\'61\\', position 5');
        \$marshaller = new DefaultMarshaller();
        set_error_handler(function () { return false; });
        try {
            @\$marshaller->unmarshall(rawurldecode('%00%00%00%02abc'));
        } finally {
            restore_error_handler();
        }
    }
}
", "vendor/symfony/cache/Tests/Marshaller/DefaultMarshallerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/cache/Tests/Marshaller/DefaultMarshallerTest.php");
    }
}
