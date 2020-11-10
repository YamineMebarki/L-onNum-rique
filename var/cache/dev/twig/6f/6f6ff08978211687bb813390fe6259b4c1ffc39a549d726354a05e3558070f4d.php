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

/* vendor/symfony/yaml/Tests/Fixtures/YtsTypeTransfers.yml */
class __TwigTemplate_8ab5dc9957d9436e2c1509d880166aaabd2844a6aadb2d231b6bce5301ce9893 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/YtsTypeTransfers.yml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/yaml/Tests/Fixtures/YtsTypeTransfers.yml"));

        // line 1
        echo "--- %YAML:1.0
test: Strings
brief: >
    Any group of characters beginning with an
    alphabetic or numeric character is a string,
    unless it belongs to one of the groups below
    (such as an Integer or Time).
yaml: |
    String
php: |
    'String'
---
test: String characters
brief: >
    A string can contain any alphabetic or
    numeric character, along with many
    punctuation characters, including the
    period, dash, space, quotes, exclamation, and
    question mark.
yaml: |
    - What's Yaml?
    - It's for writing data structures in plain text.
    - And?
    - And what? That's not good enough for you?
    - No, I mean, \"And what about Yaml?\"
    - Oh, oh yeah. Uh.. Yaml for Ruby.
php: |
    [
      \"What's Yaml?\",
      \"It's for writing data structures in plain text.\",
      \"And?\",
      \"And what? That's not good enough for you?\",
      \"No, I mean, \\\"And what about Yaml?\\\"\",
      \"Oh, oh yeah. Uh.. Yaml for Ruby.\"
    ]
---
test: Indicators in Strings
brief: >
    Be careful using indicators in strings.  In particular,
    the comma, colon, and pound sign must be used carefully.
yaml: |
    the colon followed by space is an indicator: but is a string:right here
    same for the pound sign: here we have it#in a string
    the comma can, honestly, be used in most cases: [ but not in, inline collections ]
php: |
    [
      'the colon followed by space is an indicator' => 'but is a string:right here',
      'same for the pound sign' => 'here we have it#in a string',
      'the comma can, honestly, be used in most cases' => ['but not in', 'inline collections']
    ]
---
test: Forcing Strings
brief: >
    Any YAML type can be forced into a string using the
    explicit !!str method.
yaml: |
    date string: !!str 2001-08-01
    number string: !!str 192
php: |
    [
      'date string' => '2001-08-01',
      'number string' => '192'
    ]
---
test: Single-quoted Strings
brief: >
    You can also enclose your strings within single quotes,
    which allows use of slashes, colons, and other indicators
    freely.  Inside single quotes, you can represent a single
    quote in your string by using two single quotes next to
    each other.
yaml: |
    all my favorite symbols: '#:!/%.)'
    a few i hate: '&(*'
    why do i hate them?: 'it''s very hard to explain'
    entities: '&pound; me'
php: |
    [
      'all my favorite symbols' => '#:!/%.)',
      'a few i hate' => '&(*',
      'why do i hate them?' => 'it\\'s very hard to explain',
      'entities' => '&pound; me'
    ]
---
test: Double-quoted Strings
brief: >
    Enclosing strings in double quotes allows you
    to use escapings to represent ASCII and
    Unicode characters.
yaml: |
    i know where i want my line breaks: \"one here\\nand another here\\n\"
php: |
    [
      'i know where i want my line breaks' => \"one here\\nand another here\\n\"
    ]
---
test: Multi-line Quoted Strings
todo: true
brief: >
    Both single- and double-quoted strings may be
    carried on to new lines in your YAML document.
    They must be indented a step and indentation
    is interpreted as a single space.
yaml: |
    i want a long string: \"so i'm going to
      let it go on and on to other lines
      until i end it with a quote.\"
php: |
    ['i want a long string' => \"so i'm going to \".
         \"let it go on and on to other lines \".
         \"until i end it with a quote.\"
    ]

---
test: Plain scalars
todo: true
brief: >
    Unquoted strings may also span multiple lines, if they
    are free of YAML space indicators and indented.
yaml: |
    - My little toe is broken in two places;
    - I'm crazy to have skied this way;
    - I'm not the craziest he's seen, since there was always the German guy
      who skied for 3 hours on a broken shin bone (just below the kneecap);
    - Nevertheless, second place is respectable, and he doesn't
      recommend going for the record;
    - He's going to put my foot in plaster for a month;
    - This would impair my skiing ability somewhat for the
      duration, as can be imagined.
