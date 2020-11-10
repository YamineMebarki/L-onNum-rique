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

/* vendor/symfony/validator/Constraints/Ip.php */
class __TwigTemplate_4e49c378ed1c3a60ceb93f47d4435212c8f24767b1d600b0d6c98521aa2c1a4e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Ip.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Ip.php"));

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
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;
use Symfony\\Component\\Validator\\Exception\\InvalidArgumentException;

/**
 * Validates that a value is a valid IP address.
 *
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @author Joseph Bielawski <stloyd@gmail.com>
 */
class Ip extends Constraint
{
    const V4 = '4';
    const V6 = '6';
    const ALL = 'all';

    // adds FILTER_FLAG_NO_PRIV_RANGE flag (skip private ranges)
    const V4_NO_PRIV = '4_no_priv';
    const V6_NO_PRIV = '6_no_priv';
    const ALL_NO_PRIV = 'all_no_priv';

    // adds FILTER_FLAG_NO_RES_RANGE flag (skip reserved ranges)
    const V4_NO_RES = '4_no_res';
    const V6_NO_RES = '6_no_res';
    const ALL_NO_RES = 'all_no_res';

    // adds FILTER_FLAG_NO_PRIV_RANGE and FILTER_FLAG_NO_RES_RANGE flags (skip both)
    const V4_ONLY_PUBLIC = '4_public';
    const V6_ONLY_PUBLIC = '6_public';
    const ALL_ONLY_PUBLIC = 'all_public';

    const INVALID_IP_ERROR = 'b1b427ae-9f6f-41b0-aa9b-84511fbb3c5b';

    protected static \$versions = [
        self::V4,
        self::V6,
        self::ALL,

        self::V4_NO_PRIV,
        self::V6_NO_PRIV,
        self::ALL_NO_PRIV,

        self::V4_NO_RES,
        self::V6_NO_RES,
        self::ALL_NO_RES,

        self::V4_ONLY_PUBLIC,
        self::V6_ONLY_PUBLIC,
        self::ALL_ONLY_PUBLIC,
    ];

    protected static \$errorNames = [
        self::INVALID_IP_ERROR => 'INVALID_IP_ERROR',
    ];

    public \$version = self::V4;

    public \$message = 'This is not a valid IP address.';

    public \$normalizer;

    /**
     * {@inheritdoc}
     */
    public function __construct(\$options = null)
    {
        parent::__construct(\$options);

        if (!\\in_array(\$this->version, self::\$versions)) {
            throw new ConstraintDefinitionException(sprintf('The option \"version\" must be one of \"%s\"', implode('\", \"', self::\$versions)));
        }

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
        return "vendor/symfony/validator/Constraints/Ip.php";
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
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;
use Symfony\\Component\\Validator\\Exception\\InvalidArgumentException;

/**
 * Validates that a value is a valid IP address.
 *
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @author Joseph Bielawski <stloyd@gmail.com>
 */
class Ip extends Constraint
{
    const V4 = '4';
    const V6 = '6';
    const ALL = 'all';

    // adds FILTER_FLAG_NO_PRIV_RANGE flag (skip private ranges)
    const V4_NO_PRIV = '4_no_priv';
    const V6_NO_PRIV = '6_no_priv';
    const ALL_NO_PRIV = 'all_no_priv';

    // adds FILTER_FLAG_NO_RES_RANGE flag (skip reserved ranges)
    const V4_NO_RES = '4_no_res';
    const V6_NO_RES = '6_no_res';
    const ALL_NO_RES = 'all_no_res';

    // adds FILTER_FLAG_NO_PRIV_RANGE and FILTER_FLAG_NO_RES_RANGE flags (skip both)
    const V4_ONLY_PUBLIC = '4_public';
    const V6_ONLY_PUBLIC = '6_public';
    const ALL_ONLY_PUBLIC = 'all_public';

    const INVALID_IP_ERROR = 'b1b427ae-9f6f-41b0-aa9b-84511fbb3c5b';

    protected static \$versions = [
        self::V4,
        self::V6,
        self::ALL,

        self::V4_NO_PRIV,
        self::V6_NO_PRIV,
        self::ALL_NO_PRIV,

        self::V4_NO_RES,
        self::V6_NO_RES,
        self::ALL_NO_RES,

        self::V4_ONLY_PUBLIC,
        self::V6_ONLY_PUBLIC,
        self::ALL_ONLY_PUBLIC,
    ];

    protected static \$errorNames = [
        self::INVALID_IP_ERROR => 'INVALID_IP_ERROR',
    ];

    public \$version = self::V4;

    public \$message = 'This is not a valid IP address.';

    public \$normalizer;

    /**
     * {@inheritdoc}
     */
    public function __construct(\$options = null)
    {
        parent::__construct(\$options);

        if (!\\in_array(\$this->version, self::\$versions)) {
            throw new ConstraintDefinitionException(sprintf('The option \"version\" must be one of \"%s\"', implode('\", \"', self::\$versions)));
        }

        if (null !== \$this->normalizer && !\\is_callable(\$this->normalizer)) {
            throw new InvalidArgumentException(sprintf('The \"normalizer\" option must be a valid callable (\"%s\" given).', \\is_object(\$this->normalizer) ? \\get_class(\$this->normalizer) : \\gettype(\$this->normalizer)));
        }
    }
}
", "vendor/symfony/validator/Constraints/Ip.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/Ip.php");
    }
}
