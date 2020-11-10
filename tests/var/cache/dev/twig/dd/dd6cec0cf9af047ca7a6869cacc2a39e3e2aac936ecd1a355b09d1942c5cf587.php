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

/* vendor/symfony/doctrine-bridge/Tests/Resources/orm/BaseUser.orm.xml */
class __TwigTemplate_18f5db002a4374454758243f2842c73a2f4584f2d989e0497d359bf5ddbcdbbd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/Resources/orm/BaseUser.orm.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/Tests/Resources/orm/BaseUser.orm.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<doctrine-mapping xmlns=\"http://doctrine-project.org/schemas/orm/doctrine-mapping\"
                  xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
                  xsi:schemaLocation=\"http://doctrine-project.org/schemas/orm/doctrine-mapping
                  http://doctrine-project.org/schemas/orm/doctrine-mapping.xsd\">

    <mapped-superclass name=\"Symfony\\Bridge\\Doctrine\\Tests\\Fixtures\\BaseUser\">
        <field name=\"username\" column=\"username\" type=\"string\" length=\"120\" />
        <field name=\"enabled\" type=\"boolean\" />
    </mapped-superclass>

</doctrine-mapping>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/Tests/Resources/orm/BaseUser.orm.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<doctrine-mapping xmlns=\"http://doctrine-project.org/schemas/orm/doctrine-mapping\"
                  xmlns:xsi=\"http://www.w3.org/2001/XMLSchema-instance\"
                  xsi:schemaLocation=\"http://doctrine-project.org/schemas/orm/doctrine-mapping
                  http://doctrine-project.org/schemas/orm/doctrine-mapping.xsd\">

    <mapped-superclass name=\"Symfony\\Bridge\\Doctrine\\Tests\\Fixtures\\BaseUser\">
        <field name=\"username\" column=\"username\" type=\"string\" length=\"120\" />
        <field name=\"enabled\" type=\"boolean\" />
    </mapped-superclass>

</doctrine-mapping>
", "vendor/symfony/doctrine-bridge/Tests/Resources/orm/BaseUser.orm.xml", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/Tests/Resources/orm/BaseUser.orm.xml");
    }
}
