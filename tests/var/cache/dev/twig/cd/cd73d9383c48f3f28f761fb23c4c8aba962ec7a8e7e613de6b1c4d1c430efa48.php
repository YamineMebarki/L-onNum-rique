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

/* vendor/symfony/validator/Constraints/Iban.php */
class __TwigTemplate_f9c211de82b963bebe06455408567ad49b401dd56314640b77bab93f15440076 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Iban.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Iban.php"));

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

/**
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Manuel Reinhard <manu@sprain.ch>
 * @author Michael Schummel
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Iban extends Constraint
{
    const INVALID_COUNTRY_CODE_ERROR = 'de78ee2c-bd50-44e2-aec8-3d8228aeadb9';
    const INVALID_CHARACTERS_ERROR = '8d3d85e4-784f-4719-a5bc-d9e40d45a3a5';
    const CHECKSUM_FAILED_ERROR = 'b9401321-f9bf-4dcb-83c1-f31094440795';
    const INVALID_FORMAT_ERROR = 'c8d318f1-2ecc-41ba-b983-df70d225cf5a';
    const NOT_SUPPORTED_COUNTRY_CODE_ERROR = 'e2c259f3-4b46-48e6-b72e-891658158ec8';

    protected static \$errorNames = [
        self::INVALID_COUNTRY_CODE_ERROR => 'INVALID_COUNTRY_CODE_ERROR',
        self::INVALID_CHARACTERS_ERROR => 'INVALID_CHARACTERS_ERROR',
        self::CHECKSUM_FAILED_ERROR => 'CHECKSUM_FAILED_ERROR',
        self::INVALID_FORMAT_ERROR => 'INVALID_FORMAT_ERROR',
        self::NOT_SUPPORTED_COUNTRY_CODE_ERROR => 'NOT_SUPPORTED_COUNTRY_CODE_ERROR',
    ];

    public \$message = 'This is not a valid International Bank Account Number (IBAN).';
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Constraints/Iban.php";
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

/**
 * @Annotation
 * @Target({\"PROPERTY\", \"METHOD\", \"ANNOTATION\"})
 *
 * @author Manuel Reinhard <manu@sprain.ch>
 * @author Michael Schummel
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Iban extends Constraint
{
    const INVALID_COUNTRY_CODE_ERROR = 'de78ee2c-bd50-44e2-aec8-3d8228aeadb9';
    const INVALID_CHARACTERS_ERROR = '8d3d85e4-784f-4719-a5bc-d9e40d45a3a5';
    const CHECKSUM_FAILED_ERROR = 'b9401321-f9bf-4dcb-83c1-f31094440795';
    const INVALID_FORMAT_ERROR = 'c8d318f1-2ecc-41ba-b983-df70d225cf5a';
    const NOT_SUPPORTED_COUNTRY_CODE_ERROR = 'e2c259f3-4b46-48e6-b72e-891658158ec8';

    protected static \$errorNames = [
        self::INVALID_COUNTRY_CODE_ERROR => 'INVALID_COUNTRY_CODE_ERROR',
        self::INVALID_CHARACTERS_ERROR => 'INVALID_CHARACTERS_ERROR',
        self::CHECKSUM_FAILED_ERROR => 'CHECKSUM_FAILED_ERROR',
        self::INVALID_FORMAT_ERROR => 'INVALID_FORMAT_ERROR',
        self::NOT_SUPPORTED_COUNTRY_CODE_ERROR => 'NOT_SUPPORTED_COUNTRY_CODE_ERROR',
    ];

    public \$message = 'This is not a valid International Bank Account Number (IBAN).';
}
", "vendor/symfony/validator/Constraints/Iban.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/Iban.php");
    }
}
