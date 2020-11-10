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

/* vendor/sensio/framework-extra-bundle/src/Configuration/Security.php */
class __TwigTemplate_f1f74928e34aa6cfb2b30b13fa4496f90f96116790c0259dc2c28177b408d735 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Configuration/Security.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Configuration/Security.php"));

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

namespace Sensio\\Bundle\\FrameworkExtraBundle\\Configuration;

/**
 * The Security class handles the Security annotation.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @Annotation
 */
class Security extends ConfigurationAnnotation
{
    /**
     * The expression evaluated to allow or deny access.
     *
     * @var string
     */
    private \$expression;

    /**
     * If set, will throw Symfony\\Component\\HttpKernel\\Exception\\HttpException
     * with the given \$statusCode.
     * If null, Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException.
     * will be used.
     *
     * @var int|null
     */
    protected \$statusCode;

    /**
     * The message of the exception.
     *
     * @var string
     */
    protected \$message = 'Access denied.';

    public function getExpression()
    {
        return \$this->expression;
    }

    public function setExpression(\$expression)
    {
        \$this->expression = \$expression;
    }

    public function getStatusCode()
    {
        return \$this->statusCode;
    }

    public function setStatusCode(\$statusCode)
    {
        \$this->statusCode = \$statusCode;
    }

    public function getMessage()
    {
        return \$this->message;
    }

    public function setMessage(\$message)
    {
        \$this->message = \$message;
    }

    public function setValue(\$expression)
    {
        \$this->setExpression(\$expression);
    }

    public function getAliasName()
    {
        return 'security';
    }

    public function allowArray()
    {
        return true;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/sensio/framework-extra-bundle/src/Configuration/Security.php";
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

namespace Sensio\\Bundle\\FrameworkExtraBundle\\Configuration;

/**
 * The Security class handles the Security annotation.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @Annotation
 */
class Security extends ConfigurationAnnotation
{
    /**
     * The expression evaluated to allow or deny access.
     *
     * @var string
     */
    private \$expression;

    /**
     * If set, will throw Symfony\\Component\\HttpKernel\\Exception\\HttpException
     * with the given \$statusCode.
     * If null, Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException.
     * will be used.
     *
     * @var int|null
     */
    protected \$statusCode;

    /**
     * The message of the exception.
     *
     * @var string
     */
    protected \$message = 'Access denied.';

    public function getExpression()
    {
        return \$this->expression;
    }

    public function setExpression(\$expression)
    {
        \$this->expression = \$expression;
    }

    public function getStatusCode()
    {
        return \$this->statusCode;
    }

    public function setStatusCode(\$statusCode)
    {
        \$this->statusCode = \$statusCode;
    }

    public function getMessage()
    {
        return \$this->message;
    }

    public function setMessage(\$message)
    {
        \$this->message = \$message;
    }

    public function setValue(\$expression)
    {
        \$this->setExpression(\$expression);
    }

    public function getAliasName()
    {
        return 'security';
    }

    public function allowArray()
    {
        return true;
    }
}
", "vendor/sensio/framework-extra-bundle/src/Configuration/Security.php", "/var/www/public/DevLaon/templates/vendor/sensio/framework-extra-bundle/src/Configuration/Security.php");
    }
}
