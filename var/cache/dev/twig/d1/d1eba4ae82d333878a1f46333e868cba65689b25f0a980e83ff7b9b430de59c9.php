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

/* vendor/doctrine/common/UPGRADE_TO_2_1 */
class __TwigTemplate_8ba9661c27134bcc1f66f5c160c5899d9488735cd04ef9a81a07c7a3f2ce0f5d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/common/UPGRADE_TO_2_1"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/common/UPGRADE_TO_2_1"));

        // line 1
        echo "This document details all the possible changes that you should investigate when updating
your project from Doctrine Common 2.0.x to 2.1

## AnnotationReader changes

The annotation reader was heavily refactored between 2.0 and 2.1-RC1. In theory the operation of the new reader should be backwards compatible, but it has to be setup differently to work that way:

    \$reader = new \\Doctrine\\Common\\Annotations\\AnnotationReader();
    \$reader->setDefaultAnnotationNamespace('Doctrine\\ORM\\Mapping\\\\');
    // new code necessary starting here
    \$reader->setIgnoreNotImportedAnnotations(true);
    \$reader->setEnableParsePhpImports(false);
    \$reader = new \\Doctrine\\Common\\Annotations\\CachedReader(
        new \\Doctrine\\Common\\Annotations\\IndexedReader(\$reader), new ArrayCache()
    );

## Annotation Base class or @Annotation

Beginning after 2.1-RC2 you have to either extend ``Doctrine\\Common\\Annotations\\Annotation`` or add @Annotation to your annotations class-level docblock, otherwise the class will simply be ignored.

## Removed methods on AnnotationReader

* AnnotationReader::setAutoloadAnnotations()
* AnnotationReader::getAutoloadAnnotations()
* AnnotationReader::isAutoloadAnnotations()

## AnnotationRegistry

Autoloading through the PHP autoloader is removed from the 2.1 AnnotationReader. Instead you have to use the global AnnotationRegistry for loading purposes:

    \\Doctrine\\Common\\Annotations\\AnnotationRegistry::registerFile(\$fileWithAnnotations);
    \\Doctrine\\Common\\Annotations\\AnnotationRegistry::registerAutoloadNamespace(\$namespace, \$dirs = null);
    \\Doctrine\\Common\\Annotations\\AnnotationRegistry::registerAutoloadNamespaces(\$namespaces);
    \\Doctrine\\Common\\Annotations\\AnnotationRegistry::registerLoader(\$callable);

The \$callable for registering a loader accepts a class as first and only parameter and must try to silently autoload it. On success true has to be returned.
The registerAutoloadNamespace function registers a PSR-0 compatible silent autoloader for all classes with the given namespace in the given directories.
If null is passed as directory the include path will be used.

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/common/UPGRADE_TO_2_1";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("This document details all the possible changes that you should investigate when updating
your project from Doctrine Common 2.0.x to 2.1

## AnnotationReader changes

The annotation reader was heavily refactored between 2.0 and 2.1-RC1. In theory the operation of the new reader should be backwards compatible, but it has to be setup differently to work that way:

    \$reader = new \\Doctrine\\Common\\Annotations\\AnnotationReader();
    \$reader->setDefaultAnnotationNamespace('Doctrine\\ORM\\Mapping\\\\');
    // new code necessary starting here
    \$reader->setIgnoreNotImportedAnnotations(true);
    \$reader->setEnableParsePhpImports(false);
    \$reader = new \\Doctrine\\Common\\Annotations\\CachedReader(
        new \\Doctrine\\Common\\Annotations\\IndexedReader(\$reader), new ArrayCache()
    );

## Annotation Base class or @Annotation

Beginning after 2.1-RC2 you have to either extend ``Doctrine\\Common\\Annotations\\Annotation`` or add @Annotation to your annotations class-level docblock, otherwise the class will simply be ignored.

## Removed methods on AnnotationReader

* AnnotationReader::setAutoloadAnnotations()
* AnnotationReader::getAutoloadAnnotations()
* AnnotationReader::isAutoloadAnnotations()

## AnnotationRegistry

Autoloading through the PHP autoloader is removed from the 2.1 AnnotationReader. Instead you have to use the global AnnotationRegistry for loading purposes:

    \\Doctrine\\Common\\Annotations\\AnnotationRegistry::registerFile(\$fileWithAnnotations);
    \\Doctrine\\Common\\Annotations\\AnnotationRegistry::registerAutoloadNamespace(\$namespace, \$dirs = null);
    \\Doctrine\\Common\\Annotations\\AnnotationRegistry::registerAutoloadNamespaces(\$namespaces);
    \\Doctrine\\Common\\Annotations\\AnnotationRegistry::registerLoader(\$callable);

The \$callable for registering a loader accepts a class as first and only parameter and must try to silently autoload it. On success true has to be returned.
The registerAutoloadNamespace function registers a PSR-0 compatible silent autoloader for all classes with the given namespace in the given directories.
If null is passed as directory the include path will be used.

", "vendor/doctrine/common/UPGRADE_TO_2_1", "/var/www/public/DevLaon/templates/vendor/doctrine/common/UPGRADE_TO_2_1");
    }
}
