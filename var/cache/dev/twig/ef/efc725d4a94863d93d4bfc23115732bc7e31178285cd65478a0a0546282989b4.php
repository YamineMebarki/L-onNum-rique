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

/* vendor/symfony/browser-kit/Test/Constraint/BrowserHasCookie.php */
class __TwigTemplate_b6ad2b6a43aa2855b59c6ee6d4fbc3c4967f2eff023a15e6d34b8ca600e700ad extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/browser-kit/Test/Constraint/BrowserHasCookie.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/browser-kit/Test/Constraint/BrowserHasCookie.php"));

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

namespace Symfony\\Component\\BrowserKit\\Test\\Constraint;

use PHPUnit\\Framework\\Constraint\\Constraint;
use Symfony\\Component\\BrowserKit\\AbstractBrowser;

final class BrowserHasCookie extends Constraint
{
    private \$name;
    private \$path;
    private \$domain;

    public function __construct(string \$name, string \$path = '/', string \$domain = null)
    {
        \$this->name = \$name;
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

        return \$str;
    }

    /**
     * @param AbstractBrowser \$browser
     *
     * {@inheritdoc}
     */
    protected function matches(\$browser): bool
    {
        return null !== \$browser->getCookieJar()->get(\$this->name, \$this->path, \$this->domain);
    }

    /**
     * @param AbstractBrowser \$browser
     *
     * {@inheritdoc}
     */
    protected function failureDescription(\$browser): string
    {
        return 'the Browser '.\$this->toString();
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/browser-kit/Test/Constraint/BrowserHasCookie.php";
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

namespace Symfony\\Component\\BrowserKit\\Test\\Constraint;

use PHPUnit\\Framework\\Constraint\\Constraint;
use Symfony\\Component\\BrowserKit\\AbstractBrowser;

final class BrowserHasCookie extends Constraint
{
    private \$name;
    private \$path;
    private \$domain;

    public function __construct(string \$name, string \$path = '/', string \$domain = null)
    {
        \$this->name = \$name;
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

        return \$str;
    }

    /**
     * @param AbstractBrowser \$browser
     *
     * {@inheritdoc}
     */
    protected function matches(\$browser): bool
    {
        return null !== \$browser->getCookieJar()->get(\$this->name, \$this->path, \$this->domain);
    }

    /**
     * @param AbstractBrowser \$browser
     *
     * {@inheritdoc}
     */
    protected function failureDescription(\$browser): string
    {
        return 'the Browser '.\$this->toString();
    }
}
", "vendor/symfony/browser-kit/Test/Constraint/BrowserHasCookie.php", "/var/www/public/DevLaon/templates/vendor/symfony/browser-kit/Test/Constraint/BrowserHasCookie.php");
    }
}