php: |
    [
      \"My little toe is broken in two places;\",
      \"I'm crazy to have skied this way;\",
      \"I'm not the craziest he's seen, since there was always \".
         \"the German guy who skied for 3 hours on a broken shin \".
         \"bone (just below the kneecap);\",
      \"Nevertheless, second place is respectable, and he doesn't \".
         \"recommend going for the record;\",
      \"He's going to put my foot in plaster for a month;\",
      \"This would impair my skiing ability somewhat for the duration, \".
         \"as can be imagined.\"
    ]
---
test: 'Null'
brief: >
    You can use the tilde '~' character for a null value.
yaml: |
    name: Mr. Show
    hosted by: Bob and David
    date of next season: ~
php: |
    [
      'name' => 'Mr. Show',
      'hosted by' => 'Bob and David',
      'date of next season' => null
    ]
---
test: Boolean
brief: >
    You can use 'true' and 'false' for Boolean values.
yaml: |
    Is Gus a Liar?: true
    Do I rely on Gus for Sustenance?: false
php: |
    [
      'Is Gus a Liar?' => true,
      'Do I rely on Gus for Sustenance?' => false
    ]
---
test: Integers
dump_skip: true
brief: >
    An integer is a series of numbers, optionally
    starting with a positive or negative sign.  Integers
    may also contain commas for readability.
yaml: |
    zero: 0
    simple: 12
php: |
    [
      'zero' => 0,
      'simple' => 12,
    ]
---
test: Floats
dump_skip: true
brief: >
     Floats are represented by numbers with decimals,
     allowing for scientific notation, as well as
     positive and negative infinity and \"not a number.\"
yaml: |
     a simple float: 2.00
     scientific notation: 1.00009e+3
php: |
     [
       'a simple float' => 2.0,
       'scientific notation' => 1000.09
     ]
---
test: Time
todo: true
brief: >
    You can represent timestamps by using
    ISO8601 format, or a variation which
    allows spaces between the date, time and
    time zone.
yaml: |
    iso8601: 2001-12-14t21:59:43.10-05:00
    space separated: 2001-12-14 21:59:43.10 -05:00
