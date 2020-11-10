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

/* vendor/symfony/serializer/Tests/Annotation/SerializedNameTest.php */
class __TwigTemplate_09fa649179a192934c3fdc345fde9211bed9e12b6ecfb1c8175bb8e99a3619f1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Annotation/SerializedNameTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Annotation/SerializedNameTest.php"));

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

namespace Symfony\\Component\\Serializer\\Tests\\Annotation;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Serializer\\Annotation\\SerializedName;

/**
 * @author Fabien Bourigault <bourigaultfabien@gmail.com>
 */
class SerializedNameTest extends TestCase
{
    public function testNotSetSerializedNameParameter()
    {
        \$this->expectException('Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Parameter of annotation \"Symfony\\Component\\Serializer\\Annotation\\SerializedName\" should be set.');
        new SerializedName([]);
    }

    public function provideInvalidValues()
    {
        return [
            [''],
            [0],
        ];
    }

    /**
     * @dataProvider provideInvalidValues
     */
    public function testNotAStringSerializedNameParameter(\$value)
    {
        \$this->expectException('Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Parameter of annotation \"Symfony\\Component\\Serializer\\Annotation\\SerializedName\" must be a non-empty string.');
        new SerializedName(['value' => \$value]);
    }

    public function testSerializedNameParameters()
    {
        \$maxDepth = new SerializedName(['value' => 'foo']);
        \$this->assertEquals('foo', \$maxDepth->getSerializedName());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Annotation/SerializedNameTest.php";
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

namespace Symfony\\Component\\Serializer\\Tests\\Annotation;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Serializer\\Annotation\\SerializedName;

/**
 * @author Fabien Bourigault <bourigaultfabien@gmail.com>
 */
class SerializedNameTest extends TestCase
{
    public function testNotSetSerializedNameParameter()
    {
        \$this->expectException('Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Parameter of annotation \"Symfony\\Component\\Serializer\\Annotation\\SerializedName\" should be set.');
        new SerializedName([]);
    }

    public function provideInvalidValues()
    {
        return [
            [''],
            [0],
        ];
    }

    /**
     * @dataProvider provideInvalidValues
     */
    public function testNotAStringSerializedNameParameter(\$value)
    {
        \$this->expectException('Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Parameter of annotation \"Symfony\\Component\\Serializer\\Annotation\\SerializedName\" must be a non-empty string.');
        new SerializedName(['value' => \$value]);
    }

    public function testSerializedNameParameters()
    {
        \$maxDepth = new SerializedName(['value' => 'foo']);
        \$this->assertEquals('foo', \$maxDepth->getSerializedName());
    }
}
", "vendor/symfony/serializer/Tests/Annotation/SerializedNameTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Annotation/SerializedNameTest.php");
    }
}
