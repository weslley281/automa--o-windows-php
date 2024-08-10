<?php
// Hora de desligamento desejada
$shutdownHour = 17;
$shutdownMinute = 50;

// Define o fuso horário para Cuiabá
date_default_timezone_set('America/Cuiaba');

$nowHour = (int)date('H');
$nowMinute = (int)date('i');

// Calcula o tempo restante até a hora de desligamento
$nowTotalMinutes = $nowHour * 60 + $nowMinute;
$shutdownTotalMinutes = $shutdownHour * 60 + $shutdownMinute;

if ($shutdownTotalMinutes <= $nowTotalMinutes) {
    $shutdownTotalMinutes += 1440; // Adiciona 24 horas em minutos
}

$minutesUntilShutdown = $shutdownTotalMinutes - $nowTotalMinutes;

// Converte o tempo restante para segundos
$secondsUntilShutdown = $minutesUntilShutdown * 60;

// Comando para agendar o desligamento
$command = "shutdown -s -t " . $secondsUntilShutdown;

// Executa o comando
exec($command);

echo "O computador será desligado em " . $minutesUntilShutdown . " minutos.\n";
