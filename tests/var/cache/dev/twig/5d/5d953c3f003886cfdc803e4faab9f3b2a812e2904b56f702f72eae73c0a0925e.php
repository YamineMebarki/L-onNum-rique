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

/* vendor/doctrine/doctrine-bundle/DependencyInjection/Compiler/DoctrineOrmMappingsPass.php */
class __TwigTemplate_a7dd0bcc486101e276a6d571db16360af633105df7123fd6196eaddfbe0d22d4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/DependencyInjection/Compiler/DoctrineOrmMappingsPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/DependencyInjection/Compiler/DoctrineOrmMappingsPass.php"));

        // line 1
        echo "<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\DependencyInjection\\Compiler;

use Symfony\\Bridge\\Doctrine\\DependencyInjection\\CompilerPass\\RegisterMappingsPass;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Class for Symfony bundles to configure mappings for model classes not in the
 * auto-mapped folder.
 *
 * NOTE: alias is only supported by Symfony 2.6+ and will be ignored with older versions.
 */
class DoctrineOrmMappingsPass extends RegisterMappingsPass
{
    /**
     * You should not directly instantiate this class but use one of the
     * factory methods.
     *
     * @param Definition|Reference \$driver            Driver DI definition or reference.
     * @param array                \$namespaces        List of namespaces handled by \$driver.
     * @param string[]             \$managerParameters Ordered list of container parameters that
     *                                                could hold the manager name.
     *                                                doctrine.default_entity_manager is appended
     *                                                automatically.
     * @param string|false         \$enabledParameter  If specified, the compiler pass only executes
     *                                                if this parameter is defined in the service
     *                                                container.
     * @param array                \$aliasMap          Map of alias to namespace.
     */
    public function __construct(\$driver, array \$namespaces, array \$managerParameters, \$enabledParameter = false, array \$aliasMap = [])
    {
        \$managerParameters[] = 'doctrine.default_entity_manager';
        parent::__construct(
            \$driver,
            \$namespaces,
            \$managerParameters,
            'doctrine.orm.%s_metadata_driver',
            \$enabledParameter,
            'doctrine.orm.%s_configuration',
            'addEntityNamespace',
            \$aliasMap
        );
    }

    /**
     * @param array        \$namespaces        Hashmap of directory path to namespace.
     * @param string[]     \$managerParameters List of parameters that could which object manager name
     *                                        your bundle uses. This compiler pass will automatically
     *                                        append the parameter name for the default entity manager
     *                                        to this list.
     * @param string|false \$enabledParameter  Service container parameter that must be present to
     *                                        enable the mapping. Set to false to not do any check,
     *                                        optional.
     * @param string[]     \$aliasMap          Map of alias to namespace.
     *
     * @return self
     */
    public static function createXmlMappingDriver(array \$namespaces, array \$managerParameters = [], \$enabledParameter = false, array \$aliasMap = [])
    {
        \$locator = new Definition('Doctrine\\Common\\Persistence\\Mapping\\Driver\\SymfonyFileLocator', [\$namespaces, '.orm.xml']);
        \$driver  = new Definition('Doctrine\\ORM\\Mapping\\Driver\\XmlDriver', [\$locator]);

        return new DoctrineOrmMappingsPass(\$driver, \$namespaces, \$managerParameters, \$enabledParameter, \$aliasMap);
    }

    /**
     * @param array        \$namespaces        Hashmap of directory path to namespace
     * @param string[]     \$managerParameters List of parameters that could which object manager name
     *                                        your bundle uses. This compiler pass will automatically
     *                                        append the parameter name for the default entity manager
     *                                        to this list.
     * @param string|false \$enabledParameter  Service container parameter that must be present to
     *                                        enable the mapping. Set to false to not do any check,
     *                                        optional.
     * @param string[]     \$aliasMap          Map of alias to namespace.
     *
     * @return self
     */
    public static function createYamlMappingDriver(array \$namespaces, array \$managerParameters = [], \$enabledParameter = false, array \$aliasMap = [])
    {
        \$locator = new Definition('Doctrine\\Common\\Persistence\\Mapping\\Driver\\SymfonyFileLocator', [\$namespaces, '.orm.yml']);
        \$driver  = new Definition('Doctrine\\ORM\\Mapping\\Driver\\YamlDriver', [\$locator]);

        return new DoctrineOrmMappingsPass(\$driver, \$namespaces, \$managerParameters, \$enabledParameter, \$aliasMap);
    }

    /**
     * @param array        \$namespaces        Hashmap of directory path to namespace
     * @param string[]     \$managerParameters List of parameters that could which object manager name
     *                                        your bundle uses. This compiler pass will automatically
     *                                        append the parameter name for the default entity manager
     *                                        to this list.
     * @param string|false \$enabledParameter  Service container parameter that must be present to
     *                                        enable the mapping. Set to false to not do any check,
     *                                        optional.
     * @param string[]     \$aliasMap          Map of alias to namespace.
     *
     * @return self
     */
    public static function createPhpMappingDriver(array \$namespaces, array \$managerParameters = [], \$enabledParameter = false, array \$aliasMap = [])
    {
        \$locator = new Definition('Doctrine\\Common\\Persistence\\Mapping\\Driver\\SymfonyFileLocator', [\$namespaces, '.php']);
        \$driver  = new Definition('Doctrine\\Common\\Persistence\\Mapping\\Driver\\PHPDriver', [\$locator]);

        return new DoctrineOrmMappingsPass(\$driver, \$namespaces, \$managerParameters, \$enabledParameter, \$aliasMap);
    }

