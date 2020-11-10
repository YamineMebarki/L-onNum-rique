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

/* vendor/symfony/form/Extension/Core/DataTransformer/DateTimeImmutableToDateTimeTransformer.php */
class __TwigTemplate_1d1d297b8c9586601772597ab54815b5cb98b80d63180875b9129f8584692052 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/DateTimeImmutableToDateTimeTransformer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/DateTimeImmutableToDateTimeTransformer.php"));

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

use Symfony\\Component\\Form\\DataTransformerInterface;
use Symfony\\Component\\Form\\Exception\\TransformationFailedException;

/**
 * Transforms between a DateTimeImmutable object and a DateTime object.
 *
 * @author Valentin Udaltsov <udaltsov.valentin@gmail.com>
 */
final class DateTimeImmutableToDateTimeTransformer implements DataTransformerInterface
{
    /**
     * Transforms a DateTimeImmutable into a DateTime object.
     *
     * @param \\DateTimeImmutable|null \$value A DateTimeImmutable object
     *
     * @return \\DateTime|null A \\DateTime object
     *
     * @throws TransformationFailedException If the given value is not a \\DateTimeImmutable
     */
    public function transform(\$value)
    {
        if (null === \$value) {
            return null;
        }

        if (!\$value instanceof \\DateTimeImmutable) {
            throw new TransformationFailedException('Expected a \\DateTimeImmutable.');
        }

        return \\DateTime::createFromFormat(\\DateTime::RFC3339, \$value->format(\\DateTime::RFC3339));
    }

    /**
     * Transforms a DateTime object into a DateTimeImmutable object.
     *
     * @param \\DateTime|null \$value A DateTime object
     *
     * @return \\DateTimeImmutable|null A DateTimeImmutable object
     *
     * @throws TransformationFailedException If the given value is not a \\DateTime
     */
    public function reverseTransform(\$value)
    {
        if (null === \$value) {
            return null;
        }

        if (!\$value instanceof \\DateTime) {
            throw new TransformationFailedException('Expected a \\DateTime.');
        }

        return \\DateTimeImmutable::createFromMutable(\$value);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/DataTransformer/DateTimeImmutableToDateTimeTransformer.php";
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

use Symfony\\Component\\Form\\DataTransformerInterface;
use Symfony\\Component\\Form\\Exception\\TransformationFailedException;

/**
 * Transforms between a DateTimeImmutable object and a DateTime object.
 *
 * @author Valentin Udaltsov <udaltsov.valentin@gmail.com>
 */
final class DateTimeImmutableToDateTimeTransformer implements DataTransformerInterface
{
    /**
     * Transforms a DateTimeImmutable into a DateTime object.
     *
     * @param \\DateTimeImmutable|null \$value A DateTimeImmutable object
     *
     * @return \\DateTime|null A \\DateTime object
     *
     * @throws TransformationFailedException If the given value is not a \\DateTimeImmutable
     */
    public function transform(\$value)
    {
        if (null === \$value) {
            return null;
        }

        if (!\$value instanceof \\DateTimeImmutable) {
            throw new TransformationFailedException('Expected a \\DateTimeImmutable.');
        }

        return \\DateTime::createFromFormat(\\DateTime::RFC3339, \$value->format(\\DateTime::RFC3339));
    }

    /**
     * Transforms a DateTime object into a DateTimeImmutable object.
     *
     * @param \\DateTime|null \$value A DateTime object
     *
     * @return \\DateTimeImmutable|null A DateTimeImmutable object
     *
     * @throws TransformationFailedException If the given value is not a \\DateTime
     */
    public function reverseTransform(\$value)
    {
        if (null === \$value) {
            return null;
        }

        if (!\$value instanceof \\DateTime) {
            throw new TransformationFailedException('Expected a \\DateTime.');
        }

        return \\DateTimeImmutable::createFromMutable(\$value);
    }
}
", "vendor/symfony/form/Extension/Core/DataTransformer/DateTimeImmutableToDateTimeTransformer.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/DataTransformer/DateTimeImmutableToDateTimeTransformer.php");
    }
}
