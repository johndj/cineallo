<?php

/* core/modules/link/templates/link-formatter-link-separate.html.twig */
class __TwigTemplate_288834582439cbedd971f3bfa89c23171bd3f9ddb2ebad857bddd82d7d347b91 extends Twig_Template
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
        $__internal_82ea6df47ad79e64999a4414895e6ce659c17d1327c761378d87d237878b48f7 = $this->env->getExtension("native_profiler");
        $__internal_82ea6df47ad79e64999a4414895e6ce659c17d1327c761378d87d237878b48f7->enter($__internal_82ea6df47ad79e64999a4414895e6ce659c17d1327c761378d87d237878b48f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/modules/link/templates/link-formatter-link-separate.html.twig"));

        $tags = array("spaceless" => 17);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('spaceless'),
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

        // line 17
        ob_start();
        // line 18
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "
  ";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true));
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_82ea6df47ad79e64999a4414895e6ce659c17d1327c761378d87d237878b48f7->leave($__internal_82ea6df47ad79e64999a4414895e6ce659c17d1327c761378d87d237878b48f7_prof);

    }

    public function getTemplateName()
    {
        return "core/modules/link/templates/link-formatter-link-separate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 19,  48 => 18,  46 => 17,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation of a link with separate title and URL elements.*/
/*  **/
/*  * Available variables:*/
/*  * - link: The link that has already been formatted by l().*/
/*  * - title: (optional) A descriptive or alternate title for the link, which may*/
/*  *   be different than the actual link text.*/
/*  **/
/*  * @see template_preprocess()*/
/*  * @see template_preprocess_link_formatter_link_separate()*/
/*  **/
/*  * @ingroup themeable*/
/*  *//* */
/* #}*/
/* {% spaceless %}*/
/*   {{ title }}*/
/*   {{ link }}*/
/* {% endspaceless %}*/
/* */
