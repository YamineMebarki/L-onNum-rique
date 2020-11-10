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

/* vendor/symfony/expression-language/Tests/Fixtures/TestProvider.php */
class __TwigTemplate_45e7ceb83406f026a69adbd6be2dd59d7ba0b72c6ab065d3a04cfcf9ba0f7154 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Tests/Fixtures/TestProvider.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/Tests/Fixtures/TestProvider.php"));

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

namespace Symfony\\Component\\ExpressionLanguage\\Tests\\Fixtures;

use Symfony\\Component\\ExpressionLanguage\\ExpressionFunction;
use Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface;
use Symfony\\Component\\ExpressionLanguage\\ExpressionPhpFunction;

class TestProvider implements ExpressionFunctionProviderInterface
{
    public function getFunctions()
    {
        return [
            new ExpressionFunction('identity', function (\$input) {
                return \$input;
            }, function (array \$values, \$input) {
                return \$input;
            }),

            ExpressionFunction::fromPhp('strtoupper'),

            ExpressionFunction::fromPhp('\\strtolower'),

            ExpressionFunction::fromPhp('Symfony\\Component\\ExpressionLanguage\\Tests\\Fixtures\\fn_namespaced', 'fn_namespaced'),
        ];
    }
}

function fn_namespaced()
{
    return true;
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/expression-language/Tests/Fixtures/TestProvider.php";
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

namespace Symfony\\Component\\ExpressionLanguage\\Tests\\Fixtures;

use Symfony\\Component\\ExpressionLanguage\\ExpressionFunction;
use Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface;
use Symfony\\Component\\ExpressionLanguage\\ExpressionPhpFunction;

class TestProvider implements ExpressionFunctionProviderInterface
{
    public function getFunctions()
    {
        return [
            new ExpressionFunction('identity', function (\$input) {
                return \$input;
            }, function (array \$values, \$input) {
                return \$input;
            }),

            ExpressionFunction::fromPhp('strtoupper'),

            ExpressionFunction::fromPhp('\\strtolower'),

            ExpressionFunction::fromPhp('Symfony\\Component\\ExpressionLanguage\\Tests\\Fixtures\\fn_namespaced', 'fn_namespaced'),
        ];
    }
}

function fn_namespaced()
{
    return true;
}
", "vendor/symfony/expression-language/Tests/Fixtures/TestProvider.php", "/var/www/public/DevLaon/templates/vendor/symfony/expression-language/Tests/Fixtures/TestProvider.php");
    }
}
