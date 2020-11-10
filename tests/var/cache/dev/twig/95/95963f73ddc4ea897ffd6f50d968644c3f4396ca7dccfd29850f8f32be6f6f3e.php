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

/* vendor/symfony/dependency-injection/Compiler/AutowireRequiredMethodsPass.php */
class __TwigTemplate_68880236233a64f712c6e97a196b9b9ab410416c20197c38a5b86a8a6d020718 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/AutowireRequiredMethodsPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Compiler/AutowireRequiredMethodsPass.php"));

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
 * Looks for definitions with autowiring enabled and registers their corresponding \"@required\" methods as setters.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class AutowireRequiredMethodsPass extends AbstractRecursivePass
{
    /**
     * {@inheritdoc}
     */
    protected function processValue(\$value, \$isRoot = false)
    {
        \$value = parent::processValue(\$value, \$isRoot);

        if (!\$value instanceof Definition || !\$value->isAutowired() || \$value->isAbstract() || !\$value->getClass()) {
            return \$value;
        }
        if (!\$reflectionClass = \$this->container->getReflectionClass(\$value->getClass(), false)) {
            return \$value;
        }

        \$alreadyCalledMethods = [];
        \$withers = [];

        foreach (\$value->getMethodCalls() as list(\$method)) {
            \$alreadyCalledMethods[strtolower(\$method)] = true;
        }

        foreach (\$reflectionClass->getMethods() as \$reflectionMethod) {
            \$r = \$reflectionMethod;

            if (\$r->isConstructor() || isset(\$alreadyCalledMethods[strtolower(\$r->name)])) {
                continue;
            }

            while (true) {
                if (false !== \$doc = \$r->getDocComment()) {
                    if (false !== stripos(\$doc, '@required') && preg_match('#(?:^/\\*\\*|\\n\\s*+\\*)\\s*+@required(?:\\s|\\*/\$)#i', \$doc)) {
                        if (preg_match('#(?:^/\\*\\*|\\n\\s*+\\*)\\s*+@return\\s++static[\\s\\*]#i', \$doc)) {
                            \$withers[] = [\$reflectionMethod->name, [], true];
                        } else {
                            \$value->addMethodCall(\$reflectionMethod->name, []);
                        }
                        break;
                    }
                    if (false === stripos(\$doc, '@inheritdoc') || !preg_match('#(?:^/\\*\\*|\\n\\s*+\\*)\\s*+(?:\\{@inheritdoc\\}|@inheritdoc)(?:\\s|\\*/\$)#i', \$doc)) {
                        break;
                    }
                }
                try {
                    \$r = \$r->getPrototype();
                } catch (\\ReflectionException \$e) {
                    break; // method has no prototype
                }
            }
        }

        if (\$withers) {
            // Prepend withers to prevent creating circular loops
            \$setters = \$value->getMethodCalls();
            \$value->setMethodCalls(\$withers);
            foreach (\$setters as \$call) {
                \$value->addMethodCall(\$call[0], \$call[1], \$call[2] ?? false);
            }
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
        return "vendor/symfony/dependency-injection/Compiler/AutowireRequiredMethodsPass.php";
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
 * Looks for definitions with autowiring enabled and registers their corresponding \"@required\" methods as setters.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
class AutowireRequiredMethodsPass extends AbstractRecursivePass
{
    /**
     * {@inheritdoc}
     */
    protected function processValue(\$value, \$isRoot = false)
    {
        \$value = parent::processValue(\$value, \$isRoot);

        if (!\$value instanceof Definition || !\$value->isAutowired() || \$value->isAbstract() || !\$value->getClass()) {
            return \$value;
        }
        if (!\$reflectionClass = \$this->container->getReflectionClass(\$value->getClass(), false)) {
            return \$value;
        }

        \$alreadyCalledMethods = [];
        \$withers = [];

        foreach (\$value->getMethodCalls() as list(\$method)) {
            \$alreadyCalledMethods[strtolower(\$method)] = true;
        }

        foreach (\$reflectionClass->getMethods() as \$reflectionMethod) {
            \$r = \$reflectionMethod;

            if (\$r->isConstructor() || isset(\$alreadyCalledMethods[strtolower(\$r->name)])) {
                continue;
            }

            while (true) {
                if (false !== \$doc = \$r->getDocComment()) {
                    if (false !== stripos(\$doc, '@required') && preg_match('#(?:^/\\*\\*|\\n\\s*+\\*)\\s*+@required(?:\\s|\\*/\$)#i', \$doc)) {
                        if (preg_match('#(?:^/\\*\\*|\\n\\s*+\\*)\\s*+@return\\s++static[\\s\\*]#i', \$doc)) {
                            \$withers[] = [\$reflectionMethod->name, [], true];
                        } else {
                            \$value->addMethodCall(\$reflectionMethod->name, []);
                        }
                        break;
                    }
                    if (false === stripos(\$doc, '@inheritdoc') || !preg_match('#(?:^/\\*\\*|\\n\\s*+\\*)\\s*+(?:\\{@inheritdoc\\}|@inheritdoc)(?:\\s|\\*/\$)#i', \$doc)) {
                        break;
                    }
                }
                try {
                    \$r = \$r->getPrototype();
                } catch (\\ReflectionException \$e) {
                    break; // method has no prototype
                }
            }
        }

        if (\$withers) {
            // Prepend withers to prevent creating circular loops
            \$setters = \$value->getMethodCalls();
            \$value->setMethodCalls(\$withers);
            foreach (\$setters as \$call) {
                \$value->addMethodCall(\$call[0], \$call[1], \$call[2] ?? false);
            }
        }

        return \$value;
    }
}
", "vendor/symfony/dependency-injection/Compiler/AutowireRequiredMethodsPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Compiler/AutowireRequiredMethodsPass.php");
    }
}
