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

/* var/cache/dev/twig/96/96b866ddb40a3f33e3df7d8f8efcb11f9bb2b72afbdd27f8fca722aad3322e2a.php */
class __TwigTemplate_338576917e63df4c1e6b9a3ed7a43a5927aca662e1da899487078f75b9a3ff65 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/96/96b866ddb40a3f33e3df7d8f8efcb11f9bb2b72afbdd27f8fca722aad3322e2a.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "var/cache/dev/twig/96/96b866ddb40a3f33e3df7d8f8efcb11f9bb2b72afbdd27f8fca722aad3322e2a.php"));

        // line 1
        echo "<?php

use Twig\\Environment;
use Twig\\Error\\LoaderError;
use Twig\\Error\\RuntimeError;
use Twig\\Extension\\SandboxExtension;
use Twig\\Markup;
use Twig\\Sandbox\\SecurityError;
use Twig\\Sandbox\\SecurityNotAllowedTagError;
use Twig\\Sandbox\\SecurityNotAllowedFilterError;
use Twig\\Sandbox\\SecurityNotAllowedFunctionError;
use Twig\\Source;
use Twig\\Template;

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_3d5dfb26e1f0cbabb3101512c316ba7bc53d8d14ae33bdcd676d364f4f367e5f extends \\Twig\\Template
{
    private \$source;
    private \$macros = [];

    public function __construct(Environment \$env)
    {
        parent::__construct(\$env);

        \$this->source = \$this->getSourceContext();

        \$this->parent = false;

        \$this->blocks = [
        ];
    }

    protected function doDisplay(array \$context, array \$blocks = [])
    {
        \$macros = \$this->macros;
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = \$this->extensions[\"Symfony\\\\Bundle\\\\WebProfilerBundle\\\\Twig\\\\WebProfilerExtension\"];
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Twig/Exception/exception.json.twig\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Twig/Exception/exception.json.twig\"));

        // line 1
        echo json_encode([\"error\" => [\"code\" => (isset(\$context[\"status_code\"]) || array_key_exists(\"status_code\", \$context) ? \$context[\"status_code\"] : (function () { throw new RuntimeError('Variable \"status_code\" does not exist.', 1, \$this->source); })()), \"message\" => (isset(\$context[\"status_text\"]) || array_key_exists(\"status_text\", \$context) ? \$context[\"status_text\"] : (function () { throw new RuntimeError('Variable \"status_text\" does not exist.', 1, \$this->source); })()), \"exception\" => twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"exception\"]) || array_key_exists(\"exception\", \$context) ? \$context[\"exception\"] : (function () { throw new RuntimeError('Variable \"exception\" does not exist.', 1, \$this->source); })()), \"toarray\", [], \"any\", false, false, false, 1)]]);
        echo \"
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@Twig/Exception/exception.json.twig\";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"";
        // line 71
        echo json_encode(["error" => ["code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new RuntimeError('Variable "status_code" does not exist.', 71, $this->source); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new RuntimeError('Variable "status_text" does not exist.', 71, $this->source); })()), "exception" => twig_get_attribute($this->env, $this->source, (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new RuntimeError('Variable "exception" does not exist.', 71, $this->source); })()), "toarray", [], "any", false, false, false, 71)]]);
        echo "
\", \"@Twig/Exception/exception.json.twig\", \"/var/www/public/DevLaon/vendor/symfony/twig-bundle/Resources/views/Exception/exception.json.twig\");
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "var/cache/dev/twig/96/96b866ddb40a3f33e3df7d8f8efcb11f9bb2b72afbdd27f8fca722aad3322e2a.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 71,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

use Twig\\Environment;
use Twig\\Error\\LoaderError;
use Twig\\Error\\RuntimeError;
use Twig\\Extension\\SandboxExtension;
use Twig\\Markup;
use Twig\\Sandbox\\SecurityError;
use Twig\\Sandbox\\SecurityNotAllowedTagError;
use Twig\\Sandbox\\SecurityNotAllowedFilterError;
use Twig\\Sandbox\\SecurityNotAllowedFunctionError;
use Twig\\Source;
use Twig\\Template;

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_3d5dfb26e1f0cbabb3101512c316ba7bc53d8d14ae33bdcd676d364f4f367e5f extends \\Twig\\Template
{
    private \$source;
    private \$macros = [];

    public function __construct(Environment \$env)
    {
        parent::__construct(\$env);

        \$this->source = \$this->getSourceContext();

        \$this->parent = false;

        \$this->blocks = [
        ];
    }

    protected function doDisplay(array \$context, array \$blocks = [])
    {
        \$macros = \$this->macros;
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = \$this->extensions[\"Symfony\\\\Bundle\\\\WebProfilerBundle\\\\Twig\\\\WebProfilerExtension\"];
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Twig/Exception/exception.json.twig\"));

        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = \$this->extensions[\"Symfony\\\\Bridge\\\\Twig\\\\Extension\\\\ProfilerExtension\"];
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \\Twig\\Profiler\\Profile(\$this->getTemplateName(), \"template\", \"@Twig/Exception/exception.json.twig\"));

        // line 1
        echo json_encode([\"error\" => [\"code\" => (isset(\$context[\"status_code\"]) || array_key_exists(\"status_code\", \$context) ? \$context[\"status_code\"] : (function () { throw new RuntimeError('Variable \"status_code\" does not exist.', 1, \$this->source); })()), \"message\" => (isset(\$context[\"status_text\"]) || array_key_exists(\"status_text\", \$context) ? \$context[\"status_text\"] : (function () { throw new RuntimeError('Variable \"status_text\" does not exist.', 1, \$this->source); })()), \"exception\" => twig_get_attribute(\$this->env, \$this->source, (isset(\$context[\"exception\"]) || array_key_exists(\"exception\", \$context) ? \$context[\"exception\"] : (function () { throw new RuntimeError('Variable \"exception\" does not exist.', 1, \$this->source); })()), \"toarray\", [], \"any\", false, false, false, 1)]]);
        echo \"
\";
        
        \$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave(\$__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        \$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave(\$__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return \"@Twig/Exception/exception.json.twig\";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(\"{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
\", \"@Twig/Exception/exception.json.twig\", \"/var/www/public/DevLaon/vendor/symfony/twig-bundle/Resources/views/Exception/exception.json.twig\");
    }
}
", "var/cache/dev/twig/96/96b866ddb40a3f33e3df7d8f8efcb11f9bb2b72afbdd27f8fca722aad3322e2a.php", "/var/www/public/DevLaon/templates/var/cache/dev/twig/96/96b866ddb40a3f33e3df7d8f8efcb11f9bb2b72afbdd27f8fca722aad3322e2a.php");
    }
}
