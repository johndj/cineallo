<?php

/* themes/contrib/bootstrap/templates/block/block--system-menu-block--main.html.twig */
class __TwigTemplate_abe48196b4aa61947f4d716b85b4df270896f8de908ca43a23a0760d55850e0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d75c2c4979c8f13d7984150b2174867ae712d64421eb563f6fd12d88eeefe44 = $this->env->getExtension("native_profiler");
        $__internal_7d75c2c4979c8f13d7984150b2174867ae712d64421eb563f6fd12d88eeefe44->enter($__internal_7d75c2c4979c8f13d7984150b2174867ae712d64421eb563f6fd12d88eeefe44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/contrib/bootstrap/templates/block/block--system-menu-block--main.html.twig"));

        $tags = array("set" => 36, "if" => 39, "block" => 44);
        $filters = array("clean_id" => 36, "without" => 37);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_id', 'without'),
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

        // line 36
        $context["heading_id"] = ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "id", array()) . \Drupal\Component\Utility\Html::getId("-menu"));
        // line 37
        echo "<nav role=\"navigation\" aria-labelledby=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["heading_id"]) ? $context["heading_id"] : null), "html", null, true));
        echo "\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "removeClass", array(0 => "clearfix"), "method"), "role", "aria-labelledby"), "html", null, true));
        echo ">
  ";
        // line 39
        echo "  ";
        if ( !$this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label_display", array())) {
            // line 40
            echo "    ";
            $context["title_attributes"] = $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "sr-only"), "method");
            // line 41
            echo "  ";
        }
        // line 42
        echo "  <h2";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "setAttribute", array(0 => "id", 1 => (isset($context["heading_id"]) ? $context["heading_id"] : null)), "method"), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["configuration"]) ? $context["configuration"] : null), "label", array()), "html", null, true));
        echo "</h2>

  ";
        // line 44
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "</nav>
";
        
        $__internal_7d75c2c4979c8f13d7984150b2174867ae712d64421eb563f6fd12d88eeefe44->leave($__internal_7d75c2c4979c8f13d7984150b2174867ae712d64421eb563f6fd12d88eeefe44_prof);

    }

    // line 44
    public function block_content($context, array $blocks = array())
    {
        $__internal_3440c6bd698c7aa661d993dbb768b25d30fa71f7ea462faa5c98d6cdd46e178a = $this->env->getExtension("native_profiler");
        $__internal_3440c6bd698c7aa661d993dbb768b25d30fa71f7ea462faa5c98d6cdd46e178a->enter($__internal_3440c6bd698c7aa661d993dbb768b25d30fa71f7ea462faa5c98d6cdd46e178a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 45
        echo "    ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
  ";
        
        $__internal_3440c6bd698c7aa661d993dbb768b25d30fa71f7ea462faa5c98d6cdd46e178a->leave($__internal_3440c6bd698c7aa661d993dbb768b25d30fa71f7ea462faa5c98d6cdd46e178a_prof);

    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/block/block--system-menu-block--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 45,  83 => 44,  75 => 47,  73 => 44,  65 => 42,  62 => 41,  59 => 40,  56 => 39,  49 => 37,  47 => 36,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation for a menu block.*/
/*  **/
/*  * Available variables:*/
/*  * - plugin_id: The ID of the block implementation.*/
/*  * - label: The configured label of the block if visible.*/
/*  * - configuration: A list of the block's configuration values.*/
/*  *   - label: The configured label for the block.*/
/*  *   - label_display: The display settings for the label.*/
/*  *   - provider: The module or other provider that provided this block plugin.*/
/*  *   - Block plugin specific settings will also be stored here.*/
/*  * - content: The content of this block.*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  *   - id: A valid HTML ID and guaranteed unique.*/
/*  * - title_attributes: HTML attributes for the title element.*/
/*  * - content_attributes: HTML attributes for the content element.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  **/
/*  * Headings should be used on navigation menus that consistently appear on*/
/*  * multiple pages. When this menu block's label is configured to not be*/
/*  * displayed, it is automatically made invisible using the 'visually-hidden' CSS*/
/*  * class, which still keeps it visible for screen-readers and assistive*/
/*  * technology. Headings allow screen-reader and keyboard only users to navigate*/
/*  * to or skip the links.*/
/*  * See http://juicystudio.com/article/screen-readers-display-none.php and*/
/*  * http://www.w3.org/TR/WCAG-TECHS/H42.html for more information.*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* {% set heading_id = attributes.id ~ '-menu'|clean_id %}*/
/* <nav role="navigation" aria-labelledby="{{ heading_id }}"{{ attributes.removeClass('clearfix')|without('role', 'aria-labelledby') }}>*/
/*   {# Label. If not displayed, we still provide it for screen readers. #}*/
/*   {% if not configuration.label_display %}*/
/*     {% set title_attributes = title_attributes.addClass('sr-only') %}*/
/*   {% endif %}*/
/*   <h2{{ title_attributes.setAttribute('id', heading_id) }}>{{ configuration.label }}</h2>*/
/* */
/*   {% block content %}*/
/*     {{ content }}*/
/*   {% endblock %}*/
/* </nav>*/
/* */
