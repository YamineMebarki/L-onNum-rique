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

/* vendor/symfony/framework-bundle/CacheWarmer/AnnotationsCacheWarmer.php */
class __TwigTemplate_e4dd1ec463c0b9336edd1c120c3ee2a67a0f511eba0233f7a06d84542d5fbe4a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/CacheWarmer/AnnotationsCacheWarmer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/CacheWarmer/AnnotationsCacheWarmer.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\CacheWarmer;

use Doctrine\\Common\\Annotations\\AnnotationException;
use Doctrine\\Common\\Annotations\\CachedReader;
use Doctrine\\Common\\Annotations\\Reader;
use Psr\\Cache\\CacheItemPoolInterface;
use Symfony\\Component\\Cache\\Adapter\\ArrayAdapter;
use Symfony\\Component\\Cache\\DoctrineProvider;

/**
 * Warms up annotation caches for classes found in composer's autoload class map
 * and declared in DI bundle extensions using the addAnnotatedClassesToCache method.
 *
 * @author Titouan Galopin <galopintitouan@gmail.com>
 */
class AnnotationsCacheWarmer extends AbstractPhpFileCacheWarmer
{
    private \$annotationReader;
    private \$excludeRegexp;
    private \$debug;

    /**
     * @param string \$phpArrayFile  The PHP file where annotations are cached
     * @param string \$excludeRegexp
     * @param bool   \$debug
     */
    public function __construct(Reader \$annotationReader, string \$phpArrayFile, \$excludeRegexp = null, \$debug = false)
    {
        if (\$excludeRegexp instanceof CacheItemPoolInterface) {
            @trigger_error(sprintf('The CacheItemPoolInterface \$fallbackPool argument of \"%s()\" is deprecated since Symfony 4.2, you should not pass it anymore.', __METHOD__), E_USER_DEPRECATED);
            \$excludeRegexp = \$debug;
            \$debug = 4 < \\func_num_args() && func_get_arg(4);
        }
        parent::__construct(\$phpArrayFile);
        \$this->annotationReader = \$annotationReader;
        \$this->excludeRegexp = \$excludeRegexp;
        \$this->debug = \$debug;
    }

    /**
     * {@inheritdoc}
     */
    protected function doWarmUp(\$cacheDir, ArrayAdapter \$arrayAdapter)
    {
        \$annotatedClassPatterns = \$cacheDir.'/annotations.map';

        if (!is_file(\$annotatedClassPatterns)) {
            return true;
        }

        \$annotatedClasses = include \$annotatedClassPatterns;
        \$reader = new CachedReader(\$this->annotationReader, new DoctrineProvider(\$arrayAdapter), \$this->debug);

        foreach (\$annotatedClasses as \$class) {
            if (null !== \$this->excludeRegexp && preg_match(\$this->excludeRegexp, \$class)) {
                continue;
            }
            try {
                \$this->readAllComponents(\$reader, \$class);
            } catch (\\Exception \$e) {
                \$this->ignoreAutoloadException(\$class, \$e);
            }
        }

        return true;
    }

