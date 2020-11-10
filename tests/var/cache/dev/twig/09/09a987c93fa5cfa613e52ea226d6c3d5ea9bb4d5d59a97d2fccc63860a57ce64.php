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

/* vendor/symfony/http-foundation/ExpressionRequestMatcher.php */
class __TwigTemplate_44a970b833f5d89146501782166198b9a6cc9479f1d348713fd3c26b4c0efa79 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/ExpressionRequestMatcher.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/ExpressionRequestMatcher.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\HttpFoundation;

use Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage;

/**
 * ExpressionRequestMatcher uses an expression to match a Request.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ExpressionRequestMatcher extends RequestMatcher
{
    private \$language;
    private \$expression;

    public function setExpression(ExpressionLanguage \$language, \$expression)
    {
        \$this->language = \$language;
        \$this->expression = \$expression;
    }

    public function matches(Request \$request)
    {
        if (!\$this->language) {
            throw new \\LogicException('Unable to match the request as the expression language is not available.');
        }

        return \$this->language->evaluate(\$this->expression, [
            'request' => \$request,
            'method' => \$request->getMethod(),
            'path' => rawurldecode(\$request->getPathInfo()),
            'host' => \$request->getHost(),
            'ip' => \$request->getClientIp(),
            'attributes' => \$request->attributes->all(),
        ]) && parent::matches(\$request);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/ExpressionRequestMatcher.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\HttpFoundation;

use Symfony\\Component\\ExpressionLanguage\\ExpressionLanguage;

/**
 * ExpressionRequestMatcher uses an expression to match a Request.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ExpressionRequestMatcher extends RequestMatcher
{
    private \$language;
    private \$expression;

    public function setExpression(ExpressionLanguage \$language, \$expression)
    {
        \$this->language = \$language;
        \$this->expression = \$expression;
    }

    public function matches(Request \$request)
    {
        if (!\$this->language) {
            throw new \\LogicException('Unable to match the request as the expression language is not available.');
        }

        return \$this->language->evaluate(\$this->expression, [
            'request' => \$request,
            'method' => \$request->getMethod(),
            'path' => rawurldecode(\$request->getPathInfo()),
            'host' => \$request->getHost(),
            'ip' => \$request->getClientIp(),
            'attributes' => \$request->attributes->all(),
        ]) && parent::matches(\$request);
    }
}
", "vendor/symfony/http-foundation/ExpressionRequestMatcher.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/ExpressionRequestMatcher.php");
    }
}
