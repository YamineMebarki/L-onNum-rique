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

/* vendor/symfony/console/Tests/Fixtures/command_2.xml */
class __TwigTemplate_b8f7ae51d0d56ebf2800d272b798da508bdaaa5d9de8d328ab7a5d4bce306d0f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Fixtures/command_2.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Fixtures/command_2.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<command id=\"descriptor:command2\" name=\"descriptor:command2\" hidden=\"0\">
  <usages>
    <usage>descriptor:command2 [-o|--option_name] [--] &lt;argument_name&gt;</usage>
    <usage>descriptor:command2 -o|--option_name &lt;argument_name&gt;</usage>
    <usage>descriptor:command2 &lt;argument_name&gt;</usage>
  </usages>
  <description>command 2 description</description>
  <help>command 2 help</help>
  <arguments>
    <argument name=\"argument_name\" is_required=\"1\" is_array=\"0\">
      <description></description>
      <defaults/>
    </argument>
  </arguments>
  <options>
    <option name=\"--option_name\" shortcut=\"-o\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
      <description></description>
    </option>
  </options>
</command>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/Fixtures/command_2.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<command id=\"descriptor:command2\" name=\"descriptor:command2\" hidden=\"0\">
  <usages>
    <usage>descriptor:command2 [-o|--option_name] [--] &lt;argument_name&gt;</usage>
    <usage>descriptor:command2 -o|--option_name &lt;argument_name&gt;</usage>
    <usage>descriptor:command2 &lt;argument_name&gt;</usage>
  </usages>
  <description>command 2 description</description>
  <help>command 2 help</help>
  <arguments>
    <argument name=\"argument_name\" is_required=\"1\" is_array=\"0\">
      <description></description>
      <defaults/>
    </argument>
  </arguments>
  <options>
    <option name=\"--option_name\" shortcut=\"-o\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
      <description></description>
    </option>
  </options>
</command>
", "vendor/symfony/console/Tests/Fixtures/command_2.xml", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Fixtures/command_2.xml");
    }
}
