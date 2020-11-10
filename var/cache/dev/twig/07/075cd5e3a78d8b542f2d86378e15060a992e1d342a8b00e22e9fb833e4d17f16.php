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

/* vendor/symfony/intl/Exception/MethodArgumentValueNotImplementedException.php */
class __TwigTemplate_01f17c0df75753b7a3e968041c9abcfaa3699cc6401d2ec0a6c6da572885b095 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Exception/MethodArgumentValueNotImplementedException.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Exception/MethodArgumentValueNotImplementedException.php"));

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

namespace Symfony\\Component\\Intl\\Exception;

/**
 * @author Eriksen Costa <eriksen.costa@infranology.com.br>
 */
class MethodArgumentValueNotImplementedException extends NotImplementedException
{
    /**
     * @param string \$methodName        The method name that raised the exception
     * @param string \$argName           The argument name
     * @param mixed  \$argValue          The argument value that is not implemented
     * @param string \$additionalMessage An optional additional message to append to the exception message
     */
    public function __construct(string \$methodName, string \$argName, \$argValue, string \$additionalMessage = '')
    {
        \$message = sprintf(
            'The %s() method\\'s argument \$%s value %s behavior is not implemented.%s',
            \$methodName,
            \$argName,
            var_export(\$argValue, true),
            '' !== \$additionalMessage ? ' '.\$additionalMessage.'. ' : ''
        );

        parent::__construct(\$message);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Exception/MethodArgumentValueNotImplementedException.php";
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

namespace Symfony\\Component\\Intl\\Exception;

/**
 * @author Eriksen Costa <eriksen.costa@infranology.com.br>
 */
class MethodArgumentValueNotImplementedException extends NotImplementedException
{
    /**
     * @param string \$methodName        The method name that raised the exception
     * @param string \$argName           The argument name
     * @param mixed  \$argValue          The argument value that is not implemented
     * @param string \$additionalMessage An optional additional message to append to the exception message
     */
    public function __construct(string \$methodName, string \$argName, \$argValue, string \$additionalMessage = '')
    {
        \$message = sprintf(
            'The %s() method\\'s argument \$%s value %s behavior is not implemented.%s',
            \$methodName,
            \$argName,
            var_export(\$argValue, true),
            '' !== \$additionalMessage ? ' '.\$additionalMessage.'. ' : ''
        );

        parent::__construct(\$message);
    }
}
", "vendor/symfony/intl/Exception/MethodArgumentValueNotImplementedException.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Exception/MethodArgumentValueNotImplementedException.php");
    }
}
