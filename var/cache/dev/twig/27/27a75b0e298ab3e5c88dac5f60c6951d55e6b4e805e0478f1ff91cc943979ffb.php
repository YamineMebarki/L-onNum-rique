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

/* vendor/symfony/console/Tests/Fixtures/application_2.xml */
class __TwigTemplate_7b4dfc89dc3f6a948bd0752bcbf000b77c373598fe7e72b23b079e77a7c39d59 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Fixtures/application_2.xml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Fixtures/application_2.xml"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<symfony name=\"My Symfony application\" version=\"v1.0\">
  <commands>
    <command id=\"help\" name=\"help\" hidden=\"0\">
      <usages>
        <usage>help [--format FORMAT] [--raw] [--] [&lt;command_name&gt;]</usage>
      </usages>
      <description>Displays help for a command</description>
      <help>The &lt;info&gt;help&lt;/info&gt; command displays help for a given command:
 
   &lt;info&gt;php app/console help list&lt;/info&gt;
 
 You can also output the help in other formats by using the &lt;comment&gt;--format&lt;/comment&gt; option:
 
   &lt;info&gt;php app/console help --format=xml list&lt;/info&gt;
 
 To display the list of available commands, please use the &lt;info&gt;list&lt;/info&gt; command.</help>
      <arguments>
        <argument name=\"command_name\" is_required=\"0\" is_array=\"0\">
          <description>The command name</description>
          <defaults>
            <default>help</default>
          </defaults>
        </argument>
      </arguments>
      <options>
        <option name=\"--format\" shortcut=\"\" accept_value=\"1\" is_value_required=\"1\" is_multiple=\"0\">
          <description>The output format (AideTxt, xml, json, or md)</description>
          <defaults>
            <default>AideTxt</default>
          </defaults>
        </option>
        <option name=\"--raw\" shortcut=\"\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>To output raw command help</description>
        </option>
        <option name=\"--help\" shortcut=\"-h\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Display this help message</description>
        </option>
        <option name=\"--quiet\" shortcut=\"-q\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Do not output any message</description>
        </option>
        <option name=\"--verbose\" shortcut=\"-v\" shortcuts=\"-v|-vv|-vvv\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug</description>
        </option>
        <option name=\"--version\" shortcut=\"-V\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Display this application version</description>
        </option>
        <option name=\"--ansi\" shortcut=\"\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Force ANSI output</description>
        </option>
        <option name=\"--no-ansi\" shortcut=\"\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Disable ANSI output</description>
        </option>
        <option name=\"--no-interaction\" shortcut=\"-n\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Do not ask any interactive question</description>
        </option>
      </options>
    </command>
    <command id=\"list\" name=\"list\" hidden=\"0\">
      <usages>
        <usage>list [--raw] [--format FORMAT] [--] [&lt;namespace&gt;]</usage>
      </usages>
      <description>Lists commands</description>
      <help>The &lt;info&gt;list&lt;/info&gt; command lists all commands:
 
   &lt;info&gt;php app/console list&lt;/info&gt;
 
 You can also display the commands for a specific namespace:
 
   &lt;info&gt;php app/console list test&lt;/info&gt;
 
 You can also output the information in other formats by using the &lt;comment&gt;--format&lt;/comment&gt; option:
 
   &lt;info&gt;php app/console list --format=xml&lt;/info&gt;
 
 It's also possible to get raw list of commands (useful for embedding command runner):
 
   &lt;info&gt;php app/console list --raw&lt;/info&gt;</help>
      <arguments>
        <argument name=\"namespace\" is_required=\"0\" is_array=\"0\">
          <description>The namespace name</description>
          <defaults/>
        </argument>
      </arguments>
      <options>
        <option name=\"--raw\" shortcut=\"\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>To output raw command list</description>
        </option>
        <option name=\"--format\" shortcut=\"\" accept_value=\"1\" is_value_required=\"1\" is_multiple=\"0\">
          <description>The output format (AideTxt, xml, json, or md)</description>
          <defaults>
            <default>AideTxt</default>
          </defaults>
        </option>
      </options>
    </command>
    <command id=\"descriptor:command1\" name=\"descriptor:command1\" hidden=\"0\">
      <usages>
        <usage>descriptor:command1</usage>
        <usage>alias1</usage>
        <usage>alias2</usage>
      </usages>
      <description>command 1 description</description>
      <help>command 1 help</help>
      <arguments/>
      <options>
        <option name=\"--help\" shortcut=\"-h\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Display this help message</description>
        </option>
        <option name=\"--quiet\" shortcut=\"-q\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Do not output any message</description>
        </option>
        <option name=\"--verbose\" shortcut=\"-v\" shortcuts=\"-v|-vv|-vvv\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug</description>
        </option>
        <option name=\"--version\" shortcut=\"-V\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Display this application version</description>
        </option>
        <option name=\"--ansi\" shortcut=\"\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Force ANSI output</description>
        </option>
        <option name=\"--no-ansi\" shortcut=\"\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Disable ANSI output</description>
        </option>
        <option name=\"--no-interaction\" shortcut=\"-n\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Do not ask any interactive question</description>
        </option>
      </options>
    </command>
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
        <option name=\"--help\" shortcut=\"-h\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Display this help message</description>
        </option>
        <option name=\"--quiet\" shortcut=\"-q\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Do not output any message</description>
        </option>
        <option name=\"--verbose\" shortcut=\"-v\" shortcuts=\"-v|-vv|-vvv\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug</description>
        </option>
        <option name=\"--version\" shortcut=\"-V\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Display this application version</description>
        </option>
        <option name=\"--ansi\" shortcut=\"\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Force ANSI output</description>
        </option>
        <option name=\"--no-ansi\" shortcut=\"\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Disable ANSI output</description>
        </option>
        <option name=\"--no-interaction\" shortcut=\"-n\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Do not ask any interactive question</description>
        </option>
      </options>
    </command>
    <command id=\"descriptor:command3\" name=\"descriptor:command3\" hidden=\"1\">
      <usages>
        <usage>descriptor:command3</usage>
      </usages>
      <description>command 3 description</description>
      <help>command 3 help</help>
      <arguments/>
      <options>
        <option name=\"--help\" shortcut=\"-h\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Display this help message</description>
        </option>
        <option name=\"--quiet\" shortcut=\"-q\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Do not output any message</description>
        </option>
        <option name=\"--verbose\" shortcut=\"-v\" shortcuts=\"-v|-vv|-vvv\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug</description>
        </option>
        <option name=\"--version\" shortcut=\"-V\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Display this application version</description>
        </option>
        <option name=\"--ansi\" shortcut=\"\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Force ANSI output</description>
        </option>
        <option name=\"--no-ansi\" shortcut=\"\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Disable ANSI output</description>
        </option>
        <option name=\"--no-interaction\" shortcut=\"-n\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Do not ask any interactive question</description>
        </option>
      </options>
    </command>
    <command id=\"descriptor:command4\" name=\"descriptor:command4\" hidden=\"0\">
      <usages>
        <usage>descriptor:command4</usage>
        <usage>descriptor:alias_command4</usage>
        <usage>command4:descriptor</usage>
      </usages>
      <description></description>
      <help></help>
      <arguments/>
      <options>
        <option name=\"--help\" shortcut=\"-h\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Display this help message</description>
        </option>
        <option name=\"--quiet\" shortcut=\"-q\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Do not output any message</description>
        </option>
        <option name=\"--verbose\" shortcut=\"-v\" shortcuts=\"-v|-vv|-vvv\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug</description>
        </option>
        <option name=\"--version\" shortcut=\"-V\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Display this application version</description>
        </option>
        <option name=\"--ansi\" shortcut=\"\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Force ANSI output</description>
        </option>
        <option name=\"--no-ansi\" shortcut=\"\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Disable ANSI output</description>
        </option>
        <option name=\"--no-interaction\" shortcut=\"-n\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Do not ask any interactive question</description>
        </option>
      </options>
    </command>
  </commands>
  <namespaces>
    <namespace id=\"_global\">
      <command>alias1</command>
      <command>alias2</command>
      <command>help</command>
      <command>list</command>
    </namespace>
    <namespace id=\"command4\">
      <command>command4:descriptor</command>
    </namespace>
    <namespace id=\"descriptor\">
      <command>descriptor:alias_command4</command>
      <command>descriptor:command1</command>
      <command>descriptor:command2</command>
      <command>descriptor:command3</command>
      <command>descriptor:command4</command>
    </namespace>
  </namespaces>