    /**
     * @param array        \$namespaces        List of namespaces that are handled with annotation mapping
     * @param array        \$directories       List of directories to look for annotated classes
     * @param string[]     \$managerParameters List of parameters that could which object manager name
     *                                        your bundle uses. This compiler pass will automatically
     *                                        append the parameter name for the default entity manager
     *                                        to this list.
     * @param string|false \$enabledParameter  Service container parameter that must be present to
     *                                        enable the mapping. Set to false to not do any check,
     *                                        optional.
     * @param string[]     \$aliasMap          Map of alias to namespace.
     *
     * @return self
     */
    public static function createAnnotationMappingDriver(array \$namespaces, array \$directories, array \$managerParameters = [], \$enabledParameter = false, array \$aliasMap = [])
    {
        \$reader = new Reference('annotation_reader');
        \$driver = new Definition('Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver', [\$reader, \$directories]);

        return new DoctrineOrmMappingsPass(\$driver, \$namespaces, \$managerParameters, \$enabledParameter, \$aliasMap);
    }

    /**
     * @param array        \$namespaces        List of namespaces that are handled with static php mapping
     * @param array        \$directories       List of directories to look for static php mapping files
     * @param string[]     \$managerParameters List of parameters that could which object manager name
     *                                        your bundle uses. This compiler pass will automatically
     *                                        append the parameter name for the default entity manager
     *                                        to this list.
     * @param string|false \$enabledParameter  Service container parameter that must be present to
     *                                        enable the mapping. Set to false to not do any check,
     *                                        optional.
     * @param string[]     \$aliasMap          Map of alias to namespace.
     *
     * @return self
     */
    public static function createStaticPhpMappingDriver(array \$namespaces, array \$directories, array \$managerParameters = [], \$enabledParameter = false, array \$aliasMap = [])
    {
        \$driver = new Definition('Doctrine\\Common\\Persistence\\Mapping\\Driver\\StaticPHPDriver', [\$directories]);

        return new DoctrineOrmMappingsPass(\$driver, \$namespaces, \$managerParameters, \$enabledParameter, \$aliasMap);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-bundle/DependencyInjection/Compiler/DoctrineOrmMappingsPass.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Doctrine\\Bundle\\DoctrineBundle\\DependencyInjection\\Compiler;

use Symfony\\Bridge\\Doctrine\\DependencyInjection\\CompilerPass\\RegisterMappingsPass;
use Symfony\\Component\\DependencyInjection\\Definition;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Class for Symfony bundles to configure mappings for model classes not in the
 * auto-mapped folder.
 *
 * NOTE: alias is only supported by Symfony 2.6+ and will be ignored with older versions.
 */
class DoctrineOrmMappingsPass extends RegisterMappingsPass
{
    /**
     * You should not directly instantiate this class but use one of the
     * factory methods.
     *
     * @param Definition|Reference \$driver            Driver DI definition or reference.
     * @param array                \$namespaces        List of namespaces handled by \$driver.
     * @param string[]             \$managerParameters Ordered list of container parameters that
     *                                                could hold the manager name.
     *                                                doctrine.default_entity_manager is appended
     *                                                automatically.
     * @param string|false         \$enabledParameter  If specified, the compiler pass only executes
     *                                                if this parameter is defined in the service
     *                                                container.
     * @param array                \$aliasMap          Map of alias to namespace.
     */
    public function __construct(\$driver, array \$namespaces, array \$managerParameters, \$enabledParameter = false, array \$aliasMap = [])
    {
        \$managerParameters[] = 'doctrine.default_entity_manager';
        parent::__construct(
            \$driver,
            \$namespaces,
            \$managerParameters,
            'doctrine.orm.%s_metadata_driver',
            \$enabledParameter,
            'doctrine.orm.%s_configuration',
            'addEntityNamespace',
            \$aliasMap
        );
    }

    /**
     * @param array        \$namespaces        Hashmap of directory path to namespace.
     * @param string[]     \$managerParameters List of parameters that could which object manager name
     *                                        your bundle uses. This compiler pass will automatically
     *                                        append the parameter name for the default entity manager
     *                                        to this list.
     * @param string|false \$enabledParameter  Service container parameter that must be present to
     *                                        enable the mapping. Set to false to not do any check,
     *                                        optional.
     * @param string[]     \$aliasMap          Map of alias to namespace.
     *
     * @return self
     */
    public static function createXmlMappingDriver(array \$namespaces, array \$managerParameters = [], \$enabledParameter = false, array \$aliasMap = [])
    {
        \$locator = new Definition('Doctrine\\Common\\Persistence\\Mapping\\Driver\\SymfonyFileLocator', [\$namespaces, '.orm.xml']);
        \$driver  = new Definition('Doctrine\\ORM\\Mapping\\Driver\\XmlDriver', [\$locator]);

        return new DoctrineOrmMappingsPass(\$driver, \$namespaces, \$managerParameters, \$enabledParameter, \$aliasMap);
    }

    /**
     * @param array        \$namespaces        Hashmap of directory path to namespace
     * @param string[]     \$managerParameters List of parameters that could which object manager name
     *                                        your bundle uses. This compiler pass will automatically
     *                                        append the parameter name for the default entity manager
     *                                        to this list.
     * @param string|false \$enabledParameter  Service container parameter that must be present to
     *                                        enable the mapping. Set to false to not do any check,
     *                                        optional.
     * @param string[]     \$aliasMap          Map of alias to namespace.
     *
     * @return self
     */
    public static function createYamlMappingDriver(array \$namespaces, array \$managerParameters = [], \$enabledParameter = false, array \$aliasMap = [])
    {
        \$locator = new Definition('Doctrine\\Common\\Persistence\\Mapping\\Driver\\SymfonyFileLocator', [\$namespaces, '.orm.yml']);
        \$driver  = new Definition('Doctrine\\ORM\\Mapping\\Driver\\YamlDriver', [\$locator]);

        return new DoctrineOrmMappingsPass(\$driver, \$namespaces, \$managerParameters, \$enabledParameter, \$aliasMap);
    }

    /**
     * @param array        \$namespaces        Hashmap of directory path to namespace
     * @param string[]     \$managerParameters List of parameters that could which object manager name
     *                                        your bundle uses. This compiler pass will automatically
     *                                        append the parameter name for the default entity manager
     *                                        to this list.
     * @param string|false \$enabledParameter  Service container parameter that must be present to
     *                                        enable the mapping. Set to false to not do any check,
     *                                        optional.
     * @param string[]     \$aliasMap          Map of alias to namespace.
     *
     * @return self
     */
    public static function createPhpMappingDriver(array \$namespaces, array \$managerParameters = [], \$enabledParameter = false, array \$aliasMap = [])
    {
        \$locator = new Definition('Doctrine\\Common\\Persistence\\Mapping\\Driver\\SymfonyFileLocator', [\$namespaces, '.php']);
        \$driver  = new Definition('Doctrine\\Common\\Persistence\\Mapping\\Driver\\PHPDriver', [\$locator]);

        return new DoctrineOrmMappingsPass(\$driver, \$namespaces, \$managerParameters, \$enabledParameter, \$aliasMap);
    }

    /**
     * @param array        \$namespaces        List of namespaces that are handled with annotation mapping
     * @param array        \$directories       List of directories to look for annotated classes
     * @param string[]     \$managerParameters List of parameters that could which object manager name
     *                                        your bundle uses. This compiler pass will automatically
     *                                        append the parameter name for the default entity manager
     *                                        to this list.
     * @param string|false \$enabledParameter  Service container parameter that must be present to
     *                                        enable the mapping. Set to false to not do any check,
     *                                        optional.
     * @param string[]     \$aliasMap          Map of alias to namespace.
     *
     * @return self
     */
    public static function createAnnotationMappingDriver(array \$namespaces, array \$directories, array \$managerParameters = [], \$enabledParameter = false, array \$aliasMap = [])
    {
        \$reader = new Reference('annotation_reader');
        \$driver = new Definition('Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver', [\$reader, \$directories]);

        return new DoctrineOrmMappingsPass(\$driver, \$namespaces, \$managerParameters, \$enabledParameter, \$aliasMap);
    }

    /**
     * @param array        \$namespaces        List of namespaces that are handled with static php mapping
     * @param array        \$directories       List of directories to look for static php mapping files
     * @param string[]     \$managerParameters List of parameters that could which object manager name
     *                                        your bundle uses. This compiler pass will automatically
     *                                        append the parameter name for the default entity manager
     *                                        to this list.
     * @param string|false \$enabledParameter  Service container parameter that must be present to
     *                                        enable the mapping. Set to false to not do any check,
     *                                        optional.
     * @param string[]     \$aliasMap          Map of alias to namespace.
     *
     * @return self
     */
    public static function createStaticPhpMappingDriver(array \$namespaces, array \$directories, array \$managerParameters = [], \$enabledParameter = false, array \$aliasMap = [])
    {
        \$driver = new Definition('Doctrine\\Common\\Persistence\\Mapping\\Driver\\StaticPHPDriver', [\$directories]);

        return new DoctrineOrmMappingsPass(\$driver, \$namespaces, \$managerParameters, \$enabledParameter, \$aliasMap);
    }
}
", "vendor/doctrine/doctrine-bundle/DependencyInjection/Compiler/DoctrineOrmMappingsPass.php", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-bundle/DependencyInjection/Compiler/DoctrineOrmMappingsPass.php");
    }
}
