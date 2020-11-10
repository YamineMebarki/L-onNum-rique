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

/* vendor/fzaninotto/faker/src/Faker/Provider/ne_NP/Internet.php */
class __TwigTemplate_461a9423753b2ad7a11acbd64dc6b5f58cc12bba916625966c05925b8350382a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ne_NP/Internet.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ne_NP/Internet.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\ne_NP;

class Internet extends \\Faker\\Provider\\Internet
{
    protected static \$freeEmailDomain = array('gmail.com', 'yahoo.com', 'hotmail.com');
    protected static \$tld = array('com', 'com', 'com', 'net', 'org');

    protected static \$emailFormats = array(
        '";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["userName"]) || array_key_exists("userName", $context) ? $context["userName"] : (function () { throw new RuntimeError('Variable "userName" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "@";
        echo twig_escape_filter($this->env, (isset($context["domainName"]) || array_key_exists("domainName", $context) ? $context["domainName"] : (function () { throw new RuntimeError('Variable "domainName" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["userName"]) || array_key_exists("userName", $context) ? $context["userName"] : (function () { throw new RuntimeError('Variable "userName" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "@";
        echo twig_escape_filter($this->env, (isset($context["domainName"]) || array_key_exists("domainName", $context) ? $context["domainName"] : (function () { throw new RuntimeError('Variable "domainName" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["userName"]) || array_key_exists("userName", $context) ? $context["userName"] : (function () { throw new RuntimeError('Variable "userName" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "@";
        echo twig_escape_filter($this->env, (isset($context["freeEmailDomain"]) || array_key_exists("freeEmailDomain", $context) ? $context["freeEmailDomain"] : (function () { throw new RuntimeError('Variable "freeEmailDomain" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["userName"]) || array_key_exists("userName", $context) ? $context["userName"] : (function () { throw new RuntimeError('Variable "userName" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "@";
        echo twig_escape_filter($this->env, (isset($context["domainName"]) || array_key_exists("domainName", $context) ? $context["domainName"] : (function () { throw new RuntimeError('Variable "domainName" does not exist.', 14, $this->source); })()), "html", null, true);
        echo ".np',
        '";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["userName"]) || array_key_exists("userName", $context) ? $context["userName"] : (function () { throw new RuntimeError('Variable "userName" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "@";
        echo twig_escape_filter($this->env, (isset($context["domainName"]) || array_key_exists("domainName", $context) ? $context["domainName"] : (function () { throw new RuntimeError('Variable "domainName" does not exist.', 15, $this->source); })()), "html", null, true);
        echo ".np',
        '";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["userName"]) || array_key_exists("userName", $context) ? $context["userName"] : (function () { throw new RuntimeError('Variable "userName" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "@";
        echo twig_escape_filter($this->env, (isset($context["domainName"]) || array_key_exists("domainName", $context) ? $context["domainName"] : (function () { throw new RuntimeError('Variable "domainName" does not exist.', 16, $this->source); })()), "html", null, true);
        echo ".np',
    );

    protected static \$urlFormats = array(
        'http://www.";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["domainName"]) || array_key_exists("domainName", $context) ? $context["domainName"] : (function () { throw new RuntimeError('Variable "domainName" does not exist.', 20, $this->source); })()), "html", null, true);
        echo ".np/',
        'http://www.";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["domainName"]) || array_key_exists("domainName", $context) ? $context["domainName"] : (function () { throw new RuntimeError('Variable "domainName" does not exist.', 21, $this->source); })()), "html", null, true);
        echo ".np/',
        'http://";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["domainName"]) || array_key_exists("domainName", $context) ? $context["domainName"] : (function () { throw new RuntimeError('Variable "domainName" does not exist.', 22, $this->source); })()), "html", null, true);
        echo ".np/',
        'http://";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["domainName"]) || array_key_exists("domainName", $context) ? $context["domainName"] : (function () { throw new RuntimeError('Variable "domainName" does not exist.', 23, $this->source); })()), "html", null, true);
        echo ".np/',
        'http://www.";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["domainName"]) || array_key_exists("domainName", $context) ? $context["domainName"] : (function () { throw new RuntimeError('Variable "domainName" does not exist.', 24, $this->source); })()), "html", null, true);
        echo ".np/";
        echo twig_escape_filter($this->env, (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "',
        'http://www.";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["domainName"]) || array_key_exists("domainName", $context) ? $context["domainName"] : (function () { throw new RuntimeError('Variable "domainName" does not exist.', 25, $this->source); })()), "html", null, true);
        echo ".np/";
        echo twig_escape_filter($this->env, (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 25, $this->source); })()), "html", null, true);
        echo ".html',
        'http://";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["domainName"]) || array_key_exists("domainName", $context) ? $context["domainName"] : (function () { throw new RuntimeError('Variable "domainName" does not exist.', 26, $this->source); })()), "html", null, true);
        echo ".np/";
        echo twig_escape_filter($this->env, (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "',
        'http://";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["domainName"]) || array_key_exists("domainName", $context) ? $context["domainName"] : (function () { throw new RuntimeError('Variable "domainName" does not exist.', 27, $this->source); })()), "html", null, true);
        echo ".np/";
        echo twig_escape_filter($this->env, (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "',
        'http://";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["domainName"]) || array_key_exists("domainName", $context) ? $context["domainName"] : (function () { throw new RuntimeError('Variable "domainName" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["slug"]) || array_key_exists("slug", $context) ? $context["slug"] : (function () { throw new RuntimeError('Variable "slug" does not exist.', 28, $this->source); })()), "html", null, true);
        echo ".html',
        'http://www.";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["domainName"]) || array_key_exists("domainName", $context) ? $context["domainName"] : (function () { throw new RuntimeError('Variable "domainName" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "/',
        'http://";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["domainName"]) || array_key_exists("domainName", $context) ? $context["domainName"] : (function () { throw new RuntimeError('Variable "domainName" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "/',
    );
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/ne_NP/Internet.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 30,  140 => 29,  134 => 28,  128 => 27,  122 => 26,  116 => 25,  110 => 24,  106 => 23,  102 => 22,  98 => 21,  94 => 20,  85 => 16,  79 => 15,  73 => 14,  67 => 13,  61 => 12,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\ne_NP;

class Internet extends \\Faker\\Provider\\Internet
{
    protected static \$freeEmailDomain = array('gmail.com', 'yahoo.com', 'hotmail.com');
    protected static \$tld = array('com', 'com', 'com', 'net', 'org');

    protected static \$emailFormats = array(
        '{{userName}}@{{domainName}}',
        '{{userName}}@{{domainName}}',
        '{{userName}}@{{freeEmailDomain}}',
        '{{userName}}@{{domainName}}.np',
        '{{userName}}@{{domainName}}.np',
        '{{userName}}@{{domainName}}.np',
    );

    protected static \$urlFormats = array(
        'http://www.{{domainName}}.np/',
        'http://www.{{domainName}}.np/',
        'http://{{domainName}}.np/',
        'http://{{domainName}}.np/',
        'http://www.{{domainName}}.np/{{slug}}',
        'http://www.{{domainName}}.np/{{slug}}.html',
        'http://{{domainName}}.np/{{slug}}',
        'http://{{domainName}}.np/{{slug}}',
        'http://{{domainName}}/{{slug}}.html',
        'http://www.{{domainName}}/',
        'http://{{domainName}}/',
    );
}
", "vendor/fzaninotto/faker/src/Faker/Provider/ne_NP/Internet.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/ne_NP/Internet.php");
    }
}