    private function readAllComponents(Reader \$reader, \$class)
    {
        \$reflectionClass = new \\ReflectionClass(\$class);

        try {
            \$reader->getClassAnnotations(\$reflectionClass);
        } catch (AnnotationException \$e) {
            /*
             * Ignore any AnnotationException to not break the cache warming process if an Annotation is badly
             * configured or could not be found / read / etc.
             *
             * In particular cases, an Annotation in your code can be used and defined only for a specific
             * environment but is always added to the annotations.map file by some Symfony default behaviors,
             * and you always end up with a not found Annotation.
             */
        }

        foreach (\$reflectionClass->getMethods() as \$reflectionMethod) {
            try {
                \$reader->getMethodAnnotations(\$reflectionMethod);
            } catch (AnnotationException \$e) {
            }
        }

        foreach (\$reflectionClass->getProperties() as \$reflectionProperty) {
            try {
                \$reader->getPropertyAnnotations(\$reflectionProperty);
            } catch (AnnotationException \$e) {
            }
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/CacheWarmer/AnnotationsCacheWarmer.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\CacheWarmer;

use Doctrine\\Common\\Annotations\\AnnotationException;
use Doctrine\\Common\\Annotations\\CachedReader;
use Doctrine\\Common\\Annotations\\Reader;
use Psr\\Cache\\CacheItemPoolInterface;
use Symfony\\Component\\Cache\\Adapter\\ArrayAdapter;
use Symfony\\Component\\Cache\\DoctrineProvider;

/**
 * Warms up annotation caches for classes found in composer's autoload class map
 * and declared in DI bundle extensions using the addAnnotatedClassesToCache method.
 *
 * @author Titouan Galopin <galopintitouan@gmail.com>
 */
class AnnotationsCacheWarmer extends AbstractPhpFileCacheWarmer
{
    private \$annotationReader;
    private \$excludeRegexp;
    private \$debug;

    /**
     * @param string \$phpArrayFile  The PHP file where annotations are cached
     * @param string \$excludeRegexp
     * @param bool   \$debug
     */
    public function __construct(Reader \$annotationReader, string \$phpArrayFile, \$excludeRegexp = null, \$debug = false)
    {
        if (\$excludeRegexp instanceof CacheItemPoolInterface) {
            @trigger_error(sprintf('The CacheItemPoolInterface \$fallbackPool argument of \"%s()\" is deprecated since Symfony 4.2, you should not pass it anymore.', __METHOD__), E_USER_DEPRECATED);
            \$excludeRegexp = \$debug;
            \$debug = 4 < \\func_num_args() && func_get_arg(4);
        }
        parent::__construct(\$phpArrayFile);
        \$this->annotationReader = \$annotationReader;
        \$this->excludeRegexp = \$excludeRegexp;
        \$this->debug = \$debug;
    }

    /**
     * {@inheritdoc}
     */
    protected function doWarmUp(\$cacheDir, ArrayAdapter \$arrayAdapter)
    {
        \$annotatedClassPatterns = \$cacheDir.'/annotations.map';

        if (!is_file(\$annotatedClassPatterns)) {
            return true;
        }

        \$annotatedClasses = include \$annotatedClassPatterns;
        \$reader = new CachedReader(\$this->annotationReader, new DoctrineProvider(\$arrayAdapter), \$this->debug);

        foreach (\$annotatedClasses as \$class) {
            if (null !== \$this->excludeRegexp && preg_match(\$this->excludeRegexp, \$class)) {
                continue;
            }
            try {
                \$this->readAllComponents(\$reader, \$class);
            } catch (\\Exception \$e) {
                \$this->ignoreAutoloadException(\$class, \$e);
            }
        }

        return true;
    }

    private function readAllComponents(Reader \$reader, \$class)
    {
        \$reflectionClass = new \\ReflectionClass(\$class);

        try {
            \$reader->getClassAnnotations(\$reflectionClass);
        } catch (AnnotationException \$e) {
            /*
             * Ignore any AnnotationException to not break the cache warming process if an Annotation is badly
             * configured or could not be found / read / etc.
             *
             * In particular cases, an Annotation in your code can be used and defined only for a specific
             * environment but is always added to the annotations.map file by some Symfony default behaviors,
             * and you always end up with a not found Annotation.
             */
        }

        foreach (\$reflectionClass->getMethods() as \$reflectionMethod) {
            try {
                \$reader->getMethodAnnotations(\$reflectionMethod);
            } catch (AnnotationException \$e) {
            }
        }

        foreach (\$reflectionClass->getProperties() as \$reflectionProperty) {
            try {
                \$reader->getPropertyAnnotations(\$reflectionProperty);
            } catch (AnnotationException \$e) {
            }
        }
    }
}
", "vendor/symfony/framework-bundle/CacheWarmer/AnnotationsCacheWarmer.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/CacheWarmer/AnnotationsCacheWarmer.php");
    }
}
