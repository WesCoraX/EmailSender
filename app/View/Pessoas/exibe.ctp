<?php

//echo "its Alive !!!";
echo "Enviar para ".$this->Html->link("TODOS",'/messages/enviaautomatico/').'(com delay automatico)';
echo  '</br></br>';
echo "Enviar para ".$this->Html->link("TODOS",'/messages/enviapausado/').'(pausa manual)';
echo  '</br></br>';
echo "Enviar para ".$this->Html->link("TODOS",'/messages/enviaaomesmotempo/')." (Compor email em massa)";
echo  '</br></br>';

foreach($pessoas as $pessoa){
    echo "ID: ".$pessoa['Pessoa']['id']."</br>";
    echo "Nome: ".$pessoa['Pessoa']['nome']."</br>";
    echo "CPF: ".$pessoa['Pessoa']['cpf']."</br>";
    echo "Email Principal: ".$pessoa['Contato']['emailprincipal']."</br>";
    echo $this->Html->link("Enviar email",'/messages/envia/'.$pessoa['Pessoa']['id']);
    
    
    echo "</br></br>";
    
}
