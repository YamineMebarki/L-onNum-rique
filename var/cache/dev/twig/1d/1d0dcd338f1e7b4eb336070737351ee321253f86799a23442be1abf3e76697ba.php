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

/* vendor/swiftmailer/swiftmailer/lib/classes/Swift/CharacterReaderFactory/SimpleCharacterReaderFactory.php */
class __TwigTemplate_0cf1c84dbba2c55f6f0da7cc045f3e7ab82230d4a4aa5760022bb6f4a426077e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/CharacterReaderFactory/SimpleCharacterReaderFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/CharacterReaderFactory/SimpleCharacterReaderFactory.php"));

        // line 1
        echo "<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Standard factory for creating CharacterReaders.
 *
 * @author Chris Corbyn
 */
class Swift_CharacterReaderFactory_SimpleCharacterReaderFactory implements Swift_CharacterReaderFactory
{
    /**
     * A map of charset patterns to their implementation classes.
     *
     * @var array
     */
    private static \$map = [];

    /**
     * Factories which have already been loaded.
     *
     * @var Swift_CharacterReaderFactory[]
     */
    private static \$loaded = [];

    /**
     * Creates a new CharacterReaderFactory.
     */
    public function __construct()
    {
        \$this->init();
    }

    public function __wakeup()
    {
        \$this->init();
    }

    public function init()
    {
        if (count(self::\$map) > 0) {
            return;
        }

        \$prefix = 'Swift_CharacterReader_';

        \$singleByte = [
            'class' => \$prefix.'GenericFixedWidthReader',
            'constructor' => [1],
            ];

        \$doubleByte = [
            'class' => \$prefix.'GenericFixedWidthReader',
            'constructor' => [2],
            ];

        \$fourBytes = [
            'class' => \$prefix.'GenericFixedWidthReader',
            'constructor' => [4],
            ];

        // Utf-8
        self::\$map['utf-?8'] = [
            'class' => \$prefix.'Utf8Reader',
            'constructor' => [],
            ];

        //7-8 bit charsets
        self::\$map['(us-)?ascii'] = \$singleByte;
        self::\$map['(iso|iec)-?8859-?[0-9]+'] = \$singleByte;
        self::\$map['windows-?125[0-9]'] = \$singleByte;
        self::\$map['cp-?[0-9]+'] = \$singleByte;
        self::\$map['ansi'] = \$singleByte;
        self::\$map['macintosh'] = \$singleByte;
        self::\$map['koi-?7'] = \$singleByte;
        self::\$map['koi-?8-?.+'] = \$singleByte;
        self::\$map['mik'] = \$singleByte;
        self::\$map['(cork|t1)'] = \$singleByte;
        self::\$map['v?iscii'] = \$singleByte;

        //16 bits
        self::\$map['(ucs-?2|utf-?16)'] = \$doubleByte;

        //32 bits
        self::\$map['(ucs-?4|utf-?32)'] = \$fourBytes;

        // Fallback
        self::\$map['.*'] = \$singleByte;
    }

    /**
     * Returns a CharacterReader suitable for the charset applied.
     *
     * @param string \$charset
     *
     * @return Swift_CharacterReader
     */
    public function getReaderFor(\$charset)
    {
        \$charset = strtolower(trim(\$charset));
        foreach (self::\$map as \$pattern => \$spec) {
            \$re = '/^'.\$pattern.'\$/D';
            if (preg_match(\$re, \$charset)) {
                if (!array_key_exists(\$pattern, self::\$loaded)) {
                    \$reflector = new ReflectionClass(\$spec['class']);
                    if (\$reflector->getConstructor()) {
                        \$reader = \$reflector->newInstanceArgs(\$spec['constructor']);
                    } else {
                        \$reader = \$reflector->newInstance();
                    }
                    self::\$loaded[\$pattern] = \$reader;
                }

                return self::\$loaded[\$pattern];
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
        return "vendor/swiftmailer/swiftmailer/lib/classes/Swift/CharacterReaderFactory/SimpleCharacterReaderFactory.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of SwiftMailer.
 * (c) 2004-2009 Chris Corbyn
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Standard factory for creating CharacterReaders.
 *
 * @author Chris Corbyn
 */
class Swift_CharacterReaderFactory_SimpleCharacterReaderFactory implements Swift_CharacterReaderFactory
{
    /**
     * A map of charset patterns to their implementation classes.
     *
     * @var array
     */
    private static \$map = [];

    /**
     * Factories which have already been loaded.
     *
     * @var Swift_CharacterReaderFactory[]
     */
    private static \$loaded = [];

    /**
     * Creates a new CharacterReaderFactory.
     */
    public function __construct()
    {
        \$this->init();
    }

    public function __wakeup()
    {
        \$this->init();
    }

    public function init()
    {
        if (count(self::\$map) > 0) {
            return;
        }

        \$prefix = 'Swift_CharacterReader_';

        \$singleByte = [
            'class' => \$prefix.'GenericFixedWidthReader',
            'constructor' => [1],
            ];

        \$doubleByte = [
            'class' => \$prefix.'GenericFixedWidthReader',
            'constructor' => [2],
            ];

        \$fourBytes = [
            'class' => \$prefix.'GenericFixedWidthReader',
            'constructor' => [4],
            ];

        // Utf-8
        self::\$map['utf-?8'] = [
            'class' => \$prefix.'Utf8Reader',
            'constructor' => [],
            ];

        //7-8 bit charsets
        self::\$map['(us-)?ascii'] = \$singleByte;
        self::\$map['(iso|iec)-?8859-?[0-9]+'] = \$singleByte;
        self::\$map['windows-?125[0-9]'] = \$singleByte;
        self::\$map['cp-?[0-9]+'] = \$singleByte;
        self::\$map['ansi'] = \$singleByte;
        self::\$map['macintosh'] = \$singleByte;
        self::\$map['koi-?7'] = \$singleByte;
        self::\$map['koi-?8-?.+'] = \$singleByte;
        self::\$map['mik'] = \$singleByte;
        self::\$map['(cork|t1)'] = \$singleByte;
        self::\$map['v?iscii'] = \$singleByte;

        //16 bits
        self::\$map['(ucs-?2|utf-?16)'] = \$doubleByte;

        //32 bits
        self::\$map['(ucs-?4|utf-?32)'] = \$fourBytes;

        // Fallback
        self::\$map['.*'] = \$singleByte;
    }

    /**
     * Returns a CharacterReader suitable for the charset applied.
     *
     * @param string \$charset
     *
     * @return Swift_CharacterReader
     */
    public function getReaderFor(\$charset)
    {
        \$charset = strtolower(trim(\$charset));
        foreach (self::\$map as \$pattern => \$spec) {
            \$re = '/^'.\$pattern.'\$/D';
            if (preg_match(\$re, \$charset)) {
                if (!array_key_exists(\$pattern, self::\$loaded)) {
                    \$reflector = new ReflectionClass(\$spec['class']);
                    if (\$reflector->getConstructor()) {
                        \$reader = \$reflector->newInstanceArgs(\$spec['constructor']);
                    } else {
                        \$reader = \$reflector->newInstance();
                    }
                    self::\$loaded[\$pattern] = \$reader;
                }

                return self::\$loaded[\$pattern];
            }
        }
    }
}
", "vendor/swiftmailer/swiftmailer/lib/classes/Swift/CharacterReaderFactory/SimpleCharacterReaderFactory.php", "/var/www/public/DevLaon/templates/vendor/swiftmailer/swiftmailer/lib/classes/Swift/CharacterReaderFactory/SimpleCharacterReaderFactory.php");
    }
}
