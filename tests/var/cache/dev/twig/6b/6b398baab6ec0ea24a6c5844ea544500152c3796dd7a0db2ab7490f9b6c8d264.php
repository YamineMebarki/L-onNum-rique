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

/* vendor/symfony/var-exporter/README.md */
class __TwigTemplate_840ec8f364ddb0073f0f3b40a82c9f6d9b2ac99843968353dd3176fc19bf0767 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-exporter/README.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-exporter/README.md"));

        // line 1
        echo "VarExporter Component
=====================

The VarExporter component allows exporting any serializable PHP data structure to
plain PHP code. While doing so, it preserves all the semantics associated with
the serialization mechanism of PHP (`__wakeup`, `__sleep`, `Serializable`,
`__serialize`, `__unserialize`).

It also provides an instantiator that allows creating and populating objects
without calling their constructor nor any other methods.

The reason to use this component *vs* `serialize()` or
[igbinary](https://github.com/igbinary/igbinary) is performance: thanks to
OPcache, the resulting code is significantly faster and more memory efficient
than using `unserialize()` or `igbinary_unserialize()`.

Unlike `var_export()`, this works on any serializable PHP value.

It also provides a few improvements over `var_export()`/`serialize()`:

 * the output is PSR-2 compatible;
 * the output can be re-indented without messing up with `\\r` or `\\n` in the data
 * missing classes throw a `ClassNotFoundException` instead of being unserialized to
   `PHP_Incomplete_Class` objects;
 * references involving `SplObjectStorage`, `ArrayObject` or `ArrayIterator`
   instances are preserved;
 * `Reflection*`, `IteratorIterator` and `RecursiveIteratorIterator` classes
   throw an exception when being serialized (their unserialized version is broken
   anyway, see https://bugs.php.net/76737).

Resources
---------

  * [Documentation](https://symfony.com/doc/current/components/var_exporter.html)
  * [Contributing](https://symfony.com/doc/current/contributing/site.html)
  * [Report issues](https://github.com/symfony/symfony/issues) and
    [send Pull Requests](https://github.com/symfony/symfony/pulls)
    in the [main Symfony repository](https://github.com/symfony/symfony)
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-exporter/README.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("VarExporter Component
=====================

The VarExporter component allows exporting any serializable PHP data structure to
plain PHP code. While doing so, it preserves all the semantics associated with
the serialization mechanism of PHP (`__wakeup`, `__sleep`, `Serializable`,
`__serialize`, `__unserialize`).

It also provides an instantiator that allows creating and populating objects
without calling their constructor nor any other methods.

The reason to use this component *vs* `serialize()` or
[igbinary](https://github.com/igbinary/igbinary) is performance: thanks to
OPcache, the resulting code is significantly faster and more memory efficient
than using `unserialize()` or `igbinary_unserialize()`.

Unlike `var_export()`, this works on any serializable PHP value.

It also provides a few improvements over `var_export()`/`serialize()`:

 * the output is PSR-2 compatible;
 * the output can be re-indented without messing up with `\\r` or `\\n` in the data
 * missing classes throw a `ClassNotFoundException` instead of being unserialized to
   `PHP_Incomplete_Class` objects;
 * references involving `SplObjectStorage`, `ArrayObject` or `ArrayIterator`
   instances are preserved;
 * `Reflection*`, `IteratorIterator` and `RecursiveIteratorIterator` classes
   throw an exception when being serialized (their unserialized version is broken
   anyway, see https://bugs.php.net/76737).

Resources
---------

  * [Documentation](https://symfony.com/doc/current/components/var_exporter.html)
  * [Contributing](https://symfony.com/doc/current/contributing/site.html)
  * [Report issues](https://github.com/symfony/symfony/issues) and
    [send Pull Requests](https://github.com/symfony/symfony/pulls)
    in the [main Symfony repository](https://github.com/symfony/symfony)
", "vendor/symfony/var-exporter/README.md", "/var/www/public/DevLaon/templates/vendor/symfony/var-exporter/README.md");
    }
}
