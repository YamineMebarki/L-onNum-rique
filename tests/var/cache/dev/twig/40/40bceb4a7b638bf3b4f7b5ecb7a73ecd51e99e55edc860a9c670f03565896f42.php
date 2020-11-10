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

/* vendor/symfony/options-resolver/CHANGELOG.md */
class __TwigTemplate_a358b1fdaa3700782ca90b4d801cfaea9f6889e5ad20b7605655729abd12ef04 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/options-resolver/CHANGELOG.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/options-resolver/CHANGELOG.md"));

        // line 1
        echo "CHANGELOG
=========

4.3.0
-----

 * added `OptionsResolver::addNormalizer` method

4.2.0
-----

 * added support for nested options definition
 * added `setDeprecated` and `isDeprecated` methods

3.4.0
-----

 * added `OptionsResolverIntrospector` to inspect options definitions inside an `OptionsResolver` instance
 * added array of types support in allowed types (e.g int[])

2.6.0
-----

 * deprecated OptionsResolverInterface
 * [BC BREAK] removed \"array\" type hint from OptionsResolverInterface methods
   setRequired(), setAllowedValues(), addAllowedValues(), setAllowedTypes() and
   addAllowedTypes()
 * added OptionsResolver::setDefault()
 * added OptionsResolver::hasDefault()
 * added OptionsResolver::setNormalizer()
 * added OptionsResolver::isRequired()
 * added OptionsResolver::getRequiredOptions()
 * added OptionsResolver::isMissing()
 * added OptionsResolver::getMissingOptions()
 * added OptionsResolver::setDefined()
 * added OptionsResolver::isDefined()
 * added OptionsResolver::getDefinedOptions()
 * added OptionsResolver::remove()
 * added OptionsResolver::clear()
 * deprecated OptionsResolver::replaceDefaults()
 * deprecated OptionsResolver::setOptional() in favor of setDefined()
 * deprecated OptionsResolver::isKnown() in favor of isDefined()
 * [BC BREAK] OptionsResolver::isRequired() returns true now if a required
   option has a default value set
 * [BC BREAK] merged Options into OptionsResolver and turned Options into an
   interface
 * deprecated Options::overload() (now in OptionsResolver)
 * deprecated Options::set() (now in OptionsResolver)
 * deprecated Options::get() (now in OptionsResolver)
 * deprecated Options::has() (now in OptionsResolver)
 * deprecated Options::replace() (now in OptionsResolver)
 * [BC BREAK] Options::get() (now in OptionsResolver) can only be used within
   lazy option/normalizer closures now
 * [BC BREAK] removed Traversable interface from Options since using within
   lazy option/normalizer closures resulted in exceptions
 * [BC BREAK] removed Options::all() since using within lazy option/normalizer
   closures resulted in exceptions
 * [BC BREAK] OptionDefinitionException now extends LogicException instead of
   RuntimeException
 * [BC BREAK] normalizers are not executed anymore for unset options
 * normalizers are executed after validating the options now
 * [BC BREAK] an UndefinedOptionsException is now thrown instead of an
   InvalidOptionsException when non-existing options are passed
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/options-resolver/CHANGELOG.md";
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

 * added `OptionsResolver::addNormalizer` method

4.2.0
-----

 * added support for nested options definition
 * added `setDeprecated` and `isDeprecated` methods

3.4.0
-----

 * added `OptionsResolverIntrospector` to inspect options definitions inside an `OptionsResolver` instance
 * added array of types support in allowed types (e.g int[])

2.6.0
-----

 * deprecated OptionsResolverInterface
 * [BC BREAK] removed \"array\" type hint from OptionsResolverInterface methods
   setRequired(), setAllowedValues(), addAllowedValues(), setAllowedTypes() and
   addAllowedTypes()
 * added OptionsResolver::setDefault()
 * added OptionsResolver::hasDefault()
 * added OptionsResolver::setNormalizer()
 * added OptionsResolver::isRequired()
 * added OptionsResolver::getRequiredOptions()
 * added OptionsResolver::isMissing()
 * added OptionsResolver::getMissingOptions()
 * added OptionsResolver::setDefined()
 * added OptionsResolver::isDefined()
 * added OptionsResolver::getDefinedOptions()
 * added OptionsResolver::remove()
 * added OptionsResolver::clear()
 * deprecated OptionsResolver::replaceDefaults()
 * deprecated OptionsResolver::setOptional() in favor of setDefined()
 * deprecated OptionsResolver::isKnown() in favor of isDefined()
 * [BC BREAK] OptionsResolver::isRequired() returns true now if a required
   option has a default value set
 * [BC BREAK] merged Options into OptionsResolver and turned Options into an
   interface
 * deprecated Options::overload() (now in OptionsResolver)
 * deprecated Options::set() (now in OptionsResolver)
 * deprecated Options::get() (now in OptionsResolver)
 * deprecated Options::has() (now in OptionsResolver)
 * deprecated Options::replace() (now in OptionsResolver)
 * [BC BREAK] Options::get() (now in OptionsResolver) can only be used within
   lazy option/normalizer closures now
 * [BC BREAK] removed Traversable interface from Options since using within
   lazy option/normalizer closures resulted in exceptions
 * [BC BREAK] removed Options::all() since using within lazy option/normalizer
   closures resulted in exceptions
 * [BC BREAK] OptionDefinitionException now extends LogicException instead of
   RuntimeException
 * [BC BREAK] normalizers are not executed anymore for unset options
 * normalizers are executed after validating the options now
 * [BC BREAK] an UndefinedOptionsException is now thrown instead of an
   InvalidOptionsException when non-existing options are passed
", "vendor/symfony/options-resolver/CHANGELOG.md", "/var/www/public/DevLaon/templates/vendor/symfony/options-resolver/CHANGELOG.md");
    }
}
