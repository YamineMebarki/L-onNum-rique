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

/* vendor/symfony/serializer/Tests/Annotation/MaxDepthTest.php */
class __TwigTemplate_952387ee77a0e92f708d50096ba5e9f3548f86c8d27bdd1821826ff59d6e44b2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Annotation/MaxDepthTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Tests/Annotation/MaxDepthTest.php"));

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
use Symfony\\Component\\Serializer\\Annotation\\MaxDepth;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class MaxDepthTest extends TestCase
{
    public function testNotSetMaxDepthParameter()
    {
        \$this->expectException('Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Parameter of annotation \"Symfony\\Component\\Serializer\\Annotation\\MaxDepth\" should be set.');
        new MaxDepth([]);
    }

    public function provideInvalidValues()
    {
        return [
            [''],
            ['foo'],
            ['1'],
            [0],
        ];
    }

    /**
     * @dataProvider provideInvalidValues
     */
    public function testNotAnIntMaxDepthParameter(\$value)
    {
        \$this->expectException('Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Parameter of annotation \"Symfony\\Component\\Serializer\\Annotation\\MaxDepth\" must be a positive integer.');
        new MaxDepth(['value' => \$value]);
    }

    public function testMaxDepthParameters()
    {
        \$maxDepth = new MaxDepth(['value' => 3]);
        \$this->assertEquals(3, \$maxDepth->getMaxDepth());
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Tests/Annotation/MaxDepthTest.php";
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
use Symfony\\Component\\Serializer\\Annotation\\MaxDepth;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class MaxDepthTest extends TestCase
{
    public function testNotSetMaxDepthParameter()
    {
        \$this->expectException('Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Parameter of annotation \"Symfony\\Component\\Serializer\\Annotation\\MaxDepth\" should be set.');
        new MaxDepth([]);
    }

    public function provideInvalidValues()
    {
        return [
            [''],
            ['foo'],
            ['1'],
            [0],
        ];
    }

    /**
     * @dataProvider provideInvalidValues
     */
    public function testNotAnIntMaxDepthParameter(\$value)
    {
        \$this->expectException('Symfony\\Component\\Serializer\\Exception\\InvalidArgumentException');
        \$this->expectExceptionMessage('Parameter of annotation \"Symfony\\Component\\Serializer\\Annotation\\MaxDepth\" must be a positive integer.');
        new MaxDepth(['value' => \$value]);
    }

    public function testMaxDepthParameters()
    {
        \$maxDepth = new MaxDepth(['value' => 3]);
        \$this->assertEquals(3, \$maxDepth->getMaxDepth());
    }
}
", "vendor/symfony/serializer/Tests/Annotation/MaxDepthTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Tests/Annotation/MaxDepthTest.php");
    }
}
