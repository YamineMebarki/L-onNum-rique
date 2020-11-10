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

/* vendor/symfony/validator/Constraints/Uuid.php */
class __TwigTemplate_4b48219fb163837707f9d37bbc9c6f4b7fa8e4fb338d7946d75781add05aa980 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Uuid.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Uuid.php"));

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
 *
 * @author Colin O'Dell <colinodell@gmail.com>
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Uuid extends Constraint
{
    const TOO_SHORT_ERROR = 'aa314679-dac9-4f54-bf97-b2049df8f2a3';
    const TOO_LONG_ERROR = '494897dd-36f8-4d31-8923-71a8d5f3000d';
    const INVALID_CHARACTERS_ERROR = '51120b12-a2bc-41bf-aa53-cd73daf330d0';
    const INVALID_HYPHEN_PLACEMENT_ERROR = '98469c83-0309-4f5d-bf95-a496dcaa869c';
    const INVALID_VERSION_ERROR = '21ba13b4-b185-4882-ac6f-d147355987eb';
    const INVALID_VARIANT_ERROR = '164ef693-2b9d-46de-ad7f-836201f0c2db';

    protected static \$errorNames = [
        self::TOO_SHORT_ERROR => 'TOO_SHORT_ERROR',
        self::TOO_LONG_ERROR => 'TOO_LONG_ERROR',
        self::INVALID_CHARACTERS_ERROR => 'INVALID_CHARACTERS_ERROR',
        self::INVALID_HYPHEN_PLACEMENT_ERROR => 'INVALID_HYPHEN_PLACEMENT_ERROR',
        self::INVALID_VERSION_ERROR => 'INVALID_VERSION_ERROR',
        self::INVALID_VARIANT_ERROR => 'INVALID_VARIANT_ERROR',
    ];

    // Possible versions defined by RFC 4122
    const V1_MAC = 1;
    const V2_DCE = 2;
    const V3_MD5 = 3;
    const V4_RANDOM = 4;
    const V5_SHA1 = 5;

    /**
     * Message to display when validation fails.
     *
     * @var string
     */
    public \$message = 'This is not a valid UUID.';

    /**
     * Strict mode only allows UUIDs that meet the formal definition and formatting per RFC 4122.
     *
     * Set this to `false` to allow legacy formats with different dash positioning or wrapping characters
     *
     * @var bool
     */
    public \$strict = true;

    /**
     * Array of allowed versions (see version constants above).
     *
     * All UUID versions are allowed by default
     *
     * @var int[]
     */
    public \$versions = [
        self::V1_MAC,
        self::V2_DCE,
        self::V3_MD5,
        self::V4_RANDOM,
        self::V5_SHA1,
    ];

    public \$normalizer;

    public function __construct(\$options = null)
    {
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
        return "vendor/symfony/validator/Constraints/Uuid.php";
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
 *
 * @author Colin O'Dell <colinodell@gmail.com>
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Uuid extends Constraint
{
    const TOO_SHORT_ERROR = 'aa314679-dac9-4f54-bf97-b2049df8f2a3';
    const TOO_LONG_ERROR = '494897dd-36f8-4d31-8923-71a8d5f3000d';
    const INVALID_CHARACTERS_ERROR = '51120b12-a2bc-41bf-aa53-cd73daf330d0';
    const INVALID_HYPHEN_PLACEMENT_ERROR = '98469c83-0309-4f5d-bf95-a496dcaa869c';
    const INVALID_VERSION_ERROR = '21ba13b4-b185-4882-ac6f-d147355987eb';
    const INVALID_VARIANT_ERROR = '164ef693-2b9d-46de-ad7f-836201f0c2db';

    protected static \$errorNames = [
        self::TOO_SHORT_ERROR => 'TOO_SHORT_ERROR',
        self::TOO_LONG_ERROR => 'TOO_LONG_ERROR',
        self::INVALID_CHARACTERS_ERROR => 'INVALID_CHARACTERS_ERROR',
        self::INVALID_HYPHEN_PLACEMENT_ERROR => 'INVALID_HYPHEN_PLACEMENT_ERROR',
        self::INVALID_VERSION_ERROR => 'INVALID_VERSION_ERROR',
        self::INVALID_VARIANT_ERROR => 'INVALID_VARIANT_ERROR',
    ];

    // Possible versions defined by RFC 4122
    const V1_MAC = 1;
    const V2_DCE = 2;
    const V3_MD5 = 3;
    const V4_RANDOM = 4;
    const V5_SHA1 = 5;

    /**
     * Message to display when validation fails.
     *
     * @var string
     */
    public \$message = 'This is not a valid UUID.';

    /**
     * Strict mode only allows UUIDs that meet the formal definition and formatting per RFC 4122.
     *
     * Set this to `false` to allow legacy formats with different dash positioning or wrapping characters
     *
     * @var bool
     */
    public \$strict = true;

    /**
     * Array of allowed versions (see version constants above).
     *
     * All UUID versions are allowed by default
     *
     * @var int[]
     */
    public \$versions = [
        self::V1_MAC,
        self::V2_DCE,
        self::V3_MD5,
        self::V4_RANDOM,
        self::V5_SHA1,
    ];

    public \$normalizer;

    public function __construct(\$options = null)
    {
        parent::__construct(\$options);

        if (null !== \$this->normalizer && !\\is_callable(\$this->normalizer)) {
            throw new InvalidArgumentException(sprintf('The \"normalizer\" option must be a valid callable (\"%s\" given).', \\is_object(\$this->normalizer) ? \\get_class(\$this->normalizer) : \\gettype(\$this->normalizer)));
        }
    }
}
", "vendor/symfony/validator/Constraints/Uuid.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/Uuid.php");
    }
}
