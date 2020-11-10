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

/* vendor/symfony/http-kernel/DependencyInjection/AddAnnotatedClassesToCachePass.php */
class __TwigTemplate_a14a6464b19259ca47a3c8f044de49718a4842593a40c5db06b04a4823a082f2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/DependencyInjection/AddAnnotatedClassesToCachePass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/DependencyInjection/AddAnnotatedClassesToCachePass.php"));

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

namespace Symfony\\Component\\HttpKernel\\DependencyInjection;

use Composer\\Autoload\\ClassLoader;
use Symfony\\Component\\Debug\\DebugClassLoader;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpKernel\\Kernel;

/**
 * Sets the classes to compile in the cache for the container.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class AddAnnotatedClassesToCachePass implements CompilerPassInterface
{
    private \$kernel;

    public function __construct(Kernel \$kernel)
    {
        \$this->kernel = \$kernel;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        \$annotatedClasses = \$this->kernel->getAnnotatedClassesToCompile();
        foreach (\$container->getExtensions() as \$extension) {
            if (\$extension instanceof Extension) {
                \$annotatedClasses = array_merge(\$annotatedClasses, \$extension->getAnnotatedClassesToCompile());
            }
        }

        \$existingClasses = \$this->getClassesInComposerClassMaps();

        \$annotatedClasses = \$container->getParameterBag()->resolveValue(\$annotatedClasses);
        \$this->kernel->setAnnotatedClassCache(\$this->expandClasses(\$annotatedClasses, \$existingClasses));
    }

    /**
     * Expands the given class patterns using a list of existing classes.
     *
     * @param array \$patterns The class patterns to expand
     * @param array \$classes  The existing classes to match against the patterns
     *
     * @return array A list of classes derived from the patterns
     */
    private function expandClasses(array \$patterns, array \$classes)
    {
        \$expanded = [];

        // Explicit classes declared in the patterns are returned directly
        foreach (\$patterns as \$key => \$pattern) {
            if ('\\\\' !== substr(\$pattern, -1) && false === strpos(\$pattern, '*')) {
                unset(\$patterns[\$key]);
                \$expanded[] = ltrim(\$pattern, '\\\\');
            }
        }

        // Match patterns with the classes list
        \$regexps = \$this->patternsToRegexps(\$patterns);

        foreach (\$classes as \$class) {
            \$class = ltrim(\$class, '\\\\');

            if (\$this->matchAnyRegexps(\$class, \$regexps)) {
                \$expanded[] = \$class;
            }
        }

        return array_unique(\$expanded);
    }

    private function getClassesInComposerClassMaps()
    {
        \$classes = [];

        foreach (spl_autoload_functions() as \$function) {
            if (!\\is_array(\$function)) {
                continue;
            }

            if (\$function[0] instanceof DebugClassLoader) {
                \$function = \$function[0]->getClassLoader();
            }

            if (\\is_array(\$function) && \$function[0] instanceof ClassLoader) {
                \$classes += array_filter(\$function[0]->getClassMap());
            }
        }

        return array_keys(\$classes);
    }

    private function patternsToRegexps(\$patterns)
    {
        \$regexps = [];

        foreach (\$patterns as \$pattern) {
            // Escape user input
            \$regex = preg_quote(ltrim(\$pattern, '\\\\'));

            // Wildcards * and **
            \$regex = strtr(\$regex, ['\\\\*\\\\*' => '.*?', '\\\\*' => '[^\\\\\\\\]*?']);

            // If this class does not end by a slash, anchor the end
            if ('\\\\' !== substr(\$regex, -1)) {
                \$regex .= '\$';
            }

            \$regexps[] = '{^\\\\\\\\'.\$regex.'}';
        }

        return \$regexps;
    }

    private function matchAnyRegexps(\$class, \$regexps)
    {
        \$blacklisted = false !== strpos(\$class, 'DevLaon');

        foreach (\$regexps as \$regex) {
            if (\$blacklisted && false === strpos(\$regex, 'DevLaon')) {
                continue;
            }

            if (preg_match(\$regex, '\\\\'.\$class)) {
                return true;
            }
        }

        return false;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/DependencyInjection/AddAnnotatedClassesToCachePass.php";
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

namespace Symfony\\Component\\HttpKernel\\DependencyInjection;

use Composer\\Autoload\\ClassLoader;
use Symfony\\Component\\Debug\\DebugClassLoader;
use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\HttpKernel\\Kernel;

/**
 * Sets the classes to compile in the cache for the container.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class AddAnnotatedClassesToCachePass implements CompilerPassInterface
{
    private \$kernel;

    public function __construct(Kernel \$kernel)
    {
        \$this->kernel = \$kernel;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        \$annotatedClasses = \$this->kernel->getAnnotatedClassesToCompile();
        foreach (\$container->getExtensions() as \$extension) {
            if (\$extension instanceof Extension) {
                \$annotatedClasses = array_merge(\$annotatedClasses, \$extension->getAnnotatedClassesToCompile());
            }
        }

        \$existingClasses = \$this->getClassesInComposerClassMaps();

        \$annotatedClasses = \$container->getParameterBag()->resolveValue(\$annotatedClasses);
        \$this->kernel->setAnnotatedClassCache(\$this->expandClasses(\$annotatedClasses, \$existingClasses));
    }

    /**
     * Expands the given class patterns using a list of existing classes.
     *
     * @param array \$patterns The class patterns to expand
     * @param array \$classes  The existing classes to match against the patterns
     *
     * @return array A list of classes derived from the patterns
     */
    private function expandClasses(array \$patterns, array \$classes)
    {
        \$expanded = [];

        // Explicit classes declared in the patterns are returned directly
        foreach (\$patterns as \$key => \$pattern) {
            if ('\\\\' !== substr(\$pattern, -1) && false === strpos(\$pattern, '*')) {
                unset(\$patterns[\$key]);
                \$expanded[] = ltrim(\$pattern, '\\\\');
            }
        }

        // Match patterns with the classes list
        \$regexps = \$this->patternsToRegexps(\$patterns);

        foreach (\$classes as \$class) {
            \$class = ltrim(\$class, '\\\\');

            if (\$this->matchAnyRegexps(\$class, \$regexps)) {
                \$expanded[] = \$class;
            }
        }

        return array_unique(\$expanded);
    }

    private function getClassesInComposerClassMaps()
    {
        \$classes = [];

        foreach (spl_autoload_functions() as \$function) {
            if (!\\is_array(\$function)) {
                continue;
            }

            if (\$function[0] instanceof DebugClassLoader) {
                \$function = \$function[0]->getClassLoader();
            }

            if (\\is_array(\$function) && \$function[0] instanceof ClassLoader) {
                \$classes += array_filter(\$function[0]->getClassMap());
            }
        }

        return array_keys(\$classes);
    }

    private function patternsToRegexps(\$patterns)
    {
        \$regexps = [];

        foreach (\$patterns as \$pattern) {
            // Escape user input
            \$regex = preg_quote(ltrim(\$pattern, '\\\\'));

            // Wildcards * and **
            \$regex = strtr(\$regex, ['\\\\*\\\\*' => '.*?', '\\\\*' => '[^\\\\\\\\]*?']);

            // If this class does not end by a slash, anchor the end
            if ('\\\\' !== substr(\$regex, -1)) {
                \$regex .= '\$';
            }

            \$regexps[] = '{^\\\\\\\\'.\$regex.'}';
        }

        return \$regexps;
    }

    private function matchAnyRegexps(\$class, \$regexps)
    {
        \$blacklisted = false !== strpos(\$class, 'DevLaon');

        foreach (\$regexps as \$regex) {
            if (\$blacklisted && false === strpos(\$regex, 'DevLaon')) {
                continue;
            }

            if (preg_match(\$regex, '\\\\'.\$class)) {
                return true;
            }
        }

        return false;
    }
}
", "vendor/symfony/http-kernel/DependencyInjection/AddAnnotatedClassesToCachePass.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/DependencyInjection/AddAnnotatedClassesToCachePass.php");
    }
}
