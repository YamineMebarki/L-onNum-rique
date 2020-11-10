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

/* vendor/symfony/http-foundation/Session/Storage/Handler/NullSessionHandler.php */
class __TwigTemplate_259f603177ab84ce26f811d17a200414f095e65700773e3a4142598842012b4b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/Storage/Handler/NullSessionHandler.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/Storage/Handler/NullSessionHandler.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler;

/**
 * Can be used in unit testing or in a situations where persisted sessions are not desired.
 *
 * @author Drak <drak@zikula.org>
 */
class NullSessionHandler extends AbstractSessionHandler
{
    /**
     * {@inheritdoc}
     */
    public function close()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function validateId(\$sessionId)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doRead(\$sessionId)
    {
        return '';
    }

    /**
     * {@inheritdoc}
     */
    public function updateTimestamp(\$sessionId, \$data)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doWrite(\$sessionId, \$data)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doDestroy(\$sessionId)
    {
        return true;
    }

    /**
     * @return bool
     */
    public function gc(\$maxlifetime)
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
        return "vendor/symfony/http-foundation/Session/Storage/Handler/NullSessionHandler.php";
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

namespace Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler;

/**
 * Can be used in unit testing or in a situations where persisted sessions are not desired.
 *
 * @author Drak <drak@zikula.org>
 */
class NullSessionHandler extends AbstractSessionHandler
{
    /**
     * {@inheritdoc}
     */
    public function close()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function validateId(\$sessionId)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doRead(\$sessionId)
    {
        return '';
    }

    /**
     * {@inheritdoc}
     */
    public function updateTimestamp(\$sessionId, \$data)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doWrite(\$sessionId, \$data)
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function doDestroy(\$sessionId)
    {
        return true;
    }

    /**
     * @return bool
     */
    public function gc(\$maxlifetime)
    {
        return true;
    }
}
", "vendor/symfony/http-foundation/Session/Storage/Handler/NullSessionHandler.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Session/Storage/Handler/NullSessionHandler.php");
    }
}
