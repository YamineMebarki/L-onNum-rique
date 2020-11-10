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

/* vendor/ocramius/proxy-manager/docs/lazy-loading-value-holder.md */
class __TwigTemplate_c886ead1424e63be45ad5137ef8b99d3174a7867b5e5655270bf6017ec79a8b6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/docs/lazy-loading-value-holder.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/docs/lazy-loading-value-holder.md"));

        // line 1
        echo "---
title: Lazy Loading Value Holder Proxy
---

# Lazy Loading Value Holder Proxy

A lazy loading value holder proxy is a virtual proxy that wraps and lazily initializes a \"real\" instance of the proxied
class.

## What is lazy loading?

In pseudo-code, in userland, [lazy loading](http://www.martinfowler.com/eaaCatalog/lazyLoad.html) looks like following:

```php
class MyObjectProxy
{
    private \$wrapped;

    public function doFoo()
    {
        \$this->init();

        return \$this->wrapped->doFoo();
    }

    private function init()
    {
        if (null === \$this->wrapped) {
            \$this->wrapped = new MyObject();
        }
    }
}
```

This code is problematic, and adds a lot of complexity that makes your unit tests' code even worse.

Also, this kind of usage often ends up in coupling your code with a particular
[Dependency Injection Container](http://martinfowler.com/articles/injection.html)
or a framework that fetches dependencies for you.
That way, further complexity is introduced, and some problems related
with service location raise, as I've explained
[in this article](http://ocramius.github.com/blog/zf2-and-symfony-service-proxies-with-doctrine-proxies/).

Lazy loading value holders abstract this logic for you, hiding your complex, slow, performance-impacting objects behind
tiny wrappers that have their same API, and that get initialized at first usage.

## When do I use a lazy value holder?

You usually need a lazy value holder in cases where following applies

 * your object takes a lot of time and memory to be initialized (with all dependencies)
 * your object is not always used, and the instantiation overhead can be avoided

## Usage examples

[ProxyManager](https://github.com/Ocramius/ProxyManager) provides a factory that eases instantiation of lazy loading
value holders. To use it, follow these steps:

First of all, define your object's logic without taking care of lazy loading:

```php
namespace MyApp;

class HeavyComplexObject
{
    public function __construct()
    {
        // just write your business logic
        // don't worry about how heavy initialization of this will be!
    }

    public function doFoo() {
        echo 'OK!';
    }
}
```

Then use the proxy manager to create a lazy version of the object (as a proxy):

```php
namespace MyApp;

use ProxyManager\\Factory\\LazyLoadingValueHolderFactory;
use ProxyManager\\Proxy\\LazyLoadingInterface;

require_once __DIR__ . '/vendor/autoload.php';

\$factory     = new LazyLoadingValueHolderFactory();
\$initializer = function (& \$wrappedObject, LazyLoadingInterface \$proxy, \$method, array \$parameters, & \$initializer) {
    \$initializer   = null; // disable initialization
    \$wrappedObject = new HeavyComplexObject(); // fill your object with values here

    return true; // confirm that initialization occurred correctly
};

\$proxy = \$factory->createProxy('MyApp\\HeavyComplexObject', \$initializer);
```

You can now simply use your object as before:

```php
// this will just work as before
\$proxy->doFoo(); // OK!
```

## Lazy Initialization

As you can see, we use a closure to handle lazy initialization of the proxy instance at runtime.
The initializer closure signature should be as following:

```php
/**
 * @var object  \$wrappedObject the instance (passed by reference) of the wrapped object,
 *                             set it to your real object
 * @var object  \$proxy         the instance proxy that is being initialized
 * @var string  \$method        the name of the method that triggered lazy initialization
 * @var array   \$parameters    an ordered list of parameters passed to the method that
 *                             triggered initialization, indexed by parameter name
 * @var Closure \$initializer   a reference to the property that is the initializer for the
 *                             proxy. Set it to null to disable further initialization
 *
 * @return bool true on success
 */
\$initializer = function (& \$wrappedObject, \$proxy, \$method, array \$parameters, & \$initializer) {};
```

The initializer closure should usually be coded like following:

```php
\$initializer = function (& \$wrappedObject, \$proxy, \$method, array \$parameters, & \$initializer) {
    \$newlyCreatedObject = new Foo(); // instantiation logic
    \$newlyCreatedObject->setBar('baz') // instantiation logic
    \$newlyCreatedObject->setBat('bam') // instantiation logic

    \$wrappedObject = \$newlyCreatedObject; // set wrapped object in the proxy
    \$initializer   = null; // disable initializer

    return true; // report success
};
```

The
[`ProxyManager\\Factory\\LazyLoadingValueHolderFactory`](https://github.com/Ocramius/ProxyManager/blob/master/src/ProxyManager/Factory/LazyLoadingValueHolderFactory.php)
produces proxies that implement both the
[`ProxyManager\\Proxy\\ValueHolderInterface`](https://github.com/Ocramius/ProxyManager/blob/master/src/ProxyManager/Proxy/ValueHolderInterface.php)
and the
[`ProxyManager\\Proxy\\LazyLoadingInterface`](https://github.com/Ocramius/ProxyManager/blob/master/src/ProxyManager/Proxy/LazyLoadingInterface.php).

At any point in time, you can set a new initializer for the proxy:

```php
\$proxy->setProxyInitializer(\$initializer);
```

In your initializer, you currently **MUST** turn off any further initialization:

```php
\$proxy->setProxyInitializer(null);
```

or

```php
\$initializer = null; // if you use the initializer by reference
```

## Triggering Initialization

A lazy loading proxy is initialized whenever you access any property or method of it.
Any of the following interactions would trigger lazy initialization:

```php
// calling a method
\$proxy->someMethod();

// reading a property
echo \$proxy->someProperty;

// writing a property
\$proxy->someProperty = 'foo';

// checking for existence of a property
isset(\$proxy->someProperty);

// removing a property
unset(\$proxy->someProperty);

// cloning the entire proxy
clone \$proxy;

// serializing the proxy
\$unserialized = serialize(unserialize(\$proxy));
```

Remember to call `\$proxy->setProxyInitializer(null);` to disable initialization of your proxy, or it will happen more
than once.

## Proxying interfaces

You can also generate proxies from an interface FQCN. By proxying an interface, you will only be able to access the
methods defined by the interface itself, even if the `wrappedObject` implements more methods. This will anyway save
some memory since the proxy won't contain useless inherited properties.

## Known limitations

 * methods using `func_get_args()`, `func_get_arg()` and `func_num_arg()` will not function properly
   for parameters that are not part of the proxied object interface: use 
   [variadic arguments](http://php.net/manual/en/functions.arguments.php#functions.variable-arg-list)
   instead.

## Tuning performance for production

See [Tuning ProxyManager for Production](tuning-for-production.md).
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/docs/lazy-loading-value-holder.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("---
title: Lazy Loading Value Holder Proxy
---

# Lazy Loading Value Holder Proxy

A lazy loading value holder proxy is a virtual proxy that wraps and lazily initializes a \"real\" instance of the proxied
class.

## What is lazy loading?

In pseudo-code, in userland, [lazy loading](http://www.martinfowler.com/eaaCatalog/lazyLoad.html) looks like following:

```php
class MyObjectProxy
{
    private \$wrapped;

    public function doFoo()
    {
        \$this->init();

        return \$this->wrapped->doFoo();
    }

    private function init()
    {
        if (null === \$this->wrapped) {
            \$this->wrapped = new MyObject();
        }
    }
}
```

This code is problematic, and adds a lot of complexity that makes your unit tests' code even worse.

Also, this kind of usage often ends up in coupling your code with a particular
[Dependency Injection Container](http://martinfowler.com/articles/injection.html)
or a framework that fetches dependencies for you.
That way, further complexity is introduced, and some problems related
with service location raise, as I've explained
[in this article](http://ocramius.github.com/blog/zf2-and-symfony-service-proxies-with-doctrine-proxies/).

Lazy loading value holders abstract this logic for you, hiding your complex, slow, performance-impacting objects behind
tiny wrappers that have their same API, and that get initialized at first usage.

## When do I use a lazy value holder?

You usually need a lazy value holder in cases where following applies

 * your object takes a lot of time and memory to be initialized (with all dependencies)
 * your object is not always used, and the instantiation overhead can be avoided

## Usage examples

[ProxyManager](https://github.com/Ocramius/ProxyManager) provides a factory that eases instantiation of lazy loading
value holders. To use it, follow these steps:

First of all, define your object's logic without taking care of lazy loading:

```php
namespace MyApp;

class HeavyComplexObject
{
    public function __construct()
    {
        // just write your business logic
        // don't worry about how heavy initialization of this will be!
    }

    public function doFoo() {
        echo 'OK!';
    }
}
```

Then use the proxy manager to create a lazy version of the object (as a proxy):

```php
namespace MyApp;

use ProxyManager\\Factory\\LazyLoadingValueHolderFactory;
use ProxyManager\\Proxy\\LazyLoadingInterface;

require_once __DIR__ . '/vendor/autoload.php';

\$factory     = new LazyLoadingValueHolderFactory();
\$initializer = function (& \$wrappedObject, LazyLoadingInterface \$proxy, \$method, array \$parameters, & \$initializer) {
    \$initializer   = null; // disable initialization
    \$wrappedObject = new HeavyComplexObject(); // fill your object with values here

    return true; // confirm that initialization occurred correctly
};

\$proxy = \$factory->createProxy('MyApp\\HeavyComplexObject', \$initializer);
```

You can now simply use your object as before:

```php
// this will just work as before
\$proxy->doFoo(); // OK!
```

## Lazy Initialization

As you can see, we use a closure to handle lazy initialization of the proxy instance at runtime.
The initializer closure signature should be as following:

```php
/**
 * @var object  \$wrappedObject the instance (passed by reference) of the wrapped object,
 *                             set it to your real object
 * @var object  \$proxy         the instance proxy that is being initialized
 * @var string  \$method        the name of the method that triggered lazy initialization
 * @var array   \$parameters    an ordered list of parameters passed to the method that
 *                             triggered initialization, indexed by parameter name
 * @var Closure \$initializer   a reference to the property that is the initializer for the
 *                             proxy. Set it to null to disable further initialization
 *
 * @return bool true on success
 */
\$initializer = function (& \$wrappedObject, \$proxy, \$method, array \$parameters, & \$initializer) {};
```

The initializer closure should usually be coded like following:

```php
\$initializer = function (& \$wrappedObject, \$proxy, \$method, array \$parameters, & \$initializer) {
    \$newlyCreatedObject = new Foo(); // instantiation logic
    \$newlyCreatedObject->setBar('baz') // instantiation logic
    \$newlyCreatedObject->setBat('bam') // instantiation logic

    \$wrappedObject = \$newlyCreatedObject; // set wrapped object in the proxy
    \$initializer   = null; // disable initializer

    return true; // report success
};
```

The
[`ProxyManager\\Factory\\LazyLoadingValueHolderFactory`](https://github.com/Ocramius/ProxyManager/blob/master/src/ProxyManager/Factory/LazyLoadingValueHolderFactory.php)
produces proxies that implement both the
[`ProxyManager\\Proxy\\ValueHolderInterface`](https://github.com/Ocramius/ProxyManager/blob/master/src/ProxyManager/Proxy/ValueHolderInterface.php)
and the
[`ProxyManager\\Proxy\\LazyLoadingInterface`](https://github.com/Ocramius/ProxyManager/blob/master/src/ProxyManager/Proxy/LazyLoadingInterface.php).

At any point in time, you can set a new initializer for the proxy:

```php
\$proxy->setProxyInitializer(\$initializer);
```

In your initializer, you currently **MUST** turn off any further initialization:

```php
\$proxy->setProxyInitializer(null);
```

or

```php
\$initializer = null; // if you use the initializer by reference
```

## Triggering Initialization

A lazy loading proxy is initialized whenever you access any property or method of it.
Any of the following interactions would trigger lazy initialization:

```php
// calling a method
\$proxy->someMethod();

// reading a property
echo \$proxy->someProperty;

// writing a property
\$proxy->someProperty = 'foo';

// checking for existence of a property
isset(\$proxy->someProperty);

// removing a property
unset(\$proxy->someProperty);

// cloning the entire proxy
clone \$proxy;

// serializing the proxy
\$unserialized = serialize(unserialize(\$proxy));
```

Remember to call `\$proxy->setProxyInitializer(null);` to disable initialization of your proxy, or it will happen more
than once.

## Proxying interfaces

You can also generate proxies from an interface FQCN. By proxying an interface, you will only be able to access the
methods defined by the interface itself, even if the `wrappedObject` implements more methods. This will anyway save
some memory since the proxy won't contain useless inherited properties.

## Known limitations

 * methods using `func_get_args()`, `func_get_arg()` and `func_num_arg()` will not function properly
   for parameters that are not part of the proxied object interface: use 
   [variadic arguments](http://php.net/manual/en/functions.arguments.php#functions.variable-arg-list)
   instead.

## Tuning performance for production

See [Tuning ProxyManager for Production](tuning-for-production.md).
", "vendor/ocramius/proxy-manager/docs/lazy-loading-value-holder.md", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/docs/lazy-loading-value-holder.md");
    }
}
