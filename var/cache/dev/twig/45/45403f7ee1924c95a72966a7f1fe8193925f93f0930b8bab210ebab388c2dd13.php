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

/* vendor/jdorn/sql-formatter/tests/format-highlight.html */
class __TwigTemplate_923945f0a8c67785731acee3ea9618dd8b4888a51ccbc5ec59b70ba14cd8519f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/jdorn/sql-formatter/tests/format-highlight.html"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/jdorn/sql-formatter/tests/format-highlight.html"));

        // line 1
        echo "<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">SELECT</span> 
  <span style=\"color: #333;\">customer_id</span><span >,</span> 
  <span style=\"color: #333;\">customer_name</span><span >,</span> 
  <span style=\"font-weight:bold;\">COUNT</span>(<span style=\"color: #333;\">order_id</span>) <span style=\"font-weight:bold;\">as</span> <span style=\"color: #333;\">total</span> 
<span style=\"font-weight:bold;\">FROM</span> 
  <span style=\"color: #333;\">customers</span> 
  <span style=\"font-weight:bold;\">INNER JOIN</span> <span style=\"color: #333;\">orders</span> <span style=\"font-weight:bold;\">ON</span> <span style=\"color: #333;\">customers</span><span >.</span><span style=\"color: #333;\">customer_id</span> <span >=</span> <span style=\"color: #333;\">orders</span><span >.</span><span style=\"color: #333;\">customer_id</span> 
<span style=\"font-weight:bold;\">GROUP BY</span> 
  <span style=\"color: #333;\">customer_id</span><span >,</span> 
  <span style=\"color: #333;\">customer_name</span> 
<span style=\"font-weight:bold;\">HAVING</span> 
  <span style=\"font-weight:bold;\">COUNT</span>(<span style=\"color: #333;\">order_id</span>) <span >&gt;</span> <span style=\"color: green;\">5</span> 
<span style=\"font-weight:bold;\">ORDER BY</span> 
  <span style=\"font-weight:bold;\">COUNT</span>(<span style=\"color: #333;\">order_id</span>) <span style=\"font-weight:bold;\">DESC</span><span >;</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">UPDATE</span> 
  <span style=\"color: #333;\">customers</span> 
<span style=\"font-weight:bold;\">SET</span> 
  <span style=\"color: #333;\">totalorders</span> <span >=</span> <span style=\"color: #333;\">ordersummary</span><span >.</span><span style=\"color: #333;\">total</span> 
<span style=\"font-weight:bold;\">FROM</span> 
  (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">customer_id</span><span >,</span> 
      <span style=\"font-weight:bold;\">count</span>(<span style=\"color: #333;\">order_id</span>) <span style=\"font-weight:bold;\">As</span> <span style=\"color: #333;\">total</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: #333;\">orders</span> 
    <span style=\"font-weight:bold;\">GROUP BY</span> 
      <span style=\"color: #333;\">customer_id</span>
  ) <span style=\"font-weight:bold;\">As</span> <span style=\"color: #333;\">ordersummary</span> 
<span style=\"font-weight:bold;\">WHERE</span> 
  <span style=\"color: #333;\">customers</span><span >.</span><span style=\"color: #333;\">customer_id</span> <span >=</span> <span style=\"color: #333;\">ordersummary</span><span >.</span><span style=\"color: #333;\">customer_id</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">SELECT</span> 
  <span >*</span> 
<span style=\"font-weight:bold;\">FROM</span> 
  <span style=\"color: #333;\">sometable</span> 
<span style=\"font-weight:bold;\">UNION ALL</span> 
<span style=\"font-weight:bold;\">SELECT</span> 
  <span >*</span> 
<span style=\"font-weight:bold;\">FROM</span> 
  <span style=\"color: #333;\">someothertable</span><span >;</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">SET</span> 
  <span style=\"font-weight:bold;\">NAMES</span> <span style=\"color: blue;\">'utf8'</span><span >;</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">CREATE</span> <span style=\"font-weight:bold;\">TABLE</span> <span style=\"color: purple;\">`PREFIX_address`</span> (
  <span style=\"color: purple;\">`id_address`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">auto_increment</span><span >,</span> 
  <span style=\"color: purple;\">`id_country`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`id_state`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">default</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`id_customer`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">default</span> <span style=\"color: blue;\">'0'</span><span >,</span> 
  <span style=\"color: purple;\">`id_manufacturer`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">default</span> <span style=\"color: blue;\">'0'</span><span >,</span> 
  <span style=\"color: purple;\">`id_supplier`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">default</span> <span style=\"color: blue;\">'0'</span><span >,</span> 
  <span style=\"color: purple;\">`id_warehouse`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">default</span> <span style=\"color: blue;\">'0'</span><span >,</span> 
  <span style=\"color: purple;\">`alias`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">32</span>) <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`company`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">64</span>) <span style=\"font-weight:bold;\">default</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`lastname`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">32</span>) <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`firstname`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">32</span>) <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`address1`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">128</span>) <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`address2`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">128</span>) <span style=\"font-weight:bold;\">default</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`postcode`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">12</span>) <span style=\"font-weight:bold;\">default</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`city`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">64</span>) <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`other`</span> <span style=\"color: #333;\">text</span><span >,</span> 
  <span style=\"color: purple;\">`phone`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">16</span>) <span style=\"font-weight:bold;\">default</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`phone_mobile`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">16</span>) <span style=\"font-weight:bold;\">default</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`vat_number`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">32</span>) <span style=\"font-weight:bold;\">default</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`dni`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">16</span>) <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`date_add`</span> <span style=\"color: #333;\">datetime</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`date_upd`</span> <span style=\"color: #333;\">datetime</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`active`</span> <span style=\"color: #333;\">tinyint</span>(<span style=\"color: green;\">1</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">default</span> <span style=\"color: blue;\">'1'</span><span >,</span> 
  <span style=\"color: purple;\">`deleted`</span> <span style=\"color: #333;\">tinyint</span>(<span style=\"color: green;\">1</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">default</span> <span style=\"color: blue;\">'0'</span><span >,</span> 
  <span style=\"font-weight:bold;\">PRIMARY</span> <span style=\"font-weight:bold;\">KEY</span> (<span style=\"color: purple;\">`id_address`</span>)<span >,</span> 
  <span style=\"font-weight:bold;\">KEY</span> <span style=\"color: purple;\">`address_customer`</span> (<span style=\"color: purple;\">`id_customer`</span>)<span >,</span> 
  <span style=\"font-weight:bold;\">KEY</span> <span style=\"color: purple;\">`id_country`</span> (<span style=\"color: purple;\">`id_country`</span>)<span >,</span> 
  <span style=\"font-weight:bold;\">KEY</span> <span style=\"color: purple;\">`id_state`</span> (<span style=\"color: purple;\">`id_state`</span>)<span >,</span> 
  <span style=\"font-weight:bold;\">KEY</span> <span style=\"color: purple;\">`id_manufacturer`</span> (<span style=\"color: purple;\">`id_manufacturer`</span>)<span >,</span> 
  <span style=\"font-weight:bold;\">KEY</span> <span style=\"color: purple;\">`id_supplier`</span> (<span style=\"color: purple;\">`id_supplier`</span>)<span >,</span> 
  <span style=\"font-weight:bold;\">KEY</span> <span style=\"color: purple;\">`id_warehouse`</span> (<span style=\"color: purple;\">`id_warehouse`</span>)
) <span style=\"font-weight:bold;\">ENGINE</span> <span >=</span> <span style=\"font-weight:bold;\">ENGINE_TYPE</span> <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"font-weight:bold;\">CHARSET</span> <span >=</span> <span style=\"color: #333;\">utf8</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">CREATE</span> <span style=\"font-weight:bold;\">TABLE</span> <span style=\"color: purple;\">`PREFIX_alias`</span> (
  <span style=\"color: purple;\">`id_alias`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">auto_increment</span><span >,</span> 
  <span style=\"color: purple;\">`alias`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">255</span>) <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`search`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">255</span>) <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`active`</span> <span style=\"color: #333;\">tinyint</span>(<span style=\"color: green;\">1</span>) <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">default</span> <span style=\"color: blue;\">'1'</span><span >,</span> 
  <span style=\"font-weight:bold;\">PRIMARY</span> <span style=\"font-weight:bold;\">KEY</span> (<span style=\"color: purple;\">`id_alias`</span>)<span >,</span> 
  <span style=\"font-weight:bold;\">UNIQUE</span> <span style=\"font-weight:bold;\">KEY</span> <span style=\"color: purple;\">`alias`</span> (<span style=\"color: purple;\">`alias`</span>)
) <span style=\"font-weight:bold;\">ENGINE</span> <span >=</span> <span style=\"font-weight:bold;\">ENGINE_TYPE</span> <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"font-weight:bold;\">CHARSET</span> <span >=</span> <span style=\"color: #333;\">utf8</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">CREATE</span> <span style=\"font-weight:bold;\">TABLE</span> <span style=\"color: purple;\">`PREFIX_carrier`</span> (
  <span style=\"color: purple;\">`id_carrier`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">AUTO_INCREMENT</span><span >,</span> 
  <span style=\"color: purple;\">`id_reference`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`id_tax_rules_group`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: blue;\">'0'</span><span >,</span> 
  <span style=\"color: purple;\">`name`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">64</span>) <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`url`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">255</span>) <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`active`</span> <span style=\"color: #333;\">tinyint</span>(<span style=\"color: green;\">1</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: blue;\">'0'</span><span >,</span> 
  <span style=\"color: purple;\">`deleted`</span> <span style=\"color: #333;\">tinyint</span>(<span style=\"color: green;\">1</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: blue;\">'0'</span><span >,</span> 
  <span style=\"color: purple;\">`shipping_handling`</span> <span style=\"color: #333;\">tinyint</span>(<span style=\"color: green;\">1</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: blue;\">'1'</span><span >,</span> 
  <span style=\"color: purple;\">`range_behavior`</span> <span style=\"color: #333;\">tinyint</span>(<span style=\"color: green;\">1</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: blue;\">'0'</span><span >,</span> 
  <span style=\"color: purple;\">`is_module`</span> <span style=\"color: #333;\">tinyint</span>(<span style=\"color: green;\">1</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: blue;\">'0'</span><span >,</span> 
  <span style=\"color: purple;\">`is_free`</span> <span style=\"color: #333;\">tinyint</span>(<span style=\"color: green;\">1</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: blue;\">'0'</span><span >,</span> 
  <span style=\"color: purple;\">`shipping_external`</span> <span style=\"color: #333;\">tinyint</span>(<span style=\"color: green;\">1</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: blue;\">'0'</span><span >,</span> 
  <span style=\"color: purple;\">`need_range`</span> <span style=\"color: #333;\">tinyint</span>(<span style=\"color: green;\">1</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: blue;\">'0'</span><span >,</span> 
  <span style=\"color: purple;\">`external_module_name`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">64</span>) <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`shipping_method`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">2</span>) <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: blue;\">'0'</span><span >,</span> 
  <span style=\"color: purple;\">`position`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">default</span> <span style=\"color: blue;\">'0'</span><span >,</span> 
  <span style=\"color: purple;\">`max_width`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: green;\">0</span><span >,</span> 
  <span style=\"color: purple;\">`max_height`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: green;\">0</span><span >,</span> 
  <span style=\"color: purple;\">`max_depth`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: green;\">0</span><span >,</span> 
  <span style=\"color: purple;\">`max_weight`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: green;\">0</span><span >,</span> 
  <span style=\"color: purple;\">`grade`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: green;\">0</span><span >,</span> 
  <span style=\"font-weight:bold;\">PRIMARY</span> <span style=\"font-weight:bold;\">KEY</span> (<span style=\"color: purple;\">`id_carrier`</span>)<span >,</span> 
  <span style=\"font-weight:bold;\">KEY</span> <span style=\"color: purple;\">`deleted`</span> (<span style=\"color: purple;\">`deleted`</span><span >,</span> <span style=\"color: purple;\">`active`</span>)<span >,</span> 
  <span style=\"font-weight:bold;\">KEY</span> <span style=\"color: purple;\">`id_tax_rules_group`</span> (<span style=\"color: purple;\">`id_tax_rules_group`</span>)
) <span style=\"font-weight:bold;\">ENGINE</span> <span >=</span> <span style=\"font-weight:bold;\">ENGINE_TYPE</span> <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"font-weight:bold;\">CHARSET</span> <span >=</span> <span style=\"color: #333;\">utf8</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">CREATE</span> <span style=\"font-weight:bold;\">TABLE</span> <span style=\"font-weight:bold;\">IF</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">EXISTS</span> <span style=\"color: purple;\">`PREFIX_specific_price_rule`</span> (
  <span style=\"color: purple;\">`id_specific_price_rule`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">AUTO_INCREMENT</span><span >,</span> 
  <span style=\"color: purple;\">`name`</span> <span style=\"color: #333;\">VARCHAR</span>(<span style=\"color: green;\">255</span>) <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`id_shop`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">11</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: blue;\">'1'</span><span >,</span> 
  <span style=\"color: purple;\">`id_currency`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`id_country`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`id_group`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`from_quantity`</span> <span style=\"color: #333;\">mediumint</span>(<span style=\"color: green;\">8</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`price`</span> <span style=\"color: #333;\">DECIMAL</span>(<span style=\"color: green;\">20</span><span >,</span> <span style=\"color: green;\">6</span>)<span >,</span> 
  <span style=\"color: purple;\">`reduction`</span> <span style=\"color: #333;\">decimal</span>(<span style=\"color: green;\">20</span><span >,</span> <span style=\"color: green;\">6</span>) <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`reduction_type`</span> <span style=\"color: #333;\">enum</span>(<span style=\"color: blue;\">'amount'</span><span >,</span> <span style=\"color: blue;\">'percentage'</span>) <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`from`</span> <span style=\"color: #333;\">datetime</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`to`</span> <span style=\"color: #333;\">datetime</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"font-weight:bold;\">PRIMARY</span> <span style=\"font-weight:bold;\">KEY</span> (<span style=\"color: purple;\">`id_specific_price_rule`</span>)<span >,</span> 
  <span style=\"font-weight:bold;\">KEY</span> <span style=\"color: purple;\">`id_product`</span> (
    <span style=\"color: purple;\">`id_shop`</span><span >,</span> <span style=\"color: purple;\">`id_currency`</span><span >,</span> <span style=\"color: purple;\">`id_country`</span><span >,</span> 
    <span style=\"color: purple;\">`id_group`</span><span >,</span> <span style=\"color: purple;\">`from_quantity`</span><span >,</span> <span style=\"color: purple;\">`from`</span><span >,</span> 
    <span style=\"color: purple;\">`to`</span>
  )
) <span style=\"font-weight:bold;\">ENGINE</span> <span >=</span> <span style=\"font-weight:bold;\">ENGINE_TYPE</span> <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"font-weight:bold;\">CHARSET</span> <span >=</span> <span style=\"color: #333;\">utf8</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">UPDATE</span> 
  <span style=\"color: purple;\">`PREFIX_configuration`</span> 
