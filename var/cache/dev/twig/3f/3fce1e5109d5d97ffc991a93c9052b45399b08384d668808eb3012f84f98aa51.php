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

/* vendor/symfony/expression-language/SyntaxError.php */
class __TwigTemplate_be804b1cffce9840b4724c67bd90e69ba8b96a0dbf971edd5d9ad79b14c9f3b0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/SyntaxError.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/expression-language/SyntaxError.php"));

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

namespace Symfony\\Component\\ExpressionLanguage;

class SyntaxError extends \\LogicException
{
    public function __construct(string \$message, int \$cursor = 0, string \$expression = '', string \$subject = null, array \$proposals = null)
    {
        \$message = sprintf('%s around position %d', \$message, \$cursor);
        if (\$expression) {
            \$message = sprintf('%s for expression `%s`', \$message, \$expression);
        }
        \$message .= '.';

        if (null !== \$subject && null !== \$proposals) {
            \$minScore = INF;
            foreach (\$proposals as \$proposal) {
                \$distance = levenshtein(\$subject, \$proposal);
                if (\$distance < \$minScore) {
                    \$guess = \$proposal;
                    \$minScore = \$distance;
                }
            }

            if (isset(\$guess) && \$minScore < 3) {
                \$message .= sprintf(' Did you mean \"%s\"?', \$guess);
            }
        }

        parent::__construct(\$message);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/expression-language/SyntaxError.php";
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

namespace Symfony\\Component\\ExpressionLanguage;

class SyntaxError extends \\LogicException
{
    public function __construct(string \$message, int \$cursor = 0, string \$expression = '', string \$subject = null, array \$proposals = null)
    {
        \$message = sprintf('%s around position %d', \$message, \$cursor);
        if (\$expression) {
            \$message = sprintf('%s for expression `%s`', \$message, \$expression);
        }
        \$message .= '.';

        if (null !== \$subject && null !== \$proposals) {
            \$minScore = INF;
            foreach (\$proposals as \$proposal) {
                \$distance = levenshtein(\$subject, \$proposal);
                if (\$distance < \$minScore) {
                    \$guess = \$proposal;
                    \$minScore = \$distance;
                }
            }

            if (isset(\$guess) && \$minScore < 3) {
                \$message .= sprintf(' Did you mean \"%s\"?', \$guess);
            }
        }

        parent::__construct(\$message);
    }
}
", "vendor/symfony/expression-language/SyntaxError.php", "/var/www/public/DevLaon/templates/vendor/symfony/expression-language/SyntaxError.php");
    }
}
