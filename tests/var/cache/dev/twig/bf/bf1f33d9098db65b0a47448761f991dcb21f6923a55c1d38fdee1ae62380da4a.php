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

/* vendor/egulias/email-validator/composer.json */
class __TwigTemplate_e5ba2b61cd97e0609032cc950e1628e6089308d17b811b95ab5b02405ec6180d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/egulias/email-validator/composer.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/egulias/email-validator/composer.json"));

        // line 1
        echo "{
  \"name\":         \"egulias/email-validator\",
  \"description\":  \"A library for validating emails against several RFCs\",
  \"homepage\":     \"https://github.com/egulias/EmailValidator\",
  \"type\":         \"Library\",
  \"keywords\":     [\"email\", \"validation\", \"validator\", \"emailvalidation\", \"emailvalidator\"],
  \"license\":      \"MIT\",
  \"authors\": [
    {\"name\": \"Eduardo Gulias Davis\"}
  ],
  \"extra\": {
    \"branch-alias\": {
      \"dev-master\": \"2.1.x-dev\"
    }
  },
  \"repositories\": [
    {
      \"type\": \"git\",
      \"url\": \"https://github.com/dominicsayers/isemail\"
    }
  ],
  \"require\":      {
    \"php\": \">= 5.5\",
    \"doctrine/lexer\": \"^1.0.1\"
  },
  \"require-dev\" :   {
    \"satooshi/php-coveralls\": \"^1.0.1\",
    \"phpunit/phpunit\": \"^4.8.35||^5.7||^6.0\",
    \"symfony/phpunit-bridge\": \"^4.4@dev\",
    \"dominicsayers/isemail\": \"dev-master\"
  },
  \"suggest\": {
    \"ext-intl\": \"PHP Internationalization Libraries are required to use the SpoofChecking validation\"
  },
  \"autoload\": {
    \"psr-4\": {
      \"Egulias\\\\EmailValidator\\\\\": \"EmailValidator\"
    }
  },
  \"autoload-dev\": {
    \"psr-4\": {
      \"Egulias\\\\Tests\\\\\": \"test\"
    }
  }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/egulias/email-validator/composer.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
  \"name\":         \"egulias/email-validator\",
  \"description\":  \"A library for validating emails against several RFCs\",
  \"homepage\":     \"https://github.com/egulias/EmailValidator\",
  \"type\":         \"Library\",
  \"keywords\":     [\"email\", \"validation\", \"validator\", \"emailvalidation\", \"emailvalidator\"],
  \"license\":      \"MIT\",
  \"authors\": [
    {\"name\": \"Eduardo Gulias Davis\"}
  ],
  \"extra\": {
    \"branch-alias\": {
      \"dev-master\": \"2.1.x-dev\"
    }
  },
  \"repositories\": [
    {
      \"type\": \"git\",
      \"url\": \"https://github.com/dominicsayers/isemail\"
    }
  ],
  \"require\":      {
    \"php\": \">= 5.5\",
    \"doctrine/lexer\": \"^1.0.1\"
  },
  \"require-dev\" :   {
    \"satooshi/php-coveralls\": \"^1.0.1\",
    \"phpunit/phpunit\": \"^4.8.35||^5.7||^6.0\",
    \"symfony/phpunit-bridge\": \"^4.4@dev\",
    \"dominicsayers/isemail\": \"dev-master\"
  },
  \"suggest\": {
    \"ext-intl\": \"PHP Internationalization Libraries are required to use the SpoofChecking validation\"
  },
  \"autoload\": {
    \"psr-4\": {
      \"Egulias\\\\EmailValidator\\\\\": \"EmailValidator\"
    }
  },
  \"autoload-dev\": {
    \"psr-4\": {
      \"Egulias\\\\Tests\\\\\": \"test\"
    }
  }
}
", "vendor/egulias/email-validator/composer.json", "/var/www/public/DevLaon/templates/vendor/egulias/email-validator/composer.json");
    }
}