<span style=\"font-weight:bold;\">SET</span> 
  <span style=\"color: #333;\">value</span> <span >=</span> <span style=\"color: blue;\">'6'</span> 
<span style=\"font-weight:bold;\">WHERE</span> 
  <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'PS_SEARCH_WEIGHT_PNAME'</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">UPDATE</span> 
  <span style=\"color: purple;\">`PREFIX_hook_module`</span> 
<span style=\"font-weight:bold;\">SET</span> 
  <span style=\"color: #333;\">position</span> <span >=</span> <span style=\"color: green;\">1</span> 
<span style=\"font-weight:bold;\">WHERE</span> 
  <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'displayPayment'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'cheque'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'displayPaymentReturn'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'cheque'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'displayHome'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'homeslider'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'actionAuthentication'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'statsdata'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'actionShopDataDuplication'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'homeslider'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'displayTop'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'blocklanguages'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'actionCustomerAccountAdd'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'statsdata'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'displayCustomerAccount'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'favoriteproducts'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'displayAdminStatsModules'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'statsvisits'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'displayAdminStatsGraphEngine'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'graphvisifire'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'displayAdminStatsGridEngine'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'gridhtml'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'displayLeftColumnProduct'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'blocksharefb'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'actionSearch'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'statssearch'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'actionCategoryAdd'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'blockcategories'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'actionCategoryUpdate'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'blockcategories'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'actionCategoryDelete'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'blockcategories'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'actionAdminMetaSave'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'blockcategories'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'displayMyAccountBlock'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'favoriteproducts'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'displayFooter'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'blockreinsurance'</span>
  )</pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">ALTER TABLE</span> 
  <span style=\"color: purple;\">`PREFIX_employee`</span> 
<span style=\"font-weight:bold;\">ADD</span> 
  <span style=\"color: purple;\">`bo_color`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">32</span>) <span style=\"font-weight:bold;\">default</span> <span style=\"font-weight:bold;\">NULL</span> 
<span style=\"font-weight:bold;\">AFTER</span> 
  <span style=\"color: purple;\">`stats_date_to`</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">INSERT</span> <span style=\"font-weight:bold;\">INTO</span> <span style=\"color: purple;\">`PREFIX_cms_category_lang`</span> 
<span style=\"font-weight:bold;\">VALUES</span> 
  (
    <span style=\"color: green;\">1</span><span >,</span> <span style=\"color: green;\">3</span><span >,</span> <span style=\"color: blue;\">'Inicio'</span><span >,</span> <span style=\"color: blue;\">''</span><span >,</span> <span style=\"color: blue;\">'home'</span><span >,</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
    <span style=\"font-weight:bold;\">NULL</span>
  )</pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">INSERT</span> <span style=\"font-weight:bold;\">INTO</span> <span style=\"color: purple;\">`PREFIX_cms_category`</span> 
