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

/* vendor/symfony/form/Guess/Guess.php */
class __TwigTemplate_4bbc177e80f2630d8692f9cffe5e66495171e5df09712dc46d9326afe6ed59a2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Guess/Guess.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Guess/Guess.php"));

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

namespace Symfony\\Component\\Form\\Guess;

use Symfony\\Component\\Form\\Exception\\InvalidArgumentException;

/**
 * Base class for guesses made by TypeGuesserInterface implementation.
 *
 * Each instance contains a confidence value about the correctness of the guess.
 * Thus an instance with confidence HIGH_CONFIDENCE is more likely to be
 * correct than an instance with confidence LOW_CONFIDENCE.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class Guess
{
    /**
     * Marks an instance with a value that is extremely likely to be correct.
     */
    const VERY_HIGH_CONFIDENCE = 3;

    /**
     * Marks an instance with a value that is very likely to be correct.
     */
    const HIGH_CONFIDENCE = 2;

    /**
     * Marks an instance with a value that is likely to be correct.
     */
    const MEDIUM_CONFIDENCE = 1;

    /**
     * Marks an instance with a value that may be correct.
     */
    const LOW_CONFIDENCE = 0;

    /**
     * The confidence about the correctness of the value.
     *
     * One of VERY_HIGH_CONFIDENCE, HIGH_CONFIDENCE, MEDIUM_CONFIDENCE
     * and LOW_CONFIDENCE.
     *
     * @var int
     */
    private \$confidence;

    /**
     * Returns the guess most likely to be correct from a list of guesses.
     *
     * If there are multiple guesses with the same, highest confidence, the
     * returned guess is any of them.
     *
     * @param Guess[] \$guesses An array of guesses
     *
     * @return self|null
     */
    public static function getBestGuess(array \$guesses)
    {
        \$result = null;
        \$maxConfidence = -1;

        foreach (\$guesses as \$guess) {
            if (\$maxConfidence < \$confidence = \$guess->getConfidence()) {
                \$maxConfidence = \$confidence;
                \$result = \$guess;
            }
        }

        return \$result;
    }

    /**
     * @param int \$confidence The confidence
     *
     * @throws InvalidArgumentException if the given value of confidence is unknown
     */
    public function __construct(int \$confidence)
    {
        if (self::VERY_HIGH_CONFIDENCE !== \$confidence && self::HIGH_CONFIDENCE !== \$confidence &&
            self::MEDIUM_CONFIDENCE !== \$confidence && self::LOW_CONFIDENCE !== \$confidence) {
            throw new InvalidArgumentException('The confidence should be one of the constants defined in Guess.');
        }

        \$this->confidence = \$confidence;
    }

    /**
     * Returns the confidence that the guessed value is correct.
     *
     * @return int One of the constants VERY_HIGH_CONFIDENCE, HIGH_CONFIDENCE,
     *             MEDIUM_CONFIDENCE and LOW_CONFIDENCE
     */
    public function getConfidence()
    {
        return \$this->confidence;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Guess/Guess.php";
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

namespace Symfony\\Component\\Form\\Guess;

use Symfony\\Component\\Form\\Exception\\InvalidArgumentException;

/**
 * Base class for guesses made by TypeGuesserInterface implementation.
 *
 * Each instance contains a confidence value about the correctness of the guess.
 * Thus an instance with confidence HIGH_CONFIDENCE is more likely to be
 * correct than an instance with confidence LOW_CONFIDENCE.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
abstract class Guess
{
    /**
     * Marks an instance with a value that is extremely likely to be correct.
     */
    const VERY_HIGH_CONFIDENCE = 3;

    /**
     * Marks an instance with a value that is very likely to be correct.
     */
    const HIGH_CONFIDENCE = 2;

    /**
     * Marks an instance with a value that is likely to be correct.
     */
    const MEDIUM_CONFIDENCE = 1;

    /**
     * Marks an instance with a value that may be correct.
     */
    const LOW_CONFIDENCE = 0;

    /**
     * The confidence about the correctness of the value.
     *
     * One of VERY_HIGH_CONFIDENCE, HIGH_CONFIDENCE, MEDIUM_CONFIDENCE
     * and LOW_CONFIDENCE.
     *
     * @var int
     */
    private \$confidence;

    /**
     * Returns the guess most likely to be correct from a list of guesses.
     *
     * If there are multiple guesses with the same, highest confidence, the
     * returned guess is any of them.
     *
     * @param Guess[] \$guesses An array of guesses
     *
     * @return self|null
     */
    public static function getBestGuess(array \$guesses)
    {
        \$result = null;
        \$maxConfidence = -1;

        foreach (\$guesses as \$guess) {
            if (\$maxConfidence < \$confidence = \$guess->getConfidence()) {
                \$maxConfidence = \$confidence;
                \$result = \$guess;
            }
        }

        return \$result;
    }

    /**
     * @param int \$confidence The confidence
     *
     * @throws InvalidArgumentException if the given value of confidence is unknown
     */
    public function __construct(int \$confidence)
    {
        if (self::VERY_HIGH_CONFIDENCE !== \$confidence && self::HIGH_CONFIDENCE !== \$confidence &&
            self::MEDIUM_CONFIDENCE !== \$confidence && self::LOW_CONFIDENCE !== \$confidence) {
            throw new InvalidArgumentException('The confidence should be one of the constants defined in Guess.');
        }

        \$this->confidence = \$confidence;
    }

    /**
     * Returns the confidence that the guessed value is correct.
     *
     * @return int One of the constants VERY_HIGH_CONFIDENCE, HIGH_CONFIDENCE,
     *             MEDIUM_CONFIDENCE and LOW_CONFIDENCE
     */
    public function getConfidence()
    {
        return \$this->confidence;
    }
}
", "vendor/symfony/form/Guess/Guess.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Guess/Guess.php");
    }
}
