<?php
$hierarquia= array(
        array(
            "nome_cargo"=>"CEO",
            "subordinados"=>array(
                //inicio: Diretor: Diretor Comercial 
                array(
                      "nome_cargo"=>"Diretor Comercial",
                      "subordinados"=>array(
                            //inicio gerente de vendas
                            array(
                            "nome_cargo"=>"Gerente de vendas"
                                )
                                 //Termino gerente de vendas
                            )
                    ),
                    //Termino diretor comercial
                    //Inicio diretor financeiro
                    array(
                        "nome_cargo"=>"Diretor financeiro",
                        "subordinados"=>array(
                            //Inicio gerente de contas a pagar
                            array(
                                'nome_cargo'=> "Gerente de contas a pagar",
                                'subordinados'=>array(
                                                //inicio supervisor de pagamentos
                                                array(
                                                'nome_cargo'=>"supervisor de pagamentos"
                                                    )
                                                    //Termino supervisor de pagamentos
                                                )
                                                  
                                            ),
                                            //Fim gerente de contas a pagar
                                            //inicio gerente de compras
                                            array(
                                                'nome_cargo' => 'Gerente de compras',
                                                'subordinados'=> array(
                                                    //inicio supervisor de suprimentos
                                                    array(
                                                    'nome_cargo'=>'Supervisor de suprimentos'
                                                    )
                                                    //Término supervisor de suprimentos
                                                )
                                                
                                            )
                                            //Término gerente de compras
                                        )
                            )
                            //Termino diretor financeiro
                    )
            )
            //Termino CEO
        
    );

/*
echo '<pre>';
print_r($hierarquia);
echo '</pre>';*/

function exibeCargos($cargos)
{
    $html="<ul>";

    foreach($cargos as $cargo)
    {
        $html.="<li>";
        $html.=$cargo['nome_cargo'];
        
        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0 )
        {
            //recursão
            $html.=exibeCargos($cargo['subordinados']);
        }
        
        $html.="</li>";
    }
  
    $html.="</ul>";

    return $html;
}

echo exibeCargos($hierarquia);