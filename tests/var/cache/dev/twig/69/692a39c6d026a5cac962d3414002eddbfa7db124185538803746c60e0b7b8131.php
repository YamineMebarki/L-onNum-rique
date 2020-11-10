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

/* vendor/symfony/filesystem/CHANGELOG.md */
class __TwigTemplate_4f0099e50134e85f16c0e96531129b52cfc817380edc50d8763357d9a6e4442b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/filesystem/CHANGELOG.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/filesystem/CHANGELOG.md"));

        // line 1
        echo "CHANGELOG
=========

4.3.0
-----

 * support for passing arrays to `Filesystem::dumpFile()` is deprecated and will be removed in 5.0
 * support for passing arrays to `Filesystem::appendToFile()` is deprecated and will be removed in 5.0

4.0.0
-----

 * removed `LockHandler`
 * Support for passing relative paths to `Filesystem::makePathRelative()` has been removed.

3.4.0
-----

 * support for passing relative paths to `Filesystem::makePathRelative()` is deprecated and will be removed in 4.0

3.3.0
-----

 * added `appendToFile()` to append contents to existing files

3.2.0
-----

 * added `readlink()` as a platform independent method to read links

3.0.0
-----

 * removed `\$mode` argument from `Filesystem::dumpFile()`

2.8.0
-----

 * added tempnam() a stream aware version of PHP's native tempnam()

2.6.0
-----

 * added LockHandler

2.3.12
------

 * deprecated dumpFile() file mode argument.

2.3.0
-----

 * added the dumpFile() method to atomically write files

2.2.0
-----

 * added a delete option for the mirror() method

2.1.0
-----

 * 24eb396 : BC Break : mkdir() function now throws exception in case of failure instead of returning Boolean value
 * created the component
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/filesystem/CHANGELOG.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("CHANGELOG
=========

4.3.0
-----

 * support for passing arrays to `Filesystem::dumpFile()` is deprecated and will be removed in 5.0
 * support for passing arrays to `Filesystem::appendToFile()` is deprecated and will be removed in 5.0

4.0.0
-----

 * removed `LockHandler`
 * Support for passing relative paths to `Filesystem::makePathRelative()` has been removed.

3.4.0
-----

 * support for passing relative paths to `Filesystem::makePathRelative()` is deprecated and will be removed in 4.0

3.3.0
-----

 * added `appendToFile()` to append contents to existing files

3.2.0
-----

 * added `readlink()` as a platform independent method to read links

3.0.0
-----

 * removed `\$mode` argument from `Filesystem::dumpFile()`

2.8.0
-----

 * added tempnam() a stream aware version of PHP's native tempnam()

2.6.0
-----

 * added LockHandler

2.3.12
------

 * deprecated dumpFile() file mode argument.

2.3.0
-----

 * added the dumpFile() method to atomically write files

2.2.0
-----

 * added a delete option for the mirror() method

2.1.0
-----

 * 24eb396 : BC Break : mkdir() function now throws exception in case of failure instead of returning Boolean value
 * created the component
", "vendor/symfony/filesystem/CHANGELOG.md", "/var/www/public/DevLaon/templates/vendor/symfony/filesystem/CHANGELOG.md");
    }
}
