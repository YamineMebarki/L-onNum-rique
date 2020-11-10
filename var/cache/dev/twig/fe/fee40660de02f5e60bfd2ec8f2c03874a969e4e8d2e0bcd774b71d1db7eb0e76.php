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

/* vendor/symfony/framework-bundle/CacheWarmer/ValidatorCacheWarmer.php */
class __TwigTemplate_aee1e132d4bb58ce65ffc1b18569db2fd076d26556b877ad7cc4cbe6ff7e7a94 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/CacheWarmer/ValidatorCacheWarmer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/CacheWarmer/ValidatorCacheWarmer.php"));

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
use Psr\\Cache\\CacheItemPoolInterface;
use Symfony\\Component\\Cache\\Adapter\\ArrayAdapter;
use Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter;
use Symfony\\Component\\Validator\\Mapping\\Cache\\Psr6Cache;
use Symfony\\Component\\Validator\\Mapping\\Factory\\LazyLoadingMetadataFactory;
use Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderChain;
use Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderInterface;
use Symfony\\Component\\Validator\\Mapping\\Loader\\XmlFileLoader;
use Symfony\\Component\\Validator\\Mapping\\Loader\\YamlFileLoader;
use Symfony\\Component\\Validator\\ValidatorBuilderInterface;

/**
 * Warms up XML and YAML validator metadata.
 *
 * @author Titouan Galopin <galopintitouan@gmail.com>
 */
class ValidatorCacheWarmer extends AbstractPhpFileCacheWarmer
{
    private \$validatorBuilder;

    /**
     * @param string \$phpArrayFile The PHP file where metadata are cached
     */
    public function __construct(ValidatorBuilderInterface \$validatorBuilder, string \$phpArrayFile)
    {
        if (2 < \\func_num_args() && func_get_arg(2) instanceof CacheItemPoolInterface) {
            @trigger_error(sprintf('The CacheItemPoolInterface \$fallbackPool argument of \"%s()\" is deprecated since Symfony 4.2, you should not pass it anymore.', __METHOD__), E_USER_DEPRECATED);
        }
        parent::__construct(\$phpArrayFile);
        \$this->validatorBuilder = \$validatorBuilder;
    }

    /**
     * {@inheritdoc}
     */
    protected function doWarmUp(\$cacheDir, ArrayAdapter \$arrayAdapter)
    {
        if (!method_exists(\$this->validatorBuilder, 'getLoaders')) {
            return false;
        }

        \$loaders = \$this->validatorBuilder->getLoaders();
        \$metadataFactory = new LazyLoadingMetadataFactory(new LoaderChain(\$loaders), new Psr6Cache(\$arrayAdapter));

        foreach (\$this->extractSupportedLoaders(\$loaders) as \$loader) {
            foreach (\$loader->getMappedClasses() as \$mappedClass) {
                try {
                    if (\$metadataFactory->hasMetadataFor(\$mappedClass)) {
                        \$metadataFactory->getMetadataFor(\$mappedClass);
                    }
                } catch (AnnotationException \$e) {
                    // ignore failing annotations
                } catch (\\Exception \$e) {
                    \$this->ignoreAutoloadException(\$mappedClass, \$e);
                }
            }
        }

        return true;
    }

    protected function warmUpPhpArrayAdapter(PhpArrayAdapter \$phpArrayAdapter, array \$values)
    {
        // make sure we don't cache null values
        parent::warmUpPhpArrayAdapter(\$phpArrayAdapter, array_filter(\$values));
    }

