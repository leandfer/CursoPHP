<?php

    $hierarquia = array(
        array(
            'nome_cargo' => 'CEO',
            'subordinados' => array(
                //inicio: diretor comercial
                array(
                    'nome_cargo' => 'Diretor Comercial',
                    'subordinados' => array(
                        //Inicop: Gerente de Vendas
                        array(
                            'nome_cargo' => 'Gerente de Vedas'
                        )
                        //Termino: Gerente de Vendas
                    )
                ),
                //termino: diretor comercial
                //Inicio: Diretor Financeiro
                array(
                    'nome_cargo' => 'Diretor Financeiro',
                    'subordinados' => array(
                        //Inicio: Gerente de contas a Pagar
                        array(
                            'nome_cargo' => 'Gerente de Contas a Pagar',
                            'subordinados' => array(
                                //Inicio: Supervisor de Pagamentos
                                array(
                                    'nome_cargo' => 'Suporvisor de Pagamento'
                                )
                                //Termino: Supervisor de Pagamento
                            )
                        ),
                        //Termino: Gerente de contas a Pagar
                        //Inicio: Gerente de Compras
                        array(
                            'nome_cargo' => 'Gerente de Compras',
                            'subordinados' => array(
                                //Inicio: Supervisor de suprimentos
                                array(
                                    'nome_cargo' => 'Supervisor de Suprimentos'
                                )
                                //Termino: Supervisor de Suprimentos
                            )
                        )
                        //Termino Gerente de Compra
                    )
                )
                //Termino: Diretor Financeiro
            )
        )
    );

    function exibe($cargos){
        $html = "<ul>";

        foreach ($cargos as $cargo) {
            $html .="<li>";
            
            $html .= $cargo['nome_cargo'];

            if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0){
                $html .= exibe($cargo['subordinados']);
            }

            $html .= "</li>";
        }
        
        $html .= "</ul>";

        return $html;
    }


    echo exibe($hierarquia);


?>