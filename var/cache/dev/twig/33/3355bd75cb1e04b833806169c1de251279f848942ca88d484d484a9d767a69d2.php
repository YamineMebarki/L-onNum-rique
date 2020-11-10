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

/* vendor/ocramius/proxy-manager/docs/access-interceptor-value-holder.md */
class __TwigTemplate_701f27957da5afa7f6a3bc12434e50ac02004f8d35282595773259def4c7a3fa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/docs/access-interceptor-value-holder.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/docs/access-interceptor-value-holder.md"));

        // line 1
        echo "---
title: Access Interceptor Value Holder Proxy
---

# Access Interceptor Value Holder Proxy

An access interceptor value holder is a smart reference proxy that allows you to dynamically
define logic to be executed before or after any of the wrapped object's methods
logic.

It wraps around a real instance of the object to be proxied, and can be useful for things like:

 * caching execution of slow and heavy methods
 * log method calls
 * debugging
 * event triggering
 * handling of orthogonal logic, and [AOP](http://en.wikipedia.org/wiki/Aspect-oriented_programming) in general

## Example

Here's an example of how you can create and use an access interceptor value holder:

```php
<?php

use ProxyManager\\Factory\\AccessInterceptorValueHolderFactory as Factory;

require_once __DIR__ . '/vendor/autoload.php';

class Foo
{
    public function doFoo()
    {
        echo \"Foo!\\n\";
    }
}

\$factory = new Factory();

\$proxy = \$factory->createProxy(
    new Foo(),
    ['doFoo' => function () { echo \"PreFoo!\\n\"; }],
    ['doFoo' => function () { echo \"PostFoo!\\n\"; }]
);

\$proxy->doFoo();
```

This send something like following to your output:

```
PreFoo!
Foo!
PostFoo!
```

## Implementing pre- and post- access interceptors

A proxy produced by the
[`ProxyManager\\Factory\\AccessInterceptorValueHolderFactory`](https://github.com/Ocramius/ProxyManager/blob/master/src/ProxyManager/Factory/AccessInterceptorValueHolderFactory.php)
implements the
[`ProxyManager\\Proxy\\AccessInterceptorValueHolderInterface`](https://github.com/Ocramius/ProxyManager/blob/master/src/ProxyManager/Proxy/AccessInterceptorValueHolderInterface.php).

Therefore, you can set an access interceptor callback by calling:

```php
\$proxy->setMethodPrefixInterceptor('methodName', function () { echo 'pre'; });
\$proxy->setMethodSuffixInterceptor('methodName', function () { echo 'post'; });
```

You can also listen to public properties access by attaching interceptors to `__get`, `__set`, `__isset` and `__unset`.

A prefix interceptor (executed before method logic) should have the following signature:

```php
/**
 * @var object \$proxy       the proxy that intercepted the method call
 * @var object \$instance    the wrapped instance within the proxy
 * @var string \$method      name of the called method
 * @var array  \$params      sorted array of parameters passed to the intercepted
 *                          method, indexed by parameter name
 * @var bool   \$returnEarly flag to tell the interceptor proxy to return early, returning
 *                          the interceptor's return value instead of executing the method logic
 *
 * @return mixed
 */
\$prefixInterceptor = function (\$proxy, \$instance, \$method, \$params, & \$returnEarly) {};
```

A suffix interceptor (executed after method logic) should have the following signature:

```php
/**
 * @var object \$proxy       the proxy that intercepted the method call
 * @var object \$instance    the wrapped instance within the proxy
 * @var string \$method      name of the called method
 * @var array  \$params      sorted array of parameters passed to the intercepted
 *                          method, indexed by parameter name
 * @var mixed  \$returnValue the return value of the intercepted method
 * @var bool   \$returnEarly flag to tell the proxy to return early, returning the interceptor's
 *                          return value instead of the value produced by the method
 *
 * @return mixed
 */
\$suffixInterceptor = function (\$proxy, \$instance, \$method, \$params, \$returnValue, & \$returnEarly) {};
```

## Known limitations

 * methods using `func_get_args()`, `func_get_arg()` and `func_num_arg()` will not function properly
   for parameters that are not part of the proxied object interface: use 
   [variadic arguments](http://php.net/manual/en/functions.arguments.php#functions.variable-arg-list)
   instead.

## Tuning performance for production

See [Tuning ProxyManager for Production](https://github.com/Ocramius/ProxyManager/blob/master/docs/tuning-for-production.md).
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/docs/access-interceptor-value-holder.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("---
title: Access Interceptor Value Holder Proxy
---

# Access Interceptor Value Holder Proxy

An access interceptor value holder is a smart reference proxy that allows you to dynamically
define logic to be executed before or after any of the wrapped object's methods
logic.

It wraps around a real instance of the object to be proxied, and can be useful for things like:

 * caching execution of slow and heavy methods
 * log method calls
 * debugging
 * event triggering
 * handling of orthogonal logic, and [AOP](http://en.wikipedia.org/wiki/Aspect-oriented_programming) in general

## Example

Here's an example of how you can create and use an access interceptor value holder:

```php
<?php

use ProxyManager\\Factory\\AccessInterceptorValueHolderFactory as Factory;

require_once __DIR__ . '/vendor/autoload.php';

class Foo
{
    public function doFoo()
    {
        echo \"Foo!\\n\";
    }
}

\$factory = new Factory();

\$proxy = \$factory->createProxy(
    new Foo(),
    ['doFoo' => function () { echo \"PreFoo!\\n\"; }],
    ['doFoo' => function () { echo \"PostFoo!\\n\"; }]
);

\$proxy->doFoo();
```

This send something like following to your output:

```
PreFoo!
Foo!
PostFoo!
```

## Implementing pre- and post- access interceptors

A proxy produced by the
[`ProxyManager\\Factory\\AccessInterceptorValueHolderFactory`](https://github.com/Ocramius/ProxyManager/blob/master/src/ProxyManager/Factory/AccessInterceptorValueHolderFactory.php)
implements the
[`ProxyManager\\Proxy\\AccessInterceptorValueHolderInterface`](https://github.com/Ocramius/ProxyManager/blob/master/src/ProxyManager/Proxy/AccessInterceptorValueHolderInterface.php).

Therefore, you can set an access interceptor callback by calling:

```php
\$proxy->setMethodPrefixInterceptor('methodName', function () { echo 'pre'; });
\$proxy->setMethodSuffixInterceptor('methodName', function () { echo 'post'; });
```

You can also listen to public properties access by attaching interceptors to `__get`, `__set`, `__isset` and `__unset`.

A prefix interceptor (executed before method logic) should have the following signature:

```php
/**
 * @var object \$proxy       the proxy that intercepted the method call
 * @var object \$instance    the wrapped instance within the proxy
 * @var string \$method      name of the called method
 * @var array  \$params      sorted array of parameters passed to the intercepted
 *                          method, indexed by parameter name
 * @var bool   \$returnEarly flag to tell the interceptor proxy to return early, returning
 *                          the interceptor's return value instead of executing the method logic
 *
 * @return mixed
 */
\$prefixInterceptor = function (\$proxy, \$instance, \$method, \$params, & \$returnEarly) {};
```

A suffix interceptor (executed after method logic) should have the following signature:

```php
/**
 * @var object \$proxy       the proxy that intercepted the method call
 * @var object \$instance    the wrapped instance within the proxy
 * @var string \$method      name of the called method
 * @var array  \$params      sorted array of parameters passed to the intercepted
 *                          method, indexed by parameter name
 * @var mixed  \$returnValue the return value of the intercepted method
 * @var bool   \$returnEarly flag to tell the proxy to return early, returning the interceptor's
 *                          return value instead of the value produced by the method
 *
 * @return mixed
 */
\$suffixInterceptor = function (\$proxy, \$instance, \$method, \$params, \$returnValue, & \$returnEarly) {};
```

## Known limitations

 * methods using `func_get_args()`, `func_get_arg()` and `func_num_arg()` will not function properly
   for parameters that are not part of the proxied object interface: use 
   [variadic arguments](http://php.net/manual/en/functions.arguments.php#functions.variable-arg-list)
   instead.

## Tuning performance for production

See [Tuning ProxyManager for Production](https://github.com/Ocramius/ProxyManager/blob/master/docs/tuning-for-production.md).
", "vendor/ocramius/proxy-manager/docs/access-interceptor-value-holder.md", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/docs/access-interceptor-value-holder.md");
    }
}
