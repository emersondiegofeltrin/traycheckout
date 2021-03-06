<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace edfdans\traycheckout;

/**
 * Description of TrayCheckoutRetorno
 *
 * @author Emerson
 */
class TrayCheckoutRetorno {
    
    /**
     * Status da transação
     * @var string
     */
    private $status = '';
    /**
     * ID da transação
     * @var string
     */
    private $transacao = '';
    /**
     * Token da transação
     * @var string
     */
    private $token = '';
    /**
     * URL para pagamento
     * @var string
     */
    private $url = '';
    /**
     * Linha digitável boleto
     * @var string
     */
    private $linhaDigitavel = '';
    /**
     * XML do retorno
     * @var string
     */
    private $xml = '';
    /**
     * Lista de erros
     * @var array
     */
    private $erros = [];
    
    /**
     * Adiciona e retorna a lista de erros
     * 
     * @param string $valor [opcional]
     * @return (array)
     */
    public function erros($valor = null) {
        
        if (!is_null($valor)) {
            array_push($this->erros, $valor);
        } else {
            return $this->erros;
        }
        
    }
    
    /**
     * Atribui e retorna o status da transação
     * 
     * @param string $valor [opcional]
     * @return (string)
     */
    public function status($valor = null) {
        
        if (!is_null($valor)) {
            $this->status = $valor;
        } else {
            return $this->status;
        }
        
    }
    
    /**
     * Atribui e retorna o ID da transação
     * 
     * @param string $valor [opcional]
     * @return (string)
     */
    public function transacao($valor = null) {
        
        if (!is_null($valor)) {
            $this->transacao = $valor;
        } else {
            return $this->transacao;
        }
        
    }
    
    /**
     * Atribui e retorna o token da transação
     * 
     * @param string $valor [opcional]
     * @return (string)
     */
    public function token($valor = null) {
        
        if (!is_null($valor)) {
            $this->token = $valor;
        } else {
            return $this->token;
        }
        
    }
    
    /**
     * Atribui e retorna a URL para pagamento
     * 
     * @param string $valor [opcional]
     * @return (string)
     */
    public function url($valor = null) {
        
        if (!is_null($valor)) {
            $this->url = $valor;
        } else {
            return $this->url;
        }
        
    }
    
    /**
     * Atribui e retorna a linha digitável para pagamento do boleto
     * 
     * @param string $valor [opcional]
     * @return (string)
     */
    public function linhaDigitavel($valor = null) {
        
        if (!is_null($valor)) {
            $this->linhaDigitavel = $valor;
        } else {
            return $this->linhaDigitavel;
        }
        
    }
    
    /**
     * Atribui e retorna o xml do retorno
     * 
     * @param string $valor [opcional]
     * @return (string)
     */
    public function xml($valor = null) {
        
        if (!is_null($valor)) {
            $this->xml = $valor;
        } else {
            return $this->xml;
        }
        
    }
    
}