<span style=\"font-weight:bold;\">VALUES</span> 
  (<span style=\"color: green;\">1</span><span >,</span> <span style=\"color: green;\">0</span><span >,</span> <span style=\"color: green;\">0</span><span >,</span> <span style=\"color: green;\">1</span><span >,</span> <span style=\"font-weight:bold;\">NOW()</span><span >,</span> <span style=\"font-weight:bold;\">NOW()</span><span >,</span> <span style=\"color: green;\">0</span>)</pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">UPDATE</span> 
  <span style=\"color: purple;\">`PREFIX_cms_category`</span> 
<span style=\"font-weight:bold;\">SET</span> 
  <span style=\"color: purple;\">`position`</span> <span >=</span> <span style=\"color: green;\">0</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">ALTER TABLE</span> 
  <span style=\"color: purple;\">`PREFIX_customer`</span> 
<span style=\"font-weight:bold;\">ADD</span> 
  <span style=\"color: purple;\">`note`</span> <span style=\"color: #333;\">text</span> 
<span style=\"font-weight:bold;\">AFTER</span> 
  <span style=\"color: purple;\">`secure_key`</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">ALTER TABLE</span> 
  <span style=\"color: purple;\">`PREFIX_contact`</span> 
<span style=\"font-weight:bold;\">ADD</span> 
  <span style=\"color: purple;\">`customer_service`</span> <span style=\"color: #333;\">tinyint</span>(<span style=\"color: green;\">1</span>) <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: green;\">0</span> 
<span style=\"font-weight:bold;\">AFTER</span> 
  <span style=\"color: purple;\">`email`</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">INSERT</span> <span style=\"font-weight:bold;\">INTO</span> <span style=\"color: purple;\">`PREFIX_specific_price`</span> (
  <span style=\"color: purple;\">`id_product`</span><span >,</span> <span style=\"color: purple;\">`id_shop`</span><span >,</span> <span style=\"color: purple;\">`id_currency`</span><span >,</span> 
  <span style=\"color: purple;\">`id_country`</span><span >,</span> <span style=\"color: purple;\">`id_group`</span><span >,</span> <span style=\"color: purple;\">`priority`</span><span >,</span> 
  <span style=\"color: purple;\">`price`</span><span >,</span> <span style=\"color: purple;\">`from_quantity`</span><span >,</span> <span style=\"color: purple;\">`reduction`</span><span >,</span> 
  <span style=\"color: purple;\">`reduction_type`</span><span >,</span> <span style=\"color: purple;\">`from`</span><span >,</span> <span style=\"color: purple;\">`to`</span>
) (
  <span style=\"font-weight:bold;\">SELECT</span> 
    <span style=\"color: #333;\">dq</span><span >.</span><span style=\"color: purple;\">`id_product`</span><span >,</span> 
    <span style=\"color: green;\">1</span><span >,</span> 
    <span style=\"color: green;\">1</span><span >,</span> 
    <span style=\"color: green;\">0</span><span >,</span> 
    <span style=\"color: green;\">1</span><span >,</span> 
    <span style=\"color: green;\">0</span><span >,</span> 
    <span style=\"color: green;\">0.00</span><span >,</span> 
    <span style=\"color: #333;\">dq</span><span >.</span><span style=\"color: purple;\">`quantity`</span><span >,</span> 
    <span style=\"font-weight:bold;\">IF</span>(
      <span style=\"color: #333;\">dq</span><span >.</span><span style=\"color: purple;\">`id_discount_type`</span> <span >=</span> <span style=\"color: green;\">2</span><span >,</span> <span style=\"color: #333;\">dq</span><span >.</span><span style=\"color: purple;\">`value`</span><span >,</span> 
      <span style=\"color: #333;\">dq</span><span >.</span><span style=\"color: purple;\">`value`</span> <span >/</span> <span style=\"color: green;\">100</span>
    )<span >,</span> 
    <span style=\"font-weight:bold;\">IF</span> (
      <span style=\"color: #333;\">dq</span><span >.</span><span style=\"color: purple;\">`id_discount_type`</span> <span >=</span> <span style=\"color: green;\">2</span><span >,</span> <span style=\"color: blue;\">'amount'</span><span >,</span> 
      <span style=\"color: blue;\">'percentage'</span>
    )<span >,</span> 
    <span style=\"color: blue;\">'0000-00-00 00:00:00'</span><span >,</span> 
    <span style=\"color: blue;\">'0000-00-00 00:00:00'</span> 
  <span style=\"font-weight:bold;\">FROM</span> 
    <span style=\"color: purple;\">`PREFIX_discount_quantity`</span> <span style=\"color: #333;\">dq</span> 
    <span style=\"font-weight:bold;\">INNER JOIN</span> <span style=\"color: purple;\">`PREFIX_product`</span> <span style=\"color: #333;\">p</span> <span style=\"font-weight:bold;\">ON</span> (<span style=\"color: #333;\">p</span><span >.</span><span style=\"color: purple;\">`id_product`</span> <span >=</span> <span style=\"color: #333;\">dq</span><span >.</span><span style=\"color: purple;\">`id_product`</span>)
)</pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">DROP</span> 
  <span style=\"font-weight:bold;\">TABLE</span> <span style=\"color: purple;\">`PREFIX_discount_quantity`</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">INSERT</span> <span style=\"font-weight:bold;\">INTO</span> <span style=\"color: purple;\">`PREFIX_specific_price`</span> (
  <span style=\"color: purple;\">`id_product`</span><span >,</span> <span style=\"color: purple;\">`id_shop`</span><span >,</span> <span style=\"color: purple;\">`id_currency`</span><span >,</span> 
  <span style=\"color: purple;\">`id_country`</span><span >,</span> <span style=\"color: purple;\">`id_group`</span><span >,</span> <span style=\"color: purple;\">`priority`</span><span >,</span> 
  <span style=\"color: purple;\">`price`</span><span >,</span> <span style=\"color: purple;\">`from_quantity`</span><span >,</span> <span style=\"color: purple;\">`reduction`</span><span >,</span> 
  <span style=\"color: purple;\">`reduction_type`</span><span >,</span> <span style=\"color: purple;\">`from`</span><span >,</span> <span style=\"color: purple;\">`to`</span>
) (
  <span style=\"font-weight:bold;\">SELECT</span> 
    <span style=\"color: #333;\">p</span><span >.</span><span style=\"color: purple;\">`id_product`</span><span >,</span> 
    <span style=\"color: green;\">1</span><span >,</span> 
    <span style=\"color: green;\">0</span><span >,</span> 
    <span style=\"color: green;\">0</span><span >,</span> 
    <span style=\"color: green;\">0</span><span >,</span> 
    <span style=\"color: green;\">0</span><span >,</span> 
    <span style=\"color: green;\">0.00</span><span >,</span> 
    <span style=\"color: green;\">1</span><span >,</span> 
    <span style=\"font-weight:bold;\">IF</span>(
      <span style=\"color: #333;\">p</span><span >.</span><span style=\"color: purple;\">`reduction_price`</span> <span >&gt;</span> <span style=\"color: green;\">0</span><span >,</span> <span style=\"color: #333;\">p</span><span >.</span><span style=\"color: purple;\">`reduction_price`</span><span >,</span> 
      <span style=\"color: #333;\">p</span><span >.</span><span style=\"color: purple;\">`reduction_percent`</span> <span >/</span> <span style=\"color: green;\">100</span>
    )<span >,</span> 
    <span style=\"font-weight:bold;\">IF</span>(
      <span style=\"color: #333;\">p</span><span >.</span><span style=\"color: purple;\">`reduction_price`</span> <span >&gt;</span> <span style=\"color: green;\">0</span><span >,</span> <span style=\"color: blue;\">'amount'</span><span >,</span> 
      <span style=\"color: blue;\">'percentage'</span>
    )<span >,</span> 
    <span style=\"font-weight:bold;\">IF</span> (
      <span style=\"color: #333;\">p</span><span >.</span><span style=\"color: purple;\">`reduction_from`</span> <span >=</span> <span style=\"color: #333;\">p</span><span >.</span><span style=\"color: purple;\">`reduction_to`</span><span >,</span> 
      <span style=\"color: blue;\">'0000-00-00 00:00:00'</span><span >,</span> <span style=\"color: #333;\">p</span><span >.</span><span style=\"color: purple;\">`reduction_from`</span>
    )<span >,</span> 
    <span style=\"font-weight:bold;\">IF</span> (
      <span style=\"color: #333;\">p</span><span >.</span><span style=\"color: purple;\">`reduction_from`</span> <span >=</span> <span style=\"color: #333;\">p</span><span >.</span><span style=\"color: purple;\">`reduction_to`</span><span >,</span> 
      <span style=\"color: blue;\">'0000-00-00 00:00:00'</span><span >,</span> <span style=\"color: #333;\">p</span><span >.</span><span style=\"color: purple;\">`reduction_to`</span>
    ) 
  <span style=\"font-weight:bold;\">FROM</span> 
    <span style=\"color: purple;\">`PREFIX_product`</span> <span style=\"color: #333;\">p</span> 
  <span style=\"font-weight:bold;\">WHERE</span> 
    <span style=\"color: #333;\">p</span><span >.</span><span style=\"color: purple;\">`reduction_price`</span> 
    <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">p</span><span >.</span><span style=\"color: purple;\">`reduction_percent`</span>
)</pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">ALTER TABLE</span> 
  <span style=\"color: purple;\">`PREFIX_product`</span> 
<span style=\"font-weight:bold;\">DROP</span> 
  <span style=\"color: purple;\">`reduction_price`</span><span >,</span> 
<span style=\"font-weight:bold;\">DROP</span> 
  <span style=\"color: purple;\">`reduction_percent`</span><span >,</span> 
<span style=\"font-weight:bold;\">DROP</span> 
  <span style=\"color: purple;\">`reduction_from`</span><span >,</span> 
