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

/* vendor/symfony/translation/Loader/MoFileLoader.php */
class __TwigTemplate_3e9e1fb2c7ff0cf7a4ccb098a7787a8100e2a14c492960bd3ff691522b2979f1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Loader/MoFileLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Loader/MoFileLoader.php"));

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

namespace Symfony\\Component\\Translation\\Loader;

use Symfony\\Component\\Translation\\Exception\\InvalidResourceException;

/**
 * @copyright Copyright (c) 2010, Union of RAD http://union-of-rad.org (http://lithify.me/)
 */
class MoFileLoader extends FileLoader
{
    /**
     * Magic used for validating the format of a MO file as well as
     * detecting if the machine used to create that file was little endian.
     */
    const MO_LITTLE_ENDIAN_MAGIC = 0x950412de;

    /**
     * Magic used for validating the format of a MO file as well as
     * detecting if the machine used to create that file was big endian.
     */
    const MO_BIG_ENDIAN_MAGIC = 0xde120495;

    /**
     * The size of the header of a MO file in bytes.
     */
    const MO_HEADER_SIZE = 28;

    /**
     * Parses machine object (MO) format, independent of the machine's endian it
     * was created on. Both 32bit and 64bit systems are supported.
     *
     * {@inheritdoc}
     */
    protected function loadResource(\$resource)
    {
        \$stream = fopen(\$resource, 'r');

        \$stat = fstat(\$stream);

        if (\$stat['size'] < self::MO_HEADER_SIZE) {
            throw new InvalidResourceException('MO stream content has an invalid format.');
        }
        \$magic = unpack('V1', fread(\$stream, 4));
        \$magic = hexdec(substr(dechex(current(\$magic)), -8));

        if (self::MO_LITTLE_ENDIAN_MAGIC == \$magic) {
            \$isBigEndian = false;
        } elseif (self::MO_BIG_ENDIAN_MAGIC == \$magic) {
            \$isBigEndian = true;
        } else {
            throw new InvalidResourceException('MO stream content has an invalid format.');
        }

        // formatRevision
        \$this->readLong(\$stream, \$isBigEndian);
        \$count = \$this->readLong(\$stream, \$isBigEndian);
        \$offsetId = \$this->readLong(\$stream, \$isBigEndian);
        \$offsetTranslated = \$this->readLong(\$stream, \$isBigEndian);
        // sizeHashes
        \$this->readLong(\$stream, \$isBigEndian);
        // offsetHashes
        \$this->readLong(\$stream, \$isBigEndian);

        \$messages = [];

        for (\$i = 0; \$i < \$count; ++\$i) {
            \$pluralId = null;
            \$translated = null;

            fseek(\$stream, \$offsetId + \$i * 8);

            \$length = \$this->readLong(\$stream, \$isBigEndian);
            \$offset = \$this->readLong(\$stream, \$isBigEndian);

            if (\$length < 1) {
                continue;
            }

            fseek(\$stream, \$offset);
            \$singularId = fread(\$stream, \$length);

            if (false !== strpos(\$singularId, \"\\000\")) {
                list(\$singularId, \$pluralId) = explode(\"\\000\", \$singularId);
            }

            fseek(\$stream, \$offsetTranslated + \$i * 8);
            \$length = \$this->readLong(\$stream, \$isBigEndian);
            \$offset = \$this->readLong(\$stream, \$isBigEndian);

            if (\$length < 1) {
                continue;
            }

            fseek(\$stream, \$offset);
            \$translated = fread(\$stream, \$length);

            if (false !== strpos(\$translated, \"\\000\")) {
                \$translated = explode(\"\\000\", \$translated);
            }

            \$ids = ['singular' => \$singularId, 'plural' => \$pluralId];
            \$item = compact('ids', 'translated');

            if (!empty(\$item['ids']['singular'])) {
                \$id = \$item['ids']['singular'];
                if (isset(\$item['ids']['plural'])) {
                    \$id .= '|'.\$item['ids']['plural'];
                }
                \$messages[\$id] = stripcslashes(implode('|', (array) \$item['translated']));
            }
        }

        fclose(\$stream);

        return array_filter(\$messages);
    }

    /**
     * Reads an unsigned long from stream respecting endianness.
     *
     * @param resource \$stream
     */
    private function readLong(\$stream, bool \$isBigEndian): int
    {
        \$result = unpack(\$isBigEndian ? 'N1' : 'V1', fread(\$stream, 4));
        \$result = current(\$result);

        return (int) substr(\$result, -8);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Loader/MoFileLoader.php";
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

namespace Symfony\\Component\\Translation\\Loader;

use Symfony\\Component\\Translation\\Exception\\InvalidResourceException;

/**
 * @copyright Copyright (c) 2010, Union of RAD http://union-of-rad.org (http://lithify.me/)
 */
class MoFileLoader extends FileLoader
{
    /**
     * Magic used for validating the format of a MO file as well as
     * detecting if the machine used to create that file was little endian.
     */
    const MO_LITTLE_ENDIAN_MAGIC = 0x950412de;

    /**
     * Magic used for validating the format of a MO file as well as
     * detecting if the machine used to create that file was big endian.
     */
    const MO_BIG_ENDIAN_MAGIC = 0xde120495;

    /**
     * The size of the header of a MO file in bytes.
     */
    const MO_HEADER_SIZE = 28;

    /**
     * Parses machine object (MO) format, independent of the machine's endian it
     * was created on. Both 32bit and 64bit systems are supported.
     *
     * {@inheritdoc}
     */
    protected function loadResource(\$resource)
    {
        \$stream = fopen(\$resource, 'r');

        \$stat = fstat(\$stream);

        if (\$stat['size'] < self::MO_HEADER_SIZE) {
            throw new InvalidResourceException('MO stream content has an invalid format.');
        }
        \$magic = unpack('V1', fread(\$stream, 4));
        \$magic = hexdec(substr(dechex(current(\$magic)), -8));

        if (self::MO_LITTLE_ENDIAN_MAGIC == \$magic) {
            \$isBigEndian = false;
        } elseif (self::MO_BIG_ENDIAN_MAGIC == \$magic) {
            \$isBigEndian = true;
        } else {
            throw new InvalidResourceException('MO stream content has an invalid format.');
        }

        // formatRevision
        \$this->readLong(\$stream, \$isBigEndian);
        \$count = \$this->readLong(\$stream, \$isBigEndian);
        \$offsetId = \$this->readLong(\$stream, \$isBigEndian);
        \$offsetTranslated = \$this->readLong(\$stream, \$isBigEndian);
        // sizeHashes
        \$this->readLong(\$stream, \$isBigEndian);
        // offsetHashes
        \$this->readLong(\$stream, \$isBigEndian);

        \$messages = [];

        for (\$i = 0; \$i < \$count; ++\$i) {
            \$pluralId = null;
            \$translated = null;

            fseek(\$stream, \$offsetId + \$i * 8);

            \$length = \$this->readLong(\$stream, \$isBigEndian);
            \$offset = \$this->readLong(\$stream, \$isBigEndian);

            if (\$length < 1) {
                continue;
            }

            fseek(\$stream, \$offset);
            \$singularId = fread(\$stream, \$length);

            if (false !== strpos(\$singularId, \"\\000\")) {
                list(\$singularId, \$pluralId) = explode(\"\\000\", \$singularId);
            }

            fseek(\$stream, \$offsetTranslated + \$i * 8);
            \$length = \$this->readLong(\$stream, \$isBigEndian);
            \$offset = \$this->readLong(\$stream, \$isBigEndian);

            if (\$length < 1) {
                continue;
            }

            fseek(\$stream, \$offset);
            \$translated = fread(\$stream, \$length);

            if (false !== strpos(\$translated, \"\\000\")) {
                \$translated = explode(\"\\000\", \$translated);
            }

            \$ids = ['singular' => \$singularId, 'plural' => \$pluralId];
            \$item = compact('ids', 'translated');

            if (!empty(\$item['ids']['singular'])) {
                \$id = \$item['ids']['singular'];
                if (isset(\$item['ids']['plural'])) {
                    \$id .= '|'.\$item['ids']['plural'];
                }
                \$messages[\$id] = stripcslashes(implode('|', (array) \$item['translated']));
            }
        }

        fclose(\$stream);

        return array_filter(\$messages);
    }

    /**
     * Reads an unsigned long from stream respecting endianness.
     *
     * @param resource \$stream
     */
    private function readLong(\$stream, bool \$isBigEndian): int
    {
        \$result = unpack(\$isBigEndian ? 'N1' : 'V1', fread(\$stream, 4));
        \$result = current(\$result);

        return (int) substr(\$result, -8);
    }
}
", "vendor/symfony/translation/Loader/MoFileLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Loader/MoFileLoader.php");
    }
}