php: |
    [
      'iso8601' => mktime( 2001, 12, 14, 21, 59, 43, 0.10, \"-05:00\" ),
      'space separated' => mktime( 2001, 12, 14, 21, 59, 43, 0.10, \"-05:00\" )
    ]
---
test: Date
todo: true
brief: >
    A date can be represented by its year,
    month and day in ISO8601 order.
yaml: |
    1976-07-31
php: |
    date( 1976, 7, 31 )
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/yaml/Tests/Fixtures/YtsTypeTransfers.yml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("--- %YAML:1.0
test: Strings
brief: >
    Any group of characters beginning with an
    alphabetic or numeric character is a string,
    unless it belongs to one of the groups below
    (such as an Integer or Time).
yaml: |
    String
php: |
    'String'
---
test: String characters
brief: >
    A string can contain any alphabetic or
    numeric character, along with many
    punctuation characters, including the
    period, dash, space, quotes, exclamation, and
    question mark.
yaml: |
    - What's Yaml?
    - It's for writing data structures in plain text.
    - And?
    - And what? That's not good enough for you?
    - No, I mean, \"And what about Yaml?\"
    - Oh, oh yeah. Uh.. Yaml for Ruby.
php: |
    [
      \"What's Yaml?\",
      \"It's for writing data structures in plain text.\",
      \"And?\",
      \"And what? That's not good enough for you?\",
      \"No, I mean, \\\"And what about Yaml?\\\"\",
      \"Oh, oh yeah. Uh.. Yaml for Ruby.\"
    ]
---
test: Indicators in Strings
brief: >
    Be careful using indicators in strings.  In particular,
    the comma, colon, and pound sign must be used carefully.
yaml: |
    the colon followed by space is an indicator: but is a string:right here
    same for the pound sign: here we have it#in a string
    the comma can, honestly, be used in most cases: [ but not in, inline collections ]
php: |
    [
      'the colon followed by space is an indicator' => 'but is a string:right here',
      'same for the pound sign' => 'here we have it#in a string',
      'the comma can, honestly, be used in most cases' => ['but not in', 'inline collections']
    ]
---
test: Forcing Strings
brief: >
    Any YAML type can be forced into a string using the
    explicit !!str method.
yaml: |
    date string: !!str 2001-08-01
    number string: !!str 192
php: |
    [
      'date string' => '2001-08-01',
      'number string' => '192'
    ]
---
test: Single-quoted Strings
brief: >
    You can also enclose your strings within single quotes,
    which allows use of slashes, colons, and other indicators
    freely.  Inside single quotes, you can represent a single
    quote in your string by using two single quotes next to
    each other.
yaml: |
    all my favorite symbols: '#:!/%.)'
    a few i hate: '&(*'
    why do i hate them?: 'it''s very hard to explain'
    entities: '&pound; me'
php: |
    [
      'all my favorite symbols' => '#:!/%.)',
      'a few i hate' => '&(*',
      'why do i hate them?' => 'it\\'s very hard to explain',
      'entities' => '&pound; me'
    ]
---
test: Double-quoted Strings
brief: >
    Enclosing strings in double quotes allows you
    to use escapings to represent ASCII and
    Unicode characters.
yaml: |
    i know where i want my line breaks: \"one here\\nand another here\\n\"
php: |
    [
      'i know where i want my line breaks' => \"one here\\nand another here\\n\"
    ]
---
test: Multi-line Quoted Strings
todo: true
brief: >
    Both single- and double-quoted strings may be
    carried on to new lines in your YAML document.
    They must be indented a step and indentation
    is interpreted as a single space.
yaml: |
    i want a long string: \"so i'm going to
      let it go on and on to other lines
      until i end it with a quote.\"
php: |
    ['i want a long string' => \"so i'm going to \".
         \"let it go on and on to other lines \".
         \"until i end it with a quote.\"
    ]

---
test: Plain scalars
todo: true
brief: >
    Unquoted strings may also span multiple lines, if they
    are free of YAML space indicators and indented.
yaml: |
    - My little toe is broken in two places;
    - I'm crazy to have skied this way;
    - I'm not the craziest he's seen, since there was always the German guy
      who skied for 3 hours on a broken shin bone (just below the kneecap);
    - Nevertheless, second place is respectable, and he doesn't
      recommend going for the record;
    - He's going to put my foot in plaster for a month;
    - This would impair my skiing ability somewhat for the
      duration, as can be imagined.
php: |
    [
      \"My little toe is broken in two places;\",
      \"I'm crazy to have skied this way;\",
      \"I'm not the craziest he's seen, since there was always \".
         \"the German guy who skied for 3 hours on a broken shin \".
         \"bone (just below the kneecap);\",
      \"Nevertheless, second place is respectable, and he doesn't \".
         \"recommend going for the record;\",
      \"He's going to put my foot in plaster for a month;\",
      \"This would impair my skiing ability somewhat for the duration, \".
         \"as can be imagined.\"
    ]
---
test: 'Null'
brief: >
    You can use the tilde '~' character for a null value.
yaml: |
    name: Mr. Show
    hosted by: Bob and David
    date of next season: ~
php: |
    [
      'name' => 'Mr. Show',
      'hosted by' => 'Bob and David',
      'date of next season' => null
    ]
---
test: Boolean
brief: >
    You can use 'true' and 'false' for Boolean values.
yaml: |
    Is Gus a Liar?: true
    Do I rely on Gus for Sustenance?: false
php: |
    [
      'Is Gus a Liar?' => true,
      'Do I rely on Gus for Sustenance?' => false
    ]
---
test: Integers
dump_skip: true
brief: >
    An integer is a series of numbers, optionally
    starting with a positive or negative sign.  Integers
    may also contain commas for readability.
yaml: |
    zero: 0
    simple: 12
php: |
    [
      'zero' => 0,
      'simple' => 12,
    ]
---
test: Floats
dump_skip: true
brief: >
     Floats are represented by numbers with decimals,
     allowing for scientific notation, as well as
     positive and negative infinity and \"not a number.\"
yaml: |
     a simple float: 2.00
     scientific notation: 1.00009e+3
php: |
     [
       'a simple float' => 2.0,
       'scientific notation' => 1000.09
     ]
---
test: Time
todo: true
brief: >
    You can represent timestamps by using
    ISO8601 format, or a variation which
    allows spaces between the date, time and
    time zone.
yaml: |
    iso8601: 2001-12-14t21:59:43.10-05:00
    space separated: 2001-12-14 21:59:43.10 -05:00
php: |
    [
      'iso8601' => mktime( 2001, 12, 14, 21, 59, 43, 0.10, \"-05:00\" ),
      'space separated' => mktime( 2001, 12, 14, 21, 59, 43, 0.10, \"-05:00\" )
    ]
---
test: Date
todo: true
brief: >
    A date can be represented by its year,
    month and day in ISO8601 order.
yaml: |
    1976-07-31
php: |
    date( 1976, 7, 31 )
", "vendor/symfony/yaml/Tests/Fixtures/YtsTypeTransfers.yml", "/var/www/public/DevLaon/templates/vendor/symfony/yaml/Tests/Fixtures/YtsTypeTransfers.yml");
    }
}