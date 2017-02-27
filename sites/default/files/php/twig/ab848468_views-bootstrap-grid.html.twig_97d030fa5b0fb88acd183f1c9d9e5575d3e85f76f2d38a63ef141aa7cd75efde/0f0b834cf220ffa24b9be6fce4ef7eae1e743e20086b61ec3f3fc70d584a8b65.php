<?php

/* modules/contrib/views_bootstrap/templates/views_bootstrap_grid/views-bootstrap-grid.html.twig */
class __TwigTemplate_78cb4cedf9c7ff9e674bc1b835167f515e97a79f5004704e3e7e4bc45dc92c64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 16, "if" => 23, "for" => 24);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'for'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 16
        $context["classes"] = array(0 => "views-view-grid", 1 => $this->getAttribute(        // line 18
(isset($context["options"]) ? $context["options"] : null), "alignment", array()));
        // line 21
        echo "
<div ";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 23
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "alignment", array()) == "horizontal")) {
            // line 24
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 25
                echo "      <div class=\"row\">
        ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "content", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 27
                    echo "          <div class=\"col ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["col_xs"]) ? $context["col_xs"] : null), "html", null, true));
                    echo " ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["col_sm"]) ? $context["col_sm"] : null), "html", null, true));
                    echo " ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["col_md"]) ? $context["col_md"] : null), "html", null, true));
                    echo " ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["col_lg"]) ? $context["col_lg"] : null), "html", null, true));
                    echo "\">
            ";
                    // line 28
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["column"], "content", array()), "html", null, true));
                    echo "
          </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "  ";
        } else {
            // line 34
            echo "    <div class=\"row\">
      ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 36
                echo "        <div class=\"col ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["col_xs"]) ? $context["col_xs"] : null), "html", null, true));
                echo " ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["col_sm"]) ? $context["col_sm"] : null), "html", null, true));
                echo " ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["col_md"]) ? $context["col_md"] : null), "html", null, true));
                echo " ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["col_lg"]) ? $context["col_lg"] : null), "html", null, true));
                echo "\">
          ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["column"], "content", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 38
                    echo "            ";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
                    echo "
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "        </div>

        ";
                // line 42
                if ((0 == $this->getAttribute($context["loop"], "index", array()) % $this->getAttribute((isset($context["sizes"]) ? $context["sizes"] : null), "xs", array()))) {
                    // line 43
                    echo "          <div class=\"clearfix visible-xs-block\"></div>
        ";
                }
                // line 45
                echo "
        ";
                // line 46
                if ((0 == $this->getAttribute($context["loop"], "index", array()) % $this->getAttribute((isset($context["sizes"]) ? $context["sizes"] : null), "sm", array()))) {
                    // line 47
                    echo "          <div class=\"clearfix visible-sm-block\"></div>
        ";
                }
                // line 49
                echo "
        ";
                // line 50
                if ((0 == $this->getAttribute($context["loop"], "index", array()) % $this->getAttribute((isset($context["sizes"]) ? $context["sizes"] : null), "md", array()))) {
                    // line 51
                    echo "          <div class=\"clearfix visible-md-block\"></div>
        ";
                }
                // line 53
                echo "
        ";
                // line 54
                if ((0 == $this->getAttribute($context["loop"], "index", array()) % $this->getAttribute((isset($context["sizes"]) ? $context["sizes"] : null), "lg", array()))) {
                    // line 55
                    echo "          <div class=\"clearfix visible-lg-block\"></div>
        ";
                }
                // line 57
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "    </div>
  ";
        }
        // line 60
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/views_bootstrap/templates/views_bootstrap_grid/views-bootstrap-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 60,  192 => 58,  178 => 57,  174 => 55,  172 => 54,  169 => 53,  165 => 51,  163 => 50,  160 => 49,  156 => 47,  154 => 46,  151 => 45,  147 => 43,  145 => 42,  141 => 40,  132 => 38,  128 => 37,  117 => 36,  100 => 35,  97 => 34,  94 => 33,  87 => 31,  78 => 28,  67 => 27,  63 => 26,  60 => 25,  55 => 24,  53 => 23,  49 => 22,  46 => 21,  44 => 18,  43 => 16,);
    }
}
/* {#*/
/* /***/
/*  * @file views-bootstrap-grid.html.twig*/
/*  * Default simple view template to display Bootstrap Grids.*/
/*  **/
/*  **/
/*  * - columns: Contains rows grouped by columns.*/
/*  * - rows: Contains a nested array of rows. Each row contains an array of*/
/*  *   columns.*/
/*  * - column_type: Contains a number (default Bootstrap grid system column type).*/
/*  **/
/*  * @ingroup views_templates*/
/*  *//* */
/* #}*/
/* {%*/
/*   set classes = [*/
/*     'views-view-grid',*/
/*     options.alignment,*/
/*   ]*/
/* %}*/
/* */
/* <div {{ attributes.addClass(classes) }}>*/
/*   {% if options.alignment  == 'horizontal' %}*/
/*     {% for row in items %}*/
/*       <div class="row">*/
/*         {% for column in row.content %}*/
/*           <div class="col {{ col_xs }} {{ col_sm }} {{ col_md }} {{ col_lg }}">*/
/*             {{ column.content }}*/
/*           </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*     {% endfor %}*/
/*   {% else %}*/
/*     <div class="row">*/
/*       {% for column in items %}*/
/*         <div class="col {{ col_xs }} {{ col_sm }} {{ col_md }} {{ col_lg }}">*/
/*           {% for row in column.content %}*/
/*             {{ row.content }}*/
/*           {% endfor %}*/
/*         </div>*/
/* */
/*         {% if loop.index is divisible by (sizes.xs) %}*/
/*           <div class="clearfix visible-xs-block"></div>*/
/*         {% endif %}*/
/* */
/*         {% if loop.index is divisible by (sizes.sm) %}*/
/*           <div class="clearfix visible-sm-block"></div>*/
/*         {% endif %}*/
/* */
/*         {% if loop.index is divisible by (sizes.md) %}*/
/*           <div class="clearfix visible-md-block"></div>*/
/*         {% endif %}*/
/* */
/*         {% if loop.index is divisible by (sizes.lg) %}*/
/*           <div class="clearfix visible-lg-block"></div>*/
/*         {% endif %}*/
/*       {% endfor %}*/
/*     </div>*/
/*   {% endif %}*/
/* </div>*/
/* */
