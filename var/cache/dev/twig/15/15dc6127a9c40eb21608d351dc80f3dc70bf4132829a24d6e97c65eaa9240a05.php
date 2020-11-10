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

/* vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/DoctrineParamConverter.php */
class __TwigTemplate_4b000dfcf20b61b26b058f03ada759980787775d3440a9ae08cc98dce0dd3371 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/DoctrineParamConverter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/DoctrineParamConverter.php"));

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

namespace Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter;

use Doctrine\\Common\\Persistence\\ManagerRegistry;
use Doctrine\\DBAL\\Types\\ConversionException;
use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\NoResultException;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\ParamConverter;
use Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage;
use Symfony\\Component\\ExpressionLanguage\\SyntaxError;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;

/**
 * DoctrineParamConverter.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class DoctrineParamConverter implements ParamConverterInterface
{
    /**
     * @var ManagerRegistry
     */
    private \$registry;

    /**
     * @var ExpressionLanguage
     */
    private \$language;

    /**
     * @var array
     */
    private \$defaultOptions;

    public function __construct(ManagerRegistry \$registry = null, ExpressionLanguage \$expressionLanguage = null, array \$options = [])
    {
        \$this->registry = \$registry;
        \$this->language = \$expressionLanguage;

        \$defaultValues = [
            'entity_manager' => null,
            'exclude' => [],
            'mapping' => [],
            'strip_null' => false,
            'expr' => null,
            'id' => null,
            'repository_method' => null,
            'map_method_signature' => false,
            'evict_cache' => false,
        ];

        \$this->defaultOptions = array_merge(\$defaultValues, \$options);
    }

    /**
     * {@inheritdoc}
     *
     * @throws \\LogicException       When unable to guess how to get a Doctrine instance from the request information
     * @throws NotFoundHttpException When object not found
     */
    public function apply(Request \$request, ParamConverter \$configuration)
    {
        \$name = \$configuration->getName();
        \$class = \$configuration->getClass();
        \$options = \$this->getOptions(\$configuration);

        if (null === \$request->attributes->get(\$name, false)) {
            \$configuration->setIsOptional(true);
        }

        \$errorMessage = null;
        if (\$expr = \$options['expr']) {
            \$object = \$this->findViaExpression(\$class, \$request, \$expr, \$options, \$configuration);

            if (null === \$object) {
                \$errorMessage = sprintf('The expression \"%s\" returned null', \$expr);
            }

            // find by identifier?
        } elseif (false === \$object = \$this->find(\$class, \$request, \$options, \$name)) {
            // find by criteria
            if (false === \$object = \$this->findOneBy(\$class, \$request, \$options)) {
                if (\$configuration->isOptional()) {
                    \$object = null;
                } else {
                    throw new \\LogicException(sprintf('Unable to guess how to get a Doctrine instance from the request information for parameter \"%s\".', \$name));
                }
            }
        }

        if (null === \$object && false === \$configuration->isOptional()) {
            \$message = sprintf('%s object not found by the @%s annotation.', \$class, \$this->getAnnotationName(\$configuration));
            if (\$errorMessage) {
                \$message .= ' '.\$errorMessage;
            }
            throw new NotFoundHttpException(\$message);
        }

        \$request->attributes->set(\$name, \$object);

        return true;
    }

    private function find(\$class, Request \$request, \$options, \$name)
    {
        if (\$options['mapping'] || \$options['exclude']) {
            return false;
        }

        \$id = \$this->getIdentifier(\$request, \$options, \$name);

        if (false === \$id || null === \$id) {
            return false;
        }

        if (\$options['repository_method']) {
            \$method = \$options['repository_method'];
        } else {
            \$method = 'find';
        }

        \$om = \$this->getManager(\$options['entity_manager'], \$class);
        if (\$options['evict_cache'] && \$om instanceof EntityManagerInterface) {
            \$cacheProvider = \$om->getCache();
            if (\$cacheProvider && \$cacheProvider->containsEntity(\$class, \$id)) {
                \$cacheProvider->evictEntity(\$class, \$id);
            }
        }

        try {
            return \$om->getRepository(\$class)->\$method(\$id);
        } catch (NoResultException \$e) {
            return;
        } catch (ConversionException \$e) {
            return;
        }
    }

    private function getIdentifier(Request \$request, \$options, \$name)
    {
        if (null !== \$options['id']) {
            if (!\\is_array(\$options['id'])) {
                \$name = \$options['id'];
            } elseif (\\is_array(\$options['id'])) {
                \$id = [];
                foreach (\$options['id'] as \$field) {
                    if (false !== strstr(\$field, '%s')) {
                        // Convert \"%s_uuid\" to \"foobar_uuid\"
                        \$field = sprintf(\$field, \$name);
                    }
                    \$id[\$field] = \$request->attributes->get(\$field);
                }

                return \$id;
            }
        }

        if (\$request->attributes->has(\$name)) {
            return \$request->attributes->get(\$name);
        }

        if (\$request->attributes->has('id') && !\$options['id']) {
            return \$request->attributes->get('id');
        }

        return false;
    }

    private function findOneBy(\$class, Request \$request, \$options)
    {
        if (!\$options['mapping']) {
            \$keys = \$request->attributes->keys();
            \$options['mapping'] = \$keys ? array_combine(\$keys, \$keys) : [];
        }

        foreach (\$options['exclude'] as \$exclude) {
            unset(\$options['mapping'][\$exclude]);
        }

        if (!\$options['mapping']) {
            return false;
        }

        // if a specific id has been defined in the options and there is no corresponding attribute
        // return false in order to avoid a fallback to the id which might be of another object
        if (\$options['id'] && null === \$request->attributes->get(\$options['id'])) {
            return false;
        }

        \$criteria = [];
        \$em = \$this->getManager(\$options['entity_manager'], \$class);
        \$metadata = \$em->getClassMetadata(\$class);

        \$mapMethodSignature = \$options['repository_method']
            && \$options['map_method_signature']
            && true === \$options['map_method_signature'];

        foreach (\$options['mapping'] as \$attribute => \$field) {
            if (\$metadata->hasField(\$field)
                || (\$metadata->hasAssociation(\$field) && \$metadata->isSingleValuedAssociation(\$field))
                || \$mapMethodSignature) {
                \$criteria[\$field] = \$request->attributes->get(\$attribute);
            }
        }

        if (\$options['strip_null']) {
            \$criteria = array_filter(\$criteria, function (\$value) {
                return null !== \$value;
            });
        }

        if (!\$criteria) {
            return false;
        }

        if (\$options['repository_method']) {
            \$repositoryMethod = \$options['repository_method'];
        } else {
            \$repositoryMethod = 'findOneBy';
        }

        try {
            if (\$mapMethodSignature) {
                return \$this->findDataByMapMethodSignature(\$em, \$class, \$repositoryMethod, \$criteria);
            }

            return \$em->getRepository(\$class)->\$repositoryMethod(\$criteria);
        } catch (NoResultException \$e) {
            return;
        } catch (ConversionException \$e) {
            return;
        }
    }

    private function findDataByMapMethodSignature(\$em, \$class, \$repositoryMethod, \$criteria)
    {
        \$arguments = [];
        \$repository = \$em->getRepository(\$class);
        \$ref = new \\ReflectionMethod(\$repository, \$repositoryMethod);
        foreach (\$ref->getParameters() as \$parameter) {
            if (\\array_key_exists(\$parameter->name, \$criteria)) {
                \$arguments[] = \$criteria[\$parameter->name];
            } elseif (\$parameter->isDefaultValueAvailable()) {
                \$arguments[] = \$parameter->getDefaultValue();
            } else {
                throw new \\InvalidArgumentException(sprintf('Repository method \"%s::%s\" requires that you provide a value for the \"\$%s\" argument.', \\get_class(\$repository), \$repositoryMethod, \$parameter->name));
            }
        }

        return \$ref->invokeArgs(\$repository, \$arguments);
    }

    private function findViaExpression(\$class, Request \$request, \$expression, \$options, ParamConverter \$configuration)
    {
        if (null === \$this->language) {
            throw new \\LogicException(sprintf('To use the @%s tag with the \"expr\" option, you need to install the ExpressionLanguage component.', \$this->getAnnotationName(\$configuration)));
        }

        \$repository = \$this->getManager(\$options['entity_manager'], \$class)->getRepository(\$class);
        \$variables = array_merge(\$request->attributes->all(), ['repository' => \$repository]);

        try {
            return \$this->language->evaluate(\$expression, \$variables);
        } catch (NoResultException \$e) {
            return;
        } catch (ConversionException \$e) {
            return;
        } catch (SyntaxError \$e) {
            throw new \\LogicException(sprintf('Error parsing expression -- %s -- (%s)', \$expression, \$e->getMessage()), 0, \$e);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function supports(ParamConverter \$configuration)
    {
        // if there is no manager, this means that only Doctrine DBAL is configured
        if (null === \$this->registry || !\\count(\$this->registry->getManagerNames())) {
            return false;
        }

        if (null === \$configuration->getClass()) {
            return false;
        }

        \$options = \$this->getOptions(\$configuration, false);

        // Doctrine Entity?
        \$em = \$this->getManager(\$options['entity_manager'], \$configuration->getClass());
        if (null === \$em) {
            return false;
        }

        return !\$em->getMetadataFactory()->isTransient(\$configuration->getClass());
    }

    private function getOptions(ParamConverter \$configuration, \$strict = true)
    {
        \$passedOptions = \$configuration->getOptions();

        if (isset(\$passedOptions['repository_method'])) {
            @trigger_error('The repository_method option of @ParamConverter is deprecated and will be removed in 6.0. Use the expr option or @Entity.', E_USER_DEPRECATED);
        }

        if (isset(\$passedOptions['map_method_signature'])) {
            @trigger_error('The map_method_signature option of @ParamConverter is deprecated and will be removed in 6.0. Use the expr option or @Entity.', E_USER_DEPRECATED);
        }

        \$extraKeys = array_diff(array_keys(\$passedOptions), array_keys(\$this->defaultOptions));
        if (\$extraKeys && \$strict) {
            throw new \\InvalidArgumentException(sprintf('Invalid option(s) passed to @%s: %s', \$this->getAnnotationName(\$configuration), implode(', ', \$extraKeys)));
        }

        return array_replace(\$this->defaultOptions, \$passedOptions);
    }

    private function getManager(\$name, \$class)
    {
        if (null === \$name) {
            return \$this->registry->getManagerForClass(\$class);
        }

        return \$this->registry->getManager(\$name);
    }

    private function getAnnotationName(ParamConverter \$configuration)
    {
        \$r = new \\ReflectionClass(\$configuration);

        return \$r->getShortName();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/DoctrineParamConverter.php";
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

namespace Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter;

use Doctrine\\Common\\Persistence\\ManagerRegistry;
use Doctrine\\DBAL\\Types\\ConversionException;
use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\NoResultException;
use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\ParamConverter;
use Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage;
use Symfony\\Component\\ExpressionLanguage\\SyntaxError;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;

/**
 * DoctrineParamConverter.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class DoctrineParamConverter implements ParamConverterInterface
{
    /**
     * @var ManagerRegistry
     */
    private \$registry;

    /**
     * @var ExpressionLanguage
     */
    private \$language;

    /**
     * @var array
     */
    private \$defaultOptions;

    public function __construct(ManagerRegistry \$registry = null, ExpressionLanguage \$expressionLanguage = null, array \$options = [])
    {
        \$this->registry = \$registry;
        \$this->language = \$expressionLanguage;

        \$defaultValues = [
            'entity_manager' => null,
            'exclude' => [],
            'mapping' => [],
            'strip_null' => false,
            'expr' => null,
            'id' => null,
            'repository_method' => null,
            'map_method_signature' => false,
            'evict_cache' => false,
        ];

        \$this->defaultOptions = array_merge(\$defaultValues, \$options);
    }

    /**
     * {@inheritdoc}
     *
     * @throws \\LogicException       When unable to guess how to get a Doctrine instance from the request information
     * @throws NotFoundHttpException When object not found
     */
    public function apply(Request \$request, ParamConverter \$configuration)
    {
        \$name = \$configuration->getName();
        \$class = \$configuration->getClass();
        \$options = \$this->getOptions(\$configuration);

        if (null === \$request->attributes->get(\$name, false)) {
            \$configuration->setIsOptional(true);
        }

        \$errorMessage = null;
        if (\$expr = \$options['expr']) {
            \$object = \$this->findViaExpression(\$class, \$request, \$expr, \$options, \$configuration);

            if (null === \$object) {
                \$errorMessage = sprintf('The expression \"%s\" returned null', \$expr);
            }

            // find by identifier?
        } elseif (false === \$object = \$this->find(\$class, \$request, \$options, \$name)) {
            // find by criteria
            if (false === \$object = \$this->findOneBy(\$class, \$request, \$options)) {
                if (\$configuration->isOptional()) {
                    \$object = null;
                } else {
                    throw new \\LogicException(sprintf('Unable to guess how to get a Doctrine instance from the request information for parameter \"%s\".', \$name));
                }
            }
        }

        if (null === \$object && false === \$configuration->isOptional()) {
            \$message = sprintf('%s object not found by the @%s annotation.', \$class, \$this->getAnnotationName(\$configuration));
            if (\$errorMessage) {
                \$message .= ' '.\$errorMessage;
            }
            throw new NotFoundHttpException(\$message);
        }

        \$request->attributes->set(\$name, \$object);

        return true;
    }

    private function find(\$class, Request \$request, \$options, \$name)
    {
        if (\$options['mapping'] || \$options['exclude']) {
            return false;
        }

        \$id = \$this->getIdentifier(\$request, \$options, \$name);

        if (false === \$id || null === \$id) {
            return false;
        }

        if (\$options['repository_method']) {
            \$method = \$options['repository_method'];
        } else {
            \$method = 'find';
        }

        \$om = \$this->getManager(\$options['entity_manager'], \$class);
        if (\$options['evict_cache'] && \$om instanceof EntityManagerInterface) {
            \$cacheProvider = \$om->getCache();
            if (\$cacheProvider && \$cacheProvider->containsEntity(\$class, \$id)) {
                \$cacheProvider->evictEntity(\$class, \$id);
            }
        }

        try {
            return \$om->getRepository(\$class)->\$method(\$id);
        } catch (NoResultException \$e) {
            return;
        } catch (ConversionException \$e) {
            return;
        }
    }

    private function getIdentifier(Request \$request, \$options, \$name)
    {
        if (null !== \$options['id']) {
            if (!\\is_array(\$options['id'])) {
                \$name = \$options['id'];
            } elseif (\\is_array(\$options['id'])) {
                \$id = [];
                foreach (\$options['id'] as \$field) {
                    if (false !== strstr(\$field, '%s')) {
                        // Convert \"%s_uuid\" to \"foobar_uuid\"
                        \$field = sprintf(\$field, \$name);
                    }
                    \$id[\$field] = \$request->attributes->get(\$field);
                }

                return \$id;
            }
        }

        if (\$request->attributes->has(\$name)) {
            return \$request->attributes->get(\$name);
        }

        if (\$request->attributes->has('id') && !\$options['id']) {
            return \$request->attributes->get('id');
        }

        return false;
    }

    private function findOneBy(\$class, Request \$request, \$options)
    {
        if (!\$options['mapping']) {
            \$keys = \$request->attributes->keys();
            \$options['mapping'] = \$keys ? array_combine(\$keys, \$keys) : [];
        }

        foreach (\$options['exclude'] as \$exclude) {
            unset(\$options['mapping'][\$exclude]);
        }

        if (!\$options['mapping']) {
            return false;
        }

        // if a specific id has been defined in the options and there is no corresponding attribute
        // return false in order to avoid a fallback to the id which might be of another object
        if (\$options['id'] && null === \$request->attributes->get(\$options['id'])) {
            return false;
        }

        \$criteria = [];
        \$em = \$this->getManager(\$options['entity_manager'], \$class);
        \$metadata = \$em->getClassMetadata(\$class);

        \$mapMethodSignature = \$options['repository_method']
            && \$options['map_method_signature']
            && true === \$options['map_method_signature'];

        foreach (\$options['mapping'] as \$attribute => \$field) {
            if (\$metadata->hasField(\$field)
                || (\$metadata->hasAssociation(\$field) && \$metadata->isSingleValuedAssociation(\$field))
                || \$mapMethodSignature) {
                \$criteria[\$field] = \$request->attributes->get(\$attribute);
            }
        }

        if (\$options['strip_null']) {
            \$criteria = array_filter(\$criteria, function (\$value) {
                return null !== \$value;
            });
        }

        if (!\$criteria) {
            return false;
        }

        if (\$options['repository_method']) {
            \$repositoryMethod = \$options['repository_method'];
        } else {
            \$repositoryMethod = 'findOneBy';
        }

        try {
            if (\$mapMethodSignature) {
                return \$this->findDataByMapMethodSignature(\$em, \$class, \$repositoryMethod, \$criteria);
            }

            return \$em->getRepository(\$class)->\$repositoryMethod(\$criteria);
        } catch (NoResultException \$e) {
            return;
        } catch (ConversionException \$e) {
            return;
        }
    }

    private function findDataByMapMethodSignature(\$em, \$class, \$repositoryMethod, \$criteria)
    {
        \$arguments = [];
        \$repository = \$em->getRepository(\$class);
        \$ref = new \\ReflectionMethod(\$repository, \$repositoryMethod);
        foreach (\$ref->getParameters() as \$parameter) {
            if (\\array_key_exists(\$parameter->name, \$criteria)) {
                \$arguments[] = \$criteria[\$parameter->name];
            } elseif (\$parameter->isDefaultValueAvailable()) {
                \$arguments[] = \$parameter->getDefaultValue();
            } else {
                throw new \\InvalidArgumentException(sprintf('Repository method \"%s::%s\" requires that you provide a value for the \"\$%s\" argument.', \\get_class(\$repository), \$repositoryMethod, \$parameter->name));
            }
        }

        return \$ref->invokeArgs(\$repository, \$arguments);
    }

    private function findViaExpression(\$class, Request \$request, \$expression, \$options, ParamConverter \$configuration)
    {
        if (null === \$this->language) {
            throw new \\LogicException(sprintf('To use the @%s tag with the \"expr\" option, you need to install the ExpressionLanguage component.', \$this->getAnnotationName(\$configuration)));
        }

        \$repository = \$this->getManager(\$options['entity_manager'], \$class)->getRepository(\$class);
        \$variables = array_merge(\$request->attributes->all(), ['repository' => \$repository]);

        try {
            return \$this->language->evaluate(\$expression, \$variables);
        } catch (NoResultException \$e) {
            return;
        } catch (ConversionException \$e) {
            return;
        } catch (SyntaxError \$e) {
            throw new \\LogicException(sprintf('Error parsing expression -- %s -- (%s)', \$expression, \$e->getMessage()), 0, \$e);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function supports(ParamConverter \$configuration)
    {
        // if there is no manager, this means that only Doctrine DBAL is configured
        if (null === \$this->registry || !\\count(\$this->registry->getManagerNames())) {
            return false;
        }

        if (null === \$configuration->getClass()) {
            return false;
        }

        \$options = \$this->getOptions(\$configuration, false);

        // Doctrine Entity?
        \$em = \$this->getManager(\$options['entity_manager'], \$configuration->getClass());
        if (null === \$em) {
            return false;
        }

        return !\$em->getMetadataFactory()->isTransient(\$configuration->getClass());
    }

    private function getOptions(ParamConverter \$configuration, \$strict = true)
    {
        \$passedOptions = \$configuration->getOptions();

        if (isset(\$passedOptions['repository_method'])) {
            @trigger_error('The repository_method option of @ParamConverter is deprecated and will be removed in 6.0. Use the expr option or @Entity.', E_USER_DEPRECATED);
        }

        if (isset(\$passedOptions['map_method_signature'])) {
            @trigger_error('The map_method_signature option of @ParamConverter is deprecated and will be removed in 6.0. Use the expr option or @Entity.', E_USER_DEPRECATED);
        }

        \$extraKeys = array_diff(array_keys(\$passedOptions), array_keys(\$this->defaultOptions));
        if (\$extraKeys && \$strict) {
            throw new \\InvalidArgumentException(sprintf('Invalid option(s) passed to @%s: %s', \$this->getAnnotationName(\$configuration), implode(', ', \$extraKeys)));
        }

        return array_replace(\$this->defaultOptions, \$passedOptions);
    }

    private function getManager(\$name, \$class)
    {
        if (null === \$name) {
            return \$this->registry->getManagerForClass(\$class);
        }

        return \$this->registry->getManager(\$name);
    }

    private function getAnnotationName(ParamConverter \$configuration)
    {
        \$r = new \\ReflectionClass(\$configuration);

        return \$r->getShortName();
    }
}
", "vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/DoctrineParamConverter.php", "/var/www/public/DevLaon/templates/vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/DoctrineParamConverter.php");
    }
}
