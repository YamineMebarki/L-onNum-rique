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

/* vendor/symfony/http-kernel/Exception/TooManyRequestsHttpException.php */
class __TwigTemplate_33c4e0755ef86af9e9d3f82a6915c69612320180e7639dd7cd3c4f1b0ebd219f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Exception/TooManyRequestsHttpException.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Exception/TooManyRequestsHttpException.php"));

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

namespace Symfony\\Component\\HttpKernel\\Exception;

/**
 * @author Ben Ramsey <ben@benramsey.com>
 *
 * @see http://tools.ietf.org/html/rfc6585
 */
class TooManyRequestsHttpException extends HttpException
{
    /**
     * @param int|string \$retryAfter The number of seconds or HTTP-date after which the request may be retried
     * @param string     \$message    The internal exception message
     * @param \\Throwable \$previous   The previous exception
     * @param int        \$code       The internal exception code
     */
    public function __construct(\$retryAfter = null, string \$message = null, \\Throwable \$previous = null, ?int \$code = 0, array \$headers = [])
    {
        if (\$retryAfter) {
            \$headers['Retry-After'] = \$retryAfter;
        }

        parent::__construct(429, \$message, \$previous, \$headers, \$code);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Exception/TooManyRequestsHttpException.php";
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

namespace Symfony\\Component\\HttpKernel\\Exception;

/**
 * @author Ben Ramsey <ben@benramsey.com>
 *
 * @see http://tools.ietf.org/html/rfc6585
 */
class TooManyRequestsHttpException extends HttpException
{
    /**
     * @param int|string \$retryAfter The number of seconds or HTTP-date after which the request may be retried
     * @param string     \$message    The internal exception message
     * @param \\Throwable \$previous   The previous exception
     * @param int        \$code       The internal exception code
     */
    public function __construct(\$retryAfter = null, string \$message = null, \\Throwable \$previous = null, ?int \$code = 0, array \$headers = [])
    {
        if (\$retryAfter) {
            \$headers['Retry-After'] = \$retryAfter;
        }

        parent::__construct(429, \$message, \$previous, \$headers, \$code);
    }
}
", "vendor/symfony/http-kernel/Exception/TooManyRequestsHttpException.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Exception/TooManyRequestsHttpException.php");
    }
}
