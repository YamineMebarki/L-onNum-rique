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

/* vendor/symfony/form/Extension/Core/DataTransformer/DateTimeToTimestampTransformer.php */
class __TwigTemplate_71ec0d41c8a3a87661d35f441dff184f68cc25ad0eb0d4905e63795bf524c825 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/DateTimeToTimestampTransformer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/DateTimeToTimestampTransformer.php"));

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

namespace Symfony\\Component\\Form\\Extension\\Core\\DataTransformer;

use Symfony\\Component\\Form\\Exception\\TransformationFailedException;

/**
 * Transforms between a timestamp and a DateTime object.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @author Florian Eckerstorfer <florian@eckerstorfer.org>
 */
class DateTimeToTimestampTransformer extends BaseDateTimeTransformer
{
    /**
     * Transforms a DateTime object into a timestamp in the configured timezone.
     *
     * @param \\DateTimeInterface \$dateTime A DateTimeInterface object
     *
     * @return int|null A timestamp
     *
     * @throws TransformationFailedException If the given value is not a \\DateTimeInterface
     */
    public function transform(\$dateTime)
    {
        if (null === \$dateTime) {
            return null;
        }

        if (!\$dateTime instanceof \\DateTimeInterface) {
            throw new TransformationFailedException('Expected a \\DateTimeInterface.');
        }

        return \$dateTime->getTimestamp();
    }

    /**
     * Transforms a timestamp in the configured timezone into a DateTime object.
     *
     * @param string \$value A timestamp
     *
     * @return \\DateTime|null A \\DateTime object
     *
     * @throws TransformationFailedException If the given value is not a timestamp
     *                                       or if the given timestamp is invalid
     */
    public function reverseTransform(\$value)
    {
        if (null === \$value) {
            return null;
        }

        if (!is_numeric(\$value)) {
            throw new TransformationFailedException('Expected a numeric.');
        }

        try {
            \$dateTime = new \\DateTime();
            \$dateTime->setTimezone(new \\DateTimeZone(\$this->outputTimezone));
            \$dateTime->setTimestamp(\$value);

            if (\$this->inputTimezone !== \$this->outputTimezone) {
                \$dateTime->setTimezone(new \\DateTimeZone(\$this->inputTimezone));
            }
        } catch (\\Exception \$e) {
            throw new TransformationFailedException(\$e->getMessage(), \$e->getCode(), \$e);
        }

        return \$dateTime;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/DataTransformer/DateTimeToTimestampTransformer.php";
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

namespace Symfony\\Component\\Form\\Extension\\Core\\DataTransformer;

use Symfony\\Component\\Form\\Exception\\TransformationFailedException;

/**
 * Transforms between a timestamp and a DateTime object.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @author Florian Eckerstorfer <florian@eckerstorfer.org>
 */
class DateTimeToTimestampTransformer extends BaseDateTimeTransformer
{
    /**
     * Transforms a DateTime object into a timestamp in the configured timezone.
     *
     * @param \\DateTimeInterface \$dateTime A DateTimeInterface object
     *
     * @return int|null A timestamp
     *
     * @throws TransformationFailedException If the given value is not a \\DateTimeInterface
     */
    public function transform(\$dateTime)
    {
        if (null === \$dateTime) {
            return null;
        }

        if (!\$dateTime instanceof \\DateTimeInterface) {
            throw new TransformationFailedException('Expected a \\DateTimeInterface.');
        }

        return \$dateTime->getTimestamp();
    }

    /**
     * Transforms a timestamp in the configured timezone into a DateTime object.
     *
     * @param string \$value A timestamp
     *
     * @return \\DateTime|null A \\DateTime object
     *
     * @throws TransformationFailedException If the given value is not a timestamp
     *                                       or if the given timestamp is invalid
     */
    public function reverseTransform(\$value)
    {
        if (null === \$value) {
            return null;
        }

        if (!is_numeric(\$value)) {
            throw new TransformationFailedException('Expected a numeric.');
        }

        try {
            \$dateTime = new \\DateTime();
            \$dateTime->setTimezone(new \\DateTimeZone(\$this->outputTimezone));
            \$dateTime->setTimestamp(\$value);

            if (\$this->inputTimezone !== \$this->outputTimezone) {
                \$dateTime->setTimezone(new \\DateTimeZone(\$this->inputTimezone));
            }
        } catch (\\Exception \$e) {
            throw new TransformationFailedException(\$e->getMessage(), \$e->getCode(), \$e);
        }

        return \$dateTime;
    }
}
", "vendor/symfony/form/Extension/Core/DataTransformer/DateTimeToTimestampTransformer.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/DataTransformer/DateTimeToTimestampTransformer.php");
    }
}
