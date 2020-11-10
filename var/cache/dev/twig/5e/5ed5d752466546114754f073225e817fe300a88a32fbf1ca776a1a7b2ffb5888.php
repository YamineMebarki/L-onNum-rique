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

/* vendor/symfony/validator/Constraints/Timezone.php */
class __TwigTemplate_79c34ec924f6cae9cec3c93ec189fba882c82af3c113b75e443954af9ab869b6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Timezone.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Timezone.php"));

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

/**
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Javier Spagnoletti <phansys@gmail.com>
 * @author Hugo Hamon <hugohamon@neuf.fr>
 */
class Timezone extends Constraint
{
    public const TIMEZONE_IDENTIFIER_ERROR = '5ce113e6-5e64-4ea2-90fe-d2233956db13';
    public const TIMEZONE_IDENTIFIER_IN_ZONE_ERROR = 'b57767b1-36c0-40ac-a3d7-629420c775b8';
    public const TIMEZONE_IDENTIFIER_IN_COUNTRY_ERROR = 'c4a22222-dc92-4fc0-abb0-d95b268c7d0b';
    public const TIMEZONE_IDENTIFIER_INTL_ERROR = '45863c26-88dc-41ba-bf53-c73bd1f7e90d';

    public \$zone = \\DateTimeZone::ALL;
    public \$countryCode;
    public \$intlCompatible = false;
    public \$message = 'This value is not a valid timezone.';

    protected static \$errorNames = [
        self::TIMEZONE_IDENTIFIER_ERROR => 'TIMEZONE_IDENTIFIER_ERROR',
        self::TIMEZONE_IDENTIFIER_IN_ZONE_ERROR => 'TIMEZONE_IDENTIFIER_IN_ZONE_ERROR',
        self::TIMEZONE_IDENTIFIER_IN_COUNTRY_ERROR => 'TIMEZONE_IDENTIFIER_IN_COUNTRY_ERROR',
        self::TIMEZONE_IDENTIFIER_INTL_ERROR => 'TIMEZONE_IDENTIFIER_INTL_ERROR',
    ];

    /**
     * {@inheritdoc}
     */
    public function __construct(\$options = null)
    {
        parent::__construct(\$options);

        if (null === \$this->countryCode) {
            if (0 >= \$this->zone || \\DateTimeZone::ALL_WITH_BC < \$this->zone) {
                throw new ConstraintDefinitionException('The option \"zone\" must be a valid range of \"\\DateTimeZone\" constants.');
            }
        } elseif (\\DateTimeZone::PER_COUNTRY !== (\\DateTimeZone::PER_COUNTRY & \$this->zone)) {
            throw new ConstraintDefinitionException('The option \"countryCode\" can only be used when the \"zone\" option is configured with \"\\DateTimeZone::PER_COUNTRY\".');
        }
        if (\$this->intlCompatible && !class_exists(\\IntlTimeZone::class)) {
            throw new ConstraintDefinitionException('The option \"intlCompatible\" can only be used when the PHP intl extension is available.');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultOption()
    {
        return 'zone';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Constraints/Timezone.php";
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

/**
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Javier Spagnoletti <phansys@gmail.com>
 * @author Hugo Hamon <hugohamon@neuf.fr>
 */
class Timezone extends Constraint
{
    public const TIMEZONE_IDENTIFIER_ERROR = '5ce113e6-5e64-4ea2-90fe-d2233956db13';
    public const TIMEZONE_IDENTIFIER_IN_ZONE_ERROR = 'b57767b1-36c0-40ac-a3d7-629420c775b8';
    public const TIMEZONE_IDENTIFIER_IN_COUNTRY_ERROR = 'c4a22222-dc92-4fc0-abb0-d95b268c7d0b';
    public const TIMEZONE_IDENTIFIER_INTL_ERROR = '45863c26-88dc-41ba-bf53-c73bd1f7e90d';

    public \$zone = \\DateTimeZone::ALL;
    public \$countryCode;
    public \$intlCompatible = false;
    public \$message = 'This value is not a valid timezone.';

    protected static \$errorNames = [
        self::TIMEZONE_IDENTIFIER_ERROR => 'TIMEZONE_IDENTIFIER_ERROR',
        self::TIMEZONE_IDENTIFIER_IN_ZONE_ERROR => 'TIMEZONE_IDENTIFIER_IN_ZONE_ERROR',
        self::TIMEZONE_IDENTIFIER_IN_COUNTRY_ERROR => 'TIMEZONE_IDENTIFIER_IN_COUNTRY_ERROR',
        self::TIMEZONE_IDENTIFIER_INTL_ERROR => 'TIMEZONE_IDENTIFIER_INTL_ERROR',
    ];

    /**
     * {@inheritdoc}
     */
    public function __construct(\$options = null)
    {
        parent::__construct(\$options);

        if (null === \$this->countryCode) {
            if (0 >= \$this->zone || \\DateTimeZone::ALL_WITH_BC < \$this->zone) {
                throw new ConstraintDefinitionException('The option \"zone\" must be a valid range of \"\\DateTimeZone\" constants.');
            }
        } elseif (\\DateTimeZone::PER_COUNTRY !== (\\DateTimeZone::PER_COUNTRY & \$this->zone)) {
            throw new ConstraintDefinitionException('The option \"countryCode\" can only be used when the \"zone\" option is configured with \"\\DateTimeZone::PER_COUNTRY\".');
        }
        if (\$this->intlCompatible && !class_exists(\\IntlTimeZone::class)) {
            throw new ConstraintDefinitionException('The option \"intlCompatible\" can only be used when the PHP intl extension is available.');
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultOption()
    {
        return 'zone';
    }
}
", "vendor/symfony/validator/Constraints/Timezone.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/Timezone.php");
    }
}
