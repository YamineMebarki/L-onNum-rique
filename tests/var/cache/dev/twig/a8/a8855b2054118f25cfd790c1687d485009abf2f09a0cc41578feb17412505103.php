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

/* vendor/symfony/dependency-injection/Compiler/CheckReferenceValidityPass.php */
class __TwigTemplate_be674230f8ea8d03f95a157d5f8647c1c294bb4499d1f3812f8559b6edb76c6e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/CheckReferenceValidityPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/CheckReferenceValidityPass.php"));

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
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Checks the validity of references.
 *
 * The following checks are performed by this pass:
 * - target definitions are not abstract
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class CheckReferenceValidityPass extends AbstractRecursivePass
{
    protected function processValue(\$value, \$isRoot = false)
    {
        if (\$isRoot && \$value instanceof Definition && (\$value->isSynthetic() || \$value->isAbstract())) {
            return \$value;
        }
        if (\$value instanceof Reference && \$this->container->hasDefinition((string) \$value)) {
            \$targetDefinition = \$this->container->getDefinition((string) \$value);

            if (\$targetDefinition->isAbstract()) {
                throw new RuntimeException(sprintf('The definition \"%s\" has a reference to an abstract definition \"%s\". Abstract definitions cannot be the target of references.', \$this->currentId, \$value));
            }
        }

        return parent::processValue(\$value, \$isRoot);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Compiler/CheckReferenceValidityPass.php";
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
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Checks the validity of references.
 *
 * The following checks are performed by this pass:
 * - target definitions are not abstract
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
class CheckReferenceValidityPass extends AbstractRecursivePass
{
    protected function processValue(\$value, \$isRoot = false)
    {
        if (\$isRoot && \$value instanceof Definition && (\$value->isSynthetic() || \$value->isAbstract())) {
            return \$value;
        }
        if (\$value instanceof Reference && \$this->container->hasDefinition((string) \$value)) {
            \$targetDefinition = \$this->container->getDefinition((string) \$value);

            if (\$targetDefinition->isAbstract()) {
                throw new RuntimeException(sprintf('The definition \"%s\" has a reference to an abstract definition \"%s\". Abstract definitions cannot be the target of references.', \$this->currentId, \$value));
            }
        }

        return parent::processValue(\$value, \$isRoot);
    }
}
", "vendor/symfony/dependency-injection/Compiler/CheckReferenceValidityPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Compiler/CheckReferenceValidityPass.php");
    }
}
