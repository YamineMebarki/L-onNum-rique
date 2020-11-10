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

/* vendor/symfony/framework-bundle/Command/XliffLintCommand.php */
class __TwigTemplate_00d378e31eea772a3111189ea2f740a14f1e2d63c21750ed5018ff8b12898e61 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Command/XliffLintCommand.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/framework-bundle/Command/XliffLintCommand.php"));

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

namespace Symfony\\Bundle\\FrameworkBundle\\Command;

use Symfony\\Component\\Translation\\Command\\XliffLintCommand as BaseLintCommand;

/**
 * Validates XLIFF files syntax and outputs encountered errors.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 * @author Robin Chalas <robin.chalas@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 *
 * @final
 */
class XliffLintCommand extends BaseLintCommand
{
    protected static \$defaultName = 'lint:xliff';

    public function __construct()
    {
        \$directoryIteratorProvider = function (\$directory, \$default) {
            if (!is_dir(\$directory)) {
                \$directory = \$this->getApplication()->getKernel()->locateResource(\$directory);
            }

            return \$default(\$directory);
        };

        \$isReadableProvider = function (\$fileOrDirectory, \$default) {
            return 0 === strpos(\$fileOrDirectory, '@') || \$default(\$fileOrDirectory);
        };

        parent::__construct(null, \$directoryIteratorProvider, \$isReadableProvider);
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        parent::configure();

        \$this->setHelp(\$this->getHelp().<<<'EOF'

Or find all files in a bundle:

  <info>php %command.full_name% @AcmeDemoBundle</info>

EOF
            );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/framework-bundle/Command/XliffLintCommand.php";
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

namespace Symfony\\Bundle\\FrameworkBundle\\Command;

use Symfony\\Component\\Translation\\Command\\XliffLintCommand as BaseLintCommand;

/**
 * Validates XLIFF files syntax and outputs encountered errors.
 *
 * @author Grégoire Pineau <lyrixx@lyrixx.info>
 * @author Robin Chalas <robin.chalas@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 *
 * @final
 */
class XliffLintCommand extends BaseLintCommand
{
    protected static \$defaultName = 'lint:xliff';

    public function __construct()
    {
        \$directoryIteratorProvider = function (\$directory, \$default) {
            if (!is_dir(\$directory)) {
                \$directory = \$this->getApplication()->getKernel()->locateResource(\$directory);
            }

            return \$default(\$directory);
        };

        \$isReadableProvider = function (\$fileOrDirectory, \$default) {
            return 0 === strpos(\$fileOrDirectory, '@') || \$default(\$fileOrDirectory);
        };

        parent::__construct(null, \$directoryIteratorProvider, \$isReadableProvider);
    }

    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        parent::configure();

        \$this->setHelp(\$this->getHelp().<<<'EOF'

Or find all files in a bundle:

  <info>php %command.full_name% @AcmeDemoBundle</info>

EOF
            );
    }
}
", "vendor/symfony/framework-bundle/Command/XliffLintCommand.php", "/var/www/public/DevLaon/templates/vendor/symfony/framework-bundle/Command/XliffLintCommand.php");
    }
}
