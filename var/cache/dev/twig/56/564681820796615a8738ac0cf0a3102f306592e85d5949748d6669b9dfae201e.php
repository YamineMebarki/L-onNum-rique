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

/* vendor/symfony/config/Tests/Definition/Builder/NodeDefinitionTest.php */
class __TwigTemplate_599e5b829ff48670fab2336d63c82b9035393999dab6ec3e6e4304a8dd781f38 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Definition/Builder/NodeDefinitionTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Definition/Builder/NodeDefinitionTest.php"));

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

namespace Symfony\\Component\\Config\\Tests\\Definition\\Builder;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\Definition\\Builder\\ArrayNodeDefinition;
use Symfony\\Component\\Config\\Definition\\Builder\\NodeDefinition;

class NodeDefinitionTest extends TestCase
{
    public function testSetPathSeparatorChangesChildren()
    {
        \$parentNode = new ArrayNodeDefinition('name');
        \$childNode = \$this->createMock(NodeDefinition::class);

        \$childNode
            ->expects(\$this->once())
            ->method('setPathSeparator')
            ->with('/');
        \$childNode
            ->expects(\$this->once())
            ->method('setParent')
            ->with(\$parentNode)
            ->willReturn(\$childNode);
        \$parentNode->append(\$childNode);

        \$parentNode->setPathSeparator('/');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Tests/Definition/Builder/NodeDefinitionTest.php";
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

namespace Symfony\\Component\\Config\\Tests\\Definition\\Builder;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Config\\Definition\\Builder\\ArrayNodeDefinition;
use Symfony\\Component\\Config\\Definition\\Builder\\NodeDefinition;

class NodeDefinitionTest extends TestCase
{
    public function testSetPathSeparatorChangesChildren()
    {
        \$parentNode = new ArrayNodeDefinition('name');
        \$childNode = \$this->createMock(NodeDefinition::class);

        \$childNode
            ->expects(\$this->once())
            ->method('setPathSeparator')
            ->with('/');
        \$childNode
            ->expects(\$this->once())
            ->method('setParent')
            ->with(\$parentNode)
            ->willReturn(\$childNode);
        \$parentNode->append(\$childNode);

        \$parentNode->setPathSeparator('/');
    }
}
", "vendor/symfony/config/Tests/Definition/Builder/NodeDefinitionTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Tests/Definition/Builder/NodeDefinitionTest.php");
    }
}
