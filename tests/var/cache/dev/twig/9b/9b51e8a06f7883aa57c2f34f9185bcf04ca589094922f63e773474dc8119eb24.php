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

/* vendor/symfony/mime/MimeTypeGuesserInterface.php */
class __TwigTemplate_0b1aa45016bd9ce76f8ebfd6fbd58d7aa3a2302bee2af6099186cdb1b684f084 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/MimeTypeGuesserInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/MimeTypeGuesserInterface.php"));

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

namespace Symfony\\Component\\Mime;

/**
 * Guesses the MIME type of a file.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
interface MimeTypeGuesserInterface
{
    /**
     * Returns true if this guesser is supported.
     */
    public function isGuesserSupported(): bool;

    /**
     * Guesses the MIME type of the file with the given path.
     *
     * @param string \$path The path to the file
     *
     * @return string|null The MIME type or null, if none could be guessed
     *
     * @throws \\LogicException           If the guesser is not supported
     * @throws \\InvalidArgumentException If the file does not exist or is not readable
     */
    public function guessMimeType(string \$path): ?string;
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/MimeTypeGuesserInterface.php";
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

namespace Symfony\\Component\\Mime;

/**
 * Guesses the MIME type of a file.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
interface MimeTypeGuesserInterface
{
    /**
     * Returns true if this guesser is supported.
     */
    public function isGuesserSupported(): bool;

    /**
     * Guesses the MIME type of the file with the given path.
     *
     * @param string \$path The path to the file
     *
     * @return string|null The MIME type or null, if none could be guessed
     *
     * @throws \\LogicException           If the guesser is not supported
     * @throws \\InvalidArgumentException If the file does not exist or is not readable
     */
    public function guessMimeType(string \$path): ?string;
}
", "vendor/symfony/mime/MimeTypeGuesserInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/MimeTypeGuesserInterface.php");
    }
}
