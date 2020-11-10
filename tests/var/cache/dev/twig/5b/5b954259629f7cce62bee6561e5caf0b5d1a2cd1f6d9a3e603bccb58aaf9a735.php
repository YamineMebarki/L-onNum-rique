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

/* vendor/symfony/http-foundation/Test/Constraint/ResponseCookieValueSame.php */
class __TwigTemplate_9021fc8a2c5bc9d7eaf281e50d85415d019e1b973b7631221af999fb24eab304 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Test/Constraint/ResponseCookieValueSame.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Test/Constraint/ResponseCookieValueSame.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Test\\Constraint;

use PHPUnit\\Framework\\Constraint\\Constraint;
use Symfony\\Component\\HttpFoundation\\Cookie;
use Symfony\\Component\\HttpFoundation\\Response;

final class ResponseCookieValueSame extends Constraint
{
    private \$name;
    private \$value;
    private \$path;
    private \$domain;

    public function __construct(string \$name, string \$value, string \$path = '/', string \$domain = null)
    {
        \$this->name = \$name;
        \$this->value = \$value;
        \$this->path = \$path;
        \$this->domain = \$domain;
    }

    /**
     * {@inheritdoc}
     */
    public function toString(): string
    {
        \$str = sprintf('has cookie \"%s\"', \$this->name);
        if ('/' !== \$this->path) {
            \$str .= sprintf(' with path \"%s\"', \$this->path);
        }
        if (\$this->domain) {
            \$str .= sprintf(' for domain \"%s\"', \$this->domain);
        }
        \$str .= sprintf(' with value \"%s\"', \$this->value);

        return \$str;
    }

    /**
     * @param Response \$response
     *
     * {@inheritdoc}
     */
    protected function matches(\$response): bool
    {
        \$cookie = \$this->getCookie(\$response);
        if (!\$cookie) {
            return false;
        }

        return \$this->value === \$cookie->getValue();
    }

    /**
     * @param Response \$response
     *
     * {@inheritdoc}
     */
    protected function failureDescription(\$response): string
    {
        return 'the Response '.\$this->toString();
    }

    protected function getCookie(Response \$response): ?Cookie
    {
        \$cookies = \$response->headers->getCookies();

        \$filteredCookies = array_filter(\$cookies, function (Cookie \$cookie) {
            return \$cookie->getName() === \$this->name && \$cookie->getPath() === \$this->path && \$cookie->getDomain() === \$this->domain;
        });

        return reset(\$filteredCookies) ?: null;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Test/Constraint/ResponseCookieValueSame.php";
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

namespace Symfony\\Component\\HttpFoundation\\Test\\Constraint;

use PHPUnit\\Framework\\Constraint\\Constraint;
use Symfony\\Component\\HttpFoundation\\Cookie;
use Symfony\\Component\\HttpFoundation\\Response;

final class ResponseCookieValueSame extends Constraint
{
    private \$name;
    private \$value;
    private \$path;
    private \$domain;

    public function __construct(string \$name, string \$value, string \$path = '/', string \$domain = null)
    {
        \$this->name = \$name;
        \$this->value = \$value;
        \$this->path = \$path;
        \$this->domain = \$domain;
    }

    /**
     * {@inheritdoc}
     */
    public function toString(): string
    {
        \$str = sprintf('has cookie \"%s\"', \$this->name);
        if ('/' !== \$this->path) {
            \$str .= sprintf(' with path \"%s\"', \$this->path);
        }
        if (\$this->domain) {
            \$str .= sprintf(' for domain \"%s\"', \$this->domain);
        }
        \$str .= sprintf(' with value \"%s\"', \$this->value);

        return \$str;
    }

    /**
     * @param Response \$response
     *
     * {@inheritdoc}
     */
    protected function matches(\$response): bool
    {
        \$cookie = \$this->getCookie(\$response);
        if (!\$cookie) {
            return false;
        }

        return \$this->value === \$cookie->getValue();
    }

    /**
     * @param Response \$response
     *
     * {@inheritdoc}
     */
    protected function failureDescription(\$response): string
    {
        return 'the Response '.\$this->toString();
    }

    protected function getCookie(Response \$response): ?Cookie
    {
        \$cookies = \$response->headers->getCookies();

        \$filteredCookies = array_filter(\$cookies, function (Cookie \$cookie) {
            return \$cookie->getName() === \$this->name && \$cookie->getPath() === \$this->path && \$cookie->getDomain() === \$this->domain;
        });

        return reset(\$filteredCookies) ?: null;
    }
}
", "vendor/symfony/http-foundation/Test/Constraint/ResponseCookieValueSame.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Test/Constraint/ResponseCookieValueSame.php");
    }
}
