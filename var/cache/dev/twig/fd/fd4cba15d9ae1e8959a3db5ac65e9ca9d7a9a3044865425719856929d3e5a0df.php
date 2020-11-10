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

/* vendor/doctrine/doctrine-cache-bundle/Resources/doc/acl_cache.rst */
class __TwigTemplate_763ed2d88e675b813f96897a4214658e6e6747e9dc06996d747587280bc95687 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/Resources/doc/acl_cache.rst"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-cache-bundle/Resources/doc/acl_cache.rst"));

        // line 1
        echo "Symfony ACL Cache
=================

.. configuration-block::

    .. code-block:: yaml

        # app/config/config.yml
        doctrine_cache:
            acl_cache:
                id: 'doctrine_cache.providers.acl_apc_provider'
            providers:
                acl_apc_provider:
                    type: 'apc'

    .. code-block:: xml

        <!-- app/config/config.xml -->
        <?xml version=\"1.0\" encoding=\"UTF-8\" ?>
        <dic:container xmlns=\"http://doctrine-project.org/schemas/symfony-dic/cache\"
            xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
            xmlns:srv=\"http://symfony.com/schema/dic/services\"
            xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd
                http://doctrine-project.org/schemas/symfony-dic/cache http://doctrine-project.org/schemas/symfony-dic/cache/doctrine_cache-1.0.xsd\">

        <srv:container>
            <doctrine-cache>
                <acl-cache id=\"doctrine_cache.providers.acl_apc_provider\"/>

                <provider name=\"acl_apc_provider\" type=\"apc\"/>
            </doctrine-cache>
        </srv:container>

Check the following sample::

    /** @var \$aclCache Symfony\\Component\\Security\\Acl\\Model\\AclCacheInterface */
    \$aclCache = \$this->container->get('security.acl.cache');
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-cache-bundle/Resources/doc/acl_cache.rst";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Symfony ACL Cache
=================

.. configuration-block::

    .. code-block:: yaml

        # app/config/config.yml
        doctrine_cache:
            acl_cache:
                id: 'doctrine_cache.providers.acl_apc_provider'
            providers:
                acl_apc_provider:
                    type: 'apc'

    .. code-block:: xml

        <!-- app/config/config.xml -->
        <?xml version=\"1.0\" encoding=\"UTF-8\" ?>
        <dic:container xmlns=\"http://doctrine-project.org/schemas/symfony-dic/cache\"
            xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
            xmlns:srv=\"http://symfony.com/schema/dic/services\"
            xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd
                http://doctrine-project.org/schemas/symfony-dic/cache http://doctrine-project.org/schemas/symfony-dic/cache/doctrine_cache-1.0.xsd\">

        <srv:container>
            <doctrine-cache>
                <acl-cache id=\"doctrine_cache.providers.acl_apc_provider\"/>

                <provider name=\"acl_apc_provider\" type=\"apc\"/>
            </doctrine-cache>
        </srv:container>

Check the following sample::

    /** @var \$aclCache Symfony\\Component\\Security\\Acl\\Model\\AclCacheInterface */
    \$aclCache = \$this->container->get('security.acl.cache');
", "vendor/doctrine/doctrine-cache-bundle/Resources/doc/acl_cache.rst", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-cache-bundle/Resources/doc/acl_cache.rst");
    }
}
