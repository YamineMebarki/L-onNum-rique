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

/* vendor/symfony/dependency-injection/Exception/ServiceNotFoundException.php */
class __TwigTemplate_11d8af506c52e30d4faebfdadebfc7785447f421f3d0ddcf9eaa50ef63754ea8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Exception/ServiceNotFoundException.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Exception/ServiceNotFoundException.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Exception;

use Psr\\Container\\NotFoundExceptionInterface;

/**
 * This exception is thrown when a non-existent service is requested.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ServiceNotFoundException extends InvalidArgumentException implements NotFoundExceptionInterface
{
    private \$id;
    private \$sourceId;
    private \$alternatives;

    public function __construct(string \$id, string \$sourceId = null, \\Exception \$previous = null, array \$alternatives = [], string \$msg = null)
    {
        if (null !== \$msg) {
            // no-op
        } elseif (null === \$sourceId) {
            \$msg = sprintf('You have requested a non-existent service \"%s\".', \$id);
        } else {
            \$msg = sprintf('The service \"%s\" has a dependency on a non-existent service \"%s\".', \$sourceId, \$id);
        }

        if (\$alternatives) {
            if (1 == \\count(\$alternatives)) {
                \$msg .= ' Did you mean this: \"';
            } else {
                \$msg .= ' Did you mean one of these: \"';
            }
            \$msg .= implode('\", \"', \$alternatives).'\"?';
        }

        parent::__construct(\$msg, 0, \$previous);

        \$this->id = \$id;
        \$this->sourceId = \$sourceId;
        \$this->alternatives = \$alternatives;
    }

    public function getId()
    {
        return \$this->id;
    }

    public function getSourceId()
    {
        return \$this->sourceId;
    }

    public function getAlternatives()
    {
        return \$this->alternatives;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Exception/ServiceNotFoundException.php";
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

namespace Symfony\\Component\\DependencyInjection\\Exception;

use Psr\\Container\\NotFoundExceptionInterface;

/**
 * This exception is thrown when a non-existent service is requested.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class ServiceNotFoundException extends InvalidArgumentException implements NotFoundExceptionInterface
{
    private \$id;
    private \$sourceId;
    private \$alternatives;

    public function __construct(string \$id, string \$sourceId = null, \\Exception \$previous = null, array \$alternatives = [], string \$msg = null)
    {
        if (null !== \$msg) {
            // no-op
        } elseif (null === \$sourceId) {
            \$msg = sprintf('You have requested a non-existent service \"%s\".', \$id);
        } else {
            \$msg = sprintf('The service \"%s\" has a dependency on a non-existent service \"%s\".', \$sourceId, \$id);
        }

        if (\$alternatives) {
            if (1 == \\count(\$alternatives)) {
                \$msg .= ' Did you mean this: \"';
            } else {
                \$msg .= ' Did you mean one of these: \"';
            }
            \$msg .= implode('\", \"', \$alternatives).'\"?';
        }

        parent::__construct(\$msg, 0, \$previous);

        \$this->id = \$id;
        \$this->sourceId = \$sourceId;
        \$this->alternatives = \$alternatives;
    }

    public function getId()
    {
        return \$this->id;
    }

    public function getSourceId()
    {
        return \$this->sourceId;
    }

    public function getAlternatives()
    {
        return \$this->alternatives;
    }
}
", "vendor/symfony/dependency-injection/Exception/ServiceNotFoundException.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Exception/ServiceNotFoundException.php");
    }
}
