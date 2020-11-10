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

/* vendor/doctrine/doctrine-bundle/Resources/config/messenger.xml */
class __TwigTemplate_65356371cea2dfd446f307bf361ea644ef295a4a398ee0ce617d59f7be1d442c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/Resources/config/messenger.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/doctrine-bundle/Resources/config/messenger.xml"));

        // line 1
        echo "<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
           xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
           xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">
    <services>
        <!--
        The following service isn't prefixed by the \"doctrine.orm\" namespace in order for end-users to just use
        the \"doctrine_transaction\" shortcut in message buses middleware config
        -->
        <service id=\"messenger.middleware.doctrine_transaction\" class=\"Symfony\\Bridge\\Doctrine\\Messenger\\DoctrineTransactionMiddleware\" abstract=\"true\" public=\"false\">
            <argument type=\"service\" id=\"doctrine\" />
        </service>

        <!--
        The following service isn't prefixed by the \"doctrine.orm\" namespace in order for end-users to just use
        the \"doctrine_ping_connection\" shortcut in message buses middleware config
        -->
        <service id=\"messenger.middleware.doctrine_ping_connection\" class=\"Symfony\\Bridge\\Doctrine\\Messenger\\DoctrinePingConnectionMiddleware\" abstract=\"true\" public=\"false\">
            <argument type=\"service\" id=\"doctrine\" />
        </service>

        <!--
        The following service isn't prefixed by the \"doctrine.orm\" namespace in order for end-users to just use
        the \"doctrine_close_connection\" shortcut in message buses middleware config
        -->
        <service id=\"messenger.middleware.doctrine_close_connection\" class=\"Symfony\\Bridge\\Doctrine\\Messenger\\DoctrineCloseConnectionMiddleware\" abstract=\"true\" public=\"false\">
            <argument type=\"service\" id=\"doctrine\" />
        </service>

        <!--
        The following service isn't tagged as transport factory because the class may not exist.
        The tag is added conditionally in DoctrineExtension.
        -->
        <service id=\"messenger.transport.doctrine.factory\" class=\"Symfony\\Component\\Messenger\\Transport\\Doctrine\\DoctrineTransportFactory\" public=\"false\">
            <argument type=\"service\" id=\"doctrine\" />
        </service>
    </services>
</container>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/doctrine-bundle/Resources/config/messenger.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" ?>

<container xmlns=\"http://symfony.com/schema/dic/services\"
           xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
           xsi:schemaLocation=\"http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd\">
    <services>
        <!--
        The following service isn't prefixed by the \"doctrine.orm\" namespace in order for end-users to just use
        the \"doctrine_transaction\" shortcut in message buses middleware config
        -->
        <service id=\"messenger.middleware.doctrine_transaction\" class=\"Symfony\\Bridge\\Doctrine\\Messenger\\DoctrineTransactionMiddleware\" abstract=\"true\" public=\"false\">
            <argument type=\"service\" id=\"doctrine\" />
        </service>

        <!--
        The following service isn't prefixed by the \"doctrine.orm\" namespace in order for end-users to just use
        the \"doctrine_ping_connection\" shortcut in message buses middleware config
        -->
        <service id=\"messenger.middleware.doctrine_ping_connection\" class=\"Symfony\\Bridge\\Doctrine\\Messenger\\DoctrinePingConnectionMiddleware\" abstract=\"true\" public=\"false\">
            <argument type=\"service\" id=\"doctrine\" />
        </service>

        <!--
        The following service isn't prefixed by the \"doctrine.orm\" namespace in order for end-users to just use
        the \"doctrine_close_connection\" shortcut in message buses middleware config
        -->
        <service id=\"messenger.middleware.doctrine_close_connection\" class=\"Symfony\\Bridge\\Doctrine\\Messenger\\DoctrineCloseConnectionMiddleware\" abstract=\"true\" public=\"false\">
            <argument type=\"service\" id=\"doctrine\" />
        </service>

        <!--
        The following service isn't tagged as transport factory because the class may not exist.
        The tag is added conditionally in DoctrineExtension.
        -->
        <service id=\"messenger.transport.doctrine.factory\" class=\"Symfony\\Component\\Messenger\\Transport\\Doctrine\\DoctrineTransportFactory\" public=\"false\">
            <argument type=\"service\" id=\"doctrine\" />
        </service>
    </services>
</container>
", "vendor/doctrine/doctrine-bundle/Resources/config/messenger.xml", "/var/www/public/DevLaon/templates/vendor/doctrine/doctrine-bundle/Resources/config/messenger.xml");
    }
}
