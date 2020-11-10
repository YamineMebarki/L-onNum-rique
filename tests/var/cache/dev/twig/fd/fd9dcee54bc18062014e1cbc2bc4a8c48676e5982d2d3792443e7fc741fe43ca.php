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

/* vendor/ocramius/proxy-manager/README.md */
class __TwigTemplate_7535a93e7fe5b40e67b204a1f44a739a1cf197679225b31e6f0dfb2242758b8d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/README.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/README.md"));

        // line 1
        echo "# Proxy Manager

This library aims at providing abstraction for generating various kinds of [proxy classes](http://ocramius.github.io/presentations/proxy-pattern-in-php/).

![ProxyManager](https://raw.githubusercontent.com/Ocramius/ProxyManager/917bf1698243a1079aaa27ed8ea08c2aef09f4cb/proxy-manager.png)

[![Build Status](https://travis-ci.org/Ocramius/ProxyManager.png?branch=master)](https://travis-ci.org/Ocramius/ProxyManager)
[![Code Coverage](https://scrutinizer-ci.com/g/Ocramius/ProxyManager/badges/coverage.png?s=ca3b9ceb9e36aeec0e57569cc8983394b7d2a59e)](https://scrutinizer-ci.com/g/Ocramius/ProxyManager/)
[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/Ocramius/ProxyManager/badges/quality-score.png?s=eaa858f876137ed281141b1d1e98acfa739729ed)](https://scrutinizer-ci.com/g/Ocramius/ProxyManager/)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/69fe5f97-b1c8-4ddd-93ce-900b8b788cf2/mini.png)](https://insight.sensiolabs.com/projects/69fe5f97-b1c8-4ddd-93ce-900b8b788cf2)
[![Dependency Status](https://www.versioneye.com/package/php--ocramius--proxy-manager/badge.png)](https://www.versioneye.com/package/php--ocramius--proxy-manager)
[![Reference Status](https://www.versioneye.com/php/ocramius:proxy-manager/reference_badge.svg)](https://www.versioneye.com/php/ocramius:proxy-manager/references)

[![Total Downloads](https://poser.pugx.org/ocramius/proxy-manager/downloads.png)](https://packagist.org/packages/ocramius/proxy-manager)
[![Latest Stable Version](https://poser.pugx.org/ocramius/proxy-manager/v/stable.png)](https://packagist.org/packages/ocramius/proxy-manager)
[![Latest Unstable Version](https://poser.pugx.org/ocramius/proxy-manager/v/unstable.png)](https://packagist.org/packages/ocramius/proxy-manager)


## Documentation

You can learn about the proxy pattern and how to use the **ProxyManager** in the [docs](docs), which are also
[compiled to HTML](http://ocramius.github.io/ProxyManager).

## Help/Support

[![Gitter](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/Ocramius/ProxyManager?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge)

## Installation

The suggested installation method is via [composer](https://getcomposer.org/):

```sh
php composer.phar require ocramius/proxy-manager
```

## Proxy example

Here's how you build a lazy loadable object with ProxyManager using a *Virtual Proxy*

```php
\$factory = new \\ProxyManager\\Factory\\LazyLoadingValueHolderFactory();

\$proxy = \$factory->createProxy(
    \\MyApp\\HeavyComplexObject::class,
    function (& \$wrappedObject, \$proxy, \$method, \$parameters, & \$initializer) {
        \$wrappedObject = new \\MyApp\\HeavyComplexObject(); // instantiation logic here
        \$initializer   = null; // turning off further lazy initialization
    }
);

\$proxy->doFoo();
```

See the [online documentation](http://ocramius.github.io/ProxyManager) for more supported proxy types and examples. 
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/README.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("# Proxy Manager

This library aims at providing abstraction for generating various kinds of [proxy classes](http://ocramius.github.io/presentations/proxy-pattern-in-php/).

![ProxyManager](https://raw.githubusercontent.com/Ocramius/ProxyManager/917bf1698243a1079aaa27ed8ea08c2aef09f4cb/proxy-manager.png)

[![Build Status](https://travis-ci.org/Ocramius/ProxyManager.png?branch=master)](https://travis-ci.org/Ocramius/ProxyManager)
[![Code Coverage](https://scrutinizer-ci.com/g/Ocramius/ProxyManager/badges/coverage.png?s=ca3b9ceb9e36aeec0e57569cc8983394b7d2a59e)](https://scrutinizer-ci.com/g/Ocramius/ProxyManager/)
[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/Ocramius/ProxyManager/badges/quality-score.png?s=eaa858f876137ed281141b1d1e98acfa739729ed)](https://scrutinizer-ci.com/g/Ocramius/ProxyManager/)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/69fe5f97-b1c8-4ddd-93ce-900b8b788cf2/mini.png)](https://insight.sensiolabs.com/projects/69fe5f97-b1c8-4ddd-93ce-900b8b788cf2)
[![Dependency Status](https://www.versioneye.com/package/php--ocramius--proxy-manager/badge.png)](https://www.versioneye.com/package/php--ocramius--proxy-manager)
[![Reference Status](https://www.versioneye.com/php/ocramius:proxy-manager/reference_badge.svg)](https://www.versioneye.com/php/ocramius:proxy-manager/references)

[![Total Downloads](https://poser.pugx.org/ocramius/proxy-manager/downloads.png)](https://packagist.org/packages/ocramius/proxy-manager)
[![Latest Stable Version](https://poser.pugx.org/ocramius/proxy-manager/v/stable.png)](https://packagist.org/packages/ocramius/proxy-manager)
[![Latest Unstable Version](https://poser.pugx.org/ocramius/proxy-manager/v/unstable.png)](https://packagist.org/packages/ocramius/proxy-manager)


## Documentation

You can learn about the proxy pattern and how to use the **ProxyManager** in the [docs](docs), which are also
[compiled to HTML](http://ocramius.github.io/ProxyManager).

## Help/Support

[![Gitter](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/Ocramius/ProxyManager?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge)

## Installation

The suggested installation method is via [composer](https://getcomposer.org/):

```sh
php composer.phar require ocramius/proxy-manager
```

## Proxy example

Here's how you build a lazy loadable object with ProxyManager using a *Virtual Proxy*

```php
\$factory = new \\ProxyManager\\Factory\\LazyLoadingValueHolderFactory();

\$proxy = \$factory->createProxy(
    \\MyApp\\HeavyComplexObject::class,
    function (& \$wrappedObject, \$proxy, \$method, \$parameters, & \$initializer) {
        \$wrappedObject = new \\MyApp\\HeavyComplexObject(); // instantiation logic here
        \$initializer   = null; // turning off further lazy initialization
    }
);

\$proxy->doFoo();
```

See the [online documentation](http://ocramius.github.io/ProxyManager) for more supported proxy types and examples. 
", "vendor/ocramius/proxy-manager/README.md", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/README.md");
    }
}
