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

/* vendor/symfony/doctrine-bridge/CHANGELOG.md */
class __TwigTemplate_6ede5028915d3464baf01a23586c847cf39369315bf4c8e50c2431f630930cde extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/CHANGELOG.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/CHANGELOG.md"));

        // line 1
        echo "CHANGELOG
=========

4.3.0
-----

 * changed guessing of DECIMAL to set the `input` option of `NumberType` to string
 * deprecated not passing an `IdReader` to the `DoctrineChoiceLoader` when query can be optimized with a single id field
 * deprecated passing an `IdReader` to the `DoctrineChoiceLoader` when entities have a composite id
 * added two Messenger middleware: `DoctrinePingConnectionMiddleware` and `DoctrineCloseConnectionMiddleware`

4.2.0
-----

 * deprecated injecting `ClassMetadataFactory` in `DoctrineExtractor`,
   an instance of `EntityManagerInterface` should be injected instead
 * added support for `simple_array` type
 * the `DoctrineTransactionMiddlewareFactory` class has been removed

4.1.0
-----

 * added support for datetime immutable types in form type guesser

4.0.0
-----

 * the first constructor argument of the `DoctrineChoiceLoader` class must be
   an `ObjectManager` implementation
 * removed the `MergeDoctrineCollectionListener::onBind()` method
 * trying to reset a non-lazy manager service using the `ManagerRegistry::resetService()`
   method throws an exception
 * removed the `DoctrineParserCache` class

3.4.0
-----

 * added support for doctrine/dbal v2.6 types
 * added cause of UniqueEntity constraint violation
 * deprecated `DbalSessionHandler` and `DbalSessionHandlerSchema` in favor of
   `Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\PdoSessionHandler`

3.1.0
-----

 * added \"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "\" message placeholder to UniqueEntityValidator
 * deprecated `MergeDoctrineCollectionListener::onBind` in favor of
   `MergeDoctrineCollectionListener::onSubmit`
 * deprecated passing `ChoiceListFactoryInterface` as first argument of
   `DoctrineChoiceLoader`'s constructor

3.0.0
-----

 * removed `EntityChoiceList`
 * removed `\$manager` (2nd) and `\$class` (3th) arguments of `ORMQueryBuilderLoader`
 * removed passing a query builder closure to `ORMQueryBuilderLoader`
 * removed `loader` and `property` options of the `DoctrineType`

2.8.0
-----

 * deprecated using the entity provider with a Doctrine repository implementing UserProviderInterface
 * added UserLoaderInterface for loading users through Doctrine.

2.7.0
-----

 * added DoctrineChoiceLoader
 * deprecated EntityChoiceList
 * deprecated passing a query builder closure to ORMQueryBuilderLoader
 * deprecated \$manager and \$em arguments of ORMQueryBuilderLoader
 * added optional arguments \$propertyAccessor and \$choiceListFactory to DoctrineOrmExtension constructor
 * deprecated \"loader\" and \"property\" options of DoctrineType

2.4.0
-----

 * deprecated DoctrineOrmTestCase class

2.2.0
-----

 * added an optional PropertyAccessorInterface parameter to DoctrineType,
   EntityType and EntityChoiceList

2.1.0
-----

 * added a default implementation of the ManagerRegistry
 * added a session storage for Doctrine DBAL
 * DoctrineOrmTypeGuesser now guesses \"collection\" for array Doctrine type
 * DoctrineType now caches its choice lists in order to improve performance
 * DoctrineType now uses ManagerRegistry::getManagerForClass() if the option \"em\" is not set
 * UniqueEntity validation constraint now accepts a \"repositoryMethod\" option that will be used to check for uniqueness instead of the default \"findBy\"
 * [BC BREAK] the DbalLogger::log() visibility has been changed from public to
   protected
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/CHANGELOG.md";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 46,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("CHANGELOG
=========

4.3.0
-----

 * changed guessing of DECIMAL to set the `input` option of `NumberType` to string
 * deprecated not passing an `IdReader` to the `DoctrineChoiceLoader` when query can be optimized with a single id field
 * deprecated passing an `IdReader` to the `DoctrineChoiceLoader` when entities have a composite id
 * added two Messenger middleware: `DoctrinePingConnectionMiddleware` and `DoctrineCloseConnectionMiddleware`

4.2.0
-----

 * deprecated injecting `ClassMetadataFactory` in `DoctrineExtractor`,
   an instance of `EntityManagerInterface` should be injected instead
 * added support for `simple_array` type
 * the `DoctrineTransactionMiddlewareFactory` class has been removed

4.1.0
-----

 * added support for datetime immutable types in form type guesser

4.0.0
-----

 * the first constructor argument of the `DoctrineChoiceLoader` class must be
   an `ObjectManager` implementation
 * removed the `MergeDoctrineCollectionListener::onBind()` method
 * trying to reset a non-lazy manager service using the `ManagerRegistry::resetService()`
   method throws an exception
 * removed the `DoctrineParserCache` class

3.4.0
-----

 * added support for doctrine/dbal v2.6 types
 * added cause of UniqueEntity constraint violation
 * deprecated `DbalSessionHandler` and `DbalSessionHandlerSchema` in favor of
   `Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\PdoSessionHandler`

3.1.0
-----

 * added \"{{ value }}\" message placeholder to UniqueEntityValidator
 * deprecated `MergeDoctrineCollectionListener::onBind` in favor of
   `MergeDoctrineCollectionListener::onSubmit`
 * deprecated passing `ChoiceListFactoryInterface` as first argument of
   `DoctrineChoiceLoader`'s constructor

3.0.0
-----

 * removed `EntityChoiceList`
 * removed `\$manager` (2nd) and `\$class` (3th) arguments of `ORMQueryBuilderLoader`
 * removed passing a query builder closure to `ORMQueryBuilderLoader`
 * removed `loader` and `property` options of the `DoctrineType`

2.8.0
-----

 * deprecated using the entity provider with a Doctrine repository implementing UserProviderInterface
 * added UserLoaderInterface for loading users through Doctrine.

2.7.0
-----

 * added DoctrineChoiceLoader
 * deprecated EntityChoiceList
 * deprecated passing a query builder closure to ORMQueryBuilderLoader
 * deprecated \$manager and \$em arguments of ORMQueryBuilderLoader
 * added optional arguments \$propertyAccessor and \$choiceListFactory to DoctrineOrmExtension constructor
 * deprecated \"loader\" and \"property\" options of DoctrineType

2.4.0
-----

 * deprecated DoctrineOrmTestCase class

2.2.0
-----

 * added an optional PropertyAccessorInterface parameter to DoctrineType,
   EntityType and EntityChoiceList

2.1.0
-----

 * added a default implementation of the ManagerRegistry
 * added a session storage for Doctrine DBAL
 * DoctrineOrmTypeGuesser now guesses \"collection\" for array Doctrine type
 * DoctrineType now caches its choice lists in order to improve performance
 * DoctrineType now uses ManagerRegistry::getManagerForClass() if the option \"em\" is not set
 * UniqueEntity validation constraint now accepts a \"repositoryMethod\" option that will be used to check for uniqueness instead of the default \"findBy\"
 * [BC BREAK] the DbalLogger::log() visibility has been changed from public to
   protected
", "vendor/symfony/doctrine-bridge/CHANGELOG.md", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/CHANGELOG.md");
    }
}
