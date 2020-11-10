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

/* vendor/symfony/mime/Header/UnstructuredHeader.php */
class __TwigTemplate_5e7ecdc98c9c1123a5bb2b539cd9ba7024f8fb0715895f9c634d8ea4a585e6ab extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Header/UnstructuredHeader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Header/UnstructuredHeader.php"));

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

namespace Symfony\\Component\\Mime\\Header;

/**
 * A Simple MIME Header.
 *
 * @author Chris Corbyn
 *
 * @experimental in 4.3
 */
class UnstructuredHeader extends AbstractHeader
{
    private \$value;

    public function __construct(string \$name, string \$value)
    {
        parent::__construct(\$name);

        \$this->setValue(\$value);
    }

    /**
     * @param string \$body
     */
    public function setBody(\$body)
    {
        \$this->setValue(\$body);
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return \$this->getValue();
    }

    /**
     * Get the (unencoded) value of this header.
     */
    public function getValue(): string
    {
        return \$this->value;
    }

    /**
     * Set the (unencoded) value of this header.
     */
    public function setValue(string \$value)
    {
        \$this->value = \$value;
    }

    /**
     * Get the value of this header prepared for rendering.
     */
    public function getBodyAsString(): string
    {
        return \$this->encodeWords(\$this, \$this->value);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Header/UnstructuredHeader.php";
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

namespace Symfony\\Component\\Mime\\Header;

/**
 * A Simple MIME Header.
 *
 * @author Chris Corbyn
 *
 * @experimental in 4.3
 */
class UnstructuredHeader extends AbstractHeader
{
    private \$value;

    public function __construct(string \$name, string \$value)
    {
        parent::__construct(\$name);

        \$this->setValue(\$value);
    }

    /**
     * @param string \$body
     */
    public function setBody(\$body)
    {
        \$this->setValue(\$body);
    }

    /**
     * @return string
     */
    public function getBody()
    {
        return \$this->getValue();
    }

    /**
     * Get the (unencoded) value of this header.
     */
    public function getValue(): string
    {
        return \$this->value;
    }

    /**
     * Set the (unencoded) value of this header.
     */
    public function setValue(string \$value)
    {
        \$this->value = \$value;
    }

    /**
     * Get the value of this header prepared for rendering.
     */
    public function getBodyAsString(): string
    {
        return \$this->encodeWords(\$this, \$this->value);
    }
}
", "vendor/symfony/mime/Header/UnstructuredHeader.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Header/UnstructuredHeader.php");
    }
}
