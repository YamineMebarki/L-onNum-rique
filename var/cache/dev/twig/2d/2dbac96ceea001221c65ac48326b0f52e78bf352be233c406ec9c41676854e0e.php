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

/* vendor/symfony/translation/Extractor/PhpStringTokenParser.php */
class __TwigTemplate_90339630baccec66a59bc2f5bf198536ef7fe155629c9bbcca3703805b39cc82 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Extractor/PhpStringTokenParser.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Extractor/PhpStringTokenParser.php"));

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

namespace Symfony\\Component\\Translation\\Extractor;

/*
 * The following is derived from code at http://github.com/nikic/PHP-Parser
 *
 * Copyright (c) 2011 by Nikita Popov
 *
 * Some rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are
 * met:
 *
 *     * Redistributions of source code must retain the above copyright
 *       notice, this list of conditions and the following disclaimer.
 *
 *     * Redistributions in binary form must reproduce the above
 *       copyright notice, this list of conditions and the following
 *       disclaimer in the documentation and/or other materials provided
 *       with the distribution.
 *
 *     * The names of the contributors may not be used to endorse or
 *       promote products derived from this software without specific
 *       prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

class PhpStringTokenParser
{
    protected static \$replacements = [
        '\\\\' => '\\\\',
        '\$' => '\$',
        'n' => \"\\n\",
        'r' => \"\\r\",
        't' => \"\\t\",
        'f' => \"\\f\",
        'v' => \"\\v\",
        'e' => \"\\x1B\",
    ];

    /**
     * Parses a string token.
     *
     * @param string \$str String token content
     *
     * @return string The parsed string
     */
    public static function parse(\$str)
    {
        \$bLength = 0;
        if ('b' === \$str[0]) {
            \$bLength = 1;
        }

        if ('\\'' === \$str[\$bLength]) {
            return str_replace(
                ['\\\\\\\\', '\\\\\\''],
                ['\\\\', '\\''],
                substr(\$str, \$bLength + 1, -1)
            );
        } else {
            return self::parseEscapeSequences(substr(\$str, \$bLength + 1, -1), '\"');
        }
    }

    /**
     * Parses escape sequences in strings (all string types apart from single quoted).
     *
     * @param string      \$str   String without quotes
     * @param string|null \$quote Quote type
     *
     * @return string String with escape sequences parsed
     */
    public static function parseEscapeSequences(\$str, \$quote)
    {
        if (null !== \$quote) {
            \$str = str_replace('\\\\'.\$quote, \$quote, \$str);
        }

        return preg_replace_callback(
            '~\\\\\\\\([\\\\\\\\\$nrtfve]|[xX][0-9a-fA-F]{1,2}|[0-7]{1,3})~',
            [__CLASS__, 'parseCallback'],
            \$str
        );
    }

    private static function parseCallback(\$matches)
    {
        \$str = \$matches[1];

        if (isset(self::\$replacements[\$str])) {
            return self::\$replacements[\$str];
        } elseif ('x' === \$str[0] || 'X' === \$str[0]) {
            return \\chr(hexdec(\$str));
        } else {
            return \\chr(octdec(\$str));
        }
    }

    /**
     * Parses a constant doc string.
     *
     * @param string \$startToken Doc string start token content (<<<SMTHG)
     * @param string \$str        String token content
     *
     * @return string Parsed string
     */
    public static function parseDocString(\$startToken, \$str)
    {
        // strip last newline (thanks tokenizer for sticking it into the string!)
        \$str = preg_replace('~(\\r\\n|\\n|\\r)\$~', '', \$str);

        // nowdoc string
        if (false !== strpos(\$startToken, '\\'')) {
            return \$str;
        }

        return self::parseEscapeSequences(\$str, null);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/translation/Extractor/PhpStringTokenParser.php";
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

namespace Symfony\\Component\\Translation\\Extractor;

/*
 * The following is derived from code at http://github.com/nikic/PHP-Parser
 *
 * Copyright (c) 2011 by Nikita Popov
 *
 * Some rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are
 * met:
 *
 *     * Redistributions of source code must retain the above copyright
 *       notice, this list of conditions and the following disclaimer.
 *
 *     * Redistributions in binary form must reproduce the above
 *       copyright notice, this list of conditions and the following
 *       disclaimer in the documentation and/or other materials provided
 *       with the distribution.
 *
 *     * The names of the contributors may not be used to endorse or
 *       promote products derived from this software without specific
 *       prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * \"AS IS\" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

class PhpStringTokenParser
{
    protected static \$replacements = [
        '\\\\' => '\\\\',
        '\$' => '\$',
        'n' => \"\\n\",
        'r' => \"\\r\",
        't' => \"\\t\",
        'f' => \"\\f\",
        'v' => \"\\v\",
        'e' => \"\\x1B\",
    ];

    /**
     * Parses a string token.
     *
     * @param string \$str String token content
     *
     * @return string The parsed string
     */
    public static function parse(\$str)
    {
        \$bLength = 0;
        if ('b' === \$str[0]) {
            \$bLength = 1;
        }

        if ('\\'' === \$str[\$bLength]) {
            return str_replace(
                ['\\\\\\\\', '\\\\\\''],
                ['\\\\', '\\''],
                substr(\$str, \$bLength + 1, -1)
            );
        } else {
            return self::parseEscapeSequences(substr(\$str, \$bLength + 1, -1), '\"');
        }
    }

    /**
     * Parses escape sequences in strings (all string types apart from single quoted).
     *
     * @param string      \$str   String without quotes
     * @param string|null \$quote Quote type
     *
     * @return string String with escape sequences parsed
     */
    public static function parseEscapeSequences(\$str, \$quote)
    {
        if (null !== \$quote) {
            \$str = str_replace('\\\\'.\$quote, \$quote, \$str);
        }

        return preg_replace_callback(
            '~\\\\\\\\([\\\\\\\\\$nrtfve]|[xX][0-9a-fA-F]{1,2}|[0-7]{1,3})~',
            [__CLASS__, 'parseCallback'],
            \$str
        );
    }

    private static function parseCallback(\$matches)
    {
        \$str = \$matches[1];

        if (isset(self::\$replacements[\$str])) {
            return self::\$replacements[\$str];
        } elseif ('x' === \$str[0] || 'X' === \$str[0]) {
            return \\chr(hexdec(\$str));
        } else {
            return \\chr(octdec(\$str));
        }
    }

    /**
     * Parses a constant doc string.
     *
     * @param string \$startToken Doc string start token content (<<<SMTHG)
     * @param string \$str        String token content
     *
     * @return string Parsed string
     */
    public static function parseDocString(\$startToken, \$str)
    {
        // strip last newline (thanks tokenizer for sticking it into the string!)
        \$str = preg_replace('~(\\r\\n|\\n|\\r)\$~', '', \$str);

        // nowdoc string
        if (false !== strpos(\$startToken, '\\'')) {
            return \$str;
        }

        return self::parseEscapeSequences(\$str, null);
    }
}
", "vendor/symfony/translation/Extractor/PhpStringTokenParser.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Extractor/PhpStringTokenParser.php");
    }
}
