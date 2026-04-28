<?php
 
while ( $opcao != 6){
    echo "Politica de segurança da informação(PSI)\n";
    echo "escolha qual conteúdo deseja aprender\n 1. Objetivos da PSI\n 2. Escopo da política\n 3. Responsabilidades\n 4. Boas práticas de segurança\n 5. Consequências do descumprimento\n 6. Sair \n";
 
    echo $opcao = readline("digite sua opção");
 
    switch ($opcao){
        case 1:
echo "Objetivos da PSI
 A Política de Segurança da Informação, tem como principal objetivo de protegem as informações e sistemas de ataques externos. Baseando-se principalmente nesses três conceitos
• A confidencialidade garante que a informação seja acessível apenas a pessoas autorizadas, protegendo dados sensíveis contra acessos não autorizados;
• A integridade visa assegurar que a informação seja precisa e confiável, protegendo contra alterações não autorizadas e mantendo a veracidade dos dados;
• A disponibilidade garante que a informação esteja acessível quando necessário, evitando interrupções e garantindo acesso contínuo aos usuários autorizados.\n";
            break;
        case 2:
echo "Escopo da política
 O escopo abrange todos os colaboradores, terceiros, sistemas, redes e informações físicas ou digitais, visando a conformidade legal e gestão de riscos.
•Recursos Humanos: Normas de uso seguro para funcionários e terceiros.
•Ativos de Informação: Dados físicos (papel) e digitais (banco de dados, e-mails, nuvem).
•Segurança Física: Proteção de instalações e equipamentos.
•Gestão de Incidentes: Procedimentos para responder a quebras de segurança.
•Controle de Acesso: Definição de quem pode acessar quais informações.\n";
            break;
        case 3:  
            echo "Responsabilidade
• Alta Gestão: Comprometimento em prover recursos, definir diretrizes estratégicas e apoiar a gestão de riscos.
• Colaboradores (Usuários): Seguir as normas da PSI, participar de treinamentos, proteger credenciais e reportar incidentes imediatamente.
• Gestores/Administradores: Garantir a segregação de funções para evitar uso indevido de ativos e monitorar o ambiente.
• Terceiros/Prestadores de Serviço: Cumprir as normas de segurança contratadas\n";
            break;
        case 4:
            echo "Boas Práticas de Segurança da Informação (Baseadas em normas como ISO 27002):
• Controle de Acesso: Implementar política de menor privilégio, onde usuários acessam apenas o necessário para suas funções.
• Autenticação Forte: Uso obrigatório de senhas complexas e autenticação de múltiplos fatores (MFA).
• Gestão de Vulnerabilidades: Realizar atualização de software automáticas (patches) e realizar testes de intrusão regulares.
• Backup e Recuperação: Manter backup regulares e testados, com cópias inalteráveis (off-site ou nuvem).
• Segurança Física: Controle de acesso a áreas com servidores e estações de trabalho.
• Conscientização: Treinamento contínuo dos funcionários sobre pishing e engenharia social.
• Resposta a Incidentes: Ter um plano de ação claro para detecção e resposta rápida a ataques.\n";
            break;
        case 5:
echo "Consequências do Descumprimento da PSI
O desrespeito às políticas de segurança pode resultar em consequências em diversas esferas:
• Sanções Administrativas e Legais (LGPD): O não cumprimento da LGPD pode acarretar multas de até 2% do faturamento, limitadas a R$ 50 milhões por infração, além de advertências e publicização da infração.
• Interrupção de Atividades: Ações da ANPD podem bloquear ou eliminar dados pessoais, suspendendo parcial ou totalmente o tratamento de dados pela empresa.
• Prejuízos Financeiros Diretos: Ataques cibernéticos, como ransomware e phishing, facilitados por falhas de segurança, resultam em custos elevados de recuperação, interrupção de negócios e resgates.
• Danos à Reputação e Imagem: O vazamento de dados de clientes e parceiros pode destruir a confiança na marca, levando à perda de clientes e oportunidades de mercado.
• Ações Judiciais: Empresas podem ser processadas por titulares de dados cujas informações foram expostas, resultando em indenizações.
• Punições Trabalhistas: O funcionário que descumprir as regras da PSI pode sofrer medidas disciplinares, incluindo advertências, suspensões ou demissão por justa causa, dependendo da gravidade e da reincidência.\n";
            break;
 
            default;
            break;
    }
 
}
 
?>