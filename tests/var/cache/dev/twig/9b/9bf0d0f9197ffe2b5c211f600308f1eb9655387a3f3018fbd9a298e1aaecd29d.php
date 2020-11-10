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

/* vendor/symfony/framework-bundle/Tests/Controller/TemplateControllerTest.php */
class __TwigTemplate_5b07682d95cb94794473492ce5e158033e37cd54533e046470bbb8c85ad9f789 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Controller/TemplateControllerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Controller/TemplateControllerTest.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Controller;

use Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController;
use Symfony\\Bundle\\FrameworkBundle\\Templating\\EngineInterface;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\TestCase;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class TemplateControllerTest extends TestCase
{
    public function testTwig()
    {
        \$twig = \$this->getMockBuilder('Twig\\Environment')->disableOriginalConstructor()->getMock();
        \$twig->expects(\$this->exactly(2))->method('render')->willReturn('bar');

        \$controller = new TemplateController(\$twig);

        \$this->assertEquals('bar', \$controller->templateAction('mytemplate')->getContent());
        \$this->assertEquals('bar', \$controller('mytemplate')->getContent());
    }

    public function testTemplating()
    {
        \$templating = \$this->getMockBuilder(EngineInterface::class)->getMock();
        \$templating->expects(\$this->exactly(2))->method('render')->willReturn('bar');

        \$controller = new TemplateController(null, \$templating);

        \$this->assertEquals('bar', \$controller->templateAction('mytemplate')->getContent());
        \$this->assertEquals('bar', \$controller('mytemplate')->getContent());
    }

    public function testNoTwigNorTemplating()
    {
        \$this->expectException('LogicException');
        \$this->expectExceptionMessage('You can not use the TemplateController if the Templating Component or the Twig Bundle are not available.');
        \$controller = new TemplateController();

        \$controller->templateAction('mytemplate')->getContent();
        \$controller('mytemplate')->getContent();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Controller/TemplateControllerTest.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Tests\\Controller;

use Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController;
use Symfony\\Bundle\\FrameworkBundle\\Templating\\EngineInterface;
use Symfony\\Bundle\\FrameworkBundle\\Tests\\TestCase;

/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class TemplateControllerTest extends TestCase
{
    public function testTwig()
    {
        \$twig = \$this->getMockBuilder('Twig\\Environment')->disableOriginalConstructor()->getMock();
        \$twig->expects(\$this->exactly(2))->method('render')->willReturn('bar');

        \$controller = new TemplateController(\$twig);

        \$this->assertEquals('bar', \$controller->templateAction('mytemplate')->getContent());
        \$this->assertEquals('bar', \$controller('mytemplate')->getContent());
    }

    public function testTemplating()
    {
        \$templating = \$this->getMockBuilder(EngineInterface::class)->getMock();
        \$templating->expects(\$this->exactly(2))->method('render')->willReturn('bar');

        \$controller = new TemplateController(null, \$templating);

        \$this->assertEquals('bar', \$controller->templateAction('mytemplate')->getContent());
        \$this->assertEquals('bar', \$controller('mytemplate')->getContent());
    }

    public function testNoTwigNorTemplating()
    {
        \$this->expectException('LogicException');
        \$this->expectExceptionMessage('You can not use the TemplateController if the Templating Component or the Twig Bundle are not available.');
        \$controller = new TemplateController();

        \$controller->templateAction('mytemplate')->getContent();
        \$controller('mytemplate')->getContent();
    }
}
", "vendor/symfony/framework-bundle/Tests/Controller/TemplateControllerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Controller/TemplateControllerTest.php");
    }
}
