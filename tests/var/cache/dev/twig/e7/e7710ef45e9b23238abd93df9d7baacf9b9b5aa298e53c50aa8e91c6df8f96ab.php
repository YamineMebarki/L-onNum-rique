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

/* vendor/symfony/dependency-injection/Compiler/CheckArgumentsValidityPass.php */
class __TwigTemplate_759f802ef49e0a1af6c6c29133dba01b97fa261644bab3d8752bca87e40c5dc4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/CheckArgumentsValidityPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/CheckArgumentsValidityPass.php"));

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

/**
 * Checks if arguments of methods are properly configured.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 * @author Nicolas Grekas <p@tchwork.com>
 */
class CheckArgumentsValidityPass extends AbstractRecursivePass
{
    private \$throwExceptions;

    public function __construct(bool \$throwExceptions = true)
    {
        \$this->throwExceptions = \$throwExceptions;
    }

    /**
     * {@inheritdoc}
     */
    protected function processValue(\$value, \$isRoot = false)
    {
        if (!\$value instanceof Definition) {
            return parent::processValue(\$value, \$isRoot);
        }

        \$i = 0;
        foreach (\$value->getArguments() as \$k => \$v) {
            if (\$k !== \$i++) {
                if (!\\is_int(\$k)) {
                    \$msg = sprintf('Invalid constructor argument for service \"%s\": integer expected but found string \"%s\". Check your service definition.', \$this->currentId, \$k);
                    \$value->addError(\$msg);
                    if (\$this->throwExceptions) {
                        throw new RuntimeException(\$msg);
                    }

                    break;
                }

                \$msg = sprintf('Invalid constructor argument %d for service \"%s\": argument %d must be defined before. Check your service definition.', 1 + \$k, \$this->currentId, \$i);
                \$value->addError(\$msg);
                if (\$this->throwExceptions) {
                    throw new RuntimeException(\$msg);
                }
            }
        }

        foreach (\$value->getMethodCalls() as \$methodCall) {
            \$i = 0;
            foreach (\$methodCall[1] as \$k => \$v) {
                if (\$k !== \$i++) {
                    if (!\\is_int(\$k)) {
                        \$msg = sprintf('Invalid argument for method call \"%s\" of service \"%s\": integer expected but found string \"%s\". Check your service definition.', \$methodCall[0], \$this->currentId, \$k);
                        \$value->addError(\$msg);
                        if (\$this->throwExceptions) {
                            throw new RuntimeException(\$msg);
                        }

                        break;
                    }

                    \$msg = sprintf('Invalid argument %d for method call \"%s\" of service \"%s\": argument %d must be defined before. Check your service definition.', 1 + \$k, \$methodCall[0], \$this->currentId, \$i);
                    \$value->addError(\$msg);
                    if (\$this->throwExceptions) {
                        throw new RuntimeException(\$msg);
                    }
                }
            }
        }

        return null;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Compiler/CheckArgumentsValidityPass.php";
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

/**
 * Checks if arguments of methods are properly configured.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 * @author Nicolas Grekas <p@tchwork.com>
 */
class CheckArgumentsValidityPass extends AbstractRecursivePass
{
    private \$throwExceptions;

    public function __construct(bool \$throwExceptions = true)
    {
        \$this->throwExceptions = \$throwExceptions;
    }

    /**
     * {@inheritdoc}
     */
    protected function processValue(\$value, \$isRoot = false)
    {
        if (!\$value instanceof Definition) {
            return parent::processValue(\$value, \$isRoot);
        }

        \$i = 0;
        foreach (\$value->getArguments() as \$k => \$v) {
            if (\$k !== \$i++) {
                if (!\\is_int(\$k)) {
                    \$msg = sprintf('Invalid constructor argument for service \"%s\": integer expected but found string \"%s\". Check your service definition.', \$this->currentId, \$k);
                    \$value->addError(\$msg);
                    if (\$this->throwExceptions) {
                        throw new RuntimeException(\$msg);
                    }

                    break;
                }

                \$msg = sprintf('Invalid constructor argument %d for service \"%s\": argument %d must be defined before. Check your service definition.', 1 + \$k, \$this->currentId, \$i);
                \$value->addError(\$msg);
                if (\$this->throwExceptions) {
                    throw new RuntimeException(\$msg);
                }
            }
        }

        foreach (\$value->getMethodCalls() as \$methodCall) {
            \$i = 0;
            foreach (\$methodCall[1] as \$k => \$v) {
                if (\$k !== \$i++) {
                    if (!\\is_int(\$k)) {
                        \$msg = sprintf('Invalid argument for method call \"%s\" of service \"%s\": integer expected but found string \"%s\". Check your service definition.', \$methodCall[0], \$this->currentId, \$k);
                        \$value->addError(\$msg);
                        if (\$this->throwExceptions) {
                            throw new RuntimeException(\$msg);
                        }

                        break;
                    }

                    \$msg = sprintf('Invalid argument %d for method call \"%s\" of service \"%s\": argument %d must be defined before. Check your service definition.', 1 + \$k, \$methodCall[0], \$this->currentId, \$i);
                    \$value->addError(\$msg);
                    if (\$this->throwExceptions) {
                        throw new RuntimeException(\$msg);
                    }
                }
            }
        }

        return null;
    }
}
", "vendor/symfony/dependency-injection/Compiler/CheckArgumentsValidityPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Compiler/CheckArgumentsValidityPass.php");
    }
}
