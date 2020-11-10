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

/* vendor/ocramius/proxy-manager/docs/generator-strategies.md */
class __TwigTemplate_be9db6768e92cf0402c8d3d1c06d4236479af1bdfe31b4b13007d439a9f7b0c6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/docs/generator-strategies.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/docs/generator-strategies.md"));

        // line 1
        echo "---
title: Generator strategies
---

# Generator strategies

ProxyManager allows you to generate classes based on generator strategies and a
given `Zend\\Code\\Generator\\ClassGenerator` as of
the [interface of a generator strategy](https://github.com/Ocramius/ProxyManager/blob/master/src/ProxyManager/GeneratorStrategy/GeneratorStrategyInterface.php).

Currently, 3 generator strategies are shipped with ProxyManager:

 * [`ProxyManager\\GeneratorStrategy\\BaseGeneratorStrategy`](https://github.com/Ocramius/ProxyManager/blob/master/src/ProxyManager/GeneratorStrategy/BaseGeneratorStrategy.php),
   which simply retrieves the string representation of the class from `ClassGenerator`
 * [`ProxyManager\\GeneratorStrategy\\EvaluatingGeneratorStrategy`](https://github.com/Ocramius/ProxyManager/blob/master/src/ProxyManager/GeneratorStrategy/EvaluatingGeneratorStrategy.php),
   which calls `eval()` upon the generated class code before returning it. This is useful in cases
   where you want to generate multiple classes at runtime
 * [`ProxyManager\\GeneratorStrategy\\FileWriterGeneratorStrategy`](https://github.com/Ocramius/ProxyManager/blob/master/src/ProxyManager/GeneratorStrategy/FileWriterGeneratorStrategy.php),
   which accepts a [`ProxyManager\\FileLocator\\FileLocatorInterface`](https://github.com/Ocramius/ProxyManager/blob/master/src/ProxyManager/FileLocator/FileLocatorInterface.php)
   instance as constructor parameter, and based on it, writes the generated class to a file before returning its code.
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/docs/generator-strategies.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("---
title: Generator strategies
---

# Generator strategies

ProxyManager allows you to generate classes based on generator strategies and a
given `Zend\\Code\\Generator\\ClassGenerator` as of
the [interface of a generator strategy](https://github.com/Ocramius/ProxyManager/blob/master/src/ProxyManager/GeneratorStrategy/GeneratorStrategyInterface.php).

Currently, 3 generator strategies are shipped with ProxyManager:

 * [`ProxyManager\\GeneratorStrategy\\BaseGeneratorStrategy`](https://github.com/Ocramius/ProxyManager/blob/master/src/ProxyManager/GeneratorStrategy/BaseGeneratorStrategy.php),
   which simply retrieves the string representation of the class from `ClassGenerator`
 * [`ProxyManager\\GeneratorStrategy\\EvaluatingGeneratorStrategy`](https://github.com/Ocramius/ProxyManager/blob/master/src/ProxyManager/GeneratorStrategy/EvaluatingGeneratorStrategy.php),
   which calls `eval()` upon the generated class code before returning it. This is useful in cases
   where you want to generate multiple classes at runtime
 * [`ProxyManager\\GeneratorStrategy\\FileWriterGeneratorStrategy`](https://github.com/Ocramius/ProxyManager/blob/master/src/ProxyManager/GeneratorStrategy/FileWriterGeneratorStrategy.php),
   which accepts a [`ProxyManager\\FileLocator\\FileLocatorInterface`](https://github.com/Ocramius/ProxyManager/blob/master/src/ProxyManager/FileLocator/FileLocatorInterface.php)
   instance as constructor parameter, and based on it, writes the generated class to a file before returning its code.
", "vendor/ocramius/proxy-manager/docs/generator-strategies.md", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/docs/generator-strategies.md");
    }
}
