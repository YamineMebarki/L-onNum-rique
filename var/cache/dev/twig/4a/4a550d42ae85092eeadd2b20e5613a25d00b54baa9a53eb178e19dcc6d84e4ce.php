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

/* vendor/symfony/form/SubmitButton.php */
class __TwigTemplate_d96d36402eef577b1f0fc473826afd8534730018dfd94d73758f5ef2933ee71b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/SubmitButton.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/SubmitButton.php"));

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

namespace Symfony\\Component\\Form;

/**
 * A button that submits the form.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class SubmitButton extends Button implements ClickableInterface
{
    /**
     * @var bool
     */
    private \$clicked = false;

    /**
     * {@inheritdoc}
     */
    public function isClicked()
    {
        return \$this->clicked;
    }

    /**
     * Submits data to the button.
     *
     * @param string|null \$submittedData The data
     * @param bool        \$clearMissing  Not used
     *
     * @return \$this
     *
     * @throws Exception\\AlreadySubmittedException if the form has already been submitted
     */
    public function submit(\$submittedData, \$clearMissing = true)
    {
        if (\$this->getConfig()->getDisabled()) {
            \$this->clicked = false;

            return \$this;
        }

        parent::submit(\$submittedData, \$clearMissing);

        \$this->clicked = null !== \$submittedData;

        return \$this;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/SubmitButton.php";
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

namespace Symfony\\Component\\Form;

/**
 * A button that submits the form.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class SubmitButton extends Button implements ClickableInterface
{
    /**
     * @var bool
     */
    private \$clicked = false;

    /**
     * {@inheritdoc}
     */
    public function isClicked()
    {
        return \$this->clicked;
    }

    /**
     * Submits data to the button.
     *
     * @param string|null \$submittedData The data
     * @param bool        \$clearMissing  Not used
     *
     * @return \$this
     *
     * @throws Exception\\AlreadySubmittedException if the form has already been submitted
     */
    public function submit(\$submittedData, \$clearMissing = true)
    {
        if (\$this->getConfig()->getDisabled()) {
            \$this->clicked = false;

            return \$this;
        }

        parent::submit(\$submittedData, \$clearMissing);

        \$this->clicked = null !== \$submittedData;

        return \$this;
    }
}
", "vendor/symfony/form/SubmitButton.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/SubmitButton.php");
    }
}
