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

/* vendor/symfony/dependency-injection/ExpressionLanguageProvider.php */
class __TwigTemplate_4faa4db771bb59fe887b8c3ea7ed01e14690ebdf9f92393ca161f6e3e28e0d4a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/ExpressionLanguageProvider.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/ExpressionLanguageProvider.php"));

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

namespace Symfony\\Component\\DependencyInjection;

use Symfony\\Component\\ExpressionLanguage\\ExpressionFunction;
use Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface;

/**
 * Define some ExpressionLanguage functions.
 *
 * To get a service, use service('request').
 * To get a parameter, use parameter('kernel.debug').
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ExpressionLanguageProvider implements ExpressionFunctionProviderInterface
{
    private \$serviceCompiler;

    public function __construct(callable \$serviceCompiler = null)
    {
        \$this->serviceCompiler = \$serviceCompiler;
    }

    public function getFunctions()
    {
        return [
            new ExpressionFunction('service', \$this->serviceCompiler ?: function (\$arg) {
                return sprintf('\$this->get(%s)', \$arg);
            }, function (array \$variables, \$value) {
                return \$variables['container']->get(\$value);
            }),

            new ExpressionFunction('parameter', function (\$arg) {
                return sprintf('\$this->getParameter(%s)', \$arg);
            }, function (array \$variables, \$value) {
                return \$variables['container']->getParameter(\$value);
            }),
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/ExpressionLanguageProvider.php";
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

namespace Symfony\\Component\\DependencyInjection;

use Symfony\\Component\\ExpressionLanguage\\ExpressionFunction;
use Symfony\\Component\\ExpressionLanguage\\ExpressionFunctionProviderInterface;

/**
 * Define some ExpressionLanguage functions.
 *
 * To get a service, use service('request').
 * To get a parameter, use parameter('kernel.debug').
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ExpressionLanguageProvider implements ExpressionFunctionProviderInterface
{
    private \$serviceCompiler;

    public function __construct(callable \$serviceCompiler = null)
    {
        \$this->serviceCompiler = \$serviceCompiler;
    }

    public function getFunctions()
    {
        return [
            new ExpressionFunction('service', \$this->serviceCompiler ?: function (\$arg) {
                return sprintf('\$this->get(%s)', \$arg);
            }, function (array \$variables, \$value) {
                return \$variables['container']->get(\$value);
            }),

            new ExpressionFunction('parameter', function (\$arg) {
                return sprintf('\$this->getParameter(%s)', \$arg);
            }, function (array \$variables, \$value) {
                return \$variables['container']->getParameter(\$value);
            }),
        ];
    }
}
", "vendor/symfony/dependency-injection/ExpressionLanguageProvider.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/ExpressionLanguageProvider.php");
    }
}
