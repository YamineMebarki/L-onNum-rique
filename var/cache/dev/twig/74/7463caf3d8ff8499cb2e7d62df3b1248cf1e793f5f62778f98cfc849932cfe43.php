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

/* vendor/symfony/mime/Header/PathHeader.php */
class __TwigTemplate_a0cddb4d5434cda56e0807f15a1a32b17f3e83c7f65cbefc27b9b9f73a679453 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Header/PathHeader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Header/PathHeader.php"));

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

use Symfony\\Component\\Mime\\Address;
use Symfony\\Component\\Mime\\Exception\\RfcComplianceException;

/**
 * A Path Header, such a Return-Path (one address).
 *
 * @author Chris Corbyn
 *
 * @experimental in 4.3
 */
final class PathHeader extends AbstractHeader
{
    private \$address;

    public function __construct(string \$name, Address \$address)
    {
        parent::__construct(\$name);

        \$this->setAddress(\$address);
    }

    /**
     * @param Address \$body
     *
     * @throws RfcComplianceException
     */
    public function setBody(\$body)
    {
        \$this->setAddress(\$body);
    }

    /**
     * @return Address
     */
    public function getBody()
    {
        return \$this->getAddress();
    }

    public function setAddress(Address \$address)
    {
        \$this->address = \$address;
    }

    public function getAddress(): Address
    {
        return \$this->address;
    }

    public function getBodyAsString(): string
    {
        return '<'.\$this->address->toString().'>';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Header/PathHeader.php";
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

use Symfony\\Component\\Mime\\Address;
use Symfony\\Component\\Mime\\Exception\\RfcComplianceException;

/**
 * A Path Header, such a Return-Path (one address).
 *
 * @author Chris Corbyn
 *
 * @experimental in 4.3
 */
final class PathHeader extends AbstractHeader
{
    private \$address;

    public function __construct(string \$name, Address \$address)
    {
        parent::__construct(\$name);

        \$this->setAddress(\$address);
    }

    /**
     * @param Address \$body
     *
     * @throws RfcComplianceException
     */
    public function setBody(\$body)
    {
        \$this->setAddress(\$body);
    }

    /**
     * @return Address
     */
    public function getBody()
    {
        return \$this->getAddress();
    }

    public function setAddress(Address \$address)
    {
        \$this->address = \$address;
    }

    public function getAddress(): Address
    {
        return \$this->address;
    }

    public function getBodyAsString(): string
    {
        return '<'.\$this->address->toString().'>';
    }
}
", "vendor/symfony/mime/Header/PathHeader.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Header/PathHeader.php");
    }
}
