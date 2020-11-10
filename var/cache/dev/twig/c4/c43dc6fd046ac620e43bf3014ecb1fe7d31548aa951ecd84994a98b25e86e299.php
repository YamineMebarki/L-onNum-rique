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

/* vendor/symfony/http-kernel/Exception/HttpException.php */
class __TwigTemplate_b4ae38d7a1f12475aad9fc85509c4b77d943af76598d5b5e9827939890d43d14 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Exception/HttpException.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-kernel/Exception/HttpException.php"));

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
 * HttpException.
 *
 * @author Kris Wallsmith <kris@symfony.com>
 */
class HttpException extends \\RuntimeException implements HttpExceptionInterface
{
    private \$statusCode;
    private \$headers;

    public function __construct(int \$statusCode, string \$message = null, \\Throwable \$previous = null, array \$headers = [], ?int \$code = 0)
    {
        \$this->statusCode = \$statusCode;
        \$this->headers = \$headers;

        parent::__construct(\$message, \$code, \$previous);
    }

    public function getStatusCode()
    {
        return \$this->statusCode;
    }

    public function getHeaders()
    {
        return \$this->headers;
    }

    /**
     * Set response headers.
     *
     * @param array \$headers Response headers
     */
    public function setHeaders(array \$headers)
    {
        \$this->headers = \$headers;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-kernel/Exception/HttpException.php";
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
 * HttpException.
 *
 * @author Kris Wallsmith <kris@symfony.com>
 */
class HttpException extends \\RuntimeException implements HttpExceptionInterface
{
    private \$statusCode;
    private \$headers;

    public function __construct(int \$statusCode, string \$message = null, \\Throwable \$previous = null, array \$headers = [], ?int \$code = 0)
    {
        \$this->statusCode = \$statusCode;
        \$this->headers = \$headers;

        parent::__construct(\$message, \$code, \$previous);
    }

    public function getStatusCode()
    {
        return \$this->statusCode;
    }

    public function getHeaders()
    {
        return \$this->headers;
    }

    /**
     * Set response headers.
     *
     * @param array \$headers Response headers
     */
    public function setHeaders(array \$headers)
    {
        \$this->headers = \$headers;
    }
}
", "vendor/symfony/http-kernel/Exception/HttpException.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-kernel/Exception/HttpException.php");
    }
}
