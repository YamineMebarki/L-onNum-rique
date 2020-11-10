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

/* vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/route_collection_1.json */
class __TwigTemplate_f9d2917e0dc968e5b4120b9d37eb984b62075245c6d1ee1305a1607b71c33017 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/route_collection_1.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/route_collection_1.json"));

        // line 1
        echo "{
    \"route_1\": {
        \"path\": \"\\/hello\\/{name}\",
        \"pathRegex\": \"#PATH_REGEX#\",
        \"host\": \"localhost\",
        \"hostRegex\": \"#HOST_REGEX#\",
        \"scheme\": \"http|https\",
        \"method\": \"GET|HEAD\",
        \"class\": \"Symfony\\\\Bundle\\\\FrameworkBundle\\\\Tests\\\\Console\\\\Descriptor\\\\RouteStub\",
        \"defaults\": {
            \"name\": \"Joseph\"
        },
        \"requirements\": {
            \"name\": \"[a-z]+\"
        },
        \"options\": {
            \"compiler_class\": \"Symfony\\\\Component\\\\Routing\\\\RouteCompiler\",
            \"opt1\": \"val1\",
            \"opt2\": \"val2\"
        }
    },
    \"route_2\": {
        \"path\": \"\\/name\\/add\",
        \"pathRegex\": \"#PATH_REGEX#\",
        \"host\": \"localhost\",
        \"hostRegex\": \"#HOST_REGEX#\",
        \"scheme\": \"http|https\",
        \"method\": \"PUT|POST\",
        \"class\": \"Symfony\\\\Bundle\\\\FrameworkBundle\\\\Tests\\\\Console\\\\Descriptor\\\\RouteStub\",
        \"defaults\": [],
        \"requirements\": \"NO CUSTOM\",
        \"options\": {
            \"compiler_class\": \"Symfony\\\\Component\\\\Routing\\\\RouteCompiler\",
            \"opt1\": \"val1\",
            \"opt2\": \"val2\"
        },
        \"condition\": \"context.getMethod() in ['GET', 'HEAD', 'POST']\"
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/route_collection_1.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"route_1\": {
        \"path\": \"\\/hello\\/{name}\",
        \"pathRegex\": \"#PATH_REGEX#\",
        \"host\": \"localhost\",
        \"hostRegex\": \"#HOST_REGEX#\",
        \"scheme\": \"http|https\",
        \"method\": \"GET|HEAD\",
        \"class\": \"Symfony\\\\Bundle\\\\FrameworkBundle\\\\Tests\\\\Console\\\\Descriptor\\\\RouteStub\",
        \"defaults\": {
            \"name\": \"Joseph\"
        },
        \"requirements\": {
            \"name\": \"[a-z]+\"
        },
        \"options\": {
            \"compiler_class\": \"Symfony\\\\Component\\\\Routing\\\\RouteCompiler\",
            \"opt1\": \"val1\",
            \"opt2\": \"val2\"
        }
    },
    \"route_2\": {
        \"path\": \"\\/name\\/add\",
        \"pathRegex\": \"#PATH_REGEX#\",
        \"host\": \"localhost\",
        \"hostRegex\": \"#HOST_REGEX#\",
        \"scheme\": \"http|https\",
        \"method\": \"PUT|POST\",
        \"class\": \"Symfony\\\\Bundle\\\\FrameworkBundle\\\\Tests\\\\Console\\\\Descriptor\\\\RouteStub\",
        \"defaults\": [],
        \"requirements\": \"NO CUSTOM\",
        \"options\": {
            \"compiler_class\": \"Symfony\\\\Component\\\\Routing\\\\RouteCompiler\",
            \"opt1\": \"val1\",
            \"opt2\": \"val2\"
        },
        \"condition\": \"context.getMethod() in ['GET', 'HEAD', 'POST']\"
    }
}
", "vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/route_collection_1.json", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Tests/Fixtures/Descriptor/route_collection_1.json");
    }
}
