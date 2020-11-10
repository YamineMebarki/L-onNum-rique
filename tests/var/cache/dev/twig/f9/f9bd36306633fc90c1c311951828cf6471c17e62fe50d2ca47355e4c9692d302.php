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

/* vendor/symfony/security-csrf/CsrfToken.php */
class __TwigTemplate_6a8b2e5fe19377288526f35d3a837427520e8eddd40ea71334bec97f81ba57be extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-csrf/CsrfToken.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-csrf/CsrfToken.php"));

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

namespace Symfony\\Component\\Security\\Csrf;

/**
 * A CSRF token.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class CsrfToken
{
    private \$id;
    private \$value;

    public function __construct(string \$id, ?string \$value)
    {
        \$this->id = \$id;
        \$this->value = \$value ?? '';
    }

    /**
     * Returns the ID of the CSRF token.
     *
     * @return string The token ID
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * Returns the value of the CSRF token.
     *
     * @return string The token value
     */
    public function getValue()
    {
        return \$this->value;
    }

    /**
     * Returns the value of the CSRF token.
     *
     * @return string The token value
     */
    public function __toString()
    {
        return \$this->value;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-csrf/CsrfToken.php";
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

namespace Symfony\\Component\\Security\\Csrf;

/**
 * A CSRF token.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class CsrfToken
{
    private \$id;
    private \$value;

    public function __construct(string \$id, ?string \$value)
    {
        \$this->id = \$id;
        \$this->value = \$value ?? '';
    }

    /**
     * Returns the ID of the CSRF token.
     *
     * @return string The token ID
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * Returns the value of the CSRF token.
     *
     * @return string The token value
     */
    public function getValue()
    {
        return \$this->value;
    }

    /**
     * Returns the value of the CSRF token.
     *
     * @return string The token value
     */
    public function __toString()
    {
        return \$this->value;
    }
}
", "vendor/symfony/security-csrf/CsrfToken.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-csrf/CsrfToken.php");
    }
}
