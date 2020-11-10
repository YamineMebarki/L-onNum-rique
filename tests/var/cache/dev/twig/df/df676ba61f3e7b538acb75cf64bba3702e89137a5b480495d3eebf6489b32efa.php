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

/* vendor/phpdocumentor/reflection-docblock/README.md */
class __TwigTemplate_436d0b833e099ee4468c0742b1808d6effcbe5a1a44d143a467040fac0a2bd15 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/README.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/phpdocumentor/reflection-docblock/README.md"));

        // line 1
        echo "The ReflectionDocBlock Component [![Build Status](https://secure.travis-ci.org/phpDocumentor/ReflectionDocBlock.png)](https://travis-ci.org/phpDocumentor/ReflectionDocBlock)
================================

Introduction
------------

The ReflectionDocBlock component of phpDocumentor provides a DocBlock parser
that is 100% compatible with the [PHPDoc standard](http://phpdoc.org/docs/latest).

With this component, a library can provide support for annotations via DocBlocks
or otherwise retrieve information that is embedded in a DocBlock.

Installation
------------

```bash
composer require phpdocumentor/reflection-docblock
```

Usage
-----

In order to parse the DocBlock one needs a DocBlockFactory that can be
instantiated using its `createInstance` factory method like this:

```php
\$factory  = \\phpDocumentor\\Reflection\\DocBlockFactory::createInstance();
```

Then we can use the `create` method of the factory to interpret the DocBlock. 
Please note that it is also possible to provide a class that has the 
`getDocComment()` method, such as an object of type `ReflectionClass`, the
create method will read that if it exists.

```php
\$docComment = <<<DOCCOMMENT
/**
 * This is an example of a summary.
 *
 * This is a Description. A Summary and Description are separated by either
 * two subsequent newlines (thus a whiteline in between as can be seen in this
 * example), or when the Summary ends with a dot (`.`) and some form of
 * whitespace.
 */
DOCCOMMENT;

\$docblock = \$factory->create(\$docComment);
```

The `create` method will yield an object of type `\\phpDocumentor\\Reflection\\DocBlock`
whose methods can be queried:

```php
// Contains the summary for this DocBlock
\$summary = \$docblock->getSummary();

// Contains \\phpDocumentor\\Reflection\\DocBlock\\Description object
\$description = \$docblock->getDescription();

// You can either cast it to string
\$description = (string) \$docblock->getDescription();

// Or use the render method to get a string representation of the Description.
\$description = \$docblock->getDescription()->render();
```

> For more examples it would be best to review the scripts in the [`/examples` folder](/examples).
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/phpdocumentor/reflection-docblock/README.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("The ReflectionDocBlock Component [![Build Status](https://secure.travis-ci.org/phpDocumentor/ReflectionDocBlock.png)](https://travis-ci.org/phpDocumentor/ReflectionDocBlock)
================================

Introduction
------------

The ReflectionDocBlock component of phpDocumentor provides a DocBlock parser
that is 100% compatible with the [PHPDoc standard](http://phpdoc.org/docs/latest).

With this component, a library can provide support for annotations via DocBlocks
or otherwise retrieve information that is embedded in a DocBlock.

Installation
------------

```bash
composer require phpdocumentor/reflection-docblock
```

Usage
-----

In order to parse the DocBlock one needs a DocBlockFactory that can be
instantiated using its `createInstance` factory method like this:

```php
\$factory  = \\phpDocumentor\\Reflection\\DocBlockFactory::createInstance();
```

Then we can use the `create` method of the factory to interpret the DocBlock. 
Please note that it is also possible to provide a class that has the 
`getDocComment()` method, such as an object of type `ReflectionClass`, the
create method will read that if it exists.

```php
\$docComment = <<<DOCCOMMENT
/**
 * This is an example of a summary.
 *
 * This is a Description. A Summary and Description are separated by either
 * two subsequent newlines (thus a whiteline in between as can be seen in this
 * example), or when the Summary ends with a dot (`.`) and some form of
 * whitespace.
 */
DOCCOMMENT;

\$docblock = \$factory->create(\$docComment);
```

The `create` method will yield an object of type `\\phpDocumentor\\Reflection\\DocBlock`
whose methods can be queried:

```php
// Contains the summary for this DocBlock
\$summary = \$docblock->getSummary();

// Contains \\phpDocumentor\\Reflection\\DocBlock\\Description object
\$description = \$docblock->getDescription();

// You can either cast it to string
\$description = (string) \$docblock->getDescription();

// Or use the render method to get a string representation of the Description.
\$description = \$docblock->getDescription()->render();
```

> For more examples it would be best to review the scripts in the [`/examples` folder](/examples).
", "vendor/phpdocumentor/reflection-docblock/README.md", "/var/www/public/DevLaon/templates/vendor/phpdocumentor/reflection-docblock/README.md");
    }
}
