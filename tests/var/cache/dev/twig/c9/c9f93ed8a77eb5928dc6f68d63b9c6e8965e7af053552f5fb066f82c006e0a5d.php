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

/* vendor/sensio/framework-extra-bundle/src/DependencyInjection/SensioFrameworkExtraExtension.php */
class __TwigTemplate_9692df9c0cadc53e0167ae0f96538d45057b673d899ca2a40620f60774734f27 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/DependencyInjection/SensioFrameworkExtraExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/DependencyInjection/SensioFrameworkExtraExtension.php"));

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

namespace Sensio\\Bundle\\FrameworkExtraBundle\\DependencyInjection;

use Psr\\Http\\Message\\StreamFactoryInterface;
use Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterInterface;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\Config\\Resource\\ClassExistenceResource;
use Symfony\\Component\\DependencyInjection\\Alias;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader;
use Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\Extension;
use Symfony\\Component\\Security\\Core\\Authorization\\ExpressionLanguage as SecurityExpressionLanguage;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SensioFrameworkExtraExtension extends Extension
{
    public function load(array \$configs, ContainerBuilder \$container)
    {
        \$configuration = \$this->getConfiguration(\$configs, \$container);
        \$config = \$this->processConfiguration(\$configuration, \$configs);

        \$loader = new XmlFileLoader(\$container, new FileLocator(__DIR__.'/../Resources/config'));

        \$annotationsToLoad = [];
        \$definitionsToRemove = [];

        if (\$config['router']['annotations']) {
            @trigger_error(sprintf('Enabling the \"sensio_framework_extra.router.annotations\" configuration is deprecated since version 5.2. Set it to false and use the \"%s\" annotation from Symfony itself.', \\Symfony\\Component\\Routing\\Annotation\\Route::class), E_USER_DEPRECATED);

            \$annotationsToLoad[] = 'routing.xml';

            if (\\PHP_VERSION_ID < 70000) {
                \$this->addClassesToCompile([
                    'Sensio\\\\Bundle\\\\FrameworkExtraBundle\\\\EventListener\\\\ControllerListener',
                ]);
            }
        }

        if (\$config['request']['converters']) {
            \$annotationsToLoad[] = 'converters.xml';

            \$container->registerForAutoconfiguration(ParamConverterInterface::class)
                ->addTag('request.param_converter');

            \$container->setParameter('sensio_framework_extra.disabled_converters', \\is_string(\$config['request']['disable']) ? implode(',', \$config['request']['disable']) : \$config['request']['disable']);

            \$container->addResource(new ClassExistenceResource(ExpressionLanguage::class));
            if (class_exists(ExpressionLanguage::class)) {
                \$container->setAlias('sensio_framework_extra.converter.doctrine.orm.expression_language', new Alias('sensio_framework_extra.converter.doctrine.orm.expression_language.default', false));
            } else {
                \$definitionsToRemove[] = 'sensio_framework_extra.converter.doctrine.orm.expression_language.default';
            }

            if (\\PHP_VERSION_ID < 70000) {
                \$this->addClassesToCompile([
                    // cannot be added because it has some annotations
                    //'Sensio\\\\Bundle\\\\FrameworkExtraBundle\\\\Configuration\\\\ParamConverter',
                    'Sensio\\\\Bundle\\\\FrameworkExtraBundle\\\\EventListener\\\\ParamConverterListener',
                    'Sensio\\\\Bundle\\\\FrameworkExtraBundle\\\\Request\\\\ParamConverter\\\\DateTimeParamConverter',
                    'Sensio\\\\Bundle\\\\FrameworkExtraBundle\\\\Request\\\\ParamConverter\\\\DoctrineParamConverter',
                    'Sensio\\\\Bundle\\\\FrameworkExtraBundle\\\\Request\\\\ParamConverter\\\\ParamConverterInterface',
                    'Sensio\\\\Bundle\\\\FrameworkExtraBundle\\\\Request\\\\ParamConverter\\\\ParamConverterManager',
                ]);
            }
        }

        if (\$config['view']['annotations']) {
            \$annotationsToLoad[] = 'view.xml';

            if (\\PHP_VERSION_ID < 70000) {
                \$this->addClassesToCompile([
                    'Sensio\\\\Bundle\\\\FrameworkExtraBundle\\\\EventListener\\\\TemplateListener',
                ]);
            }
        }

        if (\$config['cache']['annotations']) {
            \$annotationsToLoad[] = 'cache.xml';

            if (\\PHP_VERSION_ID < 70000) {
                \$this->addClassesToCompile([
                    'Sensio\\\\Bundle\\\\FrameworkExtraBundle\\\\EventListener\\\\HttpCacheListener',
                ]);
            }
        }

        if (\$config['security']['annotations']) {
            \$annotationsToLoad[] = 'security.xml';

            \$container->addResource(new ClassExistenceResource(ExpressionLanguage::class));
            if (class_exists(ExpressionLanguage::class)) {
                // this resource can only be added if ExpressionLanguage exists (to avoid a fatal error)
                \$container->addResource(new ClassExistenceResource(SecurityExpressionLanguage::class));
                if (class_exists(SecurityExpressionLanguage::class)) {
                    \$container->setAlias('sensio_framework_extra.security.expression_language', new Alias(\$config['security']['expression_language'], false));
                } else {
                    \$definitionsToRemove[] = 'sensio_framework_extra.security.expression_language.default';
                }
            } else {
                \$definitionsToRemove[] = 'sensio_framework_extra.security.expression_language.default';
            }

            if (\\PHP_VERSION_ID < 70000) {
                \$this->addClassesToCompile([
                    'Sensio\\\\Bundle\\\\FrameworkExtraBundle\\\\EventListener\\\\SecurityListener',
                ]);
            }
        }

        if (\$annotationsToLoad) {
            // must be first
            \$loader->load('annotations.xml');

            foreach (\$annotationsToLoad as \$configFile) {
                \$loader->load(\$configFile);
            }

            if (\\PHP_VERSION_ID < 70000) {
                \$this->addClassesToCompile([
                    'Sensio\\\\Bundle\\\\FrameworkExtraBundle\\\\Configuration\\\\ConfigurationAnnotation',
                ]);
            }

            if (\$config['request']['converters']) {
                \$container->getDefinition('sensio_framework_extra.converter.listener')->replaceArgument(1, \$config['request']['auto_convert']);
            }
        }

        if (!empty(\$config['templating']['controller_patterns'])) {
            \$container
                ->getDefinition('sensio_framework_extra.view.guesser')
                ->addArgument(\$config['templating']['controller_patterns']);
        }

        if (\$config['psr_message']['enabled']) {
            \$loader->load('psr7.xml');

            if (!interface_exists(StreamFactoryInterface::class)) {
                \$definitionsToRemove[] = 'sensio_framework_extra.psr7.argument_value_resolver.server_request';
            }
        }

        foreach (\$definitionsToRemove as \$definition) {
            \$container->removeDefinition(\$definition);
        }
    }

    /**
     * Returns the base path for the XSD files.
     *
     * @return string The XSD base path
     */
    public function getXsdValidationBasePath()
    {
        return __DIR__.'/../Resources/config/schema';
    }

    public function getNamespace()
    {
        return 'http://symfony.com/schema/dic/symfony_extra';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/sensio/framework-extra-bundle/src/DependencyInjection/SensioFrameworkExtraExtension.php";
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

namespace Sensio\\Bundle\\FrameworkExtraBundle\\DependencyInjection;

use Psr\\Http\\Message\\StreamFactoryInterface;
use Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter\\ParamConverterInterface;
use Symfony\\Component\\Config\\FileLocator;
use Symfony\\Component\\Config\\Resource\\ClassExistenceResource;
use Symfony\\Component\\DependencyInjection\\Alias;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader;
use Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage;
use Symfony\\Component\\HttpKernel\\DependencyInjection\\Extension;
use Symfony\\Component\\Security\\Core\\Authorization\\ExpressionLanguage as SecurityExpressionLanguage;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class SensioFrameworkExtraExtension extends Extension
{
    public function load(array \$configs, ContainerBuilder \$container)
    {
        \$configuration = \$this->getConfiguration(\$configs, \$container);
        \$config = \$this->processConfiguration(\$configuration, \$configs);

        \$loader = new XmlFileLoader(\$container, new FileLocator(__DIR__.'/../Resources/config'));

        \$annotationsToLoad = [];
        \$definitionsToRemove = [];

        if (\$config['router']['annotations']) {
            @trigger_error(sprintf('Enabling the \"sensio_framework_extra.router.annotations\" configuration is deprecated since version 5.2. Set it to false and use the \"%s\" annotation from Symfony itself.', \\Symfony\\Component\\Routing\\Annotation\\Route::class), E_USER_DEPRECATED);

            \$annotationsToLoad[] = 'routing.xml';

            if (\\PHP_VERSION_ID < 70000) {
                \$this->addClassesToCompile([
                    'Sensio\\\\Bundle\\\\FrameworkExtraBundle\\\\EventListener\\\\ControllerListener',
                ]);
            }
        }

        if (\$config['request']['converters']) {
            \$annotationsToLoad[] = 'converters.xml';

            \$container->registerForAutoconfiguration(ParamConverterInterface::class)
                ->addTag('request.param_converter');

            \$container->setParameter('sensio_framework_extra.disabled_converters', \\is_string(\$config['request']['disable']) ? implode(',', \$config['request']['disable']) : \$config['request']['disable']);

            \$container->addResource(new ClassExistenceResource(ExpressionLanguage::class));
            if (class_exists(ExpressionLanguage::class)) {
                \$container->setAlias('sensio_framework_extra.converter.doctrine.orm.expression_language', new Alias('sensio_framework_extra.converter.doctrine.orm.expression_language.default', false));
            } else {
                \$definitionsToRemove[] = 'sensio_framework_extra.converter.doctrine.orm.expression_language.default';
            }

            if (\\PHP_VERSION_ID < 70000) {
                \$this->addClassesToCompile([
                    // cannot be added because it has some annotations
                    //'Sensio\\\\Bundle\\\\FrameworkExtraBundle\\\\Configuration\\\\ParamConverter',
                    'Sensio\\\\Bundle\\\\FrameworkExtraBundle\\\\EventListener\\\\ParamConverterListener',
                    'Sensio\\\\Bundle\\\\FrameworkExtraBundle\\\\Request\\\\ParamConverter\\\\DateTimeParamConverter',
                    'Sensio\\\\Bundle\\\\FrameworkExtraBundle\\\\Request\\\\ParamConverter\\\\DoctrineParamConverter',
                    'Sensio\\\\Bundle\\\\FrameworkExtraBundle\\\\Request\\\\ParamConverter\\\\ParamConverterInterface',
                    'Sensio\\\\Bundle\\\\FrameworkExtraBundle\\\\Request\\\\ParamConverter\\\\ParamConverterManager',
                ]);
            }
        }

        if (\$config['view']['annotations']) {
            \$annotationsToLoad[] = 'view.xml';

            if (\\PHP_VERSION_ID < 70000) {
                \$this->addClassesToCompile([
                    'Sensio\\\\Bundle\\\\FrameworkExtraBundle\\\\EventListener\\\\TemplateListener',
                ]);
            }
        }

        if (\$config['cache']['annotations']) {
            \$annotationsToLoad[] = 'cache.xml';

            if (\\PHP_VERSION_ID < 70000) {
                \$this->addClassesToCompile([
                    'Sensio\\\\Bundle\\\\FrameworkExtraBundle\\\\EventListener\\\\HttpCacheListener',
                ]);
            }
        }

        if (\$config['security']['annotations']) {
            \$annotationsToLoad[] = 'security.xml';

            \$container->addResource(new ClassExistenceResource(ExpressionLanguage::class));
            if (class_exists(ExpressionLanguage::class)) {
                // this resource can only be added if ExpressionLanguage exists (to avoid a fatal error)
                \$container->addResource(new ClassExistenceResource(SecurityExpressionLanguage::class));
                if (class_exists(SecurityExpressionLanguage::class)) {
                    \$container->setAlias('sensio_framework_extra.security.expression_language', new Alias(\$config['security']['expression_language'], false));
                } else {
                    \$definitionsToRemove[] = 'sensio_framework_extra.security.expression_language.default';
                }
            } else {
                \$definitionsToRemove[] = 'sensio_framework_extra.security.expression_language.default';
            }

            if (\\PHP_VERSION_ID < 70000) {
                \$this->addClassesToCompile([
                    'Sensio\\\\Bundle\\\\FrameworkExtraBundle\\\\EventListener\\\\SecurityListener',
                ]);
            }
        }

        if (\$annotationsToLoad) {
            // must be first
            \$loader->load('annotations.xml');

            foreach (\$annotationsToLoad as \$configFile) {
                \$loader->load(\$configFile);
            }

            if (\\PHP_VERSION_ID < 70000) {
                \$this->addClassesToCompile([
                    'Sensio\\\\Bundle\\\\FrameworkExtraBundle\\\\Configuration\\\\ConfigurationAnnotation',
                ]);
            }

            if (\$config['request']['converters']) {
                \$container->getDefinition('sensio_framework_extra.converter.listener')->replaceArgument(1, \$config['request']['auto_convert']);
            }
        }

        if (!empty(\$config['templating']['controller_patterns'])) {
            \$container
                ->getDefinition('sensio_framework_extra.view.guesser')
                ->addArgument(\$config['templating']['controller_patterns']);
        }

        if (\$config['psr_message']['enabled']) {
            \$loader->load('psr7.xml');

            if (!interface_exists(StreamFactoryInterface::class)) {
                \$definitionsToRemove[] = 'sensio_framework_extra.psr7.argument_value_resolver.server_request';
            }
        }

        foreach (\$definitionsToRemove as \$definition) {
            \$container->removeDefinition(\$definition);
        }
    }

    /**
     * Returns the base path for the XSD files.
     *
     * @return string The XSD base path
     */
    public function getXsdValidationBasePath()
    {
        return __DIR__.'/../Resources/config/schema';
    }

    public function getNamespace()
    {
        return 'http://symfony.com/schema/dic/symfony_extra';
    }
}
", "vendor/sensio/framework-extra-bundle/src/DependencyInjection/SensioFrameworkExtraExtension.php", "/var/www/public/DevLaon/templates/vendor/sensio/framework-extra-bundle/src/DependencyInjection/SensioFrameworkExtraExtension.php");
    }
}