</symfony>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/Fixtures/application_2.xml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<symfony name=\"My Symfony application\" version=\"v1.0\">
  <commands>
    <command id=\"help\" name=\"help\" hidden=\"0\">
      <usages>
        <usage>help [--format FORMAT] [--raw] [--] [&lt;command_name&gt;]</usage>
      </usages>
      <description>Displays help for a command</description>
      <help>The &lt;info&gt;help&lt;/info&gt; command displays help for a given command:
 
   &lt;info&gt;php app/console help list&lt;/info&gt;
 
 You can also output the help in other formats by using the &lt;comment&gt;--format&lt;/comment&gt; option:
 
   &lt;info&gt;php app/console help --format=xml list&lt;/info&gt;
 
 To display the list of available commands, please use the &lt;info&gt;list&lt;/info&gt; command.</help>
      <arguments>
        <argument name=\"command_name\" is_required=\"0\" is_array=\"0\">
          <description>The command name</description>
          <defaults>
            <default>help</default>
          </defaults>
        </argument>
      </arguments>
      <options>
        <option name=\"--format\" shortcut=\"\" accept_value=\"1\" is_value_required=\"1\" is_multiple=\"0\">
          <description>The output format (AideTxt, xml, json, or md)</description>
          <defaults>
            <default>AideTxt</default>
          </defaults>
        </option>
        <option name=\"--raw\" shortcut=\"\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>To output raw command help</description>
        </option>
        <option name=\"--help\" shortcut=\"-h\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Display this help message</description>
        </option>
        <option name=\"--quiet\" shortcut=\"-q\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Do not output any message</description>
        </option>
        <option name=\"--verbose\" shortcut=\"-v\" shortcuts=\"-v|-vv|-vvv\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug</description>
        </option>
        <option name=\"--version\" shortcut=\"-V\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Display this application version</description>
        </option>
        <option name=\"--ansi\" shortcut=\"\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Force ANSI output</description>
        </option>
        <option name=\"--no-ansi\" shortcut=\"\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Disable ANSI output</description>
        </option>
        <option name=\"--no-interaction\" shortcut=\"-n\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Do not ask any interactive question</description>
        </option>
      </options>
    </command>
    <command id=\"list\" name=\"list\" hidden=\"0\">
      <usages>
        <usage>list [--raw] [--format FORMAT] [--] [&lt;namespace&gt;]</usage>
      </usages>
      <description>Lists commands</description>
      <help>The &lt;info&gt;list&lt;/info&gt; command lists all commands:
 
   &lt;info&gt;php app/console list&lt;/info&gt;
 
 You can also display the commands for a specific namespace:
 
   &lt;info&gt;php app/console list test&lt;/info&gt;
 
 You can also output the information in other formats by using the &lt;comment&gt;--format&lt;/comment&gt; option:
 
   &lt;info&gt;php app/console list --format=xml&lt;/info&gt;
 
 It's also possible to get raw list of commands (useful for embedding command runner):
 
   &lt;info&gt;php app/console list --raw&lt;/info&gt;</help>
      <arguments>
        <argument name=\"namespace\" is_required=\"0\" is_array=\"0\">
          <description>The namespace name</description>
          <defaults/>
        </argument>
      </arguments>
      <options>
        <option name=\"--raw\" shortcut=\"\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>To output raw command list</description>
        </option>
        <option name=\"--format\" shortcut=\"\" accept_value=\"1\" is_value_required=\"1\" is_multiple=\"0\">
          <description>The output format (AideTxt, xml, json, or md)</description>
          <defaults>
            <default>AideTxt</default>
          </defaults>
        </option>
      </options>
    </command>
    <command id=\"descriptor:command1\" name=\"descriptor:command1\" hidden=\"0\">
      <usages>
        <usage>descriptor:command1</usage>
        <usage>alias1</usage>
        <usage>alias2</usage>
      </usages>
      <description>command 1 description</description>
      <help>command 1 help</help>
      <arguments/>
      <options>
        <option name=\"--help\" shortcut=\"-h\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Display this help message</description>
        </option>
        <option name=\"--quiet\" shortcut=\"-q\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Do not output any message</description>
        </option>
        <option name=\"--verbose\" shortcut=\"-v\" shortcuts=\"-v|-vv|-vvv\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug</description>
        </option>
        <option name=\"--version\" shortcut=\"-V\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Display this application version</description>
        </option>
        <option name=\"--ansi\" shortcut=\"\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Force ANSI output</description>
        </option>
        <option name=\"--no-ansi\" shortcut=\"\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Disable ANSI output</description>
        </option>
        <option name=\"--no-interaction\" shortcut=\"-n\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Do not ask any interactive question</description>
        </option>
      </options>
    </command>
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
        <option name=\"--help\" shortcut=\"-h\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Display this help message</description>
        </option>
        <option name=\"--quiet\" shortcut=\"-q\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Do not output any message</description>
        </option>
        <option name=\"--verbose\" shortcut=\"-v\" shortcuts=\"-v|-vv|-vvv\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug</description>
        </option>
        <option name=\"--version\" shortcut=\"-V\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Display this application version</description>
        </option>
        <option name=\"--ansi\" shortcut=\"\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Force ANSI output</description>
        </option>
        <option name=\"--no-ansi\" shortcut=\"\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Disable ANSI output</description>
        </option>
        <option name=\"--no-interaction\" shortcut=\"-n\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Do not ask any interactive question</description>
        </option>
      </options>
    </command>
    <command id=\"descriptor:command3\" name=\"descriptor:command3\" hidden=\"1\">
      <usages>
        <usage>descriptor:command3</usage>
      </usages>
      <description>command 3 description</description>
      <help>command 3 help</help>
      <arguments/>
      <options>
        <option name=\"--help\" shortcut=\"-h\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Display this help message</description>
        </option>
        <option name=\"--quiet\" shortcut=\"-q\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Do not output any message</description>
        </option>
        <option name=\"--verbose\" shortcut=\"-v\" shortcuts=\"-v|-vv|-vvv\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug</description>
        </option>
        <option name=\"--version\" shortcut=\"-V\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Display this application version</description>
        </option>
        <option name=\"--ansi\" shortcut=\"\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Force ANSI output</description>
        </option>
        <option name=\"--no-ansi\" shortcut=\"\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Disable ANSI output</description>
        </option>
        <option name=\"--no-interaction\" shortcut=\"-n\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Do not ask any interactive question</description>
        </option>
      </options>
    </command>
    <command id=\"descriptor:command4\" name=\"descriptor:command4\" hidden=\"0\">
      <usages>
        <usage>descriptor:command4</usage>
        <usage>descriptor:alias_command4</usage>
        <usage>command4:descriptor</usage>
      </usages>
      <description></description>
      <help></help>
      <arguments/>
      <options>
        <option name=\"--help\" shortcut=\"-h\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Display this help message</description>
        </option>
        <option name=\"--quiet\" shortcut=\"-q\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Do not output any message</description>
        </option>
        <option name=\"--verbose\" shortcut=\"-v\" shortcuts=\"-v|-vv|-vvv\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug</description>
        </option>
        <option name=\"--version\" shortcut=\"-V\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Display this application version</description>
        </option>
        <option name=\"--ansi\" shortcut=\"\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Force ANSI output</description>
        </option>
        <option name=\"--no-ansi\" shortcut=\"\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Disable ANSI output</description>
        </option>
        <option name=\"--no-interaction\" shortcut=\"-n\" accept_value=\"0\" is_value_required=\"0\" is_multiple=\"0\">
          <description>Do not ask any interactive question</description>
        </option>
      </options>
    </command>
  </commands>
  <namespaces>
    <namespace id=\"_global\">
      <command>alias1</command>
      <command>alias2</command>
      <command>help</command>
      <command>list</command>
    </namespace>
    <namespace id=\"command4\">
      <command>command4:descriptor</command>
    </namespace>
    <namespace id=\"descriptor\">
      <command>descriptor:alias_command4</command>
      <command>descriptor:command1</command>
      <command>descriptor:command2</command>
      <command>descriptor:command3</command>
      <command>descriptor:command4</command>
    </namespace>
  </namespaces>
</symfony>
", "vendor/symfony/console/Tests/Fixtures/application_2.xml", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Fixtures/application_2.xml");
    }
}
