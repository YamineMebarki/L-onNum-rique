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

/* vendor/symfony/http-foundation/Test/Constraint/ResponseIsRedirected.php */
class __TwigTemplate_a8516489e4582c52c6c642a009ed2ab7a4bf2047aff8347e4e27cc3eb08a6cb2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Test/Constraint/ResponseIsRedirected.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Test/Constraint/ResponseIsRedirected.php"));

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
use Symfony\\Component\\HttpFoundation\\Response;

final class ResponseIsRedirected extends Constraint
{
    /**
     * {@inheritdoc}
     */
    public function toString(): string
    {
        return 'is redirected';
    }

    /**
     * @param Response \$response
     *
     * {@inheritdoc}
     */
    protected function matches(\$response): bool
    {
        return \$response->isRedirect();
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

    /**
     * @param Response \$response
     *
     * {@inheritdoc}
     */
    protected function additionalFailureDescription(\$response): string
    {
        return (string) \$response;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Test/Constraint/ResponseIsRedirected.php";
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
use Symfony\\Component\\HttpFoundation\\Response;

final class ResponseIsRedirected extends Constraint
{
    /**
     * {@inheritdoc}
     */
    public function toString(): string
    {
        return 'is redirected';
    }

    /**
     * @param Response \$response
     *
     * {@inheritdoc}
     */
    protected function matches(\$response): bool
    {
        return \$response->isRedirect();
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

    /**
     * @param Response \$response
     *
     * {@inheritdoc}
     */
    protected function additionalFailureDescription(\$response): string
    {
        return (string) \$response;
    }
}
", "vendor/symfony/http-foundation/Test/Constraint/ResponseIsRedirected.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Test/Constraint/ResponseIsRedirected.php");
    }
}
