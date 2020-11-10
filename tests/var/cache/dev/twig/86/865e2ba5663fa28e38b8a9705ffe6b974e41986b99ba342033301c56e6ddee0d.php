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

/* vendor/symfony/form/Extension/DataCollector/FormDataExtractor.php */
class __TwigTemplate_99450afc577531ece103140780638a9c95ded4c5a9418b4acf2a4d944f703a21 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/DataCollector/FormDataExtractor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/DataCollector/FormDataExtractor.php"));

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
use Symfony\\Component\\Validator\\ConstraintViolationInterface;

/**
 * Default implementation of {@link FormDataExtractorInterface}.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormDataExtractor implements FormDataExtractorInterface
{
    /**
     * {@inheritdoc}
     */
    public function extractConfiguration(FormInterface \$form)
    {
        \$data = [
            'id' => \$this->buildId(\$form),
            'name' => \$form->getName(),
            'type_class' => \\get_class(\$form->getConfig()->getType()->getInnerType()),
            'synchronized' => \$form->isSynchronized(),
            'passed_options' => [],
            'resolved_options' => [],
        ];

        foreach (\$form->getConfig()->getAttribute('data_collector/passed_options', []) as \$option => \$value) {
            \$data['passed_options'][\$option] = \$value;
        }

        foreach (\$form->getConfig()->getOptions() as \$option => \$value) {
            \$data['resolved_options'][\$option] = \$value;
        }

        ksort(\$data['passed_options']);
        ksort(\$data['resolved_options']);

        return \$data;
    }

    /**
     * {@inheritdoc}
     */
    public function extractDefaultData(FormInterface \$form)
    {
        \$data = [
            'default_data' => [
                'norm' => \$form->getNormData(),
            ],
            'submitted_data' => [],
        ];

        if (\$form->getData() !== \$form->getNormData()) {
            \$data['default_data']['model'] = \$form->getData();
        }

        if (\$form->getViewData() !== \$form->getNormData()) {
            \$data['default_data']['view'] = \$form->getViewData();
        }

        return \$data;
    }

    /**
     * {@inheritdoc}
     */
    public function extractSubmittedData(FormInterface \$form)
    {
        \$data = [
            'submitted_data' => [
                'norm' => \$form->getNormData(),
            ],
            'errors' => [],
        ];

        if (\$form->getViewData() !== \$form->getNormData()) {
            \$data['submitted_data']['view'] = \$form->getViewData();
        }

        if (\$form->getData() !== \$form->getNormData()) {
            \$data['submitted_data']['model'] = \$form->getData();
        }

        foreach (\$form->getErrors() as \$error) {
            \$errorData = [
                'message' => \$error->getMessage(),
                'origin' => \\is_object(\$error->getOrigin())
                    ? spl_object_hash(\$error->getOrigin())
                    : null,
                'trace' => [],
            ];

            \$cause = \$error->getCause();

            while (null !== \$cause) {
                if (\$cause instanceof ConstraintViolationInterface) {
                    \$errorData['trace'][] = \$cause;
                    \$cause = method_exists(\$cause, 'getCause') ? \$cause->getCause() : null;

                    continue;
                }

                if (\$cause instanceof \\Exception) {
                    \$errorData['trace'][] = \$cause;
                    \$cause = \$cause->getPrevious();

                    continue;
                }

                \$errorData['trace'][] = \$cause;

                break;
            }

            \$data['errors'][] = \$errorData;
        }

        \$data['synchronized'] = \$form->isSynchronized();

        return \$data;
    }

    /**
     * {@inheritdoc}
     */
    public function extractViewVariables(FormView \$view)
    {
        \$data = [
            'id' => isset(\$view->vars['id']) ? \$view->vars['id'] : null,
            'name' => isset(\$view->vars['name']) ? \$view->vars['name'] : null,
            'view_vars' => [],
        ];

        foreach (\$view->vars as \$varName => \$value) {
            \$data['view_vars'][\$varName] = \$value;
        }

        ksort(\$data['view_vars']);

        return \$data;
    }

    /**
     * Recursively builds an HTML ID for a form.
     *
     * @return string The HTML ID
     */
    private function buildId(FormInterface \$form)
    {
        \$id = \$form->getName();

        if (null !== \$form->getParent()) {
            \$id = \$this->buildId(\$form->getParent()).'_'.\$id;
        }

        return \$id;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/DataCollector/FormDataExtractor.php";
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
use Symfony\\Component\\Validator\\ConstraintViolationInterface;

/**
 * Default implementation of {@link FormDataExtractorInterface}.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class FormDataExtractor implements FormDataExtractorInterface
{
    /**
     * {@inheritdoc}
     */
    public function extractConfiguration(FormInterface \$form)
    {
        \$data = [
            'id' => \$this->buildId(\$form),
            'name' => \$form->getName(),
            'type_class' => \\get_class(\$form->getConfig()->getType()->getInnerType()),
            'synchronized' => \$form->isSynchronized(),
            'passed_options' => [],
            'resolved_options' => [],
        ];

        foreach (\$form->getConfig()->getAttribute('data_collector/passed_options', []) as \$option => \$value) {
            \$data['passed_options'][\$option] = \$value;
        }

        foreach (\$form->getConfig()->getOptions() as \$option => \$value) {
            \$data['resolved_options'][\$option] = \$value;
        }

        ksort(\$data['passed_options']);
        ksort(\$data['resolved_options']);

        return \$data;
    }

    /**
     * {@inheritdoc}
     */
    public function extractDefaultData(FormInterface \$form)
    {
        \$data = [
            'default_data' => [
                'norm' => \$form->getNormData(),
            ],
            'submitted_data' => [],
        ];

        if (\$form->getData() !== \$form->getNormData()) {
            \$data['default_data']['model'] = \$form->getData();
        }

        if (\$form->getViewData() !== \$form->getNormData()) {
            \$data['default_data']['view'] = \$form->getViewData();
        }

        return \$data;
    }

    /**
     * {@inheritdoc}
     */
    public function extractSubmittedData(FormInterface \$form)
    {
        \$data = [
            'submitted_data' => [
                'norm' => \$form->getNormData(),
            ],
            'errors' => [],
        ];

        if (\$form->getViewData() !== \$form->getNormData()) {
            \$data['submitted_data']['view'] = \$form->getViewData();
        }

        if (\$form->getData() !== \$form->getNormData()) {
            \$data['submitted_data']['model'] = \$form->getData();
        }

        foreach (\$form->getErrors() as \$error) {
            \$errorData = [
                'message' => \$error->getMessage(),
                'origin' => \\is_object(\$error->getOrigin())
                    ? spl_object_hash(\$error->getOrigin())
                    : null,
                'trace' => [],
            ];

            \$cause = \$error->getCause();

            while (null !== \$cause) {
                if (\$cause instanceof ConstraintViolationInterface) {
                    \$errorData['trace'][] = \$cause;
                    \$cause = method_exists(\$cause, 'getCause') ? \$cause->getCause() : null;

                    continue;
                }

                if (\$cause instanceof \\Exception) {
                    \$errorData['trace'][] = \$cause;
                    \$cause = \$cause->getPrevious();

                    continue;
                }

                \$errorData['trace'][] = \$cause;

                break;
            }

            \$data['errors'][] = \$errorData;
        }

        \$data['synchronized'] = \$form->isSynchronized();

        return \$data;
    }

    /**
     * {@inheritdoc}
     */
    public function extractViewVariables(FormView \$view)
    {
        \$data = [
            'id' => isset(\$view->vars['id']) ? \$view->vars['id'] : null,
            'name' => isset(\$view->vars['name']) ? \$view->vars['name'] : null,
            'view_vars' => [],
        ];

        foreach (\$view->vars as \$varName => \$value) {
            \$data['view_vars'][\$varName] = \$value;
        }

        ksort(\$data['view_vars']);

        return \$data;
    }

    /**
     * Recursively builds an HTML ID for a form.
     *
     * @return string The HTML ID
     */
    private function buildId(FormInterface \$form)
    {
        \$id = \$form->getName();

        if (null !== \$form->getParent()) {
            \$id = \$this->buildId(\$form->getParent()).'_'.\$id;
        }

        return \$id;
    }
}
", "vendor/symfony/form/Extension/DataCollector/FormDataExtractor.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/DataCollector/FormDataExtractor.php");
    }
}