<span style=\"font-weight:bold;\">DROP</span> 
  <span style=\"color: purple;\">`reduction_to`</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">INSERT</span> <span style=\"font-weight:bold;\">INTO</span> <span style=\"color: purple;\">`PREFIX_configuration`</span> (
  <span style=\"color: purple;\">`name`</span><span >,</span> <span style=\"color: purple;\">`value`</span><span >,</span> <span style=\"color: purple;\">`date_add`</span><span >,</span> <span style=\"color: purple;\">`date_upd`</span>
) 
<span style=\"font-weight:bold;\">VALUES</span> 
  (
    <span style=\"color: blue;\">'PS_SPECIFIC_PRICE_PRIORITIES'</span><span >,</span> 
    <span style=\"color: blue;\">'id_shop;id_currency;id_country;id_group'</span><span >,</span> 
    <span style=\"font-weight:bold;\">NOW()</span><span >,</span> <span style=\"font-weight:bold;\">NOW()</span>
  )<span >,</span> 
  (<span style=\"color: blue;\">'PS_TAX_DISPLAY'</span><span >,</span> <span style=\"color: green;\">0</span><span >,</span> <span style=\"font-weight:bold;\">NOW()</span><span >,</span> <span style=\"font-weight:bold;\">NOW()</span>)<span >,</span> 
  (
    <span style=\"color: blue;\">'PS_SMARTY_FORCE_COMPILE'</span><span >,</span> <span style=\"color: green;\">1</span><span >,</span> <span style=\"font-weight:bold;\">NOW()</span><span >,</span> 
    <span style=\"font-weight:bold;\">NOW()</span>
  )<span >,</span> 
  (
    <span style=\"color: blue;\">'PS_DISTANCE_UNIT'</span><span >,</span> <span style=\"color: blue;\">'km'</span><span >,</span> <span style=\"font-weight:bold;\">NOW()</span><span >,</span> <span style=\"font-weight:bold;\">NOW()</span>
  )<span >,</span> 
  (
    <span style=\"color: blue;\">'PS_STORES_DISPLAY_CMS'</span><span >,</span> <span style=\"color: green;\">0</span><span >,</span> <span style=\"font-weight:bold;\">NOW()</span><span >,</span> 
    <span style=\"font-weight:bold;\">NOW()</span>
  )<span >,</span> 
  (
    <span style=\"color: blue;\">'PS_STORES_DISPLAY_FOOTER'</span><span >,</span> <span style=\"color: green;\">0</span><span >,</span> <span style=\"font-weight:bold;\">NOW()</span><span >,</span> 
    <span style=\"font-weight:bold;\">NOW()</span>
  )<span >,</span> 
  (
    <span style=\"color: blue;\">'PS_STORES_SIMPLIFIED'</span><span >,</span> <span style=\"color: green;\">0</span><span >,</span> <span style=\"font-weight:bold;\">NOW()</span><span >,</span> 
    <span style=\"font-weight:bold;\">NOW()</span>
  )<span >,</span> 
  (
    <span style=\"color: blue;\">'PS_STATSDATA_CUSTOMER_PAGESVIEWS'</span><span >,</span> 
    <span style=\"color: green;\">1</span><span >,</span> <span style=\"font-weight:bold;\">NOW()</span><span >,</span> <span style=\"font-weight:bold;\">NOW()</span>
  )<span >,</span> 
  (
    <span style=\"color: blue;\">'PS_STATSDATA_PAGESVIEWS'</span><span >,</span> <span style=\"color: green;\">1</span><span >,</span> <span style=\"font-weight:bold;\">NOW()</span><span >,</span> 
    <span style=\"font-weight:bold;\">NOW()</span>
  )<span >,</span> 
  (
    <span style=\"color: blue;\">'PS_STATSDATA_PLUGINS'</span><span >,</span> <span style=\"color: green;\">1</span><span >,</span> <span style=\"font-weight:bold;\">NOW()</span><span >,</span> 
    <span style=\"font-weight:bold;\">NOW()</span>
  )</pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">INSERT</span> <span style=\"font-weight:bold;\">INTO</span> <span style=\"color: purple;\">`PREFIX_configuration`</span> (
  <span style=\"color: purple;\">`name`</span><span >,</span> <span style=\"color: purple;\">`value`</span><span >,</span> <span style=\"color: purple;\">`date_add`</span><span >,</span> <span style=\"color: purple;\">`date_upd`</span>
) 
<span style=\"font-weight:bold;\">VALUES</span> 
  (
    <span style=\"color: blue;\">'PS_CONDITIONS_CMS_ID'</span><span >,</span> 
    <span style=\"font-weight:bold;\">IFNULL</span>(
      (
        <span style=\"font-weight:bold;\">SELECT</span> 
          <span style=\"color: purple;\">`id_cms`</span> 
        <span style=\"font-weight:bold;\">FROM</span> 
          <span style=\"color: purple;\">`PREFIX_cms`</span> 
        <span style=\"font-weight:bold;\">WHERE</span> 
          <span style=\"color: purple;\">`id_cms`</span> <span >=</span> <span style=\"color: green;\">3</span>
      )<span >,</span> 
      <span style=\"color: green;\">0</span>
    )<span >,</span> 
    <span style=\"font-weight:bold;\">NOW()</span><span >,</span> 
    <span style=\"font-weight:bold;\">NOW()</span>
  )</pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">CREATE</span> <span style=\"font-weight:bold;\">TEMPORARY</span> <span style=\"font-weight:bold;\">TABLE</span> <span style=\"color: purple;\">`PREFIX_configuration_tmp`</span> (<span style=\"color: purple;\">`value`</span> <span style=\"color: #333;\">text</span>)</pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">SET</span> 
  <span style=\"color: orange;\">@defaultOOS</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">value</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_configuration`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'PS_ORDER_OUT_OF_STOCK'</span>
  )</pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">UPDATE</span> 
  <span style=\"color: purple;\">`PREFIX_product`</span> <span style=\"color: #333;\">p</span> 
<span style=\"font-weight:bold;\">SET</span> 
  <span style=\"color: purple;\">`cache_default_attribute`</span> <span >=</span> <span style=\"color: green;\">0</span> 
<span style=\"font-weight:bold;\">WHERE</span> 
  <span style=\"color: purple;\">`id_product`</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">IN</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: purple;\">`id_product`</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_product_attribute`</span>
  )</pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">INSERT</span> <span style=\"font-weight:bold;\">INTO</span> <span style=\"color: purple;\">`PREFIX_hook`</span> (
  <span style=\"color: purple;\">`name`</span><span >,</span> <span style=\"color: purple;\">`title`</span><span >,</span> <span style=\"color: purple;\">`description`</span><span >,</span> <span style=\"color: purple;\">`position`</span>
) 
<span style=\"font-weight:bold;\">VALUES</span> 
  (
    <span style=\"color: blue;\">'processCarrier'</span><span >,</span> <span style=\"color: blue;\">'Carrier Process'</span><span >,</span> 
    <span style=\"font-weight:bold;\">NULL</span><span >,</span> <span style=\"color: green;\">0</span>
  )</pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">INSERT</span> <span style=\"font-weight:bold;\">INTO</span> <span style=\"color: purple;\">`PREFIX_stock_mvt_reason_lang`</span> (
  <span style=\"color: purple;\">`id_stock_mvt_reason`</span><span >,</span> <span style=\"color: purple;\">`id_lang`</span><span >,</span> 
  <span style=\"color: purple;\">`name`</span>
) 
<span style=\"font-weight:bold;\">VALUES</span> 
  (<span style=\"color: green;\">1</span><span >,</span> <span style=\"color: green;\">1</span><span >,</span> <span style=\"color: blue;\">'Order'</span>)<span >,</span> 
  (<span style=\"color: green;\">1</span><span >,</span> <span style=\"color: green;\">2</span><span >,</span> <span style=\"color: blue;\">'Commande'</span>)<span >,</span> 
  (<span style=\"color: green;\">2</span><span >,</span> <span style=\"color: green;\">1</span><span >,</span> <span style=\"color: blue;\">'Missing Stock Movement'</span>)<span >,</span> 
  (
    <span style=\"color: green;\">2</span><span >,</span> <span style=\"color: green;\">2</span><span >,</span> <span style=\"color: blue;\">'Mouvement de stock manquant'</span>
  )<span >,</span> 
  (<span style=\"color: green;\">3</span><span >,</span> <span style=\"color: green;\">1</span><span >,</span> <span style=\"color: blue;\">'Restocking'</span>)<span >,</span> 
  (<span style=\"color: green;\">3</span><span >,</span> <span style=\"color: green;\">2</span><span >,</span> <span style=\"color: blue;\">'R&Atilde;&copy;assort'</span>)</pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">INSERT</span> <span style=\"font-weight:bold;\">INTO</span> <span style=\"color: purple;\">`PREFIX_meta_lang`</span> (
  <span style=\"color: purple;\">`id_lang`</span><span >,</span> <span style=\"color: purple;\">`id_meta`</span><span >,</span> <span style=\"color: purple;\">`title`</span><span >,</span> <span style=\"color: purple;\">`url_rewrite`</span>
) 
<span style=\"font-weight:bold;\">VALUES</span> 
  (
    <span style=\"color: green;\">1</span><span >,</span> 
    (
      <span style=\"font-weight:bold;\">SELECT</span> 
        <span style=\"color: purple;\">`id_meta`</span> 
      <span style=\"font-weight:bold;\">FROM</span> 
        <span style=\"color: purple;\">`PREFIX_meta`</span> 
      <span style=\"font-weight:bold;\">WHERE</span> 
        <span style=\"color: purple;\">`page`</span> <span >=</span> <span style=\"color: blue;\">'authentication'</span>
    )<span >,</span> 
    <span style=\"color: blue;\">'Authentication'</span><span >,</span> 
    <span style=\"color: blue;\">'authentication'</span>
  )<span >,</span> 
  (
    <span style=\"color: green;\">2</span><span >,</span> 
    (
      <span style=\"font-weight:bold;\">SELECT</span> 
        <span style=\"color: purple;\">`id_meta`</span> 
      <span style=\"font-weight:bold;\">FROM</span> 
        <span style=\"color: purple;\">`PREFIX_meta`</span> 
      <span style=\"font-weight:bold;\">WHERE</span> 
        <span style=\"color: purple;\">`page`</span> <span >=</span> <span style=\"color: blue;\">'authentication'</span>
    )<span >,</span> 
    <span style=\"color: blue;\">'Authentification'</span><span >,</span> 
    <span style=\"color: blue;\">'authentification'</span>
  )<span >,</span> 
  (
    <span style=\"color: green;\">3</span><span >,</span> 
    (
      <span style=\"font-weight:bold;\">SELECT</span> 
        <span style=\"color: purple;\">`id_meta`</span> 
      <span style=\"font-weight:bold;\">FROM</span> 
        <span style=\"color: purple;\">`PREFIX_meta`</span> 
      <span style=\"font-weight:bold;\">WHERE</span> 
        <span style=\"color: purple;\">`page`</span> <span >=</span> <span style=\"color: blue;\">'authentication'</span>
    )<span >,</span> 
    <span style=\"color: blue;\">'Autenticaci&Atilde;&sup3;n'</span><span >,</span> 
    <span style=\"color: blue;\">'autenticacion'</span>
  )</pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">LOCK</span> <span style=\"font-weight:bold;\">TABLES</span> <span style=\"color: purple;\">`admin_assert`</span> <span style=\"font-weight:bold;\">WRITE</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">UNLOCK</span> <span style=\"font-weight:bold;\">TABLES</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">DROP</span> 
  <span style=\"font-weight:bold;\">TABLE</span> <span style=\"font-weight:bold;\">IF</span> <span style=\"font-weight:bold;\">EXISTS</span> <span style=\"color: purple;\">`admin_role`</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">SELECT</span> 
  <span >*</span> 
<span style=\"font-weight:bold;\">FROM</span> 
  <span style=\"color: #aaa;\">-- This is another comment</span>
  <span style=\"color: #333;\">MyTable</span> <span style=\"color: #aaa;\"># One final comment</span>
  
  <span style=\"color: #aaa;\">/* This is a block comment 
  */</span>
<span style=\"font-weight:bold;\">WHERE</span> 
  <span style=\"color: green;\">1</span> <span >=</span> <span style=\"color: green;\">2</span><span >;</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">SELECT</span> 
  <span style=\"color: #aaa;\">-- This is a test</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">SELECT</span> 
  <span style=\"color: #333;\">Test</span> 
<span style=\"font-weight:bold;\">FROM</span> 
  <span style=\"color: #333;\">Test</span> 
<span style=\"font-weight:bold;\">WHERE</span> 
  (<span style=\"color: #333;\">MyColumn</span> <span >=</span> <span style=\"color: green;\">1</span>)
<span style=\"background-color: red;\">)</span>
<span style=\"font-weight:bold;\">AND</span> (
  (
    (<span style=\"color: #333;\">SomeOtherColumn</span> <span >=</span> <span style=\"color: green;\">2</span>)<span >;</span> 
<span style=\"background-color: red;\">WARNING: unclosed parentheses or section</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">SELECT</span> 
  <span >*</span> 
<span style=\"font-weight:bold;\">LIMIT</span> 
  <span style=\"color: green;\">1</span><span >;</span> 
<span style=\"font-weight:bold;\">SELECT</span> 
  <span style=\"color: #333;\">a</span><span >,</span> 
  <span style=\"color: #333;\">b</span><span >,</span> 
  <span style=\"color: #333;\">c</span><span >,</span> 
  <span style=\"color: #333;\">d</span> 
<span style=\"font-weight:bold;\">FROM</span> 
  <span style=\"color: #333;\">e</span> 
<span style=\"font-weight:bold;\">LIMIT</span> 
  <span style=\"color: green;\">1</span><span >,</span> <span style=\"color: green;\">2</span><span >;</span> 
<span style=\"font-weight:bold;\">SELECT</span> 
  <span style=\"color: green;\">1</span><span >,</span> 
  <span style=\"color: green;\">2</span><span >,</span> 
  <span style=\"color: green;\">3</span> 
<span style=\"font-weight:bold;\">WHERE</span> 
  <span style=\"color: #333;\">a</span> <span style=\"font-weight:bold;\">in</span> (<span style=\"color: green;\">1</span><span >,</span> <span style=\"color: green;\">2</span><span >,</span> <span style=\"color: green;\">3</span><span >,</span> <span style=\"color: green;\">4</span><span >,</span> <span style=\"color: green;\">5</span>) 
  <span style=\"font-weight:bold;\">and</span> <span style=\"color: #333;\">b</span> <span >=</span> <span style=\"color: green;\">5</span><span >;</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">SELECT</span> 
  <span style=\"color: #333;\">count</span> <span >-</span> <span style=\"color: green;\">50</span> 
<span style=\"font-weight:bold;\">WHERE</span> 
  <span style=\"color: #333;\">a</span> <span >-</span> <span style=\"color: green;\">50</span> <span >=</span> <span style=\"color: #333;\">b</span> 
<span style=\"font-weight:bold;\">WHERE</span> 
  <span style=\"color: green;\">1</span> 
  <span style=\"font-weight:bold;\">and</span> <span >-</span><span style=\"color: green;\">50</span> 
<span style=\"font-weight:bold;\">WHERE</span> 
  <span >-</span><span style=\"color: green;\">50</span> <span >=</span> <span style=\"color: #333;\">a</span> 
<span style=\"font-weight:bold;\">WHERE</span> 
  <span style=\"color: #333;\">a</span> <span >=</span> <span >-</span><span style=\"color: green;\">50</span> 
<span style=\"font-weight:bold;\">WHERE</span> 
  <span style=\"color: green;\">1</span> 
  <span style=\"color: #aaa;\">/*test*/</span>
  <span >-</span><span style=\"color: green;\">50</span> 
<span style=\"font-weight:bold;\">WHERE</span> 
  <span style=\"color: green;\">1</span> 
  <span style=\"font-weight:bold;\">and</span> <span >-</span><span style=\"color: green;\">50</span><span >;</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">SELECT</span> 
  <span style=\"color: #333;\">@</span> 
  <span style=\"font-weight:bold;\">and</span> <span style=\"color: #333;\">b</span><span >;</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">SELECT</span> 
  <span style=\"color: orange;\">@&quot;weird variable name&quot;</span><span >;</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">SELECT</span> 
  <span style=\"color: blue;\">&quot;no closing quote
</span></pre>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/jdorn/sql-formatter/tests/format-highlight.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">SELECT</span> 
  <span style=\"color: #333;\">customer_id</span><span >,</span> 
  <span style=\"color: #333;\">customer_name</span><span >,</span> 
  <span style=\"font-weight:bold;\">COUNT</span>(<span style=\"color: #333;\">order_id</span>) <span style=\"font-weight:bold;\">as</span> <span style=\"color: #333;\">total</span> 
<span style=\"font-weight:bold;\">FROM</span> 
  <span style=\"color: #333;\">customers</span> 
  <span style=\"font-weight:bold;\">INNER JOIN</span> <span style=\"color: #333;\">orders</span> <span style=\"font-weight:bold;\">ON</span> <span style=\"color: #333;\">customers</span><span >.</span><span style=\"color: #333;\">customer_id</span> <span >=</span> <span style=\"color: #333;\">orders</span><span >.</span><span style=\"color: #333;\">customer_id</span> 
<span style=\"font-weight:bold;\">GROUP BY</span> 
  <span style=\"color: #333;\">customer_id</span><span >,</span> 
  <span style=\"color: #333;\">customer_name</span> 
<span style=\"font-weight:bold;\">HAVING</span> 
  <span style=\"font-weight:bold;\">COUNT</span>(<span style=\"color: #333;\">order_id</span>) <span >&gt;</span> <span style=\"color: green;\">5</span> 
<span style=\"font-weight:bold;\">ORDER BY</span> 
  <span style=\"font-weight:bold;\">COUNT</span>(<span style=\"color: #333;\">order_id</span>) <span style=\"font-weight:bold;\">DESC</span><span >;</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">UPDATE</span> 
  <span style=\"color: #333;\">customers</span> 
<span style=\"font-weight:bold;\">SET</span> 
  <span style=\"color: #333;\">totalorders</span> <span >=</span> <span style=\"color: #333;\">ordersummary</span><span >.</span><span style=\"color: #333;\">total</span> 
<span style=\"font-weight:bold;\">FROM</span> 
  (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">customer_id</span><span >,</span> 
      <span style=\"font-weight:bold;\">count</span>(<span style=\"color: #333;\">order_id</span>) <span style=\"font-weight:bold;\">As</span> <span style=\"color: #333;\">total</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: #333;\">orders</span> 
    <span style=\"font-weight:bold;\">GROUP BY</span> 
      <span style=\"color: #333;\">customer_id</span>
  ) <span style=\"font-weight:bold;\">As</span> <span style=\"color: #333;\">ordersummary</span> 
<span style=\"font-weight:bold;\">WHERE</span> 
  <span style=\"color: #333;\">customers</span><span >.</span><span style=\"color: #333;\">customer_id</span> <span >=</span> <span style=\"color: #333;\">ordersummary</span><span >.</span><span style=\"color: #333;\">customer_id</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">SELECT</span> 
  <span >*</span> 
<span style=\"font-weight:bold;\">FROM</span> 
  <span style=\"color: #333;\">sometable</span> 
<span style=\"font-weight:bold;\">UNION ALL</span> 
<span style=\"font-weight:bold;\">SELECT</span> 
  <span >*</span> 
<span style=\"font-weight:bold;\">FROM</span> 
  <span style=\"color: #333;\">someothertable</span><span >;</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">SET</span> 
  <span style=\"font-weight:bold;\">NAMES</span> <span style=\"color: blue;\">'utf8'</span><span >;</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">CREATE</span> <span style=\"font-weight:bold;\">TABLE</span> <span style=\"color: purple;\">`PREFIX_address`</span> (
  <span style=\"color: purple;\">`id_address`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">auto_increment</span><span >,</span> 
  <span style=\"color: purple;\">`id_country`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`id_state`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">default</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`id_customer`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">default</span> <span style=\"color: blue;\">'0'</span><span >,</span> 
  <span style=\"color: purple;\">`id_manufacturer`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">default</span> <span style=\"color: blue;\">'0'</span><span >,</span> 
  <span style=\"color: purple;\">`id_supplier`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">default</span> <span style=\"color: blue;\">'0'</span><span >,</span> 
  <span style=\"color: purple;\">`id_warehouse`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">default</span> <span style=\"color: blue;\">'0'</span><span >,</span> 
  <span style=\"color: purple;\">`alias`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">32</span>) <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`company`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">64</span>) <span style=\"font-weight:bold;\">default</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`lastname`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">32</span>) <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`firstname`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">32</span>) <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`address1`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">128</span>) <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`address2`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">128</span>) <span style=\"font-weight:bold;\">default</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`postcode`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">12</span>) <span style=\"font-weight:bold;\">default</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`city`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">64</span>) <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`other`</span> <span style=\"color: #333;\">text</span><span >,</span> 
  <span style=\"color: purple;\">`phone`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">16</span>) <span style=\"font-weight:bold;\">default</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`phone_mobile`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">16</span>) <span style=\"font-weight:bold;\">default</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`vat_number`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">32</span>) <span style=\"font-weight:bold;\">default</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`dni`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">16</span>) <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`date_add`</span> <span style=\"color: #333;\">datetime</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`date_upd`</span> <span style=\"color: #333;\">datetime</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`active`</span> <span style=\"color: #333;\">tinyint</span>(<span style=\"color: green;\">1</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">default</span> <span style=\"color: blue;\">'1'</span><span >,</span> 
  <span style=\"color: purple;\">`deleted`</span> <span style=\"color: #333;\">tinyint</span>(<span style=\"color: green;\">1</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">default</span> <span style=\"color: blue;\">'0'</span><span >,</span> 
  <span style=\"font-weight:bold;\">PRIMARY</span> <span style=\"font-weight:bold;\">KEY</span> (<span style=\"color: purple;\">`id_address`</span>)<span >,</span> 
  <span style=\"font-weight:bold;\">KEY</span> <span style=\"color: purple;\">`address_customer`</span> (<span style=\"color: purple;\">`id_customer`</span>)<span >,</span> 
  <span style=\"font-weight:bold;\">KEY</span> <span style=\"color: purple;\">`id_country`</span> (<span style=\"color: purple;\">`id_country`</span>)<span >,</span> 
  <span style=\"font-weight:bold;\">KEY</span> <span style=\"color: purple;\">`id_state`</span> (<span style=\"color: purple;\">`id_state`</span>)<span >,</span> 
  <span style=\"font-weight:bold;\">KEY</span> <span style=\"color: purple;\">`id_manufacturer`</span> (<span style=\"color: purple;\">`id_manufacturer`</span>)<span >,</span> 
  <span style=\"font-weight:bold;\">KEY</span> <span style=\"color: purple;\">`id_supplier`</span> (<span style=\"color: purple;\">`id_supplier`</span>)<span >,</span> 
  <span style=\"font-weight:bold;\">KEY</span> <span style=\"color: purple;\">`id_warehouse`</span> (<span style=\"color: purple;\">`id_warehouse`</span>)
) <span style=\"font-weight:bold;\">ENGINE</span> <span >=</span> <span style=\"font-weight:bold;\">ENGINE_TYPE</span> <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"font-weight:bold;\">CHARSET</span> <span >=</span> <span style=\"color: #333;\">utf8</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">CREATE</span> <span style=\"font-weight:bold;\">TABLE</span> <span style=\"color: purple;\">`PREFIX_alias`</span> (
  <span style=\"color: purple;\">`id_alias`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">auto_increment</span><span >,</span> 
  <span style=\"color: purple;\">`alias`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">255</span>) <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`search`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">255</span>) <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`active`</span> <span style=\"color: #333;\">tinyint</span>(<span style=\"color: green;\">1</span>) <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">default</span> <span style=\"color: blue;\">'1'</span><span >,</span> 
  <span style=\"font-weight:bold;\">PRIMARY</span> <span style=\"font-weight:bold;\">KEY</span> (<span style=\"color: purple;\">`id_alias`</span>)<span >,</span> 
  <span style=\"font-weight:bold;\">UNIQUE</span> <span style=\"font-weight:bold;\">KEY</span> <span style=\"color: purple;\">`alias`</span> (<span style=\"color: purple;\">`alias`</span>)
) <span style=\"font-weight:bold;\">ENGINE</span> <span >=</span> <span style=\"font-weight:bold;\">ENGINE_TYPE</span> <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"font-weight:bold;\">CHARSET</span> <span >=</span> <span style=\"color: #333;\">utf8</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">CREATE</span> <span style=\"font-weight:bold;\">TABLE</span> <span style=\"color: purple;\">`PREFIX_carrier`</span> (
  <span style=\"color: purple;\">`id_carrier`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">AUTO_INCREMENT</span><span >,</span> 
  <span style=\"color: purple;\">`id_reference`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`id_tax_rules_group`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: blue;\">'0'</span><span >,</span> 
  <span style=\"color: purple;\">`name`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">64</span>) <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`url`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">255</span>) <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`active`</span> <span style=\"color: #333;\">tinyint</span>(<span style=\"color: green;\">1</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: blue;\">'0'</span><span >,</span> 
  <span style=\"color: purple;\">`deleted`</span> <span style=\"color: #333;\">tinyint</span>(<span style=\"color: green;\">1</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: blue;\">'0'</span><span >,</span> 
  <span style=\"color: purple;\">`shipping_handling`</span> <span style=\"color: #333;\">tinyint</span>(<span style=\"color: green;\">1</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: blue;\">'1'</span><span >,</span> 
  <span style=\"color: purple;\">`range_behavior`</span> <span style=\"color: #333;\">tinyint</span>(<span style=\"color: green;\">1</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: blue;\">'0'</span><span >,</span> 
  <span style=\"color: purple;\">`is_module`</span> <span style=\"color: #333;\">tinyint</span>(<span style=\"color: green;\">1</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: blue;\">'0'</span><span >,</span> 
  <span style=\"color: purple;\">`is_free`</span> <span style=\"color: #333;\">tinyint</span>(<span style=\"color: green;\">1</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: blue;\">'0'</span><span >,</span> 
  <span style=\"color: purple;\">`shipping_external`</span> <span style=\"color: #333;\">tinyint</span>(<span style=\"color: green;\">1</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: blue;\">'0'</span><span >,</span> 
  <span style=\"color: purple;\">`need_range`</span> <span style=\"color: #333;\">tinyint</span>(<span style=\"color: green;\">1</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: blue;\">'0'</span><span >,</span> 
  <span style=\"color: purple;\">`external_module_name`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">64</span>) <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`shipping_method`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">2</span>) <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: blue;\">'0'</span><span >,</span> 
  <span style=\"color: purple;\">`position`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">default</span> <span style=\"color: blue;\">'0'</span><span >,</span> 
  <span style=\"color: purple;\">`max_width`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: green;\">0</span><span >,</span> 
  <span style=\"color: purple;\">`max_height`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: green;\">0</span><span >,</span> 
  <span style=\"color: purple;\">`max_depth`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: green;\">0</span><span >,</span> 
  <span style=\"color: purple;\">`max_weight`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: green;\">0</span><span >,</span> 
  <span style=\"color: purple;\">`grade`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: green;\">0</span><span >,</span> 
  <span style=\"font-weight:bold;\">PRIMARY</span> <span style=\"font-weight:bold;\">KEY</span> (<span style=\"color: purple;\">`id_carrier`</span>)<span >,</span> 
  <span style=\"font-weight:bold;\">KEY</span> <span style=\"color: purple;\">`deleted`</span> (<span style=\"color: purple;\">`deleted`</span><span >,</span> <span style=\"color: purple;\">`active`</span>)<span >,</span> 
  <span style=\"font-weight:bold;\">KEY</span> <span style=\"color: purple;\">`id_tax_rules_group`</span> (<span style=\"color: purple;\">`id_tax_rules_group`</span>)
) <span style=\"font-weight:bold;\">ENGINE</span> <span >=</span> <span style=\"font-weight:bold;\">ENGINE_TYPE</span> <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"font-weight:bold;\">CHARSET</span> <span >=</span> <span style=\"color: #333;\">utf8</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">CREATE</span> <span style=\"font-weight:bold;\">TABLE</span> <span style=\"font-weight:bold;\">IF</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">EXISTS</span> <span style=\"color: purple;\">`PREFIX_specific_price_rule`</span> (
  <span style=\"color: purple;\">`id_specific_price_rule`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">AUTO_INCREMENT</span><span >,</span> 
  <span style=\"color: purple;\">`name`</span> <span style=\"color: #333;\">VARCHAR</span>(<span style=\"color: green;\">255</span>) <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`id_shop`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">11</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: blue;\">'1'</span><span >,</span> 
  <span style=\"color: purple;\">`id_currency`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`id_country`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`id_group`</span> <span style=\"color: #333;\">int</span>(<span style=\"color: green;\">10</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`from_quantity`</span> <span style=\"color: #333;\">mediumint</span>(<span style=\"color: green;\">8</span>) <span style=\"font-weight:bold;\">unsigned</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`price`</span> <span style=\"color: #333;\">DECIMAL</span>(<span style=\"color: green;\">20</span><span >,</span> <span style=\"color: green;\">6</span>)<span >,</span> 
  <span style=\"color: purple;\">`reduction`</span> <span style=\"color: #333;\">decimal</span>(<span style=\"color: green;\">20</span><span >,</span> <span style=\"color: green;\">6</span>) <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`reduction_type`</span> <span style=\"color: #333;\">enum</span>(<span style=\"color: blue;\">'amount'</span><span >,</span> <span style=\"color: blue;\">'percentage'</span>) <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`from`</span> <span style=\"color: #333;\">datetime</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"color: purple;\">`to`</span> <span style=\"color: #333;\">datetime</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
  <span style=\"font-weight:bold;\">PRIMARY</span> <span style=\"font-weight:bold;\">KEY</span> (<span style=\"color: purple;\">`id_specific_price_rule`</span>)<span >,</span> 
  <span style=\"font-weight:bold;\">KEY</span> <span style=\"color: purple;\">`id_product`</span> (
    <span style=\"color: purple;\">`id_shop`</span><span >,</span> <span style=\"color: purple;\">`id_currency`</span><span >,</span> <span style=\"color: purple;\">`id_country`</span><span >,</span> 
    <span style=\"color: purple;\">`id_group`</span><span >,</span> <span style=\"color: purple;\">`from_quantity`</span><span >,</span> <span style=\"color: purple;\">`from`</span><span >,</span> 
    <span style=\"color: purple;\">`to`</span>
  )
) <span style=\"font-weight:bold;\">ENGINE</span> <span >=</span> <span style=\"font-weight:bold;\">ENGINE_TYPE</span> <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"font-weight:bold;\">CHARSET</span> <span >=</span> <span style=\"color: #333;\">utf8</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">UPDATE</span> 
  <span style=\"color: purple;\">`PREFIX_configuration`</span> 
