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

/* vendor/symfony/validator/Constraints/Bic.php */
class __TwigTemplate_87dd9bc4946ecfc95cf573ab4d0fbd6c8dd152e607f5c8306007594b1cdb7999 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Bic.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Bic.php"));

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

use Symfony\\Component\\Intl\\Countries;
use Symfony\\Component\\PropertyAccess\\PropertyAccess;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;
use Symfony\\Component\\Validator\\Exception\\LogicException;

/**
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Michael Hirschler <michael.vhirsch@gmail.com>
 */
class Bic extends Constraint
{
    const INVALID_LENGTH_ERROR = '66dad313-af0b-4214-8566-6c799be9789c';
    const INVALID_CHARACTERS_ERROR = 'f424c529-7add-4417-8f2d-4b656e4833e2';
    const INVALID_BANK_CODE_ERROR = '00559357-6170-4f29-aebd-d19330aa19cf';
    const INVALID_COUNTRY_CODE_ERROR = '1ce76f8d-3c1f-451c-9e62-fe9c3ed486ae';
    const INVALID_CASE_ERROR = '11884038-3312-4ae5-9d04-699f782130c7';
    const INVALID_IBAN_COUNTRY_CODE_ERROR = '29a2c3bb-587b-4996-b6f5-53081364cea5';

    protected static \$errorNames = [
        self::INVALID_LENGTH_ERROR => 'INVALID_LENGTH_ERROR',
        self::INVALID_CHARACTERS_ERROR => 'INVALID_CHARACTERS_ERROR',
        self::INVALID_BANK_CODE_ERROR => 'INVALID_BANK_CODE_ERROR',
        self::INVALID_COUNTRY_CODE_ERROR => 'INVALID_COUNTRY_CODE_ERROR',
        self::INVALID_CASE_ERROR => 'INVALID_CASE_ERROR',
    ];

    public \$message = 'This is not a valid Business Identifier Code (BIC).';
    public \$ibanMessage = 'This Business Identifier Code (BIC) is not associated with IBAN ";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["iban"]) || array_key_exists("iban", $context) ? $context["iban"] : (function () { throw new RuntimeError('Variable "iban" does not exist.', 44, $this->source); })()), "html", null, true);
        echo ".';
    public \$iban;
    public \$ibanPropertyPath;

    public function __construct(\$options = null)
    {
        if (!class_exists(Countries::class)) {
            // throw new LogicException('The Intl component is required to use the Bic constraint. Try running \"composer require symfony/intl\".');
            @trigger_error(sprintf('Using the \"%s\" constraint without the \"symfony/intl\" component installed is deprecated since Symfony 4.2.', __CLASS__), E_USER_DEPRECATED);
        }

        if (isset(\$options['iban']) && isset(\$options['ibanPropertyPath'])) {
            throw new ConstraintDefinitionException('The \"iban\" and \"ibanPropertyPath\" options of the Iban constraint cannot be used at the same time.');
        }

        if (isset(\$options['ibanPropertyPath']) && !class_exists(PropertyAccess::class)) {
            throw new LogicException(sprintf('The \"symfony/property-access\" component is required to use the \"%s\" constraint with the \"ibanPropertyPath\" option.', self::class));
        }

        parent::__construct(\$options);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Constraints/Bic.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 44,  43 => 1,);
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

use Symfony\\Component\\Intl\\Countries;
use Symfony\\Component\\PropertyAccess\\PropertyAccess;
use Symfony\\Component\\Validator\\Constraint;
use Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException;
use Symfony\\Component\\Validator\\Exception\\LogicException;

/**
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Michael Hirschler <michael.vhirsch@gmail.com>
 */
class Bic extends Constraint
{
    const INVALID_LENGTH_ERROR = '66dad313-af0b-4214-8566-6c799be9789c';
    const INVALID_CHARACTERS_ERROR = 'f424c529-7add-4417-8f2d-4b656e4833e2';
    const INVALID_BANK_CODE_ERROR = '00559357-6170-4f29-aebd-d19330aa19cf';
    const INVALID_COUNTRY_CODE_ERROR = '1ce76f8d-3c1f-451c-9e62-fe9c3ed486ae';
    const INVALID_CASE_ERROR = '11884038-3312-4ae5-9d04-699f782130c7';
    const INVALID_IBAN_COUNTRY_CODE_ERROR = '29a2c3bb-587b-4996-b6f5-53081364cea5';

    protected static \$errorNames = [
        self::INVALID_LENGTH_ERROR => 'INVALID_LENGTH_ERROR',
        self::INVALID_CHARACTERS_ERROR => 'INVALID_CHARACTERS_ERROR',
        self::INVALID_BANK_CODE_ERROR => 'INVALID_BANK_CODE_ERROR',
        self::INVALID_COUNTRY_CODE_ERROR => 'INVALID_COUNTRY_CODE_ERROR',
        self::INVALID_CASE_ERROR => 'INVALID_CASE_ERROR',
    ];

    public \$message = 'This is not a valid Business Identifier Code (BIC).';
    public \$ibanMessage = 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.';
    public \$iban;
    public \$ibanPropertyPath;

    public function __construct(\$options = null)
    {
        if (!class_exists(Countries::class)) {
            // throw new LogicException('The Intl component is required to use the Bic constraint. Try running \"composer require symfony/intl\".');
            @trigger_error(sprintf('Using the \"%s\" constraint without the \"symfony/intl\" component installed is deprecated since Symfony 4.2.', __CLASS__), E_USER_DEPRECATED);
        }

        if (isset(\$options['iban']) && isset(\$options['ibanPropertyPath'])) {
            throw new ConstraintDefinitionException('The \"iban\" and \"ibanPropertyPath\" options of the Iban constraint cannot be used at the same time.');
        }

        if (isset(\$options['ibanPropertyPath']) && !class_exists(PropertyAccess::class)) {
            throw new LogicException(sprintf('The \"symfony/property-access\" component is required to use the \"%s\" constraint with the \"ibanPropertyPath\" option.', self::class));
        }

        parent::__construct(\$options);
    }
}
", "vendor/symfony/validator/Constraints/Bic.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/Bic.php");
    }
}
