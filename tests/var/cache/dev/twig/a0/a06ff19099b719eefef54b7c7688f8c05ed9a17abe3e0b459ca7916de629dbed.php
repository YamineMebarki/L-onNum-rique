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

/* vendor/symfony/intl/Data/Bundle/Writer/JsonBundleWriter.php */
class __TwigTemplate_4d6f01e0ec945c9f1e770186b4e03dedc1ddf6316e8cb72ceda820ceb3df6be2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Bundle/Writer/JsonBundleWriter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/Data/Bundle/Writer/JsonBundleWriter.php"));

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

namespace Symfony\\Component\\Intl\\Data\\Bundle\\Writer;

/**
 * Writes .json resource bundles.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
class JsonBundleWriter implements BundleWriterInterface
{
    /**
     * {@inheritdoc}
     */
    public function write(\$path, \$locale, \$data)
    {
        if (\$data instanceof \\Traversable) {
            \$data = iterator_to_array(\$data);
        }

        array_walk_recursive(\$data, function (&\$value) {
            if (\$value instanceof \\Traversable) {
                \$value = iterator_to_array(\$value);
            }
        });

        \$contents = json_encode(\$data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE).\"\\n\";

        file_put_contents(\$path.'/'.\$locale.'.json', \$contents);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/Data/Bundle/Writer/JsonBundleWriter.php";
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

namespace Symfony\\Component\\Intl\\Data\\Bundle\\Writer;

/**
 * Writes .json resource bundles.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 *
 * @internal
 */
class JsonBundleWriter implements BundleWriterInterface
{
    /**
     * {@inheritdoc}
     */
    public function write(\$path, \$locale, \$data)
    {
        if (\$data instanceof \\Traversable) {
            \$data = iterator_to_array(\$data);
        }

        array_walk_recursive(\$data, function (&\$value) {
            if (\$value instanceof \\Traversable) {
                \$value = iterator_to_array(\$value);
            }
        });

        \$contents = json_encode(\$data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE).\"\\n\";

        file_put_contents(\$path.'/'.\$locale.'.json', \$contents);
    }
}
", "vendor/symfony/intl/Data/Bundle/Writer/JsonBundleWriter.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/Data/Bundle/Writer/JsonBundleWriter.php");
    }
}
