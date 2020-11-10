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

/* vendor/sensio/framework-extra-bundle/CHANGELOG.md */
class __TwigTemplate_8e90c2e873f71e40598a255e4e9258b5e7dce0743e1d8fa8bbac8f77ee9aebcf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/CHANGELOG.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/CHANGELOG.md"));

        // line 1
        echo "CHANGELOG
=========

5.2
---

 * Deprecated routing annotations as this is included in symfony/framework-bundle.
   Disable the feature with

   ```
   sensio_framework_extra:
       router:
           annotations: false
   ```

   Also replace the annotations `Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Route`
   and `Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Method` with `Symfony\\Component\\Routing\\Annotation\\Route`

5.1
---

 * Added autoconfigure for `ParamConverterInterface` (#516).

 * Renamed service ids back to traditional service ids instead
   of class names (#530).

5.0
---

 * Changed the `@Security` annotation to use arguments from argument
   resolvers as expression variables.

 * The `@IsGranted` annotation now also supports using arguments from the
   argument resolvers as the subject.

4.0
---

 * added @IsGranted() annotation
 * allowed to disable some converters
 * allowed to customize the @security message and status code
 * [BC BREAK] changed template name generation from camelCase to under_score for both files and directories
 * removed support for bundle inheritance
 * a RuntimeException is now thrown when a reserved variable is used in a security expression
 * added cache-control max-stale support
 * renamed setETag to setEtag for consistency with Symfony core (use Etag in @Cache now instead of ETag)
 * added must-revalidate support for @Cache annotation
 * Response cache headers set in controllers now take precedence over the ones defined with the @Cache annotation
 * removed HHVM support
 * moved most services as private
 * renamed services to use their FQCN
 * allowed using multiple @Security annotations (class and method)
 * removed support for the Templating component (only plain Twig is supported)
 * removed unneeded phpdocs, converted protected to private properties
 * bumped Symfony minimum version to 3.0
 * bumped PHP minimum version to 5.5.9
 * removed class parameters in container definitions
 * [BC break] DateTimeParamConverter strictly validates the input date when using with 'format' option

3.0
---

 * fixed the Doctrine param converter that sent 500 when an entity was not found under some circumstances
 * ParamConverterInterface now uses ParamConverter as a type hint instead of ConfigurationInterface
 * added support for @Security
 * added support for HTTP validation cache in @Cache (ETag and LastModified)

2.2
---

 * added the possibility to configure the repository method to use for the
   Doctrine converter via the repository_method option.
 * [BC break] When defining multiple @Cache, @Method or @Template annotations on
   a controller class or method, the latter now overrules the former

2.1
---

 * added the possibility to configure the id name for the Doctrine converter via the id option
 * [BC break] The ParamConverterInterface::apply() method now must return a
   Boolean value indicating if a conversion was done.
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/sensio/framework-extra-bundle/CHANGELOG.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("CHANGELOG
=========

5.2
---

 * Deprecated routing annotations as this is included in symfony/framework-bundle.
   Disable the feature with

   ```
   sensio_framework_extra:
       router:
           annotations: false
   ```

   Also replace the annotations `Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Route`
   and `Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Method` with `Symfony\\Component\\Routing\\Annotation\\Route`

5.1
---

 * Added autoconfigure for `ParamConverterInterface` (#516).

 * Renamed service ids back to traditional service ids instead
   of class names (#530).

5.0
---

 * Changed the `@Security` annotation to use arguments from argument
   resolvers as expression variables.

 * The `@IsGranted` annotation now also supports using arguments from the
   argument resolvers as the subject.

4.0
---

 * added @IsGranted() annotation
 * allowed to disable some converters
 * allowed to customize the @security message and status code
 * [BC BREAK] changed template name generation from camelCase to under_score for both files and directories
 * removed support for bundle inheritance
 * a RuntimeException is now thrown when a reserved variable is used in a security expression
 * added cache-control max-stale support
 * renamed setETag to setEtag for consistency with Symfony core (use Etag in @Cache now instead of ETag)
 * added must-revalidate support for @Cache annotation
 * Response cache headers set in controllers now take precedence over the ones defined with the @Cache annotation
 * removed HHVM support
 * moved most services as private
 * renamed services to use their FQCN
 * allowed using multiple @Security annotations (class and method)
 * removed support for the Templating component (only plain Twig is supported)
 * removed unneeded phpdocs, converted protected to private properties
 * bumped Symfony minimum version to 3.0
 * bumped PHP minimum version to 5.5.9
 * removed class parameters in container definitions
 * [BC break] DateTimeParamConverter strictly validates the input date when using with 'format' option

3.0
---

 * fixed the Doctrine param converter that sent 500 when an entity was not found under some circumstances
 * ParamConverterInterface now uses ParamConverter as a type hint instead of ConfigurationInterface
 * added support for @Security
 * added support for HTTP validation cache in @Cache (ETag and LastModified)

2.2
---

 * added the possibility to configure the repository method to use for the
   Doctrine converter via the repository_method option.
 * [BC break] When defining multiple @Cache, @Method or @Template annotations on
   a controller class or method, the latter now overrules the former

2.1
---

 * added the possibility to configure the id name for the Doctrine converter via the id option
 * [BC break] The ParamConverterInterface::apply() method now must return a
   Boolean value indicating if a conversion was done.
", "vendor/sensio/framework-extra-bundle/CHANGELOG.md", "/var/www/public/DevLaon/templates/vendor/sensio/framework-extra-bundle/CHANGELOG.md");
    }
}
