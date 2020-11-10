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

/* vendor/symfony/validator/Constraints/Url.php */
class __TwigTemplate_690edc23697bc83ce566ed57a38baeaf59981ad0a29918c4528c35737a777066 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Url.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Url.php"));

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

namespace Symfony\\Component\\Validator\\Constraints;

use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Exception\\InvalidArgumentException;

/**
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Url extends Constraint
{
    /**
     * @deprecated since Symfony 4.1
     */
    const CHECK_DNS_TYPE_ANY = 'ANY';

    /**
     * @deprecated since Symfony 4.1
     */
    const CHECK_DNS_TYPE_NONE = false;

    /**
     * @deprecated since Symfony 4.1
     */
    const CHECK_DNS_TYPE_A = 'A';

    /**
     * @deprecated since Symfony 4.1
     */
    const CHECK_DNS_TYPE_A6 = 'A6';

    /**
     * @deprecated since Symfony 4.1
     */
    const CHECK_DNS_TYPE_AAAA = 'AAAA';

    /**
     * @deprecated since Symfony 4.1
     */
    const CHECK_DNS_TYPE_CNAME = 'CNAME';

    /**
     * @deprecated since Symfony 4.1
     */
    const CHECK_DNS_TYPE_MX = 'MX';

    /**
     * @deprecated since Symfony 4.1
     */
    const CHECK_DNS_TYPE_NAPTR = 'NAPTR';

    /**
     * @deprecated since Symfony 4.1
     */
    const CHECK_DNS_TYPE_NS = 'NS';

    /**
     * @deprecated since Symfony 4.1
     */
    const CHECK_DNS_TYPE_PTR = 'PTR';

    /**
     * @deprecated since Symfony 4.1
     */
    const CHECK_DNS_TYPE_SOA = 'SOA';

    /**
     * @deprecated since Symfony 4.1
     */
    const CHECK_DNS_TYPE_SRV = 'SRV';

    /**
     * @deprecated since Symfony 4.1
     */
    const CHECK_DNS_TYPE_TXT = 'TXT';

    const INVALID_URL_ERROR = '57c2f299-1154-4870-89bb-ef3b1f5ad229';

    protected static \$errorNames = [
        self::INVALID_URL_ERROR => 'INVALID_URL_ERROR',
    ];

    public \$message = 'This value is not a valid URL.';

    /**
     * @deprecated since Symfony 4.1
     */
    public \$dnsMessage = 'The host could not be resolved.';
    public \$protocols = ['http', 'https'];

    /**
     * @deprecated since Symfony 4.1
     */
    public \$checkDNS = self::CHECK_DNS_TYPE_NONE;
    public \$relativeProtocol = false;
    public \$normalizer;

    public function __construct(\$options = null)
    {
        if (\\is_array(\$options)) {
            if (\\array_key_exists('checkDNS', \$options)) {
                @trigger_error(sprintf('The \"checkDNS\" option in \"%s\" is deprecated since Symfony 4.1. Its false-positive rate is too high to be relied upon.', self::class), E_USER_DEPRECATED);
            }
            if (\\array_key_exists('dnsMessage', \$options)) {
                @trigger_error(sprintf('The \"dnsMessage\" option in \"%s\" is deprecated since Symfony 4.1.', self::class), E_USER_DEPRECATED);
            }
        }

        parent::__construct(\$options);

        if (null !== \$this->normalizer && !\\is_callable(\$this->normalizer)) {
            throw new InvalidArgumentException(sprintf('The \"normalizer\" option must be a valid callable (\"%s\" given).', \\is_object(\$this->normalizer) ? \\get_class(\$this->normalizer) : \\gettype(\$this->normalizer)));
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Constraints/Url.php";
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

namespace Symfony\\Component\\Validator\\Constraints;

use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Exception\\InvalidArgumentException;

/**
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Url extends Constraint
{
    /**
     * @deprecated since Symfony 4.1
     */
    const CHECK_DNS_TYPE_ANY = 'ANY';

    /**
     * @deprecated since Symfony 4.1
     */
    const CHECK_DNS_TYPE_NONE = false;

    /**
     * @deprecated since Symfony 4.1
     */
    const CHECK_DNS_TYPE_A = 'A';

    /**
     * @deprecated since Symfony 4.1
     */
    const CHECK_DNS_TYPE_A6 = 'A6';

    /**
     * @deprecated since Symfony 4.1
     */
    const CHECK_DNS_TYPE_AAAA = 'AAAA';

    /**
     * @deprecated since Symfony 4.1
     */
    const CHECK_DNS_TYPE_CNAME = 'CNAME';

    /**
     * @deprecated since Symfony 4.1
     */
    const CHECK_DNS_TYPE_MX = 'MX';

    /**
     * @deprecated since Symfony 4.1
     */
    const CHECK_DNS_TYPE_NAPTR = 'NAPTR';

    /**
     * @deprecated since Symfony 4.1
     */
    const CHECK_DNS_TYPE_NS = 'NS';

    /**
     * @deprecated since Symfony 4.1
     */
    const CHECK_DNS_TYPE_PTR = 'PTR';

    /**
     * @deprecated since Symfony 4.1
     */
    const CHECK_DNS_TYPE_SOA = 'SOA';

    /**
     * @deprecated since Symfony 4.1
     */
    const CHECK_DNS_TYPE_SRV = 'SRV';

    /**
     * @deprecated since Symfony 4.1
     */
    const CHECK_DNS_TYPE_TXT = 'TXT';

    const INVALID_URL_ERROR = '57c2f299-1154-4870-89bb-ef3b1f5ad229';

    protected static \$errorNames = [
        self::INVALID_URL_ERROR => 'INVALID_URL_ERROR',
    ];

    public \$message = 'This value is not a valid URL.';

    /**
     * @deprecated since Symfony 4.1
     */
    public \$dnsMessage = 'The host could not be resolved.';
    public \$protocols = ['http', 'https'];

    /**
     * @deprecated since Symfony 4.1
     */
    public \$checkDNS = self::CHECK_DNS_TYPE_NONE;
    public \$relativeProtocol = false;
    public \$normalizer;

    public function __construct(\$options = null)
    {
        if (\\is_array(\$options)) {
            if (\\array_key_exists('checkDNS', \$options)) {
                @trigger_error(sprintf('The \"checkDNS\" option in \"%s\" is deprecated since Symfony 4.1. Its false-positive rate is too high to be relied upon.', self::class), E_USER_DEPRECATED);
            }
            if (\\array_key_exists('dnsMessage', \$options)) {
                @trigger_error(sprintf('The \"dnsMessage\" option in \"%s\" is deprecated since Symfony 4.1.', self::class), E_USER_DEPRECATED);
            }
        }

        parent::__construct(\$options);

        if (null !== \$this->normalizer && !\\is_callable(\$this->normalizer)) {
            throw new InvalidArgumentException(sprintf('The \"normalizer\" option must be a valid callable (\"%s\" given).', \\is_object(\$this->normalizer) ? \\get_class(\$this->normalizer) : \\gettype(\$this->normalizer)));
        }
    }
}
", "vendor/symfony/validator/Constraints/Url.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/Url.php");
    }
}
