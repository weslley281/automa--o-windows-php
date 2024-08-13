@echo off
rem Chama o script PHP para agendar o desligamento
php C:\automacao_windows_php\abrir_olimpobasic.php
timeout /t 2 /nobreak >nul
php C:\automacao_windows_php\abrir_sites.php
timeout /t 2 /nobreak >nul
php C:\automacao_windows_php\desligar.php
rem Espera uma tecla ser pressionada antes de fechar a janela
pause
