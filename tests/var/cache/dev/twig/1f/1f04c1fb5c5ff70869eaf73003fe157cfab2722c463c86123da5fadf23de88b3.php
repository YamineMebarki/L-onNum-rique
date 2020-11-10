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

/* vendor/zendframework/zend-code/README.md */
class __TwigTemplate_536eb043b8bae94af6d001d4038d648177f36e43384b759062a4f27a0a662fd8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/README.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-code/README.md"));

        // line 1
        echo "# zend-code

[![Build Status](https://secure.travis-ci.org/zendframework/zend-code.svg?branch=master)](https://secure.travis-ci.org/zendframework/zend-code)
[![Coverage Status](https://coveralls.io/repos/github/zendframework/zend-code/badge.svg?branch=master)](https://coveralls.io/github/zendframework/zend-code?branch=master)

`Zend\\Code\\Generator` provides facilities to generate arbitrary code using an
object-oriented interface, both to create new code as well as to update existing
code. While the current implementation is limited to generating PHP code, you
can easily extend the base class in order to provide code generation for other
tasks: JavaScript, configuration files, apache vhosts, etc.

- File issues at https://github.com/zendframework/zend-code/issues
- Documentation is at https://docs.zendframework.com/zend-code/
- Migration documentation from v2 to v3 is at https://docs.zendframework.com/zend-code/migration/
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-code/README.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("# zend-code

[![Build Status](https://secure.travis-ci.org/zendframework/zend-code.svg?branch=master)](https://secure.travis-ci.org/zendframework/zend-code)
[![Coverage Status](https://coveralls.io/repos/github/zendframework/zend-code/badge.svg?branch=master)](https://coveralls.io/github/zendframework/zend-code?branch=master)

`Zend\\Code\\Generator` provides facilities to generate arbitrary code using an
object-oriented interface, both to create new code as well as to update existing
code. While the current implementation is limited to generating PHP code, you
can easily extend the base class in order to provide code generation for other
tasks: JavaScript, configuration files, apache vhosts, etc.

- File issues at https://github.com/zendframework/zend-code/issues
- Documentation is at https://docs.zendframework.com/zend-code/
- Migration documentation from v2 to v3 is at https://docs.zendframework.com/zend-code/migration/
", "vendor/zendframework/zend-code/README.md", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-code/README.md");
    }
}
