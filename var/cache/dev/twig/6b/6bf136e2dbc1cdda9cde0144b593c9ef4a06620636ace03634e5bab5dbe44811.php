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

/* vendor/symfony/framework-bundle/Templating/Helper/StopwatchHelper.php */
class __TwigTemplate_ba8d420690c1d1f521306d5bd07458062713efff69025d19da6f70b593da5d97 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Templating/Helper/StopwatchHelper.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Templating/Helper/StopwatchHelper.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper;

@trigger_error('The '.StopwatchHelper::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\\Component\\Stopwatch\\Stopwatch;
use Symfony\\Component\\Templating\\Helper\\Helper;

/**
 * StopwatchHelper provides methods time your PHP templates.
 *
 * @author Wouter J <wouter@wouterj.nl>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class StopwatchHelper extends Helper
{
    private \$stopwatch;

    public function __construct(Stopwatch \$stopwatch = null)
    {
        \$this->stopwatch = \$stopwatch;
    }

    public function getName()
    {
        return 'stopwatch';
    }

    public function __call(\$method, \$arguments = [])
    {
        if (null === \$this->stopwatch) {
            return null;
        }

        if (method_exists(\$this->stopwatch, \$method)) {
            return \$this->stopwatch->{\$method}(...\$arguments);
        }

        throw new \\BadMethodCallException(sprintf('Method \"%s\" of Stopwatch does not exist', \$method));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Templating/Helper/StopwatchHelper.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Templating\\Helper;

@trigger_error('The '.StopwatchHelper::class.' class is deprecated since version 4.3 and will be removed in 5.0; use Twig instead.', E_USER_DEPRECATED);

use Symfony\\Component\\Stopwatch\\Stopwatch;
use Symfony\\Component\\Templating\\Helper\\Helper;

/**
 * StopwatchHelper provides methods time your PHP templates.
 *
 * @author Wouter J <wouter@wouterj.nl>
 *
 * @deprecated since version 4.3, to be removed in 5.0; use Twig instead.
 */
class StopwatchHelper extends Helper
{
    private \$stopwatch;

    public function __construct(Stopwatch \$stopwatch = null)
    {
        \$this->stopwatch = \$stopwatch;
    }

    public function getName()
    {
        return 'stopwatch';
    }

    public function __call(\$method, \$arguments = [])
    {
        if (null === \$this->stopwatch) {
            return null;
        }

        if (method_exists(\$this->stopwatch, \$method)) {
            return \$this->stopwatch->{\$method}(...\$arguments);
        }

        throw new \\BadMethodCallException(sprintf('Method \"%s\" of Stopwatch does not exist', \$method));
    }
}
", "vendor/symfony/framework-bundle/Templating/Helper/StopwatchHelper.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Templating/Helper/StopwatchHelper.php");
    }
}
