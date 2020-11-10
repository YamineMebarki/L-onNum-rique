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

/* vendor/ocramius/proxy-manager/docs/null-object.md */
class __TwigTemplate_0731ac95f8229a6eb64f24419ba2f83794b132c35ecb635a65b7cfc5a77f8dc3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/docs/null-object.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/ocramius/proxy-manager/docs/null-object.md"));

        // line 1
        echo "---
title: Null Object Proxy
---

# Null Object Proxy

A Null Object proxy is a [null object pattern](http://en.wikipedia.org/wiki/Null_Object_pattern) implementation.
The proxy factory creates a new object with defined neutral behavior based on an other object, class name or interface.

## What is null object proxy ?

In your application, when you can't return the object related to the request, the consumer of the model must check 
for the return value and handle the failing condition gracefully, thus generating an explosion of conditionals throughout your code.
Fortunately, this seemingly-tangled situation can be sorted out simply by creating a polymorphic implementation of the 
domain object, which would implement the same interface as the one of the object in question, only that its methods 
wouldn't do anything, therefore offloading client code from doing repetitive checks for ugly null values when the operation
 is executed.

## Usage examples

```php
class UserMapper
{   
    private \$adapter;
    
    public function __construct(DatabaseAdapterInterface \$adapter) {
        \$this->adapter = \$adapter;
    }

    public function fetchById(\$id) {
        \$this->adapter->select('users', ['id' => \$id]);
        
        if (!\$row = \$this->adapter->fetch()) {
            return null;
        }
        
        return \$this->createUser(\$row);
    }
     
    private function createUser(array \$row) {
        \$user = new Entity\\User(\$row['name'], \$row['email']);
        
        \$user->setId(\$row['id']);
        
        return \$user;
    }
}
```

If you want to remove conditionals from client code, you need to have a version of the entity conforming to the corresponding 
interface. With the Null Object Proxy, you can build this object :

```php
\$factory = new \\ProxyManager\\Factory\\NullObjectFactory();

\$nullUser = \$factory->createProxy('Entity\\User');

var_dump(\$nullUser->getName()); // empty return
```

You can now return a valid entity :

```php
class UserMapper
{   
    private \$adapter;
    
    public function __construct(DatabaseAdapterInterface \$adapter) {
        \$this->adapter = \$adapter;
    }

    public function fetchById(\$id) {
        \$this->adapter->select('users', ['id' => \$id]);
        
        return \$this->createUser(\$this->adapter->fetch());
    }
     
    private function createUser(\$row) {
        if (!\$row) {
            \$factory = new \\ProxyManager\\Factory\\NullObjectFactory();

            return \$factory->createProxy('Entity\\User');
        }
        
        \$user = new Entity\\User(\$row['name'], \$row['email']);
        
        \$user->setId(\$row['id']);
        
        return \$user; 
    }
}
```

## Proxying interfaces

You can also generate proxies from an interface FQCN. By proxying an interface, you will only be able to access the
methods defined by the interface itself, and like with the object, the methods are empty.

## Tuning performance for production

See [Tuning ProxyManager for Production](tuning-for-production.md).
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/ocramius/proxy-manager/docs/null-object.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("---
title: Null Object Proxy
---

# Null Object Proxy

A Null Object proxy is a [null object pattern](http://en.wikipedia.org/wiki/Null_Object_pattern) implementation.
The proxy factory creates a new object with defined neutral behavior based on an other object, class name or interface.

## What is null object proxy ?

In your application, when you can't return the object related to the request, the consumer of the model must check 
for the return value and handle the failing condition gracefully, thus generating an explosion of conditionals throughout your code.
Fortunately, this seemingly-tangled situation can be sorted out simply by creating a polymorphic implementation of the 
domain object, which would implement the same interface as the one of the object in question, only that its methods 
wouldn't do anything, therefore offloading client code from doing repetitive checks for ugly null values when the operation
 is executed.

## Usage examples

```php
class UserMapper
{   
    private \$adapter;
    
    public function __construct(DatabaseAdapterInterface \$adapter) {
        \$this->adapter = \$adapter;
    }

    public function fetchById(\$id) {
        \$this->adapter->select('users', ['id' => \$id]);
        
        if (!\$row = \$this->adapter->fetch()) {
            return null;
        }
        
        return \$this->createUser(\$row);
    }
     
    private function createUser(array \$row) {
        \$user = new Entity\\User(\$row['name'], \$row['email']);
        
        \$user->setId(\$row['id']);
        
        return \$user;
    }
}
```

If you want to remove conditionals from client code, you need to have a version of the entity conforming to the corresponding 
interface. With the Null Object Proxy, you can build this object :

```php
\$factory = new \\ProxyManager\\Factory\\NullObjectFactory();

\$nullUser = \$factory->createProxy('Entity\\User');

var_dump(\$nullUser->getName()); // empty return
```

You can now return a valid entity :

```php
class UserMapper
{   
    private \$adapter;
    
    public function __construct(DatabaseAdapterInterface \$adapter) {
        \$this->adapter = \$adapter;
    }

    public function fetchById(\$id) {
        \$this->adapter->select('users', ['id' => \$id]);
        
        return \$this->createUser(\$this->adapter->fetch());
    }
     
    private function createUser(\$row) {
        if (!\$row) {
            \$factory = new \\ProxyManager\\Factory\\NullObjectFactory();

            return \$factory->createProxy('Entity\\User');
        }
        
        \$user = new Entity\\User(\$row['name'], \$row['email']);
        
        \$user->setId(\$row['id']);
        
        return \$user; 
    }
}
```

## Proxying interfaces

You can also generate proxies from an interface FQCN. By proxying an interface, you will only be able to access the
methods defined by the interface itself, and like with the object, the methods are empty.

## Tuning performance for production

See [Tuning ProxyManager for Production](tuning-for-production.md).
", "vendor/ocramius/proxy-manager/docs/null-object.md", "/var/www/public/DevLaon/templates/vendor/ocramius/proxy-manager/docs/null-object.md");
    }
}
