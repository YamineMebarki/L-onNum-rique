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

/* vendor/symfony/translation/Dumper/DumperInterface.php */
class __TwigTemplate_18467e26c0788d3c52d1fa41789d69e4f293c13160fd7007edce9ef5ef139b46 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Dumper/DumperInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Dumper/DumperInterface.php"));

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

namespace Symfony\\Component\\Translation\\Dumper;

use Symfony\\Component\\Translation\\MessageCatalogue;

/**
 * DumperInterface is the interface implemented by all translation dumpers.
 * There is no common option.
 *
 * @author Michel Salib <michelsalib@hotmail.com>
 */
interface DumperInterface
{
    /**
     * Dumps the message catalogue.
     *
     * @param MessageCatalogue \$messages The message catalogue
     * @param array            \$options  Options that are used by the dumper
     */
    public function dump(MessageCatalogue \$messages, \$options = []);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Dumper/DumperInterface.php";
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

namespace Symfony\\Component\\Translation\\Dumper;

use Symfony\\Component\\Translation\\MessageCatalogue;

/**
 * DumperInterface is the interface implemented by all translation dumpers.
 * There is no common option.
 *
 * @author Michel Salib <michelsalib@hotmail.com>
 */
interface DumperInterface
{
    /**
     * Dumps the message catalogue.
     *
     * @param MessageCatalogue \$messages The message catalogue
     * @param array            \$options  Options that are used by the dumper
     */
    public function dump(MessageCatalogue \$messages, \$options = []);
}
", "vendor/symfony/translation/Dumper/DumperInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Dumper/DumperInterface.php");
    }
}
