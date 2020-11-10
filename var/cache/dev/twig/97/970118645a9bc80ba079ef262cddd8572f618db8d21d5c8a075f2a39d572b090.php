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

/* vendor/symfony/framework-bundle/CacheWarmer/AbstractPhpFileCacheWarmer.php */
class __TwigTemplate_d456713743a15e1fc5c41c9c6103491ae0db31325347f1f7a0e17bae6d5fe6f9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/CacheWarmer/AbstractPhpFileCacheWarmer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/CacheWarmer/AbstractPhpFileCacheWarmer.php"));

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

use Symfony\\Component\\Cache\\Adapter\\ArrayAdapter;
use Symfony\\Component\\Cache\\Adapter\\NullAdapter;
use Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter;
use Symfony\\Component\\Config\\Resource\\ClassExistenceResource;
use Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerInterface;

/**
 * @internal
 */
abstract class AbstractPhpFileCacheWarmer implements CacheWarmerInterface
{
    private \$phpArrayFile;

    /**
     * @param string \$phpArrayFile The PHP file where metadata are cached
     */
    public function __construct(string \$phpArrayFile)
    {
        \$this->phpArrayFile = \$phpArrayFile;
    }

    /**
     * {@inheritdoc}
     */
    public function isOptional()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function warmUp(\$cacheDir)
    {
        \$arrayAdapter = new ArrayAdapter();

        spl_autoload_register([ClassExistenceResource::class, 'throwOnRequiredClass']);
        try {
            if (!\$this->doWarmUp(\$cacheDir, \$arrayAdapter)) {
                return;
            }
        } finally {
            spl_autoload_unregister([ClassExistenceResource::class, 'throwOnRequiredClass']);
        }

        // the ArrayAdapter stores the values serialized
        // to avoid mutation of the data after it was written to the cache
        // so here we un-serialize the values first
        \$values = array_map(function (\$val) { return null !== \$val ? unserialize(\$val) : null; }, \$arrayAdapter->getValues());

        \$this->warmUpPhpArrayAdapter(new PhpArrayAdapter(\$this->phpArrayFile, new NullAdapter()), \$values);
    }

    protected function warmUpPhpArrayAdapter(PhpArrayAdapter \$phpArrayAdapter, array \$values)
    {
        \$phpArrayAdapter->warmUp(\$values);
    }

    /**
     * @internal
     */
    final protected function ignoreAutoloadException(\$class, \\Exception \$exception)
    {
        try {
            ClassExistenceResource::throwOnRequiredClass(\$class, \$exception);
        } catch (\\ReflectionException \$e) {
        }
    }

    /**
     * @param string \$cacheDir
     *
     * @return bool false if there is nothing to warm-up
     */
    abstract protected function doWarmUp(\$cacheDir, ArrayAdapter \$arrayAdapter);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/CacheWarmer/AbstractPhpFileCacheWarmer.php";
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

use Symfony\\Component\\Cache\\Adapter\\ArrayAdapter;
use Symfony\\Component\\Cache\\Adapter\\NullAdapter;
use Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter;
use Symfony\\Component\\Config\\Resource\\ClassExistenceResource;
use Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerInterface;

/**
 * @internal
 */
abstract class AbstractPhpFileCacheWarmer implements CacheWarmerInterface
{
    private \$phpArrayFile;

    /**
     * @param string \$phpArrayFile The PHP file where metadata are cached
     */
    public function __construct(string \$phpArrayFile)
    {
        \$this->phpArrayFile = \$phpArrayFile;
    }

    /**
     * {@inheritdoc}
     */
    public function isOptional()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function warmUp(\$cacheDir)
    {
        \$arrayAdapter = new ArrayAdapter();

        spl_autoload_register([ClassExistenceResource::class, 'throwOnRequiredClass']);
        try {
            if (!\$this->doWarmUp(\$cacheDir, \$arrayAdapter)) {
                return;
            }
        } finally {
            spl_autoload_unregister([ClassExistenceResource::class, 'throwOnRequiredClass']);
        }

        // the ArrayAdapter stores the values serialized
        // to avoid mutation of the data after it was written to the cache
        // so here we un-serialize the values first
        \$values = array_map(function (\$val) { return null !== \$val ? unserialize(\$val) : null; }, \$arrayAdapter->getValues());

        \$this->warmUpPhpArrayAdapter(new PhpArrayAdapter(\$this->phpArrayFile, new NullAdapter()), \$values);
    }

    protected function warmUpPhpArrayAdapter(PhpArrayAdapter \$phpArrayAdapter, array \$values)
    {
        \$phpArrayAdapter->warmUp(\$values);
    }

    /**
     * @internal
     */
    final protected function ignoreAutoloadException(\$class, \\Exception \$exception)
    {
        try {
            ClassExistenceResource::throwOnRequiredClass(\$class, \$exception);
        } catch (\\ReflectionException \$e) {
        }
    }

    /**
     * @param string \$cacheDir
     *
     * @return bool false if there is nothing to warm-up
     */
    abstract protected function doWarmUp(\$cacheDir, ArrayAdapter \$arrayAdapter);
}
", "vendor/symfony/framework-bundle/CacheWarmer/AbstractPhpFileCacheWarmer.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/CacheWarmer/AbstractPhpFileCacheWarmer.php");
    }
}
