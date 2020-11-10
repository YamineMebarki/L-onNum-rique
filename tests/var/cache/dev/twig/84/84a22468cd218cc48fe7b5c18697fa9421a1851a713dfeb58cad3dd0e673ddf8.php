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

/* vendor/symfony/twig-bundle/Command/LintCommand.php */
class __TwigTemplate_1c5730ed036c084727d3769a5ef96f4b488420e5b81441a01a1c1156a02f6bb7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Command/LintCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/twig-bundle/Command/LintCommand.php"));

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

namespace Symfony\\Bundle\\TwigBundle\\Command;

use Symfony\\Bridge\\Twig\\Command\\LintCommand as BaseLintCommand;
use Symfony\\Component\\Finder\\Finder;

/**
 * Command that will validate your template syntax and output encountered errors.
 *
 * @author Marc Weistroff <marc.weistroff@sensiolabs.com>
 * @author Jérôme Tamarelle <jerome@tamarelle.net>
 */
final class LintCommand extends BaseLintCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        parent::configure();

        \$this
            ->setHelp(
                \$this->getHelp().<<<'EOF'

Or all template files in a bundle:

  <info>php %command.full_name% @AcmeDemoBundle</info>

EOF
            )
        ;
    }

    protected function findFiles(\$filename)
    {
        if (0 === strpos(\$filename, '@')) {
            \$dir = \$this->getApplication()->getKernel()->locateResource(\$filename);

            return Finder::create()->files()->in(\$dir)->name('*.twig');
        }

        return parent::findFiles(\$filename);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/twig-bundle/Command/LintCommand.php";
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

namespace Symfony\\Bundle\\TwigBundle\\Command;

use Symfony\\Bridge\\Twig\\Command\\LintCommand as BaseLintCommand;
use Symfony\\Component\\Finder\\Finder;

/**
 * Command that will validate your template syntax and output encountered errors.
 *
 * @author Marc Weistroff <marc.weistroff@sensiolabs.com>
 * @author Jérôme Tamarelle <jerome@tamarelle.net>
 */
final class LintCommand extends BaseLintCommand
{
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        parent::configure();

        \$this
            ->setHelp(
                \$this->getHelp().<<<'EOF'

Or all template files in a bundle:

  <info>php %command.full_name% @AcmeDemoBundle</info>

EOF
            )
        ;
    }

    protected function findFiles(\$filename)
    {
        if (0 === strpos(\$filename, '@')) {
            \$dir = \$this->getApplication()->getKernel()->locateResource(\$filename);

            return Finder::create()->files()->in(\$dir)->name('*.twig');
        }

        return parent::findFiles(\$filename);
    }
}
", "vendor/symfony/twig-bundle/Command/LintCommand.php", "/var/www/public/DevLaon/templates/vendor/symfony/twig-bundle/Command/LintCommand.php");
    }
}
