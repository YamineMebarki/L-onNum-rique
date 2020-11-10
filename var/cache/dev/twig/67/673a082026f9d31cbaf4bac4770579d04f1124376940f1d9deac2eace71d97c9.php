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

/* vendor/symfony/mime/Header/IdentificationHeader.php */
class __TwigTemplate_2e4460c3382fc04d950bd4cfa272a5aecc024dfa4910057b6dcb02fc0328e736 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Header/IdentificationHeader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/Header/IdentificationHeader.php"));

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
 * An ID MIME Header for something like Message-ID or Content-ID (one or more addresses).
 *
 * @author Chris Corbyn
 *
 * @experimental in 4.3
 */
final class IdentificationHeader extends AbstractHeader
{
    private \$ids = [];
    private \$idsAsAddresses = [];

    /**
     * @param string|array \$ids
     */
    public function __construct(string \$name, \$ids)
    {
        parent::__construct(\$name);

        \$this->setId(\$ids);
    }

    /**
     * @param string|array \$body a string ID or an array of IDs
     *
     * @throws RfcComplianceException
     */
    public function setBody(\$body)
    {
        \$this->setId(\$body);
    }

    /**
     * @return array
     */
    public function getBody()
    {
        return \$this->getIds();
    }

    /**
     * Set the ID used in the value of this header.
     *
     * @param string|array \$id
     *
     * @throws RfcComplianceException
     */
    public function setId(\$id)
    {
        \$this->setIds(\\is_array(\$id) ? \$id : [\$id]);
    }

    /**
     * Get the ID used in the value of this Header.
     *
     * If multiple IDs are set only the first is returned.
     */
    public function getId(): ?string
    {
        return \$this->ids[0] ?? null;
    }

    /**
     * Set a collection of IDs to use in the value of this Header.
     *
     * @param string[] \$ids
     *
     * @throws RfcComplianceException
     */
    public function setIds(array \$ids)
    {
        \$this->ids = [];
        \$this->idsAsAddresses = [];
        foreach (\$ids as \$id) {
            \$this->idsAsAddresses[] = new Address(\$id);
            \$this->ids[] = \$id;
        }
    }

    /**
     * Get the list of IDs used in this Header.
     *
     * @return string[]
     */
    public function getIds(): array
    {
        return \$this->ids;
    }

    public function getBodyAsString(): string
    {
        \$addrs = [];
        foreach (\$this->idsAsAddresses as \$address) {
            \$addrs[] = '<'.\$address->toString().'>';
        }

        return implode(' ', \$addrs);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/Header/IdentificationHeader.php";
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
 * An ID MIME Header for something like Message-ID or Content-ID (one or more addresses).
 *
 * @author Chris Corbyn
 *
 * @experimental in 4.3
 */
final class IdentificationHeader extends AbstractHeader
{
    private \$ids = [];
    private \$idsAsAddresses = [];

    /**
     * @param string|array \$ids
     */
    public function __construct(string \$name, \$ids)
    {
        parent::__construct(\$name);

        \$this->setId(\$ids);
    }

    /**
     * @param string|array \$body a string ID or an array of IDs
     *
     * @throws RfcComplianceException
     */
    public function setBody(\$body)
    {
        \$this->setId(\$body);
    }

    /**
     * @return array
     */
    public function getBody()
    {
        return \$this->getIds();
    }

    /**
     * Set the ID used in the value of this header.
     *
     * @param string|array \$id
     *
     * @throws RfcComplianceException
     */
    public function setId(\$id)
    {
        \$this->setIds(\\is_array(\$id) ? \$id : [\$id]);
    }

    /**
     * Get the ID used in the value of this Header.
     *
     * If multiple IDs are set only the first is returned.
     */
    public function getId(): ?string
    {
        return \$this->ids[0] ?? null;
    }

    /**
     * Set a collection of IDs to use in the value of this Header.
     *
     * @param string[] \$ids
     *
     * @throws RfcComplianceException
     */
    public function setIds(array \$ids)
    {
        \$this->ids = [];
        \$this->idsAsAddresses = [];
        foreach (\$ids as \$id) {
            \$this->idsAsAddresses[] = new Address(\$id);
            \$this->ids[] = \$id;
        }
    }

    /**
     * Get the list of IDs used in this Header.
     *
     * @return string[]
     */
    public function getIds(): array
    {
        return \$this->ids;
    }

    public function getBodyAsString(): string
    {
        \$addrs = [];
        foreach (\$this->idsAsAddresses as \$address) {
            \$addrs[] = '<'.\$address->toString().'>';
        }

        return implode(' ', \$addrs);
    }
}
", "vendor/symfony/mime/Header/IdentificationHeader.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/Header/IdentificationHeader.php");
    }
}