<span style=\"font-weight:bold;\">SET</span> 
  <span style=\"color: #333;\">value</span> <span >=</span> <span style=\"color: blue;\">'6'</span> 
<span style=\"font-weight:bold;\">WHERE</span> 
  <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'PS_SEARCH_WEIGHT_PNAME'</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">UPDATE</span> 
  <span style=\"color: purple;\">`PREFIX_hook_module`</span> 
<span style=\"font-weight:bold;\">SET</span> 
  <span style=\"color: #333;\">position</span> <span >=</span> <span style=\"color: green;\">1</span> 
<span style=\"font-weight:bold;\">WHERE</span> 
  <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'displayPayment'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'cheque'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'displayPaymentReturn'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'cheque'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'displayHome'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'homeslider'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'actionAuthentication'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'statsdata'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'actionShopDataDuplication'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'homeslider'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'displayTop'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'blocklanguages'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'actionCustomerAccountAdd'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'statsdata'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'displayCustomerAccount'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'favoriteproducts'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'displayAdminStatsModules'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'statsvisits'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'displayAdminStatsGraphEngine'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'graphvisifire'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'displayAdminStatsGridEngine'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'gridhtml'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'displayLeftColumnProduct'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'blocksharefb'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'actionSearch'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'statssearch'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'actionCategoryAdd'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'blockcategories'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'actionCategoryUpdate'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'blockcategories'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'actionCategoryDelete'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'blockcategories'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'actionAdminMetaSave'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'blockcategories'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'displayMyAccountBlock'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'favoriteproducts'</span>
  ) 
  <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">id_hook</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_hook</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_hook`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'displayFooter'</span>
  ) 
  <span style=\"font-weight:bold;\">AND</span> <span style=\"color: #333;\">id_module</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">id_module</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_module`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'blockreinsurance'</span>
  )</pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">ALTER TABLE</span> 
  <span style=\"color: purple;\">`PREFIX_employee`</span> 
<span style=\"font-weight:bold;\">ADD</span> 
  <span style=\"color: purple;\">`bo_color`</span> <span style=\"color: #333;\">varchar</span>(<span style=\"color: green;\">32</span>) <span style=\"font-weight:bold;\">default</span> <span style=\"font-weight:bold;\">NULL</span> 
<span style=\"font-weight:bold;\">AFTER</span> 
  <span style=\"color: purple;\">`stats_date_to`</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">INSERT</span> <span style=\"font-weight:bold;\">INTO</span> <span style=\"color: purple;\">`PREFIX_cms_category_lang`</span> 
<span style=\"font-weight:bold;\">VALUES</span> 
  (
    <span style=\"color: green;\">1</span><span >,</span> <span style=\"color: green;\">3</span><span >,</span> <span style=\"color: blue;\">'Inicio'</span><span >,</span> <span style=\"color: blue;\">''</span><span >,</span> <span style=\"color: blue;\">'home'</span><span >,</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> <span style=\"font-weight:bold;\">NULL</span><span >,</span> 
    <span style=\"font-weight:bold;\">NULL</span>
  )</pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">INSERT</span> <span style=\"font-weight:bold;\">INTO</span> <span style=\"color: purple;\">`PREFIX_cms_category`</span> 
<span style=\"font-weight:bold;\">VALUES</span> 
  (<span style=\"color: green;\">1</span><span >,</span> <span style=\"color: green;\">0</span><span >,</span> <span style=\"color: green;\">0</span><span >,</span> <span style=\"color: green;\">1</span><span >,</span> <span style=\"font-weight:bold;\">NOW()</span><span >,</span> <span style=\"font-weight:bold;\">NOW()</span><span >,</span> <span style=\"color: green;\">0</span>)</pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">UPDATE</span> 
  <span style=\"color: purple;\">`PREFIX_cms_category`</span> 
<span style=\"font-weight:bold;\">SET</span> 
  <span style=\"color: purple;\">`position`</span> <span >=</span> <span style=\"color: green;\">0</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">ALTER TABLE</span> 
  <span style=\"color: purple;\">`PREFIX_customer`</span> 
<span style=\"font-weight:bold;\">ADD</span> 
  <span style=\"color: purple;\">`note`</span> <span style=\"color: #333;\">text</span> 
<span style=\"font-weight:bold;\">AFTER</span> 
  <span style=\"color: purple;\">`secure_key`</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">ALTER TABLE</span> 
  <span style=\"color: purple;\">`PREFIX_contact`</span> 
<span style=\"font-weight:bold;\">ADD</span> 
  <span style=\"color: purple;\">`customer_service`</span> <span style=\"color: #333;\">tinyint</span>(<span style=\"color: green;\">1</span>) <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">NULL</span> <span style=\"font-weight:bold;\">DEFAULT</span> <span style=\"color: green;\">0</span> 
<span style=\"font-weight:bold;\">AFTER</span> 
  <span style=\"color: purple;\">`email`</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">INSERT</span> <span style=\"font-weight:bold;\">INTO</span> <span style=\"color: purple;\">`PREFIX_specific_price`</span> (
  <span style=\"color: purple;\">`id_product`</span><span >,</span> <span style=\"color: purple;\">`id_shop`</span><span >,</span> <span style=\"color: purple;\">`id_currency`</span><span >,</span> 
  <span style=\"color: purple;\">`id_country`</span><span >,</span> <span style=\"color: purple;\">`id_group`</span><span >,</span> <span style=\"color: purple;\">`priority`</span><span >,</span> 
  <span style=\"color: purple;\">`price`</span><span >,</span> <span style=\"color: purple;\">`from_quantity`</span><span >,</span> <span style=\"color: purple;\">`reduction`</span><span >,</span> 
  <span style=\"color: purple;\">`reduction_type`</span><span >,</span> <span style=\"color: purple;\">`from`</span><span >,</span> <span style=\"color: purple;\">`to`</span>
) (
  <span style=\"font-weight:bold;\">SELECT</span> 
    <span style=\"color: #333;\">dq</span><span >.</span><span style=\"color: purple;\">`id_product`</span><span >,</span> 
    <span style=\"color: green;\">1</span><span >,</span> 
    <span style=\"color: green;\">1</span><span >,</span> 
    <span style=\"color: green;\">0</span><span >,</span> 
    <span style=\"color: green;\">1</span><span >,</span> 
    <span style=\"color: green;\">0</span><span >,</span> 
    <span style=\"color: green;\">0.00</span><span >,</span> 
    <span style=\"color: #333;\">dq</span><span >.</span><span style=\"color: purple;\">`quantity`</span><span >,</span> 
    <span style=\"font-weight:bold;\">IF</span>(
      <span style=\"color: #333;\">dq</span><span >.</span><span style=\"color: purple;\">`id_discount_type`</span> <span >=</span> <span style=\"color: green;\">2</span><span >,</span> <span style=\"color: #333;\">dq</span><span >.</span><span style=\"color: purple;\">`value`</span><span >,</span> 
      <span style=\"color: #333;\">dq</span><span >.</span><span style=\"color: purple;\">`value`</span> <span >/</span> <span style=\"color: green;\">100</span>
    )<span >,</span> 
    <span style=\"font-weight:bold;\">IF</span> (
      <span style=\"color: #333;\">dq</span><span >.</span><span style=\"color: purple;\">`id_discount_type`</span> <span >=</span> <span style=\"color: green;\">2</span><span >,</span> <span style=\"color: blue;\">'amount'</span><span >,</span> 
      <span style=\"color: blue;\">'percentage'</span>
    )<span >,</span> 
    <span style=\"color: blue;\">'0000-00-00 00:00:00'</span><span >,</span> 
    <span style=\"color: blue;\">'0000-00-00 00:00:00'</span> 
  <span style=\"font-weight:bold;\">FROM</span> 
    <span style=\"color: purple;\">`PREFIX_discount_quantity`</span> <span style=\"color: #333;\">dq</span> 
    <span style=\"font-weight:bold;\">INNER JOIN</span> <span style=\"color: purple;\">`PREFIX_product`</span> <span style=\"color: #333;\">p</span> <span style=\"font-weight:bold;\">ON</span> (<span style=\"color: #333;\">p</span><span >.</span><span style=\"color: purple;\">`id_product`</span> <span >=</span> <span style=\"color: #333;\">dq</span><span >.</span><span style=\"color: purple;\">`id_product`</span>)
)</pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">DROP</span> 
  <span style=\"font-weight:bold;\">TABLE</span> <span style=\"color: purple;\">`PREFIX_discount_quantity`</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">INSERT</span> <span style=\"font-weight:bold;\">INTO</span> <span style=\"color: purple;\">`PREFIX_specific_price`</span> (
  <span style=\"color: purple;\">`id_product`</span><span >,</span> <span style=\"color: purple;\">`id_shop`</span><span >,</span> <span style=\"color: purple;\">`id_currency`</span><span >,</span> 
  <span style=\"color: purple;\">`id_country`</span><span >,</span> <span style=\"color: purple;\">`id_group`</span><span >,</span> <span style=\"color: purple;\">`priority`</span><span >,</span> 
  <span style=\"color: purple;\">`price`</span><span >,</span> <span style=\"color: purple;\">`from_quantity`</span><span >,</span> <span style=\"color: purple;\">`reduction`</span><span >,</span> 
  <span style=\"color: purple;\">`reduction_type`</span><span >,</span> <span style=\"color: purple;\">`from`</span><span >,</span> <span style=\"color: purple;\">`to`</span>
) (
  <span style=\"font-weight:bold;\">SELECT</span> 
    <span style=\"color: #333;\">p</span><span >.</span><span style=\"color: purple;\">`id_product`</span><span >,</span> 
    <span style=\"color: green;\">1</span><span >,</span> 
    <span style=\"color: green;\">0</span><span >,</span> 
    <span style=\"color: green;\">0</span><span >,</span> 
    <span style=\"color: green;\">0</span><span >,</span> 
    <span style=\"color: green;\">0</span><span >,</span> 
    <span style=\"color: green;\">0.00</span><span >,</span> 
    <span style=\"color: green;\">1</span><span >,</span> 
    <span style=\"font-weight:bold;\">IF</span>(
      <span style=\"color: #333;\">p</span><span >.</span><span style=\"color: purple;\">`reduction_price`</span> <span >&gt;</span> <span style=\"color: green;\">0</span><span >,</span> <span style=\"color: #333;\">p</span><span >.</span><span style=\"color: purple;\">`reduction_price`</span><span >,</span> 
      <span style=\"color: #333;\">p</span><span >.</span><span style=\"color: purple;\">`reduction_percent`</span> <span >/</span> <span style=\"color: green;\">100</span>
    )<span >,</span> 
    <span style=\"font-weight:bold;\">IF</span>(
      <span style=\"color: #333;\">p</span><span >.</span><span style=\"color: purple;\">`reduction_price`</span> <span >&gt;</span> <span style=\"color: green;\">0</span><span >,</span> <span style=\"color: blue;\">'amount'</span><span >,</span> 
      <span style=\"color: blue;\">'percentage'</span>
    )<span >,</span> 
    <span style=\"font-weight:bold;\">IF</span> (
      <span style=\"color: #333;\">p</span><span >.</span><span style=\"color: purple;\">`reduction_from`</span> <span >=</span> <span style=\"color: #333;\">p</span><span >.</span><span style=\"color: purple;\">`reduction_to`</span><span >,</span> 
      <span style=\"color: blue;\">'0000-00-00 00:00:00'</span><span >,</span> <span style=\"color: #333;\">p</span><span >.</span><span style=\"color: purple;\">`reduction_from`</span>
    )<span >,</span> 
    <span style=\"font-weight:bold;\">IF</span> (
      <span style=\"color: #333;\">p</span><span >.</span><span style=\"color: purple;\">`reduction_from`</span> <span >=</span> <span style=\"color: #333;\">p</span><span >.</span><span style=\"color: purple;\">`reduction_to`</span><span >,</span> 
      <span style=\"color: blue;\">'0000-00-00 00:00:00'</span><span >,</span> <span style=\"color: #333;\">p</span><span >.</span><span style=\"color: purple;\">`reduction_to`</span>
    ) 
  <span style=\"font-weight:bold;\">FROM</span> 
    <span style=\"color: purple;\">`PREFIX_product`</span> <span style=\"color: #333;\">p</span> 
  <span style=\"font-weight:bold;\">WHERE</span> 
    <span style=\"color: #333;\">p</span><span >.</span><span style=\"color: purple;\">`reduction_price`</span> 
    <span style=\"font-weight:bold;\">OR</span> <span style=\"color: #333;\">p</span><span >.</span><span style=\"color: purple;\">`reduction_percent`</span>
)</pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">ALTER TABLE</span> 
  <span style=\"color: purple;\">`PREFIX_product`</span> 
<span style=\"font-weight:bold;\">DROP</span> 
  <span style=\"color: purple;\">`reduction_price`</span><span >,</span> 
<span style=\"font-weight:bold;\">DROP</span> 
  <span style=\"color: purple;\">`reduction_percent`</span><span >,</span> 
<span style=\"font-weight:bold;\">DROP</span> 
  <span style=\"color: purple;\">`reduction_from`</span><span >,</span> 
<span style=\"font-weight:bold;\">DROP</span> 
  <span style=\"color: purple;\">`reduction_to`</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">INSERT</span> <span style=\"font-weight:bold;\">INTO</span> <span style=\"color: purple;\">`PREFIX_configuration`</span> (
  <span style=\"color: purple;\">`name`</span><span >,</span> <span style=\"color: purple;\">`value`</span><span >,</span> <span style=\"color: purple;\">`date_add`</span><span >,</span> <span style=\"color: purple;\">`date_upd`</span>
) 
<span style=\"font-weight:bold;\">VALUES</span> 
  (
    <span style=\"color: blue;\">'PS_SPECIFIC_PRICE_PRIORITIES'</span><span >,</span> 
    <span style=\"color: blue;\">'id_shop;id_currency;id_country;id_group'</span><span >,</span> 
    <span style=\"font-weight:bold;\">NOW()</span><span >,</span> <span style=\"font-weight:bold;\">NOW()</span>
  )<span >,</span> 
  (<span style=\"color: blue;\">'PS_TAX_DISPLAY'</span><span >,</span> <span style=\"color: green;\">0</span><span >,</span> <span style=\"font-weight:bold;\">NOW()</span><span >,</span> <span style=\"font-weight:bold;\">NOW()</span>)<span >,</span> 
  (
    <span style=\"color: blue;\">'PS_SMARTY_FORCE_COMPILE'</span><span >,</span> <span style=\"color: green;\">1</span><span >,</span> <span style=\"font-weight:bold;\">NOW()</span><span >,</span> 
    <span style=\"font-weight:bold;\">NOW()</span>
  )<span >,</span> 
  (
    <span style=\"color: blue;\">'PS_DISTANCE_UNIT'</span><span >,</span> <span style=\"color: blue;\">'km'</span><span >,</span> <span style=\"font-weight:bold;\">NOW()</span><span >,</span> <span style=\"font-weight:bold;\">NOW()</span>
  )<span >,</span> 
  (
    <span style=\"color: blue;\">'PS_STORES_DISPLAY_CMS'</span><span >,</span> <span style=\"color: green;\">0</span><span >,</span> <span style=\"font-weight:bold;\">NOW()</span><span >,</span> 
    <span style=\"font-weight:bold;\">NOW()</span>
  )<span >,</span> 
  (
    <span style=\"color: blue;\">'PS_STORES_DISPLAY_FOOTER'</span><span >,</span> <span style=\"color: green;\">0</span><span >,</span> <span style=\"font-weight:bold;\">NOW()</span><span >,</span> 
    <span style=\"font-weight:bold;\">NOW()</span>
  )<span >,</span> 
  (
    <span style=\"color: blue;\">'PS_STORES_SIMPLIFIED'</span><span >,</span> <span style=\"color: green;\">0</span><span >,</span> <span style=\"font-weight:bold;\">NOW()</span><span >,</span> 
    <span style=\"font-weight:bold;\">NOW()</span>
  )<span >,</span> 
  (
    <span style=\"color: blue;\">'PS_STATSDATA_CUSTOMER_PAGESVIEWS'</span><span >,</span> 
    <span style=\"color: green;\">1</span><span >,</span> <span style=\"font-weight:bold;\">NOW()</span><span >,</span> <span style=\"font-weight:bold;\">NOW()</span>
  )<span >,</span> 
  (
    <span style=\"color: blue;\">'PS_STATSDATA_PAGESVIEWS'</span><span >,</span> <span style=\"color: green;\">1</span><span >,</span> <span style=\"font-weight:bold;\">NOW()</span><span >,</span> 
    <span style=\"font-weight:bold;\">NOW()</span>
  )<span >,</span> 
  (
    <span style=\"color: blue;\">'PS_STATSDATA_PLUGINS'</span><span >,</span> <span style=\"color: green;\">1</span><span >,</span> <span style=\"font-weight:bold;\">NOW()</span><span >,</span> 
    <span style=\"font-weight:bold;\">NOW()</span>
  )</pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">INSERT</span> <span style=\"font-weight:bold;\">INTO</span> <span style=\"color: purple;\">`PREFIX_configuration`</span> (
  <span style=\"color: purple;\">`name`</span><span >,</span> <span style=\"color: purple;\">`value`</span><span >,</span> <span style=\"color: purple;\">`date_add`</span><span >,</span> <span style=\"color: purple;\">`date_upd`</span>
) 
<span style=\"font-weight:bold;\">VALUES</span> 
  (
    <span style=\"color: blue;\">'PS_CONDITIONS_CMS_ID'</span><span >,</span> 
    <span style=\"font-weight:bold;\">IFNULL</span>(
      (
        <span style=\"font-weight:bold;\">SELECT</span> 
          <span style=\"color: purple;\">`id_cms`</span> 
        <span style=\"font-weight:bold;\">FROM</span> 
          <span style=\"color: purple;\">`PREFIX_cms`</span> 
        <span style=\"font-weight:bold;\">WHERE</span> 
          <span style=\"color: purple;\">`id_cms`</span> <span >=</span> <span style=\"color: green;\">3</span>
      )<span >,</span> 
      <span style=\"color: green;\">0</span>
    )<span >,</span> 
    <span style=\"font-weight:bold;\">NOW()</span><span >,</span> 
    <span style=\"font-weight:bold;\">NOW()</span>
  )</pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">CREATE</span> <span style=\"font-weight:bold;\">TEMPORARY</span> <span style=\"font-weight:bold;\">TABLE</span> <span style=\"color: purple;\">`PREFIX_configuration_tmp`</span> (<span style=\"color: purple;\">`value`</span> <span style=\"color: #333;\">text</span>)</pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">SET</span> 
  <span style=\"color: orange;\">@defaultOOS</span> <span >=</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: #333;\">value</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_configuration`</span> 
    <span style=\"font-weight:bold;\">WHERE</span> 
      <span style=\"color: #333;\">name</span> <span >=</span> <span style=\"color: blue;\">'PS_ORDER_OUT_OF_STOCK'</span>
  )</pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">UPDATE</span> 
  <span style=\"color: purple;\">`PREFIX_product`</span> <span style=\"color: #333;\">p</span> 
