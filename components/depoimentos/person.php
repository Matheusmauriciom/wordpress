<?php
// Primeiro, obtenha o grupo de campos "Depoimentos"
$grupo_depoimentos = get_field('depoimentos');

// Depois, acesse o repetidor dentro do grupo
$depoimentos = $grupo_depoimentos['repetidor_depoimentos'];
    
    foreach ($depoimentos as $depoimento) {
        // Acesse cada subcampo dentro do repetidor
        $nome = $depoimento['nome'];
        $meu_depoimento = $depoimento['meu_depoimento'];
        $data = $depoimento['data'];
        ?>

            <section class="teste">
            <div>
                <!-- Exibe o nome -->
                <h2><?php echo esc_html($nome); ?></h2>
                
                <!-- Exibe o depoimento -->
                <p><?php echo esc_html($meu_depoimento); ?></p>
                
                <!-- Exibe a data -->
                <span><?php echo esc_html($data); ?></span>
            </div>
        </section>

        <?php
    }

?>
