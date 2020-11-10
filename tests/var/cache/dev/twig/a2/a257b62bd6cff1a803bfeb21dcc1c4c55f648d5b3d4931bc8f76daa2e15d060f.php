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

/* vendor/symfony/dependency-injection/Compiler/ResolveNamedArgumentsPass.php */
class __TwigTemplate_53ee5b8f1b4ac74d2f87f4f8d8583790e680b431b4c821d9d7ab05adf0dc9784 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/ResolveNamedArgumentsPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/ResolveNamedArgumentsPass.php"));

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
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\LazyProxy\\ProxyHelper;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Resolves named arguments to their corresponding numeric index.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class ResolveNamedArgumentsPass extends AbstractRecursivePass
{
    /**
     * {@inheritdoc}
     */
    protected function processValue(\$value, \$isRoot = false)
    {
        if (!\$value instanceof Definition) {
            return parent::processValue(\$value, \$isRoot);
        }

        \$calls = \$value->getMethodCalls();
        \$calls[] = ['__construct', \$value->getArguments()];

        foreach (\$calls as \$i => \$call) {
            list(\$method, \$arguments) = \$call;
            \$parameters = null;
            \$resolvedArguments = [];

            foreach (\$arguments as \$key => \$argument) {
                if (\\is_int(\$key)) {
                    \$resolvedArguments[\$key] = \$argument;
                    continue;
                }

                if (null === \$parameters) {
                    \$r = \$this->getReflectionMethod(\$value, \$method);
                    \$class = \$r instanceof \\ReflectionMethod ? \$r->class : \$this->currentId;
                    \$method = \$r->getName();
                    \$parameters = \$r->getParameters();
                }

                if (isset(\$key[0]) && '\$' !== \$key[0] && !class_exists(\$key) && !interface_exists(\$key, false)) {
                    throw new InvalidArgumentException(sprintf('Invalid service \"%s\": did you forget to add the \"\$\" prefix to argument \"%s\"?', \$this->currentId, \$key));
                }

                if (isset(\$key[0]) && '\$' === \$key[0]) {
                    foreach (\$parameters as \$j => \$p) {
                        if (\$key === '\$'.\$p->name) {
                            if (\$p->isVariadic() && \\is_array(\$argument)) {
                                foreach (\$argument as \$variadicArgument) {
                                    \$resolvedArguments[\$j++] = \$variadicArgument;
                                }
                            } else {
                                \$resolvedArguments[\$j] = \$argument;
                            }

                            continue 2;
                        }
                    }

                    throw new InvalidArgumentException(sprintf('Invalid service \"%s\": method \"%s()\" has no argument named \"%s\". Check your service definition.', \$this->currentId, \$class !== \$this->currentId ? \$class.'::'.\$method : \$method, \$key));
                }

                if (null !== \$argument && !\$argument instanceof Reference && !\$argument instanceof Definition) {
                    throw new InvalidArgumentException(sprintf('Invalid service \"%s\": the value of argument \"%s\" of method \"%s()\" must be null, an instance of %s or an instance of %s, %s given.', \$this->currentId, \$key, \$class !== \$this->currentId ? \$class.'::'.\$method : \$method, Reference::class, Definition::class, \\gettype(\$argument)));
                }

                \$typeFound = false;
                foreach (\$parameters as \$j => \$p) {
                    if (!\\array_key_exists(\$j, \$resolvedArguments) && ProxyHelper::getTypeHint(\$r, \$p, true) === \$key) {
                        \$resolvedArguments[\$j] = \$argument;
                        \$typeFound = true;
                    }
                }

                if (!\$typeFound) {
                    throw new InvalidArgumentException(sprintf('Invalid service \"%s\": method \"%s()\" has no argument type-hinted as \"%s\". Check your service definition.', \$this->currentId, \$class !== \$this->currentId ? \$class.'::'.\$method : \$method, \$key));
                }
            }

            if (\$resolvedArguments !== \$call[1]) {
                ksort(\$resolvedArguments);
                \$calls[\$i][1] = \$resolvedArguments;
            }
        }

        list(, \$arguments) = array_pop(\$calls);

        if (\$arguments !== \$value->getArguments()) {
            \$value->setArguments(\$arguments);
        }
        if (\$calls !== \$value->getMethodCalls()) {
            \$value->setMethodCalls(\$calls);
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
        return "vendor/symfony/dependency-injection/Compiler/ResolveNamedArgumentsPass.php";
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
use Symfony\\Component\\DependencyInjection\\Exception\\InvalidArgumentException;
use Symfony\\Component\\DependencyInjection\\LazyProxy\\ProxyHelper;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Resolves named arguments to their corresponding numeric index.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class ResolveNamedArgumentsPass extends AbstractRecursivePass
{
    /**
     * {@inheritdoc}
     */
    protected function processValue(\$value, \$isRoot = false)
    {
        if (!\$value instanceof Definition) {
            return parent::processValue(\$value, \$isRoot);
        }

        \$calls = \$value->getMethodCalls();
        \$calls[] = ['__construct', \$value->getArguments()];

        foreach (\$calls as \$i => \$call) {
            list(\$method, \$arguments) = \$call;
            \$parameters = null;
            \$resolvedArguments = [];

            foreach (\$arguments as \$key => \$argument) {
                if (\\is_int(\$key)) {
                    \$resolvedArguments[\$key] = \$argument;
                    continue;
                }

                if (null === \$parameters) {
                    \$r = \$this->getReflectionMethod(\$value, \$method);
                    \$class = \$r instanceof \\ReflectionMethod ? \$r->class : \$this->currentId;
                    \$method = \$r->getName();
                    \$parameters = \$r->getParameters();
                }

                if (isset(\$key[0]) && '\$' !== \$key[0] && !class_exists(\$key) && !interface_exists(\$key, false)) {
                    throw new InvalidArgumentException(sprintf('Invalid service \"%s\": did you forget to add the \"\$\" prefix to argument \"%s\"?', \$this->currentId, \$key));
                }

                if (isset(\$key[0]) && '\$' === \$key[0]) {
                    foreach (\$parameters as \$j => \$p) {
                        if (\$key === '\$'.\$p->name) {
                            if (\$p->isVariadic() && \\is_array(\$argument)) {
                                foreach (\$argument as \$variadicArgument) {
                                    \$resolvedArguments[\$j++] = \$variadicArgument;
                                }
                            } else {
                                \$resolvedArguments[\$j] = \$argument;
                            }

                            continue 2;
                        }
                    }

                    throw new InvalidArgumentException(sprintf('Invalid service \"%s\": method \"%s()\" has no argument named \"%s\". Check your service definition.', \$this->currentId, \$class !== \$this->currentId ? \$class.'::'.\$method : \$method, \$key));
                }

                if (null !== \$argument && !\$argument instanceof Reference && !\$argument instanceof Definition) {
                    throw new InvalidArgumentException(sprintf('Invalid service \"%s\": the value of argument \"%s\" of method \"%s()\" must be null, an instance of %s or an instance of %s, %s given.', \$this->currentId, \$key, \$class !== \$this->currentId ? \$class.'::'.\$method : \$method, Reference::class, Definition::class, \\gettype(\$argument)));
                }

                \$typeFound = false;
                foreach (\$parameters as \$j => \$p) {
                    if (!\\array_key_exists(\$j, \$resolvedArguments) && ProxyHelper::getTypeHint(\$r, \$p, true) === \$key) {
                        \$resolvedArguments[\$j] = \$argument;
                        \$typeFound = true;
                    }
                }

                if (!\$typeFound) {
                    throw new InvalidArgumentException(sprintf('Invalid service \"%s\": method \"%s()\" has no argument type-hinted as \"%s\". Check your service definition.', \$this->currentId, \$class !== \$this->currentId ? \$class.'::'.\$method : \$method, \$key));
                }
            }

            if (\$resolvedArguments !== \$call[1]) {
                ksort(\$resolvedArguments);
                \$calls[\$i][1] = \$resolvedArguments;
            }
        }

        list(, \$arguments) = array_pop(\$calls);

        if (\$arguments !== \$value->getArguments()) {
            \$value->setArguments(\$arguments);
        }
        if (\$calls !== \$value->getMethodCalls()) {
            \$value->setMethodCalls(\$calls);
        }

        return parent::processValue(\$value, \$isRoot);
    }
}
", "vendor/symfony/dependency-injection/Compiler/ResolveNamedArgumentsPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Compiler/ResolveNamedArgumentsPass.php");
    }
}
