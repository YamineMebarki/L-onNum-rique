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

/* vendor/symfony/var-dumper/CHANGELOG.md */
class __TwigTemplate_dc7fb4ec10aa58b774bb7d6d670bb1de6634b49992f120bccdad19aec5d4f18b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/CHANGELOG.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/CHANGELOG.md"));

        // line 1
        echo "CHANGELOG
=========

4.3.0
-----

 * added `DsCaster` to support dumping the contents of data structures from the Ds extension

4.2.0
-----

 * support selecting the format to use by setting the environment variable `VAR_DUMPER_FORMAT` to `html` or `cli`

4.1.0
-----

 * added a `ServerDumper` to send serialized Data clones to a server
 * added a `ServerDumpCommand` and `DumpServer` to run a server collecting
   and displaying dumps on a single place with multiple formats support
 * added `CliDescriptor` and `HtmlDescriptor` descriptors for `server:dump` CLI and HTML formats support

4.0.0
-----

 * support for passing `\\ReflectionClass` instances to the `Caster::castObject()`
   method has been dropped, pass class names as strings instead
 * the `Data::getRawData()` method has been removed
 * the `VarDumperTestTrait::assertDumpEquals()` method expects a 3rd `\$filter = 0`
   argument and moves `\$message = ''` argument at 4th position.
 * the `VarDumperTestTrait::assertDumpMatchesFormat()` method expects a 3rd `\$filter = 0`
   argument and moves `\$message = ''` argument at 4th position.

3.4.0
-----

 * added `AbstractCloner::setMinDepth()` function to ensure minimum tree depth
 * deprecated `MongoCaster`

2.7.0
-----

 * deprecated `Cloner\\Data::getLimitedClone()`. Use `withMaxDepth`, `withMaxItemsPerDepth` or `withRefHandles` instead.
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/CHANGELOG.md";
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

 * added `DsCaster` to support dumping the contents of data structures from the Ds extension

4.2.0
-----

 * support selecting the format to use by setting the environment variable `VAR_DUMPER_FORMAT` to `html` or `cli`

4.1.0
-----

 * added a `ServerDumper` to send serialized Data clones to a server
 * added a `ServerDumpCommand` and `DumpServer` to run a server collecting
   and displaying dumps on a single place with multiple formats support
 * added `CliDescriptor` and `HtmlDescriptor` descriptors for `server:dump` CLI and HTML formats support

4.0.0
-----

 * support for passing `\\ReflectionClass` instances to the `Caster::castObject()`
   method has been dropped, pass class names as strings instead
 * the `Data::getRawData()` method has been removed
 * the `VarDumperTestTrait::assertDumpEquals()` method expects a 3rd `\$filter = 0`
   argument and moves `\$message = ''` argument at 4th position.
 * the `VarDumperTestTrait::assertDumpMatchesFormat()` method expects a 3rd `\$filter = 0`
   argument and moves `\$message = ''` argument at 4th position.

3.4.0
-----

 * added `AbstractCloner::setMinDepth()` function to ensure minimum tree depth
 * deprecated `MongoCaster`

2.7.0
-----

 * deprecated `Cloner\\Data::getLimitedClone()`. Use `withMaxDepth`, `withMaxItemsPerDepth` or `withRefHandles` instead.
", "vendor/symfony/var-dumper/CHANGELOG.md", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/CHANGELOG.md");
    }
}
