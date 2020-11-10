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

/* vendor/fzaninotto/faker/src/Faker/Provider/zh_CN/Internet.php */
class __TwigTemplate_3ad799691c39506011225f87b321901b8bd41e4f68cb996d042b42ca1a008d8c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/zh_CN/Internet.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/zh_CN/Internet.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\zh_CN;

class Internet extends \\Faker\\Provider\\Internet
{
    protected static \$freeEmailDomain = array(
        'gmail.com', 'yahoo.com', 'hotmail.com', '126.com', '163.com', 'qq.com', 'sohu.com', 'sina.com'
    );
    protected static \$tld = array(
        'com', 'com', 'com', 'com', 'com', 'com', 'biz', 'info', 'net', 'org', 'cn',
        'com.cn', 'edu.cn', 'net.cn', 'biz.cn', 'gov.cn', 'org.cn'
    );

    protected static \$userNameFormats = array(
        '";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["word"]) || array_key_exists("word", $context) ? $context["word"] : (function () { throw new RuntimeError('Variable "word" does not exist.', 16, $this->source); })()), "html", null, true);
        echo ".";
        echo twig_escape_filter($this->env, (isset($context["word"]) || array_key_exists("word", $context) ? $context["word"] : (function () { throw new RuntimeError('Variable "word" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["word"]) || array_key_exists("word", $context) ? $context["word"] : (function () { throw new RuntimeError('Variable "word" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, (isset($context["word"]) || array_key_exists("word", $context) ? $context["word"] : (function () { throw new RuntimeError('Variable "word" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["word"]) || array_key_exists("word", $context) ? $context["word"] : (function () { throw new RuntimeError('Variable "word" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "##',
        '?";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["word"]) || array_key_exists("word", $context) ? $context["word"] : (function () { throw new RuntimeError('Variable "word" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "',
    );
    protected static \$emailFormats = array(
        '";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["userName"]) || array_key_exists("userName", $context) ? $context["userName"] : (function () { throw new RuntimeError('Variable "userName" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "@";
        echo twig_escape_filter($this->env, (isset($context["freeEmailDomain"]) || array_key_exists("freeEmailDomain", $context) ? $context["freeEmailDomain"] : (function () { throw new RuntimeError('Variable "freeEmailDomain" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "',
    );
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/zh_CN/Internet.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 22,  76 => 19,  72 => 18,  66 => 17,  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\zh_CN;

class Internet extends \\Faker\\Provider\\Internet
{
    protected static \$freeEmailDomain = array(
        'gmail.com', 'yahoo.com', 'hotmail.com', '126.com', '163.com', 'qq.com', 'sohu.com', 'sina.com'
    );
    protected static \$tld = array(
        'com', 'com', 'com', 'com', 'com', 'com', 'biz', 'info', 'net', 'org', 'cn',
        'com.cn', 'edu.cn', 'net.cn', 'biz.cn', 'gov.cn', 'org.cn'
    );

    protected static \$userNameFormats = array(
        '{{word}}.{{word}}',
        '{{word}}_{{word}}',
        '{{word}}##',
        '?{{word}}',
    );
    protected static \$emailFormats = array(
        '{{userName}}@{{freeEmailDomain}}',
    );
}
", "vendor/fzaninotto/faker/src/Faker/Provider/zh_CN/Internet.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/zh_CN/Internet.php");
    }
}
