<?php
setlocale(LC_ALL, 'pt_BR');
if (isset($_POST['especialidade']) && !empty($_POST['especialidade']) && isset($_POST['localidade']) && !empty($_POST['localidade']) && isset($_POST['exame']) && !empty($_POST['exame'])) {

    $especialidade = $_POST['especialidade'];
    $localidade     = $_POST['localidade'];
    $exame = $_POST['exame'];
    $clinicas = list_of_clinicas($especialidade, $localidade, $exame);
    echo clinicasHtml($clinicas);
}

function iconvLowerString($string)
{
    return strtolower(iconv("UTF-8", "ASCII//TRANSLIT", $string));
}

// Função que pega o arquivo em JSON e transforma-o em uma lista (filtrada ou não)
function list_of_clinicas($especialidade, $localidade, $exame)
{
    $clinicas = '';
    $file = __DIR__ . '/assets/json/clinicas.json';
    $content = file_get_contents($file);
    $clinicas = json_decode($content, true, 512, JSON_UNESCAPED_UNICODE);
    $lowerEsp = iconvLowerString($especialidade);
    $lowerLocal = iconvLowerString($localidade);
    $lowerExam = iconvLowerString($exame);

    if ($lowerEsp === "todas" && $lowerLocal === "todas" && $lowerExam == "todas") {
        return $clinicas;
    } else if ($lowerEsp === "todas" && $lowerExam === "todas") {
        return array_filter($clinicas, function ($clinica) use ($lowerLocal) {
            return strpos(iconvLowerString($clinica['endereco']), $lowerLocal) !== false;
        });
    } else if ($lowerLocal === "todas" && $lowerExam === "todas") {
        return array_filter($clinicas, function ($clinica) use ($lowerEsp) {
            return is_array($clinica['especialidades']) && in_array($lowerEsp, array_map('iconvLowerString', $clinica['especialidades']), true);
        });
    } else if ($lowerLocal === "todas" && $lowerEsp === "todas") {
        return array_filter($clinicas, function ($clinica) use ($lowerExam) {
            return is_array($clinica['exames']) && in_array($lowerExam, array_map('iconvLowerString', $clinica['exames']), true);
        });
    } else if ($lowerEsp === "todas") {
        return array_filter($clinicas, function ($clinica) use ($lowerExam, $lowerLocal) {
            return ((strpos(iconvLowerString($clinica['endereco']), $lowerLocal) !== false) && is_array($clinica['exames']) && in_array($lowerExam, array_map('iconvLowerString', $clinica['exames']), true));
        });
    } else if ($lowerExam === "todas") {
        return array_filter($clinicas, function ($clinica) use ($lowerEsp, $lowerLocal) {
            return ((strpos(iconvLowerString($clinica['endereco']), $lowerLocal) !== false) && is_array($clinica['especialidades']) && in_array($lowerEsp, array_map('iconvLowerString', $clinica['especialidades']), true));
        });
    } else if ($lowerLocal === "todas") {
        return array_filter($clinicas, function ($clinica) use ($lowerEsp, $lowerExam) {
            return ((is_array($clinica['especialidades']) && in_array($lowerEsp, array_map('iconvLowerString', $clinica['especialidades']), true)) && (is_array($clinica['exames']) && in_array($lowerExam, array_map('iconvLowerString', $clinica['exames']), true)));
        });
    } else {
        return array_filter($clinicas, function ($clinica) use ($lowerEsp, $lowerExam, $lowerLocal) {
            return ((is_array($clinica['especialidades']) && in_array($lowerEsp, array_map('iconvLowerString', $clinica['especialidades']), true)) && (is_array($clinica['exames']) && in_array($lowerExam, array_map('iconvLowerString', $clinica['exames']), true)) && (strpos(iconvLowerString($clinica['endereco']), $lowerLocal) !== false));
        });
    }
}

// Função que retorna as tags em HTML prontas para serem chamadas via ECHO na página.
function clinicasHtml($clinicas)
{
    $str = '';
    foreach ($clinicas as $cli) {
        $str .= '<div class="row mt-3">';
        $str .= '<div class="col-md-12">' . '<h5>' . $cli['nome'] . '</h5>' . '</div>';
        $str .= '</div>';
        $str .= '<div class="row mt-1">';
        $str .= '<div class="col-md-7"><h6>Endereço</h6></div>';
        $str .= '<div class="col-md-3"><h6>Telefone</h6></div>';
        $str .= '</div>';
        $str .= '<div class="row mt-1">';
        $str .= '<div class="col-md-7">' . '<p>' . $cli['endereco'] . '</p>' . '</div>';

        //!Cada foreach serve para colocar o hífen [-] entre os telefones/palavras
        $telefones = '';
        foreach ($cli['telefone'] as $key => $phone) {
            $telefones .= $phone;
            if ($key !== array_key_last($cli['telefone'])) {
                // Se quiser trocar o que aparecerá entre os telefones, mude a string seguinte
                $telefones .= ' - ';
            }
        }
        $str .= '<div class="col-md-3">' . '<p>' . $telefones . '</p>' . '</div>';
        $str .= '</div>';

        if (!empty($cli['especialidades'])) {
            $str .= '<div class="row mt-1">';
            $str .= '<div class="col-md-12"><h6>Especialidades</h6></div>';
            $str .= '</div>';
            $especialidades = '';
            foreach ($cli['especialidades'] as $key => $esp) {
                $especialidades .= $esp;
                if ($key !== array_key_last($cli['especialidades'])) {
                    // Se quiser trocar o que aparecerá entre as especialidades, mude a string seguinte
                    $especialidades .= ' - ';
                }
            }
            $str .= '<div class="row mt-1">';
            $str .= '<div class="col-md-12">' . '<p>' . $especialidades . '</p>' . '</div>';
            $str .= '</div>';
        }

        if (!empty($cli['exames'])) {
            $str .= '<div class="row mt-1">';
            $str .= '<div class="col-md-3"><h6>Exames</h6></div>';
            $str .= '</div>';
            $exames = '';
            foreach ($cli['exames'] as $key => $exa) {
                $exames .= $exa;
                if ($key !== array_key_last($cli['exames'])) {
                    // Se quiser trocar o que aparecerá entre os exames, mude a string seguinte
                    $exames .= ' - ';
                }
            }
            $str .= '<div class="row mt-1 mb-3">';
            $str .= '<div class="col-md-12">' . '<p>' . $exames . '</p>' . '</div>';
            $str .= '</div>';
        }
    }
    return $str;
}