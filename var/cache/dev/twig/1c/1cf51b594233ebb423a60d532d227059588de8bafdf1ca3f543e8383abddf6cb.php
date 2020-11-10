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

/* vendor/symfony/form/Tests/Extension/Core/DataTransformer/DataTransformerChainTest.php */
class __TwigTemplate_708f7dad83ef2b5cdd805c0e173bf51f086b02e0407f7797585cf40b4861b866 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/DataTransformerChainTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/DataTransformerChainTest.php"));

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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Core\\DataTransformer;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\DataTransformerChain;

class DataTransformerChainTest extends TestCase
{
    public function testTransform()
    {
        \$transformer1 = \$this->getMockBuilder('Symfony\\Component\\Form\\DataTransformerInterface')->getMock();
        \$transformer1->expects(\$this->once())
            ->method('transform')
            ->with(\$this->identicalTo('foo'))
            ->willReturn('bar');
        \$transformer2 = \$this->getMockBuilder('Symfony\\Component\\Form\\DataTransformerInterface')->getMock();
        \$transformer2->expects(\$this->once())
            ->method('transform')
            ->with(\$this->identicalTo('bar'))
            ->willReturn('baz');

        \$chain = new DataTransformerChain([\$transformer1, \$transformer2]);

        \$this->assertEquals('baz', \$chain->transform('foo'));
    }

    public function testReverseTransform()
    {
        \$transformer2 = \$this->getMockBuilder('Symfony\\Component\\Form\\DataTransformerInterface')->getMock();
        \$transformer2->expects(\$this->once())
            ->method('reverseTransform')
            ->with(\$this->identicalTo('foo'))
            ->willReturn('bar');
        \$transformer1 = \$this->getMockBuilder('Symfony\\Component\\Form\\DataTransformerInterface')->getMock();
        \$transformer1->expects(\$this->once())
            ->method('reverseTransform')
            ->with(\$this->identicalTo('bar'))
            ->willReturn('baz');

        \$chain = new DataTransformerChain([\$transformer1, \$transformer2]);

        \$this->assertEquals('baz', \$chain->reverseTransform('foo'));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Tests/Extension/Core/DataTransformer/DataTransformerChainTest.php";
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

namespace Symfony\\Component\\Form\\Tests\\Extension\\Core\\DataTransformer;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Form\\Extension\\Core\\DataTransformer\\DataTransformerChain;

class DataTransformerChainTest extends TestCase
{
    public function testTransform()
    {
        \$transformer1 = \$this->getMockBuilder('Symfony\\Component\\Form\\DataTransformerInterface')->getMock();
        \$transformer1->expects(\$this->once())
            ->method('transform')
            ->with(\$this->identicalTo('foo'))
            ->willReturn('bar');
        \$transformer2 = \$this->getMockBuilder('Symfony\\Component\\Form\\DataTransformerInterface')->getMock();
        \$transformer2->expects(\$this->once())
            ->method('transform')
            ->with(\$this->identicalTo('bar'))
            ->willReturn('baz');

        \$chain = new DataTransformerChain([\$transformer1, \$transformer2]);

        \$this->assertEquals('baz', \$chain->transform('foo'));
    }

    public function testReverseTransform()
    {
        \$transformer2 = \$this->getMockBuilder('Symfony\\Component\\Form\\DataTransformerInterface')->getMock();
        \$transformer2->expects(\$this->once())
            ->method('reverseTransform')
            ->with(\$this->identicalTo('foo'))
            ->willReturn('bar');
        \$transformer1 = \$this->getMockBuilder('Symfony\\Component\\Form\\DataTransformerInterface')->getMock();
        \$transformer1->expects(\$this->once())
            ->method('reverseTransform')
            ->with(\$this->identicalTo('bar'))
            ->willReturn('baz');

        \$chain = new DataTransformerChain([\$transformer1, \$transformer2]);

        \$this->assertEquals('baz', \$chain->reverseTransform('foo'));
    }
}
", "vendor/symfony/form/Tests/Extension/Core/DataTransformer/DataTransformerChainTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Tests/Extension/Core/DataTransformer/DataTransformerChainTest.php");
    }
}