<span style=\"font-weight:bold;\">SET</span> 
  <span style=\"color: purple;\">`cache_default_attribute`</span> <span >=</span> <span style=\"color: green;\">0</span> 
<span style=\"font-weight:bold;\">WHERE</span> 
  <span style=\"color: purple;\">`id_product`</span> <span style=\"font-weight:bold;\">NOT</span> <span style=\"font-weight:bold;\">IN</span> (
    <span style=\"font-weight:bold;\">SELECT</span> 
      <span style=\"color: purple;\">`id_product`</span> 
    <span style=\"font-weight:bold;\">FROM</span> 
      <span style=\"color: purple;\">`PREFIX_product_attribute`</span>
  )</pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">INSERT</span> <span style=\"font-weight:bold;\">INTO</span> <span style=\"color: purple;\">`PREFIX_hook`</span> (
  <span style=\"color: purple;\">`name`</span><span >,</span> <span style=\"color: purple;\">`title`</span><span >,</span> <span style=\"color: purple;\">`description`</span><span >,</span> <span style=\"color: purple;\">`position`</span>
) 
<span style=\"font-weight:bold;\">VALUES</span> 
  (
    <span style=\"color: blue;\">'processCarrier'</span><span >,</span> <span style=\"color: blue;\">'Carrier Process'</span><span >,</span> 
    <span style=\"font-weight:bold;\">NULL</span><span >,</span> <span style=\"color: green;\">0</span>
  )</pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">INSERT</span> <span style=\"font-weight:bold;\">INTO</span> <span style=\"color: purple;\">`PREFIX_stock_mvt_reason_lang`</span> (
  <span style=\"color: purple;\">`id_stock_mvt_reason`</span><span >,</span> <span style=\"color: purple;\">`id_lang`</span><span >,</span> 
  <span style=\"color: purple;\">`name`</span>
) 
<span style=\"font-weight:bold;\">VALUES</span> 
  (<span style=\"color: green;\">1</span><span >,</span> <span style=\"color: green;\">1</span><span >,</span> <span style=\"color: blue;\">'Order'</span>)<span >,</span> 
  (<span style=\"color: green;\">1</span><span >,</span> <span style=\"color: green;\">2</span><span >,</span> <span style=\"color: blue;\">'Commande'</span>)<span >,</span> 
  (<span style=\"color: green;\">2</span><span >,</span> <span style=\"color: green;\">1</span><span >,</span> <span style=\"color: blue;\">'Missing Stock Movement'</span>)<span >,</span> 
  (
    <span style=\"color: green;\">2</span><span >,</span> <span style=\"color: green;\">2</span><span >,</span> <span style=\"color: blue;\">'Mouvement de stock manquant'</span>
  )<span >,</span> 
  (<span style=\"color: green;\">3</span><span >,</span> <span style=\"color: green;\">1</span><span >,</span> <span style=\"color: blue;\">'Restocking'</span>)<span >,</span> 
  (<span style=\"color: green;\">3</span><span >,</span> <span style=\"color: green;\">2</span><span >,</span> <span style=\"color: blue;\">'R&Atilde;&copy;assort'</span>)</pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">INSERT</span> <span style=\"font-weight:bold;\">INTO</span> <span style=\"color: purple;\">`PREFIX_meta_lang`</span> (
  <span style=\"color: purple;\">`id_lang`</span><span >,</span> <span style=\"color: purple;\">`id_meta`</span><span >,</span> <span style=\"color: purple;\">`title`</span><span >,</span> <span style=\"color: purple;\">`url_rewrite`</span>
) 
<span style=\"font-weight:bold;\">VALUES</span> 
  (
    <span style=\"color: green;\">1</span><span >,</span> 
    (
      <span style=\"font-weight:bold;\">SELECT</span> 
        <span style=\"color: purple;\">`id_meta`</span> 
      <span style=\"font-weight:bold;\">FROM</span> 
        <span style=\"color: purple;\">`PREFIX_meta`</span> 
      <span style=\"font-weight:bold;\">WHERE</span> 
        <span style=\"color: purple;\">`page`</span> <span >=</span> <span style=\"color: blue;\">'authentication'</span>
    )<span >,</span> 
    <span style=\"color: blue;\">'Authentication'</span><span >,</span> 
    <span style=\"color: blue;\">'authentication'</span>
  )<span >,</span> 
  (
    <span style=\"color: green;\">2</span><span >,</span> 
    (
      <span style=\"font-weight:bold;\">SELECT</span> 
        <span style=\"color: purple;\">`id_meta`</span> 
      <span style=\"font-weight:bold;\">FROM</span> 
        <span style=\"color: purple;\">`PREFIX_meta`</span> 
      <span style=\"font-weight:bold;\">WHERE</span> 
        <span style=\"color: purple;\">`page`</span> <span >=</span> <span style=\"color: blue;\">'authentication'</span>
    )<span >,</span> 
    <span style=\"color: blue;\">'Authentification'</span><span >,</span> 
    <span style=\"color: blue;\">'authentification'</span>
  )<span >,</span> 
  (
    <span style=\"color: green;\">3</span><span >,</span> 
    (
      <span style=\"font-weight:bold;\">SELECT</span> 
        <span style=\"color: purple;\">`id_meta`</span> 
      <span style=\"font-weight:bold;\">FROM</span> 
        <span style=\"color: purple;\">`PREFIX_meta`</span> 
      <span style=\"font-weight:bold;\">WHERE</span> 
        <span style=\"color: purple;\">`page`</span> <span >=</span> <span style=\"color: blue;\">'authentication'</span>
    )<span >,</span> 
    <span style=\"color: blue;\">'Autenticaci&Atilde;&sup3;n'</span><span >,</span> 
    <span style=\"color: blue;\">'autenticacion'</span>
  )</pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">LOCK</span> <span style=\"font-weight:bold;\">TABLES</span> <span style=\"color: purple;\">`admin_assert`</span> <span style=\"font-weight:bold;\">WRITE</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">UNLOCK</span> <span style=\"font-weight:bold;\">TABLES</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">DROP</span> 
  <span style=\"font-weight:bold;\">TABLE</span> <span style=\"font-weight:bold;\">IF</span> <span style=\"font-weight:bold;\">EXISTS</span> <span style=\"color: purple;\">`admin_role`</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">SELECT</span> 
  <span >*</span> 
<span style=\"font-weight:bold;\">FROM</span> 
  <span style=\"color: #aaa;\">-- This is another comment</span>
  <span style=\"color: #333;\">MyTable</span> <span style=\"color: #aaa;\"># One final comment</span>
  
  <span style=\"color: #aaa;\">/* This is a block comment 
  */</span>
<span style=\"font-weight:bold;\">WHERE</span> 
  <span style=\"color: green;\">1</span> <span >=</span> <span style=\"color: green;\">2</span><span >;</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">SELECT</span> 
  <span style=\"color: #aaa;\">-- This is a test</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">SELECT</span> 
  <span style=\"color: #333;\">Test</span> 
<span style=\"font-weight:bold;\">FROM</span> 
  <span style=\"color: #333;\">Test</span> 
<span style=\"font-weight:bold;\">WHERE</span> 
  (<span style=\"color: #333;\">MyColumn</span> <span >=</span> <span style=\"color: green;\">1</span>)
<span style=\"background-color: red;\">)</span>
<span style=\"font-weight:bold;\">AND</span> (
  (
    (<span style=\"color: #333;\">SomeOtherColumn</span> <span >=</span> <span style=\"color: green;\">2</span>)<span >;</span> 
<span style=\"background-color: red;\">WARNING: unclosed parentheses or section</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">SELECT</span> 
  <span >*</span> 
<span style=\"font-weight:bold;\">LIMIT</span> 
  <span style=\"color: green;\">1</span><span >;</span> 
<span style=\"font-weight:bold;\">SELECT</span> 
  <span style=\"color: #333;\">a</span><span >,</span> 
  <span style=\"color: #333;\">b</span><span >,</span> 
  <span style=\"color: #333;\">c</span><span >,</span> 
  <span style=\"color: #333;\">d</span> 
<span style=\"font-weight:bold;\">FROM</span> 
  <span style=\"color: #333;\">e</span> 
<span style=\"font-weight:bold;\">LIMIT</span> 
  <span style=\"color: green;\">1</span><span >,</span> <span style=\"color: green;\">2</span><span >;</span> 
<span style=\"font-weight:bold;\">SELECT</span> 
  <span style=\"color: green;\">1</span><span >,</span> 
  <span style=\"color: green;\">2</span><span >,</span> 
  <span style=\"color: green;\">3</span> 
<span style=\"font-weight:bold;\">WHERE</span> 
  <span style=\"color: #333;\">a</span> <span style=\"font-weight:bold;\">in</span> (<span style=\"color: green;\">1</span><span >,</span> <span style=\"color: green;\">2</span><span >,</span> <span style=\"color: green;\">3</span><span >,</span> <span style=\"color: green;\">4</span><span >,</span> <span style=\"color: green;\">5</span>) 
  <span style=\"font-weight:bold;\">and</span> <span style=\"color: #333;\">b</span> <span >=</span> <span style=\"color: green;\">5</span><span >;</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">SELECT</span> 
  <span style=\"color: #333;\">count</span> <span >-</span> <span style=\"color: green;\">50</span> 
<span style=\"font-weight:bold;\">WHERE</span> 
  <span style=\"color: #333;\">a</span> <span >-</span> <span style=\"color: green;\">50</span> <span >=</span> <span style=\"color: #333;\">b</span> 
<span style=\"font-weight:bold;\">WHERE</span> 
  <span style=\"color: green;\">1</span> 
  <span style=\"font-weight:bold;\">and</span> <span >-</span><span style=\"color: green;\">50</span> 
<span style=\"font-weight:bold;\">WHERE</span> 
  <span >-</span><span style=\"color: green;\">50</span> <span >=</span> <span style=\"color: #333;\">a</span> 
<span style=\"font-weight:bold;\">WHERE</span> 
  <span style=\"color: #333;\">a</span> <span >=</span> <span >-</span><span style=\"color: green;\">50</span> 
<span style=\"font-weight:bold;\">WHERE</span> 
  <span style=\"color: green;\">1</span> 
  <span style=\"color: #aaa;\">/*test*/</span>
  <span >-</span><span style=\"color: green;\">50</span> 
<span style=\"font-weight:bold;\">WHERE</span> 
  <span style=\"color: green;\">1</span> 
  <span style=\"font-weight:bold;\">and</span> <span >-</span><span style=\"color: green;\">50</span><span >;</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">SELECT</span> 
  <span style=\"color: #333;\">@</span> 
  <span style=\"font-weight:bold;\">and</span> <span style=\"color: #333;\">b</span><span >;</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">SELECT</span> 
  <span style=\"color: orange;\">@&quot;weird variable name&quot;</span><span >;</span></pre>

<pre style=\"color: black; background-color: white;\"><span style=\"font-weight:bold;\">SELECT</span> 
  <span style=\"color: blue;\">&quot;no closing quote
</span></pre>", "vendor/jdorn/sql-formatter/tests/format-highlight.html", "/var/www/public/DevLaon/templates/vendor/jdorn/sql-formatter/tests/format-highlight.html");
    }
}
