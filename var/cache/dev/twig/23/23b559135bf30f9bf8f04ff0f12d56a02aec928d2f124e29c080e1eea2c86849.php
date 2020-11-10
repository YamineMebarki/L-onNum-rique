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

/* vendor/symfony/dependency-injection/Compiler/ResolveEnvPlaceholdersPass.php */
class __TwigTemplate_f03c9af7cb1f6f521af3e0546272f0c14c6787eeeed13c9f1a753c3a7257eb5a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/ResolveEnvPlaceholdersPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/ResolveEnvPlaceholdersPass.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Definition;

/**
 * Replaces env var placeholders by their current values.
 */
class ResolveEnvPlaceholdersPass extends AbstractRecursivePass
{
    protected function processValue(\$value, \$isRoot = false)
    {
        if (\\is_string(\$value)) {
            return \$this->container->resolveEnvPlaceholders(\$value, true);
        }
        if (\$value instanceof Definition) {
            \$changes = \$value->getChanges();
            if (isset(\$changes['class'])) {
                \$value->setClass(\$this->container->resolveEnvPlaceholders(\$value->getClass(), true));
            }
            if (isset(\$changes['file'])) {
                \$value->setFile(\$this->container->resolveEnvPlaceholders(\$value->getFile(), true));
            }
        }

        \$value = parent::processValue(\$value, \$isRoot);

        if (\$value && \\is_array(\$value) && !\$isRoot) {
            \$value = array_combine(\$this->container->resolveEnvPlaceholders(array_keys(\$value), true), \$value);
        }

        return \$value;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Compiler/ResolveEnvPlaceholdersPass.php";
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

namespace Symfony\\Component\\DependencyInjection\\Compiler;

use Symfony\\Component\\DependencyInjection\\Definition;

/**
 * Replaces env var placeholders by their current values.
 */
class ResolveEnvPlaceholdersPass extends AbstractRecursivePass
{
    protected function processValue(\$value, \$isRoot = false)
    {
        if (\\is_string(\$value)) {
            return \$this->container->resolveEnvPlaceholders(\$value, true);
        }
        if (\$value instanceof Definition) {
            \$changes = \$value->getChanges();
            if (isset(\$changes['class'])) {
                \$value->setClass(\$this->container->resolveEnvPlaceholders(\$value->getClass(), true));
            }
            if (isset(\$changes['file'])) {
                \$value->setFile(\$this->container->resolveEnvPlaceholders(\$value->getFile(), true));
            }
        }

        \$value = parent::processValue(\$value, \$isRoot);

        if (\$value && \\is_array(\$value) && !\$isRoot) {
            \$value = array_combine(\$this->container->resolveEnvPlaceholders(array_keys(\$value), true), \$value);
        }

        return \$value;
    }
}
", "vendor/symfony/dependency-injection/Compiler/ResolveEnvPlaceholdersPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Compiler/ResolveEnvPlaceholdersPass.php");
    }
}
