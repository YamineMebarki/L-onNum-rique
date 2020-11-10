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

/* vendor/symfony/var-exporter/VarExporter.php */
class __TwigTemplate_2ee2725464fd47caf64e82eafff75b0b7c97640c605a9215b4953df73cd4a61b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-exporter/VarExporter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-exporter/VarExporter.php"));

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

namespace Symfony\\Component\\VarExporter;

use Symfony\\Component\\VarExporter\\Exception\\ExceptionInterface;
use Symfony\\Component\\VarExporter\\Internal\\Exporter;
use Symfony\\Component\\VarExporter\\Internal\\Hydrator;
use Symfony\\Component\\VarExporter\\Internal\\Registry;
use Symfony\\Component\\VarExporter\\Internal\\Values;

/**
 * Exports serializable PHP values to PHP code.
 *
 * VarExporter allows serializing PHP data structures to plain PHP code (like var_export())
 * while preserving all the semantics associated with serialize() (unlike var_export()).
 *
 * By leveraging OPcache, the generated PHP code is faster than doing the same with unserialize().
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
final class VarExporter
{
    /**
     * Exports a serializable PHP value to PHP code.
     *
     * @param mixed \$value          The value to export
     * @param bool  &\$isStaticValue Set to true after execution if the provided value is static, false otherwise
     *
     * @return string The value exported as PHP code
     *
     * @throws ExceptionInterface When the provided value cannot be serialized
     */
    public static function export(\$value, bool &\$isStaticValue = null): string
    {
        \$isStaticValue = true;

        if (!\\is_object(\$value) && !(\\is_array(\$value) && \$value) && !\$value instanceof \\__PHP_Incomplete_Class && !\\is_resource(\$value)) {
            return Exporter::export(\$value);
        }

        \$objectsPool = new \\SplObjectStorage();
        \$refsPool = [];
        \$objectsCount = 0;

        try {
            \$value = Exporter::prepare([\$value], \$objectsPool, \$refsPool, \$objectsCount, \$isStaticValue)[0];
        } finally {
            \$references = [];
            foreach (\$refsPool as \$i => \$v) {
                if (\$v[0]->count) {
                    \$references[1 + \$i] = \$v[2];
                }
                \$v[0] = \$v[1];
            }
        }

        if (\$isStaticValue) {
            return Exporter::export(\$value);
        }

        \$classes = [];
        \$values = [];
        \$states = [];
        foreach (\$objectsPool as \$i => \$v) {
            list(, \$classes[], \$values[], \$wakeup) = \$objectsPool[\$v];
            if (0 < \$wakeup) {
                \$states[\$wakeup] = \$i;
            } elseif (0 > \$wakeup) {
                \$states[-\$wakeup] = [\$i, array_pop(\$values)];
                \$values[] = [];
            }
        }
        ksort(\$states);

        \$wakeups = [null];
        foreach (\$states as \$k => \$v) {
            if (\\is_array(\$v)) {
                \$wakeups[-\$v[0]] = \$v[1];
            } else {
                \$wakeups[] = \$v;
            }
        }

        if (null === \$wakeups[0]) {
            unset(\$wakeups[0]);
        }

        \$properties = [];
        foreach (\$values as \$i => \$vars) {
            foreach (\$vars as \$class => \$values) {
                foreach (\$values as \$name => \$v) {
                    \$properties[\$class][\$name][\$i] = \$v;
                }
            }
        }

        if (\$classes || \$references) {
            \$value = new Hydrator(new Registry(\$classes), \$references ? new Values(\$references) : null, \$properties, \$value, \$wakeups);
        } else {
            \$isStaticValue = true;
        }

        return Exporter::export(\$value);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-exporter/VarExporter.php";
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

namespace Symfony\\Component\\VarExporter;

use Symfony\\Component\\VarExporter\\Exception\\ExceptionInterface;
use Symfony\\Component\\VarExporter\\Internal\\Exporter;
use Symfony\\Component\\VarExporter\\Internal\\Hydrator;
use Symfony\\Component\\VarExporter\\Internal\\Registry;
use Symfony\\Component\\VarExporter\\Internal\\Values;

/**
 * Exports serializable PHP values to PHP code.
 *
 * VarExporter allows serializing PHP data structures to plain PHP code (like var_export())
 * while preserving all the semantics associated with serialize() (unlike var_export()).
 *
 * By leveraging OPcache, the generated PHP code is faster than doing the same with unserialize().
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
final class VarExporter
{
    /**
     * Exports a serializable PHP value to PHP code.
     *
     * @param mixed \$value          The value to export
     * @param bool  &\$isStaticValue Set to true after execution if the provided value is static, false otherwise
     *
     * @return string The value exported as PHP code
     *
     * @throws ExceptionInterface When the provided value cannot be serialized
     */
    public static function export(\$value, bool &\$isStaticValue = null): string
    {
        \$isStaticValue = true;

        if (!\\is_object(\$value) && !(\\is_array(\$value) && \$value) && !\$value instanceof \\__PHP_Incomplete_Class && !\\is_resource(\$value)) {
            return Exporter::export(\$value);
        }

        \$objectsPool = new \\SplObjectStorage();
        \$refsPool = [];
        \$objectsCount = 0;

        try {
            \$value = Exporter::prepare([\$value], \$objectsPool, \$refsPool, \$objectsCount, \$isStaticValue)[0];
        } finally {
            \$references = [];
            foreach (\$refsPool as \$i => \$v) {
                if (\$v[0]->count) {
                    \$references[1 + \$i] = \$v[2];
                }
                \$v[0] = \$v[1];
            }
        }

        if (\$isStaticValue) {
            return Exporter::export(\$value);
        }

        \$classes = [];
        \$values = [];
        \$states = [];
        foreach (\$objectsPool as \$i => \$v) {
            list(, \$classes[], \$values[], \$wakeup) = \$objectsPool[\$v];
            if (0 < \$wakeup) {
                \$states[\$wakeup] = \$i;
            } elseif (0 > \$wakeup) {
                \$states[-\$wakeup] = [\$i, array_pop(\$values)];
                \$values[] = [];
            }
        }
        ksort(\$states);

        \$wakeups = [null];
        foreach (\$states as \$k => \$v) {
            if (\\is_array(\$v)) {
                \$wakeups[-\$v[0]] = \$v[1];
            } else {
                \$wakeups[] = \$v;
            }
        }

        if (null === \$wakeups[0]) {
            unset(\$wakeups[0]);
        }

        \$properties = [];
        foreach (\$values as \$i => \$vars) {
            foreach (\$vars as \$class => \$values) {
                foreach (\$values as \$name => \$v) {
                    \$properties[\$class][\$name][\$i] = \$v;
                }
            }
        }

        if (\$classes || \$references) {
            \$value = new Hydrator(new Registry(\$classes), \$references ? new Values(\$references) : null, \$properties, \$value, \$wakeups);
        } else {
            \$isStaticValue = true;
        }

        return Exporter::export(\$value);
    }
}
", "vendor/symfony/var-exporter/VarExporter.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-exporter/VarExporter.php");
    }
}
