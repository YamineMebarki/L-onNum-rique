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

/* vendor/ocramius/proxy-manager/docs/tuning-for-production.md */
class __TwigTemplate_f59157140adc151858a055f5899ab12804aa85dcaf99528571c413fd7ddfa46e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/docs/tuning-for-production.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/docs/tuning-for-production.md"));

        // line 1
        echo "---
title: Tuning the ProxyManager for production
---

## Tuning the ProxyManager for production

By default, all proxy factories generate the required proxy classes at runtime.

Proxy generation causes I/O operations and uses a lot of reflection, so be sure to have
generated all of your proxies **before deploying your code on a live system**, or you
may experience poor performance.

You can configure ProxyManager so that it will try autoloading the proxies first.
Generating them \"bulk\" is not yet implemented:

```php
\$config = new \\ProxyManager\\Configuration();
\$config->setProxiesTargetDir(__DIR__ . '/my/generated/classes/cache/dir');

// then register the autoloader
spl_autoload_register(\$config->getProxyAutoloader());
```

Generating a classmap with all your proxy classes in it will also work perfectly.

Please note that all the currently implemented `ProxyManager\\Factory\\*` classes accept
a `ProxyManager\\Configuration` object as optional constructor parameter. This allows for
fine-tuning of ProxyManager according to your needs.
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/docs/tuning-for-production.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("---
title: Tuning the ProxyManager for production
---

## Tuning the ProxyManager for production

By default, all proxy factories generate the required proxy classes at runtime.

Proxy generation causes I/O operations and uses a lot of reflection, so be sure to have
generated all of your proxies **before deploying your code on a live system**, or you
may experience poor performance.

You can configure ProxyManager so that it will try autoloading the proxies first.
Generating them \"bulk\" is not yet implemented:

```php
\$config = new \\ProxyManager\\Configuration();
\$config->setProxiesTargetDir(__DIR__ . '/my/generated/classes/cache/dir');

// then register the autoloader
spl_autoload_register(\$config->getProxyAutoloader());
```

Generating a classmap with all your proxy classes in it will also work perfectly.

Please note that all the currently implemented `ProxyManager\\Factory\\*` classes accept
a `ProxyManager\\Configuration` object as optional constructor parameter. This allows for
fine-tuning of ProxyManager according to your needs.
", "vendor/ocramius/proxy-manager/docs/tuning-for-production.md", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/docs/tuning-for-production.md");
    }
}
