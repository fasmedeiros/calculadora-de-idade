<?php
namespace App\Util;

use DateTime;

class CalculadoraDeIdade
{
    /**
     * Calcula a idade com base na data de nascimento e retorna a idade em anos, meses e dias.
     * 
     * @param string $dataNascimento Data de nascimento no formato 'YYYY-MM-DD'.
     * @return string A idade calculada em anos, meses e dias, ou tempo até o nascimento/gravidez.
     */
    public static function calcular($dataNascimento)
    {
        // Cria um objeto DateTime com a data de nascimento
        $dataNascimento = new DateTime($dataNascimento);
        
        // Obtém a data atual
        $dataAtual = new DateTime();
        
        // Calcula a diferença entre a data atual e a data de nascimento
        $diferenca = $dataAtual->diff($dataNascimento);
        
        // Verifica se a data de nascimento é igual à data atual
        if ($diferenca->y == 0 && $diferenca->m == 0 && $diferenca->d == 0) {
            return 'Dia do nascimento.';
        }
        
        // Verifica se a data de nascimento é no futuro (idade negativa)
        if ($dataNascimento > $dataAtual) {
            return self::formatarTempoFuturo($diferenca);
        }
        
        // Se a data de nascimento é no passado
        return self::formatarGravidez($diferenca);
    }

    /**
     * Formata o tempo até o nascimento se a data de nascimento for no futuro.
     * 
     * @param DateInterval $diferenca Diferença entre as datas.
     * @return string Tempo até o nascimento formatado.
     */
    private static function formatarTempoFuturo($diferenca)
    {
        $meses = $diferenca->m;
        $dias = $diferenca->d;
        
        $mesTexto = ($meses == 1) ? 'mês' : 'meses';
        $diaTexto = ($dias == 1) ? 'dia' : 'dias';
        
        $tempoFuturo = '';
        if ($meses > 0) {
            $tempoFuturo .= $meses . ' ' . $mesTexto;
        }
        if ($dias > 0) {
            if (!empty($tempoFuturo)) $tempoFuturo .= ' e ';
            $tempoFuturo .= $dias . ' ' . $diaTexto;
        }
        
        // Se o tempo futuro estiver vazio, significa que é menos de um dia
        if (empty($tempoFuturo)) {
            $tempoFuturo = 'menos de um dia';
        }
        
        return 'em ' . $tempoFuturo;
    }

    /**
     * Formata a idade como tempo de gravidez se a data de nascimento for no passado.
     * 
     * @param DateInterval $diferenca Diferença entre as datas.
     * @return string Tempo de gravidez formatado.
     */
    private static function formatarGravidez($diferenca)
    {
        $meses = $diferenca->m;
        $dias = $diferenca->d;
        
        $mesTexto = ($meses == 1) ? 'mês' : 'meses';
        $diaTexto = ($dias == 1) ? 'dia' : 'dias';
        
        $gravidez = '';
        if ($meses > 0) {
            $gravidez .= $meses . ' ' . $mesTexto;
        }
        if ($dias > 0) {
            if (!empty($gravidez)) $gravidez .= ' e ';
            $gravidez .= $dias . ' ' . $diaTexto;
        }
        
        // Se a gravidez estiver vazia, significa que é menos de um dia
        if (empty($gravidez)) {
            $gravidez = 'menos de um dia';
        }
        
        return 'Gravidez restando ' . $gravidez . '.';
    }
}
