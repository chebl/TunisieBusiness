<?php

/* BusinessAnnuaireBundle:Annuaire:derniersannonces.html.twig */
class __TwigTemplate_842ff0b27901f7313ea809d2def1b4054822f85f675db0db0d2c00e12c50f264 extends Twig_Template
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
        // line 1
        echo "<div class=\"box-stand\">

<h4>Dernières Annonces</h4>
<table style=\"width:100%;\" class=\"tabsoc\">
  <tr>
    <td>Photo</td>
    <td>Annonce</td>
    <td>Région</td>
  </tr>

  ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listannonces"]) ? $context["listannonces"] : $this->getContext($context, "listannonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["ann"]) {
            // line 12
            echo "  <tr><td style=\"width: 10%;\"> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire_ficheannonce", array("id" => $this->getAttribute((isset($context["ann"]) ? $context["ann"] : $this->getContext($context, "ann")), "id"))), "html", null, true);
            echo "\" title=\"\">
           ";
            // line 13
            if (($this->getAttribute((isset($context["ann"]) ? $context["ann"] : $this->getContext($context, "ann")), "path") == "")) {
                echo " 
              <img itemprop=\"image\" src=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/logosoc/no-image.gif"), "html", null, true);
                echo "\" alt=\"\" style=\"width:120px; height:60px;\" />
        </a>
          ";
            } else {
                // line 17
                echo "              <img itemprop=\"image\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/uploads/annonces/images/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ann"]) ? $context["ann"] : $this->getContext($context, "ann")), "path"), "html", null, true);
                echo "\" alt=\"\" style=\"width:120px; height:60px;\" />
        </a>      
                 ";
            }
            // line 19
            echo " 
              </td><td style=\"width: 60%;\">
            <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire_ficheannonce", array("id" => $this->getAttribute((isset($context["ann"]) ? $context["ann"] : $this->getContext($context, "ann")), "id"))), "html", null, true);
            echo "\" title=\"\"><strong itemprop=\"name\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ann"]) ? $context["ann"] : $this->getContext($context, "ann")), "titre"), "html", null, true);
            echo "</strong></a>
                <br>publier le : ";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ann"]) ? $context["ann"] : $this->getContext($context, "ann")), "datepublication"), "d/m/Y"), "html", null, true);
            echo " </td>   
<td style=\"width: 30%;\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ann"]) ? $context["ann"] : $this->getContext($context, "ann")), "lieu"), "html", null, true);
            echo "</td>
 </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ann'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    
    </table>

</div> ";
    }

    public function getTemplateName()
    {
        return "BusinessAnnuaireBundle:Annuaire:derniersannonces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 26,  72 => 23,  68 => 22,  62 => 21,  58 => 19,  50 => 17,  44 => 14,  40 => 13,  35 => 12,  19 => 1,  45 => 10,  41 => 9,  37 => 8,  31 => 11,  28 => 3,);
    }
}
