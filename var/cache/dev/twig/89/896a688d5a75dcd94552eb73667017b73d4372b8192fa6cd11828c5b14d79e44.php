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

/* vendor/ocramius/proxy-manager/docs/access-interceptor-scope-localizer.md */
class __TwigTemplate_97064510cde7cc0be3c1e8c3200337655e60e1b62b774948fe082c4a7d3f0742 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/docs/access-interceptor-scope-localizer.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/docs/access-interceptor-scope-localizer.md"));

        // line 1
        echo "---
title: Access Interceptor Scope Localizer Proxy
---

# Access Interceptor Scope Localizer Proxy

An access interceptor scope localizer is a smart reference proxy that allows you to dynamically
define logic to be executed before or after any of the proxied object's methods' logic.

It works exactly like the [access interceptor value holder](access-interceptor-value-holder.md),
with some minor differences in behavior.

The working concept of an access interceptor scope localizer is to localize scope of a proxied object:

```php
class Example
{
    protected \$foo;
    protected \$bar;
    protected \$baz;

    public function doFoo()
    {
        // ...
    }
}

class ExampleProxy extends Example
{
    public function __construct(Example \$example)
    {
        \$this->foo = & \$example->foo;
        \$this->bar = & \$example->bar;
        \$this->baz = & \$example->baz;
    }

    public function doFoo()
    {
        return parent::doFoo();
    }
}
```

This allows to create a mirror copy of the real instance, where any change in the proxy or in the real
instance is reflected in both objects.

The main advantage of this approach is that the proxy is now safe against fluent interfaces, which
would break an [access interceptor value holder](access-interceptor-value-holder.md) instead.

## Differences with [access interceptor value holder](access-interceptor-value-holder.md):

 * It does **NOT** implement the `ProxyManager\\Proxy\\ValueHolderInterface`, since the proxy itself
   does not keep a reference to the original object being proxied
 * In all interceptor methods (see [access interceptor value holder](access-interceptor-value-holder.md)),
   the `\$instance` passed in is the proxy itself. There is no way  to gather a reference to the
   original object right now, and that's mainly to protect from misuse.

## Known limitations

 * It is **NOT** possible to intercept access to public properties
 * It is **NOT** possible to proxy interfaces, since this proxy relies on `parent::method()` calls.
   Interfaces obviously don't provide a parent method implementation.
 * calling `unset` on a property of an access interceptor scope localizer (or the real instance)
   will cause the two objects to be un-synchronized, with possible unexpected behaviour.
 * serializing or un-serializing an access interceptor scope localizer (or the real instance)
   will not cause the real instance (or the proxy) to be serialized or un-serialized
 * methods using `func_get_args()`, `func_get_arg()` and `func_num_arg()` will not function properly
   for parameters that are not part of the proxied object interface: use 
   [variadic arguments](http://php.net/manual/en/functions.arguments.php#functions.variable-arg-list)
   instead.

## Example

Here's an example of how you can create and use an access interceptor scope localizer :

```php
<?php

use ProxyManager\\Factory\\AccessInterceptorScopeLocalizerFactory as Factory;

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

This is pretty much the same logic that you can find
in [access interceptor value holder](access-interceptor-value-holder.md).
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/docs/access-interceptor-scope-localizer.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("---
title: Access Interceptor Scope Localizer Proxy
---

# Access Interceptor Scope Localizer Proxy

An access interceptor scope localizer is a smart reference proxy that allows you to dynamically
define logic to be executed before or after any of the proxied object's methods' logic.

It works exactly like the [access interceptor value holder](access-interceptor-value-holder.md),
with some minor differences in behavior.

The working concept of an access interceptor scope localizer is to localize scope of a proxied object:

```php
class Example
{
    protected \$foo;
    protected \$bar;
    protected \$baz;

    public function doFoo()
    {
        // ...
    }
}

class ExampleProxy extends Example
{
    public function __construct(Example \$example)
    {
        \$this->foo = & \$example->foo;
        \$this->bar = & \$example->bar;
        \$this->baz = & \$example->baz;
    }

    public function doFoo()
    {
        return parent::doFoo();
    }
}
```

This allows to create a mirror copy of the real instance, where any change in the proxy or in the real
instance is reflected in both objects.

The main advantage of this approach is that the proxy is now safe against fluent interfaces, which
would break an [access interceptor value holder](access-interceptor-value-holder.md) instead.

## Differences with [access interceptor value holder](access-interceptor-value-holder.md):

 * It does **NOT** implement the `ProxyManager\\Proxy\\ValueHolderInterface`, since the proxy itself
   does not keep a reference to the original object being proxied
 * In all interceptor methods (see [access interceptor value holder](access-interceptor-value-holder.md)),
   the `\$instance` passed in is the proxy itself. There is no way  to gather a reference to the
   original object right now, and that's mainly to protect from misuse.

## Known limitations

 * It is **NOT** possible to intercept access to public properties
 * It is **NOT** possible to proxy interfaces, since this proxy relies on `parent::method()` calls.
   Interfaces obviously don't provide a parent method implementation.
 * calling `unset` on a property of an access interceptor scope localizer (or the real instance)
   will cause the two objects to be un-synchronized, with possible unexpected behaviour.
 * serializing or un-serializing an access interceptor scope localizer (or the real instance)
   will not cause the real instance (or the proxy) to be serialized or un-serialized
 * methods using `func_get_args()`, `func_get_arg()` and `func_num_arg()` will not function properly
   for parameters that are not part of the proxied object interface: use 
   [variadic arguments](http://php.net/manual/en/functions.arguments.php#functions.variable-arg-list)
   instead.

## Example

Here's an example of how you can create and use an access interceptor scope localizer :

```php
<?php

use ProxyManager\\Factory\\AccessInterceptorScopeLocalizerFactory as Factory;

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

This is pretty much the same logic that you can find
in [access interceptor value holder](access-interceptor-value-holder.md).
", "vendor/ocramius/proxy-manager/docs/access-interceptor-scope-localizer.md", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/docs/access-interceptor-scope-localizer.md");
    }
}
