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

/* vendor/symfony/config/Tests/Fixtures/Builder/NodeBuilder.php */
class __TwigTemplate_5aa6d5f8788faa7492e903a6ac9ab91b23c92882e7c7c1c357bc06d51634ee4a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Fixtures/Builder/NodeBuilder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/config/Tests/Fixtures/Builder/NodeBuilder.php"));

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

namespace Symfony\\Component\\Config\\Tests\\Fixtures\\Builder;

use Symfony\\Component\\Config\\Definition\\Builder\\NodeBuilder as BaseNodeBuilder;

class NodeBuilder extends BaseNodeBuilder
{
    public function barNode(\$name)
    {
        return \$this->node(\$name, 'bar');
    }

    protected function getNodeClass(\$type)
    {
        switch (\$type) {
            case 'variable':
                return __NAMESPACE__.'\\\\'.ucfirst(\$type).'NodeDefinition';
            case 'bar':
                return __NAMESPACE__.'\\\\'.ucfirst(\$type).'NodeDefinition';
            default:
                return parent::getNodeClass(\$type);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/config/Tests/Fixtures/Builder/NodeBuilder.php";
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

namespace Symfony\\Component\\Config\\Tests\\Fixtures\\Builder;

use Symfony\\Component\\Config\\Definition\\Builder\\NodeBuilder as BaseNodeBuilder;

class NodeBuilder extends BaseNodeBuilder
{
    public function barNode(\$name)
    {
        return \$this->node(\$name, 'bar');
    }

    protected function getNodeClass(\$type)
    {
        switch (\$type) {
            case 'variable':
                return __NAMESPACE__.'\\\\'.ucfirst(\$type).'NodeDefinition';
            case 'bar':
                return __NAMESPACE__.'\\\\'.ucfirst(\$type).'NodeDefinition';
            default:
                return parent::getNodeClass(\$type);
        }
    }
}
", "vendor/symfony/config/Tests/Fixtures/Builder/NodeBuilder.php", "/var/www/public/DevLaon/templates/vendor/symfony/config/Tests/Fixtures/Builder/NodeBuilder.php");
    }
}
