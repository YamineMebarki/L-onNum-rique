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

/* vendor/zendframework/zend-eventmanager/README.md */
class __TwigTemplate_9f41400ea537e83ea248840bc235466c7cb6271cbbddc180a68c148883ee16b7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-eventmanager/README.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/zendframework/zend-eventmanager/README.md"));

        // line 1
        echo "# zend-eventmanager

[![Build Status](https://secure.travis-ci.org/zendframework/zend-eventmanager.svg?branch=master)](https://secure.travis-ci.org/zendframework/zend-eventmanager)
[![Coverage Status](https://coveralls.io/repos/zendframework/zend-eventmanager/badge.svg?branch=master)](https://coveralls.io/r/zendframework/zend-eventmanager?branch=master)

zend-eventmanager is designed for the following use cases:

- Implementing simple subject/observer patterns.
- Implementing Aspect-Oriented designs.
- Implementing event-driven architectures.

The basic architecture allows you to attach and detach listeners to named events,
both on a per-instance basis as well as via shared collections; trigger events;
and interrupt execution of listeners.

- File issues at https://github.com/zendframework/zend-eventmanager/issues
- Documentation is at https://zendframework.github.io/zend-eventmanager/

For migration from version 2 to version 3, please [read the migration
documentation](https://zendframework.github.io/zend-eventmanager/migration/intro/).

## Benchmarks

We provide scripts for benchmarking zend-eventmanager using the
[Athletic](https://github.com/polyfractal/athletic) framework; these can be
found in the `benchmarks/` directory.

To execute the benchmarks you can run the following command:

```bash
\$ vendor/bin/athletic -p benchmarks
```
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/zendframework/zend-eventmanager/README.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("# zend-eventmanager

[![Build Status](https://secure.travis-ci.org/zendframework/zend-eventmanager.svg?branch=master)](https://secure.travis-ci.org/zendframework/zend-eventmanager)
[![Coverage Status](https://coveralls.io/repos/zendframework/zend-eventmanager/badge.svg?branch=master)](https://coveralls.io/r/zendframework/zend-eventmanager?branch=master)

zend-eventmanager is designed for the following use cases:

- Implementing simple subject/observer patterns.
- Implementing Aspect-Oriented designs.
- Implementing event-driven architectures.

The basic architecture allows you to attach and detach listeners to named events,
both on a per-instance basis as well as via shared collections; trigger events;
and interrupt execution of listeners.

- File issues at https://github.com/zendframework/zend-eventmanager/issues
- Documentation is at https://zendframework.github.io/zend-eventmanager/

For migration from version 2 to version 3, please [read the migration
documentation](https://zendframework.github.io/zend-eventmanager/migration/intro/).

## Benchmarks

We provide scripts for benchmarking zend-eventmanager using the
[Athletic](https://github.com/polyfractal/athletic) framework; these can be
found in the `benchmarks/` directory.

To execute the benchmarks you can run the following command:

```bash
\$ vendor/bin/athletic -p benchmarks
```
", "vendor/zendframework/zend-eventmanager/README.md", "/var/www/public/DevLaon/templates/vendor/zendframework/zend-eventmanager/README.md");
    }
}
