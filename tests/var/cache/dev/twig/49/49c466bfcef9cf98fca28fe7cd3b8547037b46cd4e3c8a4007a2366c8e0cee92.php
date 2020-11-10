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

/* vendor/symfony/framework-bundle/CacheWarmer/SerializerCacheWarmer.php */
class __TwigTemplate_736632828ec64b1da9d4b89a86ee98b084b38cfc2b9a7635b5628a1f2e4adc44 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/CacheWarmer/SerializerCacheWarmer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/CacheWarmer/SerializerCacheWarmer.php"));

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
use Symfony\\Component\\Serializer\\Mapping\\Factory\\CacheClassMetadataFactory;
use Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactory;
use Symfony\\Component\\Serializer\\Mapping\\Loader\\LoaderChain;
use Symfony\\Component\\Serializer\\Mapping\\Loader\\LoaderInterface;
use Symfony\\Component\\Serializer\\Mapping\\Loader\\XmlFileLoader;
use Symfony\\Component\\Serializer\\Mapping\\Loader\\YamlFileLoader;

/**
 * Warms up XML and YAML serializer metadata.
 *
 * @author Titouan Galopin <galopintitouan@gmail.com>
 */
class SerializerCacheWarmer extends AbstractPhpFileCacheWarmer
{
    private \$loaders;

    /**
     * @param LoaderInterface[] \$loaders      The serializer metadata loaders
     * @param string            \$phpArrayFile The PHP file where metadata are cached
     */
    public function __construct(array \$loaders, string \$phpArrayFile)
    {
        if (2 < \\func_num_args() && func_get_arg(2) instanceof CacheItemPoolInterface) {
            @trigger_error(sprintf('The CacheItemPoolInterface \$fallbackPool argument of \"%s()\" is deprecated since Symfony 4.2, you should not pass it anymore.', __METHOD__), E_USER_DEPRECATED);
        }
        parent::__construct(\$phpArrayFile);
        \$this->loaders = \$loaders;
    }

    /**
     * {@inheritdoc}
     */
    protected function doWarmUp(\$cacheDir, ArrayAdapter \$arrayAdapter)
    {
        if (!class_exists(CacheClassMetadataFactory::class) || !method_exists(XmlFileLoader::class, 'getMappedClasses') || !method_exists(YamlFileLoader::class, 'getMappedClasses')) {
            return false;
        }

        \$metadataFactory = new CacheClassMetadataFactory(new ClassMetadataFactory(new LoaderChain(\$this->loaders)), \$arrayAdapter);

        foreach (\$this->extractSupportedLoaders(\$this->loaders) as \$loader) {
            foreach (\$loader->getMappedClasses() as \$mappedClass) {
                try {
                    \$metadataFactory->getMetadataFor(\$mappedClass);
                } catch (AnnotationException \$e) {
                    // ignore failing annotations
                } catch (\\Exception \$e) {
                    \$this->ignoreAutoloadException(\$mappedClass, \$e);
                }
            }
        }

        return true;
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
        return "vendor/symfony/framework-bundle/CacheWarmer/SerializerCacheWarmer.php";
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
use Symfony\\Component\\Serializer\\Mapping\\Factory\\CacheClassMetadataFactory;
use Symfony\\Component\\Serializer\\Mapping\\Factory\\ClassMetadataFactory;
use Symfony\\Component\\Serializer\\Mapping\\Loader\\LoaderChain;
use Symfony\\Component\\Serializer\\Mapping\\Loader\\LoaderInterface;
use Symfony\\Component\\Serializer\\Mapping\\Loader\\XmlFileLoader;
use Symfony\\Component\\Serializer\\Mapping\\Loader\\YamlFileLoader;

/**
 * Warms up XML and YAML serializer metadata.
 *
 * @author Titouan Galopin <galopintitouan@gmail.com>
 */
class SerializerCacheWarmer extends AbstractPhpFileCacheWarmer
{
    private \$loaders;

    /**
     * @param LoaderInterface[] \$loaders      The serializer metadata loaders
     * @param string            \$phpArrayFile The PHP file where metadata are cached
     */
    public function __construct(array \$loaders, string \$phpArrayFile)
    {
        if (2 < \\func_num_args() && func_get_arg(2) instanceof CacheItemPoolInterface) {
            @trigger_error(sprintf('The CacheItemPoolInterface \$fallbackPool argument of \"%s()\" is deprecated since Symfony 4.2, you should not pass it anymore.', __METHOD__), E_USER_DEPRECATED);
        }
        parent::__construct(\$phpArrayFile);
        \$this->loaders = \$loaders;
    }

    /**
     * {@inheritdoc}
     */
    protected function doWarmUp(\$cacheDir, ArrayAdapter \$arrayAdapter)
    {
        if (!class_exists(CacheClassMetadataFactory::class) || !method_exists(XmlFileLoader::class, 'getMappedClasses') || !method_exists(YamlFileLoader::class, 'getMappedClasses')) {
            return false;
        }

        \$metadataFactory = new CacheClassMetadataFactory(new ClassMetadataFactory(new LoaderChain(\$this->loaders)), \$arrayAdapter);

        foreach (\$this->extractSupportedLoaders(\$this->loaders) as \$loader) {
            foreach (\$loader->getMappedClasses() as \$mappedClass) {
                try {
                    \$metadataFactory->getMetadataFor(\$mappedClass);
                } catch (AnnotationException \$e) {
                    // ignore failing annotations
                } catch (\\Exception \$e) {
                    \$this->ignoreAutoloadException(\$mappedClass, \$e);
                }
            }
        }

        return true;
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
", "vendor/symfony/framework-bundle/CacheWarmer/SerializerCacheWarmer.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/CacheWarmer/SerializerCacheWarmer.php");
    }
}
