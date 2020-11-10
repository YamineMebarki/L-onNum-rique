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

/* vendor/symfony/form/Extension/DataCollector/FormDataExtractorInterface.php */
class __TwigTemplate_ee470f317d2df0bcca153474a035968bd5d5a966789dcee3a6bbd01f2ec60cf7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/DataCollector/FormDataExtractorInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/DataCollector/FormDataExtractorInterface.php"));

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

namespace Symfony\\Component\\Form\\Extension\\DataCollector;

use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;

/**
 * Extracts arrays of information out of forms.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface FormDataExtractorInterface
{
    /**
     * Extracts the configuration data of a form.
     *
     * @return array Information about the form's configuration
     */
    public function extractConfiguration(FormInterface \$form);

    /**
     * Extracts the default data of a form.
     *
     * @return array Information about the form's default data
     */
    public function extractDefaultData(FormInterface \$form);

    /**
     * Extracts the submitted data of a form.
     *
     * @return array Information about the form's submitted data
     */
    public function extractSubmittedData(FormInterface \$form);

    /**
     * Extracts the view variables of a form.
     *
     * @return array Information about the view's variables
     */
    public function extractViewVariables(FormView \$view);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/DataCollector/FormDataExtractorInterface.php";
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

namespace Symfony\\Component\\Form\\Extension\\DataCollector;

use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;

/**
 * Extracts arrays of information out of forms.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
interface FormDataExtractorInterface
{
    /**
     * Extracts the configuration data of a form.
     *
     * @return array Information about the form's configuration
     */
    public function extractConfiguration(FormInterface \$form);

    /**
     * Extracts the default data of a form.
     *
     * @return array Information about the form's default data
     */
    public function extractDefaultData(FormInterface \$form);

    /**
     * Extracts the submitted data of a form.
     *
     * @return array Information about the form's submitted data
     */
    public function extractSubmittedData(FormInterface \$form);

    /**
     * Extracts the view variables of a form.
     *
     * @return array Information about the view's variables
     */
    public function extractViewVariables(FormView \$view);
}
", "vendor/symfony/form/Extension/DataCollector/FormDataExtractorInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/DataCollector/FormDataExtractorInterface.php");
    }
}
