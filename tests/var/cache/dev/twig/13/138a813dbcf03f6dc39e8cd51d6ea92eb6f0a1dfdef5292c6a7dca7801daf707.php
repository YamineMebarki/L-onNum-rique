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

/* vendor/symfony/validator/Constraints/Isbn.php */
class __TwigTemplate_a2f2c5db4eb41f942a3b9d7b78f3d67124895a2389313e57c1ba76f87d3e4168 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Isbn.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Constraints/Isbn.php"));

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
 * @author The Whole Life To Learn <thewholelifetolearn@gmail.com>
 * @author Manuel Reinhard <manu@sprain.ch>
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Isbn extends Constraint
{
    const TOO_SHORT_ERROR = '949acbb0-8ef5-43ed-a0e9-032dfd08ae45';
    const TOO_LONG_ERROR = '3171387d-f80a-47b3-bd6e-60598545316a';
    const INVALID_CHARACTERS_ERROR = '23d21cea-da99-453d-98b1-a7d916fbb339';
    const CHECKSUM_FAILED_ERROR = '2881c032-660f-46b6-8153-d352d9706640';
    const TYPE_NOT_RECOGNIZED_ERROR = 'fa54a457-f042-441f-89c4-066ee5bdd3e1';

    protected static \$errorNames = [
        self::TOO_SHORT_ERROR => 'TOO_SHORT_ERROR',
        self::TOO_LONG_ERROR => 'TOO_LONG_ERROR',
        self::INVALID_CHARACTERS_ERROR => 'INVALID_CHARACTERS_ERROR',
        self::CHECKSUM_FAILED_ERROR => 'CHECKSUM_FAILED_ERROR',
        self::TYPE_NOT_RECOGNIZED_ERROR => 'TYPE_NOT_RECOGNIZED_ERROR',
    ];

    public \$isbn10Message = 'This value is not a valid ISBN-10.';
    public \$isbn13Message = 'This value is not a valid ISBN-13.';
    public \$bothIsbnMessage = 'This value is neither a valid ISBN-10 nor a valid ISBN-13.';
    public \$type;
    public \$message;

    /**
     * {@inheritdoc}
     */
    public function getDefaultOption()
    {
        return 'type';
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Constraints/Isbn.php";
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
 * @author The Whole Life To Learn <thewholelifetolearn@gmail.com>
 * @author Manuel Reinhard <manu@sprain.ch>
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Isbn extends Constraint
{
    const TOO_SHORT_ERROR = '949acbb0-8ef5-43ed-a0e9-032dfd08ae45';
    const TOO_LONG_ERROR = '3171387d-f80a-47b3-bd6e-60598545316a';
    const INVALID_CHARACTERS_ERROR = '23d21cea-da99-453d-98b1-a7d916fbb339';
    const CHECKSUM_FAILED_ERROR = '2881c032-660f-46b6-8153-d352d9706640';
    const TYPE_NOT_RECOGNIZED_ERROR = 'fa54a457-f042-441f-89c4-066ee5bdd3e1';

    protected static \$errorNames = [
        self::TOO_SHORT_ERROR => 'TOO_SHORT_ERROR',
        self::TOO_LONG_ERROR => 'TOO_LONG_ERROR',
        self::INVALID_CHARACTERS_ERROR => 'INVALID_CHARACTERS_ERROR',
        self::CHECKSUM_FAILED_ERROR => 'CHECKSUM_FAILED_ERROR',
        self::TYPE_NOT_RECOGNIZED_ERROR => 'TYPE_NOT_RECOGNIZED_ERROR',
    ];

    public \$isbn10Message = 'This value is not a valid ISBN-10.';
    public \$isbn13Message = 'This value is not a valid ISBN-13.';
    public \$bothIsbnMessage = 'This value is neither a valid ISBN-10 nor a valid ISBN-13.';
    public \$type;
    public \$message;

    /**
     * {@inheritdoc}
     */
    public function getDefaultOption()
    {
        return 'type';
    }
}
", "vendor/symfony/validator/Constraints/Isbn.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Constraints/Isbn.php");
    }
}
