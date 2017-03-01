<?php

/* modules/custom/account/templates/account.html.twig */
class __TwigTemplate_d599730d6294fb8f89d95540cc0acbc98b5690614a4933d59d6f2ac1e79709f7 extends Twig_Template
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
        $__internal_7c9f08bc580bddf2193d5e51dc4aba32131ae96c433a884ba08eb5a86e72e784 = $this->env->getExtension("native_profiler");
        $__internal_7c9f08bc580bddf2193d5e51dc4aba32131ae96c433a884ba08eb5a86e72e784->enter($__internal_7c9f08bc580bddf2193d5e51dc4aba32131ae96c433a884ba08eb5a86e72e784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/custom/account/templates/account.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 1
        echo "<div class=\"accueil\">
    <div><a href=\"";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true));
        echo "user/";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["userid"]) ? $context["userid"] : null), "html", null, true));
        echo "\"><img src=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["picture"]) ? $context["picture"] : null), "html", null, true));
        echo "\" /></a></div>
    <div>
        <p><a href=\"";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true));
        echo "user/";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["userid"]) ? $context["userid"] : null), "html", null, true));
        echo "\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["nom"]) ? $context["nom"] : null), "html", null, true));
        echo " ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["prenom"]) ? $context["prenom"] : null), "html", null, true));
        echo "</a></p>
        <p><a href=\"";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["path"]) ? $context["path"] : null), "html", null, true));
        echo "user/logout\">Deconnexion</a></p>
    </div>
</div>";
        
        $__internal_7c9f08bc580bddf2193d5e51dc4aba32131ae96c433a884ba08eb5a86e72e784->leave($__internal_7c9f08bc580bddf2193d5e51dc4aba32131ae96c433a884ba08eb5a86e72e784_prof);

    }

    public function getTemplateName()
    {
        return "modules/custom/account/templates/account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 5,  58 => 4,  49 => 2,  46 => 1,);
    }
}
/* <div class="accueil">*/
/*     <div><a href="{{ path }}user/{{ userid }}"><img src="{{ picture }}" /></a></div>*/
/*     <div>*/
/*         <p><a href="{{ path }}user/{{ userid }}">{{ nom }} {{ prenom }}</a></p>*/
/*         <p><a href="{{ path }}user/logout">Deconnexion</a></p>*/
/*     </div>*/
/* </div>*/
