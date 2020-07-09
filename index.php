<?php 
// Cabeçalho
include("template/header.html");
?>

<!-- Corpo do Site -->

<!-- Estrutura Sobre + Redes Sociais -->
<div class="container">
  <div class="row">


    <!-- Estrutura Sobre -->
    <div class="col-sm-9">
      <div class="box">
        <div class="box-content">
        <?php include("template/sobre.html"); ?>
        </div>
        <div class="container">
        <div class="row">
        <?php include("template/skills.html"); ?>
        </div>
      </div>
      </div>
    </div>
    <!-- Fim Estrutura Sobre -->


    <!-- Estrutura Redes Sociais -->

    <div class="col-sm-3">
      <div class="sociais">
          <?php include("template/redes.html"); ?>
      </div>
    </div>
    <!-- Fim Estrutura Redes Sociais -->


  </div>
</div>
<!-- Fim Estrutura Sobre + Redes Sociais -->


<!-- Estrutura Projetos  -->
<div class="container">
  <div class="row">
  <?php include("template/projetos.html"); ?>
  </div>
</div>
<!-- Fim Estrutura Projetos -->


<!-- Estrutura Contato  -->
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <div class="box">
        <div class="box-content">
          <?php include("template/contato.html"); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fim Estrutura Contato -->

<!-- Fim do Corpo do Site  -->
<?php
// Rodapé
include("template/footer.html");
?>