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

/* vendor/doctrine/common/UPGRADE_TO_2_2 */
class __TwigTemplate_80a64aa24397a8b3eaa88f2492c28110a912b2fa7b8a2adf23e4b8a47d3597f1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/common/UPGRADE_TO_2_2"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/common/UPGRADE_TO_2_2"));

        // line 1
        echo "This document details all the possible changes that you should investigate when 
updating your project from Doctrine Common 2.1 to 2.2:

## Annotation Changes

- AnnotationReader::setIgnoreNotImportedAnnotations has been removed, you need to 
  add ignore annotation names which are supposed to be ignored via
  AnnotationReader::addGlobalIgnoredName
  
- AnnotationReader::setAutoloadAnnotations was deprecated by the AnnotationRegistry
  in 2.1 and has been removed in 2.2

- AnnotationReader::setEnableParsePhpImports was added to ease transition to the new
  annotation mechanism in 2.1 and is removed in 2.2

- AnnotationReader::isParsePhpImportsEnabled is removed (see above)

- AnnotationReader::setDefaultAnnotationNamespace was deprecated in favor of explicit
  configuration in 2.1 and will be removed in 2.2 (for isolated projects where you
  have full-control over _all_ available annotations, we offer a dedicated reader
  class ``SimpleAnnotationReader``)

- AnnotationReader::setAnnotationCreationFunction was deprecated in 2.1 and will be
  removed in 2.2. We only offer two creation mechanisms which cannot be changed
  anymore to allow the same reader instance to work with all annotations regardless
  of which library they are coming from.
  
- AnnotationReader::setAnnotationNamespaceAlias was deprecated in 2.1 and will be
  removed in 2.2 (see setDefaultAnnotationNamespace)

- If you use a class as annotation which has not the @Annotation marker in it's 
  class block, we will now throw an exception instead of silently ignoring it. You
  can however still achieve the previous behavior using the @IgnoreAnnotation, or
  AnnotationReader::addGlobalIgnoredName (the exception message will contain detailed
  instructions when you run into this problem).

## Cache Changes
  
- Renamed old AbstractCache to CacheProvider

- Dropped the support to the following functions of all cache providers:

 - CacheProvider::deleteByWildcard

 - CacheProvider::deleteByRegEx

 - CacheProvider::deleteByPrefix

 - CacheProvider::deleteBySuffix

- CacheProvider::deleteAll will not remove ALL entries, it will only mark them as invalid

- CacheProvider::flushAll will remove ALL entries, namespaced or not

- Added support to MemcachedCache

- Added support to WincacheCache

## ClassLoader Changes

- ClassLoader::fileExistsInIncludePath() no longer exists. Use the native stream_resolve_include_path() PHP function";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/common/UPGRADE_TO_2_2";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("This document details all the possible changes that you should investigate when 
updating your project from Doctrine Common 2.1 to 2.2:

## Annotation Changes

- AnnotationReader::setIgnoreNotImportedAnnotations has been removed, you need to 
  add ignore annotation names which are supposed to be ignored via
  AnnotationReader::addGlobalIgnoredName
  
- AnnotationReader::setAutoloadAnnotations was deprecated by the AnnotationRegistry
  in 2.1 and has been removed in 2.2

- AnnotationReader::setEnableParsePhpImports was added to ease transition to the new
  annotation mechanism in 2.1 and is removed in 2.2

- AnnotationReader::isParsePhpImportsEnabled is removed (see above)

- AnnotationReader::setDefaultAnnotationNamespace was deprecated in favor of explicit
  configuration in 2.1 and will be removed in 2.2 (for isolated projects where you
  have full-control over _all_ available annotations, we offer a dedicated reader
  class ``SimpleAnnotationReader``)

- AnnotationReader::setAnnotationCreationFunction was deprecated in 2.1 and will be
  removed in 2.2. We only offer two creation mechanisms which cannot be changed
  anymore to allow the same reader instance to work with all annotations regardless
  of which library they are coming from.
  
- AnnotationReader::setAnnotationNamespaceAlias was deprecated in 2.1 and will be
  removed in 2.2 (see setDefaultAnnotationNamespace)

- If you use a class as annotation which has not the @Annotation marker in it's 
  class block, we will now throw an exception instead of silently ignoring it. You
  can however still achieve the previous behavior using the @IgnoreAnnotation, or
  AnnotationReader::addGlobalIgnoredName (the exception message will contain detailed
  instructions when you run into this problem).

## Cache Changes
  
- Renamed old AbstractCache to CacheProvider

- Dropped the support to the following functions of all cache providers:

 - CacheProvider::deleteByWildcard

 - CacheProvider::deleteByRegEx

 - CacheProvider::deleteByPrefix

 - CacheProvider::deleteBySuffix

- CacheProvider::deleteAll will not remove ALL entries, it will only mark them as invalid

- CacheProvider::flushAll will remove ALL entries, namespaced or not

- Added support to MemcachedCache

- Added support to WincacheCache

## ClassLoader Changes

- ClassLoader::fileExistsInIncludePath() no longer exists. Use the native stream_resolve_include_path() PHP function", "vendor/doctrine/common/UPGRADE_TO_2_2", "/var/www/public/DevLaon/templates/vendor/doctrine/common/UPGRADE_TO_2_2");
    }
}
