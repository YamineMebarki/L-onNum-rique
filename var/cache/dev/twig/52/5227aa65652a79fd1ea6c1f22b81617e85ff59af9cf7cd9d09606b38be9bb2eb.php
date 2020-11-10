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

/* vendor/symfony/form/Console/Descriptor/JsonDescriptor.php */
class __TwigTemplate_fc5028abe2924246cc684009d9567d369783d25348e9a77ae42a64f7003200a0 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Console/Descriptor/JsonDescriptor.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Console/Descriptor/JsonDescriptor.php"));

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

namespace Symfony\\Component\\Form\\Console\\Descriptor;

use Symfony\\Component\\Form\\ResolvedFormTypeInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 *
 * @internal
 */
class JsonDescriptor extends Descriptor
{
    protected function describeDefaults(array \$options)
    {
        \$data['builtin_form_types'] = \$options['core_types'];
        \$data['service_form_types'] = \$options['service_types'];
        if (!\$options['show_deprecated']) {
            \$data['type_extensions'] = \$options['extensions'];
            \$data['type_guessers'] = \$options['guessers'];
        }

        \$this->writeData(\$data, \$options);
    }

    protected function describeResolvedFormType(ResolvedFormTypeInterface \$resolvedFormType, array \$options = [])
    {
        \$this->collectOptions(\$resolvedFormType);

        if (\$options['show_deprecated']) {
            \$this->filterOptionsByDeprecated(\$resolvedFormType);
        }

        \$formOptions = [
            'own' => \$this->ownOptions,
            'overridden' => \$this->overriddenOptions,
            'parent' => \$this->parentOptions,
            'extension' => \$this->extensionOptions,
            'required' => \$this->requiredOptions,
        ];
        \$this->sortOptions(\$formOptions);

        \$data = [
            'class' => \\get_class(\$resolvedFormType->getInnerType()),
            'block_prefix' => \$resolvedFormType->getInnerType()->getBlockPrefix(),
            'options' => \$formOptions,
            'parent_types' => \$this->parents,
            'type_extensions' => \$this->extensions,
        ];

        \$this->writeData(\$data, \$options);
    }

    protected function describeOption(OptionsResolver \$optionsResolver, array \$options)
    {
        \$definition = \$this->getOptionDefinition(\$optionsResolver, \$options['option']);

        \$map = [];
        if (\$definition['deprecated']) {
            \$map['deprecated'] = 'deprecated';
            if (\\is_string(\$definition['deprecationMessage'])) {
                \$map['deprecation_message'] = 'deprecationMessage';
            }
        }
        \$map += [
            'required' => 'required',
            'default' => 'default',
            'allowed_types' => 'allowedTypes',
            'allowed_values' => 'allowedValues',
        ];
        foreach (\$map as \$label => \$name) {
            if (\\array_key_exists(\$name, \$definition)) {
                \$data[\$label] = \$definition[\$name];

                if ('default' === \$name) {
                    \$data['is_lazy'] = isset(\$definition['lazy']);
                }
            }
        }
        \$data['has_normalizer'] = isset(\$definition['normalizers']);

        \$this->writeData(\$data, \$options);
    }

    private function writeData(array \$data, array \$options)
    {
        \$flags = isset(\$options['json_encoding']) ? \$options['json_encoding'] : 0;

        \$this->output->write(json_encode(\$data, \$flags | JSON_PRETTY_PRINT).\"\\n\");
    }

    private function sortOptions(array &\$options)
    {
        foreach (\$options as &\$opts) {
            \$sorted = false;
            foreach (\$opts as &\$opt) {
                if (\\is_array(\$opt)) {
                    sort(\$opt);
                    \$sorted = true;
                }
            }
            if (!\$sorted) {
                sort(\$opts);
            }
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Console/Descriptor/JsonDescriptor.php";
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

namespace Symfony\\Component\\Form\\Console\\Descriptor;

use Symfony\\Component\\Form\\ResolvedFormTypeInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @author Yonel Ceruto <yonelceruto@gmail.com>
 *
 * @internal
 */
class JsonDescriptor extends Descriptor
{
    protected function describeDefaults(array \$options)
    {
        \$data['builtin_form_types'] = \$options['core_types'];
        \$data['service_form_types'] = \$options['service_types'];
        if (!\$options['show_deprecated']) {
            \$data['type_extensions'] = \$options['extensions'];
            \$data['type_guessers'] = \$options['guessers'];
        }

        \$this->writeData(\$data, \$options);
    }

    protected function describeResolvedFormType(ResolvedFormTypeInterface \$resolvedFormType, array \$options = [])
    {
        \$this->collectOptions(\$resolvedFormType);

        if (\$options['show_deprecated']) {
            \$this->filterOptionsByDeprecated(\$resolvedFormType);
        }

        \$formOptions = [
            'own' => \$this->ownOptions,
            'overridden' => \$this->overriddenOptions,
            'parent' => \$this->parentOptions,
            'extension' => \$this->extensionOptions,
            'required' => \$this->requiredOptions,
        ];
        \$this->sortOptions(\$formOptions);

        \$data = [
            'class' => \\get_class(\$resolvedFormType->getInnerType()),
            'block_prefix' => \$resolvedFormType->getInnerType()->getBlockPrefix(),
            'options' => \$formOptions,
            'parent_types' => \$this->parents,
            'type_extensions' => \$this->extensions,
        ];

        \$this->writeData(\$data, \$options);
    }

    protected function describeOption(OptionsResolver \$optionsResolver, array \$options)
    {
        \$definition = \$this->getOptionDefinition(\$optionsResolver, \$options['option']);

        \$map = [];
        if (\$definition['deprecated']) {
            \$map['deprecated'] = 'deprecated';
            if (\\is_string(\$definition['deprecationMessage'])) {
                \$map['deprecation_message'] = 'deprecationMessage';
            }
        }
        \$map += [
            'required' => 'required',
            'default' => 'default',
            'allowed_types' => 'allowedTypes',
            'allowed_values' => 'allowedValues',
        ];
        foreach (\$map as \$label => \$name) {
            if (\\array_key_exists(\$name, \$definition)) {
                \$data[\$label] = \$definition[\$name];

                if ('default' === \$name) {
                    \$data['is_lazy'] = isset(\$definition['lazy']);
                }
            }
        }
        \$data['has_normalizer'] = isset(\$definition['normalizers']);

        \$this->writeData(\$data, \$options);
    }

    private function writeData(array \$data, array \$options)
    {
        \$flags = isset(\$options['json_encoding']) ? \$options['json_encoding'] : 0;

        \$this->output->write(json_encode(\$data, \$flags | JSON_PRETTY_PRINT).\"\\n\");
    }

    private function sortOptions(array &\$options)
    {
        foreach (\$options as &\$opts) {
            \$sorted = false;
            foreach (\$opts as &\$opt) {
                if (\\is_array(\$opt)) {
                    sort(\$opt);
                    \$sorted = true;
                }
            }
            if (!\$sorted) {
                sort(\$opts);
            }
        }
    }
}
", "vendor/symfony/form/Console/Descriptor/JsonDescriptor.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Console/Descriptor/JsonDescriptor.php");
    }
}