    /**
     * @param LoaderInterface[] \$loaders
     *
     * @return XmlFileLoader[]|YamlFileLoader[]
     */
    private function extractSupportedLoaders(array \$loaders)
    {
        \$supportedLoaders = [];

        foreach (\$loaders as \$loader) {
            if (\$loader instanceof XmlFileLoader || \$loader instanceof YamlFileLoader) {
                \$supportedLoaders[] = \$loader;
            } elseif (\$loader instanceof LoaderChain) {
                \$supportedLoaders = array_merge(\$supportedLoaders, \$this->extractSupportedLoaders(\$loader->getLoaders()));
            }
        }

        return \$supportedLoaders;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/CacheWarmer/ValidatorCacheWarmer.php";
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
use Psr\\Cache\\CacheItemPoolInterface;
use Symfony\\Component\\Cache\\Adapter\\ArrayAdapter;
use Symfony\\Component\\Cache\\Adapter\\PhpArrayAdapter;
use Symfony\\Component\\Validator\\Mapping\\Cache\\Psr6Cache;
use Symfony\\Component\\Validator\\Mapping\\Factory\\LazyLoadingMetadataFactory;
use Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderChain;
use Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderInterface;
use Symfony\\Component\\Validator\\Mapping\\Loader\\XmlFileLoader;
use Symfony\\Component\\Validator\\Mapping\\Loader\\YamlFileLoader;
use Symfony\\Component\\Validator\\ValidatorBuilderInterface;

/**
 * Warms up XML and YAML validator metadata.
 *
 * @author Titouan Galopin <galopintitouan@gmail.com>
 */
class ValidatorCacheWarmer extends AbstractPhpFileCacheWarmer
{
    private \$validatorBuilder;

    /**
     * @param string \$phpArrayFile The PHP file where metadata are cached
     */
    public function __construct(ValidatorBuilderInterface \$validatorBuilder, string \$phpArrayFile)
    {
        if (2 < \\func_num_args() && func_get_arg(2) instanceof CacheItemPoolInterface) {
            @trigger_error(sprintf('The CacheItemPoolInterface \$fallbackPool argument of \"%s()\" is deprecated since Symfony 4.2, you should not pass it anymore.', __METHOD__), E_USER_DEPRECATED);
        }
        parent::__construct(\$phpArrayFile);
        \$this->validatorBuilder = \$validatorBuilder;
    }

    /**
     * {@inheritdoc}
     */
    protected function doWarmUp(\$cacheDir, ArrayAdapter \$arrayAdapter)
    {
        if (!method_exists(\$this->validatorBuilder, 'getLoaders')) {
            return false;
        }

        \$loaders = \$this->validatorBuilder->getLoaders();
        \$metadataFactory = new LazyLoadingMetadataFactory(new LoaderChain(\$loaders), new Psr6Cache(\$arrayAdapter));

        foreach (\$this->extractSupportedLoaders(\$loaders) as \$loader) {
            foreach (\$loader->getMappedClasses() as \$mappedClass) {
                try {
                    if (\$metadataFactory->hasMetadataFor(\$mappedClass)) {
                        \$metadataFactory->getMetadataFor(\$mappedClass);
                    }
                } catch (AnnotationException \$e) {
                    // ignore failing annotations
                } catch (\\Exception \$e) {
                    \$this->ignoreAutoloadException(\$mappedClass, \$e);
                }
            }
        }

        return true;
    }

    protected function warmUpPhpArrayAdapter(PhpArrayAdapter \$phpArrayAdapter, array \$values)
    {
        // make sure we don't cache null values
        parent::warmUpPhpArrayAdapter(\$phpArrayAdapter, array_filter(\$values));
    }

    /**
     * @param LoaderInterface[] \$loaders
     *
     * @return XmlFileLoader[]|YamlFileLoader[]
     */
    private function extractSupportedLoaders(array \$loaders)
    {
        \$supportedLoaders = [];

        foreach (\$loaders as \$loader) {
            if (\$loader instanceof XmlFileLoader || \$loader instanceof YamlFileLoader) {
                \$supportedLoaders[] = \$loader;
            } elseif (\$loader instanceof LoaderChain) {
                \$supportedLoaders = array_merge(\$supportedLoaders, \$this->extractSupportedLoaders(\$loader->getLoaders()));
            }
        }

        return \$supportedLoaders;
    }
}
", "vendor/symfony/framework-bundle/CacheWarmer/ValidatorCacheWarmer.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/CacheWarmer/ValidatorCacheWarmer.php");
    }
}
